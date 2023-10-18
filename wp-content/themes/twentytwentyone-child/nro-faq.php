<?php 
/* 
Template Name: nro faq
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
                        <h1><?php the_field('faq-bnr'); ?></h1>
                     </div>
                  </div>
               </div>
            </div>
         </section>
        <section class="faq nro_faqs">
            <div class="container">
               <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12">
                  <div class="heading">
                    <h2><?php the_field('faq-heading'); ?></h2>
                  </div>
                </div>
                  <div class="col-sm-12 col-md-12 col-lg-10"> 
                     <div class="faq_center">
                        <div class="accordion" id="accordionExample">
						<?php $i=0; 
                           if(have_rows('faq-repeater')):
                           while(have_rows('faq-repeater')): the_row();		
                           $title = get_sub_field('faq-title');
                           $content = get_sub_field('faq-content');	 ?>
                             <div class="accordion-item">
                               <h2 class="accordion-header" id="heading<?php echo $i; ?>">
                                 <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                                  <?php echo $title; ?>
                                 </button>
                               </h2>
                               <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $i; ?>" data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                  <?php echo $content; ?>
                                 </div>
                               </div>
                             </div>
             <?php $i++;
			 endwhile; 
			 endif; ?>
                           </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>

<?php get_footer(); ?>