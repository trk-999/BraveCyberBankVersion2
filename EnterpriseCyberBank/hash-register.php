<?php

$msg="";

/*
The $_POST here as the super global variable is collecting inputed data
for the variables passed. 
*/
if(isset($_POST['submit'])) {
    $con = new mysqli('localhost', 'root', '', 'bravebank'); //The new mysqli is openning the new connectionto the Bravebank MySQL server.

    /*
    the real_escape_string below used here so that it can 
    withdraw from the from the special characters typically used in SQL query
    With data being inserted for the name, email, password, and password
    confirmation
    */

    $name = $con->real_escape_string($_POST['name']); 
    $email = $con->real_escape_string($_POST['email']);
    $password = $con->real_escape_string($_POST['password']);
    $confirmPassword = $con->real_escape_string($_POST['confirmPassword']);
    //The if statement is here to test out whenever there would be mistakes with passwords not matching up with password confirmation.
    if($password != $confirmPassword) 
    $msg = "Your passwords did not match. Try again.";
    //The else statements are here for successful registration inputs
    else {
        $hash = password_hash($password, PASSWORD_BCRYPT); //With password_hash, this will allow creation of a newly hashed
                                                           //password using Password_bycrpt algorithim where ""$2y$" will always be the first
                                                           //part of the password viewed from phpmyadmin. 
        $con->query("INSERT INTO hash_users (name,email,password) VALUES ('$name', '$email', '$hash')"); 
			$msg = "You have been registered!";
        /*
        THE SQL statement INSERT INTO is inputting new name, email, and giving the password the hash.
        */
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Secure Bravebank Register & Log-in 

</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" 
integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="icon" type="image/x-icon" href="favicon.ico">

</head>

<div style="text-align: center">
        <a href="home.php">Home page</a>
</div>

<div style="text-align: center">
        <a href="hash-login.php">Admin login page</a>
</div>




<body style="background-color: #D8D8D8;">


    <div class="container" style="margin-top: 75px;">
        <div class="row justify-content-center">
            <div class="col-md-5 col-md-offset-3" text-align="center">
                <?php

                if ($msg != "") echo $msg ."<br><br>";

                ?>
            <img src="images/bravebank.jpg.png" width="375" height="375"> <br></br>
            <!--This form is the main thing that will show up on screen for admin to type the needed information -->
            <form method="post" action="hash-register.php">
                <input class="form-control" minlength="3" name="name" placeholder="Enter name here."> <br>
                <input class="form-control" name="email" type="email" placeholder="Enter email here."> <br>  
                <input class="form-control" minlength="5" name="password" type="password" placeholder="Enter password here."> <br>
                <input class="form-control" minlength="5"name="confirmPassword" type="password" placeholder="Confirm your password here."> <br>
                <input class="btn btn-primary" name="submit" type="submit" value="Register by clicking here."> <br>


            </form>
            <div style="text-align: center">
        
</div>
    </div>

</body>
</html>

