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
   <a href="#"> <img  class ="karotLogo-img"src="./img/karot-logo.png" alt="" height="95px" width="95px"></a>

    <div class="logo-text-box"><a href="#">
        <h1>Karot <h1>
        <p>Saving Smart</p>
    </div></a>
</div>



    <ul>
    <a href="#"><li>How it Works</li></a>
    <a href="#"><li>Contact</li></a>
    <a href="#"><li>Info</li></a>
    <a href="#"><li class ="getApp">Get App</li></a>
</ul>

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

    <img src="./img/hero-mage.png" alt="">
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