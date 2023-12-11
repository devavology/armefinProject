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
	
      <!--premium part -->
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
            <div class="col-sm-12 col-md-4 col-lg-4">
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
            <div class="col-sm-12 col-md-12 col-lg-12 <?php if($i%3==0){echo 'outer';}else if($i%3==1){ echo 'outer outer-space';}else{ echo '';}?> id="<?php echo $i; ?>">
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
       <?php  $i++;
     endwhile; 
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

<section class="premium_part investment">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="heading">
                 <h2>Investment Banking Services</h2>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 outer">
              <div class="boxes-premium">
                <article>
                <img class="img_field" src="http://localhost/armfin/wp-content/uploads/2023/10/fund-raising.jpg" alt="return">
                <h3>Fund Raising</h3>
                <p>As a small business owner, you might be looking for ideas of where to get the capital to take your business venture or startup idea to the next level. After you have made a business plan, invested your own savings, and worked your business as a side hustle for a few months, it is time to raise some real funds.</p>
              </article>
                <div class="box_btn">
                  <a href="startup-funding.html">Read more</a>
                </div>
              </div>
            </div>
                   <div class="col-sm-12 col-md-6 col-lg-6 outer">
              <div class="boxes-premium">
                <article>
                <img class="img_field" src="http://localhost/armfin/wp-content/uploads/2023/10/merg.jpg" alt="return">
                <h3>Mergers And Acquisitions</h3>
                <p>Mergers and acquisitions (M&amp;A) refer to the processes of combining two or more companies to form a new entity (merger) or one company acquiring another (acquisition). These strategic business activities aim to achieve various objectives, such as expanding market share, gaining new capabilities, accessing new markets, or achieving economies of scale. M&amp;A deals involve significant financial, legal, and operational considerations. They can have a profound impact on the involved organizations and their stakeholders.</p>
                </article>
                <div class="box_btn">
                  <a href="mergers-acquisitions.html">Read more</a>
                </div>
              </div>
            </div>
                   <div class="col-sm-12 col-md-6 col-lg-6 outer">
              <div class="boxes-premium">
                <article>
                <img class="img_field" src="http://localhost/armfin/wp-content/uploads/2023/10/business-set-up.jpg" alt="return">
                <h3>Business Set-up</h3>
                <p>What business should you start? It depends on your expertise, plus how much time and money you’re able to invest. Some small-business ideas can be launched from home.</p>
              </article>
                <div class="box_btn">
                  <a href="business-set.html">Read more</a>
                </div>
              </div>
            </div>
                   <div class="col-sm-12 col-md-6 col-lg-6 outer">
              <div class="boxes-premium">
                <article>
                <img class="img_field" src="http://localhost/armfin/wp-content/uploads/2023/10/fund-raising.jpg" alt="return">
                <h3>Mergers And Acquisitions</h3>
             <p>Mergers and acquisitions (M&amp;A) refer to the processes of combining two or more companies to form a new entity (merger) or one company acquiring another (acquisition). These strategic business activities aim to achieve various objectives, such as expanding market share, gaining new capabilities, accessing new markets, or achieving economies of scale. M&amp;A deals involve significant financial, legal, and operational considerations. They can have a profound impact on the involved organizations and their stakeholders. </p>
              </article>
                <div class="box_btn">
                  <a href="#">Read more</a>
                </div>
              </div>
            </div>
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
            <div class="row <?php if($i %2 == 0){echo 'mt-5';}else { echo 'flex-wrap-reverse mt-5';}?>" id="<?php echo $i; ?>">
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



 <section class="premium_part investment">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="heading">
                 <h2><?php the_field('investment_platform_heading'); ?></h2>
              </div>
            </div>
            <?php if(have_rows('platform_repeater')):
            while(have_rows('platform_repeater')): the_row();?>
            <div class="col-sm-12 col-md-6 col-lg-6 outer">
              <div class="boxes-premium investment_boxss">
                <article>
                <img class="img_field" src="<?php the_sub_field('premium_img');?>" alt="return">
                <h3><?php the_sub_field('premium_text'); ?></h3>
                <p><?php the_sub_field('premium_content'); ?></p>
              </article>
                <div class="box_btn investment_btn">
                   <?php 
                    $link = get_sub_field('premium_btn');
                     if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                             ?>
                    <a href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php 
        endwhile;
		endif;
         ?>
           
          </div>
        </div>
  
      </section>