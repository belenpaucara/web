<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="demo-Estyle.css">
    <link rel="stylesheet" href="orbit-1.2.3.css">
    <link rel="stylesheet" href="fonts.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    
    <!-- Attach our CSS -->
    <!-- Attach necessary JS -->
    <script type="text/javascript" src="jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="jquery.orbit-1.2.3.js"></script>
    <script type="text/javascript" src="jquery.orbit-1.2.3.min.js"></script>
    <script type="text/javascript">
        function dibujarCanvas(){
            //variables
            var canvas = document.getElementById('miCanvas');
            var contexto = canvas.getContext('2d');
            contexto.fillStyle = 'skyblue';
            contexto.fillRect (0,0,450,500);
            //edicion del primer trazo
            contexto.beginPath();
            contexto.moveTo(10,80);
            contexto.lineTo(10,50);
            contexto.lineTo(40,10);
            contexto.lineTo(70,40);
            contexto.lineTo(170,40);
            contexto.lineTo(170,80);
            //edicion del nombre logo
            contexto.font = "20px Arial";
            contexto.fillStyle = "#fff";
            contexto.fillText("INNOVATIVE",45,70);
            contexto.lineWidth = 7;
            contexto.strokeStyle = 'blue';
            contexto.stroke();
            //edicion de ventanas
            contexto.beginPath();
            contexto.moveTo(40,30);
            contexto.lineTo(34,30);
            contexto.moveTo(43,30);
            contexto.lineTo(49,30);
           
            contexto.moveTo(40,40);
            contexto.lineTo(34,40);
            contexto.moveTo(43,40);
            contexto.lineTo(49,40);
            
            contexto.strokeStyle ="black"
            contexto.stroke();
            //calaminas edicion
            contexto.beginPath();
            contexto.moveTo(46,7);
            contexto.lineTo(60,20);
            contexto.lineTo(70,9);
            contexto.lineTo(60,12);
            contexto.lineWidth = 1;
            contexto.fillStyle = "black";
            contexto.fill();
            //edicion calamina grande
            contexto.beginPath();
            contexto.moveTo(65,25);
            contexto.lineTo(75,13);
            contexto.lineWidth = 7;
            contexto.lineTo(95,33);
            contexto.strokeStyle = "blue"
            contexto.stroke();
            //ultimo escrito
            contexto.beginPath();
            contexto.fillText("-A tu Servicio-",40,88);
            contexto.font = "3px Arial";
            contexto.fillStyle = "black";
            contexto.fill(); 
            contexto.stroke();

            
        }

    </script>
    
        <!--[if IE]>
             <style type="text/css">
                 .timer { display: none !important; }
                 div.caption { background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1; }
            </style>
        <![endif]-->
    
    <!-- Run the plugin -->
    <script type="text/javascript">
        $(window).load(function() {
            $('#featured').orbit();
        });
    </script>
</head>
    <title>Venta de Casas</title>
<body onload="dibujarCanvas();">
  
    <div class="social">
        <ul>
            <li><a href="http://www." class="icon-facebook"></a></li>
            <li><a href="http://www." class="icon-twitter"></a></li>
            <li><a href="http://www." class="icon-connection"></a></li>
            <li><a href="http://www." class="icon-mail3"></a></li>
            <li><a href="http://www." class="icon-paypal"></a></li>
        </ul>
    </div>
    <?php include('header.php'); ?>
    
      <div class="container">
        <!-- =======================================
        
        THE ACTUAL ORBIT SLIDER CONTENT 
        
        ======================================= -->
                <div id="featured"> 
                    <a href=""><img src="dummy-images/Slider1.jpg"/></a>
                    <img src="dummy-images/Slider2.jpg" data-caption="#htmlCaption"/>
                    <img src="dummy-images/Slider3.jpg" alt="">
                    <img src="dummy-images/Slider4.jpg" alt="" >
                    <img src="dummy-images/Slider5.jpg" alt="">
                    <img src="dummy-images/Slider6.jpg" alt="">
                </div>
                <!-- Captions for Orbit -->
              </div>
        
      <?php include('aside.php')?>

              <section>
                <h1>COMPRA O RENTA TU PROPIEDAD IDEAL</h1>
                <article class="menu-article">
                    <p id="menu-descripcion">"INNOVATIVE" Es un empresa que te ofrece una gran cantidad de servicios referidos a inmuebles y apartamentos de renta con una gran variedad y lugar con estilos unicos.Estos Inmuebles son los destacados y ansiados por nuestro clientes, ofrecemos una gran variedad con un bajo costo, Tenemos promociones y descuetos a
                    pedido de nuestro clientes como los eventos "calendario" y mucho mas en "INNOVATIVE"</p>
                <video width="650" autoplay muted controls>
                    <source src="img/Video Menu.mp4" type="video/mp4">
                </video>
                </article>
                <h1>Nos Encargamos De Toda La Gestión De Venta Y Renta</h1> 	
              <article class="menu-article">
                <img id ="promo-menu" src="img/Promocion3.jpg" alt="" width=400 height=700>
                <p id="menu-descripcion">
                    Enterate de nuestra mas reciente Promocion Descuento desde $60,000 gran Venta ¡SOLO HASTA EL 26 DE DICIEMBRE 2020!
                </p>
                <a href="#">COMPRAR</a>
            </article>
            <article">
                <h1>TU PROPIEDAD EN VENTA O RENTA CON "INNOVATIVE"</h1>
              <h1>Inmobiliarias y apartamentos</h1>
                <p class="p-menu">Consulta nuestros proyectos web a medida para agencias inmobiliarias, portales de reserva de casas rurales o apartamentos, y otros servicios relacionados con las viviendas y propiedades. Las webs inmobiliarias acostumbran a tener mucho producto, por lo que será muy importante una correcta ordenación de la información, y la implantación de sistemas de filtros y ordenación, para orientar al usuario para encontrar la propiedad que busca.
                </p>
                   <p class="p-menu">En el caso de las webs de reserva de apartamentos, la clave residirá en tener un buen motor de reservas, ya sea propio o incorporado de herramientas externas. El usuario valorará también tener una buena política de ofertas y unos testimonios que refuercen nuestra oferta.
                    </p>

                   <p class="p-menu">En las webs del sector de la inmobiliaria y la construcción el usuario deberá sentirse como en casa.
                </p>
        
                  </article>
              </section>
              
              <a href="formulario.php" class="boton-flotante">¡CALIFICANOS!</a>
            <?php include('footer.php'); ?>
                
             
</body>
</html>