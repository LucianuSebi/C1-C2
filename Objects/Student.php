<?php

namespace Objects;

trait Entity{
    public function getId(){
        return $this->id;
    } 
}

abstract class Human {

    use Entity;
    const RIGHTS = true;
    private $id;

    static $population = 0;
    private $height;
    private $weight;
    private $age;
    private $name;
    
    abstract public function getOcupation();

    public function __construct($name, $height, $weight, $age, $id){
        if(is_string($id)){
            $this->id = $id;
        }else{
            throw new \Exception('Invalid value for id.');
        }
        if(is_float($height)){
            $this->height = $height;
        }else{
            throw new \Exception('Invalid value for height.');
        }
        if(is_float($weight)){
            $this->weight = $weight;
        }else{
            throw new \Exception('Invalid value for weight.');
        }
        if(is_int($age)){
            $this->age = $age;
        }else{
            throw new \Exception('Invalid value for age.');
        }
        if(is_string($name)){
            $this->name = $name;
        }else{
            throw new \Exception('Invalid value for name.');
        }
        self::$population++;
    }

    public function getHeight(){
        return $this->height;
    }
    public function getWeight(){
        return $this->weight;
    }
    public function getAge(){
        return $this->age;
    }
    public function getName(){
        return $this->height;
    }

    public function setHeight($height){
        if(is_float($height)){
            $this->height = $height;
        }else{
            throw new \Exception('Invalid value for height.');
        }
    }
    public function setWeight($weight){
        if(is_float($weight)){
            $this->weight = $weight;
        }else{
            throw new \Exception('Invalid value for weight.');
        }
    }
    public function setAge($age){
        if(is_int($age)){
            $this->age = $age;
        }else{
            throw new \Exception('Invalid value for age.');
        }
    }
    public function setName($name){
        if(is_string($name)){
            $this->name = $name;
        }else{
            throw new \Exception('Invalid value for name.');
        }
    }

}

class Student extends Human {

    const OCUPATION = "Student";
    private $studentId;
    private $school;
    private $year;

    public function getOcupation(){
        return self::OCUPATION;
    }

    public function __construct($name, $height, $weight, $age, $studentId, $school, $year, $id){
        if(is_int($studentId)){
            $this->studentId = $studentId;
        }else{
            throw new \Exception('Invalid value for studentId.');
        }
        if(is_string($school)){
            $this->school = $school;
        }else{
            throw new \Exception('Invalid value for weight.');
        }
        if(is_int($year)){
            $this->year = $year;
        }else{
            throw new \Exception('Invalid value for age.');
        }
        parent::__construct($name, $height, $weight, $age, $id);
    }

    public function __destruct() {
        echo "A student has been deleted.\n";
    }

    public function getStudentId(){
        return $this->studentId;
    }
    public function getSchool(){
        return $this->school;
    }
    public function getYear(){
        return $this->year;
    }

    public function setStudentId($studentId){
        if(is_string($studentId)){
            $this->studentId = $studentId;
        }else{
            throw new \Exception('Invalid value for studentId.');
        }
    }
    public function setSchool($school){
        if(is_string($school)){
            $this->school = $school;
        }else{
            throw new \Exception('Invalid value for school.');
        }
    }
    public function setYear($year){
        if(is_int($year)){
            $this->year = $year;
        }else{
            throw new \Exception('Invalid value for year.');
        }
    }
}
