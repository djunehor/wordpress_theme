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
    $categories = get_categories( array(
	    'orderby' => 'name',
	    'order'   => 'ASC',
        'hide_empty' => FALSE,
    ) );

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

    </tbody>
</table>