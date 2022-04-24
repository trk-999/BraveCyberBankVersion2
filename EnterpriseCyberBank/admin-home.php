<!doctype html>
<html>
  <head>
    

    <!-- Bootstrap CSS and the CSS files needed to give the effects for the site. -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <title>Bravebank / Admin Homepage </title>
  </head>

  <body>
  
  <!--The include expression is used to bring nagivation bars to every page on the website -->

  <?php
  
  include 'navbar-5.php';
  
  ?>
  
    <!-- reminder, divg tags are used to separate elements and section within the page.
                                                                                    -->

      <div class="container-fluid">
      <!-- Introduction section 
      The contaner fluid here sets
      the width at 100% at all the breakpoints.                         
                            -->

                          
            <div class="row intro py-1" style="background-color : #7d8892;">

            <!-- The py here is just set there for an enhanced
            virtual environemnt and display. 
            -->

              
              <div class="col-sm-12 col-md img text-center">

              <!-- As this is boostrap version 4, certain things
              can be centered automatically but this was just used 
              to center text. 
          
              -->
               
              </div>
            </div>

      <!-- Below will pop up links for the user or admin to click to link to the following web pages -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    
                    <br>
                    <a href="createaccount.php"><button style="background-color: #800020;" >Create a User</button></a>
                  </div>
                  <div class="col-md act">
                   
                    <br>
                    <a href="userdeletion.php"><button style="background-color: #800020;" >Delete Users</button></a>
                  </div>

                  <div class="col-md act">
                   
                    <br>
                    <a href="fundtransfer.php"><button style="background-color: #800020;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                   
                    <br>
                    <a href="userstradeinfo.php"><button style="background-color: #800020;">Transaction History</button></a>

                    
                  </div>
                  
            </div>
      </div>

      <footer class="text-center mt-5 py-2"> <!-- Made it so that the footer can be centered. -->
      <p><a href="home.php">Log Out</a></p>
      </footer>
      
  </body>
</html>