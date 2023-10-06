<?php
/*
 Template Name: Start Up Investment
*/
 ?>
 <?php get_header(); ?>
 
  <main>
         <!--about_bnr-->
         <section class="about_bnr startup_bnr">
		           <div id="parallax" style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
            <div data-depth="0.4" class="layer" style="position: relative; display: block; left: 0px; top: 0px; transform: translate3d(65.7328px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
              <div id="particles-js"><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="1903" height="952"></canvas></div>
            </div>
            <div data-depth="0.3" class="layer" style="position: absolute; display: block; left: 0px; top: 0px; transform: translate3d(49.2996px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
            </div>
          </div>
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                     <div class="about_bnr_text">
                        <h1><?php the_field('start-investment-heading'); ?></h1>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--how-we-work-section-->
         <section class="how-we-work-section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12 outer">
                     <div class="heading">
                        <h2><?php the_field('work-heading'); ?></h2>
                     </div>
                  </div>
				  <?php  
				  $i=1;
				  if(have_rows('work-repeater')): ?>
				  <?php while(have_rows('work-repeater')): the_row();
                      				  ?>
                  <div class="col-md-4">
                     <div class="item">
                        <div class="icon <?php if($i%3==1){echo ' ';}else if($i%3==2){ echo 'icon-tow';}else{ echo 'icon-three';} ?>">
                           <img src="<?php the_sub_field('icon-img'); ?>" alt="img">
                           <span><?php the_sub_field('span'); ?></span>
                        </div>
                       <?php the_sub_field('work-txt'); ?>
                        <?php
                             if ($i % 3 == 0) {
                                      } else {
                              echo '<div class="arrow-img">';
                             $image_url = get_sub_field('arrow-img'); 
                             echo '<img src="' . esc_url($image_url) . '">';
                               echo '</div>';
                                     }
                                   ?>
                     </div>
                  </div>
                <?php 
				$i++;
				endwhile;    
				else:
				endif; ?>
               </div>
            </div>
         </section>
         <!--forefront-->
         <section class="forefront">
            <div class="container-fulid">
               <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-6 p-0">
                     <div class="forefront_left">
                        <div class="forefront_left_main">
                           <h2><?php the_field('forefront-main'); ?></h2>
                           <ul class="list-item">
                              <?php the_field('list-item'); ?>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-6 p-0">
                     <div class="forefront_right">
					 <?php if(get_field('forefront-img')):?>
                        <img src="<?php the_field('forefront-img'); ?>" class="img-fluid" alt="logo">
						<?php endif; ?>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="buy_sell">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-6">
                     <div class="buy_sell_left">
					 <?php if(get_field('buy-sell-img')): ?>
                        <img src="<?php the_field('buy-sell-img'); ?>" class="img-fluid" alt="logo">
						<?php endif; ?>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-6">
                     <div class="buy_sell_right">
                       <?php the_field('buy-sell-txt'); ?>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="review india_demat_review">
            <div class="container">
               <div class="row">
			   <?php if(have_rows('review-repeater')):
                    while(have_rows('review-repeater')): the_row();			   ?>
                  <div class="col-sm-4 col-md-4 col-lg-4">
                     <div class="review_left">
                        <?php the_sub_field('review-txt'); ?>
                     </div>
                  </div>
                <?php endwhile; 
				else:
				endif; ?>
               </div>
            </div>
         </section>

         
      </main>
 
 <?php get_footer(); ?>