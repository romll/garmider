if (!RedactorPlugins) var RedactorPlugins = {};

(function ($) {
    RedactorPlugins.video = function () {
        return {
            reUrlYoutube: /https?:\/\/(?:[0-9A-Z-]+\.)?(?:youtu\.be\/|youtube\.com\S*[^\w\-\s])([\w\-]{11})(?=[^\w\-]|$)(?![?=&+%\w.-]*(?:['"][^<>]*>|<\/a>))[?=&+%\w.-]*/ig,
            reUrlVimeo: /https?:\/\/(www\.)?vimeo.com\/(\d+)($|\/)/,
            reUrlFB: /(?:https?:\/\/)?(?:www.|web.|m.)?facebook.com\/(?:video.php\?v=\d+|photo.php\?v=\d+|\?v=\d+)|\S+\/videos\/((\S+)\/(\d+)|(\d+))\/?/ig,
            getTemplate: function () {
                return String()
                    + '<section id="redactor-modal-video-insert">'
                    + '<label>' + this.lang.get('video_html_code') + '</label>'
                    +'<div>'
                    + '<label style="display: inline; padding-left: 10px;"><input type="text" id="text-width-modal" style="width: 40px;">' + " width" + '</label>'
                    + '<label style="display: inline; padding-left: 10px;"><input type="text" id="text-height-modal" style="width: 40px;">' + " height" + '</label>'
                    + '<label style="display: inline; padding-left: 10px;"><input type="checkbox" id="check-modal">' + " автопрогравання" + '</label>'
                    +'</div>'
                    + '<textarea id="redactor-insert-video-area" style="height: 160px;"></textarea>'
                    + '</section>';
            },
            init: function () {
                var button = this.button.addAfter('image', 'video', this.lang.get('video'));
                this.button.addCallback(button, this.video.show);
            },
            show: function () {
                this.modal.addTemplate('video', this.video.getTemplate());

                this.modal.load('video', this.lang.get('video'), 700);
                this.modal.createCancelButton();

                var button = this.modal.createActionButton(this.lang.get('insert'));
                button.on('click', this.video.insert);

                this.selection.save();
                this.modal.show();

                $('#redactor-insert-video-area').focus();

            },
            insert: function () {
                var data = $('#redactor-insert-video-area').val();
                var textWidthModal = document.querySelector('#text-width-modal');
                var textHeightModal = document.querySelector('#text-height-modal');
                var widthVideo = 500;
                var heightVideo = 300;
                var dataAutoplay = false;

                if (!data.match(/<iframe|<video/gi)) {
                    data = this.clean.stripTags(data);

                    if(textWidthModal.value !== '') {
                        widthVideo = textWidthModal.value;
                    }

                    if(textHeightModal.value !== '') {
                        heightVideo = textHeightModal.value;
                    }

                    if ($('#check-modal').is(':checked')) {
                        dataAutoplay = true;
                    }

                    // parse if it is link on youtube & vimeo
                    var iframeStart = '<iframe style="width: 500px; height: 281px;" src="',
                        iframeEnd = '" frameborder="0" allowfullscreen></iframe>';

                    var iframeFBStart = '<div class="fb-video" data-href="',
                        iframeFBEnd = '"data-width="'+ widthVideo +'" data-height="'+ heightVideo +'" data-allowfullscreen="true" data-autoplay="'+ dataAutoplay +'" data-show-captions="true"></div>';

                    /*var iframeFBStart = '<iframe src="',
                        iframeFBEnd = '&show_text=0&width='+ widthVideo +'" style="border:none;overflow:hidden" scrolling="no" allowtransparency="true" allowfullscreen="true" width="'+ widthVideo +'" height="'+ heightVideo +'" frameborder="0"></iframe>';*/

                    if (data.match(this.video.reUrlYoutube)) {
                        data = data.replace(this.video.reUrlYoutube, iframeStart + '//www.youtube.com/embed/$1' + iframeEnd);
                    }
                    else if (data.match(this.video.reUrlVimeo)) {
                        data = data.replace(this.video.reUrlVimeo, iframeStart + '//player.vimeo.com/video/$2' + iframeEnd);
                    }
                    else if (data.match(this.video.reUrlFB))
                    {
                        data = data.replace(this.video.reUrlFB, iframeFBStart + '$&' + iframeFBEnd);
                        var ur = window.location.href;
                        var path = ur.split('/')[6];
                        /*data = data.replace(this.video.reUrlFB, iframeFBStart + 'https://www.facebook.com/plugins/video.php?href=$&' + iframeFBEnd);*/
                        $('.redactor-editor').load('/'+ path + '.redactor-editor', function()
                        {
                            FB.XFBML.parse();
                        });
                    }
                }

                this.selection.restore();
                this.modal.close();

                var current = this.selection.getBlock() || this.selection.getCurrent();

                if (current) $(current).after(data);
                else {
                    this.insert.html(data);
                }

                this.code.sync();
            }

        };
    };
})(jQuery);
