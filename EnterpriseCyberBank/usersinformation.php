<link rel="icon" type="image/x-icon" href="favicon.ico">
<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $brave_query = $_GET['id'];

    $brave_transaction = $_POST['brave_transaction'];

    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$brave_transaction";

    $query = mysqli_query($conn,$sql);

    $sql1 = mysqli_fetch_array($query); // This will arrays or any output from the user for amount that is to be transferred to any separate account the amount of funds
    //SELECT here is gather the dating users database, FROM gather users data
    //The query is placing a query on the user database on the matching id with $brave_tranfer
    $sql = "SELECT * from users where id=$brave_transaction";

    $query = mysqli_query($conn,$sql);
    //Fetching the next row of the query as an array
    $sql2 = mysqli_fetch_array($query);



    // Checks any negative value inputed that cannot be tranferred. 
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        // showing an alert box in the window notification that negative values cannot be entered
        echo ' alert("Sorry. Negative values are not allowed to be transferred")';  

        echo '</script>';
    }


  
    // Checks anything insufficient that is trying to be inputted by the user. Such as giving a million dollars when you only have one dollar in account
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        
        echo ' alert("Sorry. But there is an insufficient Balance")';  // This gives the javascript notification of insufficient input.

        echo '</script>';
    }
    


    // Checks any inputed zero values that is trying to be transferred between accounts
    else if($amount == 0){

         echo "<script type='text/javascript'>";

         echo "alert('Sorry. But zero values cannot be transfered.')";

         echo "</script>";
     }


    else {
        
                // Deducts amount from the sender's account with the self-explanatory sql UPDATE.

                $newbalance = $sql1['balance'] - $amount;

                $sql = "UPDATE users set balance=$newbalance where id=$brave_transaction";

                mysqli_query($conn,$sql);
             

                // Adds any amount to the receiver's balance with UPDATE being used again.
                $newbalance = $sql2['balance'] + $amount;

                $sql = "UPDATE users set balance=$newbalance where id=$brave_transaction";

                mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];

                $receiver = $sql2['name'];
                //This part of the code is the main part of the transacion indicating with a javascript message of successful transaction
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";

                $query=mysqli_query($conn,$sql);


                if($query)
                {
                     echo "<script> alert('Your Transaction is Successful!');
                                     window.location='userstradeinfo.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

<!DOCTYPE html>
<head>
   
    <title>Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
    	/*This button will change when being hovered with the cursor */
		button{
			border:none;
			background: #800020;
		}
	    button:hover{
			background-color: #800020;
			transform: scale(1.1);
			color: white;
		}
    
        .bravebox {
            width: 145px; 
            height: 45px;
            border: 1px solid #800020;
            color: black;
            background-color: gray;
            border-radius: 3px;
            box-shadow: 2px 2px white;
        }

    </style>
</head>

<body style="background-color: gray;">
 
<?php
  include 'navbar-4.php';
?>

	<div class="container">
        <h2 class="text-center pt-2" style="color: #00000;">Account Transaction Page </h2>
            <?php
                include 'config.php';
                $serial_number=$_GET['id'];
                $sql = "SELECT * FROM  users where id=$serial_number";
                 //SELECT here is gather the dating users database, FROM gather users data
                
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error is found here: ".$sql."<br>".mysqli_error($conn);
                }
                $brave_rows=mysqli_fetch_assoc($result);
            ?>
            <!--The form will be designed with names given for the given values with colors to display the 
            the best looking visually -->
            <form method="post" name="bravebanktransactiontable" class="tabletext" ><br>
        <div>
            <table class="table">
                <thead class="table-light">
                <tr style="color: #800020;">
                
                    <th class="text-center">Identification Number</th>

                    <th class="text-center">Name of User</th>

                    <th class="text-center">User's Email</th>

                    <th class="text-center">Balance</th>

                </tr>
                <tr style="color: #444444;">
                    <td><?php echo $brave_rows['id'] ?></td>

                    <td><?php echo $brave_rows['name'] ?></td>

                    <td><?php echo $brave_rows['email'] ?></td>

                    <td><?php echo $brave_rows['balance'] ?></td>

                </tr>
            </table>
        </div>
        <br>

        <br>

        <br>

        <label style="color: #000000;"><b>Select a user to transfer to:</b></label>
        <select name="brave_transaction" class="bravebox" required>
            <option value="">Choose</option>
            <?php
                include 'config.php';
                $serial_number=$_GET['id'];
                $sql = "SELECT * FROM users where id!=$serial_number";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['name'] ;?> (Balance: 
                    <?php echo $rows['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br> <!--One dollar minimum is necessary so that the issues of zero or negative value won't need 
                 to be addresssed -->
            <label style="color: #000000;"><b>Input amount to transfer (Minimum one dollar to tranfer):</b></label>
            <input type="number" min="1" max="1000000000000" name="amount" required>   
            <br><br>
                <div class="text-center" >
            <button class="btn mt-4" name="submit" type="submit" id="myBtn" >Transfer</button>
            </div>
        </form>
    </div>
    <footer class="text-center mt-5 py-2">
    <p><a href="home.php">Log Out</a></p>
    </footer>

</body>
</html>