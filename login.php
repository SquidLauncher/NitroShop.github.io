

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
 
<header>
<div class="container">
<div class="intro-text">
<div class="intro-heading">Drek.</div>
</div>
</div>
</header>
 
<section id="buy">
<div class="container">
<div class="row">
<div class="col-lg-12 text-center">
<h2 class="section-heading">Log in</h2>
</div>
</div>
<div class="row text-center">
<form method="post" action="login.php" id="login-form">
<table>
<tr>
<td><h5 class="section-heading">Email address: </h5></td>
<td><input type="text" name="email" class="textbox" placeholder="Email address..."/></td>
</tr>
<tr>
<td><h5 class="section-heading">Password: </h5></td>
<td><input type="password" name="password" class="textbox" placeholder="Password..."/></td>
</tr>
</table>
<div class="g-recaptcha" data-sitekey="6Lfq6AwUAAAAAD33zPa2qHlviaBFkHypOBmNvF3x" align="center"></div>
</form>
<br>
<a href="javascript:document.forms['login-form'].submit();" class="btn btn-xl">Log in</a>
<h3 class="section-subheading">Don't have an account yet? <a href="register.php">Register.</a></h3>
</div>
</div>
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
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
		$(document).ready(function(){
			$('[data-toggle="popover"]').popover(); 
		});
	</script>
</body>
</html>