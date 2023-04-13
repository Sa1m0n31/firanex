<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package firanex
 */

get_header();
?>
    <main class="hero__content w">
        <h1 class="hero__content__header">
            <?php echo get_field('naglowek_1', 42); ?>
        </h1>
        <h2 class="hero__content__subheader">
            <?php echo get_field('naglowek_2', 42); ?>
        </h2>

        <a class="btn btn--hero" href="#kontakt">
            <?php echo get_field('napis_na_przycisku_1', 42); ?>
        </a>
    </main>
    <div class="socialMedia">
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

    <!-- ABOUT US -->
    <div class="about w flex">
        <div class="about__left">
            <figure class="about__left__image">
                <img class="img" src="<?php echo get_field('o_nas_-_zdjecie_1', 42); ?>" alt="o-nas" />
            </figure>
            <figure class="about__left__image">
                <img class="img" src="<?php echo get_field('o_nas_-_zdjecie_2', 42); ?>" alt="o-nas" />
            </figure>
        </div>
        <div class="about__right">
            <h3 class="sectionHeader">
                <?php echo get_field('o_nas_-_naglowek', 42); ?>
            </h3>
            <p class="about__right__lead">
                <?php echo get_field('o_nas_-_naglowek_2', 42); ?>
            </p>
            <div class="about__right__text">
                <?php echo get_field('o_nas_-_tekst', 42); ?>
            </div>
        </div>
    </div>

    <!-- OFFER -->
    <div id="oferta" class="offer">
        <div class="w">
            <h3 class="sectionHeader">
                <?php echo get_field('oferta_-_naglowek', 42); ?>
            </h3>
            <div class="offer__main flex">
                <?php
                    $category = get_category_by_slug('uslugi');
                    $category_id = $category->term_id;

                    $args = array(
                        'cat' => $category_id,
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'order' => 'ASC'
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();

                            ?>
                            <div class="offer__main__item flex">
                                <figure class="offer__main__item__image center">
                                    <img class="img" src="<?php echo get_field('ikona'); ?>" alt="firany" />
                                </figure>
                                <div class="offer__main__item__content">
                                    <h4 class="offer__main__item__content__header">
                                        <?php echo the_title(); ?>
                                    </h4>
                                    <p class="offer__main__item__content__text">
                                        <?php echo the_content(); ?>
                                    </p>
                                </div>
                            </div>

                            <?php
                        }
                    }

                    wp_reset_postdata();
                ?>

            </div>
        </div>
    </div>

    <!-- OUR TEAM -->
    <div id="onas" class="team w">
        <h3 class="sectionHeader">
            <?php echo get_field('zespol_-_naglowek', 42); ?>
        </h3>
        <div class="team__main flex">

            <?php
                $category = get_category_by_slug('zespol');
                $category_id = $category->term_id;

                $args = array(
                    'cat' => $category_id,
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();

                        ?>
                        <div class="team__main__item">
                            <figure class="team__main__item__image">
                                <img class="img" src="<?php echo get_field('zdjecie'); ?>" alt="zespol" />
                            </figure>
                            <h4 class="team__main__item__name">
                                <?php echo the_title(); ?>
                            </h4>
                            <h5 class="team__main__item__post">
                                <?php echo get_field('posada'); ?>
                            </h5>
                            <a class="team__main__item__phoneNumber"
                               href="tel:+48516126855">
                                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/tel.svg"; ?>" alt="telefon" />
                                <?php echo get_field('telefon'); ?>
                            </a>
                        </div>

                            <?php
                    }
                }

                wp_reset_postdata();
            ?>

        </div>
    </div>

    <!-- BRANDS -->
    <div class="brands w">
        <h3 class="sectionHeader">
            Dostawcy
        </h3>

        <div class="brands__main flex">
            <div class="brands__main__item">
                <figure>
                    <img class="img" src="<?php echo get_field('glowni_dostawcy_-_zdjecie_1', 42); ?>" alt="polder-rajder" />
                </figure>
                <h4 class="brands__main__item__header">
                    <?php echo get_field('glowni_dostawcy_-_tytul_1', 42); ?>
                </h4>
                <p class="brands__main__item__text">
                    <?php echo get_field('glowni_dostawcy_-_opis_1', 42); ?>
                </p>
            </div>
            <div class="brands__main__item">
                <figure>
                    <img class="img" src="<?php echo get_field('glowni_dostawcy_-_zdjecie_2', 42); ?>" alt="polder-rajder" />
                </figure>
                <h4 class="brands__main__item__header">
                    <?php echo get_field('glowni_dostawcy_-_tytul_2', 42); ?>
                </h4>
                <p class="brands__main__item__text">
                    <?php echo get_field('glowni_dostawcy_-_opis_2', 42); ?>
                </p>
            </div>
            <div class="brands__main__item">
                <figure>
                    <img class="img" src="<?php echo get_field('glowni_dostawcy_-_zdjecie_3', 42); ?>" alt="polder-rajder" />
                </figure>
                <h4 class="brands__main__item__header">
                    <?php echo get_field('glowni_dostawcy_-_tytul_3', 42); ?>
                </h4>
                <p class="brands__main__item__text">
                    <?php echo get_field('glowni_dostawcy_-_opis_3', 42); ?>
                </p>
            </div>
        </div>

        <h5 class="brands__secondHeader">
            A także inne popularne marki z branży...
        </h5>
        <div class="brands__others">

            <?php
            $category = get_category_by_slug('dostawcy');
            $category_id = $category->term_id;

            $args = array(
                'cat' => $category_id,
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'order' => 'ASC'
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();

                    ?>
                    <a class="brands__others__link"
                       rel="noreferrer"
                       href="<?php echo get_field('link'); ?>">
                        <img class="img" src="<?php echo get_field('logo'); ?>" alt="zwoltex" />
                    </a>

                    <?php
                }
            }

            wp_reset_postdata();
            ?>

        </div>
    </div>

    <!-- CLUB -->
    <div class="club w">
        <h3 class="sectionHeader">
            <?php echo get_field('klub_firanex_-_naglowek_sekcji', 42); ?>
        </h3>

        <div class="club__section flex">
            <figure class="club__section__left">
                <img class="img" src="<?php echo get_field('klub_firanex_-_zdjecie_1', 42); ?>" alt="klub" />
            </figure>
            <div class="club__section__right">
                <h4 class="club__section__right__header">
                    <?php echo get_field('klub_firanex_-_naglowek_1', 42); ?>
                </h4>
                <p class="club__section__right__text">
                    <?php echo get_field('klub_firanex_-_tekst_1', 42); ?>
                </p>
                <p class="club__section__right__text">
                    <span>
                        <?php echo get_field('klub_firanex_-_naglowek_2', 42); ?>
                    </span>
                    <?php echo get_field('klub_firanex_-_tekst_2', 42); ?>
                </p>
                <p class="club__section__right__text">
                    <span>
                        <?php echo get_field('klub_firanex_-_naglowek_3', 42); ?>
                    </span>
                    <?php echo get_field('klub_firanex_-_tekst_3', 42); ?>
                </p>
            </div>
        </div>

        <div class="club__section flex">
            <div class="club__section__right">
                <h4 class="club__section__right__header">
                    <?php echo get_field('klub_firanex_-_naglowek_4', 42); ?>
                </h4>
                <p class="club__section__right__text">
                    <?php echo get_field('klub_firanex_-_tekst_4', 42); ?>
                </p>
                <p class="club__section__right__text">
                    <?php echo get_field('klub_firanex_-_tekst_5', 42); ?>
                </p>
            </div>
            <figure class="club__section__left">
                <img class="img" src="<?php echo get_field('klub_firanex_-_zdjecie_2', 42); ?>" alt="bon-podarunkowy" />
            </figure>
        </div>
    </div>

    <!-- PORTFOLIO -->
    <div id="realizacje" class="portfolio">
        <h3 class="sectionHeader w">
            <?php echo get_field('realizacje_-_naglowek', 42); ?>
        </h3>
        <div class="portfolio__main w">

            <div class="portfolio__big">
                <button class="btn--closePortfolioBig"
                        onclick="closeGallery()">
                    &times;
                </button>

                <button class="btn--arrow btn--prev"
                        onclick="galleryPrev()">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/next-arrow.svg"; ?>" alt="poprzedni" />
                </button>
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/realizacje-2.jpg"; ?>" alt="realizacje" />
                <button class="btn--arrow btn--next"
                        onclick="galleryNext()">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/next-arrow.svg"; ?>" alt="nastepny" />
                </button>
            </div>

            <div class="portfolio__main__carousel">
                <?php
                    $category = get_category_by_slug('realizacje');
                    $category_id = $category->term_id;
                    $i = 0;

                    $args = array(
                        'cat' => $category_id,
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'order' => 'ASC'
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();

                            ?>
                            <button class="portfolio__main__carousel__item portfolio__main__carousel__item--<?php echo $i+1; ?>" onclick="openGallery(<?php echo $i; ?>)">
                                <img class="img" src="<?php echo get_field('zdjecie'); ?>" alt="realizacje" />
                                <span class="portfolio__main__carousel__item__content">
                        <span class="portfolio__main__carousel__item__content__header">
                            <?php echo the_title(); ?>
                        </span>
                        <span class="portfolio__main__carousel__item__content__text">
                            <?php echo the_content(); ?>
                        </span>
                    </span>
                            </button>

                            <?php
                            $i++;
                        }
                    }

                    wp_reset_postdata();
                ?>

            </div>

            <div class="portfolio__main__controls flex">
                <button class="btn btn--control btn--prev" onclick="portfolioPrev()">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/arrow.svg"; ?>" alt="prev" />
                </button>

                <a class="btn btn--portfolioFacebook"
                   target="_blank"
                   rel="noreferrer"
                   href="<?php echo get_field('facebook', 42); ?>">
                    Zobacz wszystkie realizacje
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/facebook.svg"; ?>" alt="facebook" />
                </a>

                <button class="btn btn--control btn--next" onclick="portfolioNext()">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/arrow.svg"; ?>" alt="prev" />
                </button>
            </div>

            <a class="btn btn--portfolioFacebook btn--portfolioFacebookMobile"
               target="_blank"
               rel="noreferrer"
               href="<?php echo get_field('facebook', 42); ?>">
                Zobacz wszystkie realizacje
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/facebook.svg"; ?>" alt="facebook" />
            </a>
        </div>

    </div>

    <!-- CONTACT -->
    <div id="kontakt" class="contact">
        <h3 class="sectionHeader w">
            <?php echo get_field('kontakt_-_naglowek', 42); ?>
        </h3>
        <div class="contact__main w">
            <div class="contact__main__form">
                <h5 class="contact__main__form__header">
                    <?php echo get_field('formularz_-_naglowek', 42); ?>
                </h5>
                <p class="contact__main__form__text">
                    <?php echo get_field('formularz_-_tekst', 42); ?>
                </p>

                <?php
                    echo do_shortcode('[contact-form-7 id="5" title="Formularz 1"]');
                ?>
            </div>
            <div class="contact__main__map">
                <?php
                    echo do_shortcode('[wpgmza id="1"]')
                ?>
            </div>
        </div>
    </div>
<?php
get_footer();
?>