// JavaScript Document
"use strict";

/*********************************************************************************************
 GLOBAL VARIABLES
 ***********************************************************************************************/


var browserVersion = checkVersion();
var viewStateHandler;
var pophandler;
var updateobjectHandler;
var videoStartHandler;
var PanelScrollerObject_1;
var PanelScrollerObject_1Ready = false;


/*********************************************************************************************
 INITIALIZE WEB-APPLICATION
 ***********************************************************************************************/
$(document).ready(function () {

    var cmsListener = new CMSListenerClass('cms_fieldNames');
    cmsListener.init();


    viewStateHandler = new ViewStateClass();

    //Grabs all responsive images into a controler 
    viewStateHandler.initialzeObjects('img.resizeableImg', 'responsiveImages');

    viewStateHandler.addResponsiveBackgroundImages('.bgResponsive', 'MultiView');
    viewStateHandler.addResponsiveBackgroundImages('.bgResponsiveOne', 'OneView');

    // Create Custom update function and Add to Window dimensions handler
    updateobjectHandler = new UpdatedObject();
    viewStateHandler.addObject(updateobjectHandler);

    if (Modernizr.touch) {
        $('body').addClass('touchableDevice');
    } else {
        $('body').addClass('notTouchableDevice');
    }
    /* INITIALIZE OBJECTS AND LISTENERS FOR CURRENT PAGE
     ***************************************************
     Create controling objects and listeners for the current view.
     Any objects (responsive objects) that must update their values as the view (screen width)
     changes must be added to the view-state-handler.
     Note: Your responsive object must have the method 'update' and 
     must recieve 2 parameters : (view = {1,2, or 3}, isRetna= boolean )
     
     ********************************************************/







    /* INITIALIZE ViewStateHandler
     *********************************
     Sets the current view state for all responsive objects previously added
     Starts window event listener
     *****************************************/


    window.scroll(0, 0);
    mouseScrollerSVG();
    convertAllEmailModules();
    PanelScrollerObject_1 = new PanelScrollerObject();


    //HOME PAGE
    if (getCurrentTableName() == 'home_page') {
        if ($('#videoScrollerObject').length > 0) {
            var VideoScrollerObject_1 = new VideoScrollerObject();

            VideoScrollerObject_1.refinement = 10;
            VideoScrollerObject_1.init('#videoScrollerObject');
            VideoScrollerObject_1.parent(PanelScrollerObject_1);
            PanelScrollerObject_1.addNotifierObj(VideoScrollerObject_1);
        }

        var SplitStringAnimation_1 = new SplitStringAnimation();
        SplitStringAnimation_1.init('.SplitStringAnimation');
        $('.PLAYBTN').on('click', function () {
            PanelScrollerObject_1.play();
        });
    } else if (getCurrentTableName() == 'careers_page') {
        $('.careers_page .menuItem').on('click', function () {
            var $thisObj = $(this);
            var child = $thisObj.data('child');
            toggleAnimation('.careers_page .mainInfoPanel .infoPanel', '#' + child);
            toggleAnimation('.careers_page .mainInfoPanel .infoPanel', '#' + child);

            $('.careers_page .menuItem').removeClass('selected');
            $thisObj.addClass('selected');




        });
        $('.careers_page .jobRow.job').on('click', function () {
            var $thisObj = $(this);
            var child = $thisObj.data('child');
            showPopup('#' + child);

        });






    } else if (getCurrentTableName() == 'about_page') {
//        var TeamAnimation_handler = new TeamAnimation();
//        TeamAnimation_handler.init('#teamAnimation .panelTeam.desk', '#teamAnimation .panelTeam.tablet', '#teamAnimation .panelTeam.mobile');
//        viewStateHandler.addObject(TeamAnimation_handler);





    } else if (getCurrentTableName() == 'work_feed') {
        $('.externalLinksBox_Trigger').on('click', function () {

            var $thisObj = $(this);
            var childID = $thisObj.data('child');
            var $childObj = $('#' + childID);
            if ($childObj.hasClass('selected')) {
                $childObj.removeClass('selected');
            } else {
                $childObj.addClass('selected');
            }

            var $closeBtn = $childObj.find('.closeMe');
            $closeBtn.off('click.close');
            $closeBtn.on('click.close', function () {
                $childObj.removeClass('selected');
            });
        });
    }



    if (!Modernizr.touch) {
        var vidparentObj = $('.notTouchableDevice #vidWrapper');
        if (vidparentObj.length > 0) {
            videoStartHandler = new VideoStart();
            videoStartHandler.init(vidparentObj);
            viewStateHandler.addObject(videoStartHandler);
        }
    }
    
     initMenuSVG(function () {
             PanelScrollerObject_1.setCallback(function () {
            $('.tempMen').fadeOut(1200, function () {
                $(this).remove();
                if (typeof videoStartHandler !== 'undefined') {
                    setTimeout(function () {
                        videoStartHandler.play();
                    }, 500);
                }
            });
            PanelScrollerObject_1Ready = true;
               viewStateHandler.init();
            
        });
        PanelScrollerObject_1.init();
        if (getCurrentTableName() == 'job_feed') {
            PanelScrollerObject_1.disableScroll();
        }
   });
    

//    if (getCurrentTableName() == 'home_page') {
//        initMenuSVG(function () {
//            PanelScrollerObject_1.setCallback(function () {
//                $('.tempMen').fadeOut(1200, function () {
//                    $(this).remove();
//                    setTimeout(function () {
//                        if(typeof videoStartHandler !== 'undefined'){
//                                videoStartHandler.play();
//                        }
//                    
//                    }, 500);
//                });
//            });
//            PanelScrollerObject_1.init();
//
//        });
//    } else {
//        initMenuSVG(function () {
//             PanelScrollerObject_1.setCallback(function () {
//            $('.tempMen').fadeOut(1200, function () {
//                $(this).remove();
//                if (typeof videoStartHandler !== 'undefined') {
//                    setTimeout(function () {
//                        videoStartHandler.play();
//                    }, 500);
//                }
//            });
//        });
//        PanelScrollerObject_1.init();
//        });
//       
//    }

    



//FOR CONTACT FORM 
    if ($('.contactFormContainer').length > 0) {

        var conactFrmHandler = new ContactFormObj(PanelScrollerObject_1);
        conactFrmHandler.init();
    }
    $('.ToggleContactBtn').on('click', function () {
        showPopup_contact();
    });



    $('.goBack_js').on('click', function () {
        window.history.back();
    })


 




});



/*********************************************************************************************
 STAND ALONE FUNCTIONS
 ***********************************************************************************************/


/*
 *	Returns Current Page Number
 */
function getCurrentPage() {
    return $('#currentView').val();

}

function getCurrentUrl() {
    return $('#currentURL').val();

}

function getCurrentLang() {
    return $('#currentLang').val();

}
function getCurrentTableName() {
    return $('#currentTableName').val();

}


function validateEmail(value) {
    var input = document.createElement('input');

    input.type = 'email';
    input.value = value;

    return input.checkValidity();
}

function validateEmail_regx(value) {
    return  /^[0-9a-zA-Z]+([0-9a-zA-Z]*[-._+])*[0-9a-zA-Z]+@[0-9a-zA-Z]+([-.][0-9a-zA-Z]+)*([0-9a-zA-Z]*[.])[a-zA-Z]{2,6}$/.test(value);
}





/*
 * FOR MOBILE MENU Control
 */
function showMenu(show) {
    var $bodyObj = $('body');
    var $menuObj = $('#mini-menu');
    var $menuObjBack = $('#mobileMenubackground');

    if (show) {
        $menuObj.removeClass('displayNone');
        $menuObjBack.removeClass('displayNone');
        $bodyObj.addClass('overFlowHidden');


        //hide Menu    
    } else {
        $menuObj.addClass('displayNone');
        $menuObjBack.addClass('displayNone');
        $bodyObj.removeClass('overFlowHidden');
        $('a.mobileBtn').removeClass('selected');
    }
}

function initMenuSVG(callback) {
    /*GLOBAL VARIABLES*/


    /* Variables for the menu 'hamburger'. Each represents a line of the hamburger*/
    $('#stradigiLogo').fadeIn(1000);
    var first = {};
    var second = {};
    var third = {};



    var hamburger = Snap('#menuicon');

    Snap.load("images/hamburger.svg", function (f) {
        var g = f.select("g");
        first = f.select('#a');
        second = f.select('#b');
        third = f.select('#c');
        hamburger.append(g);
        if (getCurrentTableName() == 'home_page') {
            appearHAfirst();
        } else {
            appearHA();
        }
    });


    /* FUNCTIONS TO STORE SVGs DATA*/

    function appearHA() {
        hamburger.animate({opacity: 1}, 0, mina.linear);
        first.animate({path: "m 5.0916789,20.818994 53.8166421,0"}, 400, mina.linear);
        first.animate({opacity: 1}, 700, mina.linear);
        second.animate({transform: "s1 1", opacity: 1}, 400, mina.linear);
        second.animate({opacity: 1}, 700, mina.linear);
        third.animate({path: "m 5.0916788,42.95698 53.8166422,0"}, 400, mina.linear);
        third.animate({opacity: 1}, 700, mina.linear);
        if(typeof callback == 'function') {
            setTimeout(callback, 700);
            }

    }

    function appearHAfirst() {
        first.animate({path: "m 5.0916789,20.818994 53.8166421,0"}, 400, mina.linear);
        first.animate({opacity: 1}, 700, mina.linear);

        hamburger.stop().animate({opacity: 1}, 0, mina.linear, function () {
            setTimeout(appearHAsecond, 700);
        });
    }

    function appearHAsecond() {
        second.animate({transform: "s1 1", opacity: 1}, 400, mina.linear);
        second.animate({opacity: 1}, 700, mina.linear);

        hamburger.stop().animate({opacity: 1}, 0, mina.linear, function () {
            setTimeout(appearHAthird, 700);
            callback();
        });
    }

    function appearHAthird() {
        third.animate({path: "m 5.0916788,42.95698 53.8166422,0"}, 400, mina.linear);
        third.animate({opacity: 1}, 700, mina.linear);

    }



    /* Function storing the hamburger's original colors*/
    function HAM_dark() {
        first.animate({stroke: '#000'}, 500, mina.linear);
        second.animate({stroke: '#000'}, 500, mina.linear);
        third.animate({stroke: '#000'}, 500, mina.linear);
    }

    /* Function storing the hamburger's new colors on click to itslef or hover to header (red in my example)*/
    function HAM_Light() {
        first.animate({stroke: '#FFFFFF'}, 500, mina.linear);
        first.animate({opacity: 1}, 500, mina.linear);
        second.animate({stroke: '#FFFFFF'}, 500, mina.linear);
        second.animate({opacity: 1}, 500, mina.linear);
        third.animate({stroke: '#FFFFFF'}, 500, mina.linear);
        third.animate({opacity: 1}, 500, mina.linear);
    }

    /* Function storing the hamburger's original path position (the coordinates of each hamburger line) */
    function HAM_burgerPosition() {
        first.animate({path: "m 5.0916789,20.818994 53.8166421,0"}, 400, mina.linear);
        second.animate({transform: "s1 1", opacity: 1}, 400, mina.linear);
        third.animate({path: "m 5.0916788,42.95698 53.8166422,0"}, 400, mina.linear);
    }

    /* Function storing the hamburger's path position after trigger (to become an 'x') */
    function HAM_crossPostion() {
        first.animate({path: "M 12.972944,50.936147 51.027056,12.882035"}, 400, mina.linear);
        first.animate({opacity: 1}, 500, mina.linear);
        second.animate({opacity: 0}, 400, mina.linear);
        third.animate({path: "M 12.972944,12.882035 51.027056,50.936147"}, 400, mina.linear);
        third.animate({opacity: 1}, 500, mina.linear);
    }



}



function mouseScrollerSVG() {
    $mouseObj = $('#mouseicon');
    var $mouseObj = $('#mouseicon');
    var mouseExisits = false;
    if ($mouseObj.length > 0) {
        mouseExisits = true;
        var mouseSVG = Snap.select('#mouseicon');
        var mouseLine = mouseSVG.select('#mouseroll');
    }

    /* Function that animates the mouse icon, along with the variables that select the paths to be animated*/


    function mouseScroll() {

        mouseLine.animate({y2: 24}, 250, mina.linear, function () {
            mouseLine.animate({y1: 18}, 450, mina.linear, function () {
                mouseLine.animate({y1: 14, y2: 20}, 450, mina.linear, function () {
                    mouseLine.animate({y2: 24}, 250, mina.linear, function () {
                        mouseLine.animate({y1: 18}, 450, mina.linear, function () {
                            mouseLine.animate({y1: 14, y2: 20}, 450, mina.linear, function () {
                                mouseLine.animate({y2: 24}, 250, mina.linear, function () {
                                    mouseLine.animate({y1: 18}, 450, mina.linear, function () {
                                        mouseLine.animate({y1: 14, y2: 20}, 450, mina.linear);
                                        setTimeout(mouseScroll, 2000);
                                    });
                                });
                            });
                        });
                    });
                });
            });
        });
    }
    if (mouseExisits) {
        mouseScroll();
    }



}

/*********************************************************************************************
 
 CLASSES
 
 ***********************************************************************************************/




/*
 * This Object is mean to handle custom events required to fire when the
 * Display view changes (window resizes to 1 of 3 views)
 */
var UpdatedObject = function () {
    return this;
}

UpdatedObject.prototype = {
    update: function (view, isRetna) {

        switch (view) {
            case 1:
                if (getCurrentTableName() == 'about_page' || getCurrentTableName() == 'careers_page') {
                    updatePanelComments('desk');
                }
                showMenu(false);
                break;
            case 2:

                if (getCurrentTableName() == 'about_page' || getCurrentTableName() == 'careers_page') {
                    updatePanelComments('tablet');
                }

                showMenu(false);
                break;
            case 3:
                if (getCurrentTableName() == 'about_page' || getCurrentTableName() == 'careers_page') {
                    updatePanelComments('mobile');
                }

                showMenu(false);




                break;

        }
    }
}

function updatePanelComments(activeLabel) {

    var commentObjsParent = $("#commentsWrapper");

    commentObjsParent.contents().each(function (index, node) {
        if (node.nodeType == 8) {
            // node is a comment                           
            var val = node.nodeValue.search('data-label="' + activeLabel + '"');
            if (val > 0) {
                $(node).replaceWith(node.nodeValue);
            }

        }
    });

    if (activeLabel !== 'desk') {
        commentObjsParent.find('section.desk').each(function (index, node) {
            var my_element_jq = $(this);
            var comment = document.createComment(my_element_jq.get(0).outerHTML);
            my_element_jq.replaceWith(comment);
        });
    }
    if (activeLabel !== 'tablet') {
        commentObjsParent.find('section.tablet').each(function (index, node) {
            var my_element_jq = $(this);
            var comment = document.createComment(my_element_jq.get(0).outerHTML);
            my_element_jq.replaceWith(comment);
        });
    }
    if (activeLabel !== 'mobile') {
        commentObjsParent.find('section.mobile').each(function (index, node) {
            var my_element_jq = $(this);
            var comment = document.createComment(my_element_jq.get(0).outerHTML);
            my_element_jq.replaceWith(comment);
        });
    }
    if(PanelScrollerObject_1Ready){
        PanelScrollerObject_1.refresh(function () {
            commentObjsParent.find('.panelCells .commentCellItem').off();
            commentObjsParent.find('.panelCells .commentCellItem').on('click', function () {
                var $obj = $(this);
                var show = false;
                if (!$obj.hasClass('selected')) {
                    show = true;
                }
                commentObjsParent.find('.panelCells .commentCellItem').removeClass('selected');

                if (show) {
                    $obj.addClass('selected');
                }


            });

            commentObjsParent.find('.panelCells .commentCellItem .anchorLink').off();
            commentObjsParent.find('.panelCells .commentCellItem  .anchorLink').on('click', function (e) {
                var anchor = $(this).data('anchor');
                var indexStr = $('#' + anchor).closest('section.panel').attr('data-panelindex');

                PanelScrollerObject_1.gotToNewPositionByIndex(parseInt(indexStr));
            });
        });
    }



}


/*
 * 
 * Handles updating toggle classes
 */
var toggleAnimation = function (sisterSelector, childSelector) {
    $(sisterSelector).removeClass('showMe').removeClass('selected');
    $(childSelector).addClass('showMe').addClass('selected');
};


var captchaMath = function () {
    this.captchaArray = [];
    this.Val_1 = 0;
    this.Val_2 = 1;
    return this;
};
captchaMath.prototype = {
    listeners: function () {
//        var elem = this;
//        var key;
//        for (key in elem.captchaArray) {
//
//            var $thisCapObj = elem.captchaArray[key];
//            $thisCapObj.find('.robotNumCheck').on('keyup', function () {
//                var $thisObj = $(this);
//                elem.validate($thisObj, function (val) {
//                    if (val) {
//                       // $('#' + $thisCapObj.data('bind-button')).addClass('approved');
//                    } else {
//                       // $('#' + $thisCapObj.data('bind-button')).removeClass('approved');
//                    }
//                })
//
//            });
     //  }
    },
    validate: function (ParentID,callback) {
        var elem = this;
        var reply = false;      
        var $thisObj = $(ParentID+' .robotNumCheck');
        var parsedVal = parseInt($thisObj.val());
        $thisObj.removeClass('error');
        if (elem.Val_1 + elem.Val_2 == parsedVal) {
            reply = true;
        } else {
            $thisObj.addClass('error');
            reply = false;

        }       
        callback(reply);
    },
    register: function (callback) {
        var elem = this;
        var human = 'Are you a human?';
        if(getCurrentLang() == 2){
            human = 'Êtes-vous un humain?';
        }
        var mathString = '* '+human+' <span class="num1"></span> + <span class="num2"></span> = <input type="text" class="robotNumCheck"/>'
        $('.contactFRM .robotCheck').each(function (index, value) {
            var $thisObj = $(this);
            $thisObj.html(mathString);
            elem.captchaArray.push($thisObj);
        });
        callback();
    },
    getRandomNum: function (low, hi) {
        var x = Math.floor(Math.random() * (hi - low + 1)) + low;
        return x;
    },
    updateValues: function (callback) {
        var elem = this;
        elem.Val_1 = elem.getRandomNum(1, 9);
        elem.Val_2 = elem.getRandomNum(20, 90);
        var key;
        for (key in elem.captchaArray) {
            elem.captchaArray[key].find('.num1').text(elem.Val_1);
            elem.captchaArray[key].find('.num2').text(elem.Val_2);
        }
        callback();
    },
    init: function () {
        var elem = this;
        elem.register(function () {
            elem.updateValues(function () {
                elem.listeners();
            });
        });
    }
}

/*
 * 
 * Handles updating toggle classes
 */
var showPopup = function (childSelector) {
    var $body = $('body');
    var $popObj = $('#popupContainer');
    var  $robotText = $popObj.find('.robotNumCheck');
    var content = $(childSelector).html();
    
    $popObj.find('.mainHTMContent').html(content)
    $body.addClass('jobOpen');
    var pageField = $popObj.find('input[name="pageTitle"]');
    var pageTitle = $popObj.find('.mainJobPostingTitle').text();
    pageField.val(pageTitle);
    var $closeBtn = $popObj.find('.closeMe');
    $closeBtn.off('click.closepopup');
    $closeBtn.on('click.closepopup', function () {
        $body.removeClass('jobOpen');
        $popObj.find('.formField').removeClass('error');
       
        if($robotText.hasClass('error')){
            $robotText.removeClass('error');
            $robotText.val('');
        }
        $popObj.find('.formField .field').val('');
        $popObj.find('.formField .fileFieldBtn').removeClass('attached');
        $popObj.find('.formField .fileFieldBtn').removeClass('wrongfile');
        


    });

};
var showPopup_contact = function () {
    var $body = $('body');
    var $popObj = $('#contactViewPopUp');
    var  $robotText = $popObj.find('.robotNumCheck');
    $body.addClass('contactOpen');
    var pageField = $popObj.find('input[name="pageTitle"]');
    pageField.val('Contact');
    var $closeBtn = $popObj.find('.closeMe');
    $closeBtn.off('click.closecontact');
    $closeBtn.on('click.closecontact', function () {
        $body.removeClass('contactOpen');
        $popObj.find('.formField').removeClass('error');
        $popObj.find('.formField .field').val('');
        $popObj.find('.formField .fileFieldBtn').removeClass('attached');
        
          if($robotText.hasClass('error')){
            $robotText.removeClass('error');
            $robotText.val('');
        }
        $popObj.find('.formField .field').val('');       
        $popObj.find('.formField .fileFieldBtn').removeClass('wrongfile');


    });
    setTimeout(function () {
        var $obj = $('body');
        $obj.removeClass('menuOpen');
        if ($obj.hasClass('menuLight')) {
            PanelScrollerObject_1.HAM_dark();
        } else {
            PanelScrollerObject_1.HAM_light();
        }
        PanelScrollerObject_1.HAM_burgerPosition();
    }, 1000);



};

/*
 * This Object is mean to handle custom events required to fire when the
 * Display view changes (window resizes to 1 of 3 views)
 */
var ContactFormObj = function (_PanelScrollerObject_1) {
    this.PanelScrollerObject_1 = _PanelScrollerObject_1;
    return this;
}

ContactFormObj.prototype = {
    validateForm: function () {
        var elem = this;
        var error = false;
        var ParentID = ''
        if ($('body').hasClass('jobOpen')) {
            ParentID = '#popupContainer';
        } else if ($('body').hasClass('contactOpen')) {
            ParentID = '#contactViewPopUp';
        } else if ($('body').hasClass('job_feed')) {
            ParentID = '#jobPosting';
        }

        $(ParentID + ' .contactFormContainer .formField.req').each(function () {
            var $fieldObj = $(this);
            $fieldObj.removeClass('error');

            var $obj;
            if ($fieldObj.hasClass('selectField')) {
                $obj = $fieldObj.find('select');
            } else {
                $obj = $fieldObj.find('.field');
            }


            if ($.trim($obj.val()) == '') {
                error = true;
                $fieldObj.addClass('error');
            } else if ($obj.hasClass('emailField') && !validateEmail_regx($.trim($obj.val()))) {
                error = true;
                $fieldObj.addClass('error');
            } else if ($fieldObj.hasClass('textareaField') && $.trim($obj.val()).length < 10) {
                error = true;
                $fieldObj.addClass('error');

            }



        });

        //Validate file type
        $(ParentID + ' .contactFormContainer .formField').each(function () {
            var $fieldObj = $(this);

            var $obj = $fieldObj.find('input.fileField');
            if ($obj.length > 0) {
                var fileName = $obj.val();
                if (fileName !== '') {
                    var fileArr = fileName.split('.');
                    var fileExtension = fileArr[fileArr.length - 1];

                    if (fileExtension.toLowerCase() !== 'pdf' && fileExtension.toLowerCase() !== 'doc' && fileExtension.toLowerCase() !== 'docx') {
                        error = true;
                        $fieldObj.addClass('error');
                        $fieldObj.find('.fileFieldBtn').addClass('wrongfile');
                    }
                }
            }

        });
        
        
         elem.captcha.validate(ParentID,function(val){
                  if (val) {
                   
                }else{
                    error = true;
                }
             });


        if (!error) {
            elem.showLoadingMessage();
            var formData = new FormData($(ParentID + ' .contactFormContainer form')[0]);


            $.ajax({
                url: "ajax/sendEmailAjax.php",
                type: "POST",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (reply) {
                    if (reply == 'success') {
                        if(typeof ga == 'function'){
                            ga('send', 'event', 'Form', 'Submit', getCurrentUrl());
                        }
                        setTimeout(function () {
                             $('body').removeClass('jobOpen')
                            $('body').removeClass('contactOpen');
                            elem.showSuccessMessage();
                        }, 1000);

                    } else {

                        setTimeout(function () {
                             $('body').removeClass('jobOpen')
                            $('body').removeClass('contactOpen');
                            elem.showFailMessage();
                        }, 1000);
                    }


                },
                fail: function (reply) {
                    elem.showFailMessage();
                }
            });
        }

    },
    startListeners: function () {
        var elem = this;
        var ParentID = ''
        if ($('body').hasClass('jobOpen')) {
            ParentID = '#popupContainer';
        } else if ($('body').hasClass('contactOpen')) {
            ParentID = '#contactViewPopUp';
        } else if ($('body').hasClass('job_feed')) {
            ParentID = '#jobPosting';
        }
        var $container = $(ParentID + ' .contactFormContainer');
        $container.find('.fileFieldBtn').off('click');
        $container.find('input.fileField').off('change');
        $container.find('.fileFieldBtn').on('click', function () {
            var fieldID = $(this).data('fieldname');
            $('#' + fieldID).trigger('click');
        });
        $container.find('input.fileField').on('change', function (event) {
            var $fieldObj = $(this);
            var fieldID = $fieldObj.attr('id');
            var $buttonObj = $container.find('.fileFieldBtn[data-fieldname="' + fieldID + '"]');

            $buttonObj.off('click.attached');

            //Validate file type            
            if ($fieldObj.val() == '') {
                $buttonObj.removeClass('attached');
                $buttonObj.removeClass('wrongfile');
                $buttonObj.find('.filenameSpan').text('');
            } else {
                var fileName = $fieldObj.val();

                var fileArr = fileName.split('.');
                var fileExtension = fileArr[fileArr.length - 1];

                if (fileExtension.toLowerCase() !== 'pdf' && fileExtension.toLowerCase() !== 'doc' && fileExtension.toLowerCase() !== 'docx') {

                    $buttonObj.addClass('wrongfile');
                } else {
                    $buttonObj.removeClass('wrongfile');
                    $buttonObj.addClass('attached');
                    $buttonObj.closest('.formField').removeClass('error');
                    $buttonObj.on('click.attached', function () {

                        $fieldObj.val('');
                        $fieldObj.trigger('change');
                    });
                    var files = event.target.files;
                    var fileName = files[0].name;
                    $buttonObj.find('.filenameSpan').html('- ' + fileName + ' -');
                }
            }


        });
        $container.find('.sendBtn').on('click', function () {
            var $thisObj = $(this);
            
                    elem.validateForm();
                
             
        });


    },
    showLoadingMessage: function () {
        var elem = this;
        var msg = '<strong>Sending</strong> your message... one moment please.';
        if (getCurrentLang() == 2) {

            msg = '<strong>En train d\'acheminer</strong> votre message...';
        }
        var $overlayObj = $('.fullOverlay');
        if ($overlayObj.length == 0) {
            var popHTMLstr = '';
            popHTMLstr += '<div class="fullOverlay">';


            popHTMLstr += '<div class="vhCenterBox">';
            popHTMLstr += '<div class="vhCell">';
            popHTMLstr += '<div class="XLARGE_TITLES">';
            popHTMLstr += msg;
            popHTMLstr += '</div>';
            popHTMLstr += '</div>';
            popHTMLstr += '</div>';


            popHTMLstr += '</div>';
            $('body').append(popHTMLstr);
            $overlayObj = $('.fullOverlay');
        } else {
            $overlayObj.find('.XLARGE_TITLES').html(msg);
        }



    },
    showFailMessage: function () {
        var elem = this;
        var msg = '<strong>Sorry</strong>, an error occured. Please try again.';
        if (getCurrentLang() == 2) {

            msg = '<strong>Désolé</strong>, une erreur est survenue. Veuillez ré-essayer.';
        }
        var $overlayObj = $('.fullOverlay');
        if ($overlayObj.length == 0) {
            var popHTMLstr = '';
            popHTMLstr += '<div class="fullOverlay">';


            popHTMLstr += '<div class="vhCenterBox">';
            popHTMLstr += '<div class="vhCell">';
            popHTMLstr += '<div class="XLARGE_TITLES">';
            popHTMLstr += msg;
            popHTMLstr += '</div>';
            popHTMLstr += '</div>';
            popHTMLstr += '</div>';


            popHTMLstr += '</div>';
            $('body').append(popHTMLstr);
        } else {
            $overlayObj.find('.XLARGE_TITLES').html(msg);
        }



        setTimeout(function () {
            var $obj = $('body');
            $obj.removeClass('contactOpen').removeClass('jobOpen');

            $obj.removeClass('menuOpen');
//            showMenu(false);
            if ($obj.hasClass('menuLight')) {
                elem.PanelScrollerObject_1.HAM_dark();
            } else {
                elem.PanelScrollerObject_1.HAM_light();
            }
            elem.PanelScrollerObject_1.HAM_burgerPosition();


            setTimeout(function () {
                $('.fullOverlay').fadeOut("fast", function () {
                    // Animation complete.
                    $('.fullOverlay').remove();
                });
            }, 1000);

        }, 2000);
    },
    showSuccessMessage: function () {
        var elem = this;
        function killPops(_overlayObj) {
            var ParentID = '';
            var $obj = $('body');
            $obj.removeClass('contactOpen').removeClass('jobOpen');
            if ($obj.hasClass('jobOpen')) {
                ParentID = '#popupContainer';
            } else if ($obj.hasClass('contactOpen')) {
                ParentID = '#contactViewPopUp';
            } else if ($('body').hasClass('job_feed')) {
                ParentID = '#jobPosting';
            }

            var $popObj = $(ParentID + ' .contactFormContainer');
            $popObj.find('.formField').removeClass('error');
            $popObj.find('.formField .field').val('');
            $popObj.find('.formField .fileFieldBtn').removeClass('attached');

            $obj.removeClass('menuOpen');
//            showMenu(false);
            if ($obj.hasClass('menuLight')) {
                elem.PanelScrollerObject_1.HAM_dark();
            } else {
                elem.PanelScrollerObject_1.HAM_light();
            }
            elem.PanelScrollerObject_1.HAM_burgerPosition();


            setTimeout(function () {
                _overlayObj.fadeOut("fast", function () {
                    // Animation complete.
                    _overlayObj.remove();
                });
            }, 1000);
        }


        var msg = '<strong>Thank you</strong>, your message has been sent.';
        if (getCurrentLang() == 2) {

            msg = '<strong>Merci</strong>, votre message a bien été envoyé.';
        }
        var $overlayObj = $('.fullOverlay');
        if ($overlayObj.length == 0) {
            var popHTMLstr = '';
            popHTMLstr += '<div class="fullOverlay">';


            popHTMLstr += '<div class="vhCenterBox">';
            popHTMLstr += '<div class="vhCell">';
            popHTMLstr += '<div class="XLARGE_TITLES">';
            popHTMLstr += msg;
            popHTMLstr += '</div>';
            popHTMLstr += '</div>';
            popHTMLstr += '</div>';


            popHTMLstr += '</div>';
            $('body').append(popHTMLstr);
            $overlayObj = $('.fullOverlay');
        } else {
            $overlayObj.find('.XLARGE_TITLES').html(msg);
        }

        $overlayObj.on('click', function () {
           killPops($overlayObj);
        });


        setTimeout(function () {
           killPops($overlayObj);

        }, 2000);



    },
    init: function () {
        if (Modernizr.touch) {
            $('textarea').addClass('touch');


        }


        this.startListeners();
        this.captcha = new captchaMath();
        this.captcha.init();
    }
}

var SplitStringAnimation = function () {
    this.selectorClass = '';
    this.strippedString = '';
    this.$obj;
    this.$wordList;
    this.currentIndex = 0;
    this.timerObj;
    return this;
};

SplitStringAnimation.prototype = {
    addCssClasses: function () {
        var elem = this;
        var styleSheet = elem.sheet();


        var cssClass = 'display:inline-block; opacity:0; position:absolute; top:0; left:0; transition:opacity 1s;';
        var activecssClass = 'opacity:1; transition:opacity 1s;';

        var strippedString = elem.selectorClass;
        strippedString = strippedString.replace(/ /g, "");
        strippedString = strippedString.replace(/\./g, "");
        strippedString = strippedString.replace(/\#/g, "");
        elem.strippedString = strippedString;

        elem.addCSSRule(styleSheet, 'span.stringAnimations_' + elem.strippedString, cssClass, 0);
        elem.addCSSRule(styleSheet, 'span.stringAnimations_' + elem.strippedString + '.active', activecssClass, 1);

    },
    sheet: function () {
        // Create the <style> tag
        var style = document.createElement("style");

        style.setAttribute("type", "text/css");

        //      
        // Add a media (and/or media query) here if you'd like!
        // style.setAttribute("media", "screen")
        // style.setAttribute("media", "only screen and (max-width : 1024px)")

        // WebKit hack :(
        style.appendChild(document.createTextNode(""));

        // Add the <style> element to the page
        document.head.appendChild(style);

        return style.sheet;
    },
    addCSSRule: function (sheet, selector, rules, index) {
        if ("insertRule" in sheet) {
            sheet.insertRule(selector + "{" + rules + "}", index);
        }
        else if ("addRule" in sheet) {
            sheet.addRule(selector, rules, index);
        }
    },
    explodeString: function () {
        var elem = this;
        var stringSource = this.$obj.data('source');
        var splitArray = stringSource.split(':');
        var total = splitArray.length;
        var htmlString = '';

        for (var i = 0; i < total; i++) {
            htmlString += '<span class="stringAnimations_' + elem.strippedString
                    + '" data-index="' + i + '">' + splitArray[i] + '</span>';
        }
        this.$obj.append(htmlString);
        this.$wordList = this.$obj.find('.stringAnimations_' + elem.strippedString);


    },
    listeners: function () {
        var elem = this;
        elem.updateIndex();

        elem.timerObj = setInterval(function updateWordList() {
            if (elem.currentIndex < elem.$wordList.length - 1) {
                elem.currentIndex++;
            } else {
                elem.currentIndex = 0;
            }
            elem.updateIndex();

        }, 3000);
    },
    updateIndex: function () {
        var elem = this;
        elem.$wordList.removeClass('active');
        elem.$wordList.eq(elem.currentIndex).addClass('active');

    },
    init: function (selectorClass) {
        this.selectorClass = selectorClass;
        this.addCssClasses();
        this.$obj = $(selectorClass);
        this.explodeString();
        this.listeners();


    }
};

var TeamAnimation = function () {
    this.currentIndex = 0;
    this.totalPages;
    this.$objs;
    this.$nextObj;
    this.$prevObj;
    this.DeskSelector;
    this.TabletSelector;
    this.MobileSelector;
    return this;
};

TeamAnimation.prototype = {
    update: function (view, isRetna) {
        var elem = this;
        switch (view) {
            case 1:

                elem.start(elem.DeskSelector);
                break;
            case 2:
                elem.start(elem.TabletSelector);
                break;
            case 3:
                elem.start(elem.MobileSelector);
                break;

        }
    },
    listeners: function () {
        var elem = this;
        elem.$nextObj.off();
        elem.$prevObj.off();
        $('#teamAnimation .panelTeam .teamItem').off();
        $('#teamAnimation .panelTeam .teamItem').on('click', function () {
            var $obj = $(this);
            if (!$obj.hasClass('selected')) {
                $obj.addClass('selected');
            } else {
                $obj.removeClass('selected');
            }

        });

        elem.$nextObj.on('click', function () {
            var $obj = $(this);
            if (!$obj.hasClass('hideMe')) {
                var oldObj = elem.$objs.eq(elem.currentIndex);
                elem.currentIndex++;
                elem.updateIndexNext(oldObj);
                elem.updateBtns();
            }

        });
        elem.$prevObj.on('click', function () {
            var $obj = $(this);
            if (!$obj.hasClass('hideMe')) {
                var oldObj = elem.$objs.eq(elem.currentIndex);
                elem.currentIndex--;
                elem.updateIndexPrev(oldObj);
                elem.updateBtns();
            }

        });


    },
    updateBtns: function () {
        var elem = this;

        if (elem.currentIndex >= elem.totalPages - 1) {
            elem.$nextObj.addClass('hideMe');
            elem.$prevObj.removeClass('hideMe');
        } else if (elem.currentIndex <= 0) {
            elem.$prevObj.addClass('hideMe');
            elem.$nextObj.removeClass('hideMe');
        } else {
            elem.$nextObj.removeClass('hideMe');
            elem.$prevObj.removeClass('hideMe');
        }
    },
    updateIndexNext: function (oldObj) {
        var elem = this;

        var newObj = elem.$objs.eq(elem.currentIndex);

        oldObj.addClass('left');
        oldObj.removeClass('active');

        newObj.addClass('active');
        newObj.removeClass('right');
        newObj.removeClass('left');

    },
    updateIndexPrev: function (oldObj) {
        var elem = this;
        var newObj = elem.$objs.eq(elem.currentIndex);

        oldObj.addClass('right');
        oldObj.removeClass('active');

        newObj.addClass('active');
        newObj.removeClass('right');
        newObj.removeClass('left');

    },
    resetPanels: function () {
        this.$objs.removeClass('active');
        this.$objs.removeClass('left');
        this.$objs.addClass('right');
        var newObj = this.$objs.eq(this.currentIndex);
        newObj.addClass('active');
        newObj.removeClass('right');
        newObj.removeClass('left');

    },
    start: function (selector) {

        this.$objs = $(selector);
        this.currentIndex = 0;
        this.resetPanels();
        this.updateBtns();
        this.totalPages = this.$objs.length;
        this.listeners();

    },
    init: function (DeskSelector, TabletSelector, MobileSelector) {
        this.DeskSelector = DeskSelector;
        this.TabletSelector = TabletSelector;
        this.MobileSelector = MobileSelector;


        this.$nextObj = $('#teamAnimation .teamNavigation .next');
        this.$prevObj = $('#teamAnimation .teamNavigation .prev');



    }
};

var VideoStart = function () {
    this.parentObj;
    this.playerObject;
    return this;
};

VideoStart.prototype = {
    update: function (view, isRetna) {
        var elem = this;
        switch (view) {
            case 1:
                var vid = $('#bgvid');
                if (vid.length == 0) {
                    elem.createVideoTags();
                }
                break;
            case 2:

                var vid = $('#bgvid');
                if (vid.length == 0) {
                    elem.createVideoTags();
                }
                break;
            case 3:
                elem.killVideo();


                break;

        }
    },
    killVideo: function () {
        this.parentObj.html('');
    },
    createVideoTags: function () {
        var elem = this;
        var videoTagStr = elem.handleVideoObject();
        this.playerObject = videoTagStr;
        this.parentObj.html(videoTagStr);

//        this.parentObj.off('click');
//        this.parentObj.on('click',function(){
//            videoTagStr.play();
//        });



    },
    play: function () {
        this.playerObject.play();
    },
    init: function (_parentObj) {
        this.parentObj = _parentObj;
        this.createVideoTags();
        //NOTE: video is created when UPDATE is called.
    },
    parseSrc: function (videoObj) {
        var attr;
        var elem = this;
        var mimeTypeArray = new Array();
        mimeTypeArray.push({attr: 'data-src-webm', mime: 'video/webm'});
        mimeTypeArray.push({attr: 'data-src-ogg', mime: 'video/ogg'});
        mimeTypeArray.push({attr: 'data-src-mp4', mime: 'video/mp4'});
        var srcString;
        var mimeType;

        for (var i = 0; i < 3; i++) {
            if (videoObj.canPlayType(mimeTypeArray[i].mime).length > 0) {
                var attr = this.parentObj.attr(mimeTypeArray[i].attr);
                if (typeof attr !== typeof undefined && attr !== false) {
                    srcString = attr;
                    mimeType = mimeTypeArray[i].mime;
                    i = 4;
                }

            }
        }
        return {src: srcString, type: mimeType};
    },
    handleVideoObject: function () {
        var elem = this;

        var tempVideoObj;
        tempVideoObj = document.createElement('video');
        tempVideoObj.src = elem.parseSrc(tempVideoObj).src;
        tempVideoObj.id = 'bgvid';
        tempVideoObj.autoplay = false;
        tempVideoObj.controls = false;
        tempVideoObj.preload = true;
        tempVideoObj.loop = true;
        tempVideoObj.muted = true;


        return tempVideoObj;
    }
};


function convertAllEmailModules() {
    $('.cryptedMail').each(function () {
        var $obj = $(this);
        var peice1 = $obj.data('p1'),
                peice2 = $obj.data('p2'),
                peice3 = $obj.data('p3');
        var htmlLink = createCrypLink(peice1, peice2, peice3);
        $obj.replaceWith(htmlLink);
    });


}

function createCrypLink(peice1, peice2, peice3) {
    return  '<a href=\'javascript:linkto("' + peice1 + '","' + peice2 + '","' + peice3 + '");\' class="emailLink">' + peice1 + '@' + peice2 + '.' + peice3 + '</a>';

}

function UnCryptMailto(peice1, peice2, peice3)
{
    var emailString = 'mailto:' + peice1 + '@' + peice2 + '.' + peice3;
    return emailString;
}
/*
 * example:  href="javascript:linkTo_UnCryptMailto('innag','stradigi','ca');"
 */
function linkto(peice1, peice2, peice3)
{
    location.href = UnCryptMailto(peice1, peice2, peice3);
}




function getInternetExplorerVersion() {

    var rv = -1; // Return value assumes failure.

    if (navigator.appName == 'Microsoft Internet Explorer') {

        var ua = navigator.userAgent;

        var re = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");

        if (re.exec(ua) != null)
            rv = parseFloat(RegExp.$1);

    }

    return rv;

}

function checkVersion() {

    var msg = 20;

    var ver = getInternetExplorerVersion();

    if (ver > -1) {

        if (ver == 9.0) {

            msg = 9;

        } else if (ver == 8.0) {

            msg = 8;
        } else if (ver == 7.0) {
            msg = 7;
        } else {
            msg = 6;
        }

    }

    //alert(msg);
    return msg;

}







