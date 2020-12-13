<?php get_header(); ?>



<div class="container content">
    <div class="table-container">
        <!-- Here are the table elements -->
        <!-- add in .justify-content-around to center the items -->

 <?php 

          $args = array(
            'post_type' => 'project',
          );

          $projects = new WP_Query($args);
          
          while($projects -> have_posts()) {
              $projects -> the_post();
          


        ?>

           <a href="<?php the_permalink(); ?>">
            <div class="d-flex table-main align-items-center flex-column flex-md-row">
        <p class="table-item table-item-1"> <?php the_title(); ?> </p>
        <div class="table-item table-item-2"> &nbsp; / &nbsp; </div>
        <p class="table-item table-item-3"> <?php the_excerpt (); ?></p>
    </div>
    </a>
    <hr>
         

          <?php };
         
         wp_reset_query(); ?>

      
 
       

    </div>
</div>

  
      
        <img class="header__img" src="<?php echo get_template_directory_uri(); ?>/img/top.png" alt="header">
     
            <div class="img-top" ></div>
            <div class="img-btm" id="anchor-scroll"></div>
            <div class="img-top" id="trigger-footer" ></div>
            <div class="img-btm"></div>
            <div class="coloph"><img class="btm__img" src="<?php echo get_template_directory_uri(); ?>/img/btm.png" alt="btm">
        </div>


       <div class="container">
    <div class="footer fixed-bottom">
        <div class="row footer__content" >
            <div class="col-md">
                <p class="footer__content--title">
                    Emile Pineault
                </p>
                <p class="footer__content--paragraph">
          <?php  the_content();?>
                </p>
            </div>
            <div class="col-md">
                <p class="footer__content--title">
                    Contact
                </p>
                <p class="footer__content--paragraph">
                    Email: emilepineault@gmail.com <br>
                    Phone: +1 (514) 267-9531

                </p>
            </div>
            
        </div>
    </div>
</div>
    
   
       <?php get_footer(); ?>
    