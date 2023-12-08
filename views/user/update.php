<?php
require_once __DIR__ . '/../../_.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$id = $_GET["id"] ?? null;
$stmt = $db->prepare("SELECT * FROM users WHERE user_id = :id");
$stmt->bindValue(':id', $id);
$stmt->execute();

if (!empty($_POST["btn_update"])) {
    if (!empty($_POST["user_name"]) && !empty($_POST["user_email"]) && !empty($_POST["user_role"])) {
        $id = $_POST["user_id"];
        $name = $_POST["user_name"];
        $email = $_POST["user_email"];
        $role = $_POST["user_role"];

        $stmt = $db->prepare("UPDATE users SET user_name = :name, user_email = :email, user_role = :role WHERE user_id = :id");
        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':role', $role);

        if ($stmt->execute()) {
            header("location: ../../views/user/user_profile.php");
        } else {
            echo "Error updating the user.";
        }
    } else {
        echo "Hey los campos están vacíos.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
    <h2>Edit your Profile :)) </h2>
    <?php
    require_once __DIR__ . '/update.php';

    while ($datos = $stmt->fetchObject()) {
    ?>
        <form action="update.php" method="post">
            <label for="user_name">New Username:</label>
            <input type="text" name="user_name" value="<?= $datos->user_name ?>"> <br><br>

            <label for="email">New Email:</label>
            <input type="email" name="user_email" value="<?= $datos->user_email ?>">

            <input type="hidden" name="user_id" value="<?php echo $id; ?>">

            <label for="user_role">New User Role:</label>
            <input type="text" name="user_role" value="<?= $datos->user_role ?>" required>

            <button type="submit" name="btn_update" value="ok">Submit</button>
        </form>
    <?php
    }
    ?>
</body>

</html>