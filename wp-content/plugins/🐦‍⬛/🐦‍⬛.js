const button = document.querySelector('.🐦‍⬛🐦‍⬛')

button.addEventListener('click', () => {
    if (button.getAttribute('data-checked') == 'true') {
        button.setAttribute('data-checked', 'false')
    } else {
        button.setAttribute('data-checked', 'true')
        alert("Vous venez d'activer le mode destruction")
    }
})

document.addEventListener('click', () => {
    if (button.getAttribute('data-checked') == 'true') {
        document.body.addEventListener('click', (e) => {
            if (e.target != button && !e.target.matches('.🐦‍⬛🐦‍⬛')) {
                e.target.remove()
            }
        })
    }
})