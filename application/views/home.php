<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/display.css');?>">
    <title>Display</title>
</head>
    <body>
        <div class="container">
            <?php echo $sess; ?>
            <input type="text" list="flavor">
            <datalist id="flavor">
                <option value="choco">
                <option value="coconut">
            </datalist>
            <dl>
                <dt>Title 1</dt>
                <dd>     content</dd>
                <dt>Title 2</dt>
                <dd>    content</dd>
            </dl>
        </div>
    </body>
</html>


