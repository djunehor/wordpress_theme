<table id="down"><tbody><tr><td class="small w grad"><p></p>
            <form action="" method="post"> <input type="text" name="s" size="32">
                <input type="submit" name="search" value="Search">
            </form>
            <p>Quick Links:  <?php
            $args = array(
					'sort_order' => 'asc',
					'sort_column' => 'post_title',
					'hierarchical' => 1,
					'exclude' => '236,237,244,242,251',
					'include' => '',
					'meta_key' => '',
					'meta_value' => '',
					'authors' => '',
					'child_of' => 0,
					'parent' => -1,
					'exclude_tree' => '',
					'number' => 7,
					'offset' => 0,
					'post_type' => 'page',
					'post_status' => 'publish'
				);
				$pages = get_pages($args);
				
           foreach($pages as $page) {
               printf( '<a href="%1$s"><b>%2$s</b></a>, ',
		            esc_url( get_page_link( $page->ID ) ),
		            esc_html( $page->post_title )
	            );
           }
           ?></p>
            <br>
            <a href="<?=site_url();?>" title="<?=bloginfo('name');?>"><b><?=bloginfo('name');?></a></b> - Copyright © 2015 - <?=date('Y');?> <a href="http://getdev.co/djunehor" title="Djunehor">Zacchaeus Bolaji</a> and <a href="https://web.facebook.com/sammycool28" title="JB">Justin Bola</a>. All rights reserved. See <a href="<?= get_page_uri(2); ?>">How To Advertise</a>.<br><b>Disclaimer</b>: Every <?=bloginfo('name');?> member is <b>solely responsible</b> for <b>anything</b> that he/she <b>posts</b> or <b>uploads</b> on <?=bloginfo('name');?>.</p></td></tr></tbody></table>

</div>
</body>
<?php wp_footer(); ?>
</html>