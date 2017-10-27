/**
 * This script adds the jquery effects to the front page of the Altitude Pro Theme.
 *
 * @package Altitude\JS
 * @author StudioPress
 * @license GPL-2.0+
 */
!function($){document.location.hash&&window.setTimeout(function(){document.location.href+=""},10),$(".genesis-nav-menu a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var t=$(this.hash);if(t=t.length?t:$("[name="+this.hash.slice(1)+"]"),t.length)return $("html,body").animate({scrollTop:t.offset().top},{duration:750,complete:function(){t.focus()}}),!1}})}(jQuery);