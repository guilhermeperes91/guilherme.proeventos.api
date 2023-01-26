<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php if (isset($description) && $description): ?>
            <meta name="description" content="<?= $description ?>">
            <meta property="og:description" content="<?= $description ?>" />
        <?php else: ?>
            <meta name="description" content="<?= $configs['seo_description'] ?>">
            <meta property="og:description" content="<?= $configs['seo_description'] ?>" />
        <?php endif; ?>

        <?php if (isset($keywords) && $keywords): ?>
            <meta name="keywords" content="<?= $keywords ?>">
        <?php else: ?>
            <meta name="keywords" content="<?= $configs['seo_keywords'] ?>">
        <?php endif; ?>

        <?php if (isset($title) && $title): ?>
            <title><?= $title ?></title>
            <meta property="og:title" content="<?= $title ?>" />
        <?php else: ?>
            <title><?= $configs['seo_title'] ?></title>
            <meta property="og:title" content="<?= $configs['seo_title'] ?>" />
        <?php endif; ?>

        <?php if (isset($imovel) && $imovel['img_destaque']): ?>
            <meta property="og:image"  content="<?= base_url("assets/upload/{$imovel['img_destaque']}") ?>" />
            <meta property="og:image:width"  content="279" />
            <meta property="og:image:height"  content="302" />
        <?php endif; ?>
        <link rel="icon" href="<?= base_url("assets/img/favicon.png") ?>">

        <link href="<?= base_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet">
        <link href="<?= base_url("assets/css/font-awesome.min.css") ?>" rel="stylesheet">
        <link href="<?= base_url("assets/css/owl.carousel.min.css") ?>" rel="stylesheet">
        <link href="<?= base_url("assets/css/owl.theme.default.min.css") ?>" rel="stylesheet">
        <link href="<?= base_url("assets/css/style.css?v=".time()) ?>" rel="stylesheet">

        <?php if (!empty($css)): ?>
            <?php
            foreach ($css as $c):
                $pos = strpos($c, "http");
                if ($pos === false) :
                    ?>
                    <link href="<?= base_url("assets/css/{$c}") ?>" rel="stylesheet">
                    <?php
                else:
                    ?>
                    <link href="<?= $c ?>" rel="stylesheet">
                <?php
                endif;
            endforeach;
            ?>
        <?php endif; ?>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="<?= base_url("assets/js/jquery.min.js") ?>"></script>
        <?= $configs['analytics'] ?>
        <?= $configs['remarketing'] ?>
    </head>

    <body>
