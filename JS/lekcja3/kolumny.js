document.querySelector('header').style.backgroundColor = 'yellow'

document.querySelector('header h1').style.fontFamily='Arial Black'
document.querySelector('header h1').textContent='Preambuła'

const naglowek = document.querySelector('header h1')
console.log(naglowek)

const tekst2 = document.querySelector('section.main_column h1')
console.log(tekst2)
document.querySelector('section.main_column h1').textContent='Specjalność szefa:'
const fryty = document.querySelector('.main_column');
const paragraf = document.createElement('p');
paragraf.innerHTML='Kebab na frytkach';
fryty.appendChild(paragraf);
const abc = document.querySelector('footer')
const div1 = document.createElement('div')
div1.style.backgroundColor='pink'
abc.appendChild(div1)
const ppppp = document.querySelector('footer div')
const ok = document.createElement('p')
ok.innerHTML='&copy;'
ok.style.textAlign='center'
ppppp.appendChild(ok)
const usun = document.getElementById('trzecia')
usun.remove()
