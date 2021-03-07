// Wrap every letter in a span
var textWrapper = document.querySelector('.ml11 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

anime.timeline({ loop: true })
    .add({
        targets: '.ml11 .line',
        scaleY: [0, 1],
        opacity: [0.5, 1],
        easing: "easeOutExpo",
        duration: 700
    })
    .add({
        targets: '.ml11 .line',
        translateX: [0, document.querySelector('.ml11 .letters').getBoundingClientRect().width + 10],
        easing: "easeOutExpo",
        duration: 700,
        delay: 100
    }).add({
        targets: '.ml11 .letter',
        opacity: [0, 1],
        easing: "easeOutExpo",
        duration: 600,
        offset: '-=775',
        delay: (el, i) => 34 * (i + 1)
    }).add({
        targets: '.ml11',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
    });



// Wrap every letter in a span
// var textWrapper = document.querySelector('.ml13');
// textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

// anime.timeline({ loop: true })
//     .add({
//         targets: '.ml13 .letter',
//         translateY: [100, 0],
//         translateZ: 0,
//         opacity: [0, 1],
//         easing: "easeOutExpo",
//         duration: 1400,
//         delay: (el, i) => 300 + 30 * i
//     }).add({
//         targets: '.ml13 .letter',
//         translateY: [0, -100],
//         opacity: [1, 0],
//         easing: "easeInExpo",
//         duration: 1200,
//         delay: (el, i) => 100 + 30 * i
//     });



anime.timeline({ loop: false })
    .add({
        targets: '.ml15 .word',
        scale: [14, 1],
        opacity: [0, 1],
        easing: "easeOutCirc",
        duration: 800,
        delay: (el, i) => 800 * i
    });
