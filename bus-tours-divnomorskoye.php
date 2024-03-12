<?php include 'header-slick.html'; ?>
<main>
  <div class="hotel-container container">
    <h1 class="bus-tours-title">с. Дивноморское</h1>
    <span class="bus-tours-map">
      <a href="/">Главная</a>/
      <a href="/#services">Услуги</a>/
      <a href="/bus-tours">Автобусные туры к морю в Краснодарский край из Белгорода</a>/
      <p>с. Дивноморское</p>
    </span>
    <h2 class="bus-tours-description"><b>Дивноморское</b> – входит в состав Большого Геленджика, расположен в 12-ти км к югу от центра города на берегу открытого моря. Уже давно Дивноморское имеет репутацию самого благоустроенного курорта и лучшего «тусовочного» места для молодежного отдыха. Вдоль моря – прекрасная набережная, действует аквапарк и множество аттракционов для всех возрастов.</h2>
    <ul class="bus-tours-hotel-list">
      <li class="bus-tours-hotel-item bus-tours-hotel-hidden">
        <div class="bus-tours-hotel-image">
          <h3 class="hotel-name">гостевой дом «ОЛИМП»</h3>
          <img src="./images/bus-tours/Divnomorskoye/olimp/1.webp" alt="гостевой дом «ОЛИМП»" class="hotel-image">
          <button class="hotel-book-button banner-button-advice">Забронировать</button>
        </div>
        <div class="bus-tours-hotel-info">
          <span>
            <p><b>Расположение:</b></p>
            <p>в центре с.Дивноморское, в 5-ти минутах ходьбы от галечного пляжа, 7-10 минут ходьбы до песчаного пляжа. Вокруг развитая инфраструктура, рядом магазин «Магнит», рынки и т.д.</p>
            <p><b>Условия проживания:</b></p>
            <p>2-х, 3-х, 4-х местные номера категории «стандарт» В каждом номере: холодильник, телевизор, кондиционер, необходимый набор мебели, душ, туалет, балкон.</p>
            <p><b>Питание:</b></p>
            <p>На первом этаже расположена оборудованная кухня для самостоятельного приготовления пищи. Столовые и кафе в шаговой доступности от гостевого дома.</p>
            <p><b>Пляж:</b></p>
            <p>Пляж: в 5-ти минутах ходьбы от галечного пляжа (300 метров), 7-10 минут ходьбы до песчаного пляжа.</p>
            <p><b>К услугам отдыхающих:</b></p>
            <p>бесплатный Wi-Fi.</p>
          </span>
          <a href="/guesthouse-olimp" class="bus-tour-hotel-price-link">Смотреть цены</a>
        </div>
      </li>
    </ul>
    <div class="bus-tours-hotel-list-slider">
      <div class="bus-tours-hotel-item">
        <div class="bus-tours-hotel-image">
          <h3 class="hotel-name">гостевой дом «ОЛИМП»</h3>
          <img src="./images/bus-tours/Divnomorskoye/olimp/1.webp" alt="гостевой дом «ОЛИМП»" class="hotel-image">
          <button class="hotel-book-button banner-button-advice">Забронировать</button>
        </div>
        <div class="bus-tours-hotel-info">
          <span>
            <p><b>Расположение:</b></p>
            <p>в центре с.Дивноморское, в 5-ти минутах ходьбы от галечного пляжа, 7-10 минут ходьбы до песчаного пляжа. Вокруг развитая инфраструктура, рядом магазин «Магнит», рынки и т.д.</p>
            <p><b>Условия проживания:</b></p>
            <p>2-х, 3-х, 4-х местные номера категории «стандарт» В каждом номере: холодильник, телевизор, кондиционер, необходимый набор мебели, душ, туалет, балкон.</p>
            <p><b>Питание:</b></p>
            <p>На первом этаже расположена оборудованная кухня для самостоятельного приготовления пищи. Столовые и кафе в шаговой доступности от гостевого дома.</p>
            <p><b>Пляж:</b></p>
            <p>Пляж: в 5-ти минутах ходьбы от галечного пляжа (300 метров), 7-10 минут ходьбы до песчаного пляжа.</p>
            <p><b>К услугам отдыхающих:</b></p>
            <p>бесплатный Wi-Fi.</p>
          </span>
          <a href="/guesthouse-olimp" class="bus-tour-hotel-price-link">Смотреть цены</a>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include 'footer.html'; ?>
<?php include 'popup-form-advice.html'; ?>

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="./scripts/slick.js"></script>
<script type="text/javascript">
  $(document).on('ready', function() {
    $(".bus-tours-hotel-list-slider").slick({
      dots: false,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
    });
  });
</script>
</body>

</html>