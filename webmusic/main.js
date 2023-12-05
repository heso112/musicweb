const sideLinks = document.querySelectorAll('.sidebar .side-menu li a:not(.logout)');

sideLinks.forEach(item => {
    const li = item.parentElement;
    item.addEventListener('click', () => {
        sideLinks.forEach(i => {
            i.parentElement.classList.remove('active');
        })
        li.classList.add('active');
    })
});

const menuBar = document.querySelector('.content nav .bx.bx-menu');
const sideBar = document.querySelector('.sidebar');

menuBar.addEventListener('click', () => {
    sideBar.classList.toggle('close');
});

const searchBtn = document.querySelector('.content nav form .form-input button');
const searchBtnIcon = document.querySelector('.content nav form .form-input button .bx');
const searchForm = document.querySelector('.content nav form');

searchBtn.addEventListener('click', function (e) {
    if (window.innerWidth < 576) {
        e.preventDefault;
        searchForm.classList.toggle('show');
        if (searchForm.classList.contains('show')) {
            searchBtnIcon.classList.replace('bx-search', 'bx-x');
        } else {
            searchBtnIcon.classList.replace('bx-x', 'bx-search');
        }
    }
});

window.addEventListener('resize', () => {
    if (window.innerWidth < 768) {
        sideBar.classList.add('close');
    } else {
        sideBar.classList.remove('close');
    }
    if (window.innerWidth > 576) {
        searchBtnIcon.classList.replace('bx-x', 'bx-search');
        searchForm.classList.remove('show');
    }
});

const toggler = document.getElementById('theme-toggle');

toggler.addEventListener('change', function () {
    if (this.checked) {
        document.body.classList.add('dark');
    } else {
        document.body.classList.remove('dark');
    }
});
// main

$(function () {
    var bgSlide = $('.rank-wrap .rank-bg-slide');
    var rankSlide = $('.rank-wrap .rank-slide');
    var time = 2;
    var bar = $('.slide-controller .slide-progress .progress-fill');
    var isPause = false; // 일시정지 상태 여부
    var tick;
    var percentTime;
    var changeWhenPaused; // 일시정지 상태에서 슬라이드를 전환했는지 여부
    var autoplayButton = $('.slide-nav .slide-auto');
    var autoplayButtonText = $('.slide-nav .slide-auto span');
    var controller = $('.slide-controller');
    var pageButton = $('.rank-wrap .content-dots .dot .dot-button');
  
    rankSlide.slick({
      slidesToShow: 1,
      draggable: false,
      speed: 500,
      autoplay: false,
      fade: true,
      prevArrow: $('.slide-controller .slide-nav .slide-prev'),
      nextArrow: $('.slide-controller .slide-nav .slide-next'),
      asNavFor: bgSlide,
    });
    bgSlide.slick({
      slidesToShow: 1,
      draggable: false,
      speed: 500,
      autoplay: false,
      fade: true,
      arrows: false,
      asNavFor: rankSlide,
    });
  
    rankSlide.on("beforeChange", function(event, slick, currentSlide) {
      startProgressbar();
      if (isPause) changeWhenPaused = true; // 일시정지 상태일때 슬라이드 전환
    });
  
    function startProgressbar() {
      resetProgressbar();
      percentTime = 0;
      if (!isPause) {
        tick = setInterval(interval, 30); // 일시정지 상태가 아니면 재생시작
      }
    }
  
    function interval() {
      if (!isPause) {
        percentTime += 1 / (time + 0.1);
        bar.css({
          width: percentTime + "%"
        });
        if (percentTime >= 100) {
          rankSlide.slick("slickNext");
          startProgressbar();
        }
      }
    }
  
    function resetProgressbar() {
      bar.css({
        width: 0 + "%"
      });
      clearTimeout(tick);
    }
  
    autoplayButton.on('click', function(){
      if (!isPause) {
        controller.attr('data-autoplay', 'N');
        isPause = true;
        autoplayButtonText.text('재생하기');
      } else {
        controller.attr('data-autoplay', 'Y');
        isPause = false;
        autoplayButtonText.text('정지하기');
        if (changeWhenPaused) {
          startProgressbar(); // 일시정지 상태에서 슬라이드 전환 후 재생버튼 클릭시 재생시작
          changeWhenPaused = false;
        } 
      }
    });
  
    pageButton.on('click', function(){
      var target = $(this).attr('data-target');
      rankSlide.slick('slickGoTo', target - 1);
    });
  
    startProgressbar();
  })
  // top chart
  