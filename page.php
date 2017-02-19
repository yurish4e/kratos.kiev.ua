<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package KRATOStwo
 */

get_header(); ?>

<div class="row" id="k-row">

    <div class="col-md-2 k-effects" id="k-sidebar">
        <?php get_sidebar(); ?>
    </div>

    <div class="col-md-10" id="k-main-content">
        <?php if ( have_posts() ) : ?>

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <?php /* Include the Post-Format-specific template for the content. * If you want to override this in a child theme, then include a file * called content-___.php (where ___ is the Post Format name) and that will be used instead. */ get_template_part( 'content', get_post_format() ); ?>

        <?php endwhile; ?>

        <?php the_posts_navigation(); ?>

        <?php else : ?>

        <?php get_template_part( 'content', 'none' ); ?>

        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>