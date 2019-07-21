<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir='ltr' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
<head>

<link rel="stylesheet" type="text/css" href="../styles/widget_css_bundle.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../styles/style_2.css" media="screen" />
<script type="text/javascript" src="../javascript/all_js.js"></script>

<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<meta content='Markhamp23 Photo Gallery' property='og:title'/>
<meta content='' property='og:description'/>

<meta content='http://u698920225.hostingerapp.com' property='og:url'/>

<title>Markhamp23 Photo Gallery</title>

<style>
/* Demo styles */
html,body{background:#222;margin:0;}
body{border-top:8px solid #000;}
.content{color:#777;font:12px/1.4 "helvetica neue",arial,sans-serif;width:620px;margin:20px auto;}
h1{font-size:12px;font-weight:normal;color:#ddd;margin:0;}
p{margin:0 0 20px}
a {color:red;text-decoration:none;}
.cred{margin-top:20px;font-size:11px;}
			
/* This rule is read by Galleria to define the gallery height: */
#galleria{height:530px;width:1020px;}
			
.centered {
  position: fixed;
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
}	
.galleria-button {
    z-index:3;
    padding:5px 10px;
    background: url("../img/closeit-hover.png") no-repeat;
	width: 20px;
    height: 20px;
    position:absolute;
    top:18px;
    left:985px;
    cursor:pointer;
}
.galleria-button:hover {
    z-index:3;
    padding:5px 10px;
    background: url("../img/closeit.png") no-repeat;
	width: 20px;
    height: 20px;
    position:absolute;
    top:18px;
    left:985px;
    cursor:pointer;
}
.galleria-theme-classic .galleria-loader {
    background: #000;
    width: 20px;
    height: 20px;
    position: fixed;
    top: 50%;
    left: 50%;  
    transform: translate(-50%, -50%);
    z-index: 2;
    display: none;
    background: url(../classic/classic-loader.gif) no-repeat 2px 2px;
}
.galleria-theme-classic .galleria-info {
    width: 40%;
    top: 15px;
    left: 15px;
    z-index: 2;
    position: absolute;
}
.galleria-theme-classic .galleria-counter {
visibility: visible;
}
#loading{
  position:fixed;
  top:-1px;
  left:0;
  right:0;
  bottom:0;
  background-color: #222;
  opacity: 1;
  transition: 0.5s;
  visibility: visible;
  width: 3840px !important;
  height: 2160px !important;
}
#loading.hidden{
  opacity: 0;
  visibility: hidden;
}



</style>
</head>
<body>

<!----------------------Post 1 Title------------------->
 
<div class='post-outer'>
<div class='post hentry'>
	
	<?php

	// Retrieve the URL variables (using PHP).			
	if(isset($_GET['id']) && !empty($_GET['id'])){

		$id = ($_GET['id']);
		$img = ($_GET['img']);
		$total_img = array();
		$total_cap = array();
		
		$stmt2=$conn->prepare('SELECT * FROM post WHERE Id=:id');
		$stmt2->execute(array(':id'=>$id));
		$row=$stmt2->fetch(PDO::FETCH_ASSOC); 

        for($i=1;$i<=25;$i++){
		if (!empty('$row[Image_'.$i.']')) $total_img[] = $row['Image_'.$i.''];
		if (!empty('$row[Caption_'.$i.']')) $total_cap[] = $row['Caption_'.$i.''];
		}
		$total_img = array_filter($total_img);
		$total_cap = array_filter($total_cap);			
		
		foreach ($total_img as $key => $value) if ($value==$img) $imgActual=($key);	

		$totalclassic = count($total_img);	
				
	?>	
	
        <!-- Adding gallery images. We use resized thumbnails here for better performance, but it’s not necessary -->

	    <div id="galleria" class="centered">
		<div id="loading"></div>
		<?php 
		for($i=$imgActual;$i<$totalclassic;$i++){
		?>	
		<div style='clear: both;'></div>
		<img src="./uploads/<?php print "$total_img[$i]"?>"
		data-title= "<?php print "$row[Title]"?>"                
		data-description= "<?php print "$total_cap[$i]"?>">
		<?php } ?>
		</div>
			
<?php } ?>	
</body>

<script>
setTimeout(function() {
  $('#loading').addClass('hidden');
}, 3000);
</script>


</html>