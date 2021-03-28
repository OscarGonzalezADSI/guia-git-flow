
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Taller Uso de arreglos</title>
    <style>
    #table{
        margin: 0 auto;
    }
    #footer{
        margin: 0 auto;
    }
    .container{
        margin: 0 auto;
    }
    </style>


</head>
<body>
</br>
</br>
</br>
<div class="container">
    <div class="row">
        <center>
        <h2>personas</h2>
        </center>
    </div>
        <!--
            <table class="table table-hover table-condensed table-bordered table-responsive">
    -->
        
        <table id="table">
        <thead>
            <tr>
                <th>nombre</th>
                <th>direccion</th>
                <th>telefono</th>
                <th>cumple</th>
                <th>color</th>
                <th>significado</th>
            </tr>
        </thead>
        <tbody>
        <?php

        $nombre = array(
            "Pablo Ardila",
            "Nancy Benitez",
            "Juan Cepeda",
            "Luis Castro",
            "Carlos Soto"
        );

        $direccion = array(
            "Cra 45 45-56",
            "Cll 23 12-19 Sur",
            "Av 34 16-12",
            "Mz C4 L21 Torcoroma",
            "MzB casa21 Aniversario"
        );

        $telefono = array(
            "3456789",
            "3214567",
            "2135423",
            "9743345",
            "5763244"
        );

        $cumple = array(
            "23-12-1997",
            "12-10-1980",
            "07-06-2000",
            "07-06-2000",
            "12-10-1980"
        );

        $color = array(
            "amarillo",
            "verde",
            "rojo",
            "azul",
            "naranja"
        );

        $color_significado = array(
            "amarillo" => "Riqueza y alegria",
            "azul" => "serenidad y paz",
            "naranja" => "modernidad y fe"
        );

        /* validamos cuantos registros seran expuestos
        basandose en campo obligatorio */
        for($i=0; count($nombre)>$i; $i++){

        ?>
            <tr>
                <td><?php echo $nombre[$i]; ?></td>
                <td><?php echo $direccion[$i]; ?></td>
                <td><?php echo $telefono[$i]; ?></td>
                <td><?php echo $cumple[$i]; ?></td>
                <td><?php echo $color[$i]; ?></td>
                <td>
                    <?php
                        // valida si el color es llave de significado
                        $valida = 0;
                        foreach($color_significado as $llave => $valor){

                            if($llave == $color[$i]){
                                echo $color_significado[$llave];
                                $valida = 1;
                                break;
                            }

                        }
                        // si no es valido el color muestra mensaje
                        if($valida !== 1){
                            echo "No se encuentra el significado";
                            $valida = 1;
                        }
                    ?>
                </td>
            </tr>
        <?php
        }
        ?>
        </tbody>
        </table>
    </div>
</div>
</br>
</br>
</br>
<div id="footer">
<center>
<p>Desarrollado por: Óscar Iván González Peña</p>
<p>Programa: Desarrollo web con PHP</p>
<p>Taller: "Uso de arreglos"</p>
<p>Servicio Nacional de Aprendizaje - SENA</p>
</center>
</div>
</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Taller Uso de arreglos</title>
    <style>
    #table{
        margin: 0 auto;
    }
    #footer{
        margin: 0 auto;
    }
    .container{
        margin: 0 auto;
    }
    </style>


</head>
<body>
</br>
</br>
</br>
<div class="container">
    <div class="row">
        <center>
        <h2>personas</h2>
        </center>
    </div>
        <!--
            <table class="table table-hover table-condensed table-bordered table-responsive">
    -->
        
        <table id="table">
        <thead>
            <tr>
                <th>nombre</th>
                <th>direccion</th>
                <th>telefono</th>
                <th>cumple</th>
                <th>color</th>
                <th>significado</th>
            </tr>
        </thead>
        <tbody>
        <?php

        $nombre = array(
            "Pablo Ardila",
            "Nancy Benitez",
            "Juan Cepeda",
            "Luis Castro",
            "Carlos Soto"
        );

        $direccion = array(
            "Cra 45 45-56",
            "Cll 23 12-19 Sur",
            "Av 34 16-12",
            "Mz C4 L21 Torcoroma",
            "MzB casa21 Aniversario"
        );

        $telefono = array(
            "3456789",
            "3214567",
            "2135423",
            "9743345",
            "5763244"
        );

        $cumple = array(
            "23-12-1997",
            "12-10-1980",
            "07-06-2000",
            "07-06-2000",
            "12-10-1980"
        );

        $color = array(
            "amarillo",
            "verde",
            "rojo",
            "azul",
            "naranja"
        );

        $color_significado = array(
            "amarillo" => "Riqueza y alegria",
            "azul" => "serenidad y paz",
            "naranja" => "modernidad y fe"
        );

        /* validamos cuantos registros seran expuestos
        basandose en campo obligatorio */
        for($i=0; count($nombre)>$i; $i++){

        ?>
            <tr>
                <td><?php echo $nombre[$i]; ?></td>
                <td><?php echo $direccion[$i]; ?></td>
                <td><?php echo $telefono[$i]; ?></td>
                <td><?php echo $cumple[$i]; ?></td>
                <td><?php echo $color[$i]; ?></td>
                <td>
                    <?php
                        // valida si el color es llave de significado
                        $valida = 0;
                        foreach($color_significado as $llave => $valor){

                            if($llave == $color[$i]){
                                echo $color_significado[$llave];
                                $valida = 1;
                                break;
                            }

                        }
                        // si no es valido el color muestra mensaje
                        if($valida !== 1){
                            echo "No se encuentra el significado";
                            $valida = 1;
                        }
                    ?>
                </td>
            </tr>
        <?php
        }
        ?>
        </tbody>
        </table>
    </div>
</div>
</br>
</br>
</br>
<div id="footer">
<center>
<p>Desarrollado por: Óscar Iván González Peña</p>
<p>Programa: Desarrollo web con PHP</p>
<p>Taller: "Uso de arreglos"</p>
<p>Servicio Nacional de Aprendizaje - SENA</p>
</center>
</div>
</div>
</body>
</html>

