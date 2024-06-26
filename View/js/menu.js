document.addEventListener("DOMContentLoaded", function() {
    var currentUrl = window.location.href;
    var menuItems = document.querySelectorAll(".boxNav ul li a");
  
    menuItems.forEach(function(item) {
      if (currentUrl === item.href) {
        item.classList.add("active");
      }
    });
});