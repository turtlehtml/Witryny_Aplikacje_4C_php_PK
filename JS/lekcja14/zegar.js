const wartosc = document.querySelector('#pg')
const zakres = document.querySelector('#godzinka')
const wartosc1 = document.querySelector('#pm')
const zakres1 = document.querySelector('#minuta')
const wynik = document.querySelector('#wynik')

function policz() {
    // Konwersja na liczby
    const h = Number(zakres.value)
    const m = Number(zakres1.value)

    // Wzór
    return Math.abs(30 * h - (11 / 2) * m)
}

// Ustawienia początkowe
wartosc.textContent = zakres.value
wartosc1.textContent = zakres1.value
wynik.innerText = policz()

zakres.addEventListener('input', e => {
    wartosc.textContent = e.target.value
    wynik.innerText = policz()
})

zakres1.addEventListener('input', e => {
    wartosc1.textContent = e.target.value
    wynik.innerText = policz()
})


