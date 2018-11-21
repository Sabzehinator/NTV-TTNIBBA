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
	{
		
		$THE_DATA = $_POST['the_data'];
		username	password	bokning	lägenhets nummer	adress	image

	    $username =  $THE_DATA[0];
	    $password =  $THE_DATA[1];
	    $bokning = $THE_DATA[2];
	    $lagenNr = $THE_DATA[3];
	    $adress = $THE_DATA[4];
	    $img = $THE_DATA[5];

	    if(mysql_query("INSERT INTO users (username, password, bokning, lagenNr, adress, img) VALUES ('$username','$password','$bokning', 'lagenNr', 'adress', 'img')"))
	    echo"successfully inserted";
	    else
	    echo "failed";
		
		
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

