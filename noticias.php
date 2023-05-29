<?php 
require("./conexion/conexion.php");
$sqlProyecto="SELECT * FROM `proyectos` WHERE idProyecto=1";
$sqlProyecto2="SELECT * FROM `proyectos` WHERE idProyecto=2";
$sqlProyecto3="SELECT * FROM `proyectos` WHERE idProyecto=3";
$sqlNoticia1="SELECT * FROM noticias,autor WHERE idNoticia=1 and noticias.idAutor=autor.idAutor";
$sqlNoticia2="SELECT * FROM noticias,autor WHERE idNoticia=2 and noticias.idAutor=autor.idAutor";
$sqlNoticia3="SELECT * FROM noticias,autor WHERE idNoticia=3 and noticias.idAutor=autor.idAutor";

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Noticias</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link rel="stylesheet" href="/css/estilo_index.css">
  <link rel="shortcut icon" href="./img/logo.png">
  <script src="/js/busqueda_avanzada.js"></script>

</head>

<body>
  <header>
    <div class="logo">
      <img src="./img/logoCF.png" alt=" Logo del sitio web">
      <h1>Cuidado del Medio Ambiente en Tabasco</h1>
    </div>
    <nav>
      <ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="/noticias.php">Noticias</a></li>
        <li><a href="/mapa/mapa.html">Mapa</a></li>
        <li><a href="ayuda.html">Ayuda</a></li>
      </ul>
    </nav>

  </header>
  <div class="breadcrumbs">
    <a href="index.html">Inicio</a>
    <span>></span>
    <span class="current-page">Noticias</span>
  </div>

  <main>
    <section class="hero">
      <h2>Bienvenidos al sitio web para el cuidado del medio ambiente en Tabasco</h2>
      <p>Te invitamos a conocer nuestros proyectos y noticias relacionados con el medio ambiente en nuestro estado.</p>
    </section>
    <section class="projects">
      <div class="project">
        <img src="./img/aire.jpg" alt="Proyecto 1">

        <?php $resultadoDatos = mysqli_query($conexion, $sqlProyecto);
        while ($row = mysqli_fetch_assoc($resultadoDatos)) { ?>
        <h3><?php echo $row["nombre"]; ?></h3>
        <p><?php echo $row["descripcion"]; ?></p>
        <?php }
        ?>
        <button id="btn-abrir-proyecto1" class="btn">Leer más</button>
      </div>
      <div class="project">
        <img src="./img/agua.jpg" alt="Proyecto 2">

        <?php $resultadoDatos = mysqli_query($conexion, $sqlProyecto2);
        while ($row = mysqli_fetch_assoc($resultadoDatos)) { ?>
        <h3><?php echo $row["nombre"]; ?></h3>
        <p><?php echo $row["descripcion"]; ?></p>
        <?php }
        ?>

        <button id="btn-abrir-proyecto2" class="btn">Leer más</button>
      </div>
      <div class="project">
        <img src="./img/cambioC.png" alt="Proyecto 3">

        <?php $resultadoDatos = mysqli_query($conexion, $sqlProyecto3);
        while ($row = mysqli_fetch_assoc($resultadoDatos)) { ?>
        <h3><?php echo $row["nombre"]; ?></h3>
        <p><?php echo $row["descripcion"]; ?></p>
        <?php }
        ?>

        <button id="btn-abrir-proyecto3" class="btn">Leer más</button>
      </div>
    </section>
    <section class="news">
      <h2>Últimas Noticias</h2>
      <div class="article">
        <img src="./img/logoPemex.jpg" alt="Noticia 1">
        <div class="article-content">
          <?php $resultadoDatos = mysqli_query($conexion, $sqlNoticia1);
        while ($row = mysqli_fetch_assoc($resultadoDatos)) { ?>
          <h3><?php echo $row["titulo"]; ?></h3>
          <p><?php echo $row["descripcion"]; ?></p>
          <?php }
        ?>
          <button id="btn-abrir-noticia1" class="btn">Leer más</button>
        </div>
      </div>
      <div class="article">
        <img src="./img/petroleo.jpg" alt="Noticia 2">
        <div class="article-content">
          <?php $resultadoDatos = mysqli_query($conexion, $sqlNoticia2);
        while ($row = mysqli_fetch_assoc($resultadoDatos)) { ?>
          <h3><?php echo $row["titulo"]; ?></h3>
          <p><?php echo $row["descripcion"]; ?></p>
          <?php }
        ?>
          <button id="btn-abrir-noticia2" class="btn">Leer más</button>
        </div>
      </div>
      <div class="article">
        <img src="./img/predios.jpeg" alt="Noticia 3">
        <div class="article-content">
          <?php $resultadoDatos = mysqli_query($conexion, $sqlNoticia3);
        while ($row = mysqli_fetch_assoc($resultadoDatos)) { ?>
          <h3><?php echo $row["titulo"]; ?></h3>
          <p><?php echo $row["descripcion"]; ?></p>
          <?php }
        ?>
          <button id="btn-abrir-noticia3" class="btn">Leer más</button>
        </div>
      </div>
    </section>
  </main>

  <!--ventana emergente -->
  <div class="overlay" id="noticia1">
    <div class="popup">
      <?php $resultadoDatos = mysqli_query($conexion, $sqlNoticia1);
        while ($row = mysqli_fetch_assoc($resultadoDatos)) { ?>
      <h3><?php echo $row["titulo"]; ?></h3>
      <br>
      <p>Fecha de publicación: <?php echo $row["fecha_publicacion"]; ?></p>
      <p>Autor: <?php echo$row["apellidoP"], " ", $row["nombre"]; ?></p>
      <p><?php echo $row["contenido"]; ?></p>
      <?php }
        ?>
      <a href="./documentos/Acusan a Pemex de daño ecológico en lagunas de Comalcalco - El Heraldo de Tabasco _ Noticias Locales, Policiacas, sobre México, Tabasco y el Mundo.pdf"
        download>
        <button>Descargar PDF</button>
      </a>
      <button class="btn-cerrar" id="btn-cerrar">Cerrar</button>
    </div>
  </div>
  <div class="overlay" id="noticia2">
    <div class="popup">
      <?php $resultadoDatos = mysqli_query($conexion, $sqlNoticia2);
        while ($row = mysqli_fetch_assoc($resultadoDatos)) { ?>
      <h3><?php echo $row["titulo"]; ?></h3>
      <br>
      <p>Fecha de publicación: <?php echo $row["fecha_publicacion"]; ?></p>
      <p>Autor: <?php echo$row["apellidoP"], " ", $row["nombre"]; ?></p>
      <p><?php echo $row["contenido"]; ?></p>
      <?php }
        ?>
      <a href="./documentos/Tabasco_ un paraíso bajo el agua y la contaminación de Pemex.pdf" download>
        <button>Descargar PDF</button>
      </a>
      <button class="btn-cerrar" id="btn-cerrar2">Cerrar</button>
    </div>
  </div>
  <div class="overlay" id="noticia3">
    <div class="popup">
      <?php $resultadoDatos = mysqli_query($conexion, $sqlNoticia3);
        while ($row = mysqli_fetch_assoc($resultadoDatos)) { ?>
      <h3><?php echo $row["titulo"]; ?></h3>
      <br>
      <p>Fecha de publicación: <?php echo $row["fecha_publicacion"]; ?></p>
      <p>Autor: <?php echo$row["apellidoP"], " ", $row["nombre"]; ?></p>
      <p><?php echo $row["contenido"]; ?></p>
      <?php }
        ?>
      <a href="./documentos/Denuncian contaminación en predios de Cárdenas; empresa no se hace responsable, aseguran.pdf"
        download>
        <button>Descargar PDF</button>
      </a>
      <button class="btn-cerrar" id="btn-cerrar3">Cerrar</button>
    </div>
  </div>

  <div class="overlay" id="proyecto1">
    <div class="popup">
      <?php $resultadoDatos = mysqli_query($conexion, $sqlProyecto);
        while ($row = mysqli_fetch_assoc($resultadoDatos)) { ?>
      <h3><?php echo $row["nombre"]; ?></h3>
      <br>
      <p>Fecha de inicio: <?php echo $row["fecha_inicio"]; ?></p>
      <p>Fecha de terminación: <?php echo $row["fecha_fin"]; ?></p>
      <p>Estado: <?php $aux=$row["idEstado"];  echo estado($aux);?></p>

      <p><?php echo $row["detalles"]; ?></p>
      <?php }
        ?>
      <a href="./documentos/22_ProAire_Tabasco.pdf" download>
        <button>Descargar PDF</button>
      </a>
      <button class="btn-cerrar" id="btn-cerrar4">Cerrar</button>
    </div>
  </div>
  <div class="overlay" id="proyecto2">
    <div class="popup">
      <?php $resultadoDatos = mysqli_query($conexion, $sqlProyecto2);
        while ($row = mysqli_fetch_assoc($resultadoDatos)) { ?>
      <h3><?php echo $row["nombre"]; ?></h3>
      <br>
      <p>Fecha de inicio: <?php echo $row["fecha_inicio"]; ?></p>
      <p>Fecha de terminación: <?php echo $row["fecha_fin"]; ?></p>
      <p>Estado: <?php $aux=$row["idEstado"];  echo estado($aux);?></p>

      <p><?php echo $row["detalles"]; ?></p>
      <?php }
        ?>
      <a href="./documentos/259-Paz-Jiménez-Sánchez.pdf" download>
        <button>Descargar PDF</button>
      </a>
      <button class="btn-cerrar" id="btn-cerrar5">Cerrar</button>
    </div>
  </div>
  <div class="overlay" id="proyecto3">
    <div class="popup">
      <?php $resultadoDatos = mysqli_query($conexion, $sqlProyecto3);
        while ($row = mysqli_fetch_assoc($resultadoDatos)) { ?>
      <h3><?php echo $row["nombre"]; ?></h3>
      <br>
      <p>Fecha de inicio: <?php echo $row["fecha_inicio"]; ?></p>
      <p>Fecha de terminación: <?php echo $row["fecha_fin"]; ?></p>
      <p>Estado: <?php $aux=$row["idEstado"];  echo estado($aux);?></p>

      <p><?php echo $row["detalles"]; ?></p>
      <?php }
        ?>
      <a href="./documentos/Programa de fortalecimiento y capacitación en los municipios en relación a capacidades y acciones de adaptación ante el cambio climático y vulnerabilidad en Tabasco.pdf"
        download>
        <button>Descargar PDF</button>
      </a>
      <button class="btn-cerrar" id="btn-cerrar6">Cerrar</button>
    </div>
  </div>

  <script>
  /*Ventana 1*/
  var btnAbrir = document.getElementById('btn-abrir-noticia1');
  var btnCerrar = document.getElementById('btn-cerrar');
  var overlay = document.getElementById('noticia1');

  btnAbrir.addEventListener('click', function() {
    overlay.style.display = 'flex';
  });
  btnAbrir.addEventListener('click', function() {
    overlay.style.display = 'flex';
  });


  btnCerrar.addEventListener('click', function() {
    overlay.style.display = 'none';
  });
  /*Ventana 2*/
  var btnAbrir2 = document.getElementById('btn-abrir-noticia2');
  var btnCerrar2 = document.getElementById('btn-cerrar2');
  var overlay2 = document.getElementById('noticia2');
  btnAbrir2.addEventListener('click', function() {
    overlay2.style.display = 'flex';
  });
  btnCerrar2.addEventListener('click', function() {
    overlay2.style.display = 'none';
  });
  /*Ventana 3*/
  var btnAbrir3 = document.getElementById('btn-abrir-noticia3');
  var btnCerrar3 = document.getElementById('btn-cerrar3');
  var overlay3 = document.getElementById('noticia3');
  btnAbrir3.addEventListener('click', function() {
    overlay3.style.display = 'flex';
  });
  btnCerrar3.addEventListener('click', function() {
    overlay3.style.display = 'none';
  });
  /*ventana 4*/
  var btnAbrir4 = document.getElementById('btn-abrir-proyecto1');
  var btnCerrar4 = document.getElementById('btn-cerrar4');
  var overlay4 = document.getElementById('proyecto1');
  btnAbrir4.addEventListener('click', function() {
    overlay4.style.display = 'flex';
  });
  btnCerrar4.addEventListener('click', function() {
    overlay4.style.display = 'none';
  });
  /*ventana 5*/
  var btnAbrir5 = document.getElementById('btn-abrir-proyecto2');
  var btnCerrar5 = document.getElementById('btn-cerrar5');
  var overlay5 = document.getElementById('proyecto2');
  btnAbrir5.addEventListener('click', function() {
    overlay5.style.display = 'flex';
  });
  btnCerrar5.addEventListener('click', function() {
    overlay5.style.display = 'none';
  });
  /*ventana 6*/
  var btnAbrir6 = document.getElementById('btn-abrir-proyecto3');
  var btnCerrar6 = document.getElementById('btn-cerrar6');
  var overlay6 = document.getElementById('proyecto3');
  btnAbrir6.addEventListener('click', function() {
    overlay6.style.display = 'flex';
  });
  btnCerrar6.addEventListener('click', function() {
    overlay6.style.display = 'none';
  });
  </script>
  <footer>
    <nav>
      <ul>
        <li><a href="/index.html">Inicio</a></li>
        <li><a href="/noticias.php">Noticias</a></li>
        <li><a href="/mapa/mapa.html">Mapa</a></li>
        <li><a href="/ayuda.html">Ayuda</a></li>
      </ul>
    </nav>
    <div class="redes-sociales">
      <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i>facebook</a>
      <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i>twitter</a>
      <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i>instagram</a>
      <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i>youtube</a>
    </div>
    <p>Cuidado del Medio Ambiente en Tabasco &copy; 2023</p>
  </footer>
</body>

</html>
<?php
function estado($num)
{
  $res="";
    if($num=='2'){
      $res="FINALIZADO";
    }else if($num=='1'){
      $res="EN PROCESO";
    }
    return $res;
}
?>