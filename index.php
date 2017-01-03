<?php
/**
 * Created by PhpStorm.
 * User: elsevar
 * Date: 01.01.17
 * Time: 16:57
 */


class Student {

    private $firstName;
    private $lastName;
    private $birthDate;

    /**
     * Student constructor.
     * @param $firstName
     * @param $lastName
     */
    public function __construct($firstName, $lastName) {
        if (is_numeric($firstName)) {
            $this->firstName = $firstName;
        }else{
            throw new InvalidArgumentException('Некорректные данные');
        }
        if (is_numeric($lastName)) {
            $this->lastName = $lastName;
        }else {
            throw new InvalidArgumentException('Некорректные данные');
        }
    }


    /**
     * @return mixed
     */
    public function getFirstName() {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName() {
        return $this->lastName;
    }



    function getFullName(){
        static $a = 5;
        return $this->getFirstName(). ' '. $this->getLastName();
    }



}

$student = new Student('2','2');
echo $student->getFullName();