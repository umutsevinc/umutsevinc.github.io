(window.webpackJsonp=window.webpackJsonp||[]).push([[0],{132:function(e,t,a){"use strict";a.r(t);var n=a(0),r=a.n(n),c=a(34),i=a.n(c),o=(a(80),a(9)),l=a(10),s=a(12),u=a(11),d=a(13),m=a(4),h=a(5),p=a(52),f=a(28),g=a(27),v=a(49),b={position:"relative",width:"100%",height:"100%"},y={position:"relative",width:"100%",overflow:"hidden",minHeight:"100%"},E={position:"absolute",willChange:"transform, width, height, opacity"},O=function(e){function t(){var e,a;Object(o.a)(this,t);for(var n=arguments.length,r=new Array(n),c=0;c<n;c++)r[c]=arguments[c];return(a=Object(s.a)(this,(e=Object(u.a)(t)).call.apply(e,[this].concat(r)))).state={width:0,height:0,open:void 0,lastOpen:void 0},a.scrollOut=function(e){a.props.lockScroll||(a.state.open&&a.toggle(void 0),a.clicked=!1)},a.toggle=function(e){return a.setState(function(t){return{lastOpen:t.open,open:t.open===e?void 0:e}},function(){return a.clicked=!0})},a.resize=function(e,t,n){var r;return a.setState((r={},Object(g.a)(r,e,n.client.width),Object(g.a)(r,t,n.client.height),r))},a.resizeOuter=function(e){return a.resize("widthOuter","heightOuter",e)},a.resizeInner=function(e){return a.resize("width","height",e)},a.update=function(e){var t=e.key,n=e.x,r=e.y,c=e.width,i=e.height,o=a.state.open===t;return{opacity:a.state.open&&!o?0:1,x:o?a.outerRef.scrollLeft:n,y:o?a.outerRef.scrollTop:r,width:o?a.state.width:c,height:o?a.state.heightOuter:i}},a}return Object(d.a)(t,e),Object(l.a)(t,[{key:"componentDidUpdate",value:function(){this.clicked=!1}},{key:"render",value:function(){var e=this,t=this.props,a=t.children,n=t.columns,c=t.margin,i=t.occupySpace,o=t.impl,l=t.config,s=t.data,u=t.keys,d=t.heights,g=t.closeDelay,O=t.lockScroll,j=Object(f.a)(t,["children","columns","margin","occupySpace","impl","config","data","keys","heights","closeDelay","lockScroll"]),w=this.state,k=w.lastOpen,x=w.open,S=w.width,C=0,N=new Array(n).fill(0),z=s.map(function(e,t){var a=i?N.indexOf(Math.min.apply(Math,Object(p.a)(N))):C++%n,r=S/n-c/(1-1/(n+1)),o=r*a,l=(a+1)*c,s=N[a]+c,m="function"===typeof d?d(e):d;return N[a]+=m+c,{x:c?o+l:o,y:s,width:r,height:m,key:u(e),object:e}}),R=O&&x?"hidden":"auto",D=Math.max.apply(Math,Object(p.a)(N))+c;return r.a.createElement(v.a,{client:!0,innerRef:function(t){return e.outerRef=t},onResize:this.resizeOuter},function(t){var n=t.measureRef;return r.a.createElement("div",Object.assign({ref:n,style:Object(h.a)({},b,e.props.style,{overflow:R})},j,{onScroll:e.scrollOut,onWheel:e.scrollOut,onTouchMove:e.scrollOut}),r.a.createElement(v.a,{client:!0,innerRef:function(t){return e.innerRef=t},onResize:e.resizeInner},function(t){var n=t.measureRef;return r.a.createElement("div",{ref:n,style:Object(h.a)({},y,{height:D})},r.a.createElement(m.b,{native:!0,items:z,keys:function(e){return e.key},from:{opacity:0},leave:{opacity:0},enter:e.update,update:e.update,impl:o,config:Object(h.a)({},l,{delay:e.clicked&&!x?g:0})},function(t,n){return function(c){var i=c.opacity,o=c.x,l=c.y,s=c.width,u=c.height;return r.a.createElement(m.c.div,{style:Object(h.a)({},E,{opacity:i,width:s,height:u,zIndex:k===t.key||x===t.key?1e3:n,transform:Object(m.e)([o,l],function(e,t){return"translate3d(".concat(e,"px,").concat(t,"px, 0)")})}),children:a(t.object,x===t.key,function(){return e.toggle(t.key)})})}}))}))})}}]),t}(r.a.Component);O.defaultProps={occupySpace:!0,columns:3,margin:0,heights:400,lockScroll:!1,closeDelay:0};var j=function(e){function t(){return Object(o.a)(this,t),Object(s.a)(this,Object(u.a)(t).apply(this,arguments))}return Object(d.a)(t,e),Object(l.a)(t,[{key:"render",value:function(){var e=this.props,t=e.children,a=e.from,n=void 0===a?{opacity:0,transform:"translate3d(0,40px,0)"}:a,c=e.to,i=void 0===c?{opacity:1,transform:"translate3d(0,0px,0)"}:c,o=Object(f.a)(e,["children","from","to"]),l=r.a.Children.map(t,function(e){return function(t){var a=m.c[e.type]||Object(m.c)(e.type),n=Object(h.a)({},e.props,{style:Object(h.a)({willChange:"opacity, transform"},e.props.style,t)});return r.a.createElement(a,n)}});return r.a.createElement(m.a,Object.assign({native:!0},o,{items:l,keys:l.map(function(e,t){return t}),from:n,to:i,children:function(e){return e}}))}}]),t}(r.a.PureComponent),w=function(e){function t(){return Object(o.a)(this,t),Object(s.a)(this,Object(u.a)(t).apply(this,arguments))}return Object(d.a)(t,e),Object(l.a)(t,[{key:"render",value:function(){var e=this.props,t=e.children,a=e.show,n=e.from,c=void 0===n?{opacity:0}:n,i=e.enter,o=void 0===i?{opacity:1}:i,l=e.leave,s=void 0===l?{opacity:0}:l,u=Object(f.a)(e,["children","show","from","enter","leave"]),d=t.type,p=t.props,g=m.c[d]||Object(m.c)(d),v=function(e){var t=Object(h.a)({},p,{style:Object(h.a)({willChange:"opacity, transform"},p.style,e)});return r.a.createElement(g,t)};return r.a.createElement(m.b,Object.assign({native:!0,items:a},u,{from:c,enter:o,leave:s,children:function(e){return e&&v}}))}}]),t}(r.a.PureComponent),k=[{name:"Saint Petersburg",description:"#f5f7fa \u2192 #c3cfe2",css:"linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%)",height:200},{name:"Deep Blue",description:"#e0c3fc \u2192 #8ec5fc",css:"linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%)",height:200},{name:"Ripe Malinka",description:"#f093fb \u2192 #f5576c",css:"linear-gradient(120deg, #f093fb 0%, #f5576c 100%)",height:200},{name:"Perfect White",description:"#fdfbfb \u2192 #ebedee",css:"linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%)",height:200},{name:"Near Moon",description:"#5ee7df \u2192 #b490ca",css:"linear-gradient(to top, #5ee7df 0%, #b490ca 100%)",height:200},{name:"Wild Apple",description:"#d299c2 \u2192 #fef9d7",css:"linear-gradient(to top, #d299c2 0%, #fef9d7 100%)",height:200}],x=(a(84),a(86),a(88),a(134)),S=function(e){function t(){return Object(o.a)(this,t),Object(s.a)(this,Object(u.a)(t).apply(this,arguments))}return Object(d.a)(t,e),Object(l.a)(t,[{key:"render",value:function(){var e=this.props,t=e.toggle,a=e.name,n=e.description,c=e.css,i=e.active;return r.a.createElement("div",{className:"cell",style:{backgroundImage:c,cursor:i?"auto":"pointer"},onClick:i?void 0:t},r.a.createElement(w,{show:i,delay:i?200:0},r.a.createElement("div",{className:"details"},r.a.createElement(j,{delay:100},r.a.createElement("div",{className:"circle",style:{background:c}}),r.a.createElement("div",{className:"close"},r.a.createElement(x.a,{type:"close",style:{cursor:"pointer"},onClick:t})),r.a.createElement("h1",null,a),r.a.createElement("p",null,n)))),r.a.createElement(w,{show:!i,from:{opacity:0,transform:"translate3d(0,140px,0)"},enter:{opacity:1,transform:"translate3d(0,0px,0)"},leave:{opacity:0,transform:"translate3d(0,-50px,0)"},delay:i?0:100},r.a.createElement("div",{className:"default"},r.a.createElement("div",{style:{zIndex:1}},a))))}}]),t}(n.Component),C=function(e){function t(){var e,a;Object(o.a)(this,t);for(var n=arguments.length,r=new Array(n),c=0;c<n;c++)r[c]=arguments[c];return(a=Object(s.a)(this,(e=Object(u.a)(t)).call.apply(e,[this].concat(r)))).state={data:k},a}return Object(d.a)(t,e),Object(l.a)(t,[{key:"componentWillMount",value:function(){document.addEventListener("DOMContentLoaded",function(){var e=Array.prototype.slice.call(document.querySelectorAll(".navbar-burger"),0);e.length>0&&e.forEach(function(e){e.addEventListener("click",function(){var t=e.dataset.target,a=document.getElementById(t),n=document.getElementById("navbar-top");e.classList.toggle("is-active"),a.classList.toggle("is-active"),n.classList.toggle("is-active")})})})}},{key:"render",value:function(){return r.a.createElement("div",null,r.a.createElement("nav",{id:"navbar-top",class:"navbar is-fixed-top",role:"navigation","aria-label":"main navigation"},r.a.createElement("div",{class:"navbar-brand"},r.a.createElement("a",{class:"navbar-item",href:"https://bulma.io"},r.a.createElement("img",{src:"https://bulma.io/images/bulma-logo.png",width:"112",height:"28"})),r.a.createElement("a",{role:"button",class:"navbar-burger burger","aria-label":"menu","aria-expanded":"false","data-target":"navbarBasicExample"},r.a.createElement("span",{"aria-hidden":"true"}),r.a.createElement("span",{"aria-hidden":"true"}),r.a.createElement("span",{"aria-hidden":"true"}))),r.a.createElement("div",{id:"navbarBasicExample",class:"navbar-menu"},r.a.createElement("div",{class:"navbar-start"},r.a.createElement("a",{class:"navbar-item"},"Experiences"),r.a.createElement("a",{class:"navbar-item"},"Educations"),r.a.createElement("a",{class:"navbar-item"},"Contact")),r.a.createElement("div",{class:"navbar-end"},r.a.createElement("div",{class:"navbar-item"},r.a.createElement("div",{class:"buttons"},r.a.createElement("a",{class:"button is-light"},"GITHUB")))))),r.a.createElement("div",{className:"titleSection"},r.a.createElement("h1",{className:"title"},"Experiences")),r.a.createElement(O,{className:"grid",data:this.state.data,keys:function(e){return e.name},heights:function(e){return e.height},columns:2,margin:50,lockScroll:!0,closeDelay:100,config:m.d.slow},function(e,t,a){return r.a.createElement(S,Object.assign({},e,{active:t,toggle:a}))}),r.a.createElement("div",{className:"titleSection"},r.a.createElement("h1",{className:"title"},"Educations")),r.a.createElement(O,{className:"grid",data:this.state.data,keys:function(e){return e.name},heights:function(e){return e.height},columns:2,margin:50,lockScroll:!0,closeDelay:100,config:m.d.slow},function(e,t,a){return r.a.createElement(S,Object.assign({},e,{active:t,toggle:a}))}))}}]),t}(n.Component);Boolean("localhost"===window.location.hostname||"[::1]"===window.location.hostname||window.location.hostname.match(/^127(?:\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)){3}$/));i.a.render(r.a.createElement(C,null),document.getElementById("root")),"serviceWorker"in navigator&&navigator.serviceWorker.ready.then(function(e){e.unregister()})},75:function(e,t,a){e.exports=a(132)},80:function(e,t,a){},88:function(e,t,a){}},[[75,2,1]]]);
//# sourceMappingURL=main.38b60eb9.chunk.js.map