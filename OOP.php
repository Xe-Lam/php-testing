<?php
class car{
  public $model = "";

  public function setModel($newval){
    $this->model = $newval;
  }
  public function getModel(){
    return "The car model is ".$this->model."<br>";
  }
}

class compact extends car{
  private $seat = "0";
  public function setSeat($newval){
    $this->seat = $newval;
  }
  public function getSeat(){
    return "Number of seats is ".$this->seat."<br>";
  }
}

class mpv extends car{
  private $minSeat = "0";
  private $maxSeat = "0";
  public function setSeat($min, $max){
    $this->minSeat = $min;
    $this->maxSeat = $max;
  }
  public function getSeat(){
    return "Number of seats is ".$this->minSeat." and ".$this->maxSeat."<br>";
  }
}

$car1 = new compact;
$car1->setModel("X50");
echo $car1->getModel();
$car1->setSeat("5");
echo $car1->getSeat();

$car2 = new compact;
$car2->setModel("X70");
echo $car2->getModel();
$car2->setSeat("7");
echo $car2->getSeat();


$car3 = new mpv;
$car3->setModel("X90");
echo $car3->getModel();
$car3->setSeat(5, 7);
echo $car3->getSeat();
?>