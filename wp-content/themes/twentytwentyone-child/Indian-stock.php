<?php
/* 
Template Name: Indian Stock 
*/ 
?>

<?php get_header(); ?>

<main>
         <!--about_bnr-->
         <section class="about_bnr indian-stock">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                     <div class="about_bnr_text">
                        <h1><?php the_field('indian-bnr-text'); ?></h1>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--what_demat-->
         <section class="what_demat">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-6">
                     <div class="what_demat_left">
                        <?php the_field('what-dement-txt'); ?>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-6">
                     <div class="what_demat_left">
					 <?php if(get_field('what-dement-img')): ?>
                        <img src="<?php the_field('what-dement-img'); ?>" class="img-fluid" alt="demat">
						<?php endif; ?>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--indian_platform-->
         <section class="indian_platform">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-12">
                     <div class="heading">
                        <h2><?php the_field('platform-heading'); ?></h2>
                     </div>
                  </div>
                  <?php
             if( have_rows('platform-repeater') ):
              while( have_rows('platform-repeater') ) : the_row();  ?>				  
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <div class="indian_platform_box">
                        <figure>
                           <img src="<?php the_sub_field('platform-img'); ?>" class="img-fluid" alt="selection">
                        </figure>
                        <a href="#">
                           <h4><?php the_sub_field('platform-box-cntnt'); ?></h4>
                        </a>
                     </div>
                  </div>
             <?php   endwhile;
                    else :
                 endif; ?>
               </div>
            </div>
         </section>
         <section class="start_investing_india">
            <div class="container">
               <div class="row">
			   <?php
                if( have_rows('investing-india-repeater') ):
                     while( have_rows('investing-india-repeater') ) : the_row(); ?>
                  <div class="col-sm-12 col-md-6 col-lg-4 outer">
                     <div class="investment_india_left">
                        <figure>
                           <img src="<?php the_sub_field('investing-india-img'); ?>" alt="sample-image">
                        </figure>
                        <div class="uk-card-body">
                         <?php  the_sub_field('uk-card-body'); ?>
                        </div>
                     </div>
                  </div>
             <?php      endwhile;
                      else :
                    endif;  ?>
               </div>
            </div>
         </section>
         <!--review india_demat_review-->
         <section class="review india_demat_review">
            <div class="container">
               <div class="row">
			   <?php
             if( have_rows('review-repeater') ):
            while( have_rows('review-repeater') ) : the_row();  ?>
                  <div class="col-sm-4 col-md-4 col-lg-4">
                     <div class="review_left">
                        <h2><?php the_sub_field('review-num'); ?></h2>
                        <p><?php the_sub_field('demat-review'); ?></p>
                     </div>
                  </div>
              <?php   endwhile;
                    else :
                endif;  ?>
               </div>
            </div>
         </section>
      </main>

<?php get_footer(); ?>
