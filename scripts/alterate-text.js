function switchToggle(){
    let foo = document.getElementById('foo')
    const btnNext = document.querySelector('#btnNextRegister')


    if(foo.checked){
        document.getElementById('mode').innerHTML = "Modo Usuário"
        document.getElementById('text-mode').innerHTML = "Nesse modo você poderá analisar a compatibilidade de todos os jogos."
        document.getElementById('mode').style.transition = "margin-right 2s"
        btnNext.href = "register-user.php"
    } else{
        document.getElementById('mode').innerHTML = "Modo Desenvolvedor"
        document.getElementById('text-mode').innerHTML = "Você poderá fazer tudo do Modo Usuário + publicar seus jogos."
        document.getElementById('mode').style.transition = "all 2.5s"
        btnNext.href = "register-dev.php"
    }
}


/*
const toggle = document.querySelector('.toggle input')
/*let toogle = document.getElementById('toggle')

toggle.addEventListener('click', () =>{
    //const mode = toggle.parentNode.querySelector('.onoff')
    let mode = toggle.getElementsByClassName('mode')
    mode.textContent = toggle.checked?'Modo Dev':'Modo Usuário'
})
*/

/*
let userMode = "Modo Usuário"
let devMode = "Modo Desenvolvedor"

$("div.toggle input[type=checkbox]").change(function(){
    $(".mode").text(this.checked?devMode:userMode)
})*/

/*
function toggle(){
    

    let naoChecado = document.getElementById('foo').checked = false







    if(checado == true){
        document.getElementById('mode').innerHTML="Modo Desenvolvedor"
    } else{
        if(naoChecado == false){
            document.getElementById('mode').innerHTML="Modo Usuário"
        }
    }
}*/