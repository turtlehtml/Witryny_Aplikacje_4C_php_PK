let okno = document.querySelector('fieldset')
let h3 = document.querySelector('h3')
let rzeczy =  document.querySelector('.rzeczy')
for (let index = 100; index < 1000; index++) {
    const elementy = rzeczy[index]
    okno.innerHTML +=`${index}`    
    if (index===999) {
        okno.innerHTML +=`. `
    } else {
        okno.innerHTML +=`, `
    }





    
    let setka = Math.floor(index/100)
console.log(setka)
    let dycha = Math.floor((index%100)/10)
console.log(dycha)
    let jedna = Math.floor(index % 10)
console.log(jedna)
    

}




