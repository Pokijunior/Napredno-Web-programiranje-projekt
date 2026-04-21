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
    <link rel="stylesheet" href="styles/rebrickable.css">
    <link rel="stylesheet" href="styles/footer.css">

    <title>Rebrickable Speed Sets</title>
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

    <main id="rebrickable-container">
    </main>

    <script>
    fetch('api/rebrickable-api.php')
    .then(res => res.json())
    .then(data => {
        const container = document.getElementById('rebrickable-container');
        const sets = data.results;

        sets.forEach(set => {
            container.innerHTML += `
                <div class="car">
                    <div class="car-img">
                        <img class="img" src="${set.set_img_url}" alt="${set.name}">
                    </div>
                    <div class="car-info">
                        <p class="car-name">${set.name}</p>
                        <p class="car-details">
                            📅 Year: ${set.year} <br>
                            🧩 Parts: ${set.num_parts}
                        </p>
                        <div style="margin-top: 10px; margin-bottom: 10px;">
                            <a href="${set.set_url}" target="_blank" class="view-link">
                                View Details on Rebrickable
                            </a>
                        </div>
                    </div>
                </div>
            `;
        });
    })
    .catch(err => {
        document.getElementById('rebrickable-container').innerHTML = 
            '<p style="color:white; text-align:center;">Greška pri učitavanju setova.</p>';
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