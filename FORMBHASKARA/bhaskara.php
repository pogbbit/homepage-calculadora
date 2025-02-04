<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap');

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url('SABOMUITO.webp');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        p {
            background-color: antiquewhite;
            padding: 10px;
            border: 1px solid black;
            margin: 10px 20px; 
            font-family: 'Josefin Sans', sans-serif;
            font-size: 16px;
        }

    </style>
</head>

<body>
    
    <div class="container">
        <div class ="quadrado">
            <?php
                $a = $_GET["a"];
		        $b = $_GET["b"];
		        $c = $_GET["c"];
                $delta = ($b*$b) - ((4*$a) *$c);

                if ($delta > 0) {
                    $m = (-$b + sqrt($delta)) / (2 * $a);
                    $n = (-$b - sqrt($delta)) / (2 * $a);
                    print "<p>Resultados: ($m, $n)</p>";
                } elseif ($delta == 0 ) {
                    $m = -$b / (2 * $a);
                    print "<p>Resultado único: $m</p>";
                } else {
                    print "<p>A equação não possui raízes reais.</p>";
                }
		?>
        </div>
    </div>
</body>

</html>