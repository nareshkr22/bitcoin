<?php
session_start();
if(isset($_POST['submit']))
{

 if($_POST['username'] === "demo" && $_POST['password'] === "pass")
 {
 	$_SESSION['active']=1;
 	header("Location: index.php");
 }
 else
 {
 	$_SESSION['error']="Password and Username not matched";
 }
}
?>

<!DOCTYPE html>
<html lang="en">

    <?php 
      $title = "Login Page";
      include 'head.php'; ?>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red">BITCOIN</span>
									<span class="white" id="id-text2">Wallet Manager</span>
								</h1>

							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Please Enter Your Information												
											</h4>
											<b>Note </b> Username : demo Password : pass
											<p class="text-danger">
											<?php if(isset($_SESSION['error']))
											{
												echo $_SESSION['error'];
											}
											?>
											</p>
											<div class="space-6"></div>

											<form action="login.php" method="POST">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="username" placeholder="Username" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" name="password" placeholder="Password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
									

														<button type="submit" name="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											

										</div><!-- /.widget-main -->

								

							</div><!-- /.position-relative -->

							
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

<?php include 'scrripts.php'; ?>

	</body>
</html>
