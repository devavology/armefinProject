    <footer>
         <section class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-3">
                     <div class="footer_logo">
					 <?php if( get_field('footer-logo','option') ): ?>
                        <a href=<?php echo site_url(); ?>><img src="<?php the_field('footer-logo','option')?>" class="img-fluid" alt="logo"></a>
						<?php endif; ?>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-3">
                     <div class="footer_links footer_links_hover">
                        <h3><?php the_field('navigation','option'); ?></h3>
                        <ul>
						<?php 
                            $link = get_field('home','option');
                            if( $link ): 
                             $link_url = $link['url'];
                             $link_title = $link['title'];
                              ?>
                           <li><a class="button" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a></li>
                           
                            <?php endif; ?>
							<?php 
                            $link = get_field('Wealth-Management','option');
                            if( $link ): 
                             $link_url = $link['url'];
                             $link_title = $link['title'];
                              ?>
                           <li><a class="button" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a></li>
                           
                            <?php endif; ?>
							<?php 
                            $link = get_field('Investment-Banking','option');
                            if( $link ): 
                             $link_url = $link['url'];
                             $link_title = $link['title'];
                              ?>
                           <li><a class="button" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a></li>
                           
                            <?php endif; ?>
							<?php 
                            $link = get_field('Insights','option');
                            if( $link ): 
                             $link_url = $link['url'];
                             $link_title = $link['title'];
                              ?>
                           <li><a class="button" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a></li>
                           
                            <?php endif; ?>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-3">
                     <div class="footer_links footer_links_hover">
                        <h3><?php the_field('additional-link', 'option'); ?></h3>
                        <ul>
							<?php 
                            $link = get_field('About-us','option');
                            if( $link ): 
                             $link_url = $link['url'];
                             $link_title = $link['title'];
                              ?>
                           <li><a class="button" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a></li>
                           
                            <?php endif; ?>
								<?php 
                            $link = get_field('Contact-us','option');
                            if( $link ): 
                             $link_url = $link['url'];
                             $link_title = $link['title'];
                              ?>
                           <li><a class="button" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a></li>
                           
                            <?php endif; ?>
                           
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-3">
                     <div class="footer_links footer_links_hover">
                        <h3><?php the_field('Our-Offices', 'option'); ?></h3>
                        
						<?php 
                            $link = get_field('address','option');
                            if( $link ): 
                             $link_url = $link['url'];
                             $link_title = $link['title'];
                              ?>
                           <li><a class="address" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a></li>
                           
                            <?php endif; ?>
							<div class="footer_icon">
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-12">
                     <div class="copyright_center">
                        <p><?php the_field('copyright', 'option'); ?></p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </footer>

<?php wp_footer(); ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
                    $(document).ready(function () {
                        $(".links").click(function () {
                            $(".links").removeClass("links_actives");
                            $(this).addClass("links_actives");
                        });
                    });
                </script>
                <script>
                    // get all elements here now
                    const navMenuClose = document.getElementById("menu-close");
                    const sideMenuClose = document.getElementById("sidebar-close");
                    const links = document.querySelector("header .navbar .navbar-links");
                    const menuLi = document.querySelectorAll("header .navbar .navbar-links .links > li");
                    const submenu = document.querySelectorAll("header .navbar .navbar-links .links li ul > li");

                    navMenuClose.addEventListener("click", () => {
                        links.style.left = "0";
                    });

                    sideMenuClose.addEventListener("click", () => {
                        links.style.left = "-100%";
                    });

                    document.addEventListener("click", (event) => {
                        if (!links.contains(event.target) && !navMenuClose.contains(event.target)) {
                            links.style.left = "-100%";
                        }
                    });

                    menuLi.forEach((item) => {
                        item.addEventListener("click", (e) => {
                            menuLi.forEach((li) => {
                                li.classList.remove("active");
                            });

                            e.currentTarget.classList.toggle("active");
                        });
                    });

                    submenu.forEach((item) => {
                        item.addEventListener("click", (e) => {
                            e.currentTarget.classList.toggle("show-menu");
                        });
                    });

                    const navbar = document.querySelector("header");
                    const topMenu = document.querySelector(".top-menu");

                    window.addEventListener("scroll", () => {
                        const scrollHeight = window.scrollY;
                        const navbarHeight = navbar.getBoundingClientRect().height;

                        if (scrollHeight > navbarHeight) {
                            navbar.classList.add("nav-fix");
                        } else {
                            navbar.classList.remove("nav-fix");
                        }

                        console.log(scrollHeight);

                        if (scrollHeight > 200) {
                            topMenu.classList.add("show-btn");
                        } else {
                            topMenu.classList.remove("show-btn");
                        }
                    });

                    topMenu.addEventListener("click", () => {
                        document.documentElement.scrollTop = 0;
                    });
                </script>
                <script>
                    $(".investment_slide").owlCarousel({
                        loop: true,
                        margin: 10,
                        autoplay: true,
                        responsiveClass: true,
                        autoplayTimeout: 4000,
                        smartSpeed: 800,
                        dots: true,
                        responsive: {
                            0: {
                                items: 1,
                                dots: true,
                                nav: false,
                            },
                            600: {
                                items: 3,
                                dots: true,
                                nav: false,
                            },
                            1000: {
                                items: 5,
                                nav: false,
                                dots: true,
                                loop: true,
                            },
                        },
                    });
                </script>
<script>
const menuItems = document.querySelectorAll('.links .linksss');

// Loop through each <li> element and add <i> tag after <a> tag
menuItems.forEach(item => {
  const aTag = item.querySelector('a');
  const iTag = document.createElement('i');
  iTag.className = 'fa-solid fa-chevron-down';
  aTag.insertAdjacentElement('afterend', iTag);
});
</script>

 <script>
    $(document).ready(function() {
      // Find the <ul> element with the specified class and add a sub-class
      $("ul.sub-menu").addClass("more-sub-menu");
    });
  </script>
</body>
</html>
