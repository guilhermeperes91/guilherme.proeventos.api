<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Login</title>

        <link href="<?= base_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet">

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            body{
                margin-top:60px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form action="<?= base_url("usuario/autenticar") ?>" method="post">
                        <div class="form-group">
                            <label for="login">Usuario</label>
                            <input type="text" class="form-control" name="login" id="login" />
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha"/>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="<?= base_url("assets/js/bootstrap.min.js") ?>"></script>
    </body>
</html>

