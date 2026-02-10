<?php
/**
 * Template Name: Custom Page
 * Description: A custom page template for the Harmonics theme.
 */
get_header();
?>

<div class="custom-page">
    <h1><?php the_title(); ?></h1>
    <div class="content">
        <?php
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
        ?>
    </div>
</div>

<?php
get_footer();
?>