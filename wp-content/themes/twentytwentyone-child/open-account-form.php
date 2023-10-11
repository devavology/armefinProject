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
                        <h2>Join 9+ million investors & traders</h2>
                        <p>Open a trading and Demat account online and start investing for free</p>
                     </div>
                  </div>
              <div class="col-md-12 col-lg-10 col-sm-12">
                <div class="search_right">
                        <div class="search_heading">
                           <h2>Signup now</h2>
                        </div>
                        <?php the_field('account-form'); ?>
                     </div>
              </div>
           </div>
        </div>
     </section>

<?php get_footer(); ?>