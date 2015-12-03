playerController = function (cover, index) {
    this.init(cover, index);
};
playerController.prototype = {
    cover : null,
    iframe : null,
    player: null,
    playing: false,

    init : function(cover, index) {
        var me = this;

        this.cover = cover;
        this.iframe = $(cover).prev().find('iframe')[0];
        this.player = $f(this.iframe);

        this.player.addEvent('ready', function() {
            if (index === 0 ) {
                me.toggle(true);
            }
            me.player.addEvent('pause', function () {
                me.playing = false;
            });
            me.player.addEvent('play', function () {
                me.playing = true;
            });
        });

        $(cover).bind('click', function() {me.toggle()});


    },

    toggle : function (state) {
        var me = this;
        if (typeof state !== 'undefined') {
            if (state) {
                me.player.api('play');
            } else {
                me.player.api('pause');
            }
        } else
        if (me.playing) {
            me.player.api('pause');
        } else {
            me.player.api('play');
        }
    }
}

$(window).ready(function () {
    options = {
        mode: 'vertical',
        mousewheelControl: true,
        preventLinks : true,
        onSlideChangeEnd : function (thing) {
            $(window).trigger('resize');
            thing.resizeFix();
            $.each(playerControllers, function(index, obj) {
                obj.toggle(false);
            });
            playerControllers[thing.activeSlide].toggle(true);
        }
    }
    var mySwiper = new Swiper('.swiper-container', options);

    var playerControllers = [];

    $('.cover').each(function(index, el) {
        playerControllers[index] = new playerController(el, index);
    });

});