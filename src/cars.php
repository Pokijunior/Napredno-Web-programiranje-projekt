<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="favicon/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css?v=1.5">
    <link rel="stylesheet" href="styles/cars.css">
    <link rel="stylesheet" href="styles/footer.css">

    <title>Lego Speed Cars</title>
</head>
<body>
    <header>
        <div class="logo">
            <img class="logo-picture" src="images/Lego-logo.png" alt="Lego-logo">
        </div>

        <nav>
            <?php include 'nav.php'; ?>
        </nav>
    </header>

    <main id="cars-container">
    <!-- API -->
    </main>

    <script>
    fetch('api/cars-api.php')
        .then(res => res.json())
        .then(cars => {
            const container = document.getElementById('cars-container');
            cars.forEach(car => {
                const cssClass = car.alt === 'Lamborghini Countach' ? 'img-lambo' : 'img';
                container.innerHTML += `
                    <div class="car">
                        <div class="car-img">
                            <img class="${cssClass}" src="${car.image}" alt="${car.alt}">
                        </div>
                        <div class="car-info">
                            <p class="car-name">${car.name}</p>
                        </div>
                    </div>
                `;
            });
        });
    </script>

    <footer>
        <div class="icons">
            <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
            <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
            <a href="https://www.youtube.com/" class="fa fa-youtube"></a>
        </div>

        <p class="copyright">
            Copyright &copy; Lovro Pokrajčić
        </p>
    </footer>
    

    

</body>
</html>