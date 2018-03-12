<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Analytics
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title><?php if($pageTitle) echo $pageTitle . ' | '; ?>Sriranga Digital</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Javascript calls
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML'></script>

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/viewer.css?v=1.0">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/navbar.css?v=1.0">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/page.css?v=1.1">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/utility.css?v=1.2">

    <!-- Fonts
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Raleway:200,300,400|Roboto:300,400&amp;subset=latin-ext" rel="stylesheet">

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="<?=PUBLIC_URL?>images/favicon.ico">
</head>
<body>

    <!-- Navigation
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <nav id="mainNavBar" class="navbar navbar-light navbar-expand-lg">
        <div class="container-fluid">
            <p class="navbar-text" id="navbarText">sriranga<span class="red">.</span>digital</p>
            <div class="collapse navbar-collapse">
                <a href="#" class="nav-toggle"><span></span><span></span><span></span></a>
            </div>
        </div>
        <div class="container-fluid clear-paddings" id="navbarNav">
            <div class="row align-items-start justify-content-center" style="width: 100%">
                <div class="col-8">
                    <ul class="list-unstyled">
                        <li><a href="<?=BASE_URL?>Research">Research</a></li>
                        <li><a href="<?=BASE_URL?>Projects">Projects</a></li>
                        <li><a href="<?=BASE_URL?>Services">Services</a></li>
                        <li><a href="<?=BASE_URL?>Open_Source">Open Source</a></li>
                        <li><a href="<?=BASE_URL?>Contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- End Navigation
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
