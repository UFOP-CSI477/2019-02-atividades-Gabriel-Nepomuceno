

function validate(campo, alerta, label, indicador){

    let n = campo.value;
    if(indicador == "numero"){
        condicaoInvalida = n.length == 0 || isNaN(parseFloat(n))
    } else if(indicador == "texto"){
        condicaoInvalida = n.length == 0 || hasNumber(n)
    }

    if(condicaoInvalida){

        document.getElementById(alerta).style.display = "block";
        campo.classList.add("is-invalid");
        document.getElementById(label).classList.add("text-danger");
        campo.value="";
        campo.focus();
        return false;
    }
        document.getElementById(alerta).style.display = "none";
        campo.classList.remove("is-invalid");
        campo.classList.add("is-valid");
        document.getElementById(label).classList.remove("text-danger");
        document.getElementById(label).classList.add("text-success");
        return true
}


function cadastrarCliente(){
    nome = document.dados.nome
    sobrenome = document.dados.sobrenome
    form = document.getElementById("form")

    if(validar(nome,"alerta1","nome","texto")
    && validar(sobrenome,"alerta2","sobrenome","texto")){
        form.submit();
    }
}

function cadastrarProduto(){
    nome = document.dados.nome
    peso = document.dados.peso
    valor  = document.dados.valor
    estoqueInicial = document.dados.estoqueInicial
    form = document.getElementById("form")
    
    if(validar(nome,"alerta1","nome","texto")
    && validar(peso,"alerta2","peso","numero")
    && validar(valor,"alerta3","valor","numero")
    && validar(estoqueInicial,"alerta4","estoqueInicial","numero")){
        form.submit();
    }
}

function hasNumber(myString) {
    return /\d/.test(myString);
}