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
    dateValidate();
    emailValidate();
    passwordValidate();
    comparePassword();
})

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


function dateValidate(){
//4
    //var datas = campos[4].value
    const datas = document.getElementById('date')
    let nasc = datas.value.split("-").map(Number)

    let ageLimit = new Date(nasc[0] + 90, nasc[1] - 1, nasc[2])
    let ageMin = new Date(nasc[0] + 10, nasc[1] - 1, nasc[2])

    let today = new Date()

    if (ageLimit < today){
        setError(2)
        //console.log("Idade limite!")
    } else if (ageMin > today){
        console.log("Idade menor")
        setError(2)
        //console.log("Idade válida")
    } else{
        removeError(2)
    }
}

function emailValidate(){
    if(campos[3].value.length == ''){
        removeError(3)
    } else if(!emailRegex.test(campos[3].value)){
        setError(3)
    }else{
        removeError(3)
    }
}

function passwordValidate(){
    if(campos[4].value.length == ''){
        removeError(4)
    } else if(!passwordRegex.test(campos[4].value)){
        setError(4)
    } else {
        removeError(4)
    }

    document.getElementById('btn-eye').addEventListener('click', function(){
        document.getElementById('senha').type = 'text'
    })
    document.getElementById('btn-eye').addEventListener('mouseout', function(){
        document.getElementById('senha').type = 'password'
    })
}


function comparePassword(){
    if(campos[5].value.length == ''){
        removeError(5)
    } else if(campos[4].value == campos[5].value && campos[5].value.length >= 8){
        removeError(5)
    } else {
        setError(5)
    }
    document.getElementById('btn-eye2').addEventListener('click', function(){
        document.getElementById('repeat-senha').type = 'text'
    })
    document.getElementById('btn-eye2').addEventListener('mouseout', function(){
        document.getElementById('repeat-senha').type = 'password'
    })
}
