<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 3/13/2019
 * Time: 9:23 PM
 */

class JSONDecorator
{
    protected $book = null;

    public function __construct($book_object)
    {
        $this->book =$book_object;
    }

    public function render(){
       echo json_encode($this->book);
    }
    //echo '<ul>';
}