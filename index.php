<?php 
	$mysqli = new mysqli("localhost", "root", "user", "test-deploy");
	if ($mysqli->connect_errno) {
	    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	// echo $mysqli->host_info . "\n";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test</title>
	<style>
		body {
			background: #eff0f1;
		}
		.container {
			margin:0 auto;
			background: #fafbfc;
			height: 50vh;
			width: 1024px;
			padding:20px;
		}
		h1{
			margin: 10px 0;
		}
		header{
			border-bottom: 1px solid #e1e4e8;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<header>
			<h1>Test</h1>
		</header>
		<div class="main">
			
		</div>
	</div>
</body>
</html>