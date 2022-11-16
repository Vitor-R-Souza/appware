const button = document.querySelector("#favorite .fa-heart")

button.onclick = () =>{
        button.classList.toggle("active")
    
    /*let xhr = new XMLHttpRequest()
    xhr.open("GET", "favori.php?userid=1&contentid=1", true)
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                button.classList.toggle("active")
            }
        }
    }*/
}

button.onclick = () => {
    button.classList.toggle("")
}