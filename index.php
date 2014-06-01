<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Expense Tracker - Login</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

        <link href="css/sb-admin.css" rel="stylesheet">
        <style>
            .btn-custom {
                background-color: hsl(202, 100%, 16%) !important;
                background-repeat: repeat-x;
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#0081cc", endColorstr="#003351");
                background-image: -khtml-gradient(linear, left top, left bottom, from(#0081cc), to(#003351));
                background-image: -moz-linear-gradient(top, #0081cc, #003351);
                background-image: -ms-linear-gradient(top, #0081cc, #003351);
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #0081cc), color-stop(100%, #003351));
                background-image: -webkit-linear-gradient(top, #0081cc, #003351);
                background-image: -o-linear-gradient(top, #0081cc, #003351);
                background-image: linear-gradient(#0081cc, #003351);
                border-color: #003351 #003351 hsl(202, 100%, 10%);
                color: #fff !important;
                text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.39);
                -webkit-font-smoothing: antialiased;
            }
        </style>
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Roomate Expense Tracker Login!</h3>
                        </div>
                        <div class="panel-body">
                            <form id="loginForm" action="login.php" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" name="username" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <input type="submit" value="Log In" class="btn btn-primary btn-custom" />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Core Scripts - Include with every page -->
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

        <!-- SB Admin Scripts - Include with every page -->
        <script src="js/sb-admin.js"></script>

    </body>

</html>
