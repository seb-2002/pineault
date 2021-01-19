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


            <div class="d-flex table-main align-items-center flex-column flex-md-row table-item">
        <div class="column-1">
            <p class="table-item-1"> <?php the_title(); ?> </p>
            <!-- <p class="table-item-2"> &nbsp; / &nbsp; </p> -->
        </div>
        <div class="column-2">
            <p class="table-item-3"> <?php echo get_the_excerpt(); ?> </p>
        </div>
        
    </div>
    </a>

    <hr>
         

          <?php };
         
         wp_reset_query(); ?>
 <?php 

          $args = array(
            'post_type' => 'project',
          );

          $projects = new WP_Query($args);
          
          while($projects -> have_posts()) {
              $projects -> the_post();
          


        ?>

           <a href="<?php the_permalink(); ?>">


            <div class="d-flex table-main align-items-center flex-column flex-md-row table-item">
        <div class="column-1">
            <p class="table-item-1"> <?php the_title(); ?> </p>
            <!-- <p class="table-item-2"> &nbsp; / &nbsp; </p> -->
        </div>
        <div class="column-2">
            <p class="table-item-3"> <?php echo get_the_excerpt(); ?> </p>
        </div>
        
    </div>
    </a>

    <hr>
         

          <?php };
         
         wp_reset_query(); ?>
 <?php 

          $args = array(
            'post_type' => 'project',
          );

          $projects = new WP_Query($args);
          
          while($projects -> have_posts()) {
              $projects -> the_post();
          


        ?>

           <a href="<?php the_permalink(); ?>">


            <div class="d-flex table-main align-items-center flex-column flex-md-row table-item">
        <div class="column-1">
            <p class="table-item-1"> <?php the_title(); ?> </p>
            <!-- <p class="table-item-2"> &nbsp; / &nbsp; </p> -->
        </div>
        <div class="column-2">
            <p class="table-item-3"> <?php echo get_the_excerpt(); ?> </p>
        </div>
        
    </div>
    </a>

    <hr>
         

          <?php };
         
         wp_reset_query(); ?>
 <?php 

          $args = array(
            'post_type' => 'project',
          );

          $projects = new WP_Query($args);
          
          while($projects -> have_posts()) {
              $projects -> the_post();
          


        ?>

           <a href="<?php the_permalink(); ?>">


            <div class="d-flex table-main align-items-center flex-column flex-md-row table-item">
        <div class="column-1">
            <p class="table-item-1"> <?php the_title(); ?> </p>
            <!-- <p class="table-item-2"> &nbsp; / &nbsp; </p> -->
        </div>
        <div class="column-2">
            <p class="table-item-3"> <?php echo get_the_excerpt(); ?> </p>
        </div>
        
    </div>
    </a>

    <hr>
         

          <?php };
         
         wp_reset_query(); ?>
 <?php 

          $args = array(
            'post_type' => 'project',
          );

          $projects = new WP_Query($args);
          
          while($projects -> have_posts()) {
              $projects -> the_post();
          


        ?>

           <a href="<?php the_permalink(); ?>">


            <div class="d-flex table-main align-items-center flex-column flex-md-row table-item">
        <div class="column-1">
            <p class="table-item-1"> <?php the_title(); ?> </p>
            <!-- <p class="table-item-2"> &nbsp; / &nbsp; </p> -->
        </div>
        <div class="column-2">
            <p class="table-item-3"> <?php echo get_the_excerpt(); ?> </p>
        </div>
        
    </div>
    </a>

    <hr>
         

          <?php };
         
         wp_reset_query(); ?>
 <?php 

          $args = array(
            'post_type' => 'project',
          );

          $projects = new WP_Query($args);
          
          while($projects -> have_posts()) {
              $projects -> the_post();
          


        ?>

           <a href="<?php the_permalink(); ?>">


            <div class="d-flex table-main align-items-center flex-column flex-md-row table-item">
        <div class="column-1">
            <p class="table-item-1"> <?php the_title(); ?> </p>
            <!-- <p class="table-item-2"> &nbsp; / &nbsp; </p> -->
        </div>
        <div class="column-2">
            <p class="table-item-3"> <?php echo get_the_excerpt(); ?> </p>
        </div>
        
    </div>
    </a>

    <hr>
         

          <?php };
         
         wp_reset_query(); ?>
 <?php 

          $args = array(
            'post_type' => 'project',
          );

          $projects = new WP_Query($args);
          
          while($projects -> have_posts()) {
              $projects -> the_post();
          


        ?>

           <a href="<?php the_permalink(); ?>">


            <div class="d-flex table-main align-items-center flex-column flex-md-row table-item">
        <div class="column-1">
            <p class="table-item-1"> <?php the_title(); ?> </p>
            <!-- <p class="table-item-2"> &nbsp; / &nbsp; </p> -->
        </div>
        <div class="column-2">
            <p class="table-item-3"> <?php echo get_the_excerpt(); ?> </p>
        </div>
        
    </div>
    </a>

    <hr>
         

          <?php };
         
         wp_reset_query(); ?>
 


      
 
       

    </div>
</div>

  
      
        <img class="header__img" src="<?php echo get_template_directory_uri(); ?>/img/newtop2021.svg" alt="header">
     
            <div class="bground_img_1" ></div>
            <div class="bground_img_2" ></div>
            <div class="bground_img_3"  ></div>
            <div class="bground_img_4" id="trigger-footer"></div>
            <div class="bground_img_1" ></div>
            <div class="bground_img_2" id="trigger-footer-out" ></div>
            <div class="bground_img_3" ></div>
            <div id="page-bottom" class="bground_img_4"></div>
 


       <div class="container">
    <div id="myFooter" class="footer fixed-bottom">

            <div class="row footer__content" 
            data-aos="fade-up" data-aos-anchor="#trigger-footer"
            >
                <div class="col-md-9">
                    <p class="footer__content--title">
                        Emile Pineault
                    </p>
                    <div class="footer__content--paragraph row">
              <?php  the_content();?>
                    </div>
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

       <div class="container">
    <div  class="footer fixed-bottom">

            <div class="row footer__content" 
            data-aos="fade-up" data-aos-anchor="#page-bottom"
            >
       <div class="col-md-9">
                    <p class="footer__content--title">
                        Emile Pineault
                    </p>
                    <div class="footer__content--paragraph row">
              <?php  the_content();?>
                    </div>
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
    
