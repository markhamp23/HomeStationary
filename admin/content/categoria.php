<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Categories</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
  <!------------------------------------------------------2-------------------------------------------------------> 
  
        <?php
        if(isset($_GET['sec']) && isset($_GET['sub']) && $_GET['sub']=='new'){
            if(isset($_POST['alta']) && !empty($_POST['alta'])) {
            	 if(isset($_POST['Categoria']) && !empty($_POST['Categoria'])) {
                $stmt = $conn->prepare('INSERT INTO categoria (Categoria,Active) VALUES (:categoria,:active)');
                $data = $stmt->execute(array(':categoria' => $_POST['Categoria'], ':active' => $_POST['active']));
                if ($data == 1) {
                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Categoria creada correctament...</p>";
                    print "</div>";
                    }
                else{
                    print "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>S'ha produït un error a l'inserir la categoria...</p>";
                    print "</div>";
                    }
				 }
				 else{
				 	print "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error: Some required information is missing or incomplete.</p>";
                    print "</div>";
				 }
            }
            print "<div class=\"row\">";
            print "<div class=\"col-lg-12\">";
            print "<div class=\"panel panel-info\">";
            print "<div class=\"panel-heading\">Nova Categoria</div>";
            print "<div class=\"panel-body\">";
            print "<div class=\"row\">";
            print "<div class=\"col-lg-12\">";
            print "<form action=\"\" method=\"post\" enctype=\"multipart/form-data\">";
            print "<div class=\"form-group\">";
            print "<label>Categoria</label>";
            print "<input type=\"text\" name=\"Categoria\" class=\"form-control\" placeholder=\"Introdueix nom de la categoria .\">";
            print "</div>";
			
            print "<div class=\"form-group\">";
            print "<input type=\"radio\" name=\"active\" value=\"1\">";			
            print "<label>Active</label>";
			
            print "  <input type=\"radio\" name=\"active\" value=\"2\"checked>";				
            print "<label> No Active </label>";		
						
            print "</div>";							
            print "<button type=\"submit\" name=\"alta\" value=\"alta\" class=\"btn btn-success btn-outline btn-circle btn-lg\"><i class=\"fa fa-check\"></i></button>";
            print "<button type=\"reset\" name=\"cancel\" value=\"cancel\"onclick=\"location.href='?sec=categoria&sub=lst'\" class=\"btn btn-danger btn-outline btn-circle btn-lg\"><i class=\"fa fa-times\"></i></button>";
            print "</form>";
            print "</div>";
            print "</div>";
            print "</div>";
            print "</div>";
            print "</div>";
            print "</div>";	
            }	
        else{
            if(isset($_POST['ver']) && !empty($_POST['ver'])){
                $stmt=$conn->prepare('SELECT * FROM categoria WHERE Id=:id');
                $stmt->execute(array(':id'=>$_POST['ver']));
                $row=$stmt->fetch(PDO::FETCH_ASSOC);
                print "<div class=\"row\">";
                print "<div class=\"col-lg-12\">";
                print "<div class=\"panel panel-info\">";
                print "<div class=\"panel-heading\">Model Categoria</div>";
                print "<div class=\"panel-body\">";
                print "<div class=\"row\">";
                print "<div class=\"col-lg-12\">";
                print "<form action=\"\" method=\"post\" enctype=\"multipart/form-data\">";
                print "<div class=\"form-group\">";
                print "<label>Id</label>";
                print "<p class=\"form-control\">$row[Id]</p>";
                print "</div>";
                print "<div class=\"form-group\">";
                print "<label>Categoria</label>";
                print "<p class=\"form-control\">$row[Categoria]</p>";
                print "</div>";	
                print "<div class=\"form-group\">";
                print "<label>Active</label>";	
////////////////////////////////////////////////////////////////////////
	   	        if($row['Active']==1){
                    print "<input type=\"pass\" name=\"pass\" value=\"Yes\"class=\"form-control\">";
			    }	
			    else{
                print "<input type=\"pass\" name=\"pass\" value=\"No\"class=\"form-control\">";}									
                print "</div>";	
				print "</div>";
				print "</div>";
				print "</div>";
				print "</div>";
				print "</div>";
				print "</div>";						
            }      
/////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////
/////////////////////////////////////////////////

           if(isset($_POST['mod']) && !empty($_POST['mod'])){
           	  if(isset($_POST['modif']) && !empty($_POST['modif'])){
                  //CONSULTA D'ACTUALITZACIÓ DE DADES  
                  $stmt2=$conn->prepare('UPDATE categoria SET Categoria=:categoria,Active=:active WHERE Id=:id');                    
                  $row=$stmt2->execute(array(':categoria'=>$_POST['categoria'],':active'=>$_POST['active'],':id'=>$_POST['mod']));
                  if($row>0) {
                        //EN CAS AFIRMATIU...
                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Categoria modificada correctament...</p>";
                        print "</div>";
                  }
                  else {
                        //EN CAS NEGATIU...
                        print "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error al modificar la Categoria...</p>";
                        print "</div>";
                    }
                }	
                else {
                    $stmt = $conn->prepare('SELECT * FROM categoria WHERE Id=:id');
                    $stmt->execute(array(':id' => $_POST['mod']));
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
				
   				    print "<div class=\"row\">";
                    print "<div class=\"col-lg-12\">";
                    print "<div class=\"panel panel-info\">";
                    print "<div class=\"panel-heading\">Modificacio Categoria: $row[Id]</div>";
                    print "<div class=\"panel-body\">";
                    print "<div class=\"row\">";
                    print "<div class=\"col-lg-12\">";
                    print "<form action=\"\" method=\"post\" enctype=\"multipart/form-data\">";
                    print "<div class=\"form-group\">";
                    print "<label>Categoria</label>";
                    print "<input type=\"text\" name=\"categoria\" value=\"$row[Categoria]\"class=\"form-control\" placeholder=\"Introdueix nom de la categoria\">";
                    print "</div>";
                    print "<div class=\"form-group\">";
                    print "<label>Active</label>"; 
/////////////////////////////////////////////////////////////////////////////////
	     	        if($row['Active']==1){
                      print "<input type=\"pass\" name=\"pass\" value=\"Yes\" class=\"form-control\">";
		    	    }	
			        else{
                        print "<input type=\"pass\" name=\"pass\" value=\"No\" class=\"form-control\">";}				
                    print "</div>";										
//////////////////////////////////////////////////////////////////////////////////////////////////////////////	
                    print "<div class=\"form-group\">";
					if($row['Active']==1){
                    print "  <input type=\"radio\" name=\"active\" value=\"1\" checked>";
				    print "<label>Active</label>";
					print "  <input type=\"radio\" name=\"active\" value=\"2\">";
					print "<label>No Active</label>";
					}	
					else{
                    print "  <input type=\"radio\" name=\"active\" value=\"1\">";
				    print "<label>Active</label>";
					print "  <input type=\"radio\" name=\"active\" value=\"2\" checked>";
					print "<label>No Active</label>";

					}												                                    
//////////////////////////////////////////////////////////////////////////////////////////////////////////////	
                    print "</div>";	
						
		   	        print "<button type=\"submit\" name=\"modif\" value=\"modif\" class=\"btn btn-success btn-outline btn-circle btn-lg\"><i class=\"fa fa-check\"></i></button>";										
                    print "<button type=\"reset\" name=\"cancel\" value=\"cancel\"onclick=\"location.href='?sec=categoria&sub=lst'\" class=\"btn btn-danger btn-outline btn-circle btn-lg\"><i class=\"fa fa-times\"></i></button>";					
										
                    print "<input type=\"hidden\" name=\"mod\" value=\"$row[Id]\">";
                    print "</form>";
                    print "</div>";
                    print "</div>";
                    print "</div>";
                    print "</div>";
                    print "</div>";
                    print "</div>";					
                }
              }          
            //ELIMINAR UN ELEMENT A PARTIR DEL LLISTAT
//////////////////////////////////////////////////////////////////////////////////	
            if(isset($_POST['del']) && !empty($_POST['del'])) {
                $eliminar = $_POST['del'];
                if(isset($_POST['borra']) && !empty($_POST['borra'])) {
                    $stmt=$conn->prepare('DELETE FROM categoria WHERE Id=:id');
                    $rows=$stmt->execute(array(':id'=>$_POST['del']));
                    if($rows>0){
                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Categoria eliminada correctament...</p>";
                        print "</div>";
                    }
                    else{
                        print "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>S'ha produït un error a eliminar una Categoria...</p>";
                        print "</div>";
                    }
                }
                else{
                    print "<form action=\"\" method=\"post\">";
                    print "<div class=\"alert alert-danger alert-dismissable\"><p>Estàs segur de que vols eliminar el registre???</p>";
					
                    $stmt=$conn->prepare('SELECT * FROM categoria WHERE Id=:id');
                    $stmt->execute(array(':id'=>$_POST['del']));
                    $row=$stmt->fetch(PDO::FETCH_ASSOC);

					print "<p>La categoria: ".$row['Id']." - ".$row['Categoria']."</p>";
				
                    print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-success\"><i class=\"fa fa-check\"></i> Eliminar</button>";
                    print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-danger\" onclick=\"location.href='?sec=categoria&sub=lst'\"><i class=\"fa fa-times\"></i> Cancelar</button></p>";
                    print "<input type=\"hidden\" name=\"del\" value=\"$eliminar\">";
                    print "</div>";
                    print "</form>";
                }
            }      
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //ELIMINAR MES DE UN ELEMENT SELECCIONAT AMB EL CHECKBOX
            if(isset($_POST['dels']) && !empty($_POST['dels'])) {
                if(isset($_POST['borras']) && !empty($_POST['borras'])) {
                    foreach($_POST['delregs'] as $ID) {
                        $stmt = $conn->prepare('DELETE FROM categoria WHERE Id=:id');
                        $rows = $stmt->execute(array(':id' => $ID));
                    }
                    if($rows>0){
                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Notícies eliminades correctament...</p>";
                        print "</div>";
                    }
                    else{
                        print "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>S'ha produït un error a l'eliminar les notícies...</p>";
                        print "</div>";
                    }
                }
                else{
                    if (isset($_POST['borrar']) && !empty($_POST['borrar'])) {
                    print "<form action=\"\" method=\"post\">";
                    print "<div class=\"alert alert-danger alert-dismissable\"><p>Estàs segur de que vols eliminar la selecció???</p>";
 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    foreach($_POST['borrar'] as $ID){
                        $stmt3=$conn->prepare('SELECT * FROM categoria WHERE Id=:idn');
                        $stmt3->execute(array(':idn'=>$ID));
                        $row2=$stmt3->fetch(PDO::FETCH_ASSOC);
                        print "<p>La categoria: ".$row2['Id']." - ".$row2['Categoria']."</p>";
                    }
                    print "<p><button type=\"submit\" name=\"borras\" value=\"borras\" class=\"btn btn-outline btn-success\"><i class=\"fa fa-check\"></i> Eliminar</button>";
                    print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-danger\" onclick=\"location.href='?sec=categoria&sub=lst'\"><i class=\"fa fa-times\"></i> Cancelar</button></p>";
                    print "<input type=\"hidden\" name=\"dels\" value=\"dels\">";
                    foreach($_POST['borrar'] as $key){
                        print "<input type=\"hidden\" name=\"delregs[]\" value=\"".$key."\">";
                    }
                    print "</div>";
                    print "</form>";
                }
////////////////////////////////////////////////////NEW//////////////////////////////////////////////////////////
                else{
	                 print "<div class=\"alert alert-danger alert-dismissable\"><p>No has seleccionat una categoria.</p>";
					 print "</div>";
                }
            }
            }
            ?>  		
<!------------------------------------------------------2-------------------------------------------------------> 
               <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Llista de Categories
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<div class="dataTable_wrapper">
							<form action="" method="post">
							<table class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
									<thead>
									<tr>
										<td></td>
										<td>Id</td>
										<td>Categories</td>
										<td>Active</td> 
                                        <td>Options</td>										
									</tr>
									</thead>
									<tbody>               
							 <!------------------------------------------------------2-------------------------------------------------------> 					   
									<?php //CONSULTA DE SELECCIO DELS REGISTRES DE LA BASE DE DADES

									$stmt=$conn->prepare('SELECT * FROM categoria ORDER BY id desc');
									$stmt->execute();
									 while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
									 print "<tr>";
									 print "<td><input type='checkbox' name='borrar[]' value='$row[Id]'></td>";
									 print "<td>$row[Id]</td>";
									 print "<td>$row[Categoria]</td>";
							/////////////////////////////////////////////////////////    
									 if($row['Active']==1){
										 print "<td>Yes</td>";
										 }	
										 else{
											print "<td>No</td>";}
							///////////////////PERMISSINS//////////////////////////////////////		 

									 if($permissions==1){
									 print "<td>                                                                                                                                                               
									 <button type=\"submit\" name=\"ver\" value=\"$row[Id]\" class=\"btn btn-default btn-info btn-circle btn-outline\"><i class=\"fa fa-eye fa-fw\"></i></button>
									 <button type=\"submit\" name=\"mod\" value=\"$row[Id]\" class=\"btn btn-warning btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>                                                                                                                       
									 <button type=\"submit\" name=\"del\" value=\"$row[Id]\" class=\"btn btn-danger btn-circle btn-outline\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";
                                     print "</tr>";									 
									 }	
									 if($permissions==2){                                                                                                                                                              
                                     print "<td></td>";	
									 print "</tr>";
									 }														 
							/////////////////////////////////////////////////////////		 
									}
									?>
							  <!------------------------------------------------------2------------------------------------------------------->     
									</tbody>
									<?php        
									if($permissions==1){
									print "</table>	
									Per als elements que es troben marcats:";
									print "<button type=\"submit\" name=\"dels\" value=\"dels\" class=\"btn btn-danger btn-outline\"><i class=\"fa fa-trash-o fa-fw\"></i> Eliminar</button>";        
									print "</form>";
									}
									else{
										print "</table>";
										print "</form>";
									}
									?>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->	   
        <?php } ?>
    </div>
    <!-- /.container-fluid -->
<?php //DESCONNEXIÓ DE LA BASE DE DADES
$conn=null;
?>    
    