
<?php

$host = "localhost";

$username = "store_admin";

$password = "password1#";

$database = "projectoutro";

$conn = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_error()) {

    die("Connection failed: " . mysqli_connect_error());
}



$email = mysqli_real_escape_string($conn, $_POST['email']);

$username = mysqli_real_escape_string($conn, $_POST['username']);

$password = mysqli_real_escape_string($conn, $_POST['password']);


$query = "INSERT INTO project7 (email, username, password) 
          VALUES ('$email', '$username', '$password')";

$result = mysqli_query($conn, $query);

if (!$result) {

    echo "Query execution failed: " . mysqli_error($conn);

    die();

} else {

    echo '<div style="background-color: black; color: white; padding: 10px;">';

    echo "Account created successfully" . "<br>";
    

    echo '<a href="home.php">Go to sign in in home page</a>';

    echo '</div>';
    exit();
}

mysqli_close($conn);

?>