<?php
// CLASS DOG**********************************************************
class Dog {
  public $name;
  public $age;
  public $gender;
  public $breed;
  public $size;
  public $kg;

  public function __construct($name, $age, $gender, $breed, $size, $kg) {
    $this->name = $name;
    $this->age = $age;
    $this->gender = $gender;
    $this->breed = $breed;
    $this->size = $size;
    $this->kg = $kg;
  }
}

// CLASS OWNER*******************************************************
class Owner {
  public $name;
  public $surname;
  private $city;
  private $phoneNumber;
  public $dog = [];

  public function __construct($name, $surname, $city, $phoneNumber, $dog) {
    $this->name = $name;
    $this->surname = $surname;
    $this->city = $city;
    $this->phoneNumber = $phoneNumber;
    $this->dog = $dog;
  }

  // funzioni per accedere agli attributi privati
  public function getCity() {
    return $this->city;
  }

  public function getPhoneNumber() {
    return $this->phoneNumber;
  }
}

// CLASS BOARDING KENNEL*********************************************
class BoardingKennel {
  public $name;
  public $city;
  private $dogs = [];

  public function __construct($name, $city) {
    $this->name = $name;
    $this->city = $city;
  }

  // funzione per aggiungere SOLO oggetti Dog all'array dogs
  public function addDog(Dog $dog) {
      $this->dogs[] = $dog;
  }

  public function getDogs() {
    return $this->dogs;
  }
}

$Wanda = new Dog('Wanda', 4, 'female', 'half-breed', 'big', 40);
$Chino = new Dog('Chino', 1, 'male', 'cattle dog', 'medium', 25);
$Ronny = new Dog('Ronny', 11, 'male', 'half-breed', 'small', 10);

$Sabrina = new Owner('Sabrina', 'Fontana', 'Gravedona', '3332323233', [$Wanda, $Chino]);

$angelinaKennel = new BoardingKennel('Angelina Kennel', 'Luisago');


echo 'var_dump Dog Wanda:';
var_dump($Wanda);

echo '<hr> var_dump Dog Chino:';
var_dump($Chino);

echo '<hr> var_dump Dog Ronny:';
var_dump($Ronny);

echo '<hr> var_dump Owner Sabrina:';
var_dump($Sabrina);

echo '<hr> var_dump Boarding Kennel Angelina Kennel (prima di aggiungere oggetti Dog):';
var_dump($angelinaKennel);

$angelinaKennel->addDog($Ronny);
$angelinaKennel->addDog($Wanda);

echo '<hr> var_dump Boarding Kennel Angelina Kennel (dopo aver aggiunto oggetti Dog):';
var_dump($angelinaKennel);


echo '<hr> funzioni per accedere agli attributi privati <br><br>';

echo 'getDogs() della classe Boarding Kennel: <br>';
print_r($angelinaKennel->getDogs());
echo '<br><br>getCity() della classe Owner: <br>' . $Sabrina->getCity();
