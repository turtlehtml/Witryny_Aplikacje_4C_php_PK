let Blur = document.querySelector('#blur')
let Negatyw = document.querySelector('#negatyw')
let Sepia = document.querySelector('#Sepia')
let btn = document.querySelector('#btn')
let btn1 = document.querySelector('#btn1')
let btn2 = document.querySelector('#btn2')
let kolorowy = document.querySelector('#kolorowy')
let blackwhite = document.querySelector('#czarnobialy')
let zolwrange = document.querySelector('#zolw').value
let owocerange = document.querySelector('#owoce').value
let pszczola = document.querySelector('#pszczola')
let pomarancza = document.querySelector('#pomarancza')
let zolw = document.querySelector('#zolwobraz')
let owoce = document.querySelector('#owoceobraz')

btn.addEventListener('click',zmienianie)
function zmienianie() {
    if (Blur.checked) {
        pszczola.style.filter='blur(5px)'
    }
    if (Sepia.checked) {
        pszczola.style.filter='sepia(100%)'
    }
    if (Negatyw.checked) {
        pszczola.style.filter='invert(100%)'
    }
}

kolorowy.addEventListener('click',kolorowanie)
function kolorowanie() {
    pomarancza.style.filter='grayscale(0%)'
}
blackwhite.addEventListener('click',szare)
function szare() {
    pomarancza.style.filter='grayscale(100%)'
}

btn1.addEventListener('click',przezroczystosc)
function przezroczystosc(){
    owoce.style.filter=`opacity(${owocerange}%)`
}

btn2.addEventListener('click',jasnosc)
function jasnosc(){
    zolw.style.filter=`brightness(${zolwrange}%)`
}