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
		
	    $sql = "DELETE FROM login WHERE lagenNr=\"" .$THE_DATA. "\"";
	    
	    $result = $pdo->query($sql);
		
		$sql = "DELETE FROM bokadetider WHERE lagNr=\"" .$THE_DATA. "\"";
	    
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

