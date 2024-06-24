<?php require './layout/header.php' ?>

<!--**********************************
            Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="?mod=post&action=listPost">Bài viết</a></li>
                <li class="breadcrumb-item"><a href="?mod=post&action=listPost">Danh sách bài viết</a></li>
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
                        <h4 class="card-title">Danh sách bài viết</h4>
                    </div>
                    <?php if (!empty($list_post)) {?>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>ID</th>
                                            <th>Hình ảnh</th>
                                            <th>Tiêu đề</th>
                                            <th>Ngày viết</th>
                                            <th>Trạng thái</th>
                                            <th>Duyệt bài</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $count = 0;
                                            foreach($list_post as $post) {
                                                $count ++;
                                        ?>
                                            <tr>
                                                <td><?php echo $count ?></td>
                                                <td><?php echo $post['post_id'] ?></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="./public/upload/post/<?php echo $post['post_thumb'] ?>" class="" width="82" alt="">
                                                    </div>
                                                </td>
                                                <td><?php echo $post['post_title'] ?></td>
                                                <td><?php echo date_time_format($post['post_date_add']) ?></td>
                                                <td>
                                                    <?php if ($post['post_status'] == 0) { ?>
                                                        <span class="badge light badge-warning">Chờ duyệt bài</span>
                                                    <?php 
                                                    } else if ($post['post_status'] == 1) { ?> 
                                                        <span class="badge light badge-success">Đã duyệt bài</span>
                                                    <?php 
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php if ($post['post_status'] == 0) { ?>
                                                        <a href="?mod=post&action=statusPost&id=<?php echo $post['post_id'] ?>" class="btn btn-success btn-pending">Duyệt bài</a>
                                                    <?php 
                                                    } else if ($post['post_status'] == 1) { ?> 
                                                    <a href="?mod=post&action=statusPost&id=<?php echo $post['post_id'] ?>" class="btn btn-warning btn-pending" onclick="return confirm('Bạn muốn gỡ bài viết này?')">Gỡ bài</a>
                                                    <?php 
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="?mod=post&action=updatePost&id=<?php echo $post['post_id'] ?>" class="btn btn-primary shadow btn-xs sharp me-1">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <a href="?mod=post&action=deletePost&id=<?php echo $post['post_id'] ?>" class="btn btn-danger shadow btn-xs sharp" onclick="return confirm('Bạn muốn xoá bài viết này?')">
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
<?php unset($_SESSION['post_status']) ?>
<?php require './layout/footer.php' ?>