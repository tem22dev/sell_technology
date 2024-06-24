<?php

function construct() {
    load_model('index');
    load('lib', 'validation');
}

function indexAction() {
    # Số lượng hoá đơn

    # Số lượng hoá đơn đã thanh toán

    # Số lượng sản phẩm
    $count_product = count_product();   
    
    # Số lượng bài viết
    $count_post = count_post();

    # Bài viết mới nhất
    $list_post = get_list_post();

    $data = array(
        'count_product' => $count_product,
        'count_post' => $count_post,
        'list_post' => $list_post,
    );
    
    load_view('index', $data);
}
