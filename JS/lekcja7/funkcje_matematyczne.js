const liczba = prompt('Wpisz dowolną liczbe rzeczywistą')
const naglowek = document.querySelector('h1')
const s1 = document.querySelector('#s1')
const s2 = document.querySelector('#s2')
const s3 = document.querySelector('#s3')
const s4 = document.querySelector('#s4')
const s5 = document.querySelector('#s5')
const s6 = document.querySelector('#s6')
const s7 = document.querySelector('#s7')
const s8 = document.querySelector('#s8')
const s11 = document.querySelector('#s11')
const s22 = document.querySelector('#s22')
const s33 = document.querySelector('#s33')
const s44 = document.querySelector('#s44')
const s55 = document.querySelector('#s55')
const s66 = document.querySelector('#s66')
const s77 = document.querySelector('#s77')
const s88 = document.querySelector('#s88')
function absoulute() {
	if (isNaN(liczba)) {
		alert('To nie jest liczba')
	}
}
naglowek.innerHTML = `Podana liczba: ${liczba}`
s1.innerHTML = `${liczba}`
s11.innerHTML = Math.abs(`${liczba}`)
s2.innerHTML = `${liczba}`
s22.innerHTML = Math.ceil(`${liczba}`)
s3.innerHTML = `${liczba}`
s33.innerHTML = Math.floor(`${liczba}`)
s4.innerHTML = `${liczba}`
s44.innerHTML = Math.max(`${liczba}`)
s5.innerHTML = `${liczba}`
s55.innerHTML = Math.min(`${liczba}`)
s6.innerHTML = `${liczba}`
s66.innerHTML = Math.pow(`${liczba}`, 2)
s7.innerHTML = `${liczba}`
s77.innerHTML = Math.round(`${liczba}`)
s8.innerHTML = `${liczba}`
s88.innerHTML = Math.sqrt(`${liczba}`)
