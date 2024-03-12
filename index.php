<?php include 'header.html'; ?>

<main>
  <div class="find-tour">
    <span class="background-image"></span>
    <div class="block-widget">
      <div class="block-title">
        <h1 class="widget-title">НАЙДИТЕ ТУР<br />СВОЕЙ МЕЧТЫ</h1>
        <img src="./images/arrow.svg" alt="иконка">
      </div>
      <div class="widget">
        <!-- <div class="tv-search-form tv-moduleid-9964587"></div> -->
        <div class="tv-search-form tv-moduleid-9964576"></div>
        <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
      </div>
    </div>
  </div>
  <div class="services container">
    <h2 id="services" class="title">УСЛУГИ</h2>
    <ul class="services-list">
      <li>
        <a class="services-link" href="/bus-tours">
          <img class="services-img" src="./images/services/services-1.webp" alt="автобус">
          <p class="services-paragraph">Автобусом к морю в Краснодарский край</p>
        </a>
      </li>
      <li>
        <a class="services-link" href="/world-tours">
          <img class="services-img" src="./images/services/services-2.webp" alt="замок и воздушные шары">
          <p class="services-paragraph">Туры по всему миру</p>
        </a>
      </li>
      <li>
        <a class="services-link" href="/group-tours">
          <img class="services-img" src="./images/services/services-3.webp" alt="дети">
          <p class="services-paragraph">Туры для организованных групп и школьников</p>
        </a>
      </li>
      <li>
        <a class="services-link" href="/spa-treatment">
          <img class="services-img" src="./images/services/services-4.webp" alt="комната отдыха">
          <p class="services-paragraph">Санаторно-курортное лечение</p>
        </a>
      </li>
    </ul>
  </div>
  <div class="banner">
    <div class="banner-container container">
      <div class="banner-info">
        <h2 class="banner-title">туры по&nbsp;акциям<br>со скидкой до 30%</h2>
        <button class="banner-button">Показать</button>
      </div>
      <img src="./images/girl-banner.webp" alt="девушка">
      <p>Image by benzoix on Freepik</p>
    </div>
  </div>
  <div class="news">
    <h2 id="news" class="title">НОВОСТИ</h2>
    <div class="news-container container">
      <!-- Put this script tag to the <head> of your page -->
      <script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>
      <!-- Put this div tag to the place, where the Group block will be -->
      <div id="vk_groups"></div>
      <script type="text/javascript">
        VK.Widgets.Group("vk_groups", {
          mode: 4,
          wide: 1,
          width: "auto",
          height: 600,
          color1: "FFFFFF",
          color2: "000000",
          color3: "5181B8"
        }, 38567056);
      </script>
    </div>
  </div>
  <div class="about container">
    <h2 class="title">О НАС</h2>
    <div class="about-info">
      <span class="description">
        <p class="about-paragraph">
          Мир удивителен и прекрасен. Наша задача - показать его Вам!<br />Мы имеем договора с ведущими туристическими операторами России и готовы предложить своим клиентам туры по всем открытым для туризма направлениям.<br /><br /> Патриотично настроенным туристам мы предлагаем экскурсионные туры по России.<br /><br /> Так же мы являемся туроператором по внутреннему туризму и нашим основным направлением в этой сфере являются автобусные туры в Краснодарский край.
        </p>
      </span>
      <img src="./images/about-image.webp" alt="девушка с картой">
    </div>
    <div class="about-numbers">
      <span>
        <span class="about-number">0</span>
        <p class="about-number-description">года работы</p>
      </span>
      <span>
        <span class="about-number">0</span>
        <p class="about-number-description">направлений отдыха</p>
      </span>
      <span>
        <span class="about-number">0</span>
        <p class="about-number-description">довольных туриста</p>
      </span>
    </div>
  </div>
  <?php include 'banner-2.html'; ?>
</main>

<?php include 'footer.html'; ?>
<?php include 'popup-form.html'; ?>
<?php include 'popup-form-advice.html'; ?>

</body>

</html>