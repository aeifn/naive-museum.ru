import $ from 'jquery';
$(function(){
var header_h=$("header").height();
var window_h=$(window).height();
var carousel_h=window_h-header_h;
console.log(carousel_h);
if(carousel_h >= 500 && carousel_h <= 1000) {
  $("#carousel").height(carousel_h);
}
});
