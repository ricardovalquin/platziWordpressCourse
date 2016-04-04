<?php get_header(); ?>
<body>
	<h1><?php bloginfo('name'); ?></h1>
	<h2><?php bloginfo('desciption'); ?></h2>
	<ul>
		<li> <?php bloginfo('name'); ?> </li>
		<li> <?php bloginfo('desciption'); ?> </li>
		<li> <?php bloginfo('wpurl'); ?> </li>
		<li> <?php bloginfo('admin_email'); ?> </li>
		<li> <?php bloginfo('charset'); ?> </li>
		<li> <?php bloginfo('version'); ?> </li>
		<li> <?php bloginfo('html_type'); ?> </li>
		<li> <?php bloginfo('language'); ?> </li>
		<li> <?php bloginfo('stylesheet_directory'); ?> </li>
		<li> <?php bloginfo('stylesheet_url'); ?> </li>
	</ul>
	<section>
		<header>
 			<h2>Last Posts</h2>
		</header>
		<!--?php rewhind_posts(); ?--> <!-- is a variable reset!!!, can be here or after the endif php tag-->
		<!--?php query_posts('order=Asc&cat=2'); ?--> <!--to filter by categories-->
 		<?php query_posts('order=Asc'); ?>
		<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
			<article>
 				<header>
 					<h3>
  						<a href=" <?php the_permalink(); ?> "><?php the_title(); ?></a>
 					</h3>	
 					<div class="datos">
	 					<strong><?php the_author(); ?></strong> - 
 						<small><?php the_date(); ?></small>
 					</div>
 				</header>
 				<figure>
 					<?php the_post_thumbnail('thumbnail'); ?>
 				</figure>		
 				<?php the_excerpt(); ?>
 				<?php the_category(); ?>
			</article>
		<?php endwhile; ?>
		<?php else: ?>
			<h3>Without posts...</h3>
		<?php endif; ?>   
	</section>
<?php get_footer('home'); ?>






