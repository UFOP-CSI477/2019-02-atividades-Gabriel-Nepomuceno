function resultado(){
    let count = 3;
    let grupo1 = $('input[name=grupo1]:checked', '#myForm').val();
    let grupo2 = $('input[name=grupo2]:checked', '#myForm').val();
    let grupo3 = $('input[name=grupo3]:checked', '#myForm').val();
    if(grupo1 !="Bike"){
        console.log(grupo1)
        $("#alerta1").removeClass("invisivel");
        count--;
    }
    else{
        $("#acerto1").removeClass("invisivel");
    }
    if(grupo2!="Sofa"){
        console.log(grupo2)
        $("#alerta2").removeClass("invisivel");
        count--;
    }
    else{
        $("#acerto2").removeClass("invisivel");
    }
    if(grupo3!="Chave"){
        console.log(grupo3)
        $("#alerta3").removeClass("invisivel");
        count--;
    }
    else{
        $("#acerto3").removeClass("invisivel");
    }
    console.log(count)
    alert("Você acertou "+count+" exercícios!");

}