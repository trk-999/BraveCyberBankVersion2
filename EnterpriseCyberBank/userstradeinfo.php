<!DOCTYPE html>
<html>

<head>

    <title>Transaction History</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>

<body style="background-color: gray;">

<?php
  include 'navbar-4.php';
?>

	<div class="container">
        <h2 class="text-center pt-4" style="color: #800020;">Fund Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">

        <table class="table">

        <thead class="thead-dark">
            <tr> <!--Serial number is here for the reasons of separating ID from serial numbers -->
                <th class="text-center">Serial Number</th>

                <th class="text-center">Sender</th> 

                <th class="text-center">Receiver</th>

                <th class="text-center">Amount</th>

                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';
            //SELECT here is gather the transaction database, FROM gather transaction data
  
            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);
            /*The while loops here is fetching the data to displayed in
            the table will display while the condition is true
            or until there is not any data to diplay */
            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color: dark gray;">

            <td><?php echo $rows['sno']; ?></td>

            <td><?php echo $rows['sender']; ?></td>

            <td><?php echo $rows['receiver']; ?></td>

            <td><?php echo $rows['balance']; ?> </td>
            
            <td><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<footer class="text-center mt-5 py-2">
<p><a href="another-intro.php">Log Out</a></p>
</footer>

</body>
</html>