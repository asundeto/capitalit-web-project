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

    <div class="container mt-3 pb-5" style="background-color: #181a1b; border-radius: 20px; padding: 30px 20px 0 20px;">
        <h2>Заказ услуги</h2>
        <br>
        <?php
        if ($_COOKIE['order'] != 'yes'):
        ?>
        <form action="/php/telegram.php" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Выберите услугу</label>
                <select name="services" class="form-select bg-dark text-white" id="selected" aria-label="Default select example">
                    <option value="1">Установка Windows (7000&#x20b8;)</option>
                    <option value="2">Установка Office (6000&#x20b8;)</option>
                    <option value="8">Создание сайта</option>
                    <option value="3">Настройка принтера (5000&#x20b8;)</option>
                    <option value="4">Установка Программ (от 5000&#x20b8;)</option>
                    <option value="5">Отчистка системы (5000&#x20b8;)</option>
                    <option value="6">Сборка пк (от 10000&#x20b8;)</option>
                    <option value="7">(Windows+Office) 10000&#x20b8;</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Дополнительные услуги</label>
                <select name="services-second" class="form-select bg-dark text-white" aria-label="Default select example">
                    <option selected>Добавить услугу</option>
                    <option value="Установка Windows 7000тг">Установка Windows (7000&#x20b8;)</option>
                    <option value="Установка Office 6000тг">Установка Office (6000&#x20b8;)</option>
                    <option value="Установка Программ от 5000тг">Установка Программ (от 5000&#x20b8;)</option>
                    <option value="Настройка принтера 5000тг">Настройка принтера (5000&#x20b8;)</option>
                    <option value="Отчистка системы 5000тг">Отчистка системы (5000&#x20b8;)</option>
                    <option value="Сборка пк 10000тг">Сборка пк (от 10000&#x20b8;)</option>
                    <option value="(Windows+Office) 10000тг">(Windows+Office) 10000&#x20b8;</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Дополнительные услуги</label>
                <select name="services-third" class="form-select bg-dark text-white" aria-label="Default select example">
                    <option selected>Добавить услугу</option>
                    <option value="Установка Windows 7000тг">Установка Windows (7000&#x20b8;)</option>
                    <option value="Установка Office 6000тг">Установка Office (6000&#x20b8;)</option>
                    <option value="Установка Программ от 5000тг">Установка Программ (от 5000&#x20b8;)</option>
                    <option value="Настройка принтера 5000тг">Настройка принтера (5000&#x20b8;)</option>
                    <option value="Отчистка системы 5000тг">Отчистка системы (5000&#x20b8;)</option>
                    <option value="Сборка пк от 10000тг">Сборка пк (от 10000&#x20b8;)</option>
                    <option value="(Windows+Office) 10000тг">(Windows+Office) 10000&#x20b8;</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ваше имя</label>
                <input name="name" type="text" class="form-control bg-dark text-white" id="exampleFormControlInput1"
                    placeholder="Введите имя">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Номер телефона</label>
                <input required name="mobile" type="text" class="form-control bg-dark text-white" id="exampleFormControlInput1"
                    placeholder="Введите номер">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Адрес</label>
                <input required name="adres" type="text" class="form-control bg-dark text-white" id="exampleFormControlInput1"
                    placeholder="Введите адрес">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Комментарии</label>
                <textarea name="comments" class="form-control bg-dark text-white" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <h6 style="color: red;">* Оплата только после получения услуг</h6>
            <h6 style="color: red;">* С вами свяжутся в течении 10 минут</h6>
            <br>
            <div class="text-center"><button type="submit" class="btn_mine">Заказать</button></div>
        </form>
        <?php else: ?>
        <div class="alert alert-success mt-2" role="alert">
            <h4 class="alert-heading">Ваш заказ создан!</h4>
            <p>Ваш заказ успешно создан и отправлен в обработку к администраторам. Ждите ответа в течении 10 минут. С
                вами
                обязательно свяжутся!</p>
            <hr>
            <div class="text-center"><a href="/" class="btn_mine">На главную</a></div>
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
    <script src="js/order.js"></script>
</body>

</html>