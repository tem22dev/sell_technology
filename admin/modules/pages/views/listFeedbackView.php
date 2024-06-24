<?php require './layout/header.php' ?>

<!--**********************************
            Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="?mod=pages">Trang</a></li>
                <li class="breadcrumb-item"><a href="">Phản hồi</a></li>
            </ol>
        </div>

        <div class="alert alert-success solid alert-dismissible fade">
            <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                <polyline points="9 11 12 14 22 4"></polyline>
                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
            </svg>
            <strong class="success"><?php if (isset($_SESSION['post_status'])) echo $_SESSION['post_status'] ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
            </button>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Danh sách phản hồi</h4>
                    </div>
                    <?php if (!empty($list_feedback)) {?>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>ID</th>
                                            <th>Họ tên</th>
                                            <th>Email</th>
                                            <th>Tiêu đề</th>
                                            <th>Trạng thái</th>
                                            <th>Duyệt bài</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $count = 0;
                                            foreach($list_feedback as $feedback) {
                                                $count ++;
                                        ?>
                                            <tr>
                                                <td><?php echo $count ?></td>
                                                <td><?php echo $feedback['feedback_id'] ?></td>
                                                <td><?php echo $feedback['feedback_fullname'] ?></td>
                                                <td><?php echo $feedback['feedback_email'] ?></td>
                                                <td><?php echo $feedback['feedback_title'] ?></td>
                                                <td>
                                                    <?php if ($feedback['feedback_status'] == 0) { ?>
                                                        <span class="badge light badge-warning">Chưa xem</span>
                                                    <?php 
                                                    } else if ($feedback['feedback_status'] == 1) { ?> 
                                                        <span class="badge light badge-success">Đã xem</span>
                                                    <?php 
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php if ($feedback['feedback_status'] == 0) { ?>
                                                        <a href="?mod=pages&action=statusFeedback&id=<?php echo $feedback['feedback_id'] ?>" class="btn btn-success btn-pending">Đã xem</a>
                                                    <?php 
                                                    } else if ($feedback['feedback_status'] == 1) { ?> 
                                                    <a href="?mod=pages&action=statusFeedback&id=<?php echo $feedback['feedback_id'] ?>" class="btn btn-warning btn-pending">Chưa xem</a>
                                                    <?php 
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="?mod=pages&action=viewFeedback&id=<?php echo $feedback['feedback_id'] ?>" class="btn btn-primary shadow btn-xs sharp me-1">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </a>
                                                        <a href="?mod=pages&action=deleteFeedback&id=<?php echo $feedback['feedback_id'] ?>" class="btn btn-danger shadow btn-xs sharp" onclick="return confirm('Bạn muốn xoá phản hồi này?')">
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
</div>
<!--**********************************
            Content body end
***********************************-->
<?php require './layout/footer.php' ?>