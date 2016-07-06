<?php get_header(); ?>

    <!--content section -->
    <main>
        <grid-row>
            <grid-columns class="default-12 large-8 article-list">
             <?php while ( have_posts() ) : the_post(); ?>
                <article>
                    <a class="title-link" href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) );?>"><?php the_title(); ?></a>
                    <flex-box class="byline-box posts">
                        <span class="blog-byline">By </span>
                        <a class="blog-byline" href="<?php the_author_link(); ?>"><?php the_author(); ?></a>
                        <span class="icon-calendar blog-icon margin-left margin-right"></span>
                        <span class="blog-subheader"><?php the_time('F j, Y'); ?></span>

                        <a class="blog-comments" href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
                        <span>|</span>
                        <a href="<?php comments_link(); ?>">Write a Comment</a>
                    </flex-box>
                    <section>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="btn-secondary small btn-more">more <span class="icon-arrow-forward"></span></a>
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

                <?php posts_nav_link( " ", "Previous", "Next" ); ?>
                
            </grid-columns>
        </grid-row>
    </main>
    <!--content section-->
<?php get_footer(); ?>