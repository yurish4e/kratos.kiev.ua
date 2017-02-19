<?php /** * The header for our theme. * * Displays all of the <head> section and everything up till
<div id="content">
    * * @package KRATOSONE */ ?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <title>Боевое самбо в СК "Кратос" г.Киев просп. Победы</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&subset=cyrillic-ext,latin' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <meta property="business:contact_data:street_address" content="просп. Победы, 63Б" />
        <meta property="business:contact_data:locality" content="Киев" />
        <meta property="business:contact_data:country_name" content="Украина" />
        <meta property="business:contact_data:phone_number" content="+38 097 51 51 100" />
        <meta name="description" content="Спортивный клуб Кратос. Стань сильнее с нами! Боевое самбо | Грэпплинг| Миксфайт " />
        <meta name="keywords" content="Боевое самбо, грэпплинг, миксфайт, бокс" />
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_enqueue_script( "jquery"); ?>
        <?php wp_head(); ?>
    </head>

    <body>

        <div class="wrapper-header k-effects">
            <div class="wrapper-logo">
                <table>
                    <tr>
                        <td><a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo-krat.png" alt="Боевое Самбо" id="logo-kratos"></a>
                        </td>
                        <td>
                            <h1>Спортивный клуб</h1>
                            <h1><span>"</span>Кратос<span>"</span></h1>
                        </td>
                    </tr>
                </table>

            </div>


            <div class="wrapper-header-text-mobile">
                <a href="/"><h1>СК <span>"</span>Кратос<span>"</span></h1></a>
            </div>
        </div>

        <div class="kratos-page-wrapper">


            <script>
                jQuery(document).ready(function ($) {
                    $(".btn-slide").click(function () {
                        $("#menu-top").slideToggle("slow");
                        $(this).toggleClass("active");
                    });
                });
            </script>

            <div class="menu-hider">
                <button class="btn-slide"><i class="fa fa-bars"></i>&nbsp;Меню</button>
            </div>

            <nav class="navigation-top k-effects" id="menu-top">
                <?php wp_nav_menu( array( 'menu_class'=>'menu-top', 'theme_location'=>'top-menu' ) ); ?>
            </nav>

            <div class="k-container">