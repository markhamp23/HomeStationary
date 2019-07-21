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
                            if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
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
									print "<input type='file' name=\"fitxer_1\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
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
									
							        ///IMG_3
									print "<tr>";
									print "<td align='center'> 3 </td>";	
									print "<td>";									
									print "<input type='file' name=\"fitxer_3\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
									print "</td>";	
								    print "<td>";
                                    print "<textarea id=\"mytextarea\" name=\"caption_3\" class=\"form-control\" rows=\"1\"></textarea>";									
									print "</td>";									
									print "</tr>";
									
							        ///IMG_4
									print "<tr>";
									print "<td align='center'> 4 </td>";	
									print "<td>";									
									print "<input type='file' name=\"fitxer_4\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
									print "</td>";	
								    print "<td>";
                                    print "<textarea id=\"mytextarea\" name=\"caption_4\" class=\"form-control\" rows=\"1\"></textarea>";									
									print "</td>";									
									print "</tr>";

							        ///IMG_5
									print "<tr>";
									print "<td align='center'> 5 </td>";	
									print "<td>";									
									print "<input type='file' name=\"fitxer_5\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
									print "</td>";	
								    print "<td>";
                                    print "<textarea id=\"mytextarea\" name=\"caption_5\" class=\"form-control\" rows=\"1\"></textarea>";									
									print "</td>";									
									print "</tr>";

							        ///IMG_6
									print "<tr>";
									print "<td align='center'> 6 </td>";	
									print "<td>";									
									print "<input type='file' name=\"fitxer_6\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
									print "</td>";	
								    print "<td>";
                                    print "<textarea id=\"mytextarea\" name=\"caption_6\" class=\"form-control\" rows=\"1\"></textarea>";									
									print "</td>";									
									print "</tr>";

							        ///IMG_7
									print "<tr>";
									print "<td align='center'> 7 </td>";	
									print "<td>";									
									print "<input type='file' name=\"fitxer_7\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
									print "</td>";	
								    print "<td>";
                                    print "<textarea id=\"mytextarea\" name=\"caption_7\" class=\"form-control\" rows=\"1\"></textarea>";									
									print "</td>";									
									print "</tr>";

							        ///IMG_8
									print "<tr>";
									print "<td align='center'> 8 </td>";	
									print "<td>";									
									print "<input type='file' name=\"fitxer_8\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
									print "</td>";	
								    print "<td>";
                                    print "<textarea id=\"mytextarea\" name=\"caption_8\" class=\"form-control\" rows=\"1\"></textarea>";									
									print "</td>";									
									print "</tr>";

							        ///IMG_9
									print "<tr>";
									print "<td align='center'> 9 </td>";	
									print "<td>";									
									print "<input type='file' name=\"fitxer_9\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
									print "</td>";	
								    print "<td>";
                                    print "<textarea id=\"mytextarea\" name=\"caption_9\" class=\"form-control\" rows=\"1\"></textarea>";									
									print "</td>";									
									print "</tr>";

							        ///IMG_10
									print "<tr>";
									print "<td align='center'> 10 </td>";	
									print "<td>";									
									print "<input type='file' name=\"fitxer_10\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
									print "</td>";	
								    print "<td>";
                                    print "<textarea id=\"mytextarea\" name=\"caption_10\" class=\"form-control\" rows=\"1\"></textarea>";									
									print "</td>";									
									print "</tr>";

							        ///IMG_11
									print "<tr>";
									print "<td align='center'> 11 </td>";	
									print "<td>";									
									print "<input type='file' name=\"fitxer_11\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
									print "</td>";	
								    print "<td>";
                                    print "<textarea id=\"mytextarea\" name=\"caption_11\" class=\"form-control\" rows=\"1\"></textarea>";									
									print "</td>";									
									print "</tr>";

							        ///IMG_12
									print "<tr>";
									print "<td align='center'> 12 </td>";	
									print "<td>";									
									print "<input type='file' name=\"fitxer_12\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
									print "</td>";	
								    print "<td>";
                                    print "<textarea id=\"mytextarea\" name=\"caption_12\" class=\"form-control\" rows=\"1\"></textarea>";									
									print "</td>";									
									print "</tr>";

							        ///IMG_13
									print "<tr>";
									print "<td align='center'> 13 </td>";	
									print "<td>";									
									print "<input type='file' name=\"fitxer_13\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
									print "</td>";	
								    print "<td>";
                                    print "<textarea id=\"mytextarea\" name=\"caption_13\" class=\"form-control\" rows=\"1\"></textarea>";									
									print "</td>";									
									print "</tr>";

							        ///IMG_14
									print "<tr>";
									print "<td align='center'> 14 </td>";	
									print "<td>";									
									print "<input type='file' name=\"fitxer_14\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
									print "</td>";	
								    print "<td>";
                                    print "<textarea id=\"mytextarea\" name=\"caption_14\" class=\"form-control\" rows=\"1\"></textarea>";									
									print "</td>";									
									print "</tr>";

							        ///IMG_15
									print "<tr>";
									print "<td align='center'> 15 </td>";	
									print "<td>";									
									print "<input type='file' name=\"fitxer_15\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
									print "</td>";	
								    print "<td>";
                                    print "<textarea id=\"mytextarea\" name=\"caption_15\" class=\"form-control\" rows=\"1\"></textarea>";									
									print "</td>";									
									print "</tr>";

							        ///IMG_16
									print "<tr>";
									print "<td align='center'> 16 </td>";	
									print "<td>";									
									print "<input type='file' name=\"fitxer_16\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
									print "</td>";	
								    print "<td>";
                                    print "<textarea id=\"mytextarea\" name=\"caption_16\" class=\"form-control\" rows=\"1\"></textarea>";									
									print "</td>";									
									print "</tr>";

							        ///IMG_17
									print "<tr>";
									print "<td align='center'> 17 </td>";	
									print "<td>";									
									print "<input type='file' name=\"fitxer_17\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
									print "</td>";	
								    print "<td>";
                                    print "<textarea id=\"mytextarea\" name=\"caption_17\" class=\"form-control\" rows=\"1\"></textarea>";									
									print "</td>";									
									print "</tr>";

							        ///IMG_18
									print "<tr>";
									print "<td align='center'> 18 </td>";	
									print "<td>";									
									print "<input type='file' name=\"fitxer_18\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
									print "</td>";	
								    print "<td>";
                                    print "<textarea id=\"mytextarea\" name=\"caption_18\" class=\"form-control\" rows=\"1\"></textarea>";									
									print "</td>";									
									print "</tr>";

							        ///IMG_19
									print "<tr>";
									print "<td align='center'> 19 </td>";	
									print "<td>";									
									print "<input type='file' name=\"fitxer_19\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
									print "</td>";	
								    print "<td>";
                                    print "<textarea id=\"mytextarea\" name=\"caption_19\" class=\"form-control\" rows=\"1\"></textarea>";									
									print "</td>";									
									print "</tr>";

							        ///IMG_20
									print "<tr>";
									print "<td align='center'> 20 </td>";	
									print "<td>";									
									print "<input type='file' name=\"fitxer_20\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
									print "</td>";	
								    print "<td>";
                                    print "<textarea id=\"mytextarea\" name=\"caption_20\" class=\"form-control\" rows=\"1\"></textarea>";									
									print "</td>";									
									print "</tr>";

							        ///IMG_21
									print "<tr>";
									print "<td align='center'> 21 </td>";	
									print "<td>";									
									print "<input type='file' name=\"fitxer_21\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
									print "</td>";	
								    print "<td>";
                                    print "<textarea id=\"mytextarea\" name=\"caption_21\" class=\"form-control\" rows=\"1\"></textarea>";									
									print "</td>";									
									print "</tr>";

							        ///IMG_22
									print "<tr>";
									print "<td align='center'> 22 </td>";	
									print "<td>";									
									print "<input type='file' name=\"fitxer_22\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
									print "</td>";	
								    print "<td>";
                                    print "<textarea id=\"mytextarea\" name=\"caption_22\" class=\"form-control\" rows=\"1\"></textarea>";									
									print "</td>";									
									print "</tr>";

							        ///IMG_23
									print "<tr>";
									print "<td align='center'> 23 </td>";	
									print "<td>";									
									print "<input type='file' name=\"fitxer_23\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
									print "</td>";	
								    print "<td>";
                                    print "<textarea id=\"mytextarea\" name=\"caption_23\" class=\"form-control\" rows=\"1\"></textarea>";									
									print "</td>";									
									print "</tr>";

							        ///IMG_24
									print "<tr>";
									print "<td align='center'> 24 </td>";	
									print "<td>";									
									print "<input type='file' name=\"fitxer_24\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
									print "</td>";	
								    print "<td>";
                                    print "<textarea id=\"mytextarea\" name=\"caption_24\" class=\"form-control\" rows=\"1\"></textarea>";									
									print "</td>";									
									print "</tr>";

							        ///IMG_25
									print "<tr>";
									print "<td align='center'> 25 </td>";	
									print "<td>";									
									print "<input type='file' name=\"fitxer_25\" class='file' data-iconName='glyphicon glyphicon-inbox' data-show-preview='false' data-show-upload='false'>";
									print "</td>";	
								    print "<td>";
                                    print "<textarea id=\"mytextarea\" name=\"caption_25\" class=\"form-control\" rows=\"1\"></textarea>";									
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
        else{
            //LLISTAR ELEMENTS
            if(isset($_POST['ver']) && !empty($_POST['ver'])){
				
                $stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
                $stmt->execute(array(':id'=>$_POST['ver']));
                $row=$stmt->fetch(PDO::FETCH_ASSOC);				
				
			?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Post Title <?php Print "$row[Title]"?></div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <form action="" method="post">
                                <table class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
                                    <thead>
                                    <tr>
									    <th width="5%"></th>
                                        <th width="20%">Post Image</th>
                                        <th width="60%">Post Caption</th>
                                        <th width="15%">Post Date</th>										
                                    </tr>
                                    </thead>
                                    <tbody>								
				
                                    <?php //CONSULTA DE SELECCIO DEL POST A VEURE///////////////////////////////////////////
									///IMG_1																												
									print "<tr>";
									print "<td align='center'> 1 </td>";	
									print "<td>";									
									print "<figure>";
									print "<div class=\"img-responsive, Thumb-Box\" style='text-align: center;'>";
									if (!empty($row['Image_1'])) {
										print "<img src='../uploads/" . $row['Image_1'] . "' alt='foto' width='25px' height='25px' style=\"border:1px solid #ccc\">";
									} else {
										print "<img src='./dist/img/noimage.png' alt='foto' width='25px' height='25px'>";
									}
									print "</div>";
									print "</figure>";					
									print "</td>";	
									if (!empty($row['Caption_1'])) {
										print "<td>".$row['Caption_1']."</td>";      
									} else {
										print "<td>Not Caption</td>";
									}									
									print "<td>".ToDate($row['Data'])."</td>";
									print "</tr>";
									
							        ///IMG_2
									print "<tr>";
									print "<td align='center'> 2 </td>";	
									print "<td>";									
									print "<figure>";
									print "<div class=\"img-responsive, Thumb-Box\" style='text-align: center;'>";
									if (!empty($row['Image_2'])) {
										print "<img src='../uploads/" . $row['Image_2'] . "' alt='foto' width='25px' height='25px' style=\"border:1px solid #ccc\">";
									} else {
										print "<img src='./dist/img/noimage.png' alt='foto' width='25px' height='25px'>";
									}
									print "</div>";
									print "</figure>";									
									print "</td>";	
									if (!empty($row['Caption_2'])) {
										print "<td>".$row['Caption_2']."</td>";      
									} else {
										print "<td>Not Caption</td>";
									}									
									print "<td>".ToDate($row['Data'])."</td>";
									print "</tr>";
									
							        ///IMG_3
									print "<tr>";
									print "<td align='center'> 3 </td>";	
									print "<td>";									
									print "<figure>";
									print "<div class=\"img-responsive, Thumb-Box\" style='text-align: center;'>";
									if (!empty($row['Image_3'])) {
										print "<img src='../uploads/" . $row['Image_3'] . "' alt='foto' width='25px' height='25px' style=\"border:1px solid #ccc\">";
									} else {
										print "<img src='./dist/img/noimage.png' alt='foto' width='25px' height='25px'>";
									}
									print "</div>";
									print "</figure>";									
									print "</td>";	
									if (!empty($row['Caption_3'])) {
										print "<td>".$row['Caption_3']."</td>";      
									} else {
										print "<td>Not Caption</td>";
									}									
									print "<td>".ToDate($row['Data'])."</td>";
									print "</tr>";	
									
							        ///IMG_4
									print "<tr>";
									print "<td align='center'> 4 </td>";	
									print "<td>";									
									print "<figure>";
									print "<div class=\"img-responsive, Thumb-Box\" style='text-align: center;'>";
									if (!empty($row['Image_4'])) {
										print "<img src='../uploads/" . $row['Image_4'] . "' alt='foto' width='25px' height='25px' style=\"border:1px solid #ccc\">";
									} else {
										print "<img src='./dist/img/noimage.png' alt='foto' width='25px' height='25px'>";
									}
									print "</div>";
									print "</figure>";									
									print "</td>";	
									if (!empty($row['Caption_4'])) {
										print "<td>".$row['Caption_4']."</td>";      
									} else {
										print "<td>Not Caption</td>";
									}									
									print "<td>".ToDate($row['Data'])."</td>";
									print "</tr>";									
									
							        ///IMG_5
									print "<tr>";
									print "<td align='center'> 5 </td>";	
									print "<td>";									
									print "<figure>";
									print "<div class=\"img-responsive, Thumb-Box\" style='text-align: center;'>";
									if (!empty($row['Image_5'])) {
										print "<img src='../uploads/" . $row['Image_5'] . "' alt='foto' width='25px' height='25px' style=\"border:1px solid #ccc\">";
									} else {
										print "<img src='./dist/img/noimage.png' alt='foto' width='25px' height='25px'>";
									}
									print "</div>";
									print "</figure>";									
									print "</td>";	
									if (!empty($row['Caption_5'])) {
										print "<td>".$row['Caption_5']."</td>";      
									} else {
										print "<td>Not Caption</td>";
									}									
									print "<td>".ToDate($row['Data'])."</td>";
									print "</tr>";										
									
							        ///IMG_6
									print "<tr>";
									print "<td align='center'> 6 </td>";	
									print "<td>";									
									print "<figure>";
									print "<div class=\"img-responsive, Thumb-Box\" style='text-align: center;'>";
									if (!empty($row['Image_6'])) {
										print "<img src='../uploads/" . $row['Image_6'] . "' alt='foto' width='25px' height='25px' style=\"border:1px solid #ccc\">";
									} else {
										print "<img src='./dist/img/noimage.png' alt='foto' width='25px' height='25px'>";
									}
									print "</div>";
									print "</figure>";									
									print "</td>";	
									if (!empty($row['Caption_6'])) {
										print "<td>".$row['Caption_6']."</td>";      
									} else {
										print "<td>Not Caption</td>";
									}									
									print "<td>".ToDate($row['Data'])."</td>";
									print "</tr>";										
									
									///IMG_7
									print "<tr>";
									print "<td align='center'> 7 </td>";	
									print "<td>";									
									print "<figure>";
									print "<div class=\"img-responsive, Thumb-Box\" style='text-align: center;'>";
									if (!empty($row['Image_7'])) {
										print "<img src='../uploads/" . $row['Image_7'] . "' alt='foto' width='25px' height='25px' style=\"border:1px solid #ccc\">";
									} else {
										print "<img src='./dist/img/noimage.png' alt='foto' width='25px' height='25px'>";
									}
									print "</div>";
									print "</figure>";									
									print "</td>";	
									if (!empty($row['Caption_7'])) {
										print "<td>".$row['Caption_7']."</td>";      
									} else {
										print "<td>Not Caption</td>";
									}									
									print "<td>".ToDate($row['Data'])."</td>";
									print "</tr>";	
									
									///IMG_8
									print "<tr>";
									print "<td align='center'> 8 </td>";	
									print "<td>";									
									print "<figure>";
									print "<div class=\"img-responsive, Thumb-Box\" style='text-align: center;'>";
									if (!empty($row['Image_8'])) {
										print "<img src='../uploads/" . $row['Image_8'] . "' alt='foto' width='25px' height='25px' style=\"border:1px solid #ccc\">";
									} else {
										print "<img src='./dist/img/noimage.png' alt='foto' width='25px' height='25px'>";
									}
									print "</div>";
									print "</figure>";								
									print "</td>";	
									if (!empty($row['Caption_8'])) {
										print "<td>".$row['Caption_8']."</td>";      
									} else {
										print "<td>Not Caption</td>";
									}									
									print "<td>".ToDate($row['Data'])."</td>";
									print "</tr>";										
									
									///IMG_9
									print "<tr>";
									print "<td align='center'> 9 </td>";	
									print "<td>";									
									print "<figure>";
									print "<div class=\"img-responsive, Thumb-Box\" style='text-align: center;'>";
									if (!empty($row['Image_9'])) {
										print "<img src='../uploads/" . $row['Image_9'] . "' alt='foto' width='25px' height='25px' style=\"border:1px solid #ccc\">";
									} else {
										print "<img src='./dist/img/noimage.png' alt='foto' width='25px' height='25px'>";
									}
									print "</div>";
									print "</figure>";									
									print "</td>";	
									if (!empty($row['Caption_9'])) {
										print "<td>".$row['Caption_9']."</td>";      
									} else {
										print "<td>Not Caption</td>";
									}									
									print "<td>".ToDate($row['Data'])."</td>";
									print "</tr>";	
									
									///IMG_10
									print "<tr>";
									print "<td align='center'> 10 </td>";	
									print "<td>";									
									print "<figure>";
									print "<div class=\"img-responsive, Thumb-Box\" style='text-align: center;'>";
									if (!empty($row['Image_10'])) {
										print "<img src='../uploads/" . $row['Image_10'] . "' alt='foto' width='25px' height='25px' style=\"border:1px solid #ccc\">";
									} else {
										print "<img src='./dist/img/noimage.png' alt='foto' width='25px' height='25px'>";
									}
									print "</div>";
									print "</figure>";								
									print "</td>";	
									if (!empty($row['Caption_10'])) {
										print "<td>".$row['Caption_10']."</td>";      
									} else {
										print "<td>Not Caption</td>";
									}									
									print "<td>".ToDate($row['Data'])."</td>";
									print "</tr>";	
																												
									///IMG_11
									print "<tr>";
									print "<td align='center'> 11 </td>";	
									print "<td>";									
									print "<figure>";
									print "<div class=\"img-responsive, Thumb-Box\" style='text-align: center;'>";
									if (!empty($row['Image_11'])) {
										print "<img src='../uploads/" . $row['Image_11'] . "' alt='foto' width='25px' height='25px' style=\"border:1px solid #ccc\">";
									} else {
										print "<img src='./dist/img/noimage.png' alt='foto' width='25px' height='25px'>";
									}
									print "</div>";
									print "</figure>";								
									print "</td>";	
									if (!empty($row['Caption_11'])) {
										print "<td>".$row['Caption_11']."</td>";      
									} else {
										print "<td>Not Caption</td>";
									}									
									print "<td>".ToDate($row['Data'])."</td>";
									print "</tr>";				
			
									///IMG_12
									print "<tr>";
									print "<td align='center'> 12 </td>";	
									print "<td>";									
									print "<figure>";
									print "<div class=\"img-responsive, Thumb-Box\" style='text-align: center;'>";
									if (!empty($row['Image_12'])) {
										print "<img src='../uploads/" . $row['Image_12'] . "' alt='foto' width='25px' height='25px' style=\"border:1px solid #ccc\">";
									} else {
										print "<img src='./dist/img/noimage.png' alt='foto' width='25px' height='25px'>";
									}
									print "</div>";
									print "</figure>";									
									print "</td>";	
									if (!empty($row['Caption_12'])) {
										print "<td>".$row['Caption_12']."</td>";      
									} else {
										print "<td>Not Caption</td>";
									}									
									print "<td>".ToDate($row['Data'])."</td>";
									print "</tr>";										
									
									///IMG_13
									print "<tr>";
									print "<td align='center'> 13 </td>";	
									print "<td>";									
									print "<figure>";
									print "<div class=\"img-responsive, Thumb-Box\" style='text-align: center;'>";
									if (!empty($row['Image_13'])) {
										print "<img src='../uploads/" . $row['Image_13'] . "' alt='foto' width='25px' height='25px' style=\"border:1px solid #ccc\">";
									} else {
										print "<img src='./dist/img/noimage.png' alt='foto' width='25px' height='25px'>";
									}
									print "</div>";
									print "</figure>";									
									print "</td>";	
									if (!empty($row['Caption_13'])) {
										print "<td>".$row['Caption_13']."</td>";      
									} else {
										print "<td>Not Caption</td>";
									}									
									print "<td>".ToDate($row['Data'])."</td>";
									print "</tr>";										
									
									///IMG_14
									print "<tr>";
									print "<td align='center'> 14 </td>";	
									print "<td>";									
									print "<figure>";
									print "<div class=\"img-responsive, Thumb-Box\" style='text-align: center;'>";
									if (!empty($row['Image_14'])) {
										print "<img src='../uploads/" . $row['Image_14'] . "' alt='foto' width='25px' height='25px' style=\"border:1px solid #ccc\">";
									} else {
										print "<img src='./dist/img/noimage.png' alt='foto' width='25px' height='25px'>";
									}
									print "</div>";
									print "</figure>";									
									print "</td>";	
									if (!empty($row['Caption_14'])) {
										print "<td>".$row['Caption_14']."</td>";      
									} else {
										print "<td>Not Caption</td>";
									}									
									print "<td>".ToDate($row['Data'])."</td>";
									print "</tr>";										
									
									///IMG_15
									print "<tr>";
									print "<td align='center'> 15 </td>";	
									print "<td>";									
									print "<figure>";
									print "<div class=\"img-responsive, Thumb-Box\" style='text-align: center;'>";
									if (!empty($row['Image_15'])) {
										print "<img src='../uploads/" . $row['Image_15'] . "' alt='foto' width='25px' height='25px' style=\"border:1px solid #ccc\">";
									} else {
										print "<img src='./dist/img/noimage.png' alt='foto' width='25px' height='25px'>";
									}
									print "</div>";
									print "</figure>";									
									print "</td>";	
									if (!empty($row['Caption_15'])) {
										print "<td>".$row['Caption_15']."</td>";      
									} else {
										print "<td>Not Caption</td>";
									}									
									print "<td>".ToDate($row['Data'])."</td>";
									print "</tr>";										
									
									///IMG_16
									print "<tr>";
									print "<td align='center'> 16 </td>";	
									print "<td>";									
									print "<figure>";
									print "<div class=\"img-responsive, Thumb-Box\" style='text-align: center;'>";
									if (!empty($row['Image_16'])) {
										print "<img src='../uploads/" . $row['Image_16'] . "' alt='foto' width='25px' height='25px' style=\"border:1px solid #ccc\">";
									} else {
										print "<img src='./dist/img/noimage.png' alt='foto' width='25px' height='25px'>";
									}
									print "</div>";
									print "</figure>";								
									print "</td>";	
									if (!empty($row['Caption_16'])) {
										print "<td>".$row['Caption_16']."</td>";      
									} else {
										print "<td>Not Caption</td>";
									}									
									print "<td>".ToDate($row['Data'])."</td>";
									print "</tr>";										
									
									///IMG_17
									print "<tr>";
									print "<td align='center'> 17 </td>";	
									print "<td>";									
									print "<figure>";
									print "<div class=\"img-responsive, Thumb-Box\" style='text-align: center;'>";
									if (!empty($row['Image_17'])) {
										print "<img src='../uploads/" . $row['Image_17'] . "' alt='foto' width='25px' height='25px' style=\"border:1px solid #ccc\">";
									} else {
										print "<img src='./dist/img/noimage.png' alt='foto' width='25px' height='25px'>";
									}
									print "</div>";
									print "</figure>";									
									print "</td>";	
									if (!empty($row['Caption_17'])) {
										print "<td>".$row['Caption_17']."</td>";      
									} else {
										print "<td>Not Caption</td>";
									}									
									print "<td>".ToDate($row['Data'])."</td>";
									print "</tr>";										
									
									///IMG_18
									print "<tr>";
									print "<td align='center'> 18 </td>";	
									print "<td>";									
									print "<figure>";
									print "<div class=\"img-responsive, Thumb-Box\" style='text-align: center;'>";
									if (!empty($row['Image_18'])) {
										print "<img src='../uploads/" . $row['Image_18'] . "' alt='foto' width='25px' height='25px' style=\"border:1px solid #ccc\">";
									} else {
										print "<img src='./dist/img/noimage.png' alt='foto' width='25px' height='25px'>";
									}
									print "</div>";
									print "</figure>";									
									print "</td>";	
									if (!empty($row['Caption_18'])) {
										print "<td>".$row['Caption_18']."</td>";      
									} else {
										print "<td>Not Caption</td>";
									}									
									print "<td>".ToDate($row['Data'])."</td>";
									print "</tr>";										
									
									///IMG_19
									print "<tr>";
									print "<td align='center'> 19 </td>";	
									print "<td>";									
									print "<figure>";
									print "<div class=\"img-responsive, Thumb-Box\" style='text-align: center;'>";
									if (!empty($row['Image_19'])) {
										print "<img src='../uploads/" . $row['Image_19'] . "' alt='foto' width='25px' height='25px' style=\"border:1px solid #ccc\">";
									} else {
										print "<img src='./dist/img/noimage.png' alt='foto' width='25px' height='25px'>";
									}
									print "</div>";
									print "</figure>";								
									print "</td>";	
									if (!empty($row['Caption_19'])) {
										print "<td>".$row['Caption_19']."</td>";      
									} else {
										print "<td>Not Caption</td>";
									}									
									print "<td>".ToDate($row['Data'])."</td>";
									print "</tr>";										
									
									///IMG_20
									print "<tr>";
									print "<td align='center'> 20 </td>";	
									print "<td>";									
									print "<figure>";
									print "<div class=\"img-responsive, Thumb-Box\" style='text-align: center;'>";
									if (!empty($row['Image_20'])) {
										print "<img src='../uploads/" . $row['Image_20'] . "' alt='foto' width='25px' height='25px' style=\"border:1px solid #ccc\">";
									} else {
										print "<img src='./dist/img/noimage.png' alt='foto' width='25px' height='25px'>";
									}
									print "</div>";
									print "</figure>";								
									print "</td>";	
									if (!empty($row['Caption_20'])) {
										print "<td>".$row['Caption_20']."</td>";      
									} else {
										print "<td>Not Caption</td>";
									}									
									print "<td>".ToDate($row['Data'])."</td>";
									print "</tr>";										
									
									///IMG_21
									print "<tr>";
									print "<td align='center'> 21 </td>";	
									print "<td>";									
									print "<figure>";
									print "<div class=\"img-responsive, Thumb-Box\" style='text-align: center;'>";
									if (!empty($row['Image_21'])) {
										print "<img src='../uploads/" . $row['Image_21'] . "' alt='foto' width='25px' height='25px' style=\"border:1px solid #ccc\">";
									} else {
										print "<img src='./dist/img/noimage.png' alt='foto' width='25px' height='25px'>";
									}
									print "</div>";
									print "</figure>";								
									print "</td>";	
									if (!empty($row['Caption_21'])) {
										print "<td>".$row['Caption_21']."</td>";      
									} else {
										print "<td>Not Caption</td>";
									}									
									print "<td>".ToDate($row['Data'])."</td>";
									print "</tr>";										
									
									///IMG_22
									print "<tr>";
									print "<td align='center'> 22 </td>";	
									print "<td>";									
									print "<figure>";
									print "<div class=\"img-responsive, Thumb-Box\" style='text-align: center;'>";
									if (!empty($row['Image_22'])) {
										print "<img src='../uploads/" . $row['Image_22'] . "' alt='foto' width='25px' height='25px' style=\"border:1px solid #ccc\">";
									} else {
										print "<img src='./dist/img/noimage.png' alt='foto' width='25px' height='25px'>";
									}
									print "</div>";
									print "</figure>";								
									print "</td>";	
									if (!empty($row['Caption_22'])) {
										print "<td>".$row['Caption_22']."</td>";      
									} else {
										print "<td>Not Caption</td>";
									}									
									print "<td>".ToDate($row['Data'])."</td>";
									print "</tr>";										
									
									///IMG_23
									print "<tr>";
									print "<td align='center'> 23 </td>";	
									print "<td>";									
									print "<figure>";
									print "<div class=\"img-responsive, Thumb-Box\" style='text-align: center;'>";
									if (!empty($row['Image_23'])) {
										print "<img src='../uploads/" . $row['Image_23'] . "' alt='foto' width='25px' height='25px' style=\"border:1px solid #ccc\">";
									} else {
										print "<img src='./dist/img/noimage.png' alt='foto' width='25px' height='25px'>";
									}
									print "</div>";
									print "</figure>";								
									print "</td>";	
									if (!empty($row['Caption_23'])) {
										print "<td>".$row['Caption_23']."</td>";      
									} else {
										print "<td>Not Caption</td>";
									}									
									print "<td>".ToDate($row['Data'])."</td>";
									print "</tr>";										
									
									///IMG_24
									print "<tr>";
									print "<td align='center'> 24 </td>";	
									print "<td>";									
									print "<figure>";
									print "<div class=\"img-responsive, Thumb-Box\" style='text-align: center;'>";
									if (!empty($row['Image_24'])) {
										print "<img src='../uploads/" . $row['Image_24'] . "' alt='foto' width='25px' height='25px' style=\"border:1px solid #ccc\">";
									} else {
										print "<img src='./dist/img/noimage.png' alt='foto' width='25px' height='25px'>";
									}
									print "</div>";
									print "</figure>";								
									print "</td>";	
									if (!empty($row['Caption_24'])) {
										print "<td>".$row['Caption_24']."</td>";      
									} else {
										print "<td>Not Caption</td>";
									}									
									print "<td>".ToDate($row['Data'])."</td>";
									print "</tr>";										
									
									///IMG_25
									print "<tr>";
									print "<td align='center'> 25 </td>";	
									print "<td>";									
									print "<figure>";
									print "<div class=\"img-responsive, Thumb-Box\" style='text-align: center;'>";
									if (!empty($row['Image_25'])) {
										print "<img src='../uploads/" . $row['Image_25'] . "' alt='foto' width='25px' height='25px' style=\"border:1px solid #ccc\">";
									} else {
										print "<img src='./dist/img/noimage.png' alt='foto' width='25px' height='25px'>";
									}
									print "</div>";
									print "</figure>";									
									print "</td>";	
									if (!empty($row['Caption_25'])) {
										print "<td>".$row['Caption_25']."</td>";      
									} else {
										print "<td>Not Caption</td>";
									}									
									print "<td>".ToDate($row['Data'])."</td>";
									print "</tr>";										
									
									print "</tbody>"; 						        
					                print "</table>";
							        print "</form>";						        
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
			<?php	}			
       
            //MODIFICAR ELEMENTS
            if(isset($_POST['mod']) && !empty($_POST['mod'])){
                if(isset($_POST['modif']) && !empty($_POST['modif'])) {

                        //CONSULTAR SI S'HA CANVIAT EL FITXER D'IMATGE_1
                        if ($_FILES['fitxer_1']['name'] != null) {
                            $fitxer_imatge_1 = "IMG_1_" . $_POST['mod'] . "_" . $_FILES['fitxer_1']['name'];
                            $stmt3 = $conn->prepare('SELECT Image_1 FROM post WHERE Image_1=:img_1');
                            $stmt3->execute(array(':img_1' => $fitxer_imatge_1));
                            $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            if ($row3 > 0) {
                                $existent = true;
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Name file already exists " . $fitxer_imatge_1 . "...</p></div>";
                            } else {
                                $existent = false;
                            }
                        }
                        if ($_FILES['fitxer_1']['name'] == null || $existent == false) {
                            //CONSULTA IMATGE ACTUAL A LA BDD
                            $stmt4 = $conn->prepare('SELECT Image_1 FROM post WHERE ID=:id');
                            $stmt4->execute(array(':id' => $_POST['mod']));
                            $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            //CONSULTA D'ACTUALITZACIÓ DE DADES
                            if ($_FILES['fitxer_1']['name'] != null) {
                                $fitxer_imatge_1 = "IMG_1_" . $_POST['mod'] . "_" . $_FILES['fitxer_1']['name'];
                            } else {
                                $fitxer_imatge_1 = $row4['Image_1'];
                            }
                            //COMPROVEM SI S'HA MARCAT LA CASELLA SENSE FOTO
                            if(isset($_POST['borraimg_1']) && !empty($_POST['borraimg_1'])){
                                $fitxer_imatge_1="";
								$_POST['caption_1']="";
                                if($row4['Image_1']) {
                                    if (file_exists('../uploads/' . $row4['Image_1'])) {
                                        if (unlink('../uploads/' . $row4['Image_1'])) {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p></div>";
                                        } else {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p></div>";
                                        }
                                    }
                                    else {
                                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p></div>";
                                    }
                                }
                            }
                        /////////////CONSULTAR SI S'HA CANVIAT EL FITXER D'IMATGE_2
                        if ($_FILES['fitxer_2']['name'] != null) {
                            $fitxer_imatge_2 = "IMG_" . $_POST['mod'] . "_" . $_FILES['fitxer_2']['name'];
                            $stmt3 = $conn->prepare('SELECT Image_2 FROM post WHERE Image_2=:img_2');
                            $stmt3->execute(array(':img_2' => $fitxer_imatge_2));
                            $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            if ($row3 > 0) {
                                $existent = true;
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Name file already exists " . $fitxer_imatge_2 . "...</p></div>";
                            } else {
                                $existent = false;
                            }
                        }
                        if ($_FILES['fitxer_2']['name'] == null || $existent == false) {
                            //CONSULTA IMATGE ACTUAL A LA BDD
                            $stmt4 = $conn->prepare('SELECT Image_2 FROM post WHERE ID=:id');
                            $stmt4->execute(array(':id' => $_POST['mod']));
                            $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            //CONSULTA D'ACTUALITZACIÓ DE DADES
                            if ($_FILES['fitxer_2']['name'] != null) {
                                $fitxer_imatge_2 = "IMG_2_" . $_POST['mod'] . "_" . $_FILES['fitxer_2']['name'];
                            } else {
                                $fitxer_imatge_2 = $row4['Image_2'];
                            }
                            //COMPROVEM SI S'HA MARCAT LA CASELLA SENSE FOTO
                            if(isset($_POST['borraimg_2']) && !empty($_POST['borraimg_2'])){
                                $fitxer_imatge_2="";
								$_POST['caption_2']="";
                                if($row4['Image_2']) {
                                    if (file_exists('../uploads/' . $row4['Image_2'])) {
                                        if (unlink('../uploads/' . $row4['Image_2'])) {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p></div>";
                                        } else {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p></div>";
                                        }
                                    }
                                    else {
                                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p></div>";
                                    }
                                }
                            }							
                        ////////////////////CONSULTAR SI S'HA CANVIAT EL FITXER D'IMATGE_3
                        if ($_FILES['fitxer_3']['name'] != null) {
                            $fitxer_imatge_3 = "IMG_3_" . $_POST['mod'] . "_" . $_FILES['fitxer_3']['name'];
                            $stmt3 = $conn->prepare('SELECT Image_3 FROM post WHERE Image_3=:img_3');
                            $stmt3->execute(array(':img_3' => $fitxer_imatge_3));
                            $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            if ($row3 > 0) {
                                $existent = true;
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Name file already exists " . $fitxer_imatge_3 . "...</p></div>";
                            } else {
                                $existent = false;
                            }
                        }
                        if ($_FILES['fitxer_3']['name'] == null || $existent == false) {
                            //CONSULTA IMATGE ACTUAL A LA BDD
                            $stmt4 = $conn->prepare('SELECT Image_3 FROM post WHERE ID=:id');
                            $stmt4->execute(array(':id' => $_POST['mod']));
                            $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            //CONSULTA D'ACTUALITZACIÓ DE DADES
                            if ($_FILES['fitxer_3']['name'] != null) {
                                $fitxer_imatge_3 = "IMG_3_" . $_POST['mod'] . "_" . $_FILES['fitxer_3']['name'];
                            } else {
                                $fitxer_imatge_3 = $row4['Image_3'];
                            }
                            //COMPROVEM SI S'HA MARCAT LA CASELLA SENSE FOTO
                            if(isset($_POST['borraimg_3']) && !empty($_POST['borraimg_3'])){
                                $fitxer_imatge_3="";
								$_POST['caption_3']="";
                                if($row4['Image_3']) {
                                    if (file_exists('../uploads/' . $row4['Image_3'])) {
                                        if (unlink('../uploads/' . $row4['Image_3'])) {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p></div>";
                                        } else {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p></div>";
                                        }
                                    }
                                    else {
                                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p></div>";
                                    }
                                }
                            }	
							
					  ////////////////////CONSULTAR SI S'HA CANVIAT EL FITXER D'IMATGE_4
                        if ($_FILES['fitxer_4']['name'] != null) {
                            $fitxer_imatge_4 = "IMG_4_" . $_POST['mod'] . "_" . $_FILES['fitxer_4']['name'];
                            $stmt3 = $conn->prepare('SELECT Image_4 FROM post WHERE Image_4=:img_4');
                            $stmt3->execute(array(':img_4' => $fitxer_imatge_4));
                            $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            if ($row3 > 0) {
                                $existent = true;
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Name file already exists " . $fitxer_imatge_3 . "...</p></div>";
                            } else {
                                $existent = false;
                            }
                        }
                        if ($_FILES['fitxer_4']['name'] == null || $existent == false) {
                            //CONSULTA IMATGE ACTUAL A LA BDD
                            $stmt4 = $conn->prepare('SELECT Image_4 FROM post WHERE ID=:id');
                            $stmt4->execute(array(':id' => $_POST['mod']));
                            $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            //CONSULTA D'ACTUALITZACIÓ DE DADES
                            if ($_FILES['fitxer_4']['name'] != null) {
                                $fitxer_imatge_4 = "IMG_4_" . $_POST['mod'] . "_" . $_FILES['fitxer_4']['name'];
                            } else {
                                $fitxer_imatge_4 = $row4['Image_4'];
                            }
                            //COMPROVEM SI S'HA MARCAT LA CASELLA SENSE FOTO
                            if(isset($_POST['borraimg_4']) && !empty($_POST['borraimg_4'])){
                                $fitxer_imatge_4="";
								$_POST['caption_4']="";
                                if($row4['Image_4']) {
                                    if (file_exists('../uploads/' . $row4['Image_4'])) {
                                        if (unlink('../uploads/' . $row4['Image_4'])) {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p></div>";
                                        } else {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p></div>";
                                        }
                                    }
                                    else {
                                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p></div>";
                                    }
                                }
                            }

					  ////////////////////CONSULTAR SI S'HA CANVIAT EL FITXER D'IMATGE_5
                        if ($_FILES['fitxer_5']['name'] != null) {
                            $fitxer_imatge_5 = "IMG_5_" . $_POST['mod'] . "_" . $_FILES['fitxer_5']['name'];
                            $stmt3 = $conn->prepare('SELECT Image_5 FROM post WHERE Image_5=:img_5');
                            $stmt3->execute(array(':img_5' => $fitxer_imatge_5));
                            $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            if ($row3 > 0) {
                                $existent = true;
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Name file already exists " . $fitxer_imatge_3 . "...</p></div>";
                            } else {
                                $existent = false;
                            }
                        }
                        if ($_FILES['fitxer_5']['name'] == null || $existent == false) {
                            //CONSULTA IMATGE ACTUAL A LA BDD
                            $stmt4 = $conn->prepare('SELECT Image_5 FROM post WHERE ID=:id');
                            $stmt4->execute(array(':id' => $_POST['mod']));
                            $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            //CONSULTA D'ACTUALITZACIÓ DE DADES
                            if ($_FILES['fitxer_5']['name'] != null) {
                                $fitxer_imatge_5 = "IMG_5_" . $_POST['mod'] . "_" . $_FILES['fitxer_5']['name'];
                            } else {
                                $fitxer_imatge_5 = $row4['Image_5'];
                            }
                            //COMPROVEM SI S'HA MARCAT LA CASELLA SENSE FOTO
                            if(isset($_POST['borraimg_5']) && !empty($_POST['borraimg_5'])){
                                $fitxer_imatge_5="";
								$_POST['caption_5']="";
                                if($row4['Image_5']) {
                                    if (file_exists('../uploads/' . $row4['Image_5'])) {
                                        if (unlink('../uploads/' . $row4['Image_5'])) {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p></div>";
                                        } else {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p></div>";
                                        }
                                    }
                                    else {
                                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p></div>";
                                    }
                                }
                            }

					  ////////////////////CONSULTAR SI S'HA CANVIAT EL FITXER D'IMATGE_6
                        if ($_FILES['fitxer_6']['name'] != null) {
                            $fitxer_imatge_6 = "IMG_6_" . $_POST['mod'] . "_" . $_FILES['fitxer_6']['name'];
                            $stmt3 = $conn->prepare('SELECT Image_6 FROM post WHERE Image_6=:img_6');
                            $stmt3->execute(array(':img_6' => $fitxer_imatge_6));
                            $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            if ($row3 > 0) {
                                $existent = true;
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Name file already exists " . $fitxer_imatge_3 . "...</p></div>";
                            } else {
                                $existent = false;
                            }
                        }
                        if ($_FILES['fitxer_6']['name'] == null || $existent == false) {
                            //CONSULTA IMATGE ACTUAL A LA BDD
                            $stmt4 = $conn->prepare('SELECT Image_6 FROM post WHERE ID=:id');
                            $stmt4->execute(array(':id' => $_POST['mod']));
                            $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            //CONSULTA D'ACTUALITZACIÓ DE DADES
                            if ($_FILES['fitxer_6']['name'] != null) {
                                $fitxer_imatge_6 = "IMG_6_" . $_POST['mod'] . "_" . $_FILES['fitxer_6']['name'];
                            } else {
                                $fitxer_imatge_6 = $row4['Image_6'];
                            }
                            //COMPROVEM SI S'HA MARCAT LA CASELLA SENSE FOTO
                            if(isset($_POST['borraimg_6']) && !empty($_POST['borraimg_6'])){
                                $fitxer_imatge_6="";
								$_POST['caption_6']="";
                                if($row4['Image_6']) {
                                    if (file_exists('../uploads/' . $row4['Image_6'])) {
                                        if (unlink('../uploads/' . $row4['Image_6'])) {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p></div>";
                                        } else {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p></div>";
                                        }
                                    }
                                    else {
                                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p></div>";
                                    }
                                }
                            }

					  ////////////////////CONSULTAR SI S'HA CANVIAT EL FITXER D'IMATGE_7
                        if ($_FILES['fitxer_7']['name'] != null) {
                            $fitxer_imatge_7 = "IMG_7_" . $_POST['mod'] . "_" . $_FILES['fitxer_7']['name'];
                            $stmt3 = $conn->prepare('SELECT Image_7 FROM post WHERE Image_7=:img_7');
                            $stmt3->execute(array(':img_7' => $fitxer_imatge_7));
                            $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            if ($row3 > 0) {
                                $existent = true;
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Name file already exists " . $fitxer_imatge_3 . "...</p></div>";
                            } else {
                                $existent = false;
                            }
                        }
                        if ($_FILES['fitxer_7']['name'] == null || $existent == false) {
                            //CONSULTA IMATGE ACTUAL A LA BDD
                            $stmt4 = $conn->prepare('SELECT Image_7 FROM post WHERE ID=:id');
                            $stmt4->execute(array(':id' => $_POST['mod']));
                            $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            //CONSULTA D'ACTUALITZACIÓ DE DADES
                            if ($_FILES['fitxer_7']['name'] != null) {
                                $fitxer_imatge_7 = "IMG_7_" . $_POST['mod'] . "_" . $_FILES['fitxer_7']['name'];
                            } else {
                                $fitxer_imatge_7 = $row4['Image_7'];
                            }
                            //COMPROVEM SI S'HA MARCAT LA CASELLA SENSE FOTO
                            if(isset($_POST['borraimg_7']) && !empty($_POST['borraimg_7'])){
                                $fitxer_imatge_7="";
								$_POST['caption_7']="";
                                if($row4['Image_7']) {
                                    if (file_exists('../uploads/' . $row4['Image_7'])) {
                                        if (unlink('../uploads/' . $row4['Image_7'])) {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p></div>";
                                        } else {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p></div>";
                                        }
                                    }
                                    else {
                                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p></div>";
                                    }
                                }
                            }

					  ////////////////////CONSULTAR SI S'HA CANVIAT EL FITXER D'IMATGE_8
                        if ($_FILES['fitxer_8']['name'] != null) {
                            $fitxer_imatge_8 = "IMG_8_" . $_POST['mod'] . "_" . $_FILES['fitxer_8']['name'];
                            $stmt3 = $conn->prepare('SELECT Image_8 FROM post WHERE Image_8=:img_8');
                            $stmt3->execute(array(':img_8' => $fitxer_imatge_8));
                            $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            if ($row3 > 0) {
                                $existent = true;
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Name file already exists " . $fitxer_imatge_3 . "...</p></div>";
                            } else {
                                $existent = false;
                            }
                        }
                        if ($_FILES['fitxer_8']['name'] == null || $existent == false) {
                            //CONSULTA IMATGE ACTUAL A LA BDD
                            $stmt4 = $conn->prepare('SELECT Image_8 FROM post WHERE ID=:id');
                            $stmt4->execute(array(':id' => $_POST['mod']));
                            $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            //CONSULTA D'ACTUALITZACIÓ DE DADES
                            if ($_FILES['fitxer_8']['name'] != null) {
                                $fitxer_imatge_8 = "IMG_8_" . $_POST['mod'] . "_" . $_FILES['fitxer_8']['name'];
                            } else {
                                $fitxer_imatge_8 = $row4['Image_8'];
                            }
                            //COMPROVEM SI S'HA MARCAT LA CASELLA SENSE FOTO
                            if(isset($_POST['borraimg_8']) && !empty($_POST['borraimg_8'])){
                                $fitxer_imatge_8="";
								$_POST['caption_8']="";
                                if($row4['Image_8']) {
                                    if (file_exists('../uploads/' . $row4['Image_8'])) {
                                        if (unlink('../uploads/' . $row4['Image_8'])) {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p></div>";
                                        } else {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p></div>";
                                        }
                                    }
                                    else {
                                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p></div>";
                                    }
                                }
                            }

					  ////////////////////CONSULTAR SI S'HA CANVIAT EL FITXER D'IMATGE_9
                        if ($_FILES['fitxer_9']['name'] != null) {
                            $fitxer_imatge_9 = "IMG_9_" . $_POST['mod'] . "_" . $_FILES['fitxer_9']['name'];
                            $stmt3 = $conn->prepare('SELECT Image_9 FROM post WHERE Image_9=:img_9');
                            $stmt3->execute(array(':img_9' => $fitxer_imatge_9));
                            $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            if ($row3 > 0) {
                                $existent = true;
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Name file already exists " . $fitxer_imatge_3 . "...</p></div>";
                            } else {
                                $existent = false;
                            }
                        }
                        if ($_FILES['fitxer_9']['name'] == null || $existent == false) {
                            //CONSULTA IMATGE ACTUAL A LA BDD
                            $stmt4 = $conn->prepare('SELECT Image_9 FROM post WHERE ID=:id');
                            $stmt4->execute(array(':id' => $_POST['mod']));
                            $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            //CONSULTA D'ACTUALITZACIÓ DE DADES
                            if ($_FILES['fitxer_9']['name'] != null) {
                                $fitxer_imatge_9 = "IMG_9_" . $_POST['mod'] . "_" . $_FILES['fitxer_9']['name'];
                            } else {
                                $fitxer_imatge_9 = $row4['Image_9'];
                            }
                            //COMPROVEM SI S'HA MARCAT LA CASELLA SENSE FOTO
                            if(isset($_POST['borraimg_9']) && !empty($_POST['borraimg_9'])){
                                $fitxer_imatge_9="";
								$_POST['caption_9']="";
                                if($row4['Image_9']) {
                                    if (file_exists('../uploads/' . $row4['Image_9'])) {
                                        if (unlink('../uploads/' . $row4['Image_9'])) {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p></div>";
                                        } else {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p></div>";
                                        }
                                    }
                                    else {
                                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p></div>";
                                    }
                                }
                            }

					  ////////////////////CONSULTAR SI S'HA CANVIAT EL FITXER D'IMATGE_10
                        if ($_FILES['fitxer_10']['name'] != null) {
                            $fitxer_imatge_10 = "IMG_10_" . $_POST['mod'] . "_" . $_FILES['fitxer_10']['name'];
                            $stmt3 = $conn->prepare('SELECT Image_10 FROM post WHERE Image_10=:img_10');
                            $stmt3->execute(array(':img_10' => $fitxer_imatge_10));
                            $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            if ($row3 > 0) {
                                $existent = true;
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Name file already exists " . $fitxer_imatge_3 . "...</p></div>";
                            } else {
                                $existent = false;
                            }
                        }
                        if ($_FILES['fitxer_10']['name'] == null || $existent == false) {
                            //CONSULTA IMATGE ACTUAL A LA BDD
                            $stmt4 = $conn->prepare('SELECT Image_10 FROM post WHERE ID=:id');
                            $stmt4->execute(array(':id' => $_POST['mod']));
                            $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            //CONSULTA D'ACTUALITZACIÓ DE DADES
                            if ($_FILES['fitxer_10']['name'] != null) {
                                $fitxer_imatge_10 = "IMG_10_" . $_POST['mod'] . "_" . $_FILES['fitxer_10']['name'];
                            } else {
                                $fitxer_imatge_10 = $row4['Image_10'];
                            }
                            //COMPROVEM SI S'HA MARCAT LA CASELLA SENSE FOTO
                            if(isset($_POST['borraimg_10']) && !empty($_POST['borraimg_10'])){
                                $fitxer_imatge_10="";
								$_POST['caption_10']="";
                                if($row4['Image_10']) {
                                    if (file_exists('../uploads/' . $row4['Image_10'])) {
                                        if (unlink('../uploads/' . $row4['Image_10'])) {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p></div>";
                                        } else {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p></div>";
                                        }
                                    }
                                    else {
                                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p></div>";
                                    }
                                }
                            }

					  ////////////////////CONSULTAR SI S'HA CANVIAT EL FITXER D'IMATGE_11
                        if ($_FILES['fitxer_11']['name'] != null) {
                            $fitxer_imatge_11 = "IMG_11_" . $_POST['mod'] . "_" . $_FILES['fitxer_11']['name'];
                            $stmt3 = $conn->prepare('SELECT Image_11 FROM post WHERE Image_11=:img_11');
                            $stmt3->execute(array(':img_11' => $fitxer_imatge_11));
                            $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            if ($row3 > 0) {
                                $existent = true;
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Name file already exists " . $fitxer_imatge_3 . "...</p></div>";
                            } else {
                                $existent = false;
                            }
                        }
                        if ($_FILES['fitxer_11']['name'] == null || $existent == false) {
                            //CONSULTA IMATGE ACTUAL A LA BDD
                            $stmt4 = $conn->prepare('SELECT Image_11 FROM post WHERE ID=:id');
                            $stmt4->execute(array(':id' => $_POST['mod']));
                            $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            //CONSULTA D'ACTUALITZACIÓ DE DADES
                            if ($_FILES['fitxer_11']['name'] != null) {
                                $fitxer_imatge_11 = "IMG_11_" . $_POST['mod'] . "_" . $_FILES['fitxer_11']['name'];
                            } else {
                                $fitxer_imatge_11 = $row4['Image_11'];
                            }
                            //COMPROVEM SI S'HA MARCAT LA CASELLA SENSE FOTO
                            if(isset($_POST['borraimg_11']) && !empty($_POST['borraimg_11'])){
                                $fitxer_imatge_11="";
								$_POST['caption_11']="";
                                if($row4['Image_11']) {
                                    if (file_exists('../uploads/' . $row4['Image_11'])) {
                                        if (unlink('../uploads/' . $row4['Image_11'])) {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p></div>";
                                        } else {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p></div>";
                                        }
                                    }
                                    else {
                                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p></div>";
                                    }
                                }
                            }

					  ////////////////////CONSULTAR SI S'HA CANVIAT EL FITXER D'IMATGE_12
                        if ($_FILES['fitxer_12']['name'] != null) {
                            $fitxer_imatge_12 = "IMG_12_" . $_POST['mod'] . "_" . $_FILES['fitxer_12']['name'];
                            $stmt3 = $conn->prepare('SELECT Image_12 FROM post WHERE Image_12=:img_12');
                            $stmt3->execute(array(':img_12' => $fitxer_imatge_12));
                            $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            if ($row3 > 0) {
                                $existent = true;
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Name file already exists " . $fitxer_imatge_3 . "...</p></div>";
                            } else {
                                $existent = false;
                            }
                        }
                        if ($_FILES['fitxer_12']['name'] == null || $existent == false) {
                            //CONSULTA IMATGE ACTUAL A LA BDD
                            $stmt4 = $conn->prepare('SELECT Image_12 FROM post WHERE ID=:id');
                            $stmt4->execute(array(':id' => $_POST['mod']));
                            $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            //CONSULTA D'ACTUALITZACIÓ DE DADES
                            if ($_FILES['fitxer_12']['name'] != null) {
                                $fitxer_imatge_12 = "IMG_12_" . $_POST['mod'] . "_" . $_FILES['fitxer_12']['name'];
                            } else {
                                $fitxer_imatge_12 = $row4['Image_12'];
                            }
                            //COMPROVEM SI S'HA MARCAT LA CASELLA SENSE FOTO
                            if(isset($_POST['borraimg_12']) && !empty($_POST['borraimg_12'])){
                                $fitxer_imatge_12="";
								$_POST['caption_12']="";
                                if($row4['Image_12']) {
                                    if (file_exists('../uploads/' . $row4['Image_12'])) {
                                        if (unlink('../uploads/' . $row4['Image_12'])) {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p></div>";
                                        } else {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p></div>";
                                        }
                                    }
                                    else {
                                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p></div>";
                                    }
                                }
                            }

					  ////////////////////CONSULTAR SI S'HA CANVIAT EL FITXER D'IMATGE_13
                        if ($_FILES['fitxer_13']['name'] != null) {
                            $fitxer_imatge_13 = "IMG_13_" . $_POST['mod'] . "_" . $_FILES['fitxer_13']['name'];
                            $stmt3 = $conn->prepare('SELECT Image_13 FROM post WHERE Image_13=:img_13');
                            $stmt3->execute(array(':img_13' => $fitxer_imatge_13));
                            $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            if ($row3 > 0) {
                                $existent = true;
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Name file already exists " . $fitxer_imatge_3 . "...</p></div>";
                            } else {
                                $existent = false;
                            }
                        }
                        if ($_FILES['fitxer_13']['name'] == null || $existent == false) {
                            //CONSULTA IMATGE ACTUAL A LA BDD
                            $stmt4 = $conn->prepare('SELECT Image_13 FROM post WHERE ID=:id');
                            $stmt4->execute(array(':id' => $_POST['mod']));
                            $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            //CONSULTA D'ACTUALITZACIÓ DE DADES
                            if ($_FILES['fitxer_13']['name'] != null) {
                                $fitxer_imatge_13 = "IMG_13_" . $_POST['mod'] . "_" . $_FILES['fitxer_13']['name'];
                            } else {
                                $fitxer_imatge_13 = $row4['Image_13'];
                            }
                            //COMPROVEM SI S'HA MARCAT LA CASELLA SENSE FOTO
                            if(isset($_POST['borraimg_13']) && !empty($_POST['borraimg_13'])){
                                $fitxer_imatge_13="";
								$_POST['caption_13']="";
                                if($row4['Image_13']) {
                                    if (file_exists('../uploads/' . $row4['Image_13'])) {
                                        if (unlink('../uploads/' . $row4['Image_13'])) {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p></div>";
                                        } else {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p></div>";
                                        }
                                    }
                                    else {
                                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p></div>";
                                    }
                                }
                            }

					  ////////////////////CONSULTAR SI S'HA CANVIAT EL FITXER D'IMATGE_14
                        if ($_FILES['fitxer_14']['name'] != null) {
                            $fitxer_imatge_14 = "IMG_14_" . $_POST['mod'] . "_" . $_FILES['fitxer_14']['name'];
                            $stmt3 = $conn->prepare('SELECT Image_14 FROM post WHERE Image_14=:img_14');
                            $stmt3->execute(array(':img_14' => $fitxer_imatge_14));
                            $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            if ($row3 > 0) {
                                $existent = true;
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Name file already exists " . $fitxer_imatge_3 . "...</p></div>";
                            } else {
                                $existent = false;
                            }
                        }
                        if ($_FILES['fitxer_14']['name'] == null || $existent == false) {
                            //CONSULTA IMATGE ACTUAL A LA BDD
                            $stmt4 = $conn->prepare('SELECT Image_14 FROM post WHERE ID=:id');
                            $stmt4->execute(array(':id' => $_POST['mod']));
                            $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            //CONSULTA D'ACTUALITZACIÓ DE DADES
                            if ($_FILES['fitxer_14']['name'] != null) {
                                $fitxer_imatge_14 = "IMG_14_" . $_POST['mod'] . "_" . $_FILES['fitxer_14']['name'];
                            } else {
                                $fitxer_imatge_14 = $row4['Image_14'];
                            }
                            //COMPROVEM SI S'HA MARCAT LA CASELLA SENSE FOTO
                            if(isset($_POST['borraimg_14']) && !empty($_POST['borraimg_14'])){
                                $fitxer_imatge_14="";
								$_POST['caption_14']="";
                                if($row4['Image_14']) {
                                    if (file_exists('../uploads/' . $row4['Image_14'])) {
                                        if (unlink('../uploads/' . $row4['Image_14'])) {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p></div>";
                                        } else {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p></div>";
                                        }
                                    }
                                    else {
                                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p></div>";
                                    }
                                }
                            }							
							
					  ////////////////////CONSULTAR SI S'HA CANVIAT EL FITXER D'IMATGE_15
                        if ($_FILES['fitxer_15']['name'] != null) {
                            $fitxer_imatge_15 = "IMG_15_" . $_POST['mod'] . "_" . $_FILES['fitxer_15']['name'];
                            $stmt3 = $conn->prepare('SELECT Image_15 FROM post WHERE Image_15=:img_15');
                            $stmt3->execute(array(':img_15' => $fitxer_imatge_15));
                            $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            if ($row3 > 0) {
                                $existent = true;
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Name file already exists " . $fitxer_imatge_3 . "...</p></div>";
                            } else {
                                $existent = false;
                            }
                        }
                        if ($_FILES['fitxer_15']['name'] == null || $existent == false) {
                            //CONSULTA IMATGE ACTUAL A LA BDD
                            $stmt4 = $conn->prepare('SELECT Image_15 FROM post WHERE ID=:id');
                            $stmt4->execute(array(':id' => $_POST['mod']));
                            $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            //CONSULTA D'ACTUALITZACIÓ DE DADES
                            if ($_FILES['fitxer_15']['name'] != null) {
                                $fitxer_imatge_15 = "IMG_15_" . $_POST['mod'] . "_" . $_FILES['fitxer_15']['name'];
                            } else {
                                $fitxer_imatge_15 = $row4['Image_15'];
                            }
                            //COMPROVEM SI S'HA MARCAT LA CASELLA SENSE FOTO
                            if(isset($_POST['borraimg_15']) && !empty($_POST['borraimg_15'])){
                                $fitxer_imatge_15="";
								$_POST['caption_15']="";
                                if($row4['Image_15']) {
                                    if (file_exists('../uploads/' . $row4['Image_15'])) {
                                        if (unlink('../uploads/' . $row4['Image_15'])) {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p></div>";
                                        } else {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p></div>";
                                        }
                                    }
                                    else {
                                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p></div>";
                                    }
                                }
                            }							
							
                        //CONSULTAR SI S'HA CANVIAT EL FITXER D'IMATGE_16
                        if ($_FILES['fitxer_16']['name'] != null) {
                            $fitxer_imatge_16 = "IMG_16_" . $_POST['mod'] . "_" . $_FILES['fitxer_16']['name'];
                            $stmt3 = $conn->prepare('SELECT Image_16 FROM post WHERE Image_16=:img_16');
                            $stmt3->execute(array(':img_16' => $fitxer_imatge_16));
                            $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            if ($row3 > 0) {
                                $existent = true;
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Name file already exists " . $fitxer_imatge_1 . "...</p></div>";
                            } else {
                                $existent = false;
                            }
                        }
                        if ($_FILES['fitxer_16']['name'] == null || $existent == false) {
                            //CONSULTA IMATGE ACTUAL A LA BDD
                            $stmt4 = $conn->prepare('SELECT Image_16 FROM post WHERE ID=:id');
                            $stmt4->execute(array(':id' => $_POST['mod']));
                            $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            //CONSULTA D'ACTUALITZACIÓ DE DADES
                            if ($_FILES['fitxer_16']['name'] != null) {
                                $fitxer_imatge_16 = "IMG_16_" . $_POST['mod'] . "_" . $_FILES['fitxer_16']['name'];
                            } else {
                                $fitxer_imatge_16 = $row4['Image_16'];
                            }
                            //COMPROVEM SI S'HA MARCAT LA CASELLA SENSE FOTO
                            if(isset($_POST['borraimg_16']) && !empty($_POST['borraimg_16'])){
                                $fitxer_imatge_16="";
								$_POST['caption_16']="";
                                if($row4['Image_16']) {
                                    if (file_exists('../uploads/' . $row4['Image_16'])) {
                                        if (unlink('../uploads/' . $row4['Image_16'])) {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p></div>";
                                        } else {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p></div>";
                                        }
                                    }
                                    else {
                                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p></div>";
                                    }
                                }
                            }						
							
					  ////////////////////CONSULTAR SI S'HA CANVIAT EL FITXER D'IMATGE_17
                        if ($_FILES['fitxer_17']['name'] != null) {
                            $fitxer_imatge_17 = "IMG_17_" . $_POST['mod'] . "_" . $_FILES['fitxer_17']['name'];
                            $stmt3 = $conn->prepare('SELECT Image_17 FROM post WHERE Image_17=:img_17');
                            $stmt3->execute(array(':img_17' => $fitxer_imatge_17));
                            $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            if ($row3 > 0) {
                                $existent = true;
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Name file already exists " . $fitxer_imatge_3 . "...</p></div>";
                            } else {
                                $existent = false;
                            }
                        }
                        if ($_FILES['fitxer_17']['name'] == null || $existent == false) {
                            //CONSULTA IMATGE ACTUAL A LA BDD
                            $stmt4 = $conn->prepare('SELECT Image_17 FROM post WHERE ID=:id');
                            $stmt4->execute(array(':id' => $_POST['mod']));
                            $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            //CONSULTA D'ACTUALITZACIÓ DE DADES
                            if ($_FILES['fitxer_17']['name'] != null) {
                                $fitxer_imatge_17 = "IMG_17_" . $_POST['mod'] . "_" . $_FILES['fitxer_17']['name'];
                            } else {
                                $fitxer_imatge_17 = $row4['Image_17'];
                            }
                            //COMPROVEM SI S'HA MARCAT LA CASELLA SENSE FOTO
                            if(isset($_POST['borraimg_17']) && !empty($_POST['borraimg_17'])){
                                $fitxer_imatge_17="";
								$_POST['caption_17']="";
                                if($row4['Image_17']) {
                                    if (file_exists('../uploads/' . $row4['Image_17'])) {
                                        if (unlink('../uploads/' . $row4['Image_17'])) {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p></div>";
                                        } else {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p></div>";
                                        }
                                    }
                                    else {
                                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p></div>";
                                    }
                                }
                            }							
							
					  ////////////////////CONSULTAR SI S'HA CANVIAT EL FITXER D'IMATGE_18
                        if ($_FILES['fitxer_18']['name'] != null) {
                            $fitxer_imatge_18 = "IMG_18_" . $_POST['mod'] . "_" . $_FILES['fitxer_18']['name'];
                            $stmt3 = $conn->prepare('SELECT Image_18 FROM post WHERE Image_18=:img_18');
                            $stmt3->execute(array(':img_18' => $fitxer_imatge_18));
                            $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            if ($row3 > 0) {
                                $existent = true;
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Name file already exists " . $fitxer_imatge_3 . "...</p></div>";
                            } else {
                                $existent = false;
                            }
                        }
                        if ($_FILES['fitxer_18']['name'] == null || $existent == false) {
                            //CONSULTA IMATGE ACTUAL A LA BDD
                            $stmt4 = $conn->prepare('SELECT Image_18 FROM post WHERE ID=:id');
                            $stmt4->execute(array(':id' => $_POST['mod']));
                            $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            //CONSULTA D'ACTUALITZACIÓ DE DADES
                            if ($_FILES['fitxer_18']['name'] != null) {
                                $fitxer_imatge_18 = "IMG_18_" . $_POST['mod'] . "_" . $_FILES['fitxer_18']['name'];
                            } else {
                                $fitxer_imatge_18 = $row4['Image_18'];
                            }
                            //COMPROVEM SI S'HA MARCAT LA CASELLA SENSE FOTO
                            if(isset($_POST['borraimg_18']) && !empty($_POST['borraimg_18'])){
                                $fitxer_imatge_18="";
								$_POST['caption_18']="";
                                if($row4['Image_18']) {
                                    if (file_exists('../uploads/' . $row4['Image_18'])) {
                                        if (unlink('../uploads/' . $row4['Image_18'])) {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p></div>";
                                        } else {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p></div>";
                                        }
                                    }
                                    else {
                                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p></div>";
                                    }
                                }
                            }							
							
					  ////////////////////CONSULTAR SI S'HA CANVIAT EL FITXER D'IMATGE_19
                        if ($_FILES['fitxer_19']['name'] != null) {
                            $fitxer_imatge_19 = "IMG_19_" . $_POST['mod'] . "_" . $_FILES['fitxer_19']['name'];
                            $stmt3 = $conn->prepare('SELECT Image_19 FROM post WHERE Image_19=:img_19');
                            $stmt3->execute(array(':img_19' => $fitxer_imatge_19));
                            $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            if ($row3 > 0) {
                                $existent = true;
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Name file already exists " . $fitxer_imatge_3 . "...</p></div>";
                            } else {
                                $existent = false;
                            }
                        }
                        if ($_FILES['fitxer_19']['name'] == null || $existent == false) {
                            //CONSULTA IMATGE ACTUAL A LA BDD
                            $stmt4 = $conn->prepare('SELECT Image_19 FROM post WHERE ID=:id');
                            $stmt4->execute(array(':id' => $_POST['mod']));
                            $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            //CONSULTA D'ACTUALITZACIÓ DE DADES
                            if ($_FILES['fitxer_19']['name'] != null) {
                                $fitxer_imatge_19 = "IMG_19_" . $_POST['mod'] . "_" . $_FILES['fitxer_19']['name'];
                            } else {
                                $fitxer_imatge_19 = $row4['Image_19'];
                            }
                            //COMPROVEM SI S'HA MARCAT LA CASELLA SENSE FOTO
                            if(isset($_POST['borraimg_19']) && !empty($_POST['borraimg_19'])){
                                $fitxer_imatge_19="";
								$_POST['caption_19']="";
                                if($row4['Image_19']) {
                                    if (file_exists('../uploads/' . $row4['Image_19'])) {
                                        if (unlink('../uploads/' . $row4['Image_19'])) {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p></div>";
                                        } else {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p></div>";
                                        }
                                    }
                                    else {
                                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p></div>";
                                    }
                                }
                            }							
							
					  ////////////////////CONSULTAR SI S'HA CANVIAT EL FITXER D'IMATGE_20
                        if ($_FILES['fitxer_20']['name'] != null) {
                            $fitxer_imatge_20 = "IMG_20_" . $_POST['mod'] . "_" . $_FILES['fitxer_20']['name'];
                            $stmt3 = $conn->prepare('SELECT Image_20 FROM post WHERE Image_20=:img_20');
                            $stmt3->execute(array(':img_20' => $fitxer_imatge_20));
                            $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            if ($row3 > 0) {
                                $existent = true;
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Name file already exists " . $fitxer_imatge_3 . "...</p></div>";
                            } else {
                                $existent = false;
                            }
                        }
                        if ($_FILES['fitxer_20']['name'] == null || $existent == false) {
                            //CONSULTA IMATGE ACTUAL A LA BDD
                            $stmt4 = $conn->prepare('SELECT Image_20 FROM post WHERE ID=:id');
                            $stmt4->execute(array(':id' => $_POST['mod']));
                            $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            //CONSULTA D'ACTUALITZACIÓ DE DADES
                            if ($_FILES['fitxer_20']['name'] != null) {
                                $fitxer_imatge_20 = "IMG_20_" . $_POST['mod'] . "_" . $_FILES['fitxer_20']['name'];
                            } else {
                                $fitxer_imatge_20 = $row4['Image_20'];
                            }
                            //COMPROVEM SI S'HA MARCAT LA CASELLA SENSE FOTO
                            if(isset($_POST['borraimg_20']) && !empty($_POST['borraimg_20'])){
                                $fitxer_imatge_20="";
								$_POST['caption_20']="";
                                if($row4['Image_20']) {
                                    if (file_exists('../uploads/' . $row4['Image_20'])) {
                                        if (unlink('../uploads/' . $row4['Image_20'])) {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p></div>";
                                        } else {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p></div>";
                                        }
                                    }
                                    else {
                                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p></div>";
                                    }
                                }
                            }						
						
                        //CONSULTAR SI S'HA CANVIAT EL FITXER D'IMATGE_21
                        if ($_FILES['fitxer_21']['name'] != null) {
                            $fitxer_imatge_21 = "IMG_21_" . $_POST['mod'] . "_" . $_FILES['fitxer_21']['name'];
                            $stmt3 = $conn->prepare('SELECT Image_21 FROM post WHERE Image_1=:img_21');
                            $stmt3->execute(array(':img_21' => $fitxer_imatge_21));
                            $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            if ($row3 > 0) {
                                $existent = true;
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Name file already exists " . $fitxer_imatge_1 . "...</p></div>";
                            } else {
                                $existent = false;
                            }
                        }
                        if ($_FILES['fitxer_21']['name'] == null || $existent == false) {
                            //CONSULTA IMATGE ACTUAL A LA BDD
                            $stmt4 = $conn->prepare('SELECT Image_21 FROM post WHERE ID=:id');
                            $stmt4->execute(array(':id' => $_POST['mod']));
                            $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            //CONSULTA D'ACTUALITZACIÓ DE DADES
                            if ($_FILES['fitxer_21']['name'] != null) {
                                $fitxer_imatge_21 = "IMG_21_" . $_POST['mod'] . "_" . $_FILES['fitxer_21']['name'];
                            } else {
                                $fitxer_imatge_21 = $row4['Image_21'];
                            }
                            //COMPROVEM SI S'HA MARCAT LA CASELLA SENSE FOTO
                            if(isset($_POST['borraimg_21']) && !empty($_POST['borraimg_21'])){
                                $fitxer_imatge_21="";
								$_POST['caption_21']="";
                                if($row4['Image_21']) {
                                    if (file_exists('../uploads/' . $row4['Image_21'])) {
                                        if (unlink('../uploads/' . $row4['Image_21'])) {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p></div>";
                                        } else {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p></div>";
                                        }
                                    }
                                    else {
                                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p></div>";
                                    }
                                }
                            }						
						
					  ////////////////////CONSULTAR SI S'HA CANVIAT EL FITXER D'IMATGE_22
                        if ($_FILES['fitxer_22']['name'] != null) {
                            $fitxer_imatge_22 = "IMG_22_" . $_POST['mod'] . "_" . $_FILES['fitxer_22']['name'];
                            $stmt3 = $conn->prepare('SELECT Image_22 FROM post WHERE Image_22=:img_22');
                            $stmt3->execute(array(':img_22' => $fitxer_imatge_22));
                            $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            if ($row3 > 0) {
                                $existent = true;
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Name file already exists " . $fitxer_imatge_3 . "...</p></div>";
                            } else {
                                $existent = false;
                            }
                        }
                        if ($_FILES['fitxer_22']['name'] == null || $existent == false) {
                            //CONSULTA IMATGE ACTUAL A LA BDD
                            $stmt4 = $conn->prepare('SELECT Image_22 FROM post WHERE ID=:id');
                            $stmt4->execute(array(':id' => $_POST['mod']));
                            $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            //CONSULTA D'ACTUALITZACIÓ DE DADES
                            if ($_FILES['fitxer_22']['name'] != null) {
                                $fitxer_imatge_22 = "IMG_22_" . $_POST['mod'] . "_" . $_FILES['fitxer_22']['name'];
                            } else {
                                $fitxer_imatge_22 = $row4['Image_22'];
                            }
                            //COMPROVEM SI S'HA MARCAT LA CASELLA SENSE FOTO
                            if(isset($_POST['borraimg_22']) && !empty($_POST['borraimg_22'])){
                                $fitxer_imatge_22="";
								$_POST['caption_22']="";
                                if($row4['Image_22']) {
                                    if (file_exists('../uploads/' . $row4['Image_22'])) {
                                        if (unlink('../uploads/' . $row4['Image_22'])) {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p></div>";
                                        } else {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p></div>";
                                        }
                                    }
                                    else {
                                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p></div>";
                                    }
                                }
                            }						
						
					  ////////////////////CONSULTAR SI S'HA CANVIAT EL FITXER D'IMATGE_23
                        if ($_FILES['fitxer_23']['name'] != null) {
                            $fitxer_imatge_23 = "IMG_23_" . $_POST['mod'] . "_" . $_FILES['fitxer_23']['name'];
                            $stmt3 = $conn->prepare('SELECT Image_23 FROM post WHERE Image_23=:img_23');
                            $stmt3->execute(array(':img_23' => $fitxer_imatge_23));
                            $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            if ($row3 > 0) {
                                $existent = true;
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Name file already exists " . $fitxer_imatge_3 . "...</p></div>";
                            } else {
                                $existent = false;
                            }
                        }
                        if ($_FILES['fitxer_23']['name'] == null || $existent == false) {
                            //CONSULTA IMATGE ACTUAL A LA BDD
                            $stmt4 = $conn->prepare('SELECT Image_23 FROM post WHERE ID=:id');
                            $stmt4->execute(array(':id' => $_POST['mod']));
                            $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            //CONSULTA D'ACTUALITZACIÓ DE DADES
                            if ($_FILES['fitxer_23']['name'] != null) {
                                $fitxer_imatge_23 = "IMG_23_" . $_POST['mod'] . "_" . $_FILES['fitxer_23']['name'];
                            } else {
                                $fitxer_imatge_23 = $row4['Image_23'];
                            }
                            //COMPROVEM SI S'HA MARCAT LA CASELLA SENSE FOTO
                            if(isset($_POST['borraimg_23']) && !empty($_POST['borraimg_23'])){
                                $fitxer_imatge_23="";
								$_POST['caption_23']="";
                                if($row4['Image_23']) {
                                    if (file_exists('../uploads/' . $row4['Image_23'])) {
                                        if (unlink('../uploads/' . $row4['Image_23'])) {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p></div>";
                                        } else {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p></div>";
                                        }
                                    }
                                    else {
                                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p></div>";
                                    }
                                }
                            }						
						
					  ////////////////////CONSULTAR SI S'HA CANVIAT EL FITXER D'IMATGE_24
                        if ($_FILES['fitxer_24']['name'] != null) {
                            $fitxer_imatge_24 = "IMG_24_" . $_POST['mod'] . "_" . $_FILES['fitxer_24']['name'];
                            $stmt3 = $conn->prepare('SELECT Image_24 FROM post WHERE Image_24=:img_24');
                            $stmt3->execute(array(':img_24' => $fitxer_imatge_24));
                            $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            if ($row3 > 0) {
                                $existent = true;
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Name file already exists " . $fitxer_imatge_3 . "...</p></div>";
                            } else {
                                $existent = false;
                            }
                        }
                        if ($_FILES['fitxer_24']['name'] == null || $existent == false) {
                            //CONSULTA IMATGE ACTUAL A LA BDD
                            $stmt4 = $conn->prepare('SELECT Image_24 FROM post WHERE ID=:id');
                            $stmt4->execute(array(':id' => $_POST['mod']));
                            $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            //CONSULTA D'ACTUALITZACIÓ DE DADES
                            if ($_FILES['fitxer_24']['name'] != null) {
                                $fitxer_imatge_24 = "IMG_24_" . $_POST['mod'] . "_" . $_FILES['fitxer_24']['name'];
                            } else {
                                $fitxer_imatge_24 = $row4['Image_24'];
                            }
                            //COMPROVEM SI S'HA MARCAT LA CASELLA SENSE FOTO
                            if(isset($_POST['borraimg_24']) && !empty($_POST['borraimg_24'])){
                                $fitxer_imatge_24="";
								$_POST['caption_24']="";
                                if($row4['Image_24']) {
                                    if (file_exists('../uploads/' . $row4['Image_24'])) {
                                        if (unlink('../uploads/' . $row4['Image_24'])) {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p></div>";
                                        } else {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p></div>";
                                        }
                                    }
                                    else {
                                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p></div>";
                                    }
                                }
                            }						
						
					  ////////////////////CONSULTAR SI S'HA CANVIAT EL FITXER D'IMATGE_25
                        if ($_FILES['fitxer_25']['name'] != null) {
                            $fitxer_imatge_25 = "IMG_25_" . $_POST['mod'] . "_" . $_FILES['fitxer_25']['name'];
                            $stmt3 = $conn->prepare('SELECT Image_25 FROM post WHERE Image_25=:img_25');
                            $stmt3->execute(array(':img_25' => $fitxer_imatge_25));
                            $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                            if ($row3 > 0) {
                                $existent = true;
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Name file already exists " . $fitxer_imatge_3 . "...</p></div>";
                            } else {
                                $existent = false;
                            }
                        }
                        if ($_FILES['fitxer_25']['name'] == null || $existent == false) {
                            //CONSULTA IMATGE ACTUAL A LA BDD
                            $stmt4 = $conn->prepare('SELECT Image_25 FROM post WHERE ID=:id');
                            $stmt4->execute(array(':id' => $_POST['mod']));
                            $row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
                            //CONSULTA D'ACTUALITZACIÓ DE DADES
                            if ($_FILES['fitxer_25']['name'] != null) {
                                $fitxer_imatge_25 = "IMG_25_" . $_POST['mod'] . "_" . $_FILES['fitxer_25']['name'];
                            } else {
                                $fitxer_imatge_25 = $row4['Image_25'];
                            }
                            //COMPROVEM SI S'HA MARCAT LA CASELLA SENSE FOTO
                            if(isset($_POST['borraimg_25']) && !empty($_POST['borraimg_25'])){
                                $fitxer_imatge_25="";
								$_POST['caption_25']="";
                                if($row4['Image_25']) {
                                    if (file_exists('../uploads/' . $row4['Image_25'])) {
                                        if (unlink('../uploads/' . $row4['Image_25'])) {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p></div>";
                                        } else {
                                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p></div>";
                                        }
                                    }
                                    else {
                                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p></div>";
                                    }
                                }
                            }								
							
                            ///////////////////////////////////////////////////////////////////////////////////////////////							
                            $stmt2 = $conn->prepare('UPDATE post SET Title=:title,Description=:descr,Data=:data,Image_1=:img_1,Caption_1=:capt_1,Image_2=:img_2,Caption_2=:capt_2,Image_3=:img_3,Caption_3=:capt_3,Image_4=:img_4,Caption_4=:capt_4,Image_5=:img_5,Caption_5=:capt_5,Image_6=:img_6,Caption_6=:capt_6,Image_7=:img_7,Caption_7=:capt_7,Image_8=:img_8,Caption_8=:capt_8,Image_9=:img_9,Caption_9=:capt_9,Image_10=:img_10,Caption_10=:capt_10,Image_11=:img_11,Caption_11=:capt_11,Image_12=:img_12,Caption_12=:capt_12,Image_13=:img_13,Caption_13=:capt_13,Image_14=:img_14,Caption_14=:capt_14,Image_15=:img_15,Caption_15=:capt_15,Image_16=:img_16,Caption_16=:capt_16,Image_17=:img_17,Caption_17=:capt_17,Image_18=:img_18,Caption_18=:capt_18,Image_19=:img_19,Caption_19=:capt_19,Image_20=:img_20,Caption_20=:capt_20,Image_21=:img_21,Caption_21=:capt_21,Image_22=:img_22,Caption_22=:capt_22,Image_23=:img_23,Caption_23=:capt_23,Image_24=:img_24,Caption_24=:capt_24,Image_25=:img_25,Caption_25=:capt_25,Permission=:permission WHERE ID=:id');

							//Cunsulta la basedades optenir el valors del mail i permision de la noticia modificada
							$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
							$stmt->execute(array(':id'=>$_POST['mod']));
							$row=$stmt->fetch(PDO::FETCH_ASSOC);

							//Camviem l´ordre Data i agafem Time now per realitzar el canvi de Date...

							if (($_POST['Data'] == null) or ($_POST['Data'] == "0000-00-00 00:00:00")){
							$_POST['Data'] = date("Y-m-d H:i:s");
							} else {									
							$_POST['Data'] = (ToTime($_POST['Data']));						
							}
                            $row = $stmt2->execute(array(':title' => $_POST['title'],':descr' => $_POST['description'] ,':data' => $_POST['Data'], ':img_1' => $fitxer_imatge_1,':capt_1' => $_POST['caption_1'], ':img_2' => $fitxer_imatge_2,':capt_2' => $_POST['caption_2'],':img_3' => $fitxer_imatge_3,':capt_3' => $_POST['caption_3'],':img_4' => $fitxer_imatge_4,':capt_4' => $_POST['caption_4'],':img_5' => $fitxer_imatge_5,':capt_5' => $_POST['caption_5'],':img_6' => $fitxer_imatge_6,':capt_6' => $_POST['caption_6'],':img_7' => $fitxer_imatge_7,':capt_7' => $_POST['caption_7'],':img_8' => $fitxer_imatge_8,':capt_8' => $_POST['caption_8'],':img_9' => $fitxer_imatge_9,':capt_9' => $_POST['caption_9'],':img_10' => $fitxer_imatge_10,':capt_10' => $_POST['caption_10'],':img_11' => $fitxer_imatge_11,':capt_11' => $_POST['caption_11'],':img_12' => $fitxer_imatge_12,':capt_12' => $_POST['caption_12'],':img_13' => $fitxer_imatge_13,':capt_13' => $_POST['caption_13'],':img_14' => $fitxer_imatge_14,':capt_14' => $_POST['caption_14'],':img_15' => $fitxer_imatge_15,':capt_15' => $_POST['caption_15'],':img_16' => $fitxer_imatge_16,':capt_16' => $_POST['caption_16'],':img_17' => $fitxer_imatge_17,':capt_17' => $_POST['caption_17'],':img_18' => $fitxer_imatge_18,':capt_18' => $_POST['caption_18'],':img_19' => $fitxer_imatge_19,':capt_19' => $_POST['caption_19'],':img_20' => $fitxer_imatge_20,':capt_20' => $_POST['caption_20'],':img_21' => $fitxer_imatge_21,':capt_21' => $_POST['caption_21'],':img_22' => $fitxer_imatge_22,':capt_22' => $_POST['caption_22'],':img_23' => $fitxer_imatge_23,':capt_23' => $_POST['caption_23'],':img_24' => $fitxer_imatge_24,':capt_24' => $_POST['caption_24'],':img_25' => $fitxer_imatge_25,':capt_25' => $_POST['caption_25'],':permission' => $permissions ,':id' => $_POST['mod']));
                            if ($row > 0) {
                                //EN CAS AFIRMATIU...
								//////////////////////////////////////////////////////////////////
									//ELIMINAR LA IMATGE ANTERIOR DEL SERVIDOR SI HI HA CANVI D'IMATGE_1
							        //if ($row4['Image_1'] && $_FILES['fitxer_1']['name']) {
									if ($row['Image_1'] && $_FILES['fitxer_1']['name']) {	
										if (file_exists('../uploads/' . $row4['Image_1'])) {
											if (unlink('../uploads/' . $row4['Image_1'])) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
												print "</div>";
											} else {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
												print "</div>";
											}
										}
										else {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
											print "</div>";
										}
									}
									//COPIAR LA NOVA IMATGE AL SERVIDOR
									if ($_FILES['fitxer_1']['name'] != null) {
										//pujada imatge al servidor
										$dir_pujada = '../uploads/';
										//Crear el directori si no existeix
										if (!file_exists($dir_pujada)) {
											mkdir($dir_pujada, 0755, true);
										}
										//Comprovar el tipus de fitxer
										$extensio = image_type_to_mime_type(exif_imagetype($_FILES['fitxer_1']['tmp_name']));
										if ($extensio != 'image/jpeg' && $extensio != 'image/gif' && $extensio != 'image/png') {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
										} else {
											//pujar el fitxer
											$fitxer_pujada_1 = $dir_pujada . "IMG_1_" . $_POST['mod'] . "_" . $_FILES['fitxer_1']['name'];
											if (!move_uploaded_file($_FILES['fitxer_1']['tmp_name'], $fitxer_pujada_1)) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
											}
										}
									}

									//ELIMINAR LA IMATGE ANTERIOR DEL SERVIDOR SI HI HA CANVI D'IMATGE_2
									//if ($row4['Image_2'] && $_FILES['fitxer_2']['name']) {
									if ($row['Image_2'] && $_FILES['fitxer_2']['name']) {	
										if (file_exists('../uploads/' . $row4['Image_2'])) {
											if (unlink('../uploads/' . $row4['Image_2'])) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
												print "</div>";
											} else {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
												print "</div>";
											}
										}
										else {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
											print "</div>";
										}
									}
									//COPIAR LA NOVA IMATGE AL SERVIDOR
									if ($_FILES['fitxer_2']['name'] != null) {
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
											$fitxer_pujada_2 = $dir_pujada . "IMG_2_" . $_POST['mod'] . "_" . $_FILES['fitxer_2']['name'];
											if (!move_uploaded_file($_FILES['fitxer_2']['tmp_name'], $fitxer_pujada_2)) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
											}
										}
									}

									//ELIMINAR LA IMATGE ANTERIOR DEL SERVIDOR SI HI HA CANVI D'IMATGE_3
									//if ($row4['Image_3'] && $_FILES['fitxer_3']['name']) {
									if ($row['Image_3'] && $_FILES['fitxer_3']['name']) {
										if (file_exists('../uploads/' . $row4['Image_3'])) {
											if (unlink('../uploads/' . $row4['Image_3'])) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
												print "</div>";
											} else {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
												print "</div>";
											}
										}
										else {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
											print "</div>";
										}
									}
									//COPIAR LA NOVA IMATGE AL SERVIDOR
									if ($_FILES['fitxer_3']['name'] != null) {
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
											$fitxer_pujada_3 = $dir_pujada . "IMG_3_" . $_POST['mod'] . "_" . $_FILES['fitxer_3']['name'];
											if (!move_uploaded_file($_FILES['fitxer_3']['tmp_name'], $fitxer_pujada_3)) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
											}
										}
									}
									
									//ELIMINAR LA IMATGE ANTERIOR DEL SERVIDOR SI HI HA CANVI D'IMATGE_4
									if ($row['Image_4'] && $_FILES['fitxer_4']['name']) {
										if (file_exists('../uploads/' . $row4['Image_4'])) {
											if (unlink('../uploads/' . $row4['Image_4'])) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
												print "</div>";
											} else {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
												print "</div>";
											}
										}
										else {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
											print "</div>";
										}
									}
									//COPIAR LA NOVA IMATGE AL SERVIDOR
									if ($_FILES['fitxer_4']['name'] != null) {
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
											$fitxer_pujada_4 = $dir_pujada . "IMG_4_" . $_POST['mod'] . "_" . $_FILES['fitxer_4']['name'];
											if (!move_uploaded_file($_FILES['fitxer_4']['tmp_name'], $fitxer_pujada_4)) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
											}
										}
									}						
						
									//ELIMINAR LA IMATGE ANTERIOR DEL SERVIDOR SI HI HA CANVI D'IMATGE_5
									if ($row['Image_5'] && $_FILES['fitxer_5']['name']) {
										if (file_exists('../uploads/' . $row4['Image_5'])) {
											if (unlink('../uploads/' . $row4['Image_5'])) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
												print "</div>";
											} else {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
												print "</div>";
											}
										}
										else {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
											print "</div>";
										}
									}
									//COPIAR LA NOVA IMATGE AL SERVIDOR
									if ($_FILES['fitxer_5']['name'] != null) {
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
											$fitxer_pujada_5 = $dir_pujada . "IMG_5_" . $_POST['mod'] . "_" . $_FILES['fitxer_5']['name'];
											if (!move_uploaded_file($_FILES['fitxer_5']['tmp_name'], $fitxer_pujada_5)) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
											}
										}
									}						
						
									//ELIMINAR LA IMATGE ANTERIOR DEL SERVIDOR SI HI HA CANVI D'IMATGE_6
									if ($row['Image_6'] && $_FILES['fitxer_6']['name']) {
										if (file_exists('../uploads/' . $row4['Image_6'])) {
											if (unlink('../uploads/' . $row4['Image_6'])) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
												print "</div>";
											} else {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
												print "</div>";
											}
										}
										else {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
											print "</div>";
										}
									}
									//COPIAR LA NOVA IMATGE AL SERVIDOR
									if ($_FILES['fitxer_6']['name'] != null) {
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
											$fitxer_pujada_6 = $dir_pujada . "IMG_6_" . $_POST['mod'] . "_" . $_FILES['fitxer_6']['name'];
											if (!move_uploaded_file($_FILES['fitxer_6']['tmp_name'], $fitxer_pujada_6)) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
											}
										}
									}						
						
									//ELIMINAR LA IMATGE ANTERIOR DEL SERVIDOR SI HI HA CANVI D'IMATGE_7
									if ($row['Image_7'] && $_FILES['fitxer_7']['name']) {
										if (file_exists('../uploads/' . $row4['Image_7'])) {
											if (unlink('../uploads/' . $row4['Image_7'])) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
												print "</div>";
											} else {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
												print "</div>";
											}
										}
										else {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
											print "</div>";
										}
									}
									//COPIAR LA NOVA IMATGE AL SERVIDOR
									if ($_FILES['fitxer_7']['name'] != null) {
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
											$fitxer_pujada_7 = $dir_pujada . "IMG_7_" . $_POST['mod'] . "_" . $_FILES['fitxer_7']['name'];
											if (!move_uploaded_file($_FILES['fitxer_7']['tmp_name'], $fitxer_pujada_7)) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
											}
										}
									}						
						
									//ELIMINAR LA IMATGE ANTERIOR DEL SERVIDOR SI HI HA CANVI D'IMATGE_8
									if ($row['Image_8'] && $_FILES['fitxer_8']['name']) {
										if (file_exists('../uploads/' . $row4['Image_8'])) {
											if (unlink('../uploads/' . $row4['Image_8'])) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
												print "</div>";
											} else {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
												print "</div>";
											}
										}
										else {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
											print "</div>";
										}
									}
									//COPIAR LA NOVA IMATGE AL SERVIDOR
									if ($_FILES['fitxer_8']['name'] != null) {
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
											$fitxer_pujada_8 = $dir_pujada . "IMG_8_" . $_POST['mod'] . "_" . $_FILES['fitxer_8']['name'];
											if (!move_uploaded_file($_FILES['fitxer_8']['tmp_name'], $fitxer_pujada_8)) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
											}
										}
									}						
						
									//ELIMINAR LA IMATGE ANTERIOR DEL SERVIDOR SI HI HA CANVI D'IMATGE_9
									if ($row['Image_9'] && $_FILES['fitxer_9']['name']) {
										if (file_exists('../uploads/' . $row4['Image_9'])) {
											if (unlink('../uploads/' . $row4['Image_9'])) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
												print "</div>";
											} else {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
												print "</div>";
											}
										}
										else {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
											print "</div>";
										}
									}
									//COPIAR LA NOVA IMATGE AL SERVIDOR
									if ($_FILES['fitxer_9']['name'] != null) {
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
											$fitxer_pujada_9 = $dir_pujada . "IMG_9_" . $_POST['mod'] . "_" . $_FILES['fitxer_9']['name'];
											if (!move_uploaded_file($_FILES['fitxer_9']['tmp_name'], $fitxer_pujada_9)) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
											}
										}
									}						
						
									//ELIMINAR LA IMATGE ANTERIOR DEL SERVIDOR SI HI HA CANVI D'IMATGE_10
									if ($row['Image_10'] && $_FILES['fitxer_10']['name']) {
										if (file_exists('../uploads/' . $row4['Image_10'])) {
											if (unlink('../uploads/' . $row4['Image_10'])) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
												print "</div>";
											} else {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
												print "</div>";
											}
										}
										else {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
											print "</div>";
										}
									}
									//COPIAR LA NOVA IMATGE AL SERVIDOR
									if ($_FILES['fitxer_10']['name'] != null) {
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
											$fitxer_pujada_10 = $dir_pujada . "IMG_10_" . $_POST['mod'] . "_" . $_FILES['fitxer_10']['name'];
											if (!move_uploaded_file($_FILES['fitxer_10']['tmp_name'], $fitxer_pujada_10)) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
											}
										}
									}						
						
									//ELIMINAR LA IMATGE ANTERIOR DEL SERVIDOR SI HI HA CANVI D'IMATGE_11
									if ($row['Image_11'] && $_FILES['fitxer_11']['name']) {
										if (file_exists('../uploads/' . $row4['Image_11'])) {
											if (unlink('../uploads/' . $row4['Image_11'])) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
												print "</div>";
											} else {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
												print "</div>";
											}
										}
										else {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
											print "</div>";
										}
									}
									//COPIAR LA NOVA IMATGE AL SERVIDOR
									if ($_FILES['fitxer_11']['name'] != null) {
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
											$fitxer_pujada_11 = $dir_pujada . "IMG_11_" . $_POST['mod'] . "_" . $_FILES['fitxer_11']['name'];
											if (!move_uploaded_file($_FILES['fitxer_11']['tmp_name'], $fitxer_pujada_11)) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
											}
										}
									}						
						
									//ELIMINAR LA IMATGE ANTERIOR DEL SERVIDOR SI HI HA CANVI D'IMATGE_12
									if ($row['Image_12'] && $_FILES['fitxer_12']['name']) {
										if (file_exists('../uploads/' . $row4['Image_12'])) {
											if (unlink('../uploads/' . $row4['Image_12'])) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
												print "</div>";
											} else {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
												print "</div>";
											}
										}
										else {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
											print "</div>";
										}
									}
									//COPIAR LA NOVA IMATGE AL SERVIDOR
									if ($_FILES['fitxer_12']['name'] != null) {
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
											$fitxer_pujada_12 = $dir_pujada . "IMG_12_" . $_POST['mod'] . "_" . $_FILES['fitxer_12']['name'];
											if (!move_uploaded_file($_FILES['fitxer_12']['tmp_name'], $fitxer_pujada_12)) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
											}
										}
									}						
						
									//ELIMINAR LA IMATGE ANTERIOR DEL SERVIDOR SI HI HA CANVI D'IMATGE_13
									if ($row['Image_13'] && $_FILES['fitxer_13']['name']) {
										if (file_exists('../uploads/' . $row4['Image_13'])) {
											if (unlink('../uploads/' . $row4['Image_13'])) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
												print "</div>";
											} else {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
												print "</div>";
											}
										}
										else {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
											print "</div>";
										}
									}
									//COPIAR LA NOVA IMATGE AL SERVIDOR
									if ($_FILES['fitxer_13']['name'] != null) {
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
											$fitxer_pujada_13 = $dir_pujada . "IMG_13_" . $_POST['mod'] . "_" . $_FILES['fitxer_13']['name'];
											if (!move_uploaded_file($_FILES['fitxer_13']['tmp_name'], $fitxer_pujada_13)) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
											}
										}
									}						
						
									//ELIMINAR LA IMATGE ANTERIOR DEL SERVIDOR SI HI HA CANVI D'IMATGE_14
									if ($row['Image_14'] && $_FILES['fitxer_14']['name']) {
										if (file_exists('../uploads/' . $row4['Image_14'])) {
											if (unlink('../uploads/' . $row4['Image_14'])) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
												print "</div>";
											} else {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
												print "</div>";
											}
										}
										else {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
											print "</div>";
										}
									}
									//COPIAR LA NOVA IMATGE AL SERVIDOR
									if ($_FILES['fitxer_14']['name'] != null) {
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
											$fitxer_pujada_14 = $dir_pujada . "IMG_14_" . $_POST['mod'] . "_" . $_FILES['fitxer_14']['name'];
											if (!move_uploaded_file($_FILES['fitxer_14']['tmp_name'], $fitxer_pujada_14)) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
											}
										}
									}						
						
									//ELIMINAR LA IMATGE ANTERIOR DEL SERVIDOR SI HI HA CANVI D'IMATGE_15
									if ($row['Image_15'] && $_FILES['fitxer_15']['name']) {
										if (file_exists('../uploads/' . $row4['Image_15'])) {
											if (unlink('../uploads/' . $row4['Image_15'])) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
												print "</div>";
											} else {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
												print "</div>";
											}
										}
										else {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
											print "</div>";
										}
									}
									//COPIAR LA NOVA IMATGE AL SERVIDOR
									if ($_FILES['fitxer_15']['name'] != null) {
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
											$fitxer_pujada_15 = $dir_pujada . "IMG_15_" . $_POST['mod'] . "_" . $_FILES['fitxer_15']['name'];
											if (!move_uploaded_file($_FILES['fitxer_15']['tmp_name'], $fitxer_pujada_15)) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
											}
										}
									}			
			
									//ELIMINAR LA IMATGE ANTERIOR DEL SERVIDOR SI HI HA CANVI D'IMATGE_16
									if ($row['Image_16'] && $_FILES['fitxer_16']['name']) {
										if (file_exists('../uploads/' . $row4['Image_16'])) {
											if (unlink('../uploads/' . $row4['Image_16'])) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
												print "</div>";
											} else {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
												print "</div>";
											}
										}
										else {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
											print "</div>";
										}
									}
									//COPIAR LA NOVA IMATGE AL SERVIDOR
									if ($_FILES['fitxer_16']['name'] != null) {
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
											$fitxer_pujada_16 = $dir_pujada . "IMG_16_" . $_POST['mod'] . "_" . $_FILES['fitxer_16']['name'];
											if (!move_uploaded_file($_FILES['fitxer_16']['tmp_name'], $fitxer_pujada_16)) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
											}
										}
									}			
			
									//ELIMINAR LA IMATGE ANTERIOR DEL SERVIDOR SI HI HA CANVI D'IMATGE_17
									if ($row['Image_17'] && $_FILES['fitxer_17']['name']) {
										if (file_exists('../uploads/' . $row4['Image_17'])) {
											if (unlink('../uploads/' . $row4['Image_17'])) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
												print "</div>";
											} else {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
												print "</div>";
											}
										}
										else {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
											print "</div>";
										}
									}
									//COPIAR LA NOVA IMATGE AL SERVIDOR
									if ($_FILES['fitxer_17']['name'] != null) {
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
											$fitxer_pujada_17 = $dir_pujada . "IMG_17_" . $_POST['mod'] . "_" . $_FILES['fitxer_17']['name'];
											if (!move_uploaded_file($_FILES['fitxer_17']['tmp_name'], $fitxer_pujada_17)) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
											}
										}
									}						
						
									//ELIMINAR LA IMATGE ANTERIOR DEL SERVIDOR SI HI HA CANVI D'IMATGE_18
									if ($row['Image_18'] && $_FILES['fitxer_18']['name']) {
										if (file_exists('../uploads/' . $row4['Image_18'])) {
											if (unlink('../uploads/' . $row4['Image_18'])) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
												print "</div>";
											} else {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
												print "</div>";
											}
										}
										else {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
											print "</div>";
										}
									}
									//COPIAR LA NOVA IMATGE AL SERVIDOR
									if ($_FILES['fitxer_18']['name'] != null) {
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
											$fitxer_pujada_18 = $dir_pujada . "IMG_18_" . $_POST['mod'] . "_" . $_FILES['fitxer_18']['name'];
											if (!move_uploaded_file($_FILES['fitxer_18']['tmp_name'], $fitxer_pujada_18)) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
											}
										}
									}						
						
									//ELIMINAR LA IMATGE ANTERIOR DEL SERVIDOR SI HI HA CANVI D'IMATGE_19
									if ($row['Image_19'] && $_FILES['fitxer_19']['name']) {
										if (file_exists('../uploads/' . $row4['Image_19'])) {
											if (unlink('../uploads/' . $row4['Image_19'])) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
												print "</div>";
											} else {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
												print "</div>";
											}
										}
										else {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
											print "</div>";
										}
									}
									//COPIAR LA NOVA IMATGE AL SERVIDOR
									if ($_FILES['fitxer_19']['name'] != null) {
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
											$fitxer_pujada_19 = $dir_pujada . "IMG_19_" . $_POST['mod'] . "_" . $_FILES['fitxer_19']['name'];
											if (!move_uploaded_file($_FILES['fitxer_19']['tmp_name'], $fitxer_pujada_19)) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
											}
										}
									}						
						
									//ELIMINAR LA IMATGE ANTERIOR DEL SERVIDOR SI HI HA CANVI D'IMATGE_20
									if ($row['Image_20'] && $_FILES['fitxer_20']['name']) {
										if (file_exists('../uploads/' . $row4['Image_20'])) {
											if (unlink('../uploads/' . $row4['Image_20'])) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
												print "</div>";
											} else {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
												print "</div>";
											}
										}
										else {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
											print "</div>";
										}
									}
									//COPIAR LA NOVA IMATGE AL SERVIDOR
									if ($_FILES['fitxer_20']['name'] != null) {
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
											$fitxer_pujada_20 = $dir_pujada . "IMG_20_" . $_POST['mod'] . "_" . $_FILES['fitxer_20']['name'];
											if (!move_uploaded_file($_FILES['fitxer_20']['tmp_name'], $fitxer_pujada_20)) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
											}
										}
									}						
						
									//ELIMINAR LA IMATGE ANTERIOR DEL SERVIDOR SI HI HA CANVI D'IMATGE_21
									if ($row['Image_21'] && $_FILES['fitxer_21']['name']) {
										if (file_exists('../uploads/' . $row4['Image_21'])) {
											if (unlink('../uploads/' . $row4['Image_21'])) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
												print "</div>";
											} else {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
												print "</div>";
											}
										}
										else {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
											print "</div>";
										}
									}
									//COPIAR LA NOVA IMATGE AL SERVIDOR
									if ($_FILES['fitxer_21']['name'] != null) {
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
											$fitxer_pujada_21 = $dir_pujada . "IMG_21_" . $_POST['mod'] . "_" . $_FILES['fitxer_21']['name'];
											if (!move_uploaded_file($_FILES['fitxer_21']['tmp_name'], $fitxer_pujada_21)) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
											}
										}
									}							
						
									//ELIMINAR LA IMATGE ANTERIOR DEL SERVIDOR SI HI HA CANVI D'IMATGE_22
									if ($row['Image_22'] && $_FILES['fitxer_22']['name']) {
										if (file_exists('../uploads/' . $row4['Image_22'])) {
											if (unlink('../uploads/' . $row4['Image_22'])) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
												print "</div>";
											} else {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
												print "</div>";
											}
										}
										else {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
											print "</div>";
										}
									}
									//COPIAR LA NOVA IMATGE AL SERVIDOR
									if ($_FILES['fitxer_22']['name'] != null) {
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
											$fitxer_pujada_22 = $dir_pujada . "IMG_22_" . $_POST['mod'] . "_" . $_FILES['fitxer_22']['name'];
											if (!move_uploaded_file($_FILES['fitxer_22']['tmp_name'], $fitxer_pujada_22)) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
											}
										}
									}	
	
									//ELIMINAR LA IMATGE ANTERIOR DEL SERVIDOR SI HI HA CANVI D'IMATGE_23
									if ($row['Image_23'] && $_FILES['fitxer_23']['name']) {
										if (file_exists('../uploads/' . $row4['Image_23'])) {
											if (unlink('../uploads/' . $row4['Image_23'])) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
												print "</div>";
											} else {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
												print "</div>";
											}
										}
										else {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
											print "</div>";
										}
									}
									//COPIAR LA NOVA IMATGE AL SERVIDOR
									if ($_FILES['fitxer_23']['name'] != null) {
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
											$fitxer_pujada_23 = $dir_pujada . "IMG_23_" . $_POST['mod'] . "_" . $_FILES['fitxer_23']['name'];
											if (!move_uploaded_file($_FILES['fitxer_23']['tmp_name'], $fitxer_pujada_23)) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
											}
										}
									}						
						
									//ELIMINAR LA IMATGE ANTERIOR DEL SERVIDOR SI HI HA CANVI D'IMATGE_24
									if ($row['Image_24'] && $_FILES['fitxer_24']['name']) {
										if (file_exists('../uploads/' . $row4['Image_24'])) {
											if (unlink('../uploads/' . $row4['Image_24'])) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
												print "</div>";
											} else {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
												print "</div>";
											}
										}
										else {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
											print "</div>";
										}
									}
									//COPIAR LA NOVA IMATGE AL SERVIDOR
									if ($_FILES['fitxer_24']['name'] != null) {
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
											$fitxer_pujada_24 = $dir_pujada . "IMG_24_" . $_POST['mod'] . "_" . $_FILES['fitxer_24']['name'];
											if (!move_uploaded_file($_FILES['fitxer_24']['tmp_name'], $fitxer_pujada_24)) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
											}
										}
									}			
			
									//ELIMINAR LA IMATGE ANTERIOR DEL SERVIDOR SI HI HA CANVI D'IMATGE_25
									if ($row['Image_25'] && $_FILES['fitxer_25']['name']) {
										if (file_exists('../uploads/' . $row4['Image_25'])) {
											if (unlink('../uploads/' . $row4['Image_25'])) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
												print "</div>";
											} else {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
												print "</div>";
											}
										}
										else {
											print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>The file does not exist...</p>";
											print "</div>";
										}
									}
									//COPIAR LA NOVA IMATGE AL SERVIDOR
									if ($_FILES['fitxer_25']['name'] != null) {
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
											$fitxer_pujada_25 = $dir_pujada . "IMG_25_" . $_POST['mod'] . "_" . $_FILES['fitxer_25']['name'];
											if (!move_uploaded_file($_FILES['fitxer_25']['tmp_name'], $fitxer_pujada_25)) {
												print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
											}
										}
									}										
																	
									///////////////////////////////////////////////////////////////////////////////////////////////
									print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post updated successful...</p>";
									print "</div>";
								} else {
									//EN CAS NEGATIU...
									print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error updated Post...</p>";
									print "</div>";
								}
  								
							//fitxer_25	
							}  								
							//fitxer_24	
							}  								
							//fitxer_23	
							}  								
							//fitxer_22	
							}  								
							//fitxer_21	
							}  								
							//fitxer_20	
							}  								
							//fitxer_19	
							}  								
							//fitxer_18	
							}  								
							//fitxer_17	
							}  								
							//fitxer_16	
							}  								
							//fitxer_15	
							}  								
							//fitxer_14	
							}  								
							//fitxer_13	
							}  								
							//fitxer_12	
							}  								
							//fitxer_11	
							}  								
							//fitxer_10	
							}  								
							//fitxer_9	
							}  								
							//fitxer_8	
							}  								
							//fitxer_7	
							}  								
							//fitxer_6	
							}  								
							//fitxer_5	
							}  								
							//fitxer_4	
							}  								
							//fitxer_3	
						    }
							//fitxer_2							
							}
							//fitxer_1	
							} 
													
                }
                else {
					//MODIFICAR POST SELECCIONAT///////////////////////////////////////////7
                    $stmt = $conn->prepare('SELECT * FROM post WHERE ID=:id');
                    $stmt->execute(array(':id' => $_POST['mod']));
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
					
					///////*////////
					
					print "<div class=\"row\">";
					print "<div class=\"col-lg-12\">";
					print "<form action=\"\" method=\"post\" enctype=\"multipart/form-data\">";
					print "<div class=\"panel panel-default\">";
					print "<div class=\"panel-heading\">Modify Post $row[Title]</div>";
					print "<div class=\"panel-body\">";
					print "<div class=\"row\">";
					print "<div class=\"col-lg-12\">";
					
					if(isset($_POST['mod']) && !empty($_POST['mod'])){
					print "<div class=\"form-group\">";
					//Input Title
					print "<label>Post Title</label>";
					print "<input type=\"text\" name=\"title\" value=\"$row[Title]\" class=\"form-control\" placeholder=\"Enter the title of the post\">";
					print "</div>";
					
					//Input Description
					print "<div class=\"form-group\">";
					print "<label>Post Description</label>";
					print "<textarea id=\"mytextarea\" name=\"description\" class=\"form-control\" rows=\"10\">".$row['Description']."</textarea>";
				    print "</div>";
				
					//Input Date
					print "<div class=\"form-group\">";
					print "<label>Post Date</label>";
					print "<input type=\"Date\" name=\"Data\"  value=\"$row[Data]\" class=\"form-control\" placeholder=\"Enter the date of the post (9999/99/99)\">";		
					print "</div>";
					
					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
					
					print "</div>";
					print "</div>";	
					print "</div>";
					print "</div>";		

					/////*//////////
											
					?>
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading">Modify Images</div>
								<!-- /.panel-heading -->
								<div class="panel-body">
									<div class="dataTable_wrapper">
										<!--<form action="" method="post"> -->
										<table class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
											<thead>
											<tr>
												<th width="25%" valign="center">Image</th>
												<th width="75%" valign="top" rowspan='7'>Settings</th>									
											</tr>
											</thead>
											<tbody>								
						
											<?php //CONSULTA DE SELECCIO DEL POST AMB LES IMATGES A MODOFICAR//					
										
					//////////////////////////Image_1//////////////////////////////// 
					print "<tr>";                        				
					print "<td valign=\"top\">";					
					print "<figure>";
					print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
					
					if ($row['Image_1']) {
						echo "<img src='../uploads/".$row['Image_1']."' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
						print "<div>&#160;</div>";
					print "<input type='checkbox' name='borraimg_1' value='1'><label>&nbspDelete Image</label>";
					} else {
						echo "<img src='./dist/img/noimage.png' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
					}
					print "</figure>";
					print "</div>";
					print "</td>";
					
					print "<td>";
					print "<label>Imatge 1:<h5 style='display:inline'>&nbsp&nbsp$row[Image_1]</h5></label>";

					print "<div>";
					print "<div>&#160;</div>";
					print "<label>Caption 1:</label>";
										
					if (!empty($row['Caption_1'])) { 
						print "<input type=\"text\" name=\"caption_1\" value=\"$row[Caption_1]\" class=\"form-control\" placeholder=\"Enter image caption...\">";				
					} else {
						print "<input type=\"text\" name=\"caption_1\" value=\"$row[Caption_1]\" class=\"form-control\" placeholder=\"Not defined caption...\">";
					}		
					print "</div>";
										
					print "<div class=\"form-group\">";
					print "<div>&#160;</div>";
					print "<label>Upload Imatge</label>";
					print "<input type='file' name='fitxer_1' class='file' data-show-preview='false' data-show-upload='false' value='".$row['Image_1']."'>";
					print "</div>";															
					print "</td>";					                    					
					print "</tr>";
					/////////////////End Image 1/////////////////////////////////////
					//////////////////////////Image_2//////////////////////////////// 
					print "<tr>";                        				
					print "<td valign=\"top\">";					
					print "<figure>";
					print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
					
					if ($row['Image_2']) {
						echo "<img src='../uploads/".$row['Image_2']."' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
						print "<div>&#160;</div>";
					print "<input type='checkbox' name='borraimg_2' value='1'><label>&nbspDelete Image</label>";
					} else {
						echo "<img src='./dist/img/noimage.png' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
					}
					print "</figure>";
					print "</div>";
					print "</td>";
					
					print "<td>";
					print "<label>Imatge 2:<h5 style='display:inline'>&nbsp&nbsp$row[Image_2]</h5></label>";

					print "<div>";
					print "<div>&#160;</div>";
					print "<label>Caption 2:</label>";
										
					if (!empty($row['Caption_2'])) { 
						print "<input type=\"text\" name=\"caption_2\" value=\"$row[Caption_2]\" class=\"form-control\" placeholder=\"Enter image caption...\">";				
					} else {
						print "<input type=\"text\" name=\"caption_2\" value=\"$row[Caption_2]\" class=\"form-control\" placeholder=\"Not defined caption...\">";
					}		
					print "</div>";
										
					print "<div class=\"form-group\">";
					print "<div>&#160;</div>";
					print "<label>Upload Imatge</label>";
					print "<input type='file' name='fitxer_2' class='file' data-show-preview='false' data-show-upload='false' value='".$row['Image_2']."'>";
					print "</div>";															
					print "</td>";					                    					
					print "</tr>";
					/////////////////End Image 2/////////////////////////////////////					
					//////////////////////////Image_3//////////////////////////////// 
					print "<tr>";                        				
					print "<td valign=\"top\">";					
					print "<figure>";
					print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
					
					if ($row['Image_3']) {
						echo "<img src='../uploads/".$row['Image_3']."' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
						print "<div>&#160;</div>";
					print "<input type='checkbox' name='borraimg_3' value='1'><label>&nbspDelete Image</label>";
					} else {
						echo "<img src='./dist/img/noimage.png' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
					}
					print "</figure>";
					print "</div>";
					print "</td>";
					
					print "<td>";
					print "<label>Imatge 3:<h5 style='display:inline'>&nbsp&nbsp$row[Image_3]</h5></label>";

					print "<div>";
					print "<div>&#160;</div>";
					print "<label>Caption 3:</label>";
										
					if (!empty($row['Caption_3'])) { 
						print "<input type=\"text\" name=\"caption_3\" value=\"$row[Caption_3]\" class=\"form-control\" placeholder=\"Enter image caption...\">";				
					} else {
						print "<input type=\"text\" name=\"caption_3\" value=\"$row[Caption_3]\" class=\"form-control\" placeholder=\"Not defined caption...\">";
					}		
					print "</div>";
										
					print "<div class=\"form-group\">";
					print "<div>&#160;</div>";
					print "<label>Upload Imatge</label>";
					print "<input type='file' name='fitxer_3' class='file' data-show-preview='false' data-show-upload='false' value='".$row['Image_3']."'>";
					print "</div>";															
					print "</td>";					                    					
					print "</tr>"; 
					/////////////////End Image 3/////////////////////////////////////
					//////////////////////////Image_4//////////////////////////////// 
					print "<tr>";                        				
					print "<td valign=\"top\">";					
					print "<figure>";
					print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
					
					if ($row['Image_4']) {
						echo "<img src='../uploads/".$row['Image_4']."' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
						print "<div>&#160;</div>";
					print "<input type='checkbox' name='borraimg_4' value='1'><label>&nbspDelete Image</label>";
					} else {
						echo "<img src='./dist/img/noimage.png' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
					}
					print "</figure>";
					print "</div>";
					print "</td>";
					
					print "<td>";
					print "<label>Imatge 4:<h5 style='display:inline'>&nbsp&nbsp$row[Image_4]</h5></label>";

					print "<div>";
					print "<div>&#160;</div>";
					print "<label>Caption 4:</label>";
										
					if (!empty($row['Caption_4'])) { 
						print "<input type=\"text\" name=\"caption_4\" value=\"$row[Caption_4]\" class=\"form-control\" placeholder=\"Enter image caption...\">";				
					} else {
						print "<input type=\"text\" name=\"caption_4\" value=\"$row[Caption_4]\" class=\"form-control\" placeholder=\"Not defined caption...\">";
					}		
					print "</div>";
										
					print "<div class=\"form-group\">";
					print "<div>&#160;</div>";
					print "<label>Upload Imatge</label>";
					print "<input type='file' name='fitxer_4' class='file' data-show-preview='false' data-show-upload='false' value='".$row['Image_4']."'>";
					print "</div>";															
					print "</td>";					                    					
					print "</tr>"; 
					/////////////////End Image 4/////////////////////////////////////
					//////////////////////////Image_5//////////////////////////////// 
					print "<tr>";                        				
					print "<td valign=\"top\">";					
					print "<figure>";
					print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
					
					if ($row['Image_5']) {
						echo "<img src='../uploads/".$row['Image_5']."' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
						print "<div>&#160;</div>";
					print "<input type='checkbox' name='borraimg_5' value='1'><label>&nbspDelete Image</label>";
					} else {
						echo "<img src='./dist/img/noimage.png' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
					}
					print "</figure>";
					print "</div>";
					print "</td>";
					
					print "<td>";
					print "<label>Imatge 5:<h5 style='display:inline'>&nbsp&nbsp$row[Image_5]</h5></label>";

					print "<div>";
					print "<div>&#160;</div>";
					print "<label>Caption 5:</label>";
										
					if (!empty($row['Caption_5'])) { 
						print "<input type=\"text\" name=\"caption_5\" value=\"$row[Caption_5]\" class=\"form-control\" placeholder=\"Enter image caption...\">";				
					} else {
						print "<input type=\"text\" name=\"caption_5\" value=\"$row[Caption_5]\" class=\"form-control\" placeholder=\"Not defined caption...\">";
					}		
					print "</div>";
										
					print "<div class=\"form-group\">";
					print "<div>&#160;</div>";
					print "<label>Upload Imatge</label>";
					print "<input type='file' name='fitxer_5' class='file' data-show-preview='false' data-show-upload='false' value='".$row['Image_5']."'>";
					print "</div>";															
					print "</td>";					                    					
					print "</tr>"; 
					/////////////////End Image 5/////////////////////////////////////					
					//////////////////////////Image_6//////////////////////////////// 
					print "<tr>";                        				
					print "<td valign=\"top\">";					
					print "<figure>";
					print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
					
					if ($row['Image_6']) {
						echo "<img src='../uploads/".$row['Image_6']."' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
						print "<div>&#160;</div>";
					print "<input type='checkbox' name='borraimg_6' value='1'><label>&nbspDelete Image</label>";
					} else {
						echo "<img src='./dist/img/noimage.png' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
					}
					print "</figure>";
					print "</div>";
					print "</td>";
					
					print "<td>";
					print "<label>Imatge 6:<h5 style='display:inline'>&nbsp&nbsp$row[Image_6]</h5></label>";

					print "<div>";
					print "<div>&#160;</div>";
					print "<label>Caption 6:</label>";
										
					if (!empty($row['Caption_6'])) { 
						print "<input type=\"text\" name=\"caption_6\" value=\"$row[Caption_6]\" class=\"form-control\" placeholder=\"Enter image caption...\">";				
					} else {
						print "<input type=\"text\" name=\"caption_6\" value=\"$row[Caption_6]\" class=\"form-control\" placeholder=\"Not defined caption...\">";
					}		
					print "</div>";
										
					print "<div class=\"form-group\">";
					print "<div>&#160;</div>";
					print "<label>Upload Imatge</label>";
					print "<input type='file' name='fitxer_6' class='file' data-show-preview='false' data-show-upload='false' value='".$row['Image_6']."'>";
					print "</div>";															
					print "</td>";					                    					
					print "</tr>"; 
					/////////////////End Image 6/////////////////////////////////////
					//////////////////////////Image_7//////////////////////////////// 
					print "<tr>";                        				
					print "<td valign=\"top\">";					
					print "<figure>";
					print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
					
					if ($row['Image_7']) {
						echo "<img src='../uploads/".$row['Image_7']."' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
						print "<div>&#160;</div>";
					print "<input type='checkbox' name='borraimg_7' value='1'><label>&nbspDelete Image</label>";
					} else {
						echo "<img src='./dist/img/noimage.png' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
					}
					print "</figure>";
					print "</div>";
					print "</td>";
					
					print "<td>";
					print "<label>Imatge 7:<h5 style='display:inline'>&nbsp&nbsp$row[Image_7]</h5></label>";

					print "<div>";
					print "<div>&#160;</div>";
					print "<label>Caption 7:</label>";
										
					if (!empty($row['Caption_7'])) { 
						print "<input type=\"text\" name=\"caption_7\" value=\"$row[Caption_7]\" class=\"form-control\" placeholder=\"Enter image caption...\">";				
					} else {
						print "<input type=\"text\" name=\"caption_7\" value=\"$row[Caption_7]\" class=\"form-control\" placeholder=\"Not defined caption...\">";
					}		
					print "</div>";
										
					print "<div class=\"form-group\">";
					print "<div>&#160;</div>";
					print "<label>Upload Imatge</label>";
					print "<input type='file' name='fitxer_7' class='file' data-show-preview='false' data-show-upload='false' value='".$row['Image_7']."'>";
					print "</div>";															
					print "</td>";					                    					
					print "</tr>"; 
					/////////////////End Image 7/////////////////////////////////////
					//////////////////////////Image_8//////////////////////////////// 
					print "<tr>";                        				
					print "<td valign=\"top\">";					
					print "<figure>";
					print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
					
					if ($row['Image_8']) {
						echo "<img src='../uploads/".$row['Image_8']."' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
						print "<div>&#160;</div>";
					print "<input type='checkbox' name='borraimg_8' value='1'><label>&nbspDelete Image</label>";
					} else {
						echo "<img src='./dist/img/noimage.png' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
					}
					print "</figure>";
					print "</div>";
					print "</td>";
					
					print "<td>";
					print "<label>Imatge 8:<h5 style='display:inline'>&nbsp&nbsp$row[Image_8]</h5></label>";

					print "<div>";
					print "<div>&#160;</div>";
					print "<label>Caption 8:</label>";
										
					if (!empty($row['Caption_8'])) { 
						print "<input type=\"text\" name=\"caption_8\" value=\"$row[Caption_8]\" class=\"form-control\" placeholder=\"Enter image caption...\">";				
					} else {
						print "<input type=\"text\" name=\"caption_8\" value=\"$row[Caption_8]\" class=\"form-control\" placeholder=\"Not defined caption...\">";
					}		
					print "</div>";
										
					print "<div class=\"form-group\">";
					print "<div>&#160;</div>";
					print "<label>Upload Imatge</label>";
					print "<input type='file' name='fitxer_8' class='file' data-show-preview='false' data-show-upload='false' value='".$row['Image_8']."'>";
					print "</div>";															
					print "</td>";					                    					
					print "</tr>"; 
					/////////////////End Image 8/////////////////////////////////////
					//////////////////////////Image_9//////////////////////////////// 
					print "<tr>";                        				
					print "<td valign=\"top\">";					
					print "<figure>";
					print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
					
					if ($row['Image_9']) {
						echo "<img src='../uploads/".$row['Image_9']."' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
						print "<div>&#160;</div>";
					print "<input type='checkbox' name='borraimg_9' value='1'><label>&nbspDelete Image</label>";
					} else {
						echo "<img src='./dist/img/noimage.png' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
					}
					print "</figure>";
					print "</div>";
					print "</td>";
					
					print "<td>";
					print "<label>Imatge 9:<h5 style='display:inline'>&nbsp&nbsp$row[Image_9]</h5></label>";

					print "<div>";
					print "<div>&#160;</div>";
					print "<label>Caption 9:</label>";
										
					if (!empty($row['Caption_9'])) { 
						print "<input type=\"text\" name=\"caption_9\" value=\"$row[Caption_9]\" class=\"form-control\" placeholder=\"Enter image caption...\">";				
					} else {
						print "<input type=\"text\" name=\"caption_9\" value=\"$row[Caption_9]\" class=\"form-control\" placeholder=\"Not defined caption...\">";
					}		
					print "</div>";
										
					print "<div class=\"form-group\">";
					print "<div>&#160;</div>";
					print "<label>Upload Imatge</label>";
					print "<input type='file' name='fitxer_9' class='file' data-show-preview='false' data-show-upload='false' value='".$row['Image_9']."'>";
					print "</div>";															
					print "</td>";					                    					
					print "</tr>"; 
					/////////////////End Image 9/////////////////////////////////////
					//////////////////////////Image_10//////////////////////////////// 
					print "<tr>";                        				
					print "<td valign=\"top\">";					
					print "<figure>";
					print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
					
					if ($row['Image_10']) {
						echo "<img src='../uploads/".$row['Image_10']."' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
						print "<div>&#160;</div>";
					print "<input type='checkbox' name='borraimg_10' value='1'><label>&nbspDelete Image</label>";
					} else {
						echo "<img src='./dist/img/noimage.png' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
					}
					print "</figure>";
					print "</div>";
					print "</td>";
					
					print "<td>";
					print "<label>Imatge 10:<h5 style='display:inline'>&nbsp&nbsp$row[Image_10]</h5></label>";

					print "<div>";
					print "<div>&#160;</div>";
					print "<label>Caption 10:</label>";
										
					if (!empty($row['Caption_10'])) { 
						print "<input type=\"text\" name=\"caption_10\" value=\"$row[Caption_10]\" class=\"form-control\" placeholder=\"Enter image caption...\">";				
					} else {
						print "<input type=\"text\" name=\"caption_10\" value=\"$row[Caption_10]\" class=\"form-control\" placeholder=\"Not defined caption...\">";
					}		
					print "</div>";
										
					print "<div class=\"form-group\">";
					print "<div>&#160;</div>";
					print "<label>Upload Imatge</label>";
					print "<input type='file' name='fitxer_10' class='file' data-show-preview='false' data-show-upload='false' value='".$row['Image_10']."'>";
					print "</div>";															
					print "</td>";					                    					
					print "</tr>"; 
					/////////////////End Image 10/////////////////////////////////////
					//////////////////////////Image_11//////////////////////////////// 
					print "<tr>";                        				
					print "<td valign=\"top\">";					
					print "<figure>";
					print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
					
					if ($row['Image_11']) {
						echo "<img src='../uploads/".$row['Image_11']."' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
						print "<div>&#160;</div>";
					print "<input type='checkbox' name='borraimg_11' value='1'><label>&nbspDelete Image</label>";
					} else {
						echo "<img src='./dist/img/noimage.png' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
					}
					print "</figure>";
					print "</div>";
					print "</td>";
					
					print "<td>";
					print "<label>Imatge 11:<h5 style='display:inline'>&nbsp&nbsp$row[Image_11]</h5></label>";

					print "<div>";
					print "<div>&#160;</div>";
					print "<label>Caption 11:</label>";
										
					if (!empty($row['Caption_11'])) { 
						print "<input type=\"text\" name=\"caption_11\" value=\"$row[Caption_11]\" class=\"form-control\" placeholder=\"Enter image caption...\">";				
					} else {
						print "<input type=\"text\" name=\"caption_11\" value=\"$row[Caption_11]\" class=\"form-control\" placeholder=\"Not defined caption...\">";
					}		
					print "</div>";
										
					print "<div class=\"form-group\">";
					print "<div>&#160;</div>";
					print "<label>Upload Imatge</label>";
					print "<input type='file' name='fitxer_11' class='file' data-show-preview='false' data-show-upload='false' value='".$row['Image_11']."'>";
					print "</div>";															
					print "</td>";					                    					
					print "</tr>"; 
					/////////////////End Image 11/////////////////////////////////////
					//////////////////////////Image_12//////////////////////////////// 
					print "<tr>";                        				
					print "<td valign=\"top\">";					
					print "<figure>";
					print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
					
					if ($row['Image_12']) {
						echo "<img src='../uploads/".$row['Image_12']."' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
						print "<div>&#160;</div>";
					print "<input type='checkbox' name='borraimg_12' value='1'><label>&nbspDelete Image</label>";
					} else {
						echo "<img src='./dist/img/noimage.png' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
					}
					print "</figure>";
					print "</div>";
					print "</td>";
					
					print "<td>";
					print "<label>Imatge 12:<h5 style='display:inline'>&nbsp&nbsp$row[Image_12]</h5></label>";

					print "<div>";
					print "<div>&#160;</div>";
					print "<label>Caption 12:</label>";
										
					if (!empty($row['Caption_12'])) { 
						print "<input type=\"text\" name=\"caption_12\" value=\"$row[Caption_12]\" class=\"form-control\" placeholder=\"Enter image caption...\">";				
					} else {
						print "<input type=\"text\" name=\"caption_12\" value=\"$row[Caption_12]\" class=\"form-control\" placeholder=\"Not defined caption...\">";
					}		
					print "</div>";
										
					print "<div class=\"form-group\">";
					print "<div>&#160;</div>";
					print "<label>Upload Imatge</label>";
					print "<input type='file' name='fitxer_12' class='file' data-show-preview='false' data-show-upload='false' value='".$row['Image_12']."'>";
					print "</div>";															
					print "</td>";					                    					
					print "</tr>"; 
					/////////////////End Image 12/////////////////////////////////////
					//////////////////////////Image_13//////////////////////////////// 
					print "<tr>";                        				
					print "<td valign=\"top\">";					
					print "<figure>";
					print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
					
					if ($row['Image_13']) {
						echo "<img src='../uploads/".$row['Image_13']."' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
						print "<div>&#160;</div>";
					print "<input type='checkbox' name='borraimg_13' value='1'><label>&nbspDelete Image</label>";
					} else {
						echo "<img src='./dist/img/noimage.png' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
					}
					print "</figure>";
					print "</div>";
					print "</td>";
					
					print "<td>";
					print "<label>Imatge 13:<h5 style='display:inline'>&nbsp&nbsp$row[Image_13]</h5></label>";

					print "<div>";
					print "<div>&#160;</div>";
					print "<label>Caption 13:</label>";
										
					if (!empty($row['Caption_13'])) { 
						print "<input type=\"text\" name=\"caption_13\" value=\"$row[Caption_13]\" class=\"form-control\" placeholder=\"Enter image caption...\">";				
					} else {
						print "<input type=\"text\" name=\"caption_13\" value=\"$row[Caption_13]\" class=\"form-control\" placeholder=\"Not defined caption...\">";
					}		
					print "</div>";
										
					print "<div class=\"form-group\">";
					print "<div>&#160;</div>";
					print "<label>Upload Imatge</label>";
					print "<input type='file' name='fitxer_13' class='file' data-show-preview='false' data-show-upload='false' value='".$row['Image_13']."'>";
					print "</div>";															
					print "</td>";					                    					
					print "</tr>"; 
					/////////////////End Image 13/////////////////////////////////////
					//////////////////////////Image_14//////////////////////////////// 
					print "<tr>";                        				
					print "<td valign=\"top\">";					
					print "<figure>";
					print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
					
					if ($row['Image_14']) {
						echo "<img src='../uploads/".$row['Image_14']."' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
						print "<div>&#160;</div>";
					print "<input type='checkbox' name='borraimg_14' value='1'><label>&nbspDelete Image</label>";
					} else {
						echo "<img src='./dist/img/noimage.png' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
					}
					print "</figure>";
					print "</div>";
					print "</td>";
					
					print "<td>";
					print "<label>Imatge 14:<h5 style='display:inline'>&nbsp&nbsp$row[Image_14]</h5></label>";

					print "<div>";
					print "<div>&#160;</div>";
					print "<label>Caption 14:</label>";
										
					if (!empty($row['Caption_14'])) { 
						print "<input type=\"text\" name=\"caption_14\" value=\"$row[Caption_14]\" class=\"form-control\" placeholder=\"Enter image caption...\">";				
					} else {
						print "<input type=\"text\" name=\"caption_14\" value=\"$row[Caption_14]\" class=\"form-control\" placeholder=\"Not defined caption...\">";
					}		
					print "</div>";
										
					print "<div class=\"form-group\">";
					print "<div>&#160;</div>";
					print "<label>Upload Imatge</label>";
					print "<input type='file' name='fitxer_14' class='file' data-show-preview='false' data-show-upload='false' value='".$row['Image_14']."'>";
					print "</div>";															
					print "</td>";					                    					
					print "</tr>"; 
					/////////////////End Image 14/////////////////////////////////////
					//////////////////////////Image_15//////////////////////////////// 
					print "<tr>";                        				
					print "<td valign=\"top\">";					
					print "<figure>";
					print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
					
					if ($row['Image_15']) {
						echo "<img src='../uploads/".$row['Image_15']."' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
						print "<div>&#160;</div>";
					print "<input type='checkbox' name='borraimg_15' value='1'><label>&nbspDelete Image</label>";
					} else {
						echo "<img src='./dist/img/noimage.png' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
					}
					print "</figure>";
					print "</div>";
					print "</td>";
					
					print "<td>";
					print "<label>Imatge 15:<h5 style='display:inline'>&nbsp&nbsp$row[Image_15]</h5></label>";

					print "<div>";
					print "<div>&#160;</div>";
					print "<label>Caption 15:</label>";
										
					if (!empty($row['Caption_15'])) { 
						print "<input type=\"text\" name=\"caption_15\" value=\"$row[Caption_15]\" class=\"form-control\" placeholder=\"Enter image caption...\">";				
					} else {
						print "<input type=\"text\" name=\"caption_15\" value=\"$row[Caption_15]\" class=\"form-control\" placeholder=\"Not defined caption...\">";
					}		
					print "</div>";
										
					print "<div class=\"form-group\">";
					print "<div>&#160;</div>";
					print "<label>Upload Imatge</label>";
					print "<input type='file' name='fitxer_15' class='file' data-show-preview='false' data-show-upload='false' value='".$row['Image_15']."'>";
					print "</div>";															
					print "</td>";					                    					
					print "</tr>"; 
					/////////////////End Image 15/////////////////////////////////////
					//////////////////////////Image_16//////////////////////////////// 
					print "<tr>";                        				
					print "<td valign=\"top\">";					
					print "<figure>";
					print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
					
					if ($row['Image_16']) {
						echo "<img src='../uploads/".$row['Image_16']."' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
						print "<div>&#160;</div>";
					print "<input type='checkbox' name='borraimg_16' value='1'><label>&nbspDelete Image</label>";
					} else {
						echo "<img src='./dist/img/noimage.png' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
					}
					print "</figure>";
					print "</div>";
					print "</td>";
					
					print "<td>";
					print "<label>Imatge 16:<h5 style='display:inline'>&nbsp&nbsp$row[Image_16]</h5></label>";

					print "<div>";
					print "<div>&#160;</div>";
					print "<label>Caption 16:</label>";
										
					if (!empty($row['Caption_16'])) { 
						print "<input type=\"text\" name=\"caption_16\" value=\"$row[Caption_16]\" class=\"form-control\" placeholder=\"Enter image caption...\">";				
					} else {
						print "<input type=\"text\" name=\"caption_16\" value=\"$row[Caption_16]\" class=\"form-control\" placeholder=\"Not defined caption...\">";
					}		
					print "</div>";
										
					print "<div class=\"form-group\">";
					print "<div>&#160;</div>";
					print "<label>Upload Imatge</label>";
					print "<input type='file' name='fitxer_16' class='file' data-show-preview='false' data-show-upload='false' value='".$row['Image_16']."'>";
					print "</div>";															
					print "</td>";					                    					
					print "</tr>"; 
					/////////////////End Image 16/////////////////////////////////////
					//////////////////////////Image_17//////////////////////////////// 
					print "<tr>";                        				
					print "<td valign=\"top\">";					
					print "<figure>";
					print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
					
					if ($row['Image_17']) {
						echo "<img src='../uploads/".$row['Image_17']."' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
						print "<div>&#160;</div>";
					print "<input type='checkbox' name='borraimg_17' value='1'><label>&nbspDelete Image</label>";
					} else {
						echo "<img src='./dist/img/noimage.png' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
					}
					print "</figure>";
					print "</div>";
					print "</td>";
					
					print "<td>";
					print "<label>Imatge 17:<h5 style='display:inline'>&nbsp&nbsp$row[Image_17]</h5></label>";

					print "<div>";
					print "<div>&#160;</div>";
					print "<label>Caption 17:</label>";
										
					if (!empty($row['Caption_17'])) { 
						print "<input type=\"text\" name=\"caption_17\" value=\"$row[Caption_17]\" class=\"form-control\" placeholder=\"Enter image caption...\">";				
					} else {
						print "<input type=\"text\" name=\"caption_17\" value=\"$row[Caption_17]\" class=\"form-control\" placeholder=\"Not defined caption...\">";
					}		
					print "</div>";
										
					print "<div class=\"form-group\">";
					print "<div>&#160;</div>";
					print "<label>Upload Imatge</label>";
					print "<input type='file' name='fitxer_17' class='file' data-show-preview='false' data-show-upload='false' value='".$row['Image_17']."'>";
					print "</div>";															
					print "</td>";					                    					
					print "</tr>"; 
					/////////////////End Image 17/////////////////////////////////////
					//////////////////////////Image_18//////////////////////////////// 
					print "<tr>";                        				
					print "<td valign=\"top\">";					
					print "<figure>";
					print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
					
					if ($row['Image_18']) {
						echo "<img src='../uploads/".$row['Image_18']."' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
						print "<div>&#160;</div>";
					print "<input type='checkbox' name='borraimg_18' value='1'><label>&nbspDelete Image</label>";
					} else {
						echo "<img src='./dist/img/noimage.png' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
					}
					print "</figure>";
					print "</div>";
					print "</td>";
					
					print "<td>";
					print "<label>Imatge 18:<h5 style='display:inline'>&nbsp&nbsp$row[Image_18]</h5></label>";

					print "<div>";
					print "<div>&#160;</div>";
					print "<label>Caption 18:</label>";
										
					if (!empty($row['Caption_18'])) { 
						print "<input type=\"text\" name=\"caption_18\" value=\"$row[Caption_18]\" class=\"form-control\" placeholder=\"Enter image caption...\">";				
					} else {
						print "<input type=\"text\" name=\"caption_18\" value=\"$row[Caption_18]\" class=\"form-control\" placeholder=\"Not defined caption...\">";
					}		
					print "</div>";
										
					print "<div class=\"form-group\">";
					print "<div>&#160;</div>";
					print "<label>Upload Imatge</label>";
					print "<input type='file' name='fitxer_18' class='file' data-show-preview='false' data-show-upload='false' value='".$row['Image_18']."'>";
					print "</div>";															
					print "</td>";					                    					
					print "</tr>"; 
					/////////////////End Image 18/////////////////////////////////////
					//////////////////////////Image_19//////////////////////////////// 
					print "<tr>";                        				
					print "<td valign=\"top\">";					
					print "<figure>";
					print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
					
					if ($row['Image_19']) {
						echo "<img src='../uploads/".$row['Image_19']."' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
						print "<div>&#160;</div>";
					print "<input type='checkbox' name='borraimg_19' value='1'><label>&nbspDelete Image</label>";
					} else {
						echo "<img src='./dist/img/noimage.png' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
					}
					print "</figure>";
					print "</div>";
					print "</td>";
					
					print "<td>";
					print "<label>Imatge 19:<h5 style='display:inline'>&nbsp&nbsp$row[Image_19]</h5></label>";

					print "<div>";
					print "<div>&#160;</div>";
					print "<label>Caption 19:</label>";
										
					if (!empty($row['Caption_19'])) { 
						print "<input type=\"text\" name=\"caption_19\" value=\"$row[Caption_19]\" class=\"form-control\" placeholder=\"Enter image caption...\">";				
					} else {
						print "<input type=\"text\" name=\"caption_19\" value=\"$row[Caption_19]\" class=\"form-control\" placeholder=\"Not defined caption...\">";
					}		
					print "</div>";
										
					print "<div class=\"form-group\">";
					print "<div>&#160;</div>";
					print "<label>Upload Imatge</label>";
					print "<input type='file' name='fitxer_19' class='file' data-show-preview='false' data-show-upload='false' value='".$row['Image_19']."'>";
					print "</div>";															
					print "</td>";					                    					
					print "</tr>"; 
					/////////////////End Image 19/////////////////////////////////////
					//////////////////////////Image_20//////////////////////////////// 
					print "<tr>";                        				
					print "<td valign=\"top\">";					
					print "<figure>";
					print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
					
					if ($row['Image_20']) {
						echo "<img src='../uploads/".$row['Image_20']."' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
						print "<div>&#160;</div>";
					print "<input type='checkbox' name='borraimg_20' value='1'><label>&nbspDelete Image</label>";
					} else {
						echo "<img src='./dist/img/noimage.png' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
					}
					print "</figure>";
					print "</div>";
					print "</td>";
					
					print "<td>";
					print "<label>Imatge 20:<h5 style='display:inline'>&nbsp&nbsp$row[Image_20]</h5></label>";

					print "<div>";
					print "<div>&#160;</div>";
					print "<label>Caption 20:</label>";
										
					if (!empty($row['Caption_20'])) { 
						print "<input type=\"text\" name=\"caption_20\" value=\"$row[Caption_20]\" class=\"form-control\" placeholder=\"Enter image caption...\">";				
					} else {
						print "<input type=\"text\" name=\"caption_20\" value=\"$row[Caption_20]\" class=\"form-control\" placeholder=\"Not defined caption...\">";
					}		
					print "</div>";
										
					print "<div class=\"form-group\">";
					print "<div>&#160;</div>";
					print "<label>Upload Imatge</label>";
					print "<input type='file' name='fitxer_20' class='file' data-show-preview='false' data-show-upload='false' value='".$row['Image_20']."'>";
					print "</div>";															
					print "</td>";					                    					
					print "</tr>"; 
					/////////////////End Image 20/////////////////////////////////////
					//////////////////////////Image_21//////////////////////////////// 
					print "<tr>";                        				
					print "<td valign=\"top\">";					
					print "<figure>";
					print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
					
					if ($row['Image_21']) {
						echo "<img src='../uploads/".$row['Image_21']."' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
						print "<div>&#160;</div>";
					print "<input type='checkbox' name='borraimg_21' value='1'><label>&nbspDelete Image</label>";
					} else {
						echo "<img src='./dist/img/noimage.png' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
					}
					print "</figure>";
					print "</div>";
					print "</td>";
					
					print "<td>";
					print "<label>Imatge 21:<h5 style='display:inline'>&nbsp&nbsp$row[Image_21]</h5></label>";

					print "<div>";
					print "<div>&#160;</div>";
					print "<label>Caption 21:</label>";
										
					if (!empty($row['Caption_21'])) { 
						print "<input type=\"text\" name=\"caption_21\" value=\"$row[Caption_21]\" class=\"form-control\" placeholder=\"Enter image caption...\">";				
					} else {
						print "<input type=\"text\" name=\"caption_21\" value=\"$row[Caption_21]\" class=\"form-control\" placeholder=\"Not defined caption...\">";
					}		
					print "</div>";
										
					print "<div class=\"form-group\">";
					print "<div>&#160;</div>";
					print "<label>Upload Imatge</label>";
					print "<input type='file' name='fitxer_21' class='file' data-show-preview='false' data-show-upload='false' value='".$row['Image_21']."'>";
					print "</div>";															
					print "</td>";					                    					
					print "</tr>"; 
					/////////////////End Image 21/////////////////////////////////////
					//////////////////////////Image_22//////////////////////////////// 
					print "<tr>";                        				
					print "<td valign=\"top\">";					
					print "<figure>";
					print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
					
					if ($row['Image_22']) {
						echo "<img src='../uploads/".$row['Image_22']."' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
						print "<div>&#160;</div>";
					print "<input type='checkbox' name='borraimg_22' value='1'><label>&nbspDelete Image</label>";
					} else {
						echo "<img src='./dist/img/noimage.png' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
					}
					print "</figure>";
					print "</div>";
					print "</td>";
					
					print "<td>";
					print "<label>Imatge 22:<h5 style='display:inline'>&nbsp&nbsp$row[Image_22]</h5></label>";

					print "<div>";
					print "<div>&#160;</div>";
					print "<label>Caption 22:</label>";
										
					if (!empty($row['Caption_22'])) { 
						print "<input type=\"text\" name=\"caption_22\" value=\"$row[Caption_22]\" class=\"form-control\" placeholder=\"Enter image caption...\">";				
					} else {
						print "<input type=\"text\" name=\"caption_22\" value=\"$row[Caption_22]\" class=\"form-control\" placeholder=\"Not defined caption...\">";
					}		
					print "</div>";
										
					print "<div class=\"form-group\">";
					print "<div>&#160;</div>";
					print "<label>Upload Imatge</label>";
					print "<input type='file' name='fitxer_22' class='file' data-show-preview='false' data-show-upload='false' value='".$row['Image_22']."'>";
					print "</div>";															
					print "</td>";					                    					
					print "</tr>"; 
					/////////////////End Image 22/////////////////////////////////////
					//////////////////////////Image_23//////////////////////////////// 
					print "<tr>";                        				
					print "<td valign=\"top\">";					
					print "<figure>";
					print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
					
					if ($row['Image_23']) {
						echo "<img src='../uploads/".$row['Image_23']."' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
						print "<div>&#160;</div>";
					print "<input type='checkbox' name='borraimg_23' value='1'><label>&nbspDelete Image</label>";
					} else {
						echo "<img src='./dist/img/noimage.png' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
					}
					print "</figure>";
					print "</div>";
					print "</td>";
					
					print "<td>";
					print "<label>Imatge 23:<h5 style='display:inline'>&nbsp&nbsp$row[Image_23]</h5></label>";

					print "<div>";
					print "<div>&#160;</div>";
					print "<label>Caption 23:</label>";
										
					if (!empty($row['Caption_23'])) { 
						print "<input type=\"text\" name=\"caption_23\" value=\"$row[Caption_23]\" class=\"form-control\" placeholder=\"Enter image caption...\">";				
					} else {
						print "<input type=\"text\" name=\"caption_23\" value=\"$row[Caption_23]\" class=\"form-control\" placeholder=\"Not defined caption...\">";
					}		
					print "</div>";
										
					print "<div class=\"form-group\">";
					print "<div>&#160;</div>";
					print "<label>Upload Imatge</label>";
					print "<input type='file' name='fitxer_23' class='file' data-show-preview='false' data-show-upload='false' value='".$row['Image_23']."'>";
					print "</div>";															
					print "</td>";					                    					
					print "</tr>"; 
					/////////////////End Image 23/////////////////////////////////////
					//////////////////////////Image_24//////////////////////////////// 
					print "<tr>";                        				
					print "<td valign=\"top\">";					
					print "<figure>";
					print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
					
					if ($row['Image_24']) {
						echo "<img src='../uploads/".$row['Image_24']."' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
						print "<div>&#160;</div>";
					print "<input type='checkbox' name='borraimg_24' value='1'><label>&nbspDelete Image</label>";
					} else {
						echo "<img src='./dist/img/noimage.png' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
					}
					print "</figure>";
					print "</div>";
					print "</td>";
					
					print "<td>";
					print "<label>Imatge 24:<h5 style='display:inline'>&nbsp&nbsp$row[Image_24]</h5></label>";

					print "<div>";
					print "<div>&#160;</div>";
					print "<label>Caption 24:</label>";
										
					if (!empty($row['Caption_24'])) { 
						print "<input type=\"text\" name=\"caption_24\" value=\"$row[Caption_24]\" class=\"form-control\" placeholder=\"Enter image caption...\">";				
					} else {
						print "<input type=\"text\" name=\"caption_24\" value=\"$row[Caption_24]\" class=\"form-control\" placeholder=\"Not defined caption...\">";
					}		
					print "</div>";
										
					print "<div class=\"form-group\">";
					print "<div>&#160;</div>";
					print "<label>Upload Imatge</label>";
					print "<input type='file' name='fitxer_24' class='file' data-show-preview='false' data-show-upload='false' value='".$row['Image_24']."'>";
					print "</div>";															
					print "</td>";					                    					
					print "</tr>"; 
					/////////////////End Image 24/////////////////////////////////////
					//////////////////////////Image_25//////////////////////////////// 
					print "<tr>";                        				
					print "<td valign=\"top\">";					
					print "<figure>";
					print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
					
					if ($row['Image_25']) {
						echo "<img src='../uploads/".$row['Image_25']."' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
						print "<div>&#160;</div>";
					print "<input type='checkbox' name='borraimg_25' value='1'><label>&nbspDelete Image</label>";
					} else {
						echo "<img src='./dist/img/noimage.png' alt='foto' width='100%' height='150px' style=\"border:1px solid #a6a6a6\">";
					}
					print "</figure>";
					print "</div>";
					print "</td>";
					
					print "<td>";
					print "<label>Imatge 25:<h5 style='display:inline'>&nbsp&nbsp$row[Image_25]</h5></label>";

					print "<div>";
					print "<div>&#160;</div>";
					print "<label>Caption 25:</label>";
										
					if (!empty($row['Caption_25'])) { 
						print "<input type=\"text\" name=\"caption_25\" value=\"$row[Caption_25]\" class=\"form-control\" placeholder=\"Enter image caption...\">";				
					} else {
						print "<input type=\"text\" name=\"caption_25\" value=\"$row[Caption_25]\" class=\"form-control\" placeholder=\"Not defined caption...\">";
					}		
					print "</div>";
										
					print "<div class=\"form-group\">";
					print "<div>&#160;</div>";
					print "<label>Upload Imatge</label>";
					print "<input type='file' name='fitxer_25' class='file' data-show-preview='false' data-show-upload='false' value='".$row['Image_25']."'>";
					print "</div>";															
					print "</td>";					                    					
					print "</tr>"; 
					/////////////////End Image 25/////////////////////////////////////					
				
					print "</tbody>";	
					print "</table>";
					//.table-responsive					
					print "</div>";				
					print "<button type=\"submit\" name=\"modif\" value=\"modif\" class=\"btn btn-default btn-outline btn-circle btn-lg\"><i class=\"fa fa-check\"></i></button>";       
					print "<button type=\"reset\" name=\"cancel\" value=\"cancel\"onclick=\"location.href='?sec=post&sub=lst'\" class=\"btn btn-default btn-outline btn-circle btn-lg\"><i class=\"fa fa-times\"></i></button>"; 					
					print "<input type=\"hidden\" name=\"mod\" value=\"$row[ID]\">";
					print "</form>";
					print "</div>";
					print "</div>";
					print "</div>"; 	
					print "</div>";		
					}
				}
			}
			
            //ELIMINAR UN ELEMENT A PARTIR DEL LLISTAT
            if(isset($_POST['del']) && !empty($_POST['del'])) {
                if(isset($_POST['borra']) && !empty($_POST['borra'])) {
                    $stmt2=$conn->prepare('SELECT Image_1,Image_2,Image_3,Image_4,Image_5,Image_6,Image_7,Image_8,Image_9,Image_10,Image_11,Image_12,Image_13,Image_14,Image_15,Image_16,Image_17,Image_18,Image_19,Image_20,Image_21,Image_22,Image_23,Image_24,Image_25 FROM post WHERE ID=:id');
                    $stmt2->execute(array(':id'=>$_POST['del']));
                    $rows2=$stmt2->fetch(PDO::FETCH_ASSOC);
                    //Consulta eliminació
                    $stmt=$conn->prepare('DELETE FROM post WHERE ID=:id');
                    $rows=$stmt->execute(array(':id'=>$_POST['del']));
                    if($rows>0) {
						//////Image-1
                        if (file_exists('../uploads/' . $rows2['Image_1'])) {
                            if($rows2['Image_1']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_1'])) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...<p>";
                                    print "</div>";
                                } else {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
                                    print "</div>";
                                }
                            }
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post Deleted Succesfull...</p>";
                            print "</div>";
							echo "<meta http-equiv=\"refresh\" content=\"2\">";
                        }
						//////Image-2
                        if (file_exists('../uploads/' . $rows2['Image_2'])) {
                            if($rows2['Image_2']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_2'])) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
                                    print "</div>";
									echo "<meta http-equiv=\"refresh\" content=\"2\">";
                                } else {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted....</p>";
                                    print "</div>";
                                }
                            }
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post Deleted Succesfull...</p>";
                            print "</div>";
							echo "<meta http-equiv=\"refresh\" content=\"2\">";
                        }
						//////Image-3
                        if (file_exists('../uploads/' . $rows2['Image_3'])) {
                            if($rows2['Image_3']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_3'])) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
                                    print "</div>";
									echo "<meta http-equiv=\"refresh\" content=\"2\">";
                                } else {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
                                    print "</div>";
                                }
                            }
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post Deleted Succesfull...</p>";
                            print "</div>";
							echo "<meta http-equiv=\"refresh\" content=\"2\">";
                        }
						//////Image-4
                        if (file_exists('../uploads/' . $rows2['Image_4'])) {
                            if($rows2['Image_4']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_4'])) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
                                    print "</div>";
									echo "<meta http-equiv=\"refresh\" content=\"2\">";
                                } else {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
                                    print "</div>";
                                }
                            }
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post Deleted Succesfull...</p>";
                            print "</div>";
							echo "<meta http-equiv=\"refresh\" content=\"2\">";
                        }
						//////Image-5
                        if (file_exists('../uploads/' . $rows2['Image_5'])) {
                            if($rows2['Image_5']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_5'])) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
                                    print "</div>";
									echo "<meta http-equiv=\"refresh\" content=\"2\">";
                                } else {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
                                    print "</div>";
                                }
                            }
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post Deleted Succesfull...</p>";
                            print "</div>";
							echo "<meta http-equiv=\"refresh\" content=\"2\">";
                        }
						//////Image-6
                        if (file_exists('../uploads/' . $rows2['Image_6'])) {
                            if($rows2['Image_6']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_6'])) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
                                    print "</div>";
									echo "<meta http-equiv=\"refresh\" content=\"2\">";
                                } else {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
                                    print "</div>";
                                }
                            }
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post Deleted Succesfull...</p>";
                            print "</div>";
							echo "<meta http-equiv=\"refresh\" content=\"2\">";
                        }

						//////Image-7
                        if (file_exists('../uploads/' . $rows2['Image_7'])) {
                            if($rows2['Image_7']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_7'])) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
                                    print "</div>";
									echo "<meta http-equiv=\"refresh\" content=\"2\">";
                                } else {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
                                    print "</div>";
                                }
                            }
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post Deleted Succesfull...</p>";
                            print "</div>";
							echo "<meta http-equiv=\"refresh\" content=\"2\">";
                        }
						//////Image-8
                        if (file_exists('../uploads/' . $rows2['Image_8'])) {
                            if($rows2['Image_8']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_8'])) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
                                    print "</div>";
									echo "<meta http-equiv=\"refresh\" content=\"2\">";
                                } else {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
                                    print "</div>";
                                }
                            }
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post Deleted Succesfull...</p>";
                            print "</div>";
							echo "<meta http-equiv=\"refresh\" content=\"2\">";
                        }
						//////Image-9
                        if (file_exists('../uploads/' . $rows2['Image_9'])) {
                            if($rows2['Image_9']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_9'])) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
                                    print "</div>";
									echo "<meta http-equiv=\"refresh\" content=\"2\">";
                                } else {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
                                    print "</div>";
                                }
                            }
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post Deleted Succesfull...</p>";
                            print "</div>";
							echo "<meta http-equiv=\"refresh\" content=\"2\">";
                        }
						//////Image-10
                        if (file_exists('../uploads/' . $rows2['Image_10'])) {
                            if($rows2['Image_10']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_10'])) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
                                    print "</div>";
									echo "<meta http-equiv=\"refresh\" content=\"2\">";
                                } else {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
                                    print "</div>";
                                }
                            }
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post Deleted Succesfull...</p>";
                            print "</div>";
							echo "<meta http-equiv=\"refresh\" content=\"2\">";
                        }
						//////Image-11
                        if (file_exists('../uploads/' . $rows2['Image_11'])) {
                            if($rows2['Image_11']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_11'])) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
                                    print "</div>";
									echo "<meta http-equiv=\"refresh\" content=\"2\">";
                                } else {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
                                    print "</div>";
                                }
                            }
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post Deleted Succesfull...</p>";
                            print "</div>";
							echo "<meta http-equiv=\"refresh\" content=\"2\">";
                        }
						//////Image-12
                        if (file_exists('../uploads/' . $rows2['Image_12'])) {
                            if($rows2['Image_12']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_12'])) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
                                    print "</div>";
									echo "<meta http-equiv=\"refresh\" content=\"2\">";
                                } else {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
                                    print "</div>";
                                }
                            }
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post Deleted Succesfull...</p>";
                            print "</div>";
							echo "<meta http-equiv=\"refresh\" content=\"2\">";
                        }
						//////Image-13
                        if (file_exists('../uploads/' . $rows2['Image_13'])) {
                            if($rows2['Image_13']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_13'])) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
                                    print "</div>";
									echo "<meta http-equiv=\"refresh\" content=\"2\">";
                                } else {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
                                    print "</div>";
                                }
                            }
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post Deleted Succesfull...</p>";
                            print "</div>";
							echo "<meta http-equiv=\"refresh\" content=\"2\">";
                        }
						//////Image-14
                        if (file_exists('../uploads/' . $rows2['Image_14'])) {
                            if($rows2['Image_14']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_14'])) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
                                    print "</div>";
									echo "<meta http-equiv=\"refresh\" content=\"2\">";
                                } else {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
                                    print "</div>";
                                }
                            }
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post Deleted Succesfull...</p>";
                            print "</div>";
							echo "<meta http-equiv=\"refresh\" content=\"2\">";
                        }
						//////Image-15
                        if (file_exists('../uploads/' . $rows2['Image_15'])) {
                            if($rows2['Image_15']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_15'])) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
                                    print "</div>";
									echo "<meta http-equiv=\"refresh\" content=\"2\">";
                                } else {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
                                    print "</div>";
                                }
                            }
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post Deleted Succesfull...</p>";
                            print "</div>";
							echo "<meta http-equiv=\"refresh\" content=\"2\">";
                        }
						//////Image-16
                        if (file_exists('../uploads/' . $rows2['Image_16'])) {
                            if($rows2['Image_16']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_16'])) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
                                    print "</div>";
									echo "<meta http-equiv=\"refresh\" content=\"2\">";
                                } else {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
                                    print "</div>";
                                }
                            }
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post Deleted Succesfull...</p>";
                            print "</div>";
							echo "<meta http-equiv=\"refresh\" content=\"2\">";
                        }
						//////Image-17
                        if (file_exists('../uploads/' . $rows2['Image_17'])) {
                            if($rows2['Image_17']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_17'])) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
                                    print "</div>";
									echo "<meta http-equiv=\"refresh\" content=\"2\">";
                                } else {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
                                    print "</div>";
                                }
                            }
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post Deleted Succesfull...</p>";
                            print "</div>";
							echo "<meta http-equiv=\"refresh\" content=\"2\">";
                        }
						//////Image-18
                        if (file_exists('../uploads/' . $rows2['Image_18'])) {
                            if($rows2['Image_18']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_18'])) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
                                    print "</div>";
									echo "<meta http-equiv=\"refresh\" content=\"2\">";
                                } else {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
                                    print "</div>";
                                }
                            }
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post Deleted Succesfull...</p>";
                            print "</div>";
							echo "<meta http-equiv=\"refresh\" content=\"2\">";
                        }
						//////Image-19
                        if (file_exists('../uploads/' . $rows2['Image_19'])) {
                            if($rows2['Image_19']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_19'])) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
                                    print "</div>";
									echo "<meta http-equiv=\"refresh\" content=\"2\">";
                                } else {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
                                    print "</div>";
                                }
                            }
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post Deleted Succesfull...</p>";
                            print "</div>";
							echo "<meta http-equiv=\"refresh\" content=\"2\">";
                        }
						//////Image-20
                        if (file_exists('../uploads/' . $rows2['Image_20'])) {
                            if($rows2['Image_20']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_20'])) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
                                    print "</div>";
									echo "<meta http-equiv=\"refresh\" content=\"2\">";
                                } else {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
                                    print "</div>";
                                }
                            }
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post Deleted Succesfull...</p>";
                            print "</div>";
							echo "<meta http-equiv=\"refresh\" content=\"2\">";
                        }
						//////Image-21
                        if (file_exists('../uploads/' . $rows2['Image_21'])) {
                            if($rows2['Image_21']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_21'])) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
                                    print "</div>";
									echo "<meta http-equiv=\"refresh\" content=\"2\">";
                                } else {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
                                    print "</div>";
                                }
                            }
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post Deleted Succesfull...</p>";
                            print "</div>";
							echo "<meta http-equiv=\"refresh\" content=\"2\">";
                        }
						//////Image-22
                        if (file_exists('../uploads/' . $rows2['Image_22'])) {
                            if($rows2['Image_22']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_22'])) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
                                    print "</div>";
									echo "<meta http-equiv=\"refresh\" content=\"2\">";
                                } else {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
                                    print "</div>";
                                }
                            }
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post Deleted Succesfull...</p>";
                            print "</div>";
							echo "<meta http-equiv=\"refresh\" content=\"2\">";
                        }
						//////Image-23
                        if (file_exists('../uploads/' . $rows2['Image_23'])) {
                            if($rows2['Image_23']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_23'])) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
                                    print "</div>";
									echo "<meta http-equiv=\"refresh\" content=\"2\">";
                                } else {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
                                    print "</div>";
                                }
                            }
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post Deleted Succesfull...</p>";
                            print "</div>";
							echo "<meta http-equiv=\"refresh\" content=\"2\">";
                        }
						//////Image-24
                        if (file_exists('../uploads/' . $rows2['Image_24'])) {
                            if($rows2['Image_24']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_24'])) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
                                    print "</div>";
									echo "<meta http-equiv=\"refresh\" content=\"2\">";
                                } else {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
                                    print "</div>";
                                }
                            }
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post Deleted Succesfull...</p>";
                            print "</div>";
							echo "<meta http-equiv=\"refresh\" content=\"2\">";
                        }
						//////Image-25
                        if (file_exists('../uploads/' . $rows2['Image_25'])) {
                            if($rows2['Image_25']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_25'])) {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image deleted...</p>";
                                    print "</div>";
									echo "<meta http-equiv=\"refresh\" content=\"2\">";
                                } else {
                                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Image not deleted...</p>";
                                    print "</div>";
                                }
                            }
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post Deleted Succesfull...</p>";
                            print "</div>";
							echo "<meta http-equiv=\"refresh\" content=\"2\">";
                        }							
                    }
                    else{
                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error deleting the Post...</p>";
                        print "</div>";
                    }
                }
                else{
                    print "<form action=\"\" method=\"post\">";
                    print "<div class=\"alert alert-success alert-dismissable\"><p>Are you sure to delete the record???</p>";
					
                    $stmt6=$conn->prepare('SELECT * FROM post WHERE ID=:id');
                    $stmt6->execute(array(':id'=>$_POST['del']));
                    $row2=$stmt6->fetch(PDO::FETCH_ASSOC);
                    print "<p>Post ".$row2['Title']."</p>";
									
                    print "<p><button type=\"submit\" name=\"borra\" value=\"borra\" class=\"btn btn-outline btn-default\"><i class=\"fa fa-check\"></i> Delete</button>";
					print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default\" onclick=\"location.href='?sec=post&sub=lst'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
                    print "<input type=\"hidden\" name=\"del\" value=\"".$_POST['del']."\">";
                    print "</div>";
                    print "</form>";
                }
            }
            //DUPLICAR REGISTRES
            if(isset($_POST['dup']) && !empty($_POST['dup'])) {
                $stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
                $stmt->execute(array(':id'=>$_POST['dup']));
                $row=$stmt->fetch(PDO::FETCH_ASSOC);
												
				$stmt = $conn->prepare('INSERT INTO post (Title,Description,Data,Image_1,Caption_1,Image_2,Caption_2,Image_3,Caption_3,Image_4,Caption_4,Image_5,Caption_5,Image_6,Caption_6,Image_7,Caption_7,Image_8,Caption_8,Image_9,Caption_9,Image_10,Caption_10,Image_11,Caption_11,Image_12,Caption_12,Image_13,Caption_13,Image_14,Caption_14,Image_15,Caption_15,Image_16,Caption_16,Image_17,Caption_17,Image_18,Caption_18,Image_19,Caption_19,Image_20,Caption_20,Image_21,Caption_21,Image_22,Caption_22,Image_23,Caption_23,Image_24,Caption_24,Image_25,Caption_25,Permission) VALUES (:title,:descr,:data,:img_1,:capt_1,:img_2,:capt_2,:img_3,:capt_3
				,:img_4,:capt_4,:img_5,:capt_5,:img_6,:capt_6,:img_7,:capt_7,:img_8,:capt_8,:img_9,:capt_9,:img_10,:capt_10,:img_11,:capt_11,:img_12,:capt_12,:img_13,:capt_13,:img_14,:capt_14,:img_15,:capt_15,:img_16,:capt_16,:img_17,:capt_17,:img_18,:capt_18,:img_19,:capt_19,:img_20,:capt_20,:img_21,:capt_21,:img_22,:capt_22,:img_23,:capt_23,:img_24,:capt_24,:img_25,:capt_25,:permission)');
				
				//Dupliquem noticie amb la nova Date i Time...
				
                date_default_timezone_set('Europe/Madrid');
					
               	if ($row['Data'] == null or ($row['Data'] == "0000-00-00 00:00:00") ){
                    $row['Data'] = date("Y-m-d H:i:s");
                }
				////				
				$data = $stmt->execute(array(':title' => $row['Title'], ':data' => $row['Data'], ':descr' => $row['Description'], ':img_1' => $row['Image_1'],':capt_1' => $row['Caption_1'],':img_2' => $row['Image_2'],':capt_2' => $row['Caption_2'],':img_3' => $row['Image_3'],':capt_3' => $row['Caption_3']   ,':img_4' => $row['Image_4'],':capt_4' => $row['Caption_4'],':img_5' => $row['Image_5'],':capt_5' => $row['Caption_5'],':img_6' => $row['Image_6'],':capt_6' => $row['Caption_6'],':img_7' => $row['Image_7'],':capt_7' => $row['Caption_7'],':img_8' => $row['Image_8'],':capt_8' => $row['Caption_8'],':img_9' => $row['Image_9'],':capt_9' => $row['Caption_9']
				,':img_10' => $row['Image_10'],':capt_10' => $row['Caption_10'],':img_11' => $row['Image_11'],':capt_11' => $row['Caption_11'],':img_12' => $row['Image_12'],':capt_12' => $row['Caption_12'],':img_13' => $row['Image_13'],':capt_13' => $row['Caption_13'],':img_14' => $row['Image_14'],':capt_14' => $row['Caption_14'],':img_15' => $row['Image_15'],':capt_15' => $row['Caption_15'],':img_16' => $row['Image_16'],':capt_16' => $row['Caption_16'],':img_17' => $row['Image_17'],':capt_17' => $row['Caption_17'],':img_18' => $row['Image_18'],':capt_18' => $row['Caption_18'],':img_19' => $row['Image_19'],':capt_19' => $row['Caption_19'],':img_20' => $row['Image_20'],':capt_20' => $row['Caption_20']
				,':img_21' => $row['Image_21'],':capt_21' => $row['Caption_21'],':img_22' => $row['Image_22'],':capt_22' => $row['Caption_22'],':img_23' => $row['Image_23'],':capt_23' => $row['Caption_23'],':img_24' => $row['Image_24'],':capt_24' => $row['Caption_24'],':img_25' => $row['Image_25'],':capt_25' => $row['Caption_25'],':permission' => $permissions));
				
                if ($data == 1) {
                    //MODIFICAR LA IMATGE-1 COPIADA AMB EL NOU ID DE LA TAULA - DUPLICAT
                    $long=strlen($row['ID']);
					
					/////////IMG_1
                    if ($row['Image_1'] != null) {
                        $stmt3 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                        $stmt3->execute();
                        $row_max = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $fitxer_1=substr($row['Image_1'],6+$long+1);
                        $fitxer_imatge_1 = "IMG_1_" . $row_max['MID'] . "_" . $fitxer_1 ;
                        $stmt5 = $conn->prepare('UPDATE post SET Image_1=:img_1 WHERE ID=:id');
                        $stmt5->execute(array(':img_1'=>$fitxer_imatge_1,':id'=>$row_max['MID']));
                        //pujada imatge al servidor
                        $dir_pujada = '../uploads/';
                        //Crear el directori si no existeix
                        if (!file_exists($dir_pujada)) {
                            mkdir($dir_pujada, 0755, true);
                        }
                        //Comprovar el tipus de fitxer
                        $extensio = strtolower(substr($fitxer_imatge_1,-3));
                        if ($extensio != 'jpg' && $extensio != 'gif' && $extensio != 'png') {
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                        } else {
                            //pujar el fitxer
                            if (!copy("../uploads/".$row['Image_1'], "../uploads/".$fitxer_imatge_1)) {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                            }
                        }
                    }
					///////IMG_2
                    if ($row['Image_2'] != null) {
                        $stmt3 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                        $stmt3->execute();
                        $row_max = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $fitxer_2=substr($row['Image_2'],6+$long+1);
                        $fitxer_imatge_2 = "IMG_2_" . $row_max['MID'] . "_" . $fitxer_2 ;
                        $stmt5 = $conn->prepare('UPDATE post SET Image_2=:img_2 WHERE ID=:id');
                        $stmt5->execute(array(':img_2'=>$fitxer_imatge_2,':id'=>$row_max['MID']));
                        //pujada imatge al servidor
                        $dir_pujada = '../uploads/';
                        //Crear el directori si no existeix
                        if (!file_exists($dir_pujada)) {
                            mkdir($dir_pujada, 0755, true);
                        }
                        //Comprovar el tipus de fitxer
                        $extensio = strtolower(substr($fitxer_imatge_2,-3));
                        if ($extensio != 'jpg' && $extensio != 'gif' && $extensio != 'png') {
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                        } else {
                            //pujar el fitxer
                            if (!copy("../uploads/".$row['Image_2'], "../uploads/".$fitxer_imatge_2)) {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                            }
                        }
                    }
                    /////IMG_3
                    if ($row['Image_3'] != null) {
                        $stmt3 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                        $stmt3->execute();
                        $row_max = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $fitxer_3=substr($row['Image_3'],6+$long+1);
                        $fitxer_imatge_3 = "IMG_3_" . $row_max['MID'] . "_" . $fitxer_3 ;
                        $stmt5 = $conn->prepare('UPDATE post SET Image_3=:img_3 WHERE ID=:id');
                        $stmt5->execute(array(':img_3'=>$fitxer_imatge_3,':id'=>$row_max['MID']));
                        //pujada imatge al servidor
                        $dir_pujada = '../uploads/';
                        //Crear el directori si no existeix
                        if (!file_exists($dir_pujada)) {
                            mkdir($dir_pujada, 0755, true);
                        }
                        //Comprovar el tipus de fitxer
                        $extensio = strtolower(substr($fitxer_imatge_3,-3));
                        if ($extensio != 'jpg' && $extensio != 'gif' && $extensio != 'png') {
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                        } else {
                            //pujar el fitxer
                            if (!copy("../uploads/".$row['Image_3'], "../uploads/".$fitxer_imatge_3)) {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                            }
                        }
                    }	
                    /////IMG_4
                    if ($row['Image_4'] != null) {
                        $stmt3 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                        $stmt3->execute();
                        $row_max = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $fitxer_4=substr($row['Image_4'],6+$long+1);
                        $fitxer_imatge_4 = "IMG_4_" . $row_max['MID'] . "_" . $fitxer_4 ;
                        $stmt5 = $conn->prepare('UPDATE post SET Image_4=:img_4 WHERE ID=:id');
                        $stmt5->execute(array(':img_4'=>$fitxer_imatge_4,':id'=>$row_max['MID']));
                        //pujada imatge al servidor
                        $dir_pujada = '../uploads/';
                        //Crear el directori si no existeix
                        if (!file_exists($dir_pujada)) {
                            mkdir($dir_pujada, 0755, true);
                        }
                        //Comprovar el tipus de fitxer
                        $extensio = strtolower(substr($fitxer_imatge_4,-3));
                        if ($extensio != 'jpg' && $extensio != 'gif' && $extensio != 'png') {
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                        } else {
                            //pujar el fitxer
                            if (!copy("../uploads/".$row['Image_4'], "../uploads/".$fitxer_imatge_4)) {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                            }
                        }
                    }
                    /////IMG_5
                    if ($row['Image_5'] != null) {
                        $stmt3 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                        $stmt3->execute();
                        $row_max = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $fitxer_5=substr($row['Image_5'],6+$long+1);
                        $fitxer_imatge_5 = "IMG_5_" . $row_max['MID'] . "_" . $fitxer_5 ;
                        $stmt5 = $conn->prepare('UPDATE post SET Image_5=:img_5 WHERE ID=:id');
                        $stmt5->execute(array(':img_5'=>$fitxer_imatge_5,':id'=>$row_max['MID']));
                        //pujada imatge al servidor
                        $dir_pujada = '../uploads/';
                        //Crear el directori si no existeix
                        if (!file_exists($dir_pujada)) {
                            mkdir($dir_pujada, 0755, true);
                        }
                        //Comprovar el tipus de fitxer
                        $extensio = strtolower(substr($fitxer_imatge_5,-3));
                        if ($extensio != 'jpg' && $extensio != 'gif' && $extensio != 'png') {
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                        } else {
                            //pujar el fitxer
                            if (!copy("../uploads/".$row['Image_5'], "../uploads/".$fitxer_imatge_5)) {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                            }
                        }
                    }
                    /////IMG_6
                    if ($row['Image_6'] != null) {
                        $stmt3 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                        $stmt3->execute();
                        $row_max = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $fitxer_6=substr($row['Image_6'],6+$long+1);
                        $fitxer_imatge_6 = "IMG_6_" . $row_max['MID'] . "_" . $fitxer_6 ;
                        $stmt5 = $conn->prepare('UPDATE post SET Image_6=:img_6 WHERE ID=:id');
                        $stmt5->execute(array(':img_6'=>$fitxer_imatge_6,':id'=>$row_max['MID']));
                        //pujada imatge al servidor
                        $dir_pujada = '../uploads/';
                        //Crear el directori si no existeix
                        if (!file_exists($dir_pujada)) {
                            mkdir($dir_pujada, 0755, true);
                        }
                        //Comprovar el tipus de fitxer
                        $extensio = strtolower(substr($fitxer_imatge_6,-3));
                        if ($extensio != 'jpg' && $extensio != 'gif' && $extensio != 'png') {
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                        } else {
                            //pujar el fitxer
                            if (!copy("../uploads/".$row['Image_6'], "../uploads/".$fitxer_imatge_6)) {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                            }
                        }
                    }
                    /////IMG_7
                    if ($row['Image_7'] != null) {
                        $stmt3 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                        $stmt3->execute();
                        $row_max = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $fitxer_7=substr($row['Image_7'],6+$long+1);
                        $fitxer_imatge_7 = "IMG_7_" . $row_max['MID'] . "_" . $fitxer_7 ;
                        $stmt5 = $conn->prepare('UPDATE post SET Image_7=:img_7 WHERE ID=:id');
                        $stmt5->execute(array(':img_7'=>$fitxer_imatge_7,':id'=>$row_max['MID']));
                        //pujada imatge al servidor
                        $dir_pujada = '../uploads/';
                        //Crear el directori si no existeix
                        if (!file_exists($dir_pujada)) {
                            mkdir($dir_pujada, 0755, true);
                        }
                        //Comprovar el tipus de fitxer
                        $extensio = strtolower(substr($fitxer_imatge_7,-3));
                        if ($extensio != 'jpg' && $extensio != 'gif' && $extensio != 'png') {
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                        } else {
                            //pujar el fitxer
                            if (!copy("../uploads/".$row['Image_7'], "../uploads/".$fitxer_imatge_7)) {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                            }
                        }
                    }
                    /////IMG_8
                    if ($row['Image_8'] != null) {
                        $stmt3 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                        $stmt3->execute();
                        $row_max = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $fitxer_8=substr($row['Image_8'],6+$long+1);
                        $fitxer_imatge_8 = "IMG_8_" . $row_max['MID'] . "_" . $fitxer_8 ;
                        $stmt5 = $conn->prepare('UPDATE post SET Image_8=:img_8 WHERE ID=:id');
                        $stmt5->execute(array(':img_8'=>$fitxer_imatge_8,':id'=>$row_max['MID']));
                        //pujada imatge al servidor
                        $dir_pujada = '../uploads/';
                        //Crear el directori si no existeix
                        if (!file_exists($dir_pujada)) {
                            mkdir($dir_pujada, 0755, true);
                        }
                        //Comprovar el tipus de fitxer
                        $extensio = strtolower(substr($fitxer_imatge_8,-3));
                        if ($extensio != 'jpg' && $extensio != 'gif' && $extensio != 'png') {
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                        } else {
                            //pujar el fitxer
                            if (!copy("../uploads/".$row['Image_8'], "../uploads/".$fitxer_imatge_8)) {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                            }
                        }
                    }
                    /////IMG_9
                    if ($row['Image_9'] != null) {
                        $stmt3 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                        $stmt3->execute();
                        $row_max = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $fitxer_9=substr($row['Image_9'],6+$long+1);
                        $fitxer_imatge_9 = "IMG_9_" . $row_max['MID'] . "_" . $fitxer_9 ;
                        $stmt5 = $conn->prepare('UPDATE post SET Image_9=:img_9 WHERE ID=:id');
                        $stmt5->execute(array(':img_9'=>$fitxer_imatge_9,':id'=>$row_max['MID']));
                        //pujada imatge al servidor
                        $dir_pujada = '../uploads/';
                        //Crear el directori si no existeix
                        if (!file_exists($dir_pujada)) {
                            mkdir($dir_pujada, 0755, true);
                        }
                        //Comprovar el tipus de fitxer
                        $extensio = strtolower(substr($fitxer_imatge_9,-3));
                        if ($extensio != 'jpg' && $extensio != 'gif' && $extensio != 'png') {
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                        } else {
                            //pujar el fitxer
                            if (!copy("../uploads/".$row['Image_9'], "../uploads/".$fitxer_imatge_9)) {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                            }
                        }
                    }
                    /////IMG_10
                    if ($row['Image_10'] != null) {
                        $stmt3 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                        $stmt3->execute();
                        $row_max = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $fitxer_10=substr($row['Image_10'],6+$long+1);
                        $fitxer_imatge_10 = "IMG_10_" . $row_max['MID'] . "_" . $fitxer_10 ;
                        $stmt5 = $conn->prepare('UPDATE post SET Image_10=:img_10 WHERE ID=:id');
                        $stmt5->execute(array(':img_10'=>$fitxer_imatge_10,':id'=>$row_max['MID']));
                        //pujada imatge al servidor
                        $dir_pujada = '../uploads/';
                        //Crear el directori si no existeix
                        if (!file_exists($dir_pujada)) {
                            mkdir($dir_pujada, 0755, true);
                        }
                        //Comprovar el tipus de fitxer
                        $extensio = strtolower(substr($fitxer_imatge_10,-3));
                        if ($extensio != 'jpg' && $extensio != 'gif' && $extensio != 'png') {
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                        } else {
                            //pujar el fitxer
                            if (!copy("../uploads/".$row['Image_10'], "../uploads/".$fitxer_imatge_10)) {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                            }
                        }
                    }
                    /////IMG_11
                    if ($row['Image_11'] != null) {
                        $stmt3 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                        $stmt3->execute();
                        $row_max = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $fitxer_11=substr($row['Image_11'],6+$long+1);
                        $fitxer_imatge_11 = "IMG_11_" . $row_max['MID'] . "_" . $fitxer_11 ;
                        $stmt5 = $conn->prepare('UPDATE post SET Image_11=:img_11 WHERE ID=:id');
                        $stmt5->execute(array(':img_11'=>$fitxer_imatge_11,':id'=>$row_max['MID']));
                        //pujada imatge al servidor
                        $dir_pujada = '../uploads/';
                        //Crear el directori si no existeix
                        if (!file_exists($dir_pujada)) {
                            mkdir($dir_pujada, 0755, true);
                        }
                        //Comprovar el tipus de fitxer
                        $extensio = strtolower(substr($fitxer_imatge_11,-3));
                        if ($extensio != 'jpg' && $extensio != 'gif' && $extensio != 'png') {
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                        } else {
                            //pujar el fitxer
                            if (!copy("../uploads/".$row['Image_11'], "../uploads/".$fitxer_imatge_11)) {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                            }
                        }
                    }
                    /////IMG_12
                    if ($row['Image_12'] != null) {
                        $stmt3 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                        $stmt3->execute();
                        $row_max = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $fitxer_12=substr($row['Image_12'],6+$long+1);
                        $fitxer_imatge_12 = "IMG_12_" . $row_max['MID'] . "_" . $fitxer_12 ;
                        $stmt5 = $conn->prepare('UPDATE post SET Image_12=:img_12 WHERE ID=:id');
                        $stmt5->execute(array(':img_12'=>$fitxer_imatge_12,':id'=>$row_max['MID']));
                        //pujada imatge al servidor
                        $dir_pujada = '../uploads/';
                        //Crear el directori si no existeix
                        if (!file_exists($dir_pujada)) {
                            mkdir($dir_pujada, 0755, true);
                        }
                        //Comprovar el tipus de fitxer
                        $extensio = strtolower(substr($fitxer_imatge_12,-3));
                        if ($extensio != 'jpg' && $extensio != 'gif' && $extensio != 'png') {
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                        } else {
                            //pujar el fitxer
                            if (!copy("../uploads/".$row['Image_12'], "../uploads/".$fitxer_imatge_12)) {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                            }
                        }
                    }
                    /////IMG_13
                    if ($row['Image_13'] != null) {
                        $stmt3 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                        $stmt3->execute();
                        $row_max = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $fitxer_13=substr($row['Image_13'],6+$long+1);
                        $fitxer_imatge_13 = "IMG_13_" . $row_max['MID'] . "_" . $fitxer_13 ;
                        $stmt5 = $conn->prepare('UPDATE post SET Image_13=:img_13 WHERE ID=:id');
                        $stmt5->execute(array(':img_13'=>$fitxer_imatge_13,':id'=>$row_max['MID']));
                        //pujada imatge al servidor
                        $dir_pujada = '../uploads/';
                        //Crear el directori si no existeix
                        if (!file_exists($dir_pujada)) {
                            mkdir($dir_pujada, 0755, true);
                        }
                        //Comprovar el tipus de fitxer
                        $extensio = strtolower(substr($fitxer_imatge_13,-3));
                        if ($extensio != 'jpg' && $extensio != 'gif' && $extensio != 'png') {
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                        } else {
                            //pujar el fitxer
                            if (!copy("../uploads/".$row['Image_13'], "../uploads/".$fitxer_imatge_13)) {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                            }
                        }
                    }
                    /////IMG_14
                    if ($row['Image_14'] != null) {
                        $stmt3 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                        $stmt3->execute();
                        $row_max = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $fitxer_14=substr($row['Image_14'],6+$long+1);
                        $fitxer_imatge_14 = "IMG_14_" . $row_max['MID'] . "_" . $fitxer_14 ;
                        $stmt5 = $conn->prepare('UPDATE post SET Image_14=:img_14 WHERE ID=:id');
                        $stmt5->execute(array(':img_14'=>$fitxer_imatge_14,':id'=>$row_max['MID']));
                        //pujada imatge al servidor
                        $dir_pujada = '../uploads/';
                        //Crear el directori si no existeix
                        if (!file_exists($dir_pujada)) {
                            mkdir($dir_pujada, 0755, true);
                        }
                        //Comprovar el tipus de fitxer
                        $extensio = strtolower(substr($fitxer_imatge_14,-3));
                        if ($extensio != 'jpg' && $extensio != 'gif' && $extensio != 'png') {
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                        } else {
                            //pujar el fitxer
                            if (!copy("../uploads/".$row['Image_14'], "../uploads/".$fitxer_imatge_14)) {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                            }
                        }
                    }
                    /////IMG_15
                    if ($row['Image_15'] != null) {
                        $stmt3 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                        $stmt3->execute();
                        $row_max = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $fitxer_15=substr($row['Image_15'],6+$long+1);
                        $fitxer_imatge_15 = "IMG_15_" . $row_max['MID'] . "_" . $fitxer_15 ;
                        $stmt5 = $conn->prepare('UPDATE post SET Image_15=:img_15 WHERE ID=:id');
                        $stmt5->execute(array(':img_15'=>$fitxer_imatge_15,':id'=>$row_max['MID']));
                        //pujada imatge al servidor
                        $dir_pujada = '../uploads/';
                        //Crear el directori si no existeix
                        if (!file_exists($dir_pujada)) {
                            mkdir($dir_pujada, 0755, true);
                        }
                        //Comprovar el tipus de fitxer
                        $extensio = strtolower(substr($fitxer_imatge_15,-3));
                        if ($extensio != 'jpg' && $extensio != 'gif' && $extensio != 'png') {
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                        } else {
                            //pujar el fitxer
                            if (!copy("../uploads/".$row['Image_15'], "../uploads/".$fitxer_imatge_15)) {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                            }
                        }
                    }
                    /////IMG_16
                    if ($row['Image_16'] != null) {
                        $stmt3 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                        $stmt3->execute();
                        $row_max = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $fitxer_16=substr($row['Image_16'],6+$long+1);
                        $fitxer_imatge_16 = "IMG_16_" . $row_max['MID'] . "_" . $fitxer_16 ;
                        $stmt5 = $conn->prepare('UPDATE post SET Image_16=:img_16 WHERE ID=:id');
                        $stmt5->execute(array(':img_16'=>$fitxer_imatge_16,':id'=>$row_max['MID']));
                        //pujada imatge al servidor
                        $dir_pujada = '../uploads/';
                        //Crear el directori si no existeix
                        if (!file_exists($dir_pujada)) {
                            mkdir($dir_pujada, 0755, true);
                        }
                        //Comprovar el tipus de fitxer
                        $extensio = strtolower(substr($fitxer_imatge_16,-3));
                        if ($extensio != 'jpg' && $extensio != 'gif' && $extensio != 'png') {
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                        } else {
                            //pujar el fitxer
                            if (!copy("../uploads/".$row['Image_16'], "../uploads/".$fitxer_imatge_16)) {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                            }
                        }
                    }
                    /////IMG_17
                    if ($row['Image_17'] != null) {
                        $stmt3 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                        $stmt3->execute();
                        $row_max = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $fitxer_17=substr($row['Image_17'],6+$long+1);
                        $fitxer_imatge_17 = "IMG_17_" . $row_max['MID'] . "_" . $fitxer_17 ;
                        $stmt5 = $conn->prepare('UPDATE post SET Image_17=:img_17 WHERE ID=:id');
                        $stmt5->execute(array(':img_17'=>$fitxer_imatge_17,':id'=>$row_max['MID']));
                        //pujada imatge al servidor
                        $dir_pujada = '../uploads/';
                        //Crear el directori si no existeix
                        if (!file_exists($dir_pujada)) {
                            mkdir($dir_pujada, 0755, true);
                        }
                        //Comprovar el tipus de fitxer
                        $extensio = strtolower(substr($fitxer_imatge_17,-3));
                        if ($extensio != 'jpg' && $extensio != 'gif' && $extensio != 'png') {
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                        } else {
                            //pujar el fitxer
                            if (!copy("../uploads/".$row['Image_17'], "../uploads/".$fitxer_imatge_17)) {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                            }
                        }
                    }
                    /////IMG_18
                    if ($row['Image_18'] != null) {
                        $stmt3 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                        $stmt3->execute();
                        $row_max = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $fitxer_18=substr($row['Image_18'],6+$long+1);
                        $fitxer_imatge_18 = "IMG_18_" . $row_max['MID'] . "_" . $fitxer_18 ;
                        $stmt5 = $conn->prepare('UPDATE post SET Image_18=:img_18 WHERE ID=:id');
                        $stmt5->execute(array(':img_18'=>$fitxer_imatge_18,':id'=>$row_max['MID']));
                        //pujada imatge al servidor
                        $dir_pujada = '../uploads/';
                        //Crear el directori si no existeix
                        if (!file_exists($dir_pujada)) {
                            mkdir($dir_pujada, 0755, true);
                        }
                        //Comprovar el tipus de fitxer
                        $extensio = strtolower(substr($fitxer_imatge_18,-3));
                        if ($extensio != 'jpg' && $extensio != 'gif' && $extensio != 'png') {
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                        } else {
                            //pujar el fitxer
                            if (!copy("../uploads/".$row['Image_18'], "../uploads/".$fitxer_imatge_18)) {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                            }
                        }
                    }
                    /////IMG_19
                    if ($row['Image_19'] != null) {
                        $stmt3 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                        $stmt3->execute();
                        $row_max = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $fitxer_19=substr($row['Image_19'],6+$long+1);
                        $fitxer_imatge_19 = "IMG_19_" . $row_max['MID'] . "_" . $fitxer_19 ;
                        $stmt5 = $conn->prepare('UPDATE post SET Image_19=:img_19 WHERE ID=:id');
                        $stmt5->execute(array(':img_19'=>$fitxer_imatge_19,':id'=>$row_max['MID']));
                        //pujada imatge al servidor
                        $dir_pujada = '../uploads/';
                        //Crear el directori si no existeix
                        if (!file_exists($dir_pujada)) {
                            mkdir($dir_pujada, 0755, true);
                        }
                        //Comprovar el tipus de fitxer
                        $extensio = strtolower(substr($fitxer_imatge_19,-3));
                        if ($extensio != 'jpg' && $extensio != 'gif' && $extensio != 'png') {
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                        } else {
                            //pujar el fitxer
                            if (!copy("../uploads/".$row['Image_19'], "../uploads/".$fitxer_imatge_19)) {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                            }
                        }
                    }
                    /////IMG_20
                    if ($row['Image_20'] != null) {
                        $stmt3 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                        $stmt3->execute();
                        $row_max = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $fitxer_20=substr($row['Image_20'],6+$long+1);
                        $fitxer_imatge_20 = "IMG_20_" . $row_max['MID'] . "_" . $fitxer_20 ;
                        $stmt5 = $conn->prepare('UPDATE post SET Image_20=:img_20 WHERE ID=:id');
                        $stmt5->execute(array(':img_20'=>$fitxer_imatge_20,':id'=>$row_max['MID']));
                        //pujada imatge al servidor
                        $dir_pujada = '../uploads/';
                        //Crear el directori si no existeix
                        if (!file_exists($dir_pujada)) {
                            mkdir($dir_pujada, 0755, true);
                        }
                        //Comprovar el tipus de fitxer
                        $extensio = strtolower(substr($fitxer_imatge_20,-3));
                        if ($extensio != 'jpg' && $extensio != 'gif' && $extensio != 'png') {
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                        } else {
                            //pujar el fitxer
                            if (!copy("../uploads/".$row['Image_20'], "../uploads/".$fitxer_imatge_20)) {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                            }
                        }
                    }
                    /////IMG_21
                    if ($row['Image_21'] != null) {
                        $stmt3 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                        $stmt3->execute();
                        $row_max = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $fitxer_21=substr($row['Image_21'],6+$long+1);
                        $fitxer_imatge_21 = "IMG_21_" . $row_max['MID'] . "_" . $fitxer_21 ;
                        $stmt5 = $conn->prepare('UPDATE post SET Image_21=:img_21 WHERE ID=:id');
                        $stmt5->execute(array(':img_21'=>$fitxer_imatge_21,':id'=>$row_max['MID']));
                        //pujada imatge al servidor
                        $dir_pujada = '../uploads/';
                        //Crear el directori si no existeix
                        if (!file_exists($dir_pujada)) {
                            mkdir($dir_pujada, 0755, true);
                        }
                        //Comprovar el tipus de fitxer
                        $extensio = strtolower(substr($fitxer_imatge_21,-3));
                        if ($extensio != 'jpg' && $extensio != 'gif' && $extensio != 'png') {
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                        } else {
                            //pujar el fitxer
                            if (!copy("../uploads/".$row['Image_21'], "../uploads/".$fitxer_imatge_21)) {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                            }
                        }
                    }
                    /////IMG_22
                    if ($row['Image_22'] != null) {
                        $stmt3 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                        $stmt3->execute();
                        $row_max = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $fitxer_22=substr($row['Image_22'],6+$long+1);
                        $fitxer_imatge_22 = "IMG_22_" . $row_max['MID'] . "_" . $fitxer_22 ;
                        $stmt5 = $conn->prepare('UPDATE post SET Image_22=:img_22 WHERE ID=:id');
                        $stmt5->execute(array(':img_22'=>$fitxer_imatge_22,':id'=>$row_max['MID']));
                        //pujada imatge al servidor
                        $dir_pujada = '../uploads/';
                        //Crear el directori si no existeix
                        if (!file_exists($dir_pujada)) {
                            mkdir($dir_pujada, 0755, true);
                        }
                        //Comprovar el tipus de fitxer
                        $extensio = strtolower(substr($fitxer_imatge_22,-3));
                        if ($extensio != 'jpg' && $extensio != 'gif' && $extensio != 'png') {
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                        } else {
                            //pujar el fitxer
                            if (!copy("../uploads/".$row['Image_22'], "../uploads/".$fitxer_imatge_22)) {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                            }
                        }
                    }
                    /////IMG_23
                    if ($row['Image_23'] != null) {
                        $stmt3 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                        $stmt3->execute();
                        $row_max = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $fitxer_23=substr($row['Image_23'],6+$long+1);
                        $fitxer_imatge_23 = "IMG_23_" . $row_max['MID'] . "_" . $fitxer_23 ;
                        $stmt5 = $conn->prepare('UPDATE post SET Image_23=:img_23 WHERE ID=:id');
                        $stmt5->execute(array(':img_23'=>$fitxer_imatge_23,':id'=>$row_max['MID']));
                        //pujada imatge al servidor
                        $dir_pujada = '../uploads/';
                        //Crear el directori si no existeix
                        if (!file_exists($dir_pujada)) {
                            mkdir($dir_pujada, 0755, true);
                        }
                        //Comprovar el tipus de fitxer
                        $extensio = strtolower(substr($fitxer_imatge_23,-3));
                        if ($extensio != 'jpg' && $extensio != 'gif' && $extensio != 'png') {
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                        } else {
                            //pujar el fitxer
                            if (!copy("../uploads/".$row['Image_23'], "../uploads/".$fitxer_imatge_23)) {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                            }
                        }
                    }
                    /////IMG_24
                    if ($row['Image_24'] != null) {
                        $stmt3 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                        $stmt3->execute();
                        $row_max = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $fitxer_24=substr($row['Image_24'],6+$long+1);
                        $fitxer_imatge_24 = "IMG_24_" . $row_max['MID'] . "_" . $fitxer_24 ;
                        $stmt5 = $conn->prepare('UPDATE post SET Image_24=:img_24 WHERE ID=:id');
                        $stmt5->execute(array(':img_24'=>$fitxer_imatge_24,':id'=>$row_max['MID']));
                        //pujada imatge al servidor
                        $dir_pujada = '../uploads/';
                        //Crear el directori si no existeix
                        if (!file_exists($dir_pujada)) {
                            mkdir($dir_pujada, 0755, true);
                        }
                        //Comprovar el tipus de fitxer
                        $extensio = strtolower(substr($fitxer_imatge_24,-3));
                        if ($extensio != 'jpg' && $extensio != 'gif' && $extensio != 'png') {
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                        } else {
                            //pujar el fitxer
                            if (!copy("../uploads/".$row['Image_24'], "../uploads/".$fitxer_imatge_24)) {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                            }
                        }
                    }
                    /////IMG_25
                    if ($row['Image_25'] != null) {
                        $stmt3 = $conn->prepare('SELECT MAX(ID) AS MID FROM post');
                        $stmt3->execute();
                        $row_max = $stmt3->fetch(PDO::FETCH_ASSOC);
                        $fitxer_25=substr($row['Image_25'],6+$long+1);
                        $fitxer_imatge_25 = "IMG_25_" . $row_max['MID'] . "_" . $fitxer_25 ;
                        $stmt5 = $conn->prepare('UPDATE post SET Image_25=:img_25 WHERE ID=:id');
                        $stmt5->execute(array(':img_25'=>$fitxer_imatge_25,':id'=>$row_max['MID']));
                        //pujada imatge al servidor
                        $dir_pujada = '../uploads/';
                        //Crear el directori si no existeix
                        if (!file_exists($dir_pujada)) {
                            mkdir($dir_pujada, 0755, true);
                        }
                        //Comprovar el tipus de fitxer
                        $extensio = strtolower(substr($fitxer_imatge_25,-3));
                        if ($extensio != 'jpg' && $extensio != 'gif' && $extensio != 'png') {
                            print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying image: INCORRECT FORMAT</p>";
                        } else {
                            //pujar el fitxer
                            if (!copy("../uploads/".$row['Image_25'], "../uploads/".$fitxer_imatge_25)) {
                                print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error copying the image: IMAGE NOT UPLOAD</p>";
                            }
                        }
                    }

                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Post succesfull duplicated...</p></div>";
                }
                else{
                    print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error Post not duplicated succesfull...</p></div>";
                }
            }

            //ELIMINAR MES DE UN ELEMENT SELECCIONAT AMB EL CHECKBOX
            if(isset($_POST['dels']) && !empty($_POST['dels'])) {
                if(isset($_POST['borras']) && !empty($_POST['borras'])) {
                    $eliminat=false;
                    foreach($_POST['delregs'] as $ID) {
                        $stmt2=$conn->prepare('SELECT Image_1,Image_2,Image_3,Image_4,Image_5,Image_6,Image_7,Image_8,Image_9,Image_10,Image_11,Image_12,Image_13,Image_14,Image_15,Image_16,Image_17,Image_18,Image_19,Image_20,Image_21,Image_22,Image_23,Image_24,Image_25 FROM post WHERE ID=:id');
                        $stmt2->execute(array(':id'=>$ID));
                        $rows2=$stmt2->fetch(PDO::FETCH_ASSOC);
                        $stmt = $conn->prepare('DELETE FROM post WHERE ID=:id');
                        $rows = $stmt->execute(array(':id' => $ID));
                        //ELIMINAR LES IMATGES ASSOCIADES A LA NOTICIA
						//IMG_1
                        if (file_exists('../uploads/' . $rows2['Image_1'])) {
                            if($rows2['Image_1']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_1'])) {
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }
                        }
						//IMG_2
                        if (file_exists('../uploads/' . $rows2['Image_2'])) {
                            if($rows2['Image_2']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_2'])) {
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }
                        }
						//IMG_3
                        if (file_exists('../uploads/' . $rows2['Image_3'])) {
                            if($rows2['Image_3']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_3'])) {
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }
                        }	
						//IMG_4
                        if (file_exists('../uploads/' . $rows2['Image_4'])) {
                            if($rows2['Image_4']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_4'])) {
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }
                        }
						//IMG_5
                        if (file_exists('../uploads/' . $rows2['Image_5'])) {
                            if($rows2['Image_5']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_5'])) {
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }
                        }
						//IMG_6
                        if (file_exists('../uploads/' . $rows2['Image_6'])) {
                            if($rows2['Image_6']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_6'])) {
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }
                        }
						//IMG_7
                        if (file_exists('../uploads/' . $rows2['Image_7'])) {
                            if($rows2['Image_7']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_7'])) {
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }
                        }
						//IMG_8
                        if (file_exists('../uploads/' . $rows2['Image_8'])) {
                            if($rows2['Image_8']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_8'])) {
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }
                        }
						//IMG_9
                        if (file_exists('../uploads/' . $rows2['Image_9'])) {
                            if($rows2['Image_9']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_9'])) {
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }
                        }
						//IMG_10
                        if (file_exists('../uploads/' . $rows2['Image_10'])) {
                            if($rows2['Image_10']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_10'])) {
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }
                        }
						//IMG_11
                        if (file_exists('../uploads/' . $rows2['Image_11'])) {
                            if($rows2['Image_11']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_11'])) {
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }
                        }
						//IMG_12
                        if (file_exists('../uploads/' . $rows2['Image_12'])) {
                            if($rows2['Image_12']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_12'])) {
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }
                        }
						//IMG_13
                        if (file_exists('../uploads/' . $rows2['Image_13'])) {
                            if($rows2['Image_13']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_13'])) {
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }
                        }
						//IMG_14
                        if (file_exists('../uploads/' . $rows2['Image_14'])) {
                            if($rows2['Image_14']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_14'])) {
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }
                        }
						//IMG_15
                        if (file_exists('../uploads/' . $rows2['Image_15'])) {
                            if($rows2['Image_15']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_15'])) {
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }
                        }
						//IMG_16
                        if (file_exists('../uploads/' . $rows2['Image_16'])) {
                            if($rows2['Image_16']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_16'])) {
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }
                        }
						//IMG_17
                        if (file_exists('../uploads/' . $rows2['Image_17'])) {
                            if($rows2['Image_17']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_17'])) {
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }
                        }
						//IMG_18
                        if (file_exists('../uploads/' . $rows2['Image_18'])) {
                            if($rows2['Image_18']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_18'])) {
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }
                        }
						//IMG_19
                        if (file_exists('../uploads/' . $rows2['Image_19'])) {
                            if($rows2['Image_19']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_19'])) {
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }
                        }
						//IMG_20
                        if (file_exists('../uploads/' . $rows2['Image_20'])) {
                            if($rows2['Image_20']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_20'])) {
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }
                        }
						//IMG_21
                        if (file_exists('../uploads/' . $rows2['Image_21'])) {
                            if($rows2['Image_21']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_21'])) {
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }
                        }
						//IMG_22
                        if (file_exists('../uploads/' . $rows2['Image_22'])) {
                            if($rows2['Image_22']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_22'])) {
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }
                        }
						//IMG_23
                        if (file_exists('../uploads/' . $rows2['Image_23'])) {
                            if($rows2['Image_23']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_23'])) {
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }
                        }
						//IMG_24
                        if (file_exists('../uploads/' . $rows2['Image_24'])) {
                            if($rows2['Image_24']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_24'])) {
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }
                        }
						//IMG_25
                        if (file_exists('../uploads/' . $rows2['Image_25'])) {
                            if($rows2['Image_25']!=null) {
                                if (unlink('../uploads/' . $rows2['Image_25'])) {
                                    $eliminat = true;
                                } else {
                                    $eliminat = false;
                                }
                            }
                        }							
                    }
                    if($rows>0){
                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Posts Deleted Succesfull...</p>";
                        print "</div>";
                    }
                    else{
                        print "<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>Error deleting the Posts...</p>";
                        print "</div>";
                    }
                }
                else{
                    if (isset($_POST['borrar']) && !empty($_POST['borrar'])) {
                    	print "<form action=\"\" method=\"post\">";
                    print "<div class=\"alert alert-success  alert-dismissable\"><p>Are you sure you want to delete the selection?</p>";
 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    foreach($_POST['borrar'] as $ID){
                        $stmt3=$conn->prepare('SELECT * FROM post WHERE ID=:idn');
                        $stmt3->execute(array(':idn'=>$ID));
                        $row2=$stmt3->fetch(PDO::FETCH_ASSOC);
                        print "<p>Post ".$row2['Title']."</p>";
                    }
                    print "<p><button type=\"submit\" name=\"borras\" value=\"borras\" class=\"btn btn-outline btn-default\"><i class=\"fa fa-check\"></i> Delete</button>";
					print " <button type=\"reset\" name=\"cancel\" class=\"btn btn-outline btn-default\" onclick=\"location.href='?sec=post&sub=lst'\"><i class=\"fa fa-times\"></i> Cancel</button></p>";
					
                    print "<input type=\"hidden\" name=\"dels\" value=\"dels\">";
                    foreach($_POST['borrar'] as $key){
                        print "<input type=\"hidden\" name=\"delregs[]\" value=\"".$key."\">";
                    }
                    print "</div>";
                    print "</form>";
                }
////////////////////////////////////////////////////NEW//////////////////////////////////////////////////////////
                else{
	                 print "<div class=\"alert alert-success alert-dismissable\"><p>Item or items not selected.</p>";
					 print "</div>";
                }
            }
            }
            ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Listed Posts
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <form action="" method="post">
                                <table class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>ID</th>
                                        <th>Post Date</th>
                                        <th>Post Title</th>
										<th>Permission</th> 										
                                        <th>Options</th>
                                    </tr>
                                    </thead>
                                    <tbody>
										<?php //CONSULTA DE SELECCIO DELS REGISTRES DE LA BASE DE DADES
	///////////////////////////////////////Consulta BaseDades tots els records//////////////////////////////////////////////////
										$stmt=$conn->prepare('SELECT * FROM post ORDER BY Data desc');
										$stmt->execute();
										while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
																																						
											print "<tr>";
											print "<td><input type='checkbox' name='borrar[]' value=\"".$row['ID']."\"></td>";
											print "<td>$row[ID]</td>";
											print "<td>".ToDate($row['Data'])."</td>";
											print "<td>$row[Title]</td>";
											print "<td>$row[Permission]</td>";
											print "<td>                                                                                                                                                               
												<button type=\"submit\" name=\"ver\" value=\"$row[ID]\" class=\"btn btn-default btn-default btn-circle btn-outline\"><i class=\"fa fa-eye fa-fw\"></i></button>
												  <button type=\"submit\" name=\"mod\" value=\"$row[ID]\" class=\"btn btn-default btn-circle btn-outline\"><i class=\"fa fa-pencil fa-fw\"></i></button>                                          
													<button type=\"submit\" name=\"dup\" value=\"$row[ID]\" class=\"btn btn-default btn-round btn-circle btn-outline\"><i class=\"fa fa-copy fa-fw\"></i></button></td>";                                          
											print "</tr>"; 
										}										
									print "</tbody>"; 						        
					                print "</table>
							        Delete selected items ";
							        print "<button type=\"submit\" name=\"dels\" value=\"dels\" class=\"btn btn-default btn-outline\"><i class=\"fa fa-trash-o fa-fw\"></i> Delete</button>";        
							        print "</form>";						        
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
            <!-- EN CAS D'ARRIBAR UN NEW, MOSTRA EL FORMULARI DE NOU REGISTRE -->
        <?php } ?>			
    </div>
    <!-- /.container-fluid -->
<?php //DESCONNEXIÓ DE LA BASE DE DADES
$conn=null;
?>