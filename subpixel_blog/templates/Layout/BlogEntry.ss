<div id="blog_wrapper">
	<div id="blog_post">
		<div class="blog_post_content">
			<h2><a href="$Link" title="$Title.XML">$MenuTitle</a></h2>
			<div class="info">
				<% if TagsCollection %>
					<div class="tags">
						<% _t('TAGS', 'Tags:') %>:
						<% control TagsCollection %>
							<a href="$Link" title="<% _t('VIEWALLPOSTTAGGED', 'View all posts tagged') %> '$Tag'" rel="tag">$Tag</a><% if Last %><% else %>,<% end_if %>
						<% end_control %>
					</div>
				<% end_if %>
				$Date.Long
				<% if Author %><% _t('POSTEDBY', 'Posted by') %> <strong>$Author.XML</strong><% end_if %>
			</div>
			$Content
		</div>
		$PageComments
		<ul id="pagination">
			<li><a href="blog.php?layout=blog" title="Previous page">&lsaquo; Previous post</a></li>
			<li class="next"><a href="blog.php?layout=blog" title="Next page">Next post &rsaquo;</a></li>
		</ul>
	</div>
	<% include BlogSideBar %>
</div>