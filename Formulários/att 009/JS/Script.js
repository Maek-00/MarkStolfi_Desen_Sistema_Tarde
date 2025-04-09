    // Executar Mascáras

    //Define o Objeto e chama a função
    function mascara(o, f) {

        objeto = o;
        funcao = f;
        setTimeout("executaMascara()", 1);

    }


    function executaMascara() {
        objeto.value=funcao(objeto.value);
    }

    //Mascaras

    //Mascara do Nome e Sobrenome
    function NomeSobrenome(variavel){
        variavel=variavel.replace(/\d/g, "");

        return variavel
    }

    
    //Variavel geral para dígitos de apenas Letras
    function Texto(variavel){
        variavel=variavel.replace(/\d/g, "");

        return variavel
    }


    //Variavel geral para dígitos de apenas Números
    function Numero(variavel){
        variavel=variavel.replace(/\D/g, "");

        return variavel

    }


    //Mascara do RG
    function RG(variavel){
        variavel=variavel.replace(/\D/g,""); // remove o que não é numero

        variavel=variavel.replace(/(\d{3})(\d)/, "$1.$2") ;// Coloca um ponto após o terceiro o digito e o quarto

        variavel=variavel.replace(/(\d{3})(\d)/, "$1.$2"); // Coloca um ponto após o sexto o digito e o setimo

        variavel=variavel.replace(/(\d{3})(\d{1,2})$/, "$1-$2"); 

        return variavel;
    }
    //Mascara do CPF
    function CPF(variavel){
        variavel=variavel.replace(/\D/g,""); // remove o que não é numero

        variavel=variavel.replace(/(\d{3})(\d)/, "$1.$2") ;// Coloca um ponto após o terceiro o digito e o quarto

        variavel=variavel.replace(/(\d{3})(\d)/, "$1.$2"); // Coloca um ponto após o sexto o digito e o setimo

        variavel=variavel.replace(/(\d{3})(\d{1,2})$/, "$1-$2"); 

        return variavel;
    }


    //Mascara do CEP

    function CEP(variavel) {
        variavel=variavel.replace(/\D/g,""); // remove o que não é numero
        
        variavel=variavel.replace(/(\d{5})(\d{1,3})$/,"$1-$2");

        variavel=variavel.replace(/(\d{2})(\d)/,"$1.$2");

        return variavel;
    }

    // mascara data

    function data(variavel) {
        variavel = variavel.replace(/\D/g,"") ;// remove o que não é numero

        variavel = variavel.replace(/(\d{2})(\d)/,"$1/$2");

        variavel = variavel.replace(/(\d{2})(\d)/,"$1/$2");

        return variavel;
    }

    console.log("hello world");