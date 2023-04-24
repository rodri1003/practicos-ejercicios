<?php
class Temperatura{
    public $n1;
    
        public function __construct()
        {
        $this->n1 = $_POST['numero1'];
        }

        public function evaluarTemperatura(){
            if ($this->n1<=0) {
            echo 'temperatura máximamente FRIA';
            } else if($this->n1<=30) {
            echo 'temperatura estable ';
            } else if($this->n1>=31){
            echo 'temperatura máximamente CALIENTE'  ; 
            }
        }
    }

$temp = new Temperatura($_POST['numero1']);
$temp->evaluarTemperatura();
    ?>