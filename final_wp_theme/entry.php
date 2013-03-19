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

				<?php the_excerpt(); ?>
				<a class="read-more" href="<?php the_permalink(); ?>">Read More...</a>
			</div>
		</div>
		<div class="large-4 columns">
			<?php the_post_thumbnail('thumb-300'); ?>
		</div>
	</div>