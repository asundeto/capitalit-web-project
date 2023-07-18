<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capital IT service</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <!--CSS-->
    <link rel="stylesheet" href="css/comments.css">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Rubik&family=Montserrat+Alternates&display=swap" rel="stylesheet">
    <!--Integrate-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
        integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
</head>

<body class="telo">

    <!--HEADER-->
    <?php require "blocks/header.php" ?>

    <div class="container how-con mt-3 pt-4 mb-5 pb-5 ps-4 pe-4" style="background-color: #fff; border-radius: 20px;">
    <div class="com_flex">
        <h2>Все отзывы</h2>
        <button type="submit" class="btn_mine" id="comment-btn">Оставить отзыв</button>
    </div>
        <!--?php
        /* Show Errors */
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        /* Connecting to php */
        require("blocks/connect.php");
        $query = "SELECT * FROM comments";
        $number = 1;
        $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
        $query2 = "SELECT COUNT(1) FROM comments";
        $a = mysqli_query($mysqli, $query2);
        $b = mysqli_fetch_array($a);
        /*echo $b[0];*/
        $length = $b[0];
        $rows = intval($length / 3);
        $rows2 = $rows * 2;
        $remainder = $length % 3;
        $smd = 1;
        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
        $result = '';
        $result .= '<div class="flex">';
        foreach ($data as $elem) {
            if ($number <= $rows) {
                if ($smd == 1) {
                    $result .= '<div class="col-md-4 mb-2">';
                    $smd = 0;
                }
                $result .= '<div class="card mb-3" style="color: #fff; border-radius: 20px; padding: 20px; border: none; background-color: #001e36;">';
                $result .= '<h6 class="date">' . $elem['date'] . '</h6>';
                $result .= '<div class="user_info mb-4">';
                $result .= '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#05BFE0" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>';
                $result .= '<h5 class="ms-2">' . $elem['user_name'] . '</h5>';
                $result .= '</div>';
                $result .= '<p>' . $elem['user_comment'] . '</p>';
                switch ($elem['user_grade']) {
                    case 1:
                        $result .= '<div class="mine-rate"><span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>';
                        break;
                    case 2:
                        $result .= '<div class="mine-rate"><span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>';
                        break;
                    case 3:
                        $result .= '<div class="mine-rate"><span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>';
                        break;
                    case 4:
                        $result .= '<div class="mine-rate"><span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span></div>';
                        break;
                    case 5:
                        $result .= '<div class="mine-rate"><span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span></div>';
                        break;
                }
                if(($rows - $number) == 1) {
                    $smd = 3;
                }
                $result .= '</div>';
                $number++;
            } else if ($number > $rows && $number <= $rows2) {
                if ($smd == 3) {
                    $result .= '</div>';
                    $result .= '<div class="col-md-4 colml mb-2">';
                    $smd = 0;
                }
                $result .= '<div class="card mb-3" style="color: #fff; border-radius: 20px; padding: 20px; border: none; background-color: #001e36;">';
                $result .= '<h6 class="date">' . $elem['date'] . '</h6>';
                $result .= '<div class="user_info mb-4">';
                $result .= '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#05BFE0" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>';
                $result .= '<h5 class="ms-2">' . $elem['user_name'] . '</h5>';
                $result .= '</div>';
                $result .= '<p>' . $elem['user_comment'] . '</p>';
                switch ($elem['user_grade']) {
                    case 1:
                        $result .= '<div class="mine-rate"><span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>';
                        break;
                    case 2:
                        $result .= '<div class="mine-rate"><span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>';
                        break;
                    case 3:
                        $result .= '<div class="mine-rate"><span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>';
                        break;
                    case 4:
                        $result .= '<div class="mine-rate"><span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span></div>';
                        break;
                    case 5:
                        $result .= '<div class="mine-rate"><span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span></div>';
                        break;
                }
                $result .= '</div>';
                if ($rows2 - $number == 1) {
                    $smd = 5;
                }
                $number++;
            } else {
                if ($smd == 5) {
                    $result .= '</div>';
                    $result .= '<div class="col-md-4 mb-2">';
                    $smd++;
                }
                $result .= '<div class="card mb-3" style="color: #fff; border-radius: 20px; padding: 20px; border: none; background-color: #001e36;">';
                $result .= '<h6 class="date">' . $elem['date'] . '</h6>';
                $result .= '<div class="user_info mb-4">';
                $result .= '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#05BFE0" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>';
                $result .= '<h5 class="ms-2">' . $elem['user_name'] . '</h5>';
                $result .= '</div>';
                $result .= '<p>' . $elem['user_comment'] . '</p>';
                switch ($elem['user_grade']) {
                    case 1:
                        $result .= '<div class="mine-rate"><span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>';
                        break;
                    case 2:
                        $result .= '<div class="mine-rate"><span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>';
                        break;
                    case 3:
                        $result .= '<div class="mine-rate"><span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>';
                        break;
                    case 4:
                        $result .= '<div class="mine-rate"><span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span></div>';
                        break;
                    case 5:
                        $result .= '<div class="mine-rate"><span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span></div>';
                        break;
                }
                $result .= '</div>';
                $number++;

            }
        }
        $result .= '</div>';
        $result .= '</div>';
        echo $result;
        $mysqli->close();
        ?-->


    </div>

    <div class="container comment_form mt-3 mb-5 pt-4 pb-1" id="comment-form">
        <h2>Оставить отзыв</h2>
        <form action="/php/comment_check.php" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ваше имя пользователя</label>
                <input required name="name" type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="Введите имя">
            </div>
            <div class="mb-2">
                <label for="exampleFormControlTextarea1" class="form-label">Ваш отзыв</label>
                <textarea required name="comments" class="form-control" id="exampleFormControlTextarea1"
                    rows="3"></textarea>
            </div>
            <div class="rate_btn">
                <div class="rate">
                    <input type="" id="star5" name="rate" value="5" />
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

    <!--Message BLOCK-->
    <?php require "blocks/contact.php" ?>
    <!-- Footer -->
    <?php require "blocks/footer.php" ?>
    <!-- bootstrap_js -->
    <?php require "blocks/bootstrap_js.php" ?>
    <!-- JS -->
    <script src="js/comments.js"></script>
</body>

</html>