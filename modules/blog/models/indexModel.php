<?php

function get_post_by_id($id) {
    $result = db_fetch_row("SELECT * FROM `tbl_post` WHERE `post_id` = $id");
    return $result;
}

function get_list_post() {
    $result = db_fetch_array("SELECT * FROM `tbl_post` WHERE `post_status` = 1");
    return $result;
}

?>