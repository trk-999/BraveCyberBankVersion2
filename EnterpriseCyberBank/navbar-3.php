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
  overflow: hidden; /* The overflow hidden is here in case if overlap with the rest of the site */
  background-color: gray;
}

.bravenav a { /*Before moving the cursor of the navbar links. The text words will be in burgandy */
  float: left;
  display: block;
  color: #800020; 
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.bravenav a:hover { /*As the cursor is moving over the link. A white background will appear as like a highlight */
  background-color: white;
  color: black;
}

.bravenav a.active { /* This gives the first link in the nagivation bar the burgandy color. */
  background-color: #800020; 
  color: white;
}

.bravenav .icon {
  display: none;
}


</style>
</head>
<body>

<div class="bravenav" id="myBravenav">
  <a href="home.php" class="active">Home</a>
  <a href="createaccount.php">Create Account</a>
  <a href="admin-links.php">Admin Homepage</a>
  <a href="calculator.php">Calculator Page</a>
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


