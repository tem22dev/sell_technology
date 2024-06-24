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
                        <li>Thanh Toán</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End-->

<!-- checkout area start -->
<div class="checkout-area mt-50px mb-40px">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <form action="" method="post">
                    <div class="billing-info-wrap">
                        <h3>Thông tin người mua</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Họ tên</label>
                                    <input type="text" name="fullname"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Số điện thoại</label>
                                    <input type="phone" name="phone"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Email</label>
                                    <input type="email" name="email"/>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Địa chỉ nhận hàng</label>
                                    <input type="text" name="address"/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="additional-info-wrap">
                            <h4>Ghi chú</h4>
                            <div class="additional-info">
                                <textarea placeholder="Thêm thông tin ..." name="message"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-5 mt-md-30px mt-lm-30px ">
                <div class="your-order-area">
                    <h3>Đơn hàng của bạn</h3>
                    <?php if (!empty($list_buy)) { ?>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-top">
                                    <ul>
                                        <li>Sản phẩm</li>
                                        <li>Tổng cộng</li>
                                    </ul>
                                </div>
                                <div class="your-order-middle">
                                    <ul>
                                        <?php 
                                        foreach($list_buy as $item) {
                                        ?>
                                            <li>
                                                <span class="order-middle-left"><?php echo $item['product_name'] ?></span> 
                                                <span> X </span>
                                                <span><?php echo $item['qty'] ?></span>
                                                <?php  ?>
                                                <span class="order-price"><?php echo currency_format($item['price'])  ?></span>
                                            </li>
                                            
                                        <?php 
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="your-order-bottom">
                                    <ul>
                                        <li class="your-order-shipping">Phí vận chuyển</li>
                                        <li>Miễn phí vận chuyển</li>
                                    </ul>
                                </div>
                                <div class="your-order-bottom mt-15px">
                                    <ul>
                                        <li class="your-order-shipping">Hình thức thanh toán</li>
                                        <li>Thanh toán khi nhận hàng</li>
                                    </ul>
                                </div>
                                <div class="your-order-total">
                                    <ul>
                                        <li class="order-total">Tổng cộng</li>
                                        <li><?php echo currency_format(get_total_cart()) ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php 
                    }
                    ?>
                    <div class="Place-order mt-25">
                        <a class="btn-hover" href="?mod=checkout&action=addCheckout">Đặt hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- checkout area end -->


<?php require "./layout/footer.php" ?>