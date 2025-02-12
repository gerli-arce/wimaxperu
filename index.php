<!DOCTYPE html>
<html class="no-js" lang="en">
  <?php include_once 'components/head.php'; ?>

  <style>
    /* Estilos Generales */
    .section-title {
      color: #2196f3;
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .section-divider {
      height: 4px;
      width: 60px;
      background: linear-gradient(90deg, #2196f3, #64b5f6);
      margin: 1rem auto;
      border-radius: 2px;
    }

    .section-description {
      color: #666;
      font-size: 2rem;
      max-width: 800px;
      margin: 0 auto;
    }

    /* Estilos de Tarjetas de Ofertas */
    .offering-card {
      background: white;
      border-radius: 15px;
      padding: 2rem;
      transition: all 0.3s ease;
      height: 100%;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      position: relative;
      overflow: hidden;
    }

    .offering-card:hover {
      transform: translateY(-10px);
    }

    .offering-card::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 4px;
      background: linear-gradient(90deg, #2196f3, #64b5f6);
      transition: height 0.3s ease;
    }

    .offering-card:hover::before {
      height: 8px;
    }

    .card-icon {
      width: 70px;
      height: 70px;
      background: linear-gradient(135deg, #2196f3, #64b5f6);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 1.5rem;
      color: white;
      font-size: 1.5rem;
      transition: transform 0.3s ease;
    }

    .offering-card:hover .card-icon {
      transform: rotateY(180deg);
    }

    .learn-more {
      color: #2196f3;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      margin-top: 1rem;
      transition: gap 0.3s ease;
    }

    .learn-more:hover {
      gap: 1rem;
    }

    /* Estilos de Sobre Nosotros */
    .about-image {
      position: relative;
    }

    .experience-badge {
      position: absolute;
      bottom: -20px;
      right: -20px;
      background: #2196f3;
      color: white;
      padding: 1.5rem;
      border-radius: 50%;
      text-align: center;
      width: 120px;
      height: 120px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      box-shadow: 0 5px 15px rgba(33, 150, 243, 0.3);
    }

    .experience-badge .number {
      font-size: 1.5rem;
      font-weight: 700;
    }

    .experience-badge .text {
      font-size: 0.8rem;
    }

    .stats-row {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 1rem;
    }

    .stat-item {
      text-align: center;
      padding: 1rem;
      background: #f8f9fa;
      border-radius: 10px;
      transition: transform 0.3s ease;
    }

    .stat-item:hover {
      transform: translateY(-5px);
    }

    .stat-number {
      display: block;
      font-size: 1.8rem;
      font-weight: 700;
      color: #2196f3;
    }

    .stat-label {
      color: #666;
      font-size: 1.3rem;
    }

    /* Estilos de Tarjetas de Servicios */
    .service-card {
      background: white;
      border-radius: 15px;
      padding: 2rem;
      height: 100%;
      transition: all 0.3s ease;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      position: relative;
      overflow: hidden;
    }

    .service-card:hover {
      transform: translateY(-10px);
    }

    .service-icon {
      width: 60px;
      height: 60px;
      background: linear-gradient(135deg, #2196f3, #64b5f6);
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 1.5rem;
      margin-bottom: 1.5rem;
      transition: all 0.3s ease;
    }

    .service-card:hover .service-icon {
      border-radius: 50%;
      transform: rotateY(180deg);
    }

    .service-link {
      color: #2196f3;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      margin-top: 1rem;
      transition: all 0.3s ease;
    }

    .service-link:hover {
      gap: 1rem;
    }

    @media (max-width: 768px) {
      .section-title {
        font-size: 2rem;
      }

      .experience-badge {
        width: 100px;
        height: 100px;
        right: 0;
      }

      .stats-row {
        grid-template-columns: repeat(2, 1fr);
      }
    }
  </style>

  <body>
    <?php include_once 'components/header.php'; ?>
    <?php include_once 'components/menu.php'; ?>

    <section class="header-slider-area">
      <div
        id="carousel-example-generic"
        class="carousel slide carousel-fade"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#carousel-example-generic"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="single-slide-item slide-1">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="single-slide-item-content">
                      <h2>
                        Internet Rápido <br />
                        para tu Negocio
                      </h2>
                      <p>
                        Ofrecemos soluciones de internet confiables y de alta
                        velocidad para que tu empresa siempre esté conectada y
                        en movimiento.
                      </p>
                      <button
                        type="button"
                        class="slide-btn"
                        onclick="window.location.href='contact'"
                      >
                        Contratar ahora
                      </button>
                      <button type="button" class="slide-btn">
                        Más información
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="single-slide-item slide-2">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="single-slide-item-content">
                      <h2>
                        Conéctate con <br />
                        el Futuro
                      </h2>
                      <p>
                        Somos el proveedor líder en soluciones de internet,
                        listos para brindarte la mejor conexión y llevar tu
                        negocio al siguiente nivel.
                      </p>
                      <button type="button" class="slide-btn">
                        Comenzar ahora
                      </button>
                      <button type="button" class="slide-btn">
                        Explorar más
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <a
          class="left carousel-control"
          href="#carousel-example-generic"
          role="button"
          data-slide="prev"
        >
          <span class="lnr lnr-chevron-left"></span>
        </a>
        <a
          class="right carousel-control"
          href="#carousel-example-generic"
          role="button"
          data-slide="next"
        >
          <span class="lnr lnr-chevron-right"></span>
        </a>
      </div>
    </section>

    <section class="offerings-section py-5">
      <div class="container">
        <!-- Encabezado de la Sección -->
        <div class="text-center mb-5 mt-5" data-aos="fade-up">
          <h2 class="section-title">¿Qué ofrecemos?</h2>
          <div class="section-divider"></div>
          <p class="section-description section-header">
            Brindamos soluciones de internet de alta velocidad y confiabilidad.
            Conéctate sin interrupciones y disfruta de una experiencia en línea
            sin límites para tu hogar o negocio.
          </p>
        </div>

        <!-- Tarjetas de Servicios -->
        <div class="row g-4">
          <!-- Internet Alta Velocidad -->
          <div
            class="col-lg-4 col-md-6"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="offering-card">
              <div class="card-icon">
                <i class="fas fa-bolt"></i>
              </div>
              <div class="card-content">
                <h3>Internet de Alta Velocidad</h3>
                <p>
                  Conexión rápida y estable para que disfrutes de una navegación
                  sin interrupciones en todo momento.
                </p>
                <a href="#" class="learn-more">
                  Saber más <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Soluciones Empresariales -->
          <div
            class="col-lg-4 col-md-6"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="offering-card">
              <div class="card-icon">
                <i class="fas fa-building"></i>
              </div>
              <div class="card-content">
                <h3>Soluciones para Empresas</h3>
                <p>
                  Servicios personalizados para que tu empresa tenga la mejor
                  conectividad y productividad.
                </p>
                <a href="#" class="learn-more">
                  Saber más <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Soporte Técnico -->
          <div
            class="col-lg-4 col-md-6"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <div class="offering-card">
              <div class="card-icon">
                <i class="fas fa-headset"></i>
              </div>
              <div class="card-content">
                <h3>Soporte Técnico 24/7</h3>
                <p>
                  Atención personalizada en todo momento para garantizar tu
                  conexión sin interrupciones.
                </p>
                <a href="#" class="learn-more">
                  Saber más <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Sección Sobre Nosotros -->
    <section class="about-section py-5 mt-10">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="about-content">
              <h2 class="section-title text-center">Sobre Nosotros</h2>
              <div class="section-divider"></div>
              <p class="lead mb-4">
                Somos un proveedor líder de servicios de internet, comprometidos
                con ofrecer conexiones rápidas, estables y seguras.
              </p>
              <p class="section-header">
                Nuestro objetivo es brindarte la mejor experiencia en
                conectividad, ya sea para tu hogar o negocio, con un servicio
                confiable y un soporte excepcional.
              </p>
              <div class="stats-row mt-4">
                <div class="stat-item">
                  <span class="stat-number">10+</span>
                  <span class="stat-label">Años de Experiencia</span>
                </div>
                <div class="stat-item">
                  <span class="stat-number">1000+</span>
                  <span class="stat-label">Clientes Satisfechos</span>
                </div>
                <div class="stat-item">
                  <span class="stat-number">24/7</span>
                  <span class="stat-label">Soporte Técnico</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="about-image">
              <img
                src="assets/images/home/wifi.jpg"
                alt="Sobre Nosotros"
                class="img-fluid rounded-lg shadow-lg"
              />
              <div class="experience-badge">
                <span class="number">10+</span>
                <span class="text">Años de Experiencia</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Sección Servicios -->
    <section class="services-section py-5 mt-10">
      <div class="container">
        <!-- Encabezado de Servicios -->
        <div class="text-center mb-5" data-aos="fade-up">
          <h2 class="section-title">Nuestros Servicios</h2>
          <div class="section-divider"></div>
          <p class="section-description">
            Ofrecemos soluciones de internet de alta velocidad, confiables y
            seguras para hogares y empresas. Conéctate sin límites con nuestro
            servicio de calidad.
          </p>
        </div>

        <!-- Grid de Servicios -->
        <div class="row g-4">
          <!-- Servicio 1 -->
          <div
            class="col-lg-4 col-md-6 mb-4"
            data-aos="zoom-in"
            data-aos-delay="100"
          >
            <div class="service-card">
              <div class="service-icon">
                <i class="fas fa-wifi"></i>
              </div>
              <h3>Internet de Alta Velocidad</h3>
              <p>
                Disfruta de una conexión estable y veloz para todas tus
                necesidades digitales.
              </p>
              <a href="#" class="service-link">
                Explorar <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Servicio 2 -->
          <div
            class="col-lg-4 col-md-6 mb-4"
            data-aos="zoom-in"
            data-aos-delay="200"
          >
            <div class="service-card">
              <div class="service-icon">
                <i class="fas fa-building"></i>
              </div>
              <h3>Soluciones Empresariales</h3>
              <p>
                Planes personalizados para garantizar la mejor conectividad en
                tu empresa.
              </p>
              <a href="#" class="service-link">
                Explorar <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Servicio 3 -->
          <div
            class="col-lg-4 col-md-6 mb-4"
            data-aos="zoom-in"
            data-aos-delay="300"
          >
            <div class="service-card">
              <div class="service-icon">
                <i class="fas fa-tasks"></i>
              </div>
              <h3>Planes Flexibles</h3>
              <p>
                Elige el plan que mejor se adapte a tus necesidades y
                presupuesto.
              </p>
              <a href="#" class="service-link">
                Explorar <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Servicio 4 -->
          <div
            class="col-lg-4 col-md-4"
            data-aos="zoom-in"
            data-aos-delay="400"
          >
            <div class="service-card">
              <div class="service-icon">
                <i class="fas fa-shield-alt"></i>
              </div>
              <h3>Seguridad y Protección</h3>
              <p>
                Navega con tranquilidad con nuestras medidas avanzadas de
                seguridad.
              </p>
              <a href="#" class="service-link">
                Explorar <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Servicio 5 -->
          <div
            class="col-lg-4 col-md-6 mb-4"
            data-aos="zoom-in"
            data-aos-delay="500"
          >
            <div class="service-card">
              <div class="service-icon">
                <i class="fas fa-comments"></i>
              </div>
              <h3>Asesoría Personalizada</h3>
              <p>
                Te ayudamos a elegir la mejor opción para optimizar tu
                conectividad.
              </p>
              <a href="#" class="service-link">
                Explorar <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Servicio 6 -->
          <div
            class="col-lg-4 col-md-6 mb-4"
            data-aos="zoom-in"
            data-aos-delay="600"
          >
            <div class="service-card">
              <div class="service-icon">
                <i class="fas fa-headset"></i>
              </div>
              <h3>Soporte Técnico 24/7</h3>
              <p>
                Atención rápida y eficiente para resolver cualquier
                inconveniente.
              </p>
              <a href="#" class="service-link">
                Explorar <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="we-do">
      <div class="container">
        <div class="we-do-details">
          <div class="section-header text-center">
            <h2>¿Qué ofrecemos?</h2>
            <p>
              Brindamos soluciones de internet de alta velocidad y
              confiabilidad. Conéctate sin interrupciones y disfruta de una
              experiencia en línea sin límites para tu hogar o negocio.
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
                          src="assets/images/home/internet1.jpg"
                          alt="image of high-speed internet"
                        />
                      </div>
                      <div class="we-do-topics">
                        <h2>
                          <a href="#"> Internet de Alta Velocidad </a>
                        </h2>
                      </div>
                    </div>
                    <div class="we-do-comment">
                      <p>
                        Conexión rápida y estable para que disfrutes de una
                        navegación sin interrupciones en todo momento.
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
                          src="assets/images/home/solutionsbusiness.jpg"
                          alt="image of business solutions"
                        />
                      </div>
                      <div class="we-do-topics">
                        <h2>
                          <a href="#"> Soluciones para Empresas </a>
                        </h2>
                      </div>
                    </div>
                    <div class="we-do-comment">
                      <p>
                        Servicios personalizados para que tu empresa tenga la
                        mejor conectividad y productividad.
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
                          src="assets/images/home/support.jpg"
                          alt="image of customer support"
                        />
                      </div>
                      <div class="we-do-topics">
                        <h2>
                          <a href="#"> Soporte Técnico 24/7 </a>
                        </h2>
                      </div>
                    </div>
                    <div class="we-do-comment">
                      <p>
                        Atención personalizada en todo momento para garantizar
                        tu conexión sin interrupciones.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="about-us">
      <div class="container">
        <div class="about-us-content">
          <div class="row">
            <div class="col-sm-6">
              <div class="single-about-us">
                <div class="about-us-txt">
                  <h2>Sobre Nosotros</h2>
                  <p>
                    Somos un proveedor líder de servicios de internet,
                    comprometidos con ofrecer conexiones rápidas, estables y
                    seguras. Nuestro objetivo es brindarte la mejor experiencia
                    en conectividad, ya sea para tu hogar o negocio, con un
                    servicio confiable y un soporte excepcional.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="single-about-us">
                <div class="about-us-img">
                  <img
                    src="assets/images/about/about-part.jpg"
                    alt="about images"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="service">
      <div class="container">
        <div class="service-details">
          <div class="section-header text-center">
            <h2>Nuestros Servicios</h2>
            <p>
              Ofrecemos soluciones de internet de alta velocidad, confiables y
              seguras para hogares y empresas. Conéctate sin límites con nuestro
              servicio de calidad.
            </p>
          </div>
          <div class="service-content-one">
            <div class="row">
              <div class="col-sm-4 col-xs-12">
                <div class="service-single text-center">
                  <div class="service-img">
                    <img
                      src="assets/images/service/service1.png"
                      alt="image of service"
                    />
                  </div>
                  <div class="service-txt">
                    <h2>
                      <a href="#">Internet de Alta Velocidad</a>
                    </h2>
                    <p>
                      Disfruta de una conexión estable y veloz para todas tus
                      necesidades digitales.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-xs-12">
                <div class="service-single text-center">
                  <div class="service-img">
                    <img
                      src="assets/images/service/service2.png"
                      alt="image of service"
                    />
                  </div>
                  <div class="service-txt">
                    <h2>
                      <a href="#">Soluciones Empresariales</a>
                    </h2>
                    <p>
                      Planes personalizados para garantizar la mejor
                      conectividad en tu empresa
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-xs-12">
                <div class="service-single text-center">
                  <div class="service-img">
                    <img
                      src="assets/images/service/service3.png"
                      alt="image of service"
                    />
                  </div>
                  <div class="service-txt">
                    <h2>
                      <a href="#">Planes Flexibles</a>
                    </h2>
                    <p>
                      Elige el plan que mejor se adapte a tus necesidades y
                      presupuesto.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="service-content-two">
            <div class="row">
              <div class="col-sm-4 col-xs-12">
                <div class="service-single text-center">
                  <div class="service-img">
                    <img
                      src="assets/images/service/service4.png"
                      alt="image of service"
                    />
                  </div>
                  <div class="service-txt">
                    <h2>
                      <a href="#">Seguridad y Protección</a>
                    </h2>
                    <p>
                      Navega con tranquilidad con nuestras medidas avanzadas de
                      seguridad.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-xs-12">
                <div class="service-single text-center">
                  <div class="service-img">
                    <img
                      src="assets/images/service/service5.png"
                      alt="image of service"
                    />
                  </div>
                  <div class="service-txt">
                    <h2>
                      <a href="#">Asesoría Personalizada</a>
                    </h2>
                    <p>
                      Te ayudamos a elegir la mejor opción para optimizar tu
                      conectividad
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-xs-12">
                <div class="service-single text-center">
                  <div class="service-img">
                    <img
                      src="assets/images/service/service6.png"
                      alt="image of service"
                    />
                  </div>
                  <div class="service-txt">
                    <h2>
                      <a href="#">Soporte Técnico 24/7</a>
                    </h2>
                    <p>
                      Atención rápida y eficiente para resolver cualquier
                      inconveniente
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section class="contact">
      <div class="container">
        <div class="contact-details">
          <div class="section-header contact-head text-center">
            <h2>Contáctanos</h2>
            <p>
              Estamos aquí para brindarte el mejor servicio de internet.
              Contáctanos para asesoría, soporte o para conocer más sobre
              nuestros planes y soluciones.
            </p>
          </div>
          <div class="contact-content">
            <div class="row">
              <div class="col-sm-offset-1 col-sm-5">
                <div class="single-contact-box">
                  <div class="contact-right">
                    <div class="contact-adress">
                      <div class="contact-office-address">
                        <h3>Información de contacto</h3>
                        <br />
                        <div class="contact-online-address">
                          <div class="single-online-address">
                            <i class="fa fa-phone"></i>
                            +51 954 017 375
                          </div>

                          <div class="single-online-address">
                            <i class="fa fa-envelope-o"></i>
                            <span>wimax.pe@gmail.com</span>
                          </div>
                        </div>
                      </div>
                      <div class="contact-office-address">
                        <h3>Redes sociales</h3>
                        <div class="contact-icon">
                          <ul>
                            <li>
                              <a href="#"
                                ><i
                                  class="fa fa-facebook"
                                  aria-hidden="true"
                                ></i
                              ></a>
                            </li>
                            <li>
                              <a href="#"
                                ><i
                                  class="fa fa-google-plus"
                                  aria-hidden="true"
                                ></i
                              ></a>
                            </li>
                            <li>
                              <a href="#"
                                ><i
                                  class="fa fa-linkedin"
                                  aria-hidden="true"
                                ></i
                              ></a>
                            </li>
                            <li>
                              <a href="#"
                                ><i class="fa fa-twitter" aria-hidden="true"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-5">
                <div class="single-contact-box">
                  <div class="contact-form">
                    <h3>Déjanos un masaje aquí</h3>
                    <form>
                      <div class="row">
                        <div class="col-sm-6 col-xs-12">
                          <div class="form-group">
                            <input
                              type="text"
                              class="form-control"
                              id="firstname"
                              placeholder="Nombres"
                              name="firstname"
                            />
                          </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <div class="form-group">
                            <input
                              type="text"
                              class="form-control"
                              id="lastname"
                              placeholder="Apellidos"
                              name="laststname"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-12">
                          <div class="form-group">
                            <input
                              type="email"
                              class="form-control"
                              id="email"
                              placeholder="Email"
                              name="email"
                            />
                          </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <div class="form-group">
                            <input
                              type="text"
                              class="form-control"
                              id="phone"
                              placeholder="Teléfono"
                              name="phone"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <textarea
                              class="form-control"
                              rows="7"
                              id="comment"
                              placeholder="Mensaje"
                            ></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="single-contact-btn pull-right">
                            <button class="contact-btn" type="button">
                              ENVIAR CONSULTA
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include_once 'components/footer.php'; ?>
    <script>
      AOS.init({
        duration: 1000,
        once: true,
      });
    </script>
  </body>
</html>
