<?php
require_once('/model/userModel.php');

try {
    $db = new Database();
    $conn = $db->getConnection();

    if (isset($_GET['id'])) {
        $id = (int) $_GET['id'];

        $query = "DELETE FROM users WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo "User deleted successfully.";
        } else {
            echo "Failed to delete user.";
        }
    } else {
        echo "No user ID provided.";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
