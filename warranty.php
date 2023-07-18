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

    <div class="container mt-3" style="background-color: #181a1b; border-radius: 20px; padding: 10px 20px 10px 20px;">
        <?php
        if ($_COOKIE['user'] != 'yes'):
        ?>
        <br>
        <h2>Получение гарантии</h2>
        <br>
        <form action="warranty/warrantyPHP.php" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ф.И.О. заказчика</label>
                <input required name="clientName" type="text" class="form-control bg-dark text-white" id="exampleFormControlInput1"
                    placeholder="Введите Ф.И.О.">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Номер телефона</label>
                <input required name="clientMobile" type="text" class="form-control bg-dark text-white" id="exampleFormControlInput1"
                    placeholder="Введите номер">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Адрес</label>
                <input required minlength="5" name="clientAdres" type="text" class="form-control bg-dark text-white"
                    id="exampleFormControlInput1" placeholder="Введите адрес">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Услуга</label>
                <input required name="clientService" type="text" class="form-control bg-dark text-white" id="exampleFormControlInput1"
                    placeholder="Введите услугу">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Модель вашего устройства</label>
                <input required name="clientModel" type="text" class="form-control bg-dark text-white" id="exampleFormControlInput1"
                    placeholder="Введите модель">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Код (код от программиста)</label>
                <input required name="code" type="password" class="form-control bg-dark text-white" id="exampleFormControlInput1"
                    placeholder="Введите код">
            </div>
            <?php
            if ($_COOKIE['error'] == 'code'):
            ?>
            <h6 style="color: red;">* Неправильный код</h6>
            <?php endif; ?>
            <br>
            <div class="text-center"><button type="submit" class="btn_mine mb-2">Получить</button></div>
        </form>
        <?php else: ?>
        <div class="alert alert-success mt-3" role="alert">
            <h4 class="alert-heading">Ваша гарантия готова!</h4>
            <p>Скачайте гарантию и сохраните на вашем устройстве. При неудовлетварительном результате работы специалиста
                в ближайшее время, вы можете обратиться по гарантии и мы переделаем свою работу бесплатно!</p>
            <hr>
            <div class="text-center"><a href="warranty/capital.png" download><button type="button"
                        class="btn_mine mb-3">Скачать</button></a></div>
        </div>
        <?php endif; ?>
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