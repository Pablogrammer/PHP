<?php
namespace Controllers;

use Models\Butaca;

use Lib\Pages;

class ButacaController{
    private Pages $pages;
    private Butaca $butaca;
    
    public function __construct(){
        $this->pages = new Pages();
        $this->butaca = new Butaca(0,0,'','');
    }

    public function mostrarButacas(){
        $sala = $this->butaca->obtenerButacas();
        if($sala && is_object($sala)){
            $this->pages->render('butaca/mostrarbutaca', ['sala' => $sala]);
        }
    }
}


?>