<?php get_header(); ?>
			
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<div class="post row">
		<div class="large-8 columns">
			<?php // POST TITLE ?>
			<h3 class="post-header">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				<?php echo get_the_title(); ?>
				</a>
			</h3>
			
					
			<?php // POST CONTENT ?>
			<div class="post-content">

				<?php the_content(); ?>
				
			</div>
		</div>
		<div class="large-4 columns">
			<?php the_post_thumbnail('thumb-300'); ?>
		</div>
	</div>
		
		<?php //comments_template(); ?>
		
		<?php endwhile; ?>			
		
		<?php else : ?>
		
		    	<h2>Not Found</h2>
		    	<p>Sorry, but the requested resource was not found on this site.</p>
		
		<?php endif; ?>
	
	<?php //get_sidebar(); // sidebar 1 ?>


<?php get_footer(); ?>