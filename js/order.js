console.log("Order JavaScript");

/////SERVICES SCROLL start
var servicesBtn = document.getElementById('servicesBtn');
servicesBtn.addEventListener('click', function () {
    localStorage.setItem('scroll', 1);
});
/////SERVICES SCROLL end

//---Message---Start
var message_num = 0;
message_btn = document.querySelector('.contact-img');
message_chat = document.querySelector('.contact-chat');
xClose = document.querySelector('.xClose');
message_btn.addEventListener('click', function () {
    if (message_num === 0) {
        message_chat.style.display = 'block';
        console.log('clicked');
        message_num = 1;
    } else {
        message_chat.style.display = 'none';
        message_num = 0;
    }

});
xClose.addEventListener('click', function () {
    message_chat.style.display = 'none';
    message_num = 0;
})
//---Message---End


let num = localStorage.getItem('num');
const selected = document.getElementById('selected');
switch (num) {
    case "1":
        selected.value = "1";
        break;
    case "2":
        selected.value = "2";
        break;
    case "3":
        selected.value = "3";
        break;
    case "4":
        selected.value = "4";
        break;
    case "5":
        selected.value = "5";
        break;
    case "6":
        selected.value = "6";
        break;
    case "7":
        selected.value = "8";
        break;
}

