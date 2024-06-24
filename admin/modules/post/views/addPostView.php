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
                <li class="breadcrumb-item"><a href="?mod=post&action=addPost">Thêm bài viết</a></li>
            </ol>
        </div>

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

        <!-- row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Thêm bài viết mới</h4>
                        <form class="needs-validation" novalidate="" enctype="multipart/form-data" method="POST">
                            <div class="mb-3">
                                <label for="post-title" class="form-label">Tiêu đề bài viết</label>
                                <input 
                                    type="text" 
                                    name="post-title" 
                                    class="form-control" 
                                    id="post-title" 
                                    placeholder="Tiêu đề bài viết"
                                    value="<?php if (!empty($_POST['post-title'])) echo $_POST['post-title'] ?>"
                                >
                                <div class="invalid-feedback show-error">
                                    <?php
                                    if (!empty($error['error-title'])) echo $error['error-title']
                                    ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="post-desc">
                                    Mô tả ngắn
                                </label>
                                <div class="col-lg-6">
                                    <textarea class="form-control" name="post-desc" id="post-desc" rows="5" placeholder="Mô tả ngắn"><?php if (!empty($_POST['post-desc'])) echo $_POST['post-desc'] ?></textarea>
                                    <div class="invalid-feedback show-error">
                                        <?php
                                        if (!empty($error['error-desc'])) echo $error['error-desc']
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Chi tiết bài viết</label>
                                <textarea name="post-content" class="ckeditor"><?php if (!empty($_POST['post-content'])) echo $_POST['post-content'] ?></textarea>
                                <div class="invalid-feedback show-error">
                                    <?php
                                    if (!empty($error['error-content'])) echo $error['error-content']
                                    ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="input-group mb-3">
                                    <label for="post-thumb" class="input-group-text">Chọn ảnh</label>
                                    <div class="form-file">
                                        <input type="file" name="post-thumb" id="post-thumb" class="form-file-input form-control">
                                    </div>
                                    <div class="invalid-feedback show-error">
                                        <?php
                                        if (!empty($error['error-thumb'])) echo $error['error-thumb']
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <input class="btn btn-primary btn-lg float-end" type="submit" value="Thêm bài" name="upload-post">
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