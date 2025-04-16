function funcao1(){
    var x;
    var r=confirm("Escolha um valor")
    if (r==true){
        x="Você pressionou OK";
    }
    else{
        x="Você clicou em cancelar";
    }
    document.getElementById("demo").innerHTML=x;
}