<!DOCTYPE html>
<html lang="en" class="h-100">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>

        <!-- FAVICONS ICON -->
        <link rel="apple-touch-icon" sizes="57x57" href="./public/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="./public/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="./public/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="./public/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="./public/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="./public/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="./public/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="./public/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="./public/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="./public/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./public/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="./public/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./public/favicon/favicon-16x16.png">
        <link rel="manifest" href="./public/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="./public/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!-- CSS -->
        <link href="./public/css/style.css" rel="stylesheet">
    </head>
    <body class="vh-100">
        <div class="authincation h-100">
            <div class="container h-100 width-form">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-md-6">
                        <div class="authincation-content">
                            <div class="row no-gutters">
                                <div class="col-xl-12">
                                    <div class="auth-form">
                                        <div class="text-center mb-3">
                                            <img src="./public/imgs/logo-full.png" alt="Mtop" class="logo-full">
                                        </div>
                                        <h4 class="text-center pb-3 message-error">
                                            <?php echo form_error('account'); ?>
                                        </h4>
                                        <form action="" method="POST">
                                            <div class="mb-3">
                                                <label class="mb-1 label-login"><strong>Email</strong></label>
                                                <input 
                                                    type="email" name="email" 
                                                    class="form-control" 
                                                    placeholder="email@gmail.com" 
                                                    value="<?php if (!empty($_POST['email'])) echo $_POST['email'] ?>"
                                                >
                                                <span class="message-error"><?php echo form_error('email'); ?></span>
                                            </div>
                                            <div class="mb-3">
                                                <label class="mb-1 label-login"><strong>Password</strong></label>
                                                <input type="password" name="password" class="form-control" placeholder="Password">
                                                <span class="message-error"><?php echo form_error('password'); ?></span>
                                            </div>
                                            <div class="row d-flex justify-content-between mt-4 mb-2">
                                                <div class="mb-3">
                                                    <div class="form-check custom-checkbox ms-1">
                                                        <input type="checkbox" class="form-check-input" id="basic_checkbox_1">
                                                        <label class="form-check-label" for="basic_checkbox_1">
                                                            Ghi nhớ tôi
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <a href="#!">Quên mật khẩu?</a>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" name="btn_login" class="btn btn-primary btn-block btn-login">
                                                    Đăng nhập
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>