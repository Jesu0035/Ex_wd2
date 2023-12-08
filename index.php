<?php require_once __DIR__ . '/views/header.php';

$db = connectToDatabase();

?>

<main>
<div class="container">
    <h1>Welcome to Your Website</h1>

    <p>
        Your website's tagline or a brief description of its purpose and features.
    </p>

    <h2>Features</h2>
    <ul>
        <li>User-friendly interface</li>
        <li>Secure user authentication</li>
        <li>Profile management</li>
        <li>Order tracking</li>
        <!-- Add more features as per your website -->
    </ul>

    <h2>Get Started</h2>
    <p>
        If you are a new user, <a href="user/signup.php">sign up here</a>. If you already have an account, <a href="user/login.php">log in</a>.
    </p>

    <h2>About Us</h2>
    <p>
        A brief introduction to your company or website. What sets you apart? Why should users choose your platform?
    </p>
</div>








    <?php require_once __DIR__ . '/views/footer.php'; ?>