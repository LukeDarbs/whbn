!function($,t,n){$.fn.responsiveSlides=function(e){var a=$.extend({auto:!0,speed:1e3,timeout:6e3,pager:!1,nav:!1,random:!1,pause:!1,pauseControls:!0,prevText:"Previous",nextText:"Next",maxwidth:"",navContainer:"",manualControls:"",namespace:"rslides",before:$.noop,after:$.noop},e);return this.each(function(){n++;var s=$(this),o,i,r,l,u,c,f=0,d=s.children(),p=d.size(),v=parseFloat(a.speed),h=parseFloat(a.timeout),m=parseFloat(a.maxwidth),C=a.namespace,x=C+n,y=C+"_nav "+x+"_nav",b=C+"_here",g=x+"_on",w=x+"_s",_=$("<ul class='"+C+"_tabs "+x+"_tabs' />"),I={"float":"left",position:"relative",opacity:1,zIndex:2},q={"float":"none",position:"absolute",opacity:0,zIndex:1},z=function(){var t=document.body||document.documentElement,n=t.style,e="transition";if("string"==typeof n[e])return!0;o=["Moz","Webkit","Khtml","O","ms"],e=e.charAt(0).toUpperCase()+e.substr(1);var a;for(a=0;a<o.length;a++)if("string"==typeof n[o[a]+e])return!0;return!1}(),T=function(t){a.before(t),z?(d.removeClass(g).css(q).eq(t).addClass(g).css(I),f=t,setTimeout(function(){a.after(t)},v)):d.stop().fadeOut(v,function(){$(this).removeClass(g).css(q).css("opacity",1)}).eq(t).fadeIn(v,function(){$(this).addClass(g).css(I),a.after(t),f=t})};if(a.random&&(d.sort(function(){return Math.round(Math.random())-.5}),s.empty().append(d)),d.each(function(t){this.id=w+t}),s.addClass(C+" "+x),e&&e.maxwidth&&s.css("max-width",m),d.hide().css(q).eq(0).addClass(g).css(I).show(),z&&d.show().css({"-webkit-transition":"opacity "+v+"ms ease-in-out","-moz-transition":"opacity "+v+"ms ease-in-out","-o-transition":"opacity "+v+"ms ease-in-out",transition:"opacity "+v+"ms ease-in-out"}),d.size()>1){if(v+100>h)return;if(a.pager&&!a.manualControls){var k=[];d.each(function(t){var n=t+1;k+="<li><a href='#' class='"+w+n+"'>"+n+"</a></li>"}),_.append(k),e.navContainer?$(a.navContainer).append(_):s.after(_)}if(a.manualControls&&(_=$(a.manualControls),_.addClass(C+"_tabs "+x+"_tabs")),(a.pager||a.manualControls)&&_.find("li").each(function(t){$(this).addClass(w+(t+1))}),(a.pager||a.manualControls)&&(c=_.find("a"),i=function(t){c.closest("li").removeClass(b).eq(t).addClass(b)}),a.auto&&(r=function(){u=setInterval(function(){d.stop(!0,!0);var t=p>f+1?f+1:0;(a.pager||a.manualControls)&&i(t),T(t)},h)})(),l=function(){a.auto&&(clearInterval(u),r())},a.pause&&s.hover(function(){clearInterval(u)},function(){l()}),(a.pager||a.manualControls)&&(c.bind("click",function(t){t.preventDefault(),a.pauseControls||l();var n=c.index(this);f===n||$("."+g).queue("fx").length||(i(n),T(n))}).eq(0).closest("li").addClass(b),a.pauseControls&&c.hover(function(){clearInterval(u)},function(){l()})),a.nav){var F="<a href='#' class='"+y+" prev'>"+a.prevText+"</a><a href='#' class='"+y+" next'>"+a.nextText+"</a>";e.navContainer?$(a.navContainer).append(F):s.after(F);var M=$("."+x+"_nav"),D=M.filter(".prev");M.bind("click",function(t){t.preventDefault();var n=$("."+g);if(!n.queue("fx").length){var e=d.index(n),s=e-1,o=p>e+1?f+1:0;T($(this)[0]===D[0]?s:o),(a.pager||a.manualControls)&&i($(this)[0]===D[0]?s:o),a.pauseControls||l()}}),a.pauseControls&&M.hover(function(){clearInterval(u)},function(){l()})}}if("undefined"==typeof document.body.style.maxWidth&&e.maxwidth){var O=function(){s.css("width","100%"),s.width()>m&&s.css("width",m)};O(),$(t).bind("resize",function(){O()})}})}}(jQuery,this,0);