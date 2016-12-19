<!doctype html>
    <html>
<head>
    <title>Test</title>
    <link rel="stylesheet" href="/Source%20Files/public/css/default.css" />
    <script type="text/javascript" src="/Source%20Files/public/js/jquery.js">
    </script>
</head>
<body>
<?php Session::init(); ?>
<div id="header">
    Header
    <br />
    <a href="<?php echo URL;?>index">Index</a>
    <a href="<?php echo URL;?>help">Help</a>
    <?php if (session::get('loggedIn') == true): ?>
        <a href="<?php echo URL;?>dashboard/logout">Logout</a>
    <?php else: ?>
        <a href="<?php echo URL;?>login">login</a>
    <?php endif; ?>
</div>

<div id="content">

