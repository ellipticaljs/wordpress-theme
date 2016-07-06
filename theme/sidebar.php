<?php
/*
Template Name: Sidebar Page
*/
?>

<?php get_header(); ?>

<section class="outer">
    <?php while ( have_posts() ) : the_post(); ?>
    <grid-row>
        <grid-columns class="large-8 medium-8 default-12">
            <h3 class="page-title"><?php the_title(); ?></h3>
            <?php the_content(); ?>
        </grid-columns>
        <grid-columns class="large-4 medium-4 default-12">
            <h4 class="sidebar-title sidebar-gradient">Featured Items</h4>
            <aside class="sidebar">

            </aside>
        </grid-columns>
    </grid-row>
    <?php endwhile; ?>
</section>


<?php get_footer(); ?>

