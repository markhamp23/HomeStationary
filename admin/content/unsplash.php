<?php //CONNEXIÓ A LA BASE DE DADES
include_once('./lib/connectar.php');
include_once('./lib/dates.php');
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
        if(isset($_GET['sec']) && isset($_GET['sub']) && $_GET['sub']=='new'){
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
                if($_FILES['fitxer_2']['name']!=null) {
					$fitxer_imatge_2 = "IMG_2_" . $id_max . "_" . $_FILES['fitxer_2']['name'];
                }
                else{
					$fitxer_imatge_2="";
                }
                if($_FILES['fitxer_3']['name']!=null) {
					$fitxer_imatge_3 = "IMG_3_" . $id_max . "_" . $_FILES['fitxer_3']['name'];
                }
                else{
					$fitxer_imatge_3="";
                }
                if($_FILES['fitxer_4']['name']!=null) {
					$fitxer_imatge_4 = "IMG_4_" . $id_max . "_" . $_FILES['fitxer_4']['name'];
                }
                else{
					$fitxer_imatge_4="";
                }
                if($_FILES['fitxer_5']['name']!=null) {
					$fitxer_imatge_5 = "IMG_5_" . $id_max . "_" . $_FILES['fitxer_5']['name'];
                }
                else{
					$fitxer_imatge_5="";
                }
                if($_FILES['fitxer_6']['name']!=null) {
					$fitxer_imatge_6 = "IMG_6_" . $id_max . "_" . $_FILES['fitxer_6']['name'];
                }
                else{
					$fitxer_imatge_6="";
                }
                if($_FILES['fitxer_7']['name']!=null) {
					$fitxer_imatge_7 = "IMG_7_" . $id_max . "_" . $_FILES['fitxer_7']['name'];
                }
                else{
					$fitxer_imatge_7="";
                }
                if($_FILES['fitxer_8']['name']!=null) {
					$fitxer_imatge_8 = "IMG_8_" . $id_max . "_" . $_FILES['fitxer_8']['name'];
                }
                else{
					$fitxer_imatge_8="";
                }
                if($_FILES['fitxer_9']['name']!=null) {
					$fitxer_imatge_9 = "IMG_9_" . $id_max . "_" . $_FILES['fitxer_9']['name'];
                }
                else{
					$fitxer_imatge_9="";
                }
                if($_FILES['fitxer_10']['name']!=null) {
					$fitxer_imatge_10 = "IMG_10_" . $id_max . "_" . $_FILES['fitxer_10']['name'];
                }
                else{
					$fitxer_imatge_10="";
                }
                if($_FILES['fitxer_11']['name']!=null) {
					$fitxer_imatge_11 = "IMG_11_" . $id_max . "_" . $_FILES['fitxer_11']['name'];
                }
                else{
					$fitxer_imatge_11="";
                }
                if($_FILES['fitxer_12']['name']!=null) {
					$fitxer_imatge_12 = "IMG_12_" . $id_max . "_" . $_FILES['fitxer_12']['name'];
                }
                else{
					$fitxer_imatge_12="";
                }
                if($_FILES['fitxer_13']['name']!=null) {
					$fitxer_imatge_13 = "IMG_13_" . $id_max . "_" . $_FILES['fitxer_13']['name'];
                }
                else{
					$fitxer_imatge_13="";
                }
                if($_FILES['fitxer_14']['name']!=null) {
					$fitxer_imatge_14 = "IMG_14_" . $id_max . "_" . $_FILES['fitxer_14']['name'];
                }
                else{
					$fitxer_imatge_14="";
                }
                if($_FILES['fitxer_15']['name']!=null) {
					$fitxer_imatge_15 = "IMG_15_" . $id_max . "_" . $_FILES['fitxer_15']['name'];
                }
                else{
					$fitxer_imatge_15="";
                }
                if($_FILES['fitxer_16']['name']!=null) {
					$fitxer_imatge_16 = "IMG_16_" . $id_max . "_" . $_FILES['fitxer_16']['name'];
                }
                else{
					$fitxer_imatge_16="";
                }
                if($_FILES['fitxer_17']['name']!=null) {
					$fitxer_imatge_17 = "IMG_17_" . $id_max . "_" . $_FILES['fitxer_17']['name'];
                }
                else{
					$fitxer_imatge_17="";
                }
                if($_FILES['fitxer_18']['name']!=null) {
					$fitxer_imatge_18 = "IMG_18_" . $id_max . "_" . $_FILES['fitxer_18']['name'];
                }
                else{
					$fitxer_imatge_18="";
                }
                if($_FILES['fitxer_19']['name']!=null) {
					$fitxer_imatge_19 = "IMG_19_" . $id_max . "_" . $_FILES['fitxer_19']['name'];
                }
                else{
					$fitxer_imatge_19="";
                }
                if($_FILES['fitxer_20']['name']!=null) {
					$fitxer_imatge_20 = "IMG_20_" . $id_max . "_" . $_FILES['fitxer_20']['name'];
                }
                else{
					$fitxer_imatge_20="";
                }
                if($_FILES['fitxer_21']['name']!=null) {
					$fitxer_imatge_21 = "IMG_21_" . $id_max . "_" . $_FILES['fitxer_21']['name'];
                }
                else{
					$fitxer_imatge_21="";
                }
                if($_FILES['fitxer_22']['name']!=null) {
					$fitxer_imatge_22 = "IMG_22_" . $id_max . "_" . $_FILES['fitxer_22']['name'];
                }
                else{
					$fitxer_imatge_22="";
                }
                if($_FILES['fitxer_23']['name']!=null) {
					$fitxer_imatge_23 = "IMG_23_" . $id_max . "_" . $_FILES['fitxer_23']['name'];
                }
                else{
					$fitxer_imatge_23="";
                }
                if($_FILES['fitxer_24']['name']!=null) {
					$fitxer_imatge_24 = "IMG_24_" . $id_max . "_" . $_FILES['fitxer_24']['name'];
                }
                else{
					$fitxer_imatge_24="";
                }
                if($_FILES['fitxer_25']['name']!=null) {
					$fitxer_imatge_25 = "IMG_25_" . $id_max . "_" . $_FILES['fitxer_25']['name'];
                }
                else{
					$fitxer_imatge_25="";
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
                        //Inserció de la imatge_2 a la carpeta.
                        if ($_FILES['fitxer_2']['tmp_name'] != null) {
                            $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                            $stmt4->execute();
                            $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $fitxer_imatge_2 = "IMG_2_" . $row_max['MID'] . "_" . $_FILES['fitxer_2']['name'];
                            $stmt5 = $conn->prepare('UPDATE post SET Image_2=:img_2 WHERE ID=:id');
                            $stmt5->execute(array(':img_2'=>$fitxer_imatge_2,':id'=>$row_max['MID']));
                            //pujada imatge al servidor
                            $dir_pujada = '../uploads/';
                            //Crear el directori si no existeix
                            if (!file_exists($dir_pujada)) {
                                mkdir($dir_pujada, 0755, true);
                            }
                            //Comprovar el tipus de fitxer
                            $extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_2']['tmp_name']));
                            if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                            } else {
                                //pujar el fitxer
                                $fitxer_pujada_2 = $dir_pujada . "IMG_2_" . $id_max . "_" . $_FILES['fitxer_2']['name'];
                                if (!move_uploaded_file($_FILES['fitxer_2']['tmp_name'], $fitxer_pujada_2)) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                                }
                            }
                        }	
                        //Inserció de la imatge_3 a la carpeta.
                        if ($_FILES['fitxer_3']['tmp_name'] != null) {
                            $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                            $stmt4->execute();
                            $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $fitxer_imatge_3 = "IMG_3_" . $row_max['MID'] . "_" . $_FILES['fitxer_3']['name'];
                            $stmt5 = $conn->prepare('UPDATE post SET Image_3=:img_3 WHERE ID=:id');
                            $stmt5->execute(array(':img_3'=>$fitxer_imatge_3,':id'=>$row_max['MID']));
                            //pujada imatge al servidor
                            $dir_pujada = '../uploads/';
                            //Crear el directori si no existeix
                            if (!file_exists($dir_pujada)) {
                                mkdir($dir_pujada, 0755, true);
                            }
                            //Comprovar el tipus de fitxer
                            $extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_3']['tmp_name']));
                            if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                            } else {
                                //pujar el fitxer
                                $fitxer_pujada_3 = $dir_pujada . "IMG_3_" . $id_max . "_" . $_FILES['fitxer_3']['name'];
                                if (!move_uploaded_file($_FILES['fitxer_3']['tmp_name'], $fitxer_pujada_3)) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                                }
                            }
                        }		
                        //Inserció de la imatge_4 a la carpeta.
                        if ($_FILES['fitxer_4']['tmp_name'] != null) {
                            $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                            $stmt4->execute();
                            $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $fitxer_imatge_4 = "IMG_4_" . $row_max['MID'] . "_" . $_FILES['fitxer_4']['name'];
                            $stmt5 = $conn->prepare('UPDATE post SET Image_4=:img_4 WHERE ID=:id');
                            $stmt5->execute(array(':img_4'=>$fitxer_imatge_4,':id'=>$row_max['MID']));
                            //pujada imatge al servidor
                            $dir_pujada = '../uploads/';
                            //Crear el directori si no existeix
                            if (!file_exists($dir_pujada)) {
                                mkdir($dir_pujada, 0755, true);
                            }
                            //Comprovar el tipus de fitxer
                            $extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_4']['tmp_name']));
                            if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                            } else {
                                //pujar el fitxer
                                $fitxer_pujada_4 = $dir_pujada . "IMG_4_" . $id_max . "_" . $_FILES['fitxer_4']['name'];
                                if (!move_uploaded_file($_FILES['fitxer_4']['tmp_name'], $fitxer_pujada_4)) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                                }
                            }
                        }	
                        //Inserció de la imatge_5 a la carpeta.
                        if ($_FILES['fitxer_5']['tmp_name'] != null) {
                            $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                            $stmt4->execute();
                            $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $fitxer_imatge_5 = "IMG_5_" . $row_max['MID'] . "_" . $_FILES['fitxer_5']['name'];
                            $stmt5 = $conn->prepare('UPDATE post SET Image_5=:img_5 WHERE ID=:id');
                            $stmt5->execute(array(':img_5'=>$fitxer_imatge_5,':id'=>$row_max['MID']));
                            //pujada imatge al servidor
                            $dir_pujada = '../uploads/';
                            //Crear el directori si no existeix
                            if (!file_exists($dir_pujada)) {
                                mkdir($dir_pujada, 0755, true);
                            }
                            //Comprovar el tipus de fitxer
                            $extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_5']['tmp_name']));
                            if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                            } else {
                                //pujar el fitxer
                                $fitxer_pujada_5 = $dir_pujada . "IMG_5_" . $id_max . "_" . $_FILES['fitxer_5']['name'];
                                if (!move_uploaded_file($_FILES['fitxer_5']['tmp_name'], $fitxer_pujada_5)) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                                }
                            }
                        }	
                        //Inserció de la imatge_6 a la carpeta.
                        if ($_FILES['fitxer_6']['tmp_name'] != null) {
                            $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                            $stmt4->execute();
                            $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $fitxer_imatge_6 = "IMG_6_" . $row_max['MID'] . "_" . $_FILES['fitxer_6']['name'];
                            $stmt5 = $conn->prepare('UPDATE post SET Image_6=:img_6 WHERE ID=:id');
                            $stmt5->execute(array(':img_6'=>$fitxer_imatge_6,':id'=>$row_max['MID']));
                            //pujada imatge al servidor
                            $dir_pujada = '../uploads/';
                            //Crear el directori si no existeix
                            if (!file_exists($dir_pujada)) {
                                mkdir($dir_pujada, 0755, true);
                            }
                            //Comprovar el tipus de fitxer
                            $extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_6']['tmp_name']));
                            if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                            } else {
                                //pujar el fitxer
                                $fitxer_pujada_6 = $dir_pujada . "IMG_6_" . $id_max . "_" . $_FILES['fitxer_6']['name'];
                                if (!move_uploaded_file($_FILES['fitxer_6']['tmp_name'], $fitxer_pujada_6)) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                                }
                            }
                        }	
                        //Inserció de la imatge_7 a la carpeta.
                        if ($_FILES['fitxer_7']['tmp_name'] != null) {
                            $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                            $stmt4->execute();
                            $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $fitxer_imatge_7 = "IMG_7_" . $row_max['MID'] . "_" . $_FILES['fitxer_7']['name'];
                            $stmt5 = $conn->prepare('UPDATE post SET Image_7=:img_7 WHERE ID=:id');
                            $stmt5->execute(array(':img_7'=>$fitxer_imatge_7,':id'=>$row_max['MID']));
                            //pujada imatge al servidor
                            $dir_pujada = '../uploads/';
                            //Crear el directori si no existeix
                            if (!file_exists($dir_pujada)) {
                                mkdir($dir_pujada, 0755, true);
                            }
                            //Comprovar el tipus de fitxer
                            $extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_7']['tmp_name']));
                            if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                            } else {
                                //pujar el fitxer
                                $fitxer_pujada_7 = $dir_pujada . "IMG_7_" . $id_max . "_" . $_FILES['fitxer_7']['name'];
                                if (!move_uploaded_file($_FILES['fitxer_7']['tmp_name'], $fitxer_pujada_7)) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                                }
                            }
                        }	
                        //Inserció de la imatge_8 a la carpeta.
                        if ($_FILES['fitxer_8']['tmp_name'] != null) {
                            $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                            $stmt4->execute();
                            $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $fitxer_imatge_8 = "IMG_8_" . $row_max['MID'] . "_" . $_FILES['fitxer_8']['name'];
                            $stmt5 = $conn->prepare('UPDATE post SET Image_8=:img_8 WHERE ID=:id');
                            $stmt5->execute(array(':img_8'=>$fitxer_imatge_8,':id'=>$row_max['MID']));
                            //pujada imatge al servidor
                            $dir_pujada = '../uploads/';
                            //Crear el directori si no existeix
                            if (!file_exists($dir_pujada)) {
                                mkdir($dir_pujada, 0755, true);
                            }
                            //Comprovar el tipus de fitxer
                            $extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_8']['tmp_name']));
                            if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                            } else {
                                //pujar el fitxer
                                $fitxer_pujada_8 = $dir_pujada . "IMG_8_" . $id_max . "_" . $_FILES['fitxer_8']['name'];
                                if (!move_uploaded_file($_FILES['fitxer_8']['tmp_name'], $fitxer_pujada_8)) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                                }
                            }
                        }	
                        //Inserció de la imatge_9 a la carpeta.
                        if ($_FILES['fitxer_9']['tmp_name'] != null) {
                            $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                            $stmt4->execute();
                            $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $fitxer_imatge_9 = "IMG_9_" . $row_max['MID'] . "_" . $_FILES['fitxer_9']['name'];
                            $stmt5 = $conn->prepare('UPDATE post SET Image_9=:img_9 WHERE ID=:id');
                            $stmt5->execute(array(':img_9'=>$fitxer_imatge_9,':id'=>$row_max['MID']));
                            //pujada imatge al servidor
                            $dir_pujada = '../uploads/';
                            //Crear el directori si no existeix
                            if (!file_exists($dir_pujada)) {
                                mkdir($dir_pujada, 0755, true);
                            }
                            //Comprovar el tipus de fitxer
                            $extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_9']['tmp_name']));
                            if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                            } else {
                                //pujar el fitxer
                                $fitxer_pujada_9 = $dir_pujada . "IMG_9_" . $id_max . "_" . $_FILES['fitxer_9']['name'];
                                if (!move_uploaded_file($_FILES['fitxer_9']['tmp_name'], $fitxer_pujada_9)) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                                }
                            }
                        }	
                        //Inserció de la imatge_10 a la carpeta.
                        if ($_FILES['fitxer_10']['tmp_name'] != null) {
                            $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                            $stmt4->execute();
                            $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $fitxer_imatge_10 = "IMG_10_" . $row_max['MID'] . "_" . $_FILES['fitxer_10']['name'];
                            $stmt5 = $conn->prepare('UPDATE post SET Image_10=:img_10 WHERE ID=:id');
                            $stmt5->execute(array(':img_10'=>$fitxer_imatge_10,':id'=>$row_max['MID']));
                            //pujada imatge al servidor
                            $dir_pujada = '../uploads/';
                            //Crear el directori si no existeix
                            if (!file_exists($dir_pujada)) {
                                mkdir($dir_pujada, 0755, true);
                            }
                            //Comprovar el tipus de fitxer
                            $extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_10']['tmp_name']));
                            if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                            } else {
                                //pujar el fitxer
                                $fitxer_pujada_10 = $dir_pujada . "IMG_10_" . $id_max . "_" . $_FILES['fitxer_10']['name'];
                                if (!move_uploaded_file($_FILES['fitxer_10']['tmp_name'], $fitxer_pujada_10)) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                                }
                            }
                        }	
                        //Inserció de la imatge_11 a la carpeta.
                        if ($_FILES['fitxer_11']['tmp_name'] != null) {
                            $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                            $stmt4->execute();
                            $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $fitxer_imatge_11 = "IMG_11_" . $row_max['MID'] . "_" . $_FILES['fitxer_11']['name'];
                            $stmt5 = $conn->prepare('UPDATE post SET Image_11=:img_11 WHERE ID=:id');
                            $stmt5->execute(array(':img_11'=>$fitxer_imatge_11,':id'=>$row_max['MID']));
                            //pujada imatge al servidor
                            $dir_pujada = '../uploads/';
                            //Crear el directori si no existeix
                            if (!file_exists($dir_pujada)) {
                                mkdir($dir_pujada, 0755, true);
                            }
                            //Comprovar el tipus de fitxer
                            $extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_11']['tmp_name']));
                            if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                            } else {
                                //pujar el fitxer
                                $fitxer_pujada_11 = $dir_pujada . "IMG_11_" . $id_max . "_" . $_FILES['fitxer_11']['name'];
                                if (!move_uploaded_file($_FILES['fitxer_11']['tmp_name'], $fitxer_pujada_11)) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                                }
                            }
                        }	
                        //Inserció de la imatge_12 a la carpeta.
                        if ($_FILES['fitxer_12']['tmp_name'] != null) {
                            $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                            $stmt4->execute();
                            $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $fitxer_imatge_12 = "IMG_12_" . $row_max['MID'] . "_" . $_FILES['fitxer_12']['name'];
                            $stmt5 = $conn->prepare('UPDATE post SET Image_12=:img_12 WHERE ID=:id');
                            $stmt5->execute(array(':img_12'=>$fitxer_imatge_12,':id'=>$row_max['MID']));
                            //pujada imatge al servidor
                            $dir_pujada = '../uploads/';
                            //Crear el directori si no existeix
                            if (!file_exists($dir_pujada)) {
                                mkdir($dir_pujada, 0755, true);
                            }
                            //Comprovar el tipus de fitxer
                            $extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_12']['tmp_name']));
                            if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                            } else {
                                //pujar el fitxer
                                $fitxer_pujada_12 = $dir_pujada . "IMG_12_" . $id_max . "_" . $_FILES['fitxer_12']['name'];
                                if (!move_uploaded_file($_FILES['fitxer_12']['tmp_name'], $fitxer_pujada_12)) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                                }
                            }
                        }	
                        //Inserció de la imatge_13 a la carpeta.
                        if ($_FILES['fitxer_13']['tmp_name'] != null) {
                            $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                            $stmt4->execute();
                            $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $fitxer_imatge_13 = "IMG_13_" . $row_max['MID'] . "_" . $_FILES['fitxer_13']['name'];
                            $stmt5 = $conn->prepare('UPDATE post SET Image_13=:img_3 WHERE ID=:id');
                            $stmt5->execute(array(':img_13'=>$fitxer_imatge_13,':id'=>$row_max['MID']));
                            //pujada imatge al servidor
                            $dir_pujada = '../uploads/';
                            //Crear el directori si no existeix
                            if (!file_exists($dir_pujada)) {
                                mkdir($dir_pujada, 0755, true);
                            }
                            //Comprovar el tipus de fitxer
                            $extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_13']['tmp_name']));
                            if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                            } else {
                                //pujar el fitxer
                                $fitxer_pujada_13 = $dir_pujada . "IMG_13_" . $id_max . "_" . $_FILES['fitxer_13']['name'];
                                if (!move_uploaded_file($_FILES['fitxer_13']['tmp_name'], $fitxer_pujada_13)) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                                }
                            }
                        }	
                        //Inserció de la imatge_14 a la carpeta.
                        if ($_FILES['fitxer_14']['tmp_name'] != null) {
                            $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                            $stmt4->execute();
                            $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $fitxer_imatge_14 = "IMG_14_" . $row_max['MID'] . "_" . $_FILES['fitxer_14']['name'];
                            $stmt5 = $conn->prepare('UPDATE post SET Image_14=:img_14 WHERE ID=:id');
                            $stmt5->execute(array(':img_14'=>$fitxer_imatge_14,':id'=>$row_max['MID']));
                            //pujada imatge al servidor
                            $dir_pujada = '../uploads/';
                            //Crear el directori si no existeix
                            if (!file_exists($dir_pujada)) {
                                mkdir($dir_pujada, 0755, true);
                            }
                            //Comprovar el tipus de fitxer
                            $extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_14']['tmp_name']));
                            if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                            } else {
                                //pujar el fitxer
                                $fitxer_pujada_14 = $dir_pujada . "IMG_14_" . $id_max . "_" . $_FILES['fitxer_14']['name'];
                                if (!move_uploaded_file($_FILES['fitxer_14']['tmp_name'], $fitxer_pujada_14)) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                                }
                            }
                        }	
                        //Inserció de la imatge_15 a la carpeta.
                        if ($_FILES['fitxer_15']['tmp_name'] != null) {
                            $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                            $stmt4->execute();
                            $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $fitxer_imatge_15 = "IMG_15_" . $row_max['MID'] . "_" . $_FILES['fitxer_15']['name'];
                            $stmt5 = $conn->prepare('UPDATE post SET Image_15=:img_15 WHERE ID=:id');
                            $stmt5->execute(array(':img_15'=>$fitxer_imatge_15,':id'=>$row_max['MID']));
                            //pujada imatge al servidor
                            $dir_pujada = '../uploads/';
                            //Crear el directori si no existeix
                            if (!file_exists($dir_pujada)) {
                                mkdir($dir_pujada, 0755, true);
                            }
                            //Comprovar el tipus de fitxer
                            $extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_15']['tmp_name']));
                            if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                            } else {
                                //pujar el fitxer
                                $fitxer_pujada_15 = $dir_pujada . "IMG_15_" . $id_max . "_" . $_FILES['fitxer_15']['name'];
                                if (!move_uploaded_file($_FILES['fitxer_15']['tmp_name'], $fitxer_pujada_15)) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                                }
                            }
                        }	
                        //Inserció de la imatge_16 a la carpeta.
                        if ($_FILES['fitxer_16']['tmp_name'] != null) {
                            $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                            $stmt4->execute();
                            $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $fitxer_imatge_16 = "IMG_16_" . $row_max['MID'] . "_" . $_FILES['fitxer_16']['name'];
                            $stmt5 = $conn->prepare('UPDATE post SET Image_16=:img_16 WHERE ID=:id');
                            $stmt5->execute(array(':img_16'=>$fitxer_imatge_16,':id'=>$row_max['MID']));
                            //pujada imatge al servidor
                            $dir_pujada = '../uploads/';
                            //Crear el directori si no existeix
                            if (!file_exists($dir_pujada)) {
                                mkdir($dir_pujada, 0755, true);
                            }
                            //Comprovar el tipus de fitxer
                            $extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_16']['tmp_name']));
                            if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                            } else {
                                //pujar el fitxer
                                $fitxer_pujada_16 = $dir_pujada . "IMG_16_" . $id_max . "_" . $_FILES['fitxer_16']['name'];
                                if (!move_uploaded_file($_FILES['fitxer_16']['tmp_name'], $fitxer_pujada_16)) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                                }
                            }
                        }	
                        //Inserció de la imatge_17 a la carpeta.
                        if ($_FILES['fitxer_17']['tmp_name'] != null) {
                            $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                            $stmt4->execute();
                            $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $fitxer_imatge_17 = "IMG_17_" . $row_max['MID'] . "_" . $_FILES['fitxer_17']['name'];
                            $stmt5 = $conn->prepare('UPDATE post SET Image_17=:img_17 WHERE ID=:id');
                            $stmt5->execute(array(':img_17'=>$fitxer_imatge_17,':id'=>$row_max['MID']));
                            //pujada imatge al servidor
                            $dir_pujada = '../uploads/';
                            //Crear el directori si no existeix
                            if (!file_exists($dir_pujada)) {
                                mkdir($dir_pujada, 0755, true);
                            }
                            //Comprovar el tipus de fitxer
                            $extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_17']['tmp_name']));
                            if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                            } else {
                                //pujar el fitxer
                                $fitxer_pujada_17 = $dir_pujada . "IMG_17_" . $id_max . "_" . $_FILES['fitxer_17']['name'];
                                if (!move_uploaded_file($_FILES['fitxer_17']['tmp_name'], $fitxer_pujada_17)) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                                }
                            }
                        }	
                        //Inserció de la imatge_18 a la carpeta.
                        if ($_FILES['fitxer_18']['tmp_name'] != null) {
                            $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                            $stmt4->execute();
                            $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $fitxer_imatge_18 = "IMG_18_" . $row_max['MID'] . "_" . $_FILES['fitxer_18']['name'];
                            $stmt5 = $conn->prepare('UPDATE post SET Image_18=:img_18 WHERE ID=:id');
                            $stmt5->execute(array(':img_18'=>$fitxer_imatge_18,':id'=>$row_max['MID']));
                            //pujada imatge al servidor
                            $dir_pujada = '../uploads/';
                            //Crear el directori si no existeix
                            if (!file_exists($dir_pujada)) {
                                mkdir($dir_pujada, 0755, true);
                            }
                            //Comprovar el tipus de fitxer
                            $extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_18']['tmp_name']));
                            if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                            } else {
                                //pujar el fitxer
                                $fitxer_pujada_18 = $dir_pujada . "IMG_18_" . $id_max . "_" . $_FILES['fitxer_18']['name'];
                                if (!move_uploaded_file($_FILES['fitxer_18']['tmp_name'], $fitxer_pujada_18)) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                                }
                            }
                        }	
                        //Inserció de la imatge_19 a la carpeta.
                        if ($_FILES['fitxer_19']['tmp_name'] != null) {
                            $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                            $stmt4->execute();
                            $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $fitxer_imatge_19 = "IMG_19_" . $row_max['MID'] . "_" . $_FILES['fitxer_19']['name'];
                            $stmt5 = $conn->prepare('UPDATE post SET Image_19=:img_19 WHERE ID=:id');
                            $stmt5->execute(array(':img_19'=>$fitxer_imatge_19,':id'=>$row_max['MID']));
                            //pujada imatge al servidor
                            $dir_pujada = '../uploads/';
                            //Crear el directori si no existeix
                            if (!file_exists($dir_pujada)) {
                                mkdir($dir_pujada, 0755, true);
                            }
                            //Comprovar el tipus de fitxer
                            $extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_19']['tmp_name']));
                            if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                            } else {
                                //pujar el fitxer
                                $fitxer_pujada_19 = $dir_pujada . "IMG_19_" . $id_max . "_" . $_FILES['fitxer_19']['name'];
                                if (!move_uploaded_file($_FILES['fitxer_19']['tmp_name'], $fitxer_pujada_19)) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                                }
                            }
                        }	
                        //Inserció de la imatge_20 a la carpeta.
                        if ($_FILES['fitxer_20']['tmp_name'] != null) {
                            $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                            $stmt4->execute();
                            $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $fitxer_imatge_20 = "IMG_20_" . $row_max['MID'] . "_" . $_FILES['fitxer_20']['name'];
                            $stmt5 = $conn->prepare('UPDATE post SET Image_20=:img_20 WHERE ID=:id');
                            $stmt5->execute(array(':img_20'=>$fitxer_imatge_20,':id'=>$row_max['MID']));
                            //pujada imatge al servidor
                            $dir_pujada = '../uploads/';
                            //Crear el directori si no existeix
                            if (!file_exists($dir_pujada)) {
                                mkdir($dir_pujada, 0755, true);
                            }
                            //Comprovar el tipus de fitxer
                            $extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_20']['tmp_name']));
                            if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                            } else {
                                //pujar el fitxer
                                $fitxer_pujada_20 = $dir_pujada . "IMG_20_" . $id_max . "_" . $_FILES['fitxer_20']['name'];
                                if (!move_uploaded_file($_FILES['fitxer_20']['tmp_name'], $fitxer_pujada_20)) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                                }
                            }
                        }	
                        //Inserció de la imatge_21 a la carpeta.
                        if ($_FILES['fitxer_21']['tmp_name'] != null) {
                            $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                            $stmt4->execute();
                            $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $fitxer_imatge_21 = "IMG_21_" . $row_max['MID'] . "_" . $_FILES['fitxer_21']['name'];
                            $stmt5 = $conn->prepare('UPDATE post SET Image_21=:img_21 WHERE ID=:id');
                            $stmt5->execute(array(':img_21'=>$fitxer_imatge_21,':id'=>$row_max['MID']));
                            //pujada imatge al servidor
                            $dir_pujada = '../uploads/';
                            //Crear el directori si no existeix
                            if (!file_exists($dir_pujada)) {
                                mkdir($dir_pujada, 0755, true);
                            }
                            //Comprovar el tipus de fitxer
                            $extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_21']['tmp_name']));
                            if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                            } else {
                                //pujar el fitxer
                                $fitxer_pujada_21 = $dir_pujada . "IMG_21_" . $id_max . "_" . $_FILES['fitxer_21']['name'];
                                if (!move_uploaded_file($_FILES['fitxer_21']['tmp_name'], $fitxer_pujada_21)) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                                }
                            }
                        }	
                        //Inserció de la imatge_22 a la carpeta.
                        if ($_FILES['fitxer_22']['tmp_name'] != null) {
                            $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                            $stmt4->execute();
                            $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $fitxer_imatge_22 = "IMG_22_" . $row_max['MID'] . "_" . $_FILES['fitxer_22']['name'];
                            $stmt5 = $conn->prepare('UPDATE post SET Image_22=:img_22 WHERE ID=:id');
                            $stmt5->execute(array(':img_22'=>$fitxer_imatge_22,':id'=>$row_max['MID']));
                            //pujada imatge al servidor
                            $dir_pujada = '../uploads/';
                            //Crear el directori si no existeix
                            if (!file_exists($dir_pujada)) {
                                mkdir($dir_pujada, 0755, true);
                            }
                            //Comprovar el tipus de fitxer
                            $extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_22']['tmp_name']));
                            if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                            } else {
                                //pujar el fitxer
                                $fitxer_pujada_22 = $dir_pujada . "IMG_22_" . $id_max . "_" . $_FILES['fitxer_22']['name'];
                                if (!move_uploaded_file($_FILES['fitxer_22']['tmp_name'], $fitxer_pujada_22)) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                                }
                            }
                        }	
                        //Inserció de la imatge_23 a la carpeta.
                        if ($_FILES['fitxer_23']['tmp_name'] != null) {
                            $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                            $stmt4->execute();
                            $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $fitxer_imatge_23 = "IMG_23_" . $row_max['MID'] . "_" . $_FILES['fitxer_23']['name'];
                            $stmt5 = $conn->prepare('UPDATE post SET Image_23=:img_23 WHERE ID=:id');
                            $stmt5->execute(array(':img_23'=>$fitxer_imatge_23,':id'=>$row_max['MID']));
                            //pujada imatge al servidor
                            $dir_pujada = '../uploads/';
                            //Crear el directori si no existeix
                            if (!file_exists($dir_pujada)) {
                                mkdir($dir_pujada, 0755, true);
                            }
                            //Comprovar el tipus de fitxer
                            $extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_23']['tmp_name']));
                            if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                            } else {
                                //pujar el fitxer
                                $fitxer_pujada_23 = $dir_pujada . "IMG_23_" . $id_max . "_" . $_FILES['fitxer_23']['name'];
                                if (!move_uploaded_file($_FILES['fitxer_23']['tmp_name'], $fitxer_pujada_23)) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                                }
                            }
                        }	
                        //Inserció de la imatge_24 a la carpeta.
                        if ($_FILES['fitxer_24']['tmp_name'] != null) {
                            $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                            $stmt4->execute();
                            $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $fitxer_imatge_24 = "IMG_24_" . $row_max['MID'] . "_" . $_FILES['fitxer_24']['name'];
                            $stmt5 = $conn->prepare('UPDATE post SET Image_24=:img_24 WHERE ID=:id');
                            $stmt5->execute(array(':img_24'=>$fitxer_imatge_24,':id'=>$row_max['MID']));
                            //pujada imatge al servidor
                            $dir_pujada = '../uploads/';
                            //Crear el directori si no existeix
                            if (!file_exists($dir_pujada)) {
                                mkdir($dir_pujada, 0755, true);
                            }
                            //Comprovar el tipus de fitxer
                            $extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_24']['tmp_name']));
                            if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                            } else {
                                //pujar el fitxer
                                $fitxer_pujada_24 = $dir_pujada . "IMG_24_" . $id_max . "_" . $_FILES['fitxer_24']['name'];
                                if (!move_uploaded_file($_FILES['fitxer_24']['tmp_name'], $fitxer_pujada_24)) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                                }
                            }
                        }	
                        //Inserció de la imatge_25 a la carpeta.
                        if ($_FILES['fitxer_25']['tmp_name'] != null) {
                            $stmt4 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                            $stmt4->execute();
                            $row_max = $stmt4->fetch(PDO::FETCH_ASSOC);
                            $fitxer_imatge_25 = "IMG_25_" . $row_max['MID'] . "_" . $_FILES['fitxer_25']['name'];
                            $stmt5 = $conn->prepare('UPDATE post SET Image_25=:img_25 WHERE ID=:id');
                            $stmt5->execute(array(':img_25'=>$fitxer_imatge_25,':id'=>$row_max['MID']));
                            //pujada imatge al servidor
                            $dir_pujada = '../uploads/';
                            //Crear el directori si no existeix
                            if (!file_exists($dir_pujada)) {
                                mkdir($dir_pujada, 0755, true);
                            }
                            //Comprovar el tipus de fitxer
                            $extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_25']['tmp_name']));
                            if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                            } else {
                                //pujar el fitxer
                                $fitxer_pujada_25 = $dir_pujada . "IMG_25_" . $id_max . "_" . $_FILES['fitxer_25']['name'];
                                if (!move_uploaded_file($_FILES['fitxer_25']['tmp_name'], $fitxer_pujada_25)) {
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
			print "<form action=\"\" method=\"post\" enctype=\"multipart/form-data\">";
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
            print "<input type=\"text\" name=\"title\" class=\"form-control\" placeholder=\"Enter the title of the post\">";
            print "</div>";
			
			//Input Description
			print "<div class=\"form-group $error\">";
            print "<label>Post Description</label>";
			print "<textarea id=\"mytextarea\" name=\"description\" class=\"form-control\" rows=\"10\"></textarea>";
            print "</div>";		
		
		    //Input Date
			print "<div class=\"form-group $error\">";
            print "<label>Post Date</label>";
            print "<input type=\"Date\" name=\"Data\" class=\"form-control\" placeholder=\"Enter the date of the post (9999/99/99)\">";		
			print "</div>";
			
			////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			
			print "</div>";
			print "</div>";
			print "</div>"; 	
			print "</div>";

			////////////////////////////////////////////////////////////////////////////////////////////////////////ohohohohoh//////////////////////

            if(isset($_GET['sec']) && isset($_GET['sub']) && $_GET['sub']=='new'){							
			?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Add Images</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <form action="" method="post">
                                <table class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
                                    <thead>
                                    <tr>
									    <th width="5%" align="center"></th>
                                        <th width="45%" align="center">Upload Images</th>
                                        <th width="50%" align="center">Image Caption</th>									
                                    </tr>
                                    </thead>
                                    <tbody>								
				
                                    <?php //CONSULTA DE SELECCIO DEL POST A VEURE///////////////////////////////////////////
									///IMG_1																												
									print "<tr>";
									print "<td align='center'> 1 </td>";	
                                    print "<td>";	
                                    
                                    
									//print "<input type='file' name=\"fitxer_1\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
        
                    
                    
                                    print "</td>";	
								    print "<td>";
                                    print "<textarea id=\"mytextarea\" name=\"caption_1\" class=\"form-control\" rows=\"1\"></textarea>";									
									print "</td>";									
									print "</tr>";
									
							        ///IMG_2
									print "<tr>";
									print "<td align='center'> 2 </td>";	
									print "<td>";									
									print "<input type='file' name=\"fitxer_2\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
									print "</td>";	
								    print "<td>";
                                    print "<textarea id=\"mytextarea\" name=\"caption_2\" class=\"form-control\" rows=\"1\"></textarea>";									
									print "</td>";									
									print "</tr>";
																	
							  	    print "</tbody>"; 						        
					                print "</table>";
									?>
                            </div>
                            <!-- /.table-responsive -->
		<?php	

			////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			
            print "<button type=\"submit\" name=\"alta\" value=\"alta\" class=\"btn btn-default btn-outline btn-circle btn-lg\"><i class=\"fa fa-check\"></i></button>";
		    print "<button type=\"reset\" name=\"cancel\" value=\"cancel\"onclick=\"location.href='?sec=post&sub=lst'\" class=\"btn btn-default btn-outline btn-circle btn-lg\"><i class=\"fa fa-times\"></i></button>";	
            print "</form>";
			print "</div>";
			print "</div>";
			print "</div>"; 	
			print "</div>";
			}
        }		
		?>	
    </div>
    <!-- /.container-fluid -->
<?php //DESCONNEXIÓ DE LA BASE DE DADES
$conn=null;
?>