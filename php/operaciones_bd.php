<?php
    class Operaciones{
        function __construct(){
            require 'config_bd.php'; //Llamo al archivo donde se encuentran las variables para realizar la conexión a la base de datos
            $this->conexion=mysqli_connect(SERVIDORBD,USUARIO,CONTRASENIA,BASEDATOS); //Realizo la conexion con la base de datos
        }
        function cerrarconexion(){
            return $this->conexion->close();//Cierro la conexion con la base de datos
        }
        function consultar(){
            return $this->conexion->query($consulta); //Realizo la consulta con la base de datos
        }
    }
?>