import{V as t,a as s,b as o,c as n,d as l,e as i,f as c,g as a,h as r,i as u,j as d,k as v,l as f,m as p,n as E,o as V,p as b,q as y,r as g,s as x,t as h,u as C,v as k,w as S,x as w,y as T,z as M,A as D,B as P,C as z,D as I,E as q}from"./light-f587b8b0.js";import{B as A,x as B}from"./query-assigned-elements-e3b4e82f.js";import"./play-episode-button-e7dace74.js";const L=B`<div
  id="castopod-audio-player"
  class="fixed bottom-0 left-0 flex flex-col w-full bg-elevated border-t border-subtle sm:flex-row z-50"
  data-episode="-1"
  style="display: none;"
>
  <div class="flex items-center">
    <img src="" alt="" class="h-[52px] w-[52px]" loading="lazy" />
    <div class="flex flex-col px-2">
      <p
        class="text-sm w-48 truncate font-semibold"
        title=""
        id="castopod-player-title"
      ></p>
      <p
        class="text-xs w-48 truncate"
        title=""
        id="castopod-player-podcast"
      ></p>
    </div>
  </div>
  <vm-player
    id="castopod-vm-player"
    theme="light"
    language="en"
    icons="castopod-icons"
    class="flex-1"
    style="--vm-player-box-shadow:0; --vm-player-theme: hsl(var(--color-accent-base)); --vm-control-focus-color: hsl(var(--color-accent-contrast)); --vm-menu-item-focus-bg: hsl(var(--color-background-highlight));"
  >
    <vm-audio preload="none" id="testing-audio">
      <source src="" type="" />
    </vm-audio>
    <vm-ui>
      <vm-icon-library name="castopod-icons"></vm-icon-library>
      <vm-controls full-width>
        <vm-playback-control></vm-playback-control>
        <vm-volume-control></vm-volume-control>
        <vm-current-time></vm-current-time>
        <vm-scrubber-control></vm-scrubber-control>
        <vm-end-time></vm-end-time>
        <vm-settings-control></vm-settings-control>
        <vm-default-settings></vm-default-settings>
      </vm-controls>
    </vm-ui>
  </vm-player>
</div>`;A(L,document.body);const e=document.querySelector('vm-icon-library[name="castopod-icons"]');e&&(e.resolver=m=>`/assets/icons/${m}.svg`);customElements.define("vm-player",t);customElements.define("vm-file",s);customElements.define("vm-audio",o);customElements.define("vm-ui",n);customElements.define("vm-default-ui",l);customElements.define("vm-click-to-play",i);customElements.define("vm-captions",c);customElements.define("vm-loading-screen",a);customElements.define("vm-default-controls",r);customElements.define("vm-default-settings",u);customElements.define("vm-controls",d);customElements.define("vm-playback-control",v);customElements.define("vm-volume-control",f);customElements.define("vm-scrubber-control",p);customElements.define("vm-current-time",E);customElements.define("vm-end-time",V);customElements.define("vm-settings-control",b);customElements.define("vm-time-progress",y);customElements.define("vm-control",g);customElements.define("vm-icon",x);customElements.define("vm-icon-library",h);customElements.define("vm-tooltip",C);customElements.define("vm-mute-control",k);customElements.define("vm-slider",S);customElements.define("vm-time",w);customElements.define("vm-menu",T);customElements.define("vm-menu-item",M);customElements.define("vm-submenu",D);customElements.define("vm-menu-radio-group",P);customElements.define("vm-menu-radio",z);customElements.define("vm-settings",I);customElements.define("vm-skeleton",q);
//# sourceMappingURL=audio-player.ts-1880618b.js.map
