let btnUp = document.getElementById('btnUp');
let togell = document.getElementById('togell');
let nav = document.getElementById('nav');
// start menu

togell.onclick = function () {
  nav.classList.toggle('im');
  togell.classList.toggle('in');
  togell.classList.toggle('il');
};

// end menu

//start scroll
btnUp.addEventListener('click', function () {
  window.scrollTo({ top: 0, behavior: 'smooth' });
});
window.onscroll = function () {
  if (scrollY >= 400) {
    btnUp.classList.remove('d-n');
  } else {
    btnUp.classList.add('d-n');
  }
};
// end scroll

let checkbox = document.getElementById('checkbox');
let img1 = document.getElementById('img1');
let img2 = document.getElementById('img2');
let isDarkMode = localStorage.getItem('isDarkMode') === 'true';

if (isDarkMode) {
  img1.classList.add('d-n');
  img2.classList.remove('d-n')
}
//


