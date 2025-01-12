<?php
require_once('/model/userModel.php');

try {
    $db = new Database();
    $conn = $db->getConnection();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = (int) $_POST['id'];
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);

        $query = "UPDATE users SET name = :name, email = :email WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo "User updated successfully.";
        } else {
            echo "Failed to update user.";
        }
    } elseif (isset($_GET['id'])) {
        $id = (int) $_GET['id'];
        $query = "SELECT * FROM users WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!-- HTML Form for Editing User -->
<?php if (!empty($user)): ?>
<form method="POST" action="editUser.php">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($user['id']); ?>">
    <label>Name:</label>
    <input type="text" name="name" value="<?php echo htmlspecialchars($user['name']); ?>">
    <label>Email:</label>
    <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>">
    <button type="submit">Update</button>
</form>
<?php else: ?>
<p>User not found.</p>
<?php endif; ?>
