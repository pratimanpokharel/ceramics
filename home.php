<?

session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <link rel="datasheet" href="contact.php" type="text/php">
 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
<section id="nav-bar">

<nav class="navbar navbar-expand-lg navbar-light">
   <a class="navbar-brand" href="#"><img src="23.jpg" class="top-img"></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     <i class="fa fa-bars" aria-hidden="true"></i>
   </button>
   <div class="collapse navbar-collapse" id="navbarNav">
     <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#top">COLLECTIONS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#ceramics">CERAMICS ARCHITECTURAL</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#designers">DESIGNERS</a>
      </li>
      
      
      <li class="nav-item">
        <a class="nav-link" href="#footer">CONTACT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">LOGOUT</a>
      </li>
      

    </ul>
  </div>
</nav>
	

</section>

<!......................banner section................................>

<section id= "banner">
<div class="container">
<div class="row">
<div class="col-md-6">
</div>	
</div>
</div>	

</section>

<!------------------------about------------------>

<section id="about">
<div class="container">
<h1 class="title text-center">WHO ARE WE</h1>
<p>

Bazaar Ceramics Studio has been operating for 20 years. We started as a small collective, operating in the picturesque township of Hahndorf, South Australia - known for its quality arts and crafts. Over the years the studio has passed through a number of transformations. In the first 7 years of its existence - as a co-operative, it was well known for producing quality domestic ware and fine individually designed art pieces.</p><br>
<p>As the reputation of the studio grew nationally, and production expanded to meet demand, the structure of the business changed to its present form. Kim Hayward bought the business and moved into larger premises in Stepney, Adelaide. The production staff increased and currently includes a production manager, 2 full time ceramic designers and 6 production potters.</p><br>
<p>Bazaar Ceramics has a wide range of products to meet the needs of clients both nationally and internationally. The studio produces exquisite one off sculptural pieces for the individual and corporate collector. Commissions make up approximately 40% of this work. These pieces can be found in board rooms, international hotels and private homes as far away as the US and Germany.</p>
Bazaar Ceramics also produce unique, individually designed domestic ware, including full dinner sets and ovenware.
</p>
<div class="row">
<div class="col-md-6 about">
<p class="about-title">Why we're different</p>  
     <ul>
      <li> We produce unique hard crafted pieces for the individual and corporate collector.</li>
     <li>We Showcase the best of Melbourne Ceramic Art and Design.</li>
      <li>We Provide an extensive range of well crafted and designed domestic ware.</li> 
      <li>We Showcase technical excellence in ceramic technology.</li>
      
     </ul>
</div>  
<div class="col-md-6">
<img src="101.jpg" class="img-fluid"> 
</div>   
</div>  
</div>
</section>

<!----------ceramics---------------->
<section id="ceramics">
<div class="container text-center">
<h1 class="title">WHAT We DO ?</h1>	
<div class="row text-center">
<div class="col-md-4 ceramics">
<img src="103.jpg" class="ceramics-img">
<h4>Growth Marketing</h4>
<p>I am here to create meaningfil and lasting relationship with my client.</p>	
</div>
<div class="col-md-4 ceramics">
<img src="101.jpg" class="ceramics-img">
<h4>Arts and Design</h4>
<p>I am here to create meaningfil and lasting relationship with my client.</p>	
</div>
<div class="col-md-4 ceramics">
<img src="102.jpg" class="ceramics-img">
<h4>squarepost</h4>
<p>I am here to create meaningfil and lasting relationship with my client.</p>	
</div>
</div>
<button type="button"class="btn btn-primary">Add Post</button>
<button type="button"class="btn btn-primary">Edit Post</button>
<button type="button"class="btn btn-primary">Delete Post</button>

</div>	
	
</section>

<h1>Image Gallery Design</h1>

  <section id="gallery">
    <div class="gallery">
    <a href="101.jpg" data-lightbox="mygallery" data-title="This is me"><img src="101.jpg"></a>
    <a href="102.jpg" data-lightbox="mygallery"><img src="102.jpg"></a>
    <a href="103.jpg" data-lightbox="mygallery"><img src="103.jpg"></a>
    <a href="104.jpg" data-lightbox="mygallery"><img src="104.jpg"></a>
    <a href="105.jpg" data-lightbox="mygallery"><img src="105.jpg"></a>
    <a href="106.jpg" data-lightbox="mygallery"><img src="106.jpg"></a>
    <a href="107.jpg" data-lightbox="mygallery"><img src="107.jpg"></a>
    <a href="108.jpg" data-lightbox="mygallery"><img src="108.jpg"></a>
    <a href="109.jpg" data-lightbox="mygallery"><img src="109.jpg"></a>
    <a href="110.jpg" data-lightbox="mygallery"><img src="110.jpg"></a>
    <a href="111.jpg" data-lightbox="mygallery"><img src="111.jpg"></a>
    <a href="112.jpg" data-lightbox="mygallery"><img src="112.jpg"></a>
    <a href="113.jpg" data-lightbox="mygallery"><img src="113.jpg"></a>
    <a href="114.jpg" data-lightbox="mygallery"><img src="114.jpg"></a>
    <a href="115.jpg" data-lightbox="mygallery"><img src="115.jpg"></a>
    <a href="116.jpg" data-lightbox="mygallery"><img src="116.jpg"></a>
    <a href="117.jpg" data-lightbox="mygallery"><img src="117.jpg"></a>
    <a href="118.jpg" data-lightbox="mygallery"><img src="118.jpg"></a>
    <a href="119.jpg" data-lightbox="mygallery"><img src="119.jpg"></a>
    <a href="120.jpg" data-lightbox="mygallery"><img src="120.jpg"></a>
    <a href="121.jpg" data-lightbox="mygallery"><img src="121.jpg"></a>
    <a href="122.jpg" data-lightbox="mygallery"><img src="122.jpg"></a>
    <a href="123.jpg" data-lightbox="mygallery"><img src="123.jpg"></a>
    <a href="124.jpg" data-lightbox="mygallery"><img src="124.jpg"></a>
    <a href="125.jpg" data-lightbox="mygallery"><img src="125.jpg"></a>
    <a href="126.jpg" data-lightbox="mygallery"><img src="126.jpg"></a>
    <a href="127.jpg" data-lightbox="mygallery"><img src="127.jpg"></a>
    <a href="128.jpg" data-lightbox="mygallery"><img src="128.jpg"></a>
    <a href="129.jpg" data-lightbox="mygallery"><img src="129.jpg"></a>
    <a href="130.jpg" data-lightbox="mygallery"><img src="130.jpg"></a>
    <a href="131.jpg" data-lightbox="mygallery"><img src="131.jpg"></a>
    <a href="132.jpg" data-lightbox="mygallery"><img src="132.jpg"></a>
    <a href="133.jpg" data-lightbox="mygallery"><img src="133.jpg"></a>
    <a href="134.jpg" data-lightbox="mygallery"><img src="134.jpg"></a>
    <a href="135.jpg" data-lightbox="mygallery"><img src="135.jpg"></a>
    <a href="136.jpg" data-lightbox="mygallery"><img src="136.jpg"></a>
    <a href="137.jpg" data-lightbox="mygallery"><img src="137.jpg"></a>
    <a href="138.jpg" data-lightbox="mygallery"><img src="138.jpg"></a>
    <a href="139.jpg" data-lightbox="mygallery"><img src="139.jpg"></a>
    <a href="140.jpg" data-lightbox="mygallery"><img src="140.jpg"></a>
    <a href="141.jpg" data-lightbox="mygallery"><img src="141.jpg"></a>
    <a href="142.jpg" data-lightbox="mygallery"><img src="142.jpg"></a>
    


  </div>
</section>



<!------------------designers------------------------>

<section id="designers">
<div class="container"> 
<h1 class="title text-center">DESIGNERS</h1>
<div class="row offset-1">
<div class="col-md-5 designers">
	<p>We are here for you.</p>
	<img src="1.jpg">
	<p class="user-details"><b>Shreeya</b><br> co-founder at Bazaar Ceramica</p>
</div>	
<div class="col-md-5 designers">
  <p>I am here to help you.</p>
  <img src="3.jpg">
  <p class="user-details"><b>Pratiman</b><br> Director at Bazaar Ceramica</p>
</div>  
</div>
	</div>	
</section>

<!----------------------social media section------------------>
<section id="social-media">
<div class="container text-center">
 <p>FIND US ON SOCIAL MEDIA</p> 
   <div class="social-icons">
    <a href="#"><img src="i.jpg"></a> 
    <a href="#"><img src="f.jpg"></a> 
    <a href="#"><img src="t.jpg"></a> 
    <a href="#"><img src="l.jpg"></a> 
   </div>
</div>  
</section>

<!------------------footer section---->

<section id="footer">
<div class="container text-center">
 <p>CONTACT US</p>
   <div class="contact-form">
    <form id="contact-form" method="post" action="contact-form-handler.php">
      <input name="name" type="text" class="form-control" placeholder="Your Name" required><br>
      <input name="email" type="email" class="form-control" placeholder="Your email" required><br>
      <textarea name="message" class="form-contrl" placeholder="message" row="4" required></textarea><br>
      <input type="submit" class="form-control submit" value="SEND MESSAGE">
    </form>
  </div>
</div>


</section>





<!------smooth scroll------->

  <script src="smooth-scroll.js"></script>
  <script>
      var scroll = new SmoothScroll('a[href*="#"]');
  </script>



</body>	
</html>


