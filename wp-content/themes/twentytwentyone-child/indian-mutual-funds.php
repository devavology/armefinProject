<?php 
/* 
Template Name: indian mutual funds
*/
?>
 <?php get_header(); ?>
 
 <main>
         <!--about_bnr-->
         <section class="about_bnr mutual_funds">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                     <div class="about_bnr_text">
                        <h1><?php the_field('indian-bnr-txt'); ?></h1>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--what_demat-->
         <section class="what_demat mutual_funds_future">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-6">
                     <div class="what_demat_left_flex">
                        <div class="what_demat_left">
                          <?php the_field('demat-content'); ?>
                        </div>
                        <div class="row second">
						<?php
                       if( have_rows('mutual-box-repeater') ):
                          while( have_rows('mutual-box-repeater') ) : the_row(); ?>
                           <div class="col-6 col-sm-4 col-md-4 col-lg-4">
                              <div class="mutual_box first">
                                 <p><?php the_sub_field('mutual-box-cntnt'); ?></p>
                              </div>
                           </div>
                    <?php endwhile;
                        else :
                     endif; ?>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-6">
                     <div class="what_demat_left">
					 <?php if(get_field('demat-image')): ?>
                        <img src="<?php the_field('demat-image'); ?>" class="img-fluid" alt="demat">
						<?php endif; ?>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--mutual_stock-->
        
         <section class="fixclusives">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-12">
                     <div class="heading">
                        <h2><?php the_field('fixclusive-heading'); ?></h2>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-12">
                     <div class="fixclusives_flex">
					 <?php if(have_rows('fixclusive-repeater')):
                         while(have_rows('fixclusive-repeater')): the_row();	 ?>
                        <div class="fixclusives_child">
                           <div class="fixclusives_child_img">
                              <figure>
                                 <img src="<?php the_sub_field('fixclusive-img');?>" class="img-fluid" alt="demat">
                              </figure>
                           </div>
                           <div class="content">
                             <?php the_sub_field('fixclusive-cntnt'); ?>
                           </div>
                        </div>
                     <?php endwhile;
					   else:
					endif; ?>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="largest_demand">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-6">
                     <div class="largest_demand_left">
					 <?php if(get_field('largest-demand-img')): ?>
                        <img src="<?php the_field('largest-demand-img'); ?>" class="img-fluid" alt="demat">
						<?php endif; ?>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-6">
                     <div class="largest_demand_left">
                       <?php the_field('largest-demand-txt'); ?>
                     </div>
                  </div>
               </div>
            </div>
         </section>
        
      </main>
 
 <?php get_footer(); ?>


