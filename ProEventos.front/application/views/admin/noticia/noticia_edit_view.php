<div class="container-fluid" id="template">
    <ol class="breadcrumb">
        <li>
            <a href="<?= base_url("admin") ?>">Admin</a>
        </li>
        <li>
            <a href="<?= base_url("admin/noticias") ?>">Notícias</a>
        </li>
        <li  class="active">Editar Notícia</li>
    </ol>
    <hr/>
    <h3>Editar Notícia</h3>
    <br/>
    <form method="post" action="<?= base_url("noticias/up/{$noticia['id']}") ?>" enctype="multipart/form-data" >
        <div class="row">
            <div class="col-xs-12 col-md-8 col-lg-9">
                <div class="form-group">
                    <input type="text" class="form-control" name="titulo" placeholder="Título" value="<?= $noticia['titulo'] ?>"/>
                </div>
                <div class="form-group">
                    <textarea class="summernotes" name="texto"><?= $noticia['texto'] ?></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 col-lg-3">
                <div class="form-group">
                    <button type="submit" class="btn btn-success form-control">Salvar</button>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Opções</b>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="datetimepicker-">Data de publicação</label>
                            <input type="text" class="form-control" name="criado" value="<?= datetime($noticia['criado']) ?>" id="datetimepicker"/>
                        </div>
                        <div class="form-group">
                            <label for="datetimepicker-">Modo de publicação</label>
                            <select name="publicado" class="form-control">
                                <option value="1" <?php if ($noticia['publicado'] == 1): ?>selected<?php endif; ?>>Publicado</option>
                                <option value="0" <?php if ($noticia['publicado'] == 0): ?>selected<?php endif; ?>>Rascunho</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <label for="img_destaque">Imagem destacada</label>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <input type="file" class="form-control" name="img_destaque" id="img_destaque"/>
                            <?php if ($noticia['img_destaque']): ?>
                                <Br/>
                                <img src="<?= base_url("assets/upload/thumb_265x236/{$noticia['img_destaque']}") ?>" class="img-responsive center-block"/>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    var base_url = "<?= base_url() ?>";
</script>