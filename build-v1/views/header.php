<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatiblea" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=(isset($this->title)) ? SITE_TITLE . ' | ' . $this->title : SITE_TITLE; ?></title>
    <link rel="stylesheet" href="<?php echo URL; ?>css/app.css">
    <script type="text/javascript" src="<?php echo URL; ?>js/app.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>bower_components/foundation-sites/dist/js/foundation.js"></script>

    <?php
    if (isset($this->js))
    {
        foreach ($this->js as $js)
        {
            echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
        }
    }
    ?>
</head>
<body>
<?php Session::init(); ?>

<div class="top-bar-header">
<div id="header" class="header">
<div class="top-bar">
    <div class="top-bar-left">
        <ul class="menu" data-dropdown-menu>
                <?php if (Session::get('loggedIn') == false):?>
                <li><a href="<?php echo URL; ?>index">Home</a></li>
                <li><a href="<?php echo URL; ?>register">Register</a></li>
                <li><a href="<?php echo URL; ?>blog">Blog</a></li>
            <?php endif; ?>
            <?php if (Session::get('loggedIn') == true):?>
                <li><a href="<?php echo URL; ?>dashboard">Dashboard</a></li>
                <li><a href="<?php echo URL; ?>blog">Blog</a></li>
                <li><a href="<?php echo URL; ?>note">Add/Edit Blog</a></li>
                <?php if (Session::get('role') == 'owner'):?>
                    <li><a href="<?php echo URL; ?>user">Users</a></li>
                <?php endif; ?>
                <li><a href="<?php echo URL; ?>dashboard/logout">Logout</a></li>
            <?php else: ?>
                <li><a href="<?php echo URL; ?>login">Login</a></li>
            <?php endif; ?>
        </ul>
    </div>

</div>
</div>
</div>

<div class ="content" id="content">


