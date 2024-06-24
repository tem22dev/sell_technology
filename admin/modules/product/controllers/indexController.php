<?php

function construct() {
    load_model('index');
    load('lib', 'validation');
}

function indexAction() {
    // load_view('index');
}

function addProductAction() {
    global $error, $success;

    if (isset($_POST['add-product'])) {
        $error = array();

        if (empty($_POST['product-name'])) {
            $error['error-name'] = "Vui lòng nhập tên sản phẩm";
        } else {
            $product_name = $_POST['product-name'];
        }

        if (empty($_POST['product-price-old'])) {
            $error['error-price-old'] = "Vui lòng nhập giá củ cho sản phẩm";
        } else {
            $product_price_old = $_POST['product-price-old'];
        }

        if (empty($_POST['product-price-new'])) {
            $error['error-price-new'] = "Vui lòng nhập giá mới cho sản phẩm";
        } else {
            $product_price_new = $_POST['product-price-new'];
        }

        if (empty($_POST['product-config'])) {
            $error['error-config'] = "Vui lòng nhập cấu hình cho sản phẩm";
        } else {
            $product_config = $_POST['product-config'];
        }

        if (empty($_POST['product-content'])) {
            $error['error-content'] = "Vui lòng nhập chi tiết sản phẩm";
        } else {
            $product_content = $_POST['product-content'];
        }

        if (empty($_POST['product-quantity'])) {
            $error['error-quantity'] = "Vui lòng nhập số lượng sản phẩm";
        } else {
            $product_quantity = $_POST['product-quantity'];
        }

        $file_name = $_FILES['product-thumb']['name'];
        $upload_dir = "./public/upload/product/";
        $upload_file = $upload_dir . $file_name;
        $path_tmp = $_FILES['product-thumb']['tmp_name'];

        $type_allow = array('png', 'jpg', 'jpeg', 'gif');
        $type = pathinfo($file_name, PATHINFO_EXTENSION);

        if (empty($_FILES['product-thumb']['name'])) {
            $error['error-thumb'] = "Vui lòng chọn ảnh cho sản phẩm";
        } else if (!in_array(strtolower($type), $type_allow)) {
            $error['error-thumb'] = "File không đúng định dạng, đuôi file hợp lệ png, jpeg, jpg, gif";
        } else {
            # Kích thước file dưới 10MB
            $file_size = $_FILES['product-thumb']['size'];
            if ($file_size > 10000000) {
                $error['error-thumb'] = "Kích thước file quá lớn, dưới 10MB";
            }

            # Trùng tên file
            // else if (file_exists($upload_file)) {
            //     $error['error-thumb'] = "File đã tồn tại trên hệ thống";
            // }
        }

        if (empty($error)) {
            if (move_uploaded_file($path_tmp, $upload_file)) {
                $data = array(
                    'product_name' => $product_name,
                    'product_price_old' => $product_price_old,
                    'product_price_new' => $product_price_new,
                    'product_config' => $product_config,
                    'product_content' => $product_content,
                    'product_quantity' => $product_quantity,
                    'product_thumb' => $file_name
                );
                $success['success'] = 'Thêm sản phẩm thành công';
                db_insert('tbl_products', $data);
            }
        }
    }

    load_view('addProduct');
}

function listProductAction() {
    $list_product = get_list_product();
    $data['list_product'] = $list_product;
    load_view('listProduct', $data);
}

function statusProductAction() {
    $id = (int) $_GET['id'];
    $product = get_product_by_id($id);

    if ((int) $product['product_status'] == 0) {
        $product['product_status'] = 1;
        $_SESSION['product_status'] = "Đăng sản phẩm thành công";
    } else if ((int) $product['product_status'] == 1) {
        $product['product_status'] = 0;
        $_SESSION['product_status'] = "Gỡ sản phẩm thành công";
    }

    $data = array(
        'product_status' => $product['product_status'],
    );

    update_product($id, $data);

    redirect("?mod=product&action=listProduct");
}

function updateProductAction() {
    $id = (int) $_GET['id'];
    global $error, $success;

    if (isset($_POST['update-product'])) {
        $error = array();

        if (empty($_POST['product-name'])) {
            $error['error-name'] = "Vui lòng nhập tên sản phẩm";
        } else {
            $product_name = $_POST['product-name'];
        }

        if (empty($_POST['product-price-old'])) {
            $error['error-price-old'] = "Vui lòng nhập giá củ cho sản phẩm";
        } else {
            $product_price_old = $_POST['product-price-old'];
        }

        if (empty($_POST['product-price-new'])) {
            $error['error-price-new'] = "Vui lòng nhập giá mới cho sản phẩm";
        } else {
            $product_price_new = $_POST['product-price-new'];
        }

        if (empty($_POST['product-config'])) {
            $error['error-config'] = "Vui lòng nhập cấu hình cho sản phẩm";
        } else {
            $product_config = $_POST['product-config'];
        }

        if (empty($_POST['product-content'])) {
            $error['error-content'] = "Vui lòng nhập chi tiết sản phẩm";
        } else {
            $product_content = $_POST['product-content'];
        }

        if (empty($_POST['product-quantity'])) {
            $error['error-quantity'] = "Vui lòng nhập số lượng sản phẩm";
        } else {
            $product_quantity = $_POST['product-quantity'];
        }

        $file_name = $_FILES['product-thumb']['name'];
        $upload_dir = "./public/upload/product/";
        $upload_file = $upload_dir . $file_name;
        $path_tmp = $_FILES['product-thumb']['tmp_name'];

        $type_allow = array('png', 'jpg', 'jpeg', 'gif');
        $type = pathinfo($file_name, PATHINFO_EXTENSION);

        if (empty($_FILES['product-thumb']['name'])) {
            $error['error-thumb'] = "Vui lòng chọn ảnh cho sản phẩm";
        } else if (!in_array(strtolower($type), $type_allow)) {
            $error['error-thumb'] = "File không đúng định dạng, đuôi file hợp lệ png, jpeg, jpg, gif";
        } else {
            # Kích thước file dưới 10MB
            $file_size = $_FILES['product-thumb']['size'];
            if ($file_size > 10000000) {
                $error['error-thumb'] = "Kích thước file quá lớn, dưới 10MB";
            }

            # Trùng tên file
            // else if (file_exists($upload_file)) {
            //     $error['error-thumb'] = "File đã tồn tại trên hệ thống";
            // }
        }

        if (empty($error)) {
            if (move_uploaded_file($path_tmp, $upload_file)) {
                $data = array(
                    'product_name' => $product_name,
                    'product_price_old' => $product_price_old,
                    'product_price_new' => $product_price_new,
                    'product_config' => $product_config,
                    'product_content' => $product_content,
                    'product_quantity' => $product_quantity,
                    'product_thumb' => $file_name
                );
                $success['success'] = 'Cập nhật sản phẩm thành công';
                update_product($id, $data);
            }
        }
    }
    $product = get_product_by_id($id);
    $data = array(
        'product' => $product,
    );
    // show_array($data);
    load_view('updateProduct', $data);
}

function deleteProductAction() {
    $id = (int) $_GET['id'];
    db_delete('tbl_products', "`product_id` = {$id}");
    redirect("?mod=product&action=listProduct");
}
