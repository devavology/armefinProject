<?php 
/* 
Template Name: Home 
*/

?>
<?php get_header(); ?>

 <main>
         <!--banner-->
         <section class="banner">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-7">
                     <div class="banner_left">
                        <h1><?php the_field('banner-heading'); ?></h1>
                        <p><?php the_field('banner-text'); ?></p>
                        <!-- <div class="banner-btns">
                           <a href="#">Join Newsletter</a>
                           <a href="#">Join Quiz</a>
                        </div> -->
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-5">
                     <div class="banner_right">
					 <?php if( get_field('banner-img') ): ?>
                        <img src="<?php the_field('banner-img'); ?>" class="img-fluid" alt="banner">
						<?php endif; ?>
                     </div>
                  </div>
               </div>
            </div>
         </section>

          <!--Insights-->
        <section class="expert investment_boxes">
           <div class="container">
             <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 outer">
                     <div class="heading">
                        <h2><?php the_field('insight-heading'); ?></h2>
                     </div>
                  </div>
                </div>
                <div class="row">
				<?php
                if( have_rows('insight-repeater') ):
               while( have_rows('insight-repeater') ) : the_row();  ?>
                <div class="col-sm-12 col-md-6 col-lg-6 outer">
                 <div class="box">
                     <span><?php the_sub_field('investment-span'); ?></span>
                     <h3><?php the_sub_field('investment-funds'); ?></h3>
                     <p><?php the_sub_field('investment-text'); ?></p>
                     <div class="box_btn">
                        <?php 
            $link = get_sub_field('investment-link');
               if( $link ): 
                  $link_title = $link['title'];
                  ?>
             <a href="#"><?php echo esc_html( $link_title ); ?></a>
             <?php endif; ?>
                     </div>
                 </div>
               </div>
			<?php      endwhile;
                     else :
                   endif;   ?>
               
             </div>
           </div>
         </section>
                    <!--Insights-->
                    <section class="insights">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="insights_img">
									<?php if( get_field('insight-img') ): ?>
                                 <img src="<?php the_field('insight-img'); ?>" class="img-fluid" alt="insights_img" />
                              <?php endif; ?>
                                       
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="heading">
                                        <h2><?php the_field('insight-armefin-text'); ?></h2>
                                        <p><?php the_field('insight-armefin-cntnt'); ?></p>
                                        <div class="box_btn">
										<?php 
                           $link = get_field('insight-armefin-btn');
                        if( $link ): 
                          $link_url = $link['url'];
                          $link_title = $link['title']; 
                           ?>
                     <a href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                  <?php endif; ?>
                         <?php 
                      $link = get_field('insight-quizz-btn');
                     if( $link ): 
                       $link_title = $link['title'];
                   ?>
                 <a class="orange_btn" href="#"><?php echo esc_html( $link_title ); ?></a>
                     <?php endif; ?>                                  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--investment-->
                    <section class="investment">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="heading">
                                        <h2><?php the_field('investment-heading'); ?></h2>
                                    </div>
                                </div>
								<?php
                              $i=0;
                            if( have_rows('investment-repeater') ):
                            while( have_rows('investment-repeater') ) : the_row(); ?>
                                <div class="col-sm-12 col-md-6 col-lg-6">
								
                                    <div class="investment_box <?php if($i%2==0){echo 'first';}else{ echo 'second';}?>" id="<?php echo $i; ?>">
                                        <img src="<?php the_sub_field('img-fluid'); ?>" class="img-fluid" alt="stocks" />
                                        <h3><?php the_sub_field('fluid-heading'); ?></h3>
                                        <p><?php the_sub_field('fluid-text'); ?></p>
                                        <div class="box_btn">
                                            <a href="#"><?php the_sub_field('fluid-btn'); ?></a>
                                        </div>
                                    </div>
                                </div>
						<?php 		
						$i++;
						endwhile;
                        else :
                        endif; ?>     
                            </div>
                        </div>
                    </section>
                    <!--investment-->
                    <section class="investment platforms">
                        <div class="container">
                            <div class="row">
							<?php
                              $i=0;
                            if( have_rows('investment-platform-repeater') ):
                            while( have_rows('investment-platform-repeater') ) : the_row(); ?>
                                <div class="col-sm-12 col-md-6 col-lg-6 outer">
                                    <div class="investment_box <?php if($i%2==0){echo 'first';}else{ echo 'second';}?>" id="<?php echo $i; ?>">
                                        <img src="<?php the_sub_field('img-fluid-platform'); ?>" class="img-fluid" alt="stocks" />
                                        <h3><?php the_sub_field('fluid-heading-platform'); ?></h3>
                                        <p><?php the_sub_field('fluid-text-platform'); ?></p>
                                        <div class="box_btn">
                                            <a href="#"><?php the_sub_field('fluid-btn-platform'); ?></a>
                                        </div>
                                    </div>
                                </div>
								<?php 		
						$i++;
						endwhile;
                        else :
                        endif; ?>  
                            </div>
                            <!-- <div class="row startup_row">
      <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="startup_left">
        <img src="img/startup.png" class="img-fluid" alt="startup">
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="startup_right">
         <h2>Startup Funding</h2>
         <p>Armefin onboards potential Start-Ups looking for growth capital in Seed to Series B stages and connects them to the right set of Investors in India and across the globe.</p>
            <div class="box_btn">
               <a href="#">KNOW MORE</a>
            </div>
        </div>
      </div>
      </div> -->
                        </div>
                    </section>
                    <!--Wealth-->
                    <section class="global_search top_tips">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="heading">
                                        <h2><?php the_field('wealth-heading'); ?></h2>
                                    </div>
                                </div>
                                <!-- <div class="col-sm-12 col-md-6 col-lg-6 p-0">
      <div class="global_search_left">
         <img src="img/retail.jpg" class="img-fluid" alt="retail">
      </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 p-0">
      <div class="global_search_right">
         <h4>Retail Investors</h4>
         <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
         <ul>
            <li>Indian Stock (DEMAT)</li>
            <li>Indian Mutual funds</li>
            <li>Pre-IPO Indian shares</li>
         </ul>
      </div>
      </div> -->
                                <div class="rows d-flex p-0 flex-wrap-reverse">
                                    <div class="col-sm-12 col-md-6 col-lg-6 p-0 order_2">
                                        <div class="global_search_right">
                                           <?php the_field('wealth-content'); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 p-0 order_4">
                                        <div class="global_search_left">
										<?php if( get_field('wealth-sec-img') ): ?>
                                         <img src="<?php the_field('wealth-sec-img'); ?>" class="img-fluid" alt="investment" />
                                        <?php endif; ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--review-->
                    <section class="premium-solutions">
                        <div class="container">
                            <div class="row">
							<?php

                     if( have_rows('review-repeater') ):
                       while( have_rows('review-repeater') ) : the_row(); ?>
                                <div class="col-sm-12 col-md-6 col-lg-4">
                                    <div class="premium-solutions-box">
                                        <h3><?php the_sub_field('review-num'); ?></h3>
                                        <p><?php the_sub_field('review-content'); ?></p>
                                    </div>
                                </div>
                          <?php     endwhile;
                                  else :
                                endif; ?>
                            </div>
                        </div>
                    </section>
                    <!--  <div class="debt">
      <div class="container">
        <div class="row startup_row">
         <div class="col-sm-12 col-md-6 col-lg-6">
           <div class="startup_right">
            <h2>Debt Funding</h2>
            <p>Armefin works with established businesses which are looking to raise debt from Banks, NBFCs or Private credit from AIFs & Family Offices to fulfill their project requirements.</p>
               <div class="box_btn">
                  <a href="#">VIEW INSIGHTS</a>
               </div>
           </div>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-6">
           <div class="startup_left">
           <img src="img/startup.png" class="img-fluid" alt="startup">
           </div>
         </div>
      </div>
      </div>
      </div> -->
                    <!--review-->
                    <section class="review">
                        <div class="container">
                            <div class="row">
							<?php
                     if( have_rows('review-left-repeater') ):
                   while( have_rows('review-left-repeater') ) : the_row(); ?>
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="review_left">
                                        <h2><?php the_sub_field('review-left-num'); ?></h2>
                                        <p><?php the_sub_field('review-left-cntnt'); ?></p>
                                    </div>
                                </div>
							<?php 	 endwhile;
                                   else :
                                 endif; ?>
                            </div>
                        </div>
                    </section>
                    <section class="investment_slider">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="heading">
                                        <h2><?php the_field('our-partner'); ?></h2>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="owl-carousel investment_slide">
								<?php 	if( have_rows('partner-repeater') ):
                                    while( have_rows('partner-repeater') ) : the_row(); ?>
                                        <div class="investment_child">
                                            <img src="<?php the_sub_field('partner-img'); ?>" alt="icon" class="img-fluid" />
                                        </div>
                             <?php           endwhile;
                                          else :
                                       endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


<?php get_footer(); ?>