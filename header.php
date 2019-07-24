<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html class="gr__nairaland_com">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php
        if(is_category()) single_cat_title();
        else if(is_front_page()) bloginfo('name');
        elseif (!empty(the_title())) the_title();
        else echo 'Search Results'; ?> | <?php bloginfo('description');
        ?></title>

    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <link href="<? bloginfo('url');?>/feed" rel="alternate" type="application/rss+xml" title="<? bloginfo('url'); ?>">
   
	<?php wp_head(); ?>
</head>
<?php
$user = wp_get_current_user();
?>
<body data-gr-c-s-loaded="true">
<div class="body">
    <table summary="" id="up">
        <tbody>
        <tr>
            <td class="grad">
                <h1><a href="<?php bloginfo('url'); ?>" class="g" title="<?php bloginfo('name');?>"><?php bloginfo('name');?></a></h1>
                <?php if($user->ID): ?>
                Welcome, <a href="<?=get_author_posts_url( $user->ID, $user->user_nicename ); ?>" class="user"><?=$user->user_nicename;?></a>: <a href="<?=bloginfo('url'); ?>/wp-admin/profile.php">Edit Profile</a> / <a href="//funaabconnect.com/dashboard/">Dashboard</a> / <a href="//funaabconnect.com/account/">Account</a>
	            <?php else: ?>
                    Welcome, <a class="user" >Guest</a> / <a href="<?=wp_login_url(); ?>">Login</a> / <a href="<?=wp_registration_url(); ?>">Register</a>
                <?php endif; ?>
                <br><b>Stats: </b><?=number_format(count_users()['total_users']);?> members, <?=number_format(wp_count_posts()->publish);?> topics. <b>Date</b>: <?=date('d M Y').' at '.date('g:i a'); ?> / <a href="<?=wp_logout_url() ?>">Logout</a>
                <p></p>
                <form action="<?=get_site_url(); ?>" method="post">
                    <input type="text" name="s" size="32">
                    <input type="submit" name="search" value="Search">
                </form>
            </td>
        </tr>
        </tbody>
    </table>
    <a name="top"></a>

    <?php if(is_front_page()) : ?>
<?php get_sidebar(); ?>
<?php endif; ?>
