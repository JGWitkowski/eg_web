<?php
/*
 * Template Name: Our Wholesalers
 * description: >-
  Page template without sidebar
 */

get_header(); ?>
<?php $loop = new WP_Query( array( 'post_type' => 'wholesalers', 'posts_per_page' => 10 ) );  ?>
<div id="primary" class="site-content">
    <div class="whole-salers-heading-container">
        <img class="whole-salers-heading-image" src="/wp-content/uploads/2022/11/wholesalerstitlesvg.svg">
</div>
  <div id="content" role="main">
    <div class="entry-content">
        <div class="acc-container"> 
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <!-- Accordion -->       
            <div class="acc">
                <div class="acc-head">
                    <h1><?php the_title() ?></h1>
                </div>
                <div class="acc-content">
                    <div class="acc-content-layout">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        </div>
    </div>
    
  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>