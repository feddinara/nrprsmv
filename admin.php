<!DOCTYPE html>
<html>
<head>
	<title>добавление товара | nrprsmv</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style type="text/css">
		.bg{
			background: #ea33da;
		}
		@font-face{
			src:url(18889.ttf);
			font-family: NK63;
		}
		.font{
			font-family: NK63;
			color: white;
			height: 100%;
		}
		.width200{
			width: 200px;
		}
		.mt-6{
			margin-top: 100px;
		}
		.ban{
			background: #fc83b0;
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
	</style>
</head>
<body class="bg">
	<form action="insert.php" method="GET">
		<div class="col-12 ban" style="height: 50px;">
			<h1 class="nrprsmv text-center">
				nrprsmv
			</h1>
		</div>
		<div class="width200 mx-auto mt-6">
			<h6 class="font">
				введи наименование товара
			</h6>
			<input type="" name="title">
		</div>
		<div class="width200 mx-auto">
			<h6 class="font">
				опиши его
			</h6>
			<input type="" name="description">
		</div>
		<div class="width200 mx-auto">
			<h6 class="font">
				укажить путь к изображению
			</h6>
			<input type="" name="img">
		</div>
		<div class="width200 mx-auto">
			<h6 class="font">
				напиши его цену
			</h6>
			<input type="" name="price">
		</div>
		<div class="mx-auto col-4 mt-3">
				<button type="" class="ban col-12 font" style="height: 35px;">
					добавить
				</button>				
			</div>
	</form>
</body>
</html>