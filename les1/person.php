<?php
class Persoon{
    private $name;
    private $age;
    private $isStudent;
    private $double;

}

//contruct methode
function__construct(string $name, int $age, string $gender){
    $this->$name=$name;
    $this->age=$age;
    $this->gender=$gender;
    echo "A new Person-object has been created.";
    echo "The property name of this object is $name";

}
?>