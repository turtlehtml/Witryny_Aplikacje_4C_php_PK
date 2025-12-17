let cytat1 = document.querySelector('#cytat1')
let cytat2 = document.querySelector('#cytat2')
let cytat3 = document.querySelector('#cytat3')

cytat1.addEventListener('click',zmiana1)
function zmiana1() {
    cytat1.style.display='none'
    cytat2.style.display='block'
}
cytat2.addEventListener('click',zmiana2)
function zmiana2() {
    cytat2.style.display='none'
    cytat3.style.display='block'
}
cytat3.addEventListener('click',zmiana3)
function zmiana3() {
    cytat3.style.display='none'
    cytat1.style.display='block'
}