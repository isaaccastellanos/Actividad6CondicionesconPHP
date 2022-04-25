<html>
<head>
    <title>Consulta de calificaciones</title>
</head>
<body>
    <h1>Consulta de calificaciones</h1>
    <?php
        echo "Matematicas: ". "<br>";
        echo "Primera parcial: " .$_POST["pri_mate"]. " Segunda Parcial: " .$_POST["seg_mate"]. " Tercera Parcial: " .$_POST["ter_mate"]. "<br><br>";

        echo "Ingles: ". "<br>";
        echo "Primera parcial: " .$_POST["pri_ing"]. " Segunda Parcial: " .$_POST["seg_ing"]. " Tercera Parcial: " .$_POST["ter_ing"]. "<br><br>";
        
        echo "Programacion: ". "<br>";
        echo "Primera parcial: " .$_POST["pri_pro"]. " Segunda Parcial: " .$_POST["seg_pro"]. " Tercera Parcial: " .$_POST["ter_pro"]. "<br><br>";

        echo "Fisica: ". "<br>";
        echo "Primera parcial: " .$_POST["pri_fis"]. " Segunda Parcial: " .$_POST["seg_fis"]. " Tercera Parcial: " .$_POST["ter_fis"]. "<br><br>";

        echo "Programacion Web: ". "<br>";
        echo "Primera parcial: " .$_POST["pri_pw"]. " Segunda Parcial: " .$_POST["seg_pw"]. " Tercera Parcial: " .$_POST["ter_pw"]. "<br><br>";

        echo "Analisis y diseño de sistemas: ". "<br>";
        echo "Primera parcial: " .$_POST["pri_anal"]. " Segunda Parcial: " .$_POST["seg_anal"]. " Tercera Parcial: " .$_POST["ter_anal"]. "<br><br>";
    ?>

    <h1>Revision De Aprobacion</h1>

    <?php 
        $sumaMate = $_POST["pri_mate"] + $_POST["seg_mate"] + $_POST["ter_mate"];
        $sumaIngles = $_POST["pri_ing"] + $_POST["seg_ing"] + $_POST["ter_ing"];
        $sumaProgra = $_POST["pri_pro"] + $_POST["seg_pro"] + $_POST["ter_pro"];
        $sumaFisica = $_POST["pri_fis"] + $_POST["seg_fis"] + $_POST["ter_fis"];
        $sumaPw = $_POST["pri_pw"] + $_POST["seg_pw"] + $_POST["ter_pw"];
        $sumaAna = $_POST["pri_anal"] + $_POST["seg_anal"] + $_POST["ter_anal"];

        if($sumaMate >= 24){
            echo "Matematicas lo has aprobado". "<br>";
        }else{
            echo "Matematicas no lo has aprobado". "<br>";
        }

        if($sumaIngles >= 24){
            echo "Ingles lo has aprobado". "<br>";
        }else{
            echo "Ingles no lo has aprobado". "<br>";
        }

        if($sumaProgra >= 24){
            echo "Progra lo has aprobado". "<br>";
        }else{
            echo "Progra no lo has aprobado". "<br>";
        }

        if($sumaFisica >= 24){
            echo "Fisica lo has aprobado". "<br>";
        }else{
            echo "Fisica no lo has aprobado". "<br>";
        }

        if($sumaPw >= 24){
            echo "Programacion Web lo has aprobado". "<br>";
        }else{
            echo "Programacion Web no lo has aprobado". "<br>";
        }

        if($sumaAna >= 24){
            echo "Analisis lo has aprobado". "<br>";
        }else{
            echo "Analisis no lo has aprobado". "<br>";
        }
    ?>

    <h1>Promedio Final</h1>

    <?php 
        $promedioFinal = (($sumaMate/3) + ($sumaIngles/3) + ($sumaProgra/3) + ($sumaFisica/3) + ($sumaPw/3) + ($sumaAna/3))/6 ;
        
        echo "Promedio: ".$promedioFinal;
    ?>
</body>
</html>