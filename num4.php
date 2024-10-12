<?php
class Bus extends Vehicle {
    public $seatingCapacity = 50;

    public function setBusValues($name, $speed, $mileage, $seatingCapacity = 50) {
        $this->setValues($name, $speed, $mileage);
        $this->seatingCapacity = $seatingCapacity;
    }

    public function seating_capacity() {
        return $this->seatingCapacity;
    }
?>