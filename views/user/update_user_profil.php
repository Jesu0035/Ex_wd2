<?php

// HUSK DELETE THIS CODE
//validar que los campos no esten vacios-- puede seer en otra pagina pro ejemplo update-profil
if (!empty($_POST["btn_update"])) {
    if (!empty($_POST["user_name"]) && !empty($_POST["user_email"]) && !empty($_POST["user_role"])) {
        $id = $_POST["user_id"];
        $name = $_POST["user_name"];
        $email = $_POST["user_email"];
        $role = $_POST["user_role"];
        $sql = $db->query("UPDATE users SET user_name = '$user_name', user_email ='$user_email', user_role ='$user_role' WHERE user_id =$user_id ");
        /*   if ($sql == 1) {
            header("location: ../../views/user/user_profile.php");
        } */
    } else {
        echo "los campos estan empty";
    }
}
/* try { */



// Check if the form is submitted
/*  if ($_SERVER["REQUEST_METHOD"] === "POST") { */
/*  // Get user input from the form
        $user_id = $_POST["user_id"];
        $user_name = $_POST["user_name"];
        $user_email = $_POST["user_email"];
        $user_role = $_POST["user_role"]; */



// Update user name
/*  $qName = $db->prepare('UPDATE users SET user_name = :user_name WHERE user_id = :user_id');
        $qName->bindValue(':user_id', $user_id);
        $qName->bindValue(':user_name', $user_name);
        $qName->execute(); */


// Update user role
/*   $qRole = $db->prepare('UPDATE users SET user_role = :user_role WHERE user_id = :user_id');
        $qRole->bindValue(':user_id', $user_id);
        $qRole->bindValue(':user_role', $user_role);
        $qRole->execute(); */


echo "Profile updated successfully!";
        /*   }
        } catch (PDOException $ex) {
            error_log('PDO Exception: ' . $ex->getMessage());
            echo "An error occurred while updating the profile. Please try again later.";
        } */