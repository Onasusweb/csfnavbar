<div id="cakephp-global-navigation">
	<ul>
		<li class="main"><a href="http://cakephp.org">CakePHP</a></li>
		<li><a href="#" class="empty">Downloads</a>
			<ul>
				<li><a href="http://cakephp.org">Latest Release</a></li>
				<li class="cake-version"><a href="http://github.com/cakephp/cakephp/tree/1.2">CakePHP 1.2</a>
					<ul>
						<li><a href="http://github.com/cakephp/cakephp/archives/1.2">Download</a>&nbsp;|</li>
						<li><a href="http://cakephp.lighthouseapp.com/projects/42648-cakephp/milestones">Tickets</a></li>
					</ul>
				</li>
				<li class="cake-version"><a href="http://github.com/cakephp/cakephp/tree/1.3">CakePHP 1.3</a>
					<ul>
						<li><a href="http://github.com/cakephp/cakephp/archives/1.3">Download</a>&nbsp;|</li>
						<li><a href="http://cakephp.lighthouseapp.com/projects/42648-cakephp/milestones">Tickets</a></li>
					</ul>
				</li>
				<li class="cake-version"><a href="http://github.com/cakephp/cakephp/tree/2.0">CakePHP 2.0</a>
					<ul>
						<!-- <li><a href="#">Download</a>|</li> -->
						<li><a href="http://cakephp.lighthouseapp.com/projects/42648-cakephp/milestones">Tickets</a></li>
					</ul>
				</li>
			</ul>
		</li>
		<li><a href="#" class="empty">Documentation</a>
			<ul>
				<li class="cake-version"><a href="http://api.cakephp.org">API</a>
					<ul>
						<li><a href="http://api11.cakephp.org">1.1</a>&nbsp;|</li>
						<li><a href="http://api12.cakephp.org">1.2</a>&nbsp;|</li>
						<li><a href="http://api13.cakephp.org">1.3</a></li>
					</ul>
				</li>
				<li class="cake-version"><a href="http://book.cakephp.org">Book</a>
					<ul>
						<li><a href="http://book.cakephp.org/view/304/x1-1-Collection">1.1</a>&nbsp;|</li>
						<li><a href="http://book.cakephp.org/view/2/x1-2-Collection">1.2</a>&nbsp;|</li>
						<li><a href="http://book.cakephp.org/view/875/x1-3-Collection">1.3</a></li>
					</ul>
				</li>
				<li><a href="http://cakephp.lighthouseapp.com">Tickets</a></li>
				<li><a href="http://translation.cakephp.org">Translations</a></li>
			</ul>
		</li>
		<li><a href="#" class="empty">Community</a>
			<ul>
				<li><a href="http://bakery.cakephp.org">Bakery</a></li>
				<li><a href="http://github.com/cakephp/cakephp/contributors">Contributors</a></li>
				<li><a href="http://groups.google.com/group/cake-php">Google Groups</a></li>
				<li><a href="http://cakephp.org/logos">Logo</a></li>
				<li><a href="http://cakephp.org/planet">Planet</a></li>
				<li><a href="http://ask.cakephp.org">Q &amp; A</a></li>
				<li><a href="http://tv.cakephp.org">TV (Screencasts)</a></li>
			</ul>
		</li>
		<li><a href="http://cakephp.org/services">Services</a>
			<ul>
				<li><a href="http://cakephp.org/services/certification">Certification</a></li>
				<li><a href="http://cakephp.org/services/consultation">Consultation</a></li>
				<li><a href="http://cakephp.org/services/support">Support</a></li>
				<li><a href="http://cakephp.org/services/training">Training</a></li>
			</ul>
		</li>
	</ul>
</div>
<script>
$(function() {
	$("#cakephp-global-navigation ul li a.empty").bind('mouseleave mouseenter click', function(event) {
		var submenu = $(this).parent().children('ul');
		if (event.type == 'mouseleave') {
			submenu.hide();
		} else if (event.type == 'mouseenter') {
			submenu.show();
		} else {
			submenu.toggle();
		}
		return false;
	});
})
</script>