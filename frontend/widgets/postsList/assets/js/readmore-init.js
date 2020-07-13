$(function(){
    $('#more').readmore({
        speed: 100,
        maxHeight: 0,
        collapsedClass: 'readmore-js-collapsed',
        moreLink: '<p class="more"><a href="#" class="btn btn-default">Читати далі...</a></p>',
        lessLink: '<p class="more"><a href="#" class="btn btn-default">Звернути</a></p>'
    });
});
