<!-- Content Page Template -->

<?php
// Template Name: Content Page

get_header();
?>

<div class="content-page">
    <h1><?php the_title(); ?></h1>
    <div class="content">
        <?php the_content(); ?>
    </div>
</div>

<?php
get_footer();
?>