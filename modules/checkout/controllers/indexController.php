<?php 

function construct() {
    load_model('index');
    
}

function indexAction() {
    $list_buy = get_list_buy_cart();

    $data = array(
        'list_buy' => $list_buy,
    );

    load_view("index", $data);
}

function detailProductAction() {
    load_view("detailProduct");
}

?>