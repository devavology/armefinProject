<?php 
/* 
Template Name: Mergers And Acquisitions 
*/
?>
<?php get_header(); ?>

<main>
         <!--about_bnr-->
         <section class="about_bnr mergers-bnr">
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
                        <h1><?php the_field('merger-and-acquisition-heading'); ?></h1>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--what_demat-->
         <section class="what_demat mutual_funds_future what_mergers">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-6">
                     <div class="what_demat_left_flex">
                        <div class="what_demat_left">
                           <?php the_field('demat-content'); ?>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-6">
                     <div class="what_demat_left">
					 <?php if(get_field('demat-img')): ?>
                        <img src="<?php the_field('demat-img'); ?>" class="img-fluid" alt="demat">
						<?php endif; ?>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="start_investing_india">
            <div class="container">
               <div class="row">
			   <?php if(have_rows('investing-repeater')):
                while(have_rows('investing-repeater')): the_row();	  ?>
                  <div class="col-sm-12 col-md-6 col-lg-4 outer">
                     <div class="investment_india_left">
                        <figure>
                           <img src="<?php the_sub_field('investing-img'); ?>" alt="sample-image">
                        </figure>
                        <div class="uk-card-body">
                          <?php the_sub_field('investing-content'); ?>
                        </div>
                     </div>
                  </div>
               <?php endwhile;
			   else:
			   endif; ?>
               </div>
            </div>
         </section>
         <section class="buy_sell">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-6">
                     <div class="buy_sell_left">
					 <?php if(get_field('curriculum-img')): ?>
                        <img src="<?php the_field('curriculum-img'); ?>" class="img-fluid" alt="logo">
						<?php endif; ?>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-6">
                     <div class="buy_sell_right">
                        <?php the_field('buy-sell-content'); ?>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <section class="about_funding">
           <div class="container">
             <div class="row">
               <div class="col-sm-12 col-md-12">
                     <div class="heading">
                        <?php the_field('about-funding'); ?>
                     </div>
                  </div>
             </div>
           </div>
         </section>
      </main>

<?php get_footer(); ?>