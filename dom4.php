<?php 

$url = 'http://api.openweathermap.org/data/2.5/weather?q=Houston,us&mode=json&units=metric&appid=202e68eba3ba64da86ddc1e8c06f74cf'; 

$curl = curl_init($url);
curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
$content = curl_exec($curl);
curl_close($curl);


$parse = parse_url($url, PHP_URL_QUERY);
parse_str($parse, $output);

$x = $output['q'];  
$y = $output['appid'];


$result = json_decode($content, true);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div>Temperature:<?php echo $result["main"]["temp"]."<span>&degC</span>".PHP_EOL;?>
	</div>
		
	<div>Pressure:<?php echo $result["main"]["pressure"].'hpa'.PHP_EOL; ?>
	</div>
	<div>Wind:<?php echo $result["wind"]["speed"].'m/s'.PHP_EOL;?>
	</div>
	<?php  ?>
</body>
</html>


