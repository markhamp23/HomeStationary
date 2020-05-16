<?php //CONNEXIÓ A LA BASE DE DADES
include('./lib/connectar.php');
// include('./lib/dates.php');
?>

<!-- MOSTRA DEL PANELL PRINCIPAL AMB EL TÍTOL DE LA SECCIÓ I LES OPCIONS A REALITZAR -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Posts Library</h3>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- COMPROVAR SI ARRIBA UN NEW O UN LLISTAT -->

        <?php       

        //$rows3 = [];

        if(isset($_GET['sec']) == 'unsplash' && isset($_GET['sub']) && $_GET['sub']=='new' && Isset($_GET['sec']) == 'apiCreate'   ){

            //ALTA DE NOTICIA
            if(isset($_POST['alta']) && !empty($_POST['alta'])){
                //Preparar el nom del fitxer de la imatge_1
                $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                $stmt4->execute();
                $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                $id_max = $row_max['MID'] + 1;
                //Comprovar la existencia d'un nom de fitxer en la imatge_1
                if($_FILES['fitxer_1']['name']!=null) {
                    $fitxer_imatge_1 = "IMG_1_" . $id_max . "_" . $_FILES['fitxer_1']['name'];
                }
                else{
                    $fitxer_imatge_1="";
                }					
					
                if(isset($_POST['title']) && !empty($_POST['title'])) {
                    $stmt = $conn->prepare('INSERT INTO post (Title,Description,Data,Image_1,Caption_1,Image_2,Caption_2,Image_3,Caption_3,Image_4,Caption_4,Image_5,Caption_5,Image_6,Caption_6,Image_7,Caption_7,Image_8,Caption_8,Image_9,Caption_9,Image_10,Caption_10,Image_11,Caption_11,Image_12,Caption_12,Image_13,Caption_13,Image_14,Caption_14,Image_15,Caption_15,Image_16,Caption_16,Image_17,Caption_17,Image_18,Caption_18,Image_19,Caption_19,Image_20,Caption_20,Image_21,Caption_21,Image_22,Caption_22,Image_23,Caption_23,Image_24,Caption_24,Image_25,Caption_25,Permission) VALUES (:title,:descr,:data,:img_1,:capt_1,:img_2,:capt_2,:img_3,:capt_3,:img_4,:capt_4,:img_5,:capt_5,:img_6,:capt_6,:img_7,:capt_7,:img_8,:capt_8,:img_9,:capt_9,:img_10,:capt_10,:img_11,:capt_11,:img_12,:capt_12,:img_13,:capt_13,:img_14,:capt_14,:img_15,:capt_15,:img_16,:capt_16,:img_17,:capt_17,:img_18,:capt_18,:img_19,:capt_19,:img_20,:capt_20,:img_21,:capt_21,:img_22,:capt_22,:img_23,:capt_23,:img_24,:capt_24,:img_25,:capt_25,:permission)');				
					
               	    if (($_POST['Data'] == null) or ($_POST['Data'] == "0000-00-00 00:00:00")) {
                        $avui = date("Y-m-d H:i:s");
				        $_POST['mail'] = $nomComplet;
						$_POST['permissions'] = $permissions;
                    } else {				
                        $avui = (ToTime($_POST['Data']));						
                    }
                    $data = $stmt->execute(array(':title' => $_POST['title'], ':descr' => $_POST['description'],':data' => $avui, ':img_1' => $fitxer_imatge_1,':capt_1' => $_POST['caption_1'],':img_2' => $fitxer_imatge_2,':capt_2' => $_POST['caption_2'],':img_3' => $fitxer_imatge_3,':capt_3' => $_POST['caption_3'],':img_4' => $fitxer_imatge_4,':capt_4' => $_POST['caption_4'],':img_5' => $fitxer_imatge_5,':capt_5' => $_POST['caption_5'],':img_6' => $fitxer_imatge_6,':capt_6' => $_POST['caption_6'],':img_7' => $fitxer_imatge_7,':capt_7' => $_POST['caption_7'],':img_8' => $fitxer_imatge_8,':capt_8' => $_POST['caption_8'],':img_9' => $fitxer_imatge_9,':capt_9' => $_POST['caption_9'],':img_10' => $fitxer_imatge_10,':capt_10' => $_POST['caption_10'],':img_11' => $fitxer_imatge_11,':capt_11' => $_POST['caption_11'],':img_12' => $fitxer_imatge_12,':capt_12' => $_POST['caption_12'],':img_13' => $fitxer_imatge_13,':capt_13' => $_POST['caption_13'],':img_14' => $fitxer_imatge_14,':capt_14' => $_POST['caption_14'],':img_15' => $fitxer_imatge_15,':capt_15' => $_POST['caption_15'],':img_16' => $fitxer_imatge_16,':capt_16' => $_POST['caption_16'],':img_17' => $fitxer_imatge_17,':capt_17' => $_POST['caption_17'],':img_18' => $fitxer_imatge_18,':capt_18' => $_POST['caption_18'],':img_19' => $fitxer_imatge_19,':capt_19' => $_POST['caption_19'],':img_20' => $fitxer_imatge_20,':capt_20' => $_POST['caption_20'],':img_21' => $fitxer_imatge_21,':capt_21' => $_POST['caption_21'],':img_22' => $fitxer_imatge_22,':capt_22' => $_POST['caption_22'],':img_23' => $fitxer_imatge_23,':capt_23' => $_POST['caption_23'],':img_24' => $fitxer_imatge_24,':capt_24' => $_POST['caption_24'],':img_25' => $fitxer_imatge_25,':capt_25' => $_POST['caption_25'],':permission' => $permissions));
                    if ($data == 1) {
                        //Inserció de la imatge_1 a la carpeta.
                        if ($_FILES['fitxer_1']['tmp_name'] != null) {
                            $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                            $stmt4->execute();
                            $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $fitxer_imatge_1 = "IMG_1_" . $row_max['MID'] . "_" . $_FILES['fitxer_1']['name'];
                            $stmt5 = $conn->prepare('UPDATE post SET Image_1=:img_1 WHERE ID=:id');
                            $stmt5->execute(array(':img_1'=>$fitxer_imatge_1,':id'=>$row_max['MID']));
                            //pujada imatge al servidor
                            $dir_pujada = '../uploads/';
                            //Crear el directori si no existeix
                            if (!file_exists($dir_pujada)) {
                                mkdir($dir_pujada, 0755, true);
                            }
                            //Comprovar el tipus de fitxer
                            $extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_1']['tmp_name']));
                            if ($extensio != 'image/jpg' && $extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                            } else {
                                //pujar el fitxer
                                $fitxer_pujada_1 = $dir_pujada . "IMG_1_" . $id_max . "_" . $_FILES['fitxer_1']['name'];
                                if (!move_uploaded_file($_FILES['fitxer_1']['tmp_name'], $fitxer_pujada_1)) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                                }
                            }
                        }

                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post inserted successfully...</p>";
                        print "</div>";
                    } else {
                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error inserting the post...</p>";
                        print "</div>";
                    }
                }
            }
				
            print "<div class=\"row\">";
            print "<div class=\"col-lg-12\">";
			print "<form action=\"\" method=\"post\">";
            print "<div class=\"panel panel-default\">";
            print "<div class=\"panel-heading\">New Post User</div>";
            print "<div class=\"panel-body\">";
            print "<div class=\"row\">";
            print "<div class=\"col-lg-12\">";
            
            if(isset($_POST['title']) && empty($_POST['title'])) $error="has-error";
            else $error="";
            print "<div class=\"form-group $error\">";
			//Input Title
            print "<label>Post Title</label>";
            print "<input id='title' type=\"text\" name=\"title\" class=\"form-control\" placeholder=\"Enter the title of the post\">";
            print "</div>";
			
			//Input Description
			print "<div class=\"form-group $error\">";
            print "<label>Post Description</label>";
			print "<textarea id='description' name=\"description\" class=\"form-control\" rows=\"10\"></textarea>";
            print "</div>";		
		
		    //Input Date
			print "<div class=\"form-group $error\">";
            print "<label>Post Date</label>";
            print "<input id='date' type=\"Date\" name=\"Data\" class=\"form-control\" placeholder=\"Enter the date of the post (9999/99/99)\">";		
            print "</div>";
            
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            
            $assignedto = [];

            if(isset($_POST['rowList'])){
                $unsplashList[] = $_POST['rowList'];
                if (is_array($unsplashList)){
                    foreach ($unsplashList as $element) {
                        $dummy = explode('?', $element);
                        $assignedto[] = array("Description" => $dummy[0], "City" => $dummy[1], "Country" => $dummy[2], "Imageown" => $dummy[3], "Link" => $dummy[4], "Imageurl" => $dummy[5]);
                    } 
                }  
            }

            if(isset($_POST['rowList']) && !empty($_POST['rowList'])) {
                for ($i = 0; $i < count($assignedto); $i++) {

                ?> 
                <div class="form-group $error">
                <table class="table table-striped table-bordered table-hover table-responsive pull-left" id="dataTables-example1">
                <label>Selected Images:</label>
                
                    <thead>
                    <tr>
                        <th width="20%" valign="center">Image</th>
                        <th width="70%" valign="center">Description</th>
                        <th width="5%" valign="center">Options</th>								
                    </tr>
                    </thead>

                    <tr>  
                    <td style='text-align: center'> 
                        <div class="img-responsive, Thumb-Box" style='text-align: center'>
                        <img src='<?php echo $assignedto[$i]['Imageurl']; ?>' alt='foto' width='100px' height='50px' style="border:1px solid #a6a6a6">
                        </div>
                    </td> 
                    <td>   
                    <div><span style="padding-right:10px;" class="glyphicon glyphicon-picture"></span><?php echo $assignedto[$i]['Description']?> </div>
                    </td> 
                    <td>
                    <button type="button" @click='removeRow()' class="btn btn-default  btn-outline btn-circle"><i class="fa fa-trash fa-fw"></i></button>
                    </td>   
                    </tr>   
                                   
                </table>  
                </div>
                <?php
                }
            }
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


            print "<button type=\"submit\" name=\"modif\" value=\"modif\" class=\"btn btn-default btn-outline btn-circle btn-lg\"><i class=\"fa fa-check\"></i></button>";       
            print "<button type=\"reset\" name=\"cancel\" value=\"cancel\"onclick=\"location.href='?sec=post&sub=lst'\" class=\"btn btn-default btn-outline btn-circle btn-lg\"><i class=\"fa fa-times\"></i></button>"; 					
            print "</form>";
            print "</div>";
            print "</div>";
            print "</div>";
            print "</div>";
            print "</div>";
            print "</div>";

            require_once ('tableUnsplash.php');

			////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            				      
        }	
		?>	
    </div>
    <!-- /.container-fluid -->
<?php //DESCONNEXIÓ DE LA BASE DE DADES
$conn=null;
?>