<?php

function construct()
{
    load_model('index');
    load('lib', 'validation');
}

function indexAction()
{
    $info_user = get_user_by_id($_SESSION['user_id']);
    $data['info_user'] = $info_user;
    load_view('index', $data);
}

function updateAction()
{
    $id = (int) $_GET['id'];
    global $error, $email, $info_user, $username, $success;
    if (isset($_POST['btn-update'])) {
        
        $info_user = get_user_by_id($id);
        $error = array(); // Phất cờ
        
        if (empty($_POST['email'])) {
            $error['email'] = "Vui lòng nhập email"; // hạ cờ
        } else {
            if (!is_email($_POST['email'])) {
                $error['email'] = "Độ dài từ 6 - 32 ký tự bao gồm A - Z, a - z, 0 - 9, ., @";
            } else if (check_email($_POST['email'], $info_user['user_id'])) {
                $error['email'] = "Email này đã tồn tại trên hệ thống, vui lòng chọn email khác";
            } else {
                $email = $_POST['email'];
            }
        }


        if (empty($_POST['username'])) {
            $error['username'] = "Vui lòng nhập username"; // hạ cờ
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "Độ dài từ 6 - 32 ký tự bao gồm A - Z, a - z, 0 - 9, ., @";
            } else if (check_username($_POST['username'], $info_user['user_id'])) {
                $error['username'] = "Username đã tồn tại trên hệ thống, vui lòng nhập username khác";
            } else {
                $username = $_POST['username'];
            }
        }

        // Kết luận
        if (empty($error)) {
            $fullname = $_POST['fullname'];
            $phone_number = $_POST['phone_number'];
            $address = $_POST['address'];

            $data = array(
                'fullname' => $fullname,
                'username' => $username,
                'email' => $email,
                'phone_number' => $phone_number,
                'address' => $address,
            );
            $success['success'] = 'Cập nhật thành công';
            update_user_login($info_user['user_id'], $data);
        }
    }

    $info_user = get_user_by_id($id);
    $data['info_user'] = $info_user;
    load_view('update', $data);
}

function newPassAction()
{
    global $error, $success;
    if (isset($_POST['btn_update_pass'])) {
        $error = array(); // Phất cờ

        if (empty($_POST['pass-old'])) {
            $error['pass-old'] = "Vui lòng nhập mật khẩu củ"; // hạ cờ
        } else {
            if (!is_password($_POST['pass-old'])) {
                $error['pass-old'] = "Password sử dụng chữ cái, chữ số, và ký tự đặc biệt, bắt đầu ký tự viết hoa và có 6 - 32 ký tự";
            } else {
                $pass_old = md5($_POST['pass-old']);
            }
        }

        if (empty($_POST['pass-new'])) {
            $error['pass-new'] = "Vui lòng nhập mật khẩu mới"; // hạ cờ
        } else {
            if (!is_password($_POST['pass-new'])) {
                $error['pass-new'] = "Password sử dụng chữ cái, chữ số, và ký tự đặc biệt, bắt đầu ký tự viết hoa và có 6 - 32 ký tự";
            } else {
                $pass_new = md5($_POST['pass-new']);
            }
        }


        if (empty($_POST['confirm-pass'])) {
            $error['confirm-pass'] = "Vui lòng nhập lại mật khẩu để xác nhận"; // hạ cờ
        } else {
            $confirm_pass = md5($_POST['confirm-pass']);
        }

        // Kết luận
        if (empty($error)) {
            if (check_pass_old($pass_old)) {
                if (check_pass_new($pass_new, $confirm_pass)) {
                    $id = $_SESSION['user_id'];
                    $data = array(
                        'password' => $pass_new
                    );
                    $success['success'] = 'Cập nhật mật khẩu thành công';
                    update_pass($id, $data);
                } else {
                    $error['error_pass'] = "Mật khẩu mới không khớp";
                }
            } else {
                $error['error_pass'] = "Mật khẩu củ không khớp";
            }
        }
    }
    
    load_view('newPass');
}

function addUsersAction()
{
    global $error, $email, $username, $password, $fullname, $phone_number, $address, $success;
    if (isset($_POST['btn-add'])) {
        $error = array(); // Phất cờ

        if (empty($_POST['username'])) {
            $error['username'] = "Vui lòng nhập tên người dùng"; // hạ cờ
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "Độ dài từ 6 - 32 ký tự bao gồm A - Z, a - z, 0 - 9, _, .";
            } else if (check_username_exists($_POST['username'])) {
                $error['username'] = "Username đã tồn tại trên hệ thống, vui lòng chọn username khác";
            } else {
                $username = $_POST['username'];
            }
        }

        if (empty($_POST['email'])) {
            $error['email'] = "Vui lòng nhập email"; // hạ cờ
        } else {
            if (!is_email($_POST['email'])) {
                $error['email'] = "Độ dài từ 6 - 32 ký tự bao gồm A - Z, a - z, 0 - 9, ., @";
            } else if (check_email_exists($_POST['email'])) {
                $error['email'] = "Email đã tồn tại trên hệ thống, vui lòng chọn email khác";
            } else {
                $email = $_POST['email'];
            }
        }

        if (empty($_POST['password'])) {
            $error['password'] = "Vui lòng nhập mật khẩu"; // hạ cờ
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = "Độ dài từ 6 - 32 ký tự, bắt đầu ký tự viết hoa, bao gồm A - Z, a - z, 0 - 9, ký tự đặc biệt";
            } else {
                $password = md5($_POST['password']);
            }
        }

        if (empty($_POST['repassword'])) {
            $error['repassword'] = "Vui lòng nhập lại mật khẩu"; // hạ cờ
        } else {
            $repassword = md5($_POST['repassword']);
        }
        
        // Kết luận
        $fullname = $_POST['fullname'];
        $phone_number = $_POST['phone_number'];
        $address = $_POST['address'];
        if (empty($error)) {
            if (check_pass_new($password, $repassword)) {
                $data = array(
                    'fullname' => $fullname,
                    'username' => $username,
                    'password' => $password,
                    'email' => $email,
                    'phone_number' => $phone_number,
                    'address' => $address,
                );
                $success['success'] = 'Thêm tài khoản thành công';
                insert_user($data);
            } else {
                $error['error_pass'] = "Mật khẩu không khớp, vui lòng nhập lại";
            }
        }
    }

    load_view('addUsers');
}

function listUsersAction()
{
    $list_user = get_list_users();
    $data['list_user'] = $list_user;
    load_view('listUsers', $data);
}

function deleteAction() {
    $id = $_GET['id'];
    db_delete('tbl_users', "`user_id` = {$id}");
    redirect("?mod=users&action=listUsers");
}
