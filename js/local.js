console.log("Local JavaScript");

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