<?php require_once('../private/initialize.php')?>

<?php //include (SHARED_PATH . 'public_header.php');?>
    <!doctype html>

    <html lang="en">
    <head>
        <title>Shopix</title>
        <meta charset="utf-8">
        <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/public.css'); ?>" />
    </head>

<body>

<header>
    <h1>
        <a href="<?php echo url_for('/index.php'); ?>">
        </a>
    </h1>
</header>

<div id="main">
    <div id="page">
        <h1>Überschrift</h1>
    </div>
</div>
<footer>
    <p>Copyright Shopix </p>
</footer>

<p>This is a fictitious company created by <a href="http://linkedin.com">LinkedIn Corporation, or its affiliates</a>, solely for the creation and development of educational training materials. Any resemblance to real products or services is purely coincidental. Information provided about the products or services is also fictitious and should not be construed as representative of actual products or services on the market in a similar product or service category.</p>

</body>
</html>


<?php //include (SHARED_PATH . 'public_footer.php');?>