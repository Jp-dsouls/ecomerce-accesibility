<?php
class Header
{
  static function renderHeader()
  {
?>
<!-- Header top -->
<div class="bg-eee app-header-top">
  <div class="app-container-fluid h-100">
    <div class="d-flex">
      <a class="app-left-link" target="_blank" href="#" title="">
        <img draggable="false" height="20" src="#" alt="website icono">
        <span>asdasdasdasd</span>
      </a>
      <a class="app-left-link" target="_blank" href="#" title="" style="margin-left: 8px;">
        <img draggable="false" height="20" src="#" alt="antisoborno icono">
        <span>asdasdasdasd</span>
      </a>
    </div>
    <div class="d-flex align-items-center">
      <ul role="list" class="app-contact-links-top">
        <li>
          <a class="app-social-link" target="_blank" href="#">
            <img draggable="false" src="#" alt="#"
              style="width: 25px; height: 25px; margin-bottom: 0; filter: invert(18%) sepia(98%) saturate(1468%) hue-rotate(184deg) brightness(101%) contrast(105%);">
          </a>
        </li>
      </ul>
      <a class="center-sub-items" title="" target="_blank" href="#">
        <img src="#" height="25" alt="">
      </a>
    </div>
  </div>
</div>
<!-- Main Header -->
<header class="app-header">
  <div class="app-container app-header-row">
    <a class="app-logo-link" href="#">
      <img draggable="false" src="#" alt="Logo">
    </a>
    <div class="d-flex">
      <nav id="desktop-menu" class="app-menu">
        <!-- PRIMER NIVEL -->
        <ul>
          <li class="">
            <a class="app-menu-link" href="#">
              <span>
                asdasdasdasd
              </span>
            </a>
            <a class="app-menu-link" href="#">
              <span>
              </span>
              <svg width="12" height="8">
                <use xlink:href="#arrow-down">
              </svg>
            </a>
            <div class="megamenu d-flex">
              <ul class="bg-white app-container">
                <li>
                  <a href="#" class="app-menu-link">
                    <span> asdasdasdasd </span>
                    <img src="" alt="">
                  </a>
                </li>
              </ul>
            </div>
            <!-- SECTION -->
            <ul class="dropdown">
              <li class="dropdown-container">
                <a class="app-menu-link" href="#">
                  <span> asdasdasdasd </span>
                </a>
                <!-- Segundo Nivel -->
                <a class="app-menu-link" href="#">
                  <span> asdasdasdasd</span>
                  <svg width="12" height="8">
                    <use xlink:href="#arrow-right">
                  </svg>
                </a>
                <!-- Tercer Nivel -->
                <ul class="dropdown">
                  <li>
                    <a class="app-menu-link" href="#">
                      <span>asdasdasd</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <button id="btn-hamburger" role="button" class="bg-white ml-4" aria-label="Presiona para ver menú">
        <svg class="hamburger" width="24" height="16">
          <use xlink:href="#hamburger">
        </svg>
        <svg class="close" width="24" height="16">
          <use xlink:href="#btn-close">
        </svg>
      </button>
    </div>
  </div>
  <div id="overlay-menu" class="overlay-menu"></div>
  <nav id="responsive-menu" class="responsive-menu">
    <ul role="list" id="wrapper-responsive-menu" class="menu-responsive-wrapper">
    </ul>
    <div class="transparence">
      <a href="#" target="_blank">
        <img draggable="false" src="#" alt="">
      </a>
    </div>
  </nav>
</header>

<?php

  }
}

?>