window.addEventListener('scroll', function(){
    let scroll = this.document.querySelector('.scrollWare')
    scroll.classList.toggle('active', window.scrollY > 450)
})

function backTop(){
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    })
}