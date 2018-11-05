<!DOCTYPE html>
<html lang = "sv">


<!-- Lägga till jkonton
	ta bort konton
	ändra usernames, passwords, och ev. profilbild
	

-->

<head>
<title> Login Sida</title>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="stylebokning.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body <body style="background-image: url(https://www.centralabygg.com/siteassets/regional-assets/emea/centrala-bygg-sweden/buying-guides/tvattmaskiner/washingmachines-electrolux-side-by-side-2400x1800.jpg)">
    <script type="text/javascript" src="bokningJS.js"></script>
	<form action="process.php" id="login" method="POST">
	
        <div class="container">
            <div id="login-row" class="row">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
						<table class="table table-bordered">
							<thead>
							  <tr>
								<th>username</th>
								<th>password</th>
								<th>bokning</th>
								<th>lägenhets nummer</th>
								<th>adress</th>
								<th>image</th>
							  </tr>
							</thead> 
						<tbody>
							  <tr>
								<td><input type="text" class="user_1"></input></td>
								<td><input type="text" class="pass_1"></input></td>
								<td><input type="text" class="bokn_1"></input></td>
								<td><input type="text" class="lägenhetsnr_1"></input></td>
								<td><input type="text" class="adress_1"></input></td>
								<td><input type="text" class="img_1"></input></td>
							  </tr>
						</tbody>
						 </table>
						 <input type="submit" id="boka" name="boka" class="btn btn-info btn-md" value="Commit"> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>

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
      while($row = $result->fetch())
	{
		
		
		
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

