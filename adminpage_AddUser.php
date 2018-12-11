<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $pdo = new PDO("mysql:host=localhost;dbname=bokning", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 

 
try{
	{
		
		$THE_DATA = $_POST['the_data'];
		
		$username =  $THE_DATA[0];
		$password =  password_hash($THE_DATA[1], PASSWORD_DEFAULT);
		$lagenNr = $THE_DATA[2];
		$adress = $THE_DATA[3];
	    
		$imgContent = $THE_DATA[4];
		
		$sql = "INSERT INTO login (username, password, lagenNr, adress, image) VALUES ('$username','$password', '$lagenNr', '$adress', '$imgContent')";
		$result = $pdo->query($sql);
		
		// insert "INSERT INTO bokning" here
		// lägenhetsnummer finns i variabeln $lagenNr fast det kan vara en string, idk.
		
		
		$sql = "INSERT INTO bokning (lagenNr, id, vecka, dag, tid) VALUES ('$lagenNr','0','0','0','0')";
		$result = $pdo->query($sql);
		
		
	}
    
    unset($result);
} 
catch(PDOException $e)
{
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

 
// Close connection
unset($pdo);



?>

