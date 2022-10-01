<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="../public/css/style.css" />
    <title>Header</title>
</head>
<body>
    <div class="nav__bar container">
        <div class="nav__bar-logo">
            <a href="#">{$name}</a>
        </div>
        <div class="nav__bar-menu">
            <ul>
                {foreach from=$pages key=name item=url}
                    <li><a href="{$url}">{$name}</a></li>
                {/foreach}
            </ul>
        </div>
    </div>
</body>
</html>