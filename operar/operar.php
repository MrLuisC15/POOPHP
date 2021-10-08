<?php
    require_once('operaciones.php');

    class operar{
        function __construct()
        {
                /* DECLARACION DE VARIABLES */
    
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operaciones= new operaciones();

            /*CODIGO PRINCIPAL*/
            if($num2>$num1) {
                $aux=$num1;
                $num1=$num2;
                $num2=$aux;
            }

            echo 'Resultado = '.$operaciones->hazOpcion($num1,$num2);
        }

    }
    
    new operar();

?>

