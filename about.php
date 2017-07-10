<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="css/site.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php
    include_once("includes/navbar.php");
    include_once("resources/functions.php");
?>

<div class="container">
    <div class="jumbotron"> 
        <h2 class="text-center">Steves Woodwork</h2>
        <div class="panel-body lead"><p>All solid 3/4" thick, no laminates, and using only the finest materials with no compromises to achieve what we hope is a true old school heirloom that you and your family will enjoy for many generations. Our chosen wood is very rare and becoming more difficult to find as the supply becomes extinct, endangered or banned from import.</p>  
        </div>
    </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <h1>Humidors</h1>
            <p>we have humidors. check them out.</p>
            <p><a class="btn btn-default" href="box_type.php?id='humidor'" role="button">View details</a></p>
        </div>
        <!-- .col -->
        <div class="col-lg-4">
            <h1>Jewelry Boxes</h1>
            <p>We have jewelry boxes. check them out.</p>
            <p><a class="btn btn-default" href="box_type.php?id='jewelry'" role="button">View details</a></p>
        </div>
        <!-- .col -->
        <div class="col-lg-4">
            <h1>Custom Engraving</h1>
            <p>We offer custom engraving. check it out.</p>
            <p><a class="btn btn-default" href="engraving.php" role="button">View details</a></p>
        </div>
    </div>
</div>

</head>
</body>