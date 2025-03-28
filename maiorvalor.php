<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAIORVALOR</title>
    <style>

    body,html {
    height: 90%;
    margin: 0;
    }

    .container {
    display: flex;
    justify-content: center; /* Centraliza horizontalmente */
    align-items: center; /* Centraliza verticalmente */
    height: 100%;
    }
    
    
    h1,h2 {
        text-align: center;
        font-family: Arial;
    }
     
    h1 {
        font-style: italic;
        font-size: 55px;
    }
    h2 {
        font-style: italic;
        font-size: 45px;
        font-family: Trebuchet MS, sans-serif;
    }
    </style>
</head>
<body>
    <div class="container">
    <?php
    $x = 60;
    $y = 40;
    $z = 50;

    
    if ($x == $y || $x == $z || $y == $z)
    {
        echo "<h1>Informe valores diferentes entre si!</h1>";
    }
    else
    {
        if ($y > $x && $y > $z)
        {
            $maior = $y;
            if ($x > $z)
            {
                $meio = $x;
                $menor = $z;
            }
            else
            {
                $meio = $z;
                $menor =$x;
            } 
             
        }

        elseif ($x > $y && $x > $z)
        {
            $maior = $x;
            if ($y > $z)
            {
                $meio = $y;
                $menor = $z;
            }
            else
            {
                $meio = $z;
                $menor = $y;
            }
        }

        else 
        {
            $maior = $z;
            if ($y > $x)
            {
                $meio = $y;
                $menor = $x;
            }
            else
            {
                $meio = $x;
                $menor = $y;
            }
        }

        echo "<h1>".$maior.">"."$meio".">".$menor."</h1>";
    }

    ?>
    </div>
</body>
</html>