<?php
include 'head.php';
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
    <div class = "container-fluid" style = "rgb(24, 17, 17); border:0.5px solid rgb(178, 177, 172); width:100%; padding-bottom:0.3em; margin-top:0.1em;">
        <img src = "assets/music1.svg" id = "asset" style = "color:rgb(232, 173, 24); font-size:3em; padding-left:0.1em; ">
        <label for="search"></label>
        <input type="text" id="search" name="q" placeholder = "Search for artists, songs, album"/>
       
        
            <a href = "#" style = "color:rgb(232, 145, 15); margin-left:2em; margin-right:2em; font-weight:bold;" id = "discover">DISCOVER</a>
            <a href = "#" style = "color:white; margin-right:2em; font-weight:bold;" id = "playlists">PLAYLISTS </a>
            <a href = "#" style = "color:white; margin-right:2em; font-weight:bold;" id = "originals">ORIGINALS </a>
            
         <p><a href = "signup.php" style =  "float:right; padding-right:7em; margin-top:-1.7em; font-weight:bold; color:white; font-size:0.9em;">Create an account |    </a></p>
        <p><a href = "signin.php" style =  "float:right; padding-right:4em; margin-top:-2.85em; font-weight:bold; color:white; font-size:0.9em;">  Signin</a></p>
       
    </div>

    <img src = "assets/music2.jpg" style = "width:96%; background:none; margin-top:1.5em; margin-left:1.5em; "/>

    
</body>
</html>