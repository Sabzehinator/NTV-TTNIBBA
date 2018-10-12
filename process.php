<?php





try{
    $pdo = new PDO("mysql:host=localhost;dbname=bokning", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 
$username = $_POST['username'];
$password = $_POST['password'];

$r_password = $_REQUEST['password'];

try{
    $sql = "SELECT * FROM login WHERE username ='".$username."'";  
    $result = $pdo->query($sql);
    if($result->rowCount() > 0){
            echo "<table>";
            echo "<tr>";
            echo "<th>username</th>";
            echo "<th>password</th>";
            echo "</tr>";
        while($row = $result->fetch()){
            echo "<tr>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "</tr>";
			
			
			echo password_verify($password, $username);
			
			
			if ($password == $r_password) {
                echo 'Password is valid!';
            } else {
              echo 'Invalid password.';
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