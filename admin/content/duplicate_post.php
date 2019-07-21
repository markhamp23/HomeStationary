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
<?php
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
                                        <th>Options</th>
                                    </tr>
                                    </thead>
                                    <tbody>
										<?php //CONSULTA DE SELECCIO DELS REGISTRES DE LA BASE DE DADES
///////////////////////////////////////Consulta BaseDades tots els records//////////////////////////////////////////////////
									$new_duplicate_name = array();
									$id_new = array();
                                    /////////////////////count all records//////////////////////////////////////////////////
                                    $stmt=$conn->prepare('SELECT COUNT(*) AS SUM FROM post ORDER BY data desc');
                                    $stmt->execute();
                                    $row=$stmt->fetch(PDO::FETCH_ASSOC);
								    $total_records = $row['SUM'];
									
////////////////////////////////////////////create array with key as ID and value///////////////////////////////////////////

									$stmt=$conn->prepare('SELECT * FROM post ORDER BY data asc');
									$stmt->execute();
									while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
	
                                        $new_duplicate_name[$row['ID']] = $row['Title'];																																																						
									}
									///////////////////find duplicate on array//////////////////////////////////////////////								
									$new_array = array();
									
									foreach ($new_duplicate_name as $key => $value) {
										if(isset($new_array[$value])){
											$new_array[$value] += 1;
										    $id_new[]= $key;										
										}else{
										    $new_array[$value] = 1;}
									}
									
									foreach ($id_new as $id) {								

									$stmt=$conn->prepare('SELECT * FROM post WHERE ID=:id');
									$stmt->execute(array(':id'=>$id));
									$row=$stmt->fetch(PDO::FETCH_ASSOC);
									
									print "<tr>";
									print "<td><input type='checkbox' name='borrar[]' value=\"".$row['ID']."\"></td>";
									print "<td>$row[ID]</td>";
									print "<td>".ToDate($row['Data'])."</td>";
									print "<td>$row[Title]</td>";
									print "<td>                                                                                                                                                                                                      
										<button type=\"submit\" name=\"del\" value=\"$row[ID]\" class=\"btn btn-default btn-circle btn-outline\"><i class=\"fa fa-trash fa-fw\"></i></button></td>";																					
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
    </div>
    <!-- /.container-fluid -->
<?php //DESCONNEXIÓ DE LA BASE DE DADES
$conn=null;
?>		