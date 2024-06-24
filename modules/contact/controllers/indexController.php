<?php 

function construct() {
    load_model('index');
}

function indexAction() {
    global $error, $email, $fullname, $success;
    if (isset($_POST['btn-add'])) {
        $error = array(); // Phất cờ

        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Vui lòng nhập họ tên"; // hạ cờ
        } else {
            $fullname = $_POST['fullname'];
        }

        if (empty($_POST['email'])) {
            $error['email'] = "Vui lòng nhập email"; // hạ cờ
        } else {
            $email = $_POST['email'];
        }

        if (empty($_POST['subject'])) {
            $error['subject'] = "Vui lòng nhập tiêu đề"; // hạ cờ
        } else {
            $subject = $_POST['subject'];
        }

        if (empty($_POST['message'])) {
            $error['message'] = "Vui lòng nhập nội dung phản hồi"; // hạ cờ
        } else {
            $message = $_POST['message'];
        }
        
        // Kết luận
        if (empty($error)) {
            $data = array(
                'feedback_fullname' => $fullname,
                'feedback_email' => $email,
                'feedback_title' => $subject,
                'feedback_content' => $message,
            ); 
            $success['success'] = 'Phản hồi thành công';
            insert_feedback($data);
            
        } else {
            $error['message'] = "Phản hồi thất bại. Vui lòng điền đủ thông tin.";
        }
    }

    $info_contact = get_page_contacts();

    $data = array(
        'info_contact' => $info_contact,
    );
    load_view("index", $data);
}


?>