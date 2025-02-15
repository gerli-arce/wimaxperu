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

    .contact-section {
      padding: 60px 0;
      background: #f8f9fa;
    }

    .container {
      max-width: 1400px; /* Aumentado de 1200px */
      margin: 0 auto;
      padding: 0 30px;
    }

    .contact-wrapper {
      display: grid;
      grid-template-columns: 450px 1fr; /* Aumentado de 350px */
      gap: 40px; /* Aumentado de 30px */
      margin: 0 auto;
      max-width: 1300px; /* Aumentado de 1000px */
    }

    /* Panel de Información */
    .info-panel {
      background: #2196f3;
      color: white;
      padding: 50px; /* Aumentado de 40px */
      border-radius: 20px; /* Aumentado de 15px */
    }

    .info-panel h3 {
      margin: 0 0 40px; /* Aumentado de 30px */
      font-size: 2rem; /* Aumentado de 1.5rem */
    }

    .contact-info {
      margin-bottom: 50px; /* Aumentado de 40px */
    }

    .info-item {
      display: flex;
      align-items: center;
      margin-bottom: 35px; /* Aumentado de 25px */
    }

    .icon-circle {
      width: 50px; /* Aumentado de 40px */
      height: 50px; /* Aumentado de 40px */
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 20px; /* Aumentado de 15px */
      font-size: 1.2rem; /* Aumentado */
    }

    .info-content {
      display: flex;
      flex-direction: column;
    }

    .info-label {
      font-size: 1.1rem; /* Aumentado de 0.9rem */
      opacity: 0.8;
      margin-bottom: 5px;
    }

    .info-text {
      font-size: 1.2rem; /* Aumentado de 1rem */
    }

    .social-section h4 {
      margin: 0 0 20px;
      font-size: 1.4rem; /* Aumentado de 1.2rem */
    }

    .social-icons {
      display: flex;
      gap: 20px; /* Aumentado de 15px */
    }

    .social-icon {
      width: 45px; /* Aumentado de 35px */
      height: 45px; /* Aumentado de 35px */
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 1.2rem; /* Aumentado */
      transition: all 0.3s ease;
    }

    .social-icon:hover {
      background: rgba(255, 255, 255, 0.2);
      transform: translateY(-3px);
    }

    /* Panel del Formulario */
    .form-panel {
      background: white;
      padding: 50px; /* Aumentado de 40px */
      border-radius: 20px; /* Aumentado de 15px */
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    }

    .form-panel h3 {
      color: #2196f3;
      margin: 0 0 40px; /* Aumentado de 30px */
      font-size: 2rem; /* Aumentado de 1.5rem */
    }

    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 25px; /* Aumentado de 20px */
      margin-bottom: 25px; /* Aumentado de 20px */
    }

    .input-group {
      position: relative;
      margin-bottom: 25px; /* Aumentado de 20px */
    }

    .input-group i {
      position: absolute;
      left: 20px; /* Aumentado de 15px */
      top: 50%;
      transform: translateY(-50%);
      color: #2196f3;
      font-size: 1.2rem; /* Aumentado */
    }

    .input-group input,
    .input-group textarea {
      width: 100%;
      padding: 18px 20px 18px 55px; /* Aumentado */
      border: 2px solid #e0e0e0; /* Aumentado de 1px */
      border-radius: 12px; /* Aumentado de 8px */
      font-size: 1.1rem; /* Aumentado de 1rem */
      transition: all 0.3s ease;
    }

    .input-group textarea {
      padding-top: 18px; /* Aumentado */
      min-height: 180px; /* Aumentado de 120px */
    }

    .input-group textarea + i {
      top: 20px; /* Aumentado de 15px */
      transform: none;
    }

    .input-group input:focus,
    .input-group textarea:focus {
      border-color: #2196f3;
      outline: none;
      box-shadow: 0 0 0 4px rgba(33, 150, 243, 0.1);
    }

    #send {
      background: #2196f3;
      color: white;
      border: none;
      border-radius: 12px; /* Aumentado de 8px */
      padding: 18px 30px; /* Aumentado */
      font-size: 1.2rem; /* Aumentado de 1rem */
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px; /* Aumentado de 10px */
      width: 100%;
      transition: all 0.3s ease;
    }

    #send:hover {
      background: #1976d2;
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(33, 150, 243, 0.25);
    }

    @media (max-width: 992px) {
      .contact-wrapper {
        grid-template-columns: 1fr;
      }

      .container {
        padding: 0 20px;
      }

      .info-panel,
      .form-panel {
        padding: 40px;
      }
    }

    @media (max-width: 576px) {
      .form-row {
        grid-template-columns: 1fr;
      }

      .info-panel,
      .form-panel {
        padding: 30px;
      }

      .info-panel h3,
      .form-panel h3 {
        font-size: 1.8rem;
      }
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

    <div class="contact-section">
      <div class="container">
        <div class="contact-wrapper">
          <div class="info-panel" data-aos="fade-right">
            <h3>Información De Contacto</h3>

            <div class="contact-info">
              <div class="info-item">
                <div class="icon-circle">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="info-content">
                  <span class="info-label">Ubicación</span>
                  <span class="info-text"
                    >Jr. Francisco Irazola N° 10 - Satipo, Chanchamayo,
                    Junín</span
                  >
                </div>
              </div>

              <div class="info-item">
                <div class="icon-circle">
                  <i class="fas fa-phone"></i>
                </div>
                <div class="info-content">
                  <span class="info-label">Teléfono</span>
                  <span class="info-text">+51 960 881 023</span>
                </div>
              </div>

              <div class="info-item">
                <div class="icon-circle">
                  <i class="fas fa-envelope"></i>
                </div>
                <div class="info-content">
                  <span class="info-label">Email</span>
                  <span class="info-text">wimax.pe@gmail.com</span>
                </div>
              </div>
            </div>

            <div class="social-section">
              <h4>Síguenos</h4>
              <div class="social-icons">
                <a href="#" class="social-icon"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a href="#" class="social-icon"
                  ><i class="fab fa-twitter"></i
                ></a>
                <a href="#" class="social-icon"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
                <a href="#" class="social-icon"
                  ><i class="fab fa-instagram"></i
                ></a>
              </div>
            </div>
          </div>

          <!-- Formulario -->
          <div class="form-panel" data-aos="fade-left">
            <h3>Envíanos Un Mensaje</h3>
            <form id="contactForm">
              <div class="form-row">
                <div class="input-group">
                  <i class="fas fa-user"></i>
                  <input type="text" placeholder="Nombre" required />
                </div>
                <div class="input-group">
                  <i class="fas fa-user"></i>
                  <input type="text" placeholder="Apellido" required />
                </div>
              </div>

              <div class="form-row">
                <div class="input-group">
                  <i class="fas fa-envelope"></i>
                  <input type="email" placeholder="Email" required />
                </div>
                <div class="input-group">
                  <i class="fas fa-phone"></i>
                  <input type="tel" placeholder="Teléfono" />
                </div>
              </div>

              <div class="input-group">
                <!-- <i class="fas fa-comment"></i> -->
                <textarea
                  placeholder="Mensaje"
                  rows="4"
                  cols="100"
                  required
                ></textarea>
              </div>

              <button id="send" type="submit">
                Enviar Mensaje
                <i class="fas fa-paper-plane"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php include_once 'components/footer.php'; ?>
    <script>
      AOS.init({
        duration: 1000,
        once: true,
      });
    </script>
  </body>
</html>
