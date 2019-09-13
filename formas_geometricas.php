<?php   

class Formas{
    public $a;
    public $b;
    public $c;
    public $B;
    public $P;

    public function Retangulo(){

        $a = $_POST['a'];       
        $b = $_POST['b'];     
        $P = 2*($a+$b);
        echo "<h2>O valor do perimetro do Retangulo é: ". $P. "</h2>";
        
    }

    public function Quadrado(){
        $a = $_POST['a'];
        $P = 4*$a;
        echo "<h2>O valor do perimetro do Quadrado é: ". $P. "</h2>";
    }

    public function Trapezio(){
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $B = $_POST['B'];
        $P = $a+$b+$c+$B;
        echo "<h2>O valor do perimetro do Trapésio é: ". $P. "</h2>";
    }

    public function Paralelogramo(){
        $a = $_POST['a'];       
        $b = $_POST['b'];     
        $P = 2*($a+$b);
        echo "<h2>O valor do perimetro do Parelogramo é: ". $P. "</h2>";
    }


}
?>