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
                <li class="breadcrumb-item"><a href="?mod=users">Thông tin</a></li>
            </ol>
        </div>
        <!-- row -->
        <?php require "./layout/header-user.php" ?>
        
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Thông tin tài khoản</h4>
                        <form class="needs-validation" novalidate="">
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Họ tên</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="fullname" 
                                    value="<?php echo $info_user['fullname'] ?>"
                                >
                            </div>

                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text">@</span>
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        id="username" 
                                        value="<?php echo $info_user['username'] ?>"
                                    >
                                </div>
                            </div>
        
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input 
                                    type="email" 
                                    class="form-control" 
                                    id="email" 
                                    value="<?php echo $info_user['email'] ?>"
                                >
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Số điện thoại</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="phone" 
                                    value="<?php echo $info_user['phone_number'] ?>"
                                >
                            </div>
        
                            <div class="mb-3">
                                <label for="address" class="form-label">Địa chỉ</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="address" 
                                    value="<?php echo $info_user['address'] ?>"
                                >
                            </div>
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