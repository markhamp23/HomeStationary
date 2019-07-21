<?php
include('lib/login.php'); // Includes Login Script

if(isset($_SESSION['username'])){
    header("location: home.php");
}
?>
<!DOCTYPE html>
<html lang="ca">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Photo Gallery - Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                    	
					<?php	
					
					@mysql_connect("localhost","root","");
														 
					if(isset($_COOKIE['id_user']) && isset($_COOKIE['marca'])){
						if($_COOKIE['id_user']!="" || $_COOKIE['marca']!=""){
						$sql_c = @mysql_query("SELECT * FROM user 
										WHERE Mail='".$_COOKIE["id_user"]."' 
										AND cookie='".$_COOKIE["marca"]."'
										AND cookie<>'';");
					?>						
                        <form action="" method="post" role="form">
                            <fieldset>                            	
                                <div class="form-group <?php if($error=='U1' || $error=='U2' || $error=='U4') echo "has-error"; ?>">
                                    <input class="form-control" placeholder="Email" name="username" type="email" value="<?php echo $_COOKIE["id_user"]; ?>">
                                </div>
                                <div class="form-group <?php if($error=='U1' || $error=='U3' || $error=='U5') echo "has-error"; ?>">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" autofocus>
                                </div>
                                <div class="checkbox">
                                    <label><input name="remember" type="checkbox" value="Remember Me" checked>Remember Me</label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" name="login" value="login" class="btn btn-default btn-default btn-block">Login</button>
                            </fieldset>
                        </form>						
                    <?php
						}
					}
					else{
					?>                   	                    	
                        <form action="" method="post" role="form">
                            <fieldset>
                                <div class="form-group <?php if($error=='U1' || $error=='U2' || $error=='U4') echo "has-error"; ?>">
                                    <input class="form-control" placeholder="Email" name="username" type="email" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>" autofocus>
                                </div>
                                <div class="form-group <?php if($error=='U1' || $error=='U3' || $error=='U5') echo "has-error"; ?>">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label><input name="remember" type="checkbox" value="Remember Me">Remember Me</label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" name="login" value="login" class="btn btn-default btn-default btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <?php
                if($error){
                include('lib/connectar.php');
                $stmt=$conn->prepare('select frase from errorcode where id=:error');
                $stmt->execute(array(':error'=>$error));
                $row=$stmt->fetch(PDO::FETCH_ASSOC);
                print "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button><p>$row[frase]</p></div>";
                $conn=null;
                } ?>
       			<?php
				}
				?>                  
            </div>
        </div>
    </div>

    <!-- jQuery JavaScript -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
	
</body>

</html>
