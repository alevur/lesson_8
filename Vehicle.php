<?php

abstract class Vehicle
{
    abstract function getName();
}

class Bus extends Vehicle {
   public int $year_of_issue;
   public int $weight ;

   public function __construct($_year_of_issue, $_weight)
   {
       $this->year_of_issue = $_year_of_issue;
       $this->weight = $_weight;
   }

    public function getName()
   {
       echo "Автобус весом $this->weight тонн и $this->year_of_issue года выпуска";
   }
}

$bus = new Bus(1956, 2000);
$bus->getName();