<!DOCTYPE html>
<html lang="en">

<head>
  <!--Head from php file-->
  <?php require "blocks/head.php" ?>
  <!--CSS-->
  <link rel="stylesheet" href="css/main.css">
</head>

<body class="telo">

  <?php require "blocks/header.php" ?>

  <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/slider2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/slider1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/slider3.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <br>

  <div class="container mt-3" id="allservices">
    <div class="row">
      <h2 class="text-center mb-3">Все услуги</h2>
    </div>
    <?php
      for ($i = 1; $i < 8; $i++) {
        if (($i + 2) % 3 == 0) {
          $result .= '<div class="row">';
        }
        $result .= '<div class="col-md-4 mb-3">';
        $result .= '<div class="card bg-dark pb-1" style="border:none;">';
        switch ($i) {
          case 1:
            $result .= '<img src="main_img/windows.png" class="card-img-top mb-2" alt="...">';
            $result .= '<div class="card-body">';
            $result .= '<a href="order" class="btn_mine" id="windows_btn">Заказать</a>';
            break;
          case 2:
            $result .= '<img src="main_img/office.png" class="card-img-top mb-2" alt="...">';
            $result .= '<div class="card-body">';
            $result .= '<a href="order" class="btn_mine" id="office_btn">Заказать</a>';
            break;
          case 3:
            $result .= '<img src="main_img/site.png" class="card-img-top mb-2" alt="...">';
            $result .= '<div class="card-body">';
            $result .= '<a href="order" class="btn_mine" id="site_btn">Заказать</a>';
            break;
          case 4:
            $result .= '<img src="main_img/program.png" class="card-img-top mb-2" alt="...">';
            $result .= '<div class="card-body">';
            $result .= '<a href="order" class="btn_mine" id="program_btn">Заказать</a>';
            break;
          case 5:
            $result .= '<img src="main_img/clear.png" class="card-img-top mb-2" alt="...">';
            $result .= '<div class="card-body">';
            $result .= '<a href="order" class="btn_mine" id="clean_btn">Заказать</a>';
            break;
          case 6:
            $result .= '<img src="main_img/sborka.png" class="card-img-top mb-2" alt="...">';
            $result .= '<div class="card-body">';
            $result .= '<a href="order" class="btn_mine" id="sborka_btn">Заказать</a>';
            break;
          case 7:
            $result .= '<img src="main_img/printer.png" class="card-img-top mb-2" alt="...">';
            $result .= '<div class="card-body">';
            $result .= '<a href="order" class="btn_mine" id="printer_btn">Заказать</a>';
            break;
        }
        $result .= '</div>';
        $result .= '</div>';
        $result .= '</div>';
        if ($i % 3 == 0) {
          $result .= '</div>';
        }
        echo $result;
        $result = '';
      }
    ?>
  </div>
  </div>
  <br>
  <!--Message BLOCK-->
  <?php require "blocks/contact.php" ?>
  <!-- Footer -->
  <?php require "blocks/footer.php" ?>
  <!-- bootstrap_js -->
  <?php require "blocks/bootstrap_js.php" ?>
  <!-- JS -->
  <script src="js/main.js"></script>
</body>

</html>