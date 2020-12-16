var app=new Vue({
    el: "#app",
    components: {
        'carousel': VueCarousel.Carousel,
        'slide': VueCarousel.Slide
    },
    data:{
        mousedown_pos: {'x':0, 'y':0},
        mouseup_pos: {'x':0, 'y':0}
    },
    methods:{
        get_mousedown_pos: function(event, pos){
            this.mousedown_pos['x'] = event.clientX;
            this.mousedown_pos['y'] = event.clientY;
        },
        get_mouseup_pos:function(event, pos){
            this.mouseup_pos['x'] = event.clientX;
            this.mouseup_pos['y'] = event.clientY;
        },
        judge: function(event){
            if(this.mousedown_pos['x'] != this.mouseup_pos['x']
                || this.mousedown_pos['y'] != this.mouseup_pos['y']){
                event.preventDefault();
            }
        }
    }
});