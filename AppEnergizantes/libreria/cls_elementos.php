<?php

class elementos {
    private $Id = 0;
    private $nombre = '';
    private $precio = 0;
    private $descrip = '';
    private $unidad = 0;

    function __get($atributo){
        if(isset($this->$atributo)){
            return $this->$atributo;
        }
        else{
            return "N/A";
        }
    }
    function __set($atributo, $valor){
        if(isset($this->$atributo)){
            $this->$atributo =$valor;
        }
        else{
            echo " No existe {$atributo} <br/>";
        }
    }

    function Guardar(){
        if($this->Id > 0){
            $sql = "UPDATE inventario
            SET 
            Nombre = '{$this->nombre}',
            Precio = '{$this->precio}',
            Descripcion = '{$this->descrip}',
            Unidades = '{$this->unidad}'
            WHERE 
            ID = {$this->Id}";
            $c = conexion::obtenerInstancia();
            mysqli_query($c, $sql);
        }
        else{ 
            $sql = "INSERT INTO inventario
            (Nombre, Precio, Descripcion, Unidades) values('{$this->nombre}','{$this->precio}','{$this->descrip}','{$this->unidad}')";
            $c = conexion::obtenerInstancia();
            mysqli_query($c, $sql);
            $this->Id = mysqli_insert_id($c);    
        }
    }

    function cargar(){
     //    echo $sql;
        $sql = "SELECT * FROM inventario WHERE ID ={$this->Id}";
        $rs = mysqli_query(conexion::obtenerInstancia(),$sql);
      
        if(mysqli_num_rows($rs)>0){
            $fila = mysqli_fetch_assoc($rs);
            $this->nombre = $fila['Nombre'];
            $this->precio = $fila['Precio'];
            $this->descrip = $fila['Descripcion'];
            $this->unidad = $fila['Unidades'];
        }
    }

    static function borrar($id){
       $sql = "DELETE FROM inventario WHERE ID = {$id}";
       mysqli_query(conexion::obtenerInstancia(),$sql);
    }

    static function lista(){
        $datos = array();
        $sql = "SELECT * FROM inventario ORDER BY ID ASC";
        $rs = mysqli_query(conexion::obtenerInstancia(),$sql);
        if(mysqli_num_rows($rs) > 0){
            while($fila = mysqli_fetch_assoc($rs)){
           $datos[] = $fila;
        // var_dump($fila);
        }      
      }
       return $datos; 
    }
}