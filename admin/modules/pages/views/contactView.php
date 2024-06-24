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
                <li class="breadcrumb-item"><a href="?mod=pages&action=contact">Liên hệ</a></li>
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
                        <h4 class="mb-3">Liên hệ</h4>
                        <form class="needs-validation" novalidate="" enctype="multipart/form-data" method="POST">
                            <div class="mb-3">
                                <label for="post-title" class="form-label">Số điện thoại</label>
                                <input 
                                    type="phone" 
                                    class="form-control" 
                                    id="post-title" 
                                    placeholder="Số điện thoại"
                                    name="contact_phone"
                                    value="<?php 
                                        if (!empty($_POST['contact_phone'])) echo $_POST['contact_phone'];
                                        else if (!empty($contact['contact_phone'])) echo $contact['contact_phone'];
                                    ?>"
                                >
                                <div class="invalid-feedback show-error">
                                    <?php
                                    if (!empty($error['error-phone'])) echo $error['error-phone']
                                    ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="post-title" class="form-label">Email</label>
                                <input 
                                    type="email" 
                                    class="form-control" 
                                    id="post-title" 
                                    placeholder="Địa chỉ email"
                                    name="contact_email"
                                    value="<?php 
                                        if (!empty($_POST['contact_email'])) echo $_POST['contact_email'];
                                        else if (!empty($contact['contact_email'])) echo $contact['contact_email'];
                                    ?>"
                                >
                                <div class="invalid-feedback show-error">
                                    <?php
                                    if (!empty($error['error-email'])) echo $error['error-email']
                                    ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="post-desc">Địa chỉ</label>
                                <div class="col-lg-6">
                                    <textarea 
                                        class="form-control" 
                                        id="post-desc" 
                                        rows="5" 
                                        placeholder="Địa chỉ"
                                        name="contact_address"
                                        ><?php 
                                            if (!empty($_POST['contact_address'])) echo $_POST['contact_address'];
                                            else if (!empty($contact['contact_address'])) echo $contact['contact_address']; 
                                        ?></textarea>
                                    <div class="invalid-feedback show-error">
                                        <?php
                                        if (!empty($error['error-address'])) echo $error['error-address']
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <input 
                                class="btn btn-primary btn-lg float-end" 
                                type="submit"
                                value="Cập nhật"
                                name="update-contact"
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