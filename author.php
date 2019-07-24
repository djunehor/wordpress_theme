<?php get_header(); ?>

<?php get_sidebar(); ?>

	<div id="content" class="narrowcolumn">

		<!-- This sets the $curauth variable -->

		<?php
		$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
		?>

		<h2>About: <?php echo $curauth->nickname; ?></h2>

		<h3>Posts by <?php echo $curauth->nickname; ?>:</h3>

		<table class="boards">


			<tbody>
			<tr>
				<td><b><a href="http://twitter.com/funaabconnect">Twitter</a></b> / <b><a href="http://facebook.com/funaabconnect">Facebook</a></b> / <b><a href="<?=get_page_uri(8);?>">How To Advertise</a></b></td>
			</tr>
			<tr>
				<td class="featured w">
			<!-- The Loop -->

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
						<?php the_title(); ?></a>,
					<?php the_time('d M Y'); ?> in <?php the_category('&');?><br>

			<?php endwhile; else: ?>
				<p><?php _e('No posts by this author.'); ?></p>

			<?php endif; ?>
				</td>
			</tr>
			</tbody>
		</table>
			<!-- End Loop -->

	</div>

<?php get_footer(); ?>