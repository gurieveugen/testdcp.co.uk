<?php $home_project_count = intval(of_get_option('ttrust_home_project_count')); ?>




<div id="projects" class="full homeSection clearfix">
	<div class="sectionHead">				
		<h3><span>Kitchen Projects</span></h3>
			<p>Take a look at some of our designs and styles</p>	
	</div>	
	<div class="thumbs clearfix isotope" style="position: relative; overflow: hidden; height: 266px;">			
		


		<div class="project small 12 isotope-item" id="project-34" style="width: 320px; display: block; position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px); visibility: visible;">
			<div class="inside">
				<a href="/wordpress/projects" rel="bookmark">	
					<img width="300" height="240" src="http://testdcp.co.uk/wordpress/wp-content/uploads/2013/10/project3-300x240.jpg" class="fade wp-post-image" alt="3" title="">
						<span class="title"><span>Bespoke</span></span>
				</a>	
			</div>																																
		</div>


				
		<div class="project small 12 isotope-item" id="project-30" style="width: 320px; display: block; position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(320px, 0px, 0px); visibility: visible;">
			<div class="inside">
				<a href="/wordpress/projects" rel="bookmark">	
					<img width="300" height="240" src="http://testdcp.co.uk/wordpress/wp-content/uploads/2013/10/project2-300x240.jpg" class="fade wp-post-image" alt="2" title="">
						<span class="title"><span>Kitchens</span></span>
				</a>	
			</div>																																
		</div>



				
		<div class="project small 12 isotope-item" id="project-27" style="width: 320px; display: block; position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(640px, 0px, 0px); visibility: visible;">
			<div class="inside">
				<a href="/wordpress/projects" rel="bookmark">	
					<img width="300" height="240" src="http://testdcp.co.uk/wordpress/wp-content/uploads/2013/10/project1-300x240.jpg" class="fade wp-post-image" alt="1" title="">
						<span class="title"><span>Islands</span></span>
				</a>	
			</div>																																
		</div>						
	</div>
</div>



















<?php if($home_project_count > 0) : ?>	
<div id="projects" class="full homeSection clearfix">
	<div class="sectionHead">				
	<h3><span><?php echo of_get_option('ttrust_recent_projects_title'); ?></span></h3>
	<p><?php echo of_get_option('ttrust_recent_projects_description'); ?></p>	
	</div>	
	<?php
	if(of_get_option('ttrust_home_project_type') == "featured") : //Show only featured projects 
		$args = array(
			'ignore_sticky_posts' => 1,
			'meta_key' => '_ttrust_project_featured',
			'meta_value' => true,    			
    		'posts_per_page' => $home_project_count,
    		'post_type' => array(				
				'project'					
				)
			);			
	else:
		$args = array(
			'ignore_sticky_posts' => 1,			  			
    		'posts_per_page' => of_get_option('ttrust_home_project_count'),
    		'post_type' => array(				
				'project'					
				)
		);	
	endif;
	?>		
	<?php $projects = new WP_Query( $args ); ?>				
	<div class="thumbs clearfix">			
		<?php  while ($projects->have_posts()) : $projects->the_post(); ?>		
			<?php get_template_part( 'part-project-thumb'); ?>
		<?php endwhile; ?>
				
	</div>
</div>
<?php endif; ?>