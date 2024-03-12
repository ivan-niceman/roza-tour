<?php include 'header-slick.html'; ?>
<main>
  <div class="hotel-container container">
    <h1 class="bus-tours-title">п.Лермонтово</h1>
    <span class="bus-tours-map">
      <a href="/">Главная</a>/
      <a href="/#services">Услуги</a>/
      <a href="/bus-tours">Автобусные туры к морю в Краснодарский край из Белгорода</a>/
      <p>п.Лермонтово</p>
    </span>
    <h2 class="bus-tours-description">Поселок <b>Лермонтово</b> расположен на территории Туапсинского района, на побережье Черного моря. Поселок сочетает в себе невыразимую красоту и притягательность морского берега, очаровательную зелень тропических лесов, величественные Кавказские горы. </h2>
    <ul class="bus-tours-hotel-list">
      <li class="bus-tours-hotel-item bus-tours-hotel-hidden">
        <div class="bus-tours-hotel-image">
          <h3 class="hotel-name">гостевой дом «Бриллианит II»</h3>
          <img src="./images/bus-tours/Lermontovo/brillianite-II/1.webp" alt="гостевой дом «Бриллианит II»" class="hotel-image">
          <button class="hotel-book-button banner-button-advice">Забронировать</button>
        </div>
        <div class="bus-tours-hotel-info">
          <span>
            <p><b>Расположение:</b></p>
            <p>Расположение: 350 метров от моря (5-7 минут пешком)</p>
            <p><b>Условия проживания:</b></p>
            <p>2-х, 3-х местные номера со всеми удобствами. В каждом номере душ, туалет, холодильник, телевизор, кондиционер, необходимый набор мебели. На каждом этаже имеется кулер с водой, утюг и гладильная доска.</p>
            <p><b>Питание:</b></p>
            <p>На территории отеля имеется кухня для самостоятельного приготовления пищи. Возможно 3-х разовое питание за дополнительную плату (в первом корпусе "Бриллианит").</p>
            <p><b>Пляж:</b></p>
            <p>Песчано-галечный, 350 метров от отеля (5-7 минут пешком).</p>
            <p><b>К услугам отдыхающих:</b></p>
            <p>крытый просторный бассейн, двор с местами для отдыха, летней беседкой и мангалом. Рядом кафе с домашней кухней.</p>
          </span>
          <a href="/guesthouse-brillianite-II" class="bus-tour-hotel-price-link">Смотреть цены</a>
        </div>
      </li>
    </ul>
    <div class="bus-tours-hotel-list-slider">
      <div class="bus-tours-hotel-item">
        <div class="bus-tours-hotel-image">
          <h3 class="hotel-name">гостевой дом «Бриллианит II»</h3>
          <img src="./images/bus-tours/Lermontovo/brillianite-II/1.webp" alt="гостевой дом «Бриллианит II»" class="hotel-image">
          <button class="hotel-book-button banner-button-advice">Забронировать</button>
        </div>
        <div class="bus-tours-hotel-info">
          <span>
            <p><b>Расположение:</b></p>
            <p>Расположение: 350 метров от моря (5-7 минут пешком)</p>
            <p><b>Условия проживания:</b></p>
            <p>2-х, 3-х местные номера со всеми удобствами. В каждом номере душ, туалет, холодильник, телевизор, кондиционер, необходимый набор мебели. На каждом этаже имеется кулер с водой, утюг и гладильная доска.</p>
            <p><b>Питание:</b></p>
            <p>На территории отеля имеется кухня для самостоятельного приготовления пищи. Возможно 3-х разовое питание за дополнительную плату (в первом корпусе "Бриллианит").</p>
            <p><b>Пляж:</b></p>
            <p>Песчано-галечный, 350 метров от отеля (5-7 минут пешком).</p>
            <p><b>К услугам отдыхающих:</b></p>
            <p>крытый просторный бассейн, двор с местами для отдыха, летней беседкой и мангалом. Рядом кафе с домашней кухней.</p>
          </span>
          <a href="/guesthouse-brillianite-II" class="bus-tour-hotel-price-link">Смотреть цены</a>
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