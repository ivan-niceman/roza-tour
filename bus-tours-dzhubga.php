<?php include 'header-slick.html'; ?>
<main>
  <div class="hotel-container container">
    <h1 class="bus-tours-title">п. Джубга</h1>
    <span class="bus-tours-map">
      <a href="/">Главная</a>/
      <a href="/#services">Услуги</a>/
      <a href="/bus-tours">Автобусные туры к морю в Краснодарский край из Белгорода</a>/
      <p>п. Джубга</p>
    </span>
    <h2 class="bus-tours-description"><b>Поселок Джубга</b> – один из самых посещаемых курортных поселков Черноморского побережья Кавказа. Расположен в Туапсинском районе Краснодарского края. Огромная популярность Джубги связана с ее отличным расположением. <b>Пляж в Джубге</b> песчаный, очень удобный и для детей, и для взрослых. Здесь есть разнообразные водные развлечения и аттракционы, гидроциклы, организуются морские прогулки. Вдоль пляжа – набережная, кафе и дискотеки. В поселке имеется <b>аквапарк.</b></h2>
    <ul class="bus-tours-hotel-list">
      <li class="bus-tours-hotel-item bus-tours-hotel-hidden">
        <div class="bus-tours-hotel-image">
          <h3 class="hotel-name">гостевой дом Татьяна</h3>
          <img src="./images/bus-tours/Dzhubga/tatiana/1.webp" alt="гостевой дом Татьяна" class="hotel-image">
          <button class="hotel-book-button banner-button-advice">Забронировать</button>
        </div>
        <div class="bus-tours-hotel-info">
          <span>
            <p><b>Расположение:</b></p>
            <p>350 метров от моря (5-7 минут пешком)</p>
            <p><b>Условия проживания:</b></p>
            <p>2-х, 3-х, 4-х местные номера категории «стандарт» и «комфорт». В каждом номере душ, туалет, холодильник, телевизор, кондиционер, необходимый набор мебели. Номера категории «комфорт» большей площади, имеют прямой выход на балкон, построены в 2019 году.</p>
            <p><b>Питание:</b></p>
            <p>Имеется оборудованная кухня для самостоятельного приготовления пищи.</p>
            <p><b>Пляж:</b></p>
            <p>песчаный, 350 метров от отеля (5-7 минут пешком).</p>
            <p><b>К услугам отдыхающих:</b></p>
            <p>большой двор с местами для отдыха, летней беседкой и мангалом. Рядом кафе с домашней кухней. В 3-х минутах ходьбы от гостевого дома расположен <b>аквапарк</b>.</p>
          </span>
          <a href="/guesthouse-tatiana" class="bus-tour-hotel-price-link">Смотреть цены</a>
        </div>
      </li>
    </ul>
    <div class="bus-tours-hotel-list-slider">
      <div class="bus-tours-hotel-item">
        <div class="bus-tours-hotel-image">
          <h3 class="hotel-name">гостевой дом Татьяна</h3>
          <img src="./images/bus-tours/Dzhubga/tatiana/1.webp" alt="гостевой дом Татьяна" class="hotel-image">
          <button class="hotel-book-button banner-button-advice">Забронировать</button>
        </div>
        <div class="bus-tours-hotel-info">
          <span>
            <p><b>Расположение:</b></p>
            <p>350 метров от моря (5-7 минут пешком)</p>
            <p><b>Условия проживания:</b></p>
            <p>2-х, 3-х, 4-х местные номера категории «стандарт» и «комфорт». В каждом номере душ, туалет, холодильник, телевизор, кондиционер, необходимый набор мебели. Номера категории «комфорт» большей площади, имеют прямой выход на балкон, построены в 2019 году.</p>
            <p><b>Питание:</b></p>
            <p>Имеется оборудованная кухня для самостоятельного приготовления пищи.</p>
            <p><b>Пляж:</b></p>
            <p>песчаный, 350 метров от отеля (5-7 минут пешком).</p>
            <p><b>К услугам отдыхающих:</b></p>
            <p>большой двор с местами для отдыха, летней беседкой и мангалом. Рядом кафе с домашней кухней. В 3-х минутах ходьбы от гостевого дома расположен <b>аквапарк</b>.</p>
          </span>
          <a href="/guesthouse-tatiana" class="bus-tour-hotel-price-link">Смотреть цены</a>
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