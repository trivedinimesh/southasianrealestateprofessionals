(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[3424,5424,4811],{4019:function(e,t){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.getDomainLocale=function(e,t,n,r){return!1};("function"===typeof t.default||"object"===typeof t.default&&null!==t.default)&&"undefined"===typeof t.default.__esModule&&(Object.defineProperty(t.default,"__esModule",{value:!0}),Object.assign(t.default,t),e.exports=t.default)},7942:function(e,t,n){"use strict";var r=n(5696);Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var o,u=(o=n(7294))&&o.__esModule?o:{default:o},a=n(4957),l=n(7995),f=n(647),c=n(1992),i=n(639),s=n(4019),d=n(227);var p="undefined"!==typeof u.default.useTransition,v={};function y(e,t,n,r){if(e&&a.isLocalURL(t)){e.prefetch(t,n,r).catch((function(e){0}));var o=r&&"undefined"!==typeof r.locale?r.locale:e&&e.locale;v[t+"%"+n+(o?"%"+o:"")]=!0}}var b=u.default.forwardRef((function(e,t){var n,o=e.href,b=e.as,h=e.children,_=e.prefetch,g=e.passHref,C=e.replace,M=e.shallow,x=e.scroll,m=e.locale,j=e.onClick,E=e.onMouseEnter,O=e.legacyBehavior,k=void 0===O?!0!==Boolean(!1):O,L=function(e,t){if(null==e)return{};var n,r,o={},u=Object.keys(e);for(r=0;r<u.length;r++)n=u[r],t.indexOf(n)>=0||(o[n]=e[n]);return o}(e,["href","as","children","prefetch","passHref","replace","shallow","scroll","locale","onClick","onMouseEnter","legacyBehavior"]);n=h,!k||"string"!==typeof n&&"number"!==typeof n||(n=u.default.createElement("a",null,n));var R=!1!==_,w=p?u.default.useTransition():[],P=r(w,2)[1],A=u.default.useContext(f.RouterContext),I=u.default.useContext(c.AppRouterContext);I&&(A=I);var T,U=u.default.useMemo((function(){var e=a.resolveHref(A,o,!0),t=r(e,2),n=t[0],u=t[1];return{href:n,as:b?a.resolveHref(A,b):u||n}}),[A,o,b]),B=U.href,D=U.as,H=u.default.useRef(B),K=u.default.useRef(D);k&&(T=u.default.Children.only(n));var N=k?T&&"object"===typeof T&&T.ref:t,F=i.useIntersection({rootMargin:"200px"}),S=r(F,3),q=S[0],z=S[1],G=S[2],J=u.default.useCallback((function(e){K.current===D&&H.current===B||(G(),K.current=D,H.current=B),q(e),N&&("function"===typeof N?N(e):"object"===typeof N&&(N.current=e))}),[D,N,B,G,q]);u.default.useEffect((function(){var e=z&&R&&a.isLocalURL(B),t="undefined"!==typeof m?m:A&&A.locale,n=v[B+"%"+D+(t?"%"+t:"")];e&&!n&&y(A,B,D,{locale:t})}),[D,B,z,m,R,A]);var Q={ref:J,onClick:function(e){k||"function"!==typeof j||j(e),k&&T.props&&"function"===typeof T.props.onClick&&T.props.onClick(e),e.defaultPrevented||function(e,t,n,r,o,u,l,f,c){if("A"!==e.currentTarget.nodeName.toUpperCase()||!function(e){var t=e.currentTarget.target;return t&&"_self"!==t||e.metaKey||e.ctrlKey||e.shiftKey||e.altKey||e.nativeEvent&&2===e.nativeEvent.which}(e)&&a.isLocalURL(n)){e.preventDefault();var i=function(){t[o?"replace":"push"](n,r,{shallow:u,locale:f,scroll:l})};c?c(i):i()}}(e,A,B,D,C,M,x,m,I?P:void 0)},onMouseEnter:function(e){k||"function"!==typeof E||E(e),k&&T.props&&"function"===typeof T.props.onMouseEnter&&T.props.onMouseEnter(e),a.isLocalURL(B)&&y(A,B,D,{priority:!0})}};if(!k||g||"a"===T.type&&!("href"in T.props)){var V="undefined"!==typeof m?m:A&&A.locale,W=A&&A.isLocaleDomain&&s.getDomainLocale(D,V,A.locales,A.domainLocales);Q.href=W||d.addBasePath(l.addLocale(D,V,A&&A.defaultLocale))}return k?u.default.cloneElement(T,Q):u.default.createElement("a",Object.assign({},L,Q),n)}));t.default=b,("function"===typeof t.default||"object"===typeof t.default&&null!==t.default)&&"undefined"===typeof t.default.__esModule&&(Object.defineProperty(t.default,"__esModule",{value:!0}),Object.assign(t.default,t),e.exports=t.default)},639:function(e,t,n){"use strict";var r=n(5696);Object.defineProperty(t,"__esModule",{value:!0}),t.useIntersection=function(e){var t=e.rootRef,n=e.rootMargin,c=e.disabled||!a,i=o.useRef(),s=o.useState(!1),d=r(s,2),p=d[0],v=d[1],y=o.useState(null),b=r(y,2),h=b[0],_=b[1];o.useEffect((function(){if(a){if(i.current&&(i.current(),i.current=void 0),c||p)return;return h&&h.tagName&&(i.current=function(e,t,n){var r=function(e){var t,n={root:e.root||null,margin:e.rootMargin||""},r=f.find((function(e){return e.root===n.root&&e.margin===n.margin}));if(r&&(t=l.get(r)))return t;var o=new Map,u=new IntersectionObserver((function(e){e.forEach((function(e){var t=o.get(e.target),n=e.isIntersecting||e.intersectionRatio>0;t&&n&&t(n)}))}),e);return t={id:n,observer:u,elements:o},f.push(n),l.set(n,t),t}(n),o=r.id,u=r.observer,a=r.elements;return a.set(e,t),u.observe(e),function(){if(a.delete(e),u.unobserve(e),0===a.size){u.disconnect(),l.delete(o);var t=f.findIndex((function(e){return e.root===o.root&&e.margin===o.margin}));t>-1&&f.splice(t,1)}}}(h,(function(e){return e&&v(e)}),{root:null==t?void 0:t.current,rootMargin:n})),function(){null==i.current||i.current(),i.current=void 0}}if(!p){var e=u.requestIdleCallback((function(){return v(!0)}));return function(){return u.cancelIdleCallback(e)}}}),[h,c,n,t,p]);var g=o.useCallback((function(){v(!1)}),[]);return[_,p,g]};var o=n(7294),u=n(6286),a="function"===typeof IntersectionObserver;var l=new Map,f=[];("function"===typeof t.default||"object"===typeof t.default&&null!==t.default)&&"undefined"===typeof t.default.__esModule&&(Object.defineProperty(t.default,"__esModule",{value:!0}),Object.assign(t.default,t),e.exports=t.default)},1992:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.FullAppTreeContext=t.AppTreeContext=t.AppRouterContext=void 0;var r,o=(r=n(7294))&&r.__esModule?r:{default:r};var u=o.default.createContext(null);t.AppRouterContext=u;var a=o.default.createContext(null);t.AppTreeContext=a;var l=o.default.createContext(null);t.FullAppTreeContext=l},1664:function(e,t,n){e.exports=n(7942)},1163:function(e,t,n){e.exports=n(9898)}}]);