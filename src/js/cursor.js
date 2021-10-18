//cursor 
const cursorTag = document.querySelector("div.cursors") 
const arrow = document.querySelector("div.arrow") 
const balls = cursorTag.querySelectorAll("div")
const cta = document.querySelectorAll("a")
const footer = document.querySelector("footer")

let aimX = 300
let aimY = 300

balls.forEach((ball, index) => {
  let currentX = 300
  let currentY = 300

  let speed = 0.3 - index * 0.015

  const animate = function () {
    currentX += (aimX - currentX) * speed
    currentY += (aimY - currentY) * speed

    ball.style.left = currentX + "px"
    ball.style.top = currentY + "px"

    requestAnimationFrame(animate)
  }

  animate()
})

document.addEventListener("mousemove", function(event) {
  aimX = event.pageX 
  aimY = event.pageY
})


cta.forEach(cta => {
  cta.addEventListener("mouseover", function() {
    balls.forEach(cursor => cursor.style.backgroundColor = "transparent")
  })
  cta.addEventListener("mouseout", function() {
    balls.forEach(cursor => cursor.style.backgroundColor = "rgba(202,207,199, 0.1)")
  })
})


footer.addEventListener("mouseover", function(){
  arrow.classList.add("footer");
})
footer.addEventListener("mouseout", function(){
  arrow.classList.remove("footer");
})

window.addEventListener('scroll', (e) => {
  const fromTop = parseInt(cursor.getAttribute('data-fromTop'));
  cursor.style.top = scrollY + fromTop + 'px';
});