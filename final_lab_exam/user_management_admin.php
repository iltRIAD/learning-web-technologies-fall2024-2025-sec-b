<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- Link to the external CSS file -->
    <title>Employee Management</title>
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <h1>Employee Management System</h1>
            <div class="flex items-center" style="margin-left: 1220px; ">

            </div>
        </div>
    </header>

    <div class="container">
        <!-- Search Section -->
        <div class="search-container">
            <input type="text" id="search-bar" class="form-control" placeholder="Search Users by Name...">
            <button id="search-button" class="btn btn-success">Search</button>
        </div>

        <!-- Button Section
        <div class="button-container">
            <button id="user-info-btn" class="btn btn-primary">User Information</button>
        </div> -->

        <!-- User Information Section -->
        <div id="user-info" class="user-info-container">
            <!-- User data will appear here -->
        </div>
		<div>
		 <a href='login.html' > Logout </a>
		</div>
    </div>

    <script>
        // Fetch and display all users
        function fetchUsers(searchQuery = '') {
            let url = searchQuery ? `getUsers.php?search=${searchQuery}` : 'getUsers.php';
            fetch(url)
                .then(response => response.text())  // Handle as text instead of JSON
                .then(data => {
                    if (data) {
                        document.getElementById('user-info').innerHTML = data;
                    } else {
                        document.getElementById('user-info').innerHTML = `<p>No users found.</p>`;
                    }
                })
                .catch(error => {
                    document.getElementById('user-info').innerHTML = `<p>Error fetching users: ${error.message}</p>`;
                });
        }

        // Event listener for "User Information" button
        document.getElementById('user-info-btn').addEventListener('click', function () {
            fetchUsers();
        });

        // Event listener for the search button
        document.getElementById('search-button').addEventListener('click', function () {
            const searchQuery = document.getElementById('search-bar').value;
            fetchUsers(searchQuery);
        });
    </script>
</body>
</html>
