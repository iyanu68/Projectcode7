
<?php
include 'head.php';
?>

<style>
.form-control {
        background-color:rgb(45, 39, 34);
        font-size:1em;
        font-weight:bold;
        height:45px;
        border:0 solid black;
        
}
</style>


<body style =  "background:black;">
        
        <div class = "container-fluid" style = "background:rgb(26, 22, 19);  border-radius:0.5em; color:white; font-weight: bold; font-size:0.8em; margin-top:2em; margin-bottom:3em; margin-left:30em; margin-right:30em; width:30%; padding-left:1.5em; padding-right:1.5em; border: 1px solid black;" >
            
            <img src="assets/music3.jpg" style="width: 70%; margin-top: 4em; margin-left: 2.8em; background: none; margin-bottom:1em;"/>

                

                <form action="signupdb.php" method="POST">
                    
                    <div class = form-group>

                        <label for ="email"> Email * </label>
                        <input type = "email" class = "form-control" name = "email" id = "email" placeholder = "Enter your email" /><br>
                        
                        <label for = "Username"> Choose a Username * </label>
                        <input type = "text" class = "form-control" name = "username" id = "username" placeholder = "Username"/><br>
                        
                        
                        <label for = "password"> Create a Password * </label>
                        <input type = "password" class = "form-control" name = "password" id = "password" placeholder = "Password"/><br>

                       

                    </div>
                    <label style = "text-align:center;">By signing up you agree to our <a href="#" style = "color:rgb(211, 124, 54);">Terms of Service</a> and <a href = "#" style = " color:rgb(211, 124, 54);"> Privacy Policy</a></label>
               
                
                    <button class="btn btn-primary" type="submit" style="padding-left:1.5em; padding-top:1em; padding-bottom:1em; padding-right:2em;color:black; font-size:1em; font-weight:bold; border-radius:5em; border:none 1px black; margin-top:1em; background:rgb(228, 171, 1); margin-left:9em;">Sign Up</button>
                    
           
                </form> 
                <p style = "margin-left:3.2em; margin-top:1em;"> Having trouble signing in? <a href = "#"> Contact Us </a> </p>
        </div>
        
        
    </body>
</html>