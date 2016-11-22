<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  

    <title>Signin CMS</title>

    <!-- Bootstrap core CSS -->
    <link href="http://localhost/heliorecords/custom/css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://localhost/heliorecords/custom/css/signin.css" rel="stylesheet">

    
  </head>

  <body>

    <div class="container">
    	<form class="form-signin" action="<?php echo base_url('login_controller/check_Login'); ?>">
    	      
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="userName" name ="u" id="inputUsername" class="form-control" placeholder="Username e.g; jhon, sham" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name = "p" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
    


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
