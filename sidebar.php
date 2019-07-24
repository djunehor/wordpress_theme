<?php
/**
 * Created by PhpStorm.
 * User: Djunehor
 * Date: 5/5/2019
 * Time: 5:14 PM
 */
?>
<table class="boards">
    <tbody>
    <tr>
        <th>
            <h3><?=bloginfo('name');?></h3></th>
    </tr>
    <?php
    global $categories;
    $categories = get_categories( array(
	    'orderby' => 'name',
	    'order'   => 'ASC',
        'hide_empty' => FALSE,
    ) );
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
    ?>
    <tr>
        <td class="l w">
            <?php
            foreach ( $categories as $category ) {
            
	            printf( '<a href="%1$s"><b>%2$s</b></a>, ',
		            esc_url( get_category_link( $category->term_id ) ),
		            esc_html( $category->name )
	            );
            }
            ?>
         
        </td>
    </tr>
    <tr>
        <td class="1 ">
           <?php
           foreach($pages as $page) {
               printf( '<a href="%1$s"><b>%2$s</b></a>, ',
		            esc_url( get_page_link( $page->ID ) ),
		            esc_html( $page->post_title )
	            );
           }
           ?>
             <a href="//funaabconnect.com/account/?section=submit-post"><b>Create Post</b></a>
        </td>
    </tr>

    </tbody>
</table>