/**
 * Created by Administrator on 2016/9/25 0025.
 */

/*调用全屏的方法*/
$(function(){
    $("#dowebok").fullpage({
        /*funllpage 为全屏调动*/

        /*设置没一行的颜色*/
        sectionsColor:['#0da5d6', '#2AB561', '#DE8910', '#16BA9D', '#0DA5D6'],

        // 滚到某一屏之后调用
        afterLoad:function(link,index){
            // index 当前section的编号 section代表每一行
            // current类加给谁 谁就做动画
            //这个时删除 当离开的时候删除current选项
            $(".section").removeClass("current");


            setTimeout(function(){
                //让动画延迟 100s 不然当快速返回哪一页的时候 会收不回去

                /*当滑动到这个页面的时候 要添加这个current属性*/
                $(".section").eq(index-1).addClass("current")
            },100)
        }
    })
})