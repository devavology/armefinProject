<?php 
/* 
Template Name: Pre Pro Indian
*/
?>
<?php get_header(); ?>

 <main>
         <!--about_bnr-->
         <section class="about_bnr pre_indian_bnr">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                     <div class="about_bnr_text">
                        <h1><?php the_field('pre-pro-indian-bnr'); ?></h1>
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
			<?php if(get_field('buy-sell-img')): ?>
              <img src="<?php the_field('buy-sell-img'); ?>" class="img-fluid" alt="logo">
			  <?php endif; ?>
            </div>
          </div>
           <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="buy_sell_right">
            <?php the_field('buy-sell-text'); ?>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section id="benefits" class="join top-space">
      <div class="container">
         <div class="row flex">
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="inner-custom-heading">
                  <h2 class=""><span><?php the_field('inner-custom-heading'); ?></span> </h2>
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5">
               <figure>
			   <?php if(get_field('inner-custom-img')): ?>
                  <img src="<?php the_field('inner-custom-img'); ?>" alt="join">
				  <?php endif; ?>
               </figure>
            </div>
            <div class="col-sm-12 col-md-7">
               <div class="outer">
                  <div class="row flex">
                     <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="box">
						<?php if(get_field('sustanable-img')): ?>
                           <img src="<?php the_field('sustanable-img'); ?>" alt="sustainable">
						   <?php endif; ?>
                           <?php the_field('sustanable-txt'); ?>
                           <button class="btn arw">
                              <svg fill="none" stroke="#0E1A27" stroke-width="9" stroke-dashoffset="0" stroke-dasharray="0" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                 <line x1="80" y1="80" x2="20" y2="20"></line>
                                 <polyline fill="none" points="80,30 80,80 30,80"></polyline>
                              </svg>
                           </button>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-6 col-md-6">
					 <?php if(have_rows('sustanable-repeater')): 
					  while(have_rows('sustanable-repeater')): the_row();?>
                        <div class="box">
                           <img src="<?php the_sub_field('sustanable-image'); ?>" alt="brand-recognition">
                           <?php the_sub_field('sustanable-content'); ?>
                           <button class="btn arw">
                              <svg fill="none" stroke="#0E1A27" stroke-width="9" stroke-dashoffset="0" stroke-dasharray="0" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                 <line x1="80" y1="80" x2="20" y2="20"></line>
                                 <polyline fill="none" points="80,30 80,80 30,80"></polyline>
                              </svg>
                           </button>
                        </div>
                     <?php endwhile; 
					     else:
					  endif; ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>


   <section class="start_investing_india">
            <div class="container">
               <div class="row">
                <div class="col-sm-12 col-md-12">
                <div class="heading">
                  <h2><?php the_field('investing-heading'); ?></h2>
                 </div>
              </div>
			  <?php if(have_rows('investing-repeater')):
               while(have_rows('investing-repeater')): the_row(); ?>
                  <div class="col-sm-12 col-md-6 col-lg-4 outer">
                     <div class="investment_india_left">
                        <figure>
                           <img src="<?php the_sub_field('investing-image'); ?>" alt="sample-image">
                        </figure>
                        <div class="uk-card-body">
                           <?php the_sub_field('uk-card-body'); ?>
                        </div>
                     </div>
                  </div>
              <?php endwhile; 
			    else:
				endif; ?>
               </div>
            </div>
         </section>


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
                      while(have_rows('fixclusive-repeater')): the_row(); 		?>
                  <div class="fixclusives_child">
                    <div class="fixclusives_child_img">
                    <figure>
                      <img src="<?php the_sub_field('fixclusive-img'); ?>" class="img-fluid" alt="demat">
                    </figure>
                  </div>
                    <div class="content">
                      <?php the_sub_field('fixclusive-txt'); ?>
                    </div>
                  </div>
               <?php endwhile;
			      else:
			   endif;
			   ?>
                </div>
              </div>
           </div>
         </div>
       </section>



      </main>

<?php get_footer(); ?>