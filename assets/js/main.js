document.addEventListener("DOMContentLoaded",function(){let d=document.body;var e=localStorage.getItem("darkMode");let t=document.getElementById("darkModeToggle");e?"enabled"===e&&(d.classList.add("dark-mode"),t.classList.toggle("dark-mode")):window.matchMedia("(prefers-color-scheme: dark)").matches&&d.classList.add("dark-mode"),t&&t.addEventListener("click",()=>{d.classList.toggle("dark-mode");var e=d.classList.contains("dark-mode")?"enabled":"disabled";localStorage.setItem("darkMode",e),t.classList.toggle("dark-mode")})});let lastScrollTop=0;window.addEventListener("scroll",function(){var e=window.pageYOffset||document.documentElement.scrollTop,d=document.body;0!==e&&e>lastScrollTop?d.classList.add("small"):d.classList.remove("small"),lastScrollTop=e<=0?0:e});