<?php
/**
 * Created by PhpStorm.
 * User: Tech
 * Date: 2019-03-14
 * Time: 2:24 PM
 */

class Component
{
    protected $name = '';
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addOneAndEcho($i){
        $i++;
        echo $i. '-' . $this->name . '<br />';

        $instance = Dispatcher::getInstance();
        $instance::publish($this, $i);

        return $i;
    }
}