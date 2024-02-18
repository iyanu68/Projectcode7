

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
        
        <div class = "container-fluid" style = "background:rgb(26, 25, 25);  border-radius:0.5em; color:white; font-weight: bold; font-size:0.8em; margin-top:2em; margin-bottom:3em; margin-left:30em; margin-right:30em; width:30%; padding-left:1.5em; padding-right:1.5em; border: 1px solid black;" >
            
            <img src="assets/music7.jpg" style="width: 110%; margin-top: 0.5em; height: 15em; margin-left:-1em; background: none; margin-bottom:1em;"/>

                

                <form action="signindb.php" method="POST">
                    
                    <div class = form-group>

                        <label for ="email"></label>
                        <input type = "email" class = "form-control" name = "email" id = "email" placeholder = "Enter your email" /><br>
                        
                      

                       

                    </div>
                   
               
                
                    <button class="btn btn-primary" type="submit" style="padding-left:1.8em; padding-top:1em; padding-bottom:1em; padding-right:2em;color:black; font-size:1.2em; font-weight:bold; border-radius:5em; border:none 1px black; margin-top:-1em; margin-bottom:1em; background:rgb(228, 171, 1); margin-left:6em;">Continue</button>
                    <label style = "text-align:center;">By signing into our audiomack you agree to our <a href="#" style = "color:rgb(211, 124, 54);">Terms of Service</a> and <a href = "#" style = " color:rgb(211, 124, 54);"> Privacy Policy</a></label>
           
                </form> 
                <p style = "margin-left:5em; margin-top:1em;"><a href = "#" style = "color:rgb(211, 124, 54);"> Having trouble signing in? </a> </p>
        </div>
        
        
    </body>
</html>