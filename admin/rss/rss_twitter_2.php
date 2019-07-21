<?php

include_once('../lib/connectar.php');

header('Content-Type: text/xml; charset=utf-8', true); //set document header content type to be XML
$xml = new DOMDocument("1.0", "UTF-8"); // Create new DOM document.

//create "RSS" element
$rss = $xml->createElement("rss");
$rss_node = $xml->appendChild($rss); //add RSS element to XML node
$rss_node->setAttribute("version","2.0"); //set RSS version

//set attributes
$rss_node->setAttribute("xmlns:dc","http://purl.org/dc/elements/1.1/"); //xmlns:dc
$rss_node->setAttribute("xmlns:content","http://purl.org/rss/1.0/modules/content/"); //xmlns:content
$rss_node->setAttribute("xmlns:atom","http://www.w3.org/2005/Atom"); //xmlns:atom
$rss_node->setAttribute("xmlns:media","http://search.yahoo.com/mrss/");

//Create RFC822 Date format to comply with RFC822
date_default_timezone_set('Europe/Madrid');
$date_f = date("D, d M Y H:i:s T", time());
$build_date = gmdate(DATE_RFC2822, strtotime($date_f));

//create "channel" element under "RSS" element
$channel = $xml->createElement("channel");  
$channel_node = $rss_node->appendChild($channel);

//a feed should contain an atom:link element
$channel_atom_link = $xml->createElement("atom:link");  
$channel_atom_link->setAttribute("href","http://www.markhamp23.tk/admin/rss_twitter_2.xml"); //url of the feed
$channel_atom_link->setAttribute("rel","self");
$channel_atom_link->setAttribute("type","application/rss+xml");
$channel_node->appendChild($channel_atom_link);

//add general elements under "channel" node
$title_node = $channel_node->appendChild($xml->createElement("title")); //title
$title_contents = $xml->createCDATASection("Photo Gallery Markhamp23");
$title_node->appendChild($title_contents);

$description_node = $channel_node->appendChild($xml->createElement("description")); //description
$description_contents = $xml->createCDATASection("Photo Gallery Markhamp23");
$description_node->appendChild($description_contents);

$channel_node->appendChild($xml->createElement("link", "http://www.markhamp23.tk/index.php")); //website link

$copyright_node = $channel_node->appendChild($xml->createElement("copyright")); //copyright
$copyright_contents = $xml->createCDATASection("Photo Gallery Markhamp23");
$copyright_node->appendChild($copyright_contents);

$language_node = $channel_node->appendChild($xml->createElement("language")); //language
$language_contents = $xml->createCDATASection("Es-es");
$language_node->appendChild($language_contents);

$channel_node->appendChild($xml->createElement("lastBuildDate", $build_date));  //last build date
$channel_node->appendChild($xml->createElement("generator", "PHP DOMDocument")); //generator

$stmt=$conn->prepare("SELECT * FROM post where Permission = '2' ORDER BY data desc limit 10");
$stmt->execute();
while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){

if ($row['Permission'] == 2){

$orig = "&id=";
$a = htmlentities($orig);						
$item_node = $channel_node->appendChild($xml->createElement("item")); //create a new node called "item"

//create "description" node under "item"
$description_node = $item_node->appendChild($xml->createElement("description")); 

//fill description node with CDATA content
$texto = $row['Description']; 
$extraido = explode(".",$texto,2);
$extraido = $extraido[0];
$final = ("[...]");

$imageSrc = "<img src='http://www.markhamp23.tk/uploads/" . $row['Image_1'] . "' height='200px' width='300px'/>$extraido";	

$description_contents = $xml->createCDATASection($imageSrc); 
$description_node->appendChild($description_contents);
		
//Published date
date_default_timezone_set('Europe/Madrid');
$date_rfc = date(DATE_RFC2822, strtotime($row['Data']));
$pub_date = $xml->createElement("pubDate", $date_rfc);  
$pub_date_node = $item_node->appendChild($pub_date);
		
//take media:thumbnail for each image on a record
$thumbnail_node = $xml->createElement("media:thumbnail");
$thumbnail_node->setAttribute("url");

if ($row['Image_1'] != ""){
	$thumbnail_node->setAttribute("url", "http://www.markhamp23.tk/uploads/".$row['Image_1']);
}else{
$thumbnail_node->setAttribute("url", "http://www.markhamp23.tk/admin/dist/img/noimage.png");	
}
$thumbnail_node->setAttribute("width", "100%");
$thumbnail_node->setAttribute("height", "100%");
$thumbnail_node = $item_node->appendChild($thumbnail_node);
}
}	
////////////////////////////////////////////////////////////////////////////////////////
$xml->save('../rss_twitter_2.xml'); 
?>
























        
