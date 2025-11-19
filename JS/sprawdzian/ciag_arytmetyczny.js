let pierwszy = document.querySelector('#pierwszy').value
let drugi = document.querySelector('#drugi').value
let ile = document.querySelector('#ile').value
let guzik = document.querySelector('#guzik')
let wynik = document.querySelector('#wynik')

guzik.addEventListener('click', liczenie)
function liczenie() {
    console.log(pierwszy)
    console.log(drugi)
    console.log(ile)
    let r = `${drugi}` - `${pierwszy}`
    console.log(r)
    if (isNaN(pierwszy) === false && isNaN(drugi) ===  false) {
        wynik.innerHTML='podaj jeszcze liczbe wyrazów'
    }else{
        wynik.innerHTML='podaj pierwsza oraz drugą liczbe ciągu'
    }
    if (isNaN(pierwszy) === false && isNaN(drugi) === false && isNaN(ile) === false) {
        for (let i = `${pierwszy}`; i <= `${ile}`; i++) {
            // const element = array[i];
            
        }
    } 
    
}