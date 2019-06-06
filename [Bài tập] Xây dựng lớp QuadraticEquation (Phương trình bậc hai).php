<?php
class QuadraticEquation{
    public $a;
    public $b;
    public $c;
    public function __construct($a,$b,$c)
    {
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
    }

    public function getDiscriminant(){
        $delta=$this->b**2-4*$this->a*$this->c;
        return $delta;
    }
    public function getRoot1(){
        $root1=(-$this->b+sqrt($this->getDiscriminant()))/2*$this->a;
        return $root1;
    }
    public function getRoot2(){
        $root1=(-$this->b-sqrt($this->getDiscriminant()))/2*$this->a;
        return $root1;
    }

    public function display(){
        if($this->getDiscriminant()<0){
            echo "The equation has no roots";
        }
        if ($this->getDiscriminant()==0){
            echo "pt co 1 nghiem: ".$this->getRoot1();

        }
        if ($this->getDiscriminant()>0){
            echo "pt co nghiem: ".$this->getRoot1();
            echo "pt co nghiem: ".$this->getRoot2();


        }
    }
}
$Tinh=new QuadraticEquation(1,2,1);
$Tinh->display();