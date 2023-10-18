<?php 
/* 
Template Name: Startup Funding
*/
?>
<?php get_header(); ?>

 <main>
         <!--about_bnr-->
         <section class="about_bnr funding-bnr">
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
                        <h1><?php the_field('startup-funding-head'); ?></h1>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--what_demat-->
         <section class="what_demat mutual_funds_future startup_sec">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-6">
                     <div class="what_demat_left_flex">
                        <div class="what_demat_left">
                           <?php the_field('demat-txt'); ?>
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
         <!--crowdfunding-->
         <section class="crowdfunding">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-6">
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-6">
                     <div class="crowdfunding_right">
                        <div class="heading">
                           <h2><?php the_field('crowdfunding-heading'); ?></h2>
                        </div>
                       <?php the_field('crowdfunding-cntnt'); ?>
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
                        <?php the_sub_field('review-txt'); ?>
                     </div>
                  </div>
              <?php endwhile; 
			  else:
			  endif; ?>
               </div>
            </div>
         </section>

         <section class="faq faq_space">
            <div class="container">
               <div class="row justify-content-center">
                <div class="col-md-12">
                <div class="heading">
                  <h2><?php the_field('faq-heading'); ?></h2>
                </div>
              </div>
                  <div class="col-sm-12 col-md-12 col-lg-10"> 
                     <div class="faq_center">
					 <?php if(have_rows('faq-repeater')): ?>
                        <div class="accordion" id="accordionExample">
						<?php $i=0; while(have_rows('faq-repeater')): the_row();
                             $title = get_sub_field('faq-title');
                             $content = get_sub_field('faq-cntnt');
                             $i++; $count = $i; ?>
                             <div class="accordion-item">
                               <h2 class="accordion-header" id="heading<?php echo $count; ?>">
                                 <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $count; ?>" aria-expanded="true" aria-controls="collapse<?php echo $count; ?>">
                                  <?php echo $title; ?>
                                 </button>
                               </h2>
                               <div id="collapse<?php echo $count; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $count ?>" data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                  <?php the_sub_field('faq-cntnt'); ?>
                                 </div>
                               </div>
                             </div>
                            <?php endwhile; ?>
                           </div>
						   <?php endif; ?>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>

<?php get_footer(); ?>
