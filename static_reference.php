<?php 
class Cars {

static $wheel_count = 4;




function car_detail() {
    return self::$wheel_count; 



}
}
 
class Trucks extends Cars {

    static function display() {
        echo parent::car_detail();
    }
}
// echo Cars::$door_count;
// Cars::car_detail();

Trucks::display();
?>