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
    var $first_name;
    var $last_name;
    var $country = 'None';

    // Method is a function inside the class
    function say_hello() {
        return "Hello World";
    }

    function full_name(){
        return $this->first_name ." ".$this->last_name;
    }
}
//Instantiation
// Different with other you don't use ()
// We can have many instance we want

$student1 = new Student;
$student1->first_name ='Abdallah';
$student1->last_name ='Habyarimana';
$student2 = new Student;
$student2->first_name = 'Robert';
$student2->last_name ='Nuwayo';

echo $student1->full_name()."<br />";
echo $student2->full_name(). "<br />";


$class_vars = get_class_vars('Student');
echo "Class vars : <br />";
echo "<pre>";
print_r($class_vars);
echo "</pre>";

$object_vars = get_object_vars($student1);
echo "Class vars:<br />";
echo "<pre>";
print_r($object_vars);
echo "</pre>";

if (property_exists('Student', 'first_name'))
    echo "Propert Exists";
else
    echo "Properts Doesn'exists1";