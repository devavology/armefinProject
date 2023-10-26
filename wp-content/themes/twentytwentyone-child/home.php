<?php 
/* 
Template Name: Home 
*/

?>
<?php get_header(); ?>

 <main>
      		 
   <!--banner-->
      <section class="banner">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 p-0">
              <div class="banner_left">
                <div class="owl-carousel bnr_slider">
				<?php if(have_rows('banner-repeater')):
                  while(have_rows('banner-repeater')): the_row();	?>
                  <div>
                    <img src="<?php the_sub_field('banner-img'); ?>" class="img-fluid" alt="...">
                    <div class="content">
                     <?php the_sub_field('banner-cntnt'); ?>
                        <div class="banner-btns">
						<?php 
                   $link = get_sub_field('banner-btn');
                  if( $link ): 
                      $link_url = $link['url'];
                      $link_title = $link['title']
                    ?>
                   <a href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php endif; ?>
                            </div>
                    </div>
                  </div>
             <?php endwhile;
			 else:
			 endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
	  
	   <section class="premium_part">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="heading">
                 <h2><?php the_field('premium-heading'); ?></h2>
              </div>
            </div>
		      	<?php if(have_rows('premium-repeater')): 
			      while(have_rows('premium-repeater')) : the_row();?>
            <div class="col-sm-12 col-md-6 col-lg-6 outer">
              <div class="boxes-premium">
                <article>
                <img src="<?php the_sub_field('box-img'); ?>" alt="return">
                <?php the_sub_field('premium-content'); ?>
              </article>
                <div class="box_btn">
			        	<?php 
                  $link = get_sub_field('know-more-btn');
                 if( $link ): 
                   $link_url = $link['url'];
                   $link_title = $link['title'];                
                   ?>
                  <a href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                 <?php endif; ?>
                </div>
              </div>
            </div>
           <?php endwhile;
		   else:
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
                                    <?php     endwhile;
                                          else :
                                       endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
					
		 <!--review-->
      <section class="premium-solutions">
        <div class="container">
          <div class="row">
		       <?php if(have_rows('reviews-repeater')): 
		           while(have_rows('reviews-repeater')): the_row();?>
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="premium-solutions-box">
                <?php the_sub_field('review-text'); ?>
              </div>
            </div>
             <?php endwhile;
	        else:
			endif; ?>
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
					             $link_url = $link['url'];
                       $link_title = $link['title'];
                   ?>
                   <a class="orange_btn" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
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
			<?php $i=0; 
			if(have_rows('investment-repeater')):
			    while(have_rows('investment-repeater')): the_row();?>
            <div class="col-sm-12 col-md-12 col-lg-12 <?php if($i%2==0) {echo'outer';} else {echo'';} ?> ">
              <div class="investment_box first">
                <div class="figure">
                  <img src="<?php the_sub_field('img-fluid'); ?>" class="img-fluid" alt="stocks" />
                  <h3><?php the_sub_field('fluid-heading'); ?></h3>
                </div>
                <div class="content">
                  <p><?php the_sub_field('fluid-text'); ?></p>
                  <div class="box_btn">
			            	  <?php 
                    $link = get_sub_field('fluid-btn');
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
       <?php endwhile; 
	        else:
	      endif; ?>

          </div>
        </div>
      </section>
      <!--investment-->
      <section class="investment platforms">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 outer">
              <div class="investment_box first">
                <div class="figure">
			        	<?php if(get_field('investment-platform-img')): ?>
                  <img src="<?php the_field('investment-platform-img'); ?>" class="img-fluid" alt="stocks" />
				          <?php endif; ?>
                  <h3><?php the_field('investment-platform-text'); ?></h3>
                </div>
                <div class="content">
                  <p><?php the_field('investment-platform-cntnt'); ?></p>
                  <div class="box_btn">
				        <?php 
                 $link = get_field('investment-platform-link');
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
      
              <!--review-->
      <section class="review">
        <div class="container">
          <div class="row">
		       <?php if(have_rows('review-left-repeater')):
             while(have_rows('review-left-repeater')): the_row();  ?>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <div class="review_left">
               <?php the_sub_field('review-left-txt'); ?>
              </div>
            </div>
            <?php endwhile;
		          else:
		          endif; ?>
          </div>
        </div>
      </section>
	  
	  
	  
	   <!--Wealth-->
      <section class="global_search top_tips">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12">
              <div class="heading">
                <h2><?php the_field('wealth-heading'); ?></h2>
              </div>
            </div>
          </div>
          <div class="what_demat mutual_funds_future home_services">
		  <?php $i=0;
		  if(have_rows('wealth-repeater')):
		      while(have_rows('wealth-repeater')): the_row(); ?>
            <div class="row <?php if($i%3==0){echo 'first';}else if($i%3==1){ echo 'flex-wrap-reverse mt-5';}else{ echo 'mt-5';}?>" id="<?php echo $i; ?>">
              <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="what_demat_left_flex first">
                  <div class="what_demat_left ">
                    <?php the_sub_field('wealth-demat-cntnt'); ?>
                    <div class="box_btn">
					<?php 
					$link = get_sub_field('wealth-btn');
					if($link):
               $link_url = $link['url'];
               $link_title = $link['title'];	  ?>
                      <a href="<?php echo esc_url($link_url);?>"><?php echo esc_html($link_title); ?></a>
					  <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="what_demat_left">
                  <img src="<?php the_sub_field('wealth-demat-img'); ?>" class="img-fluid" alt="demat">
                </div>
              </div>
            </div>
       <?php 
	   $i++;
	   endwhile;
	   else:
	   endif; ?>
          </div>
        </div>
      </section>
     
                
             
<?php get_footer(); ?>