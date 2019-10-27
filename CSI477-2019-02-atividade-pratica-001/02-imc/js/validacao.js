function calcula(){
    let campo1 = document.getElementById("altura");
    let campo2 = document.getElementById("peso");
    if(valida(campo1,"alerta1") & valida(campo2,"alerta2")){
        let altura = parseFloat(campo1.value);
        let peso = parseFloat(campo2.value);
        imc = peso/(altura*altura);
        console.log(imc)
        if(imc < 18.5){
            $("#subnutricao").addClass("imc");
        }
        else if(imc >= 18.5 && imc< 25){
            $("#saudavel").addClass("imc");
        }
        else if(imc >=25 && imc < 30){
            $("#sobrepeso").addClass("imc");
        }
        else if(imc >= 30 && imc < 35){
            $("#obesidade1").addClass("imc");
        }
        else if(imc>=35 && imc <40){
            $("#obesidade2").addClass("imc");
        }
        else{
            $("#obesidade3").addClass("imc");
        }
        let peso_ideal = imc*(altura*altura);
        console.log(peso_ideal);
        document.getElementById("result").value = peso_ideal;
    }


}

function limpar(){
    $(".imc").removeClass("imc");
}

function valida(campo,alerta){
    if(campo.value.length == 0){
        document.getElementById(alerta).style.display = "block";
        campo.classList.add("is-invalid");
        campo.focus();
        return false;
    }
    document.getElementById(alerta).style.display = "none";
    campo.classList.remove("is-invalid");
    
    return true;

}


