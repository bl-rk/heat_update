<?php 

function get_item_html($id,$item) {
    $output = "<section><a href='serv_details.php?id="
        . $id . "'><img src='" 
        . $item["img"] . "' alt='" 
        . $item["title"] . "' />" 
        . "<p>View Details</p>"
        . "</section>";
    return $output;

}



