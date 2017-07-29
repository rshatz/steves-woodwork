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
    require_once("includes/config.php");
    include_once(TEMPLATE_FRONT . DS . "navbar.php");
    include_once("includes/resources/functions.php");
?>
    <div class="container">
        <div class="jumbotron"> 
            <h2 class="text-center">Beautiful High Quality Wooden Boxes</h2>
            <div class="panel-body lead"><p>Well built and highly crafted, somewhat traditional large custom handcrafted wooden boxes that you can place in view and proudly display for all to see. Using only the rarest wood of it's species, we achieve strength in construction, highest possible quality and beautiful wood that is unmatched. We make custom Humidors, personalized keepsake boxes, handcrafted Jewelry boxes, or any custom wooden box of your design. Each box is handmade and unique.
                    Steve's Woodwork specializes in high quality wooden boxes. All solid 3/4" thick, no laminates, and using only the finest materials with no compromises to achieve what we hope is a true old school heirloom that you and your family will enjoy for many generations. Our chosen wood is very rare and becoming more difficult to find as the supply becomes extinct, endangered or banned from import.</p>  
            </div>
        </div>
        </div>
    </div>
    <!-- Begin display of boxes -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <!-- Available section -->
                <div class="anchor" id="available"></div>
                <div class="page-header"><h2>Available Boxes</h2></div>
                <div class="row"><?php get_items("SELECT * FROM boxes WHERE availability = 'available'") ?></div>
                
                <!-- Sold section -->
                <div class="anchor" id="sold"></div>
                <div class="page-header"><h2>Sold Boxes</h2></div>
                <div class="row"><?php get_items("SELECT * FROM boxes WHERE availability = 'sold'") ?></div>
                
                <!-- Custom section -->
                <div class="anchor" id="custom"></div>
                <div class="page-header"><h2>Custom built orders</h2></div> 
                <div class="row"><?php get_items("SELECT * FROM boxes WHERE availability = 'custom'") ?></div>
            
            </div>
        </div>
    </div><!-- End display of boxes -->
    <div class="container">
        <hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Steve's Woodwork 2016</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
