<?php
include('lib/session.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Photo Gallery - Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- Bootstrap File Input -->
	<link href="dist/css/fileinput.min.css" rel="stylesheet">
	
	<!-- Pagination own style -->
	<link href="./dist/css/pagination.css" rel="stylesheet">
	   
	<style type="text/css">
	.btn-file {color: #333;background-color: #fff;border-color: #ccc;}
	.btn-file:hover {color: #333;background-color: #e6e6e6;border-color: #adadad;}
	.btn-file.active.focus, .btn-file.active:focus, .btn-file.active:hover, .btn-file:active.focus, .btn-file:active:focus, .btn-file:active:hover, .open>.dropdown-toggle.btn-file.focus, .open>.dropdown-toggle.btn-file:focus, .open>.dropdown-toggle.btn-file:hover
	{color: #333;background-color: #e6e6e6;border-color: grey;}</style>
	   
</head>

<body>

<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php">Photo Gallery Admin</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <?php if(isset($_GET['sec']) && $_GET['sec']!='home' && $_GET['sec']!='images' && $_GET['sec']!='images_llist'){?>

            <!-- dropdown options section -->
            <li class="dropdown">
                <a class="dropdown-toogle" data-toggle="dropdown" href="#">
                    <i class="fa fa-plus fa-fw" style="color:#8c8c8c !important"></i>  <i class="fa fa-caret-down" style="color:#8c8c8c !important"></i>
                </a>
                <ul class="dropdown-menu dropdown-options">
                    <li><a href="?sec=<?php echo $_GET['sec'];?>&sub=new"><i class="fa fa-plus-circle fa-fw"></i> New post</a>
                    </li>
                    <li><a href="?sec=unsplash&sub=new"><i class="fa fa-plus-circle fa-fw"></i> New Unsplash</a>
                    </li>                    
                    <li><a href="?sec=<?php echo $_GET['sec'];?>&sub=lst"><i class="fa fa-list-alt fa-fw"></i> Listed</a>
                    </li>
                </ul>
            </li>           
            <?php } ?>
            
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw" style="color:#8c8c8c !important"></i>  <i class="fa fa-caret-down" style="color:#8c8c8c !important"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> <?php echo $nomComplet;?></a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="lib/logout.php"><i class="fa fa-sign-out fa-fw"></i> Close</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="?sec=home"><i class="fa fa-home fa-fw" style="color:#333333 !important"></i><span style="color:#333333 !important"> Home</span></a>
                    </li>
                    <li>
						<a href="#"><i class="fa fa-picture-o fa-fw" style="color:#333333 !important"></i><span style="color:#333333 !important"> Posts</span><span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
						<li>										
                        <a href="?sec=post"><i class="fa fa-columns fa-fw" style="color:#333333 !important"></i><span style="color:#333333 !important"> Listed Posts</span></a>
						<a href="?sec=duplicate_post"><i class="fa fa-file-image-o fa-fw" style="color:#333333 !important"></i><span style="color:#333333 !important"> Duplicates</span></a>
						</li>
						</ul>												
                    </li>                   
                    <li>						
						<a href="#"><i class="fa fa-picture-o fa-fw" style="color:#333333 !important"></i><span style="color:#333333 !important"> Images</span><span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
						<li>
						<a href="?sec=images_llist"><i class="fa fa-file-image-o fa-fw" style="color:#333333 !important"></i><span style="color:#333333 !important"> Listed Images</span></a>
						<a href="?sec=images"><i class="fa fa-file-image-o fa-fw" style="color:#333333 !important"></i><span style="color:#333333 !important"> Images Gallery</span></a>
						</li>
						</ul>						
                    </li>  
                    <li>
			             <a href="#"><i class="fa fa-gears fa-fw" style="color:#333333 !important"></i><span style="color:#333333 !important"> Settings</span><span class="fa arrow"></span></a>			 
			             <ul class="nav nav-second-level">
			             <li>
			             <a href="?sec=user"><i class="fa fa-user fa-fw" style="color:#333333 !important"></i><span style="color:#333333 !important"> Users</span></a>
		          	     </li>
			             </ul>
				    </li>			       	                                                                                       
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
	<!-- Page Content -->
	<div id="page-wrapper">

		<?php
		//SCRIPT QUE CARREGA LA PÀGINA

		if(isset($_GET['sec'])){
			$pagina=strtolower($_GET['sec']);
		}
		else{
			$pagina='home';
		}

		require_once ('content/' . $pagina . '.php');

		?>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
	                           
	<!-- Bootstrap FileInput -->
    <script src="dist/js/fileinput.min.js"></script>					  
				
</body>

</html>
