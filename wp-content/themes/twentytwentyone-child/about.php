<?php 
/* 
Template Name: About 
*/

?>
<?php get_header(); ?>

<main>
        <!--about_bnr-->
         <section class="about_bnr">
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
                      <?php the_field('about-team-content'); ?>
                     </div>
                   </div>
             </div>
           </div>
         </section>
       </main>

<?php get_footer(); ?>