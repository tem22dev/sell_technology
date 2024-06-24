<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="dropdown header-profile">
                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                    <img src="./public/imgs/profile/avatar.jpg" width="20" alt="">
                    <div class="header-info ms-3">
                        <?php 
                            if (isset($_SESSION['user_id']))
                                $info_user_login = get_user_by_id($_SESSION['user_id']);
                        ?>
                        <span class="font-w600 ">Hi,<b><?php echo $info_user_login['username'] ?></b></span>
                        <small class="text-end font-w400"><?php echo $info_user_login['email'] ?></small>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="?mod=users" class="dropdown-item ai-icon">
                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <span class="ms-2">Tài khoản</span>
                    </a>
                    <a href="?mod=users&controller=login&action=logout" class="dropdown-item ai-icon">
                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                        <span class="ms-2">Đăng xuất</span>
                    </a>
                </div>
            </li>
            <li>
                <a class="ai-icon" href="?" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="?mod=pages&action=about" aria-expanded="false">
                    <i class="flaticon-022-copy"></i>
                    <span class="nav-text">Trang</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="?mod=pages&action=about">Giới thiệu</a></li>
                    <li><a href="?mod=pages&action=contact">Liên hệ</a></li>
                    <li><a href="?mod=pages&action=listFeedback">Phản hồi</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="?mod=post&action=listPost" aria-expanded="false">
                    <i class="flaticon-063-pencil"></i>
                    <span class="nav-text">Bài viết</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="?mod=post&action=addPost">Thêm bài</a></li>
                    <li><a href="?mod=post&action=listPost">Danh sách bài viết</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="?mod=product&action=listProduct" aria-expanded="false">
                    <i class="fab fa-product-hunt"></i>
                    <span class="nav-text">Sản phẩm</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="?mod=product&action=addProduct">Thêm sản phẩm</a></li>
                    <li><a href="?mod=product&action=listProduct">Danh sách sản phẩm</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="?mod=order&action=listOrder" aria-expanded="false">
                    <i class="fa-brands fa-sellsy"></i>
                    <span class="nav-text">Bán hàng</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="?mod=order&action=listOrder">Đơn hàng</a></li>
                    <li><a href="?mod=order&action=listCustomer">Khách hàng</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="?mod=slider" aria-expanded="false">
                    <i class="fas fa-image"></i>
                    <span class="nav-text">Slider</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="?mod=slider&action=addSlider">Thêm slider</a></li>
                    <li><a href="?mod=slider&action=listSlider">Danh sách slider</a></li>
                </ul>
            </li>
            <li>
                <a href="?mod=users" class="has-arrow ai-icon" aria-expanded="false">
                    <i class="fas fa-user"></i>
                    <span class="nav-text">Tài khoản</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="?mod=users">Thông tin</a></li>
                    <li>
                        <a href="?mod=users&action=update&id=<?php echo $_SESSION['user_id'] ?>">
                            Cập nhật
                        </a>
                    </li>
                    <li>
                        <a href="?mod=users&action=newPass">Đổi mật khẩu</a> 
                    </li>
                    <li>
                        <a href="?mod=users&action=addUsers">Thêm tài khoản</a>
                    </li>
                    <li><a href="?mod=users&action=listUsers">Danh sách tài khoản</a></li>
                </ul>
            </li>
            <li>
                <a class="ai-icon" 
                    href="?mod=subscriber" 
                    aria-expanded="false">
                        <i class="fa-solid fa-thumbs-up"></i>
                        <span class="nav-text">Subscriber</span>
                </a>
            </li>
            <li>
                <a class="ai-icon" 
                    href="?mod=users&controller=login&action=logout" 
                    aria-expanded="false">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="nav-text">Đăng xuất</span>
                </a>
            </li>
        </ul>
        <div class="copyright">
            <p><strong class="text-primary">Tận tâm, uy tín, chất lượng</strong></p>
        </div>
    </div>
</div>