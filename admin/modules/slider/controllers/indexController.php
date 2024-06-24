<?php

function construct() {
    load_model('index');
    load('lib', 'validation');
}

function indexAction() {
    // load_view('index');
}

function addSliderAction() {
    global $error, $success;
    if (isset($_FILES['file']['name'])) {
        $error = array();
        $file_name = $_FILES['file']['name'];
        $upload_dir = "./public/upload/slider/";
        $upload_file = $upload_dir . $file_name;
        $path_tmp = $_FILES['file']['tmp_name'];
        
        # Upload file đúng định dạng
        $type_allow = array('png', 'jpg', 'jpeg', 'gif');
        $type = pathinfo($file_name, PATHINFO_EXTENSION);
        # Kiểm tra file rổng
        if (empty($_FILES['file']['name'])) {
            $error['message-error'] = "Vui lòng chọn ảnh slider";
        }
        else if (!in_array(strtolower($type), $type_allow)) {
            $error['message-error'] = "File không đúng định dạng, đuôi file hợp lệ png, jpeg, jpg, gif";
        } else {
            # Kích thước file dưới 10MB
            $file_size = $_FILES['file']['size'];
            if ($file_size > 10000000) {
                $error['message-error'] = "Kích thước file quá lớn, dưới 10MB";
            }

            # Trùng tên file
            else if (file_exists($upload_file)) {
                $error['message-error'] = "File đã tồn tại trên hệ thống";
            }
        }

        if (empty($error)) {
            if (move_uploaded_file($path_tmp, $upload_file)) {
                $success['success'] = 'Thêm slider thành công';
                $data = array(
                    'slider_name' => $file_name,
                    'slider_heading' => $_POST['slider-name'],
                    'slider_desc' => $_POST['slider-desc'],
                    'slider_btn_text' => $_POST['slider-btn'],
                );
                db_insert('tbl_slider', $data);
            }
        }
    }

    load_view('addSlider');
}

function listSliderAction() {
    $list_slider = get_list_slider();
    $data['list_slider'] = $list_slider;
    load_view('listSlider', $data);
}

function updateSliderAction() {
    global $error, $success;
    $id = (int) $_GET['id'];
    if (isset($_FILES['file']['name'])) {

        $error = array();
        $file_name = $_FILES['file']['name'];
        $upload_dir = "./public/upload/slider/";
        $upload_file = $upload_dir . $file_name;
        $path_tmp = $_FILES['file']['tmp_name'];

        # Upload file đúng định dạng
        $type_allow = array('png', 'jpg', 'jpeg', 'gif');
        $type = pathinfo($file_name, PATHINFO_EXTENSION);

        if (empty($_FILES['file']['name'])) {
            $error['message-error'] = "Vui lòng chọn ảnh slider";
        }
        else if (!in_array(strtolower($type), $type_allow)) {
            $error['message-error'] = "File không đúng định dạng, đuôi file hợp lệ png, jpeg, jpg, gif";
        } else {
            # Kích thước file dưới 10MB
            $file_size = $_FILES['file']['size'];
            if ($file_size > 10000000) {
                $error['message-error'] = "Kích thước file quá lớn, dưới 10MB";
            }

            # Trùng tên file
            else if (file_exists($upload_file)) {
                $error['message-error'] = "File đã tồn tại trên hệ thống";
            }
        }

        if (empty($error)) {
            if (move_uploaded_file($path_tmp, $upload_file)) {
                $success['success'] = 'Cập nhật slider thành công';

                # Xoá file trên hệ thống
                $slider = get_slider_by_id($id);
                $file_name_old = $slider['slider_name'];
                unlink("./public/upload/slider/{$file_name_old}");

                $data = array(
                    'slider_name' => $file_name
                );
                update_slider($id, $data);
            }
        }
    }

    load_view('updateSlider');
}

function deleteSliderAction() {
    $id = (int) $_GET['id'];

    # Xoá file trên hệ thống
    $slider = get_slider_by_id($id);
    $file_name_old = $slider['slider_name'];
    unlink("./public/upload/slider/{$file_name_old}");

    # Xoá trên database
    db_delete('tbl_slider', "`slider_id` = $id");
    redirect("?mod=slider&action=listSlider");
}
