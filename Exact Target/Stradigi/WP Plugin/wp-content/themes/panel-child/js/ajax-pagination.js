"use strict";

$(document).ready(function(){
    var newsHandler = new NewPage();
    newsHandler.init();
    newsHandler.resetAjaxHtml();
    newsHandler.getPosts();
});

var NewPage = function(){
    this.currentPageNumber = 1;
    this.categoryName = 'blog';
    this.slug = 'blog';
    this.ajaxHtmlSelector = '.blogAjaxContainer';
};

  NewPage.prototype ={
      getPosts : function(callback){
          var elem = this;
          elem.addLoader();
             $.ajax({
		url: ajaxpagination.ajaxurl,
		type: 'post',
		data: {
			action: 'ajax_pagination',
                        route: 'blogByCategory',
                        filter:  elem.slug,
                        paged:  elem.currentPageNumber
		},
		success: function( result ) {
			$(elem.ajaxHtmlSelector ).append(result);
                        elem.removeLoader();
                    if(typeof callback == 'function'){   
                        callback();
                    }
		}
	}) 
      },
      setCategory : function(name,slug){
          var elem = this;
          elem.categoryName = name;
            elem.slug = slug;
           
           elem.resetAjaxHtml();
           
            elem.getPosts(function(){
               elem.listeners(); 
            });
      },
      resetAjaxHtml : function(){
          var elem = this;
           var $blogBox = $(elem.ajaxHtmlSelector);
            var height = $blogBox.height();
            $blogBox.css('height',height);
            $blogBox.html('');
             var title =  elem.categoryName ;
            if(elem.categoryName === 'blog'){
                title = 'All';
            }
             $('.catMenuController .selectedCat').html(title);
            elem.toggleMobileCatPicker('close');
      },
      toggleMobileCatPicker: function(val){
         var elem = this; 
         var popMenuObj = $('.popMenu');
         if(val === 'show'){
               popMenuObj.addClass('show');
               return;
         }
          if(val === 'close'){
               popMenuObj.removeClass('show');
               return;
         }
         if(popMenuObj.hasClass('show')){
            popMenuObj.removeClass('show'); 
         }else{
             popMenuObj.addClass('show');
         }
      },
      addLoader : function(){
          var elem = this;
           var $blogBox = $(elem.ajaxHtmlSelector);
           $blogBox.prepend('<span class="minloader"></span>');
      },
      removeLoader: function(){
             var elem = this;
           var $blogBox = $(elem.ajaxHtmlSelector);
           $blogBox.find('.minloader').remove();
           $blogBox.css('height','auto');
      },
      listeners : function(){
          var elem = this;
          $('.blogMenuItem').off('click')
          $('.blogMenuItem').on('click',function(){
              var $obj = $(this);
              $('.blogMenuItem').removeClass('selected');
              $obj.addClass('selected');
              var name = $obj.data('name');
              var slug = $obj.data('slug');
              elem.setCategory(name, slug);
          });
          $('.blog_more').off('click')
          $('.blog_more').on('click',function(){
              elem.currentPageNumber ++;
          });
          $('.catMenuController').off('click')
          $('.catMenuController').on('click',function(){
             elem.toggleMobileCatPicker();
          });
      },
      init:function(){
        this.listeners();  
      }
  }  
