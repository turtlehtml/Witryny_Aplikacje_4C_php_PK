let obrazy = document.querySelectorAll('.lewyo')
const pod = document.querySelector('#podsumowanie')
obrazy.forEach(element => {
    let liczba = 0
    if (liczba === 0) {
        element.addEventListener('click', obramowanie)
    function obramowanie() {
        element.style.border = '1px solid'
        element.style.borderRadius = '8px'
        element.style.boxShadow = '0px 0px 10px black'
        pod.innerHTML = element.title
        liczba++

    }
    }
    if (liczba === 1) {
        element.addEventListener('click',obr1)
        function obr1() {
            element.style.border='none'
            liczba=liczba-1
        }
    }
});




