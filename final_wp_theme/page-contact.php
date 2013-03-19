<?php get_header(); ?>
	<?php if(is_page('contact')){ ?>
	
		<div class="row spaced-row contact">
			<div class="large-12 columns">
				<img class="map" src="<?php the_field('contact_map'); ?>" alt="Location" />
			</div>		
		</div>
		<div class="contact-wrapper">
			<div class="row">
				<div class="large-3 columns">
					<?php the_field('contact_hi'); ?>
				</div>
				<div class="large-3 columns">
					<?php the_field('contact_hours'); ?>
				</div>
				<div class="large-3 columns">
					<?php the_field('contact_address'); ?>
				</div>
				<div class="large-3 columns">
					<?php the_field('contact_contact'); ?>
				</div>
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