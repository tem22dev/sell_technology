<?php require './layout/header.php'; ?>

<!--**********************************
            Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="?mod=users">Tài khoản</a></li>
                <li class="breadcrumb-item"><a href="?mod=users&action=update">Cập nhật</a></li>
            </ol>
        </div>
        <!-- row -->
        <?php require "./layout/header-user.php" ?>
        <?php global $error, $success; ?>
        
        <div 
            class="alert alert-success solid alert-dismissible fade">
            <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                <polyline points="9 11 12 14 22 4"></polyline>
                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
            </svg>
            <strong class="success"><?php if (!empty($success)) echo $success['success'] ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
            </button>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Cập nhật tài khoản</h4>
                        <form class="needs-validation" novalidate="" action="" method="POST">
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Họ tên</label>
                                <input type="text" class="form-control" id="fullname" value="<?php if (!empty($info_user['fullname'])) echo $info_user['fullname'] ?>" placeholder="Họ tên" name="fullname">
                            </div>

                            <div class="mb-3">
                                <label for="username" class="form-label">
                                    Username <span class="require">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" id="username" value="<?php if (!empty($info_user['username'])) echo $info_user['username'] ?>" require placeholder="Username" name="username">
                                    <div class="invalid-feedback show-error">
                                        <?php if (!empty($error['username'])) echo $error['username'] ?>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">
                                    Email <span class="require">*</span>
                                </label>
                                <input type="email" class="form-control" id="email" value="<?php if (!empty($info_user['email'])) echo $info_user['email'] ?>" require placeholder="Email" name="email">
                                <div class="invalid-feedback show-error">
                                    <?php if (!empty($error['email'])) echo $error['email'] ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Số điện thoại</label>
                                <input type="tel" class="form-control" id="phone" 
                                value="<?php if (!empty($info_user['phone_number'])) echo $info_user['phone_number'] ?>" placeholder="Số điện thoại" name="phone_number">
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Địa chỉ</label>
                                <input type="text" class="form-control" id="address" value="<?php if (!empty($info_user['address'])) echo $info_user['address'] ?>" placeholder="Địa chỉ" name="address">
                            </div>
                            <input type="submit" class="btn btn-primary btn-lg float-end" name="btn-update" value="Cập nhật">
                        </form>
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