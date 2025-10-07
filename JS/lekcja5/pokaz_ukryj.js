const pokaz = document.getElementById('pokaz')
const ukryj = document.getElementById('ukryj')
const p = document.querySelector('p')
ukryj.addEventListener('change', log)
function log(a) {
	p.style.display = 'none'
}
pokaz.addEventListener('change', logg)
function logg(e) {
	p.style.display = 'block '
}
