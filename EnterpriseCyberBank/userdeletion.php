<!DOCTYPE html>
<html>
<head>
    
    <title>Bravebank / Delete User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <!--The css is for the visual effet on the table -->
    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
    </style>
</head>

<body style="background-color : #800020;">
<?php
/*
 SELECT here is gather the dating users database, FROM gather users data
 The query is placing a query on the user database  
*/ 
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php
 include 'navbar-5.php';
?>
<!--Boostrap is used in this table to give it a visusal effect to make it ineractive  -->
<div class="container">
        <h2 class="text-center pt-4" style="color : black;">Remove Users</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-white" style="border-color:black;">
                        <thead style="color : white;">
                            <tr>
                             <!--These are the best heading I could come up with for the user deletion -->   
                            <th scope="col" class="text-center py-2">Id Number </th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">Total Balance</th>
                            <th scope="col" class="text-center py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    $cnt=1;
                    while($rows=mysqli_fetch_assoc($result)){ //mysqli_fetch_assoc will be used until the amount of information is out so that the while loop
                                                              //will break
                ?>
                    <tr style="color : white;">
                        <td class="py-2"><?php echo $cnt;; ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2">Total Account balance: <?php echo $rows['balance']?> dollars</td>
                        <td><a href="userdeletionquery.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn btn-danger" style="border-radius:0%;">Remove Account from Database</button></a></td> 
                    </tr>
                <?php
                        $cnt=$cnt+1; //cnt mainly plays its role in deleting the account information
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <footer class="text-center mt-5 py-2">
         <p><a href="home.php">Log Out</a></p>
        </footer>
        
</body>
</html>