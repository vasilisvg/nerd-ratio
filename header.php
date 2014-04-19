<?php
$files = array();
$patterns_dir = "./wp-content/themes/nerd-ratio/css";

//If not, show all images

$handle = opendir($patterns_dir);
$i=0;
while (false !== ($file = readdir($handle))):
    if(stristr($file,'.css')):
        if (
            $file == 'functions.css'
            || $file == 'style.css') {
            //
        }
        else {
            $files[$i] = $file;
            $i++;
        }
    endif;
endwhile;

$amount = (count($files))-1;

?>
<!doctype html>
<html lang="<?php echo getNerdLanguage(); ?>">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php wp_title(''); ?> ⚒ Nerd</title>
<link rel="stylesheet" href="http://fonts.typotheque.com/WF-023273-006956.css" type="text/css" />
<link rel="stylesheet" href="/wp-content/themes/nerd-ratio/css/<?php echo $files[rand(0,$amount)]; ?>">
<link rel="alternate" type="application/rss+xml" title="Nerd feed" href="/feed/">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="application-name" content="Nerd.">
<meta name="msapplication-TileColor" content="#006E70">
<meta name="msapplication-TileImage" content="/apple-touch-icon-144x144-precomposed.png">
<meta name="msapplication-notification" content="polling-uri=http://nerd.vasilis.nl/feed/">
<meta name="apple-mobile-web-app-title" content="Nerd.">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144x144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-precomposed.png">
<?php wp_head(); ?>
</head>
<body>
