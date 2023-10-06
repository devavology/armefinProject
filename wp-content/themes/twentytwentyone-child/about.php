<?php 
/* 
Template Name: About 
*/

?>
<?php get_header(); ?>

<main>
        <!--about_bnr-->
         <section class="about_bnr">
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
                        <h1><?php the_field('about-heading');?></h1>
                     </div>
                  </div>
               </div>
            </div>
         </section>

   
       <!--about_Journey-->
           <section class="about_Journey">
             <div class="container">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="about_journey_left">
                      <div class="heading">
                        <h2><?php the_field('about-journey-heading'); ?></h2>
                     </div>
                      
                    <?php the_field('about-journey-content'); ?>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="about_journey_right">
					<?php if(get_field('about-journey-img')): ?>
                      <img src="<?php the_field('about-journey-img'); ?>" class="img-fluid" alt="journeygo">
					  <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
           
         </section>


      <!--about_funding-->
         <section class="about_funding">
           <div class="container">
             <div class="row">
               <div class="col-sm-12 col-md-12">
                     <div class="heading">
                        <?php the_field('about-funding-content'); ?>
                     </div>
                  </div>
             </div>
           </div>
         </section>
      
	   <!--about_team-->
          <section class="about_team">
           <div class="container">
             <div class="row">
               <div class="col-sm-12 col-md-12">
                     <div class="about_team_left">
                      <h2><?php the_field('about-team-heading'); ?></h2>
                      <div class="owl-carousel team_slider">
					  <?php if(have_rows('team-repeater')):
					  while(have_rows('team-repeater')): the_row(); ?>
                        <div class="team-slide">
                         <figure>
                           <img src="<?php the_sub_field('team-img'); ?>" class="img-fluid" alt="team1">
                         </figure>
                         <div class="content">
                       <?php the_sub_field('team-content'); ?>
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
       </main>

<?php get_footer(); ?>