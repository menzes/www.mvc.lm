<div class="user-list large-6 columns">
<h3>Current users</h3>
<table>
    <?php
    foreach($this->userList as $key => $value) {
        echo '<tr>';
        echo '<td>' . $value['userid'] . '</td>';
        echo '<td>' . $value['login'] . '</td>';
        echo '<td>' . $value['role'] . '</td>';
        echo '<td>
				<a href="'.URL.'user/edit/'.$value['userid'].'">Edit </a>
				<a href="'.URL.'user/delete/'.$value['userid'].'"> Delete</a></td>';
        echo '</tr>';
    }
    ?>
</table>
</div>
<div class="large-6 columns">
    <h3>Add User</h3>
    <form method="post" action="<?php echo URL;?>user/create">
        <lable>Login</lable><input type="text" name="login" /><br />
        <lable>Password</lable><input type="text" name="password" /><br />
        <lable>Role</lable>
        <select name="role">
            <option value="default" >Default</option>
            <option value="admin" >Admin</option>
        </select><br />

        <lable>&nbsp;</lable><input type="submit" class="button" /><br />
    </form>
</div>