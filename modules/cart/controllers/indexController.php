<?php 

function construct() {
    load_model('index');
    // load("lib", "cart");
}

function indexAction() {
    if (isset($_POST['btn_update_cart'])) {
        update_cart($_POST['qty']);
    }

    $list_buy = get_list_buy_cart();

    $data = array(
        'list_buy' => $list_buy,
    );
    // show_array($list_buy);
    load_view("index", $data);
}

function deleteAction() {
    $id = (int) $_GET['id'];

    delete_cart($id);

    redirect("?mod=cart");
}


?>