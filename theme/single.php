<?php get_header(); ?>

  <!--content section -->
<main>
    <grid-row>
        <grid-columns class="default-12 large-8 article-list">
            <?php while ( have_posts() ) : the_post(); ?>
                <article>
                    <h3 class="title-header"><?php the_title(); ?></h3>
                    <flex-box class="byline-box posts">
                        <span class="blog-byline">By </span>
                        <a class="blog-byline" href="<?php the_author_link(); ?>"><?php the_author(); ?></a>
                        <span class="icon-calendar blog-icon margin-left margin-right"></span>
                        <span class="blog-subheader"><?php the_time('F j, Y'); ?></span>

                        <a class="blog-comments" href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
                        <span>|</span>
                        <a href="<?php comments_link(); ?>">Write a Comment</a>
                    </flex-box>
                    <section class="the-content">
                        <?php the_content(); ?>
                    </section>
                </article>
            <?php endwhile; ?>
        </grid-columns>
        <grid-columns class="default-12 large-4 hide-for-medium-down">
            <aside class="sidebar" ea-bind="sidebar">
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
            </aside>
        </grid-columns>
    </grid-row>
    <grid-row>
        <grid-columns class="default-12 page-navigation">
            <?php next_post_link('%link','Previous'); ?>   <?php previous_post_link('%link','Next'); ?>
        </grid-columns>
    </grid-row>
</main>
  <!--content section-->
<?php get_footer(); ?>
