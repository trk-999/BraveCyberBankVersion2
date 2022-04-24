<!DOCTYPE html>
<html>

<head>
   
    
    
    <title>Create User</title>
    <!---These are links to boostrap and css files in the project -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
 

  </head>
  <!---isset() function is used to check if a variable has been set or not 
  isset( $_POST['submit'] ) : This line checks if the form is submitted using the isset() function, but works only if the form input type submit has 
  a name attribute (name="submit").-->

<body style="background-color: gray;">
<?php
    include 'config.php';
    
    if(isset($_POST['submit'])){
    //PHP $_POST is a PHP super global variable which is used to collect form data after submitting an HTML 
    //form with method="post". $_POST is also widely used to pass variables.
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Congrats. Your account has been created. Now, you will be directed to the money transfer page');
                               window.location='fundtransfer.php';
                     </script>";
                    
    }
  }
?>

<?php
  
  include 'navbar-4.php';

?>

        <h2 class="text-center pt-3" style="color : #800020;">Create a User</h2>
        <br>

  <div class="background">
  
    <div class="container">
  
      <div class="screen">
        
          <div class="screen-header">
        
              <div class="screen-header-right">
          
                <div class="screen-header-ellipsis"></div>
          
                  <div class="screen-header-ellipsis"></div>
          
                    <div class="screen-header-ellipsis"></div>
                        </div>
                          </div>
      <div class="screen-body">
        

      <!--This form posts the data needed for the users databse in bravebank --> 
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Enter your name" type="text" name="name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Enter your email" type="email" name="email" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Enter your balanace"  min="1" max="1000000000000"type="number" name="balance" required>
            </div>
            <br>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="Create your account" name="submit"></input>
              <input class="app-form-button" type="reset" value="Restart" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="text-center mt-5 py-3">
<p><a href="home.php">Log Out</a></p>
</footer>

</body>
</html>


