<?php require "./layout/header.php" ?>


 <!-- Breadcrumb Area Start -->
 <div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <ul class="nav">
                        <li>
                            <a href="?">Trang chủ</a>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>Chi tiết sản phẩm</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End-->

<!-- Shop details Area start -->
<section class="product-details-area mtb-60px ">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="product-details-img product-details-tab">
                    <div class="zoompro-wrap zoompro-2">
                        <div class="zoompro-border zoompro-span">
                            <img class="zoompro" src="./admin/public/upload/product/<?php echo $product['product_thumb'] ?>"  alt="" />
                        </div>
                    </div>
                    <!-- <div id="gallery" class="product-dec-slider-2">
                            <div class="single-slide-item">
                                <img class="img-responsive" data-image="assets/images/product-image/8.jpg" data-zoom-image="assets/images/product-image/zoom/5.jpg" src="./public/assets/images/product-image/8.jpg" alt="" />
                            </div>
                            <div class="single-slide-item">
                                <img class="img-responsive" data-image="assets/images/product-image/6.jpg" data-zoom-image="assets/images/product-image/zoom/1.jpg" src="./public/assets/images/product-image/6.jpg"  alt="" />
                            </div>
                            <div class="single-slide-item">
                                    <img class="img-responsive" data-image="assets/images/product-image/9.jpg" data-zoom-image="assets/images/product-image/zoom/3.jpg"  src="./public/assets/images/product-image/9.jpg" alt="" />
                            </div>
                            <div class="single-slide-item">
                                    <img class="img-responsive" data-image="assets/images/product-image/15.jpg" data-zoom-image="assets/images/product-image/zoom/4.jpg" src="./public/assets/images/product-image/15.jpg" alt="" />
                            </div>
                            <div class="single-slide-item">
                                    <img class="img-responsive" data-image="assets/images/product-image/7.jpg" data-zoom-image="assets/images/product-image/zoom/2.jpg" src="./public/assets/images/product-image/7.jpg" alt="" />
                            </div>
                    </div> -->
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="product-details-content">
                    <h2><?php echo $product['product_name'] ?></h2>
                    <p class="reference">Mã sản phẩm:<span> <?php echo $product['product_id'] ?></span></p>
                    <div class="pricing-meta">
                        <ul>
                            <li class="old-price"><?php echo currency_format($product['product_price_old']) ?></li>
                            <li class="cuttent-price"><?php echo currency_format($product['product_price_new']) ?></li>
                        </ul>
                    </div>
                    <div class="pro-details-list">
                        <?php echo $product['product_config'] ?>
                    </div>
                    <form action="" method="post">
                        <div class="pro-details-quality mt-0px">
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" min="1" type="text" name="qtybutton" value="1" />
                            </div>
                            <div class="pro-details-cart btn-hover">
                                <a href="?mod=product&action=addProductCart&id=<?php echo $product['product_id'] ?>">Thêm vào giỏ hàng</a>
                            </div>
                        </div>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop details Area End -->

<!-- product details description area start -->
<div class="description-review-area mb-50px bg-light-gray-3 ptb-50px">
    <div class="container">
        <div class="description-review-wrapper">
            <div class="description-review-topbar nav">
                <a class="active" data-bs-toggle="tab" href="#des-details2">
                    Chi tiết sản phẩm
                </a>
            </div>
            <div class="tab-content description-review-bottom">
                <div id="des-details2" class="tab-pane active">
                    <div class="product-anotherinfo-wrapper">
                        <?php echo $product['product_content'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product details description area end -->

<!-- Arrivals Area Start --> 
<div class="arrival-area single-product-nav mb-20px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="section-heading">Sản phẩm khác:</h2>
                </div>
            </div>
        </div>
        <!-- Arrivel slider start -->
        <?php if (!empty($list_product)) { ?>
            <div class="arrival-slider-wrapper slider-nav-style-1">
                <?php 
                $count = 0;
                foreach ($list_product as $item) { 
                    $count ++;
                    if ($count === 5) break;
                ?>
                    <div class="slider-single-item">
                        <!-- Single Item -->
                        <article class="list-product text-center">
                            <div class="product-inner">
                                <div class="img-block">
                                    <a href="?mod=product&action=detailProduct&id=<?php echo $item['product_id'] ?>" class="thumbnail">
                                        <img class="first-img" src="./admin/public/upload/product/<?php echo $item['product_thumb'] ?>" alt="" />
                                    </a>
                                </div>
                                <!-- <ul class="product-flag">
                                    <li class="new">-12%</li>
                                </ul> -->
                                <div class="product-decs">
                                    <h2><a href="?mod=product&action=detailProduct&id=<?php echo $item['product_id'] ?>" class="product-link"><?php echo $item['product_name'] ?></a></h2>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price"><?php echo $item['product_price_old'] ?></li>
                                            <li class="current-price"><?php echo $item['product_price_new'] ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cart-btn">
                                    <a href="?mod=product&action=detailProduct&id=<?php echo $item['product_id'] ?>" class="add-to-curt" title="Add to cart">Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php 
                }
                ?>
            </div>
        <?php 
        }
        ?>
        <!-- Arrivel slider end -->
    </div>
</div>
<!-- Arrivals Area End -->


<?php require "./layout/footer.php" ?>