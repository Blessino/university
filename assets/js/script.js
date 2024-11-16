$(function () {
	$('.popup-modal').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#username',
		modal: true
	});
	$(document).on('click', '.popup-modal-dismiss', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});
});

// SLIDER
$(document).ready(function() {
  // TAB
  $('.tab-link').click(function() {
    var data_id = $(this).attr('data-id');
    $('.tab-link').removeClass('active');
    $(this).addClass('active');
    $('.tab-content').hide().fadeOut("slow");
    $('#' + data_id).show();
  });

  // TAB 1
  $('.tab-link-1').click(function() {
    var data_id = $(this).attr('data-id');
    $('.tab-link-1').removeClass('active');
    $(this).addClass('active');
    $('.tab-content-1').hide().fadeOut("slow");
    $('#' + data_id).show();
  });

  // TAB 2
  $('.tab-link-2').click(function() {
    var data_id = $(this).attr('data-id');
    $('.tab-link-2').removeClass('active');
    $(this).addClass('active');
    $('.tab-content-2').hide().fadeOut("slow");
    $('#' + data_id).show();
  });

  // DRODPDOWN
  $('.select-dropdown').select2({
    // placeholder: "Select a state",
  });

  // ACCORDION
  $('.acc-click').click(function() {
    if ($(this).hasClass('active')) {  
      $(this).next().slideUp('slow');
      $(this).removeClass('active');
    }
    else{
      $(this).next().slideDown('slow');
      $(this).addClass('active');
    }
    
  });

  // slider
  var swiper = new Swiper(".country-swiper", {
    slidesPerView: 4,
    // centeredSlides: true,
    spaceBetween: 20,
    grabCursor: true,
    autoplay: {
      delay: 10000,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // COUNTRY-RADIO
  var swiper = new Swiper(".country-radio-swiper", {
    slidesPerView: 7,
    // centeredSlides: true,
    spaceBetween: 20,
    // grabCursor: true,
    autoplay: {
      delay: 10000,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var swiper = new Swiper(".grid-swiper", {
    slidesPerView: 4,
    slidesPerColumn: 2,
    spaceBetween: 20,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var swiper = new Swiper(".mentor-swiper", {
    slidesPerView: 4,
    // centeredSlides: true,
    spaceBetween: 20,
    grabCursor: true,
    autoplay: {
      delay: 10000,
    },
  });

  var swiper = new Swiper(".logo-swiper", {
    slidesPerView: 7,
    // centeredSlides: true,
    spaceBetween: 30,
    loop: true,
    speed: 1000,
    grabCursor: true,
    mousewheelControl: true,
    keyboardControl: true,
    autoplay: {
      delay: 0,
      disableOnInteraction: false
    },
  });
  
});


// ACCORDION
var $titleTab = $('.click-div');
$('.acc-wrap:first-child').find('.click-div').addClass('active').next().stop().slideDown(300);
$('.acc-wrap:first-child').find('.inner_content').find('p').addClass('show');
$titleTab.on('click', function(e) {
e.preventDefault();
  if ( $(this).hasClass('active') ) {
    $(this).removeClass('active');
    $(this).next().stop().slideUp(500);
    $(this).next().find('p').removeClass('show');
  } else {
    $(this).addClass('active');
    $(this).next().stop().slideDown(500);
    $(this).parent().siblings().children('.click-div').removeClass('active');
    $(this).parent().siblings().children('.inner_content').slideUp(500);
    $(this).parent().siblings().children('.inner_content').find('p').removeClass('show');
    $(this).next().find('p').addClass('show');
  }
});

//sticky header
jQuery(window).scroll(function(){
  if (jQuery(this).scrollTop() > 200) {
    jQuery('.header-div').addClass('fixed');
  } else {
    jQuery('.header-div').removeClass('fixed');
  }
});

// FILTER
document.addEventListener('DOMContentLoaded', function() {
  const filterBtns = document.querySelectorAll('.filter-btn');
  const galleryItems = document.querySelectorAll('.filter-wrapper');

  filterBtns.forEach(function(btn) {
    btn.addEventListener('click', function() {
      const category = this.dataset.category;

      // Remove active class from all buttons
      filterBtns.forEach(function(btn) {
        btn.classList.remove('active');
      });

      // Add active class to the clicked button
      this.classList.add('active');

      galleryItems.forEach(function(item) {
        if (category === 'all' || item.dataset.category === category) {
          item.style.display = 'block';
          item.classList.add('active'); // Add fade-in class
        } else {
          item.style.display = 'none';
          item.classList.remove('active'); // Remove fade-in class
        }
      });
    });
  });
});