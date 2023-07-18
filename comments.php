<!doctype html>
<html lang="en">

<head>
    <!--Head from php file-->
    <?php require "blocks/head.php" ?>
    <!--CSS-->
    <link rel="stylesheet" href="css/comments.css">
    <!--Integrate-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
        integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
</head>

<body class="telo">

    <!--HEADER-->
    <?php require "blocks/header.php" ?>

    <div class="container how-con mt-3 pt-4 mb-5 pb-5" style="background-color: #181a1b; border-radius: 20px;">
        <?php
        if ($_COOKIE['user'] == 'yes'):
        ?>
        <div class="comment_added">
            <h2>Ваш комментари добавлен</h2>
        </div>
        <?php endif; ?>
        <div class="com_flex mb-2">
            <h2>Все отзывы</h2>
            <button type="submit" class="btn_mine" id="comment-btn">Оставить отзыв</button>
        </div>
        <?php
        /* Show Errors */
        //ini_set('display_errors', 1);
        //error_reporting(E_ALL);
        /* Show Errors */
        /* Connecting to php */
        require("blocks/connect.php");
        $query = "SELECT * FROM comments";
        $number = 1;
        $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
        $query2 = "SELECT COUNT(1) FROM comments";

        function myFunct($current, $user_date, $user_name, $user_comment,  $user_grade) {
            $current .= '<div class="card mb-3" style="color: #fff; border-radius: 20px; padding: 20px; border: none; background-color: #001e36;">';
            $current .= '<h6 class="date">' . $user_date . '</h6>';
            $current .= '<div class="user_info mb-4">';
            $current .= '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#05BFE0" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>';
            $current .= '<h5 class="ms-2">' . $user_name . '</h5>';
            $current .= '</div>';
            $current .= '<p>' . $user_comment . '</p>';
            switch ($user_grade) {
                case 1:
                    $current .= '<div class="mine-rate"><span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>';
                    break;
                case 2:
                    $current .= '<div class="mine-rate"><span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>';
                    break;
                case 3:
                    $current .= '<div class="mine-rate"><span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>';
                    break;
                case 4:
                    $current .= '<div class="mine-rate"><span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span></div>';
                    break;
                case 5:
                    $current .= '<div class="mine-rate"><span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span></div>';
                    break;
            }
            return $current;
        }

        $a = mysqli_query($mysqli, $query2);
        $b = mysqli_fetch_array($a);
        $length = $b[0];
        $rows = intval($length / 3);
        $rows2 = $rows * 2;
        $remainder = $length % 3;
        
        if($remainder == 1) {
            $first_row = $rows + 1;
            $second_row = $rows2 + 1;
        } else if($remainder == 2) {
            $first_row = $rows + 1;
            $second_row = $first_row * 2;
        } else {
            $first_row = $rows;
            $second_row = $rows2;
        }
        // echo ("Rows: $rows, Rows2: $rows2, remainder: $remainder, first: $first_row, second: $second_row");
        $smd = 1;
        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
        $result = '';
        $result .= '<div class="flex">';
        foreach ($data as $elem) {
            if ($number <= $first_row) {
                if ($smd == 1) {
                    $result .= '<div class="col-md-4 ps-1 pe-1 mb-2">';
                    $smd = 0;
                }
                $result = myFunct($result, $elem['date'], $elem['user_name'], $elem['user_comment'], $elem['user_grade']);
                if(($rows - $number) == 1) {
                    $smd = 3;
                }
                $result .= '</div>';
                $number++;
            } else if ($number > $first_row && $number <= $second_row) {
                if ($smd == 3) {
                    $result .= '</div>';
                    $result .= '<div class="col-md-4 ps-1 pe-1 mb-2">';
                    $smd = 0;
                }
                $result = myFunct($result, $elem['date'], $elem['user_name'], $elem['user_comment'], $elem['user_grade']);
                $result .= '</div>';
                if ($rows2 - $number == 1) {
                    $smd = 5;
                }
                $number++;
            } else {
                if ($smd == 5) {
                    $result .= '</div>';
                    $result .= '<div class="col-md-4 ps-1 pe-1 mb-2">';
                    $smd++;
                }
                $result = myFunct($result, $elem['date'], $elem['user_name'], $elem['user_comment'], $elem['user_grade']);
                $result .= '</div>';
                $number++;
            }
        }
        $result .= '</div>';
        $result .= '</div>';
        echo $result;
        $mysqli->close();
        ?>
    </div>

    <div class="container comment_form mt-3 mb-5 pt-4 pb-1" id="comment-form">
        <h2>Оставить отзыв</h2>
        <form action="/php/comment_check.php" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ваше имя</label>
                <input required name="name" maxlength="17" type="text" class="form-control bg-dark text-white" id="exampleFormControlInput1"
                    placeholder="Введите имя">
            </div>
            <?php
            if ($_COOKIE['error'] == 'yes'):
            ?>
            <h6 style="color: red;">Некорректное значение</h6>
            <?php endif; ?>

            <div class="mb-2">
                <label for="exampleFormControlTextarea1" class="form-label">Ваш отзыв</label>
                <textarea required name="comments" class="form-control bg-dark text-white" id="exampleFormControlTextarea1"
                    rows="3"></textarea>
            </div>
            <?php
            if ($_COOKIE['user'] == 'yes'):
            ?>
            <h6 style="color: red;">Некорректное значение</h6>
            <?php endif; ?>
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