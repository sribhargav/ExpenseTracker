<?php
$DOMAIN = $_SERVER['HTTP_HOST']; //DOMAIN
define("SITEURL", "http://$DOMAIN/ExpenseTracker");
define("ASITEURL", SITEURL);

$link = "";
$usersName = "";

if (isset($_SESSION['userType']) && isset($_SESSION['userName'])) {
    
    $usersName = $_SESSION['userName'];
    
    switch ($_SESSION['userType']) {

        case 1: $link = "administrator";
            break;

        case 2: $link = "user";
            break;
    }
}
?>
<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Expense Tracker</title>

        <link href="<?php echo ASITEURL; ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo ASITEURL; ?>/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="<?php echo ASITEURL; ?>/font-awesome/css/font-awesome.css" rel="stylesheet">

        <link href="<?php echo ASITEURL; ?>/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
        <link href="<?php echo ASITEURL; ?>/css/plugins/timeline/timeline.css" rel="stylesheet">
        
        <link href="<?php echo ASITEURL; ?>/css/sb-admin.css" rel="stylesheet">
    </head>

    <body>

        <div id="wrapper">

            <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <b><a class="navbar-brand" href="index.html">Expense Tracker</a></b>
                </div>

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <b><?php echo $usersName; ?></b>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?php echo ASITEURL; ?>/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="navbar-default navbar-static-side" role="navigation">
                    <div class="sidebar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="<?php echo ASITEURL."/".$link."/"; ?>dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="<?php echo ASITEURL."/".$link."/"; ?>roommates.php"><i class="fa fa-sitemap fa-fw"></i> Roommates</a>
                            </li>
                            <li>
                                <a href="<?php echo ASITEURL."/".$link."/"; ?>groups.php"><i class="fa fa-briefcase fa-fw"></i> Groups</a>
                            </li>
                            <li>
                                <a href="<?php echo ASITEURL."/".$link."/"; ?>items.php"><i class="fa fa-shopping-cart fa-fw"></i> Items</a>
                            </li>
                            <li>
                                <a href="<?php echo ASITEURL."/".$link."/"; ?>credit.php"><i class="fa fa-credit-card fa-fw"></i> Credit</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>