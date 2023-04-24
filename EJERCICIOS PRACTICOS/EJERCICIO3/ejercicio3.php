<?php
class Imagenes{
    public $n1;
    
        public function __construct()
        {
        $this->n1 = $_POST['numero1'];
        }

        public function cantidadImagenes(){
            if ($this->n1=1) {
            echo 'poco';
            } else if($this->n1=2) {
            echo 'medio';
            } else if($this->n1=3){
            echo 'bastante'  ; 
            }
        }
    }

$img = new Imagenes($_POST['numero1']);
$img->cantidadImagenes();
    ?>