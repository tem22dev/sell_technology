<?php 

function construct() {
    load_model('index');
}

function indexAction() {
    $list_post = get_list_post();

    $data = array(
        'list_post' => $list_post,
    );
    load_view("index", $data);
}

function detailBlogAction() {
    $id = (int) $_GET['id'];
    $post = get_post_by_id($id);

    $data = array(
        'post' => $post,
    );
    load_view("detailBlog", $data);
}

?>