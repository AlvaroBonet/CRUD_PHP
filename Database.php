<?php

    class Database{

        public function conectar(){
            $driver = 'mysql';
            $host = 'localhost';
            $port = '3306';
            $user = 'root';
            $password = '';
            $db = 'practicaOrdenadores_';

            $dsn   = "$driver:dbname=$db;host=$host;port=$port";

            try {
                $gbd = new PDO($dsn, $user, $password);
                echo 'Conectado corectamente';
            }catch{
                echo 'Fallo la conexion' . $e->getMessage();
            }

            return $gbd;

        }

        public function getAll(){
            $sql = "SELECT * FROM pcs";
            $resultado = self::conectar()->query($sql);
            return $resultado;
        }


        //Funcion que elimina segun el id seleccionado
        public static function delete($id){
            $sql = "DELETE FROM pcs WHERE id = $id";
            self::conectar()->exec($sql);
        }

        //Funcion que inserta un ordenador en la basedeDatos
        public static function save($datos){
            $sql = "INSERT INTO pcs (marca, modelo, precio, descripcion) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]')";
            self::conectar()->exec($sql);
        }

        //Funcion que recibe un id por parametro y busca su ordenador asociado
        public static function findById($id){
            $sql = "SELECT * FROM pcs WHERE id = $id";
            $coche = self::conectar()->query($sql);
            return $coche->fetch(PDO::FETCH_ASSOC);
        }

        //Funcion que edita un ordenador
        public static function update($datos){
            $sql = "UPDATE pcs SET marca = $datos[1], modelo = $datos[2], precio = $datos[3], descripcion = $datos[4] WHERE id = $datos[0]";
            $coche = self::conectar()->query($sql);
            return $coche->fetch(PDO::FETCH_ASSOC);
        }

    }

?>