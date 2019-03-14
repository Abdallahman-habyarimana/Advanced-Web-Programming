<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 5/5/2018
 * Time: 12:02 AM
 */
class User {
    var $is_admin = false;
    var $first_name;
    var $last_name;
    var $username;

    function full_name(){
        return $this->first_name ." ". $this->last_name;
    }
}

class Customer extends User {
  var $city;
  var $state; // or province
  var $country;

  function location() {
      return $this->city .", ".$this->state.",".$this->country;

  }

}

class AdminUser extends User {
    var $is_admin = true;

    function full_name(){
        return $this->first_name ." ". $this->last_name ." (Admin)";
    }
}

$u = new User();
$u->first_name = ' Abdallahman';
$u->last_name ='Habyarimana';
$u->username ='habdallah05';

$c = new Customer();
$c->first_name = 'Robert';
$c->last_name ='Deniro';
$c->username ='deniroRobert';
$c->city = "Toronto";
$c->state = "ON";
$c->country = "CANADA";


echo $u->full_name()."<br />";
echo $c->full_name()."<br />";
echo $c->location()."<br />";
//echo $u->location()."<br />"; The parent doesn have the location

echo get_parent_class($u)."<br />";
echo get_parent_class($c)."<br />";

if(is_subclass_of($c, 'User')){
    echo "Instance is a subclass of User <br />";
}

$parents = class_parents($c);
echo implode(',', $parents);

