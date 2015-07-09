/**
 * Created by homepc on 08.07.2015.
 */


function makeActive() {
     $("ul.navbar-nav > li").removeClass('active');
     $(this).addClass('active');
}

function makeDisabled() {
    $(this).removeClass('active');
}


$(window).load(function () {
    el = $("ul.nav.navbar-nav > li");
    el.bind('mouseover',makeActive);
    el.bind('mouseout',makeDisabled);
});
