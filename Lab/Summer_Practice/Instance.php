<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 5/4/2018
 * Time: 12:17 AM
 */
// A single object created instance

class Student {

}
//Instantiation
// Different with other you don't use ()
// We can have many instance we want

$student1 = new Student;
$student2 = new Student;

// two function for instances
//get_class()
echo get_class($student1)."<br/>";

//is_a

$class_names = ['Product', 'Student', 'student'];
foreach($class_names as $class_name){
    if(is_a($student1, $class_name))
        echo "{$class_name} is a declared class. <br/>";
    else
        echo "{$class_name} is not a declared class. <br/>";

}

