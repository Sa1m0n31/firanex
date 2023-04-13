<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package firanex
 */

?>

<!-- FOOTER -->
<footer class="footer w">
    <div class="footer__main flex">
        <div class="footer__col">
            <a href="/" class="footer__col__logo">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/logo.png"; ?>" alt="firanex" />
            </a>
            <p class="footer__col__address">
                <span class="bold">Golub-Dobrzyń</span>
                <span>ul. Piłsudskiego 14/1</span>
                <span>(naprzeciwko policji)</span>
                <span>Poniedziałek-piątek 9:00 - 17:00</span>
                <span>Sobota 9:00 - 14:00</span>
            </p>
        </div>
        <div class="footer__col">
            <h5 class="footer__col__header">
                Marka Firanex
            </h5>
            <ul class="footer__col__list">
                <li>
                    <a class="footer__col__link" href="<?php echo home_url(); ?>#oferta">
                        Oferta
                    </a>
                </li>
                <li>
                    <a class="footer__col__link" href="<?php echo home_url(); ?>#onas">
                        O nas
                    </a>
                </li>
                <li>
                    <a class="footer__col__link" href="<?php echo home_url(); ?>#kontakt">
                        Kontakt
                    </a>
                </li>
                <li>
                    <a class="footer__col__link" href="<?php echo home_url(); ?>#realizacje">
                        Realizacje
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer__col">
            <h5 class="footer__col__header">
                Nasza oferta
            </h5>
            <ul class="footer__col__list">
                <li>
                    <a class="footer__col__link" href="<?php echo get_page_link(get_page_by_title('Wystroj okien Golub-Dobrzyn')->ID); ?>">
                        Wystrój okien Golub-Dobrzyń
                    </a>
                </li>
                <li>
                    <a class="footer__col__link" href="<?php echo get_page_link(get_page_by_title('Wystroj okien Brodnica')->ID); ?>">
                        Wystrój okien Brodnica
                    </a>
                </li>
                <li>
                    <a class="footer__col__link" href="<?php echo get_page_link(get_page_by_title('Wystroj okien Rypin')->ID); ?>">
                        Wystrój okien Rypin
                    </a>
                </li>
                <li>
                    <a class="footer__col__link" href="<?php echo get_page_link(get_page_by_title('Wystroj okien Torun')->ID); ?>">
                        Wystrój okien Toruń
                    </a>
                </li>
                <li>
                    <a class="footer__col__link" href="<?php echo get_page_link(get_page_by_title('Wystroj okien Bydgoszcz')->ID); ?>">
                        Wystrój okien Bydgoszcz
                    </a>
                </li>
                <li>
                    <a class="footer__col__link" href="<?php echo get_page_link(get_page_by_title('Firany Golub-Dobrzyn')->ID); ?>">
                        Firany Golub-Dobrzyń
                    </a>
                </li>
                <li>
                    <a class="footer__col__link" href="<?php echo get_page_link(get_page_by_title('Firany Lipno')->ID); ?>">
                        Firany Lipno
                    </a>
                </li>
                <li>
                    <a class="footer__col__link" href="<?php echo get_page_link(get_page_by_title('Firany Wabrzezno')->ID); ?>">
                        Firany Wąbrzeźno
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer__col">
            <h5 class="footer__col__header">
                Kontakt
            </h5>
            <span class="bold block">
                Golub-Dobrzyń, ul. Piłsudskiego 14/1:
            </span>
            <a class="team__main__item__phoneNumber"
               href="tel:<?php echo str_replace(' ', '', get_field('nr_telefonu_1', 42)); ?>">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/tel.svg"; ?>" alt="telefon" />
                <?php echo get_field('nr_telefonu_1', 42); ?>
            </a>

            <span class="bold block marginTop">
                Anna:
            </span>
            <a class="team__main__item__phoneNumber"
               href="tel:<?php echo str_replace(' ', '', get_field('nr_telefonu_2', 42)); ?>">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/tel.svg"; ?>" alt="telefon" />
                <?php echo get_field('nr_telefonu_2', 42); ?>
            </a>
        </div>
    </div>
    <div class="footer__bottom flex">
        <h6 class="footer__bottom__header">
            &copy; 2023 FIRANEX Wystrój i aranżacja wnętrz Anna Beck. Wykonanie
            <a href="https://skylo.pl"
               target="_blank"
               rel="noreferrer">
                Skylo.pl
            </a>
        </h6>
        <div class="footer__bottom__socialMedia flex flex--end">
                <span>
                    Social media:
                </span>
            <a class="siteHeader__socialMedia__item"
               href="<?php echo get_field('facebook', 42); ?>"
               target="_blank"
               rel="noreferrer">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/facebook-red.svg"; ?>" alt="facebook" />
            </a>
            <a class="siteHeader__socialMedia__item"
               href="<?php echo get_field('instagram', 42); ?>"
               target="_blank"
               rel="noreferrer">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/instagram-red.svg"; ?>" alt="instagram" />
            </a>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>

</body>
</html>
