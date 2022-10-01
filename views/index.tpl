<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link type="text/css" rel="stylesheet" href="../public/css/style.css" />
    <title>{block name="title"}Default Title{/block}</title>
</head>
<body>
    {include file="header.tpl"}
    <div class="container wrapper">
        <div class="info">
            <h1>{$info['name']}, {$info['position']}</h1>
            <p>{$info['description']}</p>
        </div>
        <div class="details">
                {foreach from=$details key=name item=index}
                    <div class="details__item">
                        <h2>{$index.title}</h2>
                        <p>{$index.description}</p>
                        <a href="#">{$index.icon}{$index.more}</a>
                    </div>
                {/foreach}
        </div>
    </div>
</body>
</html>
