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
                        <li>Giỏ Hàng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End-->

<!-- cart area start -->
<div class="cart-main-area mtb-50px">
    <div class="container">
        <h3 class="cart-page-title">Sản phẩm trong giỏ hàng</h3>
        <?php if (!empty($list_buy)) { ?>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="" method="POST">
                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>ID</th>
                                        <th>Hình ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                        <th>Tổng</th>
                                        <th>Xoá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $count = 0;
                                    foreach ($list_buy as $item) {
                                        $count ++;
                                    ?>
                                        <tr>
                                            <td><?php echo $count ?></td>
                                            <td><?php echo $item['id'] ?></td>
                                            <td class="product-thumbnail">
                                                <a  href="?mod=product&action=detailProduct&id=<?php echo $item['id'] ?>">
                                                    <img class="img-responsive" src="./admin/public/upload/product/<?php echo $item['product_thumb'] ?>" alt="" />
                                                </a>
                                            </td>

                                            <td class="product-name"><a href="?mod=product&action=detailProduct&id=<?php echo $item['id'] ?>"><?php echo $item['product_name'] ?></a></td>
                                            <td class="product-price-cart"><span class="amount"><?php echo currency_format($item['price']) ?></span>
                                            </td>

                                            <td class="product-quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" min="1" type="text" name="qty[<?php echo $item['id'] ?>]" value="<?php echo $item['qty'] ?>" />
                                                </div>
                                            </td>

                                            <td class="product-subtotal"><?php echo currency_format($item['sub_total']) ?></td>
                                            <td class="product-remove">
                                                <a href="<?php echo $item['url_delete_cart'] ?>"><i class="fa-regular fa-trash-can"></i></a>
                                            </td>
                                        </tr>
                                    <?php 
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="totall-price-wrap">
                                    <h4 class="totall-price-title">Tổng cộng: <span><?php echo currency_format(get_total_cart()) ?></span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-shiping-update">
                                        <a href="?mod=product">Tiếp tục mua hàng</a>
                                    </div>
                                    <div class="cart-clear">
                                        <input type="submit" name="btn_update_cart" value="Cập nhật giỏ hàng">
                                        <a href="?mod=checkout">Thanh toán</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <?php 
        }
        ?>
    </div>
</div>
<!-- cart area end -->


<?php require "./layout/footer.php" ?>