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

 <!-- nav starts here -->
 <nav>

<!-- dropdown menu  -->

<div class="dropdown">
    <button onclick="myFunction()" class="dropbtn">&#9776;</button>
    <div id="myDropdown" class="dropdown-content">
      <a href="#">How it Works</a>
      <a href="#">Contact</a>
      <a href="#">Info</a>
      <a href="#">Get App</a>
     </div>
  </div>
  
  <script>
  /* When the user clicks on the button, 
  toggle between hiding and showing the dropdown content */
  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
  </script>
<div class="logo"> 
   <a href="#"> <img  class ="karotLogo-img"src="http://karotwebsite.local/wp-content/uploads/2022/09/karot-logo.png" alt="" height="95px" width="95px"></a>

    <div class="logo-text-box"><a href="#">
        <h1>Karot <h1>
        <p>Saving Smart</p>
    </div></a>

    <ul class="pu">
    <a href="#"><li>How it Works</li></a>
    <a href="#"><li>Contact</li></a>
    <a href="#"><li>Info</li></a>
    <a href="#"><li class ="getApp">Get App</li></a>
</ul>
</div>



</nav>
<!-- nav ends here -->



<!-- hero section starts here -->
<div class="hero-wrapper">
<div class="hero-content-box">
    <h1>Budget made easier for you</h1>
    <p>Lörem ipsum kat töskap och rekrov: diledes. Ore spev. Belig visaska. Nälig. Spelar dagen sudoku renas. </p>
    <div class="button-box">
        <a href= "#"><button class ="button1">Download</button></a>
     <a href= "#"><button class="button2">Learn More</button></a> 
    </div>
</div>
<div class="navbarbg-box">

    <img src="http://karotwebsite.local/wp-content/uploads/2022/09/hero-mage.png" alt=" hero image">
</div>

</div>

</div>
<!-- hero section ends here -->

<div class="banner">
<h1>
    See why people are using our App
      <div class="rating-stars">
        <span style="font-size:46px;color:yellow;">&starf;</span>
        <span style="font-size:46px;color:yellow;">&starf;</span>
        <span style="font-size:46px;color:yellow;">&starf;</span>
        <span style="font-size:46px;color: rgba(217, 217, 217, 1);">&starf;</span>
        
    </div>
</h1>

</div>

		
		

	</header><!-- #masthead -->
