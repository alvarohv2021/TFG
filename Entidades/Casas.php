<?php
include_once("../BD/bd.php");

class Casa
{
    public $id, $tipo, $descripcion, $habitaciones, $precio, $oferta, $metrosCuadrados, $provincia, $propietario;

    public function __construct($id, $tipo, $descripcion, $habitaciones, $precio, $oferta, $metrosCuadrados, $provincia, $propietario)
    {
        $this->id = $id;
        $this->tipo = $tipo;
        $this->descripcion = $descripcion;
        $this->habitaciones = $habitaciones;
        $this->precio = $precio;
        $this->oferta = $oferta;
        $this->metrosCuadrados = $metrosCuadrados;
        $this->provincia = $provincia;
        $this->propietario = $propietario;
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
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of habitaciones
     */
    public function getHabitaciones()
    {
        return $this->habitaciones;
    }

    /**
     * Set the value of habitaciones
     *
     * @return  self
     */
    public function setHabitaciones($habitaciones)
    {
        $this->habitaciones = $habitaciones;

        return $this;
    }

    /**
     * Get the value of precio
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of oferta
     */
    public function getOferta()
    {
        return $this->oferta;
    }

    /**
     * Set the value of oferta
     *
     * @return  self
     */
    public function setOferta($oferta)
    {
        $this->oferta = $oferta;

        return $this;
    }

    /**
     * Get the value of metrosCuadrados
     */
    public function getMetrosCuadrados()
    {
        return $this->metrosCuadrados;
    }

    /**
     * Set the value of metrosCuadrados
     *
     * @return  self
     */
    public function setMetrosCuadrados($metrosCuadrados)
    {
        $this->metrosCuadrados = $metrosCuadrados;

        return $this;
    }

    /**
     * Get the value of provincia
     */
    public function getProvincia()
    {
        global $coon;

        $query = $coon->query("SELECT pr.Nombre FROM casas
        left join provincias as pr on casas.Provincia = pr.id
        where pr.id =" . $this->provincia . "
        group by pr.id");

        $nombreProvincia = $query->fetch_all(MYSQLI_ASSOC);

        return $nombreProvincia[0]["Nombre"];
    }

    /**
     * Set the value of provincia
     *
     * @return  self
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get the value of propietario
     */
    public function getPropietario()
    {
        return $this->propietario;
    }

    /**
     * Set the value of propietario
     *
     * @return  self
     */
    public function setPropietario($propietario)
    {
        $this->propietario = $propietario;

        return $this;
    }

    public function getEmailPropietario()
    {
        global $coon;

        $query = $coon->query("SELECT Email from casas
        left join usuarios as usr on casas.Propietario=usr.id
        where casas.id=" . $this->id);

        $emailPropietario = $query->fetch_all(MYSQLI_ASSOC);
        return $emailPropietario[0]['Email'];
    }
}
