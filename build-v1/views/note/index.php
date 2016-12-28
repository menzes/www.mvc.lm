<?php
/**
 * Created by PhpStorm.
 * User: menzies
 * Date: 12/27/2016
 * Time: 3:59 PM
 */ ?>

<div class="large-6 columns large-centered">
    <h3 style="text-align: center">Add a Blog Article here</h3>
<form method="post" action="<?php echo URL;?>note/create">
    <label>Title</label><input type="text" name="title" placeholder="Title" />
    <label>Content</label><textarea name="content"></textarea>
    <button class="button expanded" type="submit">Add</button>
</form>
</div>

<hr />
<div class="large-12 columns">
    <h3 style="text-align: center">Edit / Delete Blog Articles Here</h3>
<table>
<?php
    foreach($this->noteList as $key => $value) {
        echo '<tr>';
        echo '<td>' . $value['title'] . '</td>';
        echo '<td style="color: #5e5e5e">' . substr(str_pad($value['content'],50),0,50) . '...' . '</td>';
        echo '<td><a href="'. URL . 'note/edit/' . $value['noteid'].'">Edit</a></td>';
        echo '<td><a class="delete" href="'. URL . 'note/delete/' . $value['noteid'].'">Delete</a></td>';
        echo '</tr>';
    }
?>
</table>
    </div>

<script>
    $(function() {

        $('.delete').click(function(e) {
            var c = confirm("Are you sure you want to delete?");
            if (c == false) return false;

        });

    });
</script>