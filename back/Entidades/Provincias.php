<?php

class Provincias{
    public $id,$nombre,$poblacion,$densidad,$superficie;

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
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of poblacion
     */ 
    public function getPoblacion()
    {
        return $this->poblacion;
    }

    /**
     * Set the value of poblacion
     *
     * @return  self
     */ 
    public function setPoblacion($poblacion)
    {
        $this->poblacion = $poblacion;

        return $this;
    }

    /**
     * Get the value of densidad
     */ 
    public function getDensidad()
    {
        return $this->densidad;
    }

    /**
     * Set the value of densidad
     *
     * @return  self
     */ 
    public function setDensidad($densidad)
    {
        $this->densidad = $densidad;

        return $this;
    }

    /**
     * Get the value of superficie
     */ 
    public function getSuperficie()
    {
        return $this->superficie;
    }

    /**
     * Set the value of superficie
     *
     * @return  self
     */ 
    public function setSuperficie($superficie)
    {
        $this->superficie = $superficie;

        return $this;
    }
}

?>