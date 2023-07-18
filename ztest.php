<!doctype html>
<html lang="en">

<head>
    <!--Head from php file-->
    <?php require "blocks/head.php" ?>
    <!--CSS-->
    <link rel="stylesheet" href="css/test.css">
</head>

<body class="telo">

    <?php require "blocks/header.php" ?>

    <div class="container comment_form mt-3 mb-5 pt-4 pb-1" id="comment-form">
        <h2>Оставить отзыв</h2>
        <form action="/php/test_check.php" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ваше имя</label>
                <input required name="name" maxlength="17" type="text" class="form-control bg-dark text-white"
                    id="exampleFormControlInput1" placeholder="Введите имя">
            </div>
            <div class="mb-2">
                <label for="exampleFormControlTextarea1" class="form-label">Ваш отзыв</label>
                <textarea required name="comments" class="form-control bg-dark text-white" id="exampleFormControlTextarea1"
                    rows="3"></textarea>
            </div>
            <div class="rate_btn">
                <div class="rate">
                    <input type="radio" id="star5" name="rate" value="5" />
                    <label for="star5" title="text">5 stars</label>
                    <input type="radio" id="star4" name="rate" value="4" />
                    <label for="star4" title="text">4 stars</label>
                    <input type="radio" id="star3" name="rate" value="3" />
                    <label for="star3" title="text">3 stars</label>
                    <input type="radio" id="star2" name="rate" value="2" />
                    <label for="star2" title="text">2 stars</label>
                    <input type="radio" id="star1" name="rate" value="1" />
                    <label for="star1" title="text">1 star</label>
                </div>
                <br><br>
                <div class="text-center"><button type="submit" class="btn_mine mb-3">Оставить отзыв</button></div>
            </div>
        </form>
    </div>

    <div class="container mb-5">
        <div class="mine_btn">
            Hello
        </div>
        <button class="button-64" role="button"><span class="text">Заказать</span></button>
        <div class="wrapper">
            <a href="#"><span>Hover Me!</span></a>
        </div>

        <div class="test_div">
            <h1>Hello</h1>
            <h1>Good</h1>
            <h1>Sad</h1>
        </div>
    </div>

    <!--Message BLOCK-->
    <?php require "blocks/contact.php" ?>
    <!-- Footer -->
    <?php require "blocks/footer.php" ?>
    <!-- bootstrap_js -->
    <?php require "blocks/bootstrap_js.php" ?>
    <!-- JS -->
    <script src="js/test.js"></script>
</body>

</html>