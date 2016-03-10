jQuery(function($) {
    $('.section-second').vidbg({
        'mp4': 'video/div-video.mp4',
        'webm': 'video/div-video.webm',
        'poster': 'http://wellnesscounselingmilwaukee.com/wp-content/uploads/2015/07/4-Nature-Wallpapers-2014-1.jpg',
    }, {
        // Options
        muted: true,
        loop: true,
        overlay: true,
    });
});
