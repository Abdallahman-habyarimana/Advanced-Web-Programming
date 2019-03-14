<?php
/**
 * Created by PhpStorm.
 * User: Tech
 * Date: 2019-03-14
 * Time: 2:59 PM
 */
class GreetingController extends DefaultController
{
    protected $model = null;

    public function __construct()
    {
        $this->model = new Greeting();
    }

    public function hello()
    {
        $message = $this->model->hello();
        include_once 'view/message.php';
    }

    public function Goodbye()
    {
        $message = $this->model->Goodbye();
        include_once 'view/message.php';
    }
}