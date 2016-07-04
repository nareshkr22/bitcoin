<?php
require_once 'includes/db_config.php';

if(!isset($_SESSION['active']))
{
 	$_SESSION['error']="Please Login";
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
	<?php $title="Admin Panel";
	   include 'template/head.php';
	    ?>

	<body class="no-skin">
		
		<?php include 'template/nav.php'; ?>
		<!-- /section:basics/navbar.layout -->
		<div class="main-container" id="main-container">
			

			<!-- #section:basics/sidebar -->
			
		<?php include 'template/sidebar.php'; ?>	

			<!-- /section:basics/sidebar -->
			<div class="main-content">
				<div class="main-content-inner">
					
					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
					
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
                       	<!-- #section:pages/error -->
								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller">
											<span class="blue bigger-125">
												<i class="ace-icon fa fa-random"></i>
												
											</span>
											Bitcoin Wallet Manager
										</h1>
										<hr />
										<h3 class="lighter smaller">
										Welcome, to Dashboard										
										</h3>
										<div>		
											<ul class="list-unstyled spaced inline bigger-110 margin-15">
												<li>
													<i class="ace-icon fa fa-hand-o-right blue"></i>
												Add All Your Addresses <Br>
												&nbsp;Add all the public addresses you already have. Accept any cryptocoin from anyone on one page.
												</li>
												<li>
													<i class="ace-icon fa fa-hand-o-right blue"></i>
												Proof of Solvency, SHA-2 SSL, AES user data encryption, 2FA on all accounts, majority of funds in cold storage
												</li>

												
											</ul>
										</div>

										<hr />
										<div class="space"></div>

										
									</div>
								</div>

				
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<!-- #section:basics/footer -->
					<div class="footer-content">
					

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>

					<!-- /section:basics/footer -->
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->
    <?php include 'scripts.php';
    ?>
	</body>
</html>
