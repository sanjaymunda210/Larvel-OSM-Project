<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/fontawesome-free-5.15.4-web/css/all.min.css') }}">
    @stack('title')
</head>

<body>

    <header>

        <a href="index.php" class="logo"><i class="fab fa-shopify"></i>Online Shopping Mart</a>

        {{-- <nav class="navbar">
            <a href="{{ url('/men') }}">MEN</a>
            <a href="{{ url('/women') }}">WOMEN</a>
            <a href="{{ url('/kids') }}">KIDS</a>
            <a href="{{ url('/beauty') }}">BEAUTY</a>
            <a href="{{ url('/cart') }}"> <i class="fas fa-shopping-cart"> </i> CART</a>
            <?php
            //  if(isset($_SESSION['userId']) && !empty($_SESSION['userId']))
            // {
            //     echo ' <a href="logout.php"><i class="fas fa-user-circle"> </i> LOGOUT</a>';
            // }
            // else{
            //     echo ' <a href="login.php"><i class="fas fa-user-circle"> </i> LOGIN</a>';
            // }
            ?>


        </nav> --}}

        {{-- <div class="icons">
            <i class="fas fa-ellipsis-v" id="menu-bars"></i>
        </div> --}}

    </header>
