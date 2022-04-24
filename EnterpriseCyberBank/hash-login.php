<?php

$msg=""; //This will be used to deliver messages on the scree

/*
The $_POST here as the super global variable is collecting inputed data
for the variables passed. 
*/
if(isset($_POST['submit'])) {
    $con = new mysqli('localhost', 'root', '', 'bravebank'); //The new mysqli is openning the new connectionto the Bravebank MySQL server.

    
    $email = $con->real_escape_string($_POST['email']); //the real_escape_string is used here so that it can 
    $password = $con->real_escape_string($_POST['password']); //withdraw from the from the special characters typically used in SQL query
   //SELECT here ks gather the dating from id in hash users database, FROM recognizes password data from hash_users, and and the WHERE returns information
   //passed by the query regarding email.  
    $sql = $con->query("SELECT id, password FROM hash_users WHERE email='$email'");
    
    if ($sql->num_rows > 0){ //This will return the data rows from the server. 
        $data = $sql->fetch_array(); //fetch_array receives the row's data as an array. 
        if(password_verify($password, $data['password'])){ //password_verify used to matches the password and hash password correctly. 
            $msg = "You have successfully logged into the database, admin"; 
            echo '<a href="admin-home.php"><p align=center>(Click here to access your homepage) </p></a>';
            ;
    } else //The else statements are here to test out the issues whenver something wouldn't execute properly
        $msg =  "Incorrect. Check to make sure what you inputed is correct.";
} else 
 $msg = "Check to make sure what you put is correct for your email.";
   
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Bravebank / Secure log-in 

</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" 
integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="icon" type="image/x-icon" href="favicon.ico">

</head>

<div style="text-align: center">
        <a href="home.php">Home page</a>
</div>

<div style="text-align: center">
        <a href="hash-register.php">Admin register page</a>
</div>

<body style="background-color: #D8D8D8;">


    <div class="container" style="margin-top: 75px;">
        <div class="row justify-content-center">
            <div class="col-md-5 col-md-offset-3" text-align="center">
                <?php

                if ($msg != "") echo $msg ."<br><br>";

                ?>
            <img src="images/bravebank.jpg.png" width="370" height="375"> <br></br>
            
            <form method="post" action="hash-login.php">
               
                <input class="form-control" name="email" type="email" placeholder="Enter email here."> <br>  
                <input class="form-control" minlength="5" name="password" type="password" placeholder="Enter password here."> <br>
                
                <input class="btn btn-primary" name="submit" type="submit" value="Login by clicking here."> <br>


            </form>
    
    </div>


    
</body>
</html>

