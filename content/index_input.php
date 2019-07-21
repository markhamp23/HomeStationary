<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir='ltr' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
<head>

<link rel="stylesheet" type="text/css" href="styles/widget_css_bundle.css" media="screen" />
<link rel="stylesheet" type="text/css" href="styles/style_2.css" media="screen" />
<script type="text/javascript" src="javascript/all_js.js"></script>

<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<meta content='Markhamp23 Photo Gallery' property='og:title'/>
<meta content='' property='og:description'/>

<meta content='http://u698920225.hostingerapp.com' property='og:url'/>

<title>Markhamp23 Photo Gallery</title>

</head>
<body>

<!----------------------Post 1 Title------------------->
 
<div class='post-outer'>
<div class='post hentry'>

<?php

// Retrieve the URL variables (using PHP).			
if(isset($_GET['id']) && !empty($_GET['id'])){

	$id = ($_GET['id']);
	
	$views_img = array();
	$views_caps = array();
	$views_all = array();
	
	
	$stmt2=$conn->prepare("SELECT * FROM post WHERE Id=:id AND Permission = '1'");
	$stmt2->execute(array(':id'=>$id));
	$row=$stmt2->fetch(PDO::FETCH_ASSOC); 
	
	for($i=1;$i<=25;$i++){
	if (!empty('$row[Image_'.$i.']')) {
		
		$views_img[] = $row['Image_'.$i.''];
		
		if (!empty('$row[Caption_'.$i.']') || empty('$row[Caption_'.$i.']'))	

		$views_caps[] = $row['Caption_'.$i.''];
	}
	}	
	
	$views_all = array_combine($views_img, $views_caps);
	
?>

<h3 class='post-title entry-title'>
<?php print "<a href=\"?sec=index_input&id=$row[ID]\">$row[Description]</a>";?>
</h3>
<div class='clear'>&#160;</div>
<!----------------------Photos------------------------->

<div class='post-body entry-content'>

<!---------------------------------------------------->

<?php foreach($views_all as $images => $captions){ ?>

<table align="center" cellpadding="0" cellspacing="0" class="tr-caption-container" style="margin-left: auto; margin-right: auto; text-align: center;">
<tbody>
<tr>
<td style="text-align: center;">
<?php print "<a href=\"?sec=classic&id=$row[ID]&img=$images\" imageanchor='1' style='margin-left: auto; margin-right: auto;'>";?>
<?php print "<img alt='' width='640' height='440' border='0' src=\"./uploads/$images\">";?>
</a>
</td>
</tr>

<tr>
<td class="tr-caption" style="text-align: center;"><div class='clear'>&#160;</div>
<span class="Apple-style-span" style="font-size: small;"><?php print $captions ?></span>
</td>
</tr>

</tbody>
</table>

<?php } ?>
  
<!------------------------------------------------------>

<div class='post-footer'>
<span class='post-icons'></span>

<span class='post-labels'>

Labels:
<?php print "<a dir='ltr' href=\"?sec=index_input&id=$row[ID]\">";?>
<?php print $row['Title'] ?></a>
<?php
	$stmt=$conn->prepare("SELECT * FROM post where Permission = '1' ORDER BY data");
	$stmt->execute();
	$total = $stmt->rowCount();
	$postme = array();

	$stmt=$conn->prepare("SELECT * FROM post where Permission = '1' ORDER BY data desc");
	$stmt->execute();
	while($row2=$stmt->fetch(PDO::FETCH_ASSOC)){	
	
	$postme[] = $row2['ID'];
	}	
	$postme=array_filter($postme);
	foreach ($postme as $key => $value) if ($value==$row['ID'] ) $paginaActual=($key);	
	
	//SET OLDER POST PAGES-- CALCULATE
	
	if ($paginaActual <= $total)
	{
		$paginaSeguent=$paginaActual=$paginaActual+1;
		
	}elseif($paginaActual > $total){
		
		$paginaSeguent=$paginaActual=0;
	}	
?>
<!----------------------Older Post Button-----Newer Post Button-------------->
<?php

	print "<div class='blog-pager' id='blog-pager'>";	
	//Older Post Button
	if ($paginaActual < $total) {
	print "<span id='blog-pager-older-link'>";
	print "<a class=\"blog-pager-older-link\" href=\"?sec=index_input&id=".$postme[$paginaActual]."\" id=\"Blog1_blog-pager-older-link\" title=\"Older Posts\">Older Posts</a>";
	print"</span>";
	}
	print "</div>";
?>

</span>

</div>
</div>
</div>
</div>
<!----------------------End Post 1------------------->

</div>

<?php } ?>
</body>
</html>