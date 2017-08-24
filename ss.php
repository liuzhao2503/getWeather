<?php
   	header("Content-Type:text/html;charset=utf-8");  //设置字符编码
	$city = $_GET["city"];
	// echo $city;
	$url="http://api.map.baidu.com/telematics/v3/weather?location=".$city."&output=json&ak=T46HTjYOZS5blHOFOzFGD0MD5MsjFSO6";
	$content = file_get_contents($url); 
	echo $content;

	
	?>