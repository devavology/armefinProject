<?php 
/* 
Template Name: Business Set-up
*/
?>
<?php get_header(); ?>

<main>
         <!--about_bnr-->
         <section class="about_bnr business-set-bnr">
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
                        <h1><?php the_field('business-set-up-heading'); ?></h1>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--what_demat-->
         <section class="what_demat mutual_funds_future  business-set-sec">
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
					 <?php if(get_field('business-sec-img')): ?>
                        <img src="<?php the_field('business-sec-img'); ?>" class="img-fluid" alt="demat">
						<?php endif; ?>
                     </div>
                  </div>
               </div>
            </div>
            <div class="business-set-sec-layer">
			<?php if(get_field('business-layer-img')): ?>
                <img src="<?php the_field('business-layer-img'); ?>" class="img-fluid" alt="demat">
				<?php endif; ?>
            </div>
         </section>
         <!--crowdfunding-->
         <section class="crowdfunding business-plan">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-6">
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-6">
                     <div class="crowdfunding_right">
                        <div class="heading">
                           <h2><?php the_field('crowdfunding-heading'); ?></h2>
                        </div>
                        <?php the_field('crowdfunding-content'); ?>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--expert-->
         <section class="online_trading">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-6 p-0">
                <div class="online_trading_right">
                  <?php the_field('online-trading-content'); ?>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6 p-0">
                <div class="online_trading_left">
				<?php if(get_field('online-img')): ?>
                  <img src="<?php the_field('online-img');?>" class="img-fluid" alt="logo">
				  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </section>
         <section class="what_alternative">
           <div class="container">
             <div class="row">
               <div class="col-sm-12col-md-10 col-lg-9"> 
                 <div class="what_alternative_box">
                  <figure>
				  <?php if(get_field('alternative-laptop-img')): ?>
                     <img src="<?php the_field('alternative-laptop-img'); ?>" class="img-fluid" alt="demat">
					 <?php endif; ?>
                  </figure>
                  <div class="content">
                   <?php the_field('alternative-content'); ?>
                 </div>
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
      </main>

<?php get_footer(); ?>