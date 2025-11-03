let okno = document.querySelector('fieldset')
let h3 = document.querySelector('h3')
let rzeczy = document.querySelector('.rzeczy')
let zliczenie = 0
for (let index = 100; index <= 999; index++) {
    const elementy = rzeczy[index]
    // okno.innerHTML += `${index}`
    if (index === 1000) {
        okno.innerHTML += `. `
    } else {
        okno.innerHTML += `, `
    }

    let setka = Math.floor(index / 100)
    let dycha = Math.floor((index % 100) / 10)
    let jedna = Math.floor(index % 10)
    let suma = setka + dycha + jedna
    console.log(`${index}: ${setka} + ${dycha} + ${jedna} = ${suma}`)

    const red =  document.createElement('b')
    red.innerText = index

    if (suma === 10) {
        red.style.color='red'
        red.style.fontWeight='bold'
        zliczenie++
    } else {
        red.style.color='black'
        red.style.fontWeight='normal'
    }
    okno.appendChild(red)

    h3.innerHTML=`Suma liczb:${zliczenie}`
}




