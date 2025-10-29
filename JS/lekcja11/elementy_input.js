const formularz =  document.querySelector('form')
for (let index = 1; index <  101; index++) {
     let input = document.createElement('input')
     input.id=`${index}`
     input.name='element'
     input.style.margin='10px'
     input.style.boxShadow='5px 5px lightblue'
     input.placeholder=`Element numer ${index}`
     formularz.appendChild(input)
    if (index%5==0) {
        formularz.innerHTML += '<br>'
    }
}