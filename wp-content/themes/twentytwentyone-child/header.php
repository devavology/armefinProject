<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	 <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
      <link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png">
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
      <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css">
	  
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

   <div class="whatapss_fixed">
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
    <header id="home" class="navigation">
      <div class="container">
    <nav class="navbar">
      <div class="logo">
	 <?php  $custom_logo_id = get_theme_mod( 'custom_logo' );
	 $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
	 <?php if($image){ ?>
        <a href=<?php echo site_url(); ?>><img src="<?php echo $image[0]; ?>" class="img-fluid" alt="logo"></a>
	 <?php } ?>
		
        <i id="menu-close" class="fa-solid fa-bars"></i>
      </div>
      <div class="navbar-links">
        <div class="sidebar-logo">
          <i id="sidebar-close" class="fa-solid fa-xmark"></i>
        </div>
       
			   <?php   wp_nav_menu( array(
	           'menu'           => 'navigation menu', 
	          'items_wrap'      => '<ul id="%1$s" class="links">%3$s</ul>',
               ) ); 
			   ?>
			   
        <div class="get-btn">
		<?php 
            $link = get_field('contact-page', 'option');
               if( $link ): 
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                 
                  ?>
    <a class="get-in" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
     
      </div>
      </div>
    </nav>
  </div>
  </header>


