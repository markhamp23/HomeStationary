<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$post = new Post;
$data = json_decode(file_get_contents("php://input"));

// set product property values

if (isset($_GET["description"], $_GET["imageown"], $_GET["imageurl"], $_GET["city"], $_GET["country"])) {
	
	$data1 = $_GET["description"];
	$data2 = $_GET["imageown"];
	$data3 = $_GET["imageurl"];
	$data4 = $_GET["city"];
	$data5 = $_GET["country"];

	$post->description = $data1;
	$post->autor = $data2;
	$post->imageurl = $data3;
	$post->city = $data4;
	$post->country = $data5;
}

	header("Location: ../content/content.php");
	die();
?>