
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
    $sql = "SELECT * FROM bokadetider";  
    $result = $pdo->query($sql);
	
	$amountOFRows = $result->rowCount();
	
    if($result->rowCount() > 0){
		echo "<script>";
		echo "var bokadetider = new Array(".$amountOFRows.");";
		
	    $i = 0;
		
        while($row = $result->fetch()){
           
		   echo "bokadetider[$i] = \"u" .$row["id"]. "/v" .$row["vecka"]. "/d" .$row["dag"]. "/t" .$row["tid"]. "\" ;";
            $i += 1;
		   
		   
		   

        }
		
        echo "</script>";
		
        // Free result set
        unset($result);
    } else{
        echo "No records matching your query were found.";
    }
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
 include_once "Bokning.php";
 
 
// Close connection
unset($pdo);



?>

