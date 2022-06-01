<?php

class Provincias
{
    public $id, $nombre, $poblacion, $densidad, $superficie;

    public function __construct($id, $nombre, $poblacion, $densidad, $superficie)
    {

        $this->id = $id;
        $this->nombre = $nombre;
        $this->poblacion = $poblacion;
        $this->densidad = $densidad;
        $this->superficie = $superficie;
    }



    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get the value of poblacion
     */
    public function getPoblacion()
    {
        return $this->poblacion;
    }

    /**
     * Get the value of densidad
     */
    public function getDensidad()
    {
        return $this->densidad;
    }

    /**
     * Get the value of superficie
     */
    public function getSuperficie()
    {
        return $this->superficie;
    }

    public function getNumOfertas()
    {

        global $coon;
        $query = $coon->query("SELECT count(casas.id) as numOfertas from provincias as pr
        left join casas on pr.id=casas.Provincia
        where pr.id =" . $this->id . "
        group by pr.id");

        $numOfertas = $query->fetch_all(MYSQLI_ASSOC);
        return $numOfertas[0]['numOfertas'];
    }
}
