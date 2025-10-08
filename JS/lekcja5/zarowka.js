const zaruwka = document.querySelector('#niezar')
const guzikon = document.querySelector('#on')
const guzikoff = document.querySelector('#off')

function pierwsze() {
	zaruwka.src = 'zdjecia/tak_zarowka.png'
	document.querySelector('#wlacz').checked = true
	document.querySelector('#wylacz').checked = false
	document.querySelector('#wlancac').checked = true
}
function drugie() {
	zaruwka.src = 'zdjecia/nie_zarowka.png'
	document.querySelector('#wlacz').checked = false
	document.querySelector('#wylacz').checked = true
	document.querySelector('#wlancac').checked = false
}

const one = document.querySelector('#wlacz')
const nieone = document.querySelector('#wylacz')

one.addEventListener('change', zmiana)
function zmiana() {
	zaruwka.src = 'zdjecia/tak_zarowka.png'
	document.querySelector('#wlancac').checked = true
}
nieone.addEventListener('change', zmianaa)
function zmianaa() {
	zaruwka.src = 'zdjecia/nie_zarowka.png'
	document.querySelector('#wlancac').checked = false
}
document.addEventListener('click', zaznaczenie)
function zaznaczenie(){
if (document.querySelector('#wlancac').checked == true) {
	zaruwka.src = 'zdjecia/tak_zarowka.png'
	document.querySelector('#wlacz').checked = true
	document.querySelector('#wylacz').checked = false
}
if(document.querySelector('#wlancac').checked == false) {
	zaruwka.src = 'zdjecia/nie_zarowka.png'
	document.querySelector('#wlacz').checked = false
	document.querySelector('#wylacz').checked = true
}}
