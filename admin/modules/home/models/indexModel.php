<?php

function get_list_post() {
    $result = db_fetch_array("SELECT * FROM tbl_post ORDER BY `post_date_update` DESC");
    return $result;
}

function count_post() {
    $result = db_num_rows("SELECT * FROM `tbl_post`");
    return $result;
}

function count_product() {
    $result = db_num_rows("SELECT * FROM `tbl_products`");
    return $result;
}

function insert_user($data) {
    db_insert('tbl_users', $data);
}

function update_pass($username, $data) {
    db_update('tbl_users', $data, "`username` = '{$username}'");
}

function check_pass_old($pass_old) {
    $info_user = get_user_by_username($_SESSION['username']);
    if ($pass_old === $info_user['password'])
        return true;
    return false;
}

function check_pass_new($pass_new, $confirm_pass) {
    if ($pass_new === $confirm_pass)
        return true;
    return false;
}

function update_user_login($username, $data) {
    db_update('tbl_users', $data, "`username` = '{$username}'");
}

function get_list_users() {
    $result = db_fetch_array("SELECT * FROM `tbl_users`");
    return $result;
}

function get_user_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `user_id` = {$id}");
    return $item;
}

function get_user_by_email($email) {
    $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `email` = '{$email}'");
    return $item;
}

function get_user_by_username($username) {
    $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `username` = '{$username}'");
    return $item;
}

function check_login($email, $password) {
    $sql = "SELECT * FROM `tbl_users` WHERE `email` = '{$email}' AND `password` = '{$password}'";
    if (db_num_rows($sql) > 0) {
        return true;
    }
    return false;
}
