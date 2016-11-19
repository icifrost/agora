<?php if(!defined("ADMIN_IS_INCLUDED")){header("Location:unauthorised_error.php");} ?>
<?php
if(isset($_GET['status'])){
	$failed_login = $_GET['status'];
	if($failed_login == '1'){
		?>
		<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4><i class="fa fa-bell-alt"></i>Oh snap!</h4>
                    <p>There were invalid characters in your name.
											<a href="index.php?page=login" class="alert-link">Try and login again</p>
                  </div>
		<?php
	}
	if($failed_login == '2'){
	?>
	<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4><i class="fa fa-bell-alt"></i>Oh snap!</h4>
                    <p>Logging In... Wrong username or password.
							<a href="index.php?page=login" class="alert-link">Try and login again</p>
                  </div>
	<?php
	}
}
?>
<section id="content" class="m-t-lg wrapper-md animated fadeInUp">
<div class="container aside-xl">
<a class="navbar-brand block" href="index.html"><span class="h1 font-bold">Agora Code Community</span></a>
<section class="m-b-lg">
<header class="wrapper text-center">
<strong>Administrator sign in</strong>
</header>
<form action="index.php" method="post">
          <div class="form-group">
            <input type="username" name="username" placeholder="Username" class="form-control rounded input-lg text-center no-border">
          </div>
          <div class="form-group">
             <input type="password" name="password" placeholder="Password" class="form-control rounded input-lg text-center no-border">
          </div>
          <button type="submit" name="login" class="btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded"><i class="icon-arrow-right pull-right"></i><span class="m-r-n-lg">Sign in</span></button>
          <div class="text-center m-t m-b"><a href="#"><small>Forgot password?</small></a></div>
        </form>
</section>
</div>
</section>