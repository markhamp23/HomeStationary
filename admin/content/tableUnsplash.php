<div id='app'> 
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Unsplash Photo Images</div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                   
                                    <!-- Search form -->
                                    <div id="form-id">
                                        <label>Search Unsplash Pictures Collection:</label>
                                            <div class="input-group">
                                                <input v-model="search" type="text" class="form-control">
                                                <span class="input-group-btn">
                                                        <button id="refresh-page" type="button" class="btn btn-default" @click='addSearch()'>Search</button>
                                                </span>    
                                            </div>
                                            <div>&#160;</div>

                                    </div>
                                    <!-- <form id='theform' method="post"> -->
                                <div v-for='(item,index) in arrayList' :key='index.id'>
                                <div v-if='item.description !== null && item.city !== null && item.country !== null'>
                                
                                    <table class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example2">

                                        <thead>
                                        <tr>
                                            <th width="25%" valign="center">Image</th>
                                            <th width="75%" valign="top" rowspan='7'>Information</th>
                                        </tr>
                                        </thead>
                                        <tbody>								
                                                
                                        <?php //CONSULTA DE SELECCIO DEL POST AMB LES IMATGES A MODOFICAR//					
                                    
                /////////////////////////////////////////////////////////////////// 

                                        print "<tr>";                 				
                                            print "<td valign=\"top\">";
                                            print "<figure>"; 
                                            print "<div class=\"img-responsive, Thumb-Box\" style='text-align: left'>";
                                            print "<img :src='item.imageurl' alt='foto' width='100%' height='250px' style=\"border:1px solid #a6a6a6\">";
                                            print "<div>&#160;</div>";
                                            print "<form :id=\"'theform'+index\" method=\"post\">"; 
                                            print "<button :id='index' :name='index' type='text' class='btn btn-default btn-group-vertical' @click='addRow(item);'> Add Image </button>";
                                            print "</form>";
                                            print "</figure>";
                                            print "</td>";
                                            print "<td>";
                                            print "<div>&#160;</div>";
                                            print "<label>Description:</label>"; 
                                            print "<input type=\"text\" name=\"caption_1\" :value='item.description' class=\"form-control\">";		
                                            print "<div>&#160;</div>";
                                            print "<label>City:</label>"; 
                                            print "<input type=\"text\" name=\"caption_1\" :value='item.city' class=\"form-control\">";	
                                            print "<div>&#160;</div>";
                                            print "<label>Country:</label>"; 
                                            print "<input type=\"text\" name=\"caption_1\" :value='item.country' class=\"form-control\">";	
                                            print "<div>&#160;</div>";
                                            print "<label>Autor:</label>"; 
                                            print "<input type=\"text\" name=\"caption_1\" :value='item.imageown' class=\"form-control\">";	                  			
                                            print "</td>";
                                        print "</tr>";
                                print "</tbody>";	    
                                print "</table>";
                                print "</div>";     
                                print "</div>"; 
                                print "</div>";
                                print "</div>";	                           
                                print "</div>";                             
                                print "</div>";                            
                                print "</div>";                               
                                print "</div>";
                               	
	
