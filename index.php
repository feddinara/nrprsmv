<!DOCTYPE html>
<html>
<head>
	<title>
		nrprsmv
	</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<meta charset="utf-8">
	<style type="text/css">
		@font-face{
			src:url(18889.ttf);
			font-family: NK63;
		}
		.font{
			font-family: NK63;
			color: white;
			height: 100%;
		}
		.font3{
			font-family: NK63;
			color: black;
			height: 100%;
		}
		.font2{
			font-family: NK63;
			color: #817cdc;
			height: 100%;
		}
		@font-face{
			src:url(19317.ttf);
			font-family: MariageAntD;
		}
		.nrprsmv{
			font-family: MariageAntD;
			color: white;
			height: 100%;
		}
		.ban{
			background: #f992db;
		}
		.add{
			background: #c8bff6;
		}
		.bg{
			background: #e183fc;
		}
		.mr-6{
			margin-right: 500px;
		}
		.bg2{
			background: #c06ff2;
		}
	</style>
</head>
<body class="bg">
	<form action="index.php" method="GET">
		<?php 
			$zapros = mysqli_connect("127.0.0.1", "root", "", "firstproject"); 
			$query_text = "SELECT * FROM firstproject";
			$query = mysqli_query($zapros, $query_text); 
			$stroka = $query->fetch_assoc();
			$stroka2 = $query->fetch_assoc();
			$stroka3 = $query->fetch_assoc();
			$stroka4 = $query->fetch_assoc();
			$stroka5 = $query->fetch_assoc();
			$stroka6 = $query->fetch_assoc();
		 ?>
		<!--шапка-->
		<div class="col-12 ban mb-0" style="">
			<div class="row">
				<div class="add mt-2 ml-3 border border-light" style="width: 130px; height: 40px;">
					<p class="text-center mt-2">
						<a href="admin.php" class="font">
							добавить товар
						</a>
					</p>		
				</div>
				<div class="col-2" style="margin-left: 475px;">
					<h1 class="nrprsmv">
						nrprsmv
					</h1>				
				</div>			
			</div>
		</div>
		<!--шапка2-->
		<div class="col-12 bg-white mt-0 pt-0" style="">
			<div class="col-10 mx-auto">
				<div class="row">
					<div class="col-3">
						<h3 class="text-center">
							<a href="admin.php" class="font2">
								NEW
							</a>
						</h3>			
					</div>
					<div class="col-3">
						<h3 class="text-center">
							<a href="admin.php" class="font2">
								WOMAN
							</a>
						</h3>			
					</div>
					<div class="col-3">
						<h3 class="text-center">
							<a href="admin.php" class="font2">
								MAN
							</a>
						</h3>			
					</div>
					<div class="col-3">
						<h3 class="text-center">
							<a href="admin.php" class="font2">
								SECOND SEASON
							</a>
						</h3>			
					</div>
				</div>		
			</div>
		</div>
		<!--список-->
		<div class="col-10 mx-auto">
			<?php 
				echo "<h4 class='font'> привет, " . $_GET["name"] . "! вот твой список желаний.";
			?>
		</div>
		<div class="bg2 col-10 mx-auto" style="">
			<div class="row">
				<div class="col-4 border-light border-right border-bottom" style="">
					<?php 
						echo "<h3 class='font3 text-center' style='height: 30px;'>" . $stroka["title"] . "</h3>";
						echo "<p class='font text-center mt-2'style='height: 30px;'>". $stroka["description"] . "</p>";
						echo "<div class='col-10 mt-2 mx-auto' style=''> <img class='w-100' src='" .  $stroka["img"] . "'> </div>";
						echo "<p class='font text-center mt-2' style='height: 30px;'>" . $stroka["price"] . " руб</p>";
					?>
				</div>
				<div class="col-4 border-light border-right border-bottom" style="">
					<?php 
						echo "<h3 class='font3 text-center' style='height: 30px;'>" . $stroka2["title"] . "</h3>";
						echo "<p class='font text-center mt-2'style='height: 30px;'>". $stroka2["description"] . "</p>";
						echo "<div class='col-10 mt-2 mx-auto' style=''> <img class='w-100' src='" .  $stroka2["img"] . "'> </div>";
						echo "<p class='font text-center mt-2' style='height: 30px;'>" . $stroka2["price"] . " руб</p>";
					?>
				</div>
				<div class="col-4 border-light border-bottom" style="">
					<?php 
						echo "<h3 class='font3 text-center' style='height: 30px;'>" . $stroka3["title"] . "</h3>";
						echo "<p class='font text-center mt-2'style='height: 30px;'>". $stroka3["description"] . "</p>";
						echo "<div class='col-10 mt-2 mx-auto' style=''> <img class='w-100' src='" .  $stroka3["img"] . "'> </div>";
						echo "<p class='font text-center mt-2' style='height: 30px;'>" . $stroka3["price"] . " руб</p>";
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-4 border-light border-right" style="">
					<?php 
						echo "<h3 class='font3 text-center' style='height: 30px;'>" . $stroka4["title"] . "</h3>";
						echo "<p class='font text-center mt-2'style='height: 30px;'>". $stroka4["description"] . "</p>";
						echo "<div class='col-10 mt-2 mx-auto' style=''> <img class='w-100' src='" .  $stroka4["img"] . "'> </div>";
						echo "<p class='font text-center mt-2' style='height: 30px;'>" . $stroka4["price"] . " руб</p>";
					?>
				</div>
				<div class="col-4 border-light border-right" style="">
					<?php 
						echo "<h3 class='font3 text-center' style='height: 30px;'>" . $stroka5["title"] . "</h3>";
						echo "<p class='font text-center mt-2'style='height: 30px;'>". $stroka5["description"] . "</p>";
						echo "<div class='col-10 mt-2 mx-auto' style=''> <img class='w-100' src='" .  $stroka5["img"] . "'> </div>";
						echo "<p class='font text-center mt-2' style='height: 30px;'>" . $stroka5["price"] . " руб</p>";
					?>
				</div>
				<div class="col-4" style="">
					<?php 
						echo "<h3 class='font3 text-center' style='height: 30px;'>" . $stroka6["title"] . "</h3>";
						echo "<p class='font text-center mt-2'style='height: 30px;'>". $stroka6["description"] . "</p>";
						echo "<div class='col-10 mt-2 mx-auto' style=''> <img class='w-100' src='" .  $stroka6["img"] . "'> </div>";
						echo "<p class='font text-center mt-2' style='height: 30px;'>" . $stroka6["price"] . " руб</p>";
					?>
				</div>
			</div>
		</div>
	</form>
</body>
</html>