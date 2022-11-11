<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Shot´s | Inventario y Reportes</title>
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
                  <a class="dropdown-item " href="agents-grid.php">Gestion de Usuarios y Empleados</a>
                  <a class="dropdown-item active" href="agent-single.php">Inventario y Reportes</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="contact.php">Contactos</a>
              </li>
            </ul>
            <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="offcanvas" data-bs-target="#registerModal" aria-controls="registerModal">
              <i class="bi bi-person-circle"> Registrarse</i>
            </button>
            <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="offcanvas" data-bs-target="#loginModal" aria-controls="loginModal">
              <i class="bi bi-person-circle"> Iniciar Sesión</i>
            </button>

    </div>
  </nav><!-- End Header/Navbar -->
  
  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Gestión de Inventario y Reportes</h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single -->

    <!-- ======= Agent Single ======= -->
    <section class="agent-single">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-md-6">
                <div class="agent-avatar-box">
                  <img src="img/businesspeople-working-in-finance-and-accounting-analyze-financi.jpg" alt="" class="agent-avatar img-fluid">
                </div>
              </div>
              <div class="col-md-5 section-md-t3">
                <div class="agent-info-box">
                  <div class="agent-title">
                    <div class="title-box-d">
                      <h3 class="title-d">De qué consta?
                      </h3>
                    </div>
                  </div>
                  <div class="agent-content mb-3">
                    <p class="content-d color-text-a">
                      En este módulo podrá gestionar de manera exitosa el inventario de su empresa y control de existencias.
                      Como también 
                      realizar la  los reportes diarios, semanales, mensuales del apartado de tus ventas y mucho más. 
                    </p>
                    <div class="info-agents color-a">
                      <p>
                        <strong>Teléfono: </strong>
                        <span class="color-text-a"> +57 304 615 5214 </span>
                      </p>
                      <p>
                        <strong>Línea Nacional: </strong>
                        <span class="color-text-a"> 999 123 456 789</span>
                      </p>
                      <p>
                        <strong>Correo: </strong>
                        <span class="color-text-a"> shotscompany@gmail.com</span>
                      </p>
                </div>
              </div>
            </div>
          </div>
 
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                      <h2 class="title-a"> <br>Estos son: </h2>
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
                          <img src="img/almacen.jpg" alt="" class="img-d img-fluid">
                        </div>
                        <div class="card-overlay card-overlay-hover">
                          <div class="card-header-d">
                            <div class="card-title-d align-self-center">
                              <h3 class="title-d">
                                <a href="#" class="link-two">Gestión de Existencias
                                  <br></a>
                              </h3>
                            </div>
                          </div>
                          <div class="card-body-d">
                            <p class="content-d color-text-a">
                              Obtén el método de almacenamiento más eficiente y mejora todas tus operaciones internas. El inventario de doble entrada de Odoo no tiene entradas, 
                              salidas o transformaciones de existencias. En su lugar, todas las operaciones se consideran movimientos de existencias entre ubicaciones.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card-box-d">
                        <div class="card-img-d">
                          <img src="img/foto2.jpg" alt="" class="img-d img-fluid" height="500" >
                        </div>
                        <div class="card-overlay card-overlay-hover">
                          <div class="card-header-d">
                            <div class="card-title-d align-self-center">
                              <h3 class="title-d">
                                <a href="#" class="link-two">Gestión de Almacenamientos
                                  <br></a>
                              </h3>
                            </div>
                          </div>
                          <div class="card-body-d">
                            <p class="content-d color-text-a">
                              Utiliza puntos de orden y solicitudes de cotizaciones automatizadas para hacer tu cadena de suministros
                              más eficiente que nunca.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card-box-d">
                        <div class="card-img-d">
                          <img src="img/inventario.jpg" alt="" class="img-d img-fluid">
                        </div>
                        <div class="card-overlay card-overlay-hover">
                          <div class="card-header-d">
                            <div class="card-title-d align-self-center">
                              <h3 class="title-d">
                                <a href="#" class="link-two">Gestión de Reportes
                                  <br></a>
                              </h3>
                            </div>
                          </div>
                          <div class="card-body-d">
                            <p class="content-d color-text-a">
                              Toma mejores decisiones con la ayuda de reportes dinámicos en tiempo real que puedes guardar y compartir con quien sea. Mantén la información clave al alcance de tu mano con los tableros personalizados.
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
                <a href="#">Nuestro Servicios</a>
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