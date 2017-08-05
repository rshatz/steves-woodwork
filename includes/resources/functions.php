<?php

function connect() {
    
    global $connection;
    return $connection;
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
    } else {
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

function get_images($item_data) {

    $directory = "img/boxes/" . $item_data['box_number'] . "/";
    $images = glob($directory . "*.jpg");
                    
    if ($images) {
        return $images;   
    } else {
        echo "no images to display";
    }
}

?>