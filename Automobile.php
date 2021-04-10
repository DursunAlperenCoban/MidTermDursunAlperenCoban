<?php
class Automobile{
    public $licencePlate;
    public $brand;
    public $model;
    public $modelYear;
    public $color;

    function __construct($licencePlate,$brand,$model,$modelYear,$color)
    {
        $this->licencePlate=$licencePlate;
        $this->brand=$brand;
        $this->model=$model;
        $this->modelYear=$modelYear;
        $this->color=$color;
    }
    function __toString()
    {
      return  "Licence Plate: ".$this->licencePlate ."<br>Brand: ". $this->brand ."<br>Model: ". $this->model ."<br>Year: ". $this->modelYear ."<br>Color: ". $this->color;
    }
}
?>