<?php 

if (isset($_POST['btn-subscriber'])) {
    $error = array();
    if (empty($_POST['email'])) {
        $error['message'] = "Vui lòng nhập email";
    } else {
        $email = $_POST['email'];
    }

    $subs_date = time();

    if (empty($error)) {
        $success['success'] = "Đăng ký thành công";
        $data = array(
            'subs_email' => $email,
            'subs_date' => $subs_date,
        );
        db_insert("tbl_subscriber", $data);
    }
}

function get_page_contact() {
    $result = db_fetch_row("SELECT * FROM `tbl_page`");
    return $result;
}

function get_list_post_order_by() {
    $result = db_fetch_array("SELECT * FROM `tbl_post` WHERE `post_status` = 1 order by `post_date_update` DESC");
    return $result;
}

$list_post = get_list_post_order_by();

$info_contact = get_page_contact();

?>        
        <!-- News letter area -->
        <div class="news-letter-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-4 mb-md-30px mb-lm-30px">
                        <div class="title-newsletter">
                            <h2>Đăng Ký Nhận Bản Tin</h2>
                            <p class="des">
                                Đăng ký để nhận được thông tin ưu đãi sớm nhất !
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <div id="mc_embed_signup" class="subscribe-form">
                            
                            <form
                                id="mc-embedded-subscribe-form"
                                class="validate"
                                novalidate=""
                                name="mc-embedded-subscribe-form"
                                method="post"
                                action=""
                            >
                                <div
                                    id="mc_embed_signup_scroll"
                                    class="mc-form"
                                >
                                    <input
                                        class="email"
                                        type="email"
                                        required=""
                                        placeholder="Nhập địa chỉ email ..."
                                        name="email"
                                    />
                                    <!-- <div class="mc-news" aria-hidden="true">
                                        <input
                                            type="text"
                                            value=""
                                            tabindex="-1"
                                            name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef"
                                        />
                                    </div> -->
                                    <div class="clear">
                                        <input
                                            id="mc-embedded-subscribe"
                                            class="button"
                                            type="submit"
                                            name="btn-subscriber"
                                            value="Đăng ký"
                                        />
                                    </div>
                                </div>
                            </form>
                            <?php 
                            if (!empty($success['success'])) {
                                echo "<p class='text-me text-me2'>Đăng ký thành công</p>";
                            } else if (!empty($error['message'])) {
                                echo "<p class='form-messege text-me text-me2'>Đăng ký thất bại. Vui lòng điền email.</p>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- News letter area  End -->

        <!-- Footer Area Start -->
        <div class="footer-area">
            <div class="footer-container">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div
                                class="col-md-6 col-lg-4 mb-md-30px mb-lm-30px"
                            >
                                <div class="single-wedge">
                                    <div class="footer-logo">
                                        <a href="?"
                                            ><img
                                                class="img-responsive img-responsive-max-width"
                                                src="./public/assets/images/logo/logo.png"
                                                alt="logo.jpg"
                                        /></a>
                                    </div>
                                    <p class="text-infor">
                                        Chúng tôi luôn cung cấp luôn là sản phẩm chính hãng có thông tin rõ ràng, chính sách ưu đãi cực lớn cho khách hàng có thẻ thành viên.
                                    </p>
                                    <div class="need_help">
                                        <p class="add">
                                            <span class="address"
                                                >Địa chỉ:</span
                                            >
                                            <?php if (!empty($info_contact['contact_address'])) echo $info_contact['contact_address'] ?>
                                        </p>
                                        <p class="mail">
                                            <span class="email">Email:</span>
                                            <a href="mailto:<?php if (!empty($info_contact['contact_email'])) echo $info_contact['contact_email'] ?>">
                                                <span
                                                    class="__cf_email__"
                                                    data-cfemail="94e7e1e4e4fbe6e0d4fcf5e7e0fcf1f9f1e7baf7fbf9"
                                                ><?php if (!empty($info_contact['contact_email'])) echo $info_contact['contact_email'] ?></span>
                                            </a>
                                        </p>
                                        <p class="phone">
                                            <span class="call us"
                                                >Liên hệ:</span
                                            >
                                            <a href="tel:<?php if (!empty($info_contact['contact_phone'])) echo $info_contact['contact_phone'] ?>">
                                            <?php if (!empty($info_contact['contact_phone'])) echo $info_contact['contact_phone'] ?></a
                                            >
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-md-6 col-lg-2 col-sm-6 mb-md-30px mb-lm-30px"
                            >
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Về Mtop</h4>
                                    <div class="footer-links">
                                        <ul>
                                            <li>
                                                <a href="about.html"
                                                    >Giới thiệu</a
                                                >
                                            </li>
                                            <li>
                                                <a href="contact.html">
                                                    Liên hệ
                                                </a>
                                            </li>
                                            <li><a href="#">Vận chuyển</a></li>
                                            <li><a href="#">Điều khoản</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-md-6 col-lg-2 col-sm-6 mb-sm-30px mb-lm-30px"
                            >
                                <div class="single-wedge">
                                    <h4 class="footer-herading">
                                        Liên kết
                                    </h4>
                                    <div class="footer-links">
                                        <ul>
                                            <li>
                                                <a href="#">Thông báo</a>
                                            </li>
                                            <li><a href="#">Giá giảm</a></li>
                                            <li>
                                                <a href="#">Sản phẩm mới</a>
                                            </li>
                                            <li>
                                                <a href="login.html">Đăng nhập</a>
                                            </li>
                                            <li>
                                                <a href="my-account.html"
                                                    >Tài khoản</a
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">
                                        Blog của chúng tôi
                                    </h4>
                                    <?php if (!empty($list_post)) { ?>
                                        <div class="footer-blog-slider">
                                            <div
                                                class="footer-blog-slider-wrapper slider-nav-style-3"
                                            >
                                                <!-- Single-item -->
                                                <div class="single-slider-item">
                                                    <?php 
                                                    $count = 0;
                                                    foreach ($list_post as $item_post) {
                                                        $count ++;
                                                        if ($count === 3) break;
                                                    ?>
                                                        <div class="footer-blog-post d-flex mb-30px">
                                                            <div class="footer-blog-post-top">
                                                                <div
                                                                    class="post-thumbnail"
                                                                >
                                                                    <a
                                                                        href="blog-single-left-sidebar.html"
                                                                    >
                                                                        <img
                                                                            src="./admin/public/upload/post/<?php echo $item_post['post_thumb'] ?>"
                                                                            alt=""
                                                                        />
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="footer-blog-content"
                                                            >
                                                                <h4>
                                                                    <a
                                                                        href="?mod=blog&action=detailBlog&id=<?php echo $item_post['post_id'] ?>"
                                                                        ><?php echo $item_post['post_title'] ?></a
                                                                    >
                                                                </h4>
                                                                <div
                                                                    class="footer-blog-meta"
                                                                >
                                                                    <!-- <span class="autor"
                                                                        >Posted by
                                                                        <a href="#"
                                                                            >Demo
                                                                            Hasthemes</a
                                                                        >
                                                                    </span> -->
                                                                    <span class="date"
                                                                        ><?php echo date_time_format($item_post['post_date_update']) ?></span
                                                                    >
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <!-- <div class="footer-blog-post">
                                                        <div
                                                            class="footer-blog-post-top"
                                                        >
                                                            <div
                                                                class="post-thumbnail"
                                                            >
                                                                <a
                                                                    href="blog-single-left-sidebar.html"
                                                                >
                                                                    <img
                                                                        src="./public/assets/images/blog-image/blog-10.jpg"
                                                                        alt=""
                                                                    />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="footer-blog-content"
                                                        >
                                                            <h4>
                                                                <a
                                                                    href="blog-single-left-sidebar.html"
                                                                    >This is Secound
                                                                    Post For
                                                                    XipBlog</a
                                                                >
                                                            </h4>
                                                            <div
                                                                class="footer-blog-meta"
                                                            >
                                                                <span class="autor"
                                                                    >Posted by
                                                                    <a href="#"
                                                                        >Demo
                                                                        Hasthemes</a
                                                                    >
                                                                </span>
                                                                <span class="date"
                                                                    >Jun
                                                                    29,2020</span
                                                                >
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <?php 
                                                    }
                                                    ?>
                                                </div>
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
                <div class="footer-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-paymet-warp d-flex">
                                    <div class="heading-info">Hỗ trợ thanh toán:</div>
                                    <div class="payment-way"><img class="payment-img img-responsive" src="./public/assets/images/icons/payment.png" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-social-icon d-flex">
                                    <div class="heading-info">Theo dõi:</div>
                                    <div class="social-icon">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                            </li>
                                            <li class="youtube">
                                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End -->

        <!-- JS -->
        <script src="./public/assets/js/vendor/vendor.js"></script>
        <script src="./public/assets/js/plugins/plugins.js"></script>

        <!-- Main JS -->
        <script src="./public/assets/js/main.js"></script>
        
    </body>
</html>