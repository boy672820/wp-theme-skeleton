<?php
$args = array(
	'posts_per_page'   => 5,
	'offset'           => 0,
	'orderby'          => 'date',
	'order'            => 'DESC',
	'post_type'        => 'post',
	'post_status'      => 'publish',
	'suppress_filters' => true
);
$posts = get_posts( $args );
?>

<aside>

	<h2>Posts</h2>

	<ul>
		<?php if ( $posts ) : foreach ( $posts as $post ) : setup_postdata( $post ); ?>

		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

		<?php endforeach; endif; ?>
	</ul>

</aside>
