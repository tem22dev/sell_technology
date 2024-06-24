<?php

function check_username_exists($username) {
    $info_list_user = get_list_users();
    foreach ($info_list_user as $user) {
        if ($user['username'] === $username) {
            return true;
        }
    }
    return false;
}

function check_email_exists($email) {
    $info_list_user = get_list_users();
    foreach ($info_list_user as $user) {
        if ($user['email'] === $email) {
            return true;
        }
    }
    return false;
}

function check_email($email, $id) {
    $info_list_user = get_list_users();
    foreach ($info_list_user as $user) {
        if ($user['email'] === $email && $user['user_id'] !== $id) {
            return true;
        }
    }
    return false;
}

function check_username($username, $id) {
    $info_list_user = get_list_users();
    foreach ($info_list_user as $user) {
        if ($user['username'] === $username && $user['user_id'] !== $id) {
            return true;
        }
    }
    return false;
}

function insert_user($data) {
    db_insert('tbl_users', $data);
}

function update_pass($id, $data) {
    db_update('tbl_users', $data, "`user_id` = $id");
}

function check_pass_old($pass_old) {
    $info_user = get_user_by_id($_SESSION['user_id']);
    if ($pass_old === $info_user['password'])
        return true;
    return false;
}

function check_pass_new($pass_new, $confirm_pass) {
    if ($pass_new === $confirm_pass)
        return true;
    return false;
}

function update_user_login($id, $data) {
    db_update('tbl_users', $data, "`user_id` = $id");
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
