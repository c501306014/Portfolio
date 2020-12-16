var ScrollToTop = new Vue({
    el:'#scroll-to-top',
    data:{
        isActive: false
    },
    methods:{
        change(){
            console.log(window.pageYOffset);
            if(window.pageYOffset > 150){
                this.isActive = true;
            }else{
                this.isActive = false;
            }
        },
        handleScroll(){
            if(window.scrollY < 150 && this.isActive == true){
                this.isActive = !this.isActive;
            }else if(window.scrollY >=150 && this.isActive == false){
                this.isActive = !this.isActive;
            }
        },
    },
    created(){
        this.change();
        window.addEventListener('scroll', this.handleScroll);
        },
    destoryed(){
        window.removeEventListener('scroll', this.handleScroll);
    }
})
