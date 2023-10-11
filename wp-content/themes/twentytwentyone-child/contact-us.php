<?php
/* 
Template Name: Contact Us
*/ 
?>
<?php get_header(); ?>

<main>
        <!--about_bnr-->
         <section class="about_bnr contact-bnr">
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
                        <h1>Contact Us</h1>
                     </div>
                  </div>
               </div>
            </div>
         </section>
       

         <section class="contact_form">
            <div class="container">
               <div class="row align-items-center justify-content-center">
                  <div class="col-sm-12 col-md-7 col-lg-8">
                     <div class="search_right">
                        <div class="search_heading">
                           <h2><?php the_field('form-heading'); ?></h2>
                        </div>
                        <?php the_field('conatct-form'); ?>
                     </div>
                  </div>

                  <div class="col-sm-12 col-md-5 col-lg-4">
                        <div class="contact-boxes">
                            <div class="contact-box">
                                <span class="icon-box"><i class="fa fa-map-marker"></i></span>
                                <h4 class="title-box"><?php the_field('location-title'); ?></h4>
                                <div class="content-box">
                                    <p><?php the_field('location-text'); ?></p>
                                </div>
                            </div>
                            <div class="contact-box">
                                <span class="icon-box"><i class="fa fa-envelope"></i></span>
                                <h4 class="title-box"><?php the_field('email-title'); ?></h4>
                                <div class="content-box">
								<?php 
                    $link = get_field('email-link');
                       if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                         ?>
                   <a href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                                    
                                </div>
                            </div>
                            <div class="contact-box">
                                <span class="icon-box"><i class="fa fa-phone"></i></span>
                                <h4 class="title-box"><?php the_field('phone-title'); ?></h4>
                                <div class="content-box">
										<?php 
                    $link = get_field('phone-link');
                       if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                         ?>
                   <a href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
         </section>

         <section class="contact_details">
           <div class="container">
             <div class="row">
               <div class="col-sm-12 col-md-12 col-lg-12">
                 <div class="contact_details_center">
                <?php the_field('contact-details'); ?>
                 </div>
               </div>
             </div>
           </div>
         </section>

    
                           
                         
        </main>

<?php get_footer(); ?>