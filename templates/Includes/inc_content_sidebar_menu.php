				<ul>

					<li class="one_column first<?php if(@$_GET['active'] == '1_column'): ?> active<?php endif;?>"><a href="content_1_column.php?layout=inner&amp;active=1_column" title="1 Columns">1 Column</a></li>
					<li class="two_column<?php if(@$_GET['active'] == '2_column'): ?> active<?php endif;?>"><a href="content_2_column.php?layout=inner&amp;active=2_column" title="2 Columns">2 Columns</a></li>
					<li class="three_column<?php if(@$_GET['active'] == '3_column'): ?> active<?php endif;?>"><a href="content_3_column.php?layout=inner&amp;active=3_column" title="3 Columns">3 Columns</a></li>
					<li class="users<?php if(@$_GET['active'] == 'team_members'): ?> active<?php endif;?>"><a href="team_members.php?layout=inner&amp;active=team_members" title="Team Members">Team Members</a></li>
					<li class="testimonials<?php if(@$_GET['active'] == 'testimonials'): ?> active<?php endif;?>"><a href="testimonials.php?layout=inner&amp;active=testimonials" title="Testimonials">Testimonials</a></li>
					<li class="faq<?php if(@$_GET['active'] == 'faq'): ?> active<?php endif;?>"><a href="faq.php?layout=inner&amp;active=faq" title="FAQ">FAQ</a></li>
					<li class="tables last<?php if(@$_GET['active'] == 'tables'): ?> active<?php endif;?>"><a href="tables.php?layout=inner&amp;active=tables" title="Tables">Tables</a></li>					
					
				</ul>