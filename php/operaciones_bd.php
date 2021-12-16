<?php
    class Operaciones{
        function __construct(){
            require 'config_bd.php'; //Llamo al archivo donde se encuentran las variables para realizar la conexión a la base de datos
            $this->conexion=mysqli_connect(SERVIDORBD,USUARIO,CONTRASENIA,BASEDATOS); //Realizo la conexion con la base de datos
        }
        function cerrarconexion(){
            return $this->conexion->close();//Cierro la conexion con la base de datos
        }
        function consultar($consulta){
            return $this->conexion->query($consulta); //Realizo la consulta con la base de datos
        }
        function error(){
            return $this->conexion->errno;
        }
        function registrar(){
            if(isset($_POST['enviar'])){
                $consulta=  "INSERT INTO `usuario`(`nombreUsuario`, `contraseña`, `nombre`, `apellidos`, `correo`) 
                            VALUES ('".$_POST['nombreUsuario']."','".$_POST['contrasena']."','".$_POST['nombre']."','".$_POST['apellidos']."','".$_POST['correo']."');";
                echo $consulta;
                $resultado=$this->consultar($consulta);
                header('Location:preferencias.php');
            }
        }
        function inicio_sesion(){
            if(isset($_POST['enviar'])){
                $consulta="SELECT * FROM `usuario` WHERE nombreUsuario='".$_POST['nombreUsuario']."' AND contraseña='".$_POST['contrasena']."';";
                $resultado=$this->consultar($consulta);
                $fila=$resultado->fetch_array(MYSQLI_ASSOC);
                if($fila){
                    $_SESSION['id']=$fila['idUsuario'];
                    $_SESSION['nombreUsuario']=$fila['nombreUsuario'];
                    header('Location:indexi.php');
                }else{
                    echo 'No se ha iniciado sesión correctamente';
                }
            }
        }
        function preferencias(){
            
        }
    }
?>