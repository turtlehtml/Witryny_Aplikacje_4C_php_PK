let guzik = document.querySelector('#guzik')
let square = document.querySelector('table')
let i1 = document.querySelector('#kolumn')
let i2 = document.querySelector('#row')
let v1 = i1.value
let v2 = i2.value

if (v1 <= 500 && v2 <= 500) {
    guzik.addEventListener('click', generowanie)
		function generowanie() {
            square.innerHTML=''
			for (let index = 1; index <= v2; index++) {
				let row = document.createElement('tr')
				let tr = square.appendChild(row)
                    for (let k = 1; k <= v1; k++) {
					let kol = document.createElement('td')
					let td = tr.appendChild(kol)
					td.innerHTML = `${index}|${k}`
				}
            
			}
		}
} else {
    alert('ŹLEEEEEEEEEEEEEE')
}