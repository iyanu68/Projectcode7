<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if files were uploaded successfully
    if (isset($_FILES['musicFile'], $_FILES['coverArt']) &&
        $_FILES['musicFile']['error'] === UPLOAD_ERR_OK &&
        $_FILES['coverArt']['error'] === UPLOAD_ERR_OK) {
        
        // Define upload directories
        $musicDir = "uploads/music/";
        $coverArtDir = "uploads/coverart/";

        // Create upload directories if they do not exist
        if (!file_exists($musicDir)) {
            mkdir($musicDir, 0777, true); // Create directory recursively
        }
        if (!file_exists($coverArtDir)) {
            mkdir($coverArtDir, 0777, true); // Create directory recursively
        }

        // Database configuration
        $host = "localhost";
        $username = "store_admin";
        $password = "password1#";
        $database = "projectoutro";

        // Connect to the database
        $conn = new mysqli($host, $username, $password, $database);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Define file paths and escape them
        $musicPath = $musicDir . mysqli_real_escape_string($conn, basename($_FILES['musicFile']['name']));
        $coverArtPath = $coverArtDir . mysqli_real_escape_string($conn, basename($_FILES['coverArt']['name']));

        // Move uploaded files to the upload directories
        move_uploaded_file($_FILES['musicFile']['tmp_name'], $musicPath);
        move_uploaded_file($_FILES['coverArt']['tmp_name'], $coverArtPath);

        // Construct SQL query and insert records into the database
        $sql = "INSERT INTO uploaded_files (music_path, cover_art_path) VALUES ('$musicPath', '$coverArtPath')";
        if ($conn->query($sql) === TRUE) {
            echo "Files uploaded successfully and records inserted into the database.";
            
            // Set session variables to store uploaded file paths
            
        } else {
            echo "Error inserting records into the database: " . $conn->error;
        }

        // Close database connection
        $conn->close();
    } else {
        // Files not uploaded successfully
        echo "Error uploading files.";
    }
} else {
    // If not a POST request
    echo "Invalid request.";
    }

?>