<!doctype html>
<html lang="en">

<head>
  <!--Head from php file-->
  <?php require "../blocks/head.php" ?>
  <!--CSS-->
  <link rel="stylesheet" href="css/main.css">
</head>

<body class="telo">

  <?php require "../blocks/header.php" ?>

  <div class="container">
    <div class="alert" role="alert">
      <h4 class="alert-heading">Ошибка сервера 403</h4>
      <p>Повторите попытку позьже через некоторое время</p>
      <hr>
      <div class="text-center"><a href="/" class="btn_mine">На главную</a></div>
    </div>
  </div>
  <br>

  <!--Message BLOCK-->
  <?php require "../blocks/contact.php" ?>
  <!-- Footer -->
  <?php require "../blocks/footer.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <script src="../js/local.js"></script>
</body>

</html>