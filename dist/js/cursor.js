!function(e){var t={};function o(r){if(t[r])return t[r].exports;var n=t[r]={i:r,l:!1,exports:{}};return e[r].call(n.exports,n,n.exports,o),n.l=!0,n.exports}o.m=e,o.c=t,o.d=function(e,t,r){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(e,t){if(1&t&&(e=o(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(o.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)o.d(r,n,function(t){return e[t]}.bind(null,n));return r},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="",o(o.s=2)}([,,function(e,t,o){e.exports=o(3)},function(e,t){const o=document.querySelector("div.cursors"),r=document.querySelector("div.arrow"),n=o.querySelectorAll("div"),u=document.querySelectorAll("a"),c=document.querySelector("footer");let l=300,i=300;n.forEach((e,t)=>{let o=300,r=300,n=.3-.015*t;const u=function(){o+=(l-o)*n,r+=(i-r)*n,e.style.left=o+"px",e.style.top=r+"px",requestAnimationFrame(u)};u()}),document.addEventListener("mousemove",(function(e){l=e.pageX,i=e.pageY})),u.forEach(e=>{e.addEventListener("mouseover",(function(){n.forEach(e=>e.style.backgroundColor="transparent")})),e.addEventListener("mouseout",(function(){n.forEach(e=>e.style.backgroundColor="rgba(202,207,199, 0.1)")}))}),c.addEventListener("mouseover",(function(){r.classList.add("footer")})),c.addEventListener("mouseout",(function(){r.classList.remove("footer")})),window.addEventListener("scroll",e=>{const t=parseInt(cursor.getAttribute("data-fromTop"));cursor.style.top=scrollY+t+"px"})}]);
//# sourceMappingURL=cursor.js.map