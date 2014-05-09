<div class="container">
    <!-- add user form -->
	<div>
        <h3>Add a User</h3>
        <form action="<?php echo URL; ?>users/adduser" method="POST">
            <label>Firstname</label>
            <input type="text" name="firstname" value="" required /><br>
            <label>Surname</label>
            <input type="text" name="surname" value="" required /><br>
            <label>Username</label>
            <input type="text" name="username" value="" required /><br>
            <label>Password</label>
            <input type="password" name="password" value="" required /><br>
            <label>Confirm Password</label>
            <input type="password" name="password_conf" value="" required /><br>
            <input type="submit" name="submit_add_users" value="Submit" />
        </form>
    </div>
    <!-- main content output -->
    <div id="result">
        <h3>List of users (data from first model)</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Firstname</td>
                <td>Surname</td>
                <td>Username</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            <?php
			foreach ($users as $user)
			{
			?>
                <tr>
                    <td><?php if(isset($user->id_user)){ echo $user->id_user; } ?></td>
                    <td><?php if(isset($user->firstname)){ echo $user->firstname; } ?></td>
                    <td><?php if(isset($user->surname)){ echo $user->surname; } ?></td>
                    <td><?php if(isset($user->username)){ echo $user->username; } ?></td>
                    <td><a href="<?php echo URL . 'users/view/' . $user->id_user;  ?>">View</a></td>
                    <td><a href="<?php echo URL . 'users/update/' . $user->id_user; ?>">Update</a></td>
                    <td><a href="<?php echo URL . 'users/deleteuser/' . $user->id_user; ?>">DELETE</a></td>
                </tr>
            <?php
			}
			?>
            </tbody>
        </table>
    </div>
</div>
