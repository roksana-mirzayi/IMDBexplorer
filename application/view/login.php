<!doctype html>
<html lang="fa-IR" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php $this->asset('bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/style.css') ?>">
</head>
<body>
<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
        <div class="card login-page-card">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="<?php $this->asset('image/people-watching-video-on-smartphon-gettyimages-youtube.jpg') ?>"
                         alt="login-page" class="login-page-card-img">
                </div>

                <div class="col-md-7">
                    <div class="card-body">
                        <div class="brand-wrapper">
                            <img src="<?php $this->asset('image/logo.png') ?>" alt="logo" class="logo">
                        </div>
                        <p class="login-page-card-description">ورود به سایت</p>

                        <form action="<?php $this->url('UserAuthentication/userLogin'); ?>" method="post">

                            <div class="form-group">
                                <label for="username" class="sr-only">Username</label>
                                <div class="inner-addon right-addon">
                                    <i class="fa fa-user"></i>
                                    <input type="username" name="username" id="username" class="form-control" placeholder="نام کاربری">
                                </div>

                            </div>

                            <div class="form-group mb-4">
                                <label for="password" class="sr-only">Password</label>
                                <div class="inner-addon right-addon">
                                    <i class="fa fa-lock"></i>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="رمز عبور">
                                </div>
                            </div>

                            <input name="login-page" id="login-page" class="btn btn-block login-page-btn mb-4" type="submit" value="ورود">

                        </form>

                        <a href="<?php $this->url('UserAuthentication/forgetPassword'); ?>" class="forgot-password-link">رمز عبور خود را فراموش کردید</a>
                        <p class="forget-password-card-footer-text"> حساب کاربری ندارید؟<a href="<?php $this->url('UserAuthentication/register'); ?>"
                                                                                           class="register">ثبت نام در
                                سایت</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>