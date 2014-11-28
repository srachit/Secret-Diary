<?php
    include("login.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap 101 Template</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">MyApp</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">	 	
                        <li class="active"><a href="#topContainer">Home</a></li>
                        <li><a href="#details">About</a></li>
                        <li><a href="#footer">Download The App</a></li>
                    </ul>
                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="email" placeholder="Email" class="form-control" />
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" class="form-control" />
                        </div>
                        <button type="submit" class="btn btn-success">Log In </button>
                    </form>
                </div>
            </div>
        </div>
    
        <div class="container contentContainer" id="topContainer">
            <div class="row">

                <div class="col-md-6 col-md-offset-3" id="topRow">

                    <h1 class="marginTop">My Awesome App</h1>

                    <p class="lead">This is why should download this fantastic app.</p>

                    <p>Some more information about the app. You can go into a little 
                        more detail here if you want to.</p>

                    <p class="bold marginTop">Interested? Join our mailing list!</p>
                    <form class="marginTop">
                        <div class="input-group">
                            <span class="input-group-addon">@</span>
                            <input type="email" class="form-control" placeholder="Your email" />
                        </div>
                        <input type="submit" class="btn btn-success btn-lg marginTop" />
                    </form>
                </div>
            </div>
        </div>
            
        </div>
        <form method="post">
            <input type="email" name="email" id="email" value="<?php echo addslashes($_POST['email']); ?>"/>
            <input type="password" name="password" value="<?php echo addslashes($_POST['password']); ?>"/>
            <input type="submit" name="submit" value="Sign Up" />
        </form>

        <form method="post">
            <input type="email" name="loginemail" id="loginemail" value="<?php echo addslashes($_POST['email']); ?>"/>
            <input type="password" name="loginpassword" value="<?php echo addslashes($_POST['password']); ?>"/>
            <input type="submit" name="submit" value="Login" />
        </form>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script>
        $("contentContainer").css("min-height", $(window).height());
    </script>
    </body>
</html>
