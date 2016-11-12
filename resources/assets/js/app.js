
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

$(window).scroll(function() {
    var header_height = parseInt($('.landing__header--container').css('height'));
    console.log(header_height);
    if ($(this).scrollTop() == 0) {
        $('.nav__full--container').css({
            'box-shadow': 'none',
            '-moz-box-shadow' : 'none',
            '-webkit-box-shadow' : 'none' });
    }
    else {
        $('.nav__full--container').css({
            'box-shadow': '0 2px 10px 0 rgba(0,0,0,0.14),0 1px 5px 0 rgba(0,0,0,0.12),0 3px 10px -2px rgba(0,0,0,0.2)',
            '-moz-box-shadow' : '0 2px 10px 0 rgba(0,0,0,0.14),0 1px 5px 0 rgba(0,0,0,0.12),0 3px 10px -2px rgba(0,0,0,0.2)',
            '-webkit-box-shadow' : '0 2px 10px 0 rgba(0,0,0,0.14),0 1px 5px 0 rgba(0,0,0,0.12),0 3px 10px -2px rgba(0,0,0,0.2)' });
    }
});

$('.btn__mobile-nav-toggle').click(function() {
    $('.nav-mobile--container').toggleClass('active');
    $('.nav-mobile--mask').toggleClass('active');
    $('body').toggleClass('inactive');
    $('#root-body').toggleClass('inactive');
});
$('.nav-mobile--mask').click(function() {
    console.log('click');
    $('.nav-mobile--container').removeClass('active');
    $('.nav-mobile--mask').removeClass('active');
    $('body').removeClass('inactive');
    $('#root-body').removeClass('inactive');
});