<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTADO</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="box">
        <div class="containerCOL">
            <div class="card2">
                <?php
	              	$lado1 = $_GET["a"];
	    	        $lado2 = $_GET["b"];
                    $lado3 = $_GET["c"];
	    	        $resultado1= $lado1 * $lado2 * $lado3;
                    echo "<p><h2> O volume do  retangulo é: $resultado1 </h2></p>";
                ?>
            </div>            
        </div>
    </div>
</body>
</html>