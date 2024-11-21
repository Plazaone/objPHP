<html>

    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/
        bootstrap/3.3.7/css/bootstrap.min.css">
    </head>

    <body>
        <?php
            include "../Model/Empleado.php";
            include "../Model/Contratista.php";
            include "../View/FormularioContratista.php";
            $formulario = new FormularioContratista();
            $formulario->mostrar();
        ?>
    </body>

</html>