<?PHP

if (!$_POST) {
    // echo "Error 405 Method Not Allowed";die;
    header('location:sale.php');die;
}

// user -> enter his name
// user -> enter his phone
// user -> select $products = ['laptop'=>15000,'mobile'=>12000,'tv'=>10000,'tshirt'=> 250]
// user -> select  $cities = ['cairo'=>0,'alex'=>50,'others'=>200]
// $discount = ['laptop'=>0.2,'mobile'=>0.1,'tv'=> 0.05 , 'tshirt'=>0]
// vat : 14%
// superglobals => $_POST , $_GET , $_REQUEST => associative array


// solution
// Name : Galal
// Phone : 01000498488
// City : Alex
// Delivery tax : 50 EGP
// Product : Laptop
// price : 15000 EGP
// Price After Vat : 17100 EGP
// Discount Percentage : 20 %
// Disount Value : 3420 EGP
// Price After Discount : 13680 EGP
// Total Price : 13730 EGP

define('vat',0.14);
switch ($_POST['city']) {
    case 'Cairo':
       $delivery = 0;
        break;
    
    case 'Alex':
        $delivery = 50;
        break;
    
    default:
        $delivery = 200;
        break;
}

switch ($_POST['product']) {
    case 'Tshirt':
        $price = 250;
        $discount = 0;
        break;
    case 'Mobile':
        $price = 12000;
         $discount = 0.1;
        break;
    case 'Tv':
        $price = 10000;
         $discount = 0.05;
        break;
    case 'Laptop':
        $price = 15000;
         $discount = 0.2;
        break;
    
    default:
        $price=0;
        break;
}

$vat = $price * vat;
$priceAfterVat = $price + $vat;

$discountValue = $priceAfterVat * $discount;
$priceAfterDiscount = $priceAfterVat - $discountValue;
$totalPrice = $delivery + $priceAfterDiscount;
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="./style.css">
    <title>Invoice</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 body-main">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img" alt="Invoce Template"
                                src="http://pngimg.com/uploads/shopping_cart/shopping_cart_PNG59.png" />
                        </div>
                        <div class="col-md-8 text-right">
                            <h4 style="color: #F81D2D;"><strong><?= $_POST['name']; ?></strong></h4>
                            <p><b>Address :</b> <?= $_POST['city']; ?></p>
                            <p><b>Phone :</b> <?= $_POST['phone']; ?></p>
                            <p><b>Email :</b> Mo@shazly.com</p>
                            <p><b>Date :</b> 13 June 2023</p>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>INVOICE</h2>
                            <h5>04854654101</h5>
                        </div>
                    </div>
                    <br />
                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <h5>Description</h5>
                                    </th>
                                    <th>
                                        <h5>Amount</h5>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-md-9"><?= $_POST['product'] ?></td>
                                    <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i>
                                        <?= $price; ?> <b>EGP</b>
                                    </td>
                                </tr>


                                <tr>
                                    <td class="text-right">
                                        <p>
                                            <strong>Price:</strong>
                                        </p>

                                        <p>
                                            <strong>Vat Amount: </strong>
                                        </p>
                                        <p>
                                            <strong>Price After Vat: </strong>
                                        </p>
                                        <p>
                                            <strong>Discount Precentage: </strong>
                                        </p>
                                        <p>
                                            <strong>Discount Value: </strong>
                                        </p>
                                        <p>
                                            <strong>Price After Discount: </strong>
                                        </p>
                                        <p>
                                            <strong>Delivery Tax: </strong>
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            <strong><i class="fas fa-rupee-sign" area-hidden="true"></i>
                                                <?= $price; ?> <b>EGP</b>
                                            </strong>
                                        </p>
                                        <p>
                                            <strong><i class="fas fa-rupee-sign" area-hidden="true"></i>
                                                <?= vat * 100; ?> <b>%</b></strong>
                                        </p>
                                        <p>
                                            <strong><i class="fas fa-rupee-sign" area-hidden="true"></i>
                                                <?= $priceAfterVat; ?> <b>EGP</b>
                                            </strong>
                                        </p>
                                        <p>
                                            <strong><i class="fas fa-rupee-sign" area-hidden="true"></i>
                                                <?= $discount * 100; ?> <b>%</b></strong>
                                        </p>
                                        <p>
                                            <strong><i class="fas fa-rupee-sign" area-hidden="true"></i>
                                                <?= $discountValue; ?> <b>EGP</b></strong>
                                        </p>
                                        <p>
                                            <strong><i class="fas fa-rupee-sign" area-hidden="true"></i>
                                                <?= $priceAfterDiscount; ?> <b>EGP</b></strong>
                                        </p>
                                        <p>
                                            <strong><i class="fas fa-rupee-sign" area-hidden="true"></i>
                                                <?= $delivery ?> <b>EGP</b></strong>
                                        </p>
                                    </td>
                                </tr>
                                <tr style="color: #F81D2D;">
                                    <td class="text-right">
                                        <h4><strong>Total:</strong></h4>
                                    </td>
                                    <td class="text-left">
                                        <h4><strong><i class="fas fa-rupee-sign" area-hidden="true"></i>
                                                <?= $totalPrice; ?>
                                            </strong><b>EGP</b></h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <div class="col-md-12">
                            <p><b>Signature</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>