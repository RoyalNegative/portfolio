
gsap.registerPlugin(ScrollTrigger);
gsap.from(".hero-greeting", { y: 200, opacity: 0, duration: 1.5 });
// gsap.to(".about-text", {
//     y: 100,
//     duration: 1.5,
//     scrollTrigger:{
//         trigger: ".about-me", // The element that triggers the animation
//         start: "top center", // Start when the top of .about-me hits the center of the viewport
//         end: "bottom center", // End when the bottom of .about-me hits the center of the viewport
//         scrub: true, // Smoothly scrubs the animation as you scroll
//     },
// })





