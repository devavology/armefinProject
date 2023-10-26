<?php
/*
Template Name: Indian Aifs
*/
 ?>
 <?php get_header(); ?>
 
 <main>
         <!--about_bnr-->
         <section class="about_bnr indian_aifs_bnr">
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
                        <h1><?php the_field('indian-aifs-heading'); ?></h1>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--indian_aifs_fund-->
         <section class="what_demat mutual_funds_future indian_aifs_fund">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-6">
                     <div class="what_demat_left_flex">
                        <div class="what_demat_left">
                           <?php the_field('indian-aifs-text');?>
                        </div>
                        <div class="row second">
						<?php 
						   $i=0;
						if(have_rows('indian-aifs-repeater')):
                              while(have_rows('indian-aifs-repeater')): the_row();	?>
                           <div class="col-6 col-sm-4 col-md-4 col-lg-4">
                              <div class="mutual_box <?php if($i%3==0){echo 'first';}else if($i%3==1){ echo 'borders';}else{ echo 'third';}?>" id="<?php echo $i; ?>">
                                 <p><?php the_sub_field('mutual-box-text'); ?> </p>
                              </div>
                           </div>
						   <?php 
						   $i++;
						   endwhile; 
						       else:
						   endif; 
						   ?>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-6">
                     <div class="what_demat_left">
					 <?php if(get_field('indian-aifs-fund-img')): ?>
                        <img src="<?php the_field('indian-aifs-fund-img'); ?>" class="img-fluid" alt="demat">
						<?php endif; ?>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--whatAlternative-->
         <section class="what_alternative">
           <div class="container">
             <div class="row">
               <div class="col-sm-12col-md-10 col-lg-9"> 
                 <div class="what_alternative_box">
                  <figure>
				  <?php if(get_field('alternative-image')): ?>
                     <img src="<?php the_field('alternative-image');?>" class="img-fluid" alt="demat">
					 <?php endif; ?>
                  </figure>
                  <div class="content">
               <?php the_field('alternative-content');?>
                 </div>
                 </div>
               </div>
             </div>
           </div>
         </section>

          <section class="largest_demand types_aif">
           <div class="container">
             <div class="row">
               <div class="col-sm-12 col-md-6 col-lg-6">
                 <div class="largest_demand_left first">
				 <?php if(get_field('largest-demad-image')): ?>
                   <img src="<?php the_field('largest-demad-image'); ?>" class="img-fluid" alt="demat">
				   <?php endif; ?>
                 </div>
               </div>
               <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="largest_demand_left second">
                  <?php the_field('largest-demand-content'); ?>
                 </div>
               </div>
             </div>
           </div>
         </section>
         <!--review-->
         <section class="review">
            <div class="container">
               <div class="row">
			   <?php if(have_rows('review-repeater')):
			     while(have_rows('review-repeater')): the_row();?>
                  <div class="col-sm-4 col-md-4 col-lg-4">
                     <div class="review_left">
                        <h2><?php the_sub_field('review-num');?></h2>
                        <p><?php the_sub_field('review-text');?></p>
                     </div>
                  </div>
              <?php endwhile;
			  else:
			  endif ?>
               </div>
            </div>
         </section>

         <section class="largest_demand types_aif">
           <div class="container">
             <div class="row">
               <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="largest_demand_left first">
                 <?php the_field('demand-content');?>
                 </div>
               </div>
               <div class="col-sm-12 col-md-6 col-lg-6">
                 <div class="largest_demand_left second">
				 <?php if(get_field('demand-image')): ?>
                   <img src="<?php the_field('demand-image')?>" class="img-fluid" alt="demat">
				   <?php endif; ?>
                 </div>
               </div>
             </div>
           </div>
         </section>
      </main>
 
 <?php get_footer(); ?>