<!DOCKTYPE html>
<html>
<head>
	<title>MedHelp Center</title>
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('icons/css/all.css')}}">
	
</head>
<body>
<!----- Start Topbar Area ---------->
<div class="topbar-section clearfix">
	<div class="container clearfix">
		<div class="left-topbar">
			<ul class="clearfix">
				<li><a href=""><i class="fab fa-twitter"></i></a></li>
				<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
				<li><a href=""><i class="fab fa-instagram"></i></a></li>
				<li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
				
			</ul>
			
		</div>
		<div class="right-topbar">
			<ul class="clearfix">
				<li><a href=""><i class="fas fa-phone-alt"></i> Toll Free: 888.387.5000</a></li>
				<li><a href=""><i class="fas fa-envelope"></i> info@medhelp.com</a></li>
				<li><a href=""><i class="far fa-clock"></i> Sun-Fri (8am -6pm)</a></li>
			</ul>
			
		</div>
	</div>
</div>

<!----- Start Header Area ---------->
<header class="header clearfix">
    <div class = "container clearfix">
	    <div class = "logo">
		  <a href="index.html"><img src="{{asset('images/icon/logo.png')}}"></a>
	    </div>
		
		<div class = "main-menu">
			<ul class="clearfix">
				<li><a href="{{url('/home')}}">Home</a></li>
				<li><a href="{{url('/about')}}">About</a></li>
				<li><a href="{{url('/doctors')}}">Doctors</a></li>
				<li><a href="{{url('/services')}}">Services</a></li>
				<li><a href="{{url('/blog')}}">Blog</a></li>
				<li><a href="{{url('/contact')}}">Contact</a></li>
				<li><a href="#"><i class="fas fa-search"></i></a></li>
			</ul>
	    </div>
    </div>
</header>


<!----- Start Bredcrumbs Area ---------->
<div class="bredcrumbs-section clearfix">
	<div class="container clearfix">
		<h2>Contact Us</h2>
		<a href="{{url('/home')}}">Home</a> / Contact
	</div>
</div>
<!----- End Bredcrumbs Area ---------->

<!----- Start Contact Area ---------->
<div class="contact-section clearfix">
	<div class="container clearfix">
		<div class="form">
			<h2>Book an Appointment</h2>
			<form action="/action_page.php">
				  <select id="cars" name="carlist" form="carform">
					  <option value="volvo">Select doctor to visit</option>
					  <option value="saab">Saab</option>
					  <option value="opel">Opel</option>
					  <option value="audi">Audi</option>
				</select><br>
				  <input type="text" id="fname" name="fname" value="Your name"><br>
				  <input type="email" id="lname" name="lname" value="Your email"><br>
				  <input type="date" name="date" value="Appointment date"><br>
				  <textarea>Message</textarea><br><br>
				  <input type="submit" value="Get An Appointment" class="button">

			</form>
			
		</div>
		
	</div>
</div>

<!----- End Contact Area ---------->


<!----- Start Footer Area ---------->
<div class="footer-section clearfix">
	<div class="container clearfix">
		<div class="footer-coloum1">
			<img src="{{asset('images/icon/logo-white.png')}}" alt="">
			<p>Founded in 1990, Medhelp has had a highly, uniquely experienced team of qualified executives in the fields of medicine.</p>
			<input type="email" name="" value="Enter your email address" class="input">
			<input type="submit" name="" class="submit">
		</div>
		<div class="footer-coloum2">
			<h3>Quick Links</h3>
			<ul>
				<li><a href="">Appointments</a></li>
				<li><a href="">Contanct Us</a></li>
				<li><a href="">Working Hours</a></li>
				<li><a href="">About Our Clinic</a></li>
				<li><a href="">Services</a></li>
				<li><a href="">Doctors</a></li>
			</ul>
		</div>
		<div class="footer-coloum3">
			<h3>Recent Posts</h3>
			<div class="single-post clearfix">
				<div class="photo">
					<img src="{{asset('images/recent-post/thumb1.jpg')}}" alt="">
				</div>
				<div class="text">
					<h5>You Want to Know About Dentist</h5>
					<p>01 Decmber 2019</p>
				</div>
				
			</div>

			<div class="single-post clearfix">
				<div class="photo">
					<img src="{{asset('images/recent-post/thumb2.jpg')}}" alt="">
				</div>
				<div class="text">
					<h5>You Want to Know About Dentist</h5>
					<p>01 Decmber 2019</p>
				</div>
				
			</div>

			<div class="single-post clearfix">
				<div class="photo">
					<img src="{{asset('images/recent-post/thumb3.jpg')}}" alt="">
				</div>
				<div class="text">
					<h5>You Want to Know About Dentist</h5>
					<p>01 Decmber 2019</p>
				</div>
				
			</div>

		</div>
		<div class="footer-coloum4">
			<h3>Opening Hours</h3>
			<div class="time">
				<h5>Monday :<span>08.00 - 10.00</span></h5>
			</div>
			<div class="time">
				<h5>Tuesday  :<span>08.00 - 10.00</span></h5>
			</div>
			<div class="time">
				<h5>Wednesday :<span>08.00 - 10.00</span></h5>
			</div>
			<div class="time">
				<h5>Thursday :<span>08.00 - 10.00</span></h5>
			</div>
			<div class="time">
				<h5>Friday  :<span>08.00 - 10.00</span></h5>
			</div>
			<div class="time">
				<h5>Saturday  :<span>08.00 - 10.00</span></h5>
			</div>
			<div class="time last">
				<h5>Sunday  :<span>08.00 - 10.00</span></h5>
			</div>
		</div>
	</div>
</div>		
<!----- End Footer Area ---------->
<!----- Start Socket Area ---------->
<div class="socket-section clearfix">
	<div class="container clearfix">
		<div class="left-socket">
			<p>&copy; 2020 MedHelp Center! All Rights Reserved By VoidCoders</p>
		</div>
		<div class="right-socket">
			<ul class="clearfix">
				<li><a href=""><i class="fab fa-twitter"></i></a></li>
				<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
				<li><a href=""><i class="fab fa-instagram"></i></a></li>
				<li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
				
			</ul>
		</div>
	</div>
</div>			







<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script>



 $('#team-members').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    nav:true,
    responsive:{
        400:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})


// $(document).ready(function(){
//   $(".owl-carousel").owlCarousel();
// });
jQuery(document).ready(function($) {

                $('#customers-testimonials').owlCarousel({
                    loop: true,
                    center: true,
                    // autoplay: true,
                    autoplayTimeout: 5000,
                    responsive: {
                      0: { items: 1 },
                      768: { items: 1 },
                      1170: { items: 1 }
                    }
                });
            });

</script>
</body>
</html>