<?php get_header(); ?>
<body>
 		<?php query_posts('order=Asc'); ?>
		<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
			<article>
 				<header>
 					<h1><?php the_title(); ?></h1>	
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
<?php get_footer(); ?>