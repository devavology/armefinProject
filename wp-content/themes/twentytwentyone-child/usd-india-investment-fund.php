<?php 
/*
Template Name: India Investment Fund
*/
?>
<?php get_header(); ?>

 <main>
         <!--about_bnr-->
         <section class="about_bnr indian_aifs_bnr">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                     <div class="about_bnr_text">
                        <h1><?php the_field('india-investment-bnr'); ?></h1>
                     </div>
                  </div>
               </div>
            </div>
         </section>
       <!--why_invest-->
         <section class="indian_platform why_invest">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-12">
                     <div class="heading">
                        <h2><?php the_field('invest-heading'); ?></h2>
                     </div>
                  </div>
				  <?php if(have_rows('invest-repeater')):
				  while(have_rows('invest-repeater')): the_row(); ?>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <div class="indian_platform_box">
                        <figure>
                           <img src="<?php the_sub_field('selection-img'); ?>" class="img-fluid" alt="selection">
                        </figure>
                        <a href="#">
                           <?php the_sub_field('invest-text'); ?>
                        </a>
                     </div>
                  </div>
                <?php 
                 endwhile;
              else:
           endif; ?>				
               </div>
            </div>
         </section>

         <section class="expert">
           <div class="container">
             <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 outer">
                     <div class="heading">
                        <h2><?php the_field('expert-manager-heading'); ?></h2>
                     </div>
                  </div>
                </div>
                <div class="row">
				<?php if(have_rows('invester-repeater')):
				while(have_rows('invester-repeater')): the_row(); 
				?>
               <div class="col-sm-12 col-md-6 col-lg-4 outer">
                 <div class="box">
                     <span><i class="fas fa-user-alt"></i></span>
                     <?php the_sub_field('invester-content'); ?>
                 </div>
               </div>
          <?php endwhile;
		  else:
		  endif; ?>
             </div>
           </div>
         </section>
        
        <section class="online_trading">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-6 p-0">
                <div class="online_trading_left">
				<?php if(get_field('online-trading-img')): ?>
                  <img src="<?php the_field('online-trading-img'); ?>" class="img-fluid" alt="logo">
				  <?php endif; ?>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6 p-0">
                <div class="online_trading_right">
                  <?php the_field('online-trading-content'); ?>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="review india_demat_review">
            <div class="container">
               <div class="row">
			   <?php if(have_rows('review-repeater')):
			   while(have_rows('review-repeater')): the_row(); ?>
                  <div class="col-sm-4 col-md-4 col-lg-4">
                     <div class="review_left">
                       <?php the_sub_field('review-text'); ?>
                     </div>
                  </div>
                <?php endwhile; 
				    else:
				 endif;
				?>
               </div>
            </div>
         </section>

          <section class="online_trading">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-6 p-0">
                <div class="online_trading_right">
                 <?php the_field('online-trading-right-txt'); ?>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6 p-0">
                <div class="online_trading_left">
				<?php if(get_field('online-trading-right-img')): ?>
                  <img src="<?php the_field('online-trading-right-img') ?>" class="img-fluid" alt="logo">
				  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </section>

        </main>

<?php get_footer(); ?>