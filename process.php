
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
 

 $_SESSION["username"] = $_POST['username'];
 $_SESSION["password"] = $_POST['password'];
 
 
try{
    $sql = "SELECT * FROM login WHERE username ='".$_SESSION["username"]."'";  
    $result = $pdo->query($sql);
    if($result->rowCount() > 0){
        while($row = $result->fetch()){
           
             $row['username'];
             $row['password'];
            
			 
			 $hash=$row['password'];
			
			if (password_verify($_SESSION["password"], $hash) && $_SESSION["username"] == 'admin') {
                header('Location: adminpage.php');
				exit;
            } else {
             
			 if (password_verify($_SESSION["password"], $hash)) {
                header('Location: Bokning.php');
				exit;
            } else {
              echo 'Invalid password.';
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
