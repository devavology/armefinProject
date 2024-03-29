<?php
/* 
Template Name: PSM
*/ ?>
<?php get_header(); ?>

 <main>
        <!--about_bnr-->
         <section class="about_bnr psm_bnr">
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
                        <h1><?php the_field('psm-heading');?></h1>
                     </div>
                  </div>
               </div>
            </div>
         </section>

   
        <!--psm_Journey-->
           <section class="about_Journey psm_about">
             <div class="container">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="about_journey_left">
                      <div class="heading">
                        <h2><?php the_field('psm-about'); ?></h2>
                     </div>
                    <?php the_field('psm-content');?>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="about_journey_right">
					<?php if(get_field('psm-about-img')):?>
                      <img src="<?php the_field('psm-about-img'); ?>" class="img-fluid" alt="journeygo">
					  <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
           
         </section>

    <!--about_funding-->
         <section class="about_funding">
           <div class="container">
             <div class="row">
               <div class="col-sm-12 col-md-12">
                     <div class="heading">
                       <?php the_field('funding-text'); ?>
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
				 <?php if(get_field('psm-image')): ?>
                   <img src="<?php the_field('psm-image');?>" class="img-fluid" alt="demat">
				   <?php endif; ?>
                 </div>
               </div>
               <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="largest_demand_left second">
                   <?php the_field('largest-demand-txt'); ?>
                 </div>
               </div>
             </div>
           </div>
         </section>
       </main>


<?php get_footer(); ?>
