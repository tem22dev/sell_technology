<?php

function construct() {
    load_model('index');
    load('lib', 'validation');
}


function indexAction() {
    $list_subs = get_list_subs();
    // show_array($list_subs);
    $data['list_subs'] = $list_subs;
    load_view('listSubs', $data);
}

function deleteSubsAction() {
    $id = (int) $_GET['id'];
    db_delete("tbl_subscriber", "`subs_id` = $id");
    redirect("?mod=subscriber");
}
