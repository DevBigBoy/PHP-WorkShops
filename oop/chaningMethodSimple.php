<?php


class user
{
    public $name;

    public function getUser()
    {
        return $this;
    }

    public function login()
    {
        return $this;
    }
}


$user = new user;
$user->name = 'galal';
// $user->getUser()->login()->name;