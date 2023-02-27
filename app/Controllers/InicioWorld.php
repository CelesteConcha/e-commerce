<?php
namespace App\Controllers;

class InicioWorld extends BaseController{
    
    public function index(){
        $data=['titulo'=>'Tienda'];
        $vistas= view('worldgames/header',$data).
        
        view('worldgames/navbar'). 
        
         view('worldgames/imagenejem.php').
         view('worldgames/anuncioflot.php').
                // view('worldgames/jumbotron.php').     
                 view('worldgames/carruselInicio').
                 view('worldgames/cardsInicio.php').
               
                 view('worldgames/contacto.php').
                 view('worldgames/image').
                 view('worldgames/footer').
                 view('inicio');
        return $vistas;
    }

}
