<?php
	require 'phpscripts/members.php';
	$member = new membership();

	if($_POST && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['ver_password'])) {
		$resp = $member->signup($_POST['username'], $_POST['password'], $_POST['ver_password']);
	}
?> 
<!--
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ScheJ - Sign-Up</title>

    <!-- Bootstrap -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
		<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="index.html">ScheJ!</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		 
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="index.html">Home</a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<br>
	<div class="container" style="text-align: center; color:#777; font-size: 30px;">
	  Sign-Up Page
	</div>
	<br>
	<br>
	<div class="container">
<div class="row clearfix">
    <div class="col-md-6 col-md-offset-3 column">
        <form role="form" method="post" action="signupmain.php">
            <div class="form-group">
                 <label for="exampleInputUsername1">Username</label><input type="username" name="username" class="form-control" id="username" placeholder="JohhhnnnCeennaa123"/>
            </div>
            <div class="form-group">
                 <label for="exampleInputPassword1">Password</label><input type="password" class="form-control" name="password" id="password" placeholder="Password" />
            </div>
	    <div class="form-group">
                 <label for="exampleInputPassword2">Verify Password</label><input type="password" name="ver_password" class="form-control" id="ver_password" placeholder="Password" />
            </div>
	    <div class="form-group">
            <div class="checkbox">
            </div> <button type="submit" class="btn btn-default">Submit</button>
        </form>
		<?php if(isset($resp)) echo "<h3> $resp </h3>"; ?>
    </div>
</div>
<div class="row clearfix">
    <div class="col-md-12 column">
    </div>
</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
