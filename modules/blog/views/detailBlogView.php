<?php require "./layout/header.php" ?>


<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <ul class="nav">
                        <li>
                            <a href="index.html">Trang Chủ</a>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>Chi tiết bài viết</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End-->

<!-- Shop Category Area End -->
<div class="shop-category-area single-blog-page mtb-60px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 order-lg-last col-md-12 order-md-first">
                <div class="blog-posts ">
                    <div class="single-blog-post blog-grid-post">
                        <div class="blog-post-content-inner mt-30px">
                            <h4 class="blog-title"><?php echo $post['post_title'] ?></h4>
                            <ul class="blog-page-meta">
                                <li>
                                    <a href="#">
                                        <i class="fa-solid fa-calendar-days"></i> <?php echo date_time_format($post['post_date_update']) ?>
                                    </a>
                                </li>
                            </ul>
                            <div class="">
                                <?php echo $post['post_content'] ?>
                            </div>
                        </div>
                    </div>
                    <!-- single blog post -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Category Area End -->


<?php require "./layout/footer.php" ?>