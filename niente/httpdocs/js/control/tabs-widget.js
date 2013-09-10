var panels = $(".tabwidget-panel"), 
    tabs = $("#tabwidget-tabs li a");

panels.hide();

tabs.click(function(e){
   e.preventDefault();
   
   panels.hide();
   panelheight = $(this.hash).outerHeight();
   $(this.hash).show().parent().animate({"height":  panelheight});
                            
   tabs.removeClass("tabwidget-selected");
   $(this).addClass("tabwidget-selected");
}).filter(':first').click();