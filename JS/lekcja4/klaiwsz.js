const klawisz = document.getElementById('klawisz')
document.addEventListener('keydown', function (e){
    console.log(`wcisniety klawisz ` + e.key)
    klawisz.innerHTML = e.key    
})
