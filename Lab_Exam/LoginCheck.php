
        <?php 
            if(isset($_POST['submit'])){
                $email = trim($_POST['username']);

                if($username == null || empty($password)){
                    echo "Null username/password";
                }else if($username == $password){       
                    $_SESSION['xyz'] = true;
                    header('location: Home.html');
                }else{
                    echo "Invalid user!";
                }
            }else{
                header('location: Registration.php');

            }
        ?>
    </body>
</html>