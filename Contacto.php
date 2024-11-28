<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="demo-Estyle.css">
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="orbit-1.2.3.css">
    <link rel="stylesheet" href="style.css">
    <title>Contacto</title>
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
        <img src="img/Contactoimg.jpg" alt="" width="1512">
        <div class="lemacontacto">
            <h1>CONTÁCTENOS</h1>
            <P>No hay nada que nos guste más que ponernos manos a la obra y empezar un nuevo proyecto.Hagamos <br> algo grande juntos</P>
        </div>
        <?php include('aside.php')?>
        <section id="section-contacto">
        <div class="ubicacion">
            <iframe class="ubicate" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.157232000229!2d-101.19843292500572!3d19.70592898163266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e6550074311%3A0xa0e8bf229bfabde1!2sHotel%20Qualitel%20Plus!5e0!3m2!1ses-419!2sbo!4v1724804048974!5m2!1ses-419!2sbo" width="450" height="330" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="ubi"><p>Ciudad de Morelia "Michoacan"<br>
                Av. Héroes de Nocupérato <br>C. Valentín Gómesz Farías <br>Frente al Hotel "Qualitel Plus"</p></div>
           
         </div>
    <form class="contact_form" action="#" method="post">
        <h1 id="titulo-contacto">Llenar formulario para contactárnos</h1>
       <ul>
           <li>
               <label for="name">Nombre:</label>
               <input type="text" placeholder="Marcia Paucara" required autofocus>
           </li>
           <li>
               <label for="email">Email:</label>
               <input type="email" name="email" placeholder="marciapaucara930@gmail.com" multiple>
           </li>
           <li>
            <label for="search">Buscar:</label>
            <input type="search" placeholder="Search">
        </li>
           <li>
               <label for="website">Sitio Web:</label>
               <input type="url" name="web" placeholder="http//INNOVATIVE.com">
           </li>
           <li>
            <label for="tcl">codigo Postal:</label>
            <input type="text" placeholder="0000" required pattern="[0-9]{4}">
        </li>
           <li>
               <label for="mensaje">Mensaje:</label>
               <textarea name="mensaje" cols="40" rows="6" ></textarea> 
           </li>
           <li>
               <button class="submit" type="submit">Enviar</button>
           </li>
       </ul>
    </form>
  
        </section>
        <div class="ellos">
       <h3>NUESTROS CONTACTOS</h3>
       <p>Teléfono: (+591 8675454)</p>
       <p>Fax: 837458</p>
       <p>Cel.: +591 69845234</p>
       <p>E-mail: Beginsgym@gmail.com</p>
       
    </div>
<a href="formulario.php" class="boton-flotante">¡CALIFICANOS!</a>
<?php include('footer.php'); ?>
</body>
</html>