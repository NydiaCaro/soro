<?php get_header(); ?>


            
        
            <section>
              
              <h1 id="titulo-principal">Escuela de Música <br> Enrique Soro</h1> 
              
              <div class="container">

                <div id="carousel" class="carousel slide col-md-8 offset-md-2 col-12" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="<?php bloginfo('template_url') ?>/assets/img/f00.jpg" alt="First slide">
                    </div> <!-- cierra carrusel-item active-->
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?php bloginfo('template_url') ?>/assets/img/f0.jpg" alt="Second slide">
                    </div> <!--cierra carousel-item-->
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?php bloginfo('template_url') ?>/assets/img/foto3.jpg" alt="Third slide">
                    </div>
                  </div> <!--cierra carrusel-inner-->
       <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
                </div> <!-- cierra di id carrusel-->
                
              </div> <!--cierra container-->

            </section>

             <div class="container">

            <section>

              <div class="row">

               <?php
                  $arg = array(
                    'post_type'    => 'nosotros',
                    'posts_per_page' => 6,
                    'paged' => $paged

                  );
                  $get_arg = new WP_Query( $arg );
                  while ( $get_arg->have_posts() ) {
                    $get_arg->the_post();
                ?>


                <div class="col-md-6 col-sm-12 col-xs-12">

                  <div id="quienes somos">
                    <?php the_post_thumbnail('custom-size-blog', array('id' => 'foto-nosotros')); ?>
                    
                  </div> <!--cierra quienes somo-->
                  
                </div> <!--cierra col-md-6-->



                <div class="col-md-6 col-sm-12 col-xs-12">

                 
                  <div class="card-body">
                    <h5 id="titulo-1"class="card-title"><?php the_title() ?></h5>
                    <p id="parrafo-1"class="card-text"><?php the_content() ?></p>
                    

                  </div>
                </div> <!--cierra col-md-6-->
              </div> <!--cierra row-->

              <?php } wp_reset_postdata(); ?>

            </section>

             <section class="col-12">

             <div class="row">

              <div class="col-md-6">


                <img id="foto-profesores" src="<?php bloginfo('template_url') ?>/assets/img/f20.jpg" alt="Card image cap">

              </div> <!--cierra col-md-6-->


              <div class="col-md-6 tabla">

          <table class="table table-borderless">
            <thead>

              <h5 id="titulo-2">Profesores e Instrumentos</h5>
              
            </thead>
            <tbody>
              <tr>
                
                <td>Marcelo Salinas</td>
                <td>Guitarra</td>
              
              </tr>
              <tr>
               
                <td>Rolando Jeldres</td>
                <td>Bajo y Contrabajo</td>
                
              </tr>
               <tr>
                
                <td>Katherine Araya</td>
                <td>Violín y Viola</td>
               
              </tr>
               <tr>
                
                <td>Andrea Sepúlveda</td>
                <td>Violoncello</td>
                
              </tr>
               <tr>
                
                <td>Alain Báez</td>
                <td>Flauta dulce y Traversa</td>
                
              </tr>
               <tr>
                
                <td>Jonathan Gatica</td>
                <td>Saxofón</td>
                
              </tr>
               <tr>
                
                <td>Vladimir Córdova</td>
                <td>Clarinete</td>
                
              </tr>
               <tr>
                
                <td>Ignacia Inostroza</td>
                <td>Canto</td>
               
              </tr>
               <tr>
                
                <td>Mauricio Ruiz</td>
                <td>Trompeta</td>
                
              </tr>

              <tr>
                
                <td>Francisco Vílches</td>
                <td>Trombón</td>
                
              </tr>

              <tr>
                
                <td>Cynthia Burgos</td>
                <td>Piano</td>
                
              </tr>

              <tr>
                
                <td> Alexis Salazarf</td>
                <td>Piano</td>
                
              </tr>

              <tr>
                
                <td>Luis Silva</td>
                <td>Batería</td>
                
              </tr>

              <tr>
                
                <td>Sergio Ñanculef</td>
                <td>Instrumentos Latinoaméricano</td>
                
              </tr>

            </tbody>
          </table>
                 

            </div> <!-- cierra col-md-6-->
          </div> <!--cierra row-->
          </section> <!-- cierra section class-12-->

            <section class="col-12">

            <div class="row">

               <?php
                  $arg = array(
                    'post_type'    => 'agrupaciones',
                    'posts_per_page' => 6,
                    'paged' => $paged

                  );
                  $get_arg = new WP_Query( $arg );
                  while ( $get_arg->have_posts() ) {
                    $get_arg->the_post();
                ?>

             <div class="col-md-6">


              <?php the_post_thumbnail('custom-size-blog', array('id' => 'foto-agrupaciones')); ?>

             
            </div> <!-- cierra col-md-6-->

            <div class="col-md-6">

              <div class="card-body">
                <h5 id="titulo-3"><?php the_title() ?></h5>
                
                <table class="table"><?php the_content() ?></table>
                

              </div> <!--cierra car body-->
            </div> <!--cierra col-md-6-->
          </div> <!--cierra row-->

        <?php } wp_reset_postdata(); ?>

          </section> <!-- cierra section class-12-->


            <hr class="mt-5">


            <h1 id="galería">Galería de Fotos </h1>

            <div class="container">
           

        <div class="row">
          <div class="row">
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                      <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                         data-image="<?php bloginfo('template_url') ?>/assets/img/f17.jpg"
                         data-target="#image-gallery">
                          <img class="img-thumbnail"
                               src="<?php bloginfo('template_url') ?>/assets/img/f17.jpg"
                               alt="Another alt text">
                      </a>
                  </div>
                  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                      <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                         data-image="<?php bloginfo('template_url') ?>/assets/img/f18.jpg"
                         data-target="#image-gallery">
                          <img class="img-thumbnail"
                               src="<?php bloginfo('template_url') ?>/assets/img/f18.jpg"
                               alt="Another alt text">
                      </a>
                  </div>

                  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                      <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                         data-image="<?php bloginfo('template_url') ?>/assets/img/f19.jpg"
                         data-target="#image-gallery">
                          <img class="img-thumbnail"
                               src="<?php bloginfo('template_url') ?>/assets/img/f19.jpg"
                               alt="Another alt text">
                      </a>
                  </div>
                  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                      <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                         data-image="<?php bloginfo('template_url') ?>/assets/img/foto13.jpg"
                         data-target="#image-gallery">
                          <img class="img-thumbnail"
                               src="<?php bloginfo('template_url') ?>/assets/img/foto13.jpg"
                               alt="Another alt text">
                      </a>
                  </div>

              <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h4 class="modal-title" id="image-gallery-title"></h4>
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                              </button>

                              <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                              </button>
                          </div>
                      </div>
                  </div>
              </div>
        </div>
      </div>

      </div> <!--cierra container-->   

          

          <section>

            <h1 class="tgaleria-videos">Galería de Videos </h1>

            <div class="container">

<div class="row">
  
  <div class="col-lg-6 col-sm-12">

          <div class="card rounded">
       <iframe width="100%" height="315" src="https://www.youtube.com/embed/tjbBXzMh9tA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> 
         </div>
       </div>

            <div class="col-lg-6 col-sm-12">
       <div class="card rounded">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/2p43CSqdSqM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
         </div>
    </div>

</div>

    <div class="row">

        <div class="col-lg-6 col-sm-12">

          <div class="card rounded">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/1EBKRyUjLHk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
         </div>
       </div>
            <div class="col-lg-6 col-sm-12">
       <div class="card rounded">
           <iframe width="100%" height="315" src="https://www.youtube.com/embed/SmVhAG621k0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
         </div>
    </div>

</div>

<div class="row">

       <div class="col-lg-6 col-sm-12">

          <div class="card rounded">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/qN2JjMqyOgQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> 
         </div>
       </div>
            <div class="col-lg-6 col-sm-12">
       <div class="card rounded">
           <iframe width="100%" height="315" src="https://www.youtube.com/embed/s73E1MUmeos" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
         </div>
    </div>

</div>

<div class="row">

         <div class="col-lg-6 col-sm-12">

            <div class="card rounded">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/zxjFD2dl3jo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> 
           </div>
         </div>
              <div class="col-lg-6 col-sm-12">
         <div class="card rounded">
             <iframe width="" height="315" src="https://www.youtube.com/embed/pt30Wx3KmdA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
           </div>
      </div>

  </div>

    </div>
    
       

          </section>
          <section class="noticias">
            <div class="container">
              <ul>              
                <?php
                  $arg = array(
                    'post_type'     => 'post',
                    'posts_per_page' => 6
                  );
                
                  $get_arg = new WP_Query( $arg );
                
                  while ( $get_arg->have_posts() ) {
                    $get_arg->the_post();
                  ?>
                    
                  <li>
                    <a href="<?php the_permalink() ?>">
                      <h3 class="titulo"><?php the_title() ?></h3>
                      <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
                      <p><?php the_excerpt() ?></p>
                    </a>
                  </li>
                
                  <?php } wp_reset_postdata();
                ?>
              </ul>

            </div>
          </section>


           <hr class="mt-5">

           <div class="container">
             <h1 id="Contacto">Contacto</h1>
            <div class="row">
              <div class="col-md-6">  
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 float-left">
            <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]') ?>
  
          </div>
        </div>
          <div class="col-sm">
             <div class="mapa">
            <?php get_sidebar() ?>
          </div>
          


          </div> <!--cierra row-->
          </div>
          </div> <!--cierra container-->


          </section> <!--cierra section col-12-->



          <hr class="mt-5">

 
<?php get_footer(); ?> 