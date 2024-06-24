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
                        <li>Liên Hệ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End-->

<!-- contact area start -->
<div class="contact-area mtb-50px">
    <div class="container">
        <div class="custom-row-2">
            <div class="col-lg-4 col-md-5 mb-lm-30px">
                <div class="contact-info-wrap">
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="contact-info-dec">
                            <p>
                                Số điện thoại
                            </p>
                            <p>
                                <a href="tel:<?php echo $info_contact['contact_phone'] ?>"
                                    ><?php echo $info_contact['contact_phone'] ?></a
                                >
                            </p>
                        </div>
                    </div>
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="contact-info-dec">
                            <p>
                                Email
                            </p>
                            <p>
                                <a href="<?php echo $info_contact['contact_email'] ?>"><?php echo $info_contact['contact_email'] ?></a>
                            </p>
                        </div>
                    </div>
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="contact-info-dec">
                            <p class="address"><?php echo $info_contact['contact_address'] ?></p>
                        </div>
                    </div>
                    <div class="contact-social">
                        <h3>Theo dõi</h3>
                        <div class="social-info">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php global $error,  $success; ?>
            <div class="col-lg-8 col-md-7">
                <div class="contact-form">
                    <?php 
                    if (!empty($success['success'])) {
                        echo "<p class='text-me'>Phản hồi thành công</p>";
                    } else if (!empty($error['message'])) {
                        echo "<p class='form-messege text-me'>Phản hồi thất bại. Vui lòng điền đủ thông tin.</p>";
                    }
                    ?>
                    <div class="contact-title mb-30">
                        <h2>Phản hồi</h2>
                    </div>
                    
                    <form
                        class="contact-form-style"
                        id="contact-form"
                        action=""
                        method="post"
                    >
                        <div class="row">
                            <div class="col-lg-6">
                                <input
                                    name="fullname"
                                    placeholder="Họ tên"
                                    type="text"
                                />
                            </div>
                            <div class="col-lg-6">
                                <input
                                    name="email"
                                    placeholder="Email"
                                    type="email"
                                />
                            </div>
                            <div class="col-lg-12">
                                <input
                                    name="subject"
                                    placeholder="Tiêu đề"
                                    type="text"
                                />
                            </div>
                            <div class="col-lg-12">
                                <textarea
                                    name="message"
                                    placeholder="Nội dung bài viết"
                                ></textarea>
                                <button class="submit" type="submit" name="btn-add">
                                    Gửi
                                </button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact area end -->


<?php require "./layout/footer.php" ?>