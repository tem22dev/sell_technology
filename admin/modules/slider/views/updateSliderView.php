<?php require './layout/header.php' ?>

<!--**********************************
            Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="?mod=slider&action=listSlider">Slider</a></li>
                <li class="breadcrumb-item"><a href="?mod=slider&action=updateSlider">Cập nhật slider</a></li>
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
        <div class="alert alert-danger solid alert-dismissible fade">
            <svg viewbox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                <line x1="15" y1="9" x2="9" y2="15"></line>
                <line x1="9" y1="9" x2="15" y2="15"></line>
            </svg>
            <strong class="error"><?php if (!empty($error['message-error'])) echo $error['message-error'] ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
            </button>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Cập nhật slider</h4>
                        <form class="needs-validation" novalidate="" enctype="multipart/form-data" method="POST">
                            <div class="mb-3">
                                <div class="input-group mb-3">
                                    <label for="post-thumb" class="input-group-text">Chọn ảnh</label>
                                    <div class="form-file">
                                        <input type="file" id="post-thumb" class="form-file-input form-control" name="file">
                                    </div>
                                </div>
                            </div>

                            <input 
                                class="btn btn-primary btn-lg float-end" 
                                type="submit"
                                value="Cập nhật"
                                name="update_file"
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