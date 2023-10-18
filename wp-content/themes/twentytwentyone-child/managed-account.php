<?php 
/* Template Name: Managed Account  */
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
                        <h1><?php the_field('managed-account-bnr'); ?></h1>
                     </div>
                  </div>
               </div>
            </div>
         </section>
          <section class="what_demat mutual_funds_future debt-funding">
                <div class="container-fluid">
                   <div class="row">
                     <div class="col-sm-12 col-md-12 col-lg-6 p-0">
                         <div class="what_demat_left one">
						 <?php if(get_field('debt-funding-image')): ?>
                            <img src="<?php the_field('debt-funding-image'); ?>" class="img-fluid" alt="demat">
							<?php endif; ?>
                         </div>
                      </div>
                      <div class="col-sm-12 col-md-12 col-lg-6 p-0">
                         <div class="what_demat_left_flex two">
                            <div class="what_demat_left">
                               <?php the_field('debt-funding-txt'); ?>
                            </div>
                         </div>
                      </div>
                     
                   </div>
                </div>
             </section>


         <section class="usd_found">	
           <div class="container">
             <div class="row">
			 <?php if(have_rows('usd-funds-repeater')):
                   while(have_rows('usd-funds-repeater')): the_row();			 ?>
               <div class="col-sm-12 col-md-6 col-lg-6 outer">
                 <div class="box">
                  <div class="usd_heading">
                    <h4><?php the_sub_field('usd-funds-txt'); ?></h4>
                  </div>
                  <?php the_sub_field('usd-funds-content'); ?>
                  <div class="box_btn register_btns usd_btn">
				  <?php $link = get_sub_field('usd-funds-btn');
                        $link_url = $link['url'];
                        $link_title = $link['title'];	?>
                         <a href="<?php echo esc_url($link_url); ?>"><button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal2"><?php echo esc_html($link_title); ?></button></a>
                         <!-- Modal -->
                         <div class="register_form">
                           <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                             <div class="modal-dialog">
                               <div class="modal-content">
                                 <div class="modal-header">
                                   <h5 class="modal-title" id="exampleModalLabel"><?php the_sub_field('investing-heading'); ?></h5>
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
                     endif;	  ?>          
             </div>
           </div>
         </section>

               <section class="investment_slider">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12">
              <div class="heading">
                <h2><?php the_field('investment-slider-txt'); ?></h2>
              </div>
            </div>
            <div class="col-sm-12 col-md-12">
              <div class="owl-carousel investment_slide">
			  <?php if(have_rows('investment-repeater')):
                    while(have_rows('investment-repeater')): the_row(); ?>
                <div class="investment_child">
                  <img src="<?php the_sub_field('investment-img'); ?>" alt="icon" class="img-fluid" />
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
