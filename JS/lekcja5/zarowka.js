const zaruwka = document.querySelector('#niezar')
const guzikon = document.querySelector('#on')
const guzikoff = document.querySelector('#off')

function pierwsze() {
	zaruwka.src = 'zdjecia/tak_zarowka.png'
}
function drugie() {
	zaruwka.src = 'zdjecia/nie_zarowka.png'
}

const one = document.querySelector('#wlacz')
const nieone = document.querySelector('#wylacz')

one.addEventListener('change', zmiana)
function zmiana(a) {
	zaruwka.src = 'zdjecia/tak_zarowka.png'
}
nieone.addEventListener('change', zmianaa)
function zmianaa(e) {
	zaruwka.src = 'zdjecia/nie_zarowka.png'
}

const czek = document.querySelector('#wlancac')
if(zaruwka.src='zdjecia/tak_zarowka.png'){
    czek = true
}
else{
    czek = false
}
