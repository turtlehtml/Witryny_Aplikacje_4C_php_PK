const value = document.querySelector("#p_h");
const input = document.querySelector("#hour");
const wynik = document.querySelector('#wynik')
value.innerHTML = input.value;
input.addEventListener("input", (event) => {
    value.textContent = event.target.value;
    let ojej = 30*`${value}` - ((11/2)*`${value1}`)
    wynik.innerHTML=ojej + `&#176;`

});

const value1 = document.querySelector("#p_m");
const input1 = document.querySelector("#minuta");
value1.textContent = input1.value;
input1.addEventListener("input", (event) => {
    value1.textContent = event.target.value;
    let ojej = 30*`${value}` - ((11/2)*`${value1}`)
    wynik.innerHTML=ojej + `&#176;`
});


