/* TranslateThis Button v1.0.5 - http://translateTH.IS
Copyright (c)2008-2010 Jon Raasch. All rights reserved */
(function(){function a(f){var e={langs:{},theFlags:[],theDD:[],theAll:[],input:[],results:[],busy:0,ol:0,all:0,tr:0,undo:0,addEv:function(j,i,h){if(j.attachEvent){j["e"+i+h]=h;j[i+h]=function(){j["e"+i+h](window.event)};j.attachEvent("on"+i,j[i+h])}else{j.addEventListener(i,h,false)}},prev:function(h){if(h&&h.preventDefault){h.preventDefault()}else{if(window.event&&window.event.returnValue){window.event.returnValue=false}}},trans:function(n){function i(w){function t(E,D,C){var F={node:E,html:D,x:C};e.input.push(F);h(F)}if(e.hasClass(w,"notranslate")){return false}switch(w.nodeType){case 1:var B=w.innerHTML,v=w.tagName;if(!B||v=="SCRIPT"||v=="STYLE"||v=="OBJECT"){return}if(B.length<k&&!q(v)){t(w,B,0)}else{var u=w.childNodes;for(var y=0,A=u.length;y<A;y++){i(u[y])}}break;case 3:if(w.nodeValue.length<e.o.maxLength){t(w,w.nodeValue,0)}else{var x=w.nodeValue;for(var z=0;x.length;z++){t(w,x.substr(0,k),z?1:0);x=x.substr(k)}}break}}function h(t){e.busy++;google.language.translate(t.html,e.o.fromLang,n,function(u){if(e.cancel){return}if(!u.error){j(t.node,u.translation,t.x)}e.busy--;if(!e.busy){m(0)}})}function m(t){function x(){function A(){z--;if(z>-25){e.undo.style.top=z+"px";setTimeout(A,12)}else{r()}}if(e.undo){var z=0;A()}}e.wrap=document.getElementById(e.o.wrapper);var u=e.findCTA();e.buildCTA(u);e.tr.style.display="none";e.hideOL();if(!t){if(e.o.cookie){e.setCookie(n,30)}if(typeof e.o.onComplete=="function"){e.o.onComplete(n)}var v=document.createElement("div"),w=document.createElement("a");v.className="ttb-undo";v.innerHTML=e.o.doneText+" TranslateThis Button &nbsp;|&nbsp; ";w.innerHTML=e.o.undoText;try{w.href="#"}catch(y){}w.onclick=function(z){e.prev(z);x();e.trans(0)};v.appendChild(w);document.body.appendChild(v);e.undo=v;setTimeout(x,4000)}}function j(u,v,t){if(!v.length){return}if(u.innerHTML!==undefined){u.innerHTML=v}else{if(u.nodeValue!==undefined){u.nodeValue=t?u.nodeValue+v:v}}}function o(){var u=document.createElement("div"),t=document.createElement("a");u.className="ttb-translating";u.innerHTML=e.o.busyText+"<br />";t.innerHTML=e.o.cancelText;t.href="#cancel";t.onclick=function(v){e.prev(v);e.trans(0)};u.appendChild(t);document.body.appendChild(u);return u}function r(){e.remove(e.undo);e.undo=0}if(e.busy&&n){return}var q=e.o.msie?function(t){return t=="TABLE"||t=="TR"||t=="TFOOT"||t=="THEAD"}:function(t){return false},k=e.o.maxLength;e.busy=1;e.showOL();if(e.tr){e.remove(e.tr)}e.tr=o();e.centerXY(e.tr,100,25);e.tr.style.display="block";if(e.dd){e.remove(e.dd);e.dd=0;e.theDD=[]}if(e.all){e.remove(e.all);e.all=0;e.theAll=[]}if(n&&e.undo){r()}if(n==e.o.fromLang){n=0}if(n){e.cancel=0;if(!e.input.length||e.o.reparse){e.input=[];i(e.o.scope?document.getElementById(e.o.scope):document.body)}else{for(var s=0,p=e.input.length;s<p;s++){h(e.input[s],s+1==p?true:false)}}e.busy--;if(!e.busy){m(0)}e.report(n);if(typeof e.o.onClick=="function"){e.o.onClick()}}else{if(!e.cancel){e.cancel=1;for(index in e.input){j(e.input[index].node,e.input[index].html,e.input[index].x)}e.setCookie("",-1);e.report(0);e.busy=0;m(1)}}},build:function(){function h(){var n=document.createElement("style"),p="display:block;overflow:hidden;text-indent:-2000px;",o="background:#FFF;border:1px solid #BBB;font-family:Arial;color:#555;",m=".ttb-panel{display:none;position:absolute;z-index:3500;font-size:12px;text-align:left;"+o+"} .ttb-panel .ttb-column{width:117px;float:left;margin:0 3px 0 0;} .ttb-panel a{color:#555}";if(!e.o.noBtn){m+=" #"+e.o.wrapper+" .translate-this-button{background:url('"+e.o.btnImg+"') no-repeat;visibility:visible;position:relative;width:"+e.o.btnWidth+"px;height:"+e.o.btnHeight+"px;float:left;"+p+"}"}m+=" .ttb-more{float:right;padding:4px;} .ttb-close{display:block;position:absolute;top:3px;right:3px;height:16px;width:16px;}";m+=" .ttb-cta{display:block;padding:4px 5px;text-decoration:none;cursor:pointer;} .ttb-cta:hover{background:#EEE;outline:1px solid #DDD;text-decoration:underline;}";m+=" .translate-flag{background:url('"+e.o.bgImg+"') no-repeat;height:"+e.o.imgHeight+"px;width:"+e.o.imgWidth+"px;margin:0 6px 0 0;float:left;"+p+"}";m+=" .ttb-overlay{position:absolute;top:0;left:0;z-index:3000;background:#222;filter:alpha(opacity=80);opacity:.8;} .ttb-translating{position:absolute;z-index:3500;height:80px;width:200px;font-size:16px;text-align:center;line-height:40px;"+o+"} .ttb-translating a{font-size:.8em;}";m+=" .ttb-undo{position:absolute;width:100%;z-index:2000;top:0;left:0;padding:5px 0;filter:alpha(opacity=95);opacity:.95;text-align:center;font-size:12px;"+o+"border:0;border-bottom:1px solid #BBB;}";n.type="text/css";if(n.styleSheet){n.styleSheet.cssText=m}else{n.appendChild(document.createTextNode(m))}document.getElementsByTagName("head")[0].appendChild(n)}e.wrap=document.getElementById(e.o.wrapper);if(!e.wrap){return}var i=e.findCTA();if(!i){return}try{i.href="#translate"}catch(k){}if(e.o.cookie&&!e.busy){var j=e.getCookie();if(j){e.trans(j)}}h();e.wrap.style.height=e.o.btnHeight+"px";e.buildCTA(i);e.appendClear(e.wrap,1);if(typeof e.o.onLoad=="function"){e.o.onLoad()}},buildFlag:function(k){var i=document.createElement("a");i.className="translate-"+k+" ttb-cta";i.title="Translate into "+e.langs[k];i.href="#translate-"+k;var h=document.createElement("span");h.className="translate-label";h.innerHTML=e.langs[k];if(e.o.noImg){i.appendChild(h);return i}var j=document.createElement("span");j.className="translate-flag";j.style.backgroundPosition="0 "+(e.o.imgMap[k]*e.o.imgHeight*-1)+"px";i.appendChild(j);i.appendChild(h);return i},findCTA:function(){var h=e.wrap.childNodes;for(var j=0;j<h.length;j++){if(h[j].className=="translate-this-button"){return h[j]}}return false},buildCTA:function(k){function m(){e.dd=e.buildPanel(1);e.dd.style.width="250px";e.dd.onmouseover=h;e.dd.onmouseout=i}function h(){if(j){clearTimeout(j);return}if(!e.dd){m()}var o=e.getPos(k);e.dd.style.top=(Math.max(e.wHeight(),document.body.offsetHeight)-o[1]>248?o[1]+k.offsetHeight:o[1]-248)+"px";e.dd.style.left=(document.body.offsetWidth-o[0]>250-k.offsetWidth?o[0]:o[0]-250+k.offsetWidth)+"px";e.dd.style.display="block"}function i(){j=setTimeout(n,500)}function n(){j=0;e.dd.style.display="none"}var j=0;k.onclick=e.showAll;k.onmouseover=h;k.onmouseout=i},buildPanel:function(v){function s(p,z,i){var A=document.createElement("a");A.href=e.lynx;A.title=z;A.target="_blank";A.innerHTML=p;if(i){A.style.cssFloat="right";A.style.styleFloat="right"}j.appendChild(A)}function y(p){e.prev(p);var i=e.getTar(p.target||p.srcElement);if(e.hasClass(i,"ttb-cta")){e.flagClick(p,i,w,k)}else{if(e.hasClass(i,"ttb-more")){e.showAll()}else{if(e.hasClass(i,"ttb-close")){e.hideAll()}}}return false}if(v){var w=e.theDD,k=e.o.ddLangs,t=2,m=0}else{var w=e.theAll,k=e.o.allLangs,t=4,m="5px"}var h=document.createElement("div");h.className="ttb-panel";h.innerHTML='<div style="background:#EEE;border-bottom:1px solid #DDD;padding:4px 5px;">'+e.o.panelText+'</div><div style="padding:5px 0 '+m+' 5px;"></div><div style="background:#EEE;border-top:1px solid #DDD;font-size:10px;padding:1px 5px;"></div>';document.body.appendChild(h);var o=h.childNodes[1],r=[],j=h.childNodes[2];for(var n=0;n<t;n++){r[n]=document.createElement("div");r[n].className="ttb-column";o.appendChild(r[n])}var x=0;for(var n=0;n<k.length;n++){var q=e.buildFlag(k[n]);if(n>=k.length/t*(x+1)){x++}r[x].appendChild(q);if(v){e.theDD.push(q)}else{e.theAll.push(q)}}e.addEv(o,"click",y);s("TranslateThis Button","Get your own TranslateThis Button",!v);if(!v){s("What's This?","What is the TranslateThis Button?",0)}var u=document.createElement("a");u.style.cursor="pointer";if(v){u.className="ttb-more";u.innerHTML=e.o.moreText}else{u.className="ttb-close";if(e.o.noImg){u.innerHTML="X"}else{u.style.backgroundImage='url("'+e.o.bgImg+'")';u.style.backgroundPosition="0 -624px"}u.title="Close"}o.appendChild(u);e.appendClear(o,0);return h},appendClear:function(j,i){var h=document.createElement("div");h.style.margin="0";h.style.padding="0";if(i){h.style.width="100%";h.style.height="1px"}else{h.style.clear="both"}j.appendChild(h)},getStyle:function(i,h){if(i.currentStyle){var j=i.currentStyle[h]}else{if(window.getComputedStyle){var j=document.defaultView.getComputedStyle(i,null).getPropertyValue(h)}}return j},getPos:function(h){var i=curtop=0;if(h.offsetParent){do{i+=h.offsetLeft;curtop+=h.offsetTop}while(h=h.offsetParent);return[i,curtop]}},getTar:function(h){if(h.tagName!="A"){h=h.parentNode}return h},flagClick:function(n,h,k,m){function o(r,q){for(var p=0;p<q.length;p++){if(r==q[p]){return p}}}e.hideAll(n);var j=o(h,k);e.trans(m[j])},showOL:function(){function i(){var j=document.createElement("div");j.className="ttb-overlay";document.body.appendChild(j);j.onclick=function(k){e.hideAll(k);e.hideOL();if(e.busy){e.tr.style.display="none"}};window.onresize=function(k){e.resize=setTimeout(h,80)};return j}function h(){if(!e.olShow){return}var m=document,k=Math.max(Math.max(m.body.scrollWidth,m.documentElement.scrollWidth),Math.max(m.body.offsetWidth,m.documentElement.offsetWidth),Math.max(m.body.clientWidth,m.documentElement.clientWidth)),j=Math.max(Math.max(m.body.scrollHeight,m.documentElement.scrollHeight),Math.max(m.body.offsetHeight,m.documentElement.offsetHeight),Math.max(m.body.clientHeight,m.documentElement.clientHeight));e.ol.style.width=k+"px";e.ol.style.height=j+"px"}e.olShow=1;if(!e.ol){e.ol=i()}h();e.ol.style.display="block";if(e.dd){e.dd.style.display="none"}},hideOL:function(){e.ol.style.display="none";e.olShow=0},showAll:function(i){function h(){var j=e.buildPanel(0);j.style.width="488px";return j}e.prev(i);e.showOL();if(!e.all){e.all=h()}e.centerXY(e.all,244,190);e.all.style.display="block"},hideAll:function(h){e.prev(h);if(!e.all){return}e.all.style.display="none";e.hideOL()},centerXY:function(k,j,i){var h=0,m=0;if(typeof(window.pageYOffset)=="number"){m=window.pageYOffset;h=window.pageXOffset}else{if(document.body&&(document.body.scrollLeft||document.body.scrollTop)){m=document.body.scrollTop;h=document.body.scrollLeft}else{if(document.documentElement&&(document.documentElement.scrollLeft||document.documentElement.scrollTop)){m=document.documentElement.scrollTop;h=document.documentElement.scrollLeft}}}h+=(e.wWidth()/2)-j;m+=(e.wHeight()/2)-i;k.style.top=m+"px";k.style.left=h+"px"},wHeight:function(){return window.innerHeight?window.innerHeight:document.documentElement.clientHeight?document.documentElement.clientHeight:document.body.clientHeight},wWidth:function(){return window.innerWidth?window.innerWidth:document.documentElement.clientWidth?document.documentElement.clientWidth:document.body.clientWidth},remove:function(h){h.parentNode.removeChild(h)},setCookie:function(i,j){var h=new Date();h.setTime(h.getTime()+j*8640000);document.cookie=e.o.cookie+"="+i+"; expires="+h.toGMTString()+"; path=/"},getCookie:function(){var k=e.o.cookie+"=",h=document.cookie.split(";");for(var j=0;j<h.length;j++){var m=h[j];while(m.charAt(0)==" "){m=m.substring(1,m.length)}if(m.indexOf(k)==0){return m.substring(k.length,m.length)}}return null},report:function(j){if(e.o.GA&&j!="init"&&typeof pageTracker!="undefined"){pageTracker._trackPageview("TranslateThis-"+j)}if("https:"==document.location.protocol){return}var h=new Image();h.src=e.lynx+"translate.gif?x="+j;document.body.appendChild(h);var i=setInterval(function(){if(h.complete){clearInterval(i);e.remove(h)}},90)},hasClass:function(j,h){var i=" "+h+" ";if((" "+j.className+" ").replace(/[\n\t]/g," ").indexOf(i)>-1){return true}return false}};e.lynx="http://translateTH.IS/";var f=f||[];f.wrapper=f.wrapper||"translate-this";f.scope=f.scope||false;f.bgImg=f.bgImg||"http://x.translateth.is/tt-sprite2.png";f.fromLang=f.fromLang||"";f.flags=f.flags||[];f.ddLangs=f.ddLangs||["fr","es","ar","zh-CN","ko","it","cs","iw","de","pt-PT","ru","ja","vi","el","hi","tr"];f.imgMap=f.imgMap||{af:10,sq:11,ar:6,be:12,bg:13,ca:50,"zh-CN":7,"zh-TW":14,hr:15,cs:16,da:17,nl:18,en:19,et:21,fi:22,fr:0,gl:51,de:1,el:23,iw:24,hi:25,hu:26,is:27,id:28,ga:29,it:4,ja:8,ko:9,lv:30,lt:31,mk:32,ms:33,mt:34,no:35,fa:36,pl:37,"pt-PT":3,ro:38,ru:5,sr:39,sk:40,sl:41,es:2,sw:42,sv:43,tl:44,th:45,tr:46,uk:47,vi:48,cy:49,yi:24};if(f.allLangs===undefined){f.allLangs=["af","sq","ar","be","bg","ca","zh-CN","zh-TW","hr","cs","da","nl","en","et","fi","fr","gl","de","el","iw","hi","hu","is","id","ga","it","ja","ko","lv","lt","mk","ms","mt","no","fa","pl","pt-PT","ro","ru","sr","sk","sl","es","sw","sv","tl","th","tr","uk","vi","cy","yi"]}f.noBtn=f.noBtn||false;f.btnImg=f.btnImg||"http://x.translateth.is/tt-btn1.png";f.btnWidth=f.btnWidth||180;f.btnHeight=f.btnHeight||18;f.noImg=f.noImg||false;f.imgHeight=f.imgHeight||12;f.imgWidth=f.imgWidth||18;f.maxLength=f.maxLength||1000;f.reparse=f.reparse||false;f.onLoad=f.onLoad||null;f.onClick=f.onClick||null;f.onComplete=f.onComplete||null;f.GA=f.GA||false;f.cookie=f.cookie!==undefined?f.cookie:"tt-lang";f.undoText=f.undoText||"Undo &raquo;";f.panelText=f.panelText||"Translate Into:";f.moreText=f.moreText||"36 More Languages &raquo;";f.busyText=f.busyText||"Translating page...";f.cancelText=f.cancelText||"cancel";f.doneText=f.doneText||"This page translated by the";f.msie=navigator.userAgent.toLowerCase().indexOf("msie")>-1;e.o=f;var b=google.language.Languages;for(l in b){var d=b[l],g=l.replace("_"," ").toLowerCase();g=g.charAt(0).toUpperCase()+g.substr(1,g.length);e.langs[d]=g}e.langs["zh-CN"]="Chinese";e.langs["zh-TW"]="Chinese (trad.)";var c=(window.onload)?window.onload:function(){};window.onload=function(){c();new e.build()}}google.load("language","1");window.TranslateThis=a})();