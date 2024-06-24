<?php

function construct() {
    load_model('index');
    load('lib', 'validation');
}

function indexAction() {
    // load_view('index');
}

function aboutAction() {
    global $error, $success;
    
    if (isset($_POST['update-about'])) {
        $error = array();

        if (empty($_POST['about-title'])) {
            $error['error-title'] = "Vui lòng nhập tiêu đề cho bài giới thiệu";
        } else {
            $about_title = $_POST['about-title'];
        }

        if (empty($_POST['about-content'])) {
            $error['error-content'] = "Vui lòng nhập chi tiết cho bài giới thiệu";
        } else {
            $about_content = $_POST['about-content'];
        }

        if (empty($error)) {
            $data = array(
                'about_title' => $about_title,
                'about_content' => $about_content,
            );
            $success['success'] = 'Cập nhật bài giới thiệu thành công';
            update_about($data);
        }
    }

    $page_about = get_page_about();
    $data = array(
        'about' => $page_about
    );

    load_view('about', $data);
}

function contactAction() {
    global $error, $success;
    
    if (isset($_POST['update-contact'])) {
        $error = array();

        if (empty($_POST['contact_phone'])) {
            $error['error-phone'] = "Vui lòng nhập số điện thoại";
        } else {
            $contact_phone = $_POST['contact_phone'];
        }

        if (empty($_POST['contact_email'])) {
            $error['error-email'] = "Vui lòng nhập email";
        } else {
            $contact_email = $_POST['contact_email'];
        }

        if (empty($_POST['contact_address'])) {
            $error['error-address'] = "Vui lòng nhập địa chỉ";
        } else {
            $contact_address = $_POST['contact_address'];
        }

        if (empty($error)) {
            $data = array(
                'contact_phone' => $contact_phone,
                'contact_email' => $contact_email,
                'contact_address' => $contact_address,
            );
            $success['success'] = 'Cập nhật liên hệ thành công';
            update_about($data);
        }
    }

    $page_contac = get_page_about();

    $data = array(
        'contact' => $page_contac,
    );
    load_view('contact', $data);
}

function listFeedbackAction() {
    $list_feedback = get_list_feedback();
    $data['list_feedback'] = $list_feedback;
    load_view('listFeedback', $data);
}

function statusFeedbackAction() {
    $id = (int) $_GET['id'];
    $feedback = get_feedback_by_id($id);

    if ((int) $feedback['feedback_status'] == 0) {
        $feedback['feedback_status'] = 1;
    } else if ((int) $feedback['feedback_status'] == 1) {
        $feedback['feedback_status'] = 0;
    }

    $data = array(
        'feedback_status' => $feedback['feedback_status'],
    );

    update_feedback($id, $data);

    redirect("?mod=pages&action=listFeedback");
}

function viewFeedbackAction() {
    $id = (int) $_GET['id'];

    $feedback = get_feedback_by_id($id);
    $data = array(
        'feedback' => $feedback,
    );

    load_view('viewFeedback', $data);
}

function deleteFeedbackAction() {
    $id = (int) $_GET['id'];
    db_delete("tbl_feedback", "`feedback_id` = $id");
    redirect("?mod=pages&action=listFeedback");
}