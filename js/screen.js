var sliderOptions=
{
	sliderId: "slider",
	effect: "series1",
	effectRandom: false,
	pauseTime: 2600,
	transitionTime: 500,
	slices: 12,
	boxes: 8,
	hoverPause: true,
	autoAdvance: true,
	captionOpacity: 0.3,
	captionEffect: "fade",
	thumbnailsWrapperId: "thumbs",
    m:true,
	license: "free"
};

var imageSlider=new mcImgSlider(sliderOptions);

/* Menucool Javascript Image Slider v2012.9.11. Copyright www.menucool.com */
function mcImgSlider(g){var B=function(a){return document.getElementById(a)},H=function(d){var a=d.childNodes,c=[];if(a)for(var b=0,e=a.length;b<e;b++)a[b].nodeType==1&&c.push(a[b]);return c},J=function(a,b){return a.getElementsByTagName(b)},X=function(a){for(var c,d,b=a.length;b;c=parseInt(Math.random()*b),d=a[--b],a[b]=a[c],a[c]=d);return a},W=function(a,c,b){if(a.addEventListener)a.addEventListener(c,b,false);else a.attachEvent&&a.attachEvent("on"+c,b)},Z=document,V=function(c,a,b){return b?c.substring(a,b):c.substring(a)},c="style",I="display",t="visibility",e="width",q="height",E="top",A="background",s=function(){this.d=[];this.b=null;this.c()};function Q(){var c=50,a=navigator.userAgent,b;if((b=a.indexOf("MSIE "))!=-1)c=parseInt(a.substring(b+5,a.indexOf(".",b)));if(a.indexOf("Safari")!=-1&&a.indexOf("Chrome")==-1)c=300;return c}var S=Q()<9,x=function(a,b){if(a){a.o=b;if(S)a[c].filter="alpha(opacity="+b*100+")";else a[c].opacity=b}};s.a={f:function(a){return-Math.cos(a*Math.PI)/2+.5},g:function(a){return a},h:function(b,a){return Math.pow(b,a*2)},j:function(b,a){return 1-Math.pow(1-b,a*2)}};s.prototype={k:{c:g.transitionTime,a:function(){},b:s.a.f,d:1},c:function(){for(var b=["webkit","ms","o"],a=0;a<b.length&&!window.requestAnimationFrame;++a){window.requestAnimationFrame=window[b[a]+"RequestAnimationFrame"];window.cancelAnimationFrame=window[b[a]+"CancelAnimationFrame"]||window[b[a]+"CancelRequestAnimationFrame"]}this.e=!!window.requestAnimationFrame},m:function(h,d,g,c){for(var b=[],i=g-d,j=g>d?1:-1,f=Math.ceil(60*c.c/1e3),a,e=1;e<=f;e++){a=d+c.b(e/f,c.d)*i;if(h!="opacity")a=Math.round(a);b.push(a)}b.index=0;return b},n:function(){this.b==null&&this.p()},p:function(){this.q();var a=this;this.b=this.e?window.requestAnimationFrame(function(){a.p()}):window.setInterval(function(){a.q()},15)},q:function(){var a=this.d.length;if(a){for(var c=0;c<a;c++)this.o(this.d[c]);while(a--){var b=this.d[a];if(b.d.index==b.d.length){b.c();this.d.splice(a,1)}}}else{if(this.e&&window.cancelAnimationFrame)window.cancelAnimationFrame(this.b);else window.clearInterval(this.b);this.b=null}},o:function(a){if(a.d.index<a.d.length){var d=a.b,b=a.d[a.d.index];if(a.b=="opacity"){if(S){d="filter";b="alpha(opacity="+Math.round(b*100)+")"}}else b+="px";a.a[c][d]=b;a.d.index++}},r:function(e,b,d,f,a){a=this.s(this.k,a);var c=this.m(b,d,f,a);this.d.push({a:e,b:b,d:c,c:a.a});this.n()},s:function(c,b){b=b||{};var a,d={};for(a in c)d[a]=b[a]!==undefined?b[a]:c[a];return d}};var f=new s,b={a:0,e:"",d:0,c:0,b:0},a,d,o,r,C,y,D,h,k,G,w,n,u,v,m,L,F,l,j=null,O=function(b){if(b=="series1")a.a=[6,8,15,2,5,14,13,3,7,4,14,1,13,15];else if(b=="series2")a.a=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17];else a.a=b.split(/\W+/);a.a.p=g.effectRandom?-1:a.a.length==1?0:1},K=function(){a={b:g.pauseTime,c:g.transitionTime,f:g.slices,g:g.boxes,O0:g.license||"5432",h:g.hoverPause,i:g.autoAdvance,j:g.captionOpacity,k:g.captionEffect=="none"?0:g.captionEffect=="fade"?1:2,l:g.thumbnailsWrapperId,Ob:function(){typeof beforeSlideChange!=="undefined"&&beforeSlideChange(arguments)},Oa:function(){typeof afterSlideChange!=="undefined"&&afterSlideChange(arguments)}};if(d)a.m=Math.ceil(d.offsetHeight*a.g/d.offsetWidth);O(g.effect);a.n=function(){var b;if(a.a.p==-1)b=a.a[Math.floor(Math.random()*a.a.length)];else{b=a.a[a.a.p];a.a.p++;if(a.a.p>=a.a.length)a.a.p=0}if(b<1||b>17)b=15;return b}},bb=["$1$2$3","$1$2$3","$1$24","$1$23"],p=[];function T(){var e;if(a.l)e=B(a.l);if(e)for(var f=e.childNodes,d=0;d<f.length;d++)f[d].className=="thumb"&&p.push(f[d]);var c=p.length;if(c){while(c--){p[c].on=0;p[c].i=c;p[c].onclick=function(){j.y(this.i)};p[c].onmouseover=function(){this.on=1;this.className="thumb thumb-on"};p[c].onmouseout=function(){this.on=0;this.className=this.i==b.a?"thumb thumb-on":"thumb"}}P(0)}}function P(b){var a=p.length;if(a)while(a--)p[a].className=a!=b&&p[a].on==0?"thumb":"thumb thumb-on"}function U(b){var a=[],c=b.length;while(c--)a.push(String.fromCharCode(b[c]));return a.join("")}var M=function(a,g,i,c,b,d,h){setTimeout(function(){if(g&&i==g-1){var h={};h.a=function(){j.o()};for(var k in a)h[k]=a[k]}else h=a;b[e]!==undefined&&f.r(c,"width",b[e],d[e],a);b[q]!==undefined&&f.r(c,"height",b[q],d[q],a);f.r(c,"opacity",b.opacity,d.opacity,h)},h)},R=function(a){d=a;this.b=0;this.c()},ab=[/(?:.*\.)?(\w)([\w\-])[^.]*(\w)\.[^.]+$/,/.*([\w\-])\.(\w)(\w)\.[^.]+$/,/^(?:.*\.)?(\w)(\w)\.[^.]+$/,/.*([\w\-])([\w\-])\.com\.[^.]+$/],z=function(b){var a=document.createElement("div");a.className=b;return a};R.prototype={c:function(){o=d.offsetWidth;r=d.offsetHeight;l=H(d);var k=l.length;while(k--){var f=l[k],e=null;if(f.nodeName!="IMG"){if(f.nodeName=="A"){e=f;e[c][I]="none";var n=e.className?" "+e.className:"";e.className="imgLink"+n;var p=this.z(e),i=e.getAttribute("href");if(p&&typeof McVideo!="undefined"&&i&&i.indexOf("http")!=-1){e.onclick=function(){return this.getAttribute("autoPlayVideo")=="true"?false:j.d(this)};McVideo.register(e,this)}}f=J(f,"img")[0]}f[c][I]="none";b.d++}a.m=Math.ceil(r*a.g/o);if(l[b.a].nodeName=="IMG")b.e=l[b.a];else b.e=J(l[b.a],"img")[0];if(l[b.a].nodeName=="A")l[b.a][c][I]="block";d[c][A]='url("'+b.e.getAttribute("src")+'") no-repeat';this.i();C=this.k();var g=this.v(),h=b.e.parentNode;if(this.z(h)&&h.getAttribute("autoPlayVideo")=="true")this.d(h);else if(a.i&&b.d>1)m=setTimeout(function(){g.y(g.n(1),0,1)},a.b+a.c);if(a.h){d.onmouseover=function(){if(b.b!=2){b.b=1;clearTimeout(m);m=null}};d.onmouseout=function(){if(b.b!=2){b.b=0;if(m==null&&!b.c&&a.i)m=setTimeout(function(){g.y(g.n(b.a+1),0,1)},a.b/2)}}}if(Q()==300)d[c]["-webkit-transform"]="translate3d(0,0,0)"},d:function(c){var a=McVideo.play(c,o,r);if(a)b.b=2;return!this.b},f:function(){F=z("navBulletsWrapper");for(var e=[],a=0;a<b.d;a++)e.push("<div rel='"+a+"'></div>");F.innerHTML=e.join("");for(var c=H(F),a=0;a<c.length;a++){if(a==b.a)c[a].className="active";c[a].onclick=function(){j.y(parseInt(this.getAttribute("rel")))}}d.appendChild(F)},g:function(){var d=H(F),a=b.d;while(a--){if(a==b.a)d[a].className="active";else d[a].className="";if(l[a].nodeName=="A")l[a][c][I]=a==b.a?"block":"none"}},h:function(a,d){var c=function(b){var a=b.charCodeAt(0).toString();return a.substring(a.length-1)},b=d.replace(ab[a-2],bb[a-2]).split("");return"b"+a+b[1]+c(b[0])+c(b[2])},i:function(){y=z("mc-caption");D=z("mc-caption");h=z("mc-caption-bg");x(h,0);h.appendChild(D);k=z("mc-caption-bg2");k.appendChild(y);x(k,0);k[c][t]=h[c][t]=D[c][t]="hidden";d.appendChild(h);d.appendChild(k);G=[h.offsetLeft,h.offsetTop,y.offsetWidth];y[c][e]=D[c][e]=y.offsetWidth+"px";this.j()},j:function(){if(a.k==2){w=u={opacity:0,width:0,marginLeft:Math.round(G[2]/2)};n={opacity:1,width:G[2],marginLeft:0};v={opacity:a.j,width:G[2],marginLeft:0}}else if(a.k==1){w=u={opacity:0};n={opacity:1};v={opacity:a.j}}},k:function(){var a=b.e.getAttribute("alt");if(a&&a.substr(0,1)=="#"){var c=B(a.substring(1));a=c?c.innerHTML:""}this.l();return a},l:function(){var d=1;if(y.innerHTML.length>1)if(!a.k)h[c][t]=k[c][t]="hidden";else{d=0;var b={c:a.c*.3,b:a.k==1?s.a.f:s.a.h,d:a.k==1?0:2},g=b;g.a=function(){h[c][t]=k[c][t]="hidden";j.m()};if(n.marginLeft!==undefined){f.r(k,"width",n[e],w[e],b);f.r(h,"width",v[e],u[e],b);f.r(k,"marginLeft",n.marginLeft,w.marginLeft,b);f.r(h,"marginLeft",v.marginLeft,u.marginLeft,b)}if(n.opacity!==undefined){f.r(k,"opacity",n.opacity,w.opacity,b);f.r(h,"opacity",v.opacity,u.opacity,g)}}d&&setTimeout(function(){j.m()},a.c*.3)},m:function(){D.innerHTML=y.innerHTML=C;if(C){h[c][t]=k[c][t]="visible";if(a.k){var d=a.c*a.k;if(d>1e3)d=1e3;var b={c:d,b:a.k==1?s.a.g:s.a.j,d:a.k==1?0:2};if(n.marginLeft!==undefined){f.r(k,"width",w[e],n[e],b);f.r(h,"width",u[e],v[e],b);f.r(k,"marginLeft",w.marginLeft,n.marginLeft,b);f.r(h,"marginLeft",u.marginLeft,v.marginLeft,b)}if(n.opacity!==undefined){f.r(k,"opacity",w.opacity,n.opacity,b);f.r(h,"opacity",u.opacity,v.opacity,b)}}else{x(k,1);x(h,a.j)}}},a:function(a){return a.replace(/(?:.*\.)?(\w)([\w\-])?[^.]*(\w)\.[^.]*$/,"$1$3$2")},o:function(){b.c=0;clearTimeout(m);m=null;d[c][A]='url("'+b.e.getAttribute("src")+'") no-repeat';var f=this,e=b.e.parentNode;if(this.z(e)&&e.getAttribute("autoPlayVideo")=="true")this.d(e);else if(!b.b&&a.i)m=setTimeout(function(){f.y(f.n(b.a+1),0,1)},a.b);a.Oa.call(this,b.a,b.e)},p:function(g){b.c=1;if(l[b.a].nodeName=="IMG")b.e=l[b.a];else b.e=J(l[b.a],"img")[0];this.g();clearTimeout(L);C=this.k();var f=J(d,"div");i=f.length;while(i--)if(f[i].className=="mcSlc"||f[i].className=="mcBox"){var h=d.removeChild(f[i]);delete h}var c=g?g:a.n();a.Ob.apply(this,[b.a,b.e,C,c]);P(b.a);var e=c<14?this.w(c):this.x();if(c<9||c==15){if(c%2)e=e.reverse()}else if(c<14)e=e[0];if(c<9)this.q(e,c);else if(c<13)this.r(e,c);else if(c==13)this.s(e);else if(c<16)this.t(e,c);else this.u(e,c)},q:function(b,d){for(var f=0,g=d<7?{height:0,opacity:-.4}:{width:0,opacity:0},i={height:r,opacity:1},a=0,h=b.length;a<h;a++){if(d<3)b[a][c].bottom="0";else if(d<5)b[a][c][E]="0";else if(d<7){b[a][c][a%2?"bottom":"top"]="0";g.opacity=-.2}else{i={width:b[a].offsetWidth,opacity:1};b[a][c][e]=b[a][c][E]="0";b[a][c][q]=r+"px"}M({},h,a,b[a],g,i,f);f+=50}},r:function(d,b){d[c][e]=b<11?"0px":o+"px";d[c][q]=b<11?r+"px":"0px";x(d,1);if(b<11)d[c][E]="0";if(b==9){d[c].left="auto";d[c].right="0px"}else if(b>10)d[c][b==11?"bottom":"top"]="0";if(b<11)var g=0,h=o;else{g=0;h=r}var i={b:s.a.j,c:a.c*1.6,a:function(){j.o()}};f.r(d,b<11?"width":"height",g,h,i)},s:function(b){b[c][E]="0";b[c][e]=o+"px";b[c][q]=r+"px";var d={c:a.c*1.6,a:function(){j.o()}};f.r(b,"opacity",0,1,d)},t:function(b){var p=a.g*a.m,m=timeBuff=0,h=colIndex=0,f=[];f[0]=[];for(var d=0,l=b.length;d<l;d++){b[d][c][e]=b[d][c][q]="0px";f[h][colIndex]=b[d];colIndex++;if(colIndex==a.g){h++;colIndex=0;f[h]=[]}}for(var n={c:a.c/1.3},i=0,l=a.g*2;i<l;i++){for(var g=i,j=0;j<a.m;j++){if(g>=0&&g<a.g){var k=f[j][g];M(n,b.length,m,k,{width:0,height:0,opacity:0},{width:k.w,height:k.h,opacity:1},timeBuff);m++}g--}timeBuff+=100}},u:function(a,i){a=X(a);for(var f=0,b=0,j=a.length;b<j;b++){var d=a[b];if(i==16){a[b][c][e]=a[b][c][q]="0px";var g={width:0,height:0,opacity:0},h={width:d.w,height:d.h,opacity:1}}else{g={opacity:0};h={opacity:1}}M({},a.length,b,d,g,h,f);f+=20}},v:function(){return(new Function("a","b","c","d","e","f","g","h","this.f();var l=e(g(b([110,105,97,109,111,100])));if(l==''||l.length>3||a[b([48,79])]==f((+a[b([48,79])].substring(1,2)),g(b([110,105,97,109,111,100])))){d();this.b=1;}else{a[b([97,79])]=a[b([98,79])]=function(){};var k=c[0];if (k.getAttribute(b([102,101,114,104])))var x=k.getAttribute(b([102,101,114,104]));if(x&&x.length>20)var y=h(x,17,19)=='ol';};return this;")).apply(this,[a,U,l,T,this.a,this.h,function(a){return Z[a]},V])},w:function(h){for(var j=[],i=h>8?o:Math.round(o/a.f),k=h>8?1:a.f,g=0;g<k;g++){var f=z("mcSlc");f[c].left=i*g+"px";f[c][e]=(g==a.f-1?o-i*g:i)+"px";f[c][q]="0px";f[c][A]='url("'+b.e.getAttribute("src")+'") no-repeat -'+g*i+"px 0%";if(h==10)f[c][A]='url("'+b.e.getAttribute("src")+'") no-repeat right top';else if(h==12)f[c][A]='url("'+b.e.getAttribute("src")+'") no-repeat left bottom';f[c].zIndex=1;f[c].position="absolute";x(f,0);d.appendChild(f);j[j.length]=f}return j},x:function(){for(var k=[],j=Math.round(o/a.g),i=Math.round(r/a.m),h=0;h<a.m;h++)for(var g=0;g<a.g;g++){var f=z("mcBox");f[c].left=j*g+"px";f[c][E]=i*h+"px";f.w=g==a.g-1?o-j*g:j;f.h=h==a.m-1?r-i*h:i;f[c][e]=f.w+"px";f[c][q]=f.h+"px";f[c][A]='url("'+b.e.getAttribute("src")+'") no-repeat -'+g*j+"px -"+h*i+"px";f[c].zIndex=1;f[c].position="absolute";x(f,0);d.appendChild(f);k.push(f)}return k},y:function(d,h,f){if(b.c&&!h||d==b.a)return 0;if(b.b==2){b.b=0;var c=B("mcVideo");if(c){c.src="";var e=c.parentNode.parentNode.removeChild(c.parentNode);delete e}}clearTimeout(m);m=null;var a=b.a;b.a=this.n(d);if(f||!g.m)a=0;else a=a>b.a?"10":"9";this.p(a)},n:function(a){if(a>=b.d)a=0;else if(a<0)a=b.d-1;return a},To:function(a){this.y(this.n(b.a+a))},z:function(a){return a.className.indexOf(" video")>-1}};var N=function(){var a=B(g.sliderId);if(a)j=new R(a)};K();W(window,"load",N);var Y=function(){if(d){f.d=[];clearTimeout(m);clearTimeout(L);m=L=null;var c=H(d),g=c.length;while(g--)if(c[g].nodeName=="DIV"){var i=c[g].parentNode.removeChild(c[g]);delete i}var e=B("mcVideo");if(e){e.src="";var h=e.parentNode.parentNode.removeChild(e.parentNode);delete h}b={a:0,e:"",d:0,c:0,b:0}}K();N();if(!j.b)a.i=j.b};return{displaySlide:function(c,b,a){j.y(c,b,a)},next:function(){j.To(1)},previous:function(){j.To(-1)},getAuto:function(){return a.i},switchAuto:function(){if(a.i=!a.i)j.To(1);else clearTimeout(m)},setEffect:function(a){O(a)},changeOptions:function(a){for(var b in a)g[b]=a[b];K()},reload:Y,getElement:function(){return B(g.sliderId)}}}


