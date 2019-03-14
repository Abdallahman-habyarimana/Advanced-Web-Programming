<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 5/4/2018
 * Time: 12:08 AM
 */
class Student {

}
// get all the classes declared including the built in class
$classes = get_declared_classes();

echo "Classes: ". implode(',', $classes)."<br />";
// check if the class exists
$class_names = ['Product', 'Student', 'student'];
foreach($class_names as $class_name){
    if(class_exists($class_name))
        echo "{$class_name} is a declared class. <br/>";
    else
        echo "{$class_name} is not a declared class. <br/>";

}
?>