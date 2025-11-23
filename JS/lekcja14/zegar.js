const wartosc = document.querySelector('#pg')
const wartosc1 = document.querySelector('#pm')
const zakres = document.querySelector('#godzinka')
const zakres1 = document.querySelector('#minuta')
const wynik = document.querySelector('#wynik')
wynik.innerHTML = `0 &#176`
wartosc.innerText = zakres.value
wartosc1.innerText = zakres1.value
let liczenie = 30 * `${wartosc.value}` - (11 / 2) * `${wartosc1.value}`
zakres.addEventListener('input', event => {
	wartosc.innerText = event.target.value
    let liczenie = Math.abs(30 * `${wartosc.value}` - (11 / 2) * `${wartosc1.value}`)
    wynik.innerHTML = liczenie +`&#176;`

})
zakres1.addEventListener('input', event2 =>{
    wartosc1.innerText = event2.target.value
    let liczenie = Math.abs(30 * `${wartosc.value}` - (11 / 2) * `${wartosc1.value}`)
    wynik.innerHTML = liczenie+`&#176;`
    
})



 