<?php
/* 
Template Name: Indian Stock 
*/ 
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
		   <section class="open-lists">
           <div class="container">
             <div class="row">
			 <div class="col-sm-12">
                   <h3 class="account-text">Open an Account</h3>
              </div>
               <div class="col-sm-12 col-md-12 col-lg-6">
                 <div class="open-lists-left"> 
                   <?php the_field('contact-form'); ?>
                 </div>
               </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                  <div class="sidebar">
                  <div class="open-lists-logo">
				  <?php if(get_field('logo-img')):?>
                    <img src="<?php the_field('logo-img'); ?>" class="img-fluid" alt="logo">
					<?php endif; ?>
                  </div>
                 <div class="open-lists-right"> 
				 <?php if(have_rows('sidebar-repeater')):
				 while(have_rows('sidebar-repeater')): the_row();?>
                   <div class="child">
                     <?php the_sub_field('check-list'); ?>
                   </div>
               <?php endwhile;
			   else:
			   endif; ?>
			    
                 </div>
				 
               </div>
			   
               </div>
			  <div class="col-md-12 col-md-12 txtt">
			   <p>For Mobile numbers linked with Aadhar, the account opening process is completely digital </p>
			   </div>
             </div>
           </div>
         </section>
         <!--indian_platform-->
   
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
		 <section class="adv_sec">
      <div class="container">
        <div class="adv_in">
          <div class="heading">
            <h2><?php the_field('zerodha-heading'); ?></h2>
           </div>
          <div class="row justify-content-center">
		  <?php if(have_rows('zerodha-repeater')):
             while(have_rows('zerodha-repeater')): the_row();	 ?>
		  
            <div class="col-lg-3 col-md-6 col-12 outer">
              <div class="adv_box">
                <div class="media">
                  <img src="<?php the_sub_field('profile-img'); ?>" alt="profile">
                  <div class="media-body">
                    <?php the_sub_field('media-cntnt');?>
                  </div>
                </div>
              </div>
            </div>
       <?php endwhile;
	   else:
	   endif ?>
          
          </div>
        </div>
      </div>
    </section>
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
		      <section class="faq faq_space">
            <div class="container">
               <div class="row justify-content-center">
                              <div class="col-md-12">
                <div class="heading">
                  <h2><?php the_field('faq-heading');  ?></h2>
                </div>
              </div>
                  <div class="col-sm-12 col-md-12 col-lg-10"> 
                     <div class="faq_center">	
					 <?php if(have_rows('faq-repeater')): ?>
                        <div class="accordion" id="accordionExample">
						<?php $i=0; while(have_rows('faq-repeater')): the_row();
                             $title = get_sub_field('faq-txt');
                             $content = get_sub_field('faq-cntnt');
                               $i++; $count = $i; ?>
                             <div class="accordion-item">
                               <h2 class="accordion-header" id="heading<?php echo $count; ?>">
                                 <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $count; ?>" aria-expanded="true" aria-controls="collapse<?php echo $count; ?>">
                                  <?php echo $title; ?>
                                 </button>
                               </h2>
                               <div id="collapse<?php echo $count; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $count; ?>" data-bs-parent="#accordionExample">
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
