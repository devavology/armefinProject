<?php 
/* Template Name: Investment Funds */
?>
<?php get_header(); ?>

<main>
         <!--about_bnr-->
         <section class="about_bnr indian-stock">
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
                        <h1><?php the_field('investment-funds-bnr'); ?></h1>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--what_demat-->
         <section class="what_demat investment_founds ">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-6">
                     <div class="what_demat_left">
                        <?php the_field('what-demat-txt'); ?>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-6">
                     <div class="what_demat_left">
					 <?php if(get_field('what-demat-img')): ?>
                        <img src="<?php the_field('what-demat-img'); ?>" class="img-fluid" alt="demat">
						<?php endif; ?>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="buy_sell investment_point">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-6">
                     <div class="buy_sell_left">
					 <?php if(get_field('buy-sell-img')): ?>
                        <img src="<?php the_field('buy-sell-img');?>" class="img-fluid" alt="logo">
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

         <section class="usd_found">
           <div class="container">
             <div class="row">
			 <?php if(have_rows('usd-repeater')):
                   while(have_rows('usd-repeater')): the_row();			 ?>
               <div class="col-sm-12 col-md-6 col-lg-6 outer">
                 <div class="box">
                  <div class="usd_heading">
                    <h4><?php the_sub_field('funds-heading'); ?></h4>
                  </div>
                  <?php the_sub_field('funds-content'); ?>
                  <div class="box_btn register_btns usd_btn">
				 <?php
                   $link = get_sub_field('investment-btn');
                    if ($link) {
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                         }
                    ?>
               <?php if ($link) : ?>
             <a href="<?php echo esc_url($link_url); ?>">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                   <?php echo esc_html($link_title); ?>
                 </button>
              </a>
                 <?php endif; ?>
                         <!-- Modal -->
                         <div class="register_form">
                           <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                             <div class="modal-dialog">
                               <div class="modal-content">
                                 <div class="modal-header">
                                   <h5 class="modal-title" id="exampleModalLabel"><?php the_sub_field('investment-heading'); ?></h5>
                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                 <?php the_sub_field('investment-form'); ?>
                                 </div>
                               </div>
                             </div>
                           </div>
                           </div>
                     </div>
                 </div>
               </div>
			   <?php endwhile;
                     endif;	   ?>
          
             </div>
           </div>
         </section>

       <section class="investment_slider">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12">
              <div class="heading">
                <h2><?php the_field('investment-slider-heading'); ?></h2>
              </div>
            </div>
            <div class="col-sm-12 col-md-12">
              <div class="owl-carousel investment_slide">
			  <?php  if(have_rows('investment-repeater')):
			        while(have_rows('investment-repeater')): the_row();?>
                <div class="investment_child">
                  <img src="<?php the_sub_field('investment-slider-img'); ?>" alt="icon" class="img-fluid" />
                </div>
				<?php endwhile; 
				endif; ?>
             
              </div>
            </div>
          </div>
        </div>
      </section>
      </main>

<?php get_footer(); ?>
