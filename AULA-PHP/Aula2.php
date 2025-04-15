<html>
    <body>
        <?php
            //Função usada para definir o fuso horário padrão
            date_default_timezone_set('America/sao_paulo');
            //Manipulando HTML e PHP
            $data_hoje = date ("d/m/y h:m:s", time());
        ?>
        <p align="center"> Hoje é dia <?php echo $data_hoje ; ?>
        </p>

        <?php
            echo "texto <br>";
            echo "Isso abrange
            várias linhas. As novas linhas serão
            saída tembém.<br>";
            echo "Isso abrange<br>multiplas linhas. A nova linha será <br>a saída também.<br>";
            echo "Caracteres Escaping são feitos \"como esse\".<br>";
        ?>

        <?php
            $comida_favorita = "Italiana";
            print $comida_favorita[2];
            echo "<br>";
            $comida_favorita = "Cozinha ". $comida_favorita;
            print $comida_favorita;
        ?>
    </body>
</html>