<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
        
        <?php 
        $x = 10;
        $z = 5;
        $y = 20;
        
        
        if($x == $y || $x == $z ||  $y == $z)				
        {
            $resposta = "<h1>Informe valores diferentes entre si ! </h1>";
        }
        else
        {
            if($x>$y && $x > $z)
            {
                $maior = $x;
                    if($y > $z)
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
            else if($y>$x && $y > $z)
            {
                $maior = $y;
                    if($x > $z)
                    {
                        $meio = $x;
                        $menor = $z;
                    }
                    else
                    {
                        $meio = $z;
                        $menor = $x;								
                    }
                        
            }
            else
            {
                $maior = $z;
                    if($x > $y)
                    {
                        $meio = $x;
                        $menor = $y;
                    }
                    else
                    {
                        $meio = $y;
                        $menor = $x;								
                    }
                
            }
        
            $resposta = "<h1>" .$maior. ">" .$meio .">" .$menor . "</h1>";
        }
        
        echo $resposta;
        
        
        
        
        
    ?>
    
</body>
</html>


