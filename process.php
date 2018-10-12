<?php


$username = $_POST['username'];
$password = $_POST['password'];


try{
    $pdo = new PDO("mysql:host=localhost;dbname=bokning", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 
	

$result = mysql_query("select * from login where username = '$username' and password = '$password'")
or die("Misslyckat query databas".mysql_error());

$row = mysql_fetch_array($result);

if($row['username'] == $username && $row['password'] == $password){
	
	echo "Login lyckades Välkommen" .$row['username'];
	
} else{
	echo "Mysslyckat";
}

?>