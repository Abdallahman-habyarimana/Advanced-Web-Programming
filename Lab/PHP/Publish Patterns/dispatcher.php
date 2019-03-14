<?php
/**
 * Created by PhpStorm.
 * User: Tech
 * Date: 2019-03-14
 * Time: 2:24 PM
 */

class Dispatcher{
    public function getInstance() {
        static $instance = null;
        if(null === $instance ){
            $instance = new Static();
        }
        return $instance;
    }

    public static function subscribe($object, $subscriber){
        $instance = Dispatcher::getInstance();
        $id =spl_object_id($object);

        $instance->listeners[$id][] = $subscriber;
    }

    public static function publish($object, $i){
        $instance = Dispatcher::getInstance();
        $id =spl_object_id($object);

        $subscribers = $instance->listeners[$id];

        foreach($subscribers as $subscriber) {
            $i = $subscriber->addOneAndEcho($i);
        }
    }
}