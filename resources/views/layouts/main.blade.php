<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Romano</title>
</head>
<body>
    <header>
        <a href="#" class="logo"><span>R</span>omano</a>
        <ul class="navigation">
            <li><a href="#banner">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#experts">Expert</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </header>
    @yield('content')
    <footer class="footer">
        <ul class="nav">
                <li class="nav__item"><a href="#" class="nav__link">Home</a></li>
                <li class="nav__item"><a href="#menu" class="nav__link">Menu</a></li>
                <li class="nav__item"><a href="#about" class="nav__link">About us</a></li>
                <li class="nav__item"><a href="#contact" class="nav__link">Contact us</a></li>
        </ul>
        <p class="copyright">
            &copy; Copyright 2021 by Ahmed Ayman Feel free to use this project for your own purposes.
        </p>
    </footer

</body>
</html>
