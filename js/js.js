const navToggle = document.querySelector('#hamburger')

navToggle.addEventListener('click', _ => {
    console.log('tester hamburger')
    document.getElementById('navbar').classList.toggle('navbar--open')
})