<?php 

function construct() {
    load_model('index');
}

function indexAction() {
    $list_product = get_list_product();

    if (isset($_POST['btn-order'])) {
        if ($_POST['order_price'] == 0) {
            $list_product = get_list_product();
        }

        if ($_POST['order_price'] == 1) {
            $list_product = get_list_product_min_to_max();
        }

        if ($_POST['order_price'] == 2) {
            $list_product = get_list_product_max_to_min();
        }
    }
    
    $data = array(
        "list_product" => $list_product,
    );
    load_view("index", $data);
}

function detailProductAction() {
    $id = (int) $_GET['id'];

    $product = get_product_by_id($id);
    $list_product = get_list_product_highlight();
    $data = array(
        'product' => $product,
        'list_product' => $list_product
    );

    load_view("detailProduct", $data);
}

function addProductCartAction() {
    $id = (int) $_GET['id'];

    add_cart($id);
    
    redirect("?mod=cart");
}

?>