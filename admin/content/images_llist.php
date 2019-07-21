
<?php //CONNEXIÓ A LA BASE DE DADES
include_once('./lib/connectar.php');
include_once('./lib/dates.php');

error_reporting(E_ERROR);
?>

<!DOCTYPE html>
<html lang="es">
<head>
<style type="text/css">	
	.centerImage
	{
	border-top: 1px solid #b3b3b3;    
	border-left: 1px solid #b3b3b3;    
	border-right: 1px solid #b3b3b3;  
	border-bottom: 1px solid #b3b3b3; 
    padding:3px;	
	}
</style>	 
</head>	
<body>

<?php ///////////////////ver imagen amb noticia///////////////////////////////////////////////////////
///IMG_1
if(isset($_POST['ver_1']) && !empty($_POST['ver_1'])){ 
$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
$stmt->execute(array(':id'=>$_POST['ver_1']));
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
								
	print "<form method=\"POST\">";
		print "<div class='row'>";
			print "<div class='col-md-12 col-lg-12'>";
				print "<div class='panel panel-default'>"; 
				
				$stmt2=$conn->prepare('SELECT Image_1 FROM post WHERE ID=:id');
				$stmt2->execute(array(':id'=>$row2['Image_1']));
				$row = $stmt2->fetch(PDO::FETCH_ASSOC);												
																								
				?>
				<div class="modal-content">
					<div class="modal-header bg-default text-white" style="text-align: center;font-weight: bold;">
					  <span class="Apple-style-span;" style="font-size:normal;">
					  <h6 style="text-align: center; color:#595959"><?php print $row2['Image_1'] ?></h6>
					</div>
					<div class="modal-body">														
					<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $row2['Image_1']?>" alt="foto"/></center>  							
				</div>
				<?php
																														  
				print "<div class=\"modal-footer\" style=\"text-align: right;\">";
				print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
				print "</div>";
			print "</div>";
		print "</div>";
	print "</form>";										
}
///IMG_2
if(isset($_POST['ver_2']) && !empty($_POST['ver_2'])){ 
$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
$stmt->execute(array(':id'=>$_POST['ver_2']));
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
								
	print "<form method=\"POST\">";
		print "<div class='row'>";
			print "<div class='col-md-12 col-lg-12'>";
				print "<div class='panel panel-default'>"; 
				
				$stmt2=$conn->prepare('SELECT Image_2 FROM post WHERE ID=:id');
				$stmt2->execute(array(':id'=>$row2['Image_2']));
				$row = $stmt2->fetch(PDO::FETCH_ASSOC);												
																								
				?>
				<div class="modal-content">
					<div class="modal-header bg-default text-white" style="text-align: center;font-weight: bold;">
					  <span class="Apple-style-span;" style="font-size:normal;">
					  <h6 style="text-align: center; color:#595959"><?php print $row2['Image_2'] ?></h6>
					</div>
					<div class="modal-body">														
					<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $row2['Image_2']?>" alt="foto"/></center>  							
				</div>
				<?php
																														  
				print "<div class=\"modal-footer\" style=\"text-align: right;\">";
				print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
				print "</div>";
			print "</div>";
		print "</div>";
	print "</form>";										
}
///IMG_3
if(isset($_POST['ver_3']) && !empty($_POST['ver_3'])){ 
$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
$stmt->execute(array(':id'=>$_POST['ver_3']));
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
								
	print "<form method=\"POST\">";
		print "<div class='row'>";
			print "<div class='col-md-12 col-lg-12'>";
				print "<div class='panel panel-default'>"; 
				
				$stmt2=$conn->prepare('SELECT Image_3 FROM post WHERE ID=:id');
				$stmt2->execute(array(':id'=>$row2['Image_3']));
				$row = $stmt2->fetch(PDO::FETCH_ASSOC);												
																								
				?>
				<div class="modal-content">
					<div class="modal-header bg-default  text-white" style="text-align: center;font-weight: bold;">
					  <span class="Apple-style-span;" style="font-size:normal;">
					  <h6 style="text-align: center; color:#595959"><?php print $row2['Image_3'] ?></h6>
					</div>
					<div class="modal-body">														
					<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $row2['Image_3']?>" alt="foto"/></center>  							
				</div>
				<?php
																														  
				print "<div class=\"modal-footer\" style=\"text-align: right;\">";
				print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
				print "</div>";
			print "</div>";
		print "</div>";
	print "</form>";										
}		
///IMG_4
if(isset($_POST['ver_4']) && !empty($_POST['ver_4'])){ 
$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
$stmt->execute(array(':id'=>$_POST['ver_4']));
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
								
	print "<form method=\"POST\">";
		print "<div class='row'>";
			print "<div class='col-md-12 col-lg-12'>";
				print "<div class='panel panel-default'>"; 
				
				$stmt2=$conn->prepare('SELECT Image_4 FROM post WHERE ID=:id');
				$stmt2->execute(array(':id'=>$row2['Image_4']));
				$row = $stmt2->fetch(PDO::FETCH_ASSOC);												
																								
				?>
				<div class="modal-content">
					<div class="modal-header bg-default  text-white" style="text-align: center;font-weight: bold;">
					  <span class="Apple-style-span;" style="font-size:normal;">
					  <h6 style="text-align: center; color:#595959"><?php print $row2['Image_4'] ?></h6>
					</div>
					<div class="modal-body">														
					<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $row2['Image_4']?>" alt="foto"/></center>  							
				</div>
				<?php
																														  
				print "<div class=\"modal-footer\" style=\"text-align: right;\">";
				print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
				print "</div>";
			print "</div>";
		print "</div>";
	print "</form>";										
}	
///IMG_5
if(isset($_POST['ver_5']) && !empty($_POST['ver_5'])){ 
$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
$stmt->execute(array(':id'=>$_POST['ver_5']));
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
								
	print "<form method=\"POST\">";
		print "<div class='row'>";
			print "<div class='col-md-12 col-lg-12'>";
				print "<div class='panel panel-default'>"; 
				
				$stmt2=$conn->prepare('SELECT Image_5 FROM post WHERE ID=:id');
				$stmt2->execute(array(':id'=>$row2['Image_5']));
				$row = $stmt2->fetch(PDO::FETCH_ASSOC);												
																								
				?>
				<div class="modal-content">
					<div class="modal-header bg-default  text-white" style="text-align: center;font-weight: bold;">
					  <span class="Apple-style-span;" style="font-size:normal;">
					  <h6 style="text-align: center; color:#595959"><?php print $row2['Image_5'] ?></h6>
					</div>
					<div class="modal-body">														
					<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $row2['Image_5']?>" alt="foto"/></center>  							
				</div>
				<?php
																														  
				print "<div class=\"modal-footer\" style=\"text-align: right;\">";
				print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
				print "</div>";
			print "</div>";
		print "</div>";
	print "</form>";										
}	
///IMG_6
if(isset($_POST['ver_6']) && !empty($_POST['ver_6'])){ 
$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
$stmt->execute(array(':id'=>$_POST['ver_6']));
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
								
	print "<form method=\"POST\">";
		print "<div class='row'>";
			print "<div class='col-md-12 col-lg-12'>";
				print "<div class='panel panel-default'>"; 
				
				$stmt2=$conn->prepare('SELECT Image_6 FROM post WHERE ID=:id');
				$stmt2->execute(array(':id'=>$row2['Image_6']));
				$row = $stmt2->fetch(PDO::FETCH_ASSOC);												
																								
				?>
				<div class="modal-content">
					<div class="modal-header bg-default  text-white" style="text-align: center;font-weight: bold;">
					  <span class="Apple-style-span;" style="font-size:normal;">
					  <h6 style="text-align: center; color:#595959"><?php print $row2['Image_6'] ?></h6>
					</div>
					<div class="modal-body">														
					<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $row2['Image_6']?>" alt="foto"/></center>  							
				</div>
				<?php
																														  
				print "<div class=\"modal-footer\" style=\"text-align: right;\">";
				print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
				print "</div>";
			print "</div>";
		print "</div>";
	print "</form>";										
}	
///IMG_7
if(isset($_POST['ver_7']) && !empty($_POST['ver_7'])){ 
$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
$stmt->execute(array(':id'=>$_POST['ver_7']));
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
								
	print "<form method=\"POST\">";
		print "<div class='row'>";
			print "<div class='col-md-12 col-lg-12'>";
				print "<div class='panel panel-default'>"; 
				
				$stmt2=$conn->prepare('SELECT Image_7 FROM post WHERE ID=:id');
				$stmt2->execute(array(':id'=>$row2['Image_7']));
				$row = $stmt2->fetch(PDO::FETCH_ASSOC);												
																								
				?>
				<div class="modal-content">
					<div class="modal-header bg-default  text-white" style="text-align: center;font-weight: bold;">
					  <span class="Apple-style-span;" style="font-size:normal;">
					  <h6 style="text-align: center; color:#595959"><?php print $row2['Image_7'] ?></h6>
					</div>
					<div class="modal-body">														
					<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $row2['Image_7']?>" alt="foto"/></center>  							
				</div>
				<?php
																														  
				print "<div class=\"modal-footer\" style=\"text-align: right;\">";
				print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
				print "</div>";
			print "</div>";
		print "</div>";
	print "</form>";										
}	
///IMG_8
if(isset($_POST['ver_8']) && !empty($_POST['ver_8'])){ 
$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
$stmt->execute(array(':id'=>$_POST['ver_8']));
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
								
	print "<form method=\"POST\">";
		print "<div class='row'>";
			print "<div class='col-md-12 col-lg-12'>";
				print "<div class='panel panel-default'>"; 
				
				$stmt2=$conn->prepare('SELECT Image_8 FROM post WHERE ID=:id');
				$stmt2->execute(array(':id'=>$row2['Image_8']));
				$row = $stmt2->fetch(PDO::FETCH_ASSOC);												
																								
				?>
				<div class="modal-content">
					<div class="modal-header bg-default  text-white" style="text-align: center;font-weight: bold;">
					  <span class="Apple-style-span;" style="font-size:normal;">
					  <h6 style="text-align: center; color:#595959"><?php print $row2['Image_8'] ?></h6>
					</div>
					<div class="modal-body">														
					<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $row2['Image_8']?>" alt="foto"/></center>  							
				</div>
				<?php
																														  
				print "<div class=\"modal-footer\" style=\"text-align: right;\">";
				print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
				print "</div>";
			print "</div>";
		print "</div>";
	print "</form>";										
}	
///IMG_9
if(isset($_POST['ver_9']) && !empty($_POST['ver_9'])){ 
$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
$stmt->execute(array(':id'=>$_POST['ver_9']));
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
								
	print "<form method=\"POST\">";
		print "<div class='row'>";
			print "<div class='col-md-12 col-lg-12'>";
				print "<div class='panel panel-default'>"; 
				
				$stmt2=$conn->prepare('SELECT Image_9 FROM post WHERE ID=:id');
				$stmt2->execute(array(':id'=>$row2['Image_9']));
				$row = $stmt2->fetch(PDO::FETCH_ASSOC);												
																								
				?>
				<div class="modal-content">
					<div class="modal-header bg-default  text-white" style="text-align: center;font-weight: bold;">
					  <span class="Apple-style-span;" style="font-size:normal;">
					  <h6 style="text-align: center; color:#595959"><?php print $row2['Image_9'] ?></h6>
					</div>
					<div class="modal-body">														
					<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $row2['Image_9']?>" alt="foto"/></center>  							
				</div>
				<?php
																														  
				print "<div class=\"modal-footer\" style=\"text-align: right;\">";
				print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
				print "</div>";
			print "</div>";
		print "</div>";
	print "</form>";										
}	
///IMG_10
if(isset($_POST['ver_10']) && !empty($_POST['ver_10'])){ 
$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
$stmt->execute(array(':id'=>$_POST['ver_10']));
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
								
	print "<form method=\"POST\">";
		print "<div class='row'>";
			print "<div class='col-md-12 col-lg-12'>";
				print "<div class='panel panel-default'>"; 
				
				$stmt2=$conn->prepare('SELECT Image_10 FROM post WHERE ID=:id');
				$stmt2->execute(array(':id'=>$row2['Image_10']));
				$row = $stmt2->fetch(PDO::FETCH_ASSOC);												
																								
				?>
				<div class="modal-content">
					<div class="modal-header bg-default  text-white" style="text-align: center;font-weight: bold;">
					  <span class="Apple-style-span;" style="font-size:normal;">
					  <h6 style="text-align: center; color:#595959"><?php print $row2['Image_10'] ?></h6>
					</div>
					<div class="modal-body">														
					<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $row2['Image_10']?>" alt="foto"/></center>  							
				</div>
				<?php
																														  
				print "<div class=\"modal-footer\" style=\"text-align: right;\">";
				print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
				print "</div>";
			print "</div>";
		print "</div>";
	print "</form>";										
}	
///IMG_11
if(isset($_POST['ver_11']) && !empty($_POST['ver_11'])){ 
$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
$stmt->execute(array(':id'=>$_POST['ver_11']));
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
								
	print "<form method=\"POST\">";
		print "<div class='row'>";
			print "<div class='col-md-12 col-lg-12'>";
				print "<div class='panel panel-default'>"; 
				
				$stmt2=$conn->prepare('SELECT Image_11 FROM post WHERE ID=:id');
				$stmt2->execute(array(':id'=>$row2['Image_11']));
				$row = $stmt2->fetch(PDO::FETCH_ASSOC);												
																								
				?>
				<div class="modal-content">
					<div class="modal-header bg-default  text-white" style="text-align: center;font-weight: bold;">
					  <span class="Apple-style-span;" style="font-size:normal;">
					  <h6 style="text-align: center; color:#595959"><?php print $row2['Image_11'] ?></h6>
					</div>
					<div class="modal-body">														
					<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $row2['Image_11']?>" alt="foto"/></center>  							
				</div>
				<?php
																														  
				print "<div class=\"modal-footer\" style=\"text-align: right;\">";
				print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
				print "</div>";
			print "</div>";
		print "</div>";
	print "</form>";										
}	
///IMG_12
if(isset($_POST['ver_12']) && !empty($_POST['ver_12'])){ 
$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
$stmt->execute(array(':id'=>$_POST['ver_12']));
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
								
	print "<form method=\"POST\">";
		print "<div class='row'>";
			print "<div class='col-md-12 col-lg-12'>";
				print "<div class='panel panel-default'>"; 
				
				$stmt2=$conn->prepare('SELECT Image_12 FROM post WHERE ID=:id');
				$stmt2->execute(array(':id'=>$row2['Image_12']));
				$row = $stmt2->fetch(PDO::FETCH_ASSOC);												
																								
				?>
				<div class="modal-content">
					<div class="modal-header bg-default  text-white" style="text-align: center;font-weight: bold;">
					  <span class="Apple-style-span;" style="font-size:normal;">
					  <h6 style="text-align: center; color:#595959"><?php print $row2['Image_12'] ?></h6>
					</div>
					<div class="modal-body">														
					<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $row2['Image_12']?>" alt="foto"/></center>  							
				</div>
				<?php
																														  
				print "<div class=\"modal-footer\" style=\"text-align: right;\">";
				print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
				print "</div>";
			print "</div>";
		print "</div>";
	print "</form>";										
}	
///IMG_13
if(isset($_POST['ver_13']) && !empty($_POST['ver_13'])){ 
$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
$stmt->execute(array(':id'=>$_POST['ver_13']));
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
								
	print "<form method=\"POST\">";
		print "<div class='row'>";
			print "<div class='col-md-12 col-lg-12'>";
				print "<div class='panel panel-default'>"; 
				
				$stmt2=$conn->prepare('SELECT Image_13 FROM post WHERE ID=:id');
				$stmt2->execute(array(':id'=>$row2['Image_13']));
				$row = $stmt2->fetch(PDO::FETCH_ASSOC);												
																								
				?>
				<div class="modal-content">
					<div class="modal-header bg-default  text-white" style="text-align: center;font-weight: bold;">
					  <span class="Apple-style-span;" style="font-size:normal;">
					  <h6 style="text-align: center; color:#595959"><?php print $row2['Image_13'] ?></h6>
					</div>
					<div class="modal-body">														
					<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $row2['Image_13']?>" alt="foto"/></center>  							
				</div>
				<?php
																														  
				print "<div class=\"modal-footer\" style=\"text-align: right;\">";
				print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
				print "</div>";
			print "</div>";
		print "</div>";
	print "</form>";										
}	
///IMG_14
if(isset($_POST['ver_14']) && !empty($_POST['ver_14'])){ 
$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
$stmt->execute(array(':id'=>$_POST['ver_14']));
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
								
	print "<form method=\"POST\">";
		print "<div class='row'>";
			print "<div class='col-md-12 col-lg-12'>";
				print "<div class='panel panel-default'>"; 
				
				$stmt2=$conn->prepare('SELECT Image_14 FROM post WHERE ID=:id');
				$stmt2->execute(array(':id'=>$row2['Image_14']));
				$row = $stmt2->fetch(PDO::FETCH_ASSOC);												
																								
				?>
				<div class="modal-content">
					<div class="modal-header bg-default  text-white" style="text-align: center;font-weight: bold;">
					  <span class="Apple-style-span;" style="font-size:normal;">
					  <h6 style="text-align: center; color:#595959"><?php print $row2['Image_14'] ?></h6>
					</div>
					<div class="modal-body">														
					<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $row2['Image_14']?>" alt="foto"/></center>  							
				</div>
				<?php
																														  
				print "<div class=\"modal-footer\" style=\"text-align: right;\">";
				print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
				print "</div>";
			print "</div>";
		print "</div>";
	print "</form>";										
}	
///IMG_15
if(isset($_POST['ver_15']) && !empty($_POST['ver_15'])){ 
$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
$stmt->execute(array(':id'=>$_POST['ver_15']));
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
								
	print "<form method=\"POST\">";
		print "<div class='row'>";
			print "<div class='col-md-12 col-lg-12'>";
				print "<div class='panel panel-default'>"; 
				
				$stmt2=$conn->prepare('SELECT Image_15 FROM post WHERE ID=:id');
				$stmt2->execute(array(':id'=>$row2['Image_15']));
				$row = $stmt2->fetch(PDO::FETCH_ASSOC);												
																								
				?>
				<div class="modal-content">
					<div class="modal-header bg-default  text-white" style="text-align: center;font-weight: bold;">
					  <span class="Apple-style-span;" style="font-size:normal;">
					  <h6 style="text-align: center; color:#595959"><?php print $row2['Image_15'] ?></h6>
					</div>
					<div class="modal-body">														
					<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $row2['Image_15']?>" alt="foto"/></center>  							
				</div>
				<?php
																														  
				print "<div class=\"modal-footer\" style=\"text-align: right;\">";
				print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
				print "</div>";
			print "</div>";
		print "</div>";
	print "</form>";										
}	
///IMG_16
if(isset($_POST['ver_16']) && !empty($_POST['ver_16'])){ 
$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
$stmt->execute(array(':id'=>$_POST['ver_16']));
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
								
	print "<form method=\"POST\">";
		print "<div class='row'>";
			print "<div class='col-md-12 col-lg-12'>";
				print "<div class='panel panel-default'>"; 
				
				$stmt2=$conn->prepare('SELECT Image_16 FROM post WHERE ID=:id');
				$stmt2->execute(array(':id'=>$row2['Image_16']));
				$row = $stmt2->fetch(PDO::FETCH_ASSOC);												
																								
				?>
				<div class="modal-content">
					<div class="modal-header bg-default  text-white" style="text-align: center;font-weight: bold;">
					  <span class="Apple-style-span;" style="font-size:normal;">
					  <h6 style="text-align: center; color:#595959"><?php print $row2['Image_16'] ?></h6>
					</div>
					<div class="modal-body">														
					<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $row2['Image_16']?>" alt="foto"/></center>  							
				</div>
				<?php
																														  
				print "<div class=\"modal-footer\" style=\"text-align: right;\">";
				print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
				print "</div>";
			print "</div>";
		print "</div>";
	print "</form>";										
}	
///IMG_17
if(isset($_POST['ver_17']) && !empty($_POST['ver_17'])){ 
$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
$stmt->execute(array(':id'=>$_POST['ver_17']));
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
								
	print "<form method=\"POST\">";
		print "<div class='row'>";
			print "<div class='col-md-12 col-lg-12'>";
				print "<div class='panel panel-default'>"; 
				
				$stmt2=$conn->prepare('SELECT Image_17 FROM post WHERE ID=:id');
				$stmt2->execute(array(':id'=>$row2['Image_17']));
				$row = $stmt2->fetch(PDO::FETCH_ASSOC);												
																								
				?>
				<div class="modal-content">
					<div class="modal-header bg-default  text-white" style="text-align: center;font-weight: bold;">
					  <span class="Apple-style-span;" style="font-size:normal;">
					  <h6 style="text-align: center; color:#595959"><?php print $row2['Image_17'] ?></h6>
					</div>
					<div class="modal-body">														
					<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $row2['Image_17']?>" alt="foto"/></center>  							
				</div>
				<?php
																														  
				print "<div class=\"modal-footer\" style=\"text-align: right;\">";
				print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
				print "</div>";
			print "</div>";
		print "</div>";
	print "</form>";										
}	
///IMG_18
if(isset($_POST['ver_18']) && !empty($_POST['ver_18'])){ 
$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
$stmt->execute(array(':id'=>$_POST['ver_18']));
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
								
	print "<form method=\"POST\">";
		print "<div class='row'>";
			print "<div class='col-md-12 col-lg-12'>";
				print "<div class='panel panel-default'>"; 
				
				$stmt2=$conn->prepare('SELECT Image_18 FROM post WHERE ID=:id');
				$stmt2->execute(array(':id'=>$row2['Image_18']));
				$row = $stmt2->fetch(PDO::FETCH_ASSOC);												
																								
				?>
				<div class="modal-content">
					<div class="modal-header bg-default  text-white" style="text-align: center;font-weight: bold;">
					  <span class="Apple-style-span;" style="font-size:normal;">
					  <h6 style="text-align: center; color:#595959"><?php print $row2['Image_18'] ?></h6>
					</div>
					<div class="modal-body">														
					<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $row2['Image_18']?>" alt="foto"/></center>  							
				</div>
				<?php
																														  
				print "<div class=\"modal-footer\" style=\"text-align: right;\">";
				print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
				print "</div>";
			print "</div>";
		print "</div>";
	print "</form>";										
}	
///IMG_19
if(isset($_POST['ver_19']) && !empty($_POST['ver_19'])){ 
$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
$stmt->execute(array(':id'=>$_POST['ver_19']));
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
								
	print "<form method=\"POST\">";
		print "<div class='row'>";
			print "<div class='col-md-12 col-lg-12'>";
				print "<div class='panel panel-default'>"; 
				
				$stmt2=$conn->prepare('SELECT Image_19 FROM post WHERE ID=:id');
				$stmt2->execute(array(':id'=>$row2['Image_19']));
				$row = $stmt2->fetch(PDO::FETCH_ASSOC);												
																								
				?>
				<div class="modal-content">
					<div class="modal-header bg-default  text-white" style="text-align: center;font-weight: bold;">
					  <span class="Apple-style-span;" style="font-size:normal;">
					  <h6 style="text-align: center; color:#595959"><?php print $row2['Image_19'] ?></h6>
					</div>
					<div class="modal-body">														
					<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $row2['Image_19']?>" alt="foto"/></center>  							
				</div>
				<?php
																														  
				print "<div class=\"modal-footer\" style=\"text-align: right;\">";
				print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
				print "</div>";
			print "</div>";
		print "</div>";
	print "</form>";										
}	
///IMG_20
if(isset($_POST['ver_20']) && !empty($_POST['ver_20'])){ 
$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
$stmt->execute(array(':id'=>$_POST['ver_20']));
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
								
	print "<form method=\"POST\">";
		print "<div class='row'>";
			print "<div class='col-md-12 col-lg-12'>";
				print "<div class='panel panel-default'>"; 
				
				$stmt2=$conn->prepare('SELECT Image_20 FROM post WHERE ID=:id');
				$stmt2->execute(array(':id'=>$row2['Image_20']));
				$row = $stmt2->fetch(PDO::FETCH_ASSOC);												
																								
				?>
				<div class="modal-content">
					<div class="modal-header bg-default  text-white" style="text-align: center;font-weight: bold;">
					  <span class="Apple-style-span;" style="font-size:normal;">
					  <h6 style="text-align: center; color:#595959"><?php print $row2['Image_20'] ?></h6>
					</div>
					<div class="modal-body">														
					<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $row2['Image_20']?>" alt="foto"/></center>  							
				</div>
				<?php
																														  
				print "<div class=\"modal-footer\" style=\"text-align: right;\">";
				print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
				print "</div>";
			print "</div>";
		print "</div>";
	print "</form>";										
}	
///IMG_21
if(isset($_POST['ver_21']) && !empty($_POST['ver_21'])){ 
$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
$stmt->execute(array(':id'=>$_POST['ver_21']));
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
								
	print "<form method=\"POST\">";
		print "<div class='row'>";
			print "<div class='col-md-12 col-lg-12'>";
				print "<div class='panel panel-default'>"; 
				
				$stmt2=$conn->prepare('SELECT Image_21 FROM post WHERE ID=:id');
				$stmt2->execute(array(':id'=>$row2['Image_21']));
				$row = $stmt2->fetch(PDO::FETCH_ASSOC);												
																								
				?>
				<div class="modal-content">
					<div class="modal-header bg-default  text-white" style="text-align: center;font-weight: bold;">
					  <span class="Apple-style-span;" style="font-size:normal;">
					  <h6 style="text-align: center; color:#595959"><?php print $row2['Image_21'] ?></h6>
					</div>
					<div class="modal-body">														
					<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $row2['Image_21']?>" alt="foto"/></center>  							
				</div>
				<?php
																														  
				print "<div class=\"modal-footer\" style=\"text-align: right;\">";
				print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
				print "</div>";
			print "</div>";
		print "</div>";
	print "</form>";										
}	
///IMG_22
if(isset($_POST['ver_22']) && !empty($_POST['ver_22'])){ 
$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
$stmt->execute(array(':id'=>$_POST['ver_22']));
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
								
	print "<form method=\"POST\">";
		print "<div class='row'>";
			print "<div class='col-md-12 col-lg-12'>";
				print "<div class='panel panel-default'>"; 
				
				$stmt2=$conn->prepare('SELECT Image_22 FROM post WHERE ID=:id');
				$stmt2->execute(array(':id'=>$row2['Image_22']));
				$row = $stmt2->fetch(PDO::FETCH_ASSOC);												
																								
				?>
				<div class="modal-content">
					<div class="modal-header bg-default  text-white" style="text-align: center;font-weight: bold;">
					  <span class="Apple-style-span;" style="font-size:normal;">
					  <h6 style="text-align: center; color:#595959"><?php print $row2['Image_22'] ?></h6>
					</div>
					<div class="modal-body">														
					<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $row2['Image_22']?>" alt="foto"/></center>  							
				</div>
				<?php
																														  
				print "<div class=\"modal-footer\" style=\"text-align: right;\">";
				print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
				print "</div>";
			print "</div>";
		print "</div>";
	print "</form>";										
}	
///IMG_23
if(isset($_POST['ver_23']) && !empty($_POST['ver_23'])){ 
$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
$stmt->execute(array(':id'=>$_POST['ver_23']));
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
								
	print "<form method=\"POST\">";
		print "<div class='row'>";
			print "<div class='col-md-12 col-lg-12'>";
				print "<div class='panel panel-default'>"; 
				
				$stmt2=$conn->prepare('SELECT Image_23 FROM post WHERE ID=:id');
				$stmt2->execute(array(':id'=>$row2['Image_23']));
				$row = $stmt2->fetch(PDO::FETCH_ASSOC);												
																								
				?>
				<div class="modal-content">
					<div class="modal-header bg-default  text-white" style="text-align: center;font-weight: bold;">
					  <span class="Apple-style-span;" style="font-size:normal;">
					  <h6 style="text-align: center; color:#595959"><?php print $row2['Image_23'] ?></h6>
					</div>
					<div class="modal-body">														
					<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $row2['Image_23']?>" alt="foto"/></center>  							
				</div>
				<?php
																														  
				print "<div class=\"modal-footer\" style=\"text-align: right;\">";
				print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
				print "</div>";
			print "</div>";
		print "</div>";
	print "</form>";										
}	
///IMG_24
if(isset($_POST['ver_24']) && !empty($_POST['ver_24'])){ 
$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
$stmt->execute(array(':id'=>$_POST['ver_24']));
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
								
	print "<form method=\"POST\">";
		print "<div class='row'>";
			print "<div class='col-md-12 col-lg-12'>";
				print "<div class='panel panel-default'>"; 
				
				$stmt2=$conn->prepare('SELECT Image_24 FROM post WHERE ID=:id');
				$stmt2->execute(array(':id'=>$row2['Image_24']));
				$row = $stmt2->fetch(PDO::FETCH_ASSOC);												
																								
				?>
				<div class="modal-content">
					<div class="modal-header bg-default  text-white" style="text-align: center;font-weight: bold;">
					  <span class="Apple-style-span;" style="font-size:normal;">
					  <h6 style="text-align: center; color:#595959"><?php print $row2['Image_24'] ?></h6>
					</div>
					<div class="modal-body">														
					<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $row2['Image_24']?>" alt="foto"/></center>  							
				</div>
				<?php
																														  
				print "<div class=\"modal-footer\" style=\"text-align: right;\">";
				print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
				print "</div>";
			print "</div>";
		print "</div>";
	print "</form>";										
}	
///IMG_25
if(isset($_POST['ver_25']) && !empty($_POST['ver_25'])){ 
$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
$stmt->execute(array(':id'=>$_POST['ver_25']));
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
								
	print "<form method=\"POST\">";
		print "<div class='row'>";
			print "<div class='col-md-12 col-lg-12'>";
				print "<div class='panel panel-default'>"; 
				
				$stmt2=$conn->prepare('SELECT Image_25 FROM post WHERE ID=:id');
				$stmt2->execute(array(':id'=>$row2['Image_25']));
				$row = $stmt2->fetch(PDO::FETCH_ASSOC);												
																								
				?>
				<div class="modal-content">
					<div class="modal-header bg-default  text-white" style="text-align: center;font-weight: bold;">
					  <span class="Apple-style-span;" style="font-size:normal;">
					  <h6 style="text-align: center; color:#595959"><?php print $row2['Image_25'] ?></h6>
					</div>
					<div class="modal-body">														
					<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $row2['Image_25']?>" alt="foto"/></center>  							
				</div>
				<?php
																														  
				print "<div class=\"modal-footer\" style=\"text-align: right;\">";
				print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
				print "</div>";
			print "</div>";
		print "</div>";
	print "</form>";										
}

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Images Gallery</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>		
  <!------------------------------------------------------2------------------------------------------------------->   
            <div id="llista" class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Listed Post Images
                        </div>
														
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
							
								<?php // CARPETA DE LA QUE S'EXTREUEN LES IMATGES
								$path = "../uploads/";
								// EXTRACCIO D'IMATGES DE LA CARPETA
								$directori = opendir($path);
								$fitxers = array();
								$fitxer_imatge='';
								$old='';
								$new='';
								while (($file = readdir($directori)) !== false) {
								if($file != "." && $file != "..") {
								if(substr($file, -4) == '.jpg' || substr($file, -4) == '.png' || substr($file, -4) == '.gif') {
											$fitxers[] = $file;
										}
									}
								}
								closedir($directori);
								//ORDENAR FITXERS
								rsort ($fitxers);
								//TOTAL D'IMATGES DE LA CARPETA
								$total_imatges=count($fitxers);
								$imatgeIni=0;
                                $imatgeFi=$imatgeIni+$total_imatges;

								///////////////////veure imatge sense noticia////////////////////////////////
								if(isset($_POST['ver2']) && !empty($_POST['ver2'])){
									print "<form method=\"POST\">";
										print "<div class='row'>";
											print "<div class='col-md-12 col-lg-12'>";
												print "<div class='panel panel-default'>"; 
									            if(isset($_POST['ver2'])){
												?>
												<div class="modal-content">
													<div class="modal-header bg-default  text-white" style="text-align: center;font-weight: bold;">
													  <span class="Apple-style-span;" style="font-size:normal;">
													   <h6 style="text-align: center; color:#595959"><?php print $_POST['ver2']?></h6>
													</div>
													<div class="modal-body">														
													<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $_POST['ver2']?>" alt="foto"/></center>  							
												</div>
												<?php
												}
												print "<div class=\"modal-footer\" style=\"text-align: right;\">";
												print "<button type='sudmit' name='' value='' class=\"btn btn-default \">Close</button>";
												print "</div>";
											print "</div>";
										print "</div>";
									print "</form>";					
								}
								
								
								
								
								?>								
								<?php								
								///////////////////borrar imagen amb noticia i borrar imatge sense noticia/////////////////////////								
								//ELIMINAR UN ELEMENT A PARTIR DEL LLISTAT D´IMATGES AMB NOTICIA///////////////////////////////////
								///IMG_1
								if(isset($_POST['del_1']) && !empty($_POST['del_1'])) {
									if(isset($_POST['borra']) && !empty($_POST['borra'])) {
																				
										$stmt3=$conn->prepare('SELECT Image_1 FROM post WHERE ID=:id');
										$stmt3->execute(array(':id'=>$_POST['del_1']));
										$rows2=$stmt3->fetch(PDO::FETCH_ASSOC);
																				
										if($rows2['Image_1']!=null) {
											if (file_exists('../uploads/' . $rows2['Image_1'])) {
												if($rows2['Image_1']!=null) {
													if (unlink('../uploads/' . $rows2['Image_1'])) {
														
														/////aqui va el update si existeix imatge al folderamb noticia///////////////////////												
														$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
														$stmt->execute(array(':id'=>$_POST['del_1']));
														$row=$stmt->fetch(PDO::FETCH_ASSOC);
														
														$stmt5 = $conn->prepare('UPDATE post SET Image_1=:img_1 WHERE ID=:id');
														$stmt5->execute(array(':img_1'=>$fitxer_imatge,':id'=>$_POST['del_1']));															
														
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";								
														print "</div>";
														echo "<meta http-equiv=\"refresh\" content=\"2\">";
													} else {
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
														print "</div>";					
													}
												}
											}
											else{									
											/////aqui va el update si no existeix imatge al folder pero hiha la noticia amb el registre///////////////////////												
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$_POST['del_1']));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											$stmt5 = $conn->prepare('UPDATE post SET Image_1=:img_1 WHERE ID=:id');
											$stmt5->execute(array(':img_1'=>$fitxer_imatge,':id'=>$_POST['del_1']));							

											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
											print "</div>";
											echo "<meta http-equiv=\"refresh\" content=\"2\">";
											}
										}
										else{
                                        //////aqui elimina la imatge del folder sense noticia/////////////////////////////////////
											if($_POST['del_1']!="") {
												if (file_exists('../uploads/' . $_POST['del_1'])) {
													if($_POST['del_1']!="") {
														if (unlink('../uploads/' . $_POST['del_1'])) {														
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
															//////refresh page///////////////////
															echo "<meta http-equiv=\"refresh\" content=\"2\">";
															print "</div>";
														} else {
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
															print "</div>";
														}
													}
												}
											}									
										////////////////////////////////////////////////////////////////////////////////////////////////////
										}										
									}
									else{
										 if(isset($_POST['del_1'])){	
											print "<form action=\"\" method=\"post\">";
											print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the record???</p>";
												
											$stmt3=$conn->prepare('SELECT Image_1 FROM post WHERE ID=:id');
											$stmt3->execute(array(':id'=>$_POST['del_1']));
											$row = $stmt3->fetch(PDO::FETCH_ASSOC);
											
											    if ($row['Image_1']) { 
												print "<p>Image: ".$row['Image_1']."</p>";
												}
												else{											
											    print "<p>Image: ".$_POST['del_1']."</p>";
                                                }												
												
											print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
											print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
											print "<input type=\"hidden\" name=\"del_1\" value=\"".$_POST['del_1']."\">";
											print "</div>";
											print "</form>";
										}										
									}
								}
								///IMG_2
								if(isset($_POST['del_2']) && !empty($_POST['del_2'])) {
									if(isset($_POST['borra']) && !empty($_POST['borra'])) {
																				
										$stmt3=$conn->prepare('SELECT Image_2 FROM post WHERE ID=:id');
										$stmt3->execute(array(':id'=>$_POST['del_2']));
										$rows2=$stmt3->fetch(PDO::FETCH_ASSOC);
																				
										if($rows2['Image_2']!=null) {
											if (file_exists('../uploads/' . $rows2['Image_2'])) {
												if($rows2['Image_2']!=null) {
													if (unlink('../uploads/' . $rows2['Image_2'])) {
														
														/////aqui va el update si existeix imatge al folderamb noticia///////////////////////												
														$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
														$stmt->execute(array(':id'=>$_POST['del_2']));
														$row=$stmt->fetch(PDO::FETCH_ASSOC);
														
														$stmt5 = $conn->prepare('UPDATE post SET Image_2=:img_2 WHERE ID=:id');
														$stmt5->execute(array(':img_2'=>$fitxer_imatge,':id'=>$_POST['del_2']));															
														
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";								
														print "</div>";
														echo "<meta http-equiv=\"refresh\" content=\"2\">";
													} else {
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
														print "</div>";					
													}
												}
											}
											else{									
											/////aqui va el update si no existeix imatge al folder pero hiha la noticia amb el registre///////////////////////												
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$_POST['del_2']));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											$stmt5 = $conn->prepare('UPDATE post SET Image_2=:img_2 WHERE ID=:id');
											$stmt5->execute(array(':img_2'=>$fitxer_imatge,':id'=>$_POST['del_2']));							

											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
											print "</div>";
											echo "<meta http-equiv=\"refresh\" content=\"2\">";
											}
										}
										else{
                                        //////aqui elimina la imatge del folder sense noticia/////////////////////////////////////
											if($_POST['del_2']!="") {
												if (file_exists('../uploads/' . $_POST['del_2'])) {
													if($_POST['del_2']!="") {
														if (unlink('../uploads/' . $_POST['del_2'])) {														
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
															//////refresh page///////////////////
															echo "<meta http-equiv=\"refresh\" content=\"2\">";
															print "</div>";
														} else {
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
															print "</div>";
														}
													}
												}
											}									
										////////////////////////////////////////////////////////////////////////////////////////////////////
										}										
									}
									else{
										 if(isset($_POST['del_2'])){	
											print "<form action=\"\" method=\"post\">";
											print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the record???</p>";
												
											$stmt3=$conn->prepare('SELECT Image_2 FROM post WHERE ID=:id');
											$stmt3->execute(array(':id'=>$_POST['del_2']));
											$row = $stmt3->fetch(PDO::FETCH_ASSOC);
											
											    if ($row['Image_2']) { 
												print "<p>Image: ".$row['Image_2']."</p>";
												}
												else{											
											    print "<p>Image: ".$_POST['del_2']."</p>";
                                                }												
												
											print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
											print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
											print "<input type=\"hidden\" name=\"del_2\" value=\"".$_POST['del_2']."\">";
											print "</div>";
											print "</form>";
										}										
									}
								}
								///IMG_3
								if(isset($_POST['del_3']) && !empty($_POST['del_3'])) {
									if(isset($_POST['borra']) && !empty($_POST['borra'])) {
																				
										$stmt3=$conn->prepare('SELECT Image_3 FROM post WHERE ID=:id');
										$stmt3->execute(array(':id'=>$_POST['del_3']));
										$rows2=$stmt3->fetch(PDO::FETCH_ASSOC);
																				
										if($rows2['Image_3']!=null) {
											if (file_exists('../uploads/' . $rows2['Image_3'])) {
												if($rows2['Image_3']!=null) {
													if (unlink('../uploads/' . $rows2['Image_3'])) {
														
														/////aqui va el update si existeix imatge al folder amb noticia///////////////////////												
														$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
														$stmt->execute(array(':id'=>$_POST['del_3']));
														$row=$stmt->fetch(PDO::FETCH_ASSOC);
														
														$stmt5 = $conn->prepare('UPDATE post SET Image_3=:img_3 WHERE ID=:id');
														$stmt5->execute(array(':img_3'=>$fitxer_imatge,':id'=>$_POST['del_3']));															
														
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";								
														print "</div>";
														echo "<meta http-equiv=\"refresh\" content=\"2\">";
													} else {
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
														print "</div>";					
													}
												}
											}
											else{									
											/////aqui va el update si no existeix imatge al folder pero hiha la noticia amb el registre///////////////////////												
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$_POST['del_3']));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											$stmt5 = $conn->prepare('UPDATE post SET Image_3=:img_3 WHERE ID=:id');
											$stmt5->execute(array(':img_3'=>$fitxer_imatge,':id'=>$_POST['del_3']));							

											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
											print "</div>";
											echo "<meta http-equiv=\"refresh\" content=\"2\">";
											}
										}
										else{
                                        //////aqui elimina la imatge del folder sense noticia/////////////////////////////////////
											if($_POST['del_3']!="") {
												if (file_exists('../uploads/' . $_POST['del_3'])) {
													if($_POST['del_3']!="") {
														if (unlink('../uploads/' . $_POST['del_3'])) {														
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
															//////refresh page///////////////////
															echo "<meta http-equiv=\"refresh\" content=\"2\">";
															print "</div>";
														} else {
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
															print "</div>";
														}
													}
												}
											}									
										////////////////////////////////////////////////////////////////////////////////////////////////////
										}										
									}
									else{
										 if(isset($_POST['del_3'])){	
											print "<form action=\"\" method=\"post\">";
											print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the record???</p>";
												
											$stmt3=$conn->prepare('SELECT Image_3 FROM post WHERE ID=:id');
											$stmt3->execute(array(':id'=>$_POST['del_3']));
											$row = $stmt3->fetch(PDO::FETCH_ASSOC);
											
											    if ($row['Image_3']) { 
												print "<p>Image: ".$row['Image_3']."</p>";
												}
												else{											
											    print "<p>Image: ".$_POST['del_3']."</p>";
                                                }												
												
											print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
											print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
											print "<input type=\"hidden\" name=\"del_3\" value=\"".$_POST['del_3']."\">";
											print "</div>";
											print "</form>";
										}										
									}
								}
								///IMG_4
								if(isset($_POST['del_4']) && !empty($_POST['del_4'])) {
									if(isset($_POST['borra']) && !empty($_POST['borra'])) {
																				
										$stmt3=$conn->prepare('SELECT Image_4 FROM post WHERE ID=:id');
										$stmt3->execute(array(':id'=>$_POST['del_4']));
										$rows2=$stmt3->fetch(PDO::FETCH_ASSOC);
																				
										if($rows2['Image_4']!=null) {
											if (file_exists('../uploads/' . $rows2['Image_4'])) {
												if($rows2['Image_4']!=null) {
													if (unlink('../uploads/' . $rows2['Image_4'])) {
														
														/////aqui va el update si existeix imatge al folder amb noticia///////////////////////												
														$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
														$stmt->execute(array(':id'=>$_POST['del_4']));
														$row=$stmt->fetch(PDO::FETCH_ASSOC);
														
														$stmt5 = $conn->prepare('UPDATE post SET Image_4=:img_4 WHERE ID=:id');
														$stmt5->execute(array(':img_4'=>$fitxer_imatge,':id'=>$_POST['del_4']));															
														
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";								
														print "</div>";
														echo "<meta http-equiv=\"refresh\" content=\"2\">";
													} else {
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
														print "</div>";					
													}
												}
											}
											else{									
											/////aqui va el update si no existeix imatge al folder pero hiha la noticia amb el registre///////////////////////												
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$_POST['del_4']));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											$stmt5 = $conn->prepare('UPDATE post SET Image_4=:img_4 WHERE ID=:id');
											$stmt5->execute(array(':img_4'=>$fitxer_imatge,':id'=>$_POST['del_4']));							

											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
											print "</div>";
											echo "<meta http-equiv=\"refresh\" content=\"2\">";
											}
										}
										else{
                                        //////aqui elimina la imatge del folder sense noticia/////////////////////////////////////
											if($_POST['del_4']!="") {
												if (file_exists('../uploads/' . $_POST['del_4'])) {
													if($_POST['del_4']!="") {
														if (unlink('../uploads/' . $_POST['del_4'])) {														
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
															//////refresh page///////////////////
															echo "<meta http-equiv=\"refresh\" content=\"2\">";
															print "</div>";
														} else {
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
															print "</div>";
														}
													}
												}
											}									
										////////////////////////////////////////////////////////////////////////////////////////////////////
										}										
									}
									else{
										 if(isset($_POST['del_4'])){	
											print "<form action=\"\" method=\"post\">";
											print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the record???</p>";
												
											$stmt3=$conn->prepare('SELECT Image_4 FROM post WHERE ID=:id');
											$stmt3->execute(array(':id'=>$_POST['del_4']));
											$row = $stmt3->fetch(PDO::FETCH_ASSOC);
											
											    if ($row['Image_4']) { 
												print "<p>Image: ".$row['Image_4']."</p>";
												}
												else{											
											    print "<p>Image: ".$_POST['del_4']."</p>";
                                                }												
												
											print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
											print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
											print "<input type=\"hidden\" name=\"del_4\" value=\"".$_POST['del_4']."\">";
											print "</div>";
											print "</form>";
										}										
									}
								}

								///IMG_5
								if(isset($_POST['del_5']) && !empty($_POST['del_5'])) {
									if(isset($_POST['borra']) && !empty($_POST['borra'])) {
																				
										$stmt3=$conn->prepare('SELECT Image_5 FROM post WHERE ID=:id');
										$stmt3->execute(array(':id'=>$_POST['del_5']));
										$rows2=$stmt3->fetch(PDO::FETCH_ASSOC);
																				
										if($rows2['Image_5']!=null) {
											if (file_exists('../uploads/' . $rows2['Image_5'])) {
												if($rows2['Image_5']!=null) {
													if (unlink('../uploads/' . $rows2['Image_5'])) {
														
														/////aqui va el update si existeix imatge al folder amb noticia///////////////////////												
														$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
														$stmt->execute(array(':id'=>$_POST['del_5']));
														$row=$stmt->fetch(PDO::FETCH_ASSOC);
														
														$stmt5 = $conn->prepare('UPDATE post SET Image_5=:img_5 WHERE ID=:id');
														$stmt5->execute(array(':img_5'=>$fitxer_imatge,':id'=>$_POST['del_5']));															
														
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";								
														print "</div>";
														echo "<meta http-equiv=\"refresh\" content=\"2\">";
													} else {
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
														print "</div>";					
													}
												}
											}
											else{									
											/////aqui va el update si no existeix imatge al folder pero hiha la noticia amb el registre///////////////////////												
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$_POST['del_5']));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											$stmt5 = $conn->prepare('UPDATE post SET Image_5=:img_5 WHERE ID=:id');
											$stmt5->execute(array(':img_5'=>$fitxer_imatge,':id'=>$_POST['del_5']));							

											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
											print "</div>";
											echo "<meta http-equiv=\"refresh\" content=\"2\">";
											}
										}
										else{
                                        //////aqui elimina la imatge del folder sense noticia/////////////////////////////////////
											if($_POST['del_5']!="") {
												if (file_exists('../uploads/' . $_POST['del_5'])) {
													if($_POST['del_5']!="") {
														if (unlink('../uploads/' . $_POST['del_5'])) {														
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
															//////refresh page///////////////////
															echo "<meta http-equiv=\"refresh\" content=\"2\">";
															print "</div>";
														} else {
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
															print "</div>";
														}
													}
												}
											}									
										////////////////////////////////////////////////////////////////////////////////////////////////////
										}										
									}
									else{
										 if(isset($_POST['del_5'])){	
											print "<form action=\"\" method=\"post\">";
											print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the record???</p>";
												
											$stmt3=$conn->prepare('SELECT Image_5 FROM post WHERE ID=:id');
											$stmt3->execute(array(':id'=>$_POST['del_5']));
											$row = $stmt3->fetch(PDO::FETCH_ASSOC);
											
											    if ($row['Image_5']) { 
												print "<p>Image: ".$row['Image_5']."</p>";
												}
												else{											
											    print "<p>Image: ".$_POST['del_5']."</p>";
                                                }												
												
											print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
											print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
											print "<input type=\"hidden\" name=\"del_5\" value=\"".$_POST['del_5']."\">";
											print "</div>";
											print "</form>";
										}										
									}
								}

								///IMG_6
								if(isset($_POST['del_6']) && !empty($_POST['del_6'])) {
									if(isset($_POST['borra']) && !empty($_POST['borra'])) {
																				
										$stmt3=$conn->prepare('SELECT Image_6 FROM post WHERE ID=:id');
										$stmt3->execute(array(':id'=>$_POST['del_6']));
										$rows2=$stmt3->fetch(PDO::FETCH_ASSOC);
																				
										if($rows2['Image_6']!=null) {
											if (file_exists('../uploads/' . $rows2['Image_6'])) {
												if($rows2['Image_6']!=null) {
													if (unlink('../uploads/' . $rows2['Image_6'])) {
														
														/////aqui va el update si existeix imatge al folder amb noticia///////////////////////												
														$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
														$stmt->execute(array(':id'=>$_POST['del_6']));
														$row=$stmt->fetch(PDO::FETCH_ASSOC);
														
														$stmt5 = $conn->prepare('UPDATE post SET Image_6=:img_6 WHERE ID=:id');
														$stmt5->execute(array(':img_6'=>$fitxer_imatge,':id'=>$_POST['del_6']));															
														
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";								
														print "</div>";
														echo "<meta http-equiv=\"refresh\" content=\"2\">";
													} else {
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
														print "</div>";					
													}
												}
											}
											else{									
											/////aqui va el update si no existeix imatge al folder pero hiha la noticia amb el registre///////////////////////												
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$_POST['del_6']));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											$stmt5 = $conn->prepare('UPDATE post SET Image_6=:img_6 WHERE ID=:id');
											$stmt5->execute(array(':img_6'=>$fitxer_imatge,':id'=>$_POST['del_6']));							

											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
											print "</div>";
											echo "<meta http-equiv=\"refresh\" content=\"2\">";
											}
										}
										else{
                                        //////aqui elimina la imatge del folder sense noticia/////////////////////////////////////
											if($_POST['del_6']!="") {
												if (file_exists('../uploads/' . $_POST['del_6'])) {
													if($_POST['del_6']!="") {
														if (unlink('../uploads/' . $_POST['del_6'])) {														
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
															//////refresh page///////////////////
															echo "<meta http-equiv=\"refresh\" content=\"2\">";
															print "</div>";
														} else {
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
															print "</div>";
														}
													}
												}
											}									
										////////////////////////////////////////////////////////////////////////////////////////////////////
										}										
									}
									else{
										 if(isset($_POST['del_6'])){	
											print "<form action=\"\" method=\"post\">";
											print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the record???</p>";
												
											$stmt3=$conn->prepare('SELECT Image_6 FROM post WHERE ID=:id');
											$stmt3->execute(array(':id'=>$_POST['del_6']));
											$row = $stmt3->fetch(PDO::FETCH_ASSOC);
											
											    if ($row['Image_6']) { 
												print "<p>Image: ".$row['Image_6']."</p>";
												}
												else{											
											    print "<p>Image: ".$_POST['del_6']."</p>";
                                                }												
												
											print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
											print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
											print "<input type=\"hidden\" name=\"del_6\" value=\"".$_POST['del_6']."\">";
											print "</div>";
											print "</form>";
										}										
									}
								}

								///IMG_7
								if(isset($_POST['del_7']) && !empty($_POST['del_7'])) {
									if(isset($_POST['borra']) && !empty($_POST['borra'])) {
																				
										$stmt3=$conn->prepare('SELECT Image_7 FROM post WHERE ID=:id');
										$stmt3->execute(array(':id'=>$_POST['del_7']));
										$rows2=$stmt3->fetch(PDO::FETCH_ASSOC);
																				
										if($rows2['Image_7']!=null) {
											if (file_exists('../uploads/' . $rows2['Image_7'])) {
												if($rows2['Image_7']!=null) {
													if (unlink('../uploads/' . $rows2['Image_7'])) {
														
														/////aqui va el update si existeix imatge al folder amb noticia///////////////////////												
														$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
														$stmt->execute(array(':id'=>$_POST['del_7']));
														$row=$stmt->fetch(PDO::FETCH_ASSOC);
														
														$stmt5 = $conn->prepare('UPDATE post SET Image_7=:img_7 WHERE ID=:id');
														$stmt5->execute(array(':img_7'=>$fitxer_imatge,':id'=>$_POST['del_7']));															
														
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";								
														print "</div>";
														echo "<meta http-equiv=\"refresh\" content=\"2\">";
													} else {
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
														print "</div>";					
													}
												}
											}
											else{									
											/////aqui va el update si no existeix imatge al folder pero hiha la noticia amb el registre///////////////////////												
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$_POST['del_7']));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											$stmt5 = $conn->prepare('UPDATE post SET Image_7=:img_7 WHERE ID=:id');
											$stmt5->execute(array(':img_7'=>$fitxer_imatge,':id'=>$_POST['del_7']));							

											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
											print "</div>";
											echo "<meta http-equiv=\"refresh\" content=\"2\">";
											}
										}
										else{
                                        //////aqui elimina la imatge del folder sense noticia/////////////////////////////////////
											if($_POST['del_7']!="") {
												if (file_exists('../uploads/' . $_POST['del_7'])) {
													if($_POST['del_7']!="") {
														if (unlink('../uploads/' . $_POST['del_7'])) {														
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
															//////refresh page///////////////////
															echo "<meta http-equiv=\"refresh\" content=\"2\">";
															print "</div>";
														} else {
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
															print "</div>";
														}
													}
												}
											}									
										////////////////////////////////////////////////////////////////////////////////////////////////////
										}										
									}
									else{
										 if(isset($_POST['del_7'])){	
											print "<form action=\"\" method=\"post\">";
											print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the record???</p>";
												
											$stmt3=$conn->prepare('SELECT Image_7 FROM post WHERE ID=:id');
											$stmt3->execute(array(':id'=>$_POST['del_7']));
											$row = $stmt3->fetch(PDO::FETCH_ASSOC);
											
											    if ($row['Image_7']) { 
												print "<p>Image: ".$row['Image_7']."</p>";
												}
												else{											
											    print "<p>Image: ".$_POST['del_7']."</p>";
                                                }												
												
											print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
											print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
											print "<input type=\"hidden\" name=\"del_7\" value=\"".$_POST['del_7']."\">";
											print "</div>";
											print "</form>";
										}										
									}
								}

								///IMG_8
								if(isset($_POST['del_8']) && !empty($_POST['del_8'])) {
									if(isset($_POST['borra']) && !empty($_POST['borra'])) {
																				
										$stmt3=$conn->prepare('SELECT Image_8 FROM post WHERE ID=:id');
										$stmt3->execute(array(':id'=>$_POST['del_8']));
										$rows2=$stmt3->fetch(PDO::FETCH_ASSOC);
																				
										if($rows2['Image_8']!=null) {
											if (file_exists('../uploads/' . $rows2['Image_8'])) {
												if($rows2['Image_8']!=null) {
													if (unlink('../uploads/' . $rows2['Image_8'])) {
														
														/////aqui va el update si existeix imatge al folder amb noticia///////////////////////												
														$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
														$stmt->execute(array(':id'=>$_POST['del_8']));
														$row=$stmt->fetch(PDO::FETCH_ASSOC);
														
														$stmt5 = $conn->prepare('UPDATE post SET Image_8=:img_8 WHERE ID=:id');
														$stmt5->execute(array(':img_8'=>$fitxer_imatge,':id'=>$_POST['del_8']));															
														
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";								
														print "</div>";
														echo "<meta http-equiv=\"refresh\" content=\"2\">";
													} else {
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
														print "</div>";					
													}
												}
											}
											else{									
											/////aqui va el update si no existeix imatge al folder pero hiha la noticia amb el registre///////////////////////												
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$_POST['del_8']));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											$stmt5 = $conn->prepare('UPDATE post SET Image_8=:img_8 WHERE ID=:id');
											$stmt5->execute(array(':img_8'=>$fitxer_imatge,':id'=>$_POST['del_8']));							

											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
											print "</div>";
											echo "<meta http-equiv=\"refresh\" content=\"2\">";
											}
										}
										else{
                                        //////aqui elimina la imatge del folder sense noticia/////////////////////////////////////
											if($_POST['del_8']!="") {
												if (file_exists('../uploads/' . $_POST['del_8'])) {
													if($_POST['del_8']!="") {
														if (unlink('../uploads/' . $_POST['del_8'])) {														
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
															//////refresh page///////////////////
															echo "<meta http-equiv=\"refresh\" content=\"2\">";
															print "</div>";
														} else {
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
															print "</div>";
														}
													}
												}
											}									
										////////////////////////////////////////////////////////////////////////////////////////////////////
										}										
									}
									else{
										 if(isset($_POST['del_8'])){	
											print "<form action=\"\" method=\"post\">";
											print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the record???</p>";
												
											$stmt3=$conn->prepare('SELECT Image_8 FROM post WHERE ID=:id');
											$stmt3->execute(array(':id'=>$_POST['del_8']));
											$row = $stmt3->fetch(PDO::FETCH_ASSOC);
											
											    if ($row['Image_8']) { 
												print "<p>Image: ".$row['Image_8']."</p>";
												}
												else{											
											    print "<p>Image: ".$_POST['del_8']."</p>";
                                                }												
												
											print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
											print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
											print "<input type=\"hidden\" name=\"del_8\" value=\"".$_POST['del_8']."\">";
											print "</div>";
											print "</form>";
										}										
									}
								}

								///IMG_9
								if(isset($_POST['del_9']) && !empty($_POST['del_9'])) {
									if(isset($_POST['borra']) && !empty($_POST['borra'])) {
																				
										$stmt3=$conn->prepare('SELECT Image_9 FROM post WHERE ID=:id');
										$stmt3->execute(array(':id'=>$_POST['del_9']));
										$rows2=$stmt3->fetch(PDO::FETCH_ASSOC);
																				
										if($rows2['Image_9']!=null) {
											if (file_exists('../uploads/' . $rows2['Image_9'])) {
												if($rows2['Image_9']!=null) {
													if (unlink('../uploads/' . $rows2['Image_9'])) {
														
														/////aqui va el update si existeix imatge al folder amb noticia///////////////////////												
														$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
														$stmt->execute(array(':id'=>$_POST['del_9']));
														$row=$stmt->fetch(PDO::FETCH_ASSOC);
														
														$stmt5 = $conn->prepare('UPDATE post SET Image_9=:img_9 WHERE ID=:id');
														$stmt5->execute(array(':img_9'=>$fitxer_imatge,':id'=>$_POST['del_9']));															
														
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";								
														print "</div>";
														echo "<meta http-equiv=\"refresh\" content=\"2\">";
													} else {
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
														print "</div>";					
													}
												}
											}
											else{									
											/////aqui va el update si no existeix imatge al folder pero hiha la noticia amb el registre///////////////////////												
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$_POST['del_9']));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											$stmt5 = $conn->prepare('UPDATE post SET Image_9=:img_9 WHERE ID=:id');
											$stmt5->execute(array(':img_9'=>$fitxer_imatge,':id'=>$_POST['del_9']));							

											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
											print "</div>";
											echo "<meta http-equiv=\"refresh\" content=\"2\">";
											}
										}
										else{
                                        //////aqui elimina la imatge del folder sense noticia/////////////////////////////////////
											if($_POST['del_9']!="") {
												if (file_exists('../uploads/' . $_POST['del_9'])) {
													if($_POST['del_9']!="") {
														if (unlink('../uploads/' . $_POST['del_9'])) {														
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
															//////refresh page///////////////////
															echo "<meta http-equiv=\"refresh\" content=\"2\">";
															print "</div>";
														} else {
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
															print "</div>";
														}
													}
												}
											}									
										////////////////////////////////////////////////////////////////////////////////////////////////////
										}										
									}
									else{
										 if(isset($_POST['del_9'])){	
											print "<form action=\"\" method=\"post\">";
											print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the record???</p>";
												
											$stmt3=$conn->prepare('SELECT Image_9 FROM post WHERE ID=:id');
											$stmt3->execute(array(':id'=>$_POST['del_9']));
											$row = $stmt3->fetch(PDO::FETCH_ASSOC);
											
											    if ($row['Image_9']) { 
												print "<p>Image: ".$row['Image_9']."</p>";
												}
												else{											
											    print "<p>Image: ".$_POST['del_9']."</p>";
                                                }												
												
											print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
											print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
											print "<input type=\"hidden\" name=\"del_9\" value=\"".$_POST['del_9']."\">";
											print "</div>";
											print "</form>";
										}										
									}
								}

								///IMG_10
								if(isset($_POST['del_10']) && !empty($_POST['del_10'])) {
									if(isset($_POST['borra']) && !empty($_POST['borra'])) {
																				
										$stmt3=$conn->prepare('SELECT Image_10 FROM post WHERE ID=:id');
										$stmt3->execute(array(':id'=>$_POST['del_10']));
										$rows2=$stmt3->fetch(PDO::FETCH_ASSOC);
																				
										if($rows2['Image_10']!=null) {
											if (file_exists('../uploads/' . $rows2['Image_10'])) {
												if($rows2['Image_10']!=null) {
													if (unlink('../uploads/' . $rows2['Image_10'])) {
														
														/////aqui va el update si existeix imatge al folder amb noticia///////////////////////												
														$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
														$stmt->execute(array(':id'=>$_POST['del_10']));
														$row=$stmt->fetch(PDO::FETCH_ASSOC);
														
														$stmt5 = $conn->prepare('UPDATE post SET Image_10=:img_10 WHERE ID=:id');
														$stmt5->execute(array(':img_10'=>$fitxer_imatge,':id'=>$_POST['del_10']));															
														
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";								
														print "</div>";
														echo "<meta http-equiv=\"refresh\" content=\"2\">";
													} else {
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
														print "</div>";					
													}
												}
											}
											else{									
											/////aqui va el update si no existeix imatge al folder pero hiha la noticia amb el registre///////////////////////												
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$_POST['del_10']));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											$stmt5 = $conn->prepare('UPDATE post SET Image_10=:img_10 WHERE ID=:id');
											$stmt5->execute(array(':img_10'=>$fitxer_imatge,':id'=>$_POST['del_10']));							

											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
											print "</div>";
											echo "<meta http-equiv=\"refresh\" content=\"2\">";
											}
										}
										else{
                                        //////aqui elimina la imatge del folder sense noticia/////////////////////////////////////
											if($_POST['del_10']!="") {
												if (file_exists('../uploads/' . $_POST['del_10'])) {
													if($_POST['del_10']!="") {
														if (unlink('../uploads/' . $_POST['del_10'])) {														
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
															//////refresh page///////////////////
															echo "<meta http-equiv=\"refresh\" content=\"2\">";
															print "</div>";
														} else {
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
															print "</div>";
														}
													}
												}
											}									
										////////////////////////////////////////////////////////////////////////////////////////////////////
										}										
									}
									else{
										 if(isset($_POST['del_10'])){	
											print "<form action=\"\" method=\"post\">";
											print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the record???</p>";
												
											$stmt3=$conn->prepare('SELECT Image_10 FROM post WHERE ID=:id');
											$stmt3->execute(array(':id'=>$_POST['del_10']));
											$row = $stmt3->fetch(PDO::FETCH_ASSOC);
											
											    if ($row['Image_10']) { 
												print "<p>Image: ".$row['Image_10']."</p>";
												}
												else{											
											    print "<p>Image: ".$_POST['del_10']."</p>";
                                                }												
												
											print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
											print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
											print "<input type=\"hidden\" name=\"del_10\" value=\"".$_POST['del_10']."\">";
											print "</div>";
											print "</form>";
										}										
									}
								}

								///IMG_11
								if(isset($_POST['del_11']) && !empty($_POST['del_11'])) {
									if(isset($_POST['borra']) && !empty($_POST['borra'])) {
																				
										$stmt3=$conn->prepare('SELECT Image_11 FROM post WHERE ID=:id');
										$stmt3->execute(array(':id'=>$_POST['del_11']));
										$rows2=$stmt3->fetch(PDO::FETCH_ASSOC);
																				
										if($rows2['Image_11']!=null) {
											if (file_exists('../uploads/' . $rows2['Image_11'])) {
												if($rows2['Image_11']!=null) {
													if (unlink('../uploads/' . $rows2['Image_11'])) {
														
														/////aqui va el update si existeix imatge al folder amb noticia///////////////////////												
														$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
														$stmt->execute(array(':id'=>$_POST['del_11']));
														$row=$stmt->fetch(PDO::FETCH_ASSOC);
														
														$stmt5 = $conn->prepare('UPDATE post SET Image_11=:img_11 WHERE ID=:id');
														$stmt5->execute(array(':img_11'=>$fitxer_imatge,':id'=>$_POST['del_11']));															
														
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";								
														print "</div>";
														echo "<meta http-equiv=\"refresh\" content=\"2\">";
													} else {
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
														print "</div>";					
													}
												}
											}
											else{									
											/////aqui va el update si no existeix imatge al folder pero hiha la noticia amb el registre///////////////////////												
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$_POST['del_11']));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											$stmt5 = $conn->prepare('UPDATE post SET Image_11=:img_11 WHERE ID=:id');
											$stmt5->execute(array(':img_11'=>$fitxer_imatge,':id'=>$_POST['del_11']));							

											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
											print "</div>";
											echo "<meta http-equiv=\"refresh\" content=\"2\">";
											}
										}
										else{
                                        //////aqui elimina la imatge del folder sense noticia/////////////////////////////////////
											if($_POST['del_11']!="") {
												if (file_exists('../uploads/' . $_POST['del_11'])) {
													if($_POST['del_11']!="") {
														if (unlink('../uploads/' . $_POST['del_11'])) {														
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
															//////refresh page///////////////////
															echo "<meta http-equiv=\"refresh\" content=\"2\">";
															print "</div>";
														} else {
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
															print "</div>";
														}
													}
												}
											}									
										////////////////////////////////////////////////////////////////////////////////////////////////////
										}										
									}
									else{
										 if(isset($_POST['del_11'])){	
											print "<form action=\"\" method=\"post\">";
											print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the record???</p>";
												
											$stmt3=$conn->prepare('SELECT Image_11 FROM post WHERE ID=:id');
											$stmt3->execute(array(':id'=>$_POST['del_11']));
											$row = $stmt3->fetch(PDO::FETCH_ASSOC);
											
											    if ($row['Image_11']) { 
												print "<p>Image: ".$row['Image_11']."</p>";
												}
												else{											
											    print "<p>Image: ".$_POST['del_11']."</p>";
                                                }												
												
											print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
											print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
											print "<input type=\"hidden\" name=\"del_11\" value=\"".$_POST['del_11']."\">";
											print "</div>";
											print "</form>";
										}										
									}
								}

								///IMG_12
								if(isset($_POST['del_12']) && !empty($_POST['del_12'])) {
									if(isset($_POST['borra']) && !empty($_POST['borra'])) {
																				
										$stmt3=$conn->prepare('SELECT Image_12 FROM post WHERE ID=:id');
										$stmt3->execute(array(':id'=>$_POST['del_12']));
										$rows2=$stmt3->fetch(PDO::FETCH_ASSOC);
																				
										if($rows2['Image_12']!=null) {
											if (file_exists('../uploads/' . $rows2['Image_12'])) {
												if($rows2['Image_12']!=null) {
													if (unlink('../uploads/' . $rows2['Image_12'])) {
														
														/////aqui va el update si existeix imatge al folder amb noticia///////////////////////												
														$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
														$stmt->execute(array(':id'=>$_POST['del_12']));
														$row=$stmt->fetch(PDO::FETCH_ASSOC);
														
														$stmt5 = $conn->prepare('UPDATE post SET Image_12=:img_12 WHERE ID=:id');
														$stmt5->execute(array(':img_12'=>$fitxer_imatge,':id'=>$_POST['del_12']));															
														
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";								
														print "</div>";
														echo "<meta http-equiv=\"refresh\" content=\"2\">";
													} else {
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
														print "</div>";					
													}
												}
											}
											else{									
											/////aqui va el update si no existeix imatge al folder pero hiha la noticia amb el registre///////////////////////												
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$_POST['del_12']));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											$stmt5 = $conn->prepare('UPDATE post SET Image_12=:img_12 WHERE ID=:id');
											$stmt5->execute(array(':img_12'=>$fitxer_imatge,':id'=>$_POST['del_12']));							

											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
											print "</div>";
											echo "<meta http-equiv=\"refresh\" content=\"2\">";
											}
										}
										else{
                                        //////aqui elimina la imatge del folder sense noticia/////////////////////////////////////
											if($_POST['del_12']!="") {
												if (file_exists('../uploads/' . $_POST['del_12'])) {
													if($_POST['del_12']!="") {
														if (unlink('../uploads/' . $_POST['del_12'])) {														
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
															//////refresh page///////////////////
															echo "<meta http-equiv=\"refresh\" content=\"2\">";
															print "</div>";
														} else {
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
															print "</div>";
														}
													}
												}
											}									
										////////////////////////////////////////////////////////////////////////////////////////////////////
										}										
									}
									else{
										 if(isset($_POST['del_12'])){	
											print "<form action=\"\" method=\"post\">";
											print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the record???</p>";
												
											$stmt3=$conn->prepare('SELECT Image_12 FROM post WHERE ID=:id');
											$stmt3->execute(array(':id'=>$_POST['del_12']));
											$row = $stmt3->fetch(PDO::FETCH_ASSOC);
											
											    if ($row['Image_12']) { 
												print "<p>Image: ".$row['Image_12']."</p>";
												}
												else{											
											    print "<p>Image: ".$_POST['del_12']."</p>";
                                                }												
												
											print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
											print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
											print "<input type=\"hidden\" name=\"del_12\" value=\"".$_POST['del_12']."\">";
											print "</div>";
											print "</form>";
										}										
									}
								}

								///IMG_13
								if(isset($_POST['del_13']) && !empty($_POST['del_13'])) {
									if(isset($_POST['borra']) && !empty($_POST['borra'])) {
																				
										$stmt3=$conn->prepare('SELECT Image_13 FROM post WHERE ID=:id');
										$stmt3->execute(array(':id'=>$_POST['del_13']));
										$rows2=$stmt3->fetch(PDO::FETCH_ASSOC);
																				
										if($rows2['Image_13']!=null) {
											if (file_exists('../uploads/' . $rows2['Image_13'])) {
												if($rows2['Image_13']!=null) {
													if (unlink('../uploads/' . $rows2['Image_13'])) {
														
														/////aqui va el update si existeix imatge al folder amb noticia///////////////////////												
														$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
														$stmt->execute(array(':id'=>$_POST['del_13']));
														$row=$stmt->fetch(PDO::FETCH_ASSOC);
														
														$stmt5 = $conn->prepare('UPDATE post SET Image_13=:img_13 WHERE ID=:id');
														$stmt5->execute(array(':img_13'=>$fitxer_imatge,':id'=>$_POST['del_13']));															
														
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";								
														print "</div>";
														echo "<meta http-equiv=\"refresh\" content=\"2\">";
													} else {
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
														print "</div>";					
													}
												}
											}
											else{									
											/////aqui va el update si no existeix imatge al folder pero hiha la noticia amb el registre///////////////////////												
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$_POST['del_13']));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											$stmt5 = $conn->prepare('UPDATE post SET Image_13=:img_13 WHERE ID=:id');
											$stmt5->execute(array(':img_13'=>$fitxer_imatge,':id'=>$_POST['del_13']));							

											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
											print "</div>";
											echo "<meta http-equiv=\"refresh\" content=\"2\">";
											}
										}
										else{
                                        //////aqui elimina la imatge del folder sense noticia/////////////////////////////////////
											if($_POST['del_13']!="") {
												if (file_exists('../uploads/' . $_POST['del_13'])) {
													if($_POST['del_13']!="") {
														if (unlink('../uploads/' . $_POST['del_13'])) {														
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
															//////refresh page///////////////////
															echo "<meta http-equiv=\"refresh\" content=\"2\">";
															print "</div>";
														} else {
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
															print "</div>";
														}
													}
												}
											}									
										////////////////////////////////////////////////////////////////////////////////////////////////////
										}										
									}
									else{
										 if(isset($_POST['del_13'])){	
											print "<form action=\"\" method=\"post\">";
											print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the record???</p>";
												
											$stmt3=$conn->prepare('SELECT Image_13 FROM post WHERE ID=:id');
											$stmt3->execute(array(':id'=>$_POST['del_13']));
											$row = $stmt3->fetch(PDO::FETCH_ASSOC);
											
											    if ($row['Image_13']) { 
												print "<p>Image: ".$row['Image_13']."</p>";
												}
												else{											
											    print "<p>Image: ".$_POST['del_13']."</p>";
                                                }												
												
											print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
											print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
											print "<input type=\"hidden\" name=\"del_13\" value=\"".$_POST['del_13']."\">";
											print "</div>";
											print "</form>";
										}										
									}
								}

								///IMG_14
								if(isset($_POST['del_14']) && !empty($_POST['del_14'])) {
									if(isset($_POST['borra']) && !empty($_POST['borra'])) {
																				
										$stmt3=$conn->prepare('SELECT Image_14 FROM post WHERE ID=:id');
										$stmt3->execute(array(':id'=>$_POST['del_14']));
										$rows2=$stmt3->fetch(PDO::FETCH_ASSOC);
																				
										if($rows2['Image_14']!=null) {
											if (file_exists('../uploads/' . $rows2['Image_14'])) {
												if($rows2['Image_14']!=null) {
													if (unlink('../uploads/' . $rows2['Image_14'])) {
														
														/////aqui va el update si existeix imatge al folder amb noticia///////////////////////												
														$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
														$stmt->execute(array(':id'=>$_POST['del_14']));
														$row=$stmt->fetch(PDO::FETCH_ASSOC);
														
														$stmt5 = $conn->prepare('UPDATE post SET Image_14=:img_14 WHERE ID=:id');
														$stmt5->execute(array(':img_14'=>$fitxer_imatge,':id'=>$_POST['del_14']));															
														
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";								
														print "</div>";
														echo "<meta http-equiv=\"refresh\" content=\"2\">";
													} else {
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
														print "</div>";					
													}
												}
											}
											else{									
											/////aqui va el update si no existeix imatge al folder pero hiha la noticia amb el registre///////////////////////												
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$_POST['del_14']));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											$stmt5 = $conn->prepare('UPDATE post SET Image_14=:img_14 WHERE ID=:id');
											$stmt5->execute(array(':img_14'=>$fitxer_imatge,':id'=>$_POST['del_14']));							

											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
											print "</div>";
											echo "<meta http-equiv=\"refresh\" content=\"2\">";
											}
										}
										else{
                                        //////aqui elimina la imatge del folder sense noticia/////////////////////////////////////
											if($_POST['del_14']!="") {
												if (file_exists('../uploads/' . $_POST['del_14'])) {
													if($_POST['del_14']!="") {
														if (unlink('../uploads/' . $_POST['del_14'])) {														
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
															//////refresh page///////////////////
															echo "<meta http-equiv=\"refresh\" content=\"2\">";
															print "</div>";
														} else {
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
															print "</div>";
														}
													}
												}
											}									
										////////////////////////////////////////////////////////////////////////////////////////////////////
										}										
									}
									else{
										 if(isset($_POST['del_14'])){	
											print "<form action=\"\" method=\"post\">";
											print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the record???</p>";
												
											$stmt3=$conn->prepare('SELECT Image_14 FROM post WHERE ID=:id');
											$stmt3->execute(array(':id'=>$_POST['del_14']));
											$row = $stmt3->fetch(PDO::FETCH_ASSOC);
											
											    if ($row['Image_14']) { 
												print "<p>Image: ".$row['Image_14']."</p>";
												}
												else{											
											    print "<p>Image: ".$_POST['del_14']."</p>";
                                                }												
												
											print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
											print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
											print "<input type=\"hidden\" name=\"del_14\" value=\"".$_POST['del_14']."\">";
											print "</div>";
											print "</form>";
										}										
									}
								}

								///IMG_15
								if(isset($_POST['del_15']) && !empty($_POST['del_15'])) {
									if(isset($_POST['borra']) && !empty($_POST['borra'])) {
																				
										$stmt3=$conn->prepare('SELECT Image_15 FROM post WHERE ID=:id');
										$stmt3->execute(array(':id'=>$_POST['del_15']));
										$rows2=$stmt3->fetch(PDO::FETCH_ASSOC);
																				
										if($rows2['Image_15']!=null) {
											if (file_exists('../uploads/' . $rows2['Image_15'])) {
												if($rows2['Image_15']!=null) {
													if (unlink('../uploads/' . $rows2['Image_15'])) {
														
														/////aqui va el update si existeix imatge al folder amb noticia///////////////////////												
														$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
														$stmt->execute(array(':id'=>$_POST['del_15']));
														$row=$stmt->fetch(PDO::FETCH_ASSOC);
														
														$stmt5 = $conn->prepare('UPDATE post SET Image_15=:img_15 WHERE ID=:id');
														$stmt5->execute(array(':img_15'=>$fitxer_imatge,':id'=>$_POST['del_15']));															
														
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";								
														print "</div>";
														echo "<meta http-equiv=\"refresh\" content=\"2\">";
													} else {
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
														print "</div>";					
													}
												}
											}
											else{									
											/////aqui va el update si no existeix imatge al folder pero hiha la noticia amb el registre///////////////////////												
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$_POST['del_15']));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											$stmt5 = $conn->prepare('UPDATE post SET Image_15=:img_15 WHERE ID=:id');
											$stmt5->execute(array(':img_15'=>$fitxer_imatge,':id'=>$_POST['del_15']));							

											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
											print "</div>";
											echo "<meta http-equiv=\"refresh\" content=\"2\">";
											}
										}
										else{
                                        //////aqui elimina la imatge del folder sense noticia/////////////////////////////////////
											if($_POST['del_15']!="") {
												if (file_exists('../uploads/' . $_POST['del_15'])) {
													if($_POST['del_15']!="") {
														if (unlink('../uploads/' . $_POST['del_15'])) {														
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
															//////refresh page///////////////////
															echo "<meta http-equiv=\"refresh\" content=\"2\">";
															print "</div>";
														} else {
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
															print "</div>";
														}
													}
												}
											}									
										////////////////////////////////////////////////////////////////////////////////////////////////////
										}										
									}
									else{
										 if(isset($_POST['del_15'])){	
											print "<form action=\"\" method=\"post\">";
											print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the record???</p>";
												
											$stmt3=$conn->prepare('SELECT Image_15 FROM post WHERE ID=:id');
											$stmt3->execute(array(':id'=>$_POST['del_15']));
											$row = $stmt3->fetch(PDO::FETCH_ASSOC);
											
											    if ($row['Image_15']) { 
												print "<p>Image: ".$row['Image_15']."</p>";
												}
												else{											
											    print "<p>Image: ".$_POST['del_15']."</p>";
                                                }												
												
											print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
											print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
											print "<input type=\"hidden\" name=\"del_15\" value=\"".$_POST['del_15']."\">";
											print "</div>";
											print "</form>";
										}										
									}
								}

								///IMG_16
								if(isset($_POST['del_16']) && !empty($_POST['del_16'])) {
									if(isset($_POST['borra']) && !empty($_POST['borra'])) {
																				
										$stmt3=$conn->prepare('SELECT Image_16 FROM post WHERE ID=:id');
										$stmt3->execute(array(':id'=>$_POST['del_16']));
										$rows2=$stmt3->fetch(PDO::FETCH_ASSOC);
																				
										if($rows2['Image_16']!=null) {
											if (file_exists('../uploads/' . $rows2['Image_16'])) {
												if($rows2['Image_16']!=null) {
													if (unlink('../uploads/' . $rows2['Image_16'])) {
														
														/////aqui va el update si existeix imatge al folder amb noticia///////////////////////												
														$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
														$stmt->execute(array(':id'=>$_POST['del_16']));
														$row=$stmt->fetch(PDO::FETCH_ASSOC);
														
														$stmt5 = $conn->prepare('UPDATE post SET Image_16=:img_16 WHERE ID=:id');
														$stmt5->execute(array(':img_16'=>$fitxer_imatge,':id'=>$_POST['del_16']));															
														
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";								
														print "</div>";
														echo "<meta http-equiv=\"refresh\" content=\"2\">";
													} else {
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
														print "</div>";					
													}
												}
											}
											else{									
											/////aqui va el update si no existeix imatge al folder pero hiha la noticia amb el registre///////////////////////												
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$_POST['del_16']));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											$stmt5 = $conn->prepare('UPDATE post SET Image_16=:img_16 WHERE ID=:id');
											$stmt5->execute(array(':img_16'=>$fitxer_imatge,':id'=>$_POST['del_16']));							

											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
											print "</div>";
											echo "<meta http-equiv=\"refresh\" content=\"2\">";
											}
										}
										else{
                                        //////aqui elimina la imatge del folder sense noticia/////////////////////////////////////
											if($_POST['del_16']!="") {
												if (file_exists('../uploads/' . $_POST['del_16'])) {
													if($_POST['del_16']!="") {
														if (unlink('../uploads/' . $_POST['del_16'])) {														
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
															//////refresh page///////////////////
															echo "<meta http-equiv=\"refresh\" content=\"2\">";
															print "</div>";
														} else {
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
															print "</div>";
														}
													}
												}
											}									
										////////////////////////////////////////////////////////////////////////////////////////////////////
										}										
									}
									else{
										 if(isset($_POST['del_16'])){	
											print "<form action=\"\" method=\"post\">";
											print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the record???</p>";
												
											$stmt3=$conn->prepare('SELECT Image_16 FROM post WHERE ID=:id');
											$stmt3->execute(array(':id'=>$_POST['del_16']));
											$row = $stmt3->fetch(PDO::FETCH_ASSOC);
											
											    if ($row['Image_16']) { 
												print "<p>Image: ".$row['Image_16']."</p>";
												}
												else{											
											    print "<p>Image: ".$_POST['del_16']."</p>";
                                                }												
												
											print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
											print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
											print "<input type=\"hidden\" name=\"del_16\" value=\"".$_POST['del_16']."\">";
											print "</div>";
											print "</form>";
										}										
									}
								}

								///IMG_17
								if(isset($_POST['del_17']) && !empty($_POST['del_17'])) {
									if(isset($_POST['borra']) && !empty($_POST['borra'])) {
																				
										$stmt3=$conn->prepare('SELECT Image_17 FROM post WHERE ID=:id');
										$stmt3->execute(array(':id'=>$_POST['del_17']));
										$rows2=$stmt3->fetch(PDO::FETCH_ASSOC);
																				
										if($rows2['Image_17']!=null) {
											if (file_exists('../uploads/' . $rows2['Image_17'])) {
												if($rows2['Image_17']!=null) {
													if (unlink('../uploads/' . $rows2['Image_17'])) {
														
														/////aqui va el update si existeix imatge al folder amb noticia///////////////////////												
														$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
														$stmt->execute(array(':id'=>$_POST['del_17']));
														$row=$stmt->fetch(PDO::FETCH_ASSOC);
														
														$stmt5 = $conn->prepare('UPDATE post SET Image_17=:img_17 WHERE ID=:id');
														$stmt5->execute(array(':img_17'=>$fitxer_imatge,':id'=>$_POST['del_17']));															
														
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";								
														print "</div>";
														echo "<meta http-equiv=\"refresh\" content=\"2\">";
													} else {
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
														print "</div>";					
													}
												}
											}
											else{									
											/////aqui va el update si no existeix imatge al folder pero hiha la noticia amb el registre///////////////////////												
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$_POST['del_17']));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											$stmt5 = $conn->prepare('UPDATE post SET Image_17=:img_17 WHERE ID=:id');
											$stmt5->execute(array(':img_17'=>$fitxer_imatge,':id'=>$_POST['del_17']));							

											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
											print "</div>";
											echo "<meta http-equiv=\"refresh\" content=\"2\">";
											}
										}
										else{
                                        //////aqui elimina la imatge del folder sense noticia/////////////////////////////////////
											if($_POST['del_17']!="") {
												if (file_exists('../uploads/' . $_POST['del_17'])) {
													if($_POST['del_17']!="") {
														if (unlink('../uploads/' . $_POST['del_17'])) {														
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
															//////refresh page///////////////////
															echo "<meta http-equiv=\"refresh\" content=\"2\">";
															print "</div>";
														} else {
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
															print "</div>";
														}
													}
												}
											}									
										////////////////////////////////////////////////////////////////////////////////////////////////////
										}										
									}
									else{
										 if(isset($_POST['del_17'])){	
											print "<form action=\"\" method=\"post\">";
											print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the record???</p>";
												
											$stmt3=$conn->prepare('SELECT Image_17 FROM post WHERE ID=:id');
											$stmt3->execute(array(':id'=>$_POST['del_17']));
											$row = $stmt3->fetch(PDO::FETCH_ASSOC);
											
											    if ($row['Image_17']) { 
												print "<p>Image: ".$row['Image_17']."</p>";
												}
												else{											
											    print "<p>Image: ".$_POST['del_17']."</p>";
                                                }												
												
											print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
											print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
											print "<input type=\"hidden\" name=\"del_17\" value=\"".$_POST['del_17']."\">";
											print "</div>";
											print "</form>";
										}										
									}
								}

								///IMG_18
								if(isset($_POST['del_18']) && !empty($_POST['del_18'])) {
									if(isset($_POST['borra']) && !empty($_POST['borra'])) {
																				
										$stmt3=$conn->prepare('SELECT Image_18 FROM post WHERE ID=:id');
										$stmt3->execute(array(':id'=>$_POST['del_18']));
										$rows2=$stmt3->fetch(PDO::FETCH_ASSOC);
																				
										if($rows2['Image_18']!=null) {
											if (file_exists('../uploads/' . $rows2['Image_18'])) {
												if($rows2['Image_18']!=null) {
													if (unlink('../uploads/' . $rows2['Image_18'])) {
														
														/////aqui va el update si existeix imatge al folder amb noticia///////////////////////												
														$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
														$stmt->execute(array(':id'=>$_POST['del_18']));
														$row=$stmt->fetch(PDO::FETCH_ASSOC);
														
														$stmt5 = $conn->prepare('UPDATE post SET Image_18=:img_18 WHERE ID=:id');
														$stmt5->execute(array(':img_18'=>$fitxer_imatge,':id'=>$_POST['del_18']));															
														
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";								
														print "</div>";
														echo "<meta http-equiv=\"refresh\" content=\"2\">";
													} else {
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
														print "</div>";					
													}
												}
											}
											else{									
											/////aqui va el update si no existeix imatge al folder pero hiha la noticia amb el registre///////////////////////												
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$_POST['del_18']));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											$stmt5 = $conn->prepare('UPDATE post SET Image_18=:img_18 WHERE ID=:id');
											$stmt5->execute(array(':img_18'=>$fitxer_imatge,':id'=>$_POST['del_18']));							

											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
											print "</div>";
											echo "<meta http-equiv=\"refresh\" content=\"2\">";
											}
										}
										else{
                                        //////aqui elimina la imatge del folder sense noticia/////////////////////////////////////
											if($_POST['del_18']!="") {
												if (file_exists('../uploads/' . $_POST['del_18'])) {
													if($_POST['del_18']!="") {
														if (unlink('../uploads/' . $_POST['del_18'])) {														
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
															//////refresh page///////////////////
															echo "<meta http-equiv=\"refresh\" content=\"2\">";
															print "</div>";
														} else {
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
															print "</div>";
														}
													}
												}
											}									
										////////////////////////////////////////////////////////////////////////////////////////////////////
										}										
									}
									else{
										 if(isset($_POST['del_18'])){	
											print "<form action=\"\" method=\"post\">";
											print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the record???</p>";
												
											$stmt3=$conn->prepare('SELECT Image_18 FROM post WHERE ID=:id');
											$stmt3->execute(array(':id'=>$_POST['del_18']));
											$row = $stmt3->fetch(PDO::FETCH_ASSOC);
											
											    if ($row['Image_18']) { 
												print "<p>Image: ".$row['Image_18']."</p>";
												}
												else{											
											    print "<p>Image: ".$_POST['del_18']."</p>";
                                                }												
												
											print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
											print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
											print "<input type=\"hidden\" name=\"del_18\" value=\"".$_POST['del_18']."\">";
											print "</div>";
											print "</form>";
										}										
									}
								}

								///IMG_19
								if(isset($_POST['del_19']) && !empty($_POST['del_19'])) {
									if(isset($_POST['borra']) && !empty($_POST['borra'])) {
																				
										$stmt3=$conn->prepare('SELECT Image_19 FROM post WHERE ID=:id');
										$stmt3->execute(array(':id'=>$_POST['del_19']));
										$rows2=$stmt3->fetch(PDO::FETCH_ASSOC);
																				
										if($rows2['Image_19']!=null) {
											if (file_exists('../uploads/' . $rows2['Image_19'])) {
												if($rows2['Image_19']!=null) {
													if (unlink('../uploads/' . $rows2['Image_19'])) {
														
														/////aqui va el update si existeix imatge al folder amb noticia///////////////////////												
														$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
														$stmt->execute(array(':id'=>$_POST['del_19']));
														$row=$stmt->fetch(PDO::FETCH_ASSOC);
														
														$stmt5 = $conn->prepare('UPDATE post SET Image_19=:img_19 WHERE ID=:id');
														$stmt5->execute(array(':img_19'=>$fitxer_imatge,':id'=>$_POST['del_19']));															
														
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";								
														print "</div>";
														echo "<meta http-equiv=\"refresh\" content=\"2\">";
													} else {
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
														print "</div>";					
													}
												}
											}
											else{									
											/////aqui va el update si no existeix imatge al folder pero hiha la noticia amb el registre///////////////////////												
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$_POST['del_19']));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											$stmt5 = $conn->prepare('UPDATE post SET Image_19=:img_19 WHERE ID=:id');
											$stmt5->execute(array(':img_19'=>$fitxer_imatge,':id'=>$_POST['del_19']));							

											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
											print "</div>";
											echo "<meta http-equiv=\"refresh\" content=\"2\">";
											}
										}
										else{
                                        //////aqui elimina la imatge del folder sense noticia/////////////////////////////////////
											if($_POST['del_19']!="") {
												if (file_exists('../uploads/' . $_POST['del_19'])) {
													if($_POST['del_19']!="") {
														if (unlink('../uploads/' . $_POST['del_19'])) {														
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
															//////refresh page///////////////////
															echo "<meta http-equiv=\"refresh\" content=\"2\">";
															print "</div>";
														} else {
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
															print "</div>";
														}
													}
												}
											}									
										////////////////////////////////////////////////////////////////////////////////////////////////////
										}										
									}
									else{
										 if(isset($_POST['del_19'])){	
											print "<form action=\"\" method=\"post\">";
											print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the record???</p>";
												
											$stmt3=$conn->prepare('SELECT Image_19 FROM post WHERE ID=:id');
											$stmt3->execute(array(':id'=>$_POST['del_19']));
											$row = $stmt3->fetch(PDO::FETCH_ASSOC);
											
											    if ($row['Image_19']) { 
												print "<p>Image: ".$row['Image_19']."</p>";
												}
												else{											
											    print "<p>Image: ".$_POST['del_19']."</p>";
                                                }												
												
											print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
											print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
											print "<input type=\"hidden\" name=\"del_19\" value=\"".$_POST['del_19']."\">";
											print "</div>";
											print "</form>";
										}										
									}
								}

								///IMG_20
								if(isset($_POST['del_20']) && !empty($_POST['del_20'])) {
									if(isset($_POST['borra']) && !empty($_POST['borra'])) {
																				
										$stmt3=$conn->prepare('SELECT Image_20 FROM post WHERE ID=:id');
										$stmt3->execute(array(':id'=>$_POST['del_20']));
										$rows2=$stmt3->fetch(PDO::FETCH_ASSOC);
																				
										if($rows2['Image_20']!=null) {
											if (file_exists('../uploads/' . $rows2['Image_20'])) {
												if($rows2['Image_20']!=null) {
													if (unlink('../uploads/' . $rows2['Image_20'])) {
														
														/////aqui va el update si existeix imatge al folder amb noticia///////////////////////												
														$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
														$stmt->execute(array(':id'=>$_POST['del_20']));
														$row=$stmt->fetch(PDO::FETCH_ASSOC);
														
														$stmt5 = $conn->prepare('UPDATE post SET Image_20=:img_20 WHERE ID=:id');
														$stmt5->execute(array(':img_20'=>$fitxer_imatge,':id'=>$_POST['del_20']));															
														
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";								
														print "</div>";
														echo "<meta http-equiv=\"refresh\" content=\"2\">";
													} else {
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
														print "</div>";					
													}
												}
											}
											else{									
											/////aqui va el update si no existeix imatge al folder pero hiha la noticia amb el registre///////////////////////												
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$_POST['del_20']));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											$stmt5 = $conn->prepare('UPDATE post SET Image_20=:img_20 WHERE ID=:id');
											$stmt5->execute(array(':img_20'=>$fitxer_imatge,':id'=>$_POST['del_20']));							

											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
											print "</div>";
											echo "<meta http-equiv=\"refresh\" content=\"2\">";
											}
										}
										else{
                                        //////aqui elimina la imatge del folder sense noticia/////////////////////////////////////
											if($_POST['del_20']!="") {
												if (file_exists('../uploads/' . $_POST['del_20'])) {
													if($_POST['del_20']!="") {
														if (unlink('../uploads/' . $_POST['del_20'])) {														
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
															//////refresh page///////////////////
															echo "<meta http-equiv=\"refresh\" content=\"2\">";
															print "</div>";
														} else {
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
															print "</div>";
														}
													}
												}
											}									
										////////////////////////////////////////////////////////////////////////////////////////////////////
										}										
									}
									else{
										 if(isset($_POST['del_20'])){	
											print "<form action=\"\" method=\"post\">";
											print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the record???</p>";
												
											$stmt3=$conn->prepare('SELECT Image_20 FROM post WHERE ID=:id');
											$stmt3->execute(array(':id'=>$_POST['del_20']));
											$row = $stmt3->fetch(PDO::FETCH_ASSOC);
											
											    if ($row['Image_20']) { 
												print "<p>Image: ".$row['Image_20']."</p>";
												}
												else{											
											    print "<p>Image: ".$_POST['del_20']."</p>";
                                                }												
												
											print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
											print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
											print "<input type=\"hidden\" name=\"del_20\" value=\"".$_POST['del_20']."\">";
											print "</div>";
											print "</form>";
										}										
									}
								}

								///IMG_21
								if(isset($_POST['del_21']) && !empty($_POST['del_21'])) {
									if(isset($_POST['borra']) && !empty($_POST['borra'])) {
																				
										$stmt3=$conn->prepare('SELECT Image_21 FROM post WHERE ID=:id');
										$stmt3->execute(array(':id'=>$_POST['del_21']));
										$rows2=$stmt3->fetch(PDO::FETCH_ASSOC);
																				
										if($rows2['Image_21']!=null) {
											if (file_exists('../uploads/' . $rows2['Image_21'])) {
												if($rows2['Image_21']!=null) {
													if (unlink('../uploads/' . $rows2['Image_21'])) {
														
														/////aqui va el update si existeix imatge al folder amb noticia///////////////////////												
														$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
														$stmt->execute(array(':id'=>$_POST['del_21']));
														$row=$stmt->fetch(PDO::FETCH_ASSOC);
														
														$stmt5 = $conn->prepare('UPDATE post SET Image_21=:img_21 WHERE ID=:id');
														$stmt5->execute(array(':img_21'=>$fitxer_imatge,':id'=>$_POST['del_21']));															
														
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";								
														print "</div>";
														echo "<meta http-equiv=\"refresh\" content=\"2\">";
													} else {
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
														print "</div>";					
													}
												}
											}
											else{									
											/////aqui va el update si no existeix imatge al folder pero hiha la noticia amb el registre///////////////////////												
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$_POST['del_21']));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											$stmt5 = $conn->prepare('UPDATE post SET Image_21=:img_21 WHERE ID=:id');
											$stmt5->execute(array(':img_21'=>$fitxer_imatge,':id'=>$_POST['del_21']));							

											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
											print "</div>";
											echo "<meta http-equiv=\"refresh\" content=\"2\">";
											}
										}
										else{
                                        //////aqui elimina la imatge del folder sense noticia/////////////////////////////////////
											if($_POST['del_21']!="") {
												if (file_exists('../uploads/' . $_POST['del_21'])) {
													if($_POST['del_21']!="") {
														if (unlink('../uploads/' . $_POST['del_21'])) {														
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
															//////refresh page///////////////////
															echo "<meta http-equiv=\"refresh\" content=\"2\">";
															print "</div>";
														} else {
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
															print "</div>";
														}
													}
												}
											}									
										////////////////////////////////////////////////////////////////////////////////////////////////////
										}										
									}
									else{
										 if(isset($_POST['del_21'])){	
											print "<form action=\"\" method=\"post\">";
											print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the record???</p>";
												
											$stmt3=$conn->prepare('SELECT Image_21 FROM post WHERE ID=:id');
											$stmt3->execute(array(':id'=>$_POST['del_21']));
											$row = $stmt3->fetch(PDO::FETCH_ASSOC);
											
											    if ($row['Image_21']) { 
												print "<p>Image: ".$row['Image_21']."</p>";
												}
												else{											
											    print "<p>Image: ".$_POST['del_21']."</p>";
                                                }												
												
											print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
											print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
											print "<input type=\"hidden\" name=\"del_21\" value=\"".$_POST['del_21']."\">";
											print "</div>";
											print "</form>";
										}										
									}
								}

								///IMG_22
								if(isset($_POST['del_22']) && !empty($_POST['del_22'])) {
									if(isset($_POST['borra']) && !empty($_POST['borra'])) {
																				
										$stmt3=$conn->prepare('SELECT Image_22 FROM post WHERE ID=:id');
										$stmt3->execute(array(':id'=>$_POST['del_22']));
										$rows2=$stmt3->fetch(PDO::FETCH_ASSOC);
																				
										if($rows2['Image_22']!=null) {
											if (file_exists('../uploads/' . $rows2['Image_22'])) {
												if($rows2['Image_22']!=null) {
													if (unlink('../uploads/' . $rows2['Image_22'])) {
														
														/////aqui va el update si existeix imatge al folder amb noticia///////////////////////												
														$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
														$stmt->execute(array(':id'=>$_POST['del_22']));
														$row=$stmt->fetch(PDO::FETCH_ASSOC);
														
														$stmt5 = $conn->prepare('UPDATE post SET Image_22=:img_22 WHERE ID=:id');
														$stmt5->execute(array(':img_22'=>$fitxer_imatge,':id'=>$_POST['del_22']));															
														
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";								
														print "</div>";
														echo "<meta http-equiv=\"refresh\" content=\"2\">";
													} else {
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
														print "</div>";					
													}
												}
											}
											else{									
											/////aqui va el update si no existeix imatge al folder pero hiha la noticia amb el registre///////////////////////												
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$_POST['del_22']));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											$stmt5 = $conn->prepare('UPDATE post SET Image_22=:img_22 WHERE ID=:id');
											$stmt5->execute(array(':img_22'=>$fitxer_imatge,':id'=>$_POST['del_22']));							

											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
											print "</div>";
											echo "<meta http-equiv=\"refresh\" content=\"2\">";
											}
										}
										else{
                                        //////aqui elimina la imatge del folder sense noticia/////////////////////////////////////
											if($_POST['del_22']!="") {
												if (file_exists('../uploads/' . $_POST['del_22'])) {
													if($_POST['del_22']!="") {
														if (unlink('../uploads/' . $_POST['del_22'])) {														
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
															//////refresh page///////////////////
															echo "<meta http-equiv=\"refresh\" content=\"2\">";
															print "</div>";
														} else {
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
															print "</div>";
														}
													}
												}
											}									
										////////////////////////////////////////////////////////////////////////////////////////////////////
										}										
									}
									else{
										 if(isset($_POST['del_22'])){	
											print "<form action=\"\" method=\"post\">";
											print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the record???</p>";
												
											$stmt3=$conn->prepare('SELECT Image_22 FROM post WHERE ID=:id');
											$stmt3->execute(array(':id'=>$_POST['del_22']));
											$row = $stmt3->fetch(PDO::FETCH_ASSOC);
											
											    if ($row['Image_22']) { 
												print "<p>Image: ".$row['Image_22']."</p>";
												}
												else{											
											    print "<p>Image: ".$_POST['del_22']."</p>";
                                                }												
												
											print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
											print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
											print "<input type=\"hidden\" name=\"del_22\" value=\"".$_POST['del_22']."\">";
											print "</div>";
											print "</form>";
										}										
									}
								}

								///IMG_23
								if(isset($_POST['del_23']) && !empty($_POST['del_23'])) {
									if(isset($_POST['borra']) && !empty($_POST['borra'])) {
																				
										$stmt3=$conn->prepare('SELECT Image_23 FROM post WHERE ID=:id');
										$stmt3->execute(array(':id'=>$_POST['del_23']));
										$rows2=$stmt3->fetch(PDO::FETCH_ASSOC);
																				
										if($rows2['Image_23']!=null) {
											if (file_exists('../uploads/' . $rows2['Image_23'])) {
												if($rows2['Image_23']!=null) {
													if (unlink('../uploads/' . $rows2['Image_23'])) {
														
														/////aqui va el update si existeix imatge al folder amb noticia///////////////////////												
														$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
														$stmt->execute(array(':id'=>$_POST['del_23']));
														$row=$stmt->fetch(PDO::FETCH_ASSOC);
														
														$stmt5 = $conn->prepare('UPDATE post SET Image_23=:img_23 WHERE ID=:id');
														$stmt5->execute(array(':img_23'=>$fitxer_imatge,':id'=>$_POST['del_23']));															
														
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";								
														print "</div>";
														echo "<meta http-equiv=\"refresh\" content=\"2\">";
													} else {
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
														print "</div>";					
													}
												}
											}
											else{									
											/////aqui va el update si no existeix imatge al folder pero hiha la noticia amb el registre///////////////////////												
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$_POST['del_23']));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											$stmt5 = $conn->prepare('UPDATE post SET Image_23=:img_23 WHERE ID=:id');
											$stmt5->execute(array(':img_23'=>$fitxer_imatge,':id'=>$_POST['del_23']));							

											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
											print "</div>";
											echo "<meta http-equiv=\"refresh\" content=\"2\">";
											}
										}
										else{
                                        //////aqui elimina la imatge del folder sense noticia/////////////////////////////////////
											if($_POST['del_23']!="") {
												if (file_exists('../uploads/' . $_POST['del_23'])) {
													if($_POST['del_23']!="") {
														if (unlink('../uploads/' . $_POST['del_23'])) {														
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
															//////refresh page///////////////////
															echo "<meta http-equiv=\"refresh\" content=\"2\">";
															print "</div>";
														} else {
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
															print "</div>";
														}
													}
												}
											}									
										////////////////////////////////////////////////////////////////////////////////////////////////////
										}										
									}
									else{
										 if(isset($_POST['del_23'])){	
											print "<form action=\"\" method=\"post\">";
											print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the record???</p>";
												
											$stmt3=$conn->prepare('SELECT Image_23 FROM post WHERE ID=:id');
											$stmt3->execute(array(':id'=>$_POST['del_23']));
											$row = $stmt3->fetch(PDO::FETCH_ASSOC);
											
											    if ($row['Image_23']) { 
												print "<p>Image: ".$row['Image_23']."</p>";
												}
												else{											
											    print "<p>Image: ".$_POST['del_23']."</p>";
                                                }												
												
											print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
											print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
											print "<input type=\"hidden\" name=\"del_23\" value=\"".$_POST['del_23']."\">";
											print "</div>";
											print "</form>";
										}										
									}
								}

								///IMG_24
								if(isset($_POST['del_24']) && !empty($_POST['del_24'])) {
									if(isset($_POST['borra']) && !empty($_POST['borra'])) {
																				
										$stmt3=$conn->prepare('SELECT Image_24 FROM post WHERE ID=:id');
										$stmt3->execute(array(':id'=>$_POST['del_24']));
										$rows2=$stmt3->fetch(PDO::FETCH_ASSOC);
																				
										if($rows2['Image_24']!=null) {
											if (file_exists('../uploads/' . $rows2['Image_24'])) {
												if($rows2['Image_24']!=null) {
													if (unlink('../uploads/' . $rows2['Image_24'])) {
														
														/////aqui va el update si existeix imatge al folder amb noticia///////////////////////												
														$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
														$stmt->execute(array(':id'=>$_POST['del_24']));
														$row=$stmt->fetch(PDO::FETCH_ASSOC);
														
														$stmt5 = $conn->prepare('UPDATE post SET Image_24=:img_24 WHERE ID=:id');
														$stmt5->execute(array(':img_24'=>$fitxer_imatge,':id'=>$_POST['del_24']));															
														
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";								
														print "</div>";
														echo "<meta http-equiv=\"refresh\" content=\"2\">";
													} else {
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
														print "</div>";					
													}
												}
											}
											else{									
											/////aqui va el update si no existeix imatge al folder pero hiha la noticia amb el registre///////////////////////												
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$_POST['del_24']));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											$stmt5 = $conn->prepare('UPDATE post SET Image_24=:img_24 WHERE ID=:id');
											$stmt5->execute(array(':img_24'=>$fitxer_imatge,':id'=>$_POST['del_24']));							

											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
											print "</div>";
											echo "<meta http-equiv=\"refresh\" content=\"2\">";
											}
										}
										else{
                                        //////aqui elimina la imatge del folder sense noticia/////////////////////////////////////
											if($_POST['del_24']!="") {
												if (file_exists('../uploads/' . $_POST['del_24'])) {
													if($_POST['del_24']!="") {
														if (unlink('../uploads/' . $_POST['del_24'])) {														
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
															//////refresh page///////////////////
															echo "<meta http-equiv=\"refresh\" content=\"2\">";
															print "</div>";
														} else {
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
															print "</div>";
														}
													}
												}
											}									
										////////////////////////////////////////////////////////////////////////////////////////////////////
										}										
									}
									else{
										 if(isset($_POST['del_24'])){	
											print "<form action=\"\" method=\"post\">";
											print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the record???</p>";
												
											$stmt3=$conn->prepare('SELECT Image_24 FROM post WHERE ID=:id');
											$stmt3->execute(array(':id'=>$_POST['del_24']));
											$row = $stmt3->fetch(PDO::FETCH_ASSOC);
											
											    if ($row['Image_24']) { 
												print "<p>Image: ".$row['Image_24']."</p>";
												}
												else{											
											    print "<p>Image: ".$_POST['del_24']."</p>";
                                                }												
												
											print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
											print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
											print "<input type=\"hidden\" name=\"del_24\" value=\"".$_POST['del_24']."\">";
											print "</div>";
											print "</form>";
										}										
									}
								}

								///IMG_25
								if(isset($_POST['del_25']) && !empty($_POST['del_25'])) {
									if(isset($_POST['borra']) && !empty($_POST['borra'])) {
																				
										$stmt3=$conn->prepare('SELECT Image_25 FROM post WHERE ID=:id');
										$stmt3->execute(array(':id'=>$_POST['del_25']));
										$rows2=$stmt3->fetch(PDO::FETCH_ASSOC);
																				
										if($rows2['Image_25']!=null) {
											if (file_exists('../uploads/' . $rows2['Image_25'])) {
												if($rows2['Image_25']!=null) {
													if (unlink('../uploads/' . $rows2['Image_25'])) {
														
														/////aqui va el update si existeix imatge al folder amb noticia///////////////////////												
														$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
														$stmt->execute(array(':id'=>$_POST['del_25']));
														$row=$stmt->fetch(PDO::FETCH_ASSOC);
														
														$stmt5 = $conn->prepare('UPDATE post SET Image_25=:img_25 WHERE ID=:id');
														$stmt5->execute(array(':img_25'=>$fitxer_imatge,':id'=>$_POST['del_25']));															
														
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";								
														print "</div>";
														echo "<meta http-equiv=\"refresh\" content=\"2\">";
													} else {
														print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
														print "</div>";					
													}
												}
											}
											else{									
											/////aqui va el update si no existeix imatge al folder pero hiha la noticia amb el registre///////////////////////												
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$_POST['del_25']));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											$stmt5 = $conn->prepare('UPDATE post SET Image_25=:img_25 WHERE ID=:id');
											$stmt5->execute(array(':img_25'=>$fitxer_imatge,':id'=>$_POST['del_25']));							

											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
											print "</div>";
											echo "<meta http-equiv=\"refresh\" content=\"2\">";
											}
										}
										else{
                                        //////aqui elimina la imatge del folder sense noticia/////////////////////////////////////
											if($_POST['del_25']!="") {
												if (file_exists('../uploads/' . $_POST['del_25'])) {
													if($_POST['del_25']!="") {
														if (unlink('../uploads/' . $_POST['del_25'])) {														
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
															//////refresh page///////////////////
															echo "<meta http-equiv=\"refresh\" content=\"2\">";
															print "</div>";
														} else {
															print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
															print "</div>";
														}
													}
												}
											}									
										////////////////////////////////////////////////////////////////////////////////////////////////////
										}										
									}
									else{
										 if(isset($_POST['del_25'])){	
											print "<form action=\"\" method=\"post\">";
											print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the record???</p>";
												
											$stmt3=$conn->prepare('SELECT Image_25 FROM post WHERE ID=:id');
											$stmt3->execute(array(':id'=>$_POST['del_25']));
											$row = $stmt3->fetch(PDO::FETCH_ASSOC);
											
											    if ($row['Image_25']) { 
												print "<p>Image: ".$row['Image_25']."</p>";
												}
												else{											
											    print "<p>Image: ".$_POST['del_25']."</p>";
                                                }												
												
											print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
											print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
											print "<input type=\"hidden\" name=\"del_25\" value=\"".$_POST['del_25']."\">";
											print "</div>";
											print "</form>";
										}										
									}
								}

////////////////////ELIMINAR MES DE UN ELEMENT SELECCIONAT AMB EL CHECKBOX//////////////////////////////////////////

            if(isset($_POST['dels']) && !empty($_POST['dels'])) {
                if(isset($_POST['borras']) && !empty($_POST['borras'])) {

					//////execute_1
					$three_image1 = array(); 
					$total_imatges=count($_POST['delregs']);
					$imatgeIni=0;
					$imatgeFi=$imatgeIni+$total_imatges;
						
					while($imatgeIni<=$imatgeFi-1){	
					if($imatgeIni>=$total_imatges) break;
										
					$extraido=explode(',', $_POST['delregs'][$imatgeIni]);
					$string1 = $extraido[0];
					$string2 = $extraido[1];
					$three_image1[$string2]=$string1; 					
																							
					$imatgeIni++;
					}
										
					foreach($three_image1 as $value => $key){
							
                        $eliminat=false;
							
						$stmt3=$conn->prepare('SELECT * FROM post WHERE ID=:idn');
						$stmt3->execute(array(':idn'=>$key));
						$row1=$stmt3->fetch(PDO::FETCH_ASSOC);							
						
						if ($value==$row1['Image_1']) {
								if (file_exists('../uploads/' . $row1['Image_1'])) {
									if($row1['Image_1']!=null) {
										if (unlink('../uploads/' . $row1['Image_1'])) {	
                                            $fitxer_imatge_1='';										
											$eliminat = true;
										} else {
											$eliminat = false;
										}
									}								
								}
						}else{$fitxer_imatge_1=$row1['Image_1'];}
						
						if ($value==$row1['Image_2']) {
								if (file_exists('../uploads/' . $row1['Image_2'])) {
									if($row1['Image_2']!=null) {
										if (unlink('../uploads/' . $row1['Image_2'])) {	
                                            $fitxer_imatge_2='';										
											$eliminat = true;
										} else {
											$eliminat = false;
										}
									}								
								}								
						}else{$fitxer_imatge_2=$row1['Image_2'];}
						
						if ($value==$row1['Image_3']) {
								if (file_exists('../uploads/' . $row1['Image_3'])) {
									if($row1['Image_3']!=null) {
										if (unlink('../uploads/' . $row1['Image_3'])) {	
                                            $fitxer_imatge_3='';										
											$eliminat = true;
										} else {
											$eliminat = false;
										}
									}								
								}								
						}else{$fitxer_imatge_3=$row1['Image_3'];}
						
						if ($value==$row1['Image_4']) {
								if (file_exists('../uploads/' . $row1['Image_4'])) {
									if($row1['Image_4']!=null) {
										if (unlink('../uploads/' . $row1['Image_4'])) {	
                                            $fitxer_imatge_4='';										
											$eliminat = true;
										} else {
											$eliminat = false;
										}
									}								
								}								
						}else{$fitxer_imatge_4=$row1['Image_4'];}
						
						if ($value==$row1['Image_5']) {
								if (file_exists('../uploads/' . $row1['Image_5'])) {
									if($row1['Image_5']!=null) {
										if (unlink('../uploads/' . $row1['Image_5'])) {	
                                            $fitxer_imatge_5='';										
											$eliminat = true;
										} else {
											$eliminat = false;
										}
									}								
								}								
						}else{$fitxer_imatge_5=$row1['Image_5'];}
						
						if ($value==$row1['Image_6']) {
								if (file_exists('../uploads/' . $row1['Image_6'])) {
									if($row1['Image_6']!=null) {
										if (unlink('../uploads/' . $row1['Image_6'])) {	
                                            $fitxer_imatge_6='';										
											$eliminat = true;
										} else {
											$eliminat = false;
										}
									}								
								}								
						}else{$fitxer_imatge_6=$row1['Image_6'];}

						if ($value==$row1['Image_7']) {
								if (file_exists('../uploads/' . $row1['Image_7'])) {
									if($row1['Image_7']!=null) {
										if (unlink('../uploads/' . $row1['Image_7'])) {	
                                            $fitxer_imatge_7='';										
											$eliminat = true;
										} else {
											$eliminat = false;
										}
									}								
								}								
						}else{$fitxer_imatge_7=$row1['Image_7'];}

						if ($value==$row1['Image_8']) {
								if (file_exists('../uploads/' . $row1['Image_8'])) {
									if($row1['Image_8']!=null) {
										if (unlink('../uploads/' . $row1['Image_8'])) {	
                                            $fitxer_imatge_8='';										
											$eliminat = true;
										} else {
											$eliminat = false;
										}
									}								
								}								
						}else{$fitxer_imatge_8=$row1['Image_8'];}

						if ($value==$row1['Image_9']) {
								if (file_exists('../uploads/' . $row1['Image_9'])) {
									if($row1['Image_9']!=null) {
										if (unlink('../uploads/' . $row1['Image_9'])) {	
                                            $fitxer_imatge_9='';										
											$eliminat = true;
										} else {
											$eliminat = false;
										}
									}								
								}								
						}else{$fitxer_imatge_9=$row1['Image_9'];}

						if ($value==$row1['Image_10']) {
								if (file_exists('../uploads/' . $row1['Image_10'])) {
									if($row1['Image_10']!=null) {
										if (unlink('../uploads/' . $row1['Image_10'])) {	
                                            $fitxer_imatge_10='';										
											$eliminat = true;
										} else {
											$eliminat = false;
										}
									}								
								}								
						}else{$fitxer_imatge_10=$row1['Image_10'];}

						if ($value==$row1['Image_11']) {
								if (file_exists('../uploads/' . $row1['Image_11'])) {
									if($row1['Image_11']!=null) {
										if (unlink('../uploads/' . $row1['Image_11'])) {	
                                            $fitxer_imatge_11='';										
											$eliminat = true;
										} else {
											$eliminat = false;
										}
									}								
								}								
						}else{$fitxer_imatge_11=$row1['Image_11'];}

						if ($value==$row1['Image_12']) {
								if (file_exists('../uploads/' . $row1['Image_12'])) {
									if($row1['Image_12']!=null) {
										if (unlink('../uploads/' . $row1['Image_12'])) {	
                                            $fitxer_imatge_12='';										
											$eliminat = true;
										} else {
											$eliminat = false;
										}
									}								
								}								
						}else{$fitxer_imatge_12=$row1['Image_12'];}

						if ($value==$row1['Image_13']) {
								if (file_exists('../uploads/' . $row1['Image_13'])) {
									if($row1['Image_13']!=null) {
										if (unlink('../uploads/' . $row1['Image_13'])) {	
                                            $fitxer_imatge_13='';										
											$eliminat = true;
										} else {
											$eliminat = false;
										}
									}								
								}								
						}else{$fitxer_imatge_13=$row1['Image_13'];}

						if ($value==$row1['Image_14']) {
								if (file_exists('../uploads/' . $row1['Image_14'])) {
									if($row1['Image_14']!=null) {
										if (unlink('../uploads/' . $row1['Image_14'])) {	
                                            $fitxer_imatge_14='';										
											$eliminat = true;
										} else {
											$eliminat = false;
										}
									}								
								}								
						}else{$fitxer_imatge_14=$row1['Image_14'];}

						if ($value==$row1['Image_15']) {
								if (file_exists('../uploads/' . $row1['Image_15'])) {
									if($row1['Image_15']!=null) {
										if (unlink('../uploads/' . $row1['Image_15'])) {	
                                            $fitxer_imatge_15='';										
											$eliminat = true;
										} else {
											$eliminat = false;
										}
									}								
								}								
						}else{$fitxer_imatge_15=$row1['Image_15'];}

						if ($value==$row1['Image_16']) {
								if (file_exists('../uploads/' . $row1['Image_16'])) {
									if($row1['Image_16']!=null) {
										if (unlink('../uploads/' . $row1['Image_16'])) {	
                                            $fitxer_imatge_16='';										
											$eliminat = true;
										} else {
											$eliminat = false;
										}
									}								
								}								
						}else{$fitxer_imatge_16=$row1['Image_16'];}

						if ($value==$row1['Image_17']) {
								if (file_exists('../uploads/' . $row1['Image_17'])) {
									if($row1['Image_17']!=null) {
										if (unlink('../uploads/' . $row1['Image_17'])) {	
                                            $fitxer_imatge_17='';										
											$eliminat = true;
										} else {
											$eliminat = false;
										}
									}								
								}								
						}else{$fitxer_imatge_17=$row1['Image_17'];}

						if ($value==$row1['Image_18']) {
								if (file_exists('../uploads/' . $row1['Image_18'])) {
									if($row1['Image_18']!=null) {
										if (unlink('../uploads/' . $row1['Image_18'])) {	
                                            $fitxer_imatge_18='';										
											$eliminat = true;
										} else {
											$eliminat = false;
										}
									}								
								}								
						}else{$fitxer_imatge_18=$row1['Image_18'];}

						if ($value==$row1['Image_19']) {
								if (file_exists('../uploads/' . $row1['Image_19'])) {
									if($row1['Image_19']!=null) {
										if (unlink('../uploads/' . $row1['Image_19 '])) {	
                                            $fitxer_imatge_19='';										
											$eliminat = true;
										} else {
											$eliminat = false;
										}
									}								
								}								
						}else{$fitxer_imatge_19=$row1['Image_19'];}

						if ($value==$row1['Image_20']) {
								if (file_exists('../uploads/' . $row1['Image_20'])) {
									if($row1['Image_20']!=null) {
										if (unlink('../uploads/' . $row1['Image_20'])) {	
                                            $fitxer_imatge_20='';										
											$eliminat = true;
										} else {
											$eliminat = false;
										}
									}								
								}								
						}else{$fitxer_imatge_20=$row1['Image_20'];}

						if ($value==$row1['Image_21']) {
								if (file_exists('../uploads/' . $row1['Image_21'])) {
									if($row1['Image_21']!=null) {
										if (unlink('../uploads/' . $row1['Image_21'])) {	
                                            $fitxer_imatge_21='';										
											$eliminat = true;
										} else {
											$eliminat = false;
										}
									}								
								}								
						}else{$fitxer_imatge_21=$row1['Image_21'];}

						if ($value==$row1['Image_22']) {
								if (file_exists('../uploads/' . $row1['Image_22'])) {
									if($row1['Image_22']!=null) {
										if (unlink('../uploads/' . $row1['Image_22'])) {	
                                            $fitxer_imatge_22='';										
											$eliminat = true;
										} else {
											$eliminat = false;
										}
									}								
								}								
						}else{$fitxer_imatge_22=$row1['Image_22'];}

						if ($value==$row1['Image_23']) {
								if (file_exists('../uploads/' . $row1['Image_23'])) {
									if($row1['Image_23']!=null) {
										if (unlink('../uploads/' . $row1['Image_23'])) {	
                                            $fitxer_imatge_23='';										
											$eliminat = true;
										} else {
											$eliminat = false;
										}
									}								
								}								
						}else{$fitxer_imatge_23=$row1['Image_23'];}
						
						if ($value==$row1['Image_24']) {
								if (file_exists('../uploads/' . $row1['Image_24'])) {
									if($row1['Image_24']!=null) {
										if (unlink('../uploads/' . $row1['Image_24'])) {	
                                            $fitxer_imatge_24='';										
											$eliminat = true;
										} else {
											$eliminat = false;
										}
									}								
								}								
						}else{$fitxer_imatge_24=$row1['Image_24'];}	

						if ($value==$row1['Image_25']) {
								if (file_exists('../uploads/' . $row1['Image_25'])) {
									if($row1['Image_25']!=null) {
										if (unlink('../uploads/' . $row1['Image_25'])) {	
                                            $fitxer_imatge_25='';										
											$eliminat = true;
										} else {
											$eliminat = false;
										}
									}								
								}								
						}else{$fitxer_imatge_24=$row1['Image_25'];}							
												
						$stmt2 = $conn->prepare('UPDATE post SET Image_1=:img_1,Image_2=:img_2,Image_3=:img_3,Image_4=:img_4,Image_5=:img_5,Image_6=:img_6,Image_7=:img_7,Image_8=:img_8,Image_9=:img_9,
						Image_10=:img_10,Image_11=:img_11,Image_12=:img_12,Image_13=:img_13,Image_14=:img_14,Image_15=:img_15,Image_16=:img_16,Image_17=:img_17,Image_18=:img_18,Image_19=:img_19,Image_20=:img_20,Image_21=:img_21,Image_22=:img_22,Image_23=:img_23,Image_24=:img_24,Image_25=:img_25 WHERE ID=:id');
						$stmt2->execute(array(':img_1'=>$fitxer_imatge_1,':img_2'=>$fitxer_imatge_2,':img_3'=>$fitxer_imatge_3,':img_4'=>$fitxer_imatge_4,':img_5'=>$fitxer_imatge_5,':img_6'=>$fitxer_imatge_6,':img_7'=>$fitxer_imatge_7,':img_8'=>$fitxer_imatge_8,':img_9'=>$fitxer_imatge_9,':img_10'=>$fitxer_imatge_10,':img_11'=>$fitxer_imatge_11,':img_12'=>$fitxer_imatge_12,':img_13'=>$fitxer_imatge_13,':img_14'=>$fitxer_imatge_14,':img_15'=>$fitxer_imatge_15,':img_16'=>$fitxer_imatge_16,':img_17'=>$fitxer_imatge_17,':img_18'=>$fitxer_imatge_18,':img_19'=>$fitxer_imatge_19,':img_20'=>$fitxer_imatge_20,':img_21'=>$fitxer_imatge_21,':img_22'=>$fitxer_imatge_22,':img_23'=>$fitxer_imatge_23,':img_24'=>$fitxer_imatge_24,':img_25'=>$fitxer_imatge_25, ':id'=>$key));	
						
					}
																															
                    if($row1>0){																		
                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Images deleted succesfull...</p>";
                        print "</div>";
						echo "<meta http-equiv=\"refresh\" content=\"2\">";
                    }
                    else{						
                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Images not deleted succesfull...</p>";
                        print "</div>";
                    }
                }
                else{					
						if (isset($_POST['borrar']) && !empty($_POST['borrar'])) {
							print "<form action=\"\" method=\"post\">";
							print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the selection?</p>";
	 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
							
							$three_image1 = array();
							$three_image2 = array();
							$three_image3 = array();
							
							foreach($_POST['borrar'] as $ID){														
								$extraido=explode(',', $ID);
								$string1 = $extraido[0];
								$string2 = $extraido[1];
								$three_image1[]=$string1;
								$three_image2[]=$string2;  
							}
							
							$three_image3[]=array_combine($three_image2,$three_image1);				

							/////CONVERT MULTIDIMENSIONAL ARRAY TO SINGLE ARRAY

							$three_image4 = array();
							foreach($three_image3 as $key => $value) {
								foreach($value as $value2 => $key2){
									$three_image4[$value2]= $key2;
								}
							}						
										
							foreach($three_image4 as $value => $key){
															
								$stmt3=$conn->prepare('SELECT * FROM post WHERE ID=:idn');
								$stmt3->execute(array(':idn'=>$key));
								$row1=$stmt3->fetch(PDO::FETCH_ASSOC);							
								
								if ($value==$row1['Image_1']) {
									print "<p>Imatge: ".$row1['Image_1']."</p>";
								}	
								if ($value==$row1['Image_2']) {
									print "<p>Imatge: ".$row1['Image_2']."</p>";								
								}	
								if ($value==$row1['Image_3']) {
									print "<p>Imatge: ".$row1['Image_3']."</p>";								
								}		
								if ($value==$row1['Image_4']) {
									print "<p>Image: ".$row1['Image_4']."</p>";								
								}
								if ($value==$row1['Image_5']) {
									print "<p>Image: ".$row1['Image_5']."</p>";								
								}
								if ($value==$row1['Image_6']) {
									print "<p>Image: ".$row1['Image_6']."</p>";								
								}
								if ($value==$row1['Image_7']) {
									print "<p>Image: ".$row1['Image_7']."</p>";								
								}
								if ($value==$row1['Image_8']) {
									print "<p>Image: ".$row1['Image_8']."</p>";								
								}
								if ($value==$row1['Image_9']) {
									print "<p>Image: ".$row1['Image_9']."</p>";								
								}
								if ($value==$row1['Image_10']) {
									print "<p>Image: ".$row1['Image_10']."</p>";								
								}
								if ($value==$row1['Image_11']) {
									print "<p>Image: ".$row1['Image_11']."</p>";								
								}
								if ($value==$row1['Image_12']) {
									print "<p>Image: ".$row1['Image_12']."</p>";								
								}
								if ($value==$row1['Image_13']) {
									print "<p>Image: ".$row1['Image_13']."</p>";								
								}
								if ($value==$row1['Image_14']) {
									print "<p>Image: ".$row1['Image_14']."</p>";								
								}
								if ($value==$row1['Image_15']) {
									print "<p>Image: ".$row1['Image_15']."</p>";								
								}
								if ($value==$row1['Image_16']) {
									print "<p>Image: ".$row1['Image_16']."</p>";								
								}
								if ($value==$row1['Image_17']) {
									print "<p>Image: ".$row1['Image_17']."</p>";								
								}
								if ($value==$row1['Image_18']) {
									print "<p>Image: ".$row1['Image_18']."</p>";								
								}
								if ($value==$row1['Image_19']) {
									print "<p>Image: ".$row1['Image_19']."</p>";								
								}
								if ($value==$row1['Image_20']) {
									print "<p>Image: ".$row1['Image_20']."</p>";								
								}
								if ($value==$row1['Image_21']) {
									print "<p>Image: ".$row1['Image_21']."</p>";								
								}
								if ($value==$row1['Image_22']) {
									print "<p>Image: ".$row1['Image_22']."</p>";								
								}
								if ($value==$row1['Image_23']) {
									print "<p>Image: ".$row1['Image_23']."</p>";								
								}
								if ($value==$row1['Image_24']) {
									print "<p>Image: ".$row1['Image_24']."</p>";								
								}
								if ($value==$row1['Image_25']) {
									print "<p>Image: ".$row1['Image_25']."</p>";								
								}	
							}
																		
						print "<p><button type=\"submit\" name=\"borras\" value=\"borras\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
						print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
						print "<input type=\"hidden\" name=\"dels\" value=\"dels\">";
						
						/////////ARRAY EVERY CHECK TO BORRAR AND GO THROUGH ARRAY DELREGS				
						
						foreach($_POST['borrar'] as $value){
							print "<input type=\"hidden\" name=\"delregs[]\" value='$value'>";
						}
						print "</div>";
						print "</form>";
						}
                    }
            }
			
/////////////////////////////////////////////eliminacio checkbox imatges sense noticia dintre del folder/////////////////////
            if(isset($_POST['dels']) && !empty($_POST['dels'])) {
                if(isset($_POST['borras2']) && !empty($_POST['borras2'])) {
					$eliminat=false;
                    foreach($_POST['delregs'] as $ID) {											
                        if (file_exists('../uploads/' . $ID)) {
                            if($ID!=null) {
                                if (unlink('../uploads/' . $ID)) {									
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }								
                        }
                    }									
                    if($ID!=null){	
                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Images deleted succesfull...</p>";
                        print "</div>";
						echo "<meta http-equiv=\"refresh\" content=\"2\">";
                    }
                    else{
                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Images not deleted succesfull...</p>";
                        print "</div>";
                    }
                }				
                else{
                    if (isset($_POST['borrar2']) && !empty($_POST['borrar2'])) {
                    	print "<form action=\"\" method=\"post\">";
                        print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the selection?</p>";

							foreach($_POST['borrar2'] as $ID){
								print "<p>Imatge: ".$ID."</p>";	
							}
						
						print "<p><button type=\"submit\" name=\"borras2\" value=\"borras2\" class=\"btn btn-outline btn-default \"><i class=\"fa fa-check\"></i> Delete</button>";
						print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default \" onclick=\"location.href='?sec=images_llist'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
						print "<input type=\"hidden\" name=\"dels\" value=\"dels\">";
						
							foreach($_POST['borrar2'] as $key){
								print "<input type=\"hidden\" name=\"delregs[]\" value=\"".$key."\">";
							}
						print "</div>";
						print "</form>";
						}
					}						
			}			
							////////////////////////////MOFIFICACIO DEL NOM DE LA IMATGE AMB NOTICIA////////////////////////
							print "<form method=\"POST\">";	
								if(isset($_POST['mod']) && !empty($_POST['mod'])){
									if(isset($_POST['modif']) && !empty($_POST['modif'])) {
                                        if(isset($_POST['canvi']) && !empty($_POST['canvi'])){											
																					
											$archivo = $_POST['mod'];
											
											$extraido = explode(',', $_POST['mod']);
											$string1 = $extraido[0];
											$string2 = $extraido[1];
																				
											$stmt = $conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id' => $string1));
											$row = $stmt->fetch(PDO::FETCH_ASSOC);											
											
											$extension = pathinfo($archivo, PATHINFO_EXTENSION);
											$nombre_base = basename($archivo, '.'.$extension);  

											if ($string2==$row['Image_1']) {
												$fitxer_imatge = "IMG_1_" . $string1 . "_" . $_POST['canvi'].".".$extension;	
											}	
											if ($string2==$row['Image_2']) {
												$fitxer_imatge = "IMG_2_" . $string1 . "_" . $_POST['canvi'].".".$extension;		
											}	
											if ($string2==$row['Image_3']) {
												$fitxer_imatge = "IMG_3_" . $string1 . "_" . $_POST['canvi'].".".$extension;		
											}				
											if ($string2==$row['Image_4']) {
												$fitxer_imatge = "IMG_4_" . $string1 . "_" . $_POST['canvi'].".".$extension;		
											}	
											if ($string2==$row['Image_5']) {
												$fitxer_imatge = "IMG_5_" . $string1 . "_" . $_POST['canvi'].".".$extension;		
											}	
											if ($string2==$row['Image_6']) {
												$fitxer_imatge = "IMG_6_" . $string1 . "_" . $_POST['canvi'].".".$extension;		
											}	
											if ($string2==$row['Image_7']) {
												$fitxer_imatge = "IMG_7_" . $string1 . "_" . $_POST['canvi'].".".$extension;		
											}	
											if ($string2==$row['Image_8']) {
												$fitxer_imatge = "IMG_8_" . $string1 . "_" . $_POST['canvi'].".".$extension;		
											}	
											if ($string2==$row['Image_9']) {
												$fitxer_imatge = "IMG_9_" . $string1 . "_" . $_POST['canvi'].".".$extension;		
											}	
											if ($string2==$row['Image_10']) {
												$fitxer_imatge = "IMG_10_" . $string1 . "_" . $_POST['canvi'].".".$extension;		
											}	
											if ($string2==$row['Image_11']) {
												$fitxer_imatge = "IMG_11_" . $string1 . "_" . $_POST['canvi'].".".$extension;		
											}	
											if ($string2==$row['Image_12']) {
												$fitxer_imatge = "IMG_12_" . $string1 . "_" . $_POST['canvi'].".".$extension;		
											}	
											if ($string2==$row['Image_13']) {
												$fitxer_imatge = "IMG_13_" . $string1 . "_" . $_POST['canvi'].".".$extension;		
											}	
											if ($string2==$row['Image_14']) {
												$fitxer_imatge = "IMG_14_" . $string1 . "_" . $_POST['canvi'].".".$extension;		
											}	
											if ($string2==$row['Image_15']) {
												$fitxer_imatge = "IMG_15_" . $string1 . "_" . $_POST['canvi'].".".$extension;		
											}	
											if ($string2==$row['Image_16']) {
												$fitxer_imatge = "IMG_16_" . $string1 . "_" . $_POST['canvi'].".".$extension;		
											}	
											if ($string2==$row['Image_17']) {
												$fitxer_imatge = "IMG_17_" . $string1 . "_" . $_POST['canvi'].".".$extension;		
											}	
											if ($string2==$row['Image_18']) {
												$fitxer_imatge = "IMG_18_" . $string1 . "_" . $_POST['canvi'].".".$extension;		
											}	
											if ($string2==$row['Image_19']) {
												$fitxer_imatge = "IMG_19_" . $string1 . "_" . $_POST['canvi'].".".$extension;		
											}	
											if ($string2==$row['Image_20']) {
												$fitxer_imatge = "IMG_20_" . $string1 . "_" . $_POST['canvi'].".".$extension;		
											}	
											if ($string2==$row['Image_21']) {
												$fitxer_imatge = "IMG_21_" . $string1 . "_" . $_POST['canvi'].".".$extension;		
											}	
											if ($string2==$row['Image_22']) {
												$fitxer_imatge = "IMG_22_" . $string1 . "_" . $_POST['canvi'].".".$extension;		
											}	
											if ($string2==$row['Image_23']) {
												$fitxer_imatge = "IMG_23_" . $string1 . "_" . $_POST['canvi'].".".$extension;		
											}	
											if ($string2==$row['Image_24']) {
												$fitxer_imatge = "IMG_24_" . $string1 . "_" . $_POST['canvi'].".".$extension;		
											}	
											if ($string2==$row['Image_25']) {
												$fitxer_imatge = "IMG_25_" . $string1 . "_" . $_POST['canvi'].".".$extension;		
											}
											
											//$fitxer_imatge = "IMG_" . $extraido . "_" . $_POST['canvi'].".".$extension;	
											
											$rename1 = "../uploads/$string2"; 
											$rename2 = "../uploads/$fitxer_imatge"; 
											
											if(file_exists($rename1)){
												/* Original rename images */
												rename($rename1, $rename2);
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Renamed succesfull!&nbsp$string2 &nbsp to &nbsp $fitxer_imatge</p>";
												print "</div>";
                                                //echo "<meta http-equiv=\"refresh\" content=\"2\">";												
											}else{
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
												print "</div>";
                                                //echo "<meta http-equiv=\"refresh\" content=\"2\">";												
											}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////										
											$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
											$stmt->execute(array(':id'=>$string1));
											$row=$stmt->fetch(PDO::FETCH_ASSOC);
											
											if ($string2==$row['Image_1']) {
												$stmt5 = $conn->prepare('UPDATE post SET Image_1=:img_1 WHERE ID=:id');
												$stmt5->execute(array(':img_1'=>$fitxer_imatge,':id'=>$string1));	
											}	
											if ($string2==$row['Image_2']) {
												$stmt5 = $conn->prepare('UPDATE post SET Image_2=:img_2 WHERE ID=:id');
												$stmt5->execute(array(':img_2'=>$fitxer_imatge,':id'=>$string1));		
											}	
											if ($string2==$row['Image_3']) {
												$stmt5 = $conn->prepare('UPDATE post SET Image_3=:img_3 WHERE ID=:id');
												$stmt5->execute(array(':img_3'=>$fitxer_imatge,':id'=>$string1));	
											}		
											if ($string2==$row['Image_4']) {
												$stmt5 = $conn->prepare('UPDATE post SET Image_4=:img_4 WHERE ID=:id');
												$stmt5->execute(array(':img_4'=>$fitxer_imatge,':id'=>$string1));	
											}
											if ($string2==$row['Image_5']) {
												$stmt5 = $conn->prepare('UPDATE post SET Image_5=:img_5 WHERE ID=:id');
												$stmt5->execute(array(':img_5'=>$fitxer_imatge,':id'=>$string1));	
											}
											if ($string2==$row['Image_6']) {
												$stmt5 = $conn->prepare('UPDATE post SET Image_6=:img_6 WHERE ID=:id');
												$stmt5->execute(array(':img_6'=>$fitxer_imatge,':id'=>$string1));	
											}
											if ($string2==$row['Image_7']) {
												$stmt5 = $conn->prepare('UPDATE post SET Image_7=:img_7 WHERE ID=:id');
												$stmt5->execute(array(':img_7'=>$fitxer_imatge,':id'=>$string1));	
											}
											if ($string2==$row['Image_8']) {
												$stmt5 = $conn->prepare('UPDATE post SET Image_8=:img_8 WHERE ID=:id');
												$stmt5->execute(array(':img_8'=>$fitxer_imatge,':id'=>$string1));	
											}
											if ($string2==$row['Image_9']) {
												$stmt5 = $conn->prepare('UPDATE post SET Image_9=:img_9 WHERE ID=:id');
												$stmt5->execute(array(':img_9'=>$fitxer_imatge,':id'=>$string1));	
											}
											if ($string2==$row['Image_10']) {
												$stmt5 = $conn->prepare('UPDATE post SET Image_10=:img_10 WHERE ID=:id');
												$stmt5->execute(array(':img_10'=>$fitxer_imatge,':id'=>$string1));	
											}
											if ($string2==$row['Image_11']) {
												$stmt5 = $conn->prepare('UPDATE post SET Image_11=:img_11 WHERE ID=:id');
												$stmt5->execute(array(':img_11'=>$fitxer_imatge,':id'=>$string1));	
											}
											if ($string2==$row['Image_12']) {
												$stmt5 = $conn->prepare('UPDATE post SET Image_12=:img_3 WHERE ID=:id');
												$stmt5->execute(array(':img_12'=>$fitxer_imatge,':id'=>$string1));	
											}
											if ($string2==$row['Image_13']) {
												$stmt5 = $conn->prepare('UPDATE post SET Image_13=:img_13 WHERE ID=:id');
												$stmt5->execute(array(':img_13'=>$fitxer_imatge,':id'=>$string1));	
											}
											if ($string2==$row['Image_14']) {
												$stmt5 = $conn->prepare('UPDATE post SET Image_14=:img_14 WHERE ID=:id');
												$stmt5->execute(array(':img_14'=>$fitxer_imatge,':id'=>$string1));	
											}
											if ($string2==$row['Image_15']) {
												$stmt5 = $conn->prepare('UPDATE post SET Image_15=:img_3 WHERE ID=:id');
												$stmt5->execute(array(':img_15'=>$fitxer_imatge,':id'=>$string1));	
											}
											if ($string2==$row['Image_16']) {
												$stmt5 = $conn->prepare('UPDATE post SET Image_16=:img_3 WHERE ID=:id');
												$stmt5->execute(array(':img_16'=>$fitxer_imatge,':id'=>$string1));	
											}
											if ($string2==$row['Image_17']) {
												$stmt5 = $conn->prepare('UPDATE post SET Image_17:img_17 WHERE ID=:id');
												$stmt5->execute(array(':img_17'=>$fitxer_imatge,':id'=>$string1));	
											}
											if ($string2==$row['Image_18']) {
												$stmt5 = $conn->prepare('UPDATE post SET Image_18=:img_18 WHERE ID=:id');
												$stmt5->execute(array(':img_18'=>$fitxer_imatge,':id'=>$string1));	
											}
											if ($string2==$row['Image_19']) {
												$stmt5 = $conn->prepare('UPDATE post SET Image_19=:img_19 WHERE ID=:id');
												$stmt5->execute(array(':img_19'=>$fitxer_imatge,':id'=>$string1));	
											}
											if ($string2==$row['Image_20']) {
												$stmt5 = $conn->prepare('UPDATE post SET Image_20=:img_20 WHERE ID=:id');
												$stmt5->execute(array(':img_20'=>$fitxer_imatge,':id'=>$string1));	
											}
											if ($string2==$row['Image_21']) {
												$stmt5 = $conn->prepare('UPDATE post SET Image_21=:img_21 WHERE ID=:id');
												$stmt5->execute(array(':img_21'=>$fitxer_imatge,':id'=>$string1));	
											}
											if ($string2==$row['Image_22']) {
												$stmt5 = $conn->prepare('UPDATE post SET Image_22=:img_22 WHERE ID=:id');
												$stmt5->execute(array(':img_22'=>$fitxer_imatge,':id'=>$string1));	
											}
											if ($string2==$row['Image_23']) {
												$stmt5 = $conn->prepare('UPDATE post SET Image_23=:img_23 WHERE ID=:id');
												$stmt5->execute(array(':img_23'=>$fitxer_imatge,':id'=>$string1));	
											}
											if ($string2==$row['Image_24']) {
												$stmt5 = $conn->prepare('UPDATE post SET Image_24=:img_24 WHERE ID=:id');
												$stmt5->execute(array(':img_24'=>$fitxer_imatge,':id'=>$string1));	
											}
											if ($string2==$row['Image_25']) {
												$stmt5 = $conn->prepare('UPDATE post SET Image_25=:img_25 WHERE ID=:id');
												$stmt5->execute(array(':img_25'=>$fitxer_imatge,':id'=>$string1));	
											}

										}else{																																
										print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" 
										data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image name already exists...</p></div>";										
									    }
									}
									else {										
										$extraido = explode(',', $_POST['mod']);
										$string1 = $extraido[0];
										$string2 = $extraido[1];
																			
										$stmt = $conn->prepare('SELECT * FROM post WHERE ID=:id');
										$stmt->execute(array(':id' => $string1));
										$row = $stmt->fetch(PDO::FETCH_ASSOC);
										
                                        if ($string2==$row['Image_1']) {
										    $archivo = $row['Image_1'];	
                                        }	
                                        if ($string2==$row['Image_2']) {
										    $archivo = $row['Image_2'];	
                                        }	
                                        if ($string2==$row['Image_3']) {
										    $archivo = $row['Image_3'];	
                                        }	
                                        if ($string2==$row['Image_4']) {
										    $archivo = $row['Image_4'];	
                                        }
                                        if ($string2==$row['Image_5']) {
										    $archivo = $row['Image_5'];	
                                        }
                                        if ($string2==$row['Image_6']) {
										    $archivo = $row['Image_6'];	
                                        }
                                        if ($string2==$row['Image_7']) {
										    $archivo = $row['Image_7'];	
                                        }
                                        if ($string2==$row['Image_8']) {
										    $archivo = $row['Image_8'];	
                                        }
                                        if ($string2==$row['Image_9']) {
										    $archivo = $row['Image_9'];	
                                        }
                                        if ($string2==$row['Image_10']) {
										    $archivo = $row['Image_10'];	
                                        }
                                        if ($string2==$row['Image_11']) {
										    $archivo = $row['Image_11'];	
                                        }
                                        if ($string2==$row['Image_12']) {
										    $archivo = $row['Image_12'];	
                                        }
                                        if ($string2==$row['Image_13']) {
										    $archivo = $row['Image_13'];	
                                        }
                                        if ($string2==$row['Image_14']) {
										    $archivo = $row['Image_14'];	
                                        }
                                        if ($string2==$row['Image_15']) {
										    $archivo = $row['Image_15'];	
                                        }
                                        if ($string2==$row['Image_16']) {
										    $archivo = $row['Image_16'];	
                                        }
                                        if ($string2==$row['Image_17']) {
										    $archivo = $row['Image_17'];	
                                        }
                                        if ($string2==$row['Image_18']) {
										    $archivo = $row['Image_18'];	
                                        }
                                        if ($string2==$row['Image_19']) {
										    $archivo = $row['Image_19'];	
                                        }
                                        if ($string2==$row['Image_20']) {
										    $archivo = $row['Image_20'];	
                                        }
                                        if ($string2==$row['Image_21']) {
										    $archivo = $row['Image_21'];	
                                        }
                                        if ($string2==$row['Image_22']) {
										    $archivo = $row['Image_22'];	
                                        }
                                        if ($string2==$row['Image_23']) {
										    $archivo = $row['Image_23'];	
                                        }
                                        if ($string2==$row['Image_24']) {
										    $archivo = $row['Image_24'];	
                                        }	
                                        if ($string2==$row['Image_25']) {
										    $archivo = $row['Image_25'];	
                                        }										

										$extension = pathinfo($archivo, PATHINFO_EXTENSION);
										$nombre_base = basename($archivo, '.'.$extension);  										
																			
										$newname = $nombre_base; 
										$extraido = explode("_",$newname,5);
										$extraido = $extraido[3];										
										$imagenewname = "$extraido";											

										print "<div class=\"row\">";
										print "<div class=\"col-lg-12\">";
										print "<div class=\"panel panel-default\">";
										print "<div class=\"panel-heading\">Change File Name</div>";
										print "<div class=\"panel-body\">";
										print "<div class=\"row\">";
										print "<div class=\"col-lg-12\">";
										print "<form action=\"\" method=\"post\" enctype=\"multipart/form-data\">";
										
										print "<div class=\"form-group\">";
										print "<label>Current Name</label>";
																				
										print "<display type=\"text\" class=\"form-control\"> $archivo";
										print "</div>";
										
										print "<div class=\"form-group\">";
										print "<label>New Name</label>";
																				
										print "<input type=\"text\" name=\"canvi\" value=\"$imagenewname\" class=\"form-control\" placeholder=\"Enter new image name\">";
										print "</div>";
											
										print "<button type=\"submit\" name=\"modif\" value=\"modif\" class=\"btn btn-default  btn-outline btn-circle btn-lg\"><i class=\"fa fa-check\"></i></button>";										
										print "<button type=\"reset\" name=\"cancel\" value=\"cancel\" onclick=\"location.href='?sec=images_llist'\" class=\"btn btn-default  btn-outline btn-circle btn-lg\"><i class=\"fa fa-times\"></i></button>";					
															
										print "<input type=\"hidden\" name=\"mod\" value=\"$string1,$string2\">";
										print "</form>";
										print "</div>";
										print "</div>";
										print "</div>";
										print "</div>";
										print "</div>";
										print "</div>";					
									}
								} 
								print "</form>";		
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////			
								?>	
								
								
								
								
								
								
								
						
                                <form action="" method="post">
                                <table class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th></th>
										<th>ID</th>
                                        <th>Images Name</th>
										<th>Active</th>
                                        <th>Options</th>
                                    </tr>
                                    </thead>
                                    <tbody>							
																											
									<?php //CONSULTA DE SELECCIO DELS REGISTRES DE LA BASE DE DADES
									
									      ////////////Imatges amb noticies dins folder///////////////////
										  
									$items_stored = array();
									$items_folder = array();
																		
                                    $stmt=$conn->prepare('SELECT * FROM post ORDER BY Data Desc');
                                    $stmt->execute();
                                    while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){										
                                        $stmt2=$conn->prepare('SELECT Image_1,Image_2,Image_3,Image_4,Image_5,Image_6,Image_7,Image_8,Image_9,Image_10,Image_11,Image_12,Image_13,Image_14,Image_15,Image_16,Image_17,Image_18,Image_19,Image_20,Image_21,Image_22,Image_23,Image_24,Image_25 FROM post WHERE Image_1=:img_1,Image_2=:img_2,Image_3=:img_3,Image_4=:img_4,Image_5=:img_5,Image_6=:img_6,Image_7=:img_7,Image_8=:img_8,Image_9=:img_9,Image_10=:img_10,Image_11=:img_11,Image_12=:img_12,Image_13=:img_13,Image_14=:img_14,Image_15=:img_15,Image_16=:img_16,Image_17=:img_17,Image_18=:img_18,Image_19=:img_19,Image_20=:img_20,Image_21=:img_21,Image_22=:img_22,Image_23=:img_23,Image_24=:img_24,Image_25=:img_25');
                                        ///IMG_1
										if($row['Image_1']!=""){	
										
										        $items_stored[] = $row['Image_1'];
																
                                                print "<td><input type='checkbox' name='borrar[]' value='$row[ID],$row[Image_1]'></td>";	
												print "<td>$row[ID]</td>";
												print "<td>$row[Image_1]</td>";	
												
                                                if (file_exists('../uploads/' . $row['Image_1'])) { 
												
												print "<td>Active</td>";
												}
												else{
												print "<td>Not Active</td>";
												}
												print "<td><button type=\"submit\" name=\"ver_1\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>
												<button type=\"submit\" name=\"mod\" value=\"$row[ID],$row[Image_1]\" class=\"btn btn-default  btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>												
												<button type=\"submit\" name=\"del_1\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
												print "</tr>";												
												
										}
	                                    ///IMG_2
										if($row['Image_2']!=""){	
										
										        $items_stored[] = $row['Image_2'];
										
												print "<tr>";
                                                print "<td><input type='checkbox' name='borrar[]' value='$row[ID],$row[Image_2]'></td>";	
												print "<td>$row[ID]</td>";
												print "<td>$row[Image_2]</td>";	
												
                                                if (file_exists('../uploads/' . $row['Image_2'])) { 
												
												print "<td>Active</td>";
												}
												else{
												print "<td>Not Active</td>";
												}	
												print "<td><button type=\"submit\" name=\"ver_2\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>
												<button type=\"submit\" name=\"mod\" value=\"$row[ID],$row[Image_2]\" class=\"btn btn-default  btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>												
												<button type=\"submit\" name=\"del_2\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
												print "</tr>";												
												
										}
                                        ///IMG_3	
										if($row['Image_3']!=""){	
										
										        $items_stored[] = $row['Image_3'];
										
												print "<tr>";
                                                print "<td><input type='checkbox' name='borrar[]' value='$row[ID],$row[Image_3]'></td>";	
												print "<td>$row[ID]</td>";
												print "<td>$row[Image_3]</td>";	
												
                                                if (file_exists('../uploads/' . $row['Image_3'])) { 
												
												print "<td>Active</td>";
												}
												else{
												print "<td>Not Active</td>";
												}	
												print "<td><button type=\"submit\" name=\"ver_3\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>
												<button type=\"submit\" name=\"mod\" value=\"$row[ID],$row[Image_3]\" class=\"btn btn-default  btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>												
												<button type=\"submit\" name=\"del_3\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
												print "</tr>";												
										}	
                                        ///IMG_4	
										if($row['Image_4']!=""){	
										
										        $items_stored[] = $row['Image_4'];
										
												print "<tr>";
                                                print "<td><input type='checkbox' name='borrar[]' value='$row[ID],$row[Image_4]'></td>";	
												print "<td>$row[ID]</td>";
												print "<td>$row[Image_4]</td>";	
												
                                                if (file_exists('../uploads/' . $row['Image_4'])) { 
												
												print "<td>Active</td>";
												}
												else{
												print "<td>Not Active</td>";
												}	
												print "<td><button type=\"submit\" name=\"ver_4\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>
												<button type=\"submit\" name=\"mod\" value=\"$row[ID],$row[Image_4]\" class=\"btn btn-default  btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>												
												<button type=\"submit\" name=\"del_4\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
												print "</tr>";												
										}
                                        ///IMG_5	
										if($row['Image_5']!=""){	
										
										        $items_stored[] = $row['Image_5'];
										
												print "<tr>";
                                                print "<td><input type='checkbox' name='borrar[]' value='$row[ID],$row[Image_5]'></td>";	
												print "<td>$row[ID]</td>";
												print "<td>$row[Image_5]</td>";	
												
                                                if (file_exists('../uploads/' . $row['Image_5'])) { 
												
												print "<td>Active</td>";
												}
												else{
												print "<td>Not Active</td>";
												}	
												print "<td><button type=\"submit\" name=\"ver_5\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>
												<button type=\"submit\" name=\"mod\" value=\"$row[ID],$row[Image_5]\" class=\"btn btn-default  btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>												
												<button type=\"submit\" name=\"del_5\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
												print "</tr>";												
										}
                                        ///IMG_6
										if($row['Image_6']!=""){	
										
										        $items_stored[] = $row['Image_6'];
										
												print "<tr>";
                                                print "<td><input type='checkbox' name='borrar[]' value='$row[ID],$row[Image_6]'></td>";	
												print "<td>$row[ID]</td>";
												print "<td>$row[Image_6]</td>";	
												
                                                if (file_exists('../uploads/' . $row['Image_6'])) { 
												
												print "<td>Active</td>";
												}
												else{
												print "<td>Not Active</td>";
												}	
												print "<td><button type=\"submit\" name=\"ver_6\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>
												<button type=\"submit\" name=\"mod\" value=\"$row[ID],$row[Image_6]\" class=\"btn btn-default  btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>												
												<button type=\"submit\" name=\"del_6\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
												print "</tr>";												
										}
                                        ///IMG_7	
										if($row['Image_7']!=""){	
										
										        $items_stored[] = $row['Image_7'];
										
												print "<tr>";
                                                print "<td><input type='checkbox' name='borrar[]' value='$row[ID],$row[Image_7]'></td>";	
												print "<td>$row[ID]</td>";
												print "<td>$row[Image_7]</td>";	
												
                                                if (file_exists('../uploads/' . $row['Image_7'])) { 
												
												print "<td>Active</td>";
												}
												else{
												print "<td>Not Active</td>";
												}	
												print "<td><button type=\"submit\" name=\"ver_7\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>
												<button type=\"submit\" name=\"mod\" value=\"$row[ID],$row[Image_7]\" class=\"btn btn-default  btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>												
												<button type=\"submit\" name=\"del_7\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
												print "</tr>";												
										}
                                        ///IMG_8
										if($row['Image_8']!=""){	
										
										        $items_stored[] = $row['Image_8'];
										
												print "<tr>";
                                                print "<td><input type='checkbox' name='borrar[]' value='$row[ID],$row[Image_8]'></td>";	
												print "<td>$row[ID]</td>";
												print "<td>$row[Image_8]</td>";	
												
                                                if (file_exists('../uploads/' . $row['Image_8'])) { 
												
												print "<td>Active</td>";
												}
												else{
												print "<td>Not Active</td>";
												}	
												print "<td><button type=\"submit\" name=\"ver_8\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>
												<button type=\"submit\" name=\"mod\" value=\"$row[ID],$row[Image_8]\" class=\"btn btn-default  btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>												
												<button type=\"submit\" name=\"del_8\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
												print "</tr>";												
										}
                                        ///IMG_9	
										if($row['Image_9']!=""){	
										
										        $items_stored[] = $row['Image_9'];
										
												print "<tr>";
                                                print "<td><input type='checkbox' name='borrar[]' value='$row[ID],$row[Image_9]'></td>";	
												print "<td>$row[ID]</td>";
												print "<td>$row[Image_9]</td>";	
												
                                                if (file_exists('../uploads/' . $row['Image_9'])) { 
												
												print "<td>Active</td>";
												}
												else{
												print "<td>Not Active</td>";
												}	
												print "<td><button type=\"submit\" name=\"ver_9\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>
												<button type=\"submit\" name=\"mod\" value=\"$row[ID],$row[Image_9]\" class=\"btn btn-default  btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>												
												<button type=\"submit\" name=\"del_9\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
												print "</tr>";												
										}
                                        ///IMG_10
										if($row['Image_10']!=""){	
										
										        $items_stored[] = $row['Image_10'];
										
												print "<tr>";
                                                print "<td><input type='checkbox' name='borrar[]' value='$row[ID],$row[Image_10]'></td>";	
												print "<td>$row[ID]</td>";
												print "<td>$row[Image_10]</td>";	
												
                                                if (file_exists('../uploads/' . $row['Image_10'])) { 
												
												print "<td>Active</td>";
												}
												else{
												print "<td>Not Active</td>";
												}	
												print "<td><button type=\"submit\" name=\"ver_10\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>
												<button type=\"submit\" name=\"mod\" value=\"$row[ID],$row[Image_10]\" class=\"btn btn-default  btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>												
												<button type=\"submit\" name=\"del_10\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
												print "</tr>";												
										}
                                        ///IMG_11
										if($row['Image_11']!=""){	
										
										        $items_stored[] = $row['Image_11'];
										
												print "<tr>";
                                                print "<td><input type='checkbox' name='borrar[]' value='$row[ID],$row[Image_11]'></td>";	
												print "<td>$row[ID]</td>";
												print "<td>$row[Image_11]</td>";	
												
                                                if (file_exists('../uploads/' . $row['Image_11'])) { 
												
												print "<td>Active</td>";
												}
												else{
												print "<td>Not Active</td>";
												}	
												print "<td><button type=\"submit\" name=\"ver_11\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>
												<button type=\"submit\" name=\"mod\" value=\"$row[ID],$row[Image_11]\" class=\"btn btn-default  btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>												
												<button type=\"submit\" name=\"del_11\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
												print "</tr>";												
										}
                                        ///IMG_12
										if($row['Image_12']!=""){	
										
										        $items_stored[] = $row['Image_12'];
										
												print "<tr>";
                                                print "<td><input type='checkbox' name='borrar[]' value='$row[ID],$row[Image_12]'></td>";	
												print "<td>$row[ID]</td>";
												print "<td>$row[Image_12]</td>";	
												
                                                if (file_exists('../uploads/' . $row['Image_12'])) { 
												
												print "<td>Active</td>";
												}
												else{
												print "<td>Not Active</td>";
												}	
												print "<td><button type=\"submit\" name=\"ver_12\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>
												<button type=\"submit\" name=\"mod\" value=\"$row[ID],$row[Image_12]\" class=\"btn btn-default  btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>												
												<button type=\"submit\" name=\"del_12\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
												print "</tr>";												
										}
                                        ///IMG_13	
										if($row['Image_13']!=""){	
										
										        $items_stored[] = $row['Image_13'];
										
												print "<tr>";
                                                print "<td><input type='checkbox' name='borrar[]' value='$row[ID],$row[Image_13]'></td>";	
												print "<td>$row[ID]</td>";
												print "<td>$row[Image_13]</td>";	
												
                                                if (file_exists('../uploads/' . $row['Image_13'])) { 
												
												print "<td>Active</td>";
												}
												else{
												print "<td>Not Active</td>";
												}	
												print "<td><button type=\"submit\" name=\"ver_13\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>
												<button type=\"submit\" name=\"mod\" value=\"$row[ID],$row[Image_13]\" class=\"btn btn-default  btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>												
												<button type=\"submit\" name=\"del_13\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
												print "</tr>";												
										}
                                        ///IMG_14	
										if($row['Image_14']!=""){	
										
										        $items_stored[] = $row['Image_14'];
										
												print "<tr>";
                                                print "<td><input type='checkbox' name='borrar[]' value='$row[ID],$row[Image_14]'></td>";	
												print "<td>$row[ID]</td>";
												print "<td>$row[Image_14]</td>";	
												
                                                if (file_exists('../uploads/' . $row['Image_14'])) { 
												
												print "<td>Active</td>";
												}
												else{
												print "<td>Not Active</td>";
												}	
												print "<td><button type=\"submit\" name=\"ver_14\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>
												<button type=\"submit\" name=\"mod\" value=\"$row[ID],$row[Image_14]\" class=\"btn btn-default  btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>												
												<button type=\"submit\" name=\"del_14\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
												print "</tr>";												
										}
                                        ///IMG_15
										if($row['Image_15']!=""){	
										
										        $items_stored[] = $row['Image_15'];
										
												print "<tr>";
                                                print "<td><input type='checkbox' name='borrar[]' value='$row[ID],$row[Image_15]'></td>";	
												print "<td>$row[ID]</td>";
												print "<td>$row[Image_15]</td>";	
												
                                                if (file_exists('../uploads/' . $row['Image_15'])) { 
												
												print "<td>Active</td>";
												}
												else{
												print "<td>Not Active</td>";
												}	
												print "<td><button type=\"submit\" name=\"ver_15\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>
												<button type=\"submit\" name=\"mod\" value=\"$row[ID],$row[Image_15]\" class=\"btn btn-default  btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>												
												<button type=\"submit\" name=\"del_15\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
												print "</tr>";												
										}
                                        ///IMG_16	
										if($row['Image_16']!=""){	
										
										        $items_stored[] = $row['Image_16'];
										
												print "<tr>";
                                                print "<td><input type='checkbox' name='borrar[]' value='$row[ID],$row[Image_16]'></td>";	
												print "<td>$row[ID]</td>";
												print "<td>$row[Image_16]</td>";	
												
                                                if (file_exists('../uploads/' . $row['Image_16'])) { 
												
												print "<td>Active</td>";
												}
												else{
												print "<td>Not Active</td>";
												}	
												print "<td><button type=\"submit\" name=\"ver_16\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>
												<button type=\"submit\" name=\"mod\" value=\"$row[ID],$row[Image_16]\" class=\"btn btn-default  btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>												
												<button type=\"submit\" name=\"del_16\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
												print "</tr>";												
										}
                                        ///IMG_17	
										if($row['Image_17']!=""){	
										
										        $items_stored[] = $row['Image_17'];
										
												print "<tr>";
                                                print "<td><input type='checkbox' name='borrar[]' value='$row[ID],$row[Image_17]'></td>";	
												print "<td>$row[ID]</td>";
												print "<td>$row[Image_17]</td>";	
												
                                                if (file_exists('../uploads/' . $row['Image_17'])) { 
												
												print "<td>Active</td>";
												}
												else{
												print "<td>Not Active</td>";
												}	
												print "<td><button type=\"submit\" name=\"ver_17\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>
												<button type=\"submit\" name=\"mod\" value=\"$row[ID],$row[Image_17]\" class=\"btn btn-default  btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>												
												<button type=\"submit\" name=\"del_17\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
												print "</tr>";												
										}
                                        ///IMG_18	
										if($row['Image_18']!=""){	
										
										        $items_stored[] = $row['Image_18'];
										
												print "<tr>";
                                                print "<td><input type='checkbox' name='borrar[]' value='$row[ID],$row[Image_18]'></td>";	
												print "<td>$row[ID]</td>";
												print "<td>$row[Image_18]</td>";	
												
                                                if (file_exists('../uploads/' . $row['Image_18'])) { 
												
												print "<td>Active</td>";
												}
												else{
												print "<td>Not Active</td>";
												}	
												print "<td><button type=\"submit\" name=\"ver_18\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>
												<button type=\"submit\" name=\"mod\" value=\"$row[ID],$row[Image_18]\" class=\"btn btn-default  btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>												
												<button type=\"submit\" name=\"del_18\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
												print "</tr>";												
										}
                                        ///IMG_19	
										if($row['Image_19']!=""){	
										
										        $items_stored[] = $row['Image_19'];
										
												print "<tr>";
                                                print "<td><input type='checkbox' name='borrar[]' value='$row[ID],$row[Image_19]'></td>";	
												print "<td>$row[ID]</td>";
												print "<td>$row[Image_19]</td>";	
												
                                                if (file_exists('../uploads/' . $row['Image_19'])) { 
												
												print "<td>Active</td>";
												}
												else{
												print "<td>Not Active</td>";
												}	
												print "<td><button type=\"submit\" name=\"ver_19\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>
												<button type=\"submit\" name=\"mod\" value=\"$row[ID],$row[Image_19]\" class=\"btn btn-default  btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>												
												<button type=\"submit\" name=\"del_19\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
												print "</tr>";												
										}
                                        ///IMG_20	
										if($row['Image_20']!=""){	
										
										        $items_stored[] = $row['Image_20'];
										
												print "<tr>";
                                                print "<td><input type='checkbox' name='borrar[]' value='$row[ID],$row[Image_20]'></td>";	
												print "<td>$row[ID]</td>";
												print "<td>$row[Image_20]</td>";	
												
                                                if (file_exists('../uploads/' . $row['Image_20'])) { 
												
												print "<td>Active</td>";
												}
												else{
												print "<td>Not Active</td>";
												}	
												print "<td><button type=\"submit\" name=\"ver_20\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>
												<button type=\"submit\" name=\"mod\" value=\"$row[ID],$row[Image_20]\" class=\"btn btn-default  btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>												
												<button type=\"submit\" name=\"del_20\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
												print "</tr>";												
										}
                                        ///IMG_21	
										if($row['Image_21']!=""){	
										
										        $items_stored[] = $row['Image_21'];
										
												print "<tr>";
                                                print "<td><input type='checkbox' name='borrar[]' value='$row[ID],$row[Image_21]'></td>";	
												print "<td>$row[ID]</td>";
												print "<td>$row[Image_21]</td>";	
												
                                                if (file_exists('../uploads/' . $row['Image_21'])) { 
												
												print "<td>Active</td>";
												}
												else{
												print "<td>Not Active</td>";
												}	
												print "<td><button type=\"submit\" name=\"ver_21\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>
												<button type=\"submit\" name=\"mod\" value=\"$row[ID],$row[Image_21]\" class=\"btn btn-default  btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>												
												<button type=\"submit\" name=\"del_21\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
												print "</tr>";												
										}
                                        ///IMG_3	
										if($row['Image_22']!=""){	
										
										        $items_stored[] = $row['Image_22'];
										
												print "<tr>";
                                                print "<td><input type='checkbox' name='borrar[]' value='$row[ID],$row[Image_22]'></td>";	
												print "<td>$row[ID]</td>";
												print "<td>$row[Image_22]</td>";	
												
                                                if (file_exists('../uploads/' . $row['Image_22'])) { 
												
												print "<td>Active</td>";
												}
												else{
												print "<td>Not Active</td>";
												}	
												print "<td><button type=\"submit\" name=\"ver_22\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>
												<button type=\"submit\" name=\"mod\" value=\"$row[ID],$row[Image_22]\" class=\"btn btn-default  btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>												
												<button type=\"submit\" name=\"del_22\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
												print "</tr>";												
										}
                                        ///IMG_23	
										if($row['Image_23']!=""){	
										
										        $items_stored[] = $row['Image_23'];
										
												print "<tr>";
                                                print "<td><input type='checkbox' name='borrar[]' value='$row[ID],$row[Image_23]'></td>";	
												print "<td>$row[ID]</td>";
												print "<td>$row[Image_23]</td>";	
												
                                                if (file_exists('../uploads/' . $row['Image_23'])) { 
												
												print "<td>Active</td>";
												}
												else{
												print "<td>Not Active</td>";
												}	
												print "<td><button type=\"submit\" name=\"ver_23\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>
												<button type=\"submit\" name=\"mod\" value=\"$row[ID],$row[Image_23]\" class=\"btn btn-default  btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>												
												<button type=\"submit\" name=\"del_23\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
												print "</tr>";												
										}
                                        ///IMG_24	
										if($row['Image_24']!=""){	
										
										        $items_stored[] = $row['Image_24'];
										
												print "<tr>";
                                                print "<td><input type='checkbox' name='borrar[]' value='$row[ID],$row[Image_24]'></td>";	
												print "<td>$row[ID]</td>";
												print "<td>$row[Image_24]</td>";	
												
                                                if (file_exists('../uploads/' . $row['Image_24'])) { 
												
												print "<td>Active</td>";
												}
												else{
												print "<td>Not Active</td>";
												}	
												print "<td><button type=\"submit\" name=\"ver_24\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>
												<button type=\"submit\" name=\"mod\" value=\"$row[ID],$row[Image_24]\" class=\"btn btn-default  btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>												
												<button type=\"submit\" name=\"del_24\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
												print "</tr>";												
										}
                                        ///IMG_25	
										if($row['Image_25']!=""){	
										
										        $items_stored[] = $row['Image_25'];
										
												print "<tr>";
                                                print "<td><input type='checkbox' name='borrar[]' value='$row[ID],$row[Image_25]'></td>";	
												print "<td>$row[ID]</td>";
												print "<td>$row[Image_25]</td>";	
												
                                                if (file_exists('../uploads/' . $row['Image_25'])) { 
												
												print "<td>Active</td>";
												}
												else{
												print "<td>Not Active</td>";
												}	
												print "<td><button type=\"submit\" name=\"ver_25\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>
												<button type=\"submit\" name=\"mod\" value=\"$row[ID],$row[Image_25]\" class=\"btn btn-default  btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>												
												<button type=\"submit\" name=\"del_25\" value=\"$row[ID]\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
												print "</tr>";												
										}										
									}
                                    ///////////////////////Imatges sense noticies dins del folder///////////////////
									
												while($imatgeIni<=$imatgeFi-1){	
												if($imatgeIni>=$total_imatges) break;
												
												$items_folder[] = $fitxers[$imatgeIni];														
												$imatgeIni++;
								                }													
												///////array registres sense noticia///////////
												
												$items_folder = array_diff($items_folder, $items_stored); 

												foreach($items_folder as $value){

												print "<tr>";
                                                print "<td><input type='checkbox' name='borrar2[]' value='$value'></td>";
                                                print "<td>Not ID</td>";												
												print "<td>$value</td>";
												print "<td>Not Active</td>";											
												print "<td><button type=\"submit\" name=\"ver2\" id=\"ver2\" value=\"$value\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-eye fa-fw\"></i></button>																												
														<button type=\"submit\" name=\"del\" value=\"$value\" class=\"btn btn-default  btn-outline btn-circle\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
											    print "</tr>";	
												}									
                                    ?>
                                    </tbody>
                                </table>
                                Delete selected items  
                                <button  name="dels" value="dels" type="submit" class="btn btn-default  btn-outline"><i class="fa fa-trash-o fa-fw"></i> Delete</button>
								</form>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>								
<?php //DESCONNEXIÓ DE LA BASE DE DADES
$conn=null;
?>   
</body>
</html> 
    