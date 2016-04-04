<?php get_header(); ?>
<body>
	<h1><?php bloginfo('name'); ?></h1>
	<h2><?php bloginfo('desciption'); ?></h2>
	<section>
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






