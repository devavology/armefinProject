<?php get_header(); ?>

<main>

         <!--about_bnr-->
         <section class="about_bnr nre-account">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                     <div class="about_bnr_text">
                        <h1><?php the_field('post-bnr');?></h1>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <section class="blogs_details">
           <div class="container">
             <div class="row">
               <div class="col-md-12 col-md-7 col-lg-8">
                 <div class="blogs_details_left">
                   <figure>
				   <?php if(get_field('blog-img')): ?>
                     <img src="<?php the_field('blog-img'); ?>" alt="droun" class="img-fluid">
					 <?php endif; ?>
                   </figure>
                  <?php the_field('blog-content'); ?>
                   </div>

                    <div class="blogs_details_space">
                     <?php the_field('blog-space-contnt'); ?>
                   </div>
                 </div>
               </div>
               <div class="col-sm-12 col-md-4">
                     <div class="insights_blogs_sidebar">
                        <p><?php the_field('insights-blog'); ?></p>
                        <figure>
						<?php if(get_field('insights-img')): ?>
                           <img src="<?php the_field('insights-img'); ?>" class="img-fluid" alt="logo">
						   <?php endif; ?>
                        </figure>
                        <ul class="check_list">
                           <?php the_field('check-list'); ?>
                        </ul>
                        <div class="box_btn">
						<?php 
                    $link = get_field('account-link');
                     if( $link ): 
                         $link_url = $link['url'];
                         $link_title = $link['title'];
                         $link_target = $link['target'] ? $link['target'] : '_self';
                     ?>
                      <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                   <?php endif; ?>
                     </div>
                     </div>

                      <div class="insights_blogs_sidebar second">
                        <p><?php the_field('insights-blog-sec');?></p>
                        <figure>
						<?php if(get_field('start-up-img')): ?>
                           <img src="<?php the_field('start-up-img'); ?>" class="img-fluid" alt="logo">
						   <?php endif; ?>
                        </figure>
                        <ul class="check_list">
                           <?php the_field('check-list-sec'); ?>
                        </ul>
                        <div class="box_btn register_btns">
						<?php 
                   $link = get_field('register-link');
                   if( $link ): 
                     $link_url = $link['url'];
                     $link_title = $link['title'];
                    ?>
                   <a href="<?php echo esc_url( $link_url ); ?>"><button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><?php echo esc_html( $link_title ); ?></button></a>
                  <?php endif; ?>
                         
                         <!-- Modal -->
                         <div class="register_form">
                           <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                             <div class="modal-dialog">
                               <div class="modal-content">
                                 <div class="modal-header">
                                   <h5 class="modal-title" id="exampleModalLabel"><?php the_field('startup-investing'); ?></h5>
                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                <?php the_field('registration-form'); ?>
                                 </div>
                               </div>
                             </div>
                           </div>
                           </div>
                     </div>
                     </div>
                  </div>
             </div>
           </div>
         </section>
       
      </main>

<?php get_footer(); ?>