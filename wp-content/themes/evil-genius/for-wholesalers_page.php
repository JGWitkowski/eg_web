<?php
/*
 * Template Name: For Wholesalers
 * description: >-
  Page template without sidebar
 */

get_header(); ?>
<div id="primary" class="site-content">
    <div class="whole-salers-heading-container whole-salers-heading-container--for">
        <img class="whole-salers-heading-image" src="/wp-content/uploads/2022/11/forwholesalerssvg.svg">
    </div>
    <div class="eg_main">
<!-- <div id="content" role="main"> -->
<!-- <div class="entry-content"> -->
        <?php $loop = new WP_Query( array( 'post_type' => 'salessheets', 'posts_per_page' => 10 ) );  ?>
        <div class="acc-container"> 
            <!-- Accordion -->       
                <div class="acc">
                    <div class="acc-head acc-head--for-wholesalers">
                        <h1>Sales sheets</h1>
                        <a herf="">Download All</a>
                    </div>
                    <div class="acc-content">
                        <div class="acc-content-layout">
                            <div class="for-wholesalers-grid">
                                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                    <a class="for-wholesalers-download-wrapper" href="<?php the_field('file'); ?>" download>
                                        <img src="https://dummyimage.com/260x200/000/fff">
                                        <p><?php the_title() ?></p>
                                    </a>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php $loop = new WP_Query( array( 'post_type' => 'taphandles', 'posts_per_page' => 10 ) );  ?>
        <div class="acc-container"> 
            <!-- Accordion -->       
                <div class="acc">
                    <div class="acc-head acc-head--for-wholesalers">
                        <h1>Tap Handles</h1>
                        <a herf="">Download All</a>
                    </div>
                    <div class="acc-content">
                        <div class="acc-content-layout">
                            <div class="for-wholesalers-grid">
                                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                    <a class="for-wholesalers-download-wrapper" href="<?php the_field('file'); ?>" download>
                                        <img src="https://dummyimage.com/260x200/000/fff">
                                        <p><?php the_title() ?></p>
                                    </a>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        <?php $loop = new WP_Query( array( 'post_type' => 'logos', 'posts_per_page' => 10 ) );  ?>
        <div class="acc-container"> 
            <!-- Accordion -->       
                <div class="acc">
                    <div class="acc-head acc-head--for-wholesalers">
                        <h1>Logos</h1>
                        <a herf="">Download All</a>
                    </div>
                    <div class="acc-content">
                        <div class="acc-content-layout">
                            <div class="for-wholesalers-grid">
                                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                    <a class="for-wholesalers-download-wrapper for-wholesalers-download-wrapper--half" href="<?php the_field('file'); ?>" download>
                                        <img src="https://dummyimage.com/573x297/000/fff">
                                        <p><?php the_title() ?></p>
                                    </a>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<p class="test-college">TEST college</p>
<p class="test-script">TEST script</p>
<p class="text-condensed">test condensed</p>    
<?php get_footer(); ?>