<?php
    
    session_start();
    require_once 'conexion.php';

echo <<<_INIT
    <!DOCTYPE html> 
    <html>
      <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>                 
        <script src='node_modules/jquery/dist/jquery.min.js'></script>
        <script src='node_modules/jquery-mobile/js/jquery.mobile.js'></script>
        <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">        
        <link rel='stylesheet' href='styles.css' type='text/css'>    
        <script src='javascript.js'></script>
_INIT;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tatuajes Estudio</title>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300">  
    <!---<link rel="stylesheet" href="css/bootstrap.min.css">      -->                           
    <link rel="stylesheet" href="fontawesome/css/fontawesome-all.min.css">                
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>                       
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/tooplate-style.css">                               
    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this in a modern browser such as latest version of Chrome or Microsoft Edge.");</script>
    
</head>

<body>
<button class="button">Button</button>
    <div id="tm-bg"></div>
    <div id="tm-wrap">
        <div class="tm-main-content">
            <div class="container tm-site-header-container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-md-col-xl-6 mb-md-0 mb-sm-4 mb-4 tm-site-header-col">
                        <div class="tm-site-header">
                            <h1 class="mb-4">Estudio de tatuajes</h1>
                            <img src="img/underline.png" class="img-fluid mb-4">
                            <p>El mejor estudio de tatuajes en toda la republica mexicana </p>        
                        </div>                        
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="content">
                            <div class="grid">
                                <div class="grid__item" id="home-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-home fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Bienvenido</span>
                                            <div class="product__bg"></div>        
                                        </div>                                    
                                        <div class="product__description">
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <h2 class="tm-page-title">Bienvenido a nuestro estudio</h2>        
                                                </div>
                                            </div>                                        
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                    <img src="img/tatuador1.jpg" class="img-fluid mb-3">
                                                    <p>En este estudio podras registrate y conocer un poco mas acerca de nosotros. </p>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                    <p>Puedes pasar por nuestro local para así ir a conocer la magia en persona.</p>
                                                    <p>Y si te decides podrías hacerte un tatuaje y llevarte una experiencia inolvidable. Recuerda que nuestros tatuajes son de alta calidad.</p>
                                                    <img src="img/estudio2.jpg" class="img-fluid">
                                                </div>                                        
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="grid__item" id="team-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-users fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Nuestro equipo</span>
                                            <div class="product__bg"></div>            
                                        </div>                                     
                                        <div class="product__description">
                                            <div class="p-sm-4 p-2">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Conoce a nuestro equipo</h2>        
                                                    </div>
                                                </div>
                                                <div class="row tm-reverse-sm">
                                                    <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                                        <p class="mb-4">En nuestro equipo contamos con los mejores tatuadores a nivel nacional, demostrando sus mejores trabajos sobre la piel de los clientes.Garantizado que saldras con el tatuaje de tus sueños.</p>
                                                        <p class="mb-4">Ejemplo de ello a uno de nuestros tatuadores que sale en la foto que es Tomás Manuel Campos el cual lleva ya mas de 6 años en esto y su gran experiencia habla por si sola</p>
                                                        <p class="mb-5">Los invitamos a pasar, tendran una muy buena atención al cliente y nuestro tatuador será bastate amable y atento.</p>     
                                                    </div>                                                
                                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-lg-0 mb-sm-4 mb-4">
                                                        <img src="img/cro.jpeg" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid__item">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-handshake fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Tatuajes</span>
                                            <div class="product__bg"></div>             
                                        </div>                                                                 
                                        <div class="product__description">
                                            <div class="p-sm-4 p-2">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Tatuajes</h2>        
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <p> Aquí algunos de nuestros trabajos, da click en el que más te guste para comprar y llenar tu piel de mucho estilo.</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="p-sm-4 p-2 tm-img-container">
                                                            <div class="tm-img-slider" id="tmImgSlider">
                                                              <a href="InfoTraBD.php"> <img src="img/tatuajepro.jpg" alt="Image" class="tm-slider-img"> </a>
                                                              <a href="InfoTraBD.php"> <img src="img/tatuaje1.jpg" alt="Image" class="tm-slider-img"> </a>
                                                              <a href="InfoTraBD.php"> <img src="img/tatuaje2.jpg" alt="Image" class="tm-slider-img"> </a>
                                                              <a href="InfoTraBD.php"> <img src="img/tatuaje3.jpg" alt="Image" class="tm-slider-img"> </a>
                                                              <a href="InfoTraBD.php"> <img src="img/tatuaje4.jpg" alt="Image" class="tm-slider-img"> </a>
                                                              <a href="InfoTraBD.php"> <img src="img/tatuaje5.jpg" alt="Image" class="tm-slider-img"> </a>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>       
                                    </div>
                                </div>

                                <div class="grid__item">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-comments fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Contactanos</span>
                                            <div class="product__bg"></div>             
                                        </div>                                                              
                                        <div class="product__description">
                                            <div class="pt-sm-4 pb-sm-4 pl-sm-5 pr-sm-5 pt-2 pb-2 pl-3 pr-3">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Contactanos</h2>        
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-12">
                                                        <p>Te sugerimos ingresar tus datos a la plataforma para asi estar registrado. ¡Gracias!</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                    <form action="InfoTraBD.php" method="post" class="contact-form">
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                  <input type="text" id="contact_name" name="tunombre" class="form-control" placeholder="Name"  required/>
                                                                </div>
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 tm-col-email">
                                                                  <input type="email" id="contact_email" name="correo" class="form-control" placeholder="Email"  required/>
                                                                </div>
                                                            </div>                                                        
                                                            <div class="form-group">
                                                              <textarea id="contact_message" name="texto" class="form-control" rows="9" placeholder="Message" required></textarea>
                                                            </div>
                                                            <input type="submit" class="btn btn-primary tm-btn-submit">Submit</input>
                                                        </form>
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
            <footer>
                
                Layout: Tooplate</p>
            </footer>
        </div> <!-- .tm-main-content -->  
    </div>
    <!-- load JS -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>         <!-- https://jquery.com/ -->    
    <script src="slick/slick.min.js"></script>                  <!-- http://kenwheeler.github.io/slick/ -->  
    <script src="js/anime.min.js"></script>                     <!-- http://animejs.com/ -->
    <script src="js/main.js"></script>  
    <script>      

        function setupFooter() {
            var pageHeight = $('.tm-site-header-container').height() + $('footer').height() + 100;

            var main = $('.tm-main-content');

            if($(window).height() < pageHeight) {
                main.addClass('tm-footer-relative');
            }
            else {
                main.removeClass('tm-footer-relative');   
            }
        }

        /* DOM is ready
        ------------------------------------------------*/
        $(function(){

            setupFooter();

            $(window).resize(function(){
                setupFooter();
            });

            $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright           
        });

    </script>             

</body>
</html>