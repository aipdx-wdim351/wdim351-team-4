
	</div><!-- end .content-wrapper -->
	<div class="push"></div>
</div> <!-- end .whole-wrapper -->
<footer>
	<div class="row">
		<div class="large-8 columns hide-for-small">
			<nav>
				<?php wp_nav_menu('menu=Global'); ?>
			</nav>
		</div>
		<div class="large-4 columns">
			<ul class="footer-info">
				<li class="copyright">&copy; <?php echo date('Y'); ?> Hollywood Fitness</li>
				<li class="attribution">Site by <a href="https://github.com/aipdx-wdim351/wdim351-team-4">Team 4</a></li>
			</ul>
		</div>
	</div>
</footer>		
				
		<?php wp_footer(); // js scripts are inserted using this function ?>
		
		<script src="<?php bloginfo("template_url"); ?>/library/js/scripts.js"></script>
		<script src="http://malsup.github.com/jquery.cycle2.js"></script>
		<script src="<?php bloginfo("template_url"); ?>/library/js/tweet.js"></script>
		<script>
			$(function(){
				$('li.toggle-topbar a').click(function(){
					$('.large-8.small-12.global-nav').slideToggle(400);
					return false;
				});
				$(window).resize(function(){
					var width = $(window).width();
					if(width > 767){
						$('.large-8.small-12.global-nav').show();
					}
				});
				$(".tweet").tweet({
				    username: "gcomalli",
				    join_text: "auto",
				    avatar_size: 34,
				    count: 3,
				    auto_join_text_default: "", 
				    auto_join_text_ed: "",
				    auto_join_text_ing: "",
				    auto_join_text_reply: "",
				    auto_join_text_url: "",
				    loading_text: "loading tweets..."
				});
			});
		</script>
	</body>

</html>
