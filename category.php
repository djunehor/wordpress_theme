<?php
/**
 * The template for displaying Category pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();
get_sidebar();
?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="archive-header">
					<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h1>

					<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
					?>
				</header><!-- .archive-header -->
			<table class="boards">


				<tbody>
				<tr>
					<td><b><a href="http://twitter.com/funaabconnect">Twitter</a></b> / <b><a href="http://facebook.com/funaabconnect">Facebook</a></b> / <b><a href="<?=get_page_uri(10);?>">How To Advertise</a></b></td>
				</tr>
				<tr>
					<td class="featured w">
				<?php
				// Start the Loop.
				while ( have_posts() ) : the_post(); ?>
					» <a style="font-size:11pt" href="<?php the_permalink(); ?>"><b><?php  the_title(); ?></b></a> «<br>
				<?php endwhile; ?>
					</td>
				</tr>
				<tr>
					<td>
					<?php
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
					               '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
					               '<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
					               '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
					               '<span class="post-title">%title</span>',
				) );
					?></td>
				</tr>
				<?php
			else :
				// If no content, include the "No posts found" template.
				echo '<h2>No posts in this category</h2>';

			endif;
			?>
				</tbody>
			</table>
		</div><!-- #content -->
	</section><!-- #primary -->

<?php
get_footer();