<?php
// Creamo la coneccion a la bd//
class conexion{

    private static $objCon = null;
    private static $instancia = null;

    public static function obtenerInstancia(){
        if(self::$objCon == null){
           self::$instancia = new conexion();
           self::$objCon = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        }
        return self::$objCon;
 
    function __destruct(){
     mysqli_close(conexion::obtenerInstancia());
     
    }
  }
}
