$('form').submit(function(){
    let popupError = $('.popup-error');
    let fio = $(this).find('[name="fio"]');
    let email = $(this).find('[name="email"]');
    let phone = $(this).find('[name="phone"]');
    let contactText = $('.contact').find('form p'); // Для формы на странице контакты
    let contactError = $('.contact-error'); // Для формы на странице контакты и туры
    let contactSend = $('.contact-send'); // Для формы на странице контакты и туры
    let popupText = $('.trips-popup').find('form p'); // Для popup на странице туры

    let fioVal = fio.val();
    let emailVal = email.val();
    let phoneVal = phone.val();

    if( fioVal == "" || emailVal == "" || phoneVal == ""){
        popupError.fadeIn(500);
        contactText.fadeOut(1); // Для формы на странице контакты
        popupText.fadeOut(1); // Для popup на странице туры
        contactError.fadeIn(500); // Для формы на странице контакты и туры
        contactError.css('color', '#ff0000'); // Для формы на странице контакты и туры
        

        if(fioVal == ""){
            fio.addClass('error');
        }else{
            fio.removeClass('error');
        }

        if(emailVal == ""){
            email.addClass('error');
        }else{
            email.removeClass('error');
        }

        if(phoneVal == ""){
            phone.addClass('error');
        }else{
            phone.removeClass('error');
        }
    }else{
        popupError.fadeOut(500);
        contactError.fadeOut(1); // Для формы на странице контакты и туры
        contactSend.fadeIn(500); // Для формы на странице контакты и туры
        contactSend.css('color', '#062033'); // Для формы на странице контакты и туры
        fio.removeClass('error');
        email.removeClass('error');
        phone.removeClass('error');
    }

    return false;
});

let headerSlider = $('.header-slider');
let headerSliderItems = $('.header-slider-item.no-loop');
let sliderRightArrow = $('.header-circle.circle-2');
let sliderLeftArrow = $('.header-circle.circle-1');
let showSlide = 0;
let sliderDot = $('.dot-circle');

sliderRightArrow.click(function(){
    if(showSlide < headerSliderItems.length - 1){
        showSlide = showSlide + 1;
        headerSlider.animate({
        left: -100 * showSlide + '%'
        }, 1000);
        headerSliderItems.eq(showSlide).addClass('active');
        headerSliderItems.eq(showSlide-1).removeClass('active');
    }else{
        showSlide = showSlide + 1;
        headerSlider.animate({
        left: -100 * showSlide + '%'
        }, 1000);
        headerSliderItems.eq(showSlide-1).removeClass('active');
        headerSliderItems.eq(0).addClass('active');
        sliderDot.eq(0).addClass('active2');

        setTimeout(function(){
            showSlide = 0;
            headerSlider.css('left', -100 * showSlide + '%')
        }, 1100);
    }

    sliderDot.each(function(index){
        if(headerSliderItems.eq(showSlide).hasClass('active')){
            sliderDot.eq(showSlide).addClass('active2');
            sliderDot.eq(showSlide - 1).removeClass('active2');
        }else{
            sliderDot.eq(showSlide - 1).removeClass('active2');
        }
    });

});

sliderLeftArrow.click(function(){
    if(showSlide > 0){
        showSlide = showSlide - 1;
        headerSlider.animate({
        left: -100 * showSlide + '%'
        }, 1000);
        headerSliderItems.eq(showSlide).addClass('active');
        headerSliderItems.eq(showSlide + 1).removeClass('active');
    }

    sliderDot.each(function(index){
        if(headerSliderItems.eq(showSlide).hasClass('active')){
            sliderDot.eq(showSlide).addClass('active2');
            sliderDot.eq(showSlide + 1).removeClass('active2');
        }else{
            sliderDot.eq(showSlide + 1).removeClass('active2');
        }
    });

})

// setInterval(function(){
//     sliderRightArrow.click();
// }, 3000);

let headerHeadMenu = $('.header-head-menu');
$('.header-head-burger').click(function(){
    if( $(this).hasClass('open') ){
        $(this).removeClass('open');
        headerHeadMenu.animate({
            'right': '-50%'
        }, 500);
    }else{
        $(this).addClass('open');
        headerHeadMenu.animate({
            'right': '0'
        }, 500);
    }
});

let popup = $('.trips-popup');

$('.trips-button').click(function(){
    popup.css('display', 'flex');
    popup.hide();
    popup.fadeIn(1000);

    return false;
});

$('.trips-popup-close-button').click(function(){
    popup.css('display', 'none');
    popup.show();
    popup.fadeOut(1000);
});

$(window).keyup(function(e){
    if( e.keyCode == 27){
        popup.fadeOut(1000);
    }
});