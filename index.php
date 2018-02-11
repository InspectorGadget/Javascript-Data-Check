<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Javascript Site</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Custom Javascript for processing -->
    <script type="text/javascript" src="run.js"></script>
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required> 

        <button class="btn btn-lg btn-primary btn-block" type="submit" >Sign in</button>
      </form>

      	<?php
      	error_reporting(1);

        	$username = $_POST['username'];
        	$password = $_POST['password'];

        ?>

        <script type="text/javascript">
        	
        	var username = "<?php echo $username; ?>";
        	var password = "<?php echo $password; ?>";

        </script>

        <br>

        <button class="btn btn-lg btn-primary btn-block" type="button" onclick="onProcess(username, password)"> Check Data </button>

      <br><br><br>

      <center>

	      <h3 id="username"></h3>
	      <br>
	      <h3 id="password"></h3>

  	  </center>

  	  <br>

        <button class="btn btn-lg btn-default btn-block" type="button" onclick="onReload()"> Reload page </button>

    </div> <!-- /container -->
  </body>
</html>