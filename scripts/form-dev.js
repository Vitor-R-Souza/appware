const form = document.getElementById('signin')
const campos = document.querySelectorAll('.required')
const spans = document.querySelectorAll('.span-required')
const labels = document.querySelectorAll('.label-error')
const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[$*&@#!])[0-9a-zA-Z$*&@#!]{8,}$/
const userRegex =  /^[a-z\d](?:[a-z\d]|_(?=[a-z\d])){4,14}$/i ///^[A-Za-z]\\w{5,33}$/
const btnEye = document.querySelector('.btn-eye')


function setError(index){
    campos[index].style.borderBottom = '2px solid #e63636'
    spans[index].style.display = 'block'
    labels[index].style.color = 'red'
}

function removeError(index){
    campos[index].style.borderBottom = ''
    spans[index].style.display = 'none'
    labels[index].style.color = ''
}


function nameValidate(){
    if(campos[0].value.length == ''){
        removeError(0)
    } else if(campos[0].value.length < 3){
        setError(0)
    }else{
        removeError(0)
    }
}

function userValidate(){
    if(campos[1].value.length == ''){
        removeError(1)
    } else if(!userRegex.test(campos[1].value)){
        setError(1)
        console.log("Usuário invalido")
    }else{
        removeError(1)
        console.log("Usuario valido")
    }
}

function enterpriseValidate(){
    if(campos[2].value.length == ''){
        removeError(2)
    } else if(campos[2].value.length < 5){
        setError(2)
    }else{
        removeError(2)
    }
}

function siteValidate(){
    if(campos[3].value.length == ''){
        removeError(3)
    } else if(campos[3].value.length < 12){
        setError(3)
    }else{
        removeError(3)
    }
}

function dateValidate(){
//4
    //var datas = campos[4].value
    const datas = document.getElementById('date')
    let nasc = datas.value.split("-").map(Number)

    let ageLimit = new Date(nasc[0] + 90, nasc[1] - 1, nasc[2])
    let ageMin = new Date(nasc[0] + 10, nasc[1] - 1, nasc[2])

    let today = new Date()

    if (ageLimit < today){
        setError(4)
        //console.log("Idade limite!")
    } else if (ageMin > today){
        console.log("Idade menor")
        setError(4)
        //console.log("Idade válida")
    } else{
        removeError(4)
    }
}

function emailValidate(){
    if(campos[5].value.length == ''){
        removeError(5)
    } else if(!emailRegex.test(campos[5].value)){
        setError(5)
    }else{
        removeError(5)
    }
}

function passwordValidate(){
    if(campos[6].value.length == ''){
        removeError(6)
    } else if(!passwordRegex.test(campos[6].value)){
        setError(6)
    } else {
        removeError(6)
    }

    document.getElementById('btn-eye').addEventListener('click', function(){
        document.getElementById('senha').type = 'text'
    })
    document.getElementById('btn-eye').addEventListener('mouseout', function(){
        document.getElementById('senha').type = 'password'
    })
}


function comparePassword(){
    if(campos[7].value.length == ''){
        removeError(7)
    } else if(campos[6].value == campos[7].value && campos[7].value.length >= 8){
        removeError(7)
    } else {
        setError(7)
    }
    document.getElementById('btn-eye2').addEventListener('click', function(){
        document.getElementById('repeat-senha').type = 'text'
    })
    document.getElementById('btn-eye2').addEventListener('mouseout', function(){
        document.getElementById('repeat-senha').type = 'password'
    })
}



/*
const nameUser = document.getElementById('nameUser')
const user = document.getElementById('user')
const date = document.getElementById('date')
const email = document.getElementById('email')
const password = document.getElementById('senha')
const repeatPassword = document.getElementById('repeat-senha')

form.addEventListener('submit', (e) => {
    //Para tirar comportamento padrão de recarregar quando enviar
    e.preventDefault()

    checkInputs()
})

function checkInputs(){
    const nameValue = nameUser.value.trim() //.trim tira todos os espaços
    const userValue = user.value.trim()
    const dateValue = date.value.trim()
    const emailValue = email.value.trim()
    const passwordValue = password.value.trim()
    const repeatPasswordValue = repeatPassword.value.trim()

    if(nameUser === ''){
        //Mostrar erro, add classe error
        errorValidation(nameUser, 'Preencha esse campo')
    } else{
        //Add classe success
        successValidation(nameUser)
    }
}

function errorValidation(input, message){
    const boxUser = input.parentElement
    const small = boxUser.querySelector('small')

    small.innerText = message

    boxUser.className = 'box-user error'
}

function successValidation(input){
    const boxUser = input.parentElement

    boxUser.className = 'box-user success'
}*/