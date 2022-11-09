<?php
/*
 * Template Name: Taproom
 * description: >-
  Page template without sidebar
 */

get_header(); ?>

<div id="primary" class="site-content">
  <div id="content" role="main">

  <!-- #############
  ################## 
  BEERS COMPONENTS
  ##################   
  ###############--> 
    
  <!-- BEGIN OUR BEERS HEADER -->
<div class="eg-header">
    <h1 class="eg-h1"></h1>
</div>
  <!-- END OUR BEERS HEADER -->


  <!-- BEGIN OUR BEERS FILTER -->

  <!-- END OUR BEERS FILTER -->


  <!-- BEGIN YEAR ROUND BEERS LIST -->
<ul class="eg-beers__list">
    <!-- BEGIN YEAR ROUND BEERS ITEM -->
    <li class="eg-beers__list-item">
        <div class="eg-beers__list-item-left"></div>
        <div class="eg-beers__list-item-right">
            <h2 class="eg-h2 eg--white">#Adulting</h2>
        </div>
    </li>
</ul>
    <!-- END YEAR ROUND BEERS ITEM -->

  <!-- END YEAR ROUND BEERS LIST -->


  <!-- BEGIN SEASONAL BEERS LIST -->

    <!-- BEGIN SEASONAL BEERS ITEM -->

    <!-- END SEASONAL BEERS ITEM -->

  <!-- END SEASONAL BEERS LIST -->


    <!-- #############
  ################## 
  OUR TAPROOM COMPONENTS
  ##################   
  ###############--> 

   <!-- BEGIN OUR TAPROOM HEADER -->

   <div class="taproom">
    <header class="taphead">
      <span>OUR TAPROOM</span>
    </header>

  <!-- END OUR TAPROOM HEADER -->

  <!-- BEGIN REST OF OUR TAPROOM COMPONENTS -->

    <section class="the-lab">
    <?php while ( have_posts() ) : the_post(); ?>
<!-- <p><?php the_content(); ?></p> -->
<h1><?php the_field('name'); ?></h1>
      <img src="https://via.placeholder.com/375" alt="Evil Genius Lab" class="lab-img">
      <h1><?php the_field('name'); ?></h1>
      <p><?php the_field('location'); ?></p>
      <p><?php the_field('address_line_1'); ?><br>
      <?php the_field('address_line_2'); ?><br>
      <?php the_field('address_line_3'); ?>
      </p>
      <h3><?php the_field('phone_number'); ?></h3>
      <?php endwhile; // end of the loop. ?>
    </section>
  </div>

  <?php $loop = new WP_Query( array( 'post_type' => 'hours', 'posts_per_page' => 10 ) );  ?>
  <section class="taplist">
      <div class="taplist-head">
        <h1>OUR CURRENT TAPLIST</h1>
        <h3>Updated 6hrs 14mins ago</h3>
        <img src="https://via.placeholder.com/600" alt="Evil Genius Taplist" class="taplist-img">
      </div>
      <div class="taplist-bottom">
      <div class="hours">
        <h1>HOURS</h1>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <!-- BEGIN YEAR ROUND BEERS LIST -->
    <p><?php the_title();?> <?php the_field('event');?> <?php the_field('opening_time');?><?php the_field('opening_time_meridiem');?> - <?php the_field('closing_time');?><?php the_field('closing_time_meridiem');?></p>
<?php endwhile; ?>
      </div>
      <div class="menus">
        <h1>MENUS</h1>
        <button class="btn-one" id="brunch">BRUNCH</button>
        <button class="btn-one" id="all-day">ALL DAY</button>
      </div>
      </div>
    </section>
</div>


  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>