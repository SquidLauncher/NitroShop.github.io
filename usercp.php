<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Drek Ghost Client">
<title>Drek</title>
 
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
 
<link href="css/usercp.css" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
 
 
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" class="index">
 
<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
<div class="container">
 
<div class="navbar-header page-scroll">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
</button>
</div>
 
<div class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-right">
<li>
<a class="page-scroll" href="index.php?logout=1">Log out</a>
</li>
</ul>
</div>
 
</div>
 
</nav>
 
<header>
<div class="container">
<div class="intro-text">
<div class="intro-heading">Drek.</div>
</div>
</div>
</header>
<section id="buy">
<form method="POST" id="form">
<input type="hidden" name="action" id="action" value=""/>
<div class="container">
<div class="row">
<div class="col-lg-12 text-center">
<h2 class="section-heading">Download Drek</h2>
<h3 class="section-subheading">Note: Make sure your have Java 8 or higher.</h3>
</div>
</div>
<div class="row text-center">
<a href="javascript:executeAction('download_1_7_10');" class="btn btn-xl">1.7.10 Forge mod</a><br>
<a href="javascript:executeAction('download_1_7_10_inject');" class="btn btn-xl">1.7.10 Injector (64-bit Windows only)</a><br>
<a href="javascript:executeAction('download_1_7_10_inject_beta');" class="btn btn-xl">1.7.10 Injector Beta (64-bit Windows only)</a><br>
</div>
<hr>
<div class="row">
<div class="col-lg-12 text-center">
<h2 class="section-heading">Change password</h2>
</div>
</div>
<div class="row text-center">
<table>
<tr>
<td><h5 class="section-heading">Old password: </h5></td>
<td><input type="password" name="old_password" class="textbox" placeholder="Old password..."/></td>
</tr>
<tr>
<td><h5 class="section-heading">New password: </h5></td>
<td><input type="password" name="password" class="textbox" placeholder="New password..."/></td>
</tr>
<tr>
<td><h5 class="section-heading">Retype new password: </h5></td>
<td><input type="password" name="password_repeat" class="textbox" placeholder="Repeat new password..."/></td>
</tr>
</table>
<br>
<a href="javascript:executeAction('update_password');" class="btn btn-xl">Update password</a>
</div>
</div>
</form>
</section>
<footer>
<div class="container">
<div class="row">
<div class="col-md-4">
<span class="copyright">Copyright &copy; Drek 2017</span>
</div>
</div>
</div>
</footer>
 
<script src="vendor/jquery/jquery.min.js"></script>
 
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
 
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>
 
<script src="js/agency.min.js"></script>
<script>
		$(document).ready(function(){
			$('[data-toggle="popover"]').popover(); 
		});
		
		function executeAction(action) {
			document.getElementById("action").value = action;
			document.getElementById("form").submit();
		}
	</script>
</body>
</html>
