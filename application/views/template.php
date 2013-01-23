<?php $lang = substr(I18n::$lang, 0, 2); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?= $lang ?>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="<?= $lang ?>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="<?= $lang ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?= $lang ?>"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?= $title ?></title>
        <meta name="description" content="<?= $description ?>">
        <meta name="author" content="<?= $author ?>">
        <meta name="keywords" content="<?= $keywords ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="<?= URL::base('http')?>">
        <?php foreach ($less as $file) echo HTML::less('assets/less/' . $file) . "\n"; ?>
        <?php foreach ($styles as $file) echo HTML::style('assets/css/' . $file) . "\n"; ?>
        <?php foreach ($icons as $file) echo HTML::icon('assets/ico/' . $file['href'],$file['attr']) . "\n";?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <?= $body ?>
        <?php foreach ($scripts as $file) echo HTML::script('assets/js/' . $file) . "\n";?>
        <?php if (Kohana::$environment === Kohana::DEVELOPMENT): ?>
            <script>
                //Disable Less Cache;
                less.env = "development";
                less.watch();
            </script>
        <?php endif;?>
        <?php if (Kohana::$environment === Kohana::PRODUCTION): ?>
            <script>
                var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
                (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
                    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
                    s.parentNode.insertBefore(g,s)}(document,'script'));
            </script>
        <?php endif; ?>
    </body>
</html>
