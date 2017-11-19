/*window.addEventListener('scroll',function(e){
  var scrollPosY = window.pageYOffset | document.body.scrollTop,
  mastHead = document.getElementById('masthead');
  if(scrollPosY > 2) {
          mastHead.className += ('light');
    } else if(scrollPosY <= 2) {
         mastHead.className -=  ('light');
    }
});

function scrollClass(el, cont){
    var height = cont.clientHeight() / 1.5;
    var top = cont.offset().top - jQuery(document).scrollTop();
  if (top < 200 && !el.is('.in-view')){
      jQuery(el).addClass('in-view');
  }
  if ((top > 200 || top < -height) || (el.is('.in-view'))){
      jQuery(el).removeClass('in-view');
  }
}

jQuery(document).scroll(function(){
  var anchor = jQuery('#masthead.float-header .mainnav ul.menu-main-menu li a');
  for(var i = 0; i < anchor.length; i++){
    var wrapHash = anchor[i].attr('href'), wrap = jQuery(wrapHash);
    scrollClass(anchor[i], wrap);
  }
});
*/
