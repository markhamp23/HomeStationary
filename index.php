<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir='ltr' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
<head>

<link rel="stylesheet" type="text/css" href="styles/widget_css_bundle.css" media="screen" />
<link rel="stylesheet" type="text/css" href="styles/style_1.css" media="screen" />

<script type="text/javascript" src="javascript/all_js.js"></script>

<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<meta content='Markhamp23 Photo Gallery' property='og:title'/>
<meta content='' property='og:description'/>

<meta content='http://markhamp23.tk' property='og:url'/>

<title>Markhamp23 Photo Gallery</title>

</head>

<?php //CONNEXIÓ A LA BASE DE DADES
include_once('admin/lib/connectar.php');
include_once('admin/lib/dates.php');
include_once('admin/lib/analyticstracking.php');
include_once('admin/lib/GoogleTagManager.php');
?>

<body>

<!-----------------------Header---------------------------------------------------------->

<?php if($_GET['sec']!='classic'){  ?>

<div id='outer-wrapper'><div id='wrap2'>
<div id='header-wrapper'>
<div class='header section' id='header'><div class='widget Header' data-version='1' id='Header1'>
<div id='header-inner' style='background-image: url("img/footer_banner.jpg"); background-position: left; width: 1240px; min-height: 174px; px;_height: 174px; px;background-repeat: no-repeat; '>
<div class='titlewrapper' style='background: transparent'>
<h1 class='title' style='background: transparent; border-width: 0px'>
<a href='index.php'>Photo Gallery Markhamp23</a>
</h1>
</div>
</div>
</div>
</div>
</div>
<?php } ?>

<!-----------------------Content---------------------------------------------------------->

<div id='content-wrapper'>
<div id='main-wrapper'>
<div class='main section' id='main'>
<div class='widget Blog' data-version='1' id='Blog1'>

<div class='blog-posts hfeed'>
<div class="date-posts">

<!-----------------------Carrega pag---------------------------------------------------------->

<?php
//SCRIPT QUE CARREGA LA PÀGINA

if(isset($_GET['sec'])){
	$pagina=strtolower($_GET['sec']);
}
else{
	$pagina='content';
}

require_once ('./content/' . $pagina . '.php');

?>

<!-----------------------End Carrega pag---------------------------------------------------------->

</div></div>
</div>

</div></div></div>

<!-----------------------------------------------------------------Footer--------------------------------------------------------------------------------------->

<?php if($_GET['sec']!='classic'){  ?>

<div id='bottom'>

<div class='bottom section' id='left-bottom'>


<div class='widget Label' data-version='1' id='Label1'>
<h2>Categories</h2>
<div class='widget-content list-label-widget-content'>

<?php
	$stmt=$conn->prepare("SELECT * FROM post where Permission = '1' ORDER BY Data desc");
	$stmt->execute();
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){	
	if($row['Permission']==1){
?>

<ul>
	<li>
	<?php print "<a dir='ltr' href=\"?sec=index_input&id=$row[ID]\">$row[Title]</a>";?>
	</li>
</ul>

<?php } ?>
<?php } ?>

<div class='clear'></div>
</div>
</div></div>

<div class='bottom section' id='center1-bottom'>
<div class='widget PopularPosts' data-version='1' id='PopularPosts1'>
<h2>Popular Posts</h2>
<div class='widget-content popular-posts'>

<?php
	$stmt=$conn->prepare("SELECT * FROM post where Permission = '1' ORDER BY Data asc LIMIT 10");
	$stmt->execute();
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){	
	if($row['Permission']==1){
		
?>

<ul>
	<li>
		<div class='item-content'>
		<div class='item-thumbnail'>
		<?php print "<a href=\"?sec=index_input&id=$row[ID]\">";?>
		<?php print "<img alt='' width='72px' height='72px' border='1' src=\"./uploads/$row[Image_1]\">";?>
		</a>
		</div>
		<div class='item-title'>
		<?php print "<a dir='ltr' href=\"?sec=index_input&id=$row[ID]\">$row[Title]</a>";?>
		</div>
		<?php print "<div class='item-snippet'>$row[Description]</div>";?>
		</div>
		<div style='clear: both;'></div>
	</li>
</ul>

<?php } ?>
<?php } ?>

<div class='clear'></div>
</div>
</div></div>

<div class='bottom no-items section' id='center2-bottom'></div>
	<div class='bottom no-items section' id='right-bottom'></div>
		<div id='credit-wrapper'><div class='credit'>
		<p>&#169; 2018 Photo Gallery Markhamp23</a> created by <a href='https://twitter.com/Markhamp23'>Patrick Markham</a> - <?php print "<a href=\"?sec=admin_login\">Login</a>";?></p> 
		</div>
	</div>
	<div class='clear'>&#160;</div>
</div>
<?php } ?>
</body>

	<script src="./classic/ajax/libs/jquery/2.2.4/jquery.js"></script>
	<!-- load Galleria -->
	<script src="./classic/galleria.min.js"></script>
	<script src="./classic/galleria.classic.min.js"></script>
    <script>
        $(function() {
            Galleria.run('#galleria').galleria({ debug: false });
        });
    </script>	
	<script>	
	$('#galleria').galleria({
	  dataConfig: function(img) {
		// return a new closelink key that points to the 
		// next anchor’s href attribute
		return { closelink: $(img).next().attr('href') };  
	  },
	  extend: function() {

		// the current buy link
		var close;

		// create the button and append it
		this.addElement('button').appendChild('container','button');

		// Add text & click event using jQuery
		this.$('button').click(function() {
			window.location = document.referrer
		});

		// change the buy link on image
		this.bind('image', function(e) {
		  close = this.getData(e.index).closelink;
		});
	  }
	});
	</script>
</html>