<?php
// arwa 
// female , 1 , 011111111 , araw@gmail.com
// seif 
// male , 2 , 012222222 , seif@gmail.com
// aya
// female , 3 , 0166666666 , aya@gmail.com
// $message = "";

if ($_POST) {
    switch ($_POST['user']) {
        case 'Arwa':
            $name =$_POST['user'];
            $id = 1;
            $phone = '01111111';
            $email = 'araw@gmail.com';
            $gender = 'female';
            break;
        
        case 'Aya':
            $name =$_POST['user'];
            $id = 2;
            $phone = '0123232323';
            $email = 'aya@gmail.com';
            $gender = 'female';
            break;
        
        case 'Seif':
            $name =$_POST['user'];
            $id = 3;
            $phone = '0166166616';
            $email = 'seif@gmail.com';
            $gender = 'male';
            break;
        
        default:
            $name =$_POST['user'];
            $id = ' ';
            $phone = ' ';
            $email = ' ';
            $gender = ' ';
            break;
    }

    $message = "<div class='alert alert-danger'>
        <ul>
            <li>
                id : $id
            </li> 
            <li>
                Name : $name
            </li> 
            <li>
                email : $email
            </li> 
            <li>
                phone : $phone
            </li> 
            <li>
                gender : $gender
            </li>
        </ul> 
      </div>";
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="text-dark text-center h1"> Users </h1>
            </div>
            <div class="offset-4 col-4">
                <form method="post">
                    <div class="form-group">
                        <label for="users">Users</label>
                        <select name="user" class="form-control" id="users">
                            <option value="Arwa">Arwa</option>
                            <option value="Aya">Aya</option>
                            <option value="Seif">Seif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button name="sale" class="btn btn-dark rounded">Get Data!</button>
                    </div>
                </form>
                <?= (isset($message))? $message : '' ?>

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