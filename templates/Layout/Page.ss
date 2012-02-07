<div id="site_inner_wrapper">
	<div id="header_wrapper">
		<h1>$Title</h1>
		<% if MetaDescription %><p>$MetaDescription</p><% end_if %>
	</div>
	<% if Menu(2) %><div id="sidebar">
		<ul><% control Menu(2) %>
			<li class="one_column $FirstLast<% if LinkOrCurrent = current %> active<% end_if %>">
				<a href="$Link" title="$Title.XML">$MenuTitle</a>
			</li>
		<% end_control %></ul>
		<% if SideBarControl = Left %>
			<% include OtherSideBar %>
			</div><div id="two_column_content">
		<% else %>
			</div><div id="three_column_content">
		<% end_if %>
	<% else %><div id="one_column_content"><% end_if %>
		<% if Content %>$Content<% else %><% include Content %><% end_if %>
		$Form
		$PageComments
	</div>
	<% if SideBarControl = Right %><div id="sidebar_right">
		<% include OtherSideBar %>
	</div><% end_if %>
</div>