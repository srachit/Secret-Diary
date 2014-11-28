<?php
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Secret Diary</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header pull-left">
                <a class="navbar-brand">Secret Diary</a>
            </div>
            <div class="pull-right">
                <ul class="navbar-nav nav">
                    <li><a href=" ">Log Out</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container contentContainer" id="topContainer">
        <div class="row">

            <div class="col-md-6 col-md-offset-3" id="mainTopRow">
                <textarea class="form-control">
                </textarea>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    </body>
</html>
