/* reCAPTCHA3のUIをCONTACT表示位置にきたらフェードインさせる */
jQuery(function(){
    let is_show = false;


    jQuery(window).on('load', function(){
        jQuery('.grecaptcha-badge').css('display', 'none')
    })    

    jQuery(window).on('scroll  resize', function(){
        let top = jQuery('#contact-wrapper').offset().top;

        if ( top - 200 < jQuery(this).scrollTop()){
            if( is_show === false ){
                jQuery('.grecaptcha-badge').hide().fadeIn();
                is_show = true;
            }
        }else{
            if( is_show === true){
                jQuery('.grecaptcha-badge').fadeOut();
                is_show = false;
            }
        }
    })
})