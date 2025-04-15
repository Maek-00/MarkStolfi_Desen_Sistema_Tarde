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
    </body>
</html>