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
                        <li>Giới Thiệu</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End-->

<!-- About Area Start -->
<section class="about-area mtb-50px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-content">
                    <div class="about-title">
                        <h2 class="text-center"><?php echo $about['about_title'] ?></h2> 
                    </div>
                    <?php echo $about['about_content'] ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Area End -->


<?php require "./layout/footer.php" ?>