<?php

class Stud {
    private $name;
    private $family;
    private $avgr;
    public function __construct($name='',$family='',$avgr=0)
    {
        $this->name = $name;
        $this->family = $family;
        $this->avgr = $avgr;
    }
    public function setInfo($name,$family,$avgr)
    {
        $this->name = $name;
        $this->family = $family;
        $this->avgr = $avgr;
    }

    public function ShowInfo()
    {
        echo "<br>NAME:".$this->name;
        echo "<br>FAMILY:".$this->family;
        echo "<br>AVERGAE:".$this->avgr;
    }
}



$s1 = new Stud('ali','alavi',18);
$s1->ShowInfo();

$s2 = new Stud();
$s2->ShowInfo();

?>