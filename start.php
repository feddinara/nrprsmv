<!DOCTYPE html>
<html>
<head>
	<title>войдите в аккаунт | nrprsmv</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style type="text/css">
		.bg{
			background: #ea33da;
		}
		.mt-6{
			margin-top: 150px;
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
			background: #fc83b0;
		}
	</style>
</head>
<body class="bg">
	<form action="index.php" method="GET">
		<div class="col-12 ban" style="height: 50px;">
			<h1 class="nrprsmv text-center">
				nrprsmv
			</h1>
		</div>
		<div class="col-4 mx-auto mt-6">
			<h5 class="font">
				для дальнейшей работы, введите ваше имя
			</h5>
			<input type="text" name="name" class="form-control">	
		</div>
		<div class="col-4 mx-auto mt-2">	
			<h5 class="font">
				и пароль
			</h5>
			<input type="password" name="pass" class="form-control">
			<div class="mx-auto col-10 mt-3">
				<button type="" class="ban col-12 font" style="height: 35px;">
							войти
				</button>				
			</div>
		</div>
	</form>
</body>
</html>