let imie = document.querySelector('#imie').value
let nazwisko = document.querySelector('#nazwisko').value
let zgloszenie = document.querySelector('#zgloszenie').value
let wynik = document.querySelector('#wynik')
let przycisk2 = document.querySelector('#przycisk2')
let regulamin = document.querySelector('#regulamin')

przycisk2.addEventListener('click',wysylanie)
function wysylanie() {
    if(regulamin.checked){
        wynik.innerHTML=`${imie} ${nazwisko} <br>Treść twojej sprawy: ${zgloszenie}`
    }
    else{
        wynik.innerHTML='Musisz zapoznać się z regulaminem'
        wynik.style.color='red'
    }
}