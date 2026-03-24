<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>

<div class="main-banner text-center gradient-color-banner">
    <div class="container">
        <div class="top-label"><?php the_sub_field( 'gradient_color_banner_title' ); ?></div>
        <div class="main-title"><?php the_sub_field( 'gradient_color_banner_sub_title' ); ?></div>
        <div><?php the_sub_field( 'gradient_color_banner_short_content' ); ?></div>
    </div>
</div>

