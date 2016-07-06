<?php get_header(); ?>

    <!--content section -->
 <main>
    <section>
        <?php while ( have_posts() ) : the_post(); ?>
            <grid-row>
                <grid-columns class="default-12">
                    <h3 class="title-header"><?php the_title(); ?></h3>
                    <article class="article">
                        <?php the_content(); ?>
                    </article>
                </grid-columns>
            </grid-row>
        <?php endwhile; ?>
    </section>
 </main>
   <!--content section-->


<?php get_footer(); ?>

