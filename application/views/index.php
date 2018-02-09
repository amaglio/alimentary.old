<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- OsteriaX -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Alimentary | Mix y frutos secos</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/img/favicon.ico" type="image/x-icon">
    <!-- Font awesome -->
    <link href="<?=base_url()?>assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/slick.css">    
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap-datepicker.css">   
     <!-- Gallery Lightbox -->
    <link href="<?=base_url()?>assets/css/magnific-popup.css" rel="stylesheet"> 
    <!-- Theme color -->
    <link id="switcher" href="<?=base_url()?>assets/css/theme-color/default-theme.css" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">    
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <!-- Prata for body  -->
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    <!-- Tangerine for small title -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>   
    <!-- Open Sans for title -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    <script type="text/javascript">
            CI_ROOT = "<?=base_url()?>";
    </script>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">


        a.icono_menu{
    
            background-color: #299887;
        }

        .logo_web{
            border-radius: 10px 10px 10px 10px;
            -moz-border-radius: 10px 10px 10px 10px;
            -webkit-border-radius: 10px 10px 10px 10px;
            border: 0px solid #000000;
        }

        .icono_menu
        {
          color: white !important;
        }

        .media:first-child 
        {
          min-height:200px;
        }

        #logo_cel
        {
          display:none;
        }

        #cargando
        {
          display:none;
        }

        #mu-about-us{
          padding-bottom: 0px;
        }

        #mu-restaurant-menu{
          padding-bottom: 0px;
        }

        #mu-gallery{
          padding-bottom: 0px;
        } 

        @media screen and (max-width:450px) {

          #logo_cel
          {
            display:block;
          }

           #logo_web
          {
            display:none;
          }

        }



    </style>

  </head>
  <body>

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Header -->
  <header id="mu-header">  
    <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- LOGO -->       
          <a class="navbar-brand " href="index.html"><img class="logo_web" id="logo_web"  src="<?=base_url()?>assets/img/logo.jpg" alt="Logo img">
                                                     <img class="logo_web" id="logo_cel"  src="<?=base_url()?>assets/img/logo_solo.png" alt="Logo img">
          </a>  
         

        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li><a href="#mu-slider">INICIO</a></li>
            <li><a href="#mu-about-us">PROMOCIONES</a></li>
            <li><a href="#mu-restaurant-menu">MIX y GRANOLAS</a></li>   
            <li><a href="#mu-gallery">FRUTOS SECOS</a></li>                    
            <li><a href="#mu-reservation">CONTACTANOS</a></li>                       
            <li>  
                <div class="mu-footer-social">
                    <a class="icono_menu" href="#"><span class="fa fa-facebook "></span></a>
                    <a class="icono_menu" href="#"><span class="fa fa-twitter  "></span></a> 
                    <a class="icono_menu" href="#"><span class="fa fa-youtube "></span></a>
                </div>
            </li> 
          </ul>                            
        </div>       
      </div>          
    </nav> 
  </header>
  
  <!-- Home / Carrusel -->
  <section id="mu-slider">
    <div class="mu-slider-area"> 
      <div class="mu-top-slider">
        <div class="mu-top-slider-single">
          <img src="<?=base_url()?>assets/img/slider/home1.jpg" alt="img">
 
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Bienvenidos</span>
            <h2 class="mu-slider-title">Alimentary</h2>
            <p>Vivi mas sano</p>           
            
          </div>
 
        </div>
 
        <div class="mu-top-slider-single">
          <img src="<?=base_url()?>assets/img/slider/home2.jpg" alt="img">
 
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Mix Energetico</span>
            <h2 class="mu-slider-title">$167</h2>
            <p>No te pierdas esta promocion de energia</p> 
          </div>
        
        </div>
 
        <div class="mu-top-slider-single">
          <img src="<?=base_url()?>assets/img/slider/home3.jpg" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Granola</span>
            <h2 class="mu-slider-title">$250</h2>
            <p>La granola es la mejor forma de empezar tus desayunos.</p>           
            
          </div>
          
        </div>
 
      </div>
    </div>
  </section>
  
  <!-- Promociones -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">

            <div class="mu-title">
              <span class="mu-subtitle">Descubri nuestras</span>
              <h2>Promociones</h2>
            </div>

            <?php foreach ($promociones as $row): ?>

              <div class="row">
                <div class="col-md-6">
                 <div class="mu-about-us-left">     
                  <img src="<?=base_url()?>assets/img/promociones/<?=$row['foto']?>" alt="img">           
                  </div>
                </div>
                <div class="col-md-6">
                   <div class="mu-about-us-right">
                   <h3><?=$row['titulo']?> $<?=$row['precio']?> </h3>
                   <p><?=$row['descripcion']?></p> 
                  </div>
                </div>
              </div>

            <?php endforeach;  ?>

          </div>
        </div>
      </div>
    </div>
  </section>
 
  <!-- Mix y Granolas -->
  <section id="mu-restaurant-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-restaurant-menu-area">

            <div class="mu-title">
              <span class="mu-subtitle">Proba nuestros</span>
              <h2>Mix y granolas</h2>
            </div>
            
            <div class="mu-restaurant-menu-content">
 
              <!-- Tab panes -->
              <div class="tab-content">

                <div class="tab-pane fade in active" id="breakfast">
                  <div class="mu-tab-content-area">
                    <div class="row">

                     <?php
                        $cantidad_mix = count($mix_granola);
                        $contador_mix = 0;
                     ?>
                     <div class="col-md-6">

                        <div class="mu-tab-content-left">

                          <ul class="mu-menu-item-nav">
                          
                          <?php for ($i=0; $i <  ($cantidad_mix / 2); $i++):  ?>
                         
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="<?=base_url()?>assets/img/productos/<?=$mix_granola[$i]['foto']?>" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#"><?=$mix_granola[$i]['nombre']?></a></h4>
                                  <span class="mu-menu-price">$<?=$mix_granola[$i]['precio']?></span>
                                  <p><?=$mix_granola[$i]['descripcion']?></p>
                                </div>
                              </div>
                            </li>
                          
                          <?php endfor; ?>

                          </ul>   
                        </div>
                      </div>

                      <div class="col-md-6">

                        <div class="mu-tab-content-right">

                          <ul class="mu-menu-item-nav">
                          
                          <?php for( $i = ($cantidad_mix / 2); $i < $cantidad_mix ; $i++):  ?>
                         
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="<?=base_url()?>assets/img/productos/<?=$mix_granola[$i]['foto']?>" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#"><?=$mix_granola[$i]['nombre']?></a></h4>
                                  <span class="mu-menu-price">$<?=$mix_granola[$i]['precio']?></span>
                                  <p><?=$mix_granola[$i]['descripcion']?></p>
                                </div>
                              </div>
                            </li>
                          
 
                          
                          <?php endfor; ?>

                          </ul>   
                        </div>
                      </div>

        

                   </div>
                 </div>
                </div>

                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Frutos secos -->
  <section id="mu-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-restaurant-menu-area">

            <div class="mu-title">
              <span class="mu-subtitle">Proba nuestros</span>
              <h2>Frutos secos</h2>
            </div>
            
            <div class="mu-restaurant-menu-content">
 
               <!-- Tab panes -->
              <div class="tab-content">

                <div class="tab-pane fade in active" id="breakfast">
                  <div class="mu-tab-content-area">
                    <div class="row">

                     <?php
                        $cantidad_frutos = count($frutos_secos);
                        $contador_mix = 0;
                     ?>
                     <div class="col-md-6">

                        <div class="mu-tab-content-left">

                          <ul class="mu-menu-item-nav">
                          
                          <?php for ($i=0; $i <  ($cantidad_frutos / 2); $i++):  ?>
                         
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="<?=base_url()?>assets/img/productos/<?=$frutos_secos[$i]['foto']?>" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#"><?=$frutos_secos[$i]['nombre']?></a></h4>
                                  <span class="mu-menu-price">$<?=$frutos_secos[$i]['precio']?></span>
                                  <p><?=$frutos_secos[$i]['descripcion']?></p>
                                </div>
                              </div>
                            </li>
                          
                          <?php endfor; ?>

                          </ul>   
                        </div>
                      </div>

                      <div class="col-md-6">

                        <div class="mu-tab-content-right">

                          <ul class="mu-menu-item-nav">
                          
                          <?php for( $i = ($cantidad_frutos / 2); $i < $cantidad_frutos ; $i++):  ?>
                         
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" style="height: 100px !important" src="<?=base_url()?>assets/img/productos/<?=$frutos_secos[$i]['foto']?>" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#"><?=$frutos_secos[$i]['nombre']?></a></h4>
                                  <span class="mu-menu-price">$<?=$frutos_secos[$i]['precio']?></span>
                                  <p><?=$frutos_secos[$i]['descripcion']?></p>
                                </div>
                              </div>
                            </li>
                          
 
                          
                          <?php endfor; ?>

                          </ul>   
                        </div>
                      </div>

        

                   </div>
                 </div>
                </div>

                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contacto -->
  <section id="mu-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-reservation-area">

            <div class="mu-title">
              <span class="mu-subtitle">Realizá tu</span>
              <h2>Consulta</h2>
            </div>
            
            <form  id="contactForm" name="sentMessage" >
              <div class="mu-reservation-content">
                <p> Envianos tu mensaje, tus pregunta o realiza tus pedidos.</p>

                <div class="col-md-6">
                  <div class="mu-reservation-left">
                    
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">                       
                            <input name="nombre" id="nombre" type="text" class="form-control" placeholder="Nombre" required>
                          </div>
                        </div>
                         <div class="col-md-12">
                          <div class="form-group">                       
                            <input name="apellido" id="apellido"  type="text" class="form-control" placeholder="Apellido" required>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">                        
                            <input name="email" id="email" type="email" class="form-control" placeholder="Email" required>
                          </div>
                        </div> 
                      </div>
                       
                  </div>
                </div>

                <div class="col-md-6  ">
                   <div class="col-md-12" style="padding-top: 30px;">
                      <div class="form-group">
                        <textarea name="mensaje" id="mensaje" style="border-radius: 4px; width: -webkit-fill-available;" rows="7" required></textarea>
                      </div>
                    </div>
                    <div class="col-md-12"  style="text-align: center;">
                      <div id="success"></div>
                      <button  id="sendMessageButton"  type="submit" class="mu-readmore-btn">Enviar <img id="cargando" style="width:20px; " class="logo_web" src="<?=base_url()?>assets/img/loading.gif" alt="Logo img"></button>
                    </div>
                </div>
              </form> 

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
  
  <footer id="mu-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="mu-footer-area">
           <div class="mu-footer-social">
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-twitter"></span></a> 
            <a href="#"><span class="fa fa-youtube"></span></a>
          </div>
          <div class="mu-footer-copyright">
            <p>© Copyright <a rel="nofollow" href="http://markups.io">Alimentary.com</a>. Todos los derechos reservados.</p>
          </div>         
        </div>
      </div>
      </div>
    </div>
  </footer>
  
  <!-- jQuery library -->
  <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="<?=base_url()?>assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="<?=base_url()?>assets/js/simple-animated-counter.js"></script>
  <!-- Gallery Lightbox -->
  <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap-datepicker.js"></script> 
  <!-- Ajax contact form  -->
  <script type="text/javascript" src="<?=base_url()?>assets/js/app.js"></script>
 
  <!-- Custom js -->
  <script type="text/javascript" src="<?=base_url()?>assets/js/custom.js"></script> 

  <!-- Email js -->
  <script type="text/javascript" src="<?=base_url()?>assets/js/contact_me.js"></script> 

  </body>
</html>

