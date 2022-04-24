<?php
  
$conn = "";
   
try {
    $servername = "localhost:3306"; //This was used to connect to MySQL the classic way as 3306 is the port number. 
    $dbname = "bravebank"; //matching with the database name to ensure it's correct. 
    $username = "root";
    $password = "";
    /*
    The password hash is used during new passwords being used
    with the blowfish hashing algorithim. PASSWORD_DEFAULT
    is there in case if there would be found a stronger 
    hashing algorithim to be used in its place.
    */
    $hash = password_hash($password, PASSWORD_DEFAULT);

    password_verify($password, $hashed_password); //To note in case for explanation, password_verify that password and hashed password match up correctly. 
    //The if statement here is provided to test out and provide explanation for invalid passwords. 
    if (!password_verify($password, $hash)) {
        echo 'The password is invalid';
        exit;
    }
    //PDO represents the connection between the database erever along with the PHP code.
    $conn = new PDO(
        "mysql:host=$servername; dbname=loginPage",
        $username, $password
    );
    //setAttribute in PHP uses given names to given values during
    //the hash log-in and register. ATTR_ERRMODE is used to report any errors with the PDO
    //
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION); //The exception here was useful while debugging to ensure any possible mistakes with the erros in code and any information.
}   //The catch statement ends with error message detailing why the error was made. 
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
  