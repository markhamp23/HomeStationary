<?php
include('login_admin.php'); // Includes Login Script

if(isset($_SESSION['username'])){
    header("location: admin/home.php");
}
?>
				<div class="panel-heading float-right">
					<h3 class="panel-title" style="text-align:right">Please Sign In:</h3>
				</div>
				<div class="panel-body">
											
					<form action="" method="post" role="form">
						<fieldset>  
							<div class='clear'>&#160;</div>                          	
							<div style="text-align:right" class="form-group <?php if($error=='U1' || $error=='U2' || $error=='U4') echo "has-error"; ?>">
								<input class="form-control" placeholder="Email" name="username" type="email" value="">
							</div>
							<div class='clear'>&#160;</div>
							<div style="text-align:right" class="form-group <?php if($error=='U1' || $error=='U3' || $error=='U5') echo "has-error"; ?>">
								<input class="form-control" placeholder="Password" name="password" type="password" value="" autofocus>
							</div>
							<div style="text-align:right" class="checkbox">
								<div class='clear'>&#160;</div>
								<label><input name="remember" type="checkbox" value="Remember Me">Remember Me</label>
							</div>
							<!-- Change this to a button or input when using this as a form -->
							<div class='clear'>&#160;</div>
							<div style="text-align:right">
							<button type="submit" name="login" value="login" class="btn btn-default btn-default btn-block">Login</button>
							</div>
						</fieldset>
					</form>						
			<?php
			if($error){
			include('admin/lib/connectar.php');
			$stmt=$conn->prepare('select frase from errorcode where id=:error');
			$stmt->execute(array(':error'=>$error));
			$row=$stmt->fetch(PDO::FETCH_ASSOC);
			print "<div class=\"alert alert-danger alert-dismissable\"><p style='text-align:right'>$row[frase]</p></div>";
			}			
			?>    

</div>		
		
	



