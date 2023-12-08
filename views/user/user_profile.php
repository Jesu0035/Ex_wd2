<?php
require_once __DIR__ . '../../header.php';
require_once __DIR__ . '/../../_.php';



$db = connectToDatabase();

$url_base = "http://localhost/exam_wd/views/user/";



// here I will Fetch user data from the database
/* $query = "SELECT/* user_id, user_name, user_email, user_password, user_role, registration_date *FROM users";*/
$query = "SELECT user_id, user_name, user_email, user_password, user_role, reg_Date FROM users";
$stmt = $db->prepare($query);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<div class="container">
    <h2>User Profile</h2>
    <div>
        <button><a href="search_orders.php">Create user profile</a></button> </br>

        <caption> USER PROFILE</caption>
        <table>
            <thead>
                <tr>
                    <th>Id</th><!-- // info admin -->
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Reg Date</th><!-- // info admin -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?php echo $user['user_id']; ?></td>
                        <td><?php echo $user['user_name']; ?></td>
                        <td><?php echo $user['user_email']; ?></td>
                        <td><?php echo $user['user_password']; ?></td>
                        <td><?php echo $user['user_role']; ?></td>
                        <td><?php echo $user['reg_Date']; ?></td>
                        <td>
                            <button><a href="./delete.php?user_id=<?php echo $user['user_id']; ?>">Delete</a></button>
                            <button><a href="orders.php">Orders</a></button>


                            <button><a href="<?php echo $url_base; ?>update.php ?id=<?php echo $user['user_id']; ?> ">Update</a></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
require_once __DIR__ . '../../footer.php';
?>