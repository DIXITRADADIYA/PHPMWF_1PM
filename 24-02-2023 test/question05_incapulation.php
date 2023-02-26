<?php 

trait A 
{
    public function display()
    {
        echo "dixit"."<br>";
    }
}

trait B 
{
    public function display1()
    {
        echo "ridham"."<br>";
    }
}
class C 
{
         use A;
         use B;
    
}
$obj=new C;
$obj->display();
$obj->display1();
?>