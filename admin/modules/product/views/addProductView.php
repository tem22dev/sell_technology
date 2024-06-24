<?php require './layout/header.php' ?>

<!--**********************************
            Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="?mod=product&action=listProduct">Sản phẩm</a></li>
                <li class="breadcrumb-item"><a href="?mod=product&action=addProduct">Thêm sản phẩm</a></li>
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
                        <h4 class="mb-3">Thêm sản phẩm mới</h4>
                        <form class="needs-validation" novalidate="" enctype="multipart/form-data" method="POST">
                            <div class="mb-3">
                                <label for="product-title" class="form-label">Tên sản phẩm</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="product-title" 
                                    placeholder="Tên sản phẩm"
                                    name="product-name"
                                    value="<?php if (!empty($_POST['product-name'])) echo $_POST['product-name'] ?>"
                                >
                                <div class="invalid-feedback show-error">
                                    <?php
                                    if (!empty($error['error-name'])) echo $error['error-name']
                                    ?>
                                </div>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="product-price" class="form-label">Giá củ của sản phẩm</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="product-price" 
                                    placeholder="Nhập giá củ của sản phẩm"
                                    name="product-price-old"
                                    value="<?php if (!empty($_POST['product-price'])) echo $_POST['product-price'] ?>"
                                >
                                <div class="invalid-feedback show-error">
                                    <?php
                                    if (!empty($error['error-price-old'])) echo $error['error-price-old']
                                    ?>
                                </div>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="product-price-new" class="form-label">Giá mới của sản phẩm</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="product-price-new" 
                                    placeholder="Nhập giá mới của sản phẩm"
                                    name="product-price-new"
                                    value="<?php if (!empty($_POST['product-price-new'])) echo $_POST['product-price-new'] ?>"
                                >
                                <div class="invalid-feedback show-error">
                                    <?php
                                    if (!empty($error['error-price-new'])) echo $error['error-price-new']
                                    ?>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="product-config" class="form-label">Cấu hình</label>
                                <textarea 
                                    name="product-config" 
                                    class="ckeditor"
                                ><?php if (!empty($_POST['product-config'])) echo $_POST['product-config'] ?></textarea>
                                <div class="invalid-feedback show-error">
                                    <?php
                                    if (!empty($error['error-config'])) echo $error['error-config']
                                    ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Chi tiết sản phẩm</label>
                                <textarea 
                                    name="product-content" 
                                    class="ckeditor"
                                ><?php if (!empty($_POST['product-content'])) echo $_POST['product-content'] ?></textarea>
                                <div class="invalid-feedback show-error">
                                    <?php
                                    if (!empty($error['error-content'])) echo $error['error-content']
                                    ?>
                                </div>
                            </div>

                            <div class="mb-3 col-md-2">
                                <label for="product-quantity" class="form-label">Số lượng sản phẩm</label>
                                <input 
                                    type="number" 
                                    class="form-control" 
                                    id="product-quantity" 
                                    name="product-quantity"
                                    min="0"
                                    value="<?php if (!empty($_POST['product-quantity'])) echo $_POST['product-quantity'] ?>"
                                >
                                <div class="invalid-feedback show-error">
                                    <?php
                                    if (!empty($error['error-quantity'])) echo $error['error-quantity']
                                    ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="input-group mb-3">
                                    <label for="product-thumb" class="input-group-text">Chọn ảnh</label>
                                    <div class="form-file">
                                        <input 
                                            type="file" 
                                            id="product-thumb" 
                                            class="form-file-input form-control"
                                            name="product-thumb"
                                        >
                                    </div>
                                    <div class="invalid-feedback show-error">
                                        <?php
                                        if (!empty($error['error-thumb'])) echo $error['error-thumb']
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <input 
                                class="btn btn-primary btn-lg float-end" 
                                type="submit"
                                value="Thêm sản phẩm"
                                name="add-product"
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