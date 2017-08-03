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
        
        $q_result = query("SELECT * FROM boxes WHERE product_id = " . mysqli_real_escape_string(connect(), $_GET['id']));
        $item_data = mysqli_fetch_array($q_result, MYSQLI_ASSOC);
    ?>
    <div class="jumbotron">
        <div class="container">
            <h2 class="text-center"><?php echo $item_data['title']; ?></h2>
                <p class="lead text-muted"><?php echo $item_data['description']; ?></p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2"> 
            <?php 
                if($item_data['youtube']) {
                    echo "<div class='embed-responsive embed-responsive-16by9'>
                            <iframe width='560' height='315' src={$item_data['youtube']} frameborder='0' allowfullscreen></iframe>
                        </div>";
                }
            ?>
            </div>
        </div>
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6 col-lg-6 col-md-6">
                    <h2><?php echo $item_data['title']; ?> Box: <?php echo $item_data['box_number']; ?></h2>
                </div>
                <div class="col-sm-6 col-lg-6 col-md-6">
                    <h2 class="pull-right"><span  style="color:gold;">$</span><?php echo $item_data['price']; ?></h2>
                </div>
            </div>
        </div>
    </div>
    <!-- individual item images -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                 <?php 
                    $images = get_images($item_data); 
                    for ($index = 0; $index < count($images); $index += 2) {
                        if ($index == count($images) - 1) { // if there is only one image left to display
                            echo 
                                '<div class="row">
                                    <div class="col-sm-6 col-lg-6 col-md-6">
                                        <div class="thumbnail">
                                            <img src="' . $images[$index] . '">
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
