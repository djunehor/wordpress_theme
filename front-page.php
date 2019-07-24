<?php
get_header();
get_sidebar();
?>

<table class="boards">


	<tbody>
	<tr>
		<td><b><a href="http://twitter.com/funaabconnect">Twitter</a></b> / <b><a href="http://facebook.com/funaabconnect">Facebook</a></b> / <b><a href="<?=get_page_uri(8);?>">How To Advertise</a></b></td>
	</tr>
	<tr>
		<td class="featured w">
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				» <a style="font-size:11pt" href="<?php the_permalink(); ?>"><b><?php  the_title(); ?></b></a> «<br>
			<?php endwhile;
			else :
				_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
			endif;
			wp_reset_postdata();
	?>

	</tr>
	<tr>
		<td>
			<?php
			global $wp_query;

			$big = 999999999; // need an unlikely integer

			echo paginate_links( array(
				'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'  => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total'   => $wp_query->max_num_pages
			) );
			?>
        </td>
	</tr>
	</tbody>
</table>
<?php get_footer(); ?>
