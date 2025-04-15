<html>
    <head>Funcao.php aula 3</head>
    <body>
        <?php
            $name = "Mark Stolfi";
            $length = strlen($name);
            $cmp = strcmp($name, "Brian le");
            $index = strpos($name, "e");
            $first = substr($name, 9, 5);
            $name = strtoupper($name);

            print"$name <br>";
            print"$length <br>";
            print"$cmp <br>";
            print"$index <br>";
            print"$name <br>";
        ?>

        <?php
            $cidade = "Curitiba";
            $estado = "PR";
            $idade = 325;
            $frases_capital = "A cidade de $cidade é a capital do $estado";
            $frases_idade = "$cidade tem mais de $idade anos";
            echo "<h3>$frases_capital</h3>";
            echo "<h4>$frases_idade</h4>"
        ?>

        <?php
            //Deckare variável numérica
            $umidade = 91;
            //Testa se $unidade é maior que 90. retorna um boolean
            $vaiChover = ($umidade > 90);
            //Teste se $vaiChover é verdade
            if ($vaiChover)
            {
                echo "Vai chover com toda certeza absoluta da terra!";
            }
        ?>

            <br>
<!-- ---------------IF ELSE-------------------- -->
        <?php
            $a = 17;
            if ($a > 17)
                print "Maior de idade.<br/>";
            else
                print "Menor de idade.<br/>";
        ?>
    </body>
</html>