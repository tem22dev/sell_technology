<?php require './layout/header.php' ?>

<!--**********************************
            Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="?mod=pages&action=about">Trang</a></li>
                <li class="breadcrumb-item"><a href="?mod=pages&action=about">Giới thiệu</a></li>
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

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Bài giới thiệu</h4>
                        <form class="needs-validation" novalidate="" method="POST">
                            <div class="mb-3">
                                <label for="about-title" class="form-label">Tiêu đề bài viết</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="about-title" 
                                    placeholder="Tiêu đề bài viết"
                                    name="about-title"
                                    value="<?php 
                                        if (!empty($_POST['about-title'])) echo $_POST['about-title'];
                                        else if (!empty($about['about_title'])) echo $about['about_title'];
                                    ?>"
                                >
                                <div class="invalid-feedback show-error">
                                    <?php
                                    if (!empty($error['error-title'])) echo $error['error-title']
                                    ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="about-content" class="form-label">Nội dung bài viết</label>
                                <textarea 
                                    name="about-content" 
                                    class="ckeditor"
                                ><?php 
                                    if (!empty($_POST['about-content'])) echo $_POST['about-content'];
                                    else if (!empty($about['about_content'])) echo $about['about_content'];
                                ?></textarea>
                                <div class="invalid-feedback show-error">
                                    <?php
                                    if (!empty($error['error-content'])) echo $error['error-content']
                                    ?>
                                </div>
                            </div>

                            <input 
                                class="btn btn-primary btn-lg float-end" 
                                type="submit"
                                value="Cập nhật"
                                name="update-about"
                            >
                                
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