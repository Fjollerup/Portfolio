const navToggle = document.querySelector('#hamburger')
const title = document.title

navToggle.addEventListener('click', _ => {
    console.log('tester hamburger')
    document.getElementById('navbar').classList.toggle('navbar--open')
    document.body.classList.toggle('no-scroll')
})

document.querySelector('.brand').innerHTML = title



// SCROLL MENU
// Denne tilføjer .scroll-up, som i css'en viser navbar__header
// Og skifter den ud med .scroll-down, som skjuler navbar__header
const body = document.body;
const nav = document.querySelector(".navbar__header");
const menu = document.querySelector("#hamburger");
const scrollUp = "scroll-up";
const scrollDown = "scroll-down";
let lastScroll = 0;
 
window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll == 0) {
    body.classList.remove(scrollUp)
    ;
    return;
  }
    
  if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
    // down
    body.classList.remove(scrollUp);
    body.classList.add(scrollDown);
  } else if (currentScroll < lastScroll && body.classList.contains(scrollDown)) {
    // up
    body.classList.remove(scrollDown);
    body.classList.add(scrollUp);
  }
  lastScroll = currentScroll;
});

// function til at fjerne baggrunden på navbar, hvis intro elementet er i viewporten.
const intro = document.querySelector('#cover')

const options = {
    threshhold: 0, //så snart elementet i det hele taget er i viewporten
    rootMargin: '-70px', //threshold - rootMargin. giver plads til hele navbar, inden functionen udløses.
}

const observer = new IntersectionObserver(function(entries, observer) {
    entries.forEach(entry => {
        console.log(entry)
        nav.classList.toggle('navbar__header--top')
    })
}, options)

observer.observe(intro)

