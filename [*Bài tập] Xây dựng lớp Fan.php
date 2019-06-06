<?php
class Fan{
    public $SLOW;
    public $MEDIUM;
    public $FAST;
    private $status=false;
    private $radius;
    private $color;
    private $speed;

    public function __construct(){
        $this->color;
        $this->radius;
        $this->radius;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status=$status;
    }
    public function getSpeed(){
        return $this->speed;
    }
    public function setSpeed($speed){
        $this->speed=$speed;
    }
    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        return $this->color=$color;
    }
    public function getRadius(){
        return $this->radius;
    }
    public function setRadius($radius){
        return $this->radius=$radius;
    }

    public function toString(){
        if(!$this->status){
            return $this->color." ".$this->radius." fan is off";

        }
        else{
            return $this->speed." ".$this->color." ".$this->radius." fan is on";
        }
    }
}
$fan=new Fan();
$fan->setStatus(true);
$fan->setColor("yellow");
$fan->setRadius(10);
$fan->setSpeed(3);
echo $fan->toString();
echo "<br>";

$fan1=new Fan();
$fan1->setStatus(false);
$fan1->setColor("blue");
$fan1->setRadius(5);
$fan1->setSpeed(2);
echo $fan1->toString();
