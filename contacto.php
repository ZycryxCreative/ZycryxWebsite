    <?php 
      include 'extend/navbar.php'; 
    ?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ｚｙｃｒｙｘ ☣ │ Contacto </title>

    <!-- CSS Styles -->
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

  </head>
<body>

            <!-- form name="form" action="enviar_correo.php" method="post" onSubmit="return validar();" -->
    <div class="content">

        <div class="contact-wrapper">
            <div class="contact-form">
                <h2>Contactanos</h2>
                <form action="" method="POST">
                    <p>
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" required>
                    </p>
                    <p>
                        <label>Email </label>
                        <input type="email" name="email" required>
                    </p>
                    <p>
                        <label>Celular</label>
                        <input type="tel" name="phone" pattern="[0-9]{9}" required>
                    </p>
                    <p>
                        <label>Servicio</label>
                        <select name="" id="">
                            <option value="">Instalación de S. O.</option>
                            <option value="">Diseño Grafico</option>
                            <option value="">Desarrollo de Software</option>
                            <option value="">Sistemas Web</option>
                            <option value="">diseño de Páginas Web </option>
                        </select>
                    </p>
                    <p class="block">
                        <label>Comentario(opcional)</label>
                        <textarea name="message" rows="3"></textarea>
                    </p>
                    <p class="block">
                        <button type="submit">ENVIAR</button>
                    </p>
                </form>
            </div>

            <div class="contact-info">
                <h4>Más Información de contacto</h4>
                <ul>
                    <li><i class="far fa-grin-beam red"></i>Comunicate con Nosotros</li>
                    <li><i class="fas fa-mobile-alt blue "></i> 912314482 </li>
                    <li><i class="fas fa-mobile-alt blue"></i>92207667</li>
                    <li><i class="fab fa-whatsapp green" ></i>937264467</li>
                </ul>
                <p>
                    Somos una empresa de tecnología orientada a brindar servicios de primera para garantizar la
                    comodidad de nuestros clientes y asesorar. para a mejorar el uso de las herramientas que son
                    utilizadas por ustedes.
                </p>
                <p>zycryx.com</p>
            </div>
        </div>
    </div>
    <br>
    <br>

      <?php 
      include 'extend/footer.php'; 
      ?>


</body>


</html>