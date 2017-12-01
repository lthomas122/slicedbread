jQuery(function(){
  jQuery(".portfolio-pane").click(function(){
    var id = jQuery(this).data("name");
    jQuery(".portfolio-pane").removeClass("active");
    jQuery(this).addClass("active");
    jQuery(".portfolio-preview").hide();
    jQuery(".portfolio-preview"+"[data-id="+id+"]").show();
  });
});
