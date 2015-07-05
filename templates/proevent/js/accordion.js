$(function() {
    $('#accordion > li').hover(
        function () {
            var $this = $(this);
			$this.css("background-position", "-600px 0");
            $this.stop().animate({'width':'600px'},500);
            $this.siblings().stop().animate({'width':'100px'},500);
            $('.heading',$this).stop(true,true).fadeOut();
            $('.bgDescription',$this).stop(true,true).slideDown(500);
            $('.description',$this).stop(true,true).fadeIn();
        },
        function () {
            var $this = $(this);
			$this.css("background-position", "0 0");
            $this.stop().animate({'width':'200px'},500);
			$this.siblings().stop().animate({'width':'200px'},500);
            $('.heading',$this).stop(true,true).fadeIn();
            $('.description',$this).stop(true,true).fadeOut(500);
            $('.bgDescription',$this).stop(true,true).slideUp(700);
        }
    );
});