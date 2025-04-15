<html>
    <head>
        <title>Switch Case</title>
    </head>
    <body>
        <?php
            $s = "";
            switch ($s) {
                case "casa":
                    print "A casa é amarela";
                    break;
                case "arvore":
                    print "A árvore é bonita";
                    break;
                case "lampada":
                    print "Joao apagou a lampada";
                    break;
                default:
                    print "Você não selecionou";
                    break;
            }
        ?>
        <br>
<!-- ----------------Laço For---------------- -->
        <?php
            for ($i = 0; $i < 10; $i++) {
                print "O quadrado de $i é " . $i * $i . "<br>";
            }
        ?>
        <?php
            for ($i = 2; $n = system('dir /b'); $i++) {
                echo ($n);
                if ($i == 10){
                    break;
                }
            }
        ?>

    </body>
</html> 