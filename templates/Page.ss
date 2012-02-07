<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta http-equiv="Cache-Control" content="No-Cache" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<% base_tag %>
	<title>$Title &raquo; $SiteConfig.Title</title>
	$MetaTags(false)
	<link rel="stylesheet/less" href="css/style.less" />
	<link rel="stylesheet" href="css/overcast/jquery-ui-1.8.16.custom.css" />
	
	<link href="css/prettify.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="scripts/less-1.1.3.min.js"></script>
	<script type="text/javascript" src="scripts/jquery-1.6.2.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="scripts/jquery.bxSlider.min.js"></script>
	<script type="text/javascript" src="scripts/jquery-ui-1.8.16.custom.min.js"></script>
	<script type="text/javascript" src="scripts/init.js"></script>
	<script type="text/javascript" src="scripts/prettify.js"></script>
</head>
<body onload="prettyPrint()">
	<div id="popup_overlay"></div>
	<div id="login_popup">
		Login form placeholder
	<div id="close_button">Close</div>
</div>
<div id="background_layer">

	<div id="site_wrapper">

		<!-- Header start -->
		<div id="header">
		
			<div id="top_bar">
			
				<a href="" title="Subpixel Website Theme"><img src="images/logo.png" width="217" height="74" alt="Subpixel Logo" /></a>
			
				<form action="" id="header_search_form">
				
					<fieldset>
					<input type="text" name="q" value="Enter keywords" id="input_field" />
					<input type="image" src="images/button-header_search.png" id="submit_field" />
					</fieldset>
					
				</form>
				
			</div>
			
			<!-- Mainmenu start -->
			<div id="mainmenu_wrapper">

				<ul id="mainmenu">
				
					<li class="mainmenu_item">
						<a href="index.php" title="Home" class="mainmenu_item_link">
							<strong>Home</strong>
							The homepage
						</a>
					</li>
					
					<li class="mainmenu_item">
						<a href="content_2_column.php?layout=inner&amp;active=2_column" title="Content" class="mainmenu_item_link">
							<strong>Content</strong>
							Content layouts
						</a>
						<ul>

							<li><a href="content_1_column.php?layout=inner&amp;active=1_column" title="1 Column">1 Column</a></li>
							<li><a href="content_2_column.php?layout=inner&amp;active=2_column" title="2 Column">2 Columns</a></li>
							<li><a href="content_3_column.php?layout=inner&amp;active=3_column" title="3 Column">3 Columns</a></li>
							<li><a href="team_members.php?layout=inner&amp;active=team_members" title="Team Members">Team members</a></li>
							<li><a href="testimonials.php?layout=inner&amp;active=testimonials" title="Testimonials">Testimonials</a></li>
							<li><a href="faq.php?layout=inner&amp;active=faq" title="FAQ">FAQ</a></li>
	
						</ul>					
					</li>
					
					<li class="mainmenu_item">
						<a href="blog.php?layout=blog" title="Blog" class="mainmenu_item_link">
							<strong>Blog</strong>
							Blog layouts
						</a>
						<ul>

							<li><a href="blog.php?layout=blog" title="Blog">Pagination layout</a></li>
							<li><a href="blog_post.php?layout=blog" title="Blog Post">A blog post</a></li>

						</ul>						
					</li>
					
					<li class="mainmenu_item">
						<a href="portfolio_2_column.php?layout=portfolio" class="mainmenu_item_link">
							<strong>Portfolio</strong>
							Portfolio layouts
						</a>
						<ul>

							<li><a href="portfolio_2_column.php?layout=portfolio" title="2 Columns Portfolio">2 Columns</a></li>
							<li><a href="portfolio_3_column.php?layout=portfolio" title="3 Columns Portfolio">3 Columns</a></li>

						</ul>						
					</li>
					
					<li class="mainmenu_item">
						<a href="members.php?layout=fullscreen_form" class="mainmenu_item_link">
							<strong>Become a member</strong>
							Registration form
						</a>
					</li>
					
					<li class="mainmenu_item">
						<a href="contact.php?layout=fullscreen_form" class="mainmenu_item_link">
							<strong>Contact Us</strong>
							Contact form
						</a>
					</li>
					
				</ul>

				<div id="login_box">
					
					<a href="#" class="mainmenu_item_link" id="login_link">
						<strong>Login</strong>
						Member area
					</a>
					
				</div>
				
			</div>
			<!-- Mainmenu end -->
			
		</div>
		<!-- Header end -->
		$Layout
	</div>
	
</div>

<!-- Footer start -->
<div id="footer">

	<div id="footer_content">
	
		<div id="left_column">
		
			<div class="column_50">
			
				<div class="column_50">
				
					<h4>Our Company</h4>

					<ul>

						<li><a href="#" title="">About Our Company</a></li>
						<li><a href="#" title="">Contact</a></li>
						<li><a href="#" title="">Press Center</a></li>
						<li><a href="#" title="">Terms of Service</a></li>
						<li><a href="#" title="">Privacy Policy</a></li>
						<li><a href="#" title="">Environmental Impact</a></li>
						<li><a href="#" title="">Careers</a></li>
						<li><a href="#" title="">Affiliate Program</a></li>

					</ul>
						
				</div>

				<div class="column_50">
				
					<h4>Products</h4>

					<ul>

						<li><a href="#" title="">Pricing</a></li>
						<li><a href="#" title="">Examples</a></li>
						<li><a href="#" title="">Features</a></li>
						<li><a href="#" title="">Sign Up</a></li>
						<li><a href="#" title="">Build</a></li>
						<li><a href="#" title="">Design</a></li>
						<li><a href="#" title="">Manage</a></li>
						
					</ul>
						
				</div>

			</div>

			<div class="column_50">	
			
				<div class="column_50">
				
					<h4>Community</h4>

					<ul>

						<li><a href="#" title="">Community Forum</a></li>
						<li><a href="#" title="">Blog</a></li>
						<li><a href="#" title="">Help &amp; Support</a></li>
						<li><a href="#" title="">Service Updates</a></li>
						<li><a href="#" title="">Facebook Community</a></li>
						
					</ul>
						
				</div>
				
				<div class="column_50">
				
					<h4>Contact Us</h4>

					<ul>

						<li><strong>E-mail:</strong> <a href="#" title="">email@example.com</a></li>
						<li><strong>Phone:</strong> +1 123 655 1526</li>
						<li><strong>Mobile:</strong> +1 123 655 1526</li>
						<li><strong>Skype:</strong> <a href="#" title="">skype.account</a></li>
						<li>
							Company Address<br />
							Company City<br />
							Zip<br />
							Country
						</li>
						
					</ul>
						
				</div>	
			
			</div>
			
		</div>
		
		
		<div id="right_column">
		
			<div id="twitter">
			
				<img src="images/twitter_logo.png" width="120" height="28" alt="Twitter logo" />
			
				<ul>
				
					<li>Ever wonder how the Earth became populated, or about Ice Volcanoes? Now is your chance in <a href="#" title="">#SpaceLab's</a> Top 3 Playlist!</li>
					<li>Snowboarding sensation Billy Morgan does a triple rodeo. Click the snowflake in the player for a snowy surprise. <a href="#" title="">http://goo.gl/2a1sV</a></li>
					<li>We've got another impressive light show for you -- this one is with over 54,000 LED lights! </li>
					<li>DIY craftmaster @Andrew_Salomone hacked into a knitting machine and commanded it to print rad sweaters: <a href="#" title="">http://goo.gl/ZTDV7</a></li>
				</ul>
				
			</div>
		
		</div>
		
	</div>
	
	<div id="footer_copyright">
		
		Subpixel Website Theme by <a href="http://www.snappyseed.com" title="Snappy Seed - Free high quality website templates">Snappy Seed</a> &nbsp;&nbsp; All rights reserved &copy; 2011-<?php echo date('Y'); ?> - Snappy Seed. &nbsp;&nbsp; If you use this theme, a link back to <a href="http://www.snappyseed.com" title="Snappy Seed - Free high quality website templates">Snappy Seed</a> is appreciated! &nbsp;&nbsp; Licenced under <a href="http://creativecommons.org/licenses/by/3.0/" title="Subpixel Website Theme by Snappy Seed is licensed under a Creative Commons Attribution 3.0 Unported License"><img src="images/cclogolarge.png" width="70" height="17" alt="Subpixel Website Theme by Snappy Seed is licensed under a Creative Commons Attribution 3.0 Unported License." /></a>
		
	</div>
	
</div>
<!-- Footer end -->

</body>
</html>