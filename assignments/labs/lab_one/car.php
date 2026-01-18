<?php
// Car Class
class car {
    //class ! ! ! 
    public $make;
    public $model;
    public $year;

    // function to describe
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    

}
?>