const form = document.getElementById('signin')
const campos = document.querySelectorAll('.required')
const spans = document.querySelectorAll('.span-required')
const labels = document.querySelectorAll('.label-error')
const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[$*&@#!])[0-9a-zA-Z$*&@#!]{8,}$/
const userRegex =  /^[a-z\d](?:[a-z\d]|_(?=[a-z\d])){4,14}$/i ///^[A-Za-z]\\w{5,33}$/
const btnEye = document.querySelector('.btn-eye')

form.addEventListener('submit', (event) => {
    event.preventDefault();
    nameValidate();
    userValidate();
    enterpriseValidate();
    siteValidate();
    dateValidate();
    emailValidate();
    passwordValidate();
    comparePassword();
})

function setError(index){
    campos[index].style.border = '2px solid #e63636'
    spans[index].style.display = 'block'
    labels[index].style.color = 'red'
}

function removeError(index){
    campos[index].style.border = ''
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

function emailValidate(){
    if(campos[4].value.length == ''){
        removeError(4)
    } else if(!emailRegex.test(campos[4].value)){
        setError(4)
    }else{
        removeError(4)
    }
}

function passwordValidate(){
    if(campos[5].value.length == ''){
        removeError(5)
    } else if(!passwordRegex.test(campos[5].value)){
        setError(5)
    } else {
        removeError(5)
    }

    document.getElementById('btn-eye').addEventListener('click', function(){
        document.getElementById('senha').type = 'text'
    })
    document.getElementById('btn-eye').addEventListener('mouseout', function(){
        document.getElementById('senha').type = 'password'
    })
}
