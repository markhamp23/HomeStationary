    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Admin Dashboard</h3>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">User Profile</div>
                    <div class="panel-body"><?php echo $nomComplet;?></div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-briefcase fa-5x" style="color:#595959 !important"></i>
                            </div>
                            <div class="col-xs-9 text-right" style="color:#595959 !important">
                            	
								<?php //CONNEXIÓ A LA BASE DE DADES
								include_once('../admin/lib/connectar.php');
								include_once('../admin/lib/dates.php');
								
								$stmt=$conn->prepare('SELECT * FROM post ORDER BY Id ASC');
								$stmt->execute();
								$total = $stmt->rowCount();?>                    	
                            	
                                <div class="huge"><?php echo $total;?></div>
                                <div>New Posts!</div>
                            </div>
                        </div>
                    </div>
                    <a href="?sec=post">
                        <div class="panel-footer">
                            <!--<span class="pull-left">Enter</span>-->
                            <span class="pull-right"><i class="fa fa-arrow-circle-right" style="color:#595959"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
          
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-tasks fa-5x" style="color:#595959 !important"></i>
                            </div>
                            <div class="col-xs-9 text-right" style="color:#595959 !important">
                            	
		                        <?php // CARPETA DE LA QUE S'EXTREUEN LES IMATGES
		                        $path = "../uploads/";
		                        // EXTRACCIO D'IMATGES DE LA CARPETA
		                        $directori = opendir($path);
		                        $fitxers = array();
		                        while (($file = readdir($directori)) !== false) {
		                        if($file != "." && $file != "..") {
		                        if(substr($file, -4) == '.jpg' || substr($file, -4) == '.png' || substr($file, -4) == '.gif') {
		                                    $fitxers[] = $file;
		                                }
		                            }
		                        }
		                        closedir($directori);
		                        //ORDENAR FITXERS
		                        sort($fitxers);
		
		                        //TOTAL D'IMATGES DE LA CARPETA
		                        $total_imatges=count($fitxers);?>                           	
                            	
                            	
                                <div class="huge"><?php echo $total_imatges;?></div>
                                <div>Post Images!</div>
                            </div>
                        </div>
                    </div>
                    <a href="?sec=images">
                        <div class="panel-footer">
                            <!--<span class="pull-left">Enter</span>-->
                            <span class="pull-right"><i class="fa fa-arrow-circle-right" style="color:#595959"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>    
      
            <div class="col-lg-12">
                <h3 class="page-header"></h3>
            </div>
            <!-- /.col-lg-12 -->
       			
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->