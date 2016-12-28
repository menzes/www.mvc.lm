<h4>Welcome to the Dashboard!</h4>
<p>This Dashboard is only accessible by someone who is logged in :)</p>
<p>you can submit stuff to the database below</p>
<br />

<div class="large-4 columns">
<form id="randomInsert" action="<?php echo URL;?>dashboard/xhrInsert/" method="post">
    <input type="text" name="text" />
    <button class="button tiny" type="submit">Add a Thingy</button>
</form>
</div>
<br />
<div class="large-4 columns">
<div id="listInserts">
</div>
</div>