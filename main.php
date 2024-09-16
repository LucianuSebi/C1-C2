<?php

require_once 'autoload.php';

$student1 = new \Objects\Student("Cineva Candva",1.78,65.5,21,2323,"USV",2, md5(uniqid(rand(), true)));

$student2 = clone $student1;

$student3 = new \Objects\Student("Cadaa Ghsdva",1.458,25.7,23,23231323,"USV",4, md5(uniqid(rand(), true)));

echo 'There are '.\Objects\Human::$population.' people.'.PHP_EOL;

echo 'Studentul 1 are ' .$student1->getAge(). ' ani.'.PHP_EOL;

$student2->setAge(25);

echo 'Studentul 2 are ' .$student2->getAge(). ' ani.'.PHP_EOL;

unset($student3);