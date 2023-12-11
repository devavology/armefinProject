<?php 
/*Template Name: test */
?>
<?php get_header(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>




<section class="premium-solutions mobile-view">
        <div class="container">
          <div class="row">
                  <div class="owl-carouselss owl-theme">
		         <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="premium-solutions-box">
                <h3>248</h3>
                     <p>Angel investors</p>
              </div>
            </div>
			<div class="col-sm-12 col-md-4 col-lg-4">
              <div class="premium-solutions-box">
                <h3>24</h3>
                    <p>Family Offices</p>
              </div>
            </div>
           <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="premium-solutions-box">
                <h3>44</h3>
                 <p>VCs</p>
              </div>
            </div>
           </div>
          </div>
        </div>
      </section>

<style>
/* Hide the slider on tablets */
@media screen and (min-width: 768px) and (max-width: 1024px) {
.mobile-view {
display: none;
    }
}
@media screen and (min-width: 575px){
.mobile-view {
display: block;
}
}
</style>
<script>
jQuery('.owl-carouselss').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 3,
            nav: true,
            loop: true
        },
        1000: {
            items: 3,
            nav: false,
            loop: false
        }
    }
})
</script>



