document.addEventListener("DOMContentLoaded", function() {
    console.log("I'm with you, Houston2");// To verify page load for troubleshooting.
const blocks = document.querySelectorAll('.wp-block-columns');

blocks.forEach((block)=> {

    gsap.set(block, {
        opacity: 0,
        duration: 1.5,
        ease: 'power3.out',
        overwrite: 'auto',
      });
      ScrollTrigger.create({
        trigger: block,
        start: 'top 60%',
        end: 'bottom 30%',
        onEnter: () => gsap.to(block, {
          opacity: 1,
          duration: 1.5,
        }),
        onLeave: () => gsap.to(block, {
          opacity: 0,
          duration: 1.5,
        }),
        onEnterBack: () => gsap.to(block, {
            opacity: 1,
            duration: 1.5,
          }),
          onLeaveBack: () => gsap.to(block, {
            opacity: 0,
            duration: 1.5,
          }),
      });
    })
});



// gsap.utils.toArray('.website-section').forEach(section => {
//     const elems = section.querySelectorAll('.js-content-opacity');
//     // Set starting params for sections
//     gsap.set(elems, {
//       y: 50,
//       opacity: 0,
//       duration: 1,
//       ease: 'power3.out',
//       overwrite: 'auto',
//     });
    
//     ScrollTrigger.create({
//       trigger: section,
//       start: 'top 60%',
//       end: 'bottom 30%',
//       markers: true,
//       onEnter: () => gsap.to(elems, {
//         y: 0,
//         opacity: 1,
//         stagger: 0.2,
//       }),
//       onLeave: () => gsap.to(elems, {
//         y: -50,
//         opacity: 0,
//         stagger: 0.2,
//       }),
//       onEnterBack: () => gsap.to(elems, {
//         y: 0,
//         opacity: 1,
//         stagger: -0.2,
//       }),
//       onLeaveBack: () => gsap.to(elems, {
//         y: 50,
//         opacity: 0,
//         stagger: -0.2,
//       }),
//     });
//   })