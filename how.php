<!doctype html>
<html lang="en">

<head>
    <!--Head from php file-->
    <?php require "blocks/head.php" ?>
    <!--CSS-->
    <link rel="stylesheet" href="css/how.css">
    <!--Integrate-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
        integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
</head>

<body class="telo">

    <!--HEADER-->
    <?php require "blocks/header.php" ?>

    <div class="container how-con mt-3 pt-4 mb-5 pb-5" style="background-color: #181a1b; border-radius: 20px;">
        <div class="container_inner">
            <h2>Как заказывать услуги?</h2>
            <div class="row mt-3">
                <p class="mb-4">1. Первый шаг, зайдите на главную страницу услуг сайта и выберите нужную вам услугу. Нажмите на эту услугу или на
                    кнопку заказать.</p>
                    <a href="/" class="btn_mine mt-3 text-center w-25 btn_how">перейти на страницу заказа</a>
                <img src="how_img/1.png" class="img-fluid mt-4" alt="Responsive image">
            </div>
            <div class="row mt-5">
                <p>2. Затем, заполните 7 полей. Первые 3 поля выбор услуги, если вам нужна только одна услуга, можете не заполнять 2
                    и 3. Следующие 3 поля это ваше имя (ф.и.о), ваш номер телефона и адрес на который нужно приехать специалисту.
                    Последнее поле это комментарии, если у вас есть что добавить к заказу, дополнительные просьбы или уточнения к
                    заказу. После заполнения жмите кнопку заказть.</p>
                <img src="how_img/2.png" class="img-fluid" alt="Responsive image">
            </div>
            <div class="row mt-5">
                <p>3. После нажатия кнопки заказать во вотором этапе, у вас должно выйти зеленое окно уведомлении о том что заказ
                    успешно создан. Далее вам остается просто ждать звонка или сообщения от наших администраторов в течении
                    следующих 10 минут. </p>
                <img src="how_img/3.png" class="img-fluid" alt="Responsive image">
            </div>
        </div>
    </div>

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