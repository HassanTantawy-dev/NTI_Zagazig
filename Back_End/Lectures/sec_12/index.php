<?php


class Car
{
    public $model;
    public $color;
    public $speed;

    public function drive()
    {
        echo "the model is $this->model and the color is $this->color and the speed is $this->speed";
    }
}

$car1 = new Car();
echo $car1->model = "BMW";
echo "<br>";
echo $car1->color = "Blue";
echo "<br>";
echo $car1->speed = 200;
echo "<br>";
$car1->drive();
echo "<br>";
$car2 = new Car();
echo $car2->model = "Mercedes";
echo "<br>";
echo $car2->color = "Black";
echo "<br>";
echo $car2->speed = 250;
echo "<br>";
$car2->drive();
echo "<br>";
echo "<hr>";

abstract class payGeteway
{
    abstract public function pay($amount);
}
class paypal extends payGeteway
{
    public function pay($amount)
    {
        echo "you have paid $amount using paypal";
    }
}
class stripe extends payGeteway
{
    public function pay($amount)
    {
        echo "you have paid $amount using stripe";
    }
}
function processPayment($gateway, $amount)
{
    echo $gateway->pay($amount);
}
processPayment(new paypal(), 100);
processPayment(new stripe(), 200);

// inheritance
class Animal
{
    public function eat()
    {
        echo "eating...";
    }
}
class Dog extends Animal
{
    public function bark()
    {
        echo "barking...";
    }
}
$dog = new Dog();
$dog->eat();
$dog->bark();

class Cat extends Animal
{
    public function meow()
    {
        echo "meowing...";
    }
}
$cat = new Cat();
$cat->eat();
$cat->meow();
echo "<hr>";
// trait
trait Logger
{
    public function log($message)
    {
        echo "Log: $message";
    }
}
trait Timestamp
{
    public function timestamp()
    {
        echo "Timestamp: " . date("Y-m-d H:i:s");
    }
}
class User
{
    use Logger;
    use Timestamp;
    public function login()
    {
        echo "logging in...";
    }
}
$user = new User();
$user->login();
$user->log("User logged in");
$user->timestamp();
echo "<hr>";
// final class cannot be extended and final method cannot be overridden
final class Database
{
    public function connect()
    {
        echo "Connecting to database...";
    }
}