<?php 

function get_list_product_highlight() {
    $result = db_fetch_array("SELECT * FROM `tbl_products` WHERE `product_status` = 1 order by `product_buy` DESC");
    return $result;
}

function get_product_by_id($id) {
    $result = db_fetch_row("SELECT * FROM `tbl_products` WHERE `product_id` = $id");
    return $result;
}

function get_number_product() {
    $result = db_num_rows("SELECT * FROM `tbl_products` WHERE `product_status` = 1");
    return $result;
}

function get_list_product_max_to_min() {
    $result = db_fetch_array("SELECT * FROM `tbl_products` WHERE `product_status` = 1 order by `product_price_new` DESC");
    return $result;
}

function get_list_product_min_to_max() {
    $result = db_fetch_array("SELECT * FROM `tbl_products` WHERE `product_status` = 1 order by `product_price_new`");
    return $result;
}

function get_list_product() {
    $result = db_fetch_array("SELECT * FROM `tbl_products` WHERE `product_status` = 1");
    return $result;
}


?>