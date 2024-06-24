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
                <li class="breadcrumb-item"><a href="?mod=product&action=listProduct">Danh sách sản phẩm</a></li>
            </ol>
        </div>

        <div class="alert alert-success solid alert-dismissible fade">
            <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                <polyline points="9 11 12 14 22 4"></polyline>
                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
            </svg>
            <strong class="success"><?php if (isset($_SESSION['product_status'])) echo $_SESSION['product_status'] ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
            </button>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Danh sách sản phẩm</h4>
                    </div>
                    <?php if (!empty($list_product)) { ?>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Mã</th>
                                            <th>Hình ảnh</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá bán</th>
                                            <th>SL</th>
                                            <th>Trạng thái</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $count = 0;
                                        foreach($list_product as $product) { 
                                            $count ++;
                                        ?>
                                            <tr>
                                                <td><?php echo $count ?></td>
                                                <td><?php echo $product['product_id'] ?></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="./public/upload/product/<?php echo $product['product_thumb'] ?>" class="" width="82" alt="">
                                                    </div>
                                                </td>
                                                <td><?php echo $product['product_name'] ?></td>
                                                <td><?php echo $product['product_price_new'] ?></td>
                                                <td><?php echo $product['product_quantity'] ?></td>
                                                <td>
                                                    <?php if ($product['product_status'] == 0) { ?>
                                                        <a href="?mod=product&action=statusProduct&id=<?php echo $product['product_id'] ?>" class="btn btn-success btn-pending">Đăng sản phẩm</a>
                                                    <?php 
                                                    } else if ($product['product_status'] == 1) { ?> 
                                                    <a href="?mod=product&action=statusProduct&id=<?php echo $product['product_id'] ?>" class="btn btn-warning btn-pending" onclick="return confirm('Bạn muốn gỡ sản phẩm này?')">Gỡ sản phẩm</a>
                                                    <?php 
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="?mod=product&action=updateProduct&id=<?php echo $product['product_id'] ?>" class="btn btn-primary shadow btn-xs sharp me-1">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <a href="?mod=product&action=deleteProduct&id=<?php echo $product['product_id'] ?>" class="btn btn-danger shadow btn-xs sharp" onclick="return confirm('Bạn muốn xoá sản phẩm này?')">
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
<?php unset($_SESSION['product_status']) ?>
<?php require './layout/footer.php' ?>