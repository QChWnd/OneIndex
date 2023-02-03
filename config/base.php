<?php
return array(
    'app_name' => 'OneIndex',
    'site_name' => 'OneIndex',
    'site_descr' => 'OneDrive Directory Index',
    'favicon' => '/.logo.webp',
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
    'thumbsize' => '720',

    'loadmdui' =>
'<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdui@1.0.2/dist/css/mdui.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/mdui@1.0.2/dist/js/mdui.min.js"></script>',

    'loadjquery' => '<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>',

    'loadnprogress' =>
'<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/nprogress@0.2.0/nprogress.css"/>
<script src="https://cdn.jsdelivr.net/npm/nprogress@0.2.0/nprogress.js"></script>',

    'loadJustified-Gallery' =>
'<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/miromannino/Justified-Gallery@3.8.1/dist/css/justifiedGallery.css"/>
<script src="https://cdn.jsdelivr.net/gh/miromannino/Justified-Gallery@3.8.1/dist/js/jquery.justifiedGallery.js"></script>',

    'loadMathJax_js' => '<script src="https://cdn.jsdelivr.net/npm/mathjax@3.2.0/es5/tex-chtml.js"></script>',
    
    'loadMathJax_config' => 
'<script>
MathJax = {
    tex: {
        inlineMath: [["$", "$"], ["\\(", "\\)"]]
    }
};
</script>',

    'nprogress_style' => 
'#nprogress .bar {
    background: #ff7e91;
}
#nprogress .peg {
    box-shadow: 0 0 10px #ff7e91, 0 0 5px #ff7e91;
}
#nprogress .spinner-icon {
    border-top-color: #ff7e91;
    border-left-color: #ff7e91;
}'
);
