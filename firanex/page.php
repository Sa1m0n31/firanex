<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package firanex
 */

get_header();
?>

    <main class="hero__content hero__content--page w">
        <h1 class="hero__content__header">
            <?php
                echo the_title();
            ?>
        </h1>

        <a class="btn btn--hero" href="#szczegoly">
            Dowiedz się więcej
        </a>
    </main>
    </div>

<div class="page w" id="szczegoly">
    <?php
        echo the_content();
    ?>
</div>

<?php
get_footer();
?>