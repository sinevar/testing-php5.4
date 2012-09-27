<?php

error_reporting(E_ALL);

trait Car
{
  function getColor()
  {
    $color = 'red';
    echo $color;

    return $this;
  }

  public function __toString()
  {
    return 'ee';
  }

  public function cosik()
  {
    echo 'cosik';
  }
   
}

trait Ship
{
  function getWeight($x)
  {
    echo $x * 2;

    return $this;
  }

  public function __toString()
  {
    return 'Ship__toString';
  }

  public function cos()
  {
    echo 'eee';
  }
}

interface ola
{
}

class Vehicle 
{
  use Car, Ship {
    Car::__toString insteadof Ship;
    Ship::__toString insteadof Vehicle3;
    Ship::__toString insteadof ola;
    Ship::cos as ela;
    Car::cosik as ela2;
  }


  public function __construct()
  {
    echo $this->cos();
  }

  public function __toString()
  {
    return 'Vehicle';
  }

}

//echo (new Vehicle())->getColor()->getWeight(10); die;


class Vehicle2 extends Vehicle 
{
  public function __toString()
  {
    return 'Vehicle2';
  }
}

class Vehicle3 
{
}

echo (new Vehicle2())->getColor()->getWeight(10);

