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
//<!--while($result->rowCount() > 0)-->
	{
		
		$THE_DATA = $_POST['the_data'];

	    $username =  $THE_DATA[0];
	    $password =  $THE_DATA[1];
	    //$bokning = $THE_DATA[2];
	    $lagenNr = $THE_DATA[2];
	    $adress = $THE_DATA[3];
	    //$img = $THE_DATA[5];
	    
    $sql = "INSERT INTO login (username, password, lagenNr, adress) VALUES ('$username','$password', '$lagenNr', '$adress')";
    $result = $pdo->query($sql);
/*
	    if($pdo->query("INSERT INTO users (username, password, lagenNr, adress) VALUES ('$username','$password', '$lagenNr', '$adress')"))
	    echo"successfully inserted";
	    else
	    echo "failed";
		*/
		
		/*$sql = "INSERT INTO user (vecka, dag, tid) VALUES (:vecka, :dag, :tid)";
		$stmt = $pdo->prepare($sql);
		
		$stmt->bindParam(':vecka', "VARXD");
		$stmt->bindParam(':dag', "VARXD");
		$stmt->bindParam(':tid', "VARXD");
		
		$stmt->execute();*/
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

