<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta http-equiv="Cache-Control" content="No-Cache" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<title>Subpixel Website Theme</title>
	<link rel="stylesheet/less" href="css/style.less" />
	<link rel="stylesheet" href="css/overcast/jquery-ui-1.8.16.custom.css" />
<?php if(@$_GET['layout'] != ''): ?>
	<link rel="stylesheet/less" href="css/<?php echo @$_GET['layout']; ?>.less" />
<?php endif; ?>
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