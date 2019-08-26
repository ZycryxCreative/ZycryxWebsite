<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" href="css/footer.css">
</head>

  <body>

  <section id="footer">

      <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <h5>Más...</h5>
            <ul class="list-unstyled quick-links">
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Precios</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Promociones</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Contacto</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Acerca de</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Tutoriales</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <h5>¿Que estas buscando?</h5>
            <ul class="list-unstyled quick-links">
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Páginas Web</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Diseño Gráfico</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Instalación de Software</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Mantenimiento de PC</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i>Aplicaciones Móviles</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
            <ul class="list-unstyled list-inline social text-center">
              <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-facebook-messenger"></i></a></li>
              <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-youtube text-danger"></i></a></li>
              <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-instagram text-warning"></i></a>
              </li>
              <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-telegram"></i></a></li>
              <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope text-default"></i></a>
              </li>
            </ul>
          </div>
          </hr>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
            <p>ZCRYX WEB MASTERS</p>
            <p class="h6" id="year"></p>
          </div>
          </hr>
        </div>
      </div>
        
    </section>

    <script>

      let year = document.getElementById('year')

      let date = new Date()

      let anio = date.getFullYear()

      year.innerHTML = "&copy Todos los derechos reservados. " + anio

      $('#example').tooltip({ boundary: 'window' })
      $('#example2').tooltip({ boundary: 'window' })
      $('#example3').tooltip({ boundary: 'window' })
    </script>

  </body>
</html>