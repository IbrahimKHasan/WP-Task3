import{m as n,a as r}from"./p-99303c1a.js";import{P as e}from"./p-49d176ca.js";export default function(t){var o=t.config,a=t.selector,i=t.src,u=t.preload;return new Promise(function(){var t=n(regeneratorRuntime.mark((function n(t){var c,s,w;return regeneratorRuntime.wrap((function(n){for(;;)switch(n.prev=n.next){case 0:if(window.Hls){n.next=6;break}case 1:if(window.hasOwnProperty("Hls")){n.next=6;break}return n.next=4,new Promise((function(n){return setTimeout(n,50)}));case 4:n.next=1;break;case 6:if(!window.Hls.isSupported()){n.next=14;break}return s=!["metadata","none"].includes(u),null!==(c=wp)&&void 0!==c&&c.blocks&&(s=!0),(w=new window.Hls({autoStartLoad:s})).loadSource(i),w.on(window.Hls.Events.LEVEL_SWITCHED,(function(n,r){a.closest(".presto-player__wrapper").querySelector(".plyr__menu__container [data-plyr='quality'][value='0'] span").innerHTML=w.autoLevelEnabled?"AUTO (".concat(w.levels[r.level].height,"p)"):"AUTO"})),w.on(window.Hls.Events.MANIFEST_PARSED,(function(){var n=w.levels.map((function(n){return n.height}));n.unshift(0);var i=n.findIndex((function(n){var r;return n===parseInt(null===(r=prestoPlayer)||void 0===r?void 0:r.hls_start_level)}));w.startLevel=i?i-1:2,o.quality={default:0,options:n,forced:!0,onChange:function(n){0===n?prestoHLS.currentLevel=-1:prestoHLS.levels.forEach((function(r,e){r.height===n&&(console.log("Found quality match with "+n),prestoHLS.currentLevel=e)}))}},w.attachMedia(a),window.prestoHLS=w;var u=new e(a,r({},o));return u.hls=w,u.on("waiting",(function n(){w.startLoad(-1),u.off("waiting",n)})),u.on("languagechange",(function(){setTimeout((function(){return w.subtitleTrack=u.currentTrack}),50)})),t(u)})),n.abrupt("return");case 14:return n.abrupt("return",t(new e(a,r({},o))));case 15:case"end":return n.stop()}}),n)})));return function(n,r){return t.apply(this,arguments)}}())}