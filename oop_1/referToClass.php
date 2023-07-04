<?php

use user as GlobalUser;

class User
{
    public $name;
    public static $status = 'active';
    public const bouns = 50;
    public function login()
    {
        // return 'login';
        $this->name;
        $this->register();

        User::$status;  #static property
        User::bouns; # Constant
        User::logout(); # static Functions

        # self => refere to current class
        self::$status;  #static property
        self::bouns; # Constant
        self::logout(); # static Functions
    }

    public function register()
    {
    }
    public static function logout()
    {
        return 'logout';
    }
}

$user = new User;
$user->name = 'seif';
// $user->status = 'kldklfkd';
// $user->login();
// print_r($user);
User::$status = 'not active';
// echo User::logout(); # :: scope resolution operator
// echo USer::bouns;

print_r($user);
