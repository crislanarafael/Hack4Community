<?php
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'reup';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($name) && !empty($username) && !empty($email) && !empty($password) && !is_numeric($username)){
            //save to database
            $query = "insert into users (name, username, email, password) values ('$name', '$username', '$email', '$password')";

            mysqli_query($con, $query);

            header("Location: login.html");
            die;

        } else{
            echo "Please enter some valid information!";
        }
    }

?>