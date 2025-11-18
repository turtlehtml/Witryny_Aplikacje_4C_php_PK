const wartosc = document.querySelector('#pg')
const zakres = document.querySelector('#godzinka')
const wartosc1 = document.querySelector('#pm')
const zakres1 = document.querySelector('#minuta')
let liczenie = (30 * `${wartosc}` - ((11/2) * `${wartosc1}`))
const wynik = document.querySelector('#wynik')
let zawartosc = zakres.value
let zawartosc1 = zakres1.value 


wartosc.textContent = zakres.value
zakres.addEventListener('input', event => {
	wartosc.textContent = event.target.value
    wynik.innerText=liczenie
    console.log(zawartosc)
})


wartosc1.textContent = zakres1.value
zakres1.addEventListener('input', event => {
	wartosc1.textContent = event.target.value
    wynik.innerText = liczenie
    console.log(zawartosc1)
})

