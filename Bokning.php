<?php
session_start();




?>
<!DOCTYPE html>
<html lang = "sv">

<head>
<title> Login Sida</title>

<link rel="stylesheet" type="text/css" href="stylebokning.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body <body style="background-image: url(https://www.centralabygg.com/siteassets/regional-assets/emea/centrala-bygg-sweden/buying-guides/tvattmaskiner/washingmachines-electrolux-side-by-side-2400x1800.jpg)">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="bokningJS.js"></script>
	<form action="insertbokning.php" id="boka" method="POST">
	
	
	
	
	<b>Välkommen ditt Lägenhetsnummer är: <?php echo $_SESSION["username"]; ?>
	
        <h3 class="text-body text-center text-white pt-5"></h3>
        <div class="container">
            <div id="login-row" class="row">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
						<table class="table table-bordered">
							<thead>
							  <tr>
								<th>Måndag</th>
								<th>Tisdag</th>
								<th>Onsdag</th>
								<th>Torsdag</th>
								<th>Fredag</th>
								<th>Lördag</th>
								<th>Söndag</th>
							  </tr>
							</thead> 
							
							
							
							
						<tbody>
						
							  <tr>
								<td><button type="button" id="1" class="btn btn-info active buttonJS Mon">08:00 - 10:00</button></td>
								<td><button type="button" id="2" class="btn btn-info active buttonJS Tis ">08:00 - 10:00</button></td>
								<td><button type="button" id="3" class="btn btn-info active buttonJS Ons">08:00 - 10:00</button></td>
								<td><button type="button" id="4" class="btn btn-info active buttonJS Tor">08:00 - 10:00</button></td>
								<td><button type="button" id="5" class="btn btn-info active buttonJS Fre">08:00 - 10:00</button></td>
								<td><button type="button" id="6" class="btn btn-info active buttonJS Lor">08:00 - 10:00</button></td>
								<td><button type="button" id="7" class="btn btn-info active buttonJS Son">08:00 - 10:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="8" class="btn btn-primary active buttonJS Mon">10:00 - 12:00</button></td>
								<td><button type="button" id="9" class="btn btn-primary active buttonJS Tis">10:00 - 12:00</button></td>
								<td><button type="button" id="10" class="btn btn-primary active buttonJS Ons">10:00 - 12:00</button></td>
								<td><button type="button" id="11" class="btn btn-primary active buttonJS Tor">10:00 - 12:00</button></td>
								<td><button type="button" id="12" class="btn btn-primary active buttonJS Fre">10:00 - 12:00</button></td>
								<td><button type="button" id="13" class="btn btn-primary active buttonJS Lor">10:00 - 12:00</button></td>
								<td><button type="button" id="14" class="btn btn-primary active buttonJS Son">10:00 - 12:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="15" class="btn btn-info active buttonJS Mon">12:00 - 14:00</button></td>
								<td><button type="button" id="16" class="btn btn-info active buttonJS Tis">12:00 - 14:00</button></td>
								<td><button type="button" id="17" class="btn btn-info active buttonJS Ons">12:00 - 14:00</button></td>
								<td><button type="button" id="18" class="btn btn-info active buttonJS Tor">12:00 - 14:00</button></td>
								<td><button type="button" id="19" class="btn btn-info active buttonJS Fre">12:00 - 14:00</button></td>
								<td><button type="button" id="20" class="btn btn-info active buttonJS Lor">12:00 - 14:00</button></td>
								<td><button type="button" id="21" class="btn btn-info active buttonJS Son">12:00 - 14:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="22" class="btn btn-primary active buttonJS Mon">14:00 - 16:00</button></td>
								<td><button type="button" id="23" class="btn btn-primary active buttonJS Tis">14:00 - 16:00</button></td>
								<td><button type="button" id="24" class="btn btn-primary active buttonJS Ons">14:00 - 16:00</button></td>
								<td><button type="button" id="25" class="btn btn-primary active buttonJS Tor">14:00 - 16:00</button></td>
								<td><button type="button" id="26" class="btn btn-primary active buttonJS Fre">14:00 - 16:00</button></td>
								<td><button type="button" id="27" class="btn btn-primary active buttonJS Lor">14:00 - 16:00</button></td>
								<td><button type="button" id="28" class="btn btn-primary active buttonJS Son">14:00 - 16:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="29" class="btn btn-info active buttonJS Mon">16:00 - 18:00</button></td>
								<td><button type="button" id="30" class="btn btn-info active buttonJS Tis">16:00 - 18:00</button></td>
								<td><button type="button" id="31" class="btn btn-info active buttonJS Ons">16:00 - 18:00</button></td>
								<td><button type="button" id="32" class="btn btn-info active buttonJS Tor">16:00 - 18:00</button></td>
								<td><button type="button" id="33" class="btn btn-info active buttonJS Fre">16:00 - 18:00</button></td>
								<td><button type="button" id="34" class="btn btn-info active buttonJS Lor">16:00 - 18:00</button></td>
								<td><button type="button" id="35" class="btn btn-info active buttonJS Son">16:00 - 18:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="36" class="btn btn-primary active buttonJS Mon">18:00 - 20:00</button></td>
								<td><button type="button" id="37" class="btn btn-primary active buttonJS Tis">18:00 - 20:00</button></td>
								<td><button type="button" id="38" class="btn btn-primary active buttonJS Ons">18:00 - 20:00</button></td>
								<td><button type="button" id="39" class="btn btn-primary active buttonJS Tor">18:00 - 20:00</button></td>
								<td><button type="button" id="40" class="btn btn-primary active buttonJS Fre">18:00 - 20:00</button></td>
								<td><button type="button" id="41" class="btn btn-primary active buttonJS Lor">18:00 - 20:00</button></td>
								<td><button type="button" id="42" class="btn btn-primary active buttonJS Son">18:00 - 20:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="43" class="btn btn-info active buttonJS Mon">20:00 - 22:00</button></td>
								<td><button type="button" id="44" class="btn btn-info active buttonJS Tis">20:00 - 22:00</button></td>
								<td><button type="button" id="45" class="btn btn-info active buttonJS Ons">20:00 - 22:00</button></td>
								<td><button type="button" id="46" class="btn btn-info active buttonJS Tor">20:00 - 22:00</button></td>
								<td><button type="button" id="47" class="btn btn-info active buttonJS Fre">20:00 - 22:00</button></td>
								<td><button type="button" id="48" class="btn btn-info active buttonJS Lor">20:00 - 22:00</button></td>
								<td><button type="button" id="49" class="btn btn-info active buttonJS Son">20:00 - 22:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="50" class="btn btn-primary active buttonJS Mon">22:00 - 00:00</button></td>
								<td><button type="button" id="51" class="btn btn-primary active buttonJS Tis">22:00 - 00:00</button></td>
								<td><button type="button" id="52" class="btn btn-primary active buttonJS Ons">22:00 - 00:00</button></td>
								<td><button type="button" id="53" class="btn btn-primary active buttonJS Tor">22:00 - 00:00</button></td>
								<td><button type="button" id="54" class="btn btn-primary active buttonJS Fre">22:00 - 00:00</button></td>
								<td><button type="button" id="55" class="btn btn-primary active buttonJS Lor">22:00 - 00:00</button></td>
								<td><button type="button" id="56" class="btn btn-primary active buttonJS Son">22:00 - 00:00</button></td>
							  </tr>
							</tbody>
						  </table>
						  
						  <label>Tid:</label> <label id="tid"></label>
						  <label>Dag:</label> <label id="dag"></label>
						  <label>Vecka:</label> <label  id="vecka"></label>
						  <input type="HIDDEN" name="tid" id="tidvar"/>
						  <input type="HIDDEN" name="dag" id="dagvar"/>
						  <input type="HIDDEN" name="vecka" id="veckavar"/>
						  
						  <input type="submit" id="bokknapp"  name="boka" class="btn btn-info btn-md" value="Boka"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>



