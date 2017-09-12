	<!-- footer -->
	<div class="footer-agile-info">
		<div class="container">
			<div class="col-md-4 w3layouts-footer">
				<h3>Contact Information</h3>
	{{-- 				<p><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>22 Russell Street, Victoria ,Melbourne AUSTRALIA </p> --}}
					<p><span><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">E: info@technicalwebservices.co.uk</a> </p>
				{{-- 	<p><span><i class="fa fa-mobile" aria-hidden="true"></i></span>P: +254 2564584 / +542 8245658 </p> --}}
					<p><span><i class="fa fa-globe" aria-hidden="true"></i></span><a href="#">W: www.technicalwebservices.co.uk</a></p>
			</div>
			<div class="col-md-4 wthree-footer">
				<h2>TWC Blog</h2>
				<p>Thoughts on PHP, Magento & Laravel.
				Step by step guide on finding a solution to the most interesting problems I am coming across during my dev career.
				A deep dive into Magento&Laravel core, extensions / packages, and technologies.
				</p>
			</div>
			<div class="col-md-4 w3-agile">
				<h3>Newsletter</h3>
				<p>Sign up to receive a developer tip each week.</p>
				<form action="/subscribe" method="post">
					{{ csrf_field() }}
					<input type="email" name="email" placeholder="Email" required="">
					<input type="submit" value="Send">
				</form>
			</div>
		</div>
	</div>
	<!-- footer -->
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="w3agile-list">
			{{ menu('main_menu', 'menu.main') }}

{{-- 				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="lifestyle.html">Life Style</a></li>
					<li><a href="photography.html">Photography</a></li>
					<li><a href="fashion.html">Fashion</a></li>
					<li><a href="icons.html">Codes</a></li>
					<li><a href="features.html">Features</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul> --}}
			</div>
			<div class="agileinfo">
				<p>All Rights Reserved&copy; {{ date('Y') }} {{ Voyager::setting('title') }} &middot; Designed by <a href="http://twitter.com/@dannie0la">Dannie L.</a> | <a href="#">Privacy Terms</a></p>
			</div>
		</div>
	</div>
<!-- //copyright -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
