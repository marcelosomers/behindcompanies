$(document).ready(function() {
  // The Syndicate BuySellAds PRO Code
  (function(){
      var bsa = document.createElement('script');
          bsa.type = 'text/javascript';
          bsa.async = true;
          bsa.src = 'http://cdn.buysellads.com/ac/pro.js';
      document.getElementsByTagName('head')[0].appendChild(bsa);
  })();

  // Fusion Ads Code
  (function(){
    var fusion = document.createElement('script');
    fusion.src = window.location.protocol + '//adn.fusionads.net/api/1.0/ad.js?zoneid=178&rand=' + Math.floor(Math.random()*9999999);
    fusion.async = true;
    (document.head || document.getElementsByTagName('head')[0]).appendChild(fusion);
  })();

  // Mobile Nav
  $(".js-nav-toggle").on('click', function() {
      $(".js-nav").slideToggle("normal", function() {
          easing : "easeOutSine";
      });
      $(".nav-chevron").toggleClass('rotate');
  });
});