<?php

function get_connection(){

    $conn = mysqli_connect("127.0.0.1", "root", "", "final_lab_exam" );
    return $conn;
}



function addUser($name, $contact, $username, $password)
{
    $conn = get_connection();
    $sql = "insert into users values (name, contact, username, password) VALUES (?, ?, ?, ?)";
    //$result = mysqli_query($conn, $sql);
    //return $result;
	$stmt = $conn->prepare($sql); // Use prepared statements for security

    if ($stmt === false) {
        die("SQL prepare failed: " . $conn->error); // Debugging error
    }

    $stmt->bind_param("sss", $username, $hashedPassword, $email);

    if ($stmt->execute()) {
        return true; // User successfully added
    } else {
        die("SQL execute failed: " . $stmt->error); // Debugging error
    }

    return false; // User addition failed
}



function login($username, $password){
    $conn = get_connection();
    $sql = "select * from users where username = '{$username}' and password = '{$password}'";
    $result = mysqli_query($conn, $sql);
    $row_count = mysqli_num_rows($result);
    if($row_count > 0){
        return true;
    }
    else{
        return false;
    }
}

// Function to get user ID
function getUserID($username, $password) {
    $conn = getConnection();
    $sql = "SELECT id, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            return $user['id']; // Return user ID if password matches
        }
    }

    $stmt->close();
    $conn->close();
    return null; // User not found or password doesn't match
}


// Fetch all users
function getAllUsers() {
    $conn = getConnection();
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    $users = $result->fetch_all(MYSQLI_ASSOC);
    $conn->close();
    return $users;
}

// Update user profile
function updateUser($id, $name, $email, $status) {
    $conn = getConnection();
    $sql = "UPDATE users SET username = ?, email = ?, status = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $name, $email, $status, $id);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    return true;
}

// Delete user
function deleteUser($id) {
    $conn = getConnection();
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    return true;
}
?>
