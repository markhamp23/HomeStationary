<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Galeria</h3>
            </div>
                        
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Galeria Fotográfica
                        </div>  
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <form action="" method="post">
                                <tbody>	
                                <table class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example"> 
<!----------------------------------------------------------------------------------------------------------->                               
                                <div class="row">
                                   <div class="col-xs-6 col-md-3">
                                      <a href="#" class="thumbnail"> 
                                      	
                                      	
                                      <?php //CONSULTA DE SELECCIO DELS REGISTRES DE LA BASE DE DADES

                                      $stmt=$conn->prepare('SELECT * FROM noticies');
                                      $stmt->execute();
                                      while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                      			
								     for($i=0;$i<1;$i++){      							  	
										
								      if ($row['Image']) {									  											
                                           echo "<img src='../uploads/" .$row['Image'] ."' alt='foto' width='150px' height='150px' class=\"thumbnail\">";										   
									       echo "<br>";
									  }
                                      else 
                                         print "<img src='./dist/img/noimage.png' alt='foto' width='150px' height='150px'class=\"thumbnail\">";
						  			   }
									  } 			    									 									  									  																				   	
                                      ?>	                              
                                      </a>                               
                                   </div>                                                                                             
                                 </div>                                                                                     
<!----------------------------------------------------------------------------------------------------------->                                                                                                                                                                                                                                                      
                                
                                </table>
                                </tbody>
                                </form>
                            </div>                                
                        </div>                                     
                    </div>
                </div>
            </div>                                                                       
                 
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <?php //DESCONNEXIÓ DE LA BASE DE DADES
$conn=null;
?>    
                     		