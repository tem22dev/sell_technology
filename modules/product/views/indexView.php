<?php require "./layout/header.php" ?>


<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <ul class="nav">
                        <li>
                            <a href="?">Trang Chủ</a>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>Sản Phẩm</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End-->

<!-- Shop Category Area End -->
<div class="shop-category-area mt-30px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Shop Top Area Start -->
                <form action="" method="post">
                    <div class="shop-top-bar d-flex">
                        <!-- Left Side start -->
                        <div class="shop-tab nav d-flex">
                            <p>Có tất cả <?php echo get_number_product() ?> sản phẩm.</p>
                        </div>
                        <!-- Left Side End -->
                        <!-- Right Side Start -->
                        
                        <div class="select-shoing-wrap d-flex">
                            <div class="shot-product">
                                <p>Sắp xếp theo:</p>
                            </div>
                            <div class="shop-select">
                                <select name="order_price">
                                    <option value="0">-- Giá sản phẩm --</option>
                                    <option value="1" <?php if ((!empty($_POST['order_price'])) && $_POST['order_price'] == 1) echo 'selected'?>>Giá từ thấp đến cao</option>
                                    <option value="2" <?php if ((!empty($_POST['order_price'])) && $_POST['order_price'] == 2) echo 'selected'?>>Giá từ cao đến thấp</option>
                                </select>
                                <input class="bg-blue select-price" type="submit" name="btn-order" value="Sắp xếp">
                            </div>
                        </div>
                        <!-- Right Side End -->
                    </div>
                        
                </form>
                <!-- Shop Top Area End -->

                <!-- Shop Bottom Area Start -->
                <div class="shop-bottom-area mt-35">
                    <?php if (!empty($list_product)) { ?>
                        <!-- Shop Tab Content Start -->
                        <div class="tab-content jump">
                            <!-- Tab One Start -->
                            <div id="shop-1" class="tab-pane active">
                                <div class="row m-0">
                                    <?php foreach ($list_product as $product) { ?>
                                        <div class="mb-30px col-md-4 col-lg-3 col-sm-6  p-0">
                                            <div class="slider-single-item">
                                                <!-- Single Item -->
                                                <article class="list-product p-0 text-center">
                                                    <div class="product-inner">
                                                        <div class="img-block">
                                                            <a href="?mod=product&action=detailProduct&id=<?php echo $product['product_id'] ?>" class="thumbnail">
                                                                <img class="first-img" src="./admin/public/upload/product/<?php echo $product['product_thumb'] ?>" alt="" />
                                                            </a>
                                                        </div>
                                                        <!-- <ul class="product-flag">
                                                            <li class="new">-12%</li>
                                                        </ul> -->
                                                        <div class="product-decs">
                                                            <h2><a href="?mod=product&action=detailProduct&id=<?php echo $product['product_id'] ?>" class="product-link"><?php echo $product['product_name'] ?></a></h2>
                                                            <div class="pricing-meta">
                                                                <ul>
                                                                    <li class="old-price"><?php echo currency_format($product['product_price_old']) ?></li>
                                                                    <li class="current-price"><?php echo currency_format($product['product_price_new']) ?></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="cart-btn">
                                                            <a href="?mod=product&action=detailProduct&id=<?php echo $product['product_id'] ?>" class="add-to-curt" title="Thêm vào giả hàng">Thêm vào giả hàng</a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    <?php 
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- Tab One End -->
                        </div>
                        <!-- Shop Tab Content End -->
                        <!--  Pagination Area Start -->
                        <div class="pro-pagination-style text-center mtb-50px">
                            <ul>
                                <li>
                                    <a class="prev" href="#"><i class="fa-solid fa-chevron-left"></i></a>
                                </li>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li>
                                    <a class="next" href="#"><i class="fa-solid fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--  Pagination Area End -->
                    <?php 
                    }
                    ?>
                </div>
                <!-- Shop Bottom Area End -->
            </div>
        </div>
    </div>
</div>
<!-- Shop Category Area End -->


<?php require "./layout/footer.php" ?>