<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package karot-website
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'karot-website' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();

			?>

				
		</div><!-- .site-branding -->

    <!-- Start featurette heading -->

    <div class="row featurette2">
      <div class="col-md-72">

      <a href="#"> <img  class ="karotLogo-img"src="http://karotwebsite.local/wp-content/uploads/2022/09/karot-logo.png" alt="" height="95px" width="95px"></a>

      
      <h1 class="h3y">Karot <br> <p class="pg">Saving Smart</p><h2 class="heading2"> Budget made easier for you </h2><h1>
        
        <p class="here">Lörem ipsum kat töskap och rekrov: diledes. Ore spev. Belig visaska. Nälig. Spelar dagen sudoku renas. </p>

        <div class="button-box">
        <a href= "#"><button class ="button1">Download</button></a>
        <a href= "#"><button class="button2">Learn More</button></a> 
        </div>

        
      </div>
      <div class="col-md-5 navbarbg-box">
      <img src="http://karotwebsite.local/wp-content/uploads/2022/09/hero-mage.png" alt="hero image">
      </div>
    </div>
 
  

    <!-- End featurette heading -->


<div class="banner">

<img src="http://karotwebsite.local/wp-content/uploads/2022/09/star-rating.jpg" alt="rating img">

</div>

		
		

	</header><!-- #masthead -->
