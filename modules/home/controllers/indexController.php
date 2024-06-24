<?php 

function construct() {
    load_model('index');
}

function indexAction() {
    $list_slider = get_list_slider();

    $list_product = get_list_product();
    // show_array($list_product);
    $data = array(
        'list_slider' => $list_slider,
        'list_product' => $list_product
    );

    load_view("index", $data);
}

?>