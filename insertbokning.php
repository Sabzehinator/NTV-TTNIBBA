<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

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
$idvar = $_POST['knappid'];
$id = $_SESSION["lagenNr"];

$message = "Tiden bokad (Gammal tid avbokad)";

	


// attempt insert query execution
$sql = "UPDATE bokadetider SET lagNr='".$id."' , id='".$idvar."', vecka='".$vecka."', dag='".$dag."', tid='".$tid."'
 WHERE lagNr='".$_SESSION["lagenNr"]."'";
if(mysqli_query($link, $sql)){ 
    echo "Records added successfully.";
	include_once "hämtatider.php";                     
    echo "<script type='text/javascript'>alert('$message');</script>";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 






// close connection

mysqli_close($link);

?>