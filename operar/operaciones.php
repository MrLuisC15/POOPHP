<?php
    /*CLASE OPERACIONES*/
    class operaciones {
        function sumar($num1,$num2) {
            return $num1+$num2;
        }
        function restar($num1,$num2) {
            return $num1-$num2;
        }
        function multiplicar($num1,$num2) {
            return $num1*$num2;
        }
        function dividir($num1,$num2) {
            return $num1/$num2;
        }

        function hazOpcion($num1,$num2) {
            $opcion= isset($_POST['opcion']) ? $_POST['opcion'] : "";
            switch($opcion) {
                case 0:
                    $resultado=$this->sumar($num1,$num2);
                    break;
                case 1:
                    $resultado=$this->restar($num1,$num2);
                    break;
                case 2:
                    $resultado=$this->multiplicar($num1,$num2);
                    break;
                case 3:
                    $resultado=$this->dividir($num1,$num2);
            }
            return $resultado;
        }
    }
?>