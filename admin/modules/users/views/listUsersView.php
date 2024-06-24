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
                <li class="breadcrumb-item"><a href="?mod=users&action=listUsers">Danh sách tài khoản</a></li>
            </ol>
        </div>
        <!-- row -->
        <?php require "./layout/header-user.php" ?>

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh sách tài khoản quản trị</h4>
                </div>
                <?php if (!empty($list_user)) { ?>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ và tên</th>
                                        <th>username</th>
                                        <th>Email</th>
                                        <th>Điện thoại</th>
                                        <th>Địa chỉ</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $count = 0;
                                        foreach ($list_user as $user) {
                                            $count ++;
                                    ?>
                                        <tr>
                                            <td><?php echo $count ?></td>
                                            <td><?php echo $user['fullname'] ?></td>
                                            <td><?php echo $user['username'] ?></td>
                                            <td><?php echo $user['email'] ?></td>
                                            <td><?php echo $user['phone_number'] ?></td>
                                            <td><?php echo $user['address'] ?></td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="?mod=users&action=update&id=<?php echo $user['user_id'] ?>" class="btn btn-primary shadow btn-xs sharp me-1" title="Cập nhật">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <a 
                                                        href="?mod=users&action=delete&id=<?php echo $user['user_id'] ?>" 
                                                        class="btn btn-danger shadow btn-xs sharp" title="Xoá" 
                                                        onclick="return confirm('Bạn chắc chắn có muốn xoá tài khoản này ?')">
                                                            <i class="fa fa-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php 
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php 
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!--**********************************
            Content body end
***********************************-->

<?php require './layout/footer.php' ?>