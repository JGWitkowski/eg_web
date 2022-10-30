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
        <div class="eg-beers__list-item-left">
          <img src="https://via.placeholder.com/400" alt="Stacy's Mom" class="beers__list-img">
        </div>
        <div class="eg-beers__list-item-right">
            <h1 class="beers__list-h1">STACY'S MOM</h1>
            <h2 class="beers__list-h2">YOU'RE IN LOVE WITH THIS BEER</h2>
            <p class="beers__list-p">
              One of our year-round flagship beers, Stacy's Mom is an IPA with low bitterness and lots of hop flavor. It's dry-hopped entirely with Citra, which, as you may have guessed, gets it's name from its strong citrus notes. (You're so smart!)
            </p>
            <div class="beers__details">
            <ul class="beers__details-list">
              <li class="beers__details-list-item">
                STYLE: Guava IPA
              </li>
              <li class="beers__details-list-item">
                ABV: 5.5%
              </li>
              <li class="beers__details-list-item">
                IBU: 11
              </li>
              <li class="beers__details-list-item">
                HOPS: Hallertau, and Saaz
              </li>
              <li class="beers__details-list-item">
                MALTS: 2 Row, Wheat, Carapils
              </li>
            </ul>
          </div>
        </div>
    </li>
</ul>
    <!-- END YEAR ROUND BEERS ITEM -->

  <!-- END YEAR ROUND BEERS LIST -->


  <!-- BEGIN SEASONAL BEERS LIST -->
  <ul class="eg-beers__seasonal-list">
    <!-- BEGIN SEASONAL BEERS ITEM -->
    <li class="eg-beers__seasonal-item">
        <div class="eg-beers__seaosonal-item-top">
            <h2 class="eg-h2 seasonal">#ICAN'TEVEN</h2>
            <h3 class="eg-h3 seasonal">WATERMELON ALE</h3>
        </div>
    </li>
</ul>
    <!-- END SEASONAL BEERS ITEM -->

  <!-- END SEASONAL BEERS LIST -->


    <!-- #############
  ################## 
  OUR TAPROOM COMPONENTS
  ##################   
  ###############--> 

   <!-- BEGIN OUR TAPROOM HEADER -->

   <div class="taproom">
    <header class="tap-header">
      <span>OUR TAPROOM</span>
    </header>

  <!-- END OUR TAPROOM HEADER -->

  <!-- BEGIN REST OF OUR TAPROOM COMPONENTS -->

    <section class="tap-location">
      <img src="https://via.placeholder.com/375" alt="Evil Genius Lab" class="lab-img">
      <div class="tap-loc-child">
      <h1>THE LAB</h1>
      <p>Fishtown, Philadelphia</p>
      <p>
      Evil Genius Beer Co.
        1727 Front Street
        Philadelphia, PA 19122
      </p>
      <h3>215-425-6820</h3>
      </div>
    </section>

    <section class="taplist">
      <div class="taplist-head">
        <h1>OUR CURRENT TAPLIST</h1>
        <h3>Updated 6hrs 14mins ago</h3>
        <img src="https://via.placeholder.com/600" alt="Evil Genius Taplist" class="taplist-img">
      </div>
      <div class="taplist-bottom">
      <div class="hours">
        <h1>HOURS</h1>
        <p>SUNDAY 2:00PM - 8:00PM</p>
      </div>
      <div class="menus">
        <h1>MENUS</h1>
        <button class="btn-one" id="brunch">BRUNCH</button>
        <button class="btn-one" id="all-day">ALL DAY</button>
      </div>
      </div>
    </section>

    <footer class="taproom-footer">
      <div class="footer-sign-up">
        <h1>EVIL NEWSLETTER</h1>
        <form>
          <input type="text" id="email" name="email" placeholder="ENTER YOUR EMAIL ADDRESS">
          <button type="submit" class="form-submit">SIGN UP</button>
        </form>

        <h1>CONTACT US</h1>
        <p>Evil Genius Beer Co.</p>
        <p>info@evilgenius.com</p>
      </div>

    <div class="footer-follow">
        <h1>FOLLOW US</h1>
        <img src="https://via.placeholder.com/30" alt="Evil Genius Taplist" class="taplist-img">
        <img src="https://via.placeholder.com/30" alt="Evil Genius Taplist" class="taplist-img">
        <img src="https://via.placeholder.com/30" alt="Evil Genius Taplist" class="taplist-img">
    </div>

    <div class="footer-logo">
      <button class="btn-two">WHOLESALERS</button>
    </div>

  </footer>

  </div>



  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>