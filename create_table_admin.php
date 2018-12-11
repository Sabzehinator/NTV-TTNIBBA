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
 
// Attempt create table query execution
try{
    $sql = "CREATE TABLE login(
	    
        username VARCHAR(30) NOT NULL,
        password CHAR(72) NOT NULL,
        lagenNr VARCHAR(30) NOT NULL,
        adress VARCHAR(30) NOT NULL,
	  image MEDIUMTEXT NOT NULL
    )";    
    $pdo->exec($sql);
    $sql = "CREATE TABLE bokadetider(
	    
        lagNr varchar(100) NOT NULL,
        id INT(255) NOT NULL,
        vecka VARCHAR(60) NOT NULL,
        dag VARCHAR(60) NOT NULL,
	  tid VARCHAR(60) NOT NULL
    )";    
    $pdo->exec($sql);
    echo "Table created successfully.";
	$username =  "admin";
		$password =  password_hash("admin", PASSWORD_DEFAULT);
		$lagenNr = "0";
		$adress = "admin";
	    
		$imgContent = "";
		
		$sql = "INSERT INTO login (username, password, lagenNr, adress, image) VALUES ('$username','$password', '$lagenNr', '$adress', '$imgContent')";
		$result = $pdo->query($sql);
		
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
?>