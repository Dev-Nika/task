<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="style.css">


<style type="text/css">
  
#myBtn {
  display: none;
  position: fixed;
  bottom: 30px;
  padding: 20px 20px 20px 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: grey;
  color: white;
  cursor: pointer;
  border-radius: 50%;
  opacity: 0.5;



}

#myBtn:hover {
  background-color: #555;
}


</style>




</head>
<body>





<!--header-->

<div class="header" id="myHeader">

  <div id="insideheader">

<a href="#"><div id="log"><img  src="logo.svg" alt="My Happy SVG"/></div></a>

<p id="slogan">Build Software to Test Software</p>

<div id="insideheader2">

<div id="myOverlay" class="overlay">
  <p class="closebtn" onclick="closeSearch()" title="Close Overlay">×</p>
  <div class="overlay-content">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i> Search</button>
    </form>
  </div>
</div>

<div class="openBtn" onclick="openSearch()"><span class="centernav"><i class="fa fa-search"></i> Search</span></div>



  <h6 onclick="document.getElementById('id01').style.display='block'" class="subsc1"><span class="centernav">@ Subscribe</span></h6>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4" id="mod1">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright" id="sin1">&times;</span>
        <h2 id="mod3">Subscribe</h2>
      </header>
      <div class="w3-container">
        <p>Some Content</p>
       
      </div>
     
    </div>
  </div>


   <h6 onclick="document.getElementById('id02').style.display='block'" class="subsc2"><span class="centernav"><i class="fa fa-envelope"></i> Contact Us</span></h6>

  <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4" id="mod2">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id02').style.display='none'" 
        class="w3-button w3-display-topright" id="sin2">&times;</span>
        <h2 id="mod4">Contact Us</h2>
      </header>
      <div class="w3-container">
        <p>Some Content</p>
      </div>
    
    </div>
  </div>

<nav role='navigation'>
    <div id="menuToggle">
     
      <input id="check" type="checkbox"/>
    
      <label id="labmenu" for="check">Menu</label>
      <span></span>
      <span></span>
      <span></span>
      
      <ul id="menu">

        <a href="#">
          <li>Home</li>
        </a>
        <a href="#">
          <li>Case Studies</li>
        </a>
        <a href="#">
          <li>Solutions</li>
        </a>
        <a href="#">
          <li>Test Tools</li>
        </a>
      </ul>
    </div>
  </nav>


</div>


</div>


</div>







<div id="aboutnav">
  <h1 id="abus">About Us</h1>
</div>

<nav class="subnavi">

 <div class="subdivisions">

  <a href="#" class="subdiv">About us</a>
  <a href="#"class="subdiv">Managament team</a>
  <a href="#"class="subdiv">Locations</a>
  <a href="#"class="subdiv">Pearson VUE</a>
  <a href="#"class="subdiv">Gender pay gap report</a>

 </div>

</nav>


  
<div class="subdirect">

  <a href="#" class="subdir">EXACTPRO</a>
  <i class="fa fa-angle-right"></i>
  <a href="#"class="subdir"> Company</a>
  <i class="fa fa-angle-right"></i>
  <a href="#"class="subdirl"> About us</a>

</div>


<section class="mission">
   

      <div class="subsection1">

       <h2 class="tit"> Our Mission</h2>
      
       <p class="bord"></p>

    

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Donec et odio pellentesque diam volutpat commodo sed. Nisi quis eleifend quam adipiscing vitae</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>


      </div>
      
<div class="subsection2"><img src="mission.jpg" alt="our_Mission" width="500px"; height="auto" /></div>
  
</section>



<section class="doing">
  

<h2 class="tit">What we do</h2>

<p class="bord2"></p>

<div id="subdoings">
  
  <a href="#" class="subdoing">
    <img class="icons" src="3а.svg" alt="img" width="100px" />
    <span class="subtit">Case Studies</span>
  </a>
  <a href="#" class="subdoing">
    <img class="icons" src="4а.svg" alt="img" width="100px" />
    <span class="subtit">Solutions</span>
  </a>
  <a href="#" class="subdoing">
    <img class="icons" src="7a.svg" alt="img" width="100px" />
    <span class="subtit">Exactpro Overview</span>
  </a>
  <a href="#" class="subdoing">
    <img class="icons" src="2а.svg" alt="img" width="100px" />
    <span class="subtit">Clients & Partners</span>
  </a>




</div>

<div id="size">

   <div class="sizemain">

     <h2 class="siztext">Our Experience</h2>
     <p class="bord3"></p>


  </div>

     <div class="siztext2">
     
      <div class="siztext3">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Donec et odio pellentesque diam volutpat commodo sed. Nisi quis eleifend quam adipiscing vitae</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
       </div>

      </div>
  <img src="size_p_5_0.jpg" alt="size" width="100%" />

 

</div>

</section>



<section class="last">
   

      <div class="subsectionlast">

       <h2 class="titlast"> The Deliberate Practice of Software Testing</h2>
      
       <p class="bord4"></p>

    

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Donec et odio pellentesque diam volutpat commodo sed. Nisi quis eleifend quam adipiscing vitae</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Donec et odio pellentesque diam volutpat commodo sed. Nisi quis eleifend quam adipiscing vitae</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Donec et odio pellentesque diam volutpat commodo sed. Nisi quis eleifend quam adipiscing vitae</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>

      </div>
      

  
</section>


<section class="footers">
   

<div class="foot1">

<div class="foot">

<img id="logowhite" src="logo_white.svg" alt="logo"/>

<p id="footslog">Build Software to Test Software</p>


</div>
<div class="foot">Contact Us
<p id="bord5"></p>
<address id="info"><i class="fa fa-envelope"></i> info@exactpro.com</address>
<p class="num">+44(0) 20 3319 1644</p>
<p class="num">+1(646) 340 3000</p>





</div>
<div class="foot">Follow Us

<p id="bord6"></p>

<a href="#" class="fa fa-github" id="git"></a>
<a href="#" class="fa fa-facebook" id="fb"></a>
<a href="#" class="fa fa-twitter" id="twit"></a>
<a href="#" class="fa fa-linkedin" id="linked"></a>
<a href="#" class="fa fa-youtube" id="yout"></a>




</div>


</div>  

  <div id="copright">
    
    <p id="linfoot"></p>

    <div id="textfoot">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Donec et odio pellentesque diam volutpat commodo sed. Nisi quis eleifend quam adipiscing vitae
    <a href="#" id="terms2" class="termsfoot">Lorem ipsum dolor sit amet</a>

    </div>

  </div>




</section>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up" style=" font-size: 35px;"></i></button>


<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>


<script>
function openSearch() {
  document.getElementById("myOverlay").style.display = "table-cell";
}

function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}
</script>




</body>
</html>