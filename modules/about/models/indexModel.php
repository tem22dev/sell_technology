<?php

function get_about() {
    $result = db_fetch_row("SELECT * FROM `tbl_page`");
    return $result;
}

?>