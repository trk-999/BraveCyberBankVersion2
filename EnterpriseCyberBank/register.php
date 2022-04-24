<link rel="icon" type="image/x-icon" href="favicon.ico">
				<?php

				$fName1 =  $_POST['fname'];
				$lName1 =  $_POST['lname'];
				$eMail1 =  $_POST['email'];
				$uName1 =  $_POST['uName'];
				$pw1 =     $_POST['pw'];
				
					if(!empty($fName1)){
						if(!empty($lName1)){
							if(!empty($eMail1)){
								if(!empty($uName1)){
									if(!empty($pw1)){
										
					
											/*
											This whole file is for the purpose of testing
											the inputed values of register.php to validate
											them and give errors for mistakes
											along the way.
											
											$host = "localhost";
											$dbusername = "root";
											$dbpassword = "";
											$dbname = "bravebank";
											
											
											$conn = mysqli_connect ($host, $dbusername, $dbpassword, $dbname);
											*/
											$host = "localhost"; $db = "bravebank"; $usr = "root"; $pw ="";
											$conn = new mysqli($host, $usr, $pw, $db);
											
											if ($conn->connect_error) {
												die("Connection failed: " .$conn->connect_error);
											} else {
												$sql = "INSERT INTO bravebank_admins(firstName, lastName, email, userName, password)
												values('$fName1', '$lName1', '$eMail1', '$uName1', '$pw1')";
												
												if($conn -> query($sql)){
													echo "<h1> Your information is stored sucessfully </h1>";
												} else {
													echo "Error: ".$sql.$conn->error;
												}
												$conn->close(); 
												
											} 
									
									} else {
										echo "The password is empty";
										die();
									}
								} else {
										echo "The Username is empty";
										die();
									
								}
									 
							} else {
								echo "The email is empty";
								die();
									
							} 
						}else {
							echo "The last name should not be empty";
							die();
						}
									 
					}else {
						echo "The first name should not be empty";
						die();
					}
					
					echo "<body style='background-color:gray'>";
				?>


<p> Click to admin-login page: <a href="login.html"> Click here</a> </p>
					