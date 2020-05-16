<?php

// instantiate product object
//include_once './apiPost.php';

// $database = new Database();
// $db = $database->getConnection();

// $post = new Post($db);
$data = json_decode(file_get_contents("php://input"));

// set product property values

if (isset($_GET["description"], $_GET["city"], $_GET["country"],$_GET["imageown"],$_GET["link"],$_GET["imageurl"])) {
	
	$data1 = $_GET["description"];
	$data2 = $_GET["city"];
	$data3 = $_GET["country"];
	$data4 = $_GET["imageown"];
	$data5 = $_GET["link"];
	$data6 = $_GET["imageurl"];

	$post->description = $data1;
	$post->city = $data2;
	$post->country = $data3;
	$post->imageown = $data4;
	$post->link = $data5;
	$post->imageurl = $data6;

	header("Location: ./");

}else{
	$post->description = $data->description;
	$post->city = $data->city;
	$post->country = $data->country;
	$post->imageown = $data->imageown;
	$post->link = $data->link;
	$post->imageurl = $data->imageurl;

	header("Location: ./");


}

?>