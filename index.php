<?php /** * The main template file. * * This is the most generic template file in a WordPress theme * and one of the two required files for a theme (the other being style.css). * It is used to display a page when nothing more specific matches a query. * E.g., it puts together the home page when no home.php file exists. * Learn more: http://codex.wordpress.org/Template_Hierarchy * * @package KRATOStwo */ get_header(); ?>

<div class="row" id="k-row">

    <div class="col-md-2 col-sd-2 col-xs-2 k-effects" id="k-sidebar">
        <?php get_sidebar(); ?>
    </div>

    <div class="col-md-10 col-sd-10 col-xs-12 " id="k-main-content">
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