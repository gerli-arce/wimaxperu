<!DOCTYPE html>
<html class="no-js" lang="en">
  <?php include_once 'components/head.php'; ?>
  <style>
       .hero-section {
            background: linear-gradient(rgba(33, 150, 243, 0.9), rgba(33, 150, 243, 0.7)), url('ruta/a/tu/imagen-hero.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            margin-bottom: 50px;
        }

        .section-title {
            color: #2196F3;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .card {
            border: none;
            transition: transform 0.3s ease;
            margin-bottom: 30px;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-title {
            color: #2196F3;
            font-weight: 600;
        }

        .blue-divider {
            height: 3px;
            background: #2196F3;
            width: 60px;
            margin: 20px auto;
        }

        .vision-mision-section {
            background-color: #f8f9fa;
            padding: 50px 0;
            margin: 50px 0;
        }

        .value-item {
              padding: 20px;
              transition: transform 0.3s ease;

              color: #888;
              font-size: 16px;
              font-family: 'Poppins', sans-serif;
              max-width: 1000px;
              margin: 0 auto;
              margin-top: 32px;
              line-height: 1.8;
          }

          .value-item:hover {
              transform: translateY(-5px);
          }

          .lead {
              
              line-height: 1.8;
              color: #555;
          }
       
    </style>
  <body>
    <?php include_once 'components/header.php'; ?>
    <?php include_once 'components/menu.php'; ?>

    <!--about-part start-->
    <section class="about-part">
      <div class="container">
        <div class="about-part-details text-center">
          <h2>Sobre Notrosos</h2>
          <div class="about-part-content">
            <div class="breadcrumbs">
              <div class="container">
                <ol class="breadcrumb">
                  <li><a href="index.html">Inicio</a><span>//</span></li>
                  <li><a href="about.html">Nosotros</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
<!-- Hero Section -->
<!-- <div class="hero-section text-center">
    <div class="container">
        <h1>Sobre Nosotros</h1>
        <div class="blue-divider"></div>
    </div>
</div> -->

<!-- Main Content -->
<div class="container ">
    <!-- Company Introduction -->
    <div class="row align-items-center mb-5 mt-5 section-header">
        <div class="col-lg-6">
            <img src="assets/images/logo/logo-dark.png" alt="WIMAPERU E.I.R.L." class="img-fluid rounded">
        </div>
        <div class="col-lg-6">
            <h2 class="section-title">WIMAPERU E.I.R.L.</h2>
            <p class="lead">
                Con más de 10 años de trayectoria, nos dedicamos al desarrollo e integración en redes y proyectos de conectividad y telecomunicaciones con servicios de fibra óptica de alta velocidad.
            </p>
            <p>
                Atendemos a financieras, organizaciones, institutos, colegios, municipalidades, entre otros. Tenemos presencia en 10 distritos de nuestra región y nuestros clientes principales son empresas privadas, cooperativas, Pymes, Entidades Financieras y Municipalidades en toda la selva central.
            </p>
        </div>
    </div>

    <!-- Vision y Mision -->
    <div class="vision-mision-section section-header">
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <h3 class="card-title">Misión</h3>
                        <div class="blue-divider"></div>
                        <p class="card-text">
                            "Proveer sistemas y servicios avanzados en fibra óptica para empresas públicas y privadas, con el objetivo de mejorar la eficiencia y productividad en las comunicaciones de voz, datos y video."
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <h3 class="card-title">Visión</h3>
                        <div class="blue-divider"></div>
                        <p class="card-text">
                            "WIMAXPERU al 2030 será el proveedor referente de las telecomunicaciones empresariales logrando un posicionamiento intrínsecamente relacionado con la innovación y la calidad de vida de las personas y facilitar el desarrollo de las empresas privadas y públicas en toda la selva central."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Valores -->
    <div class="row section-header">
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h4 class="card-title">Calidad de vida de las personas</h4>
                    <div class="blue-divider"></div>
                    <p class="card-text">
                        Somos un medio para facilitar, mejorar y potenciar la igualdad de oportunidades y el acceso a la educación, a la salud, a los servicios del estado, al comercio y a sus necesidades cotidianas.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h4 class="card-title">Desarrollo de las organizaciones</h4>
                    <div class="blue-divider"></div>
                    <p class="card-text">
                        Apoyamos a organizaciones públicas y privadas, comunidades y empresas en su gestión para que sean más flexibles, ágiles, puedan trabajar colaborativamente.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h4 class="card-title">Servicios innovadores</h4>
                    <div class="blue-divider"></div>
                    <p class="card-text">
                        La innovación es nuestra fuerza motriz para proveer nuevos y mejores servicios, generar mejores procesos y sistemas, desarrollar nuestra infraestructura y talentos.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center section-header">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body text-center p-5">
                    <h3 class="card-title">Valores Corporativos</h3>
                    <div class="blue-divider"></div>
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <p class="lead">
                                Trabajamos con responsabilidad y máxima estima hacia nuestros clientes en un ambiente de trabajo en equipo donde reina la colaboración permanente, realizando nuestra labor con pasión, confianza y alegría compartida, en pro de la excelencia de las relaciones interpersonales para que trascienda dentro y fuera de la empresa, utilizando la tecnología para convertir el mundo a nuestro alcance en un lugar agradable para vivir.
                            </p>
                        </div>
                    </div>
                    <!-- Iconos de valores -->
                    <div class="row mt-4 g-4 section-header">
                        <div class="col-md-3 col-sm-6">
                            <div class="value-item">
                                <i class="fas fa-handshake mb-3 text-primary" style="font-size: 3.5rem;"></i>
                                <h5>Responsabilidad</h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="value-item">
                                <i class="fas fa-users mb-3 text-primary" style="font-size: 3.5rem;"></i>
                                <h5>Trabajo en Equipo</h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="value-item">
                                <i class="fas fa-heart mb-3 text-primary" style="font-size: 3.5rem;"></i>
                                <h5>Pasión</h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="value-item">
                                <i class="fas fa-star mb-3 text-primary" style="font-size: 3.5rem;"></i>
                                <h5>Excelencia</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- <div class="about-history">
      <div class="container">
        <div class="about-history-content">
          <div class="row">
            <div class="col-md-5 col-sm-12">
              <div class="single-about-history">
                <div class="about-history-img">
                  <img src="assets/images/about/ab1.jpg" alt="about" />
                </div>
              </div>
            </div>

            <div class="col-md-offset-1 col-md-6 col-sm-12">
              <div class="single-about-history">
                <div class="about-history-txt">
                  <h2>our history</h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adiping elit, sed do
                    eiusmod tempor incidd ut labore rhei et dolore magna aliqua.
                    Ut enim ad veniam, quis laboris nisi ut aliquip ex ea
                    commodo. Duis aute irure dolor in repre voluptate in the
                    velit esse.
                  </p>

                  <div class="main-timeline">
                    <div class="row">
                      <div class="col-md-2 col-sm-2">
                        <div class="experience-time">
                          <h3>2002</h3>
                        </div>
                      </div>
                      <div class="col-md-10 col-sm-10">
                        <div class="timeline">
                          <div class="timeline-content">
                            <h4 class="title">
                              <span
                                ><i
                                  class="fa fa-circle-o"
                                  aria-hidden="true"
                                ></i
                              ></span>
                            </h4>

                            <ul class="description">
                              <li>
                                Duis aute irure dolor in reprehenderit in the
                                voluptate velit esse cillum dolore eu ugiat
                                nulla pariatur cupiat non proident.
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-2 col-sm-2">
                        <div class="experience-time">
                          <h3>2007</h3>
                        </div>
                      </div>
                      <div class="col-md-10 col-sm-10">
                        <div class="timeline">
                          <div class="timeline-content">
                            <h4 class="title">
                              <span
                                ><i
                                  class="fa fa-circle-o"
                                  aria-hidden="true"
                                ></i
                              ></span>
                            </h4>

                            <ul class="description">
                              <li>
                                Duis aute irure dolor in reprehenderit in the
                                voluptate velit esse cillum dolore eu ugiat
                                nulla pariatur cupiat non proident.
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-2 col-sm-2">
                        <div class="experience-time">
                          <h3>2012</h3>
                        </div>
                      </div>
                      <div class="col-md-10 col-sm-10">
                        <div class="timeline">
                          <div class="timeline-content">
                            <h4 class="title">
                              <span
                                ><i
                                  class="fa fa-circle-o"
                                  aria-hidden="true"
                                ></i
                              ></span>
                            </h4>

                            <ul class="description">
                              <li>
                                Duis aute irure dolor in reprehenderit in the
                                voluptate velit esse cillum dolore eu ugiat
                                nulla pariatur cupiat non proident.
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-2 col-sm-2">
                        <div class="experience-time">
                          <h3>2016</h3>
                        </div>
                      </div>
                      <div class="col-md-10 col-sm-10">
                        <div class="timeline">
                          <div class="timeline-content">
                            <h4 class="title">
                              <span
                                ><i
                                  class="fa fa-circle-o"
                                  aria-hidden="true"
                                ></i
                              ></span>
                            </h4>

                            <ul class="description">
                              <li>
                                Duis aute irure dolor in reprehenderit in the
                                voluptate velit esse cillum dolore eu ugiat
                                nulla pariatur cupiat non proident.
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="about-vission-content">
              <div class="col-md-6 col-sm-12">
                <div class="single-about-history">
                  <div class="about-history-txt">
                    <h2>vision and mission</h2>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adiping elit, sed
                      do eiusmod tempor incidd ut labore rhei et dolore magna
                      aliqua. Ut enim ad veniam, quis laboris nisi ut aliquip ex
                      ea commodo. Duis aute irure dolor in repre voluptate in
                      the velit esse.
                    </p>

                    <div class="main-timeline xtra-timeline">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="timeline timeline-ml-20">
                            <div class="timeline-content">
                              <h4 class="title">
                                <span
                                  ><i
                                    class="fa fa-circle-o"
                                    aria-hidden="true"
                                  ></i
                                ></span>
                              </h4>

                              <ul class="description">
                                <li>
                                  Duis aute irure dolor in reprehenderit in the
                                  voluptate velit esse cillum dolore eu ugiat
                                  nulla pariatur cupiat non proident.
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-12">
                          <div class="timeline timeline-ml-20">
                            <div class="timeline-content">
                              <h4 class="title">
                                <span
                                  ><i
                                    class="fa fa-circle-o"
                                    aria-hidden="true"
                                  ></i
                                ></span>
                              </h4>

                              <ul class="description">
                                <li>
                                  Duis aute irure dolor in reprehenderit in the
                                  voluptate velit esse cillum dolore eu ugiat
                                  nulla pariatur cupiat non proident.
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-12">
                          <div class="timeline timeline-ml-20">
                            <div class="timeline-content">
                              <h4 class="title">
                                <span
                                  ><i
                                    class="fa fa-circle-o"
                                    aria-hidden="true"
                                  ></i
                                ></span>
                              </h4>

                              <ul class="description">
                                <li>
                                  Duis aute irure dolor in reprehenderit in the
                                  voluptate velit esse cillum dolore eu ugiat
                                  nulla pariatur cupiat non proident.
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-offset-1 col-md-5 col-sm-12">
                <div class="single-about-history">
                  <div class="about-history-img">
                    <img src="assets/images/about/ab2.jpg" alt="about" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- <section class="statistics">
      <div class="container">
        <div class="statistics-counter">
          <div class="col-md-3 col-sm-6">
            <div class="single-ststistics-box">
              <div class="statistics-img">
                <img
                  src="assets/images/counter/counter1.png"
                  alt="counter-icon"
                />
              </div>
              <div class="statistics-content">
                <div class="counter">2556</div>
                <h3>days worked</h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="single-ststistics-box">
              <div class="statistics-img">
                <img
                  src="assets/images/counter/counter2.png"
                  alt="counter-icon"
                />
              </div>
              <div class="statistics-content">
                <div class="counter">326</div>
                <h3>project finished</h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="single-ststistics-box">
              <div class="statistics-img">
                <img
                  src="assets/images/counter/counter3.png"
                  alt="counter-icon"
                />
              </div>
              <div class="statistics-content">
                <div class="counter">1526</div>
                <h3>coffee cup</h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="single-ststistics-box">
              <div class="statistics-img">
                <img
                  src="assets/images/counter/counter4.png"
                  alt="counter-icon"
                />
              </div>
              <div class="statistics-content">
                <div class="counter">856</div>
                <h3>client satisfied</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- <section class="we-do">
      <div class="container">
        <div class="we-do-details">
          <div class="section-header text-center">
            <h2>what we do</h2>
            <p>
              Pallamco laboris nisi ut aliquip ex ea commodo consequat. Duis
              aute irure dolor in reprehenderit in voluptate velit esse cillum
              dolore eu fugiat nulla pariatur.
            </p>
          </div>
          <div class="we-do-carousel">
            <div class="row">
              <div class="col-sm-4 col-xs-12">
                <div class="single-we-do-box text-center">
                  <div class="we-do-description">
                    <div class="we-do-info">
                      <div class="we-do-img">
                        <img
                          src="assets/images/home/consultency.png"
                          alt="image of consultency"
                        />
                      </div>
                      <div class="we-do-topics">
                        <h2>
                          <a href="#"> Business Consultancy </a>
                        </h2>
                      </div>
                    </div>
                    <div class="we-do-comment">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ul.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-xs-12">
                <div class="single-we-do-box text-center">
                  <div class="we-do-description">
                    <div class="we-do-info">
                      <div class="we-do-img">
                        <img
                          src="assets/images/home/busisness_grow.png"
                          alt="image of business"
                        />
                      </div>
                      <div class="we-do-topics">
                        <h2>
                          <a href="#"> help to grow Business </a>
                        </h2>
                      </div>
                    </div>
                    <div class="we-do-comment">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ul.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-xs-12">
                <div class="single-we-do-box text-center">
                  <div class="we-do-description">
                    <div class="we-do-info">
                      <div class="we-do-img">
                        <img
                          src="assets/images/home/support-logo.png"
                          alt="image of support"
                        />
                      </div>
                      <div class="we-do-topics">
                        <h2>
                          <a href="#"> great support </a>
                        </h2>
                      </div>
                    </div>
                    <div class="we-do-comment">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ul.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- <section class="testemonial">
      <div class="container">
        <div class="section-header text-center">
          <h2>
            <span> what our client say about us </span>
          </h2>
        </div>
        <div class="owl-carousel owl-theme" id="testemonial-carousel">
          <div class="home1-testm item">
            <div class="home1-testm-single text-center">
              <div class="home1-testm-img">
                <img src="assets/images/client/testimonial1.jpg" alt="img" />
              </div>
              <div class="home1-testm-txt">
                <span class="icon section-icon">
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </span>
                <p>
                  Lorem ipsum dolor sit amet conse adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                  enim ad minim veniam..
                </p>
                <h3>
                  <a href="#"> kevin watson </a>
                </h3>
                <h4>CEO, Kingston</h4>
              </div>
            </div>
          </div>
          <div class="home1-testm item">
            <div class="home1-testm-single text-center">
              <div class="home1-testm-img">
                <img src="assets/images/client/testimonial2.jpg" alt="img" />
              </div>
              <div class="home1-testm-txt">
                <span class="icon section-icon">
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </span>
                <p>
                  Lorem ipsum dolor sit amet conse adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                  enim ad minim veniam..
                </p>
                <h3>
                  <a href="#"> kevin watson </a>
                </h3>
                <h4>CEO, Kingston</h4>
              </div>
            </div>
          </div>
          <div class="home1-testm item">
            <div class="home1-testm-single text-center">
              <div class="home1-testm-img">
                <img src="assets/images/client/testimonial1.jpg" alt="img" />
              </div>
              <div class="home1-testm-txt">
                <span class="icon section-icon">
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </span>
                <p>
                  Lorem ipsum dolor sit amet conse adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                  enim ad minim veniam..
                </p>
                <h3>
                  <a href="#"> kevin watson </a>
                </h3>
                <h4>CEO, Kingston</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <?php include_once 'components/footer.php'; ?>
  </body>
</html>
