(function(a){a.fn.imageZoomNew=function(b){return this.each(function(){var i=a(this);i.attr("title","");var l={cssClass:"",width:400};var u=a.extend({},l,b);var t=0,v=0;var f=false;var k;var g=a(document.createElement("div")).addClass("ui-zoom-area").addClass(u.cssClass).css({width:u.width}).appendTo("body");var p=a(u.alignWith);var c=p.height();if(typeof u.height!="undefined"){c=parseInt(u.height)}var w=g.width();var n;var e={width:0,height:0};var r=i.parent();var q="";var j=false;var d=a(u.zoomMsgClass);var s=function(x){setTimeout(function(){if(f){var y={x:x.pageX-n.left+11,y:x.pageY-n.top+11};var A=-((y.x/k.width)*e.width)+w/2;var z=-((y.y/k.height)*e.height)+c/2;if(e.height>c){if(z>0){z=0}else{if(z<t){z=t}}}if(e.width>w){if(A>0){A=0}else{if(A<v){A=v}}}g.get(0).style.backgroundPosition=A+"px "+z+"px"}},10)};var m=function(){i.unbind();g.remove()};var h=function(){g.fadeOut("medium");typeof(d)!="undefined"&&q!=""&&d.show();r.removeClass("zoom-cursor zoom-progress");i.trigger({type:"onImageZoom",isOn:false});f=false};i.delayedHover(function(y){f=false;j=true;n=i.offset();q=i.attr("data-zoom-src");if(q==""){return}c=p.height();g.css({height:c-2,top:p.offset().top,left:p.offset().left+p.width()});k={width:i.width(),height:i.height()};r.addClass("zoom-progress").removeClass("zoom-cursor");var x=new Image();x.src=q;x.onload=function(){e.width=this.width;e.height=this.height;t=-e.height+c;v=-e.width+w;g.css({"background-image":'url("'+q+'")',"background-repeat":"no-repeat"});s(y);if(j){g.fadeIn("fast");r.removeClass("zoom-progress").addClass("zoom-cursor");d.hide()}i.trigger({type:"onImageZoom",isOn:true});f=true}},function(){j=false;h()}).bind("mousemove",s);var o={destroy:m};i.data("zoom_instance",o)})}})(jQuery);