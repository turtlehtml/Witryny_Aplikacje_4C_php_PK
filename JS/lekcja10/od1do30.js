let losowa = Math.floor((Math.random() * 30) + 1)
const p1 = document.querySelector('#p1')
const p2 = document.querySelector('#p2')
const p3 = document.querySelector('#p3')
const p4 = document.querySelector('#p4')
const guzik = document.querySelector('#guzik')

guzik.addEventListener('click', losowanie)
function losowanie() {
	p1.innerHTML = p1.innerHTML = `${losowa}`

	if (losowa >= 20) {
		p2.innerHTML = p2.innerHTML = 'Wylosowana liczba jest większa lub równa 20'
	} else {
		p2.innerHTML = p2.innerHTML = ''
	}
	if (losowa % 2 == 0) {
		p3.innerHTML = 'Wylosowana liczba jest liczbą parzystą'
	} else {
		p3.innerHTML = 'Wylosowana liczba jest liczbą nieparzystą'
	}
	if (losowa <= 10) {
		p4.innerHTML = 'Wylosowana liczba jest w pierwszej dziesiątce'
	} else if ((losowa >= 11, losowa <= 20)) {
		p4.innerHTML = 'Wylosowana liczba jest w drugiej dziesiątce'
	} else {
		p4.innerHTML = 'Wylosowana liczba jest w trzeciej dziesiątce'
	}
}
