 <?php
    require_once __DIR__ . '/../../_.php';

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if (isset($_GET['user_id'])) {
        $user_id_to_delete = $_GET['user_id'];

        try {
            // Use prepared statement to prevent SQL injection
            $stmt = $db->prepare("DELETE FROM users WHERE user_id = :user_id");
            $stmt->bindValue(':user_id', $user_id_to_delete);

            if ($stmt->execute()) {
                echo "User profile deleted successfully!";
            } else {
                echo "Error deleting user profile.";
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    } else {
        echo "User ID not provided.";
    }
    ?>
 //need to decide a button to back to the index//
 