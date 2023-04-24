<?php
class Temperatura 
{
    public $n1;
    
        public function __construct()
        {
        $this->n1 = $_POST['numero1'];
        }
    
        public function formula()
        {
            return ($this->n1 * 9/5) + 32;
        }
}
    $total = new Temperatura();
    $resultado = $total->formula();
    echo "Los grados farenheit son: " . $resultado;
    
    ?>