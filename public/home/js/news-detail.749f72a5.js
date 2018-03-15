webpackJsonp([14],{0:function(t,e,n){"use strict";function o(t){return t&&t.__esModule?t:{default:t}}function r(t){return"mypc-like-comment-"+t}function a(){return"mypc-like-news-"+k.newsId}function i(t){return t>=1e8?Number((t/1e8).toFixed(2))+"亿":t>=1e5?Number((t/1e4).toFixed(1))+"万":t}function s(t){return t>0?i(t):"赞"}function u(){if(!_){_=!0;var t=p.default.get("/ajax/news/"+k.newsId+"/comments",{timestamp:k.timestamp,limit:L,offset:C});t.then(function(t){E.attr("data-more",t.paging.hasMore),C+=L;var e=[];t.comments.forEach(function(t){t.liked=!!w.getItem(r(t.id)),e.push(v.render({comment:t}))}),b.append(e.join("")),E.html(t.paging.hasMore?'<span class="click">查看更多回复</span>':"<span>无更多内容</span>")},function(){E.html('<span class="click">加载失败，请重试</span>')}),t.always(function(){_=!1})}}function l(t,e){var n=t.data("commentid"),o=t.find(".like-comment-count");if(!k.authed)return void(0,f.login)();P=!0;var a=!t.hasClass("liked");t.data("val","{ liked: "+!a+" }");var i=a?"/ajax/news/post/likeNewsComment":"/ajax/news/post/dislikeNewsComment",u=p.default.post(i,{data:JSON.stringify([n])});u.then(function(i){if(i.success){var u=parseInt(o.data("count"),10);a?(t.addClass("liked"),w.setItem(r(n),+new Date),o.text(s(++u))):(w.removeItem(r(n)),t.removeClass("liked"),o.text(s(u>=1?--u:0))),o.data("count",u);var l=e.find(".like-comment[data-commentid="+n+"]");l.length>0&&(l.find(".like-comment-count").data("count",u).text(s(u)),l.toggleClass("liked",a))}else alert("点赞失败")}),u.always(function(){P=!1})}function c(t){p.default.post("/ajax/news/post/reportNewsComment",{data:JSON.stringify([t])}).then(function(t){alert(t||"举报成功!")})}function h(){$.merge(T,D).find(".like-comment").each(function(t,e){var n=$(e),o=n.data("commentid");n.toggleClass("liked",!!w.getItem(r(o))),n.data("val","{ liked: "+!w.getItem(r(o))+" }")})}function m(){var t=$(".news-content");t.find("img").each(function(t,e){var n=$(e),o=n.parent();"p"===o[0].tagName.toLowerCase()?o.hasClass("image-wrapper")||o.addClass("image-wrapper"):n.wrap('<p class="image-wrapper"></p>')}),t.find("p.image-wrapper").each(function(t,e){var n=$(e);if(n.find("a[href^=meituanmovie]").length>0)n.hide();else{var o=n.next(),r=o.children();o.height()<30&&r.length>0&&$(r[0]).is("span")&&o.addClass("image-desc")}})}var d=n(1407),p=o(d);n(1408);var f=n(1176),g=n(1409),v=n(1410),k=JSON.parse($("#page-data").html()),w=window.localStorage,_=!1,L=10,C=10,b=$(".comments-list"),E=$(".loading-banner"),A=$(".like-news"),y=A.find(".like-news-count"),D=$("dl.hot-comments-list"),T=$("dl.comments-list"),P=!1;$(".share-banner").globalOverlay($("#share-info").html()),new g($(".share-qrcode-img").get(0),{text:"http://m.maoyan.com/information/"+k.newsId+"?_v_=yes",width:90,height:90,correctLevel:g.CorrectLevel.H}),E.click(function(t){"true"===E.attr("data-more")&&(E.html("加载中..."),u())}),A.click(function(t){if(!P){if(!k.authed)return void(0,f.login)();P=!0;var e=!A.hasClass("liked");A.data("val","{ liked: "+!e+" }");var n=e?"/ajax/news/post/likeNews":"/ajax/news/post/dislikeNews",o=p.default.post(n,{data:JSON.stringify([k.newsId])});o.then(function(t){if(t.success){var n=parseInt(y.data("count"),10);e?(A.addClass("liked"),y.text(s(++n))):(w.removeItem(a()),A.removeClass("liked"),y.text(s(n>=1?--n:0))),y.data("count",n)}else alert("点赞失败")}),o.always(function(){P=!1})}}),T.delegate(".like-comment","click",function(t){P||l($(this),D)}),D.delegate(".like-comment","click",function(t){P||l($(this),T)}),T.delegate(".comment-report","click",function(){c($(this).data("commentid"))}),D.delegate(".comment-report","click",function(){c($(this).data("commentid"))}),m(),h(),n(1411)},1407:function(t,e){"use strict";e.__esModule=!0;var n={};["get","post"].forEach(function(t){n[t]=function(e,n){var o=jQuery.Deferred();return $.ajax({url:e,data:n,type:t,dataType:"json",success:function(t){t.success?o.resolve(t.data):(o.reject("服务器看电影去了"),window.console&&console.error(t.reason),alert(t.reason))},error:function(t,e,n){o.reject("服务器看电影去了"),window.console&&console.error(t),alert(e+n)}}),o.promise()}}),e.default=n},1408:function(t,e,n){"use strict";function o(t){return t&&t.__esModule?t:{default:t}}function r(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}e.__esModule=!0;var a=n(1177),i=o(a),s=function(){function t(e,n){r(this,t);var o=this;this.visible=!1,this.$baseElement=n,this.$baseElement.wrap("<div></div>"),this.$container=this.$baseElement.parent(),this.$container.css({display:"inline-block",position:"relative"}),this.$content=(0,i.default)("<div></div>").css({position:"absolute",top:0,left:0,"z-index":10}).appendTo(this.$container),this.$content.hide(),this.$content.append(e),this.$container.hover(function(){o.show()},function(){o.hide()})}return t.prototype.position=function(){var t=this.$baseElement.outerHeight(!0);this.$content.css({top:t+"px",left:0})},t.prototype.show=function(){this.visible=!0,this.$content.show(),this.position()},t.prototype.hide=function(){this.visible=!1,this.$content.hide()},t}();i.default.fn.globalOverlay=function(t){this.each(function(e,n){new s(t,(0,i.default)(n))})},e.default=s},1409:function(t,e){var n;!function(){function t(t){this.mode=c.MODE_8BIT_BYTE,this.data=t,this.parsedData=[];for(var e=0,n=this.data.length;e<n;e++){var o=[],r=this.data.charCodeAt(e);r>65536?(o[0]=240|(1835008&r)>>>18,o[1]=128|(258048&r)>>>12,o[2]=128|(4032&r)>>>6,o[3]=128|63&r):r>2048?(o[0]=224|(61440&r)>>>12,o[1]=128|(4032&r)>>>6,o[2]=128|63&r):r>128?(o[0]=192|(1984&r)>>>6,o[1]=128|63&r):o[0]=r,this.parsedData.push(o)}this.parsedData=Array.prototype.concat.apply([],this.parsedData),this.parsedData.length!=this.data.length&&(this.parsedData.unshift(191),this.parsedData.unshift(187),this.parsedData.unshift(239))}function e(t,e){this.typeNumber=t,this.errorCorrectLevel=e,this.modules=null,this.moduleCount=0,this.dataCache=null,this.dataList=[]}function o(t,e){if(void 0==t.length)throw new Error(t.length+"/"+e);for(var n=0;n<t.length&&0==t[n];)n++;this.num=new Array(t.length-n+e);for(var o=0;o<t.length-n;o++)this.num[o]=t[o+n]}function r(t,e){this.totalCount=t,this.dataCount=e}function a(){this.buffer=[],this.length=0}function i(){return"undefined"!=typeof CanvasRenderingContext2D}function s(){var t=!1,e=navigator.userAgent;if(/android/i.test(e)){t=!0;var n=e.toString().match(/android ([0-9]\.[0-9])/i);n&&n[1]&&(t=parseFloat(n[1]))}return t}function u(t,e){for(var n=1,o=l(t),r=0,a=g.length;r<=a;r++){var i=0;switch(e){case h.L:i=g[r][0];break;case h.M:i=g[r][1];break;case h.Q:i=g[r][2];break;case h.H:i=g[r][3]}if(o<=i)break;n++}if(n>g.length)throw new Error("Too long data");return n}function l(t){var e=encodeURI(t).toString().replace(/\%[0-9a-fA-F]{2}/g,"a");return e.length+(e.length!=t?3:0)}t.prototype={getLength:function(t){return this.parsedData.length},write:function(t){for(var e=0,n=this.parsedData.length;e<n;e++)t.put(this.parsedData[e],8)}},e.prototype={addData:function(e){var n=new t(e);this.dataList.push(n),this.dataCache=null},isDark:function(t,e){if(t<0||this.moduleCount<=t||e<0||this.moduleCount<=e)throw new Error(t+","+e);return this.modules[t][e]},getModuleCount:function(){return this.moduleCount},make:function(){this.makeImpl(!1,this.getBestMaskPattern())},makeImpl:function(t,n){this.moduleCount=4*this.typeNumber+17,this.modules=new Array(this.moduleCount);for(var o=0;o<this.moduleCount;o++){this.modules[o]=new Array(this.moduleCount);for(var r=0;r<this.moduleCount;r++)this.modules[o][r]=null}this.setupPositionProbePattern(0,0),this.setupPositionProbePattern(this.moduleCount-7,0),this.setupPositionProbePattern(0,this.moduleCount-7),this.setupPositionAdjustPattern(),this.setupTimingPattern(),this.setupTypeInfo(t,n),this.typeNumber>=7&&this.setupTypeNumber(t),null==this.dataCache&&(this.dataCache=e.createData(this.typeNumber,this.errorCorrectLevel,this.dataList)),this.mapData(this.dataCache,n)},setupPositionProbePattern:function(t,e){for(var n=-1;n<=7;n++)if(!(t+n<=-1||this.moduleCount<=t+n))for(var o=-1;o<=7;o++)e+o<=-1||this.moduleCount<=e+o||(0<=n&&n<=6&&(0==o||6==o)||0<=o&&o<=6&&(0==n||6==n)||2<=n&&n<=4&&2<=o&&o<=4?this.modules[t+n][e+o]=!0:this.modules[t+n][e+o]=!1)},getBestMaskPattern:function(){for(var t=0,e=0,n=0;n<8;n++){this.makeImpl(!0,n);var o=d.getLostPoint(this);(0==n||t>o)&&(t=o,e=n)}return e},createMovieClip:function(t,e,n){var o=t.createEmptyMovieClip(e,n),r=1;this.make();for(var a=0;a<this.modules.length;a++)for(var i=a*r,s=0;s<this.modules[a].length;s++){var u=s*r,l=this.modules[a][s];l&&(o.beginFill(0,100),o.moveTo(u,i),o.lineTo(u+r,i),o.lineTo(u+r,i+r),o.lineTo(u,i+r),o.endFill())}return o},setupTimingPattern:function(){for(var t=8;t<this.moduleCount-8;t++)null==this.modules[t][6]&&(this.modules[t][6]=t%2==0);for(var e=8;e<this.moduleCount-8;e++)null==this.modules[6][e]&&(this.modules[6][e]=e%2==0)},setupPositionAdjustPattern:function(){for(var t=d.getPatternPosition(this.typeNumber),e=0;e<t.length;e++)for(var n=0;n<t.length;n++){var o=t[e],r=t[n];if(null==this.modules[o][r])for(var a=-2;a<=2;a++)for(var i=-2;i<=2;i++)a==-2||2==a||i==-2||2==i||0==a&&0==i?this.modules[o+a][r+i]=!0:this.modules[o+a][r+i]=!1}},setupTypeNumber:function(t){for(var e=d.getBCHTypeNumber(this.typeNumber),n=0;n<18;n++){var o=!t&&1==(e>>n&1);this.modules[Math.floor(n/3)][n%3+this.moduleCount-8-3]=o}for(var n=0;n<18;n++){var o=!t&&1==(e>>n&1);this.modules[n%3+this.moduleCount-8-3][Math.floor(n/3)]=o}},setupTypeInfo:function(t,e){for(var n=this.errorCorrectLevel<<3|e,o=d.getBCHTypeInfo(n),r=0;r<15;r++){var a=!t&&1==(o>>r&1);r<6?this.modules[r][8]=a:r<8?this.modules[r+1][8]=a:this.modules[this.moduleCount-15+r][8]=a}for(var r=0;r<15;r++){var a=!t&&1==(o>>r&1);r<8?this.modules[8][this.moduleCount-r-1]=a:r<9?this.modules[8][15-r-1+1]=a:this.modules[8][15-r-1]=a}this.modules[this.moduleCount-8][8]=!t},mapData:function(t,e){for(var n=-1,o=this.moduleCount-1,r=7,a=0,i=this.moduleCount-1;i>0;i-=2)for(6==i&&i--;;){for(var s=0;s<2;s++)if(null==this.modules[o][i-s]){var u=!1;a<t.length&&(u=1==(t[a]>>>r&1));var l=d.getMask(e,o,i-s);l&&(u=!u),this.modules[o][i-s]=u,r--,r==-1&&(a++,r=7)}if(o+=n,o<0||this.moduleCount<=o){o-=n,n=-n;break}}}},e.PAD0=236,e.PAD1=17,e.createData=function(t,n,o){for(var i=r.getRSBlocks(t,n),s=new a,u=0;u<o.length;u++){var l=o[u];s.put(l.mode,4),s.put(l.getLength(),d.getLengthInBits(l.mode,t)),l.write(s)}for(var c=0,u=0;u<i.length;u++)c+=i[u].dataCount;if(s.getLengthInBits()>8*c)throw new Error("code length overflow. ("+s.getLengthInBits()+">"+8*c+")");for(s.getLengthInBits()+4<=8*c&&s.put(0,4);s.getLengthInBits()%8!=0;)s.putBit(!1);for(;;){if(s.getLengthInBits()>=8*c)break;if(s.put(e.PAD0,8),s.getLengthInBits()>=8*c)break;s.put(e.PAD1,8)}return e.createBytes(s,i)},e.createBytes=function(t,e){for(var n=0,r=0,a=0,i=new Array(e.length),s=new Array(e.length),u=0;u<e.length;u++){var l=e[u].dataCount,c=e[u].totalCount-l;r=Math.max(r,l),a=Math.max(a,c),i[u]=new Array(l);for(var h=0;h<i[u].length;h++)i[u][h]=255&t.buffer[h+n];n+=l;var m=d.getErrorCorrectPolynomial(c),p=new o(i[u],m.getLength()-1),f=p.mod(m);s[u]=new Array(m.getLength()-1);for(var h=0;h<s[u].length;h++){var g=h+f.getLength()-s[u].length;s[u][h]=g>=0?f.get(g):0}}for(var v=0,h=0;h<e.length;h++)v+=e[h].totalCount;for(var k=new Array(v),w=0,h=0;h<r;h++)for(var u=0;u<e.length;u++)h<i[u].length&&(k[w++]=i[u][h]);for(var h=0;h<a;h++)for(var u=0;u<e.length;u++)h<s[u].length&&(k[w++]=s[u][h]);return k};for(var c={MODE_NUMBER:1,MODE_ALPHA_NUM:2,MODE_8BIT_BYTE:4,MODE_KANJI:8},h={L:1,M:0,Q:3,H:2},m={PATTERN000:0,PATTERN001:1,PATTERN010:2,PATTERN011:3,PATTERN100:4,PATTERN101:5,PATTERN110:6,PATTERN111:7},d={PATTERN_POSITION_TABLE:[[],[6,18],[6,22],[6,26],[6,30],[6,34],[6,22,38],[6,24,42],[6,26,46],[6,28,50],[6,30,54],[6,32,58],[6,34,62],[6,26,46,66],[6,26,48,70],[6,26,50,74],[6,30,54,78],[6,30,56,82],[6,30,58,86],[6,34,62,90],[6,28,50,72,94],[6,26,50,74,98],[6,30,54,78,102],[6,28,54,80,106],[6,32,58,84,110],[6,30,58,86,114],[6,34,62,90,118],[6,26,50,74,98,122],[6,30,54,78,102,126],[6,26,52,78,104,130],[6,30,56,82,108,134],[6,34,60,86,112,138],[6,30,58,86,114,142],[6,34,62,90,118,146],[6,30,54,78,102,126,150],[6,24,50,76,102,128,154],[6,28,54,80,106,132,158],[6,32,58,84,110,136,162],[6,26,54,82,110,138,166],[6,30,58,86,114,142,170]],G15:1335,G18:7973,G15_MASK:21522,getBCHTypeInfo:function(t){for(var e=t<<10;d.getBCHDigit(e)-d.getBCHDigit(d.G15)>=0;)e^=d.G15<<d.getBCHDigit(e)-d.getBCHDigit(d.G15);return(t<<10|e)^d.G15_MASK},getBCHTypeNumber:function(t){for(var e=t<<12;d.getBCHDigit(e)-d.getBCHDigit(d.G18)>=0;)e^=d.G18<<d.getBCHDigit(e)-d.getBCHDigit(d.G18);return t<<12|e},getBCHDigit:function(t){for(var e=0;0!=t;)e++,t>>>=1;return e},getPatternPosition:function(t){return d.PATTERN_POSITION_TABLE[t-1]},getMask:function(t,e,n){switch(t){case m.PATTERN000:return(e+n)%2==0;case m.PATTERN001:return e%2==0;case m.PATTERN010:return n%3==0;case m.PATTERN011:return(e+n)%3==0;case m.PATTERN100:return(Math.floor(e/2)+Math.floor(n/3))%2==0;case m.PATTERN101:return e*n%2+e*n%3==0;case m.PATTERN110:return(e*n%2+e*n%3)%2==0;case m.PATTERN111:return(e*n%3+(e+n)%2)%2==0;default:throw new Error("bad maskPattern:"+t)}},getErrorCorrectPolynomial:function(t){for(var e=new o([1],0),n=0;n<t;n++)e=e.multiply(new o([1,p.gexp(n)],0));return e},getLengthInBits:function(t,e){if(1<=e&&e<10)switch(t){case c.MODE_NUMBER:return 10;case c.MODE_ALPHA_NUM:return 9;case c.MODE_8BIT_BYTE:return 8;case c.MODE_KANJI:return 8;default:throw new Error("mode:"+t)}else if(e<27)switch(t){case c.MODE_NUMBER:return 12;case c.MODE_ALPHA_NUM:return 11;case c.MODE_8BIT_BYTE:return 16;case c.MODE_KANJI:return 10;default:throw new Error("mode:"+t)}else{if(!(e<41))throw new Error("type:"+e);switch(t){case c.MODE_NUMBER:return 14;case c.MODE_ALPHA_NUM:return 13;case c.MODE_8BIT_BYTE:return 16;case c.MODE_KANJI:return 12;default:throw new Error("mode:"+t)}}},getLostPoint:function(t){for(var e=t.getModuleCount(),n=0,o=0;o<e;o++)for(var r=0;r<e;r++){for(var a=0,i=t.isDark(o,r),s=-1;s<=1;s++)if(!(o+s<0||e<=o+s))for(var u=-1;u<=1;u++)r+u<0||e<=r+u||0==s&&0==u||i==t.isDark(o+s,r+u)&&a++;a>5&&(n+=3+a-5)}for(var o=0;o<e-1;o++)for(var r=0;r<e-1;r++){var l=0;t.isDark(o,r)&&l++,t.isDark(o+1,r)&&l++,t.isDark(o,r+1)&&l++,t.isDark(o+1,r+1)&&l++,0!=l&&4!=l||(n+=3)}for(var o=0;o<e;o++)for(var r=0;r<e-6;r++)t.isDark(o,r)&&!t.isDark(o,r+1)&&t.isDark(o,r+2)&&t.isDark(o,r+3)&&t.isDark(o,r+4)&&!t.isDark(o,r+5)&&t.isDark(o,r+6)&&(n+=40);for(var r=0;r<e;r++)for(var o=0;o<e-6;o++)t.isDark(o,r)&&!t.isDark(o+1,r)&&t.isDark(o+2,r)&&t.isDark(o+3,r)&&t.isDark(o+4,r)&&!t.isDark(o+5,r)&&t.isDark(o+6,r)&&(n+=40);for(var c=0,r=0;r<e;r++)for(var o=0;o<e;o++)t.isDark(o,r)&&c++;var h=Math.abs(100*c/e/e-50)/5;return n+=10*h}},p={glog:function(t){if(t<1)throw new Error("glog("+t+")");return p.LOG_TABLE[t]},gexp:function(t){for(;t<0;)t+=255;for(;t>=256;)t-=255;return p.EXP_TABLE[t]},EXP_TABLE:new Array(256),LOG_TABLE:new Array(256)},f=0;f<8;f++)p.EXP_TABLE[f]=1<<f;for(var f=8;f<256;f++)p.EXP_TABLE[f]=p.EXP_TABLE[f-4]^p.EXP_TABLE[f-5]^p.EXP_TABLE[f-6]^p.EXP_TABLE[f-8];for(var f=0;f<255;f++)p.LOG_TABLE[p.EXP_TABLE[f]]=f;o.prototype={get:function(t){return this.num[t]},getLength:function(){return this.num.length},multiply:function(t){for(var e=new Array(this.getLength()+t.getLength()-1),n=0;n<this.getLength();n++)for(var r=0;r<t.getLength();r++)e[n+r]^=p.gexp(p.glog(this.get(n))+p.glog(t.get(r)));return new o(e,0)},mod:function(t){if(this.getLength()-t.getLength()<0)return this;for(var e=p.glog(this.get(0))-p.glog(t.get(0)),n=new Array(this.getLength()),r=0;r<this.getLength();r++)n[r]=this.get(r);for(var r=0;r<t.getLength();r++)n[r]^=p.gexp(p.glog(t.get(r))+e);return new o(n,0).mod(t)}},r.RS_BLOCK_TABLE=[[1,26,19],[1,26,16],[1,26,13],[1,26,9],[1,44,34],[1,44,28],[1,44,22],[1,44,16],[1,70,55],[1,70,44],[2,35,17],[2,35,13],[1,100,80],[2,50,32],[2,50,24],[4,25,9],[1,134,108],[2,67,43],[2,33,15,2,34,16],[2,33,11,2,34,12],[2,86,68],[4,43,27],[4,43,19],[4,43,15],[2,98,78],[4,49,31],[2,32,14,4,33,15],[4,39,13,1,40,14],[2,121,97],[2,60,38,2,61,39],[4,40,18,2,41,19],[4,40,14,2,41,15],[2,146,116],[3,58,36,2,59,37],[4,36,16,4,37,17],[4,36,12,4,37,13],[2,86,68,2,87,69],[4,69,43,1,70,44],[6,43,19,2,44,20],[6,43,15,2,44,16],[4,101,81],[1,80,50,4,81,51],[4,50,22,4,51,23],[3,36,12,8,37,13],[2,116,92,2,117,93],[6,58,36,2,59,37],[4,46,20,6,47,21],[7,42,14,4,43,15],[4,133,107],[8,59,37,1,60,38],[8,44,20,4,45,21],[12,33,11,4,34,12],[3,145,115,1,146,116],[4,64,40,5,65,41],[11,36,16,5,37,17],[11,36,12,5,37,13],[5,109,87,1,110,88],[5,65,41,5,66,42],[5,54,24,7,55,25],[11,36,12],[5,122,98,1,123,99],[7,73,45,3,74,46],[15,43,19,2,44,20],[3,45,15,13,46,16],[1,135,107,5,136,108],[10,74,46,1,75,47],[1,50,22,15,51,23],[2,42,14,17,43,15],[5,150,120,1,151,121],[9,69,43,4,70,44],[17,50,22,1,51,23],[2,42,14,19,43,15],[3,141,113,4,142,114],[3,70,44,11,71,45],[17,47,21,4,48,22],[9,39,13,16,40,14],[3,135,107,5,136,108],[3,67,41,13,68,42],[15,54,24,5,55,25],[15,43,15,10,44,16],[4,144,116,4,145,117],[17,68,42],[17,50,22,6,51,23],[19,46,16,6,47,17],[2,139,111,7,140,112],[17,74,46],[7,54,24,16,55,25],[34,37,13],[4,151,121,5,152,122],[4,75,47,14,76,48],[11,54,24,14,55,25],[16,45,15,14,46,16],[6,147,117,4,148,118],[6,73,45,14,74,46],[11,54,24,16,55,25],[30,46,16,2,47,17],[8,132,106,4,133,107],[8,75,47,13,76,48],[7,54,24,22,55,25],[22,45,15,13,46,16],[10,142,114,2,143,115],[19,74,46,4,75,47],[28,50,22,6,51,23],[33,46,16,4,47,17],[8,152,122,4,153,123],[22,73,45,3,74,46],[8,53,23,26,54,24],[12,45,15,28,46,16],[3,147,117,10,148,118],[3,73,45,23,74,46],[4,54,24,31,55,25],[11,45,15,31,46,16],[7,146,116,7,147,117],[21,73,45,7,74,46],[1,53,23,37,54,24],[19,45,15,26,46,16],[5,145,115,10,146,116],[19,75,47,10,76,48],[15,54,24,25,55,25],[23,45,15,25,46,16],[13,145,115,3,146,116],[2,74,46,29,75,47],[42,54,24,1,55,25],[23,45,15,28,46,16],[17,145,115],[10,74,46,23,75,47],[10,54,24,35,55,25],[19,45,15,35,46,16],[17,145,115,1,146,116],[14,74,46,21,75,47],[29,54,24,19,55,25],[11,45,15,46,46,16],[13,145,115,6,146,116],[14,74,46,23,75,47],[44,54,24,7,55,25],[59,46,16,1,47,17],[12,151,121,7,152,122],[12,75,47,26,76,48],[39,54,24,14,55,25],[22,45,15,41,46,16],[6,151,121,14,152,122],[6,75,47,34,76,48],[46,54,24,10,55,25],[2,45,15,64,46,16],[17,152,122,4,153,123],[29,74,46,14,75,47],[49,54,24,10,55,25],[24,45,15,46,46,16],[4,152,122,18,153,123],[13,74,46,32,75,47],[48,54,24,14,55,25],[42,45,15,32,46,16],[20,147,117,4,148,118],[40,75,47,7,76,48],[43,54,24,22,55,25],[10,45,15,67,46,16],[19,148,118,6,149,119],[18,75,47,31,76,48],[34,54,24,34,55,25],[20,45,15,61,46,16]],r.getRSBlocks=function(t,e){var n=r.getRsBlockTable(t,e);if(void 0==n)throw new Error("bad rs block @ typeNumber:"+t+"/errorCorrectLevel:"+e);for(var o=n.length/3,a=[],i=0;i<o;i++)for(var s=n[3*i+0],u=n[3*i+1],l=n[3*i+2],c=0;c<s;c++)a.push(new r(u,l));return a},r.getRsBlockTable=function(t,e){switch(e){case h.L:return r.RS_BLOCK_TABLE[4*(t-1)+0];case h.M:return r.RS_BLOCK_TABLE[4*(t-1)+1];case h.Q:return r.RS_BLOCK_TABLE[4*(t-1)+2];case h.H:return r.RS_BLOCK_TABLE[4*(t-1)+3];default:return}},a.prototype={get:function(t){var e=Math.floor(t/8);return 1==(this.buffer[e]>>>7-t%8&1)},put:function(t,e){for(var n=0;n<e;n++)this.putBit(1==(t>>>e-n-1&1))},getLengthInBits:function(){return this.length},putBit:function(t){var e=Math.floor(this.length/8);this.buffer.length<=e&&this.buffer.push(0),t&&(this.buffer[e]|=128>>>this.length%8),this.length++}};var g=[[17,14,11,7],[32,26,20,14],[53,42,32,24],[78,62,46,34],[106,84,60,44],[134,106,74,58],[154,122,86,64],[192,152,108,84],[230,180,130,98],[271,213,151,119],[321,251,177,137],[367,287,203,155],[425,331,241,177],[458,362,258,194],[520,412,292,220],[586,450,322,250],[644,504,364,280],[718,560,394,310],[792,624,442,338],[858,666,482,382],[929,711,509,403],[1003,779,565,439],[1091,857,611,461],[1171,911,661,511],[1273,997,715,535],[1367,1059,751,593],[1465,1125,805,625],[1528,1190,868,658],[1628,1264,908,698],[1732,1370,982,742],[1840,1452,1030,790],[1952,1538,1112,842],[2068,1628,1168,898],[2188,1722,1228,958],[2303,1809,1283,983],[2431,1911,1351,1051],[2563,1989,1423,1093],[2699,2099,1499,1139],[2809,2213,1579,1219],[2953,2331,1663,1273]],v=function(){var t=function(t,e){this._el=t,this._htOption=e};return t.prototype.draw=function(t){function e(t,e){var n=document.createElementNS("http://www.w3.org/2000/svg",t);for(var o in e)e.hasOwnProperty(o)&&n.setAttribute(o,e[o]);return n}var n=this._htOption,o=this._el,r=t.getModuleCount();Math.floor(n.width/r),Math.floor(n.height/r);this.clear();var a=e("svg",{viewBox:"0 0 "+String(r)+" "+String(r),width:"100%",height:"100%",fill:n.colorLight});a.setAttributeNS("http://www.w3.org/2000/xmlns/","xmlns:xlink","http://www.w3.org/1999/xlink"),o.appendChild(a),a.appendChild(e("rect",{fill:n.colorLight,width:"100%",height:"100%"})),a.appendChild(e("rect",{fill:n.colorDark,width:"1",height:"1",id:"template"}));for(var i=0;i<r;i++)for(var s=0;s<r;s++)if(t.isDark(i,s)){var u=e("use",{x:String(s),y:String(i)});u.setAttributeNS("http://www.w3.org/1999/xlink","href","#template"),a.appendChild(u)}},t.prototype.clear=function(){for(;this._el.hasChildNodes();)this._el.removeChild(this._el.lastChild)},t}(),k="svg"===document.documentElement.tagName.toLowerCase(),w=k?v:i()?function(){function t(){this._elImage.src=this._elCanvas.toDataURL("image/png"),this._elImage.style.display="block",this._elCanvas.style.display="none"}function e(t,e){var n=this;if(n._fFail=e,n._fSuccess=t,null===n._bSupportDataURI){var o=document.createElement("img"),r=function(){n._bSupportDataURI=!1,n._fFail&&n._fFail.call(n)},a=function(){n._bSupportDataURI=!0,n._fSuccess&&n._fSuccess.call(n)};return o.onabort=r,o.onerror=r,o.onload=a,void(o.src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAHElEQVQI12P4//8/w38GIAXDIBKE0DHxgljNBAAO9TXL0Y4OHwAAAABJRU5ErkJggg==")}n._bSupportDataURI===!0&&n._fSuccess?n._fSuccess.call(n):n._bSupportDataURI===!1&&n._fFail&&n._fFail.call(n)}if(this._android&&this._android<=2.1){var n=1/window.devicePixelRatio,o=CanvasRenderingContext2D.prototype.drawImage;CanvasRenderingContext2D.prototype.drawImage=function(t,e,r,a,i,s,u,l,c){if("nodeName"in t&&/img/i.test(t.nodeName))for(var h=arguments.length-1;h>=1;h--)arguments[h]=arguments[h]*n;else"undefined"==typeof l&&(arguments[1]*=n,arguments[2]*=n,arguments[3]*=n,arguments[4]*=n);o.apply(this,arguments)}}var r=function(t,e){this._bIsPainted=!1,this._android=s(),this._htOption=e,this._elCanvas=document.createElement("canvas"),this._elCanvas.width=e.width,this._elCanvas.height=e.height,t.appendChild(this._elCanvas),this._el=t,this._oContext=this._elCanvas.getContext("2d"),this._bIsPainted=!1,this._elImage=document.createElement("img"),this._elImage.alt="Scan me!",this._elImage.style.display="none",this._el.appendChild(this._elImage),this._bSupportDataURI=null};return r.prototype.draw=function(t){var e=this._elImage,n=this._oContext,o=this._htOption,r=t.getModuleCount(),a=o.width/r,i=o.height/r,s=Math.round(a),u=Math.round(i);e.style.display="none",this.clear();for(var l=0;l<r;l++)for(var c=0;c<r;c++){var h=t.isDark(l,c),m=c*a,d=l*i;n.strokeStyle=h?o.colorDark:o.colorLight,n.lineWidth=1,n.fillStyle=h?o.colorDark:o.colorLight,n.fillRect(m,d,a,i),n.strokeRect(Math.floor(m)+.5,Math.floor(d)+.5,s,u),n.strokeRect(Math.ceil(m)-.5,Math.ceil(d)-.5,s,u)}this._bIsPainted=!0},r.prototype.makeImage=function(){this._bIsPainted&&e.call(this,t)},r.prototype.isPainted=function(){return this._bIsPainted},r.prototype.clear=function(){this._oContext.clearRect(0,0,this._elCanvas.width,this._elCanvas.height),this._bIsPainted=!1},r.prototype.round=function(t){return t?Math.floor(1e3*t)/1e3:t},r}():function(){var t=function(t,e){this._el=t,this._htOption=e};return t.prototype.draw=function(t){for(var e=this._htOption,n=this._el,o=t.getModuleCount(),r=Math.floor(e.width/o),a=Math.floor(e.height/o),i=['<table style="border:0;border-collapse:collapse;">'],s=0;s<o;s++){i.push("<tr>");for(var u=0;u<o;u++)i.push('<td style="border:0;border-collapse:collapse;padding:0;margin:0;width:'+r+"px;height:"+a+"px;background-color:"+(t.isDark(s,u)?e.colorDark:e.colorLight)+';"></td>');i.push("</tr>")}i.push("</table>"),n.innerHTML=i.join("");var l=n.childNodes[0],c=(e.width-l.offsetWidth)/2,h=(e.height-l.offsetHeight)/2;c>0&&h>0&&(l.style.margin=h+"px "+c+"px")},t.prototype.clear=function(){this._el.innerHTML=""},t}();n=function(t,e){if(this._htOption={width:256,height:256,typeNumber:4,colorDark:"#000000",colorLight:"#ffffff",correctLevel:h.H},"string"==typeof e&&(e={text:e}),e)for(var n in e)this._htOption[n]=e[n];"string"==typeof t&&(t=document.getElementById(t)),this._htOption.useSVG&&(w=v),this._android=s(),this._el=t,this._oQRCode=null,this._oDrawing=new w(this._el,this._htOption),this._htOption.text&&this.makeCode(this._htOption.text)},n.prototype.makeCode=function(t){this._oQRCode=new e(u(t,this._htOption.correctLevel),this._htOption.correctLevel),this._oQRCode.addData(t),this._oQRCode.make(),this._el.title=t,this._oDrawing.draw(this._oQRCode),this.makeImage()},n.prototype.makeImage=function(){"function"==typeof this._oDrawing.makeImage&&(!this._android||this._android>=3)&&this._oDrawing.makeImage()},n.prototype.clear=function(){this._oDrawing.clear()},n.CorrectLevel=h}(),t.exports=n},1410:function(t,e,n){var o,r=n(1190);o=r.currentEnv?r.currentEnv:r.currentEnv=new r.Environment([],{autoescape:!0});var a=(n(1191)(o),r.webpackDependencies||(r.webpackDependencies={})),i=n(1193);!function(){(r.nunjucksPrecompiled=r.nunjucksPrecompiled||{})["client/pages/news/detail-comment.html"]=function(){function t(t,e,n,o,r){var a=null,i=null,s="";try{var u=null;s+='<dd class="comment-item">\n  <div class="comment-avatar">\n    ';var l;if(l=o.memberLookup(o.memberLookup(o.contextOrFrameLookup(e,n,"comment"),"author"),"avatarurl")?o.memberLookup(o.memberLookup(o.contextOrFrameLookup(e,n,"comment"),"author"),"avatarurl"):"http://p0.meituan.net/movie/7dd82a16316ab32c8359debdb04396ef2897.png",n.set("img_path",l,!0),n.topLevel&&e.setVariable("img_path",l),n.topLevel&&e.addExport("img_path",l),s+='\n    <img src="http://p1.meituan.net/50.50/movie/58d3cb55f20171b337d1da4b33d2e2531171.png" alt=""\n      style="background-image: url(',s+=o.suppressValue(t.getFilter("venus").call(e,o.contextOrFrameLookup(e,n,"img_path"),50,50),t.opts.autoescape),s+=')"/>\n    <div class="level level-v',s+=o.suppressValue(o.memberLookup(o.memberLookup(o.contextOrFrameLookup(e,n,"comment"),"author"),"userLevel"),t.opts.autoescape),s+='"></div>\n  </div>\n  <div class="comment-main">\n    <div class="comment-info">\n      <div class="comment-action" data-val="{ id: ',s+=o.suppressValue(o.memberLookup(o.contextOrFrameLookup(e,n,"comment"),"id"),t.opts.autoescape),s+=' }">\n          <a href="javascript:" class="comment-report" data-commentid="',s+=o.suppressValue(o.memberLookup(o.contextOrFrameLookup(e,n,"comment"),"id"),t.opts.autoescape),s+='"\n            data-act="report-news-comment">举报</a>\n          <span class="like-comment',o.memberLookup(o.contextOrFrameLookup(e,n,"comment"),"liked")&&(s+=" liked"),s+='" data-commentid="',s+=o.suppressValue(o.memberLookup(o.contextOrFrameLookup(e,n,"comment"),"id"),t.opts.autoescape),s+='"\n          data-act="like-news-comment">\n            <span class="like-icon"></span>\n            &nbsp;\n            <span class="like-comment-count" data-count="',s+=o.suppressValue(o.memberLookup(o.contextOrFrameLookup(e,n,"comment"),"upCount"),t.opts.autoescape),s+='">\n              ',s+=o.suppressValue(0==o.memberLookup(o.contextOrFrameLookup(e,n,"comment"),"upCount")?"赞":t.getFilter("numcut").call(e,o.memberLookup(o.contextOrFrameLookup(e,n,"comment"),"upCount")),t.opts.autoescape),s+='\n            </span>\n          </span>\n      </div>\n      <div class="comment-nickname">\n        ',s+=o.suppressValue(o.memberLookup(o.memberLookup(o.contextOrFrameLookup(e,n,"comment"),"author"),"nickName"),t.opts.autoescape),s+='\n      </div>\n      <div class="comment-time">\n        ',s+=o.suppressValue(t.getFilter("timeAgo").call(e,o.memberLookup(o.contextOrFrameLookup(e,n,"comment"),"created")),t.opts.autoescape),s+="&nbsp;",s+=o.suppressValue(o.memberLookup(o.memberLookup(o.memberLookup(o.contextOrFrameLookup(e,n,"comment"),"author"),"city"),"nm"),t.opts.autoescape),s+='\n      </div>\n    </div>\n    <div class="comment-content">\n      ',s+=o.suppressValue(o.memberLookup(o.contextOrFrameLookup(e,n,"comment"),"text"),t.opts.autoescape),s+="\n    </div>\n    ",o.memberLookup(o.contextOrFrameLookup(e,n,"comment"),"refComment")){s+="\n    ";var c;c=o.memberLookup(o.contextOrFrameLookup(e,n,"comment"),"refComment"),n.set("rcomment",c,!0),n.topLevel&&e.setVariable("rcomment",c),n.topLevel&&e.addExport("rcomment",c),s+='\n    <div class="ref-comment">\n      <div class="ref-comment-traingle"></div>\n      <div class="ref-comment-author">回复&nbsp;',s+=o.suppressValue(o.memberLookup(o.memberLookup(o.contextOrFrameLookup(e,n,"rcomment"),"author"),"nickName"),t.opts.autoescape),s+='</div>\n      <div class="ref-comment-content">',s+=o.suppressValue(o.memberLookup(o.contextOrFrameLookup(e,n,"rcomment"),"text"),t.opts.autoescape),s+="</div>\n    </div>\n    "}s+="\n  </div>\n</dd>\n",u?u.rootRenderFunc(t,e,n,o,r):r(null,s)}catch(t){r(o.handleError(t,a,i))}}return{root:t}}()}(),t.exports=i(r,o,r.nunjucksPrecompiled["client/pages/news/detail-comment.html"],a)},1411:1283});