<?php /*
Template Name: Home
*/ ?>
<?php get_header(); ?>
<div id="content" class="full">

<?php get_template_part( 'part-projects-home'); ?>
<?php get_template_part( 'part-featured-pages'); ?>
<?php get_template_part( 'part-posts-home'); ?>



<div id="about-us" class="full homeSection clearfix">
<div class="sectionHead"><h3><span>About Us</span></h3>	
	<p><span>Who are we?</span></p>	
	</div>
<p>Adlam and Beadle has been based in Sussex since it's foundation twenty five years ago, and we have been at our present workshops for over twenty years.We have undertaken projects all over London and the Southeast, as well as South Wales, Devon and Cornwall.</p>
</div>

<div id="colour-picker" class="full homeSection clearfix">
<div class="sectionHead"><h3><span>Colour Range</span></h3>	
	<p><span>Find your perfect colour</span></p>	
	</div>
<p>Adlam and Beadle has been based in Sussex since it's foundation twenty five years ago, and we have been at our present workshops for over twenty years.We have undertaken projects all over London and the Southeast, as well as South Wales, Devon and Cornwall.</p>
</div>

<?php get_template_part( 'part-testimonials-home'); ?>

<div id="homeContent" class="full homeSection clearfix">
	<?php while (have_posts()) : the_post(); ?>	
	<div class="inside">
	<?php the_content(); ?>	
	</div>
	<?php endwhile; ?>	
</div>
</div>

<?php get_footer(); ?>	