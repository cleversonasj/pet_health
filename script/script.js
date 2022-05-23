function validarSenha(input){
    var senha = document.getElementById("senha").value;

    if(input.value !== senha){
        input.setCustomValidity('As senhas não são iguais!');
    }else{
        input.setCustomValidity('');
    }
}

const cep = document.querySelector("#cep");

const showData = (result) => {
    for(const campo in result){
        if(document.querySelector("#"+campo)){
            document.querySelector("#"+campo).value = result[campo]
        }

    }
}

cep.addEventListener("blur", (e) =>{
    let search = cep.value.replace("-", "")
    const options = {
        method: 'GET',
        mode: 'cors',
        cache: 'default'
    }

    fetch(`https://viacep.com.br/ws/${search}/json/`).then(res => {res.json()
        .then(data => showData(data))
    })
        .catch(e => console.log('Erro: ' + e,message))
})