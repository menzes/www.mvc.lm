<?php
/**
 * Created by PhpStorm.
 * User: Lachlan
 * Date: 12/28/2016
 * Time: 12:03 PM
 */ ?>
<div class="row">
<?php
    $i = 0;

    foreach($this->noteList as $key => $value) {
        if ($i++ > 9){ break;}
        echo '<br />';
        echo '<div style="color: #1779ba">' . $value['title'] . '</div>';
        echo '<p style="font-size: 10px; color: #5e5e5e">' . $value['date_added'] . '</p>';
        echo '<div>' . $value['content'] . '</div><br />';

    }

?>

</div>
