<?php



class Mobile
{
    public $name;
    public $brand;
    public $price;
    public $ram;
    public $storage;
    public $battery;
    // public $madeIN = 'china';
    public $charger = false;
    public const madein = 'china';

    public function makeCalls()
    {
        echo "<p>make calls</p>";
    }

    public function takePhotos()
    {
        echo "<p>take Photos</p>";
    }
}

# child
class Samsung extends Mobile
{
    public $charger = true;
}
$newSamsungMobile = new samsung;
$newSamsungMobile->name = 'Note 20';
$newSamsungMobile->brand = 'Samsung';
$newSamsungMobile->price = '15000';
$newSamsungMobile->ram = '8G RAM';
$newSamsungMobile->storage = '256G Bytes';
$newSamsungMobile->battery = '5000 mA';
print_r($newSamsungMobile);

#child
class Apple extends Mobile
{
    public $faceId = true;
}

// echo Samsung::madein;
// echo Apple::madein;
// echo Mobile::madein;

$newAppleMobile = new apple;
$newAppleMobile->name = 'Iphone 13';
$newAppleMobile->brand = 'Apple';
$newAppleMobile->price = '25000';
$newAppleMobile->ram = '6G RAM';
$newAppleMobile->storage = '256G Bytes';
$newAppleMobile->battery = '4000 mA';
