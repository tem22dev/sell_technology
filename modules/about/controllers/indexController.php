<?php 

function construct() {
    load_model('index');
}

function indexAction() {
    $about = get_about();

    $data = array(
        'about' => $about,
    );

    load_view("index", $data);
}

?>