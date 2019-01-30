<?php
/**
* Template Name: Home Page Template
*
* @package WordPress
* @subpackage Codelation Default
* @since Codelation Default 0.1
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
