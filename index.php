<?php
require_once 'constants.php';
require_once 'functions.php';

require_once SMARTY_PATH.'/Smarty.class.php';

$json_result = json_decode(call_api('GET', DATA_URL), true);
$data_parent = $json_result['data']['children'];

$image_found = false;

do {
    $random_index = rand(0, 99);
    $post_title = $data_parent[$random_index]['data']['title'];
    $post_url = $data_parent[$random_index]['data']['url'];

    // Check if the retrieved post is an image
    if(check_if_image($post_url)){
        // Set image found to true and break out of the loop
        $image_found = true;
    }
} while($image_found == false);

$smarty = new Smarty();

// Assign title and image to the view
$smarty->assign('post_title', $post_title);
$smarty->assign('post_url', $post_url);


$smarty->display(TEMPLATES_PATH.'/index.tpl');

function get_post_url($index){
    
}

?>