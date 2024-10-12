<?php
class Vehicle {
    public $seatingCapacity;
    public function setSeatingCapacity($seatingCapacity) {
        $this->seatingCapacity = $seatingCapacity;
    }
    public function fare() {
        return $this->seatingCapacity * 100;
    }
}
class Bus extends Vehicle {
    public $seatingCapacity = 50;
    public function fare() {
        $totalFare = parent::fare();
        return $totalFare + (0.10 * $totalFare); 
    }
}
?>
