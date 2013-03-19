<?php get_header(); ?>

		
		


		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<?php //get_template_part("entry"); ?>
		
		<?php endwhile; ?>	
		
		
		
		
		<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
		
			<div class="page-navi">	
				<?php page_navi(); // use the page navi function ?>
			</div>
			
		<?php } else { // if it is disabled, display regular wp prev & next links ?>
		
			<div class="wp-prev-next">
				<ul>
					<li class="next-link"><?php next_posts_link(__('&laquo; Older Entries')) ?></li>
					<li class="prev-link"><?php previous_posts_link(__('Newer Entries &raquo;')) ?></li>
				</ul>
			</div>
			
		<?php } ?>		
		
		
		<?php 
			// not found (invalid post/page id, not at 404)
		else : ?>
		
			<div class="post">

		    	<h2>Not Found</h2>
		    	<p>Sorry, but the requested resource was not found on this site.</p>

			</div>
		
		<?php endif; ?>
	    				
	<?php //get_sidebar(); // sidebar 1 ?>
	
<?php get_footer(); ?>