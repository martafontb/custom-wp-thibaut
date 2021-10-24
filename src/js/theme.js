const scrollToTop = document.querySelector("div.back-to-top");

scrollToTop.addEventListener("click", function(){
  // Scroll certain amounts from current position 
  window.scrollTo({ 
    top: 0, // could be negative value
    left: 0, 
    behavior: 'smooth' 
  });
});

AOS.init();


