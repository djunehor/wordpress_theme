<?php
$args = array(
	'status' => 'approve',
	'number' => '15', // whatever number of comments you wish to display.
	'post_id' => get_the_ID(), // use post_id, not post_ID - replace 18 by your post ID
);

$comments = get_comments($args);
?>

<table id="down">

	<tbody>
<?php
// Browse all comments one by one and display the content :
foreach ($comments as $comment) :
?>
	<tr>
		<td class="bold l pu">
			<?= date('d M Y g:i a', strtotime($comment->comment_date)); ?> by <a href="#"><?=$comment->comment_author; ?></a>
		</td>
	</tr>
	<tr>

		<td class="small w grad" style="text-align: left">
			<?=$comment->comment_content; ?>
		</td>
	</tr>
<?php
	endforeach;
?>
<tr>
	<td class="bold l pu">
		Add a Comment
	</td>
</tr>
<tr>

	<td class="small w grad" style="text-align: left">
		<?php comment_form(); ?>
	</td>
</tr>
	</tbody>
</table>
