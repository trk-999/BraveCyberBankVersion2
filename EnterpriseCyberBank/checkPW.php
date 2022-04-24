<?php
		
		$uName1 = $_POST['uName']; 

		$pw1 = $_POST['pw']; 
		
	    $fName; $lName; $conID;
		
		/*The funciton here is setting out the specific database during the SQL
		queries and operations. The new mysqli is openning the new connection
		to the Bravebank MySQL server. And if the connection would fail, then
		the if statement passes with the die sending back an error during 
		process.
		*/
		 function openDatabase(&$conID){ 

		$host = "localhost"; $db = "bravebank"; $usr = "root"; $pw ="";
		$conID = new mysqli($host, $usr, $pw, $db);
		if ($conID->connect_error) { //Connect_error will give detail of the recent connection error. 
			die("Connection failed: " . $conID->connect_error);
			
			}
		}
		//The function 'passwordWorks' here is to be here so that it can be multiple possible times
		//where the data can be received from the bravebank_admins data.
		 function passwordWorks($conID, $uName1, $pw1, &$fName, &$lName){

			/*
			The SELECT statement here is being used to get the data from the
			bravebank_admins database with the FROM statement specifying it
			from there.
			*/
		 $SQL = " SELECT * FROM bravebank_admins";
		 
		 	/*
			The WHERE  here is being used to check to make sure 
			that the both the username for php and MySQL username
			match up and that the password the sha1 password is matched
			up.
			*/
		$SQL = $SQL . " WHERE userName = '$uName1' AND password = sha1('$pw1')";
			//The result variable is passing the database variable on sql variables
			//to be applied for the bravebank_admins information with the die statement
			//there to test whenever something would fail
		$result = $conID->query($SQL);
			if (!$result) {

			die( "Query Error: " .$SQL. " :" .$conID->connect_error); 
			} 
			/*
			fetch_array here is returning the rows from the database
			and stores the database as the array. 
			*/
			else {
			$row = $result -> fetch_array();
			
			if (!$row) { 

			return false;

			} 
			
			else {

			$fName= $row['firstName'];

			$lName = $row['lastName'];
			//While self-explanatory, close() is being used to close the database as it was open.
			$result->close();
			return true;
					
					}
				}
			return false;
				}
		
		 openDatabase($conID);
		
		/*
		The if statement here is used to send a message 
		to the admin after a successful login addressing them
		by the entered first name and last name variable with a link 
		to the admin homepage and the else statement is to provide 
		a chance again to enter the correct information.
		*/
		if (passwordWorks($conID,$uName1,$pw1,$fName, $lName)) { 

		 echo "<h1> Welcome ". $fName . " " . $lName. " </h1>";
		 echo ' <a href="admin-home.php">Click here admin to access your home page</a>';

		} else 

		{
		echo "<h1> User name or password is wrong- Try again <h1>";
		}
		 $conID->close();
		 
		?> 

	