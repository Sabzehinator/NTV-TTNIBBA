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
	$userNr = -1;
      while($row = $result->fetch())
	{
		$userNr++;
		//echo "<div>".$row['title']."</div>";


		echo "<tr>";
		echo	"<td><input type=\"text\" class=\"user_1\" value=\"" .$row['username']. "\"/></td>";
		echo	"<td><input type=\"text\" class=\"pass_1\" value=\"" .$row['password']. "\"/></td>";
		// echo	"<td><input type=\"text\" class=\"bokn_1\" value=\"" .$row['bokningNr']. $userNr. "\"/></td>";
		
		echo	"<td>  </td>";
		
		echo	"<td><input type=\"text\" class=\"lägenhetsnr_1\" value=\"" .$row['lagenNr']. "\"/></td>";
		echo	"<td><input type=\"text\" class=\"adress_1\" value=\"" .$row['adress']. "\"/></td>";
		echo	"<td><input type=\"text\" class=\"img_1\" value=\" " .$row['image']. "\"/></td>";
		echo "</tr>";

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

