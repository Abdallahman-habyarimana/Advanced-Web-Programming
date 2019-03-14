<?php
/**
 * Created by PhpStorm.
 * User: Tech
 * Date: 2019-03-14
 * Time: 2:56 PM
 */
class DefaultController
{
    public function run($action = 'index', $id = 0)
    {
        if(!method_exists($this, $action)){
            $action = 'index';
        }
        return $this->$action($id);
    }

    public function index(){
        include('view/default.php');
    }
}