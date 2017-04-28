<?php get_header(); ?>

	<section>

		<h2>Single page</h2>

		<article>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h3>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h3>

			<div>
				<?php the_content(); ?>
			</div>

			<?php endwhile; else: ?>

			<h3>Sorry!</h3>

			<?php endif; ?>

		</article>

	</section>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
