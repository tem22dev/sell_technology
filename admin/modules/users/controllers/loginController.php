<?php 

function construct() 
{
    load_model('index');
    load('lib', 'validation');
}

function loginAction()
{
    global $error, $email, $password;

    if (isset($_POST['btn_login'])) {
        $error = array(); // Phất cờ
        
        if (empty($_POST['email'])) {
            $error['email'] = "Vui lòng nhập email"; // hạ cờ
        } else {
            if (!is_email($_POST['email'])) {
                $error['email'] = "Độ dài từ 6 - 32 ký tự bao gồm A - Z, a - z, 0 - 9, ., @";
            } else {
                $email = $_POST['email'];
            }
        }

        if (empty($_POST['password'])) {
            $error['password'] = "Vui lòng nhập password"; // hạ cờ
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = "Password sử dụng chữ cái, chữ số, và ký tự đặc biệt, bắt đầu ký tự viết hoa và có 6 - 32 ký tự";
            } else {
                $password = md5($_POST['password']);
            }
        }

        // Kết luận
        if (empty($error)) {
            if (check_login($email, $password)) {
                // Lưu trữ phiên login
                $_SESSION['is_login'] = true;
                $_SESSION['user_login'] = $email;
                $info_user = get_user_by_email($_SESSION['user_login']);
                $_SESSION['user_id'] = $info_user['user_id'];
                
                redirect("?");
            } else {
                $error['account'] = "Tài khoản không tồn tại, vui lòng thử lại 😜";
            }
        }
    }
    load_view('login');
}

function logoutAction() {
    session_destroy();
    redirect("?mod=users&controller=login&action=login");
}

?>