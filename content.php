<h2><?php the_title(); ?> - <?php bloginfo('name');?></h2>
    <p class=bold>
        <a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a> / <a href="<?php the_permalink();?>"><?php the_title();?> </a>
    </p>



    <table id="down">

        <tbody>
        <tr>
            <td class="bold l pu">
	            <?php if(!is_page()): ?>
		            <?= date('d M Y g:i a', strtotime(get_the_date())); ?> by <a href="#"><?php the_author(); ?></a>
	            <?php endif; ?>
            </td>
        </tr>
        <tr>

            <td class="small w grad" style="text-align: left">
                <?php the_content(); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                wp_link_pages(
	                array(
		                'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
		                'after'       => '</div>',
		                'link_before' => '<span>',
		                'link_after'  => '</span>',
		                'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
		                'separator'   => '<span class="screen-reader-text">, </span>',
	                )
                );
                ?>
            </td>
        </tr>
        </tbody>
    </table>
