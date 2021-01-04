 <?php
session_start();
include('connection.php');

//logout
include('logout.php');

//remember me
include('rememberme.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Notes</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styling.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
  </head>
  <body>
<!-- Navigation bar-->
<nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
      
          <div class="container-fluid">
            
              <div class="navbar-header">
              
                  <a class="navbar-brand">Online Notes</a>
                  <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  
                  </button>
              </div>
              <div class="navbar-collapse collapse" id="navbarCollapse">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Contact us</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#loginModal" data-toggle="modal">Login</a></li>
                  </ul>
              
              </div>
          </div>
      
      </nav>
<!--  Jumbotron with sign uo button-->
<div class="jumbotron" id="myContainer">
    <h1>Online Notes App</h1>
    <p>Your Notes with you wherever you go</p>
    <p>Easy to use, protects all your notes!</p>
    <button type="button" class="btn btn-lg green signup" data-target="#signupModal" data-toggle="modal">Sign up-It's free</button>
</div>
 <!-- Login form -->
<form method="post" id="loginform">
    <div class="modal" id="loginModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <h4 id="myModalLabel">Login:</h4>
                    </div>
                    <div class="modal-body">
                        <div id="loginmessage"></div>
                        
                        <div class="form-group">
                            <label for="loginemail" class="sr-only">Email</label>
                            <input class="form-control" type="email" name="loginemail" id="loginemail" placeholder="Email" maxlength="50">
                        </div>
                        
                        <div class="form-group">
                            <label for="loginpassword" class="sr-only">Password</label>
                            <input class="form-control" type="password" name="loginpassword" id="loginpassword" placeholder="Password" maxlength="30">
                        </div>
                        <div class="checkbox">
                           <label>
                            <input type="checkbox" name="rememberme" id="rememberme">
                           Remember me
                            </label>
                            <a class="pull-right" style="cursor: pointer" data-dismiss="modal" data-target="#forgotpasswordModal" data-toggle="modal">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input class="btn green" type="submit" name="login" value="Login">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="#signupModal" data-toggle="modal">Register</button>
                
                    </div>
                
                </div>
            </div>
        </div>
</form>

<!-- Sign up form -->
<form method="post" id="signupform">
    <div class="modal" id="signupModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <h4 id="myModalLabel">Sign up today and start using our Online Notes App!</h4>
                    </div>
                    <div class="modal-body">
                        <div id="signupmessage"></div>

                        <div class="form-group">
                            <label for="username" class="sr-only">Username</label>
                            <input class="form-control" type="text" name="username" id="username" placeholder="Username" maxlength="30">
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="Email Address" maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Choose a password</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Choose a password" maxlength="30">
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Confirm password</label>
                            <input class="form-control" type="password" name="password2" id="password2" placeholder="Confirm password" maxlength="30">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input class="btn green" type="submit" name="signup" value="Sign up">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                
                    </div>
                
                </div>
            </div>
        </div>
</form>

<!-- Forgot password form -->
<form method="post" id="forgotpasswordform">
    <div class="modal" id="forgotpasswordModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <h4 id="myModalLabel">Forgot Password? Enter your email address: </h4>
                    </div>
                    <div class="modal-body">
                        <div id="forgotpasswordmessage"></div>
                        
                        <div class="form-group">
                            <label for="forgotemail" class="sr-only">Email</label>
                            <input class="form-control" type="email" name="forgotemail" id="Email" placeholder="Email" maxlength="50">
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input class="btn green" type="submit" name="forgotpassword" value="Submit">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="signupModal" data-toggle="modal">Register</button>
                
                    </div>
                
                </div>
            </div>
        </div>
</form>

<!-- Footer -->
<div class="footer">
    <div class="container">
        <p>TLR Copyright &copy; <?php $today=date("Y"); echo $today?></p>
        
    </div>
    
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plagins) -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="index.js"></script>
  </body>
</html>