/*меню навигации*/
const nav = document.querySelector('#nav');
const navBtn = document.querySelector('#menu_btn');
const navBtnClose = document.querySelector('#menu_btn_close');
const navBtnImg = document.querySelector('#menu_btn_img');

navBtn.onclick = function() {
    if (nav.classList.toggle('open')) {
        navBtn.style.display = "none";
        navBtnClose.style.display = "block";
    } else {
        navBtn.style.display = "block";
        navBtnClose.style.display = "none";
    }
}

navBtnClose.onclick = function() {
    if (nav.classList.toggle('open')) {
        navBtn.style.display = "none";
        navBtnClose.style.display = "block";
    } else {
        navBtn.style.display = "block";
        navBtnClose.style.display = "none";
    }
}

// video

const videoBtn = document.querySelector('#col_descr_video_content');
const videoPlayer = document.querySelector('#videoPlayer');
const navBtnCloseVideo = document.querySelector('#menu_btn_close_video');
const navBtnCloseVideoImg = document.querySelector('#menu_btn_img_video_close');

if (videoBtn) {
    videoBtn.onclick = function() {
        videoPlayer.style.visibility = "visible";
        navBtnCloseVideo.style.display = "block";
    }
}
if (navBtnCloseVideo) {
    navBtnCloseVideo.onclick = function() {
        videoPlayer.style.visibility = "hidden";
    }
}

var element = document.getElementById('phone');
if (element) {
    var maskOptions = {
        mask: '+7(000)000-00-00',
        lazy: false
    }
    new IMask(element, maskOptions);
}

// animation

function onEntry(entry) {
    entry.forEach(change => {
    if (change.isIntersecting) {
    change.target.classList.add('element_show');
    }
    });
    }
    
    let options = {
    threshold: [0.5] };
    let observer = new IntersectionObserver(onEntry, options);
    let elements = document.querySelectorAll('.end_block1');
    
    for (let elm of elements) {
    observer.observe(elm);
    }

