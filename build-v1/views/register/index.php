<?php /**
 * Created by PhpStorm.
 * User: menzies
 * Date: 12/22/2016
 * Time: 9:55 PM
 */
?>

<div class="medium-6 medium-centered large-4 large-centered columns">
     <h3 style="text-align: center">Not a member?</h3><h5 style="color: #1779ba; text-align: center">Register below</h5>
        <form method="post" action="<?php echo URL;?>user/create">
        <lable>Email</lable><input type="text" name="login" placeholder="email@blah.com.au"/>
        <lable>Password</lable><input type="text" name="password" />
        <lable>subscribe to newsletter</lable>
            <select name="subscribed">
                <option value="yes" >yes</option>
                <option value="no" >no</option>
            </select>
        <lable>Role</lable>
        <select name="role">
            <option value="default" >Default</option>
            <option value="admin" >Admin</option>
        </select>

        <button class="button expanded" type="submit">Login</button>

    </form>
</div>
