<div class="container">
    <!-- add user form -->
    <div>
        <h3>Update a User</h3>
        <form action="<?php echo URL; ?>users/execupdate" method="POST">
            <label>Firstname</label>
            <input type="text" name="firstname" value="<?php echo $user[0]->firstname; ?>" required /><br>
            <label>Surname</label>
            <input type="text" name="surname" value="<?php echo $user[0]->surname; ?>" required /><br>
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $user[0]->username; ?>" required /><br>
            <label>Old Password</label>
            <input type="password" name="old_password" value="" required /><br>
            <label>New Password</label>
            <input type="password" name="new_password" value="" required /><br>
            <input type="hidden" name="id_user" value="<?php echo $user[0]->id_user; ?>" />
            <input type="submit" name="submit_exec_update" value="Submit" />
        </form>
    </div>
    <!-- main content output -->
</div>
