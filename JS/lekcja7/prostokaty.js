const wys = document.querySelector('#wys')
const szer = document.querySelector('#szer')
const kolorek = document.querySelector('#kolor')
const div = document.querySelector('div')
const guzik = document.querySelector('#guzik')
guzik.addEventListener('click',rysowanie)
function rysowanie(a){
    div.style.height = wys.value + 'cm'
    div.style.width = szer.value + 'cm'
    div.style.backgroundColor = kolorek.value
}
const obw = document.querySelector('#obw')
const pole = document.querySelector('#pole')
obw.innerHTML=wys.value*2+szer.value*2
pole.innerHTML=wys.value*szer.value

