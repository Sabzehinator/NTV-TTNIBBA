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
    
      while($row = $result->fetch())
	{
		

		echo "<tr>";
		echo	"<td><input type=\"text\" class=\"user_1\" value=\"" .$row['username']. "\"/></td>";
		echo	"<td><input type=\"text\" class=\"pass_1\" value=\"" .$row['password']. "\"/></td>";
		
		echo	"<td>"  .$row['lagenNr'].  "</td>";
		
		echo	"<td><input type=\"text\" class=\"adress_1\" value=\"" .$row['adress']. "\"/></td>";
		
		echo "<td><image src=\"";
		$data = $row['image'];
		echo $data;
		echo "\" height=\"64\"/></td>";
		
		echo "</tr>";

	}
    
    unset($result);
} 
catch(PDOException $e)
{
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
unset($pdo);



?>

