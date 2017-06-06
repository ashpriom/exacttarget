$(document).ready(function(){
    var menuHandler = new MenuClass();
    menuHandler.init();
//     $('.mainPageLoader').removeClass('show');
//    $('a').on('click',function(evt) {
//        if($(this).hasClass('ignoreTranstion')){
//             return;
//        }
//         var nextLink=$(this).attr("href");
//         if(nextLink === 'undefined'){
//            return;
//        }
////        if($(this).hasClass('skipTransition')){
////            return;
////        }
//        
//        evt.preventDefault();
//        
//    $('.mainPageLoader').addClass('show');
//    setTimeout(function(){
//        window.location = nextLink;
//    },100);
//  });
  
  $('.heroclick').on('click',function(evt) {
      var $obj = $(this);
      var id = $obj.data('id');
      $('html, body').animate({
        scrollTop: $("#"+id).offset().top
    }, 1000);
  });
     
    
});


var MenuClass = function(){
    
}
MenuClass.prototype = {
    toggleMenu : function($obj, val){
        var elem = this;
        var $mobileMenuObj = $('nav.navigation-mobile');
        if(val=== 'close'){
            $obj.removeClass('is-active');
            $mobileMenuObj.removeClass('open');
            return;
        }
        if(val=== 'open'){
            if(!$mobileMenuObj.hasClass('open')){
             $mobileMenuObj.addClass('open');
              $obj.addClass('is-active');
            }           
            return;
        }
        
        if($mobileMenuObj.hasClass('open')){
             $mobileMenuObj.removeClass('open');
              $obj.removeClass('is-active');
        }else{
             $mobileMenuObj.addClass('open');
             $obj.addClass('is-active');
        }
    },
    updateNavScroll : function($headerParentObj){
         var scroll = $(window).scrollTop();
             if(scroll > 100){
                 if( !$headerParentObj.hasClass('scrolled')){
                 $headerParentObj.addClass('scrolled');
             }
             }else{
                 $headerParentObj.removeClass('scrolled');
             }
    },
    listeners : function(){
        var elem = this;
        var $headerParentObj = $('header.site-header');
       elem.updateNavScroll($headerParentObj);
        $('.site-header-wrapper .mobileMenu').on('click', function(){
            elem.toggleMenu($(this));
        });
        $('.site-header-wrapper .closeMeBar').on('click', function(){
            elem.toggleMenu($(this), 'close');
        });
        $(window).on('scroll.menuscroll', function(){
             elem.updateNavScroll($headerParentObj);
        });
        
    },
    init:function(){
       this.listeners(); 
    }
}