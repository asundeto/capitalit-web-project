console.log("Main JavaScript");

//SERVICES SCROLL START
var servicesBtn = document.getElementById('servicesBtn');
var element = document.getElementById('allservices');
let scrollFunc = localStorage.getItem('scroll');
if (scrollFunc == 1) {
    element.scrollIntoView();
    localStorage.setItem('scroll', 2);
}
servicesBtn.addEventListener('click', function () {
    localStorage.setItem('scroll', 1);
});
//SERVICES SCROLL END

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

const windows_btn = document.getElementById('windows_btn');
const office_btn = document.getElementById('office_btn');
const printer_btn = document.getElementById('printer_btn');
const program_btn = document.getElementById('program_btn');
const clean_btn = document.getElementById('clean_btn');
const sborka_btn = document.getElementById('sborka_btn');
const site_btn = document.getElementById('site_btn');


windows_btn.addEventListener("click", function (e) {
    localStorage.setItem('num', 1);
})

office_btn.addEventListener("click", function (e) {
    localStorage.setItem('num', 2);
})

printer_btn.addEventListener("click", function (e) {
    localStorage.setItem('num', 3);
})

program_btn.addEventListener("click", function (e) {
    localStorage.setItem('num', 4);
})

clean_btn.addEventListener("click", function (e) {
    localStorage.setItem('num', 5);
})

sborka_btn.addEventListener("click", function (e) {
    localStorage.setItem('num', 6);
})

site_btn.addEventListener("click", function (e) {
    localStorage.setItem('num', 7);
})