//利用jQuery编写js
$(document).ready(function(){
    	//爱情计时钟
    	var clock = $('#loveClock').FlipClock(798, {
            clockFace: 'Counter'
        });
        setTimeout(function() {
          setInterval(function() {
            clock.increment();
          }, 1000*3600*24);
        });
        
        //瀑布流加载陌生人动态，待实现...
        // var masonryNode = $('#masonry');
        // masonryNode.imagesLoaded(function(){
        //   masonryNode.masonry({
        //     itemSelector: '.thumbnail',
        //     isFitWidth: true
        //   });
        // });
      
        
        //blog页面的展开，收起功能
        $('.open_blog_detail').click(function(){
        	$(this).parent().prev().hide().removeClass('hide').fadeIn('slow');
        	$(this).hide();
        	$(this).parent().next().find('a').hide().removeClass('hide').fadeIn('slow');
        });

        $('.close_blog_detail').click(function(){
        	//alert($(this).parent().prev().html());
        	$(this).parent().prev().prev().fadeOut().addClass('hide');
        	$(this).hide();
        	$(this).parent().prev().find('a').fadeIn('slow');
        });
        
    });