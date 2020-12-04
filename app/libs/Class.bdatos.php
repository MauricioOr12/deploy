<?php

class Bdatos
{
    public function getConexion()
    {
        try {
            $link = new PDO("mysql:host=localhost;dbname=redsocial;", 'root', '');
            $link->exec("set names utf8");
            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
            return $link;
        } catch (PDOException $error){
            echo "Error en la Conexion: " . $error ->getMessage() . "<br/>";
        }
    }

    public function listarRegistros($sql)
    {
        $link = $this->getConexion();
        $consulta = $link->prepare("$sql");
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_OBJ);
    }

    public function insertarRegistros($sql)
    {
        $link = $this->getConexion();
        $consulta = $link->prepare("$sql");

        if($consulta->execute())
        {
            return'insercion exitosa UwU';
        }
        else
        {
            return 'ocurrio un error QWQ';
        }
        $consulta->execute();
    }
}