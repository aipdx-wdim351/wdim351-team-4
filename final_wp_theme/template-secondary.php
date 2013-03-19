<?php
/*
*	Template Name: Secondary Page
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		
		<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

		<?php the_content(); ?>
	
	<?php endwhile; ?>		
	

	<?php else : ?>

    	<h2>Not Found</h2>

    	<p>Sorry, but the requested resource was not found on this site.</p>
	
	<?php endif; ?>


<?php get_footer(); ?>