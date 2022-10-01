<?php

require_once('vendor/autoload.php');

$smarty = new Smarty();

$smarty->setTemplateDir('views/');
$smarty->setCompileDir('compile/');
$smarty->setConfigDir('configs/');
$smarty->setCacheDir('cache/');

$name = "Gale20sDev";

$pages = [
    'Home' => 'index.php',
    'About' => 'about.php',
    'Contact' => 'contact.php',
    'Login' => 'login.php',
];

$info = [
    'name' => 'Gale',
    'position' => 'Web Developer',
    'description' => 'A fullstack developer, who is passionate about web development and programming.',
    'image' => 'public/img/Programmer-Engineering-Development-Illustration-on-transparent-background-PNG.png',
];

$details = [
    [
        'title' => 'about me',
        'description' => 'I am a fullstack developer, who is passionate about web development and programming. I have been working as a web developer for 2 years. I have a lot of experience in web development, especially in PHP, Laravel, ReactJS, VueJS, NodeJS, MySQL, MongoDB, HTML, CSS, JavaScript, jQuery, Bootstrap, etc.',
        'more' => 'learn more',
        'icon' => '<i class="fa-solid fa-arrow-right"></i>',
    ],
    [
        'title' => 'my works',
        'description' => 'I have been working on many projects, including web applications, websites, and mobile applications. I have a lot of experience in web development, especially in PHP, Laravel, ReactJS, VueJS, NodeJS, MySQL, MongoDB, HTML, CSS, JavaScript, jQuery, Bootstrap, etc.',
        'more' => 'browse portfolio',
        'icon' => '<i class="fa-solid fa-arrow-right"></i>',
    ]
];

$socials = [
    [
        'name' => 'facebook',
        'link' => 'https://www.facebook.com/gale20sdev',
        'icon' => 'fab fa-facebook-f',
    ],
    [
        'name' => 'twitter',
        'link' => 'https://twitter.com/gale20sdev',
        'icon' => 'fab fa-twitter',
    ],
    [
        'name' => 'instagram',
        'link' => 'https://www.instagram.com/gale20sdev',
        'icon' => 'fab fa-instagram',
    ],
    [
        'name' => 'github',
        'link' => 'https://github.com/camgiangtranthi',
        'icon' => 'fab fa-github',
    ]
];

$smarty->assign('name', $name);
$smarty->assign('pages', $pages);
$smarty->assign('info', $info);
$smarty->assign('details', $details);
$smarty->assign('socials', $socials);
//$smarty->debugging = true;

$smarty->display('index.tpl');

