
<?php
include_once 'header.php'
?>
<style>
    .hero {
        background-image: url('hero.jpg');
        background-size: cover;
        background-position: center;
        height: 100vh;
        text-align: center;
        color: white;
        padding-top: 100px;
    }

    .hero h1 {
        font-size: 4rem;
        margin-top: 0;
        margin-bottom: 20px;
    }

    .hero p {
        font-size: 1.5rem;
        line-height: 1.5;
    }

    .button {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
    }
</style>
<div class="hero">
    <h1>Welcome to our Recipe Website!</h1>
    <p>Find thousands of delicious and easy-to-follow recipes from all over the world.</p>
    <a href="login.php" class="button">Get Started</a>
</div>
<?php
include_once 'footer.php'
?>