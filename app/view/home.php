<?php
require_once __DIR__ . "/../components/Head.php";
require_once __DIR__ . "/../components/Header.php";
require_once __DIR__ . "/../components/Footer.php";
?>

<!-- Head & Header -->
<?php
echo Head::renderHead("Emilima", "empresa, emilima", [], ["https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.10.1/viewer.min.css"]);
echo Header::renderHeader();
?>




<!-- COVER PAGE -->
<section class="app-cover-page bg-black scroll-wrapp">
  <div class="app-slide-progress">
    <div class="progress-cover"></div>
  </div>
  <div id="cover-swiper" class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide swiper-cover-item">
        <img draggable="false" src="#" alt="">
        <div class="app-content-slide">
          <div class="app-container app-slide-item">
            <h1 class="app-title-slide">asdasdasd</h1>
            <div>
              <a class="app-content-link" href="#" target="_blank">
                <span>asdasdasd</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>
<!-- END COVER PAGE -->

<section class="d-flex scroll-wrapp">
  <div class="app-container">
    <div class="app-about-section">
      <div class="app-about-image scroll-item">
        <img draggable="false" src="#" alt="">
      </div>
      <div class="app-about-description ">
        <h3 class="app-title-section scroll-item">asdasdasdasd</h3>
        <p class="scroll-item">asdasdasdasd</p>
        <div class="scroll-item">
          <a class="app-content-link small-link" href="#">
            <span>asdasdasdasd</span>
          </a>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="app-padding-section bg-eee d-flex scroll-wrapp">
  <div class="app-container">
    <h2 class="app-title-section c-primary-1 t-align-center scroll-item">Nuestros Servicios</h2>

    <div class="app-list-container">
      <a class="app-grid-item t-decoration" href="#">
        <div class="app-service-card scroll-item">
          <div class="icon-service center-sub-items">
            <img src="#" alt="">
          </div>
          <div class="description-service t-align-center">
            <h4 class="title-service">sadasdasd</h4>
            <p>sadasdasd</p>
          </div>
        </div>
      </a>
    </div>

  </div>
</section>


<section class="app-padding-section d-flex scroll-wrapp">
  <div class="app-container o-hidden">
    <h2 class="app-title-section t-align-center scroll-item">asdasd</h2>

    <!-- Swiper -->
    <div id="swiper-notices" class="swiper swiper-arrows scroll-item">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="app-notice-card">
            <img src="#" alt="noticia">
            <div class="notice-details">
              <span class="date-notice">23/01/1998
              </span>
              <h4 class="title-notice">asdasdas</h4>
              <p class="description-notice"></p>
              <a class="link-notice" href="#">VEWR MÁS</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Add Arrows -->
      <div class="swiper-button-next">
        <svg width="19" height="30">
          <use xlink:href="#arrow-next">
        </svg>
      </div>
      <div class="swiper-button-prev">
        <svg width="19" height="30">
          <use xlink:href="#arrow-prev">
        </svg>
      </div>

    </div>


    <!-- Swiper -->
  </div>
</section>

<section class="app-padding-section bg-eee d-flex scroll-wrapp">
  <div class="app-container o-hidden">
    <h2 class="app-title-section c-primary-1 t-align-center scroll-item">Algunos Proyectos</h2>
    <!-- Swiper -->
    <div id="swiper-projects" class="swiper swiper-arrows">
      <div class="swiper-wrapper">
        <div class="swiper-slide slide-project">
          <div class="left-content t-align-right scroll-item">
            <div class="description-container ">
              <span class="category-name text-uppercase">
              </span>
              <h4 class="project-name">SADASDASD</h4>
              <p class="description pre-wrapp">SADASDASD</p>
              <a class="app-content-link small-link" href="<?php echo $some_project['link'] ?>">
                <span>Ver más</span>
              </a>
            </div>
          </div>
          <div class="right-content d-flex align-items-center scroll-item">
            <img class="img-fluid" src="#" alt="">
          </div>
        </div>

      </div>
      <!-- Add Arrows Nav -->
      <div class="swiper-button-next">
        <svg width="19" height="30">
          <use xlink:href="#arrow-next">
        </svg>
      </div>
      <div class="swiper-button-prev">
        <svg width="19" height="30">
          <use xlink:href="#arrow-prev">
        </svg>
      </div>
    </div>
  </div>
</section>

<div id="popup-list" class="d-none">
  <img class="popup-img" data-url="#" src="#" alt="">
</div>


<!-- FOOTER -->
<?php
echo Footer::renderFooter([]);
?>
<!-- END FOOTER -->