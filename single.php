<?php get_header(); ?>

<?php 
 while (have_posts()) {
   the_post();
?>
<div class="heading__project">
  <h2><?php the_title(); ?></h2>
  <h2><?php the_excerpt(); ?></h2>
  
  <a href="<?php echo get_home_url(); ?>">Home</a>

</div>

<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
<?php the_content(); ?>


<?php }; ?>

  <?php get_footer(); ?>