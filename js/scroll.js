var header_height = 80;

var scroll = new Vue({
    el: "#vue-scroll",
    data:{
        toTop:{
            el:'#top-wrapper',
            offset: -header_height
        },
        toAbout:{
            el:'#about-wrapper',
            offset: -header_height
        },
        toWorks:{
            el:'#works-wrapper',
            offset: -header_height
        },
        toContact:{
            el:'#contact-wrapper',
            offset: -header_height
        }
    }
})
