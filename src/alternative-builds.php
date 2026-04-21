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
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/alternative-builds.css">
    <link rel="stylesheet" href="styles/footer.css">

    <title>Lego Speed Alternative builds</title>
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

    <main>
    <div class="note">
        <div class="info">
            <p class="info-text"><strong>Info!</strong> Click on the Lego set and it will show you his alternative builds</p>
        </div>
    </div>

    <div class="image-container" id="builds-container"></div>
    </main>

    <script>
    fetch('api/alternative-builds-api.php')
    .then(res => res.json())
    .then(builds => {
        const container = document.getElementById('builds-container');
        builds.forEach(car => {
            const lamboId = car.main.alt === 'Lamborghini Countach' ? 'id="img-lambo"' : '';
            let html = `
                <div class="image-group">
                    <img class="main-image" ${lamboId} src="${car.main.image}" alt="${car.main.alt}">
            `;
            car.alternatives.forEach(alt => {
                const altLamboId = alt.name === 'Lamborghini Countach' ? 'id="img-lambo"' : '';
                html += `
                    <figure class="hidden-image">
                        <img ${altLamboId} src="${alt.image}" alt="${alt.name}">
                        <figcaption>${alt.name}</figcaption>
                    </figure>
                `;
            });

            html += `</div>`;
            container.innerHTML += html;
        });

        document.querySelectorAll('.image-group').forEach(group => {
            group.querySelector('.main-image').addEventListener('click', function() {
                group.querySelectorAll('.hidden-image').forEach(img => {
                    img.style.display = img.style.display === 'block' ? 'none' : 'block';
                });
            });
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