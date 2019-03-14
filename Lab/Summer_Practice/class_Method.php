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
    function say_bye(){
        return "Bye";
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

echo $student1->say_hello()."<br />";
echo $student2->say_hello()."<br />";

$class_methods = get_class_methods('Student');
echo "Class methods: ". implode(',', $class_methods)."<br />";

if (method_exists('Student', 'say_hello'))
    echo "Method say_hello() exist in student class";
else
    echo "Method say_hello() doesn't exist in student class";

//get_class_methods

// method_exists