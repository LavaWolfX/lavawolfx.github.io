<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $from = 'Demo Contact Form'; 
        $to = 'your email';  /*  your email address  */
        $subject = 'Message from website';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";

        if (!$_POST['name']) {
            $result = 'Please enter your name';
        }
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $result = 'Please enter a valid email address';
        }
        if (!$_POST['message']) {
            $result = 'Please enter your message';
        }
 
if (!$result) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Flupy.eu - contact-us | your magic minecraft world</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<header>
		<nav class="navbar">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand">flupy.eu</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.html">Home</a></li>
						<li><a href="#">Forum</a></li>
						<li><a href="#">Bans</a></li>
						<li><a href="shop.html">Shop</a></li>
						<li class="active"><a href="#">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<div class="header-small">
		<h1>Contact us</h1>
	</div>
	<div class="container">
		<div class="col-md-6 col-sm-8">
			<h2>Contact Us via direct email</h2>
			<form method="post" action="contact-us.php" class="contact-us">
				<div class="form-group">
					<input type="text" name="name" placeholder="Username in game">
				</div>
				<div class="form-group">
					<input type="email" name="email" placeholder="Email">
				</div>
				<div class="form-group">
					<textarea name="message" placeholder="Message"></textarea>
				</div>
				<button type="submit" name="submit" class="btn-red2">Send</button>
				<?php echo $result; ?>
			</form>
		</div>
		<div class="col-md-6 col-sm-4">
			<h2>You can find us on</h2>
			<div class="social-media">
				<a href=""><i class="fa fa-skype fa-lg"></i>Skype</a>
				<a href=""><i class="fa fa-youtube fa-lg"></i>Youtube</a>
				<a href=""><i class="fa fa-twitter fa-lg"></i>Twitter</a>
			</div>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="col-md-3 col-xs-6">
				<h4>Flupy.eu</h4>
				<p>Your magic mc world</p>
			</div>
			<div class="col-md-7 hidden-xs hidden-sm">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="#">Forum</a></li>
					<li><a href="#">Bans</a></li>
					<li><a href="shop.html">Shop</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</div>
			<div class="col-md-2 col-xs-6">
			<ul>
				<li><a href="#"><i class="fa fa-skype fa-lg"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube fa-lg"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
			</ul>
			</div>
		</div>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>