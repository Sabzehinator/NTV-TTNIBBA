<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $pdo = new PDO("mysql:host=localhost;dbname=bokning", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 

 $_SESSION["lagenNr"] = $_POST['username'];
 $_SESSION["password"] = $_POST['password'];
 
 
try{
    $sql = "SELECT * FROM login WHERE lagenNr ='".$_SESSION["lagenNr"]."'";  
    $result = $pdo->query($sql);
    if($result->rowCount() > 0){
        while($row = $result->fetch()){
           
             $row['lagenNr'];
             $row['password'];
             $msg ="Login misslyckades!";
			 
			 $hash=$row['password'];
			
			if (password_verify($_SESSION["password"], $hash) && $_SESSION["lagenNr"] == '0') {
                include_once "adminpage.html";
				exit;
            } else {
             
			 if (password_verify($_SESSION["password"], $hash)) {
               include_once "hämtatider.php";
				exit;
            } else {
              include_once "login.php";
			  echo "<script type='text/javascript'>alert('$msg');</script>";
            }		
			 	 
            }		
				
        }
        echo "</table>";
        // Free result set
        unset($result);
    } else{
        echo "No records matching your query were found.";
    }
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

 
// Close connection
unset($pdo);



?>

