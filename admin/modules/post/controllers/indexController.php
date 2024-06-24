<?php

function construct() {
    load_model('index');
    load('lib', 'validation');
}

function indexAction() {
    // load_view('index');
}

function addPostAction() {
    global $error, $success;
    if (isset($_POST['upload-post'])) {
        $error = array();

        if (empty($_POST['post-title'])) {
            $error['error-title'] = "Vui lòng nhập tiêu đề cho bài viết";
        } else {
            $post_title = $_POST['post-title'];
        }

        if (empty($_POST['post-desc'])) {
            $error['error-desc'] = "Vui lòng nhập mô tả ngắn cho bài viết";
        } else {
            $post_desc = $_POST['post-desc'];
        }

        if (empty($_POST['post-content'])) {
            $error['error-content'] = "Vui lòng nhập chi tiết cho bài viết";
        } else {
            $post_content = $_POST['post-content'];
        }

        $file_name = $_FILES['post-thumb']['name'];
        $upload_dir = "./public/upload/post/";
        $upload_file = $upload_dir . $file_name;
        $path_tmp = $_FILES['post-thumb']['tmp_name'];

        $type_allow = array('png', 'jpg', 'jpeg', 'gif');
        $type = pathinfo($file_name, PATHINFO_EXTENSION);

        if (empty($_FILES['post-thumb']['name'])) {
            $error['error-thumb'] = "Vui lòng chọn ảnh cho bài viết";
        } else if (!in_array(strtolower($type), $type_allow)) {
            $error['error-thumb'] = "File không đúng định dạng, đuôi file hợp lệ png, jpeg, jpg, gif";
        } else {
            # Kích thước file dưới 10MB
            $file_size = $_FILES['post-thumb']['size'];
            if ($file_size > 10000000) {
                $error['error-thumb'] = "Kích thước file quá lớn, dưới 10MB";
            }

            # Trùng tên file
            // else if (file_exists($upload_file)) {
            //     $error['error-thumb'] = "File đã tồn tại trên hệ thống";
            // }
        }

        $post_date_add = time();
        $post_date_update = time();

        if (empty($error)) {
            if (move_uploaded_file($path_tmp, $upload_file)) {
                $data = array(
                    'post_title' => $post_title,
                    'post_desc' => $post_desc,
                    'post_content' => $post_content,
                    'post_thumb' => $file_name,
                    'post_date_add' => $post_date_add,
                    'post_date_update' => $post_date_update,
                );
                $success['success'] = 'Thêm bài viết thành công';
                db_insert('tbl_post', $data);
            }
        }
    }

    load_view('addPost');
}

function listPostAction() {
    $list_post = get_list_post();
    $data['list_post'] = $list_post;
    load_view('listPost', $data);
}

function statusPostAction() {
    $id = (int) $_GET['id'];
    $post = get_post_by_id($id);

    if ((int) $post['post_status'] == 0) {
        $post['post_status'] = 1;
        $_SESSION['post_status'] = "Đăng bài viết thành công";
    } else if ((int) $post['post_status'] == 1) {
        $post['post_status'] = 0;
        $_SESSION['post_status'] = "Gỡ bài viết thành công";
    }

    $data = array(
        'post_status' => $post['post_status'],
    );

    update_post($id, $data);

    redirect("?mod=post&action=listPost");
}

function updatePostAction() {
    global $error, $success;
    $id = (int) $_GET['id'];
    
    if (isset($_POST['update-post'])) {
        $error = array();

        if (empty($_POST['post-title'])) {
            $error['error-title'] = "Vui lòng nhập tiêu đề cho bài viết";
        } else {
            $post_title = $_POST['post-title'];
        }

        if (empty($_POST['post-desc'])) {
            $error['error-desc'] = "Vui lòng nhập mô tả ngắn cho bài viết";
        } else {
            $post_desc = $_POST['post-desc'];
        }

        if (empty($_POST['post-content'])) {
            $error['error-content'] = "Vui lòng nhập chi tiết cho bài viết";
        } else {
            $post_content = $_POST['post-content'];
        }

        $file_name = $_FILES['post-thumb']['name'];
        $upload_dir = "./public/upload/post/";
        $upload_file = $upload_dir . $file_name;
        $path_tmp = $_FILES['post-thumb']['tmp_name'];

        $type_allow = array('png', 'jpg', 'jpeg', 'gif');
        $type = pathinfo($file_name, PATHINFO_EXTENSION);

        if (empty($_FILES['post-thumb']['name'])) {
            $error['error-thumb'] = "Vui lòng chọn ảnh cho bài viết";
        } else if (!in_array(strtolower($type), $type_allow)) {
            $error['error-thumb'] = "File không đúng định dạng, đuôi file hợp lệ png, jpeg, jpg, gif";
        } else {
            # Kích thước file dưới 10MB
            $file_size = $_FILES['post-thumb']['size'];
            if ($file_size > 10000000) {
                $error['error-thumb'] = "Kích thước file quá lớn, dưới 10MB";
            }

            # Trùng tên file
            // else if (file_exists($upload_file) && ) {
            //     $error['error-thumb'] = "File đã tồn tại trên hệ thống";
            // }
        }

        $post_date_update = time();

        if (empty($error)) {
            if (move_uploaded_file($path_tmp, $upload_file)) {
                $data = array(
                    'post_title' => $post_title,
                    'post_desc' => $post_desc,
                    'post_content' => $post_content,
                    'post_thumb' => $file_name,
                    'post_date_update' => $post_date_update,
                );
                $success['success'] = 'Cập nhật bài viết thành công';
                update_post($id, $data);
            }
        }
    }

    $post = get_post_by_id($id);
    $data = array(
        'post' => $post
    );
    load_view('updatePost', $data);
}

function deletePostAction() {
    $id = (int) $_GET['id'];
    db_delete("tbl_post", "`post_id` = $id");
    redirect("?mod=post&action=listPost");
}
