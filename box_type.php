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
        include_once("includes/navbar.php");
        include_once("resources/functions.php");
    
        $q_result = query("SELECT * FROM boxes WHERE type =" . $_GET['id']. "");
        //$q_result = query("SELECT * FROM boxes WHERE product_id = " . mysqli_real_escape_string(connect(), $_GET['id'] . ""));
        $item_data = mysqli_fetch_array($q_result, MYSQLI_ASSOC);
    ?>
    <div class="jumbotron">
        <div class="container">
          <?php   
          print_r(array_count_values($item_data));
          ?>
          
            <h2 class="text-center"><?php echo $item_data['title']; ?></h2>
            <p class="lead text-muted">
                <?php echo $item_data['description'];?>
            </p>
        </div>
    </div>
    <div class="container"> 
        <div class="page-header">
            <h4 class="pull-right"><?php echo $item_data['price']; ?></h4>
            <h4><?php echo $item_data['title']; ?> Box# <?php echo $item_data['box_number']; ?></h4>
        </div>
    </div>
    <!-- individual item images -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php // display item images
                
                while ($row = mysqli_fetch_array($q_result, MYSQLI_ASSOC)) {
                    
                    $directory = "img/boxes/" . $row['box_number'] . "/";
                    $images = glob($directory . "*.jpg");

                    if ($images) {
                        for ($index = 0; $index < count($images); $index += 2) {
                            if ($index == count($images) - 1) { // if there is only one image left to display
                                echo 
                                    '<div class="row">
                                        <div class="col-sm-6 col-lg-6 col-md-6">
                                            <div class="thumbnail">
                                                <img src="' .  $images[$index] . '">
                                            </div>
                                        </div>
                                    </div>';
                            } else {
                                echo 
                                    '<div class="row">
                                        <div class="col-sm-6 col-lg-6 col-md-6">
                                            <div class="thumbnail">
                                                <img src="' .  $images[$index] . '">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-6 col-md-6">
                                            <div class="thumbnail">
                                                <img src="' .  $images[$index + 1] . '">
                                            </div>
                                        </div>
                                    </div>';           
                            }                      
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
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
