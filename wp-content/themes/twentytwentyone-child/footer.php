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
                                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
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
	   <script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.parallax.js"></script>
	   <script src="<?php echo get_stylesheet_directory_uri();?>/js/cdn.jsdelivr.net_particles.js_2.0.0_particles.min.js"></script>
       <script>
         $(document).ready(function(){
           $('.links').click(function(){

             $('.links').removeClass("links_actives");
             $(this).addClass("links_actives");
         });
         });
      </script>
      <script>
         // get all elements here now
         const navMenuClose = document.getElementById("menu-close");
         const sideMenuClose = document.getElementById("sidebar-close");
         const links = document.querySelector("header .navbar .navbar-links");
         const menuLi = document.querySelectorAll(
           "header .navbar .navbar-links .links > li"
         );
         const submenu = document.querySelectorAll(
           "header .navbar .navbar-links .links li ul > li"
         );
         
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
      $('.bnr_slider').owlCarousel({
        loop: true,
        margin: 0,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 800,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          600: {
            items: 1,
            nav: false
          },
          1000: {
            items: 1,
            nav: false,
            loop: true
          }
        }
      })
    </script>  
   <script>
         $('#parallax').parallax({
  invertX: true,
  invertY: true
});


particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 120,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"
      },
      "onclick": { 
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 140,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});
      </script>
	  <script>
        $('.team_slider').owlCarousel({
    loop:true,
    margin:28,
    dots:true,
    autoplay: true,
    responsiveClass: true,
    autoplayTimeout: 4000,
    smartSpeed: 800,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:false,
            loop:true
        }
    }
})
      </script>
	  <script>
         $(document).ready(function(){
         
         var current_fs, next_fs, previous_fs; //fieldsets
         var opacity;
         var current = 1;
         var steps = $("fieldset").length;
         
         setProgressBar(current);
         
         $(".next").click(function(){
         
         current_fs = $(this).parent();
         next_fs = $(this).parent().next();
         
         //Add Class Active
         $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
         
         //show the next fieldset
         next_fs.show();
         //hide the current fieldset with style
         current_fs.animate({opacity: 0}, {
         step: function(now) {
         // for making fielset appear animation
         opacity = 1 - now;
         
         current_fs.css({
         'display': 'none',
         'position': 'relative'
         });
         next_fs.css({'opacity': opacity});
         },
         duration: 500
         });
         setProgressBar(++current);
         });
         
         $(".previous").click(function(){
         
         current_fs = $(this).parent();
         previous_fs = $(this).parent().prev();
         
         //Remove class active
         $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
         
         //show the previous fieldset
         previous_fs.show();
         
         //hide the current fieldset with style
         current_fs.animate({opacity: 0}, {
         step: function(now) {
         // for making fielset appear animation
         opacity = 1 - now;
         
         current_fs.css({
         'display': 'none',
         'position': 'relative'
         });
         previous_fs.css({'opacity': opacity});
         },
         duration: 500
         });
         setProgressBar(--current);
         });
         
         function setProgressBar(curStep){
         var percent = parseFloat(100 / steps) * curStep;
         percent = percent.toFixed();
         $(".progress-bar")
         .css("width",percent+"%")
         }
         
         $(".submit").click(function(){
         return false;
         })
         
         });
      </script>

<script >
 $(document).ready(function() {
        $('#menu-navigation-menu li a').on('click', function(event) {
            $("#menu-navigation-menu li a").addClass('active');
        });
    });
</script>
</body>
</html>
