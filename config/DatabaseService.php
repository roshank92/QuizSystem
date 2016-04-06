<?php
//connect to database
class Person{
   private $name;
   const SUCCESS="success";
   var $a;
    private $b;
    function getName(){
        return $this->name;
    }
    function setName($name){
        $this->name=$name;
        $this->a=$this->a+1;
        $this->b=45;
        echo $this->b;
    }
    function Person($name){
        $this->setName($name);
    }
}
$person1=new Person("Roshan");
$person2=new Person("Roshan2");
$person3=new Person("Roshan3");
$person1->setName("a1");
$person2->setName("a2");
$person3->setName("a3");
echo $person1->a;
print Person::SUCCESS;

?>
