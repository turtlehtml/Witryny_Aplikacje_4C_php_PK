const odpowiedzi = ["lag", "2009", "rockstar", "noob", "pięćnocyufreddy,ego", "steam", "grandtheftauto", "respawn"];
const lista = document.querySelectorAll("li");

lista.forEach((li, index) => {
    const prostokat = li.querySelector(".kwadrat");
    const podp = li.querySelector(".podp");
    const link = li.querySelector(".odp");
    podp.style.display = "none";



link.addEventListener("click", function () {
    const odpu = prompt("Podaj swoją odpowiedź:");
    if (odpu === odpowiedzi[index]) {
        alert("To jest poprawna odpowiedź!");
        podp.style.display = "inline";
        podp.innerHTML = `<strong>${odpowiedzi[index]}</strong>`;
        link.style.display = "none";
        prostokat.style.display = "none";
    } else {
        alert("Pomyliłeś się");
    }
});
});

