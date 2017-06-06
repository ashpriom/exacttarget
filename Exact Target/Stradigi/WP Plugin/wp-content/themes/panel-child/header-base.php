<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Panel
 */
global $post;

$post_type = $post->post_type;
if ($post_type == 'attachment') { 
     header('Location: '.get_site_url().'/404-page-not-found/');
    exit();
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/WebSite">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php get_template_part('metaTags'); ?>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--<script src="wp-content/themes/panel-child/js/jquery-1.7.2.min.js"></script>-->

        <script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery-ui-1.8.18.custom.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/js/jquery-ui.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/js/jquery-ui.theme.css">
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicon-32x32.png">
        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/style.min.css?2">
        <script>

            $(function () {
                var width = screen.width;
                var x = 70;
                if (width <= 800) {
                    x = 100;
                }
                $('.responsiveSelectContainer ul a[href*="#"]:not([href="#"])').click(function () {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html, body').animate({
                                scrollTop: target.offset().top - x
                            }, 1000);
                            return false;
                        }
                    }
                });
            });
        </script>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-47226347-1', 'auto');
            ga('send', 'pageview');

        </script>
    </head>
    <body <?php body_class(); ?> >

        <div id="page" class="hfeed site">
            <?php do_action('before'); ?>
            <header id="masthead" class="site-header home-header" role="banner">

                <div class="site-header-wrapper desk contentWidth">
                    <div class="site-branding">
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"
                                                  rel="home">
                                <svg id="logo_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32.59 9.28">
                                <defs><style>
                                    .logoPath{ fill:#FFF; }
                                    .scrolled  .logoPath{ fill:#000; }
                                </style></defs>
                                <title>logo</title>
                                <path class="logoPath"  d="M290,398.54l0.75-1a3.4,3.4,0,0,0,.81.4,2.69,2.69,0,0,0,.91.16c0.74,0,.76-0.28.76-0.42s-0.2-.42-0.72-0.45l-0.3,0a7.07,7.07,0,0,1-1-.23,1.87,1.87,0,0,1-.76-0.48,1.3,1.3,0,0,1-.34-1,2,2,0,0,1,2.19-1.68,3.52,3.52,0,0,1,1.16.18,3.8,3.8,0,0,1,1,.58l-0.75,1a4.6,4.6,0,0,0-.74-0.36,2.19,2.19,0,0,0-.76-0.13c-0.61,0-.69.27-0.69,0.4a0.36,0.36,0,0,0,.31.33,4.13,4.13,0,0,0,.69.14,8.89,8.89,0,0,1,1.08.24,1.55,1.55,0,0,1,.46,2.71,2.55,2.55,0,0,1-1.61.45A3.86,3.86,0,0,1,290,398.54Z" transform="translate(-290.05 -391.96)"/>
                                <path class="logoPath" d="M296.79,397.35a1.23,1.23,0,0,0,.12.56,0.55,0.55,0,0,0,.54.23l0.37,0v1.21a5.84,5.84,0,0,1-.65,0,4,4,0,0,1-1-.1,1,1,0,0,1-.59-0.39,1.38,1.38,0,0,1-.21-0.83v-2.94h-0.65v-1.26h0.65v-1.42h1.43v1.42h1.06v1.26h-1.06v2.23Z" transform="translate(-290.05 -391.96)"/>
                                <path class="logoPath" d="M300.71,395.33a1.54,1.54,0,0,0-.76.48,1.56,1.56,0,0,0-.35,1.1v2.34h-1.44v-5.3h1.44v0.7a1.76,1.76,0,0,1,.87-0.64,2.84,2.84,0,0,1,.94-0.16v1.41A2.12,2.12,0,0,0,300.71,395.33Z" transform="translate(-290.05 -391.96)"/>
                                <path class="logoPath" d="M305.68,398.71a1.53,1.53,0,0,1-.63.45,2.39,2.39,0,0,1-1,.2,2.68,2.68,0,0,1-1.42-.37,2.42,2.42,0,0,1-.92-1,3.25,3.25,0,0,1,0-2.8,2.42,2.42,0,0,1,.92-1,2.69,2.69,0,0,1,1.42-.37,2.36,2.36,0,0,1,1,.19,1.63,1.63,0,0,1,.64.48v-0.55h1.43v5.3h-1.43v-0.53Zm-0.34-3.2a1.56,1.56,0,0,0-2.13,0,1.53,1.53,0,0,0-.39,1.08,1.5,1.5,0,0,0,.4,1.07,1.38,1.38,0,0,0,1.05.42,1.42,1.42,0,0,0,1.06-.4,1.5,1.5,0,0,0,.39-1.09A1.52,1.52,0,0,0,305.34,395.51Z" transform="translate(-290.05 -391.96)"/>
                                <path class="logoPath" d="M311.69,398.71a1.53,1.53,0,0,1-.63.45,2.39,2.39,0,0,1-1,.2,2.68,2.68,0,0,1-1.42-.37,2.42,2.42,0,0,1-.92-1,3.25,3.25,0,0,1,0-2.8,2.42,2.42,0,0,1,.92-1,2.69,2.69,0,0,1,1.42-.37,2.36,2.36,0,0,1,1,.19,1.63,1.63,0,0,1,.64.48V392h1.43v7.28h-1.43v-0.53Zm-0.34-3.2a1.56,1.56,0,0,0-2.13,0,1.53,1.53,0,0,0-.39,1.08,1.5,1.5,0,0,0,.4,1.07,1.38,1.38,0,0,0,1.05.42,1.42,1.42,0,0,0,1.06-.4,1.5,1.5,0,0,0,.39-1.09A1.52,1.52,0,0,0,311.35,395.51Z" transform="translate(-290.05 -391.96)"/>
                                <path class="logoPath" d="M313.43,394h1.45v5.29h-1.45V394Z" transform="translate(-290.05 -391.96)"/>
                                <path class="logoPath" d="M313.43,392h1.45v1.43h-1.45V392Z" transform="translate(-290.05 -391.96)"/>
                                <path class="logoPath" d="M321.19,392h1.45v1.43h-1.45V392Z" transform="translate(-290.05 -391.96)"/>
                                <path class="logoPath" d="M320.17,400.58a2.78,2.78,0,0,1-2,.66,4,4,0,0,1-2.53-.8l0.7-1a2.81,2.81,0,0,0,1.72.59,1.15,1.15,0,0,0,1.36-1.23v-0.09a2.27,2.27,0,0,1-1.48.47,3,3,0,0,1-1.47-.35,2.43,2.43,0,0,1-1-1,2.84,2.84,0,0,1,0-2.68,2.48,2.48,0,0,1,1-1,3,3,0,0,1,1.48-.36,2.27,2.27,0,0,1,1.48.47v-0.38h1.43v4.83A2.35,2.35,0,0,1,320.17,400.58Zm-1.38-2.82a1.39,1.39,0,0,0,.53-0.52,1.48,1.48,0,0,0,0-1.46,1.41,1.41,0,0,0-.53-0.52,1.48,1.48,0,0,0-.74-0.19,1.39,1.39,0,0,0-1.45,1.43,1.36,1.36,0,0,0,1.45,1.44A1.48,1.48,0,0,0,318.79,397.75Z" transform="translate(-290.05 -391.96)"/>
                                <path class="logoPath" d="M321.19,394h1.45v5.29h-1.45V394Z" transform="translate(-290.05 -391.96)"/>
                                </svg>
                                                            <!--<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.svg" alt="stradigi" />-->
                            </a></h1>

                    </div>
                    <nav id="site-navigation" class="navigation-main" role="navigation">
                        <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                    </nav><!-- #site-navigation -->
                </div>

                <div class="site-header-wrapper mobile contentWidth">
                    <div class="site-branding">
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"
                                                  rel="home"><?php bloginfo('name'); ?></a></h1>

                        <button class="hamburger mobileMenu hamburger--spin" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                    <nav class="navigation-mobile" role="navigation">
   <!--                     <span class="closeMeBar"></span>-->
                        <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                    </nav><!-- #site-navigation -->
                </div>


            </header><!-- #masthead -->

            <div id="main" class="site-main">           
                <!-- #site-navigation -->