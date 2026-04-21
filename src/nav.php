<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<ul class="<?php echo ($current_page == 'index.php') ? 'home' : ''; ?>">
    <a href="index.php">Home</a>
</ul>

<ul class="<?php echo ($current_page == 'cars.php') ? 'cars' : ''; ?>">
    <a href="cars.php">Cars</a>
</ul>

<ul class="<?php echo ($current_page == 'alternative-builds.php') ? 'alternative-builds' : ''; ?>">
    <a href="alternative-builds.php">Alternative Builds</a>
</ul>

<ul class="<?php echo ($current_page == 'rebrickable.php') ? 'rebrickable' : ''; ?>">
    <a href="rebrickable.php">Rebrickable Sets</a>
</ul>

<ul class="<?php echo ($current_page == 'contact.php') ? 'contact' : ''; ?>">
    <a href="contact.php">Contact</a>
</ul>

<ul class="<?php echo ($current_page == 'about.php') ? 'about' : ''; ?>">
    <a href="about.php">About</a>
</ul>


<?php if (isset($_SESSION['user_id'])): ?>
    <?php if ($_SESSION['user_role'] === 'admin'): ?>
        <ul class="<?php echo ($current_page == 'admin.php') ? 'admin' : ''; ?>">
            <a href="admin.php">Admin Page</a>
        </ul>
    <?php endif; ?>
    <ul><a href="logout.php">Log Out</a></ul>
<?php else: ?>
    <ul class="<?php echo ($current_page == 'login.php') ? 'login' : ''; ?>">
        <a href="login.php">Sign In</a>
    </ul>
    <ul class="<?php echo ($current_page == 'register.php') ? 'register' : ''; ?>">
        <a href="register.php">Register</a>
    </ul>
<?php endif; ?>