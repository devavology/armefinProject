<?php
/* 
Template Name: nro non account
*/ 
?>
<?php get_header(); ?>

<main>
         <!--about_bnr-->
         <section class="about_bnr nre-account">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                     <div class="about_bnr_text">
                        <h1><?php the_field('nre-non-account-bnr'); ?></h1>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="buy_sell nro-account">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-6">
                     <div class="buy_sell_left">
					 <?php if(get_field('non-account-img')): ?>
                        <img src="<?php the_field('non-account-img'); ?>" class="img-fluid" alt="logo">
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

      <section id="benefits" class="join top-space nro_feature">
      <div class="container">
         <div class="row flex">
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="inner-custom-heading">
                  <h2 class=""><span><?php the_field('featured-heading'); ?></span> </h2>
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5">
               <figure>
			   <?php if(get_field('nro-featured-img')): ?>
                  <img src="<?php the_field('nro-featured-img'); ?>" alt="join">
				  <?php endif; ?>
               </figure>
            </div>
     <div class="col-sm-12 col-md-7">
               <div class="outer">
                  <div class="row flex">
                <?php if(have_rows('featured-repeater')): 
                  while(have_rows('featured-repeater')): the_row(); ?> 
                   <?php if(have_rows('box-repeater')): ?>       
                     <div class="col-xs-12 col-sm-6 col-md-6">                 
                      <?php   while(have_rows('box-repeater')): the_row(); ?>
                        <div class="box">

                           <img src="<?php the_sub_field('box-image'); ?>" alt="sustainable">
                           <p><?php the_sub_field('box-text'); ?></p>
                           <button class="btn arw">
                              <svg fill="none" stroke="#0E1A27" stroke-width="9" stroke-dashoffset="0" stroke-dasharray="0" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                 <line x1="80" y1="80" x2="20" y2="20"></line>
                                 <polyline fill="none" points="80,30 80,80 30,80"></polyline>
                              </svg>
                           </button>
                   
                        </div>

                    <?php endwhile;   ?>
                     </div>
                   <?php endif;    
                         endwhile;
                         endif; ?>
                  </div>
               </div>
            </div>

    </div>
         </div>
      </div>
   </section>

   <section class="faq nro_faq">
            <div class="container">
               <div class="row justify-content-center align-items-center">
                  <div class="col-sm-12 col-md-12">
                     <div class="heading">
                        <h2><?php the_field('faq-heading'); ?></h2>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-8"> 
                     <div class="faq_center">
                        <div class="accordion" id="accordionExample">
						<?php if(have_rows('faq-repeater')):
                              $i=0; while(have_rows('faq-repeater')): the_row();
                               $title = get_sub_field('faq-title');
                               $content = get_sub_field('faq-content');	?>
                             <div class="accordion-item">
                               <h2 class="accordion-header" id="heading<?php echo $i; ?>">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                                 <?php echo $title; ?>
                                 </button>
                               </h2>
                               <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $i; ?>" data-bs-parent="#accordionExample" style="">
                                 <div class="accordion-body">
                                   <?php echo $content; ?>
                                 </div>
                               </div>
                             </div>
							 <?php $i++;
							 endwhile;
							 endif; ?>
                         
                           </div>
                     </div>
                  </div>
                     <div class="col-md-12 col-lg-4 col-sm-12">
                     <div class="faq_img">
					 <?php if(get_field('faq-image')): ?>
                        <img src="<?php the_field('faq-image'); ?>" alt="girls" class="img-fluid">
                         <?php endif; ?>                    
					</div>
                     </div>

               </div>
            </div>
         </section>
      </main>

<?php get_footer(); ?>