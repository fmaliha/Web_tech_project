<!DOCtype html>
<html>
 <head>
 <meta charset="utf-8">
 <title>team member</title>
 <link rel="stylesheet" href="css/style_2.css">
  <link rel="stylesheet" href="css/style.css">
 </head>
 <body>
 	 <header>
	   <div class="row">
		<ul class="main-nav1">
		    
		</ul>
	    </div>
		
		<div class="neon1">
		  <input name="" type="text">
            <input value="Search" type="button">
	    </div>	
	 </header>
	 <div class="logo_menu">
	    <div class="neon">
		    <h3 data="neon">abash.com</h3>
	    </div>
		
		<div class="row">
		<ul class="main-nav">
		    <li class="active"><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="#">contuct us</a></li>
			<li><a href="login.php">Post ad</a></li>
			<li><a href="login.php">Login</a></li>
			
		</ul>
		</div>
		</div>
		
		<div class="div3">
		    <ul>
			   <li><a href="#">most popular ad</a></li>
			   <li><a href="#">search filter </a></li>>
			   <input name="" type="text">
               <input value="Search" type="button"> 
		</div>
		
		
	       <div class="slider">
              
                  <img class="mySlides" src="img/1.jpg">
				  <img class="mySlides" src="img/2.jpg">
				  <img class="mySlides" src="img/3.jpg" >
				  <img class="mySlides" src="img/4.jpg" >
				  <img class="mySlides" src="img/5.jpg">
			
            </div>
			<br>
  <div class="team-member">
   <h1> our team</h1>
   <span class="border"></span>
    <p>
  <div class="ps">
    
    <a href="#1"><img src="img/t_1.jpg" alt="Raihun"></a>
    <a href="#2"><img src="img/t_2.jpg" alt="Mariful"></a>
    <a href="#3"><img src="img/t_3.jpg" alt="Nawroz"></a>
    <a href="#4"><img src="img/t_4.jpg" alt="Easty"></a>
    <a href="#5"><img src="img/t_5.jpg" alt="Fagun"></a>
 </div>
 <div class="section" id="1">
 <span class="name">Raihun,Ahif:</span>
 <span class="border"></span><br>
 <p>
  name:raihun,ashif.our project is about house rent and officespace .
  one this project i work about the frontend and the design of t
 </p>
 <br>
 </div>
 <div class="section" id="2">
 <span class="name">islam.MD Mariful:</span>
 <span class="border"></span><br>
 <p>
 Back-end developers work hand-in-hand with front-end developers by providing the outward facing web application elements server-side logic. In other words, backend developers create the logic to make the web app function properly, and they accomplish this through the use of server-side scripting languages like Ruby or PHP
 </p>
 </div>
 <div class="section" id="3">
 <span class="name">ID:16-31379-1</span>
 <span class="border"></span><br>
 <p>
  Name:Nawroz,Shah.<br>DEPT:CSE<br>ack-end developers work hand-in-hand with front-end developers by providing the outward facing web application elements server-side logic. In other words, backend developers create the logic to make the web app function properly, and they accomplish this through the use of server-side scripting languages like Ruby or PHP
 </p>
</div>
 
 <div class="section" id="4">
 <span class="name">islam.MD Mariful</span>
 <span class="border"></span>
 <p>
 </p>
 </div>
  
 <div class="section" id="5">
 <span class="name">Md Inqiyad Mahmood</span>
 <span class="border"></span>
 <p>
    Name:Md Inqiyad Mahmood.<br>our project is about house rent and officespace .
  one this project i work about the frontend and the design of this website.html css 
 </p>
 </div>
 
 
 <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
 
  
 
</body>
<footer class="footer">
		
		<div class="call_us">
			<h3 >Follow Us</h3>
			<a href="tel:+8801761867763" class="call" title="call now" ><i class="fa fa-phone" style="font-size:30px;background-color:black;color:white"></i></a><br>
			<a href="#" class="call"><i class="fa fa-facebook-f" style="font-size:30px;width:23px;background-color:black;color:white"></i></a><br>
			<a href="#" class="call"><i class="fa fa-google" style="font-size:30px;background-color:black;color:white"></i></a><br>
			<a href="#" class="call"><i class="fa fa-twitter" style="font-size:30px;background-color:black;color:white"></i></a><br>

		</div>
		

		<div class="fo">
			<h1>Contact With Us</h1><br>
			<p>Phone NO:0175263939</p><br>
			<p>Email:hasdasjd@gmail.com</p>
			
			
		</div>

		
	</footer>
</html>