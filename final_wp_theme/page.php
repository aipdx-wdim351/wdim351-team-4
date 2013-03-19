<?php get_header(); ?>
	<?php if(is_page('ActivTrax')){ ?>
	
		<div class="row spaced-row">
			<div class="large-4 columns">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		

					<?php the_content(); ?>
		
				<?php endwhile; ?>		
		

				<?php else : ?>

					<h2>Not Found</h2>

					<p>Sorry, but the requested resource was not found on this site.</p>
		
				<?php endif; ?>
			</div>
			<div class="large-8 columns">
				<img class="shadowed-img" src="<?php the_field('activtrax_image'); ?>" alt="ActivTrax" />
			</div>		
		</div>
		<div class="row spaced-row">
			<div class="large-4 columns">
				<h4>ActivTrax Login</h4>
				<input type="text" class="rounded input" placeholder="Username...">
				<input type="text" class="rounded input" placeholder="Password...">
				<a class="round button view-more expand" href="#">Login</a>
			</div>
			<div class="large-8 columns">
				<?php the_field('activtrax_info'); ?>
			</div>
		</div>
						
		
	<?php } else {  // if is_page('activtrax')  ?>
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	

		<?php the_content(); ?>
	
		<?php endwhile; ?>		
		

		<?php else : ?>

    	<h2>Not Found</h2>

    	<p>Sorry, but the requested resource was not found on this site.</p>
		
		<?php endif; ?>
	
	
	<?php } // end else statment?>

<?php get_footer(); ?>