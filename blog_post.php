<?php include_once('inc_header.php'); ?>

		<div id="blog_wrapper">
		
			<div id="blog_post">

				<div class="blog_post_content">
					
					<h2><a href="blog_post.php?layout=blog" title="Quisque convallis pretium nulla non ullamcorper">Quisque convallis pretium nulla non ullamcorper</a></h2>
					
					<div class="info"><div class="tags">Categories: <a href="#" title="Category: blog">blog</a>, <a href="#" title="Category: website">website</a>, <a href="#" title="Category: template">template</a></div>Friday, Dec 23, 2011 by <strong>Subpixel</strong></div>

					<p><img src="images/image-small_2.jpg" width="250" height="200" alt="Decoration image"/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque convallis pretium nulla non ullamcorper. Donec porta enim a urna tincidunt non mattis purus consectetur. Nulla hendrerit nisi in nisl viverra aliquet. Etiam nisi velit, mollis id pretium vel, semper tristique nibh. Proin ligula tortor, sagittis varius mollis ut, convallis et nibh. Cras pharetra gravida metus, viverra pulvinar dolor dictum id.<br />
					<br />
					Nunc a mi adipiscing arcu cursus tincidunt. Aenean lorem velit, interdum id ultricies sed, adipiscing vitae nulla. Nunc molestie commodo tempus. Integer luctus ornare mauris interdum interdum. Sed suscipit leo a orci venenatis eget lobortis ante varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum egestas ultricies laoreet. Nunc non purus in nulla fermentum consectetur.</p>

					<p>Mauris cursus mi ut mi consectetur quis aliquet enim scelerisque. Etiam sed mi sapien. Nam et turpis eu dui aliquet pellentesque vel nec nibh. Ut dolor mauris, placerat vel tincidunt vel, commodo id ligula. Quisque tincidunt gravida elementum. Curabitur nisl augue, gravida ut accumsan ac, ullamcorper eget tortor. Sed egestas, metus quis interdum pellentesque, eros arcu molestie risus, sit amet gravida magna risus vitae magna. Quisque tempus sagittis aliquet.</p>
					
					<h3>Praesent mi neque, sodales a tempor dignissim</h3>
					
					<p>Praesent mi neque, sodales a tempor dignissim, rhoncus eget nisl. Nullam nec ante nec mauris suscipit commodo non sed nisi. Maecenas viverra tempus massa in pharetra. Duis aliquet faucibus augue at lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					
					<p>Vestibulum id purus turpis, eget tempus nisl. Cras vehicula, nisl vitae viverra porta, nisl ligula malesuada risus, non auctor ipsum magna a massa. Praesent vehicula metus vel lectus adipiscing rutrum. Sed quis vestibulum purus. Nam eget lacus mauris.</p>
					
					<h4>This is a simple list</h4>
					
					<ul>
						<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
						<li>Aliquam tincidunt mauris eu risus.</li>
						<li>Vestibulum auctor dapibus neque.</li>
						<li>Nunc dignissim risus id metus.</li>
						<li>Cras ornare tristique elit.</li>
						<li>Vivamus vestibulum nulla nec ante.</li>
					</ul>
		
					<p>Pellentesque malesuada laoreet tellus, sit amet auctor lectus semper sed. Vivamus lacinia nunc nec purus congue a porta ante commodo. Pellentesque quis lectus dui, sit amet malesuada arcu. Vestibulum non purus dapibus felis scelerisque adipiscing ac eget lorem. Nullam eros sapien, rutrum eu rutrum a, semper sed est. Aenean id arcu purus. Pellentesque at mauris dui. Maecenas aliquet cursus pulvinar. Sed lacus sapien, tincidunt non facilisis vel, varius et nulla.</p>
					
					<h4>Embed a blockquote</h4>
					
					<blockquote><p>Pellentesque malesuada laoreet tellus, sit amet auctor lectus semper sed. Vivamus lacinia nunc nec purus congue a porta ante commodo. Pellentesque quis lectus dui, sit amet malesuada arcu. Vestibulum non purus dapibus felis scelerisque adipiscing ac eget lorem.</p></blockquote>
					
					<p>Curabitur eu nunc ut massa feugiat semper fermentum tincidunt felis. Aenean auctor nisl turpis. Nullam et risus at eros condimentum posuere ac a justo. Duis eget accumsan velit. Duis felis odio, porta vel tempor vitae, malesuada ac nisl. Aliquam semper arcu quis eros viverra eu molestie velit scelerisque. Nunc lorem augue, ultrices vitae pellentesque eget, lacinia non dui. In semper velit quis felis rhoncus nec mollis nulla sagittis. Nunc ligula tortor, vehicula a viverra vel, consectetur id tortor.</p>
					
					<h4>Embed HTML code</h4>

<pre class="prettyprint linenums"><?php echo htmlentities(
'<div id="sidebar">

    <h2>Aliquam semper arcu quis eros</h2>

    <div class="image"><img src="images/img02.jpg" alt="" /></div>

    <p>Suspendisse in nunc sed neque sagittis fermentum. Sed varius augue neque</p>

    <ul class="nav">

        <li><h3 class="accumsan"><a href="#">Duis eget accumsan velit</a></h3></li>

        <li><h3 class="auctor"><a href="#">Aenean auctor nisl turpis</a></h3></li>

        <li><h3 class="viverra"><a href="#">Nunc ligula tortor, a viverra vel</a></h3></li>

    </ul>

</div>'); ?></pre>

					<h4>Embed PHP code</h4>

<pre class="prettyprint linenums">
function form_hidden($name, $value = '', $recursing = FALSE)
{
    static $form;

    if ($recursing === FALSE)
    {
        $form = "\n";
    }

    if (is_array($name))
    {
        foreach ($name as $key => $val)
        {
            form_hidden($key, $val, TRUE);
        }
        return $form;
    }

    if ( ! is_array($value))
    {
        $form .= '&lt;input type="hidden" value="'.form_prep($value, $name).'" /&gt;'."\n";
    }
    else
    {
        foreach ($value as $k => $v)
        {
            $k = (is_int($k)) ? '' : $k;
            form_hidden($name.'['.$k.']', $v, TRUE);
        }
    }

    return $form;
}
</pre>

					<p>Integer sagittis aliquam malesuada. Pellentesque aliquam accumsan odio id imperdiet. Curabitur id ante sed enim volutpat tristique. In quis accumsan mauris. Morbi lectus lectus, consectetur lacinia pharetra ut, congue quis nisi. Donec nec risus eros. Nulla eu gravida tellus. Sed neque nunc, varius vel fermentum eu, tristique ac est.</p>
					
				</div>
				
				<a name="comments"></a>
				
				<div id="comments">
				
					<h3>Comments</h3>

					<div class="comment_item">
						
						<div class="info">
						
							<p>
								<a href="http://www.google.com" title="Javier Orris">Javier Orris</a>
								<em>12/23/2011</em>
							</p>
							
						</div>
						
						<div class="content">
						
							<p>Integer sagittis aliquam malesuada. Pellentesque aliquam accumsan odio id imperdiet. Curabitur id ante sed enim volutpat tristique. In quis accumsan mauris. Morbi lectus lectus, consectetur lacinia pharetra ut, congue quis nisi. Donec nec risus eros. Nulla eu gravida tellus. Sed neque nunc, varius vel fermentum eu, tristique ac est.</p>
						
						</div>
						
					</div>

					<div class="comment_item">
						
						<div class="info">
						
							<p>
								<a href="http://www.google.com" title="Jami Wenrich">Jami Wenrich</a>
								<em>12/23/2011</em>
							</p>
							
						</div>
						
						<div class="content">
						
							<p>Maecenas tortor nunc, hendrerit vitae facilisis vitae, feugiat nec mauris. Aliquam aliquam quam at orci elementum lacinia. Nullam vel elementum metus. Vestibulum sed sem mauris. Praesent nec nisl arcu, a suscipit quam. Donec et dolor est. Duis eget sem erat, vitae vehicula mauris. Duis eleifend ipsum eget turpis tincidunt placerat. Donec porta commodo sem vitae porta. Nullam id purus at lacus varius commodo.<br />
							<br />
							Integer sagittis aliquam malesuada. Pellentesque aliquam accumsan odio id imperdiet. Curabitur id ante sed enim volutpat tristique. In quis accumsan mauris.<br />
							<br />
							Morbi lectus lectus, consectetur lacinia pharetra ut, congue quis nisi. Donec nec risus eros. Nulla eu gravida tellus. Sed neque nunc, varius vel fermentum eu, tristique ac est.</p>
						
						</div>
						
					</div>

					<div class="comment_item">
						
						<div class="info">
						
							<p>
								Mathew Garrott
								<em>12/23/2011</em>
							</p>
							
						</div>
						
						<div class="content">
						
							<p>In quis accumsan mauris. Morbi lectus lectus, consectetur lacinia pharetra ut, congue quis nisi. Donec nec risus eros. Nulla eu gravida tellus. Sed neque nunc, varius vel fermentum eu, tristique ac est.</p>
						
						</div>
						
					</div>

					<div class="comment_item">
						
						<div class="info">
						
							<p>
								<a href="http://www.google.com" title="Margery Cosner">Margery Cosner</a>
								<em>12/23/2011</em>
							</p>
							
						</div>
						
						<div class="content">
						
							<p>Integer sagittis aliquam malesuada. Pellentesque aliquam accumsan odio id imperdiet. Curabitur id ante sed enim volutpat tristique. In quis accumsan mauris. Morbi lectus lectus, consectetur lacinia pharetra ut, congue quis nisi. Donec nec risus eros.<br />
							<br />
							Nulla eu gravida tellus. Sed neque nunc, varius vel fermentum eu, tristique ac est.</p>
						
						</div>
						
					</div>
					
					<h4>Leave a comment</h4>
					
					<form action="" id="generic_form">
					
						<fieldset class="blog">
						
						<div class="field_container">
						
							<label for="comment_name"><em>*</em> Your name:</label>
							<input type="text" name="comment_name" id="comment_name" value="" class="text_input" />
							
						</div>
						
						<div class="field_container">
						
							<label for="comment_email">Your E-mail:</label>
							<input type="text" name="comment_email" id="comment_email" value="" class="text_input"  />
						
						</div>
						
						<div class="field_container">						
						
						<label for="comment_name"><em>*</em> Your comment:</label>
							<textarea name="comment_comment" id="comment_comment" rows="10" cols="10"></textarea>
						
						</div>
						
						<input type="submit" name="comment_submit" value="Submit comment" class="submit_button" />
						
						</fieldset>
						
					</form>
					
				</div>

				<ul id="pagination">
					<li><a href="blog.php?layout=blog" title="Previous page">&lsaquo; Previous post</a></li>
					<li class="next"><a href="blog.php?layout=blog" title="Next page">Next post &rsaquo;</a></li>
				</ul>
			
			</div>
			
			<div id="sidebar">

				<div id="datepicker"></div>
				
				<div class="generic_list">
				
					<h4>Categories</h4>
					
					<ul>
						<li><a href="blog.php?layout=blog" title="Web design">Web design (2)</a></li>
						<li><a href="blog.php?layout=blog" title="PHP Development">PHP Development (4)</a></li>
						<li><a href="blog.php?layout=blog" title="Subpixel Website Theme">Subpixel Website Theme (1)</a></li>
						<li><a href="blog.php?layout=blog" title="Marketing">Marketing (2)</a></li>
						<li><a href="blog.php?layout=blog" title="General">General (8)</a></li>
						<li><a href="blog.php?layout=blog" title="Themes">Themes (3)</a></li>
						<li><a href="blog.php?layout=blog" title="Template">Template (1)</a></li>
					</ul>
					
				</div>
				
				<div class="generic_list">
				
					<h4>Recent posts</h4>
					
					<ul>
						<li><a href="blog_post.php?layout=blog" title="Lorem ipsum dolor sit amet, consectetur adipis">Lorem ipsum dolor sit amet, consectetur adipis<em>Friday, Dec 23, 2011</em></a></li>
						<li><a href="blog_post.php?layout=blog" title="Praesent mi neque, sodales a tempor dignissim">Praesent mi neque, sodales a tempor dignissim<em>Friday, Dec 23, 2011</em></a></li>
						<li><a href="blog_post.php?layout=blog" title="Ut dolor mauris, placerat vel tincidunt vel">Ut dolor mauris, placerat vel tincidunt vel<em>Friday, Dec 23, 2011</em></a></li>
						<li><a href="blog_post.php?layout=blog" title="Nullam nec ante nec mauris suscipit commodo">Nullam nec ante nec mauris suscipit commodo<em>Friday, Dec 23, 2011</em></a></li>
						<li><a href="blog_post.php?layout=blog" title="Nunc a mi adipiscing arcu cursus tincidunt">Nunc a mi adipiscing arcu cursus tincidunt<em>Friday, Dec 23, 2011</em></a></li>
					</ul>
					
				</div>
				
				<div class="generic_list">
				
					<h4>Recent comments</h4>
					 
					<ul>
						<li><a href="blog_post.php?layout=blog" title="Lorem ipsum dolor sit amet, consectetur adipis">Lorem ipsum dolor sit amet, consectetur adipis...<em>John Doe</em></a></li>
						<li><a href="blog_post.php?layout=blog" title="Lorem ipsum dolor sit amet, consectetur adipis">Quisque tincidunt gravida elementum. Curabitur nisl augue, gravida ut accumsan...<em>Peter Martin</em></a></li>
						<li><a href="blog_post.php?layout=blog" title="Lorem ipsum dolor sit amet, consectetur adipis">Ut dolor mauris, placerat vel tincidunt vel, commodo id ligula...<em>Jessica Smith</em></a></li>
						<li><a href="blog_post.php?layout=blog" title="Lorem ipsum dolor sit amet, consectetur adipis">Sed egestas, metus quis interdum pellentesque, eros arcu molestie risus...<em>Joseph Doe</em></a></li>
						
					</ul>
					
				</div>

			</div>
			
		</div>

<?php include_once('inc_footer.php'); ?>