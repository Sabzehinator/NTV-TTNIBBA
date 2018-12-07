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
    $sql = "SELECT * FROM login"; 
    $result = $pdo->query($sql);
    $array = $result->fetchAll();
    
	
    for ($i = 0; $i < $result->rowCount() + 10; $i++)
    {
		$done = true;
		for ($x = 0; $x < count($array); $x++)
		{
			if ($array[$x]['lagenNr'] == $i)
			{
				$done = false;
			}
		}
		
		if ($done)
		{
			echo $i;
			break;
		}
	 
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

