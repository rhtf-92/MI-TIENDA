<?php
    class Conexion{
        public $conexion;
        public function conectar(){
            try{
                $instanciadb="mysql:host=localhost;dbname=".DB_NAME;
                $opciones = array(
                    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
                );
                $this->conexion = new PDO($instanciadb, DB_USER, DB_PASSWORD);
                echo "Conexion correcta!";
                return $this->conexion;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public function desconectar(){
            $this->conexion = null; 
        }
    }
?>