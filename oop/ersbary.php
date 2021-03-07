<?php

class Person{
    private $name;
    private $family;
    public function __construct($name,$family)
    {
        $this->name = $name;
        $this->family = $family;
    }
    protected function ShowPerson()
    {
        echo "<br>NAME:".$this->name;
        echo "<br>FAMILY:".$this->family;
    }    
}

class Stud extends Person {
    private $avgr;
    public function __construct($name='',$family='',$avgr=0)
    {
        parent::__construct($name , $family);
        $this->avgr = $avgr;
    }
    public function ShowInfo()
    {
        $this->ShowPerson();
        echo "<br>AVERGAE:".$this->avgr;
    }
}
class Karmand extends Person {
    private $sallary;
    public function __construct($name='',$family='',$sallary=0)
    {
        parent::__construct($name , $family);
        $this->sallary = $sallary;
    }
    public function ShowInfo()
    {
        $this->ShowPerson();
        echo "<br>SALLARY:".$this->sallary;
    }
}




$s1 = new Stud('ali' , 'alavi' , 19.5 );
$s1->ShowPerson();
$s1->ShowInfo();

$k1 = new Karmand('ali' , 'rezaee' ,500000);
$k1->ShowInfo();

?>