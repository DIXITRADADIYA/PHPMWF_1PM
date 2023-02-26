<?php
//A abstract class or when we create a class as abstract class we never create the object on abstract.

// we can not create an object of class A but we access abstract class property by inheritance

abstract class A
{
    public function display()
    {
        echo "hi i am dixit"."<br>";
    }
}

class B extends A
{
    public function display1()
    {
        echo "hi i am ridham"."<br>";
    }
}

$obj=new B;
$obj->display();
$obj->display();

?>