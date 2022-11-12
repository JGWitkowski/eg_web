<?php
/*
 * Template Name: Our Beers
 * description: >-
  Page template without sidebar
 */

get_header(); ?>

<div id="primary" class="site-content">
  
  <div id="content" role="main">
  <div class="eg_main">
  <?php $loop = new WP_Query( array( 'post_type' => 'beers', 'posts_per_page' => 10 ) );  ?>
  <div>
    <ul>
      <li data-filter="year-round">Year Round Beer</li>
      <li data-filter="seasonal">Seasonal Beer</li>
      <li data-filter="every">Every Beer Name Ever</li>
    </ul>
  </div>
  <ul id="year-round" class="eg-beers__list">
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <!-- BEGIN YEAR ROUND BEERS LIST -->
  <?php if(has_term('year_round', 'beer_types')) :?>
        <!-- BEGIN YEAR ROUND BEERS ITEM -->
        <li class="eg-beers__list-item">
            <div class="eg-beers__list-item-left">
              <img src="<?php the_field('image');?>" alt="Stacy's Mom" class="beers__list-img">
            </div>
            <div class="eg-beers__list-item-right">
                <h1 class="beers__list-h1"><?php the_title(); ?></h1>
                <h2 class="beers__list-h2"><?php the_field('tagline'); ?></h2>
                <p class="beers__list-p">
                <?php the_field('description'); ?>
                </p>
                <div class="beers__details">
                <ul class="beers__details-list">
                  <li class="beers__details-list-item">
                  <?php the_field('style'); ?>
                  </li>
                  <li class="beers__details-list-item">
                  <?php the_field('abv'); ?>
                  </li>
                  <li class="beers__details-list-item">
                  <?php the_field('ibu'); ?>
                  </li>
                  <li class="beers__details-list-item">
                  <?php the_field('hops'); ?>
                  </li>
                  <li class="beers__details-list-item">
                  <?php the_field('malts'); ?>
                  </li>
                </ul>
              </div>
            </div>
        </li>
  <?php endif;?>
<?php endwhile; ?>
</ul>
<ul id="seasonal" class="eg-beers__list" style="display: none;">
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <!-- BEGIN YEAR ROUND BEERS LIST -->
  <?php if(has_term('seasonal', 'beer_types')) :?>
        <!-- BEGIN YEAR ROUND BEERS ITEM -->
        <li class="eg-beers__list-item">
            <div class="eg-beers__list-item-left">
              <img src="<?php the_field('image');?>" alt="Stacy's Mom" class="beers__list-img">
            </div>
            <div class="eg-beers__list-item-right">
                <h1 class="beers__list-h1"><?php the_title(); ?></h1>
                <h2 class="beers__list-h2"><?php the_field('tagline'); ?></h2>
                <p class="beers__list-p">
                <?php the_field('description'); ?>
                </p>
                <div class="beers__details">
                <ul class="beers__details-list">
                  <li class="beers__details-list-item">
                  <?php the_field('style'); ?>
                  </li>
                  <li class="beers__details-list-item">
                  <?php the_field('abv'); ?>
                  </li>
                  <li class="beers__details-list-item">
                  <?php the_field('ibu'); ?>
                  </li>
                  <li class="beers__details-list-item">
                  <?php the_field('hops'); ?>
                  </li>
                  <li class="beers__details-list-item">
                  <?php the_field('malts'); ?>
                  </li>
                </ul>
              </div>
            </div>
        </li>
  <?php endif;?>
<?php endwhile; ?>
</ul>
<ul id="every" class="eg-beers__list" style="display: none;">
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <!-- BEGIN YEAR ROUND BEERS LIST -->
        <!-- BEGIN YEAR ROUND BEERS ITEM -->
        <li class="eg-beers__list-item">
            <div class="eg-beers__list-item-left">
              <img src="<?php the_field('image');?>" alt="Stacy's Mom" class="beers__list-img">
            </div>
            <div class="eg-beers__list-item-right">
                <h1 class="beers__list-h1"><?php the_title(); ?></h1>
                <h2 class="beers__list-h2"><?php the_field('tagline'); ?></h2>
                <p class="beers__list-p">
                <?php the_field('description'); ?>
                </p>
                <div class="beers__details">
                <ul class="beers__details-list">
                  <li class="beers__details-list-item">
                  <?php the_field('style'); ?>
                  </li>
                  <li class="beers__details-list-item">
                  <?php the_field('abv'); ?>
                  </li>
                  <li class="beers__details-list-item">
                  <?php the_field('ibu'); ?>
                  </li>
                  <li class="beers__details-list-item">
                  <?php the_field('hops'); ?>
                  </li>
                  <li class="beers__details-list-item">
                  <?php the_field('malts'); ?>
                  </li>
                </ul>
              </div>
            </div>
        </li>
<?php endwhile; ?>
</ul>
    <!-- END YEAR ROUND BEERS ITEM -->
  </div>
  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>
