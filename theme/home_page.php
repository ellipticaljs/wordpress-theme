<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
    <section class="index">
        <grid-row>
            <grid-columns class="default-12">
                <flex-box class="column center">
                    <h3>Welcome</h3>
                    <flex-box>
                        <h5 class="opacity-07">Simple, Responsive Starter</h5>
                        <h5>&nbsp;Kit</h5>
                    </flex-box>
                </flex-box>
            </grid-columns>
        </grid-row>
    </section>
    <!--content section -->
    <section>
      <?php while (have_posts()) : the_post(); ?>
      <grid-row>
          <grid-columns class="default-12">
              <?php the_content() ?>
          </grid-columns>
      </grid-row>
      <?php endwhile; ?>
    </section>
    <!--content section-->
<?php get_footer(); ?>