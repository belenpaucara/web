<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="demo-Estyle.css">
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="orbit-1.2.3.css">
    <link rel="stylesheet" href="style.css">
    <title>¿Quienes Somos?</title>
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

       <?php include('header.php'); ?>
        <div class="promocion">
            <img src="img/Promocionimg.jpg" alt="" width="1512">
            <div class="lemacontacto">
                <h1>¿QUIENES SOMOS?</h1>
                <P>Con la finalidad de complacer a nuestro amados clientes les traemos varias promociones "calendario" durante todo el año. No te pierdas la diversidad de eventos y promociones te traera muchos beneficios.</P>
            </div>
        </div>
        <?php include('aside.php')?>
        <section id="quienes-somos">
            <article class="vision">
                <div class="title-1">
                    <h2>Sobre nosotros</h2>
                    <p>La empresa y la cultura de INNOVATIVE son muy parecidas a nuestro producto. Estan diseñadas, no improvisadas
                        , para ofrecer una experiencia agradable.
                    </p>
                </div>
                <img class="quien-img" src="img/quienes somos 1.jpg" alt="">
            </article>
            <article class="vision">
                <img class="quien-img" src="img/quienes somos 2.png" alt="">
                <div class="title-2">
                    <h3>Nuestra misión: ayudar a millones de personas con los costos bajos y con promociones y a crecer mejor</h3>
                    <p>Creemos no solo en crecer mas, sino en crecer mejor. Y crecer mejor significa alinear el éxito de su propia vivienda con el éxito de 
                        sus clientes ¡Todos ganan!
                    </p>
                </div>
            </article>
            <article class="rebelde">
                <div class="title-2">
                    <h3>Nuestra historia</h3>
                    <p>En 2004, Brian Halligan y Dharmesh Shah, estudiantes de posgrado del MIT, notaron un cambio importante en la forma en que las personas compran y adquieren productos. Los compradores no querían que los interrumpieran los anuncios, querían información útil. En 2006, fundaron HubSpot para ayudar a las empresas a aprovechar ese cambio para crecer mejor con el marketing entrante.

A lo largo del camino, HubSpot se expandió más allá del marketing y se convirtió en un conjunto de productos elaborados y no improvisados ​​que crean la experiencia del cliente sin fricciones que los compradores esperan hoy. Liderados por la experta directora ejecutiva Yamini Rangan, HubSpot utiliza su plataforma de clientes construida sobre un CRM inteligente impulsado por IA para ayudar a millones de organizaciones en expansión a crecer mejor.</p>
            </div>
            <video width="750" autoplay muted controls>
                    <source src="img/Video quienes somos.mp4" type="video/mp4">
                </video>
            </article>
            <h2 id="title-1">INNOVATIVE en cifras</h2>

        </section>
        <section id="cifras">
           
            <article>
                <img  class="esta" src="img/quienes esta 1.jpg" alt="">
                <h3 class="title-2">14 oficinas globales</h3>
            </article>
            <article>
                <img class="esta" src="img/quienes esta 2.jpg" alt="">
                <h3 class="title-2">Más de 8000 empleados</h3>
            </article>
            <article>
                <img class="esta" src="img/quienes esta 3.jpg" alt="">
                <h3 class="title-2">Más de 228.000 clientes</h3>
            </article>
        </section>
        <div class="final-quien">
        <p>Votado como el número 1 en 571 <br> informes</p>
       <a href="Foro.php">Lo que dicen nuestros clientes</a>

       </div>

    
    <a href="formulario.php" class="boton-flotante">¡CALIFICANOS!</a>
    <?php include('footer.php'); ?>
</body>
</html>