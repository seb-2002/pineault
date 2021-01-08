<?php get_header(); ?>

<?php 
 while (have_posts()) {
   the_post();
?>

<div class="container">

    
  <div class="heading__project">
    <a class="btn__home" href="<?php echo get_home_url(); ?>"><i class="fas fa-arrow-left"></i></a>
  
    <h2 class="the-title"><?php the_title(); ?></h2>
   
    
    <h2 class="the-subtitle"><?php the_excerpt(); ?></h2>
    
    
  
  </div>
  
  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
  
  <div class="post-content">
    <?php the_content(); ?>
  </div>

 

</div>


<?php }; ?>

  <?php get_footer(); ?>