


<?php

include 'head.php';


?>
<?php

        $host = "localhost";
        $username = "store_admin";
        $password = "password1#";
        $database = "projectoutro";
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve uploaded music and cover art files from the database
$sql = "SELECT * FROM uploaded_files";
$result = $conn->query($sql);
?>


<style>
        /* Style for the search box */
        #search {
            border-radius: 5em; /* Border radius */
            border: 0 solid black; /* Border color */
            background-color: black; /* Background color */
            color: white; /* Text color */
            font-size: 14px; /* Font size */
            padding: 5px 10px; /* Padding */
            width: 220px; /* Width of the search box */
            padding-left:2em;
            margin-left:7em;
            padding-top:0.6em;
            padding-bottom:0.6em;
            margin-top:1em;
            
        }
        ::placeholder {
            font-weight: bold; /* Make placeholder text bold */
        }

        #search:focus {
            border-color: black; /* Change border color when in focus */
        }

       

    </style>



<body style = " background:black;">
    <div class = "container-fluid" style = "rgb(24, 17, 17); border:0.5px solid rgb(178, 177, 172); width:100%; padding-bottom:1em; margin-top:0.1em;">
        <img src = "assets/music1.svg" id = "asset" style = "color:rgb(232, 173, 24); font-size:3em; padding-left:0.1em; ">
        <label for="search"></label>
        <input type="text" id="search" name="q" placeholder = "Search for artists, songs, album"/>
       
        
            <a href = "#" style = "color:rgb(232, 145, 15); margin-left:2em; margin-right:2em; font-weight:bold;" id = "discover">DISCOVER</a>
            <a href = "#" style = "color:white; margin-right:2em; font-weight:bold;" id = "playlists">PLAYLISTS </a>
            <a href = "#" style = "color:white; margin-right:2em; font-weight:bold;" id = "originals">ORIGINALS </a>
            
            <a href="logout.php" style="font-size: 1em; margin-top:1em; float:right; margin-right:3em; color:white; font-weight:bold;">Logout</a>
    </div>

    <img src = "assets/music8.jpg" style = "width:80%; margin-top:0.5em;"/>
    <p style = "color:white; margin-top:-5em; margin-bottom:3em; margin-left:5em; color:rgb(232, 145, 15); font-size:1.5em; font-weight:bold;"> Upload your music here:</p>
    

    

    <div class="container-fluid">
       
        <form id="uploadForm" enctype="multipart/form-data" style="color:white; margin-left:5em; margin-top:3em; margin-right:10em; color:rgb(232, 145, 15); font-weight:bold;">
            <input type="file" id="musicFile" name="musicFile" accept="audio/*" required>
            <input type="file" id="coverArt" name="coverArt" accept="image/*" required>
            
            <br>
            <button type="button" id="uploadBtn" style = "background:rgb(232, 145, 15); margin-top:1em; margin-bottom:3em; color: white; font-weight:bold; ">Upload</button>
        </form>
    </div>

    <div class="container-fluid" style = "margin-bottom:5em; margin-top:3em; ">
    <!-- Display uploaded music and cover art files -->
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div style="margin-bottom: 20px; margin-left:5em;">';
            echo '<div>';
            echo '<img src="' . $row['cover_art_path'] . '" style="width: 200px;">';
            echo '</div>';
            echo '<div>';
            echo '<audio controls style="width: 200px;">';
            echo '<source src="' . $row['music_path'] . '" type="audio/mp3">';
            echo 'Your browser does not support the audio element.';
            echo '</audio>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo 'No music files uploaded yet.';
    }
    ?>
</div>



    <script>
    $(document).ready(function() {
    // Add event listener for upload button click
    $('#uploadBtn').click(function() {
        var formData = new FormData();
        formData.append('musicFile', $('#musicFile')[0].files[0]);
        formData.append('coverArt', $('#coverArt')[0].files[0]);

        $.ajax({
            url: 'upload.php', // Your server-side script to handle uploads
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // Handle success, e.g., show a success message
                console.log('Upload successful:', response);
                // You can display a success message or redirect the user
                // window.location.href = 'success.php';
            },
            error: function(xhr, status, error) {
                // Handle errors
                console.error('Upload error:', error);
                // You can display an error message to the user
            }
        });
    });
});
    </script>
</body>
</html>