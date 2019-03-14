<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 5/4/2018
 * Time: 12:17 AM
 */
// A single object created instance

class Student {
    //To declare a propert you use the keyword var
    public $first_name;
    public $last_name;
    public $country = 'None';
    protected $registration_id;
    private $tuition = 50000;

    // Method is a function inside the class
    public function hello_world() {
        return "Hello World";
    }
    protected function hello_family(){
        return 'Hello family';
    }
    private function hello_me(){
        return 'Hello me!';
    }
    public function full_name(){
        return $this->first_name ." ".$this->last_name;
    }

    public function tuition_fmt() {
        return $this->tuition;
    }
}

class PartTimeStudent extends Student {
    public function hello_parent(){
        return $this->hello_family();
    }
}
//Instantiation
// Different with other you don't use ()
// We can have many instance we want

$student1 = new PartTimeStudent;
$student1->first_name ='Abdallah';
$student1->last_name ='Habyarimana';

echo $student1->full_name()."<br />";

echo $student1->hello_world(). "<br />";
echo $student1->hello_parent(). "<br />";
//echo $student1->hello_me(). "<br />";

$student1->tuition = 1000;
echo $student1->tuition .'<br />';
echo $student1->tuition_fmt(). '<br />';

?>