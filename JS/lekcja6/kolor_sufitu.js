const przycisk = document.querySelector('#kolorek')
przycisk.addEventListener('click',zmiana)
function zmiana(){
    const sufit = prompt('Wpisz kolor sufitu:')

if(sufit){
    alert('Twoje niebo ma kolor ' + sufit)
}
else{
    alert('Anulowałeś akcję, a okno prompt zwróciło ' + sufit)
}}