const navLink = document.querySelectorAll('.nav-link')

navLink.forEach((item, i) => {
    item.addEventListener('click', function() {
        if(!this.classList.contains('nav-clicked')) {
            navLink[i].classList.add('nav-clicked')
        }

        navLink.forEach((item, index) => {
            if(index !== i && item.classList.contains('nav-clicked')) item.classList.remove('nav-clicked')
        })

    })
})