<?php return array(
    'site_name' => 'OneIndex',
    'site_descr' => 'OneDrive Directory Index',
    'favicon' => '/logo.png',
    'author' => 'donwa',
    'copyright' => 'Copyright © by donwa All Rights Reserved.',
    'password' => 'OneIndex',
    'style' => 'nexmoe',
    'onedrive_root' => '',
    'cache_type' => 'secache',
    'cache_expire_time' => 3600,
    'cache_refresh_time' => 600,
    'root_path' => '?',
    'show'=> array (
        'stream' => ['txt'],
        'image' => ['bmp', 'jpg', 'jpeg', 'png', 'gif'],
        'video5' => ['mp4', 'webm', 'mkv'],
        'video' => [],
        'video2' => ['avi', 'mpg', 'mpeg', 'rm', 'rmvb', 'mov', 'wmv', 'asf', 'ts', 'flv'],
        'audio' => ['ogg', 'mp3', 'wav'],
        'code' => ['html', 'htm', 'php', 'css', 'go', 'java', 'js', 'json', 'txt', 'sh', 'md'],
        'doc' => ['csv', 'doc', 'docx', 'odp', 'ods', 'odt', 'pot', 'potm', 'potx', 'pps','ppsx', 'ppsxm', 'ppt', 'pptm', 'pptx', 'rtf', 'xls', 'xlsx']
    ),
    'images' => ['home' => false, 'public' => false, 'exts' => ['jpg','png','gif','bmp']],
    'loadmdui' => '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdui@1.0.2/dist/css/mdui.min.css" integrity="sha384-cLRrMq39HOZdvE0j6yBojO4+1PrHfB7a9l5qLcmRm/fiWXYY+CndJPmyu5FV/9Tw" crossorigin="anonymous"/><script src="https://cdn.jsdelivr.net/npm/mdui@1.0.2/dist/js/mdui.min.js" integrity="sha384-gCMZcshYKOGRX9r6wbDrvF+TcCCswSHFucUzUPwka+Gr+uHgjlYvkABr95TCOz3A" crossorigin="anonymous"></script>',
    'loadjquery' => '<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>',
    'loadnprogress' => '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/nprogress@0.2.0/nprogress.css"/><script src="https://cdn.jsdelivr.net/npm/nprogress@0.2.0/nprogress.js"></script>',
    'loadJustified-Gallery' => '<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/miromannino/Justified-Gallery@3.8.1/dist/css/justifiedGallery.css"/><script src="https://cdn.jsdelivr.net/gh/miromannino/Justified-Gallery@3.8.1/dist/js/jquery.justifiedGallery.js"></script>',
    'loadMathJax_js' => '<script src="https://cdn.jsdelivr.net/npm/mathjax@3.2.0/es5/tex-chtml.js"></script>',
    'loadMathJax_config' => '<script>
MathJax = {
    tex: {
        inlineMath: [["$", "$"], ["\\(", "\\)"]]
    }
};
</script>',
    'thumbsize' => '720',
    'nprogress_style' => '
#nprogress .bar {
    background: #ff7e91;
}
#nprogress .peg {
    box-shadow: 0 0 10px #ff7e91, 0 0 5px #ff7e91;
}
#nprogress .spinner-icon {
    border-top-color: #ff7e91;
    border-left-color: #ff7e91;
}
',
    'nexmoe_layout_style' => '
body {
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
}
',
    'nexmoe_ext' => '
<link rel="stylesheet" href="//cdn.jsdelivr.net/gh/QChWnd/QChWnd.GitHub.io@master/cdn/autobg.css">
<script src="https://cdn.jsdelivr.net/gh/Fuukei/Public_Repository@latest/static/js/sakura-native.js"></script>
',
    'nexmoe_theme-color' => '#ff7e91',
    'nexmoe_mdui-theme-primary_color' => 'pink',
    'nexmoe_mdui-theme-accent_color' => 'pink',
    'nexmoe_mdui-color-theme-accent_color' => 'a100',
    'nexmoe_mdui-theme-layout' => 'dark'
);
