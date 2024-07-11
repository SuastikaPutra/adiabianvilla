<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Hotale &#8211; Hotel HTML Template</title>

    <link rel="stylesheet"  href="<?php echo base_url('assets_home/js/plugins/goodlayers-core/plugins/fontawesome/font-awesome.css') ?>" type="text/css" media="all" />
    <link rel="stylesheet"  href="<?php echo base_url('assets_home/js/plugins/goodlayers-core/plugins/fa5/fa5.css')?>" type="text/css" media="all" />
    <link rel="stylesheet"  href="<?php echo base_url('assets_home/js/plugins/goodlayers-core/plugins/elegant/elegant-font.css')?>" type="text/css" media="all" />
    <link rel="stylesheet"  href="<?php echo base_url('assets_home/js/plugins/goodlayers-core/plugins/ionicons/ionicons.css')?>" type="text/css" media="all" />
    <link rel="stylesheet"  href="<?php echo base_url('assets_home/js/plugins/goodlayers-core/plugins/simpleline/simpleline.css')?>" type="text/css" media="all" />
    <link rel="stylesheet"  href="<?php echo base_url('assets_home/js/plugins/goodlayers-core/plugins/gdlr-custom-icon/gdlr-custom-icon.css')?>" type="text/css" media="all" />
    <link rel="stylesheet"  href="<?php echo base_url('assets_home/js/plugins/goodlayers-core/plugins/style.css')?>" type="text/css" media="all" />
    <link rel="stylesheet"  href="<?php echo base_url('assets_home/js/plugins/goodlayers-core/include/css/page-builder.css')?>" type="text/css" media="all" />
    <link rel="stylesheet"  href="<?php echo base_url('assets_home/js/plugins/tourmaster/tourmaster.css')?>" type="text/css" media="all" />
    <link rel="stylesheet"  href="<?php echo base_url('assets_home/css/tourmaster-global-style-custom.css')?>" type="text/css" media="all" />
    <link rel="stylesheet"  href="<?php echo base_url('assets_home/js/plugins/tourmaster/room/tourmaster-room.css')?>" type="text/css" media="all" />
    <link rel="stylesheet"  href="<?php echo base_url('assets_home/css/tourmaster-room-style-custom.css?1653843108&#038;ver=6.0.1')?>" type="text/css" media="all" />
    <link rel="stylesheet"  href="<?php echo base_url('assets_home/css/style-core.css')?>" type="text/css" media="all" />
    <link rel="stylesheet"  href="<?php echo base_url('assets_home/css/hotale-style-custom.css?1653801118&#038;ver=6.0.1')?>" type="text/css" media="all" />

    <link
        rel="stylesheet"
        id="gdlr-core-google-font-css"
        href="https://fonts.googleapis.com/css?family=Jost%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2Citalic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CAmiri%3Aregular%2Citalic%2C700%2C700italic%7CAllison%3Aregular&#038;subset=cyrillic%2Clatin%2Clatin-ext%2Carabic%2Cvietnamese&#038;ver=6.0.1"
        type="text/css"
        media="all"
    />

</head>

<body class="home page-template-default page page-id-14980 theme-hotale gdlr-core-body tourmaster-body woocommerce-no-js hotale-body hotale-body-front hotale-full hotale-with-sticky-navigation hotale-blockquote-style-3 gdlr-core-link-to-lightbox" data-home-url="index.html" >

    <div class="hotale-mobile-header-wrap">
        <div class="hotale-mobile-header hotale-header-background hotale-style-slide hotale-sticky-mobile-navigation" id="hotale-mobile-header">
            <div class="hotale-mobile-header-container hotale-container clearfix">
                <div class="hotale-logo hotale-item-pdlr">
                    <div class="hotale-logo-inner">
                        <a class="hotale-fixed-nav-logo" href="index.html">
                            <img
                                src="<?php echo base_url('assets_home/upload/logo-nx1.png')?>"
                                alt=""
                                width="147"
                                height="37"
                                title="logo-nx1"
                            />
                        </a>
                        <a class="hotale-orig-logo" href="index.html">
                            <img src="<?php echo base_url('assets_home/upload/logo-nx2-1.png')?>" alt="" width="294" height="74" title="logo-nx2" />
                        </a>
                    </div>
                </div>
                <div class="hotale-mobile-menu-right">

                	<!-- LOGIN & Register Forms. -->

                    <div class="tourmaster-user-top-bar tourmaster-guest tourmaster-style-2" data-redirect="index.html" data-ajax-url="#">
                        <span class="tourmaster-user-top-bar-login" data-tmlb="login"><i class="icon_lock_alt"></i><span class="tourmaster-text">Login</span></span>
                        <div class="tourmaster-lightbox-content-wrap" data-tmlb-id="login">
                            <div class="tourmaster-lightbox-head">
                                <h3 class="tourmaster-lightbox-title">Login</h3>
                                <i class="tourmaster-lightbox-close icon_close"></i>
                            </div>
                            <div class="tourmaster-lightbox-content">
                                <form class="tourmaster-login-form tourmaster-form-field tourmaster-with-border" method="post" action="#">
                                    <div class="tourmaster-login-form-fields clearfix">
                                        <p class="tourmaster-login-user">
                                            <label>Username or E-Mail</label>
                                            <input type="text" name="log" />
                                        </p>
                                        <p class="tourmaster-login-pass">
                                            <label>Password</label>
                                            <input type="password" name="pwd" />
                                        </p>
                                    </div>

                                    <p class="tourmaster-login-submit">
                                        <input type="submit" name="wp-submit" class="tourmaster-button" value="Sign In!" />
                                    </p>
                                    <p class="tourmaster-login-lost-password">
                                        <a href="#">Forget Password?</a>
                                    </p>

                                </form>

                                <div class="tourmaster-login-bottom">
                                    <h3 class="tourmaster-login-bottom-title">Do not have an account?</h3>
                                    <a class="tourmaster-login-bottom-link" href="register.html">Create an Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hotale-mobile-menu">
                        <a class="hotale-mm-menu-button hotale-mobile-menu-button hotale-mobile-button-hamburger" href="#hotale-mobile-menu"><span></span></a>
                        <div class="hotale-mm-menu-wrap hotale-navigation-font" id="hotale-mobile-menu" data-slide="right">
                            <ul id="menu-main-navigation" class="m-menu">
                                <li class="menu-item menu-item-home current-menu-item  menu-item-has-children" >
                                    <a href="index.html" aria-current="page">Home</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-home current-menu-item page_item page-item-14980 current_page_item">
                                            <a href="index.html" aria-current="page">Home &#8211; Resort 1</a>
                                        </li>
                                        <li class="menu-item">
                                            <a target="_blank" rel="noopener" href="../resort2/index.html">Home &#8211; Resort 2</a>
                                        </li>
                                        <li class="menu-item">
                                            <a target="_blank" rel="noopener" href="../hotel1/index.html">Home &#8211; Hotel 1</a>
                                        </li>
                                        <li class="menu-item">
                                            <a target="_blank" rel="noopener" href="../hotel2/index.html">Home &#8211; Hotel 2</a>
                                        </li>
                                        <li class="menu-item">
                                            <a target="_blank" rel="noopener" href="../apartment/index.html">Home &#8211; Apartment</a>
                                        </li>
                                        <li class="menu-item">
                                            <a target="_blank" rel="noopener" href="../apartment2/index.html">Home &#8211; Apartment 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="about-us.html">About Us</a></li>
                                        <li class="menu-item"><a href="about-us-2.html">About Us 2</a></li>
                                        <li class="menu-item"><a href="about-us-3.html">About Us 3</a></li>
                                        <li class="menu-item"><a href="our-team.html">Our Team</a></li>
                                        <li class="menu-item"><a href="hotel-review.html">Hotel Review</a></li>
                                        <li class="menu-item"><a href="faq.html">FAQ</a></li>
                                        <li class="menu-item"><a href="gallery.html">Gallery</a></li>
                                        <li class="menu-item"><a href="price-table.html">Price Table</a></li>
                                        <li class="menu-item"><a href="maintenance.html">Maintenance</a></li>
                                        <li class="menu-item"><a href="coming-soon.html">Coming Soon</a></li>
                                        <li class="menu-item"><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="room-grid-style-1.html">Rooms</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="room-grid-style-1.html">Room Grid Style 1</a></li>
                                        <li class="menu-item"><a href="room-grid-style-2.html">Room Grid Style 2</a></li>
                                        <li class="menu-item"><a href="room-grid-style-3.html">Room Grid Style 3</a></li>
                                        <li class="menu-item"><a href="room-grid-style-4.html">Room Grid Style 4</a></li>
                                        <li class="menu-item"><a href="room-modern-style.html">Room Modern Style</a></li>
                                        <li class="menu-item"><a href="room-side-thumbnail.html">Room Side Thumbnail</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="room-search.html">Reservation</a></li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="blog-full-right-sidebar.html">Blog</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-has-children">
                                            <a href="blog-3-columns-with-frame.html">Blog Columns</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="blog-2-columns.html">Blog 2 Columns</a></li>
                                                <li class="menu-item">
                                                    <a href="blog-2-columns-with-frame.html">Blog 2 Columns With Frame</a>
                                                </li>
                                                <li class="menu-item"><a href="blog-3-columns.html">Blog 3 Columns</a></li>
                                                <li class="menu-item">
                                                    <a href="blog-3-columns-with-frame.html">Blog 3 Columns With Frame</a>
                                                </li>
                                                <li class="menu-item"><a href="blog-4-columns.html">Blog 4 Columns</a></li>
                                                <li class="menu-item">
                                                    <a href="blog-4-columns-with-frame.html">Blog 4 Columns With Frame</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="blog-full-right-sidebar.html">Blog Full</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="blog-full-right-sidebar.html">Blog Full Right Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-full-right-sidebar-with-frame.html">Blog Full Right Sidebar With Frame</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-full-left-sidebar.html">Blog Full Left Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-full-left-sidebar-with-frame.html">Blog Full Left Sidebar With Frame</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-full-both-sidebar.html">Blog Full Both Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-full-both-sidebar-with-frame.html">Blog Full Both Sidebar With Frame</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="blog-grid-3-columns.html">Blog Grid</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="blog-grid-2-columns.html">Blog Grid 2 Columns</a></li>
                                                <li class="menu-item">
                                                    <a href="blog-grid-2-columns-no-space.html">Blog Grid 2 Columns No Space</a>
                                                </li>
                                                <li class="menu-item"><a href="blog-grid-3-columns.html">Blog Grid 3 Columns</a></li>
                                                <li class="menu-item">
                                                    <a href="blog-grid-3-columns-no-space.html">Blog Grid 3 Columns No Space</a>
                                                </li>
                                                <li class="menu-item"><a href="blog-grid-4-columns.html">Blog Grid 4 Columns</a></li>
                                                <li class="menu-item">
                                                    <a href="blog-grid-4-columns-no-space.html">Blog Grid 4 Columns No Space</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="single-blog.html">Single Posts</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hotale-body-outer-wrapper">
        <div class="hotale-body-wrapper clearfix hotale-with-transparent-header hotale-with-frame">
            <div class="hotale-header-background-transparent">
                <div class="hotale-top-bar">
                    <div class="hotale-top-bar-background"></div>
                    <div class="hotale-top-bar-container hotale-container">
                        <div class="hotale-top-bar-container-inner clearfix">
                            <div class="hotale-top-bar-left hotale-item-pdlr">
                                <div class="hotale-top-bar-left-text">
                                    <i class="icon-phone" style="font-size: 15px; color: #ffffff; margin-right: 10px;"></i>1-634-567-34
                                    <i class="icon-envelope" style="font-size: 15px; color: #ffffff; margin-left: 25px; margin-right: 10px;"></i>
                                    <a href="#">test@gmail.com</a>
                                </div>
                            </div>
                            <div class="hotale-top-bar-right hotale-item-pdlr">
                                <div
                                    class="tourmaster-user-top-bar tourmaster-guest tourmaster-style-2"
                                    data-redirect="index.html"
                                    data-ajax-url="#"
                                >
                                    <span class="tourmaster-user-top-bar-login" data-tmlb="login"><i class="icon_lock_alt"></i><span class="tourmaster-text">Login</span></span>
                                    <div class="tourmaster-lightbox-content-wrap" data-tmlb-id="login">
                                        <div class="tourmaster-lightbox-head">
                                            <h3 class="tourmaster-lightbox-title">Login</h3>
                                            <i class="tourmaster-lightbox-close icon_close"></i>
                                        </div>
                                        <div class="tourmaster-lightbox-content">
                                            <form class="tourmaster-login-form tourmaster-form-field tourmaster-with-border" method="post" action="wp-login.php">
                                                <div class="tourmaster-login-form-fields clearfix">
                                                    <p class="tourmaster-login-user">
                                                        <label>Username or E-Mail</label>
                                                        <input type="text" name="log" />
                                                    </p>
                                                    <p class="tourmaster-login-pass">
                                                        <label>Password</label>
                                                        <input type="password" name="pwd" />
                                                    </p>
                                                </div>

                                                <p class="tourmaster-login-submit">
                                                    <input type="submit" name="wp-submit" class="tourmaster-button" value="Sign In!" />
                                                </p>
                                                <p class="tourmaster-login-lost-password">
                                                    <a href="#">Forget Password?</a>
                                                </p>

                                            </form>

                                            <div class="tourmaster-login-bottom">
                                                <h3 class="tourmaster-login-bottom-title">Do not have an account?</h3>
                                                <a class="tourmaster-login-bottom-link" href="register.html">Create an Account</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <header class="hotale-header-wrap hotale-header-style-plain hotale-style-center-menu hotale-sticky-navigation hotale-style-slide" data-navigation-offset="75">
                    <div class="hotale-header-background"></div>
                    <div class="hotale-header-container hotale-container">
                        <div class="hotale-header-container-inner clearfix">
                            <div class="hotale-logo hotale-item-pdlr">
                                <div class="hotale-logo-inner">
                                    <a class="hotale-fixed-nav-logo" href="index.html">
                                        <img
                                            src="<?php echo base_url('assets_home/upload/logo-nx1.png')?>"
                                            alt=""
                                            width="147"
                                            height="37"
                                            title="logo-nx1"
                                        />
                                    </a>
                                    <a class="hotale-orig-logo" href="index.html">
                                        <img
                                            src="<?php echo base_url('assets_home/upload/logo-nx1.png')?>"
                                            alt=""
                                            width="147"
                                            height="37"
                                            title="logo-nx1"
                                        />
                                    </a>
                                </div>
                            </div>
                            <div class="hotale-navigation hotale-item-pdlr clearfix">
                                <div class="hotale-main-menu" id="hotale-main-menu">
                                    <ul id="menu-main-navigation-1" class="sf-menu">
                                        <li
                                            class="menu-item menu-item-home current-menu-item  menu-item-has-children hotale-normal-menu"
                                        >
                                            <a href="index.html" class="sf-with-ul-pre">Home</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-home current-menu-item page_item page-item-14980 current_page_item" data-size="60">
                                                    <a href="index.html">Home &#8211; Resort 1</a>
                                                </li>
                                                <li class="menu-item" data-size="60">
                                                    <a target="_blank" href="../resort2/index.html">Home &#8211; Resort 2</a>
                                                </li>
                                                <li class="menu-item" data-size="60">
                                                    <a target="_blank" href="../hotel1/index.html">Home &#8211; Hotel 1</a>
                                                </li>
                                                <li class="menu-item" data-size="60">
                                                    <a target="_blank" href="../hotel2/index.html">Home &#8211; Hotel 2</a>
                                                </li>
                                                <li class="menu-item" data-size="60">
                                                    <a target="_blank" href="../apartment/index.html">Home &#8211; Apartment</a>
                                                </li>
                                                <li class="menu-item" data-size="60">
                                                    <a target="_blank" href="../apartment2/index.html">Home &#8211; Apartment 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children hotale-normal-menu">
                                            <a href="#" class="sf-with-ul-pre">Pages</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item" data-size="60"><a href="about-us.html">About Us</a></li>
                                                <li class="menu-item" data-size="60"><a href="about-us-2.html">About Us 2</a></li>
                                                <li class="menu-item" data-size="60"><a href="about-us-3.html">About Us 3</a></li>
                                                <li class="menu-item" data-size="60"><a href="our-team.html">Our Team</a></li>
                                                <li class="menu-item" data-size="60"><a href="hotel-review.html">Hotel Review</a></li>
                                                <li class="menu-item" data-size="60"><a href="faq.html">FAQ</a></li>
                                                <li class="menu-item" data-size="60"><a href="gallery.html">Gallery</a></li>
                                                <li class="menu-item" data-size="60"><a href="price-table.html">Price Table</a></li>
                                                <li class="menu-item" data-size="60"><a href="maintenance.html">Maintenance</a></li>
                                                <li class="menu-item" data-size="60"><a href="coming-soon.html">Coming Soon</a></li>
                                                <li class="menu-item" data-size="60"><a href="404.html">404 Page</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children hotale-normal-menu">
                                            <a href="room-grid-style-1.html" class="sf-with-ul-pre">Rooms</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item" data-size="60">
                                                    <a href="room-grid-style-1.html">Room Grid Style 1</a>
                                                </li>
                                                <li class="menu-item" data-size="60">
                                                    <a href="room-grid-style-2.html">Room Grid Style 2</a>
                                                </li>
                                                <li class="menu-item" data-size="60">
                                                    <a href="room-grid-style-3.html">Room Grid Style 3</a>
                                                </li>
                                                <li class="menu-item" data-size="60">
                                                    <a href="room-grid-style-4.html">Room Grid Style 4</a>
                                                </li>
                                                <li class="menu-item" data-size="60">
                                                    <a href="room-modern-style.html">Room Modern Style</a>
                                                </li>
                                                <li class="menu-item" data-size="60">
                                                    <a href="room-side-thumbnail.html">Room Side Thumbnail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item hotale-normal-menu">
                                            <a href="room-search.html">Reservation</a>
                                        </li>
                                        <li class="menu-item menu-item-has-children hotale-normal-menu">
                                            <a href="blog-full-right-sidebar.html" class="sf-with-ul-pre">Blog</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-has-children" data-size="60">
                                                    <a href="blog-3-columns-with-frame.html" class="sf-with-ul-pre">Blog Columns</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="blog-2-columns.html">Blog 2 Columns</a></li>
                                                        <li class="menu-item">
                                                            <a href="blog-2-columns-with-frame.html">Blog 2 Columns With Frame</a>
                                                        </li>
                                                        <li class="menu-item"><a href="blog-3-columns.html">Blog 3 Columns</a></li>
                                                        <li class="menu-item">
                                                            <a href="blog-3-columns-with-frame.html">Blog 3 Columns With Frame</a>
                                                        </li>
                                                        <li class="menu-item"><a href="blog-4-columns.html">Blog 4 Columns</a></li>
                                                        <li class="menu-item">
                                                            <a href="blog-4-columns-with-frame.html">Blog 4 Columns With Frame</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children" data-size="60">
                                                    <a href="blog-full-right-sidebar.html" class="sf-with-ul-pre">Blog Full</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item">
                                                            <a href="blog-full-right-sidebar.html">Blog Full Right Sidebar</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="blog-full-right-sidebar-with-frame.html">Blog Full Right Sidebar With Frame</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="blog-full-left-sidebar.html">Blog Full Left Sidebar</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="blog-full-left-sidebar-with-frame.html">Blog Full Left Sidebar With Frame</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="blog-full-both-sidebar.html">Blog Full Both Sidebar</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="blog-full-both-sidebar-with-frame.html">Blog Full Both Sidebar With Frame</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children" data-size="60">
                                                    <a href="blog-grid-3-columns.html" class="sf-with-ul-pre">Blog Grid</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item">
                                                            <a href="blog-grid-2-columns.html">Blog Grid 2 Columns</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="blog-grid-2-columns-no-space.html">Blog Grid 2 Columns No Space</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="blog-grid-3-columns.html">Blog Grid 3 Columns</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="blog-grid-3-columns-no-space.html">Blog Grid 3 Columns No Space</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="blog-grid-4-columns.html">Blog Grid 4 Columns</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="blog-grid-4-columns-no-space.html">Blog Grid 4 Columns No Space</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item" data-size="60"><a href="single-blog.html" class="sf-with-ul-pre">Single Posts</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-ite hotale-normal-menu"><a href="contact.html" class="sf-with-ul-pre">Contact</a></li>
                                    </ul>
                                    <div class="hotale-navigation-slide-bar hotale-navigation-slide-bar-style-2 hotale-left" data-size-offset="0" data-width="19px" id="hotale-navigation-slide-bar"></div>
                                </div>
                                <div class="hotale-main-menu-right-wrap clearfix hotale-item-mglr hotale-navigation-top">
                                    <div class="tourmaster-currency-switcher">
                                        <span class="tourmaster-head"><span>USD</span><i class="fa fa-sort-down"></i></span>
                                        <div class="tourmaster-currency-switcher-inner">
                                            <div class="tourmaster-currency-switcher-content">
                                                <ul>
                                                    <li><a href="#">EUR</a></li>
                                                    <li><a href="#">CHF</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tourmaster-room-navigation-checkout-wrap">
                                        <a
                                            id="tourmaster-room-navigation-checkout-button"
                                            class="tourmaster-room-navigation-checkout-button"
                                            href="room-search.html"
                                            data-checkout-label="Check Out"
                                            data-label="Book Now"
                                        >
                                            Book Now<span class="tourmaster-count">0</span>
                                        </a>
                                        <div class="tourmaster-room-cart-item-wrap">
                                            <div class="tourmaster-room-cart-items">
                                                <ul></ul>
                                                <a class="tourmaster-checkout-button" href="#">Check Out</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- hotale-navigation -->
                        </div>
                        <!-- hotale-header-inner -->
                    </div>
                    <!-- hotale-header-container -->
                </header>
                <!-- header -->
            </div>
            <div class="hotale-page-wrapper" id="hotale-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div
                        class="gdlr-core-pbf-wrapper gdlr-core-wrapper-full-height gdlr-core-js gdlr-core-full-height-center"
                        style="margin: 0px 0px 0px 0px; padding: 280px 0px 80px 0px; border-radius: 20px 20px 20px 20px; -moz-border-radius: 20px 20px 20px 20px; -webkit-border-radius: 20px 20px 20px 20px;"
                        id="gdlr-core-wrapper-1"
                        data-decrease-height="40px"
                    >
                        <div class="gdlr-core-pbf-background-wrap" style="border-radius: 20px 20px 20px 20px; -moz-border-radius: 20px 20px 20px 20px; -webkit-border-radius: 20px 20px 20px 20px;">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="background-image: url(upload/home-resort-hero-bg.jpg); background-size: cover; background-position: center;"
                                data-parallax-speed="0"
                            ></div>
                        </div>
                        <div
                            class="gdlr-core-page-builder-wrapper-top-gradient"
                            style="
                                height: 344px;
                                opacity: 1;
                                background: linear-gradient(rgba(0, 0, 0, 100), rgba(0, 0, 0, 0));
                                -moz-background: linear-gradient(rgba(0, 0, 0, 100), rgba(0, 0, 0, 0));
                                -o-background: linear-gradient(rgba(0, 0, 0, 100), rgba(0, 0, 0, 0));
                                -webkit-background: linear-gradient(rgba(0, 0, 0, 100), rgba(0, 0, 0, 0));
                                border-radius: 20px 20px 20px 20px;
                                -moz-border-radius: 20px 20px 20px 20px;
                                -webkit-border-radius: 20px 20px 20px 20px;
                            "
                        ></div>
                        <div
                            class="gdlr-core-page-builder-wrapper-bottom-gradient"
                            style="
                                height: 338px;
                                opacity: 1;
                                background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 100));
                                -moz-background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 100));
                                -o-background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 100));
                                -webkit-background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 100));
                                border-radius: 20px 20px 20px 20px;
                                -moz-border-radius: 20px 20px 20px 20px;
                                -webkit-border-radius: 20px 20px 20px 20px;
                            "
                        ></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js gdlr-core-full-height-content">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr title-rotate" id="gdlr-core-title-item-1">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3
                                                            class="gdlr-core-title-item-title gdlr-core-skin-title hotale-additional-font class-test"
                                                            style="font-size: 126px; font-weight: 400; letter-spacing: 0px; text-transform: none; color: #ffffff;"
                                                        >
                                                            Book Your Vacation<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 22px; font-weight: 400; text-transform: none; color: #ffffff;"><p>Explore new experience with Hotale</p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-1">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 270px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="tourmaster-room-search-item tourmaster-item-pdlr clearfix">
                                                    <form
                                                        class="tourmaster-room-search-form tourmaster-radius-round tourmaster-style-box tourmaster-align-horizontal"
                                                        action="room-search.html"
                                                        method="get"
                                                    >
                                                        <div class="tourmaster-room-search-size10">
                                                            <div class="tourmaster-room-date-selection tourmaster-horizontal" data-avail-date="">
                                                                <div class="tourmaster-custom-start-date gdlr-core-skin-e-background">
                                                                    <div class="tourmaster-head gdlr-core-skin-e-content">Check In</div>
                                                                    <div class="tourmaster-tail gdlr-core-skin-e-content">Jul 28, 2022</div>
                                                                    <input type="hidden" name="start_date" value="2022-07-28" />
                                                                </div>
                                                                <div class="tourmaster-custom-end-date gdlr-core-skin-e-background">
                                                                    <div class="tourmaster-head gdlr-core-skin-e-content">Check Out</div>
                                                                    <div class="tourmaster-tail gdlr-core-skin-e-content">Jul 29, 2022</div>
                                                                    <input type="hidden" name="end_date" value="2022-07-29" />
                                                                </div>
                                                                <div class="tourmaster-custom-datepicker-wrap" data-date-format="d M yy">
                                                                    <i class="tourmaster-custom-datepicker-close icon_close"></i>
                                                                    <div class="tourmaster-custom-datepicker-title"></div>
                                                                    <div class="tourmaster-custom-datepicker-calendar"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tourmaster-room-size2">
                                                            <div class="tourmaster-room-amount-selection">
                                                                <div class="tourmaster-custom-amount-display gdlr-core-skin-e-background">
                                                                    <div class="tourmaster-head gdlr-core-skin-e-content">Room</div>
                                                                    <div class="tourmaster-tail gdlr-core-skin-e-content"><span class="tourmaster-space"></span>1</div>
                                                                </div>
                                                                <div class="tourmaster-custom-amount-selection-wrap">
                                                                    <div class="tourmaster-custom-amount-selection-item clearfix">
                                                                        <div class="tourmaster-head">Room</div>
                                                                        <div class="tourmaster-tail">
                                                                            <span class="tourmaster-minus"><i class="icon_minus-06"></i></span><span class="tourmaster-amount">1</span>
                                                                            <span class="tourmaster-plus"><i class="icon_plus"></i></span>
                                                                        </div>
                                                                        <input type="hidden" name="room_amount" value="1" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tourmaster-room-search-size5">
                                                            <div class="tourmaster-room-amount-selection">
                                                                <div class="tourmaster-custom-amount-display gdlr-core-skin-e-background">
                                                                    <div class="tourmaster-head gdlr-core-skin-e-content">Guests</div>
                                                                    <div class="tourmaster-tail gdlr-core-skin-e-content"><span class="tourmaster-space"></span>Adults 2<span class="tourmaster-space"></span>Children 0</div>
                                                                </div>
                                                                <div class="tourmaster-custom-amount-selection-wrap">
                                                                    <div class="tourmaster-custom-amount-selection-item clearfix" data-label="Adults">
                                                                        <div class="tourmaster-head">Adults</div>
                                                                        <div class="tourmaster-tail">
                                                                            <span class="tourmaster-minus"><i class="icon_minus-06"></i></span><span class="tourmaster-amount">2</span>
                                                                            <span class="tourmaster-plus"><i class="icon_plus"></i></span>
                                                                        </div>
                                                                        <input type="hidden" name="adult" value="2" />
                                                                    </div>
                                                                    <div class="tourmaster-custom-amount-selection-item clearfix" data-label="Children">
                                                                        <div class="tourmaster-head">Children</div>
                                                                        <div class="tourmaster-tail">
                                                                            <span class="tourmaster-minus"><i class="icon_minus-06"></i></span><span class="tourmaster-amount">0</span>
                                                                            <span class="tourmaster-plus"><i class="icon_plus"></i></span>
                                                                        </div>
                                                                        <input type="hidden" name="children" value="0" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tourmaster-room-search-size4 tourmaster-room-search-submit-wrap">
                                                            <input class="tourmaster-room-search-submit tourmaster-style-border" type="submit" value="Search Room" style="background: #ffffff; color: #ffffff; border-color: #ffffff;" />
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

                    <div class="gdlr-core-pbf-wrapper" style="padding: 105px 0px 36px 0px;" id="gdlr-core-wrapper-2">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" id="gdlr-core-column-2">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 30px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInLeft" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                    <div class="gdlr-core-text-box-item-content" style="text-transform: none; color: #0a0a0a;">
                                                        <p>
                                                            <span style="font-size: 55px; font-weight: 500; margin-right: 12px; letter-spacing: 4px;">5</span>
                                                            <span class="mmr30" style="font-size: 22px; font-weight: 400; margin-right: 80px; letter-spacing: 7px;">stars</span>
                                                            <span style="font-size: 55px; font-weight: 500; margin-right: 12px; letter-spacing: 4px;">25</span>
                                                            <span style="font-size: 22px; font-weight: 400; margin-right: 12px; letter-spacing: 7px;">rooms</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 34px; line-height: 1.4; font-weight: 400; letter-spacing: 5px; text-transform: none; color: #0a0a0a;">
                                                        <p>Our hotel is located in the heart of the New Forrest. A five stars lifestyle surrounded by the forest.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                    <a class="gdlr-core-button gdlr-core-button-transparent gdlr-core-left-align gdlr-core-button-with-border" href="#" id="gdlr-core-button-id-1">
                                                        <span class="gdlr-core-content">More About US<i class="gdlr-core-pos-right icon-arrow-right" style="font-size: 16px; color: #000000;"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-30" id="gdlr-core-column-3">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInRight" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdb gdlr-core-center-align" style="padding-bottom: 0px;">
                                                    <div
                                                        class="gdlr-core-image-item-wrap gdlr-core-media-image gdlr-core-image-item-style-round2 gdlr-core-image-item-style-round"
                                                        style="border-width: 0px; max-width: 550px; border-radius: 50px 0px 50px 0px; -moz-border-radius: 50px 0px 50px 0px; -webkit-border-radius: 50px 0px 50px 0px;"
                                                    >
                                                        <img src="<?php echo base_url('assets_home/upload/resort-swim.jpg')?>" alt="" width="1000" height="1130" title="resort-swim" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first gdlr-core-hide-in-mobile" id="gdlr-core-column-4">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="margin: -130px 0px 0px 0px; padding: 0px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image gdlr-core-image-item-style-rectangle" style="border-width: 0px; max-width: 1091px;">
                                                        <img src="<?php echo base_url('assets_home/upload/resort-group.png')?>" alt="" width="1381" height="672" title="resort-group" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="padding: 80px 0px 15px 0px;" id="gdlr-core-wrapper-3">
                        <div class="gdlr-core-pbf-background-wrap">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="background-image: url(upload/Square.png); background-repeat: no-repeat; background-position: top center;"
                                data-parallax-speed="0"
                            ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-5">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 0px 90px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" style="max-width: 760px;">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" id="gdlr-core-title-item-2">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3
                                                            class="gdlr-core-title-item-title gdlr-core-skin-title hotale-additional-font class-test"
                                                            style="font-size: 80px; font-weight: 400; letter-spacing: 0px; text-transform: none; color: #000000;"
                                                        >
                                                            Our Rooms.<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 0px;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 21px; font-weight: 400; letter-spacing: 0px; text-transform: none; color: #898989;">
                                                        <p>
                                                            A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence
                                                            in this spot, which was created for the bliss of soul.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-6">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="tourmaster-room-item clearfix tourmaster-room-item-style-grid" id="gdlr-core-room-1">
                                                    <div class="gdlr-core-flexslider flexslider gdlr-core-js-2" data-type="carousel" data-column="3" data-move="1" data-nav="navigation-outer" data-nav-parent="self" data-vcenter-nav="1">
                                                        <div class="gdlr-core-flexslider-custom-nav gdlr-core-style-navigation-outer gdlr-core-center-align" style="margin-top: -20px;">
                                                            <i class="icon-arrow-left flex-prev" style="color: #b5b5b5; font-size: 34px; left: -80px;"></i>
                                                            <i class="icon-arrow-right flex-next" style="color: #b5b5b5; font-size: 34px; right: -80px;"></i>
                                                        </div>
                                                        <ul class="slides">
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="tourmaster-room-grid tourmaster-grid-frame">
                                                                    <div
                                                                        class="tourmaster-room-grid-inner"
                                                                        style="
                                                                            box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            -moz-box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            -webkit-box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            border-radius: 20px;
                                                                            -moz-border-radius: 20px;
                                                                            -webkit-border-radius: 20px;
                                                                        "
                                                                    >
                                                                        <div class="tourmaster-room-thumbnail tourmaster-media-image gdlr-core-outer-frame-element tourmaster-with-price">
                                                                            <a href="single-room.html">
                                                                                <img
                                                                                    src="<?php echo base_url('assets_home/upload/andrew-neel-T0eb55DxDN4-unsplash-780x595.jpg')?>"
                                                                                    alt=""
                                                                                    width="780"
                                                                                    height="595"
                                                                                />
                                                                            </a>
                                                                            <div class="tourmaster-price-wrap tourmaster-with-bg" style="border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;">
                                                                                <span class="tourmaster-head">From</span><span class="tourmaster-price">$90</span><span class="tourmaster-tail"> / night</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tourmaster-room-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="room-item-82" style="padding-top: 45px; padding-bottom: 40px;">
                                                                            <h3 class="tourmaster-room-title gdlr-core-skin-title" style="text-transform: none;">
                                                                                <a href="single-room.html">Luxury Suite</a>
                                                                            </h3>
                                                                            <div class="tourmaster-info-wrap clearfix">
                                                                                <div class="tourmaster-info tourmaster-info-bed-type"><i class="gdlr-icon-double-bed2"></i><span class="tourmaster-tail">1 King Bed</span></div>
                                                                                <div class="tourmaster-info tourmaster-info-guest-amount"><i class="gdlr-icon-group"></i><span class="tourmaster-tail">4 Guests</span></div>
                                                                            </div>
                                                                            <a class="tourmaster-read-more tourmaster-type-text" href="single-room.html">
                                                                                Book Now<i class="icon-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="tourmaster-room-grid tourmaster-grid-frame">
                                                                    <div
                                                                        class="tourmaster-room-grid-inner"
                                                                        style="
                                                                            box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            -moz-box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            -webkit-box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            border-radius: 20px;
                                                                            -moz-border-radius: 20px;
                                                                            -webkit-border-radius: 20px;
                                                                        "
                                                                    >
                                                                        <div class="tourmaster-room-thumbnail tourmaster-media-image gdlr-core-outer-frame-element tourmaster-with-price">
                                                                            <a href="single-room.html">
                                                                                <img
                                                                                    src="<?php echo base_url('assets_home/upload/shop-slo-vhztm9QC0L0-unsplash-780x595.jpg')?>"
                                                                                    alt=""
                                                                                    width="780"
                                                                                    height="595"
                                                                                />
                                                                            </a>
                                                                            <div class="tourmaster-price-wrap tourmaster-with-bg" style="border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;">
                                                                                <span class="tourmaster-head">From</span><span class="tourmaster-price">$75</span><span class="tourmaster-tail"> / night</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tourmaster-room-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="room-item-82" style="padding-top: 45px; padding-bottom: 40px;">
                                                                            <h3 class="tourmaster-room-title gdlr-core-skin-title" style="text-transform: none;">
                                                                                <a href="single-room.html">Standard Deluxe</a>
                                                                            </h3>
                                                                            <div class="tourmaster-info-wrap clearfix">
                                                                                <div class="tourmaster-info tourmaster-info-bed-type"><i class="gdlr-icon-double-bed2"></i><span class="tourmaster-tail">2 Single Beds</span></div>
                                                                                <div class="tourmaster-info tourmaster-info-guest-amount"><i class="gdlr-icon-group"></i><span class="tourmaster-tail">6 Guests</span></div>
                                                                            </div>
                                                                            <a class="tourmaster-read-more tourmaster-type-text" href="single-room.html">
                                                                                Book Now<i class="icon-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="tourmaster-room-grid tourmaster-grid-frame">
                                                                    <div
                                                                        class="tourmaster-room-grid-inner"
                                                                        style="
                                                                            box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            -moz-box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            -webkit-box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            border-radius: 20px;
                                                                            -moz-border-radius: 20px;
                                                                            -webkit-border-radius: 20px;
                                                                        "
                                                                    >
                                                                        <div class="tourmaster-room-thumbnail tourmaster-media-image gdlr-core-outer-frame-element tourmaster-with-price tourmaster-with-ribbon">
                                                                            <a href="single-room.html">
                                                                                <img
                                                                                    src="<?php echo base_url('assets_home/upload/roberto-nickson-emqnSQwQQDo-unsplash-scaled-780x595.jpg')?>"
                                                                                    alt=""
                                                                                    width="780"
                                                                                    height="595"
                                                                                />
                                                                            </a>
                                                                            <div class="tourmaster-price-wrap tourmaster-with-bg" style="border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;">
                                                                                <span class="tourmaster-head">From</span><span class="tourmaster-price-discount">$250</span><span class="tourmaster-price">$200</span>
                                                                                <span class="tourmaster-tail"> / night</span>
                                                                            </div>
                                                                            <div class="tourmaster-ribbon">20% Off</div>
                                                                        </div>
                                                                        <div class="tourmaster-room-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="room-item-82" style="padding-top: 45px; padding-bottom: 40px;">
                                                                            <h3 class="tourmaster-room-title gdlr-core-skin-title" style="text-transform: none;">
                                                                                <a href="single-room.html">The Penthouse</a>
                                                                            </h3>
                                                                            <div class="tourmaster-info-wrap clearfix">
                                                                                <div class="tourmaster-info tourmaster-info-bed-type"><i class="gdlr-icon-double-bed2"></i><span class="tourmaster-tail">2 King Beds</span></div>
                                                                                <div class="tourmaster-info tourmaster-info-guest-amount"><i class="gdlr-icon-group"></i><span class="tourmaster-tail">6 Guests</span></div>
                                                                            </div>
                                                                            <a class="tourmaster-read-more tourmaster-type-text" href="single-room.html">
                                                                                Book Now<i class="icon-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="tourmaster-room-grid tourmaster-grid-frame">
                                                                    <div
                                                                        class="tourmaster-room-grid-inner"
                                                                        style="
                                                                            box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            -moz-box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            -webkit-box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            border-radius: 20px;
                                                                            -moz-border-radius: 20px;
                                                                            -webkit-border-radius: 20px;
                                                                        "
                                                                    >
                                                                        <div class="tourmaster-room-thumbnail tourmaster-media-image gdlr-core-outer-frame-element tourmaster-with-price">
                                                                            <a href="single-room.html">
                                                                                <img
                                                                                    src="<?php echo base_url('assets_home/upload/shutterstock_560973166-780x595.jpg')?>"
                                                                                    alt=""
                                                                                    width="780"
                                                                                    height="595"
                                                                                />
                                                                            </a>
                                                                            <div class="tourmaster-price-wrap tourmaster-with-bg" style="border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;">
                                                                                <span class="tourmaster-head">From</span><span class="tourmaster-price">$80</span><span class="tourmaster-tail"> / night</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tourmaster-room-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="room-item-82" style="padding-top: 45px; padding-bottom: 40px;">
                                                                            <h3 class="tourmaster-room-title gdlr-core-skin-title" style="text-transform: none;">
                                                                                <a href="single-room.html">Grand Suite Room</a>
                                                                            </h3>
                                                                            <div class="tourmaster-info-wrap clearfix">
                                                                                <div class="tourmaster-info tourmaster-info-bed-type"><i class="gdlr-icon-double-bed2"></i><span class="tourmaster-tail">1 King Bed</span></div>
                                                                                <div class="tourmaster-info tourmaster-info-guest-amount"><i class="gdlr-icon-group"></i><span class="tourmaster-tail">4 Guests</span></div>
                                                                            </div>
                                                                            <a class="tourmaster-read-more tourmaster-type-text" href="single-room.html">
                                                                                Book Now<i class="icon-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="tourmaster-room-grid tourmaster-grid-frame">
                                                                    <div
                                                                        class="tourmaster-room-grid-inner"
                                                                        style="
                                                                            box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            -moz-box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            -webkit-box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            border-radius: 20px;
                                                                            -moz-border-radius: 20px;
                                                                            -webkit-border-radius: 20px;
                                                                        "
                                                                    >
                                                                        <div class="tourmaster-room-thumbnail tourmaster-media-image gdlr-core-outer-frame-element tourmaster-with-price tourmaster-with-ribbon">
                                                                            <a href="single-room.html">
                                                                                <img
                                                                                    src="<?php echo base_url('assets_home/upload/andrea-davis-1uNh3B3ppl4-unsplash-780x595.jpg')?>"
                                                                                    alt=""
                                                                                    width="780"
                                                                                    height="595"
                                                                                />
                                                                            </a>
                                                                            <div class="tourmaster-price-wrap tourmaster-with-bg" style="border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;">
                                                                                <span class="tourmaster-head">From</span><span class="tourmaster-price-discount">$80</span><span class="tourmaster-price">$69</span>
                                                                                <span class="tourmaster-tail"> / night</span>
                                                                            </div>
                                                                            <div class="tourmaster-ribbon">15% Off</div>
                                                                        </div>
                                                                        <div class="tourmaster-room-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="room-item-82" style="padding-top: 45px; padding-bottom: 40px;">
                                                                            <h3 class="tourmaster-room-title gdlr-core-skin-title" style="text-transform: none;">
                                                                                <a href="single-room.html">Junior Suite Room</a>
                                                                            </h3>
                                                                            <div class="tourmaster-info-wrap clearfix">
                                                                                <div class="tourmaster-info tourmaster-info-bed-type"><i class="gdlr-icon-double-bed2"></i><span class="tourmaster-tail">1 Double Bed</span></div>
                                                                                <div class="tourmaster-info tourmaster-info-guest-amount"><i class="gdlr-icon-group"></i><span class="tourmaster-tail">3 Guests</span></div>
                                                                            </div>
                                                                            <a class="tourmaster-read-more tourmaster-type-text" href="single-room.html">
                                                                                Book Now<i class="icon-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="tourmaster-room-grid tourmaster-grid-frame">
                                                                    <div
                                                                        class="tourmaster-room-grid-inner"
                                                                        style="
                                                                            box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            -moz-box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            -webkit-box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            border-radius: 20px;
                                                                            -moz-border-radius: 20px;
                                                                            -webkit-border-radius: 20px;
                                                                        "
                                                                    >
                                                                        <div class="tourmaster-room-thumbnail tourmaster-media-image gdlr-core-outer-frame-element tourmaster-with-price">
                                                                            <a href="single-room.html">
                                                                                <img
                                                                                    src="<?php echo base_url('assets_home/upload/collov-home-design-LSpkE5OCD_8-unsplash-780x595.jpg')?>"
                                                                                    alt=""
                                                                                    width="780"
                                                                                    height="595"
                                                                                />
                                                                            </a>
                                                                            <div class="tourmaster-price-wrap tourmaster-with-bg" style="border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;">
                                                                                <span class="tourmaster-head">From</span><span class="tourmaster-price">$80</span><span class="tourmaster-tail"> / night</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tourmaster-room-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="room-item-82" style="padding-top: 45px; padding-bottom: 40px;">
                                                                            <h3 class="tourmaster-room-title gdlr-core-skin-title" style="text-transform: none;">
                                                                                <a href="single-room.html">Standard Room</a>
                                                                            </h3>
                                                                            <div class="tourmaster-info-wrap clearfix">
                                                                                <div class="tourmaster-info tourmaster-info-bed-type"><i class="gdlr-icon-double-bed2"></i><span class="tourmaster-tail">1 Double Bed</span></div>
                                                                                <div class="tourmaster-info tourmaster-info-guest-amount"><i class="gdlr-icon-group"></i><span class="tourmaster-tail">4 Guests</span></div>
                                                                            </div>
                                                                            <a class="tourmaster-read-more tourmaster-type-text" href="single-room.html">
                                                                                Book Now<i class="icon-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="tourmaster-room-grid tourmaster-grid-frame">
                                                                    <div
                                                                        class="tourmaster-room-grid-inner"
                                                                        style="
                                                                            box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            -moz-box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            -webkit-box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            border-radius: 20px;
                                                                            -moz-border-radius: 20px;
                                                                            -webkit-border-radius: 20px;
                                                                        "
                                                                    >
                                                                        <div class="tourmaster-room-thumbnail tourmaster-media-image gdlr-core-outer-frame-element tourmaster-with-price">
                                                                            <a href="single-room.html">
                                                                                <img
                                                                                    src="<?php echo base_url('assets_home/upload/shutterstock_324822821-780x595.jpg')?>"
                                                                                    alt=""
                                                                                    width="780"
                                                                                    height="595"
                                                                                />
                                                                            </a>
                                                                            <div class="tourmaster-price-wrap tourmaster-with-bg" style="border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;">
                                                                                <span class="tourmaster-head">From</span><span class="tourmaster-price">$180</span><span class="tourmaster-tail"> / night</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tourmaster-room-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="room-item-82" style="padding-top: 45px; padding-bottom: 40px;">
                                                                            <h3 class="tourmaster-room-title gdlr-core-skin-title" style="text-transform: none;">
                                                                                <a href="single-room.html">Family Special Room</a>
                                                                            </h3>
                                                                            <div class="tourmaster-info-wrap clearfix">
                                                                                <div class="tourmaster-info tourmaster-info-bed-type"><i class="gdlr-icon-double-bed2"></i><span class="tourmaster-tail">2 Double Beds</span></div>
                                                                                <div class="tourmaster-info tourmaster-info-guest-amount"><i class="gdlr-icon-group"></i><span class="tourmaster-tail">6 Guests</span></div>
                                                                            </div>
                                                                            <a class="tourmaster-read-more tourmaster-type-text" href="single-room.html">
                                                                                Book Now<i class="icon-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="tourmaster-room-grid tourmaster-grid-frame">
                                                                    <div
                                                                        class="tourmaster-room-grid-inner"
                                                                        style="
                                                                            box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            -moz-box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            -webkit-box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            border-radius: 20px;
                                                                            -moz-border-radius: 20px;
                                                                            -webkit-border-radius: 20px;
                                                                        "
                                                                    >
                                                                        <div class="tourmaster-room-thumbnail tourmaster-media-image gdlr-core-outer-frame-element tourmaster-with-price">
                                                                            <a href="single-room.html">
                                                                                <img
                                                                                    src="<?php echo base_url('assets_home/upload/paul-postema-mr0Dp231IEw-unsplash-780x595.jpg')?>"
                                                                                    alt=""
                                                                                    width="780"
                                                                                    height="595"
                                                                                />
                                                                            </a>
                                                                            <div class="tourmaster-price-wrap tourmaster-with-bg" style="border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;">
                                                                                <span class="tourmaster-head">From</span><span class="tourmaster-price">$75</span><span class="tourmaster-tail"> / night</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tourmaster-room-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="room-item-82" style="padding-top: 45px; padding-bottom: 40px;">
                                                                            <h3 class="tourmaster-room-title gdlr-core-skin-title" style="text-transform: none;">
                                                                                <a href="single-room.html">Premium Room</a>
                                                                            </h3>
                                                                            <div class="tourmaster-info-wrap clearfix">
                                                                                <div class="tourmaster-info tourmaster-info-bed-type"><i class="gdlr-icon-double-bed2"></i><span class="tourmaster-tail">2 Single Beds</span></div>
                                                                                <div class="tourmaster-info tourmaster-info-guest-amount"><i class="gdlr-icon-group"></i><span class="tourmaster-tail">4 Guests</span></div>
                                                                            </div>
                                                                            <a class="tourmaster-read-more tourmaster-type-text" href="single-room.html">
                                                                                Book Now<i class="icon-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="tourmaster-room-grid tourmaster-grid-frame">
                                                                    <div
                                                                        class="tourmaster-room-grid-inner"
                                                                        style="
                                                                            box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            -moz-box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            -webkit-box-shadow: 0 10px 45px rgba(10, 10, 10, 0.07);
                                                                            border-radius: 20px;
                                                                            -moz-border-radius: 20px;
                                                                            -webkit-border-radius: 20px;
                                                                        "
                                                                    >
                                                                        <div class="tourmaster-room-thumbnail tourmaster-media-image gdlr-core-outer-frame-element tourmaster-with-price tourmaster-with-ribbon">
                                                                            <a href="single-room.html">
                                                                                <img
                                                                                    src="<?php echo base_url('assets_home/upload/andrea-davis-1uNh3B3ppl4-unsplash-780x595.jpg')?>"
                                                                                    alt=""
                                                                                    width="780"
                                                                                    height="595"
                                                                                />
                                                                            </a>
                                                                            <div class="tourmaster-price-wrap tourmaster-with-bg" style="border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;">
                                                                                <span class="tourmaster-head">From</span><span class="tourmaster-price-discount">$150</span><span class="tourmaster-price">$105</span>
                                                                                <span class="tourmaster-tail"> / night</span>
                                                                            </div>
                                                                            <div class="tourmaster-ribbon">30% Off</div>
                                                                        </div>
                                                                        <div class="tourmaster-room-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="room-item-82" style="padding-top: 45px; padding-bottom: 40px;">
                                                                            <h3 class="tourmaster-room-title gdlr-core-skin-title" style="text-transform: none;">
                                                                                <a href="single-room.html">Deluxe Suite Room</a>
                                                                            </h3>
                                                                            <div class="tourmaster-info-wrap clearfix">
                                                                                <div class="tourmaster-info tourmaster-info-bed-type"><i class="gdlr-icon-double-bed2"></i><span class="tourmaster-tail">1 King Bed</span></div>
                                                                                <div class="tourmaster-info tourmaster-info-guest-amount"><i class="gdlr-icon-group"></i><span class="tourmaster-tail">4 Guests</span></div>
                                                                            </div>
                                                                            <a class="tourmaster-read-more tourmaster-type-text" href="single-room.html">
                                                                                Book Now<i class="icon-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-7">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 0px 90px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                                    <a
                                                        class="gdlr-core-button gdlr-core-button-transparent gdlr-core-center-align gdlr-core-button-with-border"
                                                        href="room-grid-style-1.html"
                                                        style="
                                                            font-size: 13px;
                                                            font-style: normal;
                                                            font-weight: 600;
                                                            letter-spacing: 4px;
                                                            color: #000000;
                                                            padding: 15px 0px 10px 0px;
                                                            text-transform: uppercase;
                                                            border-radius: 0px;
                                                            -moz-border-radius: 0px;
                                                            -webkit-border-radius: 0px;
                                                            border-width: 0px 0px 1px 0px;
                                                            border-color: #dadada;
                                                        "
                                                    >
                                                        <span class="gdlr-core-content">View All Rooms<i class="gdlr-core-pos-right icon-arrow-right" style="font-size: 16px; color: #000000;"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="padding: 50px 0px 200px 0px;" id="gdlr-core-wrapper-4">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-background-wrap" style="top: -70px;">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="background-image: url(upload/Group-36.jpg); background-repeat: no-repeat; background-position: top center;"
                                data-parallax-speed="0"
                            ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" style="max-width: 1000px;">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" id="gdlr-core-title-item-3">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3
                                                            class="gdlr-core-title-item-title gdlr-core-skin-title hotale-additional-font class-test"
                                                            style="font-size: 80px; font-weight: 400; letter-spacing: 0px; text-transform: none; color: #000000;"
                                                        >
                                                            Hotel Facilities.<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-8">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 0px 30px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" style="max-width: 760px;">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 0px;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 21px; font-weight: 400; letter-spacing: 0px; text-transform: none; color: #898989;">
                                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-12 gdlr-core-column-first" id="gdlr-core-column-9">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 70px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-item-pdlr">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image gdlr-core-image-item-style-rectangle" style="border-width: 0px; max-width: 65px;">
                                                        <img src="<?php echo base_url('assets_home/upload/Group-40.png')?>" alt="" width="130" height="110" title="Group 40" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 20px; font-weight: 500; letter-spacing: 0px; text-transform: none; color: #000000;">
                                                            Parking<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-12" id="gdlr-core-column-10">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 70px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInDown" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                                    <i class="gdlr-core-icon-item-icon gdlr-icon-safe-box1" style="color: #212121; font-size: 62px; min-width: 62px; min-height: 62px;"></i>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 20px; font-weight: 500; letter-spacing: 0px; text-transform: none; color: #000000;">
                                                            Safe<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-12" id="gdlr-core-column-11">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 70px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                                    <i class="gdlr-core-icon-item-icon gdlr-icon-swimming-pool1" style="color: #212121; font-size: 62px; min-width: 62px; min-height: 62px;"></i>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 20px; font-weight: 500; letter-spacing: 0px; text-transform: none; color: #000000;">
                                                            Swimming Pool<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-12" id="gdlr-core-column-12">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 70px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInDown" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                                    <i class="gdlr-core-icon-item-icon gdlr-icon-massage" style="color: #212121; font-size: 62px; min-width: 62px; min-height: 62px;"></i>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 20px; font-weight: 500; letter-spacing: 0px; text-transform: none; color: #000000;">
                                                            Spa<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-12" id="gdlr-core-column-13">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 70px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                                    <i class="gdlr-core-icon-item-icon gdlr-icon-weights" style="color: #212121; font-size: 64px; min-width: 64px; min-height: 64px;"></i>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 20px; font-weight: 500; letter-spacing: 0px; text-transform: none; color: #000000;">
                                                            Gym<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-12 gdlr-core-column-first" id="gdlr-core-column-14">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js"></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-12" id="gdlr-core-column-15">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 75px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInDown" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                                    <i class="gdlr-core-icon-item-icon gdlr-icon-wifi-signal" style="color: #212121; font-size: 65px; min-width: 65px; min-height: 65px;"></i>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 20px; font-weight: 500; letter-spacing: 0px; text-transform: none; color: #000000;">
                                                            Free Wifi<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-12" id="gdlr-core-column-16">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 75px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                                    <i class="gdlr-core-icon-item-icon gdlr-icon-breakfast" style="color: #212121; font-size: 65px; min-width: 65px; min-height: 65px;"></i>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 20px; font-weight: 500; letter-spacing: 0px; text-transform: none; color: #000000;">
                                                            Breakfast<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-12" id="gdlr-core-column-17">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 73px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                                    <i class="gdlr-core-icon-item-icon gdlr-icon-workspace" style="color: #212121; font-size: 67px; min-width: 67px; min-height: 67px;"></i>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 20px; font-weight: 500; letter-spacing: 0px; text-transform: none; color: #000000;">
                                                            Workspace<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-12" id="gdlr-core-column-18">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 70px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="gdlr-core-pbf-wrapper"
                        style="margin: -50px 0px 0px 0px; padding: 258px 0px 258px 0px; border-radius: 0px 60px 0px 60px; -moz-border-radius: 0px 60px 0px 60px; -webkit-border-radius: 0px 60px 0px 60px;"
                        id="gdlr-core-wrapper-5"
                    >
                        <div class="gdlr-core-pbf-background-wrap" style="border-radius: 0px 60px 0px 60px; -moz-border-radius: 0px 60px 0px 60px; -webkit-border-radius: 0px 60px 0px 60px;">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="background-image: url(upload/bg-roomm.jpg); background-size: cover; background-position: center;"
                                data-parallax-speed="0"
                            ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-item-pdlr">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image gdlr-core-image-item-style-rectangle" style="border-width: 0px; max-width: 90px;">
                                                        <a class="gdlr-core-lightgallery gdlr-core-js" href="https://www.youtube.com/watch?v=US7bGTUkBfg">
                                                            <img src="<?php echo base_url('assets_home/upload/play.png')?>" alt="" width="180" height="180" title="play" />
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="padding: 115px 0px 85px 0px;" id="gdlr-core-wrapper-6">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div
                                                    class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                                                    style="padding-bottom: 20px;"
                                                    id="gdlr-core-title-item-4"
                                                >
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3
                                                            class="gdlr-core-title-item-title gdlr-core-skin-title hotale-additional-font class-test"
                                                            style="font-size: 80px; font-weight: 400; letter-spacing: 0px; text-transform: none; color: #000000;"
                                                        >
                                                            Visit Our Famous Facilities<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-19">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 0px 20px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" style="max-width: 760px;">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-no-p-space" style="padding-bottom: 0px;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 21px; font-weight: 400; letter-spacing: 0px; text-transform: none; color: #898989;">
                                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="padding: 0px 0px 63px 0px;" id="gdlr-core-wrapper-7">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-background-wrap" style="top: -10px;">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="background-image: url(upload/grey-color.jpg); background-repeat: no-repeat; background-position: top center;"
                                data-parallax-speed="0.1"
                            ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-36 gdlr-core-column-first" id="gdlr-core-column-20">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="border-radius: 20px 20px 20px 20px; -moz-border-radius: 20px 20px 20px 20px; -webkit-border-radius: 20px 20px 20px 20px;">
                                        <div class="gdlr-core-pbf-background-wrap" style="border-radius: 20px 20px 20px 20px; -moz-border-radius: 20px 20px 20px 20px; -webkit-border-radius: 20px 20px 20px 20px;">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-size: cover; background-position: center;" data-parallax-speed="0"></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                    <div
                                                        class="gdlr-core-image-item-wrap gdlr-core-media-image gdlr-core-image-item-style-round"
                                                        style="border-width: 0px; border-radius: 20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;"
                                                    >
                                                        <img src="<?php echo base_url('assets_home/upload/chef-cook.jpg')?>" alt="" width="1300" height="716" title="chef-cook" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-24" id="gdlr-core-column-21">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 42px 0px 64px 55px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInRight" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 35px;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3
                                                            class="gdlr-core-title-item-title gdlr-core-skin-title class-test"
                                                            style="font-size: 30px; font-weight: 500; letter-spacing: 0px; line-height: 1.6; text-transform: none; color: #000000;"
                                                        >
                                                            3 Michelin Stars Restaurant, Vézère<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 20px;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 18px; font-weight: 400; text-transform: none; color: #898989;">
                                                        <p>A brasserie inspired by French cuisine, a fresh and modern place to visit and enjoy dishes always handmade of the best ingredients of the season.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px;">
                                                    <a class="gdlr-core-button gdlr-core-button-transparent gdlr-core-left-align gdlr-core-button-with-border" href="about-us.html" id="gdlr-core-button-id-2">
                                                        <span class="gdlr-core-content">Learn More<i class="gdlr-core-pos-right icon-arrow-right" style="font-size: 16px; color: #000000;"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-24 gdlr-core-column-first" id="gdlr-core-column-22">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding-top: 150px; padding-right: 55px; padding-bottom: 37px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInLeft" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3
                                                            class="gdlr-core-title-item-title gdlr-core-skin-title class-test"
                                                            style="font-size: 30px; font-weight: 500; letter-spacing: 0px; line-height: 1.6; text-transform: none; color: #000000;"
                                                        >
                                                            The Penthouse Bar, An iconic american bar<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 20px;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 18px; font-weight: 400; text-transform: none; color: #898989;">
                                                        <p>
                                                            The cozy bar area accompanying the Penthouse is a classic cocktail bar at it&#8217;s finest. Our experienced bartenders are here to offer you both the classic bewerages and the
                                                            newest global trends.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px;">
                                                    <a class="gdlr-core-button gdlr-core-button-transparent gdlr-core-left-align gdlr-core-button-with-border" href="about-us-2.html" id="gdlr-core-button-id-3">
                                                        <span class="gdlr-core-content">Learn More<i class="gdlr-core-pos-right icon-arrow-right" style="font-size: 16px; color: #000000;"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-36" id="gdlr-core-column-23">
                                    <div
                                        class="gdlr-core-pbf-column-content-margin gdlr-core-js"
                                        style="margin: 110px 0px 0px 0px; border-radius: 20px 20px 20px 20px; -moz-border-radius: 20px 20px 20px 20px; -webkit-border-radius: 20px 20px 20px 20px;"
                                    >
                                        <div class="gdlr-core-pbf-background-wrap" style="border-radius: 20px 20px 20px 20px; -moz-border-radius: 20px 20px 20px 20px; -webkit-border-radius: 20px 20px 20px 20px;">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-size: cover; background-position: center;" data-parallax-speed="0"></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                    <div
                                                        class="gdlr-core-image-item-wrap gdlr-core-media-image gdlr-core-image-item-style-round"
                                                        style="border-width: 0px; border-radius: 20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;"
                                                    >
                                                        <img src="<?php echo base_url('assets_home/upload/bar.jpg')?>" alt="" width="1300" height="716" title="bar" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-36 gdlr-core-column-first" id="gdlr-core-column-24">
                                    <div
                                        class="gdlr-core-pbf-column-content-margin gdlr-core-js"
                                        style="margin: 110px 0px 0px 0px; border-radius: 20px 20px 20px 20px; -moz-border-radius: 20px 20px 20px 20px; -webkit-border-radius: 20px 20px 20px 20px;"
                                    >
                                        <div class="gdlr-core-pbf-background-wrap" style="border-radius: 20px 20px 20px 20px; -moz-border-radius: 20px 20px 20px 20px; -webkit-border-radius: 20px 20px 20px 20px;">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-size: cover; background-position: center;" data-parallax-speed="0"></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                    <div
                                                        class="gdlr-core-image-item-wrap gdlr-core-media-image gdlr-core-image-item-style-round"
                                                        style="border-width: 0px; border-radius: 20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;"
                                                    >
                                                        <img src="<?php echo base_url('assets_home/upload/spa.jpg')?>" alt="" width="1300" height="716" title="spa" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-24" id="gdlr-core-column-25">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="margin-top: 0px; padding: 160px 0px 37px 55px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInRight" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title class-test" style="font-size: 30px; font-weight: 500; letter-spacing: 0px; text-transform: none; color: #000000;">
                                                            The Spa. Refresh Yourself<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 20px;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 18px; font-weight: 400; text-transform: none; color: #898989;">
                                                        <p>Whether you are in search of a well-appointed gym or a pampering moment on the massage table and inside the warm saunas, you can always find a place for yourself at our spa.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px;">
                                                    <a class="gdlr-core-button gdlr-core-button-transparent gdlr-core-left-align gdlr-core-button-with-border" href="about-us-3.html" id="gdlr-core-button-id-4">
                                                        <span class="gdlr-core-content">Learn More<i class="gdlr-core-pos-right icon-arrow-right" style="font-size: 16px; color: #000000;"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" style="padding: 90px 0px 80px 0px;" id="gdlr-core-wrapper-8">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-background-wrap" style="top: 30px;">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="background-image: url(upload/bg-testimonail.jpg); background-repeat: no-repeat; background-position: top center;"
                                data-parallax-speed="0"
                            ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-26">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 0px 40px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" style="max-width: 700px;">
                                            <div class="gdlr-core-pbf-element">
                                                <div
                                                    class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                                                    style="padding-bottom: 15px;"
                                                    id="gdlr-core-title-item-5"
                                                >
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title hotale-additional-font class-test" style="font-size: 80px; font-weight: 400; text-transform: none; color: #000000;">
                                                            Testimonial<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 21px; font-weight: 400; text-transform: none; color: #898989;">
                                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-27">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 10px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-testimonial-item gdlr-core-item-pdb clearfix gdlr-core-testimonial-style-left-2 gdlr-core-item-pdlr">
                                                    <div
                                                        class="gdlr-core-flexslider flexslider gdlr-core-js-2 gdlr-core-bullet-style-round gdlr-core-color-bullet"
                                                        data-type="carousel"
                                                        data-column="2"
                                                        data-move="1"
                                                        data-nav="bullet"
                                                        data-controls-top-margin="70px"
                                                    >
                                                        <ul class="slides">
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="gdlr-core-testimonial clearfix gdlr-core-with-frame">
                                                                    <div
                                                                        class="gdlr-core-testimonial-frame clearfix gdlr-core-skin-e-background gdlr-core-outer-frame-element"
                                                                        style="
                                                                            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -moz-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            border-radius: 50px 0px 50px 0px;
                                                                            -moz-border-radius: 50px 0px 50px 0px;
                                                                            -webkit-border-radius: 50px 0px 50px 0px;
                                                                        "
                                                                    >
                                                                        <div
                                                                            class="gdlr-core-testimonial-frame-border"
                                                                            style="border-radius: 50px 0px 50px 0px; -moz-border-radius: 50px 0px 50px 0px; -webkit-border-radius: 50px 0px 50px 0px;"
                                                                        ></div>
                                                                        <div class="gdlr-core-testimonial-author-image gdlr-core-media-image">
                                                                            <img
                                                                                src="<?php echo base_url('assets_home/upload/customer1-150x150.jpg')?>"
                                                                                alt=""
                                                                                width="150"
                                                                                height="150"
                                                                                title="customer1"
                                                                            />
                                                                            <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon" style="font-weight: 600; color: #3d3d3d;">&#8220;</div>
                                                                        </div>
                                                                        <div class="gdlr-core-testimonial-content-wrap">
                                                                            <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 18px; color: #656565; padding-bottom: 25px;">
                                                                                <p>
                                                                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel
                                                                                    the charm of existence.
                                                                                </p>
                                                                            </div>
                                                                            <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                                <div class="gdlr-core-testimonial-author-content">
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title"
                                                                                        style="color: #313131; font-size: 19px; font-weight: 600; font-style: normal; letter-spacing: 0px; text-transform: none;"
                                                                                    >
                                                                                        Joan Smith
                                                                                    </div>
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption"
                                                                                        style="color: #313131; font-size: 14px; font-style: normal; font-weight: 500;"
                                                                                    >
                                                                                        Solo Traveler
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="gdlr-core-testimonial clearfix gdlr-core-with-frame">
                                                                    <div
                                                                        class="gdlr-core-testimonial-frame clearfix gdlr-core-skin-e-background gdlr-core-outer-frame-element"
                                                                        style="
                                                                            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -moz-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            border-radius: 50px 0px 50px 0px;
                                                                            -moz-border-radius: 50px 0px 50px 0px;
                                                                            -webkit-border-radius: 50px 0px 50px 0px;
                                                                        "
                                                                    >
                                                                        <div
                                                                            class="gdlr-core-testimonial-frame-border"
                                                                            style="border-radius: 50px 0px 50px 0px; -moz-border-radius: 50px 0px 50px 0px; -webkit-border-radius: 50px 0px 50px 0px;"
                                                                        ></div>
                                                                        <div class="gdlr-core-testimonial-author-image gdlr-core-media-image">
                                                                            <img
                                                                                src="<?php echo base_url('assets_home/upload/customer03-150x150.jpg')?>"
                                                                                alt=""
                                                                                width="150"
                                                                                height="150"
                                                                                title="customer03"
                                                                            />
                                                                            <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon" style="font-weight: 600; color: #3d3d3d;">&#8220;</div>
                                                                        </div>
                                                                        <div class="gdlr-core-testimonial-content-wrap">
                                                                            <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 18px; color: #656565; padding-bottom: 25px;">
                                                                                <p>
                                                                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel
                                                                                    the charm of existence.
                                                                                </p>
                                                                            </div>
                                                                            <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                                <div class="gdlr-core-testimonial-author-content">
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title"
                                                                                        style="color: #313131; font-size: 19px; font-weight: 600; font-style: normal; letter-spacing: 0px; text-transform: none;"
                                                                                    >
                                                                                        William Jones
                                                                                    </div>
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption"
                                                                                        style="color: #313131; font-size: 14px; font-style: normal; font-weight: 500;"
                                                                                    >
                                                                                        Solo Traveler
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="gdlr-core-testimonial clearfix gdlr-core-with-frame">
                                                                    <div
                                                                        class="gdlr-core-testimonial-frame clearfix gdlr-core-skin-e-background gdlr-core-outer-frame-element"
                                                                        style="
                                                                            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -moz-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            border-radius: 50px 0px 50px 0px;
                                                                            -moz-border-radius: 50px 0px 50px 0px;
                                                                            -webkit-border-radius: 50px 0px 50px 0px;
                                                                        "
                                                                    >
                                                                        <div
                                                                            class="gdlr-core-testimonial-frame-border"
                                                                            style="border-radius: 50px 0px 50px 0px; -moz-border-radius: 50px 0px 50px 0px; -webkit-border-radius: 50px 0px 50px 0px;"
                                                                        ></div>
                                                                        <div class="gdlr-core-testimonial-author-image gdlr-core-media-image">
                                                                            <img
                                                                                src="<?php echo base_url('assets_home/upload/customer02-150x150.jpg')?>"
                                                                                alt=""
                                                                                width="150"
                                                                                height="150"
                                                                                title="customer02"
                                                                            />
                                                                            <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon" style="font-weight: 600; color: #3d3d3d;">&#8220;</div>
                                                                        </div>
                                                                        <div class="gdlr-core-testimonial-content-wrap">
                                                                            <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 18px; color: #656565; padding-bottom: 25px;">
                                                                                <p>
                                                                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel
                                                                                    the charm of existence.
                                                                                </p>
                                                                            </div>
                                                                            <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                                <div class="gdlr-core-testimonial-author-content">
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title"
                                                                                        style="color: #313131; font-size: 19px; font-weight: 600; font-style: normal; letter-spacing: 0px; text-transform: none;"
                                                                                    >
                                                                                        Ralph Clark
                                                                                    </div>
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption"
                                                                                        style="color: #313131; font-size: 14px; font-style: normal; font-weight: 500;"
                                                                                    >
                                                                                        Solo Traveler
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="gdlr-core-testimonial clearfix gdlr-core-with-frame">
                                                                    <div
                                                                        class="gdlr-core-testimonial-frame clearfix gdlr-core-skin-e-background gdlr-core-outer-frame-element"
                                                                        style="
                                                                            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -moz-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            border-radius: 50px 0px 50px 0px;
                                                                            -moz-border-radius: 50px 0px 50px 0px;
                                                                            -webkit-border-radius: 50px 0px 50px 0px;
                                                                        "
                                                                    >
                                                                        <div
                                                                            class="gdlr-core-testimonial-frame-border"
                                                                            style="border-radius: 50px 0px 50px 0px; -moz-border-radius: 50px 0px 50px 0px; -webkit-border-radius: 50px 0px 50px 0px;"
                                                                        ></div>
                                                                        <div class="gdlr-core-testimonial-author-image gdlr-core-media-image">
                                                                            <img
                                                                                src="<?php echo base_url('assets_home/upload/customer1-150x150.jpg')?>"
                                                                                alt=""
                                                                                width="150"
                                                                                height="150"
                                                                                title="customer1"
                                                                            />
                                                                            <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon" style="font-weight: 600; color: #3d3d3d;">&#8220;</div>
                                                                        </div>
                                                                        <div class="gdlr-core-testimonial-content-wrap">
                                                                            <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 18px; color: #656565; padding-bottom: 25px;">
                                                                                <p>
                                                                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel
                                                                                    the charm of existence.
                                                                                </p>
                                                                            </div>
                                                                            <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                                <div class="gdlr-core-testimonial-author-content">
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title"
                                                                                        style="color: #313131; font-size: 19px; font-weight: 600; font-style: normal; letter-spacing: 0px; text-transform: none;"
                                                                                    >
                                                                                        Christopher Lopez
                                                                                    </div>
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption"
                                                                                        style="color: #313131; font-size: 14px; font-style: normal; font-weight: 500;"
                                                                                    >
                                                                                        Solo Traveler
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div class="gdlr-core-testimonial clearfix gdlr-core-with-frame">
                                                                    <div
                                                                        class="gdlr-core-testimonial-frame clearfix gdlr-core-skin-e-background gdlr-core-outer-frame-element"
                                                                        style="
                                                                            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -moz-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.08);
                                                                            border-radius: 50px 0px 50px 0px;
                                                                            -moz-border-radius: 50px 0px 50px 0px;
                                                                            -webkit-border-radius: 50px 0px 50px 0px;
                                                                        "
                                                                    >
                                                                        <div
                                                                            class="gdlr-core-testimonial-frame-border"
                                                                            style="border-radius: 50px 0px 50px 0px; -moz-border-radius: 50px 0px 50px 0px; -webkit-border-radius: 50px 0px 50px 0px;"
                                                                        ></div>
                                                                        <div class="gdlr-core-testimonial-author-image gdlr-core-media-image">
                                                                            <img
                                                                                src="<?php echo base_url('assets_home/upload/customer03-150x150.jpg')?>"
                                                                                alt=""
                                                                                width="150"
                                                                                height="150"
                                                                                title="customer03"
                                                                            />
                                                                            <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon" style="font-weight: 600; color: #3d3d3d;">&#8220;</div>
                                                                        </div>
                                                                        <div class="gdlr-core-testimonial-content-wrap">
                                                                            <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size: 18px; color: #656565; padding-bottom: 25px;">
                                                                                <p>
                                                                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel
                                                                                    the charm of existence.
                                                                                </p>
                                                                            </div>
                                                                            <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                                                <div class="gdlr-core-testimonial-author-content">
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title"
                                                                                        style="color: #313131; font-size: 19px; font-weight: 600; font-style: normal; letter-spacing: 0px; text-transform: none;"
                                                                                    >
                                                                                        Louis Lewis
                                                                                    </div>
                                                                                    <div
                                                                                        class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption"
                                                                                        style="color: #313131; font-size: 14px; font-style: normal; font-weight: 500;"
                                                                                    >
                                                                                        Solo Traveler
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                    </div>
                    <div class="gdlr-core-pbf-wrapper">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-background-wrap" style="top: 335px;">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="background-image: url(upload/home-resort-news-bg.png); background-repeat: no-repeat; background-position: top center;"
                                data-parallax-speed="0"
                            ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-28">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 0px 20px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" style="max-width: 700px;">
                                            <div class="gdlr-core-pbf-element">
                                                <div
                                                    class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                                                    style="padding-bottom: 20px;"
                                                    id="gdlr-core-title-item-6"
                                                >
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title hotale-additional-font class-test" style="font-size: 80px; font-weight: 400; text-transform: none; color: #000000;">
                                                            News & Offers<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 21px; font-weight: 400; text-transform: none; color: #898989;">
                                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-29">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix gdlr-core-style-blog-image gdlr-core-item-pdlr" id="gdlr-core-blog-1">
                                                    <div class="gdlr-core-flexslider flexslider gdlr-core-js-2" data-type="carousel" data-column="3" data-move="1" data-nav="navigation-outer" data-nav-parent="self" data-vcenter-nav="1">
                                                        <div class="gdlr-core-flexslider-custom-nav gdlr-core-style-navigation-outer gdlr-core-center-align">
                                                            <i class="icon-arrow-left flex-prev" style="color: #cccccc; font-size: 34px; left: -70px;"></i>
                                                            <i class="icon-arrow-right flex-next" style="color: #cccccc; font-size: 34px; right: -70px;"></i>
                                                        </div>
                                                        <ul class="slides">
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-modern gdlr-core-with-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-style-1 gdlr-core-outer-frame-element"
                                                                    style="border-width: 0px; border-radius: 20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;"
                                                                >
                                                                    <div class="gdlr-core-blog-modern-inner">
                                                                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image">
                                                                            <img
                                                                                src="<?php echo base_url('assets_home/upload/kelsey-roenau-608583-unsplash-700x990.jpg')?>"
                                                                                alt=""
                                                                                width="700"
                                                                                height="990"
                                                                                title="kelsey-roenau-608583-unsplash"
                                                                            />
                                                                        </div>
                                                                        <div class="gdlr-core-blog-modern-content gdlr-core-center-align" style="padding-right: 40px; padding-left: 40px;">
                                                                            <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 24px; font-style: normal; font-weight: 500; letter-spacing: 0px;">
                                                                                <a href="single-blog.html">Cities To Visit For Your First Time In Europe</a>
                                                                            </h3>
                                                                            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                                <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                                    <span class="gdlr-core-blog-info-sep">•</span><span class="gdlr-core-head"><i class="gdlr-icon-clock"></i></span>
                                                                                    <a href="#">Dec 17, 2021</a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-modern gdlr-core-with-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-style-1 gdlr-core-outer-frame-element"
                                                                    style="border-width: 0px; border-radius: 20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;"
                                                                >
                                                                    <div class="gdlr-core-blog-modern-inner">
                                                                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image">
                                                                            <img
                                                                                src="<?php echo base_url('assets_home/upload/aaron-huber-401200-unsplash-700x990.jpg')?>"
                                                                                alt=""
                                                                                width="700"
                                                                                height="990"
                                                                                title="aaron-huber-401200-unsplash"
                                                                            />
                                                                        </div>
                                                                        <div class="gdlr-core-blog-modern-content gdlr-core-center-align" style="padding-right: 40px; padding-left: 40px;">
                                                                            <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 24px; font-style: normal; font-weight: 500; letter-spacing: 0px;">
                                                                                <a href="single-blog.html">
                                                                                    Where to travel in 2022: 10 places you need to go in 2022!
                                                                                </a>
                                                                            </h3>
                                                                            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                                <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                                    <span class="gdlr-core-blog-info-sep">•</span><span class="gdlr-core-head"><i class="gdlr-icon-clock"></i></span>
                                                                                    <a href="#">Dec 17, 2021</a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-modern gdlr-core-with-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-style-1 gdlr-core-outer-frame-element"
                                                                    style="border-width: 0px; border-radius: 20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;"
                                                                >
                                                                    <div class="gdlr-core-blog-modern-inner">
                                                                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image">
                                                                            <img
                                                                                src="<?php echo base_url('assets_home/upload/roan-lavery-sEcYfPfKOhw-unsplash-700x990.jpg')?>"
                                                                                alt=""
                                                                                width="700"
                                                                                height="990"
                                                                                title="roan-lavery-sEcYfPfKOhw-unsplash"
                                                                            />
                                                                        </div>
                                                                        <div class="gdlr-core-blog-modern-content gdlr-core-center-align" style="padding-right: 40px; padding-left: 40px;">
                                                                            <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 24px; font-style: normal; font-weight: 500; letter-spacing: 0px;">
                                                                                <a href="single-blog.html">Tips For Picking Vacation Accommodation</a>
                                                                            </h3>
                                                                            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                                <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                                    <span class="gdlr-core-blog-info-sep">•</span><span class="gdlr-core-head"><i class="gdlr-icon-clock"></i></span>
                                                                                    <a href="#">Dec 17, 2021</a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-modern gdlr-core-with-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-style-1 gdlr-core-outer-frame-element"
                                                                    style="border-width: 0px; border-radius: 20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;"
                                                                >
                                                                    <div class="gdlr-core-blog-modern-inner">
                                                                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image">
                                                                            <img
                                                                                src="<?php echo base_url('assets_home/upload/pexels-photo-25284-700x990.jpg')?>"
                                                                                alt=""
                                                                                width="700"
                                                                                height="990"
                                                                                title="pexels-photo-25284"
                                                                            />
                                                                        </div>
                                                                        <div class="gdlr-core-blog-modern-content gdlr-core-center-align" style="padding-right: 40px; padding-left: 40px;">
                                                                            <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 24px; font-style: normal; font-weight: 500; letter-spacing: 0px;">
                                                                                <a href="single-blog.html">What to expect on an African Safari?</a>
                                                                            </h3>
                                                                            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                                <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                                    <span class="gdlr-core-blog-info-sep">•</span><span class="gdlr-core-head"><i class="gdlr-icon-clock"></i></span>
                                                                                    <a href="#">Dec 17, 2021</a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-modern gdlr-core-with-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-style-1 gdlr-core-outer-frame-element"
                                                                    style="border-width: 0px; border-radius: 20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;"
                                                                >
                                                                    <div class="gdlr-core-blog-modern-inner">
                                                                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image">
                                                                            <img
                                                                                src="<?php echo base_url('assets_home/upload/shutterstock_560973166-700x990.jpg')?>"
                                                                                alt=""
                                                                                width="700"
                                                                                height="990"
                                                                                title="Hotel Room"
                                                                            />
                                                                        </div>
                                                                        <div class="gdlr-core-blog-modern-content gdlr-core-center-align" style="padding-right: 40px; padding-left: 40px;">
                                                                            <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 24px; font-style: normal; font-weight: 500; letter-spacing: 0px;">
                                                                                <a href="single-blog.html">My 6 Biggest Travel Surprises</a>
                                                                            </h3>
                                                                            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                                <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                                    <span class="gdlr-core-blog-info-sep">•</span><span class="gdlr-core-head"><i class="gdlr-icon-clock"></i></span>
                                                                                    <a href="#">Dec 17, 2021</a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-modern gdlr-core-with-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-style-1 gdlr-core-outer-frame-element"
                                                                    style="border-width: 0px; border-radius: 20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;"
                                                                >
                                                                    <div class="gdlr-core-blog-modern-inner">
                                                                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image">
                                                                            <img
                                                                                src="<?php echo base_url('assets_home/upload/pascal-diekmann-707233-unsplash-700x990.jpg')?>"
                                                                                alt=""
                                                                                width="700"
                                                                                height="990"
                                                                                title="pascal-diekmann-707233-unsplash"
                                                                            />
                                                                        </div>
                                                                        <div class="gdlr-core-blog-modern-content gdlr-core-center-align" style="padding-right: 40px; padding-left: 40px;">
                                                                            <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 24px; font-style: normal; font-weight: 500; letter-spacing: 0px;">
                                                                                <a href="single-blog.html">10 Tips for Taking Your First Solo Trip</a>
                                                                            </h3>
                                                                            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                                <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                                    <span class="gdlr-core-blog-info-sep">•</span><span class="gdlr-core-head"><i class="gdlr-icon-clock"></i></span>
                                                                                    <a href="#">Dec 17, 2021</a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-modern gdlr-core-with-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-style-1 gdlr-core-outer-frame-element"
                                                                    style="border-width: 0px; border-radius: 20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;"
                                                                >
                                                                    <div class="gdlr-core-blog-modern-inner">
                                                                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image">
                                                                            <img
                                                                                src="<?php echo base_url('assets_home/upload/pexels-photo-871053-700x990.jpeg')?>"
                                                                                alt=""
                                                                                width="700"
                                                                                height="990"
                                                                                title="pexels-photo-871053"
                                                                            />
                                                                        </div>
                                                                        <div class="gdlr-core-blog-modern-content gdlr-core-center-align" style="padding-right: 40px; padding-left: 40px;">
                                                                            <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 24px; font-style: normal; font-weight: 500; letter-spacing: 0px;">
                                                                                <a href="single-blog.html">
                                                                                    Why I Quit My Job To Be A Less Occasional Traveller In 2019
                                                                                </a>
                                                                            </h3>
                                                                            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                                <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                                    <span class="gdlr-core-blog-info-sep">•</span><span class="gdlr-core-head"><i class="gdlr-icon-clock"></i></span>
                                                                                    <a href="#">Dec 17, 2021</a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-modern gdlr-core-with-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-style-1 gdlr-core-outer-frame-element"
                                                                    style="border-width: 0px; border-radius: 20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;"
                                                                >
                                                                    <div class="gdlr-core-blog-modern-inner">
                                                                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image">
                                                                            <img
                                                                                src="<?php echo base_url('assets_home/upload/shutterstock_307470824-700x990.jpg')?>"
                                                                                alt=""
                                                                                width="700"
                                                                                height="990"
                                                                                title="The breakfast"
                                                                            />
                                                                        </div>
                                                                        <div class="gdlr-core-blog-modern-content gdlr-core-center-align" style="padding-right: 40px; padding-left: 40px;">
                                                                            <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 24px; font-style: normal; font-weight: 500; letter-spacing: 0px;">
                                                                                <a href="single-blog.html">Where To Travel In Asia From January To June</a>
                                                                            </h3>
                                                                            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                                <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                                    <span class="gdlr-core-blog-info-sep">•</span><span class="gdlr-core-head"><i class="gdlr-icon-clock"></i></span>
                                                                                    <a href="#">Dec 17, 2021</a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-modern gdlr-core-with-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover gdlr-core-style-1 gdlr-core-outer-frame-element"
                                                                    style="border-width: 0px; border-radius: 20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;"
                                                                >
                                                                    <div class="gdlr-core-blog-modern-inner">
                                                                        <div class="gdlr-core-blog-thumbnail gdlr-core-media-image">
                                                                            <img
                                                                                src="<?php echo base_url('assets_home/upload/shop-slo-vhztm9QC0L0-unsplash-700x990.jpg')?>"
                                                                                alt=""
                                                                                width="700"
                                                                                height="990"
                                                                                title="shop-slo-vhztm9QC0L0-unsplash"
                                                                            />
                                                                        </div>
                                                                        <div class="gdlr-core-blog-modern-content gdlr-core-center-align" style="padding-right: 40px; padding-left: 40px;">
                                                                            <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 24px; font-style: normal; font-weight: 500; letter-spacing: 0px;">
                                                                                <a href="single-blog.html">3 steps to discovering your life’s purpose</a>
                                                                            </h3>
                                                                            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                                <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                                    <span class="gdlr-core-blog-info-sep">•</span><span class="gdlr-core-head"><i class="gdlr-icon-clock"></i></span>
                                                                                    <a href="#">Oct 14, 2020</a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-30">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 35px 0px 85px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align" style="padding-bottom: 0px;">
                                                    <a class="gdlr-core-button gdlr-core-button-transparent gdlr-core-center-align gdlr-core-button-with-border" href="blog-full-right-sidebar.html" id="gdlr-core-button-id-5">
                                                        <span class="gdlr-core-content">Read the blog<i class="gdlr-core-pos-right icon-arrow-right" style="font-size: 16px; color: #000000;"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper" id="gdlr-core-wrapper-9">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-background-wrap" style="top: 120px;">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="background-image: url(upload/home-resort-newsletter-bg.png); background-repeat: repeat-x; background-position: top center;"
                                data-parallax-speed="0"
                            ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-31">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 0px 70px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div
                                                    class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                                                    style="padding-bottom: 45px;"
                                                    id="gdlr-core-title-item-7"
                                                >
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title hotale-additional-font class-test" style="font-size: 80px; font-weight: 400; text-transform: none; color: #000000;">
                                                            Newsletter<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                        </h3>
                                                    </div>
                                                    <span
                                                        class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption"
                                                        style="font-size: 18px; font-style: normal; letter-spacing: 0px; color: #898989; margin-top: 15px;"
                                                    >
                                                        Subscribe the newsletter to get updated to news and promotions
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-newsletter-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-style-curve3">
                                                    <div class="newsletter newsletter-subscription">
                                                        <form class="gdlr-core-newsletter-form clearfix" method="post" action="#" onsubmit="return newsletter_check(this)">
                                                            <div class="gdlr-core-newsletter-email">
                                                                <input class="newsletter-email gdlr-core-skin-e-background gdlr-core-skin-e-content" placeholder="Your Email Address" type="email" name="ne" size="30" required />
                                                            </div>
                                                            <div class="gdlr-core-newsletter-submit"><input class="newsletter-submit" type="submit" value="Subscribe" /></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix gdlr-core-gallery-item-style-grid-no-space gdlr-core-item-pdlr" style="padding-bottom: 45px;" id="gdlr-core-gallery-1">
                                                    <div
                                                        class="gdlr-core-flexslider flexslider gdlr-core-js-2"
                                                        data-type="carousel"
                                                        data-column="4"
                                                        data-move="1"
                                                        data-nav="navigation-outer"
                                                        data-nav-parent="self"
                                                        data-vcenter-nav="1"
                                                        data-disable-autoslide="1"
                                                    >
                                                        <div class="gdlr-core-flexslider-custom-nav gdlr-core-style-navigation-outer gdlr-core-center-align" style="margin-top: -25px;">
                                                            <i class="icon-arrow-left flex-prev" style="color: #cccccc; font-size: 34px; left: -70px;"></i>
                                                            <i class="icon-arrow-right flex-next" style="color: #cccccc; font-size: 34px; right: -70px;"></i>
                                                        </div>
                                                        <ul class="slides">
                                                            <li>
                                                                <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                    <a
                                                                        class="gdlr-core-lightgallery gdlr-core-js"
                                                                        href="upload/shutterstock_1298236804.jpg"
                                                                        data-lightbox-group="gdlr-core-img-group-1"
                                                                    >
                                                                        <img
                                                                            src="<?php echo base_url('assets_home/upload/shutterstock_1298236804-600x600.jpg')?>"
                                                                            alt=""
                                                                            width="600"
                                                                            height="600"
                                                                            title="shutterstock_1298236804"
                                                                        />
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                    <a
                                                                        class="gdlr-core-lightgallery gdlr-core-js"
                                                                        href="upload/jen-p-541467-unsplash-scaled.jpg"
                                                                        data-lightbox-group="gdlr-core-img-group-1"
                                                                    >
                                                                        <img
                                                                            src="<?php echo base_url('assets_home/upload/jen-p-541467-unsplash-600x600.jpg')?>"
                                                                            alt=""
                                                                            width="600"
                                                                            height="600"
                                                                            title="jen-p-541467-unsplash"
                                                                        />
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                    <a
                                                                        class="gdlr-core-lightgallery gdlr-core-js"
                                                                        href="upload/shutterstock_1386982532.jpg"
                                                                        data-lightbox-group="gdlr-core-img-group-1"
                                                                    >
                                                                        <img
                                                                            src="<?php echo base_url('assets_home/upload/shutterstock_1386982532-600x600.jpg')?>"
                                                                            alt=""
                                                                            width="600"
                                                                            height="600"
                                                                            title="shutterstock_1386982532"
                                                                        />
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                    <a
                                                                        class="gdlr-core-lightgallery gdlr-core-js"
                                                                        href="upload/mutzii-1057982-unsplash-scaled.jpg"
                                                                        data-lightbox-group="gdlr-core-img-group-1"
                                                                    >
                                                                        <img
                                                                            src="<?php echo base_url('assets_home/upload/mutzii-1057982-unsplash-600x600.jpg')?>"
                                                                            alt=""
                                                                            width="600"
                                                                            height="600"
                                                                            title="mutzii-1057982-unsplash"
                                                                        />
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                    <a
                                                                        class="gdlr-core-lightgallery gdlr-core-js"
                                                                        href="upload/shutterstock_789623335.jpg"
                                                                        data-lightbox-group="gdlr-core-img-group-1"
                                                                    >
                                                                        <img
                                                                            src="<?php echo base_url('assets_home/upload/shutterstock_789623335-600x600.jpg')?>"
                                                                            alt=""
                                                                            width="600"
                                                                            height="600"
                                                                            title="shutterstock_789623335"
                                                                        />
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                    <a
                                                                        class="gdlr-core-lightgallery gdlr-core-js"
                                                                        href="upload/roberto-nickson-YCW4BEhKluw-unsplas.jpg"
                                                                        data-lightbox-group="gdlr-core-img-group-1"
                                                                    >
                                                                        <img
                                                                            src="<?php echo base_url('assets_home/upload/roberto-nickson-YCW4BEhKluw-unsplas-600x600.jpg')?>"
                                                                            alt=""
                                                                            width="600"
                                                                            height="600"
                                                                            title="roberto-nickson-YCW4BEhKluw-unsplas"
                                                                        />
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                    <a
                                                                        class="gdlr-core-lightgallery gdlr-core-js"
                                                                        href="upload/shutterstock_1061669315.jpg"
                                                                        data-lightbox-group="gdlr-core-img-group-1"
                                                                    >
                                                                        <img
                                                                            src="<?php echo base_url('assets_home/upload/shutterstock_1061669315-600x600.jpg')?>"
                                                                            alt=""
                                                                            width="600"
                                                                            height="600"
                                                                            title="shutterstock_1061669315"
                                                                        />
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                                    <a
                                                        class="gdlr-core-button gdlr-core-button-transparent gdlr-core-center-align gdlr-core-button-no-border"
                                                        href="https://instagram.com"
                                                        target="_blank"
                                                        style="font-size: 13px; font-style: normal; font-weight: 600; letter-spacing: 4px; color: #000000; text-transform: uppercase;"
                                                    >
                                                        <span class="gdlr-core-content"><i class="gdlr-core-pos-left fa fa-instagram" style="font-size: 21px;"></i>Follow us on Instagram</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <div class="hotale-footer-wrapper">
                    <div class="hotale-footer-container hotale-container clearfix">
                        <div class="hotale-footer-column hotale-item-pdlr hotale-column-15">
                            <div id="block-21" class="widget widget_block widget_media_image hotale-widget">
                                <figure class="wp-block-image">
                                    <img loading="lazy" width="110" height="27" src="<?php echo base_url('assets_home/upload/logo-resort.png')?>" alt="" class="wp-image-14995" />
                                </figure>
                            </div>
                            <div id="block-7" class="widget widget_block widget_text hotale-widget">
                                <p></p>
                            </div>
                            <div id="block-8" class="widget widget_block hotale-widget">
                                <p>
                                    <span class="gdlr-core-space-shortcode" style="margin-top: -10px;"></span><i class="fa fa-facebook" style="font-size: 16px; color: #ffffff; margin-left: 3px; margin-right: 17px;"></i>
                                    <i class="fa5b fa-twitter" style="font-size: 16px; color: #ffffff; margin-left: 3px; margin-right: 17px;"></i>
                                    <i class="fa5b fa-pinterest-p" style="font-size: 16px; color: #ffffff; margin-left: 3px; margin-right: 17px;"></i>
                                    <i class="fa5b fa5-tiktok" style="font-size: 16px; color: #ffffff; margin-left: 3px; margin-right: 17px;"></i>
                                </p>
                            </div>
                            <div id="block-22" class="widget widget_block widget_text hotale-widget">
                                <p></p>
                            </div>
                            <div id="block-25" class="widget widget_block hotale-widget">
                                <div class="tourmaster-currency-switcher-shortcode clearfix">
                                    <div class="tourmaster-currency-switcher" style="background: #333333;">
                                        <span class="tourmaster-head" style="color: #ffffff;"><span>USD</span><i class="fa fa-sort-down"></i></span>
                                        <div class="tourmaster-currency-switcher-inner">
                                            <div class="tourmaster-currency-switcher-content">
                                                <ul>
                                                    <li><a href="#">EUR</a></li>
                                                    <li><a href="#">CHF</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hotale-footer-column hotale-item-pdlr hotale-column-15">
                            <div id="block-10" class="widget widget_block hotale-widget">
                                <h4>Contact</h4>
                            </div>
                            <div id="block-14" class="widget widget_block hotale-widget">
                                <p><span style="color: #ffffff;">T</span>: 1-634-567-34</p>
                                <p><span class="gdlr-core-space-shortcode" style="margin-top: -10px;"></span></p>
                                <p><span style="color: #ffffff;">E</span>: <a href="#" >test@gmail.com</a></p>
                                <p><span class="gdlr-core-space-shortcode" style="margin-top: -10px;"></span></p>
                                <p><span style="color: #ffffff;">F</span>: 1-634-567-35</p>
                            </div>
                        </div>
                        <div class="hotale-footer-column hotale-item-pdlr hotale-column-15">
                            <div id="block-12" class="widget widget_block hotale-widget">
                                <h4>Hotel Address</h4>
                            </div>
                            <div id="block-15" class="widget widget_block hotale-widget">
                                <p>
                                    <span style="color: #ffffff;">
                                        Hotale Av.<br />
                                        del Ejercito, 2, 1900<br />
                                        Madrid, Spain
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="hotale-footer-column hotale-item-pdlr hotale-column-15">
                            <div id="block-18" class="widget widget_block widget_media_image hotale-widget">
                                <div class="wp-block-image">
                                    <figure class="aligncenter size-full">
                                        <img loading="lazy" width="213" height="90" src="<?php echo base_url('assets_home/upload/footer-banner.png')?>" alt="" class="wp-image-15004" />
                                    </figure>
                                </div>
                            </div>
                            <div id="block-20" class="widget widget_block widget_media_image hotale-widget">
                                <div class="wp-block-image">
                                    <figure class="aligncenter is-resized">
                                        <img
                                            loading="lazy"
                                            src="<?php echo base_url('assets_home/upload/footer-cards.png')?>"
                                            alt=""
                                            class="wp-image-15005"
                                            width="154"
                                            height="26"
                                        />
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hotale-copyright-wrapper">
                    <div class="hotale-copyright-container hotale-container clearfix">
                        <div class="hotale-copyright-left hotale-item-pdlr">
                            <div style="text-transform: uppercase; font-weight: 500; font-size: 13px; letter-spacing: 3px;">
                                <a href="index.html" style="margin-right: 22px;">Home</a>
                                <a href="about-us.html" style="margin-right: 22px;">About</a>
                                <a href="about-us-2.html" style="margin-right: 22px;">Privacy Policy</a>
                                <a href="contact.html" style="margin-right: 22px;">Contact</a>
                            </div>
                        </div>
                        <div class="hotale-copyright-right hotale-item-pdlr">Copyright © GoodLayers. All Rights Reserved.</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <script type="text/javascript" src="<?php echo base_url('assets_home/js/jquery.min.js?ver=3.6.0')?>" id="jquery-core-js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets_home/js/jquery-migrate.min.js?ver=3.3.2')?>" id="jquery-migrate-js"></script>
    <script type="text/javascript" id="snazzymaps-js-js-extra">
        /* <![CDATA[ */
        var SnazzyDataForSnazzyMaps = [];
        SnazzyDataForSnazzyMaps = {
            id: 15,
            name: "Subtle Grayscale",
            description: "A nice, simple grayscale version of the map with color extremes that are never too harsh on the eyes. Originally created for http:\/\/barvinssurvins.fr\/situer.",
            url: "https:\/\/snazzymaps.com\/style\/15\/subtle-grayscale",
            imageUrl: "https:\/\/snazzy-maps-cdn.azureedge.net\/assets\/15-subtle-grayscale.png?v=20170626083535",
            json:
                '[{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}]',
            views: 1006718,
            favorites: 2583,
            createdBy: { name: "Paulo Avila", url: null },
            createdOn: "2013-10-30T16:37:24.593",
            tags: ["greyscale", "light"],
            colors: ["gray", "white"],
        };
        /* ]]> */
    </script>

    <script type="text/javascript" src="<?php echo base_url('assets_home/js/ui/core.min.js')?>" id="jquery-ui-core-js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets_home/js/ui/datepicker.min.js')?>" id="jquery-ui-datepicker-js"></script>
    <script type="text/javascript" id="jquery-ui-datepicker-js-after">
        jQuery(function (jQuery) {
            jQuery.datepicker.setDefaults({
                closeText: "Close",
                currentText: "Today",
                monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                nextText: "Next",
                prevText: "Previous",
                dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                dayNamesShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
                dateFormat: "M d, yy",
                firstDay: 1,
                isRTL: false,
            });
        });
    </script>
    <script type="text/javascript" src="<?php echo base_url('assets_home/js/ui/effect.min.js')?>" id="jquery-effects-core-js"></script>
    <script type="text/javascript" id="tourmaster-script-js-extra">
        /* <![CDATA[ */
        var TMi18n = {
            closeText: "Done",
            currentText: "Today",
            monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            dayNamesShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
            firstDay: "1",
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="<?php echo base_url('assets_home/js/plugins/tourmaster/tourmaster.js')?>" id="tourmaster-script-js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets_home/js/plugins/tourmaster/room/tourmaster-room.js')?>" id="tourmaster-room-script-js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets_home/js/plugins/jquery.mmenu.js" id="hotale-jquery-mmenu-js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets_home/js/plugins/jquery.superfish.js')?>" id="hotale-jquery-superfish-js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets_home/js/plugins/script-core.js" id="hotale-script-core-js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets_home/js/plugins/jquery.flexslider-min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets_home/js/plugins/goodlayers-core/plugins/script.js?ver=1653819908" id="gdlr-core-plugin-js')?>"></script>
    <script type="text/javascript" id="gdlr-core-page-builder-js-extra">
        /* <![CDATA[ */
        var gdlr_core_pbf = { admin: "", video: { width: "640", height: "360" }, ajax_url: "#" };
        /* ]]> */
    </script>
    <script type="text/javascript" src="<?php echo base_url('assets_home/js/plugins/goodlayers-core/include/js/page-builder.js?ver=1.3.9" id="gdlr-core-page-builder-js')?>"></script>

</body>
</html>
