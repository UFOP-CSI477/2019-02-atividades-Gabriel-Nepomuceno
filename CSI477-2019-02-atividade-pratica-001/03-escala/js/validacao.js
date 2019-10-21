function calcula(){
    let campo1 = document.getElementById("amplitude");
    let campo2 = document.getElementById("tempo");
    if(valida(campo1,"alerta1") & valida(campo2,"alerta2")){
        let amplitude = parseFloat(campo1.value);
        let tempo = parseFloat(campo2.value);
        mag = Math.log10(amplitude) + 3*Math.log10(8*tempo)-2.92;
        console.log(mag)
        if(mag < 3.5){
            $("#tipo1").addClass("mag");        }
        else if(mag >= 3.5 && mag < 5.5){
            $("#tipo2").addClass("mag");
        }
        else if(mag >=5.5 && mag < 6.1){
            $("#tipo3").addClass("mag");
        }
        else if(mag >= 6.1 && mag < 7.1){
            $("#tipo4").addClass("mag");
        }
        else if(mag>=7.1 && mag <8){
            $("#tipo5").addClass("mag");
        }
        else{
            $("#tipo6").addClass("mag");
        }
        $("#magnitude").val(mag);
    }
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
function limpar(){
    $(".mag").removeClass("mag");
}