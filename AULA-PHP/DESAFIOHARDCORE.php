
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabela</title>
    <style type="text/css">
    </style>
</head>
<body>
    <table>
    <?php
            for($l=1;$l<=5;$l++)
            { 
                
                for ($c=1; $c<=10;$c++)
                {
                    ($res = $l * $c);
                    echo "<h3>$l x $c = $res |<h3>";
                }
                echo "<br><br>";
            }
            echo "<h2 align='center'>-------PHP MADE BY 'MARK STOLFI'-------</h2>";
        ?>
    </table>
    
    
</body>
</html>