function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min)) + min;
}

function enviar(){
    var nom = window.document.getElementById('nome').value
    if (nom != ''){
        var senha = getRandomInt(00001, 100000)
        window.document.getElementById('sen').innerHTML = `Olá ${nom}. Haverá um sorteio nessa turma. Sua senha é: ${senha}`
    }
    else{
        window.alert('Nome é obrigatório.')
    }
}
