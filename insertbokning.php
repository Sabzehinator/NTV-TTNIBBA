<?php
session_start();

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "bokning");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}




$vecka = $_POST['vecka'];
$dag = $_POST['dag'];
$tid = $_POST['tid'];

$id = $_SESSION["username"];



	


// attempt insert query execution
$sql = "INSERT INTO bokadetider (id, vecka, dag, tid) VALUES ('$id', '$vecka', '$dag', '$tid')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
	header('Location: Bokning.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 






// close connection

mysqli_close($link);

?>