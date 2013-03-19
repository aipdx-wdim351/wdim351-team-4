<?php get_header(); ?>
	<?php if(is_page('services')){ ?>
	
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
				<?php the_field('services_about'); ?>
			</div>		
		</div>
		<div class="row spaced-row services">
			<div class="large-4 columns">
		        <?php the_field('services_description'); ?>
		    </div>

		    <div class="large-4 columns">
		        <?php the_field('services_description'); ?>
		    </div>

		    <div class="large-4 columns">
		        <?php the_field('services_description'); ?>
		    </div>
		</div>

		<div class="row spaced-row services">
			<div class="large-4 columns">
		        <?php the_field('services_description'); ?>
		    </div>

		    <div class="large-4 columns">
		        <?php the_field('services_description'); ?>
		    </div>

		    <div class="large-4 columns">
		        <?php the_field('services_description'); ?>
		    </div>
		</div>
						
		
	<?php } else { ?>
	
		
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		

					<?php the_content(); ?>
		
				<?php endwhile; ?>		
		

				<?php else : ?>

					<h2>Not Found</h2>

					<p>Sorry, but the requested resource was not found on this site.</p>
		
				<?php endif; ?>	
	
	<?php } // end else statment?>

<?php get_footer(); ?>