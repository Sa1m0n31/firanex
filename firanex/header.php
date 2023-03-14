<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package firanex
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="container">
    <!-- MOBILE MENU -->
    <div class="mobileMenu center">
        <button class="btn--closeMenu"
                onclick="closeMenu()">
            &times;
        </button>

        <div class="mobileMenu__center">
            <a class="mobileMenu__logo"
               href="'/">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/logo.png"; ?>" alt="logo" />
            </a>

            <ul class="mobileMenu__menu">
                <li>
                    <a href="/"
                       class="mobileMenu__menu__item">
                        Strona główna
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>#oferta"
                       onclick="closeMenu()"
                       class="mobileMenu__menu__item">
                        Oferta
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>#onas"
                       onclick="closeMenu()"
                       class="mobileMenu__menu__item">
                        O nas
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>#realizacje"
                       onclick="closeMenu()"
                       class="mobileMenu__menu__item">
                        Realizacje
                    </a>
                </li>
            </ul>
        </div>

        <a class="mobileMenu__phoneNumber center"
           href="tel:+48516126855">
            <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/tel.svg"; ?>" alt="telefon" />
            516 126 855
        </a>
    </div>

    <!-- HERO -->
    <div class="hero">
        <img class="hero__image hero__image--desktop" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/firanex-aranzacja-wnetrz.png?n=2"; ?>" alt="aranzacje-wnetrz" />
        <img class="hero__image hero__image--mobile" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/firanex-mobile.png?n=1"; ?>" alt="aranzacje-wnetrz" />

        <header class="siteHeader w flex">
            <a href="/" class="siteHeader__logo">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/logo.png"; ?>" alt="firanex-aranzacje" />
            </a>

            <a href="/" class="siteHeader__logo--mobile">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/logo-mobile.png"; ?>" alt="aranżacje-wnętrz-golub-dobrzyń" />
            </a>

            <button class="btn--mobileMenu" onclick="openMenu()">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/menu.svg"; ?>" alt="menu" />
            </button>

            <ul class="siteHeader__menu flex">
                <li class="siteHeader__menu__item">
                    <a href="/" class="siteHeader__menu__item__link">
                        Strona główna
                    </a>
                </li>
                <li class="siteHeader__menu__item">
                    <a href="<?php echo home_url(); ?>#oferta" class="siteHeader__menu__item__link">
                        Oferta
                    </a>
                </li>
                <li class="siteHeader__menu__item">
                    <a href="<?php echo home_url(); ?>#onas" class="siteHeader__menu__item__link">
                        O nas
                    </a>
                </li>
                <li class="siteHeader__menu__item">
                    <a href="<?php echo home_url(); ?>#realizacje" class="siteHeader__menu__item__link">
                        Realizacje
                    </a>
                </li>
            </ul>

            <div class="siteHeader__socialMedia flex flex--end">
                <a class="siteHeader__socialMedia__item"
                   href="https://www.facebook.com/firanex.decor"
                   target="_blank"
                   rel="noreferrer">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/facebook.svg"; ?>" alt="facebook" />
                </a>
                <a class="siteHeader__socialMedia__item"
                   href="https://www.instagram.com/firanex.decor/"
                   target="_blank"
                   rel="noreferrer">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/instagram.svg"; ?>" alt="instagram" />
                </a>
            </div>
        </header>
