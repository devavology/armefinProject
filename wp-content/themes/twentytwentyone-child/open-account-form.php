<?php
/*
Template Name: open-account form
*/
 ?>
<?php get_header(); ?>

<section class="open_account contact_form">
        <div class="container">
           <div class="row align-items-center justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-12 outer">
                     <div class="heading">
                       <?php the_field('open-account-heading'); ?>
                     </div>
                  </div>
              <div class="col-md-12 col-lg-10 col-sm-12">
                <div class="search_right">
                        <div class="search_heading">
                           <h2><?php the_field('search-heading	');?></h2>
                        </div>
                        <?php the_field('account-form'); ?>
                     </div>
              </div>
           </div>
        </div>
     </section>

<?php get_footer(); ?>