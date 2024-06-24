<?php require "./layout/header.php" ?>

<!-- Slider Start -->
<div class="slider-area slider-dots-style-3">
    <?php if(!empty($list_slider)) { ?>
        <div class="hero-slider-wrapper">
            <?php 
            foreach($list_slider as $slider) {
            ?>
                <!-- Single Slider  -->
                <div
                    class="single-slide slider-height-3 bg-img d-flex"
                    data-bg-image="./admin/public/upload/slider/<?php echo $slider['slider_name'] ?>"
                >
                    <div class="container align-self-center">
                        <div
                            class="slider-content-1 slider-animated-1 text-left"
                        >
                            <h1 class="animated color-black">
                                <?php echo $slider['slider_heading'] ?>
                            </h1>
                            <p class="animated color-gray">
                                <?php echo $slider['slider_desc'] ?>
                            </p>
                            <a
                                href="<?php echo $slider['slider_url'] ?>"
                                class="shop-btn animated"
                                ><?php echo $slider['slider_btn_text'] ?></a
                            >
                        </div>
                    </div>
                </div>
            <?php 
            }
            ?>
        </div>
    <?php 
    }
    ?>
</div>
<!-- Slider End -->

<!-- Static Area Start -->
<div class="static-area mtb-50px">
    <div class="container">
        <div class="static-area-wrap">
            <div class="row">
                <div
                    class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px"
                >
                    <div class="single-static">
                        <img
                            src="./public/assets/images/icons/static-icons-1.png"
                            alt=""
                            class="img-responsive"
                        />
                        <div class="single-static-meta">
                            <h4>Miễn phí vận chuyển</h4>
                            <p>Trên tất cả các đơn hàng trên 10 triệu</p>
                        </div>
                    </div>
                </div>
                
                <div
                    class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px"
                >
                    <div class="single-static">
                        <img
                            src="./public/assets/images/icons/static-icons-2.png"
                            alt=""
                            class="img-responsive"
                        />
                        <div class="single-static-meta">
                            <h4>Miễn phí trả hàng</h4>
                            <p>Đổi trả miễn phí trong vòng 7 ngày</p>
                        </div>
                    </div>
                </div>
                
                <div
                    class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-sm-30px"
                >
                    <div class="single-static">
                        <img
                            src="./public/assets/images/icons/static-icons-3.png"
                            alt=""
                            class="img-responsive"
                        />
                        <div class="single-static-meta">
                            <h4>Thanh toán an toàn</h4>
                            <p>Thanh toán của bạn được bảo vệ an toàn.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                    <div class="single-static">
                        <img
                            src="./public/assets/images/icons/static-icons-4.png"
                            alt=""
                            class="img-responsive"
                        />
                        <div class="single-static-meta">
                            <h4>Hỗ trợ 24/7</h4>
                            <p>Liên hệ với chúng tôi 24h mỗi ngày</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Static Area End -->

<!-- Banner Area Start -->
<div class="banner-area mt-50px mb-20px">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="banner-wrapper">
                    <a href="shop-4-column.html"
                        ><img
                            src="./public/assets/images/banner-image/11.jpg"
                            alt=""
                    /></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="banner-wrapper">
                    <a href="shop-4-column.html"
                        ><img
                            src="./public/assets/images/banner-image/12.jpg"
                            alt=""
                    /></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->

<!-- Arrivals Area Start -->
<div class="arrival-area mt-20px mb-20px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Sản phẩm nổi bật</h2>
                </div>
            </div>
        </div>
        <!-- tab content -->
        <?php if (!empty($list_product)) { ?>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane active fade">
                    <!-- Arrivel slider start -->
                    <div class="arrival-slider-wrapper slider-nav-style-1">
                        <?php 
                        $count = 0;
                        foreach($list_product as $product) { 
                            $count ++;
                            if ($count === 6) break;
                        ?>
                            <div class="slider-single-item">
                                <!-- Single Item -->
                                <article class="list-product text-center">
                                    <div class="product-inner">
                                        <div class="img-block">
                                            <a
                                                href="?mod=product&action=detailProduct&id=<?php echo $product['product_id'] ?>"
                                                class="thumbnail"
                                            >
                                                <img
                                                    class="first-img"
                                                    src="./admin/public/upload/product/<?php echo $product['product_thumb'] ?>"
                                                    alt=""
                                                />
                                            </a>
                                        </div>
                                        <!-- <ul class="product-flag">
                                            <li class="new">-12%</li>
                                        </ul> -->
                                        <div class="product-decs">
                                            <h2>
                                                <a href="?mod=product&action=detailProduct&id=<?php echo $product['product_id'] ?>" class="product-link">
                                                    <?php echo $product['product_name'] ?>
                                                </a>
                                            </h2>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price">
                                                        <?php echo currency_format($product['product_price_old']) ?>
                                                    </li>
                                                    <li class="current-price">
                                                        <?php echo currency_format($product['product_price_new']) ?>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="cart-btn">
                                            <a
                                                href="?mod=product&action=detailProduct&id=<?php echo $product['product_id'] ?>"
                                                class="add-to-curt"
                                                title="Add to cart"
                                                >Thêm vào giỏ hàng</a
                                            >
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php 
                        }
                        ?>
                    </div>
                    <!-- Arrivel slider end -->
                </div>
            </div>
        <?php 
        }
        ?>
        <!-- tab content end-->
    </div>
</div>
<!-- Arrivals Area End -->

<?php require "./layout/footer.php" ?>