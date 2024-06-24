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
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End-->

<!-- Shop Category Area End -->
<div class="shop-category-area blog-grid mtb-50px">
    <div class="container">
        <div class="row">
            <?php if (!empty($list_post)) { ?>
                <div class="col-lg-12 order-lg-last col-md-12 order-md-first">
                    <?php foreach ($list_post as $post) { ?>
                        <div class="row mb-50px">
                            <div class="col-lg-5 col-md-6">
                                <div class="single-blog-post blog-list-post">
                                    <div class="blog-post-media">
                                        <div class="blog-image">
                                            <a href="?mod=blog&action=detailBlog&id=<?php echo $post['post_id'] ?>"><img class="img-responsive" src="./admin/public/upload/post/<?php echo $post['post_thumb'] ?>" alt="blog" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 align-self-center align-items-center">
                                <div class="blog-post-content-inner mt-lm-30px">
                                    <h4 class="blog-title">
                                        <a href="?mod=blog&action=detailBlog&id=<?php echo $post['post_id'] ?>">
                                            <?php echo $post['post_title'] ?>
                                        </a>
                                    </h4>
                                    <ul class="blog-page-meta">
                                        <li>
                                            <a href="#">
                                                <i class="fa-solid fa-calendar-days"></i> <?php echo date_time_format($post['post_date_update']) ?>
                                            </a>
                                        </li>
                                    </ul>
                                    <p>
                                        <?php echo $post['post_desc'] ?>
                                    </p>
                                    <a class="read-more-btn" href="?mod=blog&action=detailBlog&id=<?php echo $post['post_id'] ?>"> 
                                        Đọc thêm <i class="fa-solid fa-caret-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- single blog post -->
                        </div>
                    <?php 
                    }
                    ?>
                    <!--  Pagination Area Start -->
                    <div class="pro-pagination-style text-center">
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
                </div>
            <?php 
            }
            ?>
            <!-- Sidebar Area Start -->
            <div class="col-lg-7 order-lg-first col-md-12 order-md-last mt-lm-50px mt-md-50px">
                <div class="left-sidebar shop-sidebar-wrap">
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget d-flex">
                        <h3 class="sidebar-title"><span>Tìm kiếm</span></h3>
                        <div class="search-widget">
                            <form action="#">
                                <input placeholder="Nhập từ khoá để tìm kiếm bài  viết ..." type="text" />
                                <button type="submit">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Sidebar Area End -->
        </div>
    </div>
</div>
<!-- Shop Category Area End -->


<?php require "./layout/footer.php" ?>