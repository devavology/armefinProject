<?php
/* 
Template Name: nre account
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
                        <h1><?php the_field('nre-account-bnr'); ?></h1>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="about_Journey nre_what">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-7">
                     <div class="about_journey_left">
                        <div class="heading">
                           <h2><?php the_field('account-heading'); ?></h2>
                        </div>
                        <ul>
                          <?php the_field('account-content'); ?>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-5">
                     <div class="about_journey_right">
					 <?php if(get_field('account-img')): ?>
                        <img src="<?php the_field('account-img'); ?>" class="img-fluid" alt="journeygo">
						<?php endif; ?>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="pis_nonpis">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                     <div class="heading">
                        <h2><?php the_field('pis-heading'); ?></h2>
                     </div>
                  </div>
				  <?php if(have_rows('pis-repeater')):
                        while(have_rows('pis-repeater')): the_row(); ?>
                  <div class="col-sm-12 col-md-6">
                     <div class="pis_nonpis_right">
                        <?php the_sub_field('nonpis-content'); ?>
                     </div>
                  </div>
              <?php endwhile;
                    else:
                    endif;	?>
               </div>
            </div>
         </section>
         <section class="documents_account">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                     <div class="documents_main">
                        <div class="documents_account_center">
                           <?php the_field('documentation-account-center'); ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
		 <?php $i=0;
		 $r=0;
		 $j=0;
		 $k=0;
		 if(have_rows('appliation-repeater')):
               while(have_rows('appliation-repeater')): the_row();	 ?>
         <section class="largest_demand types_aif application_form <?php if($i%2==0) {echo'';} else {echo'second';} ?>">
            <div class="container">
               <div class="row <?php if($k%2==0){echo'';} else {echo 'flex-wrap-reverse';} ?>">
                  <div class="col-sm-12 col-md-12 col-lg-6">
                     <div class="largest_demand_left <?php if($r%2==0) {echo'first'; } else { echo'second';} ?>">
                        <?php the_sub_field('demat-content'); ?>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-6">
                     <div class="largest_demand_left <?php if($j%2==0) {echo'second';} else {echo'first';}?>">
                        <img src="<?php the_sub_field('demat-img'); ?>" class="img-fluid" alt="demat">
                     </div>
                  </div>
               </div>
            </div>
         </section>
		 <?php 
		 $i++; $r++; $j++; $k++;
		 endwhile;
		 else:
		 endif;  ?>
         <section class="what_alternative important_note">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12col-md-10 col-lg-9">
                     <div class="what_alternative_box">
                        <figure>
						<?php if(get_field('alternative-box-img')): ?>
                           <img src="<?php the_field('alternative-box-img'); ?>" class="img-fluid" alt="demat">
						   <?php endif; ?>
                        </figure>
                        <div class="content">
                           <?php the_field('alternative-content'); ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
 
 <?php get_footer(); ?>