<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Document</title>
  <style>




/* 

colors: #239090 green;





 */



body {
  margin: 0;
  padding: 0;
  background: #fff;
  color: #333333;
  font-family: "Roboto", sans-serif;
  overflow-x: hidden;
}



a {
  text-decoration: none !important;
  color: #232323;
  transition: color 0.3s ease;
}


#menuToggle {
  display: inline-grid;
  position: absolute;
  float: right;
  top: 0px;
  background: #239090;
  width: 130px;
  right: 130px;
  height: 65px;
  padding: 15px;
  color:  white;

  -webkit-user-select: none;
  user-select: none;
}

#menuToggle:hover {

opacity: 0.8;


}

#labmenu {

position: relative;
border: 0px solid red;
left: 40px;
top: 5px;
font-size: 18px;

}

#menuToggle input {
  display: block;
  width: 130px;
  height: 52px;
  position: absolute;
  top: 15px;
  left: 25px;
  cursor: pointer;
  opacity: 0;
  z-index: 2;
  -webkit-touch-callout: none;
}

#menuToggle span {
  display: block;
  top: -20px;
  width: 33px;
  height: 4px;
  margin-bottom: 5px;
  position: relative;
  background: white;
  border-radius: 3px;
  z-index: 1;
  transform-origin: 4px 0px;
  transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0),
  background 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0),
  opacity 0.55s ease;
}

#menuToggle span:first-child {
  transform-origin: 0% 0%;
}

#menuToggle span:nth-last-child(2) {
  transform-origin: 0% 100%;
}

#menuToggle input:checked~span {
  opacity: 1;
  transform: rotate(45deg) translate(-2px, -1px);
  background: #232323;
}

#menuToggle input:checked~span:nth-last-child(3) {
  opacity: 0;
  transform: rotate(0deg) scale(0.2, 0.2);
}

#menuToggle input:checked~span:nth-last-child(2) {
  opacity: 1;
  transform: rotate(-45deg) translate(0, -1px);
}

#menu {
  position: absolute;
  width: 320px;
  margin: -100px 0 0 0;
  padding: 50px;
  padding-top: 125px;
  right: -180px;
  background: #ededed;
  list-style-type: none;
  -webkit-font-smoothing: antialiased;
  transform-origin: 0% 0%;
  transform: translate(100%, 0);

  transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0);
}

#menu li {
  padding: 10px 0;
  font-size: 22px;
}

#menuToggle input:checked~ul {
  transform: scale(1.0, 1.0);
  opacity: 1;
}



.header {
  position: fixed;
  color: #f1f1f1;
  width: 100%;
  height: 65px;
  border: 0px solid red;
  background: white;
  z-index: 1;

}


#insideheader {
display: grid;
height: 65px;
max-width: 1200px;
border: 0px solid red;
margin:  auto;
}

#insideheader2 {

position: relatives;
border: 0px solid blue;

}



#aboutnav {
position: relative;
background: #002133;
color: #fff;
height: 200px;
top: 65px;
z-index: -1;

}

#abus {
  position: relative;
  top: 70px;
  font-size: 28px;
  width: 1200px;
  border: 0px solid red;
  margin: auto;
  padding: 0px 28px;
}

.subsc1 {
position: relative;
top: -92px;
height: 65px;
left: 600px;
color: black;
font-size: 18px;
width: 130px;
cursor: pointer;
border: 0px solid red;
text-align: center;
display: inline-grid;
vertical-align: middle;


}

.subsc2 {
position: relative;
color: black;
font-size: 18px;
top: -92px;
left: 600px;
width: 150px;
height: 65px;
text-align: center;
cursor: pointer;
border: 0px solid red;
display: inline-grid;
vertical-align: middle;


}

.openBtn{
  position: relative;
  top: -92px;
  width: 130px;
  height: 65px;
  left: 600px;
  cursor: pointer;
  font-size: 18px;
  border:  0px solid red;
  text-align: center;
  color: black;
  display: inline-table;
  vertical-align: middle;

}

.openBtn:hover, .subsc1:hover, .subsc2:hover {
  background: #f1f1f1;
  color:  #239090;
}



.overlay {
  height: 100%;
  width: 100%;
  display: none;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.4);
}

.overlay-content {
  position: relative;
  top: 46%;
  width: 80%;
  text-align: center;
  margin-top: 30px;
  margin: auto;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
  cursor: pointer;
  color: white;
}

.overlay .closebtn:hover {
  color: #ccc;
}

.overlay input[type=text] {
  padding: 15px;
  font-size: 17px;
  border: none;
  float: left;
  width: 80%;
  background: white;
}

.overlay input[type=text]:hover {
  background: #f1f1f1;
}

.overlay button {
  float: left;
  width: 20%;
  padding: 15px;
  background: #239090;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.overlay button:hover {
  background: #bbb;
}

.centernav {
position: relative;
display: inline-block;
top: 20px;

}

#sidemenu {
position: relative;
bottom:  10px;
color: white;
font-size: 18px;
border: 0px solid red;
text-align: right;
padding: 0px 60px;
z-index: 1;


}


#log {
position: relative;
width: 150px;
height: 30px; 
padding: 10px;


}

#slogan {
  position: relative;
  color: black;
  top: -24px;
  left: 170px;
  font-size: 15px;

}


.subnavi {

background: #00111a;
color: white;
height: 65px;


}

.subdivisions {

position: relative;
border:  0px solid red;
width: 1200px;
height: 65px;
margin:  auto;


}

.subdiv {

float: left;
font-size: 18px;
border: 0px solid white;
padding: 15px;
height: 65px;
cursor: pointer;
color: white;


}
.subdiv:hover {

background: #6C7A89;
color: white;


}




.subdirect {

position: relative;
border:  0px solid red;
width: 1200px;
margin: auto;
height: 60px;
padding: 15px;
color: grey;


}

.subdir {

  color: black;
  margin: 5px;
}
.subdirl {

  color: grey;
}

.subdir:hover, .subdirl:hover {

color: grey;

}



.mission {

position: relative;
display: float;
border:  0px solid red;
max-width: 1200px;
min-height: 400px;
margin: auto;


}



.subsection1 {

position: relative;
float: left;
width: 500px;
height: 350px;
border:  0px solid green;
margin: 10px;


}



.bord {

  border-bottom: 2px solid #239090;
  line-height: 40px;
  width: 100px;

}

.bord2 {

  border-bottom: 2px solid #239090;
  line-height: 40px;
  width: 100px;
  margin:  auto;
 


}



.doing {

position: relative;
border:  0px solid red;
background: #f2f2f2;
width: 100%;
height: auto;
margin: auto;
text-align: center;



}


.tit, .titlast {

 font-style: bold;



}



#subdoings {

position: relative;
top:  30px;
border: 0px solid grey;
height: auto;


}


.subdoing {

position: relative;
margin: 5px;
display: inline-block;
foat:  left;
background: hsl(0, 0%, 97%);
border: 1px solid hsl(0, 0%, 85%);
max-width: 200px;
cursor: pointer;



}


.subdoing:hover {

 background: white;


}

.subtit {
position: relative;
top:  20px;
border: 0px solid blue;
float:  right;
width: 70px;
height: 50px;
margin:  10px;





}

#size {

position: relative;
top: 100px;

}

.siztext {
  font-weight: bold;
  font-size:  30px;
  color:  white;
  margin: 25px;

}

.sizemain {
 position:  relative;
 display: flex;
 border: 0px solid red;
 height: 30px;
 width: 1200px;
 margin:  auto;
 text-align: left;
 padding: 10px 0px;
 

}

.bord3 {
  position: absolute;
  top: 80px;
  left: 30px;
  border-bottom: 2px solid #239090;
  width: 100px;
  margin:  left;


 

}

.siztext2 {
  position: absolute;
  top: 70px;
  font-weight: normal;
  font-size:  18px;
  color:  white;
  width: 1200px;
  padding: 25px;
  max-height: 200px;
  border:  0px solid red;
  text-align: left;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);


}

.siztext3 {

 width: 50%;
 border:  0px solid red;


}


.last {

position: relative;
top: 100px;
display: float;
border:  0px solid red;
max-width: 1200px;
min-height: 400px;
margin: auto;
padding: 30px;


}


.bord4 {

  border-bottom: 2px solid #239090;
  line-height: 40px;
  width: 100px;
  margin:  left;

 


}

.footers {
position: relative;
background: #002133;
color: #fff;
height: auto;
top: 65px;
z-index: -1;

}


.foot1 {
position: relative;
border:  0px solid red;
max-width: 1200px;
height: auto;
margin: auto;
padding: 30px;


}


.foot {

float: left;
font-size: 22px;
border: 0px solid white;
padding: 15px;
cursor: pointer;
width: 30%;
height: auto;
color: white;
margin: 5px;


}



#logowhite  {width:  150px;} 


#footslog {

border:  0px solid red;
font-size: 15px;

}


#info {
position: relative;
color: white;
font-size: 15px;

}

.num {

font-size: 15px;
line-height: 7px;

}

#bord5, #bord6 {

  border-bottom: 2px solid #239090;
  line-height: 20px;
  width: 30px;
  margin:  left;


}



#git, #fb,#twit, #linked, #yout {
color: white;
background: #595959;


}



#copright {
position: relative;
display: grid;
width: 100%;
border: 0px solid red;
margin:  auto;
text-align: center;

}



#linfoot {

  border-bottom: 1px solid grey;
  padding: 5px;
  width: 1200px;
  margin: auto;


}


#textfoot {

  border-bottom: 0px solid red;
  padding: 5px;
  max-width: 1200px;
  margin: auto;


}


.termsfoot{

 border: 0px solid red;
 color:  white;

 text-decoration: underline !important;
 



}

#terms2 {
display: block;
color: white;
cursor: pointer;
text-decoration: underline;

}

#terms2:hover {

color: #239090;

}


#mod1, #mod2  {

  background: white;
  color: black;

}

#mod3, #mod4 {

  background: #00334d;
  color: white;
  text-align: center;
  margin: 0;
  left: 0;
  right: 0;
  width: 100%;

}

#sin1, #sin2  {

  background: #00334d;
  color: white;
  text-align: center;
  margin: 0;



}

#fotmod {

 background: #00334d;
 color: white;
 margin: 0;


}

/*media queries*/

@media only screen and (max-width: 700px) {


  .bord3 {
  position: absolute;
  top: 45px;
  left: 30px;
  border-bottom: 1px solid #239090;
  width: 70px;
  margin:  left;


 

}


.siztext {
  font-weight: none;
  font-size:  20px;
  color:  white;
  margin: 20px;

}


.siztext2 {
  position: absolute;
  width: 100%;
  font-weight: normal;
  font-size:  10px;
  color:  white;
  border:  0px solid red;

}

.siztext3 {
  position: relative;
  top: 30px;
  max-height: 90px;
  width: 50%;
  border:  0px solid red;


}


.subnavi {

background: none;
color: white;
height: 65px;


}

.subdivisions {

position: relative;
border:  0px solid red;
width: 1200px;
height: 65px;
margin:  auto;
z-index: -2;


}

#logowhite  {width:  100px;} 


#footslog {

font-size: 12px;

}

.foot {font-size: 15px;}

 
#info {
position: relative;

font-size: 10px;

}

.num {

font-size: 10px;
line-height: 5px;

}


#menuToggle {
  display: block;
  position: absolute;
  top: 0px;
  background: #239090;
  right: 0px;
  height: 65px;
  padding: 15px;
  font-size: 15px;
  width: 110px;
  color:  white;
  z-index: 1;
  -webkit-user-select: none;
  user-select: none;
}


#menu {
  position: absolute;
  width: 320px;
  margin: -100px 0 0 0;
  padding: 50px;
  padding-top: 125px;
  right: 0px;
  background: #ededed;
  list-style-type: none;
  -webkit-font-smoothing: antialiased;
  transform-origin: 0% 0%;
  transform: translate(100%, 0);

  transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0);
}



#slogan {

  position: relative;
  display: none;
  color: red;
  top: -24px;
  left: 170px;
  font-size: 15px;
  z-index: -3;

}



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