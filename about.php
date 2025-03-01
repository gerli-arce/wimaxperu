<!DOCTYPE html>
<html class="no-js" lang="en">
  <?php include_once 'components/head.php'; ?>
  <style>
    .hero-section {
      background: linear-gradient(
          rgba(33, 150, 243, 0.9),
          rgba(33, 150, 243, 0.7)
        ),
        url("ruta/a/tu/imagen-hero.jpg");
      background-size: cover;
      background-position: center;
      color: white;
      padding: 100px 0;
      margin-bottom: 50px;
    }

    .section-title {
      color: #2196f3;
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
      color: #2196f3;
      font-weight: 600;
    }

    .blue-divider {
      height: 3px;
      background: #2196f3;
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
      font-family: "Poppins", sans-serif;
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

    p {
      color: #888;
      font-size: 16px;
      font-family: "Poppins", sans-serif;
      max-width: 1000px;
      margin: 0 auto;
      margin-top: 32px;
      line-height: 1.8;
    }

    .certifications-section {
      padding: 30px;
      background-color: #f8f9fa;
    }

    .certifications-content {
      text-align: center;
    }

    .section-title {
      color: #0d6efd;
      font-size: 2.5rem;
      font-weight: 600;
      margin-bottom: 1rem;
    }

    .section-subtitle {
      color: #666;
      font-size: 1.2rem;
      margin-bottom: 3rem;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
    }

    .certifications-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
      padding: 1rem;
    }

    .certification-card {
      background: #fff;
      border-radius: 10px;
      padding: 2rem;
      text-align: center;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .certification-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }

    .certification-image {
      width: 100%;
      height: 150px; /* Ajusta este valor según tus necesidades */
      margin-bottom: 1.5rem;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .certification-image img {
      max-width: 100%;
      max-height: 100%;
      width: auto;
      height: auto;
      object-fit: contain;
    }

    .hero-title {
      font-size: 3.5rem;
      font-weight: 700;
      color: #2196f3;
      margin-bottom: 1.5rem;
    }

    @media (max-width: 768px) {
      .section-title {
        font-size: 2rem;
      }

      .section-subtitle {
        font-size: 1.1rem;
        padding: 0 1rem;
      }

      .certifications-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1.5rem;
      }
    }

    @media (max-width: 576px) {
      .certification-card {
        padding: 1.5rem;
      }

      .certification-icon {
        font-size: 2rem;
      }

      .certification-card h3 {
        font-size: 1.1rem;
      }

      .certification-card p {
        font-size: 0.9rem;
      }
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

    <!-- Main Content -->
    <div class="container">
      <!-- Company Introduction -->
      <div class="row align-items-center mb-5 mt-5">
        <div class="col-lg-6">
          <img
            src="assets/images/logo/logo-dark.png"
            alt="WIMAPERU E.I.R.L."
            class="img-fluid rounded"
          />
        </div>
        <div class="col-lg-6">
          <h2 class="hero-title">WIMAPERU E.I.R.L.</h2>
          <p class="lead">
            Con más de 10 años de trayectoria, nos dedicamos al desarrollo e
            integración en redes y proyectos de conectividad y
            telecomunicaciones con servicios de fibra óptica de alta velocidad.
          </p>
          <p>
            Atendemos a financieras, organizaciones, institutos, colegios,
            municipalidades, entre otros. Tenemos presencia en 10 distritos de
            nuestra región y nuestros clientes principales son empresas
            privadas, cooperativas, Pymes, Entidades Financieras y
            Municipalidades en toda la selva central.
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
                  "Proveer sistemas y servicios avanzados en fibra óptica para
                  empresas públicas y privadas, con el objetivo de mejorar la
                  eficiencia y productividad en las comunicaciones de voz, datos
                  y video."
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
                  "WIMAXPERU al 2030 será el proveedor referente de las
                  telecomunicaciones empresariales logrando un posicionamiento
                  intrínsecamente relacionado con la innovación y la calidad de
                  vida de las personas y facilitar el desarrollo de las empresas
                  privadas y públicas en toda la selva central."
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
                Somos un medio para facilitar, mejorar y potenciar la igualdad
                de oportunidades y el acceso a la educación, a la salud, a los
                servicios del estado, al comercio y a sus necesidades
                cotidianas.
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
                Apoyamos a organizaciones públicas y privadas, comunidades y
                empresas en su gestión para que sean más flexibles, ágiles,
                puedan trabajar colaborativamente.
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
                La innovación es nuestra fuerza motriz para proveer nuevos y
                mejores servicios, generar mejores procesos y sistemas,
                desarrollar nuestra infraestructura y talentos.
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
                    Trabajamos con responsabilidad y máxima estima hacia
                    nuestros clientes en un ambiente de trabajo en equipo donde
                    reina la colaboración permanente, realizando nuestra labor
                    con pasión, confianza y alegría compartida, en pro de la
                    excelencia de las relaciones interpersonales para que
                    trascienda dentro y fuera de la empresa, utilizando la
                    tecnología para convertir el mundo a nuestro alcance en un
                    lugar agradable para vivir.
                  </p>
                </div>
              </div>
              <!-- Iconos de valores -->
              <div class="row mt-4 g-4 section-header">
                <div class="col-md-3 col-sm-6">
                  <div class="value-item">
                    <i
                      class="fas fa-handshake mb-3 text-primary"
                      style="font-size: 3.5rem"
                    ></i>
                    <h5>Responsabilidad</h5>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="value-item">
                    <i
                      class="fas fa-users mb-3 text-primary"
                      style="font-size: 3.5rem"
                    ></i>
                    <h5>Trabajo en Equipo</h5>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="value-item">
                    <i
                      class="fas fa-heart mb-3 text-primary"
                      style="font-size: 3.5rem"
                    ></i>
                    <h5>Pasión</h5>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="value-item">
                    <i
                      class="fas fa-star mb-3 text-primary"
                      style="font-size: 3.5rem"
                    ></i>
                    <h5>Excelencia</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section class="certifications-section">
        <div class="certifications-content">
          <h2 class="hero-title">SOMOS UNA EMPRESA AUTORIZADA POR:</h2>
          <!-- <p class=" ">
            Ejecutamos todo tipo de proyectos de telecomunicaciones que su
            empresa requiera:
          </p> -->

          <div class="certifications-grid">
            <div class="certification-card">
              <div class="certification-image">
                <img
                  src="assets/images/about/mtc.jpeg"
                  alt="img"
                />
              </div>
              <!-- <h3>MTC</h3> -->
            </div>

            <div class="certification-card">
              <div class="certification-image">
                <img
                  src="assets/images/about/osiptel.jpeg"
                  alt="img"
                />
              </div>
              <!-- <h3>MTC</h3> -->
            </div>

            <div class="certification-card">
              <div class="certification-image">
                <img
                  src="assets/images/about/pronatel.jpeg"
                  alt="img"
                />
              </div>
              <!-- <h3>MTC</h3> -->
            </div>
          </div>
        </div>
      </section>

      <section class="certifications-section mt-10">
        <div class="certifications-content">
          <h2 class="hero-title">PRINCIPALES CLIENTES</h2>
         
          <div class="certifications-grid">
            <div class="certification-card">
              <div class="certification-image">
                <img
                  src="assets/images/about/clients/poder_judicial.jpeg"
                  alt="img"
                />
              </div>
              <p>PODER JUDICIAL</p>
            </div>

            <div class="certification-card">
              <div class="certification-image">
                <img
                  src="assets/images/about/clients/munisipalidad_distrital_pichsnaki.jpeg"
                  alt="img"
                />
              </div>
              <p>MUNICIPALIDAD DISTRITAL DE PICHANAQUI</p>
            </div>

            <div class="certification-card">
              <div class="certification-image">
                <img
                  src="assets/images/about/clients/munisipalidad_distrital_rio_negro.jpeg"
                  alt="img"
                />
              </div>
              <p>MUNICIPALIDAD DISTRITAL DE RIO NEGRO</p>
            </div>

            <div class="certification-card">
              <div class="certification-image">
                <img
                  src="assets/images/about/clients/munisipalidad_distrital_rio_tambo.jpeg"
                  alt="img"
                />
              </div>
              <p>MUNICIPALIDAD DISTRITAL DE RIO TAMBO</p>
            </div>

            <div class="certification-card">
              <div class="certification-image">
                <img
                  src="assets/images/about/clients/inpe.jpeg"
                  alt="img"
                />
              </div>
              <p>INPE</p>
            </div>

            <div class="certification-card">
              <div class="certification-image">
                <img
                  src="assets/images/about/clients/fiscalia_de_la_nacion.jpeg"
                  alt="img"
                />
              </div>
              <p>FISCALÍA DE LA NACIÓN</p>
            </div>

            <div class="certification-card">
              <div class="certification-image">
                <img
                  src="assets/images/about/clients/munisipalidad_distrital_pampa_hermosa.jpeg"
                  alt="img"
                />
              </div>
              <p>MUNICIPALIDAD DISTRITAL DE PAMPA HERMOSA</p>
            </div>

            <div class="certification-card">
              <div class="certification-image">
                <img
                  src="assets/images/about/clients/CENTRAL_JUAN_SANTOSATAHUALPA.jpeg"
                  alt="img"
                />
              </div>
              <p>UNIVERSIDAD NACIONAL INTERCULTURAL DE LA SELVA CENTRAL JUAN SANTOS ATAHUALPA</p>
            </div>

            <div class="certification-card">
              <div class="certification-image">
                <img
                  src="assets/images/about/clients/micro_red_salud_mazamari.jpeg"
                  alt="img"
                />
              </div>
              <p>MICRO RED DE SALUD MAZAMARI</p>
            </div>

            <div class="certification-card">
              <div class="certification-image">
                <img
                  src="assets/images/about/clients/red_salud_satipo.jpeg"
                  alt="img"
                />
              </div>
              <p>MICRO RED DE SALUD SATIPO</p>
            </div>

            <div class="certification-card">
              <div class="certification-image">
                <img
                  src="assets/images/about/clients/gobierno_regional_junin.jpeg"
                  alt="img"
                />
              </div>
              <p>GOBIERNO REGIONAL DE JUNIN</p>
            </div>

            <div class="certification-card">
              <div class="certification-image">
                <img
                  src="assets/images/about/clients/red_salud_pangoa_braem.jpeg"
                  alt="img"
                />
              </div>
              <p>RED INTEGRADA DE SALUD PANGOA-VRAEM</p>
            </div>

            <div class="certification-card">
              <div class="certification-image">
                <img
                  src="assets/images/about/clients/osinfor.jpeg"
                  alt="img"
                />
              </div>
              <p>OSINFOR</p>
            </div>

            <div class="certification-card">
              <div class="certification-image">
                <img
                  src="assets/images/about/clients/osinergmin.jpeg"
                  alt="img"
                />
              </div>
              <p>OSINERGMIN</p>
            </div>

            <div class="certification-card">
              <div class="certification-image">
                <img
                  src="assets/images/about/clients/drtc.jpeg"
                  alt="img"
                />
              </div>
              <p>DRTC</p>
            </div>

            <div class="certification-card">
              <div class="certification-image">
                <img
                  src="assets/images/about/clients/ugel_pangoa.jpeg"
                  alt="img"
                />
              </div>
              <p>UGEL PANGOA</p>
            </div>

            <div class="certification-card">
              <div class="certification-image">
                <img
                  src="assets/images/about/clients/ugel_satipo.jpeg"
                  alt="img"
                />
              </div>
              <p>UGEL SATIPO</p>
            </div>

            <div class="certification-card">
              <div class="certification-image">
                <img
                  src="assets/images/about/clients/ugel_pichanaqui.jpeg"
                  alt="img"
                />
              </div>
              <p>UGEL PICHANAKI</p>
            </div>

            <div class="certification-card">
              <div class="certification-image">
                <img
                  src="assets/images/about/clients/ugel_chanchamayo.jpeg"
                  alt="img"
                />
              </div>
              <p>UGEL CHANCHAMAYO</p>
            </div>

            <div class="certification-card">
              <div class="certification-image">
                <img
                  src="assets/images/about/clients/red_salud_chanchamayo.jpeg"
                  alt="img"
                />
              </div>
              <p>RED INTEGRADA DE SALUD CHANCHAMAYO</p>
            </div>

            <div class="certification-card">
              <div class="certification-image">
                <img
                  src="assets/images/about/clients/red_salud_pichanaki.jpeg"
                  alt="img"
                />
              </div>
              <p>RED DE SALUD PICHANAKI</p>
            </div>

            <div class="certification-card">
              <div class="certification-image">
                <img
                  src="assets/images/about/clients/ugel_puerto_bermudez.jpeg"
                  alt="img"
                />
              </div>
              <p>UGEL PUERTO BERMUDEZ</p>
            </div>






          </div>
        </div>
      </section>

    </div>

    <?php include_once 'components/footer.php'; ?>
  </body>
</html>
