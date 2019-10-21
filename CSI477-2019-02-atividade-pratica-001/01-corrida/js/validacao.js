var count = 0;
function insert(){
    let campo1 = document.getElementById("nome");
    let campo2 = document.getElementById("tempo");
    if(valida(campo1,"alerta1") & valida(campo2,"alerta2")){
        let table = document.getElementById("corpo");
        document.createElement("tr");
        let row = table.insertRow(count);
        count ++;
        let pos = row.insertCell(0);
        let cell0 = row.insertCell(1)
        let cell1 = row.insertCell(2);
        let cell2 = row.insertCell(3);
        let cell3 = row.insertCell(4);
        cell0.innerHTML = count;
        cell1.innerHTML = campo1.value;
        cell2.innerHTML = campo2.value;
        campo1.value = "";
        campo2.value = "";
        campo1.focus();
    }
}


function valida(campo,alerta){
    if(count>=6){
        console.log(count)
        document.getElementById("alerta3").style.display = "block";
        return false;
    }
    if(campo.value.length == 0){
        document.getElementById(alerta).style.display = "block";
        campo.classList.add("is-invalid");
        campo.focus();
        return false;
    }
    document.getElementById("alerta3").style.display = "none";
    document.getElementById(alerta).style.display = "none";
    campo.classList.remove("is-invalid");
    return true;

}

function limpar(){
    $("#corpo > tr").remove();
    $("#inserir").removeAttr("disabled");
    $("#nome").val("");
    $("#tempo").val("");

}

function resultado(){
    objetos = []
    $('#corpo tr').each(function () {
        var colunas = $(this).children();
        var obj = {
            'posicao': $(colunas[0]).text(), 
            'largada': $(colunas[1]).text(), 
            'nome': $(colunas[2]).text(),
            'tempo': $(colunas[3]).text(),
            'situacao': "-",
        };

        objetos.push(obj);
    });
    objetos.sort((a, b) => parseFloat(a.tempo) - parseFloat(b.tempo));
    objetos.map((element,index)=>{
        element.posicao = index+1;
        if(index==0){
            element.situacao = "Vencedor";
        }
    })
    $("#corpo > tr").remove();
    objetos.map((element,index)=>{
        let table = document.getElementById("corpo");
        document.createElement("tr");
        let row = table.insertRow(index);
        let posicao = row.insertCell(0);
        let largada = row.insertCell(1)
        let nome = row.insertCell(2);
        let tempo = row.insertCell(3);
        let situacao = row.insertCell(4);
        posicao.innerHTML = element.posicao;
        largada.innerHTML = element.largada;
        nome.innerHTML = element.nome;
        tempo.innerHTML = element.tempo;
        situacao.innerHTML = element.situacao;
    })
    $("#corpo tr:first").addClass('vencedor');
    count = 0;
    $("#inserir").attr("disabled","disabled");
}