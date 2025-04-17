const button = document.querySelector('.🐦‍⬛🐦‍⬛')

console.log(button)
button.addEventListener('change', () => {
    if (button.getAttribute('data-checked') == 'true') {
        button.setAttribute('data-checked') = 'false'
    } else {
        button.setAttribute('data-checked') = 'true'
    }
})

if (button.getAttribute('data-checked') == 'true') {
    alert("Vous venez d'activer le mode destruction")
    document.body.addEventListener('click', (e) => {
        if (e.target != button && !e.target.matches('.🐦‍⬛🐦‍⬛')) {
            e.target.remove()
        }
    })
}