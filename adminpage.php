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
//<!--while($result->rowCount() > 0)-->
      while($row = $result->fetch())
	{
		
		
		
		$sql = "INSERT INTO user (vecka, dag, tid) VALUES (:vecka, :dag, :tid)";
		$stmt = $pdo->prepare($sql);
		
		$stmt->bindParam(':vecka', "VARXD");
		$stmt->bindParam(':dag', "VARXD");
		$stmt->bindParam(':tid', "VARXD");
		
		$stmt->execute();
			/*
			<tr>
			<td><input type="text" class="user_1"></input></td>
			<td><input type="text" class="pass_1"></input></td>
			<td><input type="text" class="img_1"></input></td>
			</tr>*/
	
	 /*<!--$row['username'];
	 $row['password'];-->

	 $hash=$row['password'];
	
	 if (password_verify($password, $hash) && $username == 'admin') 
	 {
		header('Location: Bokning.php');
			exit;
	 }	*/
		
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

