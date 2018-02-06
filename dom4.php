<?php 

$content = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Houston,us&mode=json&units=metric&appid=202e68eba3ba64da86ddc1e8c06f74cf');

$result = json_decode($content, true);

$name = $_GET["q"];
$json = $_GET["mode"];
$temp = $_GET["units"];
$key = $_GET["appid"]

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div>City:<?php echo $result ["name"].PHP_EOL;?></div>
	<div>Temperature:<?php echo $result["main"]["temp"]."<span>&degC</span>".PHP_EOL;?>
	</div>
		
	<div>Pressure:<?php echo $result["main"]["pressure"].'hpa'.PHP_EOL; ?>
	</div>
	<div>Wind:<?php echo $result["wind"]["speed"].'m/s'.PHP_EOL;?>
	</div>
	<?php  ?>
</body>
</html>


