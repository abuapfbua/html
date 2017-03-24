<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="refresh" content="3600">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bootstrap 3, from LayoutIt!</title>
		<meta name="description" content="Source code generated using layoutit.com">
		<meta name="author" content="LayoutIt!">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-default navbar-fixed-top">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
							</button> <a class="navbar-brand" href="#">Brand</a>
						</div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active">
									<a href="wifi.html">Wifi</a>
								</li>
								<li>
									<a href="photo.php">Foto</a>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="#">Separated link</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="#">One more separated link</a>
										</li>
									</ul>
								</li>
							</ul>
							<form class="navbar-form navbar-left" role="search">
								<div class="form-group">
									<input type="text" class="form-control" />
								</div>
								<button type="submit" class="btn btn-default">
								Submit
								</button>
							</form>
							<ul class="nav navbar-nav navbar-right">
								<li>
									<a href="#">Link</a>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="#">Separated link</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</nav>
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<div class="jumbotron"></div>
							<div class="jumbotron">
								<h2>
								Hello, world!
								<p>
									This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.
								</p>
								<p>
									<a class="btn btn-primary btn-large" href="createZip.php">Learn more</a>
								</p>
							</div>
							
							<table class="table table-hover table-striped table-condensed" id="tableID" onclick="myFun(event)">
								<tbody>
									<?php
										$salida = shell_exec("ls -larth");
										$array = explode("\n", $salida);
										for ($i = 1; $i < (count($array)-1); $i++) {
										echo "<tr>";
										echo "<td>$i</td>";
										$aux = preg_split('/\s+/', $array[$i]);
										for ($l = 0; $l < count($aux); $l++) {
										echo "<td>$aux[$l]</td>";
										}
										echo "</tr>";
										}
										?>
								</tbody>
							</table>
							<table class="table table-hover table-striped table-condensed" id="tableID" onclick="myFun(event)">
								<thead>
									<tr>
										<th>
											ESSID
										</th>
										<th>
											Protocol
										</th>
										<th>
											Frequency
										</th>
										<th>
											Encryption
										</th>
										<th>
											Quality/Signal
										</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$salida = shell_exec("iwlist wlan0 scan");
										$salida=(str_replace('"','',$salida));
										$array = explode("\n", $salida);
										for ($i = 1; $i < (count($array)-2); $i++) {
										if (strpos($array[$i], 'ESSID:') !== false) {
										$array[$i]=(str_replace("ESSID:","",$array[$i]));
										echo "<tr><td>$array[$i]</td>";
										}
										if (strpos($array[$i], 'Protocol:') !== false) {
										$array[$i]=(str_replace("Protocol:","",$array[$i]));
										echo "<td>$array[$i]</td>";
										}
										if (strpos($array[$i], 'Frequency:') !== false) {
										$array[$i]=(str_replace("Frequency:","",$array[$i]));
										echo "<td>$array[$i]</td>";
										}
										if (strpos($array[$i], 'Encryption key:') !== false) {
										$array[$i]=(str_replace("Encryption key:","",$array[$i]));
										echo "<td>$array[$i]</td>";
										}
										if (strpos($array[$i], 'Quality=') !== false) {
										$array[$i]=(str_replace("Quality=","",$array[$i]));
										$array[$i]=(str_replace(" Signal level="," / ",$array[$i]));
										echo "<td>$array[$i]</td></tr>";
										}
										}
										?>
								</tbody>
							</table>
							
							<div class="carousel slide" id="carousel-385797">
								<ol class="carousel-indicators">
									<?php
										$salida = shell_exec("ls /var/www/html/camera");
										$array = explode("\n", $salida);
										for ($i = 0; $i < (count($array))-1; $i++) {
											if ($i == 0){
												echo "<li class='active' data-slide-to='$i' data-target='#carousel-385797'></li>";
											}
											else{
												echo "<li data-slide-to='$i' data-target='#carousel-385797'></li>";
											}
										}
										?>
								</ol>
								<div class="carousel-inner">
									<?php
										$salida = shell_exec("ls /var/www/html/camera");
										$array = explode("\n", $salida);
										for ($i = 0; $i < (count($array))-1; $i++) {
										
											if ($i == 0){
												echo "<div class='item active'>";
											}
											else{
												echo "<div class='item'>";
											}
											echo "<img alt='Carousel Bootstrap First' src='camera/$array[$i]' />";
											echo "<div class='carousel-caption'>";
											echo "<h4>";
											echo substr($array[$i], 11, 2).":".substr($array[$i], 14, 2)." ".substr($array[$i], 8, 2)."/".substr($array[$i], 5, 2)."/".substr($array[$i], 0, 4);
											echo "</h4>";
											echo "</div>";
											echo "</div>";
										}
										?>
								</div>
								<a class="left carousel-control" href="#carousel-385797" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-385797" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
							</div>
							<div class="jumbotron"></div>
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>
