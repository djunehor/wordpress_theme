<?php get_header(); ?>
<?php if(!is_front_page()): ?>
<div class="container">

        <div class="col-sm-12">

			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_format() );

			endwhile;
			endif;
			?>

        </div> <!-- /.col -->
</div>
            <?php endif; ?>

<?php get_footer(); ?>