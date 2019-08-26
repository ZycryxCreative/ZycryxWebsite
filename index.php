  <?php 
    include 'extend/navbar.php'; 
  ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ｚｙｃｒｙｘ ☣</title>

  <!-- Styles CSS Files -->
  <link rel="stylesheet" href="css/slider.css">
  <link rel="stylesheet" href="css/index.css">

</head>

<body class="bg-dark">

  <!-- Silder -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>     
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img src="img/slider/01.jpg" class="d-block w-100">
        <div class="carousel-caption">
          <h3 class="tittle_h">FORMATEO DE PC & INSTALACIÓN DE SOFTWARE</h3>
          <p class="tittle_p">Formateo de PC, smartphone y portátiles. Instalación de programas para cualquier dispositivo y limpieza
           hardware de computadoras, portatiles y smartphones.</p>
          <button type="button" class="btn btn-success"><a href="inicio/inicio.php">LLAMAR</a></button>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/slider/02.jpg" class="d-block w-100">
        <div class="carousel-caption">
          <h3 class="tittle_h">DIBUJO Y DISEÑO GRÁFICO</h3>
          <p class="tittle_p">Diseño de logos, banners, gigantografías y afiches para tu empresa o negocio</p>
          <button type="button" class="btn btn-success"><a href="inicio/inicio.php">GESTIONAR</a></button>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/slider/03.jpg" class="d-block w-100">
        <div class="carousel-caption">
          <h3 class="tittle_h">DESARROLLO Y DISEÑO WEB</h3>
          <p class="tittle_p">Construcción y diseño de páginas web dinámicas y estáticas</p>
          <button type="button" class="btn btn-success"><a href="inicio/inicio.php">GESTIONAR</a></button>
        </div>
      </div>

      <a href="#myCarousel" class="carousel-control-prev" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previus</span>
      </a>

      <a href="#myCarousel" class="carousel-control-next" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </div>
  <!-- END Silder -->


  <div class="accordion container " id="accordionExample">
    <div class="m-2">
      <div class="card bg-dark">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn bg-danger " type="button" data-toggle="collapse" data-target="#collapseOne"
              aria-expanded="true" aria-controls="collapseOne">
              <div class="text-white">Mision</div>
            </button>
          </h2>
        </div>

        <div id="collapseOne" class="collapse show " aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body text-white">
            Ser una empresa reconocida a nivel nacional en el desarrollo, diseño e implementación de páginas web creativas, ofrecer calidad, innovación y prestigio para nuestros clientes con servicios tecnológicos de 
            última gama con especialistas en cada campo de desarrollo. 
          </div>
        </div>
      </div>
      <div class="card bg-dark">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn  collapsed bg-success" type="button" data-toggle="collapse" data-target="#collapseTwo"
              aria-expanded="false" aria-controls="collapseTwo">
              <div class="text-white">Vision</div>
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body text-white">
            Desarrollar tecnología e implementar transformacion tecnológica para nuestros clientes a nivel internacional con calidad, prestigio, distinción y compromiso con nuestros clientes que quieren destacar y automatizar procesos facilitando el desarrollo de actividades y tareas cumpliendo con sus objetivos de negocios para crecer como empresa juntos.
          </div>
        </div>
      </div>
      <div class="card bg-dark">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn  collapsed bg-primary" type="button" data-toggle="collapse" data-target="#collapseThree"
              aria-expanded="false" aria-controls="collapseThree">
              <div class="text-white">Sobre nosotros...</div>
            </button>
          </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body text-white">
            Somos un grupo de desarrolladores web y de software, utilizamos herramientas de alto nivel y de 
            gran capacidad para realizar un producto software de calidad, escalable y de interfaz cómoda para
            el usuario.
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card-group">
    <div class="card m-2">
      <img src="img/estatica.png" class="card-img-top" alt="logo front-end">
      <div class="card-body">
        <h5 class="card-title">Página Web Estática</h5>
        <p class="card-text text-default">
          Una página web estática es un sitio de Internet que muestra el mismo contenido para todos los usuarios, en vez de proporcionar contenido personalizado a la medida de cada usuario, y que no se actualiza a menudo. Las páginas web estáticas, que algunas veces se conocen como páginas planas, contrastan con las páginas web dinámicas que se actualizan frecuentemente y proporcionan información personalizada para usuarios individuales.</p>

          <p>Estas páginas web estáticas se acomodan muy bien en contenidos como:
          Página Publicitaria, página informativa, foro, artículo.
        </p>
        <p class="card-text"><small class="text-muted">No Olvides Consultar al Numero de Whatsapp
          </small></p>
      </div>
      <button class="btn btn-dark-green" data-toggle="tooltip" id="example" data-html="true" title="S./ 1000">
        Precio
      </button>
    </div>
    <div class="card m-2">
      <img src="img/dinamica.jpg" class="card-img-top" alt="logo backend">
      <div class="card-body ">
        <h5 class="card-title">Página Web Dinámica</h5>
        <p class="card-text">Las páginas web dinámicas son aquellas en las que la información presentada se genera a partir de una petición del usuario de la página. Los lenguajes utilizados para la generación de este tipo de páginas son principalmente: Perl CGI, PHP , JSP y ASP.</p>

        <p>Estas páginas web dinámicas se acomodan muy bien en contenidos como:
        Página con toma de pedidos, página para subscripciones, sistema de ventas web, red social.
        </p>
        <p class="card-text"><small class="text-muted">
            No Olvides Consultar al Numero de Whatsapp
        </small></p>
      </div>

      <button type="button" class="btn btn-secondary" data-toggle="tooltip" id="example2" data-html="true"
        title="S./ 2000">
        Precio
      </button>


    </div>
    <div class="card m-2">
      <img src="img/ventas.jpg" class="card-img-top" alt="logo sistemas transacciones">
      <div class="card-body">
        <h5 class="card-title">Sistema de Ventas</h5>
        <p class="card-text">
          creación de sistemas de transacciones para tu negocio
        </p>
        <p class="card-text"><small class="text-muted">
            No Olvides Consultar al Numero de Whatsapp
        </small></p>
      </div>
      <button type="button" class="btn btn-deep-orange" data-toggle="tooltip" id="example3" data-html="true"
        title="S./ 2000">
        Precio
      </button>
    </div>
  </div>

  <?php 
  include 'extend/footer.php'; 
  ?>

</body>

</html>