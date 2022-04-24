<?php

  include 'navbar-5.php';

?>

<!DOCTYPE html>
<html>
<head>

<title> Bravebank / Message Center </title>

<style>

* {
    padding: 0px;
    margin: 0px;

}    

body {
    font-family: "Times New Roman", serif;
}
/*
The code below for nav 
is used to display the 
naviatiion bar as center with 
silver color with flex being the
first thing to see on the webpage.
A good porition of the CSS code
deals with the color and positioning of the 
messsage feature. 
*/

nav {
    display: flex;
    align-items: center; 
    background: silver;
    height: 50px;
    position: relative;
}

/*
The cursor pointer css 
is used to specificy a link
to click which will pop up with 
a pointing hand towards the message box. 
*/

.message-icon {
    cursor: pointer;
    margin-right: 50px;
    line-height: 60px;
}

/*
The css code below 
is used in making a red 
number notification indicating
the number of messages to read. 
*/

.message-icon span {
    background: red;
    padding: 6px;
    border-radius: 45%;
    color: white;
    vertical-align: top;
    margin-left: -20px;
}

.message-icon img {
    display: inline-block; 
    width: 35px;
    margin-top: 15px;
}
/*
Opacity is used in 
hiding the content until 
the link is clicked. s 
*/

.messaeg-icon:hover {
    opacity: .6;
}

.name-logo {
    flex: 1;
    margin-left: 45px;
    color: white;
    font-size: 14px;
    font-family: "Times New Roman";
}

.message-box {
    width: 300px;
    height: 0px;
    opacity: 0;
    position: absolute;
    top: 64px;
    right: 35px;
    transition: 1s opacity, 225ms height; 
}

.message-box h2 {
    font-size: 15px;
    padding: 12px;
    border-bottom: 1px solid #800020;
    color: gray; 
}

.message-box h2 span {
    color: #800020; 
}

.message-item {
    display: flex;
    border-bottom: 1px solid #800020;
    padding: 15px 5px;
    margin-bottom: 15px;
    cursor: pointer;
}

.message-item:hover {
    background-color: #800020;
}

.message-item img {
    display: block; 
    width: 50px;
    margin-right: 12px;
    border-radius: 11px;
}

.message-item .text h4 {
    color: #800020;
    font-size: 14px;
    margin-top: 11px;
}

.message-item .text p {
    color: black;
    font-size: 11px;
}




</style>    

</head>
<body>

<!-- The navigation here is the bravebank logo to the left and the message icon with javascript 
used in display messages with onclick="toggleMessage()"> -->
    <nav> 
        <div class="name-logo"> Bravebank </div>
        <div class="message-icon" onclick="toggleMessage()">
            <img src="message.png" alt="Image icon"> <span> 3 </span>
</div>
<div class="message-box" id="bravebox">
    <h2> Messages: <span> 3 currently to read from other admins</span> </h2>
    <div class="box-item">
        <div class="text">
            <h2> Admin Jack: </h2>
            <br>
            <p> Hello. You are allowed to delete when
                necessary
            </p> 
        </div> 
    </div>   
    
    <div class="box-item">
        <div class="text">
            <h2> Admin Phillip: </h2>
            <p> Hello. I am admin Franco. Nice to meet you.
            </p> 
        </div> 
    </div>   

    <div class="box-item">
        <div class="text">
            <h2> Admin Bill: </h2>
            <p> Hello. I am admin. Glad to be apart of this bank!
            </p> 
        </div> 
    </div>   

    </div> 
    </nav>

    <h1> <u> Click the icon to see admin messages! </u> </h1> 

    <br> 
    <p> </p>

    <p>
        As admins, communication is necessary so that any possible mistakes     
        can be kept at the minimum.
    
    </p>

    <br> 
    <p> 
      Check the messages now to read what the other admins are discussing.   

    </p>

    <script src="message.js"></script>
</body>
</html>

