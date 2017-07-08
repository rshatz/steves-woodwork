<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/navbar.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" id="brand">Steve's Woodwork</a>
            </div>   
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php" class="caret-before">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle caret-after" data-toggle="dropdown">
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php#available">Available boxes</a></li>
                            <li><a href="index.php#sold">Sold boxes</a></li>
                            <li><a href="index.php#custom">Custom boxes</a></li>
                        </ul>
                    </li>
                    <li><a href="box_type.php?id='humidor'">Humidor</a></li>
                    <li><a href="box_type.php?id='jewelry'">Jewelry</a></li>
                    <li><a href="engraving.php">Engraving</a></li>
                    <li><a href="custom.php">Custom</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</body>
</html>