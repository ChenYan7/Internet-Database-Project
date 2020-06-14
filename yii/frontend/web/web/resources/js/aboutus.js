layui.use(['carousel','element'], function(){
    var carousel = layui.carousel;
    var element=layui.element;
    //建造实例
    carousel.render({
        elem: '#uscarousel'
        ,width: '100%' //设置容器宽度
        ,height:'300px'
        ,interval: 3000
        ,anim: 'fade'
        ,autoplay:true
        ,indicator:'outside'
    });
    carousel.on('change(uscarousel)', function(obj){ //test1来源于对应HTML容器的 lay-filter="test1" 属性值
        console.log(obj.index); //当前条目的索引
        console.log(obj.prevIndex); //上一个条目的索引
        console.log(obj.item); //当前条目的元素对象
        if(obj.index==0)
        {
            element.progress('one', '20%');
            element.progress('two', '45%');
            element.progress('three', '15%');
            element.progress('four', '50%');
        }else if(obj.index==1)
        {
            element.progress('one', '30%');
            element.progress('two', '10%');
            element.progress('three', '15%');
            element.progress('four', '12.5%');
        }else if(obj.index==2)
        {
            element.progress('one', '10%');
            element.progress('two', '25%');
            element.progress('three', '20%');
            element.progress('four', '10%');

        }else if(obj.index==3)
        {
            element.progress('one', '15%');
            element.progress('two', '15%');
            element.progress('three', '30%');
            element.progress('four', '10%');

        }else if(obj.index==4)
        {
            element.progress('one', '25%');
            element.progress('two', '5%');
            element.progress('three', '20%');
            element.progress('four', '17.5%');
        }
    });
});