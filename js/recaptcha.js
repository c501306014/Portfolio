/* reCAPTCHA3のUI表示位置をCONTACT送信ボタンの左に配置 */
jQuery(window).on('load', function(){
    let submitBtn_offset = jQuery('.submit-btn').offset();
    let grecaptchaBadge = jQuery('.grecaptcha-badge');

    grecaptchaBadge.css('position', 'absolute')
    grecaptchaBadge.offset({
        top: submitBtn_offset.top,
        left: submitBtn_offset.left,
    })
})