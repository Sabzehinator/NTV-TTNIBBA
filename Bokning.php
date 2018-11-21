<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bokning</title>
  
  <link rel="stylesheet" type="text/css" href="stylebokning.css">
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style> 
  
  </style>
</head>
<body style="background-image: url(https://www.centralabygg.com/siteassets/regional-assets/emea/centrala-bygg-sweden/buying-guides/tvattmaskiner/washingmachines-electrolux-side-by-side-2400x1800.jpg)">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="bokningJS.js"></script>
<form action="insertbokning.php" id="boka" method="POST">
<b>Välkommen ditt Lägenhetsnummer är: <?php echo $_SESSION["username"]; ?>
<br>
<br>
<br>
<br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000000000000000">
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
		<div class="container">
		
		<h1> Vecka 1 </h1>
		
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
								<td><button type="button" id="11" class="btn btn-info active buttonJS Mon">08:00 - 10:00</button></td>
								<td><button type="button" id="12" class="btn btn-info active buttonJS Tis ">08:00 - 10:00</button></td>
								<td><button type="button" id="13" class="btn btn-info active buttonJS Ons">08:00 - 10:00</button></td>
								<td><button type="button" id="14" class="btn btn-info active buttonJS Tor">08:00 - 10:00</button></td>
								<td><button type="button" id="15" class="btn btn-info active buttonJS Fre">08:00 - 10:00</button></td>
								<td><button type="button" id="16" class="btn btn-info active buttonJS Lor">08:00 - 10:00</button></td>
								<td><button type="button" id="17" class="btn btn-info active buttonJS Son">08:00 - 10:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="18" class="btn btn-primary active buttonJS Mon">10:00 - 12:00</button></td>
								<td><button type="button" id="19" class="btn btn-primary active buttonJS Tis">10:00 - 12:00</button></td>
								<td><button type="button" id="110" class="btn btn-primary active buttonJS Ons">10:00 - 12:00</button></td>
								<td><button type="button" id="111" class="btn btn-primary active buttonJS Tor">10:00 - 12:00</button></td>
								<td><button type="button" id="112" class="btn btn-primary active buttonJS Fre">10:00 - 12:00</button></td>
								<td><button type="button" id="113" class="btn btn-primary active buttonJS Lor">10:00 - 12:00</button></td>
								<td><button type="button" id="114" class="btn btn-primary active buttonJS Son">10:00 - 12:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="115" class="btn btn-info active buttonJS Mon">12:00 - 14:00</button></td>
								<td><button type="button" id="116" class="btn btn-info active buttonJS Tis">12:00 - 14:00</button></td>
								<td><button type="button" id="117" class="btn btn-info active buttonJS Ons">12:00 - 14:00</button></td>
								<td><button type="button" id="118" class="btn btn-info active buttonJS Tor">12:00 - 14:00</button></td>
								<td><button type="button" id="119" class="btn btn-info active buttonJS Fre">12:00 - 14:00</button></td>
								<td><button type="button" id="120" class="btn btn-info active buttonJS Lor">12:00 - 14:00</button></td>
								<td><button type="button" id="121" class="btn btn-info active buttonJS Son">12:00 - 14:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="122" class="btn btn-primary active buttonJS Mon">14:00 - 16:00</button></td>
								<td><button type="button" id="123" class="btn btn-primary active buttonJS Tis">14:00 - 16:00</button></td>
								<td><button type="button" id="124" class="btn btn-primary active buttonJS Ons">14:00 - 16:00</button></td>
								<td><button type="button" id="125" class="btn btn-primary active buttonJS Tor">14:00 - 16:00</button></td>
								<td><button type="button" id="126" class="btn btn-primary active buttonJS Fre">14:00 - 16:00</button></td>
								<td><button type="button" id="127" class="btn btn-primary active buttonJS Lor">14:00 - 16:00</button></td>
								<td><button type="button" id="128" class="btn btn-primary active buttonJS Son">14:00 - 16:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="129" class="btn btn-info active buttonJS Mon">16:00 - 18:00</button></td>
								<td><button type="button" id="130" class="btn btn-info active buttonJS Tis">16:00 - 18:00</button></td>
								<td><button type="button" id="131" class="btn btn-info active buttonJS Ons">16:00 - 18:00</button></td>
								<td><button type="button" id="132" class="btn btn-info active buttonJS Tor">16:00 - 18:00</button></td>
								<td><button type="button" id="133" class="btn btn-info active buttonJS Fre">16:00 - 18:00</button></td>
								<td><button type="button" id="134" class="btn btn-info active buttonJS Lor">16:00 - 18:00</button></td>
								<td><button type="button" id="135" class="btn btn-info active buttonJS Son">16:00 - 18:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="136" class="btn btn-primary active buttonJS Mon">18:00 - 20:00</button></td>
								<td><button type="button" id="137" class="btn btn-primary active buttonJS Tis">18:00 - 20:00</button></td>
								<td><button type="button" id="138" class="btn btn-primary active buttonJS Ons">18:00 - 20:00</button></td>
								<td><button type="button" id="139" class="btn btn-primary active buttonJS Tor">18:00 - 20:00</button></td>
								<td><button type="button" id="140" class="btn btn-primary active buttonJS Fre">18:00 - 20:00</button></td>
								<td><button type="button" id="141" class="btn btn-primary active buttonJS Lor">18:00 - 20:00</button></td>
								<td><button type="button" id="142" class="btn btn-primary active buttonJS Son">18:00 - 20:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="143" class="btn btn-info active buttonJS Mon">20:00 - 22:00</button></td>
								<td><button type="button" id="144" class="btn btn-info active buttonJS Tis">20:00 - 22:00</button></td>
								<td><button type="button" id="145" class="btn btn-info active buttonJS Ons">20:00 - 22:00</button></td>
								<td><button type="button" id="146" class="btn btn-info active buttonJS Tor">20:00 - 22:00</button></td>
								<td><button type="button" id="147" class="btn btn-info active buttonJS Fre">20:00 - 22:00</button></td>
								<td><button type="button" id="148" class="btn btn-info active buttonJS Lor">20:00 - 22:00</button></td>
								<td><button type="button" id="149" class="btn btn-info active buttonJS Son">20:00 - 22:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="150" class="btn btn-primary active buttonJS Mon">22:00 - 00:00</button></td>
								<td><button type="button" id="151" class="btn btn-primary active buttonJS Tis">22:00 - 00:00</button></td>
								<td><button type="button" id="152" class="btn btn-primary active buttonJS Ons">22:00 - 00:00</button></td>
								<td><button type="button" id="153" class="btn btn-primary active buttonJS Tor">22:00 - 00:00</button></td>
								<td><button type="button" id="154" class="btn btn-primary active buttonJS Fre">22:00 - 00:00</button></td>
								<td><button type="button" id="155" class="btn btn-primary active buttonJS Lor">22:00 - 00:00</button></td>
								<td><button type="button" id="156" class="btn btn-primary active buttonJS Son">22:00 - 00:00</button></td>
							  </tr>
							</tbody>
						  </table>
		</div>	
    </div>
	<div class="carousel-item">	
		<div class="container">
		
		<h1> Vecka 2 </h1>
		
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
								<td><button type="button" id="21" class="btn btn-info active buttonJS Mon">08:00 - 10:00</button></td>
								<td><button type="button" id="22" class="btn btn-info active buttonJS Tis ">08:00 - 10:00</button></td>
								<td><button type="button" id="23" class="btn btn-info active buttonJS Ons">08:00 - 10:00</button></td>
								<td><button type="button" id="24" class="btn btn-info active buttonJS Tor">08:00 - 10:00</button></td>
								<td><button type="button" id="25" class="btn btn-info active buttonJS Fre">08:00 - 10:00</button></td>
								<td><button type="button" id="26" class="btn btn-info active buttonJS Lor">08:00 - 10:00</button></td>
								<td><button type="button" id="27" class="btn btn-info active buttonJS Son">08:00 - 10:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="28" class="btn btn-primary active buttonJS Mon">10:00 - 12:00</button></td>
								<td><button type="button" id="29" class="btn btn-primary active buttonJS Tis">10:00 - 12:00</button></td>
								<td><button type="button" id="210" class="btn btn-primary active buttonJS Ons">10:00 - 12:00</button></td>
								<td><button type="button" id="211" class="btn btn-primary active buttonJS Tor">10:00 - 12:00</button></td>
								<td><button type="button" id="212" class="btn btn-primary active buttonJS Fre">10:00 - 12:00</button></td>
								<td><button type="button" id="213" class="btn btn-primary active buttonJS Lor">10:00 - 12:00</button></td>
								<td><button type="button" id="214" class="btn btn-primary active buttonJS Son">10:00 - 12:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="215" class="btn btn-info active buttonJS Mon">12:00 - 14:00</button></td>
								<td><button type="button" id="216" class="btn btn-info active buttonJS Tis">12:00 - 14:00</button></td>
								<td><button type="button" id="217" class="btn btn-info active buttonJS Ons">12:00 - 14:00</button></td>
								<td><button type="button" id="218" class="btn btn-info active buttonJS Tor">12:00 - 14:00</button></td>
								<td><button type="button" id="219" class="btn btn-info active buttonJS Fre">12:00 - 14:00</button></td>
								<td><button type="button" id="220" class="btn btn-info active buttonJS Lor">12:00 - 14:00</button></td>
								<td><button type="button" id="221" class="btn btn-info active buttonJS Son">12:00 - 14:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="222" class="btn btn-primary active buttonJS Mon">14:00 - 16:00</button></td>
								<td><button type="button" id="223" class="btn btn-primary active buttonJS Tis">14:00 - 16:00</button></td>
								<td><button type="button" id="224" class="btn btn-primary active buttonJS Ons">14:00 - 16:00</button></td>
								<td><button type="button" id="225" class="btn btn-primary active buttonJS Tor">14:00 - 16:00</button></td>
								<td><button type="button" id="226" class="btn btn-primary active buttonJS Fre">14:00 - 16:00</button></td>
								<td><button type="button" id="227" class="btn btn-primary active buttonJS Lor">14:00 - 16:00</button></td>
								<td><button type="button" id="228" class="btn btn-primary active buttonJS Son">14:00 - 16:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="229" class="btn btn-info active buttonJS Mon">16:00 - 18:00</button></td>
								<td><button type="button" id="230" class="btn btn-info active buttonJS Tis">16:00 - 18:00</button></td>
								<td><button type="button" id="231" class="btn btn-info active buttonJS Ons">16:00 - 18:00</button></td>
								<td><button type="button" id="232" class="btn btn-info active buttonJS Tor">16:00 - 18:00</button></td>
								<td><button type="button" id="233" class="btn btn-info active buttonJS Fre">16:00 - 18:00</button></td>
								<td><button type="button" id="234" class="btn btn-info active buttonJS Lor">16:00 - 18:00</button></td>
								<td><button type="button" id="235" class="btn btn-info active buttonJS Son">16:00 - 18:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="236" class="btn btn-primary active buttonJS Mon">18:00 - 20:00</button></td>
								<td><button type="button" id="237" class="btn btn-primary active buttonJS Tis">18:00 - 20:00</button></td>
								<td><button type="button" id="238" class="btn btn-primary active buttonJS Ons">18:00 - 20:00</button></td>
								<td><button type="button" id="239" class="btn btn-primary active buttonJS Tor">18:00 - 20:00</button></td>
								<td><button type="button" id="240" class="btn btn-primary active buttonJS Fre">18:00 - 20:00</button></td>
								<td><button type="button" id="241" class="btn btn-primary active buttonJS Lor">18:00 - 20:00</button></td>
								<td><button type="button" id="242" class="btn btn-primary active buttonJS Son">18:00 - 20:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="243" class="btn btn-info active buttonJS Mon">20:00 - 22:00</button></td>
								<td><button type="button" id="244" class="btn btn-info active buttonJS Tis">20:00 - 22:00</button></td>
								<td><button type="button" id="245" class="btn btn-info active buttonJS Ons">20:00 - 22:00</button></td>
								<td><button type="button" id="246" class="btn btn-info active buttonJS Tor">20:00 - 22:00</button></td>
								<td><button type="button" id="247" class="btn btn-info active buttonJS Fre">20:00 - 22:00</button></td>
								<td><button type="button" id="248" class="btn btn-info active buttonJS Lor">20:00 - 22:00</button></td>
								<td><button type="button" id="249" class="btn btn-info active buttonJS Son">20:00 - 22:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="250" class="btn btn-primary active buttonJS Mon">22:00 - 00:00</button></td>
								<td><button type="button" id="251" class="btn btn-primary active buttonJS Tis">22:00 - 00:00</button></td>
								<td><button type="button" id="252" class="btn btn-primary active buttonJS Ons">22:00 - 00:00</button></td>
								<td><button type="button" id="253" class="btn btn-primary active buttonJS Tor">22:00 - 00:00</button></td>
								<td><button type="button" id="254" class="btn btn-primary active buttonJS Fre">22:00 - 00:00</button></td>
								<td><button type="button" id="255" class="btn btn-primary active buttonJS Lor">22:00 - 00:00</button></td>
								<td><button type="button" id="256" class="btn btn-primary active buttonJS Son">22:00 - 00:00</button></td>
							  </tr>
							</tbody>
						  </table>
			</div>
	  </div>
	  <div class="carousel-item">	
		<div class="container">
		
		<h1> Vecka 3 </h1>
		
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
								<td><button type="button" id="31" class="btn btn-info active buttonJS Mon">08:00 - 10:00</button></td>
								<td><button type="button" id="32" class="btn btn-info active buttonJS Tis ">08:00 - 10:00</button></td>
								<td><button type="button" id="33" class="btn btn-info active buttonJS Ons">08:00 - 10:00</button></td>
								<td><button type="button" id="34" class="btn btn-info active buttonJS Tor">08:00 - 10:00</button></td>
								<td><button type="button" id="35" class="btn btn-info active buttonJS Fre">08:00 - 10:00</button></td>
								<td><button type="button" id="36" class="btn btn-info active buttonJS Lor">08:00 - 10:00</button></td>
								<td><button type="button" id="37" class="btn btn-info active buttonJS Son">08:00 - 10:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="38" class="btn btn-primary active buttonJS Mon">10:00 - 12:00</button></td>
								<td><button type="button" id="39" class="btn btn-primary active buttonJS Tis">10:00 - 12:00</button></td>
								<td><button type="button" id="310" class="btn btn-primary active buttonJS Ons">10:00 - 12:00</button></td>
								<td><button type="button" id="311" class="btn btn-primary active buttonJS Tor">10:00 - 12:00</button></td>
								<td><button type="button" id="312" class="btn btn-primary active buttonJS Fre">10:00 - 12:00</button></td>
								<td><button type="button" id="313" class="btn btn-primary active buttonJS Lor">10:00 - 12:00</button></td>
								<td><button type="button" id="314" class="btn btn-primary active buttonJS Son">10:00 - 12:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="315" class="btn btn-info active buttonJS Mon">12:00 - 14:00</button></td>
								<td><button type="button" id="316" class="btn btn-info active buttonJS Tis">12:00 - 14:00</button></td>
								<td><button type="button" id="317" class="btn btn-info active buttonJS Ons">12:00 - 14:00</button></td>
								<td><button type="button" id="318" class="btn btn-info active buttonJS Tor">12:00 - 14:00</button></td>
								<td><button type="button" id="319" class="btn btn-info active buttonJS Fre">12:00 - 14:00</button></td>
								<td><button type="button" id="320" class="btn btn-info active buttonJS Lor">12:00 - 14:00</button></td>
								<td><button type="button" id="321" class="btn btn-info active buttonJS Son">12:00 - 14:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="322" class="btn btn-primary active buttonJS Mon">14:00 - 16:00</button></td>
								<td><button type="button" id="323" class="btn btn-primary active buttonJS Tis">14:00 - 16:00</button></td>
								<td><button type="button" id="324" class="btn btn-primary active buttonJS Ons">14:00 - 16:00</button></td>
								<td><button type="button" id="325" class="btn btn-primary active buttonJS Tor">14:00 - 16:00</button></td>
								<td><button type="button" id="326" class="btn btn-primary active buttonJS Fre">14:00 - 16:00</button></td>
								<td><button type="button" id="327" class="btn btn-primary active buttonJS Lor">14:00 - 16:00</button></td>
								<td><button type="button" id="328" class="btn btn-primary active buttonJS Son">14:00 - 16:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="329" class="btn btn-info active buttonJS Mon">16:00 - 18:00</button></td>
								<td><button type="button" id="330" class="btn btn-info active buttonJS Tis">16:00 - 18:00</button></td>
								<td><button type="button" id="331" class="btn btn-info active buttonJS Ons">16:00 - 18:00</button></td>
								<td><button type="button" id="332" class="btn btn-info active buttonJS Tor">16:00 - 18:00</button></td>
								<td><button type="button" id="333" class="btn btn-info active buttonJS Fre">16:00 - 18:00</button></td>
								<td><button type="button" id="334" class="btn btn-info active buttonJS Lor">16:00 - 18:00</button></td>
								<td><button type="button" id="335" class="btn btn-info active buttonJS Son">16:00 - 18:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="336" class="btn btn-primary active buttonJS Mon">18:00 - 20:00</button></td>
								<td><button type="button" id="337" class="btn btn-primary active buttonJS Tis">18:00 - 20:00</button></td>
								<td><button type="button" id="338" class="btn btn-primary active buttonJS Ons">18:00 - 20:00</button></td>
								<td><button type="button" id="339" class="btn btn-primary active buttonJS Tor">18:00 - 20:00</button></td>
								<td><button type="button" id="340" class="btn btn-primary active buttonJS Fre">18:00 - 20:00</button></td>
								<td><button type="button" id="341" class="btn btn-primary active buttonJS Lor">18:00 - 20:00</button></td>
								<td><button type="button" id="342" class="btn btn-primary active buttonJS Son">18:00 - 20:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="343" class="btn btn-info active buttonJS Mon">20:00 - 22:00</button></td>
								<td><button type="button" id="344" class="btn btn-info active buttonJS Tis">20:00 - 22:00</button></td>
								<td><button type="button" id="345" class="btn btn-info active buttonJS Ons">20:00 - 22:00</button></td>
								<td><button type="button" id="346" class="btn btn-info active buttonJS Tor">20:00 - 22:00</button></td>
								<td><button type="button" id="347" class="btn btn-info active buttonJS Fre">20:00 - 22:00</button></td>
								<td><button type="button" id="348" class="btn btn-info active buttonJS Lor">20:00 - 22:00</button></td>
								<td><button type="button" id="349" class="btn btn-info active buttonJS Son">20:00 - 22:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="350" class="btn btn-primary active buttonJS Mon">22:00 - 00:00</button></td>
								<td><button type="button" id="351" class="btn btn-primary active buttonJS Tis">22:00 - 00:00</button></td>
								<td><button type="button" id="352" class="btn btn-primary active buttonJS Ons">22:00 - 00:00</button></td>
								<td><button type="button" id="353" class="btn btn-primary active buttonJS Tor">22:00 - 00:00</button></td>
								<td><button type="button" id="354" class="btn btn-primary active buttonJS Fre">22:00 - 00:00</button></td>
								<td><button type="button" id="355" class="btn btn-primary active buttonJS Lor">22:00 - 00:00</button></td>
								<td><button type="button" id="356" class="btn btn-primary active buttonJS Son">22:00 - 00:00</button></td>
							  </tr>
							</tbody>
						  </table>
			</div>
	  </div>
	  <div class="carousel-item">	
		<div class="container">
		
		<h1> Vecka 4 </h1>
		
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
								<td><button type="button" id="41" class="btn btn-info active buttonJS Mon">08:00 - 10:00</button></td>
								<td><button type="button" id="42" class="btn btn-info active buttonJS Tis ">08:00 - 10:00</button></td>
								<td><button type="button" id="43" class="btn btn-info active buttonJS Ons">08:00 - 10:00</button></td>
								<td><button type="button" id="44" class="btn btn-info active buttonJS Tor">08:00 - 10:00</button></td>
								<td><button type="button" id="45" class="btn btn-info active buttonJS Fre">08:00 - 10:00</button></td>
								<td><button type="button" id="46" class="btn btn-info active buttonJS Lor">08:00 - 10:00</button></td>
								<td><button type="button" id="47" class="btn btn-info active buttonJS Son">08:00 - 10:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="48" class="btn btn-primary active buttonJS Mon">10:00 - 12:00</button></td>
								<td><button type="button" id="49" class="btn btn-primary active buttonJS Tis">10:00 - 12:00</button></td>
								<td><button type="button" id="410" class="btn btn-primary active buttonJS Ons">10:00 - 12:00</button></td>
								<td><button type="button" id="411" class="btn btn-primary active buttonJS Tor">10:00 - 12:00</button></td>
								<td><button type="button" id="412" class="btn btn-primary active buttonJS Fre">10:00 - 12:00</button></td>
								<td><button type="button" id="413" class="btn btn-primary active buttonJS Lor">10:00 - 12:00</button></td>
								<td><button type="button" id="414" class="btn btn-primary active buttonJS Son">10:00 - 12:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="415" class="btn btn-info active buttonJS Mon">12:00 - 14:00</button></td>
								<td><button type="button" id="416" class="btn btn-info active buttonJS Tis">12:00 - 14:00</button></td>
								<td><button type="button" id="417" class="btn btn-info active buttonJS Ons">12:00 - 14:00</button></td>
								<td><button type="button" id="418" class="btn btn-info active buttonJS Tor">12:00 - 14:00</button></td>
								<td><button type="button" id="419" class="btn btn-info active buttonJS Fre">12:00 - 14:00</button></td>
								<td><button type="button" id="420" class="btn btn-info active buttonJS Lor">12:00 - 14:00</button></td>
								<td><button type="button" id="421" class="btn btn-info active buttonJS Son">12:00 - 14:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="422" class="btn btn-primary active buttonJS Mon">14:00 - 16:00</button></td>
								<td><button type="button" id="423" class="btn btn-primary active buttonJS Tis">14:00 - 16:00</button></td>
								<td><button type="button" id="424" class="btn btn-primary active buttonJS Ons">14:00 - 16:00</button></td>
								<td><button type="button" id="425" class="btn btn-primary active buttonJS Tor">14:00 - 16:00</button></td>
								<td><button type="button" id="426" class="btn btn-primary active buttonJS Fre">14:00 - 16:00</button></td>
								<td><button type="button" id="427" class="btn btn-primary active buttonJS Lor">14:00 - 16:00</button></td>
								<td><button type="button" id="428" class="btn btn-primary active buttonJS Son">14:00 - 16:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="429" class="btn btn-info active buttonJS Mon">16:00 - 18:00</button></td>
								<td><button type="button" id="430" class="btn btn-info active buttonJS Tis">16:00 - 18:00</button></td>
								<td><button type="button" id="431" class="btn btn-info active buttonJS Ons">16:00 - 18:00</button></td>
								<td><button type="button" id="432" class="btn btn-info active buttonJS Tor">16:00 - 18:00</button></td>
								<td><button type="button" id="433" class="btn btn-info active buttonJS Fre">16:00 - 18:00</button></td>
								<td><button type="button" id="434" class="btn btn-info active buttonJS Lor">16:00 - 18:00</button></td>
								<td><button type="button" id="435" class="btn btn-info active buttonJS Son">16:00 - 18:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="436" class="btn btn-primary active buttonJS Mon">18:00 - 20:00</button></td>
								<td><button type="button" id="437" class="btn btn-primary active buttonJS Tis">18:00 - 20:00</button></td>
								<td><button type="button" id="438" class="btn btn-primary active buttonJS Ons">18:00 - 20:00</button></td>
								<td><button type="button" id="439" class="btn btn-primary active buttonJS Tor">18:00 - 20:00</button></td>
								<td><button type="button" id="440" class="btn btn-primary active buttonJS Fre">18:00 - 20:00</button></td>
								<td><button type="button" id="441" class="btn btn-primary active buttonJS Lor">18:00 - 20:00</button></td>
								<td><button type="button" id="442" class="btn btn-primary active buttonJS Son">18:00 - 20:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="443" class="btn btn-info active buttonJS Mon">20:00 - 22:00</button></td>
								<td><button type="button" id="444" class="btn btn-info active buttonJS Tis">20:00 - 22:00</button></td>
								<td><button type="button" id="445" class="btn btn-info active buttonJS Ons">20:00 - 22:00</button></td>
								<td><button type="button" id="446" class="btn btn-info active buttonJS Tor">20:00 - 22:00</button></td>
								<td><button type="button" id="447" class="btn btn-info active buttonJS Fre">20:00 - 22:00</button></td>
								<td><button type="button" id="448" class="btn btn-info active buttonJS Lor">20:00 - 22:00</button></td>
								<td><button type="button" id="449" class="btn btn-info active buttonJS Son">20:00 - 22:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="450" class="btn btn-primary active buttonJS Mon">22:00 - 00:00</button></td>
								<td><button type="button" id="451" class="btn btn-primary active buttonJS Tis">22:00 - 00:00</button></td>
								<td><button type="button" id="452" class="btn btn-primary active buttonJS Ons">22:00 - 00:00</button></td>
								<td><button type="button" id="453" class="btn btn-primary active buttonJS Tor">22:00 - 00:00</button></td>
								<td><button type="button" id="454" class="btn btn-primary active buttonJS Fre">22:00 - 00:00</button></td>
								<td><button type="button" id="455" class="btn btn-primary active buttonJS Lor">22:00 - 00:00</button></td>
								<td><button type="button" id="456" class="btn btn-primary active buttonJS Son">22:00 - 00:00</button></td>
							  </tr>
							</tbody>
						  </table>
			</div>
	  </div>
	  <div class="carousel-item">	
		<div class="container">
		
		<h1> Vecka 5 </h1>
		
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
								<td><button type="button" id="41" class="btn btn-info active buttonJS Mon">08:00 - 10:00</button></td>
								<td><button type="button" id="42" class="btn btn-info active buttonJS Tis ">08:00 - 10:00</button></td>
								<td><button type="button" id="43" class="btn btn-info active buttonJS Ons">08:00 - 10:00</button></td>
								<td><button type="button" id="44" class="btn btn-info active buttonJS Tor">08:00 - 10:00</button></td>
								<td><button type="button" id="45" class="btn btn-info active buttonJS Fre">08:00 - 10:00</button></td>
								<td><button type="button" id="46" class="btn btn-info active buttonJS Lor">08:00 - 10:00</button></td>
								<td><button type="button" id="47" class="btn btn-info active buttonJS Son">08:00 - 10:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="48" class="btn btn-primary active buttonJS Mon">10:00 - 12:00</button></td>
								<td><button type="button" id="49" class="btn btn-primary active buttonJS Tis">10:00 - 12:00</button></td>
								<td><button type="button" id="410" class="btn btn-primary active buttonJS Ons">10:00 - 12:00</button></td>
								<td><button type="button" id="411" class="btn btn-primary active buttonJS Tor">10:00 - 12:00</button></td>
								<td><button type="button" id="412" class="btn btn-primary active buttonJS Fre">10:00 - 12:00</button></td>
								<td><button type="button" id="413" class="btn btn-primary active buttonJS Lor">10:00 - 12:00</button></td>
								<td><button type="button" id="414" class="btn btn-primary active buttonJS Son">10:00 - 12:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="415" class="btn btn-info active buttonJS Mon">12:00 - 14:00</button></td>
								<td><button type="button" id="416" class="btn btn-info active buttonJS Tis">12:00 - 14:00</button></td>
								<td><button type="button" id="417" class="btn btn-info active buttonJS Ons">12:00 - 14:00</button></td>
								<td><button type="button" id="418" class="btn btn-info active buttonJS Tor">12:00 - 14:00</button></td>
								<td><button type="button" id="419" class="btn btn-info active buttonJS Fre">12:00 - 14:00</button></td>
								<td><button type="button" id="420" class="btn btn-info active buttonJS Lor">12:00 - 14:00</button></td>
								<td><button type="button" id="421" class="btn btn-info active buttonJS Son">12:00 - 14:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="422" class="btn btn-primary active buttonJS Mon">14:00 - 16:00</button></td>
								<td><button type="button" id="423" class="btn btn-primary active buttonJS Tis">14:00 - 16:00</button></td>
								<td><button type="button" id="424" class="btn btn-primary active buttonJS Ons">14:00 - 16:00</button></td>
								<td><button type="button" id="425" class="btn btn-primary active buttonJS Tor">14:00 - 16:00</button></td>
								<td><button type="button" id="426" class="btn btn-primary active buttonJS Fre">14:00 - 16:00</button></td>
								<td><button type="button" id="427" class="btn btn-primary active buttonJS Lor">14:00 - 16:00</button></td>
								<td><button type="button" id="428" class="btn btn-primary active buttonJS Son">14:00 - 16:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="429" class="btn btn-info active buttonJS Mon">16:00 - 18:00</button></td>
								<td><button type="button" id="430" class="btn btn-info active buttonJS Tis">16:00 - 18:00</button></td>
								<td><button type="button" id="431" class="btn btn-info active buttonJS Ons">16:00 - 18:00</button></td>
								<td><button type="button" id="432" class="btn btn-info active buttonJS Tor">16:00 - 18:00</button></td>
								<td><button type="button" id="433" class="btn btn-info active buttonJS Fre">16:00 - 18:00</button></td>
								<td><button type="button" id="434" class="btn btn-info active buttonJS Lor">16:00 - 18:00</button></td>
								<td><button type="button" id="435" class="btn btn-info active buttonJS Son">16:00 - 18:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="436" class="btn btn-primary active buttonJS Mon">18:00 - 20:00</button></td>
								<td><button type="button" id="437" class="btn btn-primary active buttonJS Tis">18:00 - 20:00</button></td>
								<td><button type="button" id="438" class="btn btn-primary active buttonJS Ons">18:00 - 20:00</button></td>
								<td><button type="button" id="439" class="btn btn-primary active buttonJS Tor">18:00 - 20:00</button></td>
								<td><button type="button" id="440" class="btn btn-primary active buttonJS Fre">18:00 - 20:00</button></td>
								<td><button type="button" id="441" class="btn btn-primary active buttonJS Lor">18:00 - 20:00</button></td>
								<td><button type="button" id="442" class="btn btn-primary active buttonJS Son">18:00 - 20:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="443" class="btn btn-info active buttonJS Mon">20:00 - 22:00</button></td>
								<td><button type="button" id="444" class="btn btn-info active buttonJS Tis">20:00 - 22:00</button></td>
								<td><button type="button" id="445" class="btn btn-info active buttonJS Ons">20:00 - 22:00</button></td>
								<td><button type="button" id="446" class="btn btn-info active buttonJS Tor">20:00 - 22:00</button></td>
								<td><button type="button" id="447" class="btn btn-info active buttonJS Fre">20:00 - 22:00</button></td>
								<td><button type="button" id="448" class="btn btn-info active buttonJS Lor">20:00 - 22:00</button></td>
								<td><button type="button" id="449" class="btn btn-info active buttonJS Son">20:00 - 22:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="450" class="btn btn-primary active buttonJS Mon">22:00 - 00:00</button></td>
								<td><button type="button" id="451" class="btn btn-primary active buttonJS Tis">22:00 - 00:00</button></td>
								<td><button type="button" id="452" class="btn btn-primary active buttonJS Ons">22:00 - 00:00</button></td>
								<td><button type="button" id="453" class="btn btn-primary active buttonJS Tor">22:00 - 00:00</button></td>
								<td><button type="button" id="454" class="btn btn-primary active buttonJS Fre">22:00 - 00:00</button></td>
								<td><button type="button" id="455" class="btn btn-primary active buttonJS Lor">22:00 - 00:00</button></td>
								<td><button type="button" id="456" class="btn btn-primary active buttonJS Son">22:00 - 00:00</button></td>
							  </tr>
							</tbody>
						  </table>
			</div>
	  </div>
	  <div class="carousel-item">	
		<div class="container">
		
		<h1> Vecka 6 </h1>
		
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
								<td><button type="button" id="41" class="btn btn-info active buttonJS Mon">08:00 - 10:00</button></td>
								<td><button type="button" id="42" class="btn btn-info active buttonJS Tis ">08:00 - 10:00</button></td>
								<td><button type="button" id="43" class="btn btn-info active buttonJS Ons">08:00 - 10:00</button></td>
								<td><button type="button" id="44" class="btn btn-info active buttonJS Tor">08:00 - 10:00</button></td>
								<td><button type="button" id="45" class="btn btn-info active buttonJS Fre">08:00 - 10:00</button></td>
								<td><button type="button" id="46" class="btn btn-info active buttonJS Lor">08:00 - 10:00</button></td>
								<td><button type="button" id="47" class="btn btn-info active buttonJS Son">08:00 - 10:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="48" class="btn btn-primary active buttonJS Mon">10:00 - 12:00</button></td>
								<td><button type="button" id="49" class="btn btn-primary active buttonJS Tis">10:00 - 12:00</button></td>
								<td><button type="button" id="410" class="btn btn-primary active buttonJS Ons">10:00 - 12:00</button></td>
								<td><button type="button" id="411" class="btn btn-primary active buttonJS Tor">10:00 - 12:00</button></td>
								<td><button type="button" id="412" class="btn btn-primary active buttonJS Fre">10:00 - 12:00</button></td>
								<td><button type="button" id="413" class="btn btn-primary active buttonJS Lor">10:00 - 12:00</button></td>
								<td><button type="button" id="414" class="btn btn-primary active buttonJS Son">10:00 - 12:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="415" class="btn btn-info active buttonJS Mon">12:00 - 14:00</button></td>
								<td><button type="button" id="416" class="btn btn-info active buttonJS Tis">12:00 - 14:00</button></td>
								<td><button type="button" id="417" class="btn btn-info active buttonJS Ons">12:00 - 14:00</button></td>
								<td><button type="button" id="418" class="btn btn-info active buttonJS Tor">12:00 - 14:00</button></td>
								<td><button type="button" id="419" class="btn btn-info active buttonJS Fre">12:00 - 14:00</button></td>
								<td><button type="button" id="420" class="btn btn-info active buttonJS Lor">12:00 - 14:00</button></td>
								<td><button type="button" id="421" class="btn btn-info active buttonJS Son">12:00 - 14:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="422" class="btn btn-primary active buttonJS Mon">14:00 - 16:00</button></td>
								<td><button type="button" id="423" class="btn btn-primary active buttonJS Tis">14:00 - 16:00</button></td>
								<td><button type="button" id="424" class="btn btn-primary active buttonJS Ons">14:00 - 16:00</button></td>
								<td><button type="button" id="425" class="btn btn-primary active buttonJS Tor">14:00 - 16:00</button></td>
								<td><button type="button" id="426" class="btn btn-primary active buttonJS Fre">14:00 - 16:00</button></td>
								<td><button type="button" id="427" class="btn btn-primary active buttonJS Lor">14:00 - 16:00</button></td>
								<td><button type="button" id="428" class="btn btn-primary active buttonJS Son">14:00 - 16:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="429" class="btn btn-info active buttonJS Mon">16:00 - 18:00</button></td>
								<td><button type="button" id="430" class="btn btn-info active buttonJS Tis">16:00 - 18:00</button></td>
								<td><button type="button" id="431" class="btn btn-info active buttonJS Ons">16:00 - 18:00</button></td>
								<td><button type="button" id="432" class="btn btn-info active buttonJS Tor">16:00 - 18:00</button></td>
								<td><button type="button" id="433" class="btn btn-info active buttonJS Fre">16:00 - 18:00</button></td>
								<td><button type="button" id="434" class="btn btn-info active buttonJS Lor">16:00 - 18:00</button></td>
								<td><button type="button" id="435" class="btn btn-info active buttonJS Son">16:00 - 18:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="436" class="btn btn-primary active buttonJS Mon">18:00 - 20:00</button></td>
								<td><button type="button" id="437" class="btn btn-primary active buttonJS Tis">18:00 - 20:00</button></td>
								<td><button type="button" id="438" class="btn btn-primary active buttonJS Ons">18:00 - 20:00</button></td>
								<td><button type="button" id="439" class="btn btn-primary active buttonJS Tor">18:00 - 20:00</button></td>
								<td><button type="button" id="440" class="btn btn-primary active buttonJS Fre">18:00 - 20:00</button></td>
								<td><button type="button" id="441" class="btn btn-primary active buttonJS Lor">18:00 - 20:00</button></td>
								<td><button type="button" id="442" class="btn btn-primary active buttonJS Son">18:00 - 20:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="443" class="btn btn-info active buttonJS Mon">20:00 - 22:00</button></td>
								<td><button type="button" id="444" class="btn btn-info active buttonJS Tis">20:00 - 22:00</button></td>
								<td><button type="button" id="445" class="btn btn-info active buttonJS Ons">20:00 - 22:00</button></td>
								<td><button type="button" id="446" class="btn btn-info active buttonJS Tor">20:00 - 22:00</button></td>
								<td><button type="button" id="447" class="btn btn-info active buttonJS Fre">20:00 - 22:00</button></td>
								<td><button type="button" id="448" class="btn btn-info active buttonJS Lor">20:00 - 22:00</button></td>
								<td><button type="button" id="449" class="btn btn-info active buttonJS Son">20:00 - 22:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="450" class="btn btn-primary active buttonJS Mon">22:00 - 00:00</button></td>
								<td><button type="button" id="451" class="btn btn-primary active buttonJS Tis">22:00 - 00:00</button></td>
								<td><button type="button" id="452" class="btn btn-primary active buttonJS Ons">22:00 - 00:00</button></td>
								<td><button type="button" id="453" class="btn btn-primary active buttonJS Tor">22:00 - 00:00</button></td>
								<td><button type="button" id="454" class="btn btn-primary active buttonJS Fre">22:00 - 00:00</button></td>
								<td><button type="button" id="455" class="btn btn-primary active buttonJS Lor">22:00 - 00:00</button></td>
								<td><button type="button" id="456" class="btn btn-primary active buttonJS Son">22:00 - 00:00</button></td>
							  </tr>
							</tbody>
						  </table>
			</div>
	  </div>
	  <div class="carousel-item">	
		<div class="container">
		
		<h1> Vecka 7 </h1>
		
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
								<td><button type="button" id="41" class="btn btn-info active buttonJS Mon">08:00 - 10:00</button></td>
								<td><button type="button" id="42" class="btn btn-info active buttonJS Tis ">08:00 - 10:00</button></td>
								<td><button type="button" id="43" class="btn btn-info active buttonJS Ons">08:00 - 10:00</button></td>
								<td><button type="button" id="44" class="btn btn-info active buttonJS Tor">08:00 - 10:00</button></td>
								<td><button type="button" id="45" class="btn btn-info active buttonJS Fre">08:00 - 10:00</button></td>
								<td><button type="button" id="46" class="btn btn-info active buttonJS Lor">08:00 - 10:00</button></td>
								<td><button type="button" id="47" class="btn btn-info active buttonJS Son">08:00 - 10:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="48" class="btn btn-primary active buttonJS Mon">10:00 - 12:00</button></td>
								<td><button type="button" id="49" class="btn btn-primary active buttonJS Tis">10:00 - 12:00</button></td>
								<td><button type="button" id="410" class="btn btn-primary active buttonJS Ons">10:00 - 12:00</button></td>
								<td><button type="button" id="411" class="btn btn-primary active buttonJS Tor">10:00 - 12:00</button></td>
								<td><button type="button" id="412" class="btn btn-primary active buttonJS Fre">10:00 - 12:00</button></td>
								<td><button type="button" id="413" class="btn btn-primary active buttonJS Lor">10:00 - 12:00</button></td>
								<td><button type="button" id="414" class="btn btn-primary active buttonJS Son">10:00 - 12:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="415" class="btn btn-info active buttonJS Mon">12:00 - 14:00</button></td>
								<td><button type="button" id="416" class="btn btn-info active buttonJS Tis">12:00 - 14:00</button></td>
								<td><button type="button" id="417" class="btn btn-info active buttonJS Ons">12:00 - 14:00</button></td>
								<td><button type="button" id="418" class="btn btn-info active buttonJS Tor">12:00 - 14:00</button></td>
								<td><button type="button" id="419" class="btn btn-info active buttonJS Fre">12:00 - 14:00</button></td>
								<td><button type="button" id="420" class="btn btn-info active buttonJS Lor">12:00 - 14:00</button></td>
								<td><button type="button" id="421" class="btn btn-info active buttonJS Son">12:00 - 14:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="422" class="btn btn-primary active buttonJS Mon">14:00 - 16:00</button></td>
								<td><button type="button" id="423" class="btn btn-primary active buttonJS Tis">14:00 - 16:00</button></td>
								<td><button type="button" id="424" class="btn btn-primary active buttonJS Ons">14:00 - 16:00</button></td>
								<td><button type="button" id="425" class="btn btn-primary active buttonJS Tor">14:00 - 16:00</button></td>
								<td><button type="button" id="426" class="btn btn-primary active buttonJS Fre">14:00 - 16:00</button></td>
								<td><button type="button" id="427" class="btn btn-primary active buttonJS Lor">14:00 - 16:00</button></td>
								<td><button type="button" id="428" class="btn btn-primary active buttonJS Son">14:00 - 16:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="429" class="btn btn-info active buttonJS Mon">16:00 - 18:00</button></td>
								<td><button type="button" id="430" class="btn btn-info active buttonJS Tis">16:00 - 18:00</button></td>
								<td><button type="button" id="431" class="btn btn-info active buttonJS Ons">16:00 - 18:00</button></td>
								<td><button type="button" id="432" class="btn btn-info active buttonJS Tor">16:00 - 18:00</button></td>
								<td><button type="button" id="433" class="btn btn-info active buttonJS Fre">16:00 - 18:00</button></td>
								<td><button type="button" id="434" class="btn btn-info active buttonJS Lor">16:00 - 18:00</button></td>
								<td><button type="button" id="435" class="btn btn-info active buttonJS Son">16:00 - 18:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="436" class="btn btn-primary active buttonJS Mon">18:00 - 20:00</button></td>
								<td><button type="button" id="437" class="btn btn-primary active buttonJS Tis">18:00 - 20:00</button></td>
								<td><button type="button" id="438" class="btn btn-primary active buttonJS Ons">18:00 - 20:00</button></td>
								<td><button type="button" id="439" class="btn btn-primary active buttonJS Tor">18:00 - 20:00</button></td>
								<td><button type="button" id="440" class="btn btn-primary active buttonJS Fre">18:00 - 20:00</button></td>
								<td><button type="button" id="441" class="btn btn-primary active buttonJS Lor">18:00 - 20:00</button></td>
								<td><button type="button" id="442" class="btn btn-primary active buttonJS Son">18:00 - 20:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="443" class="btn btn-info active buttonJS Mon">20:00 - 22:00</button></td>
								<td><button type="button" id="444" class="btn btn-info active buttonJS Tis">20:00 - 22:00</button></td>
								<td><button type="button" id="445" class="btn btn-info active buttonJS Ons">20:00 - 22:00</button></td>
								<td><button type="button" id="446" class="btn btn-info active buttonJS Tor">20:00 - 22:00</button></td>
								<td><button type="button" id="447" class="btn btn-info active buttonJS Fre">20:00 - 22:00</button></td>
								<td><button type="button" id="448" class="btn btn-info active buttonJS Lor">20:00 - 22:00</button></td>
								<td><button type="button" id="449" class="btn btn-info active buttonJS Son">20:00 - 22:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="450" class="btn btn-primary active buttonJS Mon">22:00 - 00:00</button></td>
								<td><button type="button" id="451" class="btn btn-primary active buttonJS Tis">22:00 - 00:00</button></td>
								<td><button type="button" id="452" class="btn btn-primary active buttonJS Ons">22:00 - 00:00</button></td>
								<td><button type="button" id="453" class="btn btn-primary active buttonJS Tor">22:00 - 00:00</button></td>
								<td><button type="button" id="454" class="btn btn-primary active buttonJS Fre">22:00 - 00:00</button></td>
								<td><button type="button" id="455" class="btn btn-primary active buttonJS Lor">22:00 - 00:00</button></td>
								<td><button type="button" id="456" class="btn btn-primary active buttonJS Son">22:00 - 00:00</button></td>
							  </tr>
							</tbody>
						  </table>
			</div>
	  </div>
	  <div class="carousel-item">	
		<div class="container">
		
		<h1> Vecka 8 </h1>
		
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
								<td><button type="button" id="41" class="btn btn-info active buttonJS Mon">08:00 - 10:00</button></td>
								<td><button type="button" id="42" class="btn btn-info active buttonJS Tis ">08:00 - 10:00</button></td>
								<td><button type="button" id="43" class="btn btn-info active buttonJS Ons">08:00 - 10:00</button></td>
								<td><button type="button" id="44" class="btn btn-info active buttonJS Tor">08:00 - 10:00</button></td>
								<td><button type="button" id="45" class="btn btn-info active buttonJS Fre">08:00 - 10:00</button></td>
								<td><button type="button" id="46" class="btn btn-info active buttonJS Lor">08:00 - 10:00</button></td>
								<td><button type="button" id="47" class="btn btn-info active buttonJS Son">08:00 - 10:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="48" class="btn btn-primary active buttonJS Mon">10:00 - 12:00</button></td>
								<td><button type="button" id="49" class="btn btn-primary active buttonJS Tis">10:00 - 12:00</button></td>
								<td><button type="button" id="410" class="btn btn-primary active buttonJS Ons">10:00 - 12:00</button></td>
								<td><button type="button" id="411" class="btn btn-primary active buttonJS Tor">10:00 - 12:00</button></td>
								<td><button type="button" id="412" class="btn btn-primary active buttonJS Fre">10:00 - 12:00</button></td>
								<td><button type="button" id="413" class="btn btn-primary active buttonJS Lor">10:00 - 12:00</button></td>
								<td><button type="button" id="414" class="btn btn-primary active buttonJS Son">10:00 - 12:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="415" class="btn btn-info active buttonJS Mon">12:00 - 14:00</button></td>
								<td><button type="button" id="416" class="btn btn-info active buttonJS Tis">12:00 - 14:00</button></td>
								<td><button type="button" id="417" class="btn btn-info active buttonJS Ons">12:00 - 14:00</button></td>
								<td><button type="button" id="418" class="btn btn-info active buttonJS Tor">12:00 - 14:00</button></td>
								<td><button type="button" id="419" class="btn btn-info active buttonJS Fre">12:00 - 14:00</button></td>
								<td><button type="button" id="420" class="btn btn-info active buttonJS Lor">12:00 - 14:00</button></td>
								<td><button type="button" id="421" class="btn btn-info active buttonJS Son">12:00 - 14:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="422" class="btn btn-primary active buttonJS Mon">14:00 - 16:00</button></td>
								<td><button type="button" id="423" class="btn btn-primary active buttonJS Tis">14:00 - 16:00</button></td>
								<td><button type="button" id="424" class="btn btn-primary active buttonJS Ons">14:00 - 16:00</button></td>
								<td><button type="button" id="425" class="btn btn-primary active buttonJS Tor">14:00 - 16:00</button></td>
								<td><button type="button" id="426" class="btn btn-primary active buttonJS Fre">14:00 - 16:00</button></td>
								<td><button type="button" id="427" class="btn btn-primary active buttonJS Lor">14:00 - 16:00</button></td>
								<td><button type="button" id="428" class="btn btn-primary active buttonJS Son">14:00 - 16:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="429" class="btn btn-info active buttonJS Mon">16:00 - 18:00</button></td>
								<td><button type="button" id="430" class="btn btn-info active buttonJS Tis">16:00 - 18:00</button></td>
								<td><button type="button" id="431" class="btn btn-info active buttonJS Ons">16:00 - 18:00</button></td>
								<td><button type="button" id="432" class="btn btn-info active buttonJS Tor">16:00 - 18:00</button></td>
								<td><button type="button" id="433" class="btn btn-info active buttonJS Fre">16:00 - 18:00</button></td>
								<td><button type="button" id="434" class="btn btn-info active buttonJS Lor">16:00 - 18:00</button></td>
								<td><button type="button" id="435" class="btn btn-info active buttonJS Son">16:00 - 18:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="436" class="btn btn-primary active buttonJS Mon">18:00 - 20:00</button></td>
								<td><button type="button" id="437" class="btn btn-primary active buttonJS Tis">18:00 - 20:00</button></td>
								<td><button type="button" id="438" class="btn btn-primary active buttonJS Ons">18:00 - 20:00</button></td>
								<td><button type="button" id="439" class="btn btn-primary active buttonJS Tor">18:00 - 20:00</button></td>
								<td><button type="button" id="440" class="btn btn-primary active buttonJS Fre">18:00 - 20:00</button></td>
								<td><button type="button" id="441" class="btn btn-primary active buttonJS Lor">18:00 - 20:00</button></td>
								<td><button type="button" id="442" class="btn btn-primary active buttonJS Son">18:00 - 20:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="443" class="btn btn-info active buttonJS Mon">20:00 - 22:00</button></td>
								<td><button type="button" id="444" class="btn btn-info active buttonJS Tis">20:00 - 22:00</button></td>
								<td><button type="button" id="445" class="btn btn-info active buttonJS Ons">20:00 - 22:00</button></td>
								<td><button type="button" id="446" class="btn btn-info active buttonJS Tor">20:00 - 22:00</button></td>
								<td><button type="button" id="447" class="btn btn-info active buttonJS Fre">20:00 - 22:00</button></td>
								<td><button type="button" id="448" class="btn btn-info active buttonJS Lor">20:00 - 22:00</button></td>
								<td><button type="button" id="449" class="btn btn-info active buttonJS Son">20:00 - 22:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="450" class="btn btn-primary active buttonJS Mon">22:00 - 00:00</button></td>
								<td><button type="button" id="451" class="btn btn-primary active buttonJS Tis">22:00 - 00:00</button></td>
								<td><button type="button" id="452" class="btn btn-primary active buttonJS Ons">22:00 - 00:00</button></td>
								<td><button type="button" id="453" class="btn btn-primary active buttonJS Tor">22:00 - 00:00</button></td>
								<td><button type="button" id="454" class="btn btn-primary active buttonJS Fre">22:00 - 00:00</button></td>
								<td><button type="button" id="455" class="btn btn-primary active buttonJS Lor">22:00 - 00:00</button></td>
								<td><button type="button" id="456" class="btn btn-primary active buttonJS Son">22:00 - 00:00</button></td>
							  </tr>
							</tbody>
						  </table>
			</div>
	  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <img src="https://d33wubrfki0l68.cloudfront.net/3b5950262acc2194d7893c1da67dcc2c5b23d29e/d8f9e/images/large_bitmapicons/arrows/arrow-end-left.png">
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <img src="https://d33wubrfki0l68.cloudfront.net/1ce6328220e6d836b3ed5e4fce4b94de3076a5d0/d5843/images/large_bitmapicons/arrows/arrow-end-right.png"> 
  </a>
</div>

</div>

<div class="container">

<label>Tid:</label> <label id="tid"></label>
<label>Dag:</label> <label id="dag"></label>
<label>Vecka:</label> <label  id="vecka"></label>
<input type="HIDDEN" name="tid" id="tidvar"/>
<input type="HIDDEN" name="dag" id="dagvar"/>
<input type="HIDDEN" name="vecka" id="veckavar"/>
						  
<input type="submit" id="bokknapp"  name="boka" class="btn btn-info btn-md" value="Boka"/>

</div>
</form>
</body>
</html>