<?php
require_once __DIR__ . '/../_.php'; //it conects with the masterfile
require_once __DIR__ . '/header.php';
?>
<!-- //this is the login for partner -->
<h3> Login</h3>
<div> <!-- class="mt-16 pb-12 mr-4 px-4 bg-white rounded-md text-slate-500" -->
  <form method="POST"> <!-- class="flex flex-col gap-4 w-1/3 h-full m-auto pt-8" -->
    <input name="user_name" type="text" placeholder="user Name" value="Name">
    <input name="user_email" type="text" placeholder="email" value="admin@company.com">
    <input name="user_password" type="text" placeholder="password" value="password">
    <button>Login</button>
  </form>
</div>






<?require_once __DIR__ . '/footer.php'; ?>