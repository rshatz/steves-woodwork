<?php

function connect() {
    
    require_once("mysqli_connect.php");

    $db_link = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
        OR die('could not connect to MySQL: ' . mysqli_connect_error());

    return $db_link;
}

function query($sql) {
    
    $db_link = connect();
    $q_result = @mysqli_query($db_link, $sql);
    $num_rows = mysqli_num_rows($q_result);

    if ($num_rows == 0) {

        // Public message:
        echo '<p class="error">System Error</p>';
    
        // Debugging Message:
        echo '<p>' . mysqli_error($db_link) . '<br /><br />Query: ' . $sql . '</p>';
    } else {
        mysqli_close($db_link);
        return $q_result;
    }
}

function get_items($status) { // parameter $status holds box availability status. some boxes are not available because they are sold 

    $q_result = query("SELECT * FROM boxes WHERE availability = '$status'"); // determine which boxes to display based on availability
    
    while ($row = mysqli_fetch_array($q_result, MYSQLI_ASSOC)) {

        echo "<div class='col-sm-4 col-lg-4 col-md-4'>
                <div class='thumbnail'>
                    <a href='item.php?id={$row['product_id']}'><img src={$row['image']} alt={$row['title']}></a>
                    <div class='caption'>
                        <h4><a href='item.php?id={$row['product_id']}'>{$row['title']}</a></h4>";        
                        // if item is available display price. Else display "SOLD"
                        if ($row['availability'] == 'available') {
                            echo '<h4 style="color:white">$' . $row['price'] . '</h4>';
                        } else {
                            echo '<h4 style="color:red">SOLD</h4>';
                        }       
        echo        "</div>
                </div>
            </div>";
    }

    mysqli_free_result($q_result);
}

?>