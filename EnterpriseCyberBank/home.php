<!DOCTYPE html>

<html>
<head>

<title>Brave Store </title>
<link rel="stylesheet" href="style-gray.css">
<link rel="icon" type="image/x-icon" href="favicon.ico">


<style>
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

.openBtn {
  background: #800020;
  border: none;
  padding: 10px 15px;
  font-size: 20px;
  cursor: pointer;
}

.openBtn:hover {
  background: #800020;
}

.overlay {
  height: 100%;
  width: 100%;
  display: none;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #AD5C71;
  background-color: #800020;
}

.overlay-content {
  position: relative;
  top: 46%;
  width: 80%;
  text-align: center;
  margin-top: 30px;
  margin: auto;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
  cursor: pointer;
  color: #800020;
}

.overlay .closebtn:hover {
  color: #800020;
}

.overlay input[type=text] {
  padding: 15px;
  font-size: 17px;
  border: none;
  float: left;
  width: 80%;
  background: white;
}

.overlay input[type=text]:hover {
  background: #800020;
}

.overlay button {
  float: left;
  width: 35%;
  padding: 15px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.overlay button:hover {
  background: #bbb;
}
</style>


</head>


<body>




<?php
  include 'navbar-3.php';
  ?>




<div class="header"> 
<div class="container">
    <div class="navbar">
        <div class="logo">
        
        </div>
        <nav>
            
            
        </nav>
        
    </div>    
	
<div class="row">
    <div class="col-2">
        <h1>Welcome to the Pembroke <br> Cyberbank! </h1>
        <p>
            Finding the right conclusions to the given opportunities. 
        </p>
        <a href ="admin-links.php" class="btn">If you are an administrator click here! &#8594;</a>
    </div>
    <div class="col-2">
       
     </div>
         </div>
            </div> 
                </div> 
    
    <!---
    The categories and small container 
    div tags will provide a small about us
    part on the landing page.
    -->
    <div class ="categories"> 
        <div class="small-container">
		<h1> About the Cyber Bank </h1>
            <p>  Started from humble beginnings to become an engaging part of the student communuty. </p>
			<p>
			Create an account with us today to become apart of our community.
			</p>
        </div>       
    </div> 
    
    <!--
      The first image on the left 
      will provide a link to account 
      creation for the bank 
    -->
    <div class="small-container"> 
        <h2 class="title">Why choose CyberBank?</h2>
        <div class="row">
            <div class="col-4">
                <a href="createaccount.php"><img src="dollars.jpg"></a>
                
                <p> 
				Creating an account with us is an easy process. Click this image to start
			
			        	</p>
            </div>
            <div class="col-4">
                <img src="bank.jpg">
                <h4>Availabe in your local area.</h4>
				
                    
                </div>
                
            </div>
            
        </div>
    </div>

    

    

    <!--The footer for the cyberbank webpage-->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer">
                    <a href="home.php" class="btn">Home &#8594;</a>
                    <a href="createaccount.php" class="btn">Bank Page &#8594;</a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    


</body>
</html>
