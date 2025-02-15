<!DOCTYPE html>
<html class="no-js" lang="en">
  <?php include_once 'components/head.php'; ?>

  <style>
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

    button {
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

    button:hover {
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
  </style>

  <body>
    <?php include_once 'components/header.php'; ?>
    <?php include_once 'components/menu.php'; ?>

    <!--about-part start-->
    <section class="about-part">
      <div class="container">
        <div class="about-part-details text-center">
          <h2>Contacto</h2>
          <div class="about-part-content">
            <div class="breadcrumbs">
              <div class="container">
                <ol class="breadcrumb">
                  <li><a href="./">Inicio</a><span>//</span></li>
                  <li><a href="contact">contacto</a></li>
                </ol>
              </div>
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

      document
        .getElementById("contactForm")
        .addEventListener("submit", function (e) {
          e.preventDefault();
          // Aquí puedes agregar la lógica para enviar el formulario
          alert("Formulario enviado con éxito!");
        });
    </script>
  </body>
</html>
