<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="css/pc.css">
</head>

<body>
    <nav>
        <div>
            <ul>
                <li>
                    <div class="brand">
                        <i class="fa-solid fa-house-laptop"></i>
                    </div>
                </li>
            </ul>
        </div>
        <div>
            <ul class="nav-links">
                <li><a class="home" href="index.php">Home</a></li>
                <li><a class="pc" href="pc.php">Pc</a></li>
                <li><a href="#">Laptop</a></li>
                <li><a href="#">Sparepart</a></li>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li>
                    <a href="login.html">
                        <i class="fa-solid fa-user ikon-desktop"></i>
                        <span class="text-mobile">Login</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="hamburger-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
</body>
<script>
    const hamburgerMenu = document.querySelector('.hamburger-menu');

    hamburgerMenu.addEventListener('click', () => {
        hamburgerMenu.classList.toggle("active");

        const navLinks = document.querySelector('.nav-links');
        navLinks.classList.toggle("active");
    })
</script>

</html>