<?php
/*
 * Template Name: Components
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
      <img src="https://via.placeholder.com/375" alt="Evil Genius Lab" class="lab-img">
      <h1>THE LAB</h1>
      <p>Fishtown, Philadelphia</p>
      <p>Evil Genius Beer Co.<br>
        1727 Front Street
        Philadelphia, PA 19122
      </p>
      <h3>215-425-6820</h3>
    </section>
  </div>



  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>