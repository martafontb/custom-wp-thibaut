//menu
function menuToggle(){
    const menu = document.getElementById('menu-overlay');
    const nav = document.querySelector('nav');
  
    menu.classList.toggle('active')
    nav.classList.toggle('dark')
  
   
    if (menu.classList.contains("active")) {   
      
      gsap.to(".burger-top", { rotation: 45, transformOrigin: "50% 50%", y: 8 })
      gsap.to(".burger-bottom", { rotation: -45, transformOrigin: "50% 50%", y: -8 })
      gsap.to(".burger-mid", { width: 0 })


      document.querySelector('main').style.display = "none"; 
      document.querySelector('main').style.overflow = "hidden";
      document.querySelector('footer').style.display = "none"; 
      document.querySelector('footer').style.overflow = "hidden";
  
  
    } else {

      gsap.to(".burger-top", { rotation: 0, y: 0 })
      gsap.to(".burger-bottom", { rotation: 0, y: 0 })
      gsap.to(".burger-mid", { width: 23 })
  
      document.querySelector('main').style.display = "block"; 
      document.querySelector('main').style.overflow = "visible";
      document.querySelector('footer').style.display = "block"; 
      document.querySelector('footer').style.overflow = "visible";
      
    }
  }
  
  document.getElementById('toggleIcon').addEventListener('touchstart', function() {
    menuToggle();
  })