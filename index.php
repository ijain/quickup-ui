<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';

use App\Entity\DbConnection;
use App\Model\DataModel;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Project</title>
    <meta charset="utf-8"/>
    <meta name="robots" content="noindex,nofollow"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0"/>
    <link href="./css/styles.css" rel="stylesheet">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="sticky-top">
    <div class="dropdown menu-centered">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown 1
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li><button class="dropdown-item" type="button">Action</button></li>
            <li><button class="dropdown-item" type="button">Another action</button></li>
            <li><button class="dropdown-item" type="button">Something else here</button></li>
        </ul>
    </div>
    <div class="dropdown menu-centered">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown 2
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li><button class="dropdown-item" type="button">Action</button></li>
            <li><button class="dropdown-item" type="button">Another action</button></li>
            <li><button class="dropdown-item" type="button">Something else here</button></li>
        </ul>
    </div>
    <div class="dropdown menu-centered">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown 3
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li><button class="dropdown-item" type="button">Action</button></li>
            <li><button class="dropdown-item" type="button">Another action</button></li>
            <li><button class="dropdown-item" type="button">Something else here</button></li>
        </ul>
    </div>
    <div class="dropdown menu-centered">
        <button class="btn btn-secondary" type="button" id="dropdownMenu2" aria-expanded="false">
            Dropdown 4&nbsp;&nbsp;&nbsp;&nbsp;
        </button>
    </div>
</div>

<div class="container-fluid">
    <div class="flex-grow-1 ms-3">
        <h3>Page Title</h3>
        <p>Some short description goes here</p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

        <p>
            <?php
            $conn = DbConnection::getInstance();
            $db = $conn->getConnection();

            $dataModel = new DataModel($db);
            $data = $dataModel->get(); //select * from test
            //var_dump($data);
            ?>
        </p>
    </div>

</div>

<div class="fixed-bottom">
    <div class="bottom-nav">
        <div>
            I'm covering up the Copyright text
        </div>
    </div>
</div>

<script src="./js/jquery-3.6.0.min.js"></script>
<script src="./js/jquery.validate.min.js" type="text/javascript"></script>
<script src="./js/form-validation.js" type="text/javascript"></script>
<script src="./js/popper.min.js" type="text/javascript"></script>
<script src="./js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>