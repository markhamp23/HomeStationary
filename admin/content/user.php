<!-- MOSTRA DEL PANELL PRINCIPAL AMB EL TÍTOL DE LA SECCIÓ I LES OPCIONS A REALITZAR -->
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Users Profile</h3>
            </div>
            <!-- /.col-lg-12 -->
        </div>
  <!------------------------------------------------------2-------------------------------------------------------> 
  
        <?php
        if(isset($_GET['sec']) && isset($_GET['sub']) && $_GET['sub']=='new'){
            if(isset($_POST['alta']) && !empty($_POST['alta'])) {
            	 if(isset($_POST['mail']) && !empty($_POST['mail'])) {
                $stmt = $conn->prepare('INSERT INTO user (Mail,Pass,Active,Permissions) VALUES (:mail,:pass,:active,:permissions)');
                $data = $stmt->execute(array(':mail' => $_POST['mail'], ':pass' => $_POST['pass'], ':active' => $_POST['active'], ':permissions' => $_POST['permissions']));
                if ($data == 1) {
                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>User added succesfull...</p>";
                    print "</div>";
                    }
                else{
                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error on user added...</p>";
                    print "</div>";
                    }
				 }
				 else{
				 	print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error Some required information is missing or incomplete.</p>";
                    print "</div>";
				 }
            }
            print "<div class=\"row\">";
            print "<div class=\"col-lg-12\">";
            print "<div class=\"panel panel-default\">";
            print "<div class=\"panel-heading\">New User</div>";
            print "<div class=\"panel-body\">";
            print "<div class=\"row\">";
            print "<div class=\"col-lg-12\">";
            print "<form action=\"\" method=\"post\" enctype=\"multipart/form-data\">";
            print "<div class=\"form-group\">";
            print "<label>Email</label>";
            print "<input type=\"text\" name=\"mail\" class=\"form-control\" placeholder=\"Enter user email.\">";
            print "</div>";
            print "<div class=\"form-group\">";
            print "<label>Password</label>";
            print "<input type=\"pass\" name=\"pass\" class=\"form-control\" placeholder=\"Enter user password.\">";
            print "</div>";				
            print "<div class=\"form-group\">";					
            print "<input type=\"radio\" name=\"active\" value=\"1\">";			
            print "<label> Active </label>";			
            print "  <input type=\"radio\" name=\"active\" value=\"2\"checked>";				
            print "<label> No Active </label>";	
            print "</div>";					
//////////////////////////////////////////////////////////////////////////////////permissons//////////////
            print "<div class=\"form-group\">";
            print "<input type=\"radio\" name=\"permissions\" value=\"1\">";			
            print "<label> Admin </label>";			
            print "  <input type=\"radio\" name=\"permissions\" value=\"2\"checked>";				
            print "<label> User </label>";										
            print "</div>";							
            print "<button type=\"submit\" name=\"alta\" value=\"alta\" class=\"btn btn-default btn-outline btn-circle btn-lg\"><i class=\"fa fa-check\"></i></button>";
            print "<button type=\"reset\" name=\"cancel\" value=\"cancel\"onclick=\"location.href='?sec=user&sub=lst'\" class=\"btn btn-default btn-outline btn-circle btn-lg\"><i class=\"fa fa-times\"></i></button>";
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
                $stmt=$conn->prepare('SELECT * FROM user WHERE mail=:mail');
                $stmt->execute(array(':mail'=>$_POST['ver']));
                $row=$stmt->fetch(PDO::FETCH_ASSOC);
                print "<div class=\"row\">";
                print "<div class=\"col-lg-12\">";
                print "<div class=\"panel panel-default\">";
                print "<div class=\"panel-heading\">Register User</div>";
                print "<div class=\"panel-body\">";
                print "<div class=\"row\">";
                print "<div class=\"col-lg-12\">";
                print "<form action=\"\" method=\"post\" enctype=\"multipart/form-data\">";
                print "<div class=\"form-group\">";
                print "<label>Email</label>";
                print "<p class=\"form-control\">$row[Mail]</p>";
                print "</div>";
                print "<div class=\"form-group\">";
                print "<label>Password</label>";
                print "<p class=\"form-control\">$row[Pass]</p>";
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
/////////////////////////////////////////permissions/////////////////////////////////////////////	
                print "<label>Permissions</label>";	
	   	        if($row['Permissions']==1){
                    print "<input type=\"pass\" name=\"pass\" value=\"Admin\"class=\"form-control\">";
			    }	
			    else{
                print "<input type=\"pass\" name=\"pass\" value=\"User\"class=\"form-control\">";}															
                print "</div>";	
				print "</div>";
				print "</div>";
				print "</div>";
				print "</div>";
				print "</div>";						
            }   	
/////////////////////////////////////////////////////////////////////////////////////
           if(isset($_POST['mod']) && !empty($_POST['mod'])){
           	  if(isset($_POST['modif']) && !empty($_POST['modif'])){
                  //CONSULTA D'ACTUALITZACIÓ DE DADES  
                  $stmt2=$conn->prepare('UPDATE user SET Mail=:Mail,Pass=:pass,Active=:active,Permissions=:permissions WHERE Mail=:mail');                    
                  $row=$stmt2->execute(array(':Mail'=>$_POST['mail'],':pass'=>$_POST['pass'],':active'=>$_POST['active'],':permissions' => $_POST['permissions'],':mail'=>$_POST['mod']));
                  if($row>0) {
                        //EN CAS AFIRMATIU...
                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>User modified succesfull...</p>";
                        print "</div>";
                  }
                  else {
                        //EN CAS NEGATIU...
                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error user unmodify succesfull...</p>";
                        print "</div>";
                    }
                }	
                else {
                    $stmt = $conn->prepare('SELECT * FROM user WHERE Mail=:mail');
                    $stmt->execute(array(':mail' => $_POST['mod']));
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);				
   				    print "<div class=\"row\">";
                    print "<div class=\"col-lg-12\">";
                    print "<div class=\"panel panel-default\">";
                    print "<div class=\"panel-heading\">Modify User $row[Mail]</div>";
                    print "<div class=\"panel-body\">";
                    print "<div class=\"row\">";
                    print "<div class=\"col-lg-12\">";
                    print "<form action=\"\" method=\"post\" enctype=\"multipart/form-data\">";
                    print "<div class=\"form-group\">";
                    print "<label>Email</label>";
                    print "<input type=\"text\" name=\"mail\" value=\"$row[Mail]\"class=\"form-control\" placeholder=\"Enter user email.\">";
                    print "</div>";
                    print "<div class=\"form-group\">";
                    print "<label>Password</label>";
                    print "<input type=\"pass\" name=\"pass\" value=\"$row[Pass]\"class=\"form-control\" placeholder=\"Enter user password.\">";
                    print "</div>";								
//////////////////////////////////////permissions/////////////////////////////////////////////////////////////////////////					
                    print "<div class=\"form-group\">";
					if($row['Active']==1){
                    print "  <input type=\"radio\" name=\"active\" value=\"1\" checked>";
				    print "<label> Active </label>";
					print "  <input type=\"radio\" name=\"active\" value=\"2\">";
					print "<label> No Active </label>";
					}	
					else{
                    print "  <input type=\"radio\" name=\"active\" value=\"1\">";
				    print "<label> Active </label>";
					print "  <input type=\"radio\" name=\"active\" value=\"2\" checked>";
					print "<label> No Active </label>";
					}								
	
///////////////////////////////permissions////////////////////////////////////////////////////////////////////	
                    print "</div>";						
                    print "<div class=\"form-group\">";					
					if($row['Permissions']==1){
                    print "  <input type=\"radio\" name=\"permissions\" value=\"1\" checked>";
				    print "<label> Admin </label>";
					print "  <input type=\"radio\" name=\"permissions\" value=\"2\">";
					print "<label> User </label>";
					}	
					else{
                    print "  <input type=\"radio\" name=\"permissions\" value=\"1\">";
				    print "<label> Admin </label>";
					print "  <input type=\"radio\" name=\"permissions\" value=\"2\" checked>";
					print "<label> User </label>";
					}																					
                    print "</div>";							
		   	        print "<button type=\"submit\" name=\"modif\" value=\"modif\" class=\"btn btn-default btn-outline btn-circle btn-lg\"><i class=\"fa fa-check\"></i></button>";										
                    print "<button type=\"reset\" name=\"cancel\" value=\"cancel\"onclick=\"location.href='?sec=user&sub=lst'\" class=\"btn btn-default btn-outline btn-circle btn-lg\"><i class=\"fa fa-times\"></i></button>";											
                    print "<input type=\"hidden\" name=\"mod\" value=\"$row[Mail]\">";
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
            if(isset($_POST['del']) && !empty($_POST['del'])) {
                $eliminar = $_POST['del'];
                if(isset($_POST['borra']) && !empty($_POST['borra'])) {
                    $stmt=$conn->prepare('DELETE FROM user WHERE Mail=:mail');
                    $rows=$stmt->execute(array(':mail'=>$_POST['del']));
                    if($rows>0){
                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>User deleted succesfull...</p>";
                        print "</div>";
                    }
                    else{
                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error deleting the user...</p>";
                        print "</div>";
                    }
                }
                else{
                    print "<form action=\"\" method=\"post\">";
                    print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure to delete this user???</p>";
                    print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-default\"><i class=\"fa fa-check\"></i> Delete</button>";
                    print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-default\" onclick=\"location.href='?sec=user&sub=lst'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
                    print "<input type=\"hidden\" name=\"del\" value=\"$eliminar\">";
                    print "</div>";
                    print "</form>";
                }
            }         		
            //ELIMINAR MES DE UN ELEMENT SELECCIONAT AMB EL CHECKBOX
            if(isset($_POST['dels']) && !empty($_POST['dels'])) {
                if(isset($_POST['borras']) && !empty($_POST['borras'])) {
                    foreach($_POST['delregs'] as $ID) {
                        $stmt = $conn->prepare('DELETE FROM user WHERE Mail=:mail');
                        $rows = $stmt->execute(array(':mail' => $ID));
                    }
                    if($rows>0){
                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Users deleted succesfull...</p>";
                        print "</div>";
                    }
                    else{
                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error deleting the users...</p>";
                        print "</div>";
                    }
                }
                else{
                    if (isset($_POST['borrar']) && !empty($_POST['borrar'])) {
                    print "<form action=\"\" method=\"post\">";
                    print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure you want to delete the selection?</p>";
 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    foreach($_POST['borrar'] as $ID){
                        $stmt3=$conn->prepare('SELECT * FROM user WHERE Mail=:idn');
                        $stmt3->execute(array(':idn'=>$ID));
                        $row2=$stmt3->fetch(PDO::FETCH_ASSOC);
                        print "<p>Usuari: ".$row2['Mail']."</p>";
                    }
                    print "<p><button type=\"submit\" name=\"borras\" value=\"borras\" class=\"btn btn-outline btn-success\"><i class=\"fa fa-check\"></i> Delete</button>";
                    print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-danger\" onclick=\"location.href='?sec=user&sub=lst'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
                    print "<input type=\"hidden\" name=\"dels\" value=\"dels\">";
                    foreach($_POST['borrar'] as $key){
                        print "<input type=\"hidden\" name=\"delregs[]\" value=\"".$key."\">";
                    }
                    print "</div>";
                    print "</form>";
                    }
////////////////////////////////////////////////////NEW//////////////////////////////////////////////////////////
					else{
						 print "<div class=\"alert alert-success alert-dismissable\"><p>User or users not selected.</p>";
						 print "</div>";
					}
                }
            }
            ?>
<!------------------------------------------------------1-------------------------------------------------------> 
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Users List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <form action="" method="post">
                                <table class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th width="5%"></th>
                                        <th width="30%">Email</th>
                                        <th width="35%">Password</th>
                                        <th width="5%">Active</th>
                                        <th width="10%">Permissions</th>  
                                        <th width="15%">Options</th> 										
                                    </tr>
                                    </thead>    
                                    <tbody>
											<?php //CONSULTA DE SELECCIO DELS REGISTRES DE LA BASE DE DADES
											$stmt=$conn->prepare('SELECT * FROM user');
											$stmt->execute();
											 while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
											 print "<tr>";
											 print "<td><input type='checkbox' name='borrar[]' value='$row[Mail]'></td>";
											 print "<td>$row[Mail]</td>";
											 print "<td>$row[Pass]</td>";
									/////////////////////////////////////////////////////////
											if($row['Active']==1){
												print "<td>Yes</td>";
											}else{
												print "<td>No</td>";
											}	
									///////////////////permissions///////////////////////////
											if($row['Permissions']==1){
												 print "<td>Admin</td>";
												 }else{
												 print "<td>User</td>";
												 }
												 print "<td><button type=\"submit\" name=\"ver\" value=\"$row[Mail]\" class=\"btn btn-default btn-default btn-circle btn-outline\"><i class=\"fa fa-eye fa-fw\"></i></button>  <button type=\"submit\" name=\"mod\" value=\"$row[Mail]\" class=\"btn btn-default btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>  <button type=\"submit\" name=\"del\" value=\"$row[Mail]\" class=\"btn btn-default btn-circle btn-outline\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";		 
												 print "</tr>";
											}
											?>        	                                
									</tbody>
								</table>  
							    Delete selected items 
							    <button type="submit" name="dels" value="dels" class="btn btn-default btn-outline"><i class="fa fa-trash-o fa-fw"></i> Delete</button>        
								</form>
								<?php } ?>
						    </div>
						</div>	
					</div>
				</div>
			</div>	
</div>				
<!-- /.container-fluid -->
<?php //DESCONNEXIÓ DE LA BASE DE DADES
$conn=null;
?>
