<?php 

function insert_feedback($data) {
    db_insert("tbl_feedback", $data);
}

function get_page_contacts() {
    $result = db_fetch_row("SELECT * FROM `tbl_page`");
    return $result;
}

?>