<?php
# procedural programming

# oop => object oriennted programming

# class, object

# class =>local scope => group similar tasks


# User CLass :
# function login
# function logout
# function register

#order Class:
# function makeOrder
# function cancelOrder

#product class:
# function getMostReatedProducts
# function getmostrecentproduct

class User
{
    # properties
    public $userId;
    public $name;
    public $email;
    public $password;
    public $gender;
    public $phone = [];
    public $address = [];
    public $image;
    public $bod;

    # Methods
    public function login($email, $password)
    {
        echo '';
    }

    public function logout()
    {
        echo 'Logout';
    }

    public function register()
    {
        echo '';
    }
}

class Order
{
    public $orderId;
    public $products = [];
    public $totalCost;
    public $date;
    public $paymentMethod;
    public $status;
}

class Product
{
    public $productId;
    public $name;
    public $description;
    public $image = [];
    public $price;
}


# Create Object
$ali = new User();
$ali->name = 'ali gad';
$ali->email = 'ali@gmail.com';
$ali->password = '123456';
$ali->gender = 'm';
$ali->logout();
# print_r($ali);

# principle
# inheritance
# encapsulation
# abstraction
# polymorphism