let przycisk1 =  document.querySelector('#przycisk1')
let przycisk2 =  document.querySelector('#przycisk2')
let wyslane = document.querySelector('#wyslane')
let imie = document.querySelector('#imie').value
let nazwisko = document.querySelector('#nazwisko').value
let email = document.querySelector('#email').value
let zgloszenie = document.querySelector('#zgloszenie').value

przycisk2.addEventListener('click',wysylanie)
function wysylanie() {
    wyslane.innerHTML=`${imie} ${nazwisko}<br>${email}<br>Usługa: ${zgloszenie}`
}
