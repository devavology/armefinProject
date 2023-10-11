<?php 
/* 
Template Name: quiz 
*/
?>
<?php get_header(); ?>

<main>
         <section class="quiz">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                     <div class="quiz_center">
                        <div class="card">
                           <h2 id="heading"><?php the_field('quiz-heading'); ?></h2>
                           <p><?php the_field('quiz-content'); ?> </p>
                           <form id="msform">
                              <div class="progress">
                                 <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <br> <!-- fieldsets -->
                              <fieldset>
                                 <div class="form-card">
                                    <div class="col-sm-12 col-md-12">
                                       <div class="quize_flex">
                                          <div class="quize-wrap">
                                            <div class="quize_bg">
                                             <h3><?php the_field('fieldset-content'); ?></h3>
                                             <div class="radiosss">
                                                <p>
                                                   <label><input type="radio" class="input-radio on" name="pilih"> Agree</label>
                                                </p>
                                                <p class="disagree">
                                                   <label><input type="radio" class="input-radio off" name="pilih"> Disagree</label>
                                                </p>
                                             </div>
                                          </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div>
                                    </div>
                                 </div>
                                 <input type="button" name="next" class="next action-button" value="Next" />
                              </fieldset>
                              <fieldset>
                                 <div class="form-card">
                                       <div class="quize_flex">
                                          <div class="quize-wrap">
                                            <div class="quize_bg">
                                             <h3><?php the_field('fieldset-content2'); ?></h3>
                                             <div class="radiosss">
                                                <p>
                                                   <label><input type="radio" class="input-radio on" name="pilih"> Agree</label>
                                                </p>
                                                <p class="disagree">
                                                   <label><input type="radio" class="input-radio off" name="pilih"> Disagree</label>
                                                </p>
                                             </div>
                                          </div>
                                          </div>
                                       </div>
                                 </div>
                                 <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                              </fieldset>
                              <fieldset>
                                 <div class="form-card">
                                    <div class="quize_flex">
                                          <div class="quize-wrap">
                                            <div class="quize_bg">
                                             <h3><?php the_field('fieldset-content3'); ?></h3>
                                             <div class="radiosss">
                                                <p>
                                                   <label><input type="radio" class="input-radio on" name="pilih"> Agree</label>
                                                </p>
                                                <p class="disagree">
                                                   <label><input type="radio" class="input-radio off" name="pilih"> Disagree</label>
                                                </p>
                                             </div>
                                          </div>
                                          </div>
                                       </div>
                                 </div>
                                 <input type="button" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                              </fieldset>
                              <fieldset>
                                 <div class="form-card">
                                    <div class="row">
                                       <div class="col-7">
                                          <h2 class="fs-title">Finish:</h2>
                                       </div>
                                       <div class="col-5">
                                          <h2 class="steps">Step 4 - 4</h2>
                                       </div>
                                    </div>
                                    <br><br>
                                    <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2>
                                    <br>
                                    <div class="row justify-content-center">
									<?php if(get_field('fieldset-img')): ?>
                                       <div class="col-3"> <img src="<?php the_field('fieldset-img'); ?>" class="fit-image"> </div>
									   <?php endif; ?>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                       <div class="col-7 text-center">
                                          <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                       </div>
                                    </div>
                                 </div>
                              </fieldset>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-12">
                     <div class="insights_blogs_sidebar">
                        <p><?php the_field('demat-txt'); ?></p>
                        <figure>
						<?php if(get_field('demat-img')): ?>
                           <img src="<?php the_field('demat-img'); ?>" class="img-fluid" alt="logo">
						   <?php  endif; ?>
                        </figure>
                        <ul class="check_list">
                           <?php the_field('demat-list'); ?>
                        </ul>
                        <div class="box_btn">
						<?php 
                $link = get_field('demat-link');
                 if( $link ): 
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                  <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>
                     </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>

<?php get_footer(); ?>