<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/main.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/responsive.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/child.css">
</head>

<body <?php body_class(); ?>>
    <div id="wallpaper">
        <header>
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <p>Chào mừng đến với shop bán hàng!</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="top-menu">
                                <?php wp_nav_menu(
                                    array(
                                        'theme_location' => 'header-top',
                                        'container' => 'false',
                                        'menu_id' => 'header-top',
                                        'menu_class' => 'header-top'
                                    )
                                ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3 order-md-0 order-0">
                            <div class="logo">
                                <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>"></a>
                                <h1><?php bloginfo('name'); ?></h1>
                            </div>
                        </div>
                        <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 order-md-1 order-2">
                            <div class="form-seach-product">
                                <form action="/" method="GET" role="form">
                                    <select name="" id="input" class="form-control" required="required">
                                        <option value="">Chọn danh mục</option>
                                        <option value="1">Điện thoại</option>
                                        <option value="3">Lap top</option>
                                    </select>

                                    <div class="input-seach">
                                        <input type="text" name="s" id="" class="form-control">
                                        <button type="submit" class="btn-search-pro"><i class="fa fa-search"></i></button>
                                    </div>
                                    <div class="clear"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3 order-md-2 order-1" style="text-align: right">
                            <a href="<?php bloginfo('url'); ?>/cart" class="icon-cart">
                                <div class="icon">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </div>
                                <div class="info-cart">
                                    <p>Giỏ hàng</p>
                                </div>
                                <span class="clear"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-menu-header">
                <div class="container">
                    <div id="nav-menu">
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'header-main',
                                'container' => 'false',
                                'menu_id' => 'header-main',
                                'menu_class' => 'header-main'
                            )
                        ); ?>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </header>
        <?php if (!is_home()) { ?>
            <div class="breadcrumbs">
                <div class="container">
                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                    }
                    ?>
                </div>
            </div>

        <?php } ?>