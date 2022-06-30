<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Transport GT || Store</title>
        <meta content="" name="descriptison">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{asset("img/favicon.png")}}" rel="icon">
        <link href="{{asset("img/apple-icon.png")}}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link
          href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i"
          rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/icofont/icofont.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/venobox/venobox.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">

        <link href="{{asset("css/style.css")}}" rel="stylesheet">
      </head>

      <body>

        <header id="header" class="fixed-top">
          <div class="container-fluid d-flex">

            <div class="logo mr-auto">
              <h1 class="text-light"><a href="{{route('home')}}"><span>Transport Gt</span></a></h1>
            </div>

            <nav class="nav-menu d-none d-lg-block">
              <ul>
                <li class="active"><a href="#header">Inicio</a></li>
                <li><a href="#about">Conocenos</a></li>
                <li><a href="#services">Servicios</a></li>
                <li><a href="#contact">Contactanos</a></li>
              </ul>
            </nav>

          </div>
        </header>

        <section id="hero" class="d-flex align-items-center">

          <div class="container">
            <div class="row">
              <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
                <h1>Somos una empresa especializada en logistica</h1>
                <h2></h2>
                <a href="#about" class="btn-get-started scrollto">Conocenos</a>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="{{asset("img/logoWhite.png")}}" class="img-fluid " alt="">
              </div>
            </div>
          </div>

        </section>

        <main id="main">

          <section id="about" class="about">
            <div class="container">

              <div class="row justify-content-between">
                <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                  <img src="{{asset("img/mineriaPlanta.jpg")}}" class="img-fluid" alt="" data-aos="zoom-in">
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                  <h3 data-aos="fade-up">Actualmente contamos con 2 principales fuertes</h3>
                  <div class="row">
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                      <i class="bx bx-analyse"></i>
                      <h4>Plantas de procesamiento y extracción de mineria</h4>
                      <p>Contamos con plantas de proceso de materia prima para generar diferentes productos como pisos
                        cerámicos de diferentes tipos y diferentes tipos materiales de construcción, situadas en
                        Zacapa, Huehuetenango y Peten</p>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                      <i class="bx bxs-truck"></i>
                      <h4>Logistica en transporte y contrucción</h4>
                      <p>Transporte de materia prima para diferentes empresas tanto locales como extranjeras, asi mismo contamos con
                        venta y alquiler de maquinaria de construcción, con sucursales en Guatemala, Xela,
                        Zacapa, Peten</p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </section>

          <section id="services" class="services section-bg">
            <div class="container">

              <div class="section-title" data-aos="fade-up">
                <h2>Giros de negocio</h2>
                <p>Pensados para brindar el mejor servicio tanto a actuales como futuros clientes, asi como cubrir las
                  principales necesidades en el mercado tanto nacional como internacional, actualmente contamos con las siguientes soluciones</p>
              </div>

              <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box">
                    <div class="icon"><i class="bx bxs-business"></i></div>
                    <h4 class="title"><a href="">Plantas de extracción</a></h4>
                    <p class="description">Contamos con varias plantas de extracción minera situadas en Cobán, El Progreso, Quetzaltenango y Peten. </p>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box">
                    <div class="icon"><i class="bx bxs-business"></i></div>
                    <h4 class="title"><a href="">Plantas de procesamiento</a></h4>
                    <p class="description">Contamos con plantas de proceso de materia prima para generar diferentes productos como pisos cerámicos de diferentes tipos y diferentes
                        tipos materiales de construcción, situadas en Zacapa, Huehuetenango y Peten</p>
                  </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box">
                    <div class="icon"><i class="bx bxs-truck"></i></div>
                    <h4 class="title"><a href="">Venta y alquiler de maquinaria</a></h4>
                    <p class="description">Contamos con salas de venta y alquiler de maquinaria de construcción de distintas categorias y presupuestos,
                        con sucursales en Guatemala, Xela, Zacapa, Peten</p>
                  </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box">
                    <div class="icon"><i class='bx bx-log-in-circle' ></i></div>
                    <h4 class="title"><a href="">Transporte de materia prima</a></h4>
                    <p class="description">Como empresa de logistica contamos con transporte de materia prima para diferentes empresas como Cemex, Cementos Progreso, Hispacensa, etc</p>
                  </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
                  <div class="icon-box">
                    <div class="icon"><i class='bx bx-stats' ></i></div>
                    <h4 class="title"><a href="">Servicios de Construcción</a></h4>
                    <p class="description">Contamos con distintos servicios de construcción en general,
                        desde asesoramiento, creacion de planes, coordinacion de proyectos hasta construccion como puentes, carreteras y edificios</p>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section id="contact" class="contact">
            <div class="container">

              <div class="section-title" data-aos="fade-up">
                <h2>Contactame</h2>
                <p>Si tienes alguna duda, consulta o necesitas información de mis servicios, sera un gusto apoyarte</p>
              </div>

              <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                  <div class="info">
                    <div class="address">
                      <i class="icofont-google-map"></i>
                      <h4>Ubicación:</h4>
                      <p>Guatemala, Guatemala</p>
                    </div>

                    <div class="email">
                      <i class="icofont-envelope"></i>
                      <h4>Email:</h4>
                      <p>info@khgm-dev.com</p>
                    </div>

                    <iframe
                      src="https://maps.google.com/maps?q=Centro%20Historico,%20Guatemala&t=&z=13&ie=UTF8&iwloc=&output=embed"
                      frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                  </div>
                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4"
                          data-msg="Please enter at least 4 chars" />
                        <div class="validate"></div>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="name">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" data-rule="email"
                          data-msg="Please enter a valid email" />
                        <div class="validate"></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="name">Asunto</label>
                      <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4"
                        data-msg="Please enter at least 8 chars of subject" />
                      <div class="validate"></div>
                    </div>
                    <div class="form-group">
                      <label for="name">Mensaje</label>
                      <textarea class="form-control" name="message" rows="10" data-rule="required"
                        data-msg="Please write something for us"></textarea>
                      <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                      <div class="loading">Cargando</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Tu mensaje ha sido enviado con exito!</div>
                    </div>
                    <div class="text-center"><button type="submit">Enviar</button></div>
                  </form>
                </div>

              </div>

            </div>
          </section>

        </main>
        <footer id="footer">

          <div class="footer-newsletter" data-aos="fade-up">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-6">
                  <h4>Promociones y noticias</h4>
                  <p>Inscribete para recibir las ultimas noticias y promociones </p>
                  <form action="" method="post">
                    <input type="email" name="email"><input type="submit" value="Suscribete">
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="footer-top">
            <div class="container">
              <div class="row">

                <div class="col-lg-4 col-md-6 footer-contact" data-aos="fade-up" data-aos-delay="100">
                  <h3>Transport Gt</h3>
                  <p>
                    Guatemala, Guatemala <br>
                    <strong>Email:</strong> info@transport-gt.com<br>
                  </p>
                </div>

                <div class="col-lg-4 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
                  <h4>Enlaces</h4>
                  <nav class="nav-menu-footer">
                    <ul>
                      <li><i class="bx bx-chevron-right"></i> <a href="#header">Inicio</a></li>
                      <li><i class="bx bx-chevron-right"></i> <a href="#about">Conocenos</a></li>
                      <li><i class="bx bx-chevron-right"></i> <a href="#services">Servicios</a></li>
                      <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contactanos</a></li>
                    </ul>
                  </nav>
                </div>

                <div class="col-lg-4 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="400">
                  <h4>Redes sociales</h4>
                  <p>¡Proximamente!</p>
                  <div class="social-links mt-3">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="container py-4">
            <div class="copyright col-12">

                <p id="dateYear">

                </p>

            </div>
          </div>
        </footer>

        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

        <script src="{{asset("vendor/jquery/jquery.min.js")}}"></script>
        <script src="{{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
        <script src="{{asset("vendor/jquery.easing/jquery.easing.min.js")}}"></script>
        <script src="{{asset("vendor/php-email-form/validate.js")}}"></script>
        <script src="{{asset("vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
        <script src="{{asset("vendor/venobox/venobox.min.js")}}"></script>
        <script src="{{asset("vendor/owl.carousel/owl.carousel.min.js")}}"></script>
        <script src="{{asset("vendor/aos/aos.js")}}"></script>


        <script src="{{asset("js/main.js")}}"></script>
        <script>
          var fecha = new Date();
          var anio = fecha.getFullYear();
          $("#dateYear").html(`
          &copy; Copyright <strong><span> Transport Gt </span></strong> `+anio+` . All Rights Reserved
          `);
        </script>

      </body>

      </html>
