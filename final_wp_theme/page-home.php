<?php get_header(); ?>

	<div class="row">
	    <div class="large-8 columns">
	        <div class="cycle-slideshow"
				data-cycle-prev="#prev"
				data-cycle-next="#next"
				data-cycle-pager=".pager"
			>
	            <?php if(get_field('cycle_images')): 
	            	while(the_repeater_field('cycle_images')):
	            		echo '<img src="'.get_sub_field('image').'" />';
	            	endwhile;
	            endif; ?>
	        </div>

	        <div class="row">
	            <div class="large-12 columns">
	                <div class="large-12 columns slider">
		                <div class="left">
							<div class="pager">
							</div>
		                </div>

		                <div class="right">
			                <img id="next" src="<?php bloginfo("template_url"); ?>/library/img/arrow_next.gif" class="ctrl right">
			                <img id="prev" src="<?php bloginfo("template_url"); ?>/library/img/arrow_prev.gif" class="ctrl right">
			                <span class="ctrl right">Image Title</span>
		                </div>
	                </div>
	            </div>
	        </div>
	    </div>

	    <div class="large-4 columns">
	        <div class="row">
	            <div class="large-10 columns large-centered news-wrapper">
		            <span class="news">NEWSLETTER</span>
		            <span class="letter">Sign up for <strong>news</strong> and <strong>updates</strong></span>
		            <input type="text" class="rounded input" placeholder="Name...">
		            <input type="text" class="rounded input" placeholder="Email...">
		            <a class="round button view-more expand" href="#">Sign Up</a>
	            </div>
	        </div>

	        <div class="row">
	            <div class="large-12 columns pass">
		            <div class="small-10 large-11 columns large-centered small-centered">
		                <a class="round button view-more expand free" href="#">View More</a>
		            </div>
	            </div>
	        </div>
	    </div> 
    </div>

    <div class="subtle">
        <div class="row">
	        <div class="large-12 columns">
	            <div class="row main-content">
		            <div class="large-4 columns">
		                <h3 class="content-head"><?php the_field('about_page_header'); ?></h3>
		                <p><?php the_field('about_page_content'); ?></p>
		                <a href="/webDevfinal/services" class="read-more">Read More...</a>
		            </div>

		            <div class="large-4 columns testimonial">
		                <h3>"Lorem ipsum dolor sit amet"</h3>
		                <span class="muted">-Some Dude</span>
		            </div>

		            <div class="large-4 columns">
		                <h3 class="content-head"><?php the_field('latest_posts_header'); ?></h3>
		                <div class="tweet"></div>
		              
		                <p class="follow"><span class="muted">Follow Us</span> <span class="read-more">@gcomalli</span></p>
		                
		            </div>
		        </div>

		        <div class="row">
		            <div class="large-12 columns">
		                <div class="large-12 columns stats-bg">
			                <div class="small-10 large-6 columns large-centered small-centered">
			                    <h1 class="stats">PERSONAL STATS</h1>
			                    <span class="personal">You must log in to view stats</span>
			                    <div class="row stat-btns">
				                    <a class="round button view-more white" href="#">Log in</a>
				                    <a class="round button view-more blue" href="#">Sign Up</a>
			                    </div>
			                </div>
		                </div>
		            </div>
	            </div>
	        </div>      
        </div>
    </div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		
		

		<?php the_content(); ?>
	
	<?php endwhile; ?>		
	

	<?php else : ?>

    	<h2>Not Found</h2>

    	<p>Sorry, but the requested resource was not found on this site.</p>
	
	<?php endif; ?>


<?php get_footer(); ?>