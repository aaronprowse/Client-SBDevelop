<?php
global $page_title, $page_link;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>S & B Developments Kent - <?php echo $page_title; ?></title>

    <link rel="icon" href="/images/favicon.ico">

    <!-- Stylesheets -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/slick.css" rel="stylesheet">
    <link href="/css/slick-theme.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<body>

<div class="container-fluid">

    <div class="nav-wrapper">
        <nav class="navbar navbar-custom">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars rotate-bars"></i> <span class="text-uppercase">Menu</span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="/images/S&B-Developments-Logo.png"
                                                                  class="img-responsive logo center-block"
                                                                  alt="S&B Developments - Logo"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li<?php if ($page_link == "index.php") echo " class=\"active\""; ?>><a href="/">Home
                                <span
                                    class="sr-only">(current)</span></a></li>
<!--                        <li-->
<!--                            --><?php //if ($page_link == "portfolio") echo " class=\"active\""; ?>
<!--                        ><a-->
<!--                                href="/portfolio/">portfolio</a>-->
<!--                        </li>-->
                        <li<?php if ($page_link == "services") echo " class=\"active\""; ?>><a href="/services/">Services</a>
                        </li>
                        <li<?php if ($page_link == "coverage") echo " class=\"active\""; ?>><a
                                href="/coverage/">coverage</a></li>
                        <li<?php if ($page_link == "contact-us") echo " class=\"active\""; ?>><a
                                href="/contact-us/">Contact Us</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="navigation-locations-wrapper pull-right">
            <div class="navigation-triangle hidden-xs"></div>
            <div id="navigation-carousel" class="carousel slide" data-ride="carousel" data-interval="2000">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item navigation-locations active">
                        Maidstone: 01622 682 555
                    </div>
                    <div class="item navigation-locations">
                        Medway: 01634 844 600
                    </div>
                    <div class="item navigation-locations">
                        Sittingbourne: 01795 430 111
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

