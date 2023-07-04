<?php
# private Properties
### Private properties are only accessible from within the class in which they are defined
class User
{
    protected $userId;
    protected $name;
    protected $email;
    protected $password;
    protected $gender;
    protected $phone = [];
    protected $address = [];
    protected $image;
    protected $bod;
}

class userWallet extends User
{
    private $balance;
    private const bonus = 50;


    public function getBalance()
    {
        return $this->balance;
    }

    public function addBonusToBalance()
    {
        $this->balance += self::bonus;
    }

    public function deposite($depositeBalance)
    {
        $this->balance += $depositeBalance;
    }

    public  function withDraw($withdrawBalance)
    {
        $this->balance -= $withdrawBalance;
    }
}


$newUser = new userWallet;
$newUser->addBonusToBalance();
$newUser->deposite(150);
$newUser->withDraw(100);
echo $newUser->getBalance();
