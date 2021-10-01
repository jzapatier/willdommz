<?php

class Scroll {
    private $conetar;

    public $idscroll;
    public $titulo;
    public $imagen;
    public $descripcion;

    public function __CONSTRUCT() {
        $this->conetar = new mysqli("localhost", "root", "", "dbblog");
    }

    public function obtener()
    {
        $stm = $this->conetar->query("SELECT * FROM scrolltable");
        return $stm->fetch_row();
    }
}