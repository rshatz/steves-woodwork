<?php

function connect() {
    
    require_once("mysqli_connect.php");

    $db_link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
        OR die('could not connect to MySQL: ' . mysqli_connect_error());
    mysqli_set_charset($db_link, 'utf8');

    return $db_link;
}

function query($sql) {
    
    $db_link = connect();
    $q_result = @mysqli_query($db_link, $sql);
    $num_rows = mysqli_num_rows($q_result);

    if ($num_rows == 0) {
        // Public message:
        echo '<br /><br /><br /><p class="error" style> { System Error: number of rows returned = 0 }</p>';
        // Debugging Message:
        echo '<p>{ From query($sql) function: ' . mysqli_error($db_link) . '<br />Query: ' . $sql . ' }</p>';
        mysqli_close($db_link);
    } else {
        mysqli_close($db_link);
        return $q_result;
    }
}

function get_items($sql) { 

    $q_result = query($sql); 
    
    while ($row = mysqli_fetch_array($q_result, MYSQLI_ASSOC)) {

        $directory = "img/boxes/" . $row['box_number'] . "/";
        $box_photo = glob($directory . "*.jpg");
        // try and use readdir instead of glob -- $box_photo = readdir($directory);
        
        echo "<div class='col-sm-4 col-lg-4 col-md-4'>
                <div class='thumbnail'>
                    <a href='item.php?id={$row['product_id']}'><img src={$box_photo[0]} alt={$row['title']}></a>
                    <div class='caption'>
                        <h4><a href='item.php?id={$row['product_id']}'>{$row['title']}</a></h4>";        
                        // if item is available display price. Else display "SOLD"
                        if ($row['availability'] == 'available') {
                            echo '<h4><span style="color:gold;">$</span>' . $row['price'] . '</h4>';
                        } else {
                            echo '<h4 style="color:red">SOLD</h4>';
                        }       
        echo        "</div>
                </div>
            </div>";
    }

    mysqli_free_result($q_result);
}

function get_all($item_data) {

    $directory = "img/boxes/" . $item_data['box_number'] . "/";
    $images = glob($directory . "*.jpg");
                    
    if ($images) {
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
    }
}

?>