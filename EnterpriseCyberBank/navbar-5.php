<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.bravenav {
  overflow: hidden;
  background-color: #333;
}

.bravenav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.bravenav a:hover {
  background-color: #800020;
  color: black;
}

.bravenav a.active {
  background-color: black;
  color: white;
}

.bravenav .icon {
  display: none;
}


</style>
</head>
<body>

<div class="bravenav" id="myBravenav">
  <a href="home.php" class="active">Admin Home</a>
  <a href="createaccount.php">Create Account</a>
  <a href="fundtransfer.php">Tranfer Money</a>
  <a href="userstradeinfo.php">Transaction History</a>
  <a href="bravebank-message.php"> Message Center </a>
  <a href="userdeletion.php"> Delete User </a> 
  <a href="calculator.php"> Calculator page </a>
  <a href="home.php">Log Out</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myBravenav");
  if (x.className === "bravenav") {
    x.className += " responsive";
  } else {
    x.className = "bravenav";
  }
}
</script>

</body>
</html>


