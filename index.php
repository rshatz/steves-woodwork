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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php
    include("includes/navbar.php");
    include("resources/functions.php");
?>

    <div class="jumbotron">
        <div class="container">
            <h2 class="text-center">Beautiful High Quality Wooden Boxes - Steve's Woodwork</h2>
            <p class="lead text-muted">
                Well built and highly crafted, somewhat traditional large custom handcrafted wooden boxes that you can place in view and proudly display for all to see. Using only the rarest wood of it's species, we achieve strength in construction, highest possible quality and beautiful wood that is unmatched. We make custom Humidors, personalized keepsake boxes, handcrafted Jewelry boxes, or any custom wooden box of your design. Each box is handmade and unique.
                Steve's Woodwork specializes in high quality wooden boxes. All solid 3/4" thick, no laminates, and using only the finest materials with no compromises to achieve what we hope is a true old school heirloom that you and your family will enjoy for many generations. Our chosen wood is very rare and becoming more difficult to find as the supply becomes extinct, endangered or banned from import.
            </p>
        </div>
    </div>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Available boxes -->
                <div class="page-header">
                    <h2 id="available">Available Boxes: <small>click photo to see more</small></h2>
                    <small id="header-contact">Add personal engraving to any box by calling or messaging me.</small>
                </div>
                <!-- first row -->
                <div class="row">
                    <?php 
                        $query = query("SELECT * FROM boxes");
                        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)): ?>
                            
                                <div class="col-sm-4 col-lg-4 col-md-4">
                                    <div class="thumbnail">
                                        <a href="#"><img src=<?php echo $row['image'] ?> ></a>
                                        <div class="caption">
                                            <h4><a href="#"><?php echo $row['title'] ?></a></h4>
                                            <h4><?php echo $row['price'] ?></h4>
                                        </div>
                                    </div>
                                </div> 
                            
                    <?php endwhile; ?>
                </div>
                <!-- custom boxes -->
                <div class="page-header">
                    <h2 id="custom">Custom built orders: <small>click photo to see more</small></h2>
                </div>
                <!-- fifth row -->
                <div class="row">
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="#"><img src="img/custom-1.jpg" alt="Figured Western Black Walnut"></a>
                            <div class="caption">
                                <h4><a href="#">Figured Western Black Walnut</a></h4>
                                <h4 style="color:red;">Sold</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="#"><img src="img/custom-2.jpg" alt="Cocobolo"></a>
                            <div class="caption">
                                <h4><a href="#">Cocobolo</a></h4>
                                <h4 style="color:red;">Sold</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="#"><img src="img/custom-3.jpg" alt="Figured black Walnut with Ebony trim"></a>
                            <div class="caption">
                                <h4><a href="#">Figured black Walnut with Ebony trim</a></h4>
                                <h4 style="color:red;">Sold</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
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
    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
