<?php 
/*
 Template Name: fund-review-rangoli-india-fund-series-a
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
                        <h1><a href="#"><?php the_field('indian-fund-series-bnr'); ?> </a></h1>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <section class="overview-main">
           <div class="container">
             <div class="row">
               <div class="col-sm-12 col-md-8">
                <div class="over-bg">
                    <div class="heading">
                      <h2><?php the_field('overview-heading'); ?></h2>
                    </div>
                  <div class="overview-heading">
                    <?php the_field('overview-content'); ?>
                    <figure>
					<?php if(get_field('overview-img')): ?>
                      <img src="<?php the_field('overview-img'); ?>" alt="Overview" class="img-fluid">
					  <?php  endif; ?>
                    </figure>
                  </div>
               </div>
               <div class="investment-objective">
                 <h3><?php the_field('objective-txt'); ?></h3>
                  <ul class="check_list">
                   <?php the_field('objective-check-list'); ?>
                   </ul>
               </div>
               <div class="research-img">
			   <?php if(get_field('research-img')): ?>
                    <img src="<?php the_field('research-img'); ?>" alt="Overview" class="img-fluid">
					<?php endif; ?>
               </div>
               <div class="over-bg-two">
                  <div class="overview-heading">
                    <h3><?php the_field('over-bg-txt'); ?></h3>
                      <figure>
					  <?php if(get_field('portfolio-composition1')): ?>
                      <img src="<?php the_field('portfolio-composition1'); ?>" alt="Overview" class="img-fluid">
					  <?php endif; ?>
                    </figure>
                      <figure>
					  <?php if(get_field('portfolio-composition2')):?>
                      <img src="<?php the_field('portfolio-composition2'); ?>" alt="Overview" class="img-fluid">
					  <?php endif;	 ?>
                    </figure>
                  </div>
               </div>
               <div class="historical">
                 <h3><?php the_field('historical-txt'); ?></h3>
                  <figure>
				  <?php if(get_field('historical-img')): ?>
                      <img src="<?php the_field('historical-img'); ?>" alt="Overview" class="img-fluid">
					  <?php endif; ?>
                    </figure>
               </div>
               <div class="research-img">
			   <?php if(get_field('research-img1')): ?>
                    <img src="<?php the_field('research-img1'); ?>" alt="Overview" class="img-fluid">
					<?php endif; ?>
               </div>
               <div class="historical">
                 <h3><?php the_field('historical-txt1'); ?></h3>
                  <figure>
				  <?php  if(get_field('fees-rangoli-img')):?>
                      <img src="<?php the_field('fees-rangoli-img'); ?>" alt="Overview" class="img-fluid">
					  <?php endif; ?>
                    </figure>
               </div>

               <div class="over-bg-two">
                  <div class="overview-heading">
                    <?php the_field('over-bg-txt1'); ?>
                  </div>
               </div>

        <section class="contact_form pri-form psm">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-sm-12 col-md-10 col-lg-10">
            <div class="search_right">
              <div class="search_heading">
                <h2><?php the_field('search-heading'); ?></h2>
              </div>
         <?php the_field('search-form'); ?>  

            </div>
                <p class="read-about"><?php the_field('psm-review'); ?></p>
                <div class="comment-social">
                  <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  </ul>
                  <?php the_field('psm-review1'); ?>
                </div>
          </div>
        </div>
      </div>
    </section>
             </div>

               <div class="col-sm-12 col-md-4">
                     <div class="insights_blogs_sidebar">
                        <p><?php the_field('insights-txt'); ?></p>
                        <figure>
						<?php if(get_field('zerodha-img')): ?>
                           <img src="<?php the_field('zerodha-img'); ?>" class="img-fluid" alt="logo">
						   <?php endif; ?>
                        </figure>
                        <ul class="check_list">
                           <?php the_field('insights-check-list'); ?>
                        </ul>
                        <div class="box_btn">
						<?php if($link= get_field('box-btn')):
                                       $link_url = $link['url'];
                                       $link_title = $link['title'];
       							       $link_target = $link['target'] ? $link['target']: '_self'; ?>
                         <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
						 <?php endif; ?>
                     </div>
                     </div>

                      <div class="insights_blogs_sidebar second">
                        <p><?php the_field('investment-txt'); ?></p>
                        <figure>
						<?php if(get_field('investment-img')): ?>
                           <img src="<?php the_field('investment-img'); ?>" class="img-fluid" alt="logo">
						   <?php endif; ?>
                        </figure>
                        <ul class="check_list">
                          <?php the_field('investment-check-list'); ?>
                        </ul>
                        <div class="box_btn register_btns">
						<?php if($link = get_field('registration-btn')):
                                      $link_url = $link['url'];
                                      $link_title = $link['title'];	?>
                         <a href="<?php echo esc_url($link_url); ?>"><button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><?php echo esc_html($link_title); ?></button></a>
						 <?php endif; ?>
                         <!-- Modal -->
                         <div class="register_form">
                           <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                             <div class="modal-dialog">
                               <div class="modal-content">
                                 <div class="modal-header">
                                   <h5 class="modal-title" id="exampleModalLabel"><?php the_field('registration-txt'); ?></h5>
                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                 <?php the_field('registration-form');  ?>
                                 </div>
                                 
                               </div>
                             </div>
                           </div>
                           </div>
                     </div>
                     </div>
                  </div>
             </div>
           </div>
         </section>
        
      </main>

<?php get_footer(); ?>