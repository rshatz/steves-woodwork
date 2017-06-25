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
    //$num_rows = mysqli_num_rows($result);
    
    mysqli_close($db_link);

    return $q_result;

    // if ($num_rows > 0) {

    //     return $result;

    // } else {
    //     // Public message:
    //     echo '<p class="error">System Error</p>';
    
    //     // Debugging Message:
    //     echo '<p>' . mysqli_error($db_link) . '<br /><br />Query: ' . $sql . '</p>';
    // }
}

function get_items($status) {  

    $q_result = query("SELECT * FROM boxes WHERE availability = '$status'"); 
    
    while ($row = mysqli_fetch_array($q_result, MYSQLI_ASSOC)) {
        // heredoc identifier
        $item = <<<IDENTIFIER
            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                    <a href="#"><img src="{$row['image']}" alt="{$row['title']}"></a>
                    <div class="caption">
                        <h4><a href="#">{$row['title']}</a></h4>
                        <h4>{$row['price']}</h4>
                    </div>
                </div>
            </div>
IDENTIFIER;

        echo $item;
    }

    mysqli_free_result($q_result);

}

?>