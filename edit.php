<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	require 'phpscripts/events.php';
	$event = new eventEdit();
	echo "fdjksal;jfkdsajl;fas";
	if($_POST && !empty($_POST['ename']) &&/* !empty($_POST['estarthr']) && !empty($_POST['estartmi    n']) && !empty($_POST['eendhr']) && !empty($_POST['eendmin']) &&*/ !empty($_POST['mon'])||!empty($_POST['tues'])||!empty($_POST['wed'])||!empty($_POST['thur'])||!empty($_POST['fri'])||!empty($_POST['sat'])||!empty($_POST['sun'])) {
		
		echo "adsfasdfasdf";
		$resp = $event->add($_POST['ename'], $_POST['estarthr'], $_POST['estartmin'], $_POST['startam'], $_POST['eendhr'], $_POST['eendmin'], $_POST['endam'], $_POST['mon'], $_POST['tues'], $_POST['wed'], $_POST['thur'], $_POST['fri'], $_POST['sat'], $_POST['sun']);
	}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ScheJ - Edit Schedule</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Bootstrap -->
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
		  <a class="navbar-brand" href="index.html">ScheJ</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="home.html">Home</a></li>
			<li><a href="groups.html">Groups</a></li>
			<li><a href="search.html">Search</a></li>
			<li><a href="index.html">Settings</a></li>
			<li><a href="index.html">Log-Out</a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="container">
	    <div class="col-xs-4 col-sm-4 pull-left" style="text-align:center; color: #777; font-size: 20px; padding-left: 0em">Add Event
		  <form role="form" method="post" action="edit.php">
		     <div class="panel panel-default">
			 <div class="panel-body">
			  <div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Event</span>
				<input type="text" name='ename' class="form-control" aria-describedby="basic-addon1">
			  </div>
			 </div>
				<div class="panel-body">
					 <div style="height: 32px; ">
						<table>
						  <td>    
							  <span class=""></span></button>
							    <select name='estarthr' class="form-control">
								<option value='1'>1</option>
								<option value='2'>2</option>
								<option value='3'>3</option>
								<option value='4'>4</option>
								<option value='5'>5</option>
								<option value='6'>6</option>
								<option value='7'>7</option>
								<option value='8'>8</option>
								<option value='9'>9</option>
								<option value='10'>10</option>
								<option value='11'>11</option>
								<option value='12'>12</option>
								</select>
							</div>
						  </td>
						  <td>
							:
						  </td>
						  <td>
							<span class=""></span></button>
							<select name='estartmin' class="form-control">
								<option value='00'>00</option>
								<option value='10'>10</option>
								<option value='20'>20</option>
								<option value='30'>30</option>
								<option value='40'>40</option>
								<option value='50'>50</option>
								</select>
							</div>
						  </td>
						  <td>
						  <!--add am/pm-->
							<span class=""></span></button>
							<select name='startam' class="form-control">
								<option value=true>AM</option>
								<option value=false>PM</option>
							 </select>
							</div>
						  </td>
						</table>
						<br>
						<table>
						  <td> 
							<div>
							<span class=""></span></button>
							    <select name='eendhr' class="form-control">
								<option value='1'>1</option>
								<option value='2'>2</option>
								<option value='3'>3</option>
								<option value='4'>4</option>
								<option value='5'>5</option>
								<option value='6'>6</option>
								<option value='7'>7</option>
								<option value='8'>8</option>
								<option value='9'>9</option>
								<option value='10'>10</option>
								<option value='11'>11</option>
								<option value='12'>12</option>
								</select>
							</div>
						  </td>
						  <td>
							:
						  </td>
						  <td>
							<span class=""></span></button>
							<select name='eendmin' class="form-control">
								<option value="00">00</option>
								<option value="10">10</option>
								<option value="20">20</option>
								<option value="30">30</option>
								<option value="40">40</option>
								<option value="50">50</option>
								</select>
							</div>
						  </td>
						  <td>
							<!-- add am/pm-->
							<span class=""></span></button>
							<select name='endam' class="form-control">
								<option value=true>AM</option>
								<option value=false>PM</option>
							 </select>
							</div>
						  </td>
						</table>
					 </div>
					  				  
				</div>
			 <div class="panel-body">
			  <br>
			  <br>
			  <form>
			  <div class="checkbox" style="text-align: left">
			      <label>
				    <input type="checkbox" name='mon'>Monday
				  </label>
				  <br>
				  <label>
				    <input type="checkbox" name='tues'>Tuesday
				  </label>
				  <br>
				  <label>
				    <input type="checkbox" name='wed'>Wednesday
				  </label>
				  <br>
				  <label>
				    <input type="checkbox" name='thur'>Thursday
				  </label>
				  <br>
				  <label>
				    <input type="checkbox" name='fri'>Friday
				  </label>
				  <br>
				  <label>
				    <input type="checkbox" name='sat'>Saturday
				  </label>
				  <br>
				  <label>
				    <input type="checkbox" name='sun'>Sunday
				  </label>
				  <br>
			  </div>
			  </form>
			 </div>
			 <div class="panel-body">
			     </div> <button type="submit" class="btn btn-default">Submit</button>
			 </div>
		    </form>
		</div>
		
		<div class="col-xs-8 col-sm-8 pull-right" style="text-align:center; color: #777; font-size: 20px; padding-right: 0em">Updating Schedule
		   <div class="panel panel-default">
			 <div class="panel-body">
		      <br>
			  <a href="index.html"><button type="button" class="btn btn-primary btn-lg active" style="background-color:#222222; border:1px solid black; width: 8em;">Edit Schedule</button></a>
			 </div>
			 <div class="panel-body">
		      <br>
			  <a href="index.html"><button type="button" class="btn btn-primary btn-lg active" style="background-color:#222222; border:1px solid black; width: 8em;">Edit Schedule</button></a>
			 </div>
			 <div class="panel-body">
		      <br>
			  <a href="index.html"><button type="button" class="btn btn-primary btn-lg active" style="background-color:#222222; border:1px solid black; width: 8em;">Edit Schedule</button></a>
			 </div><div class="panel-body">
		      <br>
			  <a href="index.html"><button type="button" class="btn btn-primary btn-lg active" style="background-color:#222222; border:1px solid black; width: 8em;">Edit Schedule</button></a>
			 </div>
		   </div>
		</div>
	  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
