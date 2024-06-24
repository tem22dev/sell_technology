<?php require './layout/header.php' ?>

<!--**********************************
            Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="?mod=users">Tài khoản</a></li>
                <li class="breadcrumb-item"><a href="?mod=users&action=addUsers">Thêm tài khoản</a></li>
            </ol>
        </div>
        <!-- row -->
        <?php require "./layout/header-user.php" ?>
        <?php global $error, $success; ?>

        <div class="alert alert-success solid alert-dismissible fade">
            <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                <polyline points="9 11 12 14 22 4"></polyline>
                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
            </svg>
            <strong class="success"><?php if (!empty($success['success'])) echo $success['success'] ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
            </button>
        </div>
        <div class="alert alert-danger solid alert-dismissible fade">
            <svg viewbox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                <line x1="15" y1="9" x2="9" y2="15"></line>
                <line x1="9" y1="9" x2="15" y2="15"></line>
            </svg>
            <strong class="error"><?php if (!empty($error['error_pass'])) echo $error['error_pass'] ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
            </button>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Thêm tài khoản quản trị</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="needs-validation" novalidate="" method="POST">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="mb-3 row">
                                            <label 
                                                class="col-lg-3 col-form-label" for="fullname">
                                                Họ và tên
                                            </label>
                                            <div class="col-lg-6">
                                                <input 
                                                    type="text" 
                                                    class="form-control" 
                                                    id="fullname"   
                                                    placeholder="Nhập họ tên" 
                                                    name="fullname" 
                                                >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-3 col-form-label" for="username">
                                                Username <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input 
                                                    type="text" 
                                                    class="form-control" 
                                                    id="username" 
                                                    placeholder="Nhập username" 
                                                    required="" 
                                                    name="username"
                                                >
                                                <div class="invalid-feedback show-error">
                                                    <?php
                                                    if (!empty($error['username'])) echo $error['username']
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-3 col-form-label" for="email">
                                                Email <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input 
                                                    type="email" 
                                                    class="form-control" 
                                                    id="email" 
                                                    placeholder="Nhập email" 
                                                    required="" 
                                                    name="email"
                                                >
                                                <div class="invalid-feedback show-error">
                                                    <?php
                                                    if (!empty($error['email'])) echo $error['email']
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-3 col-form-label" for="password">
                                                Mật khẩu <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" required="" name="password">
                                                <div class="invalid-feedback show-error">
                                                    <?php
                                                    if (!empty($error['password'])) echo $error['password']
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="mb-3 row">
                                            <label class="col-lg-3 col-form-label" for="repassword">
                                                Nhập lại mật khẩu<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="repassword" placeholder="Nhập mật khẩu" required="" name="repassword">
                                                <div class="invalid-feedback show-error">
                                                    <?php
                                                    if (!empty($error['repassword'])) echo $error['repassword']
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-3 col-form-label" for="phone">
                                                Số điện thoại
                                            </label>
                                            <div class="col-lg-6">
                                                <input 
                                                    type="text" 
                                                    class="form-control" 
                                                    id="phone" 
                                                    placeholder="Nhập số điện thoại" 
                                                    name="phone_number"
                                                >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-3 col-form-label" for="address">
                                                Địa chỉ
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="address" rows="5" placeholder="Nhập địa chỉ" required="" name="address"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary btn-lg float-end" value="Thêm tài khoản" name="btn-add">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
            Content body end
***********************************-->

<?php require './layout/footer.php' ?>