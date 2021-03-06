<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Paul Knulst">

<!-- Meta Tags for SEO -->
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

<!-- Dynamic title tag -->
<?php echo Theme::metaTags('title'); ?>

<!-- Dynamic description tag -->
<?php echo Theme::metaTags('description'); ?>

<!-- Include Favicon -->
<?php echo Theme::favicon('img/favicon.png'); ?>

<!-- Include Bootstrap CSS file bootstrap.css -->
<?php echo Theme::cssBootstrap(); ?>

<!-- Include CSS Styles from this theme -->
<?php echo Theme::css('css/paulish.css'); ?>

<link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>