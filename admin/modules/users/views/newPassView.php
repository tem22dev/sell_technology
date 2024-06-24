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
                <li class="breadcrumb-item"><a href="?mod=users&action=newPass">Đổi mật khẩu</a></li>
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
                        <h4 class="card-title">Thay đổi mật khẩu</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form class="form-valide-with-icon needs-validation" novalidate="" method="POST">
                                <div class="mb-3">
                                    <label class="text-label form-label" for="dlab-password">
                                        Mật khẩu củ <span class="require">*</span>
                                    </label>
                                    <div class="input-group transparent-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                        <input type="password" class="form-control" id="dlab-password" placeholder="Nhập mật khẩu cũ" required="" name="pass-old">
                                        <span class="input-group-text show-pass">
                                            <i class="fa fa-eye-slash"></i>
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        <div class="invalid-feedback show-error">
                                            <?php if (!empty($error['pass-old'])) echo $error['pass-old'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="text-label form-label" for="dlab-password-new">
                                        Mật khẩu mới <span class="require">*</span>
                                    </label>
                                    <div class="input-group transparent-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                        <input type="password" class="form-control" id="dlab-password-new" placeholder="Nhập mật khẩu mới" required="" name="pass-new">
                                        <span class="input-group-text show-pass-new">
                                            <i class="fa fa-eye-slash"></i>
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        <div class="invalid-feedback show-error">
                                            <?php if (!empty($error['pass-new'])) echo $error['pass-new'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="text-label form-label" for="dlab-repassword-new">
                                        Nhập lại mật khẩu mới<span class="require">*</span>
                                    </label>
                                    <div class="input-group transparent-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                        <input type="password" class="form-control" id="dlab-repassword-new" placeholder="Nhập lại mật khẩu mới" required="" name="confirm-pass">
                                        <span class="input-group-text show-repass-new">
                                            <i class="fa fa-eye-slash"></i>
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        <div class="invalid-feedback show-error">
                                            <?php if (!empty($error['confirm-pass'])) echo $error['confirm-pass'] ?>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary btn-lg float-end" value="Cập nhật" name="btn_update_pass">
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