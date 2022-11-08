let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}

jQuery(document).ready(function ($) {

  $('#checkbox').change(function(){
    setInterval(function () {
        moveRight();
    }, 3000);
  });
  
  var slideCount = $('#slider ul li').length;
  var slideWidth = $('#slider ul li').width();
  var slideHeight = $('#slider ul li').height();
  var sliderUlWidth = slideCount * slideWidth;
  
  $('#slider').css({ width: slideWidth, height: slideHeight });
  
  $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
  
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });

});    
VanillaTilt.init(document.querySelectorAll(".card"),{
    max: 25,
    speed: 400,
    glare: true,
    "max-glare": 1,
});
// // Box Animation
// // $('.animate-1').mouseleave(function(){
// //     $(".animate-1").animate({
// //         'width': '20%',
// //         'height': '200px',
// //         'opacity':'1',
// //     },100)
    
// //     $('.animate-1').mouseover(function(){
// //         $('.animate-1').animate({
// //             'width': '20%',
// //             'height': '230px',
// //             'opacity':'0.8',
// //         })
// //     })
// // });
// // $('.animate-2').mouseleave(function(){
// //     $(".animate-2").animate({
// //         'width': '20%',
// //         'height': '200px',
// //         'opacity':'1',
// //     },100)
    
// //     $('.animate-2').mouseover(function(){
// //         $('.animate-2').animate({
// //             'width': '20%',
// //             'height': '230px',
// //             'opacity':'0.8',
// //         })
// //     })
// // });
// // $('.animate-3').mouseleave(function(){
// //     $(".animate-3").animate({
// //         'width': '20%',
// //         'height': '200px',
// //         'opacity':'1',
// //     },100)
    
// //     $('.animate-3').mouseover(function(){
// //         $('.animate-3').animate({
// //             'width': '20%',
// //             'height': '230px',
// //             'opacity':'0.8',
// //         });
// //     });
// // });
// // $('.animate-4').mouseleave(function(){
// //     $(".animate-4").animate({
// //         'width': '20%',
// //         'height': '200px',
// //         'opacity':'1',
// //     },100)
    
// //     $('.animate-4').mouseover(function(){
// //         $('.animate-4').animate({
// //             'width': '20%',
// //             'height': '230px',
// //             'opacity':'0.8',
// //         }); 
// //     });
// // });
// // Title Animation
// $(document).ready(function(){
//     $('.title-container').show().animate({opacity:'1',},  3000);
//     $('.title-container').fadein(1000);
// })
// // Box slide Animation
// $(document).ready(function () {
//     $(".box-2").show(function () {
//         $('.box-2').animate({
//             'opacity': '1',
//             'top': '0px',
//         },1000)
//     });
// });
// //Scrolling Animation
// $(window).scroll(function() {
//     if ($(window).width() < 1600) {      
//         if ($(document).scrollTop() > 100) {
//             $('.main-section-1').animate({
//                 'opacity': '1',
//                 'left': '0px',
//             },1000);
//         }
//      } 
//     if ($(window).width() < 1600) {      
//         if ($(document).scrollTop() > 150) {
//             $('.main-section-2').animate({
//                 'opacity': '1',
//                 'left': '0px',
//             },1000);
//         }
//      } 
//     if ($(window).width() < 1600) {      
//         if ($(document).scrollTop() > 1000) {
//             $('.fade1').animate({
//                 'opacity': '1',
//                 'left': '0px',
//             },1000);
//         }
//      } 
//     if ($(window).width() < 1600) {      
//         if ($(document).scrollTop() > 1000) {
//             $('.fade2').animate({
//                 'opacity': '1',
//                 'left': '0px',
//             },1000);
//         }
//      } 
//     if ($(window).width() < 1600) {      
//         if ($(document).scrollTop() > 1000) {
//             $('.fade3').animate({
//                 'opacity': '1',
//                 'left': '0px',
//             },1000);
//         }
//      } 
//     if ($(window).width() < 1600) {      
//         if ($(document).scrollTop() > 1000) {
//             $('.fade4').animate({
//                 'opacity': '1',
//                 'left': '0px',
//             },1000);
//         }
//      } 
//     if ($(window).width() < 1600) {      
//         if ($(document).scrollTop() > 1500) {
//             $('.fade5').animate({
//                 'opacity': '1',
//                 'left': '0px',
//             },1000);
//         }
//      } 
//     if ($(window).width() < 1600) {      
//         if ($(document).scrollTop() > 1500) {
//             $('.fade6').animate({
//                 'opacity': '1',
//                 'left': '0px',
//             },1000);
//         }
//      } 
//     if ($(window).width() < 1600) {      
//         if ($(document).scrollTop() > 2000) {
//             $('.left-container').animate({
//                 'opacity': '1',
//                 'left': '0px',
//             },1000);
//         }
//      } 
//     if ($(window).width() < 1600) {      
//         if ($(document).scrollTop() > 2000) {
//             $('.right-container').animate({
//                 'opacity': '1',
//                 'left': '0px',
//             },1000);
//         }
//      } 
//  }); 
