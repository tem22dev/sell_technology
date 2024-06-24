<?php 

function get_list_product() {
    $result = db_fetch_array("SELECT * FROM `tbl_products` WHERE `product_status` = 1 order by `product_buy` DESC");
    return $result;
}

function get_list_slider() {
    $result = db_fetch_array("SELECT * FROM `tbl_slider`");
    return $result;
}

?>