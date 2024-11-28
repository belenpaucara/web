<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="demo-Estyle.css">
    <link rel="stylesheet" href="orbit-1.2.3.css">
    <link rel="stylesheet" href="fonts.css">
<title>Galeria</title>
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
</head>
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
    <img src="img/Galeriaimg.jpg" alt="" width="1512">
    <div class="lemacontacto">
                <h1>GALERIA</h1>
                <P>Comienza tu tienda en línea, explorando explorando hogares ideales para tí y tu familia <br>Hecha por diseñadores</P>
    </div>
    
    <?php include('aside.php')?>

                
    <section id="section-galeria">
    <h1>¡DESCUBRELOS!</h1>
    <div class="contenedor-img ejemplo-1">  
                <img src="img/galeria1.jpg" width="400px" height="300px"/>  
                <div class="mascara">  
                    <h2>ALMINA SAN ANGEL "A"</h2>  
                    <p id="subgaleria">
                         Lomas de los Ángeles Tetelpan, Ciudad de México
                        Desde: $5,630,300 MXN
                        50 Disponibles</p>
                    <a href="https://coreanoinmuebles.com/property/2" class="link">Leer mas</a>  
                    <p id="descripcion-galeria">¡Bienvenido a Almina, donde la ubicación excepcional y el lujo se encuentran para crear tu hogar ideal! Situado estratégicamente, tendrás acceso rápido y conveniente a Periférico Sur, Insurgentes Sur y Santa Fe en pocos minutos. A tan solo 5 minutos de las exclusivas tiendas y plazas de Altavista, y muy cerca de Ciudad Universitaria y los mejores restaurantes de Insurgentes, Almina te coloca en el corazón de todo lo que necesitas.</p>
                </div>  
           </div>
           <div class="contenedor-img ejemplo-2">  
            <img src="img/galeria2.jpg" width="500px" height="400px"/>  
            <div class="mascara"></div>
            <div class="contenido">
                <h2>Galileo 218</h2>  
                <p id="subgaleria">Polanco IV Sección, Ciudad de México
                    Desde: $16,860,000 MXN
                    4 Disponibles</p>
                <a href="https://coreanoinmuebles.com/property/9" class="link">Leer mas</a>  
                <p id="descripcion-galeria">En Galileo 218, hemos creado un oasis de lujo y comodidad en el corazón de Polanco. Con solo 11 exclusivos departamentos en preventa, cada uno de ellos diseñado con una atención meticulosa a los detalles, estamos seguros de que encontrarás tu hogar perfecto. Galileo 218 es más que un lugar para vivir; es una declaración de elegancia y exclusividad. Nuestros departamentos.</p>
            </div>
            <p>En Galileo 218, hemos creado un oasis de lujo y comodidad en el corazón de Polanco. Con solo 11 e</p>
           
       </div>
       
       <div class="contenedor-img ejemplo-3">  
        <img src="img/galeria3.jpg" width="400px" height="300px"/>  
        <div class="mascara">
            <h2> Dessea Interlomas "1"</h2>  
            <p id="subgaleria">Hacienda de las Palmas, Estado de México
                Desde: $9,298,000 MXN
                9 Disponibles</p>
            <a href="https://coreanoinmuebles.com/property/7" class="link">Ver más</a> 
            <p id="descripcion-galeria">Descubre Dessea, un exclusivo desarrollo ubicado en la prestigiosa zona de Interlomas, donde el lujo y el confort se encuentran en cada rincón. Este enclave residencial está rodeado de las mejores instituciones educativas, como la Universidad Anáhuac y los colegios Sierra Nevada, Cumbres, Montessori y Greengates. A solo 15 minutos de la Ciudad de México y a 3 minutos del Hospital Ángeles Lomas, Dessea ofrece una ubicación inmejorable.</p> 
        </div>
   </div>
   <div class="contenedor-img ejemplo-4">  
    <img src="img/galeria4.jpg" width="400px" height="300px"/>  
    <div class="mascara">
        <h2>Prosperidad 42</h2>  
        <p id="subgaleria">Escandón II Sección, Ciudad de México
            Desde: $4,081,000 MXN
            35 Disponibles</p>
        <a href="#" class="link">Leer mas</a>
        <p id="descripcion-galeria">Ubicado en la Colonia Escandón, en la Alcaldía Miguel Hidalgo se encuentra el desarrollo Prosperidad 42, vive cerca de la Condesa, Roma y Nápoles. Se puede acceder a este por 4 vías principales como Av. Revolución, Av. Benjamín Franklin, Viaducto Miguel Alemán y Av. Insurgentes Sur. El metro más cercano es Patriotismo y Metrobús Escandón. A unos minutos de WTC, Plaza Dakota, Plaza Insurgentes, Bosque de Chapultep.</p>  
    </div>
</div>
<div class="contenedor-img ejemplo-4-1">  
<img src="img/galeria5.jpg" width="400px" height="300px"/>  
<div class="mascara">
    <h2>Ventanas Galarza</h2>  
    <p id="subgaleria">Lomas de Vista Hermosa, Ciudad de México
        Desde: $31,047,000 MXN
        4 Disponibles</p>
    <a href="#" class="link">Leer mas</a>
    <p id="descripcion-galeria">Vive la exclusividad con tu propio estilo En el mundo inmobiliario el lujo y la exclusividad son parte de una inversión segura. En Ventanas Bosques cuidamos cada detalle para ofrecerte un proyecto que lo tiene todo. Arquitectura de autor, a cargo del despacho Artigas Arquitectos, con 75 años de experiencia; diversidad de amenidades pensadas para cada integrante de la familia, espectaculares vistas al Club de Golf Bosques y departamentos de hasta 900 m2.</p>  
</div>
</div>
<div class="contenedor-img ejemplo-5">  
<img src="img/galeria6.jpg"  width="400px" height="300px"/>  
<div class="mascara">
    <h2>Montes A y B</h2>  
    <p id="subgaleria">Portales Oriente, Ciudad de México
        Desde: $3,646,800 MXN
        16 Disponibles</p>
    <a href="#" class="link">Leer mas</a>  
    <p id="descripcion-galeria">Tu búsqueda terminó y tu hogar esta a la vista. La colonia Portales se ha vuelto un punto preferido en la CDMX por su ubicación geográfica y su crecimiento como colonia. #Montes es el proyecto inmobiliario plus de la zona, con solo 22 departamentos, diseñados para aprovechar cada rincón y convertirlo en espacios cálidos, de excelentes terminados e inmejorable ubicación. Rodeado de Bancos, comercios, escuelas y avenidas principales, vivirás en uno de los lugares con más tradición de la ciudad.Zonas aledañas: Portales, Tlalpan, Coyoacán</p>
</div>
    </section>
    <a href="formulario.php" class="boton-flotante">¡CALIFICANOS!</a>
    <?php include('footer.php'); ?> 
 </body>
</html>