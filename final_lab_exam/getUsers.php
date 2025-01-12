<?php
// getUsers.php
require_once('/model/userModel.php');

try {
    $db = new Database();
    $conn = $db->getConnection();

    // Check if a search parameter is provided
    $name = isset($_GET['name']) ? trim($_GET['name']) : '';

    if (!empty($name)) {
        // Query to search users by name
        $query = "SELECT id, name, email FROM users WHERE name LIKE :name";
        $stmt = $conn->prepare($query);
        $searchParam = "%" . $name . "%";
        $stmt->bindParam(':name', $searchParam, PDO::PARAM_STR);
    } else {
        // Query to fetch all users
        $query = "SELECT id, name, email FROM users";
        $stmt = $conn->prepare($query);
    }

    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Display users in an HTML table
    if ($users) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Action</th></tr>";
        foreach ($users as $user) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($user['id']) . "</td>";
            echo "<td>" . htmlspecialchars($user['name']) . "</td>";
            echo "<td>" . htmlspecialchars($user['email']) . "</td>";
            echo "<td><a href='editUser.php?id=" . htmlspecialchars($user['id']) . "'>Edit</a></td>";
            echo "<td><a href='delete.php?id=" . htmlspecialchars($user['id']) . "'>Delete</a></td>";
            echo "<td><a href='addUser.html?id=" . htmlspecialchars($user['id']) . "'>Add</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No users found.";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
