<!DOCTYPE html>
<html>

<head>
  
    
    <title>Transfer Money</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <style type="text/css">
      button {
        transition: 1.5s;
      }
      button:hover{
        background-color: gray;
        color: white;
      }

    </style>
</head>

<body style="background-color: gray;">
<?php
    include 'config.php';
    //The '*' is used to specify that the query would return all columns of quiered tables.
    //The SELECT statement here is being used to get the data from the
	//users database with the FROM statement specifying it
	//rom there.
    $sql = "SELECT * FROM users";
    // The mysqli_query() function accepts a string value representing a query as one of the parameters and, executes/performs the given query on the database.
    
    $result = mysqli_query($conn,$sql);
?>

<?php

  include 'navbar-4.php';

?>

<div class="container">
        <h2 class="text-center pt-3" style="color : black;">Transfer of Funds Page</h2>
        <br>
            <div class="row">
                
                <div class="col">
                    
                        <div class="table-responsive-sm">
                    
                                <table class="table table-striped" style="border-color:black;">
                        
                                    <thead style="color : black;">
                         
                                           <tr>
                            
                            
                                            <th scope="col" class="text-center">Indentification Number</th>
                            
                            
                                            <th scope="col" class="text-center">User's Name</th>
                            
                            
                                            <th scope="col" class="text-center">E-Mail address</th>
                            
                            
                                            <th scope="col" class="text-center">Account Balance</th>
                            
                            
                                            <th scope="col" class="text-center">Transaction</th>

                                          
                            
                            
                                        </tr>

                        </thead>
                        <tbody>
                <?php 
                //What the  'mysqli_fetch_assoc()' function is doing is to 
                //return an associative array that the next row in the result set for the result represented by the result parameter, 
                //where each key in the array represents the name of one of the result set's columns.
                    while($rows=mysqli_fetch_assoc($result)){
                ?>  <!--The echo statements here are being used to display the entire table with the id, name, email, the balance,
                    and the transaction button for each user to transfer the funds. -->
                    <tr style="color: #000000;">
                        <td> <?php echo $rows['id'] ?></td>
                        <td> <?php echo $rows['name']?></td>
                        <td> <?php echo $rows['email']?></td>
                        <td> <?php echo $rows['balance']?></td>
                        <td><a href="usersinformation.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color: #800020;">Click to transact</button></a></td> 
                        
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <footer class="text-center">
         <p><a href="home.php">Log Out</a></p>
        </footer>
   

</body>
</html>


