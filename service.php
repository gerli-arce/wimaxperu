<!DOCTYPE html>
<html class="no-js" lang="en">
  <?php include_once 'components/head.php'; ?>
  <style>
    .dedicated-line-section {
      background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
      position: relative;
      overflow: hidden;
    }

    .fiber-line {
      height: 4px;
      width: 100px;
      background: linear-gradient(90deg, #2196f3, #64b5f6);
      margin: 10px auto;
      border-radius: 2px;
    }

    /* Tarjetas de Comparación */
    .comparison-card {
      height: 300px;
      border-radius: 15px;
      position: relative;
      overflow: hidden;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.3s ease;
    }

    .comparison-card:hover {
      transform: translateY(-5px);
    }

    .comparison-card.traditional {
      background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
        url("/path-to-traditional-image.jpg");
      background-size: cover;
    }

    .comparison-card.dedicated {
      background: linear-gradient(
          rgba(33, 150, 243, 0.8),
          rgba(33, 150, 243, 0.8)
        ),
        url("/path-to-dedicated-image.jpg");
      background-size: cover;
    }

    .comparison-content {
      text-align: center;
      padding: 20px;
      z-index: 2;
    }

    .comparison-list {
      list-style: none;
      padding: 0;
      margin: 20px 0 0;
    }

    .comparison-list li {
      margin: 10px 0;
      font-size: 1.1rem;
    }

    /* Tarjetas de Características */
    .feature-card {
      background: white;
      border-radius: 15px;
      padding: 30px;
      text-align: center;
      transition: all 0.3s ease;
      height: 100%;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .feature-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 25px rgba(33, 150, 243, 0.2);
    }

    .feature-icon {
      width: 80px;
      height: 80px;
      margin: 0 auto 20px;
      background: linear-gradient(135deg, #2196f3, #64b5f6);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 2rem;
    }

    /* Lista de Características Moderna */
    .feature-item {
      display: flex;
      align-items: start;
      margin-bottom: 30px;
      padding: 20px;
      background: white;
      border-radius: 10px;
      transition: all 0.3s ease;
    }

    .feature-item:hover {
      transform: translateX(10px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .feature-icon-small {
      width: 50px;
      height: 50px;
      min-width: 50px;
      background: linear-gradient(135deg, #2196f3, #64b5f6);
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      margin-right: 20px;
    }

    .feature-text {
      flex: 1;
    }

    .feature-text h6 {
      margin: 0 0 5px;
      color: #2196f3;
    }

    .feature-text p {
      margin: 0;
      color: #6c757d;
    }

    /* Sección Recomendada */
    .recommended-badge {
      display: inline-block;
      padding: 30px 50px;
      background: white;
      border-radius: 15px;
      box-shadow: 0 5px 20px rgba(33, 150, 243, 0.2);
    }

    .recommended-badge i {
      font-size: 3rem;
      color: #2196f3;
    }

    .services-section {
      background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    }

    .service-block {
      background: white;
      border-radius: 15px;
      padding: 40px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      margin-bottom: 50px;
    }

    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
    }

    .feature-item {
      text-align: center;
      padding: 20px;
      background: #f8f9fa;
      border-radius: 10px;
      transition: all 0.3s ease;
    }

    .feature-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .features-list .feature-item {
      display: flex;
      align-items: center;
      text-align: left;
      gap: 20px;
    }

    .interconnection-benefits {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }

    .benefit-item {
      text-align: center;
      padding: 20px;
      background: #f8f9fa;
      border-radius: 10px;
      transition: all 0.3s ease;
    }

    .benefit-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .telecom-service-card {
      background: white;
      border-radius: 15px;
      padding: 30px;
      text-align: center;
      transition: all 0.3s ease;
      height: 100%;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .telecom-service-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 25px rgba(33, 150, 243, 0.2);
    }

    .dedicated-line-hero {
        padding: 80px 0;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        position: relative;
        overflow: hidden;
    }

    .hero-title {
        font-size: 3.5rem;
        font-weight: 700;
        color: #2196F3;
        margin-bottom: 1.5rem;
    }

    .fiber-badge {
        display: inline-flex;
        align-items: center;
        gap: 15px;
        background: white;
        padding: 15px 30px;
        border-radius: 50px;
        box-shadow: 0 10px 25px rgba(33, 150, 243, 0.2);
    }

    .fiber-icon {
        width: 40px;
        height: 40px;
        background: #2196F3;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }

    .comparison-card {
        background: white;
        border-radius: 20px;
        padding: 40px;
        height: 100%;
        position: relative;
        overflow: hidden;
        transition: transform 0.3s ease;
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }

    .comparison-card:hover {
        transform: translateY(-10px);
    }

    .comparison-card.traditional {
        background: linear-gradient(145deg, #424242, #212121);
        color: white;
    }

    .comparison-card.dedicated {
        background: linear-gradient(145deg, #2196F3, #1976D2);
        color: white;
    }

    .card-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .card-header i {
        font-size: 3rem;
        margin-bottom: 15px;
    }

    .card-header h3 {
        font-size: 1.8rem;
        margin: 0;
    }

    .feature-list {
        list-style: none;
        padding: 0;
        margin: 0 0 30px;
    }

    .feature-list li {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 20px;
        padding: 15px;
        border-radius: 10px;
        background: rgba(255,255,255,0.1);
        backdrop-filter: blur(5px);
        transition: transform 0.3s ease;
    }

    .feature-list li:hover {
        transform: translateX(10px);
    }

    .feature-list li i {
        font-size: 1.2rem;
    }

    .feature-list li.disabled i {
        color: #ff5252;
    }

    .feature-list li.enabled i {
        color: #69f0ae;
    }

    .speed-indicator {
        text-align: center;
        padding: 20px;
        background: rgba(255,255,255,0.1);
        border-radius: 10px;
    }

    .speed-bar {
        height: 6px;
        border-radius: 3px;
        margin-bottom: 10px;
        position: relative;
        overflow: hidden;
    }

    .speed-bar::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
        animation: shimmer 2s infinite;
    }

    .speed-bar.slow {
        background: #ff5252;
        width: 40%;
    }

    .speed-bar.fast {
        background: #69f0ae;
        width: 100%;
    }

    @keyframes shimmer {
        100% {
            left: 100%;
        }
    }

    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }

        .comparison-card {
            padding: 25px;
        }
    }

    @media (max-width: 768px) {
      .interconnection-benefits {
        grid-template-columns: 1fr;
      }
    }
  </style>
  <body>
    <?php include_once 'components/header.php'; ?>
    <?php include_once 'components/menu.php'; ?>

    <!--about-part start-->
    <section class="about-part service-part">
      <div class="container">
        <div class="about-part-details text-center">
          <h2>Servicios</h2>
          <div class="about-part-content">
            <div class="breadcrumbs">
              <div class="container">
                <ol class="breadcrumb">
                  <li><a href="./">Inicio</a><span>//</span></li>
                  <li><a href="service">servicios</a></li>
                </ol>
                <!--/.breadcrumb-->
              </div>
              <!--/.container-->
            </div>
            <!--/.breadcrumbs-->
          </div>
          <!--/.about-part-content-->
        </div>
        <!--/.about-part-details-->
      </div>
      <!--/.container-->
    </section>
    <!--/.about-part-->
    <!--about-part end-->

  <section class="dedicated-line-hero">
    <div class="container">
        <!-- Encabezado con Animación -->
        <div class="text-center mb-5" data-aos="fade-down">
            <h1 class="hero-title">Línea Dedicada Simétrica</h1>
            <div class="fiber-badge" data-aos="zoom-in" data-aos-delay="300">
                <div class="fiber-icon">
                    <i class="fas fa-network-wired"></i>
                </div>
                <span>100% FIBRA ÓPTICA</span>
            </div>
        </div>

        <!-- Descripción Principal -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <p class="lead">
                    Nuestro servicio es provisto a través de <span class="text-primary fw-bold">FIBRA ÓPTICA</span>, 
                    una avanzada plataforma de transporte de datos, basada en una Red de Alta Velocidad, 
                    desarrollada con los más altos estándares de calidad, que le garantizarán a su 
                    organización un servicio de excelencia.
                </p>
            </div>
        </div>

        <!-- Tarjetas Comparativas -->
        <div class="comparison-wrapper">
            <div class="row g-4">
                <!-- Internet Tradicional -->
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="comparison-card traditional">
                        <div class="card-overlay"></div>
                        <div class="comparison-content">
                            <div class="card-header">
                                <i class="fas fa-wifi mb-3"></i>
                                <h3>Internet Tradicional</h3>
                            </div>
                            <ul class="feature-list">
                                <li class="disabled">
                                    <i class="fas fa-times-circle"></i>
                                    <span>Ancho de banda compartido</span>
                                </li>
                                <li class="disabled">
                                    <i class="fas fa-times-circle"></i>
                                    <span>Velocidad variable</span>
                                </li>
                                <li class="disabled">
                                    <i class="fas fa-times-circle"></i>
                                    <span>Sin garantía de servicio</span>
                                </li>
                            </ul>
                            <div class="speed-indicator">
                                <div class="speed-bar slow"></div>
                                <span>Velocidad Reducida</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Internet Dedicado -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="comparison-card dedicated">
                        <div class="card-overlay"></div>
                        <div class="comparison-content">
                            <div class="card-header">
                                <i class="fas fa-bolt mb-3"></i>
                                <h3>Internet Dedicado</h3>
                            </div>
                            <ul class="feature-list">
                                <li class="enabled">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Ancho de banda garantizado</span>
                                </li>
                                <li class="enabled">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Velocidad simétrica</span>
                                </li>
                                <li class="enabled">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Servicio premium garantizado</span>
                                </li>
                            </ul>
                            <div class="speed-indicator">
                                <div class="speed-bar fast"></div>
                                <span>Máxima Velocidad</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <div class="services-section py-5">
      <div class="container">
        <!-- Proyectos de Cámaras de Video Vigilancia -->
        <section class="service-block mb-5 mt-5" data-aos="fade-up">
          <h2 class="text-center mb-5 hero-title">
            Proyectos de Cámaras de Video Vigilancia por Fibra Óptica
          </h2>
          <div class="row align-items-center mt-5">
            <div class="col-lg-6" data-aos="fade-right">
              <img
                src="assets/images/service/camaras.png"
                alt="Cámaras de Vigilancia"
                class="img-fluid rounded shadow-lg mb-4"
              />
            </div>
            <div class="col-lg-6" data-aos="fade-left">
              <p class="lead mb-4">
                Realizamos ejecución de proyectos de cámaras de vídeo vigilancia
                para entidades públicas con los más altos estándares de calidad
                y tecnología.
              </p>

              <div class="row g-4">
                <div
                  class="col-md-6 col-sm-6 mb-3"
                  data-aos="zoom-in"
                  data-aos-delay="100"
                >
                  <div class="telecom-service-card">
                    <i
                      class="fa-solid fa-clapperboard fa-3x text-primary mb-3"
                    ></i>
                    <h5 class="text-bold fs-5">Instalación y Configuración</h5>
                    <p>Central de monitoreo de última generación</p>
                  </div>
                </div>
                <div
                  class="col-md-6 col-sm-6 mb-3"
                  data-aos="zoom-in"
                  data-aos-delay="200"
                >
                  <div class="telecom-service-card">
                    <i class="fas fa-tools fa-3x text-primary mb-3"></i>
                    <h5 class="text-bold fs-5">Mantenimiento</h5>
                    <p>Servicio continuo para sistemas de video vigilancia</p>
                  </div>
                </div>
                <div
                  class="col-md-6 col-sm-6 mb-3"
                  data-aos="zoom-in"
                  data-aos-delay="300"
                >
                  <div class="telecom-service-card">
                    <i class="fas fa-network-wired fa-3x text-primary mb-3"></i>
                    <h5 class="text-bold fs-5">Fibra Óptica</h5>
                    <p>Tendido e implementación de redes de fibra óptica</p>
                  </div>
                </div>
                <div
                  class="col-md-6 col-sm-6 mb-3"
                  data-aos="zoom-in"
                  data-aos-delay="400"
                >
                  <div class="telecom-service-card">
                    <i class="fas fa-camera fa-3x text-primary mb-3"></i>
                    <h5 class="text-bold fs-5">Cámaras Modernas</h5>
                    <p>Equipos inalámbricos de última tecnología</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Internet Satelital -->
        <section class="service-block mb-5" data-aos="fade-up">
          <h2 class="text-center mb-5 hero-title">Internet Satelital</h2>
          <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2" data-aos="fade-left">
              <img
                src="assets/images/service/starlink.png"
                style="height: 350px"
                alt="Internet Satelital"
                class="img-fluid rounded shadow-lg mb-4 mt-3"
              />
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
              <p class="lead mb-4">
                Ofrecemos internet satelital de alta velocidad para lugares
                remotos donde no se cuenta con cobertura de fibra óptica.
              </p>
              <div class="features-list">
                <div
                  class="feature-item"
                  data-aos="fade-up"
                  data-aos-delay="100"
                >
                  <i class="fas fa-tachometer-alt fa-2x text-primary"></i>
                  <div>
                    <h5>Mayor Confiabilidad</h5>
                    <p>
                      Para usuarios de gran demanda con planes de servicio
                      prioritario
                    </p>
                  </div>
                </div>
                <div
                  class="feature-item"
                  data-aos="fade-up"
                  data-aos-delay="200"
                >
                  <i class="fas fa-signal fa-2x text-primary"></i>
                  <div>
                    <h5>Disponibilidad y Conectividad</h5>
                    <p>Para que tu negocio siga creciendo sin interrupciones</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Interconexión entre Sedes -->
        <section class="service-block mb-5" data-aos="fade-up">
          <h2 class="text-center mb-5 hero-title">
            Interconexión entre Sedes y Transporte de Datos
          </h2>
          <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
              <img
                src="assets/images/service/business.jpg"
                alt="Interconexión entre Sedes"
                class="img-fluid rounded shadow-lg mb-4 mt-5"
              />
            </div>
            <div class="col-lg-6" data-aos="fade-left">
              <p class="lead mb-4">
                Si su empresa o entidad tiene varias oficinas o instalaciones
                distribuidas en diferentes lugares, ofrecemos la interconexión
                entre sedes, permitiéndole unificar su red de manera eficiente y
                segura.
              </p>
              <div class="interconnection-benefits" data-aos="fade-up">
                <div class="benefit-item">
                  <i class="fas fa-network-wired fa-3x text-primary"></i>
                  <h5>Red Unificada</h5>
                </div>
                <div class="benefit-item">
                  <i class="fas fa-lock fa-3x text-primary"></i>
                  <h5>Seguridad Mejorada</h5>
                </div>
                <div class="benefit-item">
                  <i class="fas fa-chart-line fa-3x text-primary"></i>
                  <h5>Mayor Eficiencia</h5>
                </div>
                <div class="benefit-item">
                  <i class="fas fa-sync fa-3x text-primary"></i>
                  <h5>Sincronización en Tiempo Real</h5>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Proyectos de Telecomunicaciones -->
        <section class="service-block" data-aos="fade-up">
          <h2 class="text-center mb-5 hero-title">Proyectos de Telecomunicaciones</h2>
          <p class="lead text-center mb-5">
            Ejecutamos todo tipo de proyectos de telecomunicaciones que su
            empresa requiera:
          </p>
          <div class="row g-4">
            <div
              class="col-md-4 col-sm-6 mb-3"
              data-aos="zoom-in"
              data-aos-delay="100"
            >
              <div class="telecom-service-card">
                <i class="fas fa-project-diagram fa-3x text-primary mb-3"></i>
                <h5>Enlaces punto a punto</h5>
                <p>Conexiones directas de alta velocidad entre ubicaciones</p>
              </div>
            </div>
            <div
              class="col-md-4 col-sm-6 mb-3"
              data-aos="zoom-in"
              data-aos-delay="200"
            >
              <div class="telecom-service-card">
                <i class="fas fa-network-wired fa-3x text-primary mb-3"></i>
                <h5>Cableado estructurado</h5>
                <p>Sistemas de cableado organizados y eficientes</p>
              </div>
            </div>
            <div
              class="col-md-4 col-sm-6 mb-3"
              data-aos="zoom-in"
              data-aos-delay="300"
            >
              <div class="telecom-service-card">
                <i class="fas fa-shopping-cart fa-3x text-primary mb-3"></i>
                <h5>Compra y venta de bienes</h5>
                <p>Equipos y suministros de telecomunicaciones</p>
              </div>
            </div>
            <div
              class="col-md-4 col-sm-6 mb-3"
              data-aos="zoom-in"
              data-aos-delay="400"
            >
              <div class="telecom-service-card">
                <i class="fas fa-broadcast-tower fa-3x text-primary mb-3"></i>
                <h5>Radio enlaces</h5>
                <p>Comunicaciones inalámbricas de largo alcance</p>
              </div>
            </div>
            <div
              class="col-md-4 col-sm-6 mb-3"
              data-aos="zoom-in"
              data-aos-delay="500"
            >
              <div class="telecom-service-card">
                <i class="fas fa-tv fa-3x text-primary mb-3"></i>
                <h5>Servicio de tv cable</h5>
                <p>Instalación y mantenimiento de sistemas de cable</p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

    <!--/.service-->
    <!--service end-->
    <?php include_once 'components/footer.php'; ?>

    <script>
      // Inicializar AOS
      AOS.init({
        duration: 1000,
        once: true,
      });
    </script>
  </body>
</html>
