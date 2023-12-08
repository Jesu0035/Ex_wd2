<?php
require_once __DIR__ . '../../_.php'; // Connects to the database

include_once __DIR__ . '/header.php';

$db = connectToDatabase();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
    $role_id = $_POST['role_id'];  // Assuming you have a hidden input for role_id

    // Insert user into the users table
    $insertUserQuery = $db->prepare('INSERT INTO users (user_name, user_email, user_password, role_id) VALUES (?, ?, ?, ?)');
    $insertUserQuery->execute([$user_name, $user_email, $user_password, $role_id]);

    $errorInfo = $insertUserQuery->errorInfo();
    if ($errorInfo[0] !== '00000') {
        echo "Error: " . $errorInfo[2];
        exit;
    }

    // Check if the insertion was successful
    if ($insertUserQuery) {
        // Get the last inserted ID
        $user_id = $db->lastInsertId();

        // Redirect to user-specific or partner-specific signup based on role_id
        if ($role_id == 1) {  // Assuming '1' is the role_id for users
            header("Location: user/signup.php?user_id=$user_id");
        } elseif ($role_id == 2) {  // Assuming '2' is the role_id for partners
            header("Location: partner/signup.php?user_id=$user_id");
        } else {
            // Handle invalid role_id
        }
    } else {
        // Handle the case where the insertion failed
        echo "Error: User insertion failed.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>

    <h3>Sign Up</h3>

    <form action="./signup.php" method="POST">
        </br>
        <input type="hidden" name="role_id" value="1">
        <label for="user_name">User Name</label>
        <input type="text" name="user_name" placeholder="your username" required></br>

        <label for="user_email">E-mail</label>
        <input type="email" name="user_email" placeholder="your email" required></br>

        <label for="user_password">Password</label>
        <input type="password" name="user_password" placeholder="Enter your password" required></br>

        <label for="confirm_password">Confirm Password</label>
        <input type="password" name="confirm_password" placeholder="Confirm your password" required></br>

        <input type="submit" value="Sign Up"></br>
    </form>

</body>

</html>

<?php require_once __DIR__ . '/footer.php'; ?>
