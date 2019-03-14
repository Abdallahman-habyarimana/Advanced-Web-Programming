<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 3/13/2019
 * Time: 9:20 PM
 */

class HTMLDecorator
{
    protected $book = null;

    public function __construct($book_object)
    {
        $this->book =$book_object;
    }

    public function render(){
        $properties = get_object_vars($this->book);
        //loop throught this
        echo $properties;
    }
    //echo '<ul>';
}