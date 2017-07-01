<?php 
    include_once("resources/functions.php");
    $q_result = query("SELECT * FROM boxes WHERE type = 'humidor'");
    $item_data = mysqli_fetch_array($q_result, MYSQLI_ASSOC);
?>
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
                <a class="navbar-brand" href="#">Steve's Woodwork</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php" class="caret-before">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle caret-after" data-toggle="dropdown">
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" style="color:red">
                            <li><a tabindex="1" href="index.php#available">Available boxes</a></li>
                            <li><a tabindex="2" href="index.php#sold">Sold boxes</a></li>
                            <li><a tabindex="3" href="index.php#custom">Custom boxes</a></li>
                        </ul>
                    </li>
                    <li><?php echo "<a href='box_type.php?id={$item_data['type']}'>Humidor</a>" ?></li>
                    <li><a href="custom.php">Custom Shop</a></li>
                    <li><a href="engraving.php">Engraving</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>