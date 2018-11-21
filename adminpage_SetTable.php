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
foreach ($_POST['the_data'] as $row)
	{
		
		$SNNN = $_POST['the_data'];
		
	    $name =$_POST['name'];
	    $email =$_POST['email'];
	    $phone =$_POST['phone'];

	    if(mysql_query("INSERT INTO users (name,email,phone) VALUES ('$name','$email','$phone')"))
	    echo"successfully inserted";
	    else
	    echo "failed";
		
		
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

