<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap');


    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-image: url('BERSERK.webp');
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

    @media (max-width: 768px) {
            table {
                max-width: 100%;
            }

            td {
                padding: 2%;
            }
}
    </style>
</head>
<body>
    <?php
		$lado01 = $_GET["a"];
		$lado02 = $_GET["b"];
        $lado03 = $_GET["c"];
        $lado04 = $_GET["d"];
		$resultado= $lado01 + $lado02 + $lado03 + $lado04;
		echo "<p> O perímetro do 01° quadrilátero é: $resultado";

		$lado05 = $_GET["e"];
		$lado06 = $_GET["f"];
        $lado07 = $_GET["g"];
        $lado08 = $_GET["h"];
		$resultado02= $lado05 + $lado06 + $lado07 + $lado08;
		echo "<p> O perímetro do 02° quadrilátero é: $resultado02";

	?>
</body>
</html>