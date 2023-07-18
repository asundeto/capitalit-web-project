<!doctype html>
<html lang="en">

<head>
  <!--Head from php file-->
  <?php require "blocks/head.php" ?>
  <!--CSS-->
  <link rel="stylesheet" href="css/main.css">
</head>

<body class="telo">

  <?php require "blocks/header.php" ?>

  <div class="container mt-5" style="background-color: #181a1b; border-radius: 20px; padding: 10px 20px 0 20px;">
    <br>
    <h2 class="text-center">О компании Capital</h2>
    <div class="row mt-5">
      <div class="col-md-6 mb-5">
        <div class="card" style="border: none; background-color: transparent;">
          <img class="img-fliud" src="img/about.png" alt="Responsive image">
        </div>
      </div>
      <div class="col-md-6 mb-5">
        <div class="card" style="border: none; background-color: transparent;">
          <p class="about_p">IT service «Capital» - это молодая компания на рынке IT услуг Казахстана. Команда наших
            специалистов,
            объединила в себе профессионалов, прошедших немалый путь по ключевым IT вопросам. На данный момент наша
            организация оказывает полный комплекс услуг в сфере IT. В нашей организации налажена двойная система
            контроля
            качества оказываемых услуг. С одной стороны, работу наших специалистов оценивает сам Заказчик с помощью
            оценочных листов. С другой стороны, внутри организации специально создан отдел стандартов качества, который
            производит независимую оценку работы каждого сотрудника. Основной целью нашей организации «Capital» является
            не только повышение качества оказываемых услуг, но и минимализация расходов клиента.</p>
        </div>
      </div>
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
  <script src="js/local.js"></script>
</body>

</html>