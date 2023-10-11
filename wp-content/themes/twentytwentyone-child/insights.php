<?php 
/* 
Template Name: Insights
*/
?>
<?php get_header(); ?>

<main>
         <!--about_bnr-->
         <section class="about_bnr insights-bnr">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                     <div class="about_bnr_text">
                        <?php the_field('insights-bnr'); ?>
                     </div>
                  </div>
               </div>
            </div>
         </section>
 <section class="insights_blogs">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="insights_blogs_tabs">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <?php
                        $p = 1;
                        // Retrieve the categories dynamically
                       $categories = get_categories(array('exclude' => get_cat_ID('uncategorized')));

                        foreach ($categories as $category) {
                            $category_slug = $category->slug;
                            ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link<?php if ($p == 1) {
                                    echo ' active';
                                } ?>" id="<?php echo $category_slug; ?>-tab" data-bs-toggle="pill"
                                        data-bs-target="#<?php echo $category_slug; ?>" type="button" role="tab"
                                        aria-controls="<?php echo $category_slug; ?>"
                                        aria-selected="<?php echo ($category_slug === 'investment') ? 'true' : 'false'; ?>"><?php echo $category->name; ?></button>
                            </li>
                            <?php
                            $p++;
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-8">
                <div class="insights_blogs_content">
                    <div class="tab-content" id="pills-tabContent">
                        <?php
                        $r = 1;
                        foreach ($categories as $category) {
                            $category_slug = $category->slug;
                            ?>
                            <div class="tab-pane fade<?php if ($r == 1) {
                                echo ' show active';
                            } ?>" id="<?php echo $category_slug ?>" role="tabpanel"
                                 aria-labelledby="<?php echo $category_slug ?>-tab">
								  <div class="row">
                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => -1,
                                    'category_name' => $category_slug,
                                    'order' => 'ASC'
                                );
                                $query = new WP_Query($args);
                                if ($query->have_posts()) {
                                    while ($query->have_posts()) : $query->the_post();
                                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                                        ?>
                                       
                                            <div class="col-sm-12 col-md-6 col-lg-4 outer">
                                                <div class="post">
                                                    <div class="post-img">
                                                        <img src="<?php echo $image[0]; ?>" class="img-responsive"
                                                             alt="blog1">
                                                    </div>
                                                    <div class="post-content">
                                                        <div class="post-title">
                                                            <a href="<?php the_permalink(); ?>">
                                                                <h4><?php the_title(); ?></h4>
                                                            </a>
                                                        </div>
                                                        <ul class="post-info list-unstyled">
                                                            <li>
                                                                <i class="fa fa-calendar"></i>
                                                                <span><?php echo get_the_date('d M y'); ?></span>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-commenting-o"></i>
                                                                <a href="<?php comments_link(); ?>"><span><?php
                                                                        comments_number('0 Comment', '1 Comment', '% Comments');
                                                                        ?></span></a>
                                                            </li>
                                                        </ul>
                                                        <div class="post-text">
                                                            <p><?php the_content(); ?></p>
                                                        </div>
                                                        <a href="<?php the_permalink(); ?>"
                                                           class="post-more">Read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                       
                                        <?php
                                    endwhile;
                                    wp_reset_postdata();
                                } else {
                                    echo 'No posts found for this category.';
                                }
                                ?>
								 </div>
                            </div>
                            <?php
                            $r++;
                        }
                        ?>
                    </div>
                </div>
            </div>
			 <div class="col-sm-12 col-md-4">
                     <div class="insights_blogs_sidebar">
                        <p><?php the_field('insights-txt'); ?></p>
                        <figure>
						<?php if(get_field('insights-img')): ?>
                           <img src="<?php the_field('insights-img'); ?>" class="img-fluid" alt="logo">
						   <?php endif; ?>
                        </figure>
                        <ul class="check_list">
                          <?php the_field('insights-contnt'); ?>
                        </ul>
                        <div class="box_btn">
						<?php 
                         $link = get_field('insights-link');
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
                        <p><?php the_field('insight-heading'); ?></p>
                        <figure>
						<?php if(get_field('insight-image')): ?>
                           <img src="<?php the_field('insight-image'); ?>" class="img-fluid" alt="logo">
						   <?php endif; ?>
                        </figure>
                        <ul class="check_list">
                           <?php the_field('check-list'); ?>
                        </ul>
                        <div class="box_btn register_btns">
                         <a href="#"><button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><?php the_field('registration-btn'); ?></button></a>
                         <!-- Modal -->
                         <div class="register_form">
                           <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                             <div class="modal-dialog">
                               <div class="modal-content">
                                 <div class="modal-header">
                                   <h5 class="modal-title" id="exampleModalLabel">Startup Investing</h5>
                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                               <?php the_field('popup_form');  ?>
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
    </div>
</section>
      </main>

<?php get_footer(); ?>

