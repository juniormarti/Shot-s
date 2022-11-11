<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Shot's | Usuarios y Empleados</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency - v4.8.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  
  <!--/ Form Search Star /-->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="loginModal" aria-labelledby="loginModalLabel">
    <div class="offcanvas-header">
      
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
  
      
      <form action="#">
        <h2>LOGIN</h2>
        <p>Por favor ingresar usuario y contraseña para acceder al sitio</p>
        <div class="inputContainer">
          <input type="text" class="input" placeholder="a">
          <label for="" class="label">Usuario</label>
        </div>
  
        <div class="inputContainer">
          <input type="text" class="input" placeholder="a">
          <label for="" class="label">Contraseña</label>
        </div>
  
        <a href="#">¿Olvidó su contraseña?</a>
        
  
        
        <input type="submit" class="submitBtn" value="Iniciar Sesión">
      </form>
    </div>
  </div>
  
  
  
  
  <div class="offcanvas offcanvas-end" tabindex="-1" id="registerModal" aria-labelledby="registerModalLabel">
    <div class="offcanvas-header">
      
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
  
      
      <form action="#">
        <h2>REGISTRO</h2>
        <p>Por favor complete los campos con su información para realizar el registro</p>
        <div class="inputContainer">
          <input type="text" class="input" placeholder="a">
          <label for="" class="label">Correo</label>
        </div>
  
        <div class="inputContainer">
          <input type="text" class="input" placeholder="a">
          <label for="" class="label">Nombre de Usuario</label>
        </div>
  
        <div class="inputContainer">
          <input type="text" class="input" placeholder="a"> 
          <label for="" class="label">Contraseña</label>
        </div>
  
        <div class="inputContainer">
          <input type="text" class="input" placeholder="a">
          <label for="" class="label">Confirmar Contraseña</label>
        </div>
        <input type="submit" class="submitBtn" value="Registrarse">
      </form>
    </div>
  </div>

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html"><img src="img/logo.png" alt=""></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <ul class="navbar-nav">
    
              <li class="nav-item">
                <a class="nav-link " href="../../index.php">Inicio</a>
              </li>
    
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nuestros Servicos</a>
                <div class="dropdown-menu">

                  <a class="dropdown-item " href="blog-single.php">Automatización de  Procesos</a>
                  <a class="dropdown-item active " href="agents-grid.php">Gestion de Usuarios y Empleados</a>
                  <a class="dropdown-item " href="agent-single.php">Inventario y Reportes</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="contact.php">Contactos</a>
              </li>
            </ul>
          </div>
          <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="offcanvas" data-bs-target="#registerModal" aria-controls="registerModal">
            <i class="bi bi-person-circle"> Registrarse</i>
          </button>
          <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="offcanvas" data-bs-target="#loginModal" aria-controls="loginModal">
            <i class="bi bi-person-circle"> Iniciar Sesión</i>
          </button>

    </div>
  </nav><!-- End Header/Navbar -->
  

  <main id="main">
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a"> <br>Gestión de Empleados, Usuarios y Pedidos</h2>
              </div>
            </div>
          </div>
        </div>

        <section class="agents-grid grid">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="card-box-d">
                  <div class="card-img-d">
                    <img src="img/imagen2.png" alt="" class="img-d img-fluid">
                  </div>
                  <div class="card-overlay card-overlay-hover">
                    <div class="card-header-d">
                      <div class="card-title-d align-self-center">
                        <h3 class="title-d">
                          <a href="#" class="link-two">Gestión de Empleados
                            <br></a>
                        </h3>
                      </div>
                    </div>
                    <div class="card-body-d">
                      <p class="content-d color-text-a">
                      Este apartado te permite tener un mayor control sobre tus empleados, validadando información sensible por parte del administrador... Información como identificación, dirección y correo, entre otros.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card-box-d">
                  <div class="card-img-d">
                    <img src="img/imagen34.jpg" alt="" class="img-d img-fluid" height="500" >
                  </div>
                  <div class="card-overlay card-overlay-hover">
                    <div class="card-header-d">
                      <div class="card-title-d align-self-center">
                        <h3 class="title-d">
                          <a href="#" class="link-two">Gestión de Usuarios
                            <br></a>
                        </h3>
                      </div>
                    </div>
                    <div class="card-body-d">
                      <p class="content-d color-text-a">
                        Registra y crea a todos los usuarios de tu empresa y limita la información a los diferentes colaboradores de la compañia,
                        crea los usuarios de <b>Gerente,</b> <b>Administrador</b> y <b>Empleados,</b> los usuarios pueden registrarse mediante la plataforma para realizar el apartado de sus pedidos.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card-box-d">
                  <div class="card-img-d">
                    <img src="img/servicio1.png" alt="" class="img-d img-fluid">
                  </div>
                  <div class="card-overlay card-overlay-hover">
                    <div class="card-header-d">
                      <div class="card-title-d align-self-center">
                        <h3 class="title-d">
                          <a href="#" class="link-two">Gestión de Pedidos
                            <br></a>
                        </h3>
                      </div>
                    </div>
                    <div class="card-body-d">
                      <p class="content-d color-text-a">
                      Los clientes pueden realizar el apartado de sus pedidos registrandose por medio de la página, allí pueden observar y realizar el apartado de sus pedidos
                        diligenciando sus datos. 
                      </p>
                    </div>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section><!-- End Agents Grid-->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <section class="section-footer">
    
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Inicio</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Nuestros Servicios</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Contactos</a>
              </li>
            </ul>
          </nav>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Shot's
              <span class="color-a">Aquí</span> Encuentras lo que necesitas
            </p>
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>