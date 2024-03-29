<?php
return array(
    'layout_style' =>
'body {
    padding-bottom: 60px;
    background-position: center bottom;
    background-repeat: no-repeat;
    background-attachment: fixed
}

.nexmoe-item {
    margin: 20px -8px 0 !important;
    padding: 15px !important;
    border-radius: 5px;
    background-color: #ffffff20;
    -webkit-box-shadow: 0 .5em 3em rgba(161,177,204,.4);
    box-shadow: 0 .5em 3em rgba(161,177,204,.4);
}

.mdui-img-fluid, .mdui-video-fluid {
    border-radius: 5px;
    border: 1px solid #eee;
}

.mdui-list {
    padding: 0;
}

.mdui-list-item {
    margin: 0 !important;
    border-radius: 20px;
    padding: 0 10px 0 5px !important;
    border: 1px solid #ffffff50;
    margin-bottom: 10px !important;
}

    .mdui-list-item:last-child {
        margin-bottom: 0 !important;
    }

    .mdui-list-item:first-child {
        border: none;
    }

.mdui-toolbar {
    width: auto;
    margin-top: 60px !important;
}

.mdui-appbar .mdui-toolbar {
    height: 56px;
    font-size: 16px;
}

.mdui-toolbar > * {
    padding: 0 6px;
    margin: 0 2px;
    opacity: .5;
}

.mdui-toolbar > .mdui-typo-headline {
    padding: 0 16px 0 0;
}

.mdui-toolbar > i {
    padding: 0;
}

.mdui-toolbar > a:hover, a.mdui-typo-headline, a.active {
    opacity: 1;
}

.mdui-container {
    max-width: 980px;
}

.mdui-list > .th {
    background-color: initial;
}

.mdui-list-item > a {
    width: 100%;
    line-height: 48px;
}

.mdui-toolbar > a {
    padding: 0 16px;
    line-height: 30px;
    border-radius: 30px;
    border: 1px solid #eee;
}

    .mdui-toolbar > a:last-child {
        opacity: 1;
        background-color: #ff7e91;
        color: #ffff;
    }

@media screen and (max-width: 980px) {
    .mdui-list-item .mdui-text-right {
        display: none;
    }

    .mdui-container {
        width: 100% !important;
        margin: 0;
    }

    .mdui-toolbar > * {
        display: none;
    }

    .mdui-toolbar > a:last-child, .mdui-toolbar > .mdui-typo-headline, .mdui-toolbar > i:first-child {
        display: block;
    }
}',

    'ext' =>
'<script src="https://cdn.jsdelivr.net/gh/QChWnd/QChWnd.GitHub.io@master/cdn/js/autobg.js"></script>
<script src="https://cdn.jsdelivr.net/gh/QChWnd/QChWnd.GitHub.io@master/cdn/js/sakura-native.js"></script>',

    'theme-color' => '#ff7e91',
    'mdui-theme-primary_color' => 'pink',
    'mdui-theme-accent_color' => 'pink',
    'mdui-color-theme-accent_color' => 'a100',
    'mdui-theme-layout' => 'dark'
);
