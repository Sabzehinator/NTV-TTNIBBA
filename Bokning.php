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
								<td><button type="button" id="11" class="btn btn-info active buttonJS Mon 1">08:00 - 10:00</button></td>
								<td><button type="button" id="12" class="btn btn-info active buttonJS Tis 1">08:00 - 10:00</button></td>
								<td><button type="button" id="13" class="btn btn-info active buttonJS Ons 1">08:00 - 10:00</button></td>
								<td><button type="button" id="14" class="btn btn-info active buttonJS Tor 1">08:00 - 10:00</button></td>
								<td><button type="button" id="15" class="btn btn-info active buttonJS Fre 1">08:00 - 10:00</button></td>
								<td><button type="button" id="16" class="btn btn-info active buttonJS Lor 1">08:00 - 10:00</button></td>
								<td><button type="button" id="17" class="btn btn-info active buttonJS Son 1">08:00 - 10:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="18" class="btn btn-primary active buttonJS Mon 1">10:00 - 12:00</button></td>
								<td><button type="button" id="19" class="btn btn-primary active buttonJS Tis 1">10:00 - 12:00</button></td>
								<td><button type="button" id="110" class="btn btn-primary active buttonJS Ons 1">10:00 - 12:00</button></td>
								<td><button type="button" id="111" class="btn btn-primary active buttonJS Tor 1">10:00 - 12:00</button></td>
								<td><button type="button" id="112" class="btn btn-primary active buttonJS Fre 1">10:00 - 12:00</button></td>
								<td><button type="button" id="113" class="btn btn-primary active buttonJS Lor 1">10:00 - 12:00</button></td>
								<td><button type="button" id="114" class="btn btn-primary active buttonJS Son 1">10:00 - 12:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="115" class="btn btn-info active buttonJS Mon 1">12:00 - 14:00</button></td>
								<td><button type="button" id="116" class="btn btn-info active buttonJS Tis 1">12:00 - 14:00</button></td>
								<td><button type="button" id="117" class="btn btn-info active buttonJS Ons 1">12:00 - 14:00</button></td>
								<td><button type="button" id="118" class="btn btn-info active buttonJS Tor 1">12:00 - 14:00</button></td>
								<td><button type="button" id="119" class="btn btn-info active buttonJS Fre 1">12:00 - 14:00</button></td>
								<td><button type="button" id="120" class="btn btn-info active buttonJS Lor 1">12:00 - 14:00</button></td>
								<td><button type="button" id="121" class="btn btn-info active buttonJS Son 1">12:00 - 14:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="122" class="btn btn-primary active buttonJS Mon 1">14:00 - 16:00</button></td>
								<td><button type="button" id="123" class="btn btn-primary active buttonJS Tis 1">14:00 - 16:00</button></td>
								<td><button type="button" id="124" class="btn btn-primary active buttonJS Ons 1">14:00 - 16:00</button></td>
								<td><button type="button" id="125" class="btn btn-primary active buttonJS Tor 1">14:00 - 16:00</button></td>
								<td><button type="button" id="126" class="btn btn-primary active buttonJS Fre 1">14:00 - 16:00</button></td>
								<td><button type="button" id="127" class="btn btn-primary active buttonJS Lor 1">14:00 - 16:00</button></td>
								<td><button type="button" id="128" class="btn btn-primary active buttonJS Son 1">14:00 - 16:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="129" class="btn btn-info active buttonJS Mon 1">16:00 - 18:00</button></td>
								<td><button type="button" id="130" class="btn btn-info active buttonJS Tis 1">16:00 - 18:00</button></td>
								<td><button type="button" id="131" class="btn btn-info active buttonJS Ons 1">16:00 - 18:00</button></td>
								<td><button type="button" id="132" class="btn btn-info active buttonJS Tor 1">16:00 - 18:00</button></td>
								<td><button type="button" id="133" class="btn btn-info active buttonJS Fre 1">16:00 - 18:00</button></td>
								<td><button type="button" id="134" class="btn btn-info active buttonJS Lor 1">16:00 - 18:00</button></td>
								<td><button type="button" id="135" class="btn btn-info active buttonJS Son 1">16:00 - 18:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="136" class="btn btn-primary active buttonJS Mon 1">18:00 - 20:00</button></td>
								<td><button type="button" id="137" class="btn btn-primary active buttonJS Tis 1">18:00 - 20:00</button></td>
								<td><button type="button" id="138" class="btn btn-primary active buttonJS Ons 1">18:00 - 20:00</button></td>
								<td><button type="button" id="139" class="btn btn-primary active buttonJS Tor 1">18:00 - 20:00</button></td>
								<td><button type="button" id="140" class="btn btn-primary active buttonJS Fre 1">18:00 - 20:00</button></td>
								<td><button type="button" id="141" class="btn btn-primary active buttonJS Lor 1">18:00 - 20:00</button></td>
								<td><button type="button" id="142" class="btn btn-primary active buttonJS Son 1">18:00 - 20:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="143" class="btn btn-info active buttonJS Mon 1">20:00 - 22:00</button></td>
								<td><button type="button" id="144" class="btn btn-info active buttonJS Tis 1">20:00 - 22:00</button></td>
								<td><button type="button" id="145" class="btn btn-info active buttonJS Ons 1">20:00 - 22:00</button></td>
								<td><button type="button" id="146" class="btn btn-info active buttonJS Tor 1">20:00 - 22:00</button></td>
								<td><button type="button" id="147" class="btn btn-info active buttonJS Fre 1">20:00 - 22:00</button></td>
								<td><button type="button" id="148" class="btn btn-info active buttonJS Lor 1">20:00 - 22:00</button></td>
								<td><button type="button" id="149" class="btn btn-info active buttonJS Son 1">20:00 - 22:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="150" class="btn btn-primary active buttonJS Mon 1">22:00 - 00:00</button></td>
								<td><button type="button" id="151" class="btn btn-primary active buttonJS Tis 1">22:00 - 00:00</button></td>
								<td><button type="button" id="152" class="btn btn-primary active buttonJS Ons 1">22:00 - 00:00</button></td>
								<td><button type="button" id="153" class="btn btn-primary active buttonJS Tor 1">22:00 - 00:00</button></td>
								<td><button type="button" id="154" class="btn btn-primary active buttonJS Fre 1">22:00 - 00:00</button></td>
								<td><button type="button" id="155" class="btn btn-primary active buttonJS Lor 1">22:00 - 00:00</button></td>
								<td><button type="button" id="156" class="btn btn-primary active buttonJS Son 1">22:00 - 00:00</button></td>
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
								<td><button type="button" id="21" class="btn btn-info active buttonJS Mon 2">08:00 - 10:00</button></td>
								<td><button type="button" id="22" class="btn btn-info active buttonJS Tis 2">08:00 - 10:00</button></td>
								<td><button type="button" id="23" class="btn btn-info active buttonJS Ons 2">08:00 - 10:00</button></td>
								<td><button type="button" id="24" class="btn btn-info active buttonJS Tor 2">08:00 - 10:00</button></td>
								<td><button type="button" id="25" class="btn btn-info active buttonJS Fre 2">08:00 - 10:00</button></td>
								<td><button type="button" id="26" class="btn btn-info active buttonJS Lor 2">08:00 - 10:00</button></td>
								<td><button type="button" id="27" class="btn btn-info active buttonJS Son 2">08:00 - 10:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="28" class="btn btn-primary active buttonJS Mon 2">10:00 - 12:00</button></td>
								<td><button type="button" id="29" class="btn btn-primary active buttonJS Tis 2">10:00 - 12:00</button></td>
								<td><button type="button" id="210" class="btn btn-primary active buttonJS Ons 2">10:00 - 12:00</button></td>
								<td><button type="button" id="211" class="btn btn-primary active buttonJS Tor 2">10:00 - 12:00</button></td>
								<td><button type="button" id="212" class="btn btn-primary active buttonJS Fre 2">10:00 - 12:00</button></td>
								<td><button type="button" id="213" class="btn btn-primary active buttonJS Lor 2">10:00 - 12:00</button></td>
								<td><button type="button" id="214" class="btn btn-primary active buttonJS Son 2">10:00 - 12:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="215" class="btn btn-info active buttonJS Mon 2">12:00 - 14:00</button></td>
								<td><button type="button" id="216" class="btn btn-info active buttonJS Tis 2">12:00 - 14:00</button></td>
								<td><button type="button" id="217" class="btn btn-info active buttonJS Ons 2">12:00 - 14:00</button></td>
								<td><button type="button" id="218" class="btn btn-info active buttonJS Tor 2">12:00 - 14:00</button></td>
								<td><button type="button" id="219" class="btn btn-info active buttonJS Fre 2">12:00 - 14:00</button></td>
								<td><button type="button" id="220" class="btn btn-info active buttonJS Lor 2">12:00 - 14:00</button></td>
								<td><button type="button" id="221" class="btn btn-info active buttonJS Son 2">12:00 - 14:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="222" class="btn btn-primary active buttonJS Mon 2">14:00 - 16:00</button></td>
								<td><button type="button" id="223" class="btn btn-primary active buttonJS Tis 2">14:00 - 16:00</button></td>
								<td><button type="button" id="224" class="btn btn-primary active buttonJS Ons 2">14:00 - 16:00</button></td>
								<td><button type="button" id="225" class="btn btn-primary active buttonJS Tor 2">14:00 - 16:00</button></td>
								<td><button type="button" id="226" class="btn btn-primary active buttonJS Fre 2">14:00 - 16:00</button></td>
								<td><button type="button" id="227" class="btn btn-primary active buttonJS Lor 2">14:00 - 16:00</button></td>
								<td><button type="button" id="228" class="btn btn-primary active buttonJS Son 2">14:00 - 16:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="229" class="btn btn-info active buttonJS Mon 2">16:00 - 18:00</button></td>
								<td><button type="button" id="230" class="btn btn-info active buttonJS Tis 2">16:00 - 18:00</button></td>
								<td><button type="button" id="231" class="btn btn-info active buttonJS Ons 2">16:00 - 18:00</button></td>
								<td><button type="button" id="232" class="btn btn-info active buttonJS Tor 2">16:00 - 18:00</button></td>
								<td><button type="button" id="233" class="btn btn-info active buttonJS Fre 2">16:00 - 18:00</button></td>
								<td><button type="button" id="234" class="btn btn-info active buttonJS Lor 2">16:00 - 18:00</button></td>
								<td><button type="button" id="235" class="btn btn-info active buttonJS Son 2">16:00 - 18:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="236" class="btn btn-primary active buttonJS Mon 2">18:00 - 20:00</button></td>
								<td><button type="button" id="237" class="btn btn-primary active buttonJS Tis 2">18:00 - 20:00</button></td>
								<td><button type="button" id="238" class="btn btn-primary active buttonJS Ons 2">18:00 - 20:00</button></td>
								<td><button type="button" id="239" class="btn btn-primary active buttonJS Tor 2">18:00 - 20:00</button></td>
								<td><button type="button" id="240" class="btn btn-primary active buttonJS Fre 2">18:00 - 20:00</button></td>
								<td><button type="button" id="241" class="btn btn-primary active buttonJS Lor 2">18:00 - 20:00</button></td>
								<td><button type="button" id="242" class="btn btn-primary active buttonJS Son 2">18:00 - 20:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="243" class="btn btn-info active buttonJS Mon 2">20:00 - 22:00</button></td>
								<td><button type="button" id="244" class="btn btn-info active buttonJS Tis 2">20:00 - 22:00</button></td>
								<td><button type="button" id="245" class="btn btn-info active buttonJS Ons 2">20:00 - 22:00</button></td>
								<td><button type="button" id="246" class="btn btn-info active buttonJS Tor 2">20:00 - 22:00</button></td>
								<td><button type="button" id="247" class="btn btn-info active buttonJS Fre 2">20:00 - 22:00</button></td>
								<td><button type="button" id="248" class="btn btn-info active buttonJS Lor 2">20:00 - 22:00</button></td>
								<td><button type="button" id="249" class="btn btn-info active buttonJS Son 2">20:00 - 22:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="250" class="btn btn-primary active buttonJS Mon 2">22:00 - 00:00</button></td>
								<td><button type="button" id="251" class="btn btn-primary active buttonJS Tis 2">22:00 - 00:00</button></td>
								<td><button type="button" id="252" class="btn btn-primary active buttonJS Ons 2">22:00 - 00:00</button></td>
								<td><button type="button" id="253" class="btn btn-primary active buttonJS Tor 2">22:00 - 00:00</button></td>
								<td><button type="button" id="254" class="btn btn-primary active buttonJS Fre 2">22:00 - 00:00</button></td>
								<td><button type="button" id="255" class="btn btn-primary active buttonJS Lor 2">22:00 - 00:00</button></td>
								<td><button type="button" id="256" class="btn btn-primary active buttonJS Son 2">22:00 - 00:00</button></td>
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
								<td><button type="button" id="31" class="btn btn-info active buttonJS Mon 3">08:00 - 10:00</button></td>
								<td><button type="button" id="32" class="btn btn-info active buttonJS Tis 3 ">08:00 - 10:00</button></td>
								<td><button type="button" id="33" class="btn btn-info active buttonJS Ons">08:00 - 10:00</button></td>
								<td><button type="button" id="34" class="btn btn-info active buttonJS Tor">08:00 - 10:00</button></td>
								<td><button type="button" id="35" class="btn btn-info active buttonJS Fre">08:00 - 10:00</button></td>
								<td><button type="button" id="36" class="btn btn-info active buttonJS Lor">08:00 - 10:00</button></td>
								<td><button type="button" id="37" class="btn btn-info active buttonJS Son">08:00 - 10:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="38" class="btn btn-primary active buttonJS Mon 3">10:00 - 12:00</button></td>
								<td><button type="button" id="39" class="btn btn-primary active buttonJS Tis 3">10:00 - 12:00</button></td>
								<td><button type="button" id="310" class="btn btn-primary active buttonJS Ons">10:00 - 12:00</button></td>
								<td><button type="button" id="311" class="btn btn-primary active buttonJS Tor">10:00 - 12:00</button></td>
								<td><button type="button" id="312" class="btn btn-primary active buttonJS Fre">10:00 - 12:00</button></td>
								<td><button type="button" id="313" class="btn btn-primary active buttonJS Lor">10:00 - 12:00</button></td>
								<td><button type="button" id="314" class="btn btn-primary active buttonJS Son">10:00 - 12:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="315" class="btn btn-info active buttonJS Mon 3">12:00 - 14:00</button></td>
								<td><button type="button" id="316" class="btn btn-info active buttonJS Tis 3">12:00 - 14:00</button></td>
								<td><button type="button" id="317" class="btn btn-info active buttonJS Ons">12:00 - 14:00</button></td>
								<td><button type="button" id="318" class="btn btn-info active buttonJS Tor">12:00 - 14:00</button></td>
								<td><button type="button" id="319" class="btn btn-info active buttonJS Fre">12:00 - 14:00</button></td>
								<td><button type="button" id="320" class="btn btn-info active buttonJS Lor">12:00 - 14:00</button></td>
								<td><button type="button" id="321" class="btn btn-info active buttonJS Son">12:00 - 14:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="322" class="btn btn-primary active buttonJS Mon 3">14:00 - 16:00</button></td>
								<td><button type="button" id="323" class="btn btn-primary active buttonJS Tis 3">14:00 - 16:00</button></td>
								<td><button type="button" id="324" class="btn btn-primary active buttonJS Ons">14:00 - 16:00</button></td>
								<td><button type="button" id="325" class="btn btn-primary active buttonJS Tor">14:00 - 16:00</button></td>
								<td><button type="button" id="326" class="btn btn-primary active buttonJS Fre">14:00 - 16:00</button></td>
								<td><button type="button" id="327" class="btn btn-primary active buttonJS Lor">14:00 - 16:00</button></td>
								<td><button type="button" id="328" class="btn btn-primary active buttonJS Son">14:00 - 16:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="329" class="btn btn-info active buttonJS Mon 3">16:00 - 18:00</button></td>
								<td><button type="button" id="330" class="btn btn-info active buttonJS Tis 3">16:00 - 18:00</button></td>
								<td><button type="button" id="331" class="btn btn-info active buttonJS Ons">16:00 - 18:00</button></td>
								<td><button type="button" id="332" class="btn btn-info active buttonJS Tor">16:00 - 18:00</button></td>
								<td><button type="button" id="333" class="btn btn-info active buttonJS Fre">16:00 - 18:00</button></td>
								<td><button type="button" id="334" class="btn btn-info active buttonJS Lor">16:00 - 18:00</button></td>
								<td><button type="button" id="335" class="btn btn-info active buttonJS Son">16:00 - 18:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="336" class="btn btn-primary active buttonJS Mon 3">18:00 - 20:00</button></td>
								<td><button type="button" id="337" class="btn btn-primary active buttonJS Tis 3">18:00 - 20:00</button></td>
								<td><button type="button" id="338" class="btn btn-primary active buttonJS Ons">18:00 - 20:00</button></td>
								<td><button type="button" id="339" class="btn btn-primary active buttonJS Tor">18:00 - 20:00</button></td>
								<td><button type="button" id="340" class="btn btn-primary active buttonJS Fre">18:00 - 20:00</button></td>
								<td><button type="button" id="341" class="btn btn-primary active buttonJS Lor">18:00 - 20:00</button></td>
								<td><button type="button" id="342" class="btn btn-primary active buttonJS Son">18:00 - 20:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="343" class="btn btn-info active buttonJS Mon 3">20:00 - 22:00</button></td>
								<td><button type="button" id="344" class="btn btn-info active buttonJS Tis 3">20:00 - 22:00</button></td>
								<td><button type="button" id="345" class="btn btn-info active buttonJS Ons">20:00 - 22:00</button></td>
								<td><button type="button" id="346" class="btn btn-info active buttonJS Tor">20:00 - 22:00</button></td>
								<td><button type="button" id="347" class="btn btn-info active buttonJS Fre">20:00 - 22:00</button></td>
								<td><button type="button" id="348" class="btn btn-info active buttonJS Lor">20:00 - 22:00</button></td>
								<td><button type="button" id="349" class="btn btn-info active buttonJS Son">20:00 - 22:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="350" class="btn btn-primary active buttonJS Mon 3">22:00 - 00:00</button></td>
								<td><button type="button" id="351" class="btn btn-primary active buttonJS Tis 3">22:00 - 00:00</button></td>
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
								<td><button type="button" id="41" class="btn btn-info active buttonJS Mon 4">08:00 - 10:00</button></td>
								<td><button type="button" id="42" class="btn btn-info active buttonJS Tis 4 ">08:00 - 10:00</button></td>
								<td><button type="button" id="43" class="btn btn-info active buttonJS Ons">08:00 - 10:00</button></td>
								<td><button type="button" id="44" class="btn btn-info active buttonJS Tor">08:00 - 10:00</button></td>
								<td><button type="button" id="45" class="btn btn-info active buttonJS Fre">08:00 - 10:00</button></td>
								<td><button type="button" id="46" class="btn btn-info active buttonJS Lor">08:00 - 10:00</button></td>
								<td><button type="button" id="47" class="btn btn-info active buttonJS Son">08:00 - 10:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="48" class="btn btn-primary active buttonJS Mon 4">10:00 - 12:00</button></td>
								<td><button type="button" id="49" class="btn btn-primary active buttonJS Tis 4">10:00 - 12:00</button></td>
								<td><button type="button" id="410" class="btn btn-primary active buttonJS Ons">10:00 - 12:00</button></td>
								<td><button type="button" id="411" class="btn btn-primary active buttonJS Tor">10:00 - 12:00</button></td>
								<td><button type="button" id="412" class="btn btn-primary active buttonJS Fre">10:00 - 12:00</button></td>
								<td><button type="button" id="413" class="btn btn-primary active buttonJS Lor">10:00 - 12:00</button></td>
								<td><button type="button" id="414" class="btn btn-primary active buttonJS Son">10:00 - 12:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="415" class="btn btn-info active buttonJS Mon 4">12:00 - 14:00</button></td>
								<td><button type="button" id="416" class="btn btn-info active buttonJS Tis 4">12:00 - 14:00</button></td>
								<td><button type="button" id="417" class="btn btn-info active buttonJS Ons">12:00 - 14:00</button></td>
								<td><button type="button" id="418" class="btn btn-info active buttonJS Tor">12:00 - 14:00</button></td>
								<td><button type="button" id="419" class="btn btn-info active buttonJS Fre">12:00 - 14:00</button></td>
								<td><button type="button" id="420" class="btn btn-info active buttonJS Lor">12:00 - 14:00</button></td>
								<td><button type="button" id="421" class="btn btn-info active buttonJS Son">12:00 - 14:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="422" class="btn btn-primary active buttonJS Mon 4">14:00 - 16:00</button></td>
								<td><button type="button" id="423" class="btn btn-primary active buttonJS Tis 4">14:00 - 16:00</button></td>
								<td><button type="button" id="424" class="btn btn-primary active buttonJS Ons">14:00 - 16:00</button></td>
								<td><button type="button" id="425" class="btn btn-primary active buttonJS Tor">14:00 - 16:00</button></td>
								<td><button type="button" id="426" class="btn btn-primary active buttonJS Fre">14:00 - 16:00</button></td>
								<td><button type="button" id="427" class="btn btn-primary active buttonJS Lor">14:00 - 16:00</button></td>
								<td><button type="button" id="428" class="btn btn-primary active buttonJS Son">14:00 - 16:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="429" class="btn btn-info active buttonJS Mon 4">16:00 - 18:00</button></td>
								<td><button type="button" id="430" class="btn btn-info active buttonJS Tis 4">16:00 - 18:00</button></td>
								<td><button type="button" id="431" class="btn btn-info active buttonJS Ons">16:00 - 18:00</button></td>
								<td><button type="button" id="432" class="btn btn-info active buttonJS Tor">16:00 - 18:00</button></td>
								<td><button type="button" id="433" class="btn btn-info active buttonJS Fre">16:00 - 18:00</button></td>
								<td><button type="button" id="434" class="btn btn-info active buttonJS Lor">16:00 - 18:00</button></td>
								<td><button type="button" id="435" class="btn btn-info active buttonJS Son">16:00 - 18:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="436" class="btn btn-primary active buttonJS Mon 4">18:00 - 20:00</button></td>
								<td><button type="button" id="437" class="btn btn-primary active buttonJS Tis 4">18:00 - 20:00</button></td>
								<td><button type="button" id="438" class="btn btn-primary active buttonJS Ons">18:00 - 20:00</button></td>
								<td><button type="button" id="439" class="btn btn-primary active buttonJS Tor">18:00 - 20:00</button></td>
								<td><button type="button" id="440" class="btn btn-primary active buttonJS Fre">18:00 - 20:00</button></td>
								<td><button type="button" id="441" class="btn btn-primary active buttonJS Lor">18:00 - 20:00</button></td>
								<td><button type="button" id="442" class="btn btn-primary active buttonJS Son">18:00 - 20:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="443" class="btn btn-info active buttonJS Mon 4">20:00 - 22:00</button></td>
								<td><button type="button" id="444" class="btn btn-info active buttonJS Tis 4">20:00 - 22:00</button></td>
								<td><button type="button" id="445" class="btn btn-info active buttonJS Ons">20:00 - 22:00</button></td>
								<td><button type="button" id="446" class="btn btn-info active buttonJS Tor">20:00 - 22:00</button></td>
								<td><button type="button" id="447" class="btn btn-info active buttonJS Fre">20:00 - 22:00</button></td>
								<td><button type="button" id="448" class="btn btn-info active buttonJS Lor">20:00 - 22:00</button></td>
								<td><button type="button" id="449" class="btn btn-info active buttonJS Son">20:00 - 22:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="450" class="btn btn-primary active buttonJS Mon 4">22:00 - 00:00</button></td>
								<td><button type="button" id="451" class="btn btn-primary active buttonJS Tis 4">22:00 - 00:00</button></td>
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
								<td><button type="button" id="51" class="btn btn-info active buttonJS Mon 5">08:00 - 10:00</button></td>
								<td><button type="button" id="52" class="btn btn-info active buttonJS Tis 5">08:00 - 10:00</button></td>
								<td><button type="button" id="53" class="btn btn-info active buttonJS Ons 5">08:00 - 10:00</button></td>
								<td><button type="button" id="54" class="btn btn-info active buttonJS Tor 5">08:00 - 10:00</button></td>
								<td><button type="button" id="55" class="btn btn-info active buttonJS Fre 5">08:00 - 10:00</button></td>
								<td><button type="button" id="56" class="btn btn-info active buttonJS Lor 5">08:00 - 10:00</button></td>
								<td><button type="button" id="57" class="btn btn-info active buttonJS Son 5">08:00 - 10:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="58" class="btn btn-primary active buttonJS Mon 5">10:00 - 12:00</button></td>
								<td><button type="button" id="59" class="btn btn-primary active buttonJS Tis 5">10:00 - 12:00</button></td>
								<td><button type="button" id="510" class="btn btn-primary active buttonJS Ons 5">10:00 - 12:00</button></td>
								<td><button type="button" id="511" class="btn btn-primary active buttonJS Tor 5">10:00 - 12:00</button></td>
								<td><button type="button" id="512" class="btn btn-primary active buttonJS Fre 5">10:00 - 12:00</button></td>
								<td><button type="button" id="513" class="btn btn-primary active buttonJS Lor 5">10:00 - 12:00</button></td>
								<td><button type="button" id="514" class="btn btn-primary active buttonJS Son">10:00 - 12:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="515" class="btn btn-info active buttonJS Mon 5">12:00 - 14:00</button></td>
								<td><button type="button" id="516" class="btn btn-info active buttonJS Tis 5">12:00 - 14:00</button></td>
								<td><button type="button" id="517" class="btn btn-info active buttonJS Ons 5">12:00 - 14:00</button></td>
								<td><button type="button" id="518" class="btn btn-info active buttonJS Tor 5">12:00 - 14:00</button></td>
								<td><button type="button" id="519" class="btn btn-info active buttonJS Fre 5">12:00 - 14:00</button></td>
								<td><button type="button" id="520" class="btn btn-info active buttonJS Lor 5">12:00 - 14:00</button></td>
								<td><button type="button" id="521" class="btn btn-info active buttonJS Son 5">12:00 - 14:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="522" class="btn btn-primary active buttonJS Mon 5">14:00 - 16:00</button></td>
								<td><button type="button" id="523" class="btn btn-primary active buttonJS Tis 5">14:00 - 16:00</button></td>
								<td><button type="button" id="524" class="btn btn-primary active buttonJS Ons 5">14:00 - 16:00</button></td>
								<td><button type="button" id="525" class="btn btn-primary active buttonJS Tor 5">14:00 - 16:00</button></td>
								<td><button type="button" id="526" class="btn btn-primary active buttonJS Fre 5">14:00 - 16:00</button></td>
								<td><button type="button" id="527" class="btn btn-primary active buttonJS Lor 5">14:00 - 16:00</button></td>
								<td><button type="button" id="528" class="btn btn-primary active buttonJS Son 5">14:00 - 16:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="529" class="btn btn-info active buttonJS Mon 5">16:00 - 18:00</button></td>
								<td><button type="button" id="530" class="btn btn-info active buttonJS Tis 5">16:00 - 18:00</button></td>
								<td><button type="button" id="531" class="btn btn-info active buttonJS Ons 5">16:00 - 18:00</button></td>
								<td><button type="button" id="532" class="btn btn-info active buttonJS Tor 5">16:00 - 18:00</button></td>
								<td><button type="button" id="533" class="btn btn-info active buttonJS Fre 5">16:00 - 18:00</button></td>
								<td><button type="button" id="534" class="btn btn-info active buttonJS Lor 5">16:00 - 18:00</button></td>
								<td><button type="button" id="535" class="btn btn-info active buttonJS Son 5">16:00 - 18:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="536" class="btn btn-primary active buttonJS Mon 5">18:00 - 20:00</button></td>
								<td><button type="button" id="537" class="btn btn-primary active buttonJS Tis 5">18:00 - 20:00</button></td>
								<td><button type="button" id="538" class="btn btn-primary active buttonJS Ons 5">18:00 - 20:00</button></td>
								<td><button type="button" id="539" class="btn btn-primary active buttonJS Tor 5">18:00 - 20:00</button></td>
								<td><button type="button" id="540" class="btn btn-primary active buttonJS Fre 5">18:00 - 20:00</button></td>
								<td><button type="button" id="541" class="btn btn-primary active buttonJS Lor 5">18:00 - 20:00</button></td>
								<td><button type="button" id="542" class="btn btn-primary active buttonJS Son 5">18:00 - 20:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="543" class="btn btn-info active buttonJS Mon 5">20:00 - 22:00</button></td>
								<td><button type="button" id="544" class="btn btn-info active buttonJS Tis 5">20:00 - 22:00</button></td>
								<td><button type="button" id="545" class="btn btn-info active buttonJS Ons 5">20:00 - 22:00</button></td>
								<td><button type="button" id="546" class="btn btn-info active buttonJS Tor 5">20:00 - 22:00</button></td>
								<td><button type="button" id="547" class="btn btn-info active buttonJS Fre 5">20:00 - 22:00</button></td>
								<td><button type="button" id="548" class="btn btn-info active buttonJS Lor 5">20:00 - 22:00</button></td>
								<td><button type="button" id="549" class="btn btn-info active buttonJS Son 5">20:00 - 22:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="550" class="btn btn-primary active buttonJS Mon 5">22:00 - 00:00</button></td>
								<td><button type="button" id="551" class="btn btn-primary active buttonJS Tis 5">22:00 - 00:00</button></td>
								<td><button type="button" id="552" class="btn btn-primary active buttonJS Ons 5">22:00 - 00:00</button></td>
								<td><button type="button" id="553" class="btn btn-primary active buttonJS Tor 5">22:00 - 00:00</button></td>
								<td><button type="button" id="554" class="btn btn-primary active buttonJS Fre 5">22:00 - 00:00</button></td>
								<td><button type="button" id="555" class="btn btn-primary active buttonJS Lor 5">22:00 - 00:00</button></td>
								<td><button type="button" id="556" class="btn btn-primary active buttonJS Son 5">22:00 - 00:00</button></td>
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
								<td><button type="button" id="61" class="btn btn-info active buttonJS Mon 6">08:00 - 10:00</button></td>
								<td><button type="button" id="62" class="btn btn-info active buttonJS Tis 6">08:00 - 10:00</button></td>
								<td><button type="button" id="63" class="btn btn-info active buttonJS Ons 6">08:00 - 10:00</button></td>
								<td><button type="button" id="64" class="btn btn-info active buttonJS Tor 6">08:00 - 10:00</button></td>
								<td><button type="button" id="65" class="btn btn-info active buttonJS Fre 6">08:00 - 10:00</button></td>
								<td><button type="button" id="66" class="btn btn-info active buttonJS Lor 6">08:00 - 10:00</button></td>
								<td><button type="button" id="67" class="btn btn-info active buttonJS Son 6">08:00 - 10:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="68" class="btn btn-primary active buttonJS Mon 6">10:00 - 12:00</button></td>
								<td><button type="button" id="69" class="btn btn-primary active buttonJS Tis 6">10:00 - 12:00</button></td>
								<td><button type="button" id="610" class="btn btn-primary active buttonJS Ons 6">10:00 - 12:00</button></td>
								<td><button type="button" id="611" class="btn btn-primary active buttonJS Tor 6">10:00 - 12:00</button></td>
								<td><button type="button" id="612" class="btn btn-primary active buttonJS Fre 6">10:00 - 12:00</button></td>
								<td><button type="button" id="613" class="btn btn-primary active buttonJS Lor 6">10:00 - 12:00</button></td>
								<td><button type="button" id="614" class="btn btn-primary active buttonJS Son 6">10:00 - 12:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="615" class="btn btn-info active buttonJS Mon 6">12:00 - 14:00</button></td>
								<td><button type="button" id="616" class="btn btn-info active buttonJS Tis 6">12:00 - 14:00</button></td>
								<td><button type="button" id="617" class="btn btn-info active buttonJS Ons 6">12:00 - 14:00</button></td>
								<td><button type="button" id="618" class="btn btn-info active buttonJS Tor 6">12:00 - 14:00</button></td>
								<td><button type="button" id="619" class="btn btn-info active buttonJS Fre 6">12:00 - 14:00</button></td>
								<td><button type="button" id="620" class="btn btn-info active buttonJS Lor 6">12:00 - 14:00</button></td>
								<td><button type="button" id="621" class="btn btn-info active buttonJS Son 6">12:00 - 14:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="622" class="btn btn-primary active buttonJS Mon 6">14:00 - 16:00</button></td>
								<td><button type="button" id="623" class="btn btn-primary active buttonJS Tis 6">14:00 - 16:00</button></td>
								<td><button type="button" id="624" class="btn btn-primary active buttonJS Ons 6">14:00 - 16:00</button></td>
								<td><button type="button" id="625" class="btn btn-primary active buttonJS Tor 6">14:00 - 16:00</button></td>
								<td><button type="button" id="626" class="btn btn-primary active buttonJS Fre 6">14:00 - 16:00</button></td>
								<td><button type="button" id="627" class="btn btn-primary active buttonJS Lor 6">14:00 - 16:00</button></td>
								<td><button type="button" id="628" class="btn btn-primary active buttonJS Son 6">14:00 - 16:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="629" class="btn btn-info active buttonJS Mon 6">16:00 - 18:00</button></td>
								<td><button type="button" id="630" class="btn btn-info active buttonJS Tis 6">16:00 - 18:00</button></td>
								<td><button type="button" id="631" class="btn btn-info active buttonJS Ons 6">16:00 - 18:00</button></td>
								<td><button type="button" id="632" class="btn btn-info active buttonJS Tor 6">16:00 - 18:00</button></td>
								<td><button type="button" id="633" class="btn btn-info active buttonJS Fre 6">16:00 - 18:00</button></td>
								<td><button type="button" id="634" class="btn btn-info active buttonJS Lor 6">16:00 - 18:00</button></td>
								<td><button type="button" id="635" class="btn btn-info active buttonJS Son 6">16:00 - 18:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="636" class="btn btn-primary active buttonJS Mon 6">18:00 - 20:00</button></td>
								<td><button type="button" id="637" class="btn btn-primary active buttonJS Tis 6">18:00 - 20:00</button></td>
								<td><button type="button" id="638" class="btn btn-primary active buttonJS Ons 6">18:00 - 20:00</button></td>
								<td><button type="button" id="639" class="btn btn-primary active buttonJS Tor 6">18:00 - 20:00</button></td>
								<td><button type="button" id="640" class="btn btn-primary active buttonJS Fre 6">18:00 - 20:00</button></td>
								<td><button type="button" id="641" class="btn btn-primary active buttonJS Lor 6">18:00 - 20:00</button></td>
								<td><button type="button" id="642" class="btn btn-primary active buttonJS Son 6">18:00 - 20:00</button></td>
							  </tr
							  <tr>
								<td><button type="button" id="643" class="btn btn-info active buttonJS Mon 6">20:00 - 22:00</button></td>
								<td><button type="button" id="644" class="btn btn-info active buttonJS Tis 6">20:00 - 22:00</button></td>
								<td><button type="button" id="645" class="btn btn-info active buttonJS Ons 6">20:00 - 22:00</button></td>
								<td><button type="button" id="646" class="btn btn-info active buttonJS Tor 6">20:00 - 22:00</button></td>
								<td><button type="button" id="647" class="btn btn-info active buttonJS Fre 6">20:00 - 22:00</button></td>
								<td><button type="button" id="648" class="btn btn-info active buttonJS Lor 6">20:00 - 22:00</button></td>
								<td><button type="button" id="649" class="btn btn-info active buttonJS Son 6">20:00 - 22:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="650" class="btn btn-primary active buttonJS Mon 6">22:00 - 00:00</button></td>
								<td><button type="button" id="651" class="btn btn-primary active buttonJS Tis 6">22:00 - 00:00</button></td>
								<td><button type="button" id="652" class="btn btn-primary active buttonJS Ons 6">22:00 - 00:00</button></td>
								<td><button type="button" id="653" class="btn btn-primary active buttonJS Tor 6">22:00 - 00:00</button></td>
								<td><button type="button" id="654" class="btn btn-primary active buttonJS Fre 6">22:00 - 00:00</button></td>
								<td><button type="button" id="655" class="btn btn-primary active buttonJS Lor 6">22:00 - 00:00</button></td>
								<td><button type="button" id="656" class="btn btn-primary active buttonJS Son 6">22:00 - 00:00</button></td>
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
								<td><button type="button" id="71" class="btn btn-info active buttonJS Mon 7">08:00 - 10:00</button></td>
								<td><button type="button" id="72" class="btn btn-info active buttonJS Tis 7">08:00 - 10:00</button></td>
								<td><button type="button" id="73" class="btn btn-info active buttonJS Ons 7">08:00 - 10:00</button></td>
								<td><button type="button" id="74" class="btn btn-info active buttonJS Tor 7">08:00 - 10:00</button></td>
								<td><button type="button" id="75" class="btn btn-info active buttonJS Fre 7">08:00 - 10:00</button></td>
								<td><button type="button" id="76" class="btn btn-info active buttonJS Lor 7">08:00 - 10:00</button></td>
								<td><button type="button" id="77" class="btn btn-info active buttonJS Son 7">08:00 - 10:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="78" class="btn btn-primary active buttonJS Mon 7">10:00 - 12:00</button></td>
								<td><button type="button" id="79" class="btn btn-primary active buttonJS Tis 7">10:00 - 12:00</button></td>
								<td><button type="button" id="710" class="btn btn-primary active buttonJS Ons 7">10:00 - 12:00</button></td>
								<td><button type="button" id="711" class="btn btn-primary active buttonJS Tor 7">10:00 - 12:00</button></td>
								<td><button type="button" id="712" class="btn btn-primary active buttonJS Fre 7">10:00 - 12:00</button></td>
								<td><button type="button" id="713" class="btn btn-primary active buttonJS Lor 7">10:00 - 12:00</button></td>
								<td><button type="button" id="714" class="btn btn-primary active buttonJS Son 7">10:00 - 12:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="715" class="btn btn-info active buttonJS Mon 7">12:00 - 14:00</button></td>
								<td><button type="button" id="716" class="btn btn-info active buttonJS Tis 7">12:00 - 14:00</button></td>
								<td><button type="button" id="717" class="btn btn-info active buttonJS Ons 7">12:00 - 14:00</button></td>
								<td><button type="button" id="718" class="btn btn-info active buttonJS Tor 7">12:00 - 14:00</button></td>
								<td><button type="button" id="719" class="btn btn-info active buttonJS Fre 7">12:00 - 14:00</button></td>
								<td><button type="button" id="720" class="btn btn-info active buttonJS Lor 7">12:00 - 14:00</button></td>
								<td><button type="button" id="721" class="btn btn-info active buttonJS Son 7">12:00 - 14:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="722" class="btn btn-primary active buttonJS Mon 7">14:00 - 16:00</button></td>
								<td><button type="button" id="723" class="btn btn-primary active buttonJS Tis 7">14:00 - 16:00</button></td>
								<td><button type="button" id="724" class="btn btn-primary active buttonJS Ons 7">14:00 - 16:00</button></td>
								<td><button type="button" id="725" class="btn btn-primary active buttonJS Tor 7">14:00 - 16:00</button></td>
								<td><button type="button" id="726" class="btn btn-primary active buttonJS Fre 7">14:00 - 16:00</button></td>
								<td><button type="button" id="727" class="btn btn-primary active buttonJS Lor 7">14:00 - 16:00</button></td>
								<td><button type="button" id="728" class="btn btn-primary active buttonJS Son 7">14:00 - 16:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="729" class="btn btn-info active buttonJS Mon 7">16:00 - 18:00</button></td>
								<td><button type="button" id="730" class="btn btn-info active buttonJS Tis 7">16:00 - 18:00</button></td>
								<td><button type="button" id="731" class="btn btn-info active buttonJS Ons 7">16:00 - 18:00</button></td>
								<td><button type="button" id="732" class="btn btn-info active buttonJS Tor 7">16:00 - 18:00</button></td>
								<td><button type="button" id="733" class="btn btn-info active buttonJS Fre 7">16:00 - 18:00</button></td>
								<td><button type="button" id="734" class="btn btn-info active buttonJS Lor 7">16:00 - 18:00</button></td>
								<td><button type="button" id="735" class="btn btn-info active buttonJS Son 7">16:00 - 18:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="736" class="btn btn-primary active buttonJS Mon 7">18:00 - 20:00</button></td>
								<td><button type="button" id="737" class="btn btn-primary active buttonJS Tis 7">18:00 - 20:00</button></td>
								<td><button type="button" id="738" class="btn btn-primary active buttonJS Ons 7">18:00 - 20:00</button></td>
								<td><button type="button" id="739" class="btn btn-primary active buttonJS Tor 7">18:00 - 20:00</button></td>
								<td><button type="button" id="740" class="btn btn-primary active buttonJS Fre 7">18:00 - 20:00</button></td>
								<td><button type="button" id="741" class="btn btn-primary active buttonJS Lor 7">18:00 - 20:00</button></td>
								<td><button type="button" id="772" class="btn btn-primary active buttonJS Son 7">18:00 - 20:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="743" class="btn btn-info active buttonJS Mon 7">20:00 - 22:00</button></td>
								<td><button type="button" id="744" class="btn btn-info active buttonJS Tis 7">20:00 - 22:00</button></td>
								<td><button type="button" id="745" class="btn btn-info active buttonJS Ons 7">20:00 - 22:00</button></td>
								<td><button type="button" id="746" class="btn btn-info active buttonJS Tor 7">20:00 - 22:00</button></td>
								<td><button type="button" id="747" class="btn btn-info active buttonJS Fre 7">20:00 - 22:00</button></td>
								<td><button type="button" id="748" class="btn btn-info active buttonJS Lor 7">20:00 - 22:00</button></td>
								<td><button type="button" id="749" class="btn btn-info active buttonJS Son 7">20:00 - 22:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="750" class="btn btn-primary active buttonJS Mon 7">22:00 - 00:00</button></td>
								<td><button type="button" id="751" class="btn btn-primary active buttonJS Tis 7">22:00 - 00:00</button></td>
								<td><button type="button" id="752" class="btn btn-primary active buttonJS Ons 7">22:00 - 00:00</button></td>
								<td><button type="button" id="753" class="btn btn-primary active buttonJS Tor 7">22:00 - 00:00</button></td>
								<td><button type="button" id="754" class="btn btn-primary active buttonJS Fre 7">22:00 - 00:00</button></td>
								<td><button type="button" id="755" class="btn btn-primary active buttonJS Lor 7">22:00 - 00:00</button></td>
								<td><button type="button" id="756" class="btn btn-primary active buttonJS Son 7">22:00 - 00:00</button></td>
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
								<td><button type="button" id="81" class="btn btn-info active buttonJS Mon 8">08:00 - 10:00</button></td>
								<td><button type="button" id="82" class="btn btn-info active buttonJS Tis 8">08:00 - 10:00</button></td>
								<td><button type="button" id="83" class="btn btn-info active buttonJS Ons 8">08:00 - 10:00</button></td>
								<td><button type="button" id="84" class="btn btn-info active buttonJS Tor 8">08:00 - 10:00</button></td>
								<td><button type="button" id="85" class="btn btn-info active buttonJS Fre 8">08:00 - 10:00</button></td>
								<td><button type="button" id="86" class="btn btn-info active buttonJS Lor 8">08:00 - 10:00</button></td>
								<td><button type="button" id="87" class="btn btn-info active buttonJS Son 8">08:00 - 10:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="88" class="btn btn-primary active buttonJS Mon 8">10:00 - 12:00</button></td>
								<td><button type="button" id="89" class="btn btn-primary active buttonJS Tis 8">10:00 - 12:00</button></td>
								<td><button type="button" id="810" class="btn btn-primary active buttonJS Ons 8">10:00 - 12:00</button></td>
								<td><button type="button" id="811" class="btn btn-primary active buttonJS Tor 8">10:00 - 12:00</button></td>
								<td><button type="button" id="812" class="btn btn-primary active buttonJS Fre 8">10:00 - 12:00</button></td>
								<td><button type="button" id="813" class="btn btn-primary active buttonJS Lor 8">10:00 - 12:00</button></td>
								<td><button type="button" id="814" class="btn btn-primary active buttonJS Son 8">10:00 - 12:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="815" class="btn btn-info active buttonJS Mon 8">12:00 - 14:00</button></td>
								<td><button type="button" id="816" class="btn btn-info active buttonJS Tis 8">12:00 - 14:00</button></td>
								<td><button type="button" id="817" class="btn btn-info active buttonJS Ons 8">12:00 - 14:00</button></td>
								<td><button type="button" id="818" class="btn btn-info active buttonJS Tor 8">12:00 - 14:00</button></td>
								<td><button type="button" id="819" class="btn btn-info active buttonJS Fre 8">12:00 - 14:00</button></td>
								<td><button type="button" id="820" class="btn btn-info active buttonJS Lor 8">12:00 - 14:00</button></td>
								<td><button type="button" id="821" class="btn btn-info active buttonJS Son 8">12:00 - 14:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="822" class="btn btn-primary active buttonJS Mon 8">14:00 - 16:00</button></td>
								<td><button type="button" id="823" class="btn btn-primary active buttonJS Tis 8">14:00 - 16:00</button></td>
								<td><button type="button" id="824" class="btn btn-primary active buttonJS Ons 8">14:00 - 16:00</button></td>
								<td><button type="button" id="825" class="btn btn-primary active buttonJS Tor 8">14:00 - 16:00</button></td>
								<td><button type="button" id="826" class="btn btn-primary active buttonJS Fre 8">14:00 - 16:00</button></td>
								<td><button type="button" id="827" class="btn btn-primary active buttonJS Lor 8">14:00 - 16:00</button></td>
								<td><button type="button" id="828" class="btn btn-primary active buttonJS Son 8">14:00 - 16:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="829" class="btn btn-info active buttonJS Mon 8">16:00 - 18:00</button></td>
								<td><button type="button" id="830" class="btn btn-info active buttonJS Tis 8">16:00 - 18:00</button></td>
								<td><button type="button" id="831" class="btn btn-info active buttonJS Ons 8">16:00 - 18:00</button></td>
								<td><button type="button" id="832" class="btn btn-info active buttonJS Tor 8">16:00 - 18:00</button></td>
								<td><button type="button" id="833" class="btn btn-info active buttonJS Fre 8">16:00 - 18:00</button></td>
								<td><button type="button" id="834" class="btn btn-info active buttonJS Lor 8">16:00 - 18:00</button></td>
								<td><button type="button" id="835" class="btn btn-info active buttonJS Son 8">16:00 - 18:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="836" class="btn btn-primary active buttonJS Mon 8">18:00 - 20:00</button></td>
								<td><button type="button" id="837" class="btn btn-primary active buttonJS Tis 8">18:00 - 20:00</button></td>
								<td><button type="button" id="838" class="btn btn-primary active buttonJS Ons 8">18:00 - 20:00</button></td>
								<td><button type="button" id="839" class="btn btn-primary active buttonJS Tor 8">18:00 - 20:00</button></td>
								<td><button type="button" id="840" class="btn btn-primary active buttonJS Fre 8">18:00 - 20:00</button></td>
								<td><button type="button" id="841" class="btn btn-primary active buttonJS Lor 8">18:00 - 20:00</button></td>
								<td><button type="button" id="842" class="btn btn-primary active buttonJS Son 8">18:00 - 20:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="843" class="btn btn-info active buttonJS Mon 8">20:00 - 22:00</button></td>
								<td><button type="button" id="844" class="btn btn-info active buttonJS Tis 8">20:00 - 22:00</button></td>
								<td><button type="button" id="845" class="btn btn-info active buttonJS Ons 8">20:00 - 22:00</button></td>
								<td><button type="button" id="846" class="btn btn-info active buttonJS Tor 8">20:00 - 22:00</button></td>
								<td><button type="button" id="847" class="btn btn-info active buttonJS Fre 8">20:00 - 22:00</button></td>
								<td><button type="button" id="848" class="btn btn-info active buttonJS Lor 8">20:00 - 22:00</button></td>
								<td><button type="button" id="849" class="btn btn-info active buttonJS Son 8">20:00 - 22:00</button></td>
							  </tr>
							  <tr>
								<td><button type="button" id="850" class="btn btn-primary active buttonJS Mon 8">22:00 - 00:00</button></td>
								<td><button type="button" id="851" class="btn btn-primary active buttonJS Tis 8">22:00 - 00:00</button></td>
								<td><button type="button" id="852" class="btn btn-primary active buttonJS Ons 8">22:00 - 00:00</button></td>
								<td><button type="button" id="853" class="btn btn-primary active buttonJS Tor 8">22:00 - 00:00</button></td>
								<td><button type="button" id="854" class="btn btn-primary active buttonJS Fre 8">22:00 - 00:00</button></td>
								<td><button type="button" id="855" class="btn btn-primary active buttonJS Lor 8">22:00 - 00:00</button></td>
								<td><button type="button" id="856" class="btn btn-primary active buttonJS Son 8">22:00 - 00:00</button></td>
							  </tr>
							</tbody>
						  </table>
			</div>
	  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <img src="https://d33wubrfki0l68.cloudfront.net/3b5950262acc2194d7893c1da67dcc2c5b23d29e/d8f9e/images/large_bitmapicons/arrows/arrow-end-left.png" class="height: 100%">
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <img src="https://d33wubrfki0l68.cloudfront.net/1ce6328220e6d836b3ed5e4fce4b94de3076a5d0/d5843/images/large_bitmapicons/arrows/arrow-end-right.png" class="height: 100%"> 
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