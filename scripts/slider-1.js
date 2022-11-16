let cont = 1

setInterval(function(){
    document.getElementById('slide-' + cont).checked = true;
    cont++

    if(cont > 5){
        cont = 1
    }
}, 3000) //3 segundos