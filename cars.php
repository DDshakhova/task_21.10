<?php

interface SomeInterface {
    public function signal();
    public function wipers();
}
//Do tanks have wipers??

abstract class Auto implements SomeInterface
{
    protected $driver = 'Admin';
    protected $interior = 'default';
    protected $smell = null;
    protected $music = null;

    public function getDriver()
    {
        return $this->driver;
    }
    
    public function setDriver($driver)
    {
        $this->driver = $driver;
    }

    public function moveForward($driver) {
        $this->getDriver();
        echo $driver . "'s on her way";
    }
    public function stop() {
        echo "Let's take a break";
    }

    public function signal() {
        echo "Beep";
    }

    public function wipers() {
    }
    //What sound do wipers make??

    abstract public function moveBack();
    abstract public function talent(string $driver);
}

class Car extends Auto {
    protected $driver = 'Diana';
    public $interior = 'leather';
    public $smell = 'menthol cigarettes';
    public $music = 'BONES - HDMI';

    //to show you I know not only inherited vars can exist  
    private $uniqueStuff = 'a cat';

    
    public function moveBack(){
        echo "Oh no, I forgot my cat!!!!!!!";
    }
    public function talent(string $driver) {
        echo $driver . " " . "has just used nitrous oxide";
    }
}

class Tank extends Auto {
    protected $driver = 'Lucy';
    public $interior = 'steel';
    public $smell = 'napalm in the morning';
    public $music = 'Toto - Africa';
    
    public function moveBack(){
        echo "Retreating";
    }
    public function talent(string $driver) {
        echo $driver . " " . "has just opened fire";
    }
}
class Bulldozer extends Auto {
    //to show you I know not ALL inherited vars can be there
    protected $driver = 'Daria';
    public $interior = 'fabric';
    public $music = 'Megadeth - Tornado Of Souls';

    
    public function moveBack(){
      echo "No more snow for today";
    }

    public function talent(string $driver) {
        echo $driver . "'s gonna clear some snow";
    }
    //to show you I know not only inherited functions can exist  
    public function failure() {
        echo "Oops...";
    } 
}

class LetsDrive {

    public function wipers(SomeInterface $vehicle)
    {
        $vehicle->wipers();
    }

    public function signal(SomeInterface $vehicle)
    {
        $vehicle->signal();
    }

    //the function you asked for (I hope)
    public function letsGo($vehicle) {
        $vehicle->moveForward();
        $vehicle->talent();
    }

    public function moveBack($vehicle) {
        $vehicle->moveBack();
    }
    public function stop($vehicle) {
        $vehicle->stop();
    }

}

$vehicle = new Car();
$LetsDrive = new LetsDrive();
$LetsDrive->letsGo($vehicle);