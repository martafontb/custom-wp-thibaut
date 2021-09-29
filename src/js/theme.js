AOS.init();

document.addEventListener("DOMContentLoaded", function(event) { 
  //do work
  window.scrollTo(0, 0);
});

// Scroll certain amounts from current position 
window.scrollBy({ 
  top: 0, // could be negative value
  left: 0, 
  behavior: 'smooth' 
});

