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
    <link rel="stylesheet" href="styles/contact.css">
    <link rel="stylesheet" href="styles/footer.css">
    <title>Lego Speed Contact</title>
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
        <iframe loading="lazy" allowfullscreen src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.905002446654!2d-0.13155168422971295!3d51.51125217963629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604d3066487e3%3A0x67905186b51c14a4!2sThe%20LEGO%C2%AE%20Store%20Leicester%20Square!5e0!3m2!1sen!2shr!4v1700000000000!5m2!1sen!2shr">
        </iframe>

        <form>
            <label for="firstname">First Name *</label>
            <input type="text" id="firstname" name="firstname" placeholder="Your name is?" required>

            <label for="lastname">Last Name *</label>
            <input type="text" id="lastname" name="lastname" placeholder="Your last name is?" required>
            
            <label for="email">Your E-mail *</label>
            <input type="email" id="email" name="email" placeholder="Your e-mail is?" required>

            <label for="country">Country</label>
            <select id="country" name="country">
                <option value="">Please select</option>
                <option value="CRO" selected>Croatia</option>
                <option value="BIH">Bosnia and Herzegovina</option>
                <option value="SRB">Serbia</option>
                <option value="ITA">Italy</option>
                <option value="SLO">Slovenia</option>
                <option value="GER">Germany</option>
                <option value="HU">Hungary</option>
            </select>

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something here..." style="height:200px"></textarea>

            <input class="submit" type="submit" value="Submit">
        </form>
    </main>

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