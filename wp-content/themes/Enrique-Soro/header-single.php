 <!DOCTYPE html>
 <html>
          
 <head>
             <meta charset="utf-8">
   			 <meta name="viewport" content="width=device-width, initial-scale=1.0">
   			 <meta http-equiv="X-UA-Compatible" content="IE=edge">



             <title>Enrique Soro</title>

             <?php wp_head() ?>
            
          </head>
          <body>

         <?php
          $custom_logo_id = get_theme_mod( 'custom_logo' );
           $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            ?>

            <header>



              <nav class="navbar navbar-expand-lg navbar-light ">
                
                  <?php echo get_template_part('template_part/logo') ?>
                  <?php echo get_template_part('template_part/nav_button') ?>
                
            <?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
            <?php wp_nav_menu( array( 
              'theme_location'  => 'footer-menu',
              'container_id'    => 'navbarSupportedContent',
              'container_class' => 'collapse navbar-collapse',
              'items_wrap'      => '<ul class="navbar-nav mr-auto">%3$s</ul>'
              )
            ); ?>
            <?php } ?>
            

              </nav> <!--cierra nav class navbar-expand-->


  </header>
            
        