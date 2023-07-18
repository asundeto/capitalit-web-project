<div class="contact">
    <div class="contact-chat">
        <form action="../php/message.php" method="POST">
            <div class="xClose mt-3 mb-2">
                <h5 class="me-3">Хотите задать вопрос?</h5>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x-circle-fill"
                    viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                </svg>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ваш номер телефона</label>
                <input required name="mobile" type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="Введите номер">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Вопрос, сообщение</label>
                <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="text-center"><button type="submit" class="btn btn-success mb-3">Отправить</button></div>
        </form>
    </div>

    <div class="contact-img">
        <img src="/img/message.png" alt="">
    </div>

</div>