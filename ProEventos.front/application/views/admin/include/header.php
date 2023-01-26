<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Painel de administação</title>


        <link rel="icon" href="<?= base_url("assets/img/favicon.png") ?>">


        <link href="<?= base_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet">
        <link href="<?= base_url("assets/css/font-awesome.min.css") ?>" rel="stylesheet">
        <link href="<?= base_url("assets/css/summernote.css") ?>" rel="stylesheet">
        <link href="<?= base_url("assets/css/bootstrap-editable.css") ?>" rel="stylesheet">
        <link href="<?= base_url("assets/css/admin.css") ?>" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="<?= base_url("assets/js/jquery.min.js") ?>"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/ace/1.1.01/ace.js"></script>
        <style type="text/css">
            .editor {
                /** Setting height is also important, otherwise editor wont showup**/
                height: 300px;
            }
        </style>
        <?php if (!empty($css)): ?>
            <?php
            foreach ($css as $c):
                $pos = strpos($c, "http");
                if ($pos === false) :
                    ?>
                    <link href="<?= base_url("assets/{$c}") ?>" rel="stylesheet">
                    <?php
                else:
                    ?>
                    <link href="<?= $c ?>" rel="stylesheet">
                <?php
                endif;
            endforeach;
            ?>
        <?php endif; ?>
    </head>
    <body>