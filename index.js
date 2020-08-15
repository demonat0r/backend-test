const form = document.getElementById('form')
const message = document.querySelector('.alert')


form.addEventListener('submit', e => {
    e.preventDefault()

    fetch('post.php', {
        method: "POST",
        body: new FormData(form)
    })
        .then(response => response.text())
        .then((text) =>  {
            if (text === 'reg succeed') {
                if (message.classList.contains('alert-danger')) {
                    message.classList.remove('alert-danger')
                }
                    
                message.classList.add('alert-success')

                message.firstChild.textContent = 'Registration successful'
                form.hidden = true
            }    
            else if (text === 'reg failed') {
                message.classList.add('alert-danger')
                message.firstChild.textContent = 'A user with this email address is already registered'
            }
        })
        .catch(error => console.error('Request failed', error ))
})
