<?php
class Conexion 
{
    static public function cbd()
    {
        $bd = new PDO("mysql:host=localhost;dbname=tallerbd","root","");
        return $bd; 
    }
}
?>