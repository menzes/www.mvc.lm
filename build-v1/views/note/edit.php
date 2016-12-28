<?php
/**
 * Created by PhpStorm.
 * User: menzies
 * Date: 12/27/2016
 * Time: 3:59 PM
 */ ?>
<a href="<?php echo URL;?>./note" class="button">Back</a>

<h3>Edit Article</h3>
<form method="post" action="<?php echo URL;?>note/editSave/<?php echo $this->note[0]['noteid']; ?>">
    <label>Title</label><input type="text" name="title" value="<?php echo $this->note[0]['title']; ?>" /><br />
    <label>Content</label><textarea name="content"><?php echo $this->note[0]['content'];?></textarea><br />
    <button class="button" type="submit">Save Changes</button>
</form>