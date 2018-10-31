<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>

<a class="navbar-brand" href="<?php bloginfo('url') ?>">
	<img src="<?php echo $logo[0]; ?>" alt="">
</a>