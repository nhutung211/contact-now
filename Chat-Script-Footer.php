//Chat Script Footer
function chat_script_footer(){ 
    global $wp;
    $current_url = home_url(add_query_arg(array(), $wp->request));
	$current_title = wp_title('', false);
?><style>
        .arcontactus-widget.right.arcontactus-message{right:20px}
        .arcontactus-widget.right.arcontactus-message{bottom:20px}
        .arcontactus-widget .arcontactus-message-button
        .pulsation{-webkit-animation-duration:2s;animation-duration:2s}
        .arcontactus-widget.md .arcontactus-message-button,.arcontactus-widget.md.arcontactus-message{width:60px;height:60px}
        .arcontactus-widget{opacity:0;transition:.2s opacity}
        .arcontactus-widget *{box-sizing:border-box}
        .arcontactus-widget.left.arcontactus-message{left:20px;right:auto}
        .arcontactus-widget.left .arcontactus-message-button{right:auto;left:0}
        .arcontactus-widget.left .arcontactus-prompt{left:80px;right:auto;transform-origin:0 50%}
        .arcontactus-widget.left .arcontactus-prompt:before{border-right:8px solid #FFF;border-top:8px solid transparent;border-left:8px solid transparent;border-bottom:8px solid transparent;right:auto;left:-15px}
        .arcontactus-widget.left .messangers-block{right:auto;left:0;-webkit-transform-origin:10% 105%;-ms-transform-origin:10% 105%;transform-origin:10% 105%}
        .arcontactus-widget.left .callback-countdown-block{left:0;right:auto}
        .arcontactus-widget.left .callback-countdown-block::before,.arcontactus-widget.left .messangers-block::before{left:25px;right:auto}
        .arcontactus-widget.md .callback-countdown-block,.arcontactus-widget.md .messangers-block{bottom:70px}
        .arcontactus-widget.md .arcontactus-prompt{bottom:5px}
        .arcontactus-widget.md.left .callback-countdown-block:before,.arcontactus-widget.md.left .messangers-block:before{left:21px}
        .arcontactus-widget.md.left .arcontactus-prompt{left:70px}
        .arcontactus-widget.md.right .callback-countdown-block:before,.arcontactus-widget.md.right .messangers-block:before{right:21px}
        .arcontactus-widget.md.right .arcontactus-prompt{right:70px}
        .arcontactus-widget.md .arcontactus-message-button .pulsation{width:74px;height:74px}
        .arcontactus-widget.md .arcontactus-message-button .callback-state,.arcontactus-widget.md .arcontactus-message-button .icons{width:40px;height:40px;margin-top:-20px;margin-left:-20px}
        .arcontactus-widget.sm .arcontactus-message-button,.arcontactus-widget.sm.arcontactus-message{width:50px;height:50px}
        .arcontactus-widget.sm .callback-countdown-block,.arcontactus-widget.sm .messangers-block{bottom:60px}
        .arcontactus-widget.sm .arcontactus-prompt{bottom:0}
        .arcontactus-widget.sm.left .callback-countdown-block:before,.arcontactus-widget.sm.left .messangers-block:before{left:16px}
        .arcontactus-widget.sm.left .arcontactus-prompt{left:60px}
        .arcontactus-widget.sm.right .callback-countdown-block:before,.arcontactus-widget.sm.right .messangers-block:before{right:16px}
        .arcontactus-widget.sm.right .arcontactus-prompt{right:60px}
        .arcontactus-widget.sm .arcontactus-message-button .pulsation{width:64px;height:64px}
        .arcontactus-widget.sm .arcontactus-message-button .icons{width:40px;height:40px;margin-top:-20px;margin-left:-20px}
        .arcontactus-widget.sm .arcontactus-message-button .static{margin-top:-16px}
        .arcontactus-widget.sm .arcontactus-message-button .callback-state{width:40px;height:40px;margin-top:-20px;margin-left:-20px}
        .arcontactus-widget.active{opacity:1}
        .arcontactus-widget .icons.hide,.arcontactus-widget .static.hide{opacity:0;transform:scale(0)}
        .arcontactus-widget.arcontactus-message{z-index:10000;right:20px;bottom:20px;position:fixed!important;height:70px;width:70px}
        .arcontactus-widget .arcontactus-message-button{width:70px;position:absolute;height:70px;right:0;background-color:red;border-radius:50px;-webkit-box-sizing:border-box;box-sizing:border-box;text-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;cursor:pointer}
        .arcontactus-widget .arcontactus-message-button p{font-family:Ubuntu,Arial,sans-serif;color:#fff;font-weight:700;font-size:10px;line-height:11px;margin:0}
        .arcontactus-widget .arcontactus-message-button .pulsation{width:84px;height:84px;background-color:red;border-radius:50px;position:absolute;left:-7px;top:-7px;z-index:-1;-webkit-transform:scale(0);-ms-transform:scale(0);transform:scale(0);-webkit-animation:arcontactus-pulse 2s infinite;animation:arcontactus-pulse 2s infinite}
        .arcontactus-widget .arcontactus-message-button .icons{background-color:#fff;width:44px;height:44px;border-radius:50px;position:absolute;overflow:hidden;top:50%;left:50%;margin-top:-22px;margin-left:-22px}
        .arcontactus-widget .arcontactus-message-button .static{position:absolute;top:50%;left:50%;margin-top:-19px;margin-left:-26px;width:52px;height:52px;text-align:center}
        .arcontactus-widget .arcontactus-message-button .static img{display:inline}
        .arcontactus-widget .arcontactus-message-button .static svg{width:24px;height:24px;color:#FFF}
        .arcontactus-widget .arcontactus-message-button.no-text .static{margin-top:-12px}
        .arcontactus-widget .pulsation:nth-of-type(2n){-webkit-animation-delay:.5s;animation-delay:.5s}
        .arcontactus-widget .pulsation.stop{-webkit-animation:none;animation:none}
        .arcontactus-widget .icons-line{top:10px;left:12px;display:-webkit-box;display:-ms-flexbox;display:flex;position:absolute;-webkit-transition:cubic-bezier(.13,1.49,.14,-.4);-o-transition:cubic-bezier(.13,1.49,.14,-.4);-webkit-animation-delay:0s;animation-delay:0s;-webkit-transform:translateX(30px);-ms-transform:translateX(30px);transform:translateX(30px);height:24px;transition:.2s all}
        .arcontactus-widget .icons,.arcontactus-widget .static{transition:.2s all}
        .arcontactus-widget .icons-line.stop{-webkit-animation-play-state:paused;animation-play-state:paused}
        .arcontactus-widget .icons-line span{display:inline-block;width:24px;height:24px;color:red}
        .arcontactus-widget .icons-line span i,.arcontactus-widget .icons-line span svg{width:24px;height:24px}
        .arcontactus-widget .icons-line span i{display:block;font-size:24px;line-height:24px}
        .arcontactus-widget .icons-line img,.arcontactus-widget .icons-line span{margin-right:40px}
        .arcontactus-widget .icons.hide .icons-line{transform:scale(0)}
        .arcontactus-widget .icons .icon:first-of-type{margin-left:0}
        .arcontactus-widget .arcontactus-close{color:#FFF}
        .arcontactus-widget .arcontactus-close svg{-webkit-transform:rotate(180deg) scale(0);-ms-transform:rotate(180deg) scale(0);transform:rotate(180deg) scale(0);-webkit-transition:ease-in .12s all;-o-transition:ease-in .12s all;transition:ease-in .12s all;display:block}
        .arcontactus-widget .arcontactus-close.show-messageners-block svg{-webkit-transform:rotate(0) scale(1);-ms-transform:rotate(0) scale(1);transform:rotate(0) scale(1)}
        .arcontactus-widget .arcontactus-prompt,.arcontactus-widget .messangers-block{background:center no-repeat #FFF;box-shadow:0 0 10px rgba(0,0,0,.6);width:235px;position:absolute;bottom:80px;right:0;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start;padding:14px 0;-webkit-box-sizing:border-box;box-sizing:border-box;border-radius:7px;-webkit-transform-origin:80% 105%;-ms-transform-origin:80% 105%;transform-origin:80% 105%;-webkit-transform:scale(0);-ms-transform:scale(0);transform:scale(0);-webkit-transition:ease-out .12s all;-o-transition:ease-out .12s all;transition:ease-out .12s all;z-index:10000}
        .arcontactus-widget .arcontactus-prompt:before,.arcontactus-widget .messangers-block:before{position:absolute;bottom:-7px;right:25px;left:auto;display:inline-block!important;border-right:8px solid transparent;border-top:8px solid #FFF;border-left:8px solid transparent;content:''}
        .arcontactus-widget .arcontactus-prompt.show-messageners-block,.arcontactus-widget .messangers-block.show-messageners-block{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}
        .arcontactus-widget .arcontactus-prompt{color:#787878;font-family:Arial,sans-serif;font-size:16px;line-height:18px;width:auto;bottom:10px;right:80px;white-space:nowrap;padding:18px 20px 14px}
        .arcontactus-widget .arcontactus-prompt:before{border-right:8px solid transparent;border-top:8px solid transparent;border-left:8px solid #FFF;border-bottom:8px solid transparent;bottom:16px;right:-15px}
        .arcontactus-widget .arcontactus-prompt.active{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}
        .arcontactus-widget .arcontactus-prompt .arcontactus-prompt-close{position:absolute;right:6px;top:6px;cursor:pointer;z-index:100;height:14px;width:14px;padding:2px}
        .arcontactus-widget .arcontactus-prompt .arcontactus-prompt-close svg{height:10px;width:10px;display:block}
        .arcontactus-widget .arcontactus-prompt .arcontactus-prompt-typing{border-radius:10px;display:inline-block;left:3px;padding:0;position:relative;top:4px;width:50px}
        .arcontactus-widget .arcontactus-prompt .arcontactus-prompt-typing>div{position:relative;float:left;border-radius:50%;width:10px;height:10px;background:#ccc;margin:0 2px;-webkit-animation:arcontactus-updown 2s infinite;animation:arcontactus-updown 2s infinite}
        .arcontactus-widget .arcontactus-prompt .arcontactus-prompt-typing>div:nth-child(2){animation-delay:.1s}
        .arcontactus-widget .arcontactus-prompt .arcontactus-prompt-typing>div:nth-child(3){animation-delay:.2s}
        .arcontactus-widget .messangers-block.sm .messanger{padding-left:50px;min-height:44px}
        .arcontactus-widget .messangers-block.sm .messanger span{height:32px;width:32px;margin-top:-16px}
        .arcontactus-widget .messangers-block.sm .messanger span svg{height:20px;width:20px;margin-top:-10px;margin-left:-10px}
        .arcontactus-widget .messanger{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin:0;cursor:pointer;width:100%;padding:8px 20px 8px 60px;position:relative;min-height:54px;text-decoration:none}
        .arcontactus-widget .messanger:hover{background-color:#EEE}
        .arcontactus-widget .messanger:before{background-repeat:no-repeat;background-position:center}
        .arcontactus-widget .messanger.facebook span{background:#0084ff}
        .arcontactus-widget .messanger.viber span{background:#7c529d}
        .arcontactus-widget .messanger.telegram span{background:#2ca5e0}
        .arcontactus-widget .messanger.skype span{background:#31c4ed}
        .arcontactus-widget .messanger.email span{background:#ff8400}
        .arcontactus-widget .messanger.contact span{background:#7eb105}
        .arcontactus-widget .messanger.call-back span{background:#54cd81}
        .arcontactus-widget .messanger span{position:absolute;left:10px;top:50%;margin-top:-20px;display:block;width:40px;height:40px;border-radius:50%;background-color:#0084ff;margin-right:10px;color:#FFF;text-align:center;vertical-align:middle}
        .arcontactus-widget .messanger span i,.arcontactus-widget .messanger span svg{width:24px;height:24px;vertical-align:middle;text-align:center;display:block;position:absolute;top:50%;left:50%;margin-top:-12px;margin-left:-12px}
        .arcontactus-widget .messanger span i{font-size:24px;line-height:24px}
        .arcontactus-widget .messanger p{margin:0;font-family:Arial,sans-serif;font-size:14px;color:rgba(0,0,0,.87)}
        @-webkit-keyframes arcontactus-pulse{0%{-webkit-transform:scale(0);transform:scale(0);opacity:1}50%{opacity:.5}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}
        @media (max-width:468px){.arcontactus-widget.opened.arcontactus-message,.arcontactus-widget.opened.left.arcontactus-message{width:auto;right:20px;left:20px}}
        @keyframes arcontactus-updown{0%,100%,43%{transform:translate(0,0)}25%,35%{transform:translate(0,-10px)}}
        @-webkit-keyframes arcontactus-updown{0%,100%,43%{transform:translate(0 0)}25%,35%{transform:translate(-10px 0)}}
        @keyframes arcontactus-pulse{0%{-webkit-transform:scale(0);transform:scale(0);opacity:1}50%{opacity:.5}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}
        @-webkit-keyframes arcontactus-show-stat{0%,100%,20%,85%{-webkit-transform:scale(1);transform:scale(1)}21%,84%{-webkit-transform:scale(0);transform:scale(0)}}
        @keyframes arcontactus-show-stat{0%,100%,20%,85%{-webkit-transform:scale(1);transform:scale(1)}21%,84%{-webkit-transform:scale(0);transform:scale(0)}}
        @-webkit-keyframes arcontactus-show-icons{0%,100%,20%,85%{-webkit-transform:scale(0);transform:scale(0)}21%,84%{-webkit-transform:scale(1);transform:scale(1)}}
        @keyframes arcontactus-show-icons{0%,100%,20%,85%{-webkit-transform:scale(0);transform:scale(0)}21%,84%{-webkit-transform:scale(1);transform:scale(1)}}
        </style>

        <div id='arcontactus'></div>

        <script>//<![CDATA[

        function arCuGetCookie(t){return document.cookie.length>0&&(c_start=document.cookie.indexOf(t+"="),-1!=c_start)?(c_start=c_start+t.length+1,c_end=document.cookie.indexOf(";",c_start),-1==c_end&&(c_end=document.cookie.length),unescape(document.cookie.substring(c_start,c_end))):0}function arCuCreateCookie(t,e,s){var n;if(s){var i=new Date;i.setTime(i.getTime()+24*s*60*60*1e3),n="; expires="+i.toGMTString()}else n="";document.cookie=t+"="+e+n+"; path=/"}function arCuShowMessage(t){if(arCuPromptClosed)return!1;void 0!==arCuMessages[t]?(jQuery("#arcontactus").contactUs("showPromptTyping"),_arCuTimeOut=setTimeout(function(){if(arCuPromptClosed)return!1;jQuery("#arcontactus").contactUs("showPrompt",{content:arCuMessages[t]}),t++,_arCuTimeOut=setTimeout(function(){if(arCuPromptClosed)return!1;arCuShowMessage(t)},arCuMessageTime)},arCuTypingTime)):(arCuCloseLastMessage&&jQuery("#arcontactus").contactUs("hidePrompt"),arCuLoop&&arCuShowMessage(0))}function arCuShowMessages(){setTimeout(function(){clearTimeout(_arCuTimeOut),arCuShowMessage(0)},arCuDelayFirst)}!function(t){function e(s,n){this._initialized=!1,this.settings=null,this.options=t.extend({},e.Defaults,n),this.$element=t(s),this.init(),this.x=0,this.y=0,this._interval,this._menuOpened=!1,this._callbackOpened=!1,this.countdown=null}e.Defaults={align:"right",countdown:0,drag:!1,buttonText:"Liên hệ",buttonSize:"large",menuSize:"normal",items:[],iconsAnimationSpeed:1200,theme:"#f35704",buttonIcon:'<svg width="20" height="20" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Canvas" transform="translate(-825 -308)"><g id="Vector"><use xlink:href="#path0_fill0123" transform="translate(825 308)" fill="#FFFFFF"/></g></g><defs><path id="path0_fill0123" d="M 19 4L 17 4L 17 13L 4 13L 4 15C 4 15.55 4.45 16 5 16L 16 16L 20 20L 20 5C 20 4.45 19.55 4 19 4ZM 15 10L 15 1C 15 0.45 14.55 0 14 0L 1 0C 0.45 0 0 0.45 0 1L 0 15L 4 11L 14 11C 14.55 11 15 10.55 15 10Z"/></defs></svg>',closeIcon:'<svg width="12" height="13" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Canvas" transform="translate(-4087 108)"><g id="Vector"><use xlink:href="#path0_fill" transform="translate(4087 -108)" fill="currentColor"></use></g></g><defs><path id="path0_fill" d="M 14 1.41L 12.59 0L 7 5.59L 1.41 0L 0 1.41L 5.59 7L 0 12.59L 1.41 14L 7 8.41L 12.59 14L 14 12.59L 8.41 7L 14 1.41Z"></path></defs></svg>'},e.prototype.init=function(){this.destroy(),this.settings=t.extend({},this.options),this.$element.addClass("arcontactus-widget").addClass("arcontactus-message"),"left"===this.settings.align?this.$element.addClass("left"):this.$element.addClass("right"),this.settings.items.length?(this._initCallbackBlock(),this._initMessengersBlock(),this._initMessageButton(),this._initPrompt(),this._initEvents(),this.startAnimation(),this.$element.addClass("active")):console.info("jquery.contactus:no items"),this._initialized=!0,this.$element.trigger("arcontactus.init")},e.prototype.destroy=function(){if(!this._initialized)return!1;this.$element.html(""),this._initialized=!1,this.$element.trigger("arcontactus.destroy")},e.prototype._initCallbackBlock=function(){},e.prototype._initMessengersBlock=function(){var e=t("<div>",{class:"messangers-block"});"normal"!==this.settings.menuSize&&"large"!==this.settings.menuSize||e.addClass("lg"),"small"===this.settings.menuSize&&e.addClass("sm"),this._appendMessengerIcons(e),this.$element.append(e)},e.prototype._appendMessengerIcons=function(e){t.each(this.settings.items,function(s){if("callback"==this.href)var n=t("<div>",{class:"messanger call-back "+(this.class?this.class:"")});else if(n=t("<a>",{class:"messanger "+(this.class?this.class:""),id:this.id?this.id:null,href:this.href,target:this.target?this.target:"_blank"}),this.onClick){var i=this;n.on("click",function(t){i.onClick(t)})}var a=t("<span>",{style:this.color?"background-color:"+this.color:null});a.append(this.icon),n.append(a),n.append("<p>"+this.title+"</p>"),e.append(n)})},e.prototype._initMessageButton=function(){var e=this,s=t("<div>",{class:"arcontactus-message-button",style:this._backgroundStyle()});"large"===this.settings.buttonSize&&this.$element.addClass("lg"),"medium"===this.settings.buttonSize&&this.$element.addClass("md"),"small"===this.settings.buttonSize&&this.$element.addClass("sm");var n=t("<div>",{class:"static"});n.append(this.settings.buttonIcon),!1!==this.settings.buttonText?n.append("<p>"+this.settings.buttonText+"</p>"):s.addClass("no-text");var i=t("<div>",{class:"callback-state",style:e._colorStyle()});i.append(this.settings.callbackStateIcon);var a=t("<div>",{class:"icons hide"}),o=t("<div>",{class:"icons-line"});t.each(this.settings.items,function(s){var n=t("<span>",{style:e._colorStyle()});n.append(this.icon),o.append(n)}),a.append(o);var r=t("<div>",{class:"arcontactus-close"});r.append(this.settings.closeIcon);var c=t("<div>",{class:"pulsation",style:e._backgroundStyle()}),l=t("<div>",{class:"pulsation",style:e._backgroundStyle()});s.append(n).append(i).append(a).append(r).append(c).append(l),this.$element.append(s)},e.prototype._initPrompt=function(){var e=t("<div>",{class:"arcontactus-prompt"}),s=t("<div>",{class:"arcontactus-prompt-close",style:this._colorStyle()});s.append(this.settings.closeIcon);var n=t("<div>",{class:"arcontactus-prompt-inner"});e.append(s).append(n),this.$element.append(e)},e.prototype._initEvents=function(){var e=this.$element,s=this;e.find(".arcontactus-message-button").on("mousedown",function(t){s.x=t.pageX,s.y=t.pageY}).on("mouseup",function(t){t.pageX===s.x&&t.pageY===s.y&&(s.toggleMenu(),t.preventDefault())}),this.settings.drag&&(e.draggable(),e.get(0).addEventListener("touchmove",function(t){var s=t.targetTouches[0];e.get(0).style.left=s.pageX-25+"px",e.get(0).style.top=s.pageY-25+"px",t.preventDefault()},!1)),t(document).on("click",function(t){s.closeMenu()}),e.on("click",function(t){t.stopPropagation()}),e.find(".call-back").on("click",function(){s.openCallbackPopup()}),e.find(".callback-countdown-block-close").on("click",function(){null!=s.countdown&&(clearInterval(s.countdown),s.countdown=null),s.closeCallbackPopup()}),e.find(".arcontactus-prompt-close").on("click",function(){s.hidePrompt()})},e.prototype.show=function(){this.$element.addClass("active"),this.$element.trigger("arcontactus.show")},e.prototype.hide=function(){this.$element.removeClass("active"),this.$element.trigger("arcontactus.hide")},e.prototype.openMenu=function(){var t=this.$element;t.find(".messangers-block").hasClass("show-messageners-block")||(this.stopAnimation(),t.find(".messangers-block, .arcontactus-close").addClass("show-messageners-block"),t.find(".icons, .static").addClass("hide"),t.find(".pulsation").addClass("stop"),this._menuOpened=!0,this.$element.trigger("arcontactus.openMenu"))},e.prototype.closeMenu=function(){var t=this.$element;t.find(".messangers-block").hasClass("show-messageners-block")&&(t.find(".messangers-block, .arcontactus-close").removeClass("show-messageners-block"),t.find(".icons, .static").removeClass("hide"),t.find(".pulsation").removeClass("stop"),this.startAnimation(),this._menuOpened=!1,this.$element.trigger("arcontactus.closeMenu"))},e.prototype.toggleMenu=function(){var t=this.$element;if(this.hidePrompt(),t.find(".callback-countdown-block").hasClass("display-flex"))return!1;t.find(".messangers-block").hasClass("show-messageners-block")?this.closeMenu():this.openMenu(),this.$element.trigger("arcontactus.toggleMenu")},e.prototype.openCallbackPopup=function(){var t=this.$element;t.addClass("opened"),this.closeMenu(),this.stopAnimation(),t.find(".icons, .static").addClass("hide"),t.find(".pulsation").addClass("stop"),t.find(".callback-countdown-block").addClass("display-flex"),this._callbackOpened=!0,this.$element.trigger("arcontactus.openCallbackPopup")},e.prototype.closeCallbackPopup=function(){var t=this.$element;t.removeClass("opened"),t.find(".messangers-block").removeClass("show-messageners-block"),t.find(".arcontactus-close").removeClass("show-messageners-block"),t.find(".icons, .static").removeClass("hide"),this.startAnimation(),this._callbackOpened=!1,this.$element.trigger("arcontactus.closeCallbackPopup")},e.prototype.startAnimation=function(){var t=this.$element,e=t.find(".icons-line"),s=t.find(".static"),n=t.find(".icons-line>span:first-child").width()+40;if("large"===this.settings.buttonSize)var i=2,a=0;"medium"===this.settings.buttonSize&&(i=4,a=-2),"small"===this.settings.buttonSize&&(i=4,a=-2);var o=t.find(".icons-line>span").length,r=0;if(this.stopAnimation(),0===this.settings.iconsAnimationSpeed)return!1;this._interval=setInterval(function(){0===r&&(e.parent().removeClass("hide"),s.addClass("hide"));var t="translate("+-(n*r+i)+"px, "+a+"px)";e.css({"-webkit-transform":t,"-ms-transform":t,transform:t}),++r>o&&(r>o+1&&(r=0),e.parent().addClass("hide"),s.removeClass("hide"),t="translate("+-i+"px, "+a+"px)",e.css({"-webkit-transform":t,"-ms-transform":t,transform:t}))},this.settings.iconsAnimationSpeed)},e.prototype.stopAnimation=function(){clearInterval(this._interval);var t=this.$element,e=t.find(".icons-line"),s=t.find(".static");e.parent().addClass("hide"),s.removeClass("hide");var n="translate(-2px, 0px)";e.css({"-webkit-transform":n,"-ms-transform":n,transform:n})},e.prototype.showPrompt=function(t){var e=this.$element.find(".arcontactus-prompt");t&&t.content&&e.find(".arcontactus-prompt-inner").html(t.content),e.addClass("active"),this.$element.trigger("arcontactus.showPrompt")},e.prototype.hidePrompt=function(){this.$element.find(".arcontactus-prompt").removeClass("active"),this.$element.trigger("arcontactus.hidePrompt")},e.prototype.showPromptTyping=function(){this.$element.find(".arcontactus-prompt").find(".arcontactus-prompt-inner").html(""),this._insertPromptTyping(),this.showPrompt({}),this.$element.trigger("arcontactus.showPromptTyping")},e.prototype._insertPromptTyping=function(){var e=this.$element.find(".arcontactus-prompt-inner"),s=t("<div>",{class:"arcontactus-prompt-typing"}),n=t("<div>");s.append(n),s.append(n.clone()),s.append(n.clone()),e.append(s)},e.prototype.hidePromptTyping=function(){this.$element.find(".arcontactus-prompt").removeClass("active"),this.$element.trigger("arcontactus.hidePromptTyping")},e.prototype._backgroundStyle=function(){return"background-color: "+this.settings.theme},e.prototype._colorStyle=function(){return"color: "+this.settings.theme},t.fn.contactUs=function(s){var n=Array.prototype.slice.call(arguments,1);return this.each(function(){var i=t(this),a=i.data("ar.contactus");a||(a=new e(this,"object"==typeof s&&s),i.data("ar.contactus",a)),"string"==typeof s&&"_"!==s.charAt(0)&&a[s].apply(a,n)})},t.fn.contactUs.Constructor=e}(jQuery);
        //]]></script>


        <script>//<![CDATA[
        var arCuMessages = ["Dr.HEDISON xin chào bạn!"];
        var arCuLoop = false;
        var arCuCloseLastMessage = false;
        var arCuPromptClosed = false;
        var _arCuTimeOut = null;
        var arCuDelayFirst = 2000;
        var arCuTypingTime = 2000;
        var arCuMessageTime = 4000;
        var arCuClosedCookie = 0;
        var arcItems = [];
        window.addEventListener('load', function() {
        arCuClosedCookie = arCuGetCookie('arcu-closed');
        jQuery('#arcontactus').on('arcontactus.init', function() {
        if (arCuClosedCookie) {
        return false;
        }
        arCuShowMessages();
        });
        jQuery('#arcontactus').on('arcontactus.openMenu', function() {
        clearTimeout(_arCuTimeOut);
        arCuPromptClosed = true;
        jQuery('#contact').contactUs('hidePrompt');
        arCuCreateCookie('arcu-closed', 1, 30);
        });
        jQuery('#arcontactus').on('arcontactus.hidePrompt', function() {
        clearTimeout(_arCuTimeOut);
        arCuPromptClosed = true;
        arCuCreateCookie('arcu-closed', 1, 30);
        });

        var arcItem = {};
        arcItem.id = 'msg-item-2';
        arcItem.class = 'msg-item-zalo';
        arcItem.title = 'Zalo';
        arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 27"><path fill="currentColor" d="M27,20.25v3.19c0,1.96-1.6,3.56-3.56,3.56H3.56c-1.96,0-3.56-1.6-3.56-3.56V3.56C0,1.6,1.6,0,3.56,0h3.42c-.21,.14-.42,.27-.61,.42-.22,.15-.44,.32-.64,.5-.13,.11-.25,.22-.37,.34-.15,.15-.3,.3-.44,.46-.29,.31-.55,.65-.8,1-.13,.18-.25,.36-.36,.55-.17,.28-.33,.56-.48,.86h0c-.15,.31-.29,.61-.41,.92-1.28,3.13-1.5,6.99-.66,10.38,.1,.38,.21,.76,.33,1.12h0c.13,.38,.27,.74,.41,1.09,.38,.88,.84,1.7,1.39,2.43v.02c.59,.87,.02,2.38-.86,3.26-.15,.14-.09,.22,.12,.24,1.26,.14,2.83-.22,3.95-.76,5.44,3.01,14.33,2.48,18.56-1.59,.32-.31,.61-.64,.89-.99ZM10.33,10.16l.02-.02c.2-.29,.24-.53,.24-.83v-.16H5.24v1.12h3.71l-3.67,4.46c-.11,.16-.2,.31-.2,.66v.28h5.05c.26,0,.46-.2,.46-.45v-.6h-3.89l3.44-4.23c.05-.07,.15-.18,.19-.23Zm5.77,.58v4.93h-.61c-.26,0-.46-.2-.46-.45v-.02c-.43,.31-.96,.49-1.53,.49-1.44,0-2.6-1.14-2.6-2.55s1.16-2.55,2.6-2.55c.57,0,1.1,.19,1.53,.49v-.34h1.07Zm-1.07,2.39c-.01-.82-.69-1.49-1.53-1.49s-1.53,.67-1.53,1.5,.68,1.5,1.53,1.5,1.52-.66,1.53-1.49v-.02Zm1.99-4.06v6.23c0,.21,.17,.37,.38,.37h.76v-6.6h-1.14Zm7.17,4.07c0,1.43-1.18,2.58-2.63,2.58s-2.63-1.15-2.63-2.58,1.17-2.58,2.63-2.58,2.63,1.16,2.63,2.58Zm-1.08,0c0-.83-.7-1.51-1.55-1.51s-1.55,.68-1.55,1.51,.69,1.52,1.55,1.52,1.55-.68,1.55-1.52Z"></path></svg>';
        arcItem.href = 'https://zalo.me/0835838538';
        arcItem.color = '#2EA8FF';
        arcItems.push(arcItem);

        var arcItem = {};
        arcItem.id = 'msg-item-6';
        arcItem.class = 'msg-item-sms';
        arcItem.title = 'Whatsapp';
        arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M478.165 232.946c0 128.567-105.057 232.966-234.679 232.966-41.102 0-79.814-10.599-113.445-28.969L0 478.165l42.437-125.04c-21.438-35.065-33.77-76.207-33.77-120.159C8.667 104.34 113.763 0 243.485 0c129.623 0 234.68 104.34 234.68 232.946zM243.485 37.098c-108.802 0-197.422 87.803-197.422 195.868 0 42.915 13.986 82.603 37.576 114.879l-24.586 72.542 75.849-23.968c31.121 20.481 68.457 32.296 108.583 32.296 108.723 0 197.323-87.843 197.323-195.908 0-107.886-88.6-195.709-197.323-195.709zM361.931 286.62c-1.395-2.331-5.22-3.746-10.898-6.814-5.917-2.849-34.089-16.497-39.508-18.37-5.16-1.913-8.986-2.849-12.811 2.829-4.005 5.638-14.903 18.629-18.23 22.354-3.546 3.785-6.854 4.264-12.552 1.435-5.618-2.809-24.267-8.866-46.203-28.391-17.055-15.042-28.67-33.711-31.997-39.508-3.427-5.758-.398-8.826 2.471-11.635 2.69-2.59 5.778-6.734 8.627-10.041 2.969-3.287 3.905-5.638 5.798-9.424 1.913-3.905.936-7.192-.478-10.141-1.415-2.849-13.01-30.881-17.752-42.337-4.841-11.416-9.543-9.523-12.871-9.523-3.467 0-7.212-.478-11.117-.478-3.785 0-10.041 1.395-15.381 7.192-5.2 5.658-20.123 19.465-20.123 47.597 0 28.052 20.601 55.308 23.55 59.053 2.869 3.785 39.747 63.197 98.303 86.07 58.476 22.872 58.476 15.321 69.115 14.365 10.38-.956 34.069-13.867 38.811-27.096 4.66-13.45 4.66-24.766 3.246-27.137z"></path></svg>';
        arcItem.href = 'https://api.whatsapp.com/send?phone=84935292298&text=Hello+Mr.Thomas,+I+have+visit++myphamsomot+and+I+need+help+from+you.+Here+is+link+<?php echo $current_url; ?>';
        arcItem.color = '#2db742';
        arcItems.push(arcItem);

        var arcItem = {};
        arcItem.id = 'msg-item-8';
        arcItem.class = 'msg-item-phone';
        arcItem.title = 'Kinh doanh 0935.292.298';
        arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';
        arcItem.href = 'tel:+84935292298';
        arcItem.color = '#dd3333';
        arcItems.push(arcItem);

        var arcItem = {};
        arcItem.id = 'msg-item-8';
        arcItem.class = 'msg-item-phone';
        arcItem.title = 'Hotline 0835.838.538';
        arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';
        arcItem.href = 'tel:0835838538';
        arcItem.color = '#dd3333';
        arcItems.push(arcItem);

		var arcItem = {};
        arcItem.id = 'msg-item-1';
        arcItem.class = 'msg-item-facebook-messenger';
        arcItem.title = 'Nhắn tin Messenger';
        arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 32C15.9 32-77.5 278 84.6 400.6V480l75.7-42c142.2 39.8 285.4-59.9 285.4-198.7C445.8 124.8 346.5 32 224 32zm23.4 278.1L190 250.5 79.6 311.6l121.1-128.5 57.4 59.6 110.4-61.1-121.1 128.5z"></path></svg>';
        arcItem.href = 'http://m.me/drhedison.beauty?text=Hi+Dr.HEDISON,+Tôi+đã+xem+trang+<?php echo $current_title; ?>+và+cần+tư+vấn.+Đây+là+link+<?php echo $current_url; ?>';
        arcItem.color = '#567AFF';
        arcItems.push(arcItem);

        jQuery('#arcontactus').contactUs({
        items: arcItems
        });
        });
        //]]></script>
<?php } 
add_action('wp_footer', 'chat_script_footer'); ?>
