<?php

function connect() {
    
    require("mysqli_connect.php");

    $db_link = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
        OR die('could not connect to MySQL: ' . mysqli_connect_error());
    return $db_link;
}

function query($sql) {
    
    $db_link = connect();
    $result = @mysqli_query($db_link, $sql);
    $num_rows = mysqli_num_rows($result);

    return $result;

    // if ($num_rows > 0) {

    //     return $result;

    // } else {
    //     // Public message:
    //     echo '<p class="error">System Error</p>';
    
    //     // Debugging Message:
    //     echo '<p>' . mysqli_error($db_link) . '<br /><br />Query: ' . $sql . '</p>';
    // }
}

// function get_products() {
    
//     $query = query("SELECT * FROM boxes");

    //while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
//        echo '<img src=' . $row['image'] . '>';
//        $box = <<<EOT
        
//         <div class="row">
//             <div class="col-sm-4 col-lg-4 col-md-4">
//                 <div class="thumbnail">
//                     <a href="#"><img src={$row['image']}></a>
//                     <div class="caption">
//                         <h4><a href="#">Spalted Maple with Cocobolo trim</a></h4>
//                         <h4>$600.00</h4>
//                     </div>
//                 </div>
//             </div>
//         </div>
// EOT;
    
    //    echo '<div class="row">
    //             <div class="col-sm-4 col-lg-4 col-md-4">
    //                 <div class="thumbnail">
    //                 <a href="#"><img src=' . $row['image'] . '></a>
    //                     <div class="caption">
    //                         <h4><a href="#">' . $row['title'] . '</a></h4>
    //                         <h4>' . $row['price'] '</h4>
    //                     </div>
    //                 </div>
    //             </div>
    //         </div>'
    


?>