<?php

class cal{
    public $x = 2;
    public $y = 2;
    public $z;
    public function add(){
        $this->z = $this->x + $this->y;
        echo "add ".$this->z;
    }
    public function sub(){
        $this->z = $this->x - $this->y;
        echo "sub ".$this->z;
    }
    public function mult(){
        $this->z = $this->x * $this->y;
        echo "mul ".$this->z;
    }
    public function div(){
        $this->z = $this->x / $this->y;
        echo "div ".$this->z;
    }
}

$d = new cal;
$d->add();
echo "<br>";
$d->sub();
echo "<br>";
$d->mult();
echo "<br>";
$d->div();
